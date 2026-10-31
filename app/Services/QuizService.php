<?php

namespace App\Services;

use App\Models\QuizAttempt;
use App\ValueObjects\Exercise;
use App\ValueObjects\Module;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Random\Engine\Mt19937;
use Random\Randomizer;

/**
 * Hoofdstuktoets: alle vragen in één keer inleveren, beoordelen en de
 * modulevoortgang bijwerken. Geen blokkades: je mag altijd door.
 *
 * De eerste poging is de samengestelde toets uit quiz.json. Na het inleveren zie je
 * alle antwoorden; een herkansing met dezelfde vragen meet dan geheugen, geen
 * beheersing. Een herkansing trekt daarom een nieuwe selectie uit de toetsvragen
 * en de oefeningen van de module, zonder de vragen van de vorige poging.
 */
class QuizService
{
    public function __construct(
        private readonly ContentService $content,
        private readonly ExerciseService $exercises,
        private readonly ProgressService $progress,
    ) {}

    /**
     * De vragen van de volgende poging. Zolang je niet inlevert, blijft de selectie
     * dezelfde: ze volgt uit de vorige poging, niet uit het toeval van het moment.
     *
     * @return Collection<string, Exercise>
     */
    public function questions(Module $module): Collection
    {
        $quiz = $this->content->quiz($module) ?? abort(404);
        $previous = QuizAttempt::query()->where('module_id', $module->id)->latest('id')->first();

        if ($previous === null) {
            return $quiz['questions'];
        }

        $seen = collect($previous->answers)->pluck('id')->flip();
        $size = $quiz['questions']->count();

        $pool = $quiz['questions']
            ->merge($this->content->exercises($module)->filter(fn (Exercise $e) => $this->fitsQuiz($e)))
            ->reject(fn (Exercise $e) => $seen->has($e->id));

        $randomizer = new Randomizer(new Mt19937(crc32($module->id.'-'.$previous->id)));
        $selection = collect($randomizer->shuffleArray($pool->values()->all()))->take($size);

        // Een kleine module heeft te weinig nieuwe vragen: vul aan met de toetsvragen.
        if ($selection->count() < $size) {
            $selection = $selection->concat($quiz['questions']->reject(fn (Exercise $e) => $selection->contains('id', $e->id))
                ->take($size - $selection->count()));
        }

        return $selection->sortBy(fn (Exercise $e) => [$e->difficulty, $e->id])->keyBy('id');
    }

    public function isRetake(Module $module): bool
    {
        return QuizAttempt::query()->where('module_id', $module->id)->exists();
    }

    /**
     * De vragen van een ingeleverde poging, in de volgorde waarin ze gesteld zijn.
     *
     * @return Collection<string, Exercise>
     */
    public function questionsOf(QuizAttempt $attempt): Collection
    {
        return collect($attempt->answers)
            ->map(fn (array $answer) => $this->content->getExercise($answer['id']))
            ->filter()
            ->keyBy('id');
    }

    /**
     * Een oefening mag in een herkansing als ze automatisch wordt nagekeken en los van de les te begrijpen is.
     */
    private function fitsQuiz(Exercise $exercise): bool
    {
        return $exercise->type !== 'text'
            && ! $exercise->leansOnLesson();
    }

    /**
     * @param  array<string, string|array|null>  $answers  vraag-id => antwoord (array bij meerdere velden)
     */
    public function grade(Module $module, array $answers): QuizAttempt
    {
        $questions = $this->questions($module);

        return DB::transaction(function () use ($module, $questions, $answers) {
            $results = $questions->map(function (Exercise $question) use ($answers) {
                $raw = $answers[$question->id] ?? '';
                $answer = $question->hasListAnswer()
                    ? array_map(fn ($v) => trim((string) $v), (array) $raw)
                    : trim(is_array($raw) ? '' : (string) $raw);
                $outcome = $this->exercises->submit($question, $answer, ['context' => 'quiz']);

                return [
                    'id' => $question->id,
                    'answer' => $this->exercises->answerText($question, $answer),
                    'correct' => $outcome['correct'],
                    'valid' => $outcome['valid'],
                    'message' => $outcome['correct'] ? null : ($outcome['valid'] ? $outcome['message'] : 'Geen geldig antwoord.'),
                    'feedback' => $outcome['feedback'],
                ];
            })->values();

            $total = $results->count();
            $correct = $results->where('correct', true)->count();
            $score = $total > 0 ? (int) round($correct / $total * 100) : 0;

            $this->progress->recordQuizScore($module, $score);

            return QuizAttempt::query()->create([
                'module_id' => $module->id,
                'score' => $score,
                'correct' => $correct,
                'total' => $total,
                'answers' => $results->all(),
            ]);
        });
    }
}

<div class="my-8 flex flex-col gap-4 rounded-xl border border-ink/15 p-5 font-sans sm:flex-row sm:items-center sm:justify-between">
    <div>
        <p class="eyebrow">Hoofdstuktoets</p>
        <p class="mt-1 text-sm text-ink-soft">Laat zien wat je beheerst. Vanaf {{ config('course.completed_score') }}% is de module afgerond, vanaf {{ config('course.mastered_score') }}% beheerst.</p>
    </div>
    <a href="{{ route('quiz.show', $module->slug) }}" class="btn btn-primary shrink-0 no-underline">Start de toets <span aria-hidden="true">→</span></a>
</div>

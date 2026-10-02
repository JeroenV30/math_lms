@extends('layouts.app', ['title' => 'Voortgang'])

@section('content')
    <div class="container-page pt-12 pb-6 sm:pt-16">
        <p class="eyebrow">Persoonlijke leerdata</p>
        <h1 class="page-title mt-2">Voortgang</h1>
        <p class="mt-3 max-w-2xl font-serif text-lg text-muted">
            Je eigen dataset. In deel VII leer je hoe je zulke gegevens statistisch analyseert.
        </p>
    </div>

    <div class="container-page grid grid-cols-[minmax(0,1fr)] gap-6 lg:grid-cols-4">
        <div class="card p-5">
            <p class="eyebrow">Totaal gemaakte sommen</p>
            <p class="mt-2 font-serif text-3xl font-semibold text-ink tabular-nums">{{ number_format($stats['total_attempts'], 0, ',', '.') }}</p>
            <p class="mt-1 text-xs text-muted">{{ $stats['exercises'] }} verschillende opgaven</p>
        </div>
        <div class="card p-5">
            <p class="eyebrow">Correct eerste poging</p>
            <p class="mt-2 font-serif text-3xl font-semibold text-ink tabular-nums">{{ $stats['first_try'] }}%</p>
            <p class="mt-1 text-xs text-muted">zonder hint of oplossing</p>
        </div>
        <div class="card p-5">
            <p class="eyebrow">Correct na hulp</p>
            <p class="mt-2 font-serif text-3xl font-semibold text-ink tabular-nums">{{ $stats['after_help'] }}%</p>
            <p class="mt-1 text-xs text-muted">na hint, oplossing of nieuwe poging</p>
        </div>
        <div class="card p-5">
            <p class="eyebrow">Nog niet gelukt</p>
            <p class="mt-2 font-serif text-3xl font-semibold text-ink tabular-nums">{{ $stats['not_yet'] }}%</p>
            <p class="mt-1 text-xs text-muted">komt terug in de herhaling</p>
        </div>

        <section class="card p-6 lg:col-span-2" aria-labelledby="beheersing">
            <h2 id="beheersing" class="eyebrow">Beheersing per onderwerp</h2>
            @if ($mastery->isEmpty())
                <p class="mt-4 text-sm text-muted">Nog geen gegevens.</p>
            @else
                <div class="mt-5 space-y-4">
                    @foreach ($mastery as $topic)
                        <x-mastery-bar :label="$content->topicLabel($topic->topic)" :score="$topic->score" :href="route('practice.show', $topic->topic)" />
                    @endforeach
                </div>
            @endif
        </section>

        <section class="card grid content-start gap-6 p-6 lg:col-span-2" aria-label="Sterk en extra oefenen">
            <div>
                <h2 class="eyebrow">Sterk</h2>
                @if ($strong->isEmpty())
                    <p class="mt-2 text-sm text-muted">Nog geen onderwerpen boven de {{ config('course.mastered_score') }}%.</p>
                @else
                    <ul class="mt-2 space-y-1 font-serif text-ink">
                        @foreach ($strong as $topic)
                            <li>{{ $content->topicLabel($topic->topic) }} <span class="text-sm text-muted">{{ $topic->score }}%</span></li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <div>
                <h2 class="eyebrow">Extra oefenen</h2>
                @if ($weak->isEmpty())
                    <p class="mt-2 text-sm text-muted">Geen onderwerpen onder de {{ config('course.weak_threshold') }}%.</p>
                @else
                    <ul class="mt-2 space-y-1 font-serif text-ink">
                        @foreach ($weak as $topic)
                            <li><a href="{{ route('practice.show', $topic->topic) }}" class="hover:text-accent">{{ $content->topicLabel($topic->topic) }}</a> <span class="text-sm text-muted">{{ $topic->score }}%</span></li>
                        @endforeach
                    </ul>
                @endif
            </div>
            @if ($stats['by_day']->isNotEmpty())
                <div>
                    <h2 class="eyebrow">Sommen per dag</h2>
                    @php $maxDay = max(1, $stats['by_day']->max()); @endphp
                    <div class="mt-3 flex h-24 items-end gap-1.5" role="img" aria-label="Aantal sommen per dag, laatste 14 dagen">
                        @foreach ($stats['by_day'] as $day => $count)
                            <div class="flex flex-1 flex-col items-center gap-1" title="{{ \Illuminate\Support\Carbon::parse($day)->locale('nl')->isoFormat('D MMM') }}: {{ $count }}">
                                <div class="w-full max-w-6 rounded-t bg-accent/80" style="height: {{ max(4, $count / $maxDay * 80) }}px"></div>
                                <span class="text-[0.6rem] text-faint">{{ \Illuminate\Support\Carbon::parse($day)->format('j') }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </section>

        <section class="card p-6 lg:col-span-4" aria-labelledby="modules">
            <h2 id="modules" class="eyebrow">Modules</h2>
            <div class="mt-4 table-wrap border-0">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="border-b border-line text-left text-muted">
                            <th class="py-2 pr-4 font-medium">Module</th>
                            <th class="py-2 pr-4 font-medium">Status</th>
                            <th class="py-2 pr-4 font-medium">Beste toets</th>
                            <th class="py-2 pr-4 font-medium">Toetspogingen</th>
                            <th class="py-2 font-medium">Afgerond op</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($parts->flatMap(fn ($p) => $p['modules'])->filter->isAvailable() as $module)
                            @php $p = $moduleProgress->get($module->id); @endphp
                            <tr class="border-b border-line last:border-0">
                                <td class="py-2.5 pr-4"><a href="{{ route('module.show', $module->slug) }}" class="text-ink hover:text-accent">{{ $module->id }}. {{ $module->title }}</a></td>
                                <td class="py-2.5 pr-4"><span class="inline-flex items-center gap-2"><x-status-icon :status="$p?->status ?? 'not_started'" class="h-5 w-5" /> {{ ['not_started' => 'Niet gestart', 'started' => 'Bezig', 'completed' => 'Afgerond', 'mastered' => 'Beheerst'][$p?->status ?? 'not_started'] }}</span></td>
                                <td class="py-2.5 pr-4 tabular-nums">{{ $p?->score !== null ? $p->score.'%' : '—' }}</td>
                                <td class="py-2.5 pr-4 tabular-nums">{{ $p?->attempts ?? 0 }}</td>
                                <td class="py-2.5 text-muted">{{ $p?->completed_at?->locale('nl')->isoFormat('D MMMM YYYY') ?? '—' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </div>
@endsection

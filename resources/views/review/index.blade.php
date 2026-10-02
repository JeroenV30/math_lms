@extends('layouts.app', ['title' => 'Herhalen'])

@section('content')
    <div class="container-page max-w-3xl pt-10 sm:pt-14">
        <p class="eyebrow">Spaced repetition</p>
        <h1 class="page-title mt-2">Vandaag herhalen</h1>
        <p class="mt-3 font-serif text-lg text-muted">
            Oude stof komt terug voordat je die vergeet. De mix: vooral zwakke onderwerpen, wat normale herhaling en een beetje willekeurige oudere stof.
        </p>

        @if ($dueTopics->isNotEmpty())
            <ul class="mt-6 flex flex-wrap gap-2" aria-label="Onderwerpen die aan de beurt zijn">
                @foreach ($dueTopics as $topic)
                    <li class="badge {{ $topic->score < config('course.weak_threshold') ? 'border-danger/30 text-danger' : '' }}">
                        {{ $content->topicLabel($topic->topic) }} · {{ $topic->score }}%
                    </li>
                @endforeach
            </ul>
        @endif

        <div class="mt-10 space-y-5">
            @forelse ($items as $item)
                @php $module = $content->getModule($item['exercise']->moduleId); @endphp
                <div>
                    <p class="mb-2 text-xs text-muted">
                        <span class="font-semibold tracking-wide text-ink uppercase">Herhalingsvraag – module {{ $module->id }}</span>
                        · {{ $module->title }}
                        · {{ ['weak' => 'zwak onderwerp', 'normal' => 'normale herhaling', 'random' => 'oudere stof'][$item['reason']] }}
                    </p>
                    @include('exercises.card', ['exercise' => $item['exercise'], 'context' => 'review', 'state' => null])
                </div>
            @empty
                <div class="card p-6">
                    <p class="font-serif text-lg text-ink">Niets te herhalen op dit moment.</p>
                    <p class="mt-2 text-sm text-muted">
                        @if ($nextReview)
                            Het volgende onderwerp ({{ $content->topicLabel($nextReview->topic) }}) is {{ $nextReview->next_review_at->locale('nl')->diffForHumans() }} weer aan de beurt.
                        @else
                            Zodra je oefeningen maakt, plant het systeem herhalingen in.
                        @endif
                    </p>
                    <a href="{{ route('practice.index') }}" class="btn btn-secondary mt-5">Vrij oefenen</a>
                </div>
            @endforelse
        </div>

        @if ($items->isNotEmpty())
            <p class="mt-8 text-sm text-muted">Goed beantwoorde herhalingsvragen verdwijnen voor vandaag uit deze lijst. <a href="{{ route('review.index') }}" class="link">Lijst verversen</a></p>
        @endif
    </div>
@endsection

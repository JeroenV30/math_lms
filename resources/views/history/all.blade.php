@extends('layouts.app', ['title' => $page['title'] ?? 'Tijdlijn'])

@inject('markdown', 'App\Services\MarkdownRenderer')

@section('content')
    <x-page-header eyebrow="Tijdlijn van alle domeinen" :title="$page['title'] ?? 'Door de eeuwen'" :intro="$page['intro'] ?? null" eyebrow-class="text-history" />

    {{-- Filter per domein: een uitgezet domein verdwijnt van de tijdlijn, een tijdvak zonder zichtbare gebeurtenissen ook. --}}
    <div class="container-page mt-8" x-data="{ hidden: [], shows(id) { return ! this.hidden.includes(id) }, toggle(id) { this.hidden = this.shows(id) ? [...this.hidden, id] : this.hidden.filter(h => h !== id) } }">
        <div class="flex flex-wrap gap-2" role="group" aria-label="Domeinen tonen of verbergen">
            @foreach ($domains as $domain)
                <button type="button" class="btn btn-secondary gap-2" @click="toggle(@js($domain['id']))"
                        :class="shows(@js($domain['id'])) ? '' : 'opacity-50'" :aria-pressed="shows(@js($domain['id']))">
                    <x-domain-monogram :domain="$domain" size="xs" />
                    {{ $domain['name'] }}
                    <span class="badge tabular-nums">{{ $counts[$domain['id']] }}</span>
                </button>
            @endforeach
        </div>

        <div class="mt-10 *:max-w-4xl">
            @if ($periods->isEmpty())
                <p class="text-muted">De tijdlijn wordt nog gevuld.</p>
            @endif

            @foreach ($periods as $period => $events)
                <section class="mt-12 first:mt-0" aria-labelledby="period-{{ $loop->index }}"
                         x-show="@js($events->pluck('domain.id')->unique()->values()).some(id => shows(id))">
                    <h2 id="period-{{ $loop->index }}" class="mb-6 font-sans text-xs font-semibold tracking-[0.16em] text-history uppercase">{{ $period }}</h2>
                    <ol class="timeline-rail space-y-7">
                        @foreach ($events as $event)
                            <li class="relative" x-show="shows(@js($event['domain']['id']))">
                                <span class="timeline-dot" style="border-color: {{ $event['domain']['color'] }}" aria-hidden="true"></span>
                                <p class="flex flex-wrap items-baseline gap-x-2 text-sm">
                                    <span class="font-semibold text-history tabular-nums">{{ $event['year_label'] }}</span>
                                    <span class="text-xs font-medium" style="color: {{ $event['domain']['color'] }}">{{ $event['domain']['name'] }}</span>
                                </p>
                                <h3 class="mt-0.5 font-serif text-lg font-semibold text-ink">
                                    <a href="{{ route('history.index', ['domain' => $event['domain']['id']]) }}#{{ $event['id'] }}" class="hover:underline">{!! $markdown->inline($event['title']) !!}</a>
                                </h3>
                                <p class="mt-1 font-serif text-ink-soft">{!! $markdown->inline($event['summary'] ?? '') !!}</p>
                            </li>
                        @endforeach
                    </ol>
                </section>
            @endforeach
        </div>
    </div>
@endsection

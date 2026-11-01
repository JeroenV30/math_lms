@extends('layouts.app', ['title' => $section['title'] ?? 'Toepassingen'])

@section('content')
    <x-page-header level="home" :domain="null"
                   :eyebrow="$section['eyebrow'] ?? null"
                   :title="$section['title'] ?? 'Toepassingen'"
                   :intro="$section['intro'] ?? null" />

    <div class="container-page mt-10 space-y-12">
        @foreach ($groups as $group)
            <section @if ($group['id']) aria-labelledby="group-{{ $group['id'] }}" @endif>
                @if ($group['name'])
                    <div class="mb-4 max-w-3xl">
                        <h2 id="group-{{ $group['id'] }}" class="font-serif text-2xl font-semibold text-ink">{{ $group['name'] }}</h2>
                        @if ($group['intro'])
                            <p class="mt-1 text-sm leading-relaxed text-ink-soft">{{ $group['intro'] }}</p>
                        @endif
                    </div>
                @endif
                <ul class="grid gap-3 sm:grid-cols-2">
                    @foreach ($group['domains'] as $domain)
                        <li><x-domain-card :domain="$domain" /></li>
                    @endforeach
                </ul>
            </section>
        @endforeach
    </div>
@endsection

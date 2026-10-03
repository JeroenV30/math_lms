@inject('markdown', 'App\Services\MarkdownRenderer')

@if ($module->glossary)
    <aside class="callout callout-definition">
        <header class="callout-header">
            <span class="callout-label">Kernbegrippen</span>
            <span class="callout-title">De woorden van deze module</span>
        </header>
        <div class="callout-body">
            <dl class="grid gap-x-8 gap-y-3 sm:grid-cols-2">
                @foreach ($module->glossary as $entry)
                    <div>
                        <dt class="font-sans text-sm font-semibold text-ink">{!! $markdown->inline($entry['term']) !!}</dt>
                        <dd class="text-[0.98rem]">{!! $markdown->inline($entry['definition']) !!}</dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </aside>
@endif

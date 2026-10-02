@if ($module->learningGoals)
    <aside class="callout callout-summary not-prose">
        <header class="callout-header">
            <span class="callout-label">Leerdoelen</span>
            <span class="callout-title">Na deze module</span>
        </header>
        <div class="callout-body">
            <ul class="!list-none !pl-0 space-y-1.5">
                @foreach ($module->learningGoals as $goal)
                    <li class="flex gap-3"><span class="mt-[0.7em] h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span><span>{{ $goal }}</span></li>
                @endforeach
            </ul>
        </div>
    </aside>
@endif

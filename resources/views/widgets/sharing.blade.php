<x-widget title="Eerlijk verdelen met rest" component="sharing" :config="['total' => (int) ($params['total'] ?? 17), 'groups' => (int) ($params['groups'] ?? 5)]">
    <div class="flex flex-wrap items-center gap-x-4 gap-y-2">
        <label class="flex items-center gap-2">Aantal <input type="number" min="0" max="60" class="num-input w-20" x-model.number="total" @change="reset()"></label>
        <label class="flex items-center gap-2">Verdelen over <input type="number" min="1" max="8" class="num-input w-20" x-model.number="groups" @change="reset()"></label>
    </div>

    <div class="mt-5">
        <p class="text-xs font-semibold tracking-wide text-muted uppercase">Nog te verdelen: <span class="tabular-nums" x-text="left"></span></p>
        <div class="mt-2 flex min-h-6 flex-wrap gap-1.5" aria-hidden="true">
            <template x-for="i in range(left)" :key="'l' + i">
                <span class="h-3.5 w-3.5 rounded-full" :class="done ? 'bg-danger/60' : 'bg-history/70'"></span>
            </template>
        </div>
    </div>

    <div class="mt-5 grid gap-2" :style="`grid-template-columns: repeat(${Math.min(groups, 4)}, minmax(0, 1fr))`">
        <template x-for="g in range(groups)" :key="'g' + g">
            <div class="rounded-lg border border-line bg-mist/50 p-2.5">
                <p class="text-xs text-muted">Groep <span x-text="g + 1"></span></p>
                <div class="mt-2 flex min-h-4 flex-wrap gap-1">
                    <template x-for="i in range(rounds)" :key="'d' + i">
                        <span class="h-3.5 w-3.5 rounded-full bg-accent/70"></span>
                    </template>
                </div>
                <p class="mt-1.5 text-sm font-semibold text-ink tabular-nums" x-text="rounds"></p>
            </div>
        </template>
    </div>

    <p class="mt-4 text-sm text-ink-soft" aria-live="polite">
        <span x-show="!done">Elke ronde krijgt iedere groep er één bij.</span>
        <span x-show="done">
            Elke groep krijgt <strong class="text-ink" x-text="maxRounds"></strong>; er blijft <strong class="text-ink" x-text="remainder"></strong> over.
            <span class="tabular-nums" x-text="`${total} = ${maxRounds} × ${groups} + ${remainder}`"></span>
        </span>
    </p>

    <div class="mt-3 flex gap-2">
        <button type="button" class="btn btn-primary" @click="deal()" :disabled="done">Deel een ronde uit</button>
        <button type="button" class="btn btn-ghost" @click="dealAll()" x-show="!done">Alles verdelen</button>
        <button type="button" class="btn btn-ghost" @click="reset()" x-show="rounds > 0">Opnieuw</button>
    </div>
</x-widget>

@props(['items', 'uid', 'name' => null])
@inject('markdown', 'App\Services\MarkdownRenderer')

{{-- Ordenen: items verschuiven met knoppen (werkt met toetsenbord en op een telefoon).
     Verwacht in de omliggende Alpine-scope: answer (array), move(i, stap), isCorrect en status. --}}
<ol class="order-list w-full" id="{{ $uid }}-order" aria-label="Zet de items in de goede volgorde"
    x-data="{ html: @js(collect($items)->mapWithKeys(fn ($item) => [$item => $markdown->inline($item)])) }">
    <template x-for="(item, i) in answer" :key="item">
        <li class="order-item" :class="{ 'order-correct': isCorrect, 'order-wrong': status === 'incorrect' }">
            <span class="order-index" x-text="i + 1"></span>
            <span class="order-text" x-html="html[item]"></span>
            <span class="order-buttons">
                <button type="button" class="order-btn" @click="start(); move(i, -1)" :disabled="i === 0 || isCorrect" :aria-label="'Omhoog: ' + item">↑</button>
                <button type="button" class="order-btn" @click="start(); move(i, 1)" :disabled="i === answer.length - 1 || isCorrect" :aria-label="'Omlaag: ' + item">↓</button>
            </span>
            @if ($name)
                <input type="hidden" name="{{ $name }}" :value="item">
            @endif
        </li>
    </template>
</ol>

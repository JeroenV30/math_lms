<x-widget title="Boxplot en spreiding" component="boxplot" :config="['values' => $params['values'] ?? '2; 4; 4; 4; 5; 5; 7; 9']">
    <label class="block text-sm font-medium" x-id="['boxplot-values']" :for="$id('boxplot-values')">
        Waarden, gescheiden door puntkomma’s
        <input type="text" class="num-input mt-2 w-full" x-model="input" :id="$id('boxplot-values')" placeholder="2; 4; 6; 8">
    </label>
    <p class="mt-2 text-xs text-muted">Maximaal 100 getallen. Bij een oneven aantal wordt de middelste waarde buiten de kwartielhelften gehouden. De snorren lopen naar minimum en maximum.</p>
    <svg :view-box.camel="'0 0 620 165'" class="mt-4 w-full" role="img" aria-label="Boxplot van de ingevoerde waarden" x-html="svg"></svg>
    <p x-show="!stats" class="text-sm text-muted">Vul minstens één getal in.</p>
    <dl class="mt-3 grid grid-cols-2 gap-3 text-sm sm:grid-cols-3" x-show="stats">
        <div><dt>Aantal</dt><dd class="font-semibold" x-text="stats?.n"></dd></div>
        <div><dt>Gemiddelde</dt><dd class="font-semibold" x-text="fmt(stats?.mean)"></dd></div>
        <div><dt>Interkwartielafstand</dt><dd class="font-semibold" x-text="fmt(stats?.iqr)"></dd></div>
        <div><dt>Populatievariantie (delen door n)</dt><dd class="font-semibold" x-text="fmt(stats?.variance)"></dd></div>
        <div><dt>Populatiestandaardafwijking</dt><dd class="font-semibold" x-text="fmt(stats?.sd)"></dd></div>
        <div><dt>Steekproefstandaardafwijking (delen door n − 1)</dt><dd class="font-semibold" x-text="fmt(stats?.sampleSd)"></dd></div>
    </dl>
</x-widget>

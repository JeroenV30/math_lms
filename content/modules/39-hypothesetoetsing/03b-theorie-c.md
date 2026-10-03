# Fouten, power en verantwoord rapporteren

Een toets kan een verkeerde beslissing geven. Dat volgt uit de overlap tussen
de verdeling onder $H_0$ en die onder een werkelijk alternatief.

| Werkelijkheid | Niet verwerpen | Verwerpen |
|---|---|---|
| $H_0$ waar | juiste beslissing | type-I-fout |
| alternatief waar | type-II-fout | juiste beslissing |

De type-I-foutkans wordt onder het nulmodel begrensd door $\alpha$.
De type-II-foutkans $\beta$ hangt af van het **specifieke** werkelijke effect,
de steekproefomvang, de spreiding en de toets. Power is $1-\beta$.
Er is geen enkel vast powergetal dat voor alle mogelijke effecten geldt.

{{ exercises: 39-011, 39-012, 39-013 }}

Een grotere steekproef vergroot vaak de power tegen een gegeven effect.
Een strengere $\alpha$ verlaagt de kans op vals alarm, maar kan bij dezelfde
data de kans vergroten dat je een echt effect mist. Ontwerp daarom vooraf
een studie rond het kleinste effect dat inhoudelijk relevant is.

## Veel vragen tegelijk

Bij twintig onafhankelijke ware nulhypothesen en $\alpha=0{,}05$ is de kans
op minstens één vals alarm $1-0{,}95^{20}\approx0{,}642$.
Een p-waarde van 0,04 wordt minder overtuigend wanneer je tientallen
uitkomsten probeerde en alleen de kleinste rapporteert.

Bonferroni gebruikt $\alpha/m$ per toets voor een familie van $m$ toetsen.
Deze bovengrens werkt ook zonder onafhankelijkheid, maar kan conservatief
zijn. Welke vragen tot dezelfde familie horen, volgt uit je onderzoeksopzet.

{{ exercise: 39-014 }}

## Rapporteer de gevolgde procedure

Noem de onderzoeksvraag, het ontwerp, de groepsaantallen, het effect met
eenheden, het interval, de toets, de p-waarde en de beperkingen. Maak
verkennende analyses herkenbaar. Stop niet met meten zodra een gunstige
p-waarde verschijnt, tenzij je een passende sequentiële procedure gebruikt.

{{ exercise: 39-019 }}

De [ASA-verklaring over p-waarden](https://www.amstat.org/asa/files/pdfs/P-ValueStatement.pdf)
benadrukt dat wetenschappelijke conclusies niet op een drempel alleen kunnen
rusten. Je moet de gegevens, het ontwerp en de inhoudelijke context samen beoordelen.

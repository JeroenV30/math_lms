# Je eigen onderzoek uitvoeren

## Zelfstandige opdracht

Maak een rapport van ongeveer 800–1200 woorden met twee of drie grafieken.
Gebruik de lokale CSV, maar kies naast de uitgewerkte Adélie-vergelijking
één eigen **verkennende** vraag. Bijvoorbeeld: verschillen Gentoo-mannen
en -vrouwen in lichaamsgewicht? Of verandert de samenhang tussen snavellengte
en gewicht als je per soort kijkt?

Neem je vraag en analyseplan op vóór je de nieuwe berekening uitvoert.
Houd de oorspronkelijke dataset intact. Schrijf het rapport zelf; de
tekstvragen slaan je redenering op en geven daarna modelpunten om mee te
vergelijken. Zij worden niet automatisch op inhoud beoordeeld.

:::practice Wat je inlevert
Een vraag met populatie, een controle van de data, passende grafieken,
kengetallen met eenheden en aantallen, één verantwoorde inferentiële of
modelmatige analyse, een conclusie en een beperkingenparagraaf.
Een kleine p-waarde is geen verplicht resultaat.
:::

## De referentieanalyse narekenen

Je kunt de berekeningen uitvoeren in een spreadsheet met functies voor
gemiddelde, steekproefstandaardafwijking en regressie. Het modelantwoord
staat al in de lessen. Wie de volledige berekening met Python wil herhalen,
kan vanuit de projectmap optioneel uitvoeren:

```text
python content/modules/42-eindonderzoek/analyse.py
```

Dit script gebruikt alleen de standaardbibliotheek, leest de lokale CSV en
wijzigt geen bestanden of leergegevens. Het toont ook de Welch-p-waarde,
het interval en de regressie. `--json` geeft alleen machineleesbare uitkomsten.
De versie met `--data` is bedoeld voor een bestand met hetzelfde codeboek,
niet voor een willekeurige dataset.

## Beoordelen met een rubric

Geef jezelf per onderdeel 0 (ontbreekt), 1 (gedeeltelijk) of 2 (goed
navolgbaar): onderzoeksvraag, datacontrole, visualisatie, methode,
berekeningen, interpretatie, beperkingen en reproduceerbaarheid. Bespreek
bij ieder zwak onderdeel wat je zou verbeteren. Deze zelfbeoordeling staat
naast de automatisch nagekeken hoofdstuktoets.

{{ exercise: 42-020 }}

Een goed vervolgontwerp pakt selectie en afhankelijkheid aan. Alleen meer
metingen verzamelen zonder te weten welke dieren en locaties ze voorstellen,
maakt de kernvraag niet sterker onderbouwd.

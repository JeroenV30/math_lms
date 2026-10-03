# Samenvatting

Deze module ging over de eerste stap van elke statistiek: losse waarnemingen ordenen, zichtbaar maken en samenvatten, zonder belangrijke verschillen te verbergen. Hieronder staat wat je na deze module moet beheersen.

:::summary De kern in vijf zinnen
- Bepaal eerst wat één **waarneming** is en welke **variabele** je vastlegt; categorische en numerieke variabelen vragen om een andere aanpak.
- Een **frequentietabel** telt hoe vaak elke waarde voorkomt; relatieve frequenties ($f/n$) maken groepen van verschillende grootte vergelijkbaar.
- Staven vergelijken categorieën, lijnen tonen verloop in de tijd, cirkels tonen de verdeling van één geheel; controleer altijd titel, assen, eenheid, schaal en nulpunt.
- **Gemiddelde**, **mediaan** en **modus** beantwoorden verschillende vragen; bij uitschieters of een scheve verdeling liggen gemiddelde en mediaan uit elkaar.
- Een conclusie noemt de groep, de periode en de gebruikte maat, en zegt niet meer dan de gegevens toelaten.
:::

## Tabellen

| Begrip | Betekenis | Voorbeeld |
|---|---|---|
| Frequentie $f$ | Hoe vaak een waarde of categorie voorkomt | Fiets: 8 |
| Relatieve frequentie | $f/n$, vaak als percentage | $8/20 = 40\%$ |
| Cumulatieve frequentie | Aantal waarnemingen tot en met een waarde of klasse | 14 cursisten jonger dan 40 |
| Klasse | Interval zonder overlap en zonder gaten | 10 tot 20 minuten (10 hoort erbij, 20 niet) |

Turven in bosjes van vijf voorkomt telfouten; controleer daarna of de som van de frequenties gelijk is aan het aantal waarnemingen.

## Diagrammen

- **Staafdiagram**: categorieën vergelijken. De as begint bij nul, anders overdrijft de tekening.
- **Beelddiagram**: tel de plaatjes en vermenigvuldig met de waarde per plaatje. Een plaatje dat in twee richtingen groeit, overdrijft: twee keer zo lang en hoog is vier keer zoveel oppervlakte.
- **Lijndiagram**: verloop in de tijd. De lijn tussen twee metingen is een aanname. Ongelijke tijdstappen horen ongelijke afstanden te krijgen.
- **Cirkeldiagram**: delen van één geheel. Sectorhoek $= \text{aandeel} \times 360^\circ$; 1% is $3{,}6^\circ$.

## Centrummaten en spreiding

| Maat | Werkwijze | Let op |
|---|---|---|
| Gemiddelde | Som gedeeld door aantal: $\bar{x} = \dfrac{x_1 + \dots + x_n}{n}$ | Gevoelig voor uitschieters |
| Mediaan | Sorteer; middelste waarde, of gemiddelde van de twee middelste | Altijd eerst sorteren; plaats $\tfrac{n+1}{2}$ |
| Modus | Waarde met de hoogste frequentie | De waarde, niet de frequentie; niet de grootste waarde |
| Spreidingsbreedte | Maximum min minimum | Hangt alleen van de uitersten af |

Drie formules die je moet kunnen gebruiken:

$$
\text{totaal} = \bar{x} \times n \qquad\quad \bar{x} = \frac{\sum f_i x_i}{\sum f_i} \qquad\quad \bar{x}_{\text{samen}} = \frac{n_A \bar{x}_A + n_B \bar{x}_B}{n_A + n_B}
$$

De eerste gebruik je om een totaal of een ontbrekende waarde terug te vinden. De tweede is het gemiddelde uit een frequentietabel. De derde voegt twee groepen samen; het **gemiddelde van de gemiddelden** is alleen goed als de groepen even groot zijn.

:::warning De typische fouten op een rij
- De mediaan nemen zonder eerst te sorteren.
- Bij een even aantal één van de twee middelste waarden nemen in plaats van hun gemiddelde.
- Twee groepsgemiddelden middelen terwijl de groepen verschillend groot zijn.
- De modus verwarren met de hoogste waarde of met de hoogste frequentie.
- Een ontbrekende waarde als nul meetellen.
- Een afgekapte as over het hoofd zien en het verschil tussen staven overschatten.
:::

## Wat je nu kunt

- Je maakt een turftabel en frequentietabel, met relatieve en cumulatieve frequenties, en deelt numerieke gegevens in klassen in.
- Je leest staaf-, beeld-, lijn- en cirkeldiagrammen af, berekent sectorhoeken en herkent misleidende weergaven.
- Je berekent gemiddelde, mediaan, modus en spreidingsbreedte, ook uit een frequentietabel, en kiest de maat die past bij de vraag.
- Je gebruikt *totaal = gemiddelde × aantal* om groepen te combineren en ontbrekende waarden te vinden.
- Je vertelt hoe het samenvatten van gegevens zich ontwikkelde: van Romeinse census en Domesday Book via Graunts sterftelijsten en Playfairs diagrammen naar Nightingale en Quetelet.

## Hoe verder?

Deze module is de eerste brug naar de statistiek. In module 17 (coördinaten en grafieken) wordt het lijndiagram een grafiek van een formule. In module 23 (kansrekening) zie je relatieve frequenties terug als schatting van een kans. In module 24 (beschrijvende statistiek) komen kwartielen, de boxplot en de standaardafwijking erbij, en in module 35 (data-analyse) werk je met grote datasets en spoor je misleiding systematisch op.

Ben je klaar? Maak dan de hoofdstuktoets: 15 vragen over alle onderdelen van deze module.

{{ quiz }}

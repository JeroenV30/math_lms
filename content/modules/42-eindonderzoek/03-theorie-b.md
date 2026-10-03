# Een groepsverschil onderzoeken

Filter eerst op soort Adelie en daarna op geslacht. Er zijn 26 mannen en
26 vrouwen, met geldige gewichten. Maak per groep een stippendiagram of
boxplot en kijk naar vorm en extreme waarden. Een tabel met gemiddelden
vervangt die controle niet.

| Groep | n | Gemiddelde (g) | s (g) | Mediaan (g) |
|---|---|---|---|---|
| Adélie man | 26 | 3995,19 | 392,49 | 3987,5 |
| Adélie vrouw | 26 | 3334,62 | 282,50 | 3337,5 |

{{ exercises: 42-009, 42-010, 42-011 }}

## De modelvraag

Toets $H_0:\mu_\mathrm{man}-\mu_\mathrm{vrouw}=0$ tegen een tweezijdig
alternatief. Gebruik Welch omdat je twee ongepaarde groepen vergelijkt en
geen gelijke varianties hoeft aan te nemen. De modelvoorwaarden uit module
39 blijven van toepassing, inclusief onafhankelijkheid van de dieren.

Het verschil is ongeveer 660,58 g. De standaardfout bereken je met de
**onafgeronde** groepsstandaardafwijkingen:

$$
SE=\sqrt{\frac{s_\mathrm{man}^2}{26}+\frac{s_\mathrm{vrouw}^2}{26}}
\approx94{,}84\text{ g},\qquad t\approx6{,}965.
$$

{{ exercises: 42-012, 42-013 }}

De Welch-vrijheidsgraden zijn ongeveer 45,42. Het tweezijdige p-getal is
ongeveer $1{,}09\cdot10^{-8}$ onder dit model. Een berekend p-getal is
niet letterlijk nul, ook wanneer software op weinig decimalen 0,000 toont.
Het 95%-interval voor het verschil is ongeveer [469,61;851,54] g.

## Van resultaat naar begrensde conclusie

"In de gemeten Adélie-groep uit 2009 waren mannen gemiddeld ongeveer 661 g
zwaarder dan vrouwen. Onder een onafhankelijk Welch-model is het
95%-interval voor het verschil ongeveer 470 tot 852 g. De veldselectie en
mogelijke afhankelijkheid begrenzen generalisatie; dit is geen experiment
naar het effect van geslacht."

{{ exercises: 42-014, 42-015 }}

De [NIST-Welch-documentatie](https://www.itl.nist.gov/div898/handbook/eda/section3/eda353.htm)
geeft de gebruikte formules. De lokale referentieanalyse reproduceert de
getallen uit het CSV-bestand; zij is geen bewijs dat de velddata aan iedere
modelaanname voldoen.

# Voorwaardelijke kansen en Bayes’ regel

$P(D\mid H)$ betekent de kans op gegevens D **als H geldt**.
$P(H\mid D)$ betekent de kans op H **na het waarnemen van D**.
Deze kansen hebben verschillende referentiegroepen.

Begin met de productregel:
$P(H\cap D)=P(D\mid H)P(H)=P(H\mid D)P(D)$.
Als $P(D)>0$, volgt daaruit:

$$
P(H\mid D)=\frac{P(D\mid H)P(H)}{P(D)}.
$$

Bij twee elkaar uitsluitende, uitputtende hypothesen is
$P(D)=P(D\mid H)P(H)+P(D\mid\neg H)P(\neg H)$.
De noemer telt alle manieren waarop de data kunnen ontstaan.

## Rekenen met aantallen

:::example Een sensor met valse alarmen
Neem een denkbeeldige groep van 1000 onderdelen, met 5% defecten.
Er zijn dan 50 defecte en 950 goede onderdelen. Bij detectiekans 90%
krijg je 45 echte alarmen. Bij 10% valse alarmen krijg je ook 95 alarmen
onder goede onderdelen. Van alle 140 alarmen zijn er maar 45 echt defect:
$P(\text{defect}\mid\text{alarm})=45/140\approx0{,}3214$.
:::

{{ exercises: 41-001, 41-002, 41-003, 41-004, 41-005, 41-006 }}

De getallen zijn verwachte frequenties in een denkbeeldige groep, geen belofte
over een specifieke partij van precies 1000 stuks. Ze vormen een inzichtelijke
manier om dezelfde kansrekening uit te voeren.

## Prior, likelihood en posterior

De prior is $P(H)$ vóór de nieuwe data. De likelihood is $P(D\mid H)$ als
functie van de hypothese. De posterior is $P(H\mid D)$ na het bijwerken.
Een likelihood hoeft over hypothesen niet op te tellen tot 1; zij is op
zichzelf geen kansverdeling over H.

{{ exercises: 41-007, 41-008 }}

Voor continue data gebruik je een dichtheid als likelihood. Bayes werkt dan
met integralen voor de normalisatie. Een grote dichtheid kan boven 1 liggen,
net als in module 36; dat is geen ongeldige kans.

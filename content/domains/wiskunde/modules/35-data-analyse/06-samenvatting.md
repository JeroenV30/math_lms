# Samenvatting — betrouwbare conclusies beginnen bij de data

Een dataset bestaat uit waarnemingen en variabelen. Bepaal eerst wat één rij
voorstelt, hoe de gegevens zijn verzameld en wat de waarden betekenen. Een
identificatienummer is een label, ook als het uit cijfers bestaat.

## Van ruwe tabel naar conclusie

1. Bepaal de onderzoeksvraag, de waarnemingseenheid, meetniveaus en eenheden.
2. Controleer ontbrekende waarden, codes, duplicaten en onmogelijke waarden.
3. Bewaar de ruwe gegevens en documenteer iedere correctie.
4. Bekijk de verdeling met een geschikte grafiek. Vergelijk groepen afzonderlijk
   wanneer hun samenstelling de uitkomst kan beïnvloeden.
5. Bereken passende centrum- en spreidingsmaten. Mediaan en IQR zijn robuuster
   dan gemiddelde en standaardafwijking bij scheve data of extreme waarden.
6. Onderzoek afwijkende waarden. Een uitschieter is een aanleiding om te kijken,
   geen automatische reden om een rij te verwijderen.
7. Rapporteer uitkomsten met eenheden, aantallen, beperkingen en de gemaakte keuzes.

:::formula Drie gereedschappen
$$
\mathrm{IQR}=Q_3-Q_1,\qquad
[Q_1-1{,}5\,\mathrm{IQR};\ Q_3+1{,}5\,\mathrm{IQR}],\qquad
z=\frac{x-\bar{x}}{s}.
$$
Een waarde buiten het interval is volgens de Tukey-regel een uitschieter.
De grenzen zelf horen bij het interval. De z-regel kan door maskering en kleine
steekproeven afwijkende waarden missen; bij $s=0$ kun je geen z-score berekenen.
:::

## Wat moet je kunnen uitleggen?

Je kiest tussen staafdiagram, histogram, boxplot, spreidingsdiagram en lijndiagram
op basis van de vraag. Je herkent afgekapte assen en pictogrammen waarvan de
oppervlakte verkeerd schaalt. Een verschil in procentpunten is iets anders dan
een relatieve procentuele groei.

Correlatie beschrijft samenhang en bewijst geen oorzaak. Een verstorende variabele
kan een verband laten ontstaan of omdraaien. Bij Simpsons paradox verschillen de
gewichten van de deelgroepen. Anscombes kwartet laat zien dat bijna gelijke
kengetallen heel verschillende datasets kunnen samenvatten.

:::question Controleer je begrip
Kun je een analyse navolgbaar opschrijven, inclusief de data die je wegliet en
de reden daarvoor? Kun je uitleggen waarom je grafiek en kengetallen passen bij
de waarnemingen? Zo ja, dan ben je klaar om in deel VII van beschrijven naar
uitspraken over onzekerheid te gaan.
:::

{{ quiz }}

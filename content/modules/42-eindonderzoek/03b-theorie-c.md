# Samenhang onderzoeken en rapporteren

Selecteer de 52 Adélie-dieren met vleugellengte en gewicht. Teken een
spreidingsdiagram met vleugellengte op de horizontale as en gewicht op de
verticale as. Markeer geslacht als dat mogelijk is. Kijk naar afzonderlijke
groepen, kromming en afwijkende punten voordat je de lijn berekent.

De eenvoudige regressie over deze 52 dieren luidt ongeveer:

$$
\widehat{\text{gewicht}}=-3759{,}79+38{,}6548\cdot\text{vleugellengte}.
$$

De helling heeft eenheid g/mm. Het intercept hoort bij een vleugellengte van
nul, ver buiten het gemeten bereik, en heeft hier geen biologische betekenis.
Bij 200 mm voorspelt het model ongeveer 3971 g.

{{ exercises: 42-016, 42-017, 42-018 }}

r is ongeveer 0,506 en R² ongeveer 0,256. De lijn verklaart dus ongeveer
25,6% van de gekwadrateerde gewichtsvariatie in deze geselecteerde data.
Dat is geen claim dat vleugellengte 25,6% van de massa veroorzaakt.
Geslacht en lichaamsbouw kunnen beide metingen beïnvloeden.

## Een onderzoeksrapport opbouwen

Gebruik deze volgorde:

1. Vraag, doelgroep en onderscheid tussen primaire en verkennende analyse.
2. Bron, jaarselectie, waarnemingseenheid, codeboek en ontbrekende data.
3. Grafieken en beschrijvende kengetallen per relevante groep.
4. Model, aannames, toets of schatting, effect en onzekerheid.
5. Inhoudelijke conclusie en grenzen van generalisatie en causaliteit.
6. Reproduceerbare werkwijze en een voorstel voor vervolgonderzoek.

{{ exercise: 42-019 }}

:::warning Geen conclusie uit een getal alleen
Een klein p-getal zegt niet dat de veldselectie representatief is. Een hoge
R² zou evenmin onafhankelijkheid of causaliteit bewijzen. Maak duidelijk
welke onzekerheid in je formule zit en welke onzekerheid door het ontwerp
niet wordt beschreven.
:::

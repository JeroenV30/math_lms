# Van mogelijk naar waarschijnlijk

Rond 1650 stelde een Franse edelman en bekwaam gokker, de Chevalier de Méré, twee vragen die hem niet loslieten. De eerste: als je vier keer met één dobbelsteen gooit, is de kans op minstens één zes dan groter dan een half? Hij wist uit ervaring dat hij daarop kon wedden en op de lange duur winst maakte. De tweede vraag leek erg op de eerste: als je vierentwintig keer gooit met twee dobbelstenen, is de kans op minstens één dubbele zes dan ook groter dan een half? Zijn redenering zei van wel, zijn portemonnee zei van niet. Hij legde het probleem voor aan Blaise Pascal, en Pascal schreef erover aan Pierre de Fermat. Uit die briefwisseling groeide in 1654 een nieuw vak: de kansrekening.

Het bijzondere is dat dit vak zo laat ontstond. Mensen dobbelden al duizenden jaren; er zijn dobbelstenen gevonden die ouder zijn dan het schrift. Maar nadenken over *hoe waarschijnlijk* iets is, vroeg om een nieuw soort wiskunde. Een kans is geen meting en geen telling van iets dat al gebeurd is. Het is een getal dat je toekent aan iets dat nog gaat gebeuren, of nooit zal gebeuren, en dat toch bruikbaar moet zijn.

:::question Denk eerst zelf na
Je gooit vier keer met één eerlijke dobbelsteen. Wat is volgens jou waarschijnlijker: dat er **minstens één zes** valt, of dat er **helemaal geen zes** valt? En hoe zou je dat uitrekenen zonder het duizend keer te proberen? Noteer je schatting. In les 4 komen we er exact op terug, en in les 6 zie je waarom dit voor Pascal en Fermat zo'n lastig probleem was.
:::

## Waarom bestaat deze wiskunde?

Er zijn vier soorten situaties waarin je niet precies weet wat er gaat gebeuren en toch moet beslissen.

Ten eerste **spel**: hoeveel is een inzet waard als het spel halverwege wordt afgebroken? Dat was het vraagstuk van Pascal en Fermat. Ten tweede **verzekeren en rentmeesteren**: een reder die een schip met lading wil verzekeren, moet de kans op schipbreuk kunnen inschatten, ook al weet niemand of dit ene schip zal vergaan. Ten derde **meten**: de uitkomst van een experiment verschilt telkens een beetje, en je wilt weten wanneer een verschil toeval is en wanneer het iets betekent. Ten vierde **beslissen op basis van testen**: een medische test slaat aan, maar wat zegt dat precies over de patiënt? Aan dat laatste besteden we aandacht in les 7, als vooruitblik op module 41.

In alle vier de gevallen is het antwoord geen voorspelling van één uitkomst maar een uitspraak over *hoe vaak* een uitkomst zou optreden. Die verschuiving, van "wat gebeurt er?" naar "met welke kans?", is de kern van dit hoofdstuk.

## Twee manieren om aan een kans te komen

Een kans is een getal tussen 0 en 1. Kans 0 betekent dat iets binnen het gekozen model onmogelijk is, kans 1 dat het zeker is. Je kunt dat getal op twee manieren vinden, en een goed begrip van die twee manieren voorkomt veel verwarring.

**Eerste manier: tellen.** Een eerlijke dobbelsteen heeft zes mogelijke uitkomsten die alle even waarschijnlijk zijn. De kans op een even getal is dan het aantal gunstige uitkomsten gedeeld door het aantal mogelijke uitkomsten:

$$
P(\text{even}) = \frac{\text{gunstig}}{\text{mogelijk}} = \frac{3}{6} = \frac{1}{2}.
$$

Dit is de *klassieke* kansdefinitie, en je gebruikt haar al vanaf je eerste ontmoeting met een dobbelsteen. Let op de voorwaarde die we steeds zullen herhalen: alle afzonderlijke uitkomsten moeten **even waarschijnlijk** zijn. Zonder die voorwaarde is "gunstig gedeeld door mogelijk" onzin.

**Tweede manier: meten.** Gooi je een gewone drukknop op de grond, dan landt hij op zijn rug of op zijn kant. Er is geen symmetrie die zegt dat die twee uitkomsten even waarschijnlijk zijn. Hier blijft alleen waarnemen over. Je gooit de knop 500 keer, telt hoe vaak hij op zijn rug landt, en deelt dat aantal door 500. Dat quotiënt heet de **relatieve frequentie**:

$$
\text{relatieve frequentie} = \frac{\text{aantal keer dat de gebeurtenis optrad}}{\text{aantal proeven}}.
$$

De twee manieren zijn verbonden door een merkwaardige eigenschap van toeval, die Jacob Bernoulli omstreeks 1700 bewees en die de **wet van de grote aantallen** heet. Intuïtief zegt zij: naarmate je een experiment vaker herhaalt, ligt de relatieve frequentie met grote waarschijnlijkheid steeds dichter bij de theoretische kans. Let op de formulering. De wet zegt niet dat het verschil precies nul wordt, en ook niet dat afwijkingen "vanzelf worden gecompenseerd". Over dat laatste misverstand lees je meer in les 7.

:::example Verwachten is niet voorspellen
Je gooit een eerlijke dobbelsteen 600 keer. Je verwacht ongeveer $600\times\frac16=100$ zessen. Dat betekent niet dat er precies 100 vallen. Het is heel gewoon dat het er 93 of 108 zijn. Wat de wet van de grote aantallen wel zegt, is dat het *aandeel* zessen, dus de relatieve frequentie, zich op de lange duur rond $\frac16\approx0{,}167$ stabiliseert.
:::

Probeer het zelf uit. De volgende simulatie gooit een dobbelsteen zo vaak als je wilt en zet de relatieve frequentie van elk aantal ogen naast de theoretische kans. Begin met 10 worpen en ga dan naar 1000. Let op hoe de staafjes bij weinig worpen ver van elkaar liggen en bij veel worpen naar elkaar toe kruipen.

{{ widget: dice dice=1 seed=7 }}

## Kansen als percentage

In de praktijk hoor je kansen zelden als breuk. Een weerbericht spreekt van 30% kans op regen. Dat is hetzelfde getal in een andere vorm: $30\%=\frac{30}{100}=0{,}3$. Het honderdveld hieronder laat zien dat 35 van de 100 vakjes gekleurd zijn: een kans van $0{,}35=\frac{7}{20}=35\%$. Met een kans als aandeel van een geheel kun je dus alles wat je bij breuken en procenten hebt geleerd opnieuw gebruiken.

{{ widget: percent-grid value=35 }}

{{ exercises: 23-001, 23-002, 23-003 }}

## Wat je in dit hoofdstuk leert

We bouwen het vak op in kleine stappen. Eerst leg je vast wat een uitkomstenruimte en een gebeurtenis is (les 2). Dan leer je slim tellen, met permutaties, combinaties en de driehoek van Pascal (les 3). Vervolgens combineer je gebeurtenissen met "of", "en" en "niet" (les 4), en reken je met kansbomen, ook als de kansen onderweg veranderen (les 5). Les 6 gaat over Pascal, Fermat, Huygens en Bernoulli, en in les 7 pas je alles toe op de verjaardagsparadox, de gokkersdwaling en de medische test.

{{ goals }}

{{ glossary }}

:::example Niet elke indeling is eerlijk verdeeld
‘Even’ en ‘oneven’ zijn twee categorieën met gelijke kans bij een eerlijke dobbelsteen. ‘Zes’ en ‘geen zes’ zijn ook twee categorieën, maar hun kansen zijn $\frac16$ en $\frac56$. Het tellen van categorieën is dus niet genoeg: je telt *uitkomsten*, en alleen als die even waarschijnlijk zijn, mag je gunstig delen door mogelijk. Wie zegt "het is 50-50, want het gebeurt of het gebeurt niet", maakt precies deze denkfout.
:::

{{ exercises: 23-048, 23-049 }}

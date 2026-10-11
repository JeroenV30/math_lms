# Een oppervlaktebewijs

Tot nu toe heb je de stelling gecontroleerd bij een paar driehoeken: 3-4-5, 5-12-13, 6-8-10. Elke controle klopt, en dat voelt overtuigend. Maar in de wiskunde is een rij gelukte voorbeelden nog geen bewijs. Het kan zijn dat de stelling bij een bijzondere driehoek net niet opgaat, of dat je alleen de driehoeken hebt uitgeprobeerd waarbij het goed uitpakt. Een **bewijs** laat zien dat de stelling moet gelden voor *elke* rechthoekige driehoek, welke lengtes $a$ en $b$ ook zijn.

Opvallend is dat de stelling van Pythagoras ontzettend veel bewijzen heeft. Je ziet in deze les vier verschillende bewijzen, uit vier verschillende tijden en culturen. Ze hebben één idee gemeen: je berekent *dezelfde oppervlakte op twee manieren* en omdat de uitkomst gelijk moet zijn, krijg je een vergelijking.

## Bewijs 1: vier driehoeken in een vierkant

Neem vier gelijke rechthoekige driehoeken met rechthoekszijden $a$ en $b$ en schuine zijde $c$. Leg ze in een groot vierkant met zijde $a + b$, zodat de schuine zijden naar binnen wijzen. In het midden blijft een ruimte over. Dat is een vierkant met zijde $c$: alle vier de zijden zijn schuine zijden van de driehoeken, en de hoeken zijn recht omdat de twee scherpe hoeken van een rechthoekige driehoek samen 90° zijn. Langs een rechte lijn is een gestrekte hoek van 180°; trek je daar twee scherpe hoeken van af (samen 90°), dan blijft 90° over.

![Vier rechthoekige driehoeken rond een centraal vierkant](/images/diagrams/m18-herschikbewijs.svg "Vier gelijke driehoeken in een vierkant met zijde a + b laten in het midden een vierkant met zijde c over. Eigen figuur.")

Nu bereken je de oppervlakte van het grote vierkant op twee manieren.

**Manier 1: als geheel.** Het grote vierkant heeft zijde $a + b$, dus oppervlakte $(a + b)^2$.

**Manier 2: als som van stukken.** Elke driehoek heeft oppervlakte $\tfrac{1}{2}ab$, dus de vier samen $2ab$. Het middelste vierkant heeft oppervlakte $c^2$. Samen: $2ab + c^2$.

Beide uitkomsten horen bij dezelfde oppervlakte, dus:

$$
(a + b)^2 = 2ab + c^2.
$$

Werk de linkerkant uit: $a^2 + 2ab + b^2 = 2ab + c^2$. Trek aan beide kanten $2ab$ af en je houdt over:

$$
a^2 + b^2 = c^2.
$$

Er is geen enkele aanname gedaan over $a$ en $b$ behalve dat het positieve lengtes zijn. Dus het bewijs geldt voor elke rechthoekige driehoek. Dat is het verschil met een voorbeeld: hier staan $a$ en $b$ voor *alle* mogelijke lengtes.

:::example Het bewijs met getallen
Neem $a = 3$ en $b = 4$. Het grote vierkant heeft zijde 7 en dus oppervlakte 49. De vier driehoeken zijn samen $4 \times 6 = 24$. Het middelste vierkant is dan $49 - 24 = 25$ en dus zijn zijde $c = 5$. Het bewijs werkt, voor $a = 3$ en $b = 4$, precies zoals je verwacht.
:::

{{ exercises: 18-014, 18-015, 18-016 }}

## Bewijs 2: dezelfde vier driehoeken, anders gelegd

Een tweede manier gebruikt twee even grote vierkanten met zijde $a + b$, elk met vier gelijke driehoeken. In het eerste vierkant liggen de driehoeken zo dat er een gekanteld vierkant $c^2$ overblijft. In het tweede vierkant leg je dezelfde vier driehoeken anders, in twee hoeken, zodat er twee vierkanten overblijven: een vierkant $a^2$ en een vierkant $b^2$.

![Twee indelingen van hetzelfde vierkant](/images/diagrams/m18-twee-herschikkingen.svg "Twee indelingen van een vierkant met zijde a + b. Haal in beide de vier driehoeken weg: wat overblijft is even groot. Eigen figuur.")

Beide grote vierkanten zijn even groot. Haal je uit beide de vier driehoeken weg, dan is wat overblijft ook even groot. Links blijft $c^2$ over en rechts $a^2 + b^2$. Dus $c^2 = a^2 + b^2$. Dit bewijs kost geen algebra: het is *zien*. Het is een bekend voorbeeld van een 'bewijs zonder woorden'.

## Bewijs 3: het diagram uit de Chinese traditie

In de oude Chinese traditie heet de rechthoekszijde *gou* en *gu*, en de schuine zijde *xian*. Daarom spreekt men in China van de gougu-stelling. In het commentaar van Zhao Shuang op de *Zhou Bi Suan Jing* (derde eeuw n.Chr.) staat een figuur van het vierkant op de schuine zijde, gevuld met vier gelijke driehoeken en een klein vierkantje in het midden. Dit 'hypotenusa-diagram' geeft een bewijs dat net iets anders loopt dan bewijs 1.

![Het hypotenusa-diagram op een rooster](/images/diagrams/m18-hypotenusa-diagram.svg "Het gekantelde vierkant op de schuine zijde van een 3-4-5-driehoek, op een rooster van 7 bij 7. Eigen figuur naar de traditionele figuur.")

Neem een rechthoekige driehoek met rechthoekszijden $a$ en $b$, met $a < b$. Leg vier van die driehoeken zo tegen elkaar dat hun schuine zijden samen de rand van een gekanteld vierkant met zijde $c$ vormen. Er blijft dan in het midden een klein vierkant over, en de zijde van dat vierkant is het verschil van de twee rechthoekszijden: $b - a$. Het vierkant op de schuine zijde bestaat dus uit vier driehoeken en een klein vierkant:

$$
c^2 = 4 \cdot \tfrac{1}{2}ab + (b - a)^2 = 2ab + b^2 - 2ab + a^2 = a^2 + b^2.
$$

Voor $a = 3$ en $b = 4$ is het kleine vierkant $1 \times 1$ en geldt $c^2 = 24 + 1 = 25$. In de figuur zie je twee redeneringen naast elkaar. Van buiten: het gekantelde vierkant past in een rooster van 7 bij 7, en als je de vier hoekjes van elk 6 hokjes weghaalt, blijft $49 - 24 = 25$ over. Van binnen: vier driehoeken van 6 en een vierkantje van 1 geven ook 25. Beide redeneringen leiden tot dezelfde uitkomst, en in algemene letters tot $a^2 + b^2 = c^2$.

## Bewijs 4: Euclides, boek I, stelling 47

Euclides (ca. 300 v.Chr.) gaf in zijn *Elementen* een bewijs dat niet leunt op een groot vierkant, maar op de vierkanten op de zijden zelf. Het idee kun je in drie stappen volgen.

1. Teken de drie vierkanten op de zijden. Trek vanuit de rechte hoek een lijn evenwijdig aan een zijkant van het grote vierkant. Daarmee verdeel je het vierkant op de schuine zijde in twee rechthoeken.
2. Je laat zien dat elke rechthoek even groot is als het vierkant op één van de rechthoekszijden. Dat doet Euclides met twee driehoeken. De ene heeft een zijde van het kleine vierkant als basis en dezelfde zijde als hoogte, dus de helft van de oppervlakte van dat vierkant. De andere heeft een zijde van de rechthoek als basis en dezelfde hoogte als de rechthoek, dus de helft van de oppervlakte van de rechthoek. De twee driehoeken zijn gelijk, want een kwartslag draaien om een hoekpunt brengt de ene op de andere. Gelijke driehoeken hebben gelijke oppervlakte, dus het kleine vierkant en de rechthoek zijn even groot.
3. Het grote vierkant is de som van de twee rechthoeken, dus even groot als de twee kleinere vierkanten samen.

![Euclides I.47 in de uitgave van Oliver Byrne](/images/history/m18-byrne-euclides-i47.png "Elementen I.47 in de gekleurde uitgave van Oliver Byrne (Londen, 1847), p. 48. Publiek domein, via Wikimedia Commons.")

In de gekleurde uitgave van Oliver Byrne uit 1847, waarvan je hierboven de pagina over deze stelling ziet, zijn de stappen met kleuren in plaats van letters aangegeven. Euclides' bewijs is geen herschikking van stukken, maar een redenering over oppervlakten die je kunt verschuiven zonder de grootte te veranderen. Het heeft de stelling eeuwenlang in leerboeken gehouden. Euclides formuleert de stelling bovendien meteen in de omgekeerde richting, als stelling I.48. Daar kijken we zo naar.

## Bewijs 5: een trapezium van een toekomstige president

In 1876 publiceerde James A. Garfield, toen lid van het Amerikaanse Huis van Afgevaardigden, in het *New-England Journal of Education* een bewijs dat hij had gevonden. Hij werd in 1881 president van de Verenigde Staten. Zijn bewijs gebruikt een trapezium: een vierhoek met twee evenwijdige zijden.

![Garfields trapezium](/images/diagrams/m18-garfield-trapezium.svg "Een trapezium met evenwijdige zijden a en b en hoogte a + b, verdeeld in drie rechthoekige driehoeken. Eigen figuur.")

Leg twee gelijke rechthoekige driehoeken met rechthoekszijden $a$ en $b$ zo neer dat de zijde $a$ van de ene en de zijde $b$ van de andere samen één rechte lijn van lengte $a + b$ vormen. De overige twee rechthoekszijden staan loodrecht op die lijn en zijn dus evenwijdig. Verbind de uiteinden ervan. Je krijgt een trapezium met evenwijdige zijden $a$ en $b$ en hoogte $a + b$, en de schuine zijden van de twee driehoeken staan loodrecht op elkaar. Dat trapezium bestaat uit drie driehoeken: de twee gelijke driehoeken met oppervlakte $\tfrac{1}{2}ab$ en een gelijkbenige rechthoekige driehoek in het midden met rechthoekszijden $c$ en oppervlakte $\tfrac{1}{2}c^2$.

De oppervlakte van het trapezium is de gemiddelde lengte van de evenwijdige zijden maal de hoogte: $\tfrac{1}{2}(a + b)\cdot(a + b)$. Dus:

$$
\tfrac{1}{2}(a + b)^2 = \tfrac{1}{2}ab + \tfrac{1}{2}ab + \tfrac{1}{2}c^2.
$$

Vermenigvuldig met 2: $a^2 + 2ab + b^2 = 2ab + c^2$, dus $a^2 + b^2 = c^2$. Je komt op hetzelfde punt uit als bij bewijs 1, met een figuur die de helft zo groot is. De rekenstappen zijn kort en elke stap is in de figuur terug te vinden.

:::question Wat bewijst een voorbeeld?
De waarden 3, 4 en 5 controleren één driehoek. Welk onderdeel van de bewijzen hierboven maakt er een algemene uitspraak van? Wat zou er anders moeten gebeuren als je alleen driehoeken met $a = 3$ en $b = 4$ had getekend?
:::

## De omkering van de stelling

Tot nu toe liep de redenering in één richting: *als* een driehoek een rechte hoek heeft, *dan* geldt $a^2 + b^2 = c^2$. De omgekeerde uitspraak is niet vanzelfsprekend. Het is een andere stelling, die uit de eerste moet worden afgeleid:

:::theory De omgekeerde stelling van Pythagoras
Een driehoek met zijden $a$, $b$ en $c$, waarvan $c$ de langste zijde is, heeft een rechte hoek tegenover $c$ als $a^2 + b^2 = c^2$.
:::

Waarom is dat waar? Neem een driehoek met zijden $a$, $b$ en $c$ waarvoor $a^2 + b^2 = c^2$. Teken ook een *rechthoekige* driehoek met rechthoekszijden $a$ en $b$. Volgens de stelling heeft zijn schuine zijde lengte $\sqrt{a^2 + b^2}$. Dat is gelijk aan $\sqrt{c^2} = c$. De twee driehoeken hebben dus drie paar gelijke zijden: $a$, $b$ en $c$. Een driehoek ligt door zijn drie zijden volledig vast, dus ze zijn gelijk. Dan heeft de eerste driehoek ook een rechte hoek, tegenover $c$. De omkering volgt dus uit de stelling zelf. Hierop berust de praktische truc van het koord met 3, 4 en 5 stukken: omdat $3^2 + 4^2 = 5^2$, is de hoek tussen de twee kortere stukken recht. In les 7 gebruik je dat zelf.

:::example Is deze driehoek rechthoekig?
Test een driehoek met zijden 7, 24 en 25.

1. De langste zijde is 25; dat is de kandidaat voor $c$.
2. $7^2 + 24^2 = 49 + 576 = 625$.
3. $25^2 = 625$.

Beide kanten zijn gelijk, dus de driehoek is rechthoekig, met de rechte hoek tegenover de zijde van 25.

Test nu 4, 5 en 6. De langste zijde is 6. $4^2 + 5^2 = 16 + 25 = 41$, en $6^2 = 36$. Niet gelijk. De driehoek is niet rechthoekig. Omdat $a^2 + b^2 = 41 > 36 = c^2$, is de hoek tegenover de zijde van 6 *scherp*.
:::

Een bonus is dat de omkering je meer vertelt dan alleen 'wel of niet recht'. De som $a^2 + b^2$ vergelijk je met $c^2$ en dan geldt:

- $a^2 + b^2 = c^2$: de hoek tegenover $c$ is **recht**;
- $a^2 + b^2 > c^2$: de hoek tegenover $c$ is **scherp** (en dus zijn alle hoeken scherp);
- $a^2 + b^2 < c^2$: de hoek tegenover $c$ is **stomp**.

![Drie driehoeken met zijden 3 en 4 en een hoek van 60, 90 en 120 graden](/images/diagrams/m18-scherp-recht-stomp.svg "Bij gelijke zijden 3 en 4 is c² gelijk aan 13, 25 of 37, afhankelijk van de hoek ertussen. Eigen figuur.")

In de figuur zijn $a$ en $b$ steeds 3 en 4. Bij een hoek van 60° ertussen is de derde zijde korter: $c^2 = 13$. Bij 90° is $c^2 = 25$. Bij 120° is de derde zijde langer: $c^2 = 37$. Hoe wijd de hoek, hoe groter de derde zijde, en de rechte hoek is precies de overgang waar $c^2$ gelijk is aan $a^2 + b^2$. Waarom dat zo gaat, kun je pas helemaal verklaren met de cosinusregel, die je in een latere module tegenkomt.

:::warning Gebruik de omkering met de langste zijde als c
Bij de test gebruik je altijd de grootste zijde als $c$, want in een rechthoekige driehoek ligt de rechte hoek tegenover de langste zijde. Neem je een kortere zijde als $c$, dan klopt de gelijkheid niet en concludeer je ten onrechte dat er geen rechte hoek is. Zet de zijden dus eerst in oplopende volgorde.
:::

{{ exercises: 18-017, 18-036 }}

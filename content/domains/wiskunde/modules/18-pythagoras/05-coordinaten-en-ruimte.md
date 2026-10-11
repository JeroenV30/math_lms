# Afstanden uit coördinaten

Het weiland uit de introductie kun je ook op een kaart leggen. Een kaart heeft een assenstelsel: elke plek krijgt twee getallen, hoe ver naar rechts en hoe ver omhoog. Als je twee plekken kent, kun je het horizontale en het verticale verschil uitrekenen. Dat zijn de twee loodrechte afstanden, de rechthoekszijden. De afstand tussen de plekken is de schuine zijde. In deze les breng je Pythagoras en coördinaten samen, en daarna ga je een dimensie verder: de ruimte.

## De afstand tussen twee punten

Neem twee punten $A(x_1; y_1)$ en $B(x_2; y_2)$. Trek vanuit $A$ een horizontale lijn en vanuit $B$ een verticale lijn. Ze snijden elkaar in een hoekpunt $C$ met een rechte hoek, want horizontaal en verticaal staan loodrecht op elkaar. Zo ontstaat een rechthoekige driehoek $ACB$ waarvan $AB$ de schuine zijde is.

- De horizontale rechthoekszijde heeft lengte $|x_2 - x_1|$.
- De verticale rechthoekszijde heeft lengte $|y_2 - y_1|$.

Met de stelling van Pythagoras:

$$
d = \sqrt{(x_2 - x_1)^2 + (y_2 - y_1)^2}.
$$

![Afstand tussen twee punten in een assenstelsel](/images/diagrams/m18-afstand-punten.svg "De punten A(1; 2) en B(7; 10): de verschillen 6 en 8 geven afstand 10. Eigen figuur.")

Je hoeft de absolute waardestrepen in de formule niet mee te nemen, omdat je de verschillen kwadrateert: $(-4)^2$ en $4^2$ zijn allebei 16. Daarom maakt het niet uit welk punt je eerst neemt. De afstand van $A$ naar $B$ is gelijk aan de afstand van $B$ naar $A$. Je moet alleen wel *consequent* zijn: bij beide coördinaten hetzelfde punt eerst nemen, of in elk geval ervoor zorgen dat je de verschillen van coördinaten kwadrateert en niet de coördinaten zelf.

:::example Twee punten met negatieve coördinaten
Bereken de afstand tussen $A(-1; 2)$ en $B(3; 5)$.

1. Horizontaal verschil: $3 - (-1) = 4$.
2. Verticaal verschil: $5 - 2 = 3$.
3. $d = \sqrt{4^2 + 3^2} = \sqrt{16 + 9} = \sqrt{25} = 5$.

Let op bij het eerste verschil: aftrekken van een negatief getal werkt als optellen (module 13), dus $3 - (-1) = 4$ en niet 2.
:::

Hieronder staan dezelfde punten in een rooster. Klik op de punten en kijk of je het horizontale en verticale verschil kunt aflezen.

{{ widget: coordinate-grid size=6 points="(-1;2) (3;5)" connect=true }}

Een andere kijk op de formule: de afstand tot de oorsprong $(0; 0)$ is $\sqrt{x^2 + y^2}$. Alle punten op afstand 5 van de oorsprong voldoen dus aan $x^2 + y^2 = 25$, en dat is een cirkel. Hier zie je al hoe Pythagoras met meetkunde verbonden is: in een latere module is de vergelijking van een cirkel precies deze stelling.

## Een veelgemaakte fout: de coördinaten zelf kwadrateren

Een veelvoorkomende fout is dat je de coördinaten van de twee punten zelf kwadrateert in plaats van hun verschillen, bijvoorbeeld $\sqrt{(-1)^2 + 2^2 + 3^2 + 5^2}$ voor de punten hierboven. Dat is de afstand van een ander punt tot de oorsprong, niet de afstand tussen $A$ en $B$. Kijk bij elke afstandsvraag eerst of je werkelijk twee *verschillen* hebt. Een tweede fout is om bij negatieve getallen het minteken te vergeten: het verschil tussen $-2$ en $4$ is 6, niet 2.

:::warning Eenheden op de assen
De afstandsformule veronderstelt dat de lengteschaal op beide assen gelijk is. In een grafiek met uren op de x-as en kilometers op de y-as is de 'afstand' tussen twee punten betekenisloos: je combineert uren met kilometers. Gebruik de formule dus alleen als beide assen dezelfde eenheid hebben, zoals op een kaart of in een meetkundige tekening.
:::

{{ exercises: 18-018, 18-019, 18-020 }}

## Naar de derde dimensie: de ruimtediagonaal

Een balk heeft drie afmetingen: lengte $l$, breedte $b$ en hoogte $h$. Een **ruimtediagonaal** is een lijnstuk van een hoekpunt naar het hoekpunt dat er in de ruimte recht tegenover ligt: van een benedenhoek naar de bovenhoek aan de andere kant. Hoe lang is zo'n lijnstuk?

Het lukt in twee stappen, met twee rechthoekige driehoeken.

![Ruimtediagonaal van een balk](/images/diagrams/m18-ruimtediagonaal.svg "De diagonaal d₁ van het grondvlak en de hoogte h vormen met de ruimtediagonaal d een rechthoekige driehoek. Eigen figuur.")

**Stap 1: het grondvlak.** Het grondvlak is een rechthoek met zijden $l$ en $b$. Zijn diagonaal $d_1$ volgt uit Pythagoras: $d_1^2 = l^2 + b^2$.

**Stap 2: de ruimtediagonaal.** De diagonaal van het grondvlak $d_1$ en de hoogte $h$ staan loodrecht op elkaar, want de hoogte staat loodrecht op het hele grondvlak. Samen met de ruimtediagonaal $d$ vormen ze een rechthoekige driehoek met schuine zijde $d$. Opnieuw Pythagoras: $d^2 = d_1^2 + h^2$.

Vul stap 1 in bij stap 2:

$$
d^2 = l^2 + b^2 + h^2, \qquad d = \sqrt{l^2 + b^2 + h^2}.
$$

De formule is een uitbreiding van de vlakke stelling met een derde kwadraat. Dat is geen toeval: in een assenstelsel met drie assen is de afstand van de oorsprong tot het punt $(l; b; h)$ precies deze lengte. Let op dat de drie lengtes *niet* de zijden van één vlakke driehoek zijn. Het is de uitkomst van twee opeenvolgende toepassingen van de stelling, in twee verschillende vlakken.

:::example Een balk van 3 bij 4 bij 12
Een balk is 3 cm lang, 4 cm breed en 12 cm hoog. Bereken de ruimtediagonaal.

1. Diagonaal van het grondvlak: $d_1 = \sqrt{3^2 + 4^2} = \sqrt{25} = 5$ cm.
2. Ruimtediagonaal: $d = \sqrt{5^2 + 12^2} = \sqrt{169} = 13$ cm.

Controle met de formule: $\sqrt{3^2 + 4^2 + 12^2} = \sqrt{9 + 16 + 144} = \sqrt{169} = 13$. Mooi dat de uitkomst weer een geheel getal is: 3, 4, 12, 13 is een viertal waarbij de ruimtediagonaal geheel uitkomt.
:::

Bij een **kubus** met zijde $s$ zijn alle drie de afmetingen gelijk, dus $d = \sqrt{3s^2} = s\sqrt{3}$. De ruimtediagonaal van een kubus is dus ongeveer 1,73 keer zijn ribbe, net zoals de diagonaal van een vierkant $s\sqrt{2}$ is, ongeveer 1,41 keer de zijde.

{{ exercises: 18-021, 18-022, 18-023, 18-040 }}

## Wanneer werkt Pythagoras in de ruimte niet?

De stelling blijft een uitspraak over een rechte hoek, ook in de ruimte. Je gebruikt hem in elk vlak waarin je een rechthoekige driehoek ziet. Bij een balk zijn dat vele driehoeken: elk zijvlak, elk doorsnedevlak, en driehoeken zoals hierboven die een diagonaal en een ribbe bevatten. Bij elke vraag moet je dus opnieuw de rechte hoek aanwijzen. Voor een schuine balk, of een piramide, vind je de rechte hoek niet altijd meteen: zoek een loodlijn en een vlak waarin hij ligt.

Een goede aanpak bij een ruimtefiguur is: teken de figuur, markeer de rechte hoeken, zoek een rechthoekige driehoek waarin je twee zijden kent, bereken de derde, en gebruik die als zijde in de volgende driehoek. Dat is wat je hierboven bij de ruimtediagonaal deed.

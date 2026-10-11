# Uitkomsten en gebeurtenissen

Elke kansberekening begint met dezelfde vraag: *wat kan er allemaal gebeuren?* Wie die vraag slordig beantwoordt, rekent daarna foutloos met de verkeerde getallen. Daarom besteden we een hele les aan het opschrijven van een kansmodel, nog voordat we iets uitrekenen.

## De uitkomstenruimte

Een **experiment** is een handeling met een onzekere afloop: een worp, een trekking, een meting. Een **uitkomst** is één mogelijke afloop. De verzameling van alle mogelijke uitkomsten heet de **uitkomstenruimte** en wordt genoteerd met de Griekse hoofdletter $\Omega$ (omega).

Bij één dobbelsteen is $\Omega=\{1,2,3,4,5,6\}$. Bij één muntworp is $\Omega=\{\text{kop},\text{munt}\}$. Bij het trekken van één kaart uit een spel van 52 kaarten heeft $\Omega$ precies 52 elementen.

Een **gebeurtenis** is een deelverzameling van $\Omega$: een groep uitkomsten die je samen bekijkt. De gebeurtenis $A$ = ‘groter dan 4’ is de verzameling $\{5,6\}$. De gebeurtenis ‘even’ is $\{2,4,6\}$. Zelfs de lege verzameling $\{\ \}$ (de onmogelijke gebeurtenis) en heel $\Omega$ (de zekere gebeurtenis) tellen mee. Een gebeurtenis *treedt op* als de uitkomst van het experiment een element van die verzameling is.

:::definition Kans bij even waarschijnlijke uitkomsten
Als alle uitkomsten in een eindige uitkomstenruimte $\Omega$ even waarschijnlijk zijn, geldt voor elke gebeurtenis $A$:

$$
P(A)=\frac{|A|}{|\Omega|},
$$

waarbij $|A|$ het aantal elementen van $A$ is. Dit is "gunstig gedeeld door mogelijk".
:::

Uit deze definitie volgen drie eigenschappen die voor *elk* kansmodel gelden, ook als de uitkomsten niet even waarschijnlijk zijn:

1. Een kans ligt altijd tussen 0 en 1: $0\le P(A)\le1$.
2. De zekere gebeurtenis heeft kans 1: $P(\Omega)=1$.
3. De kansen van alle afzonderlijke uitkomsten samen tellen op tot 1.

Daarmee heb je ook een eenvoudige controle op je eigen werk. Een kans van 1,2 of van $-0{,}1$ kan nooit kloppen, en een rij kansen voor alle uitkomsten die niet optelt tot 1 is onvolledig of fout.

:::example Een gebeurtenis opschrijven en berekenen
Je gooit één eerlijke dobbelsteen. Wat is de kans op een priemgetal?

**Stap 1 – uitkomstenruimte.** $\Omega=\{1,2,3,4,5,6\}$, zes even waarschijnlijke uitkomsten.

**Stap 2 – gebeurtenis.** De priemgetallen in $\Omega$ zijn 2, 3 en 5. Het getal 1 is geen priemgetal en 4 en 6 zijn deelbaar door 2. Dus $A=\{2,3,5\}$.

**Stap 3 – delen.** $P(A)=\frac{3}{6}=\frac12$.

Controle: een kans tussen 0 en 1, en het verschil met "even" laat zien dat de gebeurtenis zelf bepaalt welke uitkomsten meetellen.
:::

{{ exercises: 23-004 }}

## Wanneer is "gunstig gedeeld door mogelijk" geoorloofd?

De regel werkt alleen als de uitkomsten die je telt even waarschijnlijk zijn. Dat lijkt vanzelfsprekend, maar er zijn twee valkuilen. De eerste: je telt de verkeerde dingen. De tweede: je gaat ervan uit dat het model klopt zonder dat te controleren.

Neem twee eerlijke muntworpen. Je zou kunnen zeggen: het aantal keer kop is 0, 1 of 2, dus drie uitkomsten, dus kans $\frac13$ op precies één keer kop. Dat is fout, want die drie uitkomsten zijn niet even waarschijnlijk. Schrijf je de worpen op met volgorde, dan krijg je vier uitkomsten:

$$
\Omega=\{KK,\ KM,\ MK,\ MM\}.
$$

Die vier zijn wel even waarschijnlijk. ‘Precies één keer kop’ bestaat uit twee ervan ($KM$ en $MK$), dus de kans is $\frac24=\frac12$. De fout ontstond doordat de gebeurtenis ‘precies één keer kop’ twee uitkomsten bevat en ‘nul keer’ er maar één.

:::tip Maak ze onderscheidbaar
Een slimme truc: geef elke dobbelsteen of munt een eigen kleur of nummer, ook als de voorwerpen er in het echt hetzelfde uitzien. Zodat $KM$ en $MK$ twee verschillende uitkomsten zijn. In het natuurkundige experiment merk je er niets van, maar het model blijft zo eerlijk.
:::

## Twee dobbelstenen: de uitkomstentabel

Bij twee dobbelstenen is een uitkomst een **geordend paar**: $(1;6)$ en $(6;1)$ zijn verschillend. Er zijn $6\times6=36$ paren en bij eerlijke, onafhankelijk geworpen dobbelstenen zijn ze allemaal even waarschijnlijk. Een tabel met de eerste worp als rij en de tweede als kolom maakt dat zichtbaar. In de tabel staat in elk vakje de som van de twee ogen.

![Uitkomstentabel van twee dobbelstenen met de som in elk vakje; de zes vakjes met som 7 liggen op een diagonaal](/images/diagrams/m23-tabel.svg "Alle 36 even waarschijnlijke paren; de gemarkeerde diagonaal bevat de zes paren met som 7.")

Aan de tabel zie je meteen dat de **sommen** zelf niet even waarschijnlijk zijn. Som 2 komt maar één keer voor ($1+1$), som 7 zes keer, som 12 weer één keer. De mogelijke sommen 2 tot en met 12 vormen dus een slechte uitkomstenruimte: kies als uitkomstenruimte de 36 paren en maak van de som een gebeurtenis.

| som | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10 | 11 | 12 |
|---|---|---|---|---|---|---|---|---|---|---|---|
| aantal paren | 1 | 2 | 3 | 4 | 5 | 6 | 5 | 4 | 3 | 2 | 1 |
| kans (van 36) | 1/36 | 2/36 | 3/36 | 4/36 | 5/36 | 6/36 | 5/36 | 4/36 | 3/36 | 2/36 | 1/36 |

De rij onder ‘aantal paren’ telt op tot 36 en de kansen tot 1: de eerste controle slaagt.

:::example Som van twee dobbelstenen
Wat is de kans dat de som van twee eerlijke dobbelstenen kleiner is dan 5?

**Stap 1.** Kies $\Omega$ = de 36 geordende paren.

**Stap 2.** Som 2: $(1;1)$. Som 3: $(1;2)$ en $(2;1)$. Som 4: $(1;3)$, $(2;2)$ en $(3;1)$. Samen $1+2+3=6$ paren.

**Stap 3.** $P=\frac{6}{36}=\frac16$.
:::

{{ exercises: 23-005, 23-006, 23-007, 23-008 }}

## Als de uitkomsten niet even waarschijnlijk zijn

Niet elk experiment is zo symmetrisch als een dobbelsteen. Denk aan een draaischijf met drie sectoren: een grote van 50%, en twee kleine van elk 25%. De uitkomstenruimte heeft drie elementen, maar de uitkomsten zijn niet even waarschijnlijk. Hier geef je elke uitkomst een eigen kans: $P(\text{groot})=0{,}5$, $P(\text{klein 1})=0{,}25$, $P(\text{klein 2})=0{,}25$. De drie kansen tellen op tot 1. De kans op een gebeurtenis is dan de **som van de kansen van de uitkomsten waaruit zij bestaat**. De kans op ‘een kleine sector’ is dus $0{,}25+0{,}25=0{,}5$.

Dit is het algemene principe waaruit gunstig/mogelijk een bijzonder geval is: als alle $n$ uitkomsten kans $\frac1n$ hebben, levert optellen precies $\frac{|A|}{n}$ op.

:::warning Gelijk aantal categorieën is geen gelijke kans
‘Het gebeurt of het gebeurt niet’ levert geen 50-50 op. Een loterijlot wint of verliest, maar de kans op winst is gewoonlijk heel klein. Controleer altijd of de uitkomsten die je telt even waarschijnlijk zijn en kijk zo nodig verder dan de woorden in de vraag.
:::

## Een model is een aanname

Wie zegt "de kans op zes is $\frac16$", zegt eigenlijk: "ik neem aan dat de dobbelsteen eerlijk is en dat de worpen onafhankelijk zijn". Dat is een **model**. Het kan goed passen bij de werkelijkheid, maar het kan ook knellen. Een dobbelsteen met een onzichtbare onregelmatigheid, een gemarkeerd kaartspel of een slecht gemengde zak ballen zijn voorbeelden waarbij het eerlijke model niet klopt. Daarom staat bij onze opgaven steeds ‘eerlijke dobbelsteen’ of ‘eerlijke munt’: dat zijn expliciete aannames.

De relatie tussen model en werkelijkheid is een van de belangrijkste lijnen in dit vak. In les 7 zien we hoe je een model aan waarnemingen toetst, en in latere hoofdstukken (module 39) wordt dat een volwaardige methode.

:::tip Werkwijze voor elke kansvraag
1. Beschrijf het experiment en kies een uitkomstenruimte waarvan de elementen even waarschijnlijk zijn.
2. Schrijf de gebeurtenis op als verzameling uitkomsten.
3. Tel gunstig en mogelijk, of tel kansen op.
4. Controleer: tussen 0 en 1? Optellen tot 1 als je alle gevallen bij elkaar neemt?
:::

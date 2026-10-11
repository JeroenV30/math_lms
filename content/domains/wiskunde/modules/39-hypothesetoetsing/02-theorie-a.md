# Hypothesen en p-waarden

## De logica: bewijs uit het ongerijmde met kansen

In de wiskunde ken je het bewijs uit het ongerijmde: je neemt aan dat een bewering waar is, leidt daar
iets uit af, en als dat iets onmogelijk blijkt, verwerp je de aanname. Een statistische toets werkt
bijna zo, met één belangrijk verschil. In de empirische wereld is zelden iets *onmogelijk*; hooguit
is iets *zeer onwaarschijnlijk*. Daarom is de redenering:

1. Neem aan dat de nulbewering waar is.
2. Bereken hoe waarschijnlijk het is dat je gegevens zo ver (of verder) van die bewering afliggen als
   nu het geval is.
3. Is die kans klein, dan is het moeilijk de gegevens met de nulbewering te verenigen. Je verwerpt de
   nulbewering, of liever: je neemt haar niet meer serieus als verklaring.

Een vergelijking uit de rechtszaal helpt, mits je haar niet te ver doortrekt. De verdachte is
onschuldig tot het tegendeel is aangetoond: dat is de **nulhypothese** $H_0$. De aanklager moet
bewijs aandragen dat zo sterk is dat onschuld er moeilijk mee te rijmen valt. Lukt dat, dan volgt
een veroordeling (je verwerpt $H_0$). Lukt het niet, dan volgt vrijspraak, en dat is iets anders dan
een bewezen onschuld: er was onvoldoende bewijs. Net zo betekent "H0 niet verwerpen" nooit "H0 is
bewezen". En zoals een rechtbank een onschuldige kan veroordelen of een schuldige kan vrijspreken,
kan een toets zich op twee manieren vergissen. Daar komen we in les 5 op terug.

:::question Denkvraag
Je gooit een munt tien keer en krijgt tien keer kop. Welke nulbewering ligt voor de hand en hoe
waarschijnlijk is zo'n uitkomst als die bewering klopt? Wat zou je doen bij negen keer kop?
:::

{{ exercise: 39-021 }}

## Twee hypothesen over een parameter

Een hypothese gaat altijd over een **populatieparameter**, niet over de steekproef. Over het
steekproefgemiddelde valt niets te beweren: dat heb je gemeten. Bij het voorbeeld van de verpakking
met beweerde inhoud 100 gram formuleer je

$$H_0:\mu=100\qquad\text{tegenover}\qquad H_1:\mu\ne100.$$

De nulhypothese bevat steeds een gelijkteken en legt één precieze waarde vast waarmee je kunt
rekenen. De **alternatieve hypothese** $H_1$ beschrijft de afwijking waarvoor je gevoelig wilt zijn. Er zijn drie vormen.

- **Tweezijdig**: $H_1:\mu\ne100$. Je let op afwijkingen in beide richtingen. Dit is de standaardkeuze als je geen reden hebt voor een richting.
- **Rechtszijdig**: $H_1:\mu>100$. Alleen te hoge waarden zijn van belang, bijvoorbeeld als een nieuw proces de opbrengst moet verhogen.
- **Linkszijdig**: $H_1:\mu<100$. Alleen te lage waarden tellen, bijvoorbeeld bij een bewering over een maximum aan verontreiniging.

Kies de richting **voordat** je de gegevens ziet. Wie eerst kijkt in welke kant het verschil uitvalt
en dan de richting kiest, oefent een verkapte vorm van valsspelen uit; in les 7 zie je precies waarom.

{{ exercise: 39-001 }}

## De toetsingsgrootheid

Je hebt een getal nodig dat uitdrukt hoe ver de gegevens van $H_0$ af liggen, in een maat die niet van
eenheden afhangt. Zo'n getal heet een **toetsingsgrootheid**. De standaardfout is de natuurlijke
meetlat, want zij zegt hoeveel een steekproefgemiddelde van nature schommelt. Bij een bekende
populatiestandaardafwijking $\sigma$ en een normale verdeling (of een grote steekproef) gebruik je

$$z=\frac{\bar x-\mu_0}{\sigma/\sqrt n}.$$

Je meet dus de afwijking $\bar x-\mu_0$ in eenheden van de standaardfout $\sigma/\sqrt n$. Als $H_0$ waar is, volgt $z$
een standaardnormale verdeling. Dat is het hele geheim: onder $H_0$ ken je de verdeling van de toetsingsgrootheid volledig, en daarmee kun je kansen uitrekenen.

:::example Een tweezijdige z-toets stap voor stap
Neem $\sigma=8$, $n=64$, $\bar x=102$ en $\mu_0=100$.

1. Hypothesen: $H_0:\mu=100$ en $H_1:\mu\ne100$.
2. Standaardfout: $\sigma/\sqrt n=8/\sqrt{64}=8/8=1$.
3. Toetsingsgrootheid: $z=(102-100)/1=2$.
4. Onder $H_0$ is $z$ standaardnormaal. "Minstens zo extreem" betekent hier: $z\ge2$ of $z\le-2$,
   want de alternatieve hypothese is tweezijdig.
5. De kans daarop is $2\,[1-\Phi(2)]=2\cdot0{,}0228\approx0{,}0456$.
:::

{{ exercises: 39-002, 39-003, 39-004 }}

## Wat een p-waarde precies is

De kans die je in stap 5 uitrekende heet de **p-waarde**. De definitie moet je letterlijk onthouden:

:::definition p-waarde
De p-waarde is de kans, **berekend onder de aanname dat $H_0$ waar is**, op een toetsingsgrootheid die
minstens zo extreem is als de waargenomen waarde. Wat "extreem" betekent, ligt vast door de alternatieve hypothese.
:::

![Standaardnormale verdeling met de staarten voorbij z = 2 gekleurd](/images/diagrams/m39-p-waarde.svg "De tweezijdige p-waarde bij z = 2 is de oppervlakte van beide staarten samen — eigen figuur")

Let op elk deel van die zin. *Berekend onder $H_0$*: de p-waarde zegt iets over hoe de gegevens zich
verhouden tot het nulmodel, niet over de kans dat het nulmodel waar is. *Minstens zo extreem*: je telt niet alleen de
waargenomen uitkomst, maar het hele staartgebied vanaf die uitkomst. Dat is nodig omdat bij een
continue verdeling elke afzonderlijke uitkomst kans nul heeft. Voor de drie vormen van $H_1$ geldt bij een normale toetsingsgrootheid:

- linkszijdig: $p=\Phi(z)$;
- rechtszijdig: $p=1-\Phi(z)$;
- tweezijdig: $p=2\,[1-\Phi(|z|)]$.

Een negatief effect bij een rechtszijdige hypothese geeft dus een **grote** p-waarde, geen kleine:
de data wijzen dan juist van het alternatief af. Bij discrete verdelingen, zoals in les 3, bestaan
voor tweezijdig toetsen verschillende conventies; vermeld dan welke je gebruikt. Je kunt in onderstaande
widget zien hoe een staartkans verandert als je de grenzen verschuift. Zet de ondergrens op 2 en lees de kans af.

{{ widget: normal-distribution mu=0 sigma=1 lower=2 upper=4 xmin=-4 xmax=4 }}

{{ exercises: 39-024, 39-025 }}

## Beslissen met een significantieniveau

Om van een p-waarde een beslissing te maken kies je **vóór** de analyse een **significantieniveau** $\alpha$, vaak $0{,}05$.
De regel luidt: verwerp $H_0$ als $p\le\alpha$. Als $H_0$ waar is, is de kans dat deze regel ten onrechte
verwerpt hoogstens $\alpha$. Daarmee heeft $\alpha$ een eerlijke betekenis als langetermijnfoutkans van de procedure.

Dezelfde beslissing kun je ook nemen zonder p-waarde uit te rekenen, met het **kritieke gebied**. Je zoekt de
waarden van $z$ waarbij $p\le\alpha$. Bij een tweezijdige toets met $\alpha=0{,}05$ ligt in elke staart
$2{,}5\%$ van de kans en is de grens $z=\pm1{,}96$; bij een rechtszijdige toets ligt alle $5\%$ in één staart
en is de grens $z=1{,}645$. Valt de toetsingsgrootheid in het kritieke gebied, dan verwerp je $H_0$.
De twee methoden geven altijd dezelfde beslissing; de p-waarde bevat alleen meer informatie.

{{ exercise: 39-023 }}

:::example Beslissen op twee manieren
In het voorbeeld hierboven was $z=2$ en $p=0{,}0456$. Met $\alpha=0{,}05$: $p<\alpha$, dus verwerpen. Via het kritieke
gebied: $|z|=2>1{,}96$, dus verwerpen. Bij $\alpha=0{,}01$ is de grens $2{,}576$; dan wordt $H_0$ niet verworpen,
terwijl dezelfde gegevens zijn gebruikt. De conclusie hangt dus van de gekozen $\alpha$ af. Een p-waarde van
$0{,}0456$ rapporteren is informatiever dan alleen "significant".
:::

{{ exercise: 39-005 }}

"Niet verwerpen" betekent *onvoldoende bewijs in deze toets*, niet dat de nulhypothese bewezen is. Vergelijk de vrijspraak in de rechtszaal.

{{ exercise: 39-026 }}

:::warning Wat p niet zegt
De p-waarde is niet $P(H_0\mid\text{data})$, niet de kans dat alles door toeval is ontstaan, en niet
de grootte van het effect. Een p-waarde van $0{,}0456$ betekent niet dat $H_0$ met 4,56% kans waar is. Ze
zegt: *als* $H_0$ waar is, komt zo'n extreme uitkomst in 4,56% van de steekproeven voor. Dezelfde
kleine p-waarde kan horen bij een klein effect met veel data of een groot effect met weinig data.
:::

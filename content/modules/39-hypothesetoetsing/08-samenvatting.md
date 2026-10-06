# Samenvatting: een toets beantwoordt een beperkte vraag

Een hypothesetoets is bewijs uit het ongerijmde met kansen: je neemt de nulbewering serieus, rekent uit wat zij voorspelt,
en kijkt of je gegevens daar nog bij passen. Formuleer de populatiebewering en het alternatief vóór de analyse. Kies een toets die bij de
waarnemingseenheid en de aannames past. Bereken vervolgens de afstand tot het nulmodel in standaardfouten en vergelijk met de juiste referentieverdeling.

## Wat je nu beheerst

| Situatie | Toetsingsgrootheid | Verdeling onder $H_0$ |
|---|---|---|
| gemiddelde, $\sigma$ bekend | $z=\dfrac{\bar x-\mu_0}{\sigma/\sqrt n}$ | standaardnormaal |
| gemiddelde, $\sigma$ onbekend | $t=\dfrac{\bar x-\mu_0}{s/\sqrt n}$ | $t$ met $n-1$ vrijheidsgraden |
| proportie | $z=\dfrac{\hat p-p_0}{\sqrt{p_0(1-p_0)/n}}$ | benaderend standaardnormaal |
| telling, klein $n$ | aantal successen $X$ | $\text{Bin}(n,p_0)$, exact |
| twee onafhankelijke groepen | $t=\dfrac{\bar x_1-\bar x_2}{\sqrt{s_1^2/n_1+s_2^2/n_2}}$ | $t$ met Welch-vrijheidsgraden |
| gepaarde metingen | $t=\dfrac{\bar d}{s_d/\sqrt n}$ | $t$ met $n-1$ vrijheidsgraden |

:::summary Kernpunten
- Een hypothese gaat over een populatieparameter; $H_0$ bevat het gelijkteken, $H_1$ is links-, rechts- of tweezijdig en wordt vooraf gekozen.
- p is een staartkans **onder** het nulmodel: de kans op een toetsingsgrootheid minstens zo extreem als waargenomen. Het is geen kans dat het nulmodel waar is.
- Een eenzijdige vraag en een tweezijdige vraag gebruiken verschillende staarten; achteraf wisselen is niet toegestaan.
- Verwerpen bij $p\le\alpha$ is gelijkwaardig aan de toetsingsgrootheid in het kritieke gebied laten vallen, en aan een nulwaarde buiten het betrouwbaarheidsinterval.
- Onafhankelijke groepen en gepaarde metingen vragen verschillende analyses; de standaardfout van een verschil van onafhankelijke gemiddelden is $\sqrt{SE_1^2+SE_2^2}$.
- Niet verwerpen bewijst geen gelijkheid of afwezigheid van een effect.
- Type I is vals positief met kans $\alpha$; type II is een gemist specifiek effect met kans $\beta$; power is $1-\beta$ en groeit met $n$, met $\alpha$ en met de effectgrootte.
- Effectgrootte (zoals Cohen's $d$) en interval zeggen hoe groot een verschil is; statistisch significant is niet hetzelfde als praktisch belangrijk.
- Veel toetsen en selectief rapporteren veranderen de betekenis van een losse uitslag: $1-0{,}95^{20}\approx0{,}64$. Bonferroni gebruikt $\alpha/m$ per toets.
:::

Rapporteer altijd de geschatte omvang, onzekerheid en beperkingen naast een p-waarde. Zo handel je ook in de geest van de verklaring van de ASA uit 2016.
In module 40 gebruik je diezelfde discipline bij samenhang en regressie.

{{ quiz }}

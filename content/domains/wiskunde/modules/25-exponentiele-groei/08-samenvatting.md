# Samenvatting

Lineaire verandering heeft vaste **verschillen**; exponentiële verandering heeft vaste **verhoudingen** bij gelijke tijdstappen. Het positieve model is $N(t)=b\cdot g^t$. Benoem steeds het beginmoment, de tijdseenheid en het domein waarvoor het model bedoeld is.

## Wat je nu moet beheersen

- **Herkennen:** lineair door te aftrekken, exponentieel door te delen. Controleer alle opeenvolgende paren.
- **Percentage naar factor:** $g=1+p/100$, met negatief $p$ bij daling. Groei: $g>1$; afname: $0<g<1$.
- **Terugrekenen:** vooruit vermenigvuldig je met $g$, terug deel je door $g$. De herstelfactor na 20% daling is $1/0{,}8=1{,}25$.
- **Opeenvolgende percentages:** vermenigvuldig de factoren. 20% daling, twee keer, geeft $0{,}8^2=0{,}64$, dus 36% daling.
- **Formule:** $N(t)=b\cdot g^t$ met $b=N(0)$. Parameters uit twee waarnemingen: eerst de verhouding, dan de wortel voor de factor per tijdseenheid, dan $b$, dan controleren.
- **Andere tijdseenheid:** een periode $\Delta t$ geeft factor $g^{\Delta t}$. Per maand uit per jaar is $g^{1/12}$, niet $g/12$.
- **Verdubbeling en halvering:** totale factor 2 of $\tfrac12$ over de verdubbelings- of halveringstijd; $N(t)=b\cdot2^{t/T_d}$ en $N(t)=b\cdot(\tfrac12)^{t/T_h}$.
- **Grafiek:** $y=b\cdot g^x$ snijdt de verticale as in $(0;b)$ en heeft de horizontale asymptoot $y=0$.
- **Drempels:** controleer zowel de laatste waarde onder de grens als de eerste waarde erop of erboven.

## Formules op een rij

| Situatie | Formule |
|---|---|
| Percentage naar factor | $g=1+\dfrac{p}{100}$ |
| Exponentieel model | $N(t)=b\cdot g^t$ |
| Andere tijdseenheid | $g_{\Delta t}=g^{\Delta t}$ |
| Factor uit twee metingen | $g=\left(\dfrac{N(t_2)}{N(t_1)}\right)^{1/(t_2-t_1)}$ |
| Verdubbelen / halveren | $g^{T_d}=2$, $\ g^{T_h}=\tfrac12$ |

## Veelgemaakte fouten

| Fout | Hoe het goed gaat |
|---|---|
| $g=5$ bij 5% groei | $g=1{,}05$ |
| Factoren optellen bij twee stappen | Factoren vermenigvuldigen |
| Maandfactor = jaarfactor / 12 | $g_{\text{maand}}=g_{\text{jaar}}^{1/12}$ |
| Lineair doortrekken | Telkens met dezelfde factor vermenigvuldigen |
| 20% afname twee keer = 40% | $0{,}8^2=0{,}64$, dus 36% afname |
| Delen op een verschil | Verschil geeft lineair; verhouding geeft exponentieel |

## Modelcontrole

Constante groei is een aanname. Beoordeel aanvullende waarnemingen, beperkingen (draagkracht, afronding, veranderende omstandigheden) en de betekenis van extrapolatie voordat je een modelvoorspelling gebruikt. In de volgende module komen logaritmen, waarmee je verdubbelings- en halveringstijden exact uitrekent.

:::summary Kernzin
Een vaste procentuele verandering is een vaste factor per tijdstap, en een vaste factor per tijdstap betekent een macht van die factor over meerdere stappen.
:::

{{ quiz }}

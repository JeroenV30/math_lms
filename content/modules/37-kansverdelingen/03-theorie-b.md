# De normale verdeling en z-scores

Een normale verdeling is continu, symmetrisch en klokvormig. Het midden is
$\mu$ en de standaardafwijking is $\sigma>0$. We schrijven hier
$X\sim N(\mu,\sigma^2)$: de tweede parameter is de **variantie**.
Sommige software gebruikt juist de standaardafwijking; controleer de conventie.

De formule voor de dichtheid staat in de formulebibliotheek. Je hoeft haar
niet uit het hoofd te integreren. Begrijp eerst dat het oppervlak 1 is, dat
een grotere $\sigma$ de klok breder en lager maakt, en dat een verandering
van $\mu$ de klok verschuift.

{{ widget: normal-distribution mu=100 sigma=15 lower=85 upper=115 xmin=40 xmax=160 }}

Verschuif het gemiddelde terwijl je de grenzen gelijk houdt. De kans verandert,
ook al blijft de vorm hetzelfde. Verander daarna de standaardafwijking. De
hoogte van de klok is geen kans: alleen het gekleurde oppervlak is dat.

## Alle normale verdelingen naar dezelfde schaal

Met $Z=(X-\mu)/\sigma$ wordt een normale variabele standaardnormaal:
gemiddelde 0, standaardafwijking 1. Een z-score vertelt hoeveel
standaardafwijkingen een waarde van het midden afligt.

:::example Een meting standaardiseren
Bij $\mu=100$ en $\sigma=15$ heeft 130 de z-score
$(130-100)/15=2$. De waarde 85 heeft z-score −1.
Omgekeerd gebruik je $x=\mu+z\sigma$.
:::

{{ exercises: 37-009, 37-010, 37-011 }}

## Oppervlakte uit een tabel lezen

$\Phi(z)=P(Z\le z)$ is de linkerstaartkans van de standaardnormale
verdeling. Een tabel kan bijvoorbeeld deze afgeronde waarden geven:

| $z$ | −2 | −1 | 0 | 1 | 2 |
|---|---|---|---|---|---|
| $\Phi(z)$ | 0,0228 | 0,1587 | 0,5000 | 0,8413 | 0,9772 |

Voor rechts van 1 gebruik je $1-\Phi(1)=0{,}1587$.
Voor tussen −1 en 1 gebruik je $\Phi(1)-\Phi(-1)=0{,}6826$.
Door continuïteit maakt $<$ tegenover $\le$ bij één grens geen kansverschil.

{{ exercises: 37-012, 37-013, 37-014 }}

Ongeveer 68%, 95% en 99,7% ligt binnen één, twee en drie
standaardafwijkingen van het midden. Voor een nauwkeuriger centraal
95%-gebied gebruik je $\mu\pm1{,}96\sigma$. Dit is een gebied voor
individuele uitkomsten, nog geen betrouwbaarheidsinterval voor een onbekend gemiddelde.

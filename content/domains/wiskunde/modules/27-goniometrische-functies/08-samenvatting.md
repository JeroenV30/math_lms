# Samenvatting

Je begon met een rechthoekige driehoek en eindigde met een golf. De stap daartussen was kleiner dan hij leek: door sinus en cosinus als coördinaten van een draaiend punt op de eenheidscirkel te zien, gelden ze voor elke hoek, positief of negatief, kleiner of groter dan een halve draai. Het resultaat is een functie die zich periodiek herhaalt en die je met vier getallen aan een echt verschijnsel kunt aanpassen. Hieronder staat wat je moet beheersen, in de volgorde van de lessen.

:::summary De eenheidscirkel en radialen
- Op de eenheidscirkel is $P(\theta)=(\cos\theta;\sin\theta)$: cosinus is de $x$-coördinaat, sinus de $y$-coördinaat. Positieve hoeken draai je tegen de klok in, negatieve met de klok mee.
- Een hoek in radialen is booglengte gedeeld door straal: $\theta=s/r$. Op de eenheidscirkel is de boog dus even lang als de hoek.
- $2\pi$ rad $=360^\circ$ en $\pi$ rad $=180^\circ$. Omrekenen: graden $\times\tfrac{\pi}{180}$ geeft radialen en radialen $\times\tfrac{180}{\pi}$ geeft graden. De booglengte is $s=r\theta$, met $\theta$ in radialen.
- Controleer altijd de stand van je rekenmachine: RAD of DEG.
:::

:::summary Tekens, symmetrie en exacte waarden
- Teken per kwadrant: I beide positief; II cosinus negatief, sinus positief; III beide negatief; IV cosinus positief, sinus negatief.
- Spiegelingen: $\sin(-\theta)=-\sin\theta$, $\cos(-\theta)=\cos\theta$, $\sin(\pi-\theta)=\sin\theta$, $\cos(\pi-\theta)=-\cos\theta$, $\sin(\pi+\theta)=-\sin\theta$, $\cos(\pi+\theta)=-\cos\theta$.
- Exacte waarden voor $\pi/6$, $\pi/4$ en $\pi/3$ volgen uit de referentiehoek in het eerste kwadrant. Voor elke hoek geldt $\sin^2\theta+\cos^2\theta=1$.
:::

:::summary Grafieken en perioden
- Sinus en cosinus hebben periode $2\pi$ en bereik $[-1;1]$. De cosinus is de sinus een kwartperiode vooruit: $\cos x=\sin\left(x+\tfrac\pi2\right)$.
- De tangens $\tan x=\tfrac{\sin x}{\cos x}$ heeft periode $\pi$ en verticale asymptoten bij $x=\tfrac\pi2+k\pi$.
- Voor $y=\sin(cx)$ is de periode $\tfrac{2\pi}{|c|}$, niet $c$.
:::

:::summary De sinusoïde
- In $y=a+b\sin\bigl(c(x-d)\bigr)$ is $a$ de evenwichtsstand, $|b|$ de amplitude, $\tfrac{2\pi}{|c|}$ de periode en $d$ de faseverschuiving. Het bereik is $[a-|b|;a+|b|]$.
- Uit een maximum en een minimum volgt $a=\tfrac{\max+\min}{2}$ en $|b|=\tfrac{\max-\min}{2}$. Haal bij een binnenste uitdrukking als $2x-4$ eerst de factor $c$ buiten haakjes.
:::

:::summary Vergelijkingen
- Een waarde in $(-1;1)$ wordt tweemaal per periode aangenomen. Voor $\sin x=\sin\alpha$ vind je $x=\alpha+2k\pi$ of $x=\pi-\alpha+2k\pi$; voor $\cos x=\cos\alpha$ vind je $x=\pm\alpha+2k\pi$; voor $\tan x=\tan\alpha$ vind je $x=\alpha+k\pi$.
- Een hoofdwaarde van een inverse functie is geen volledige oplossing. Bij een binnenste hoek verandert ook het interval van de binnenste variabele mee. Controleer eindpunten.
- In toepassingen geef je aan welke modelaannames periodiek gedrag ondersteunen en met welke eenheden je rekent.
:::

## Veelgemaakte fouten

Zes valkuilen kwamen in deze module terug. Controleer jezelf op elk ervan:

1. **Graden en radialen verwisselen.** $\sin2$ is ongeveer $0{,}909$ in RAD, niet $0{,}035$.
2. **De periode van $\sin(cx)$ stellen op $c$.** De periode is $\tfrac{2\pi}{|c|}$.
3. **Maar één oplossing geven.** Zoek de twee punten op de cirkel en pas het interval toe.
4. **Amplitude en evenwichtsstand verwisselen.** De amplitude is een afstand, de evenwichtsstand een hoogte.
5. **Het teken van de cosinus in het tweede kwadrant vergeten.** Links van de $y$-as is de cosinus negatief.
6. **Een binnenste hoek niet terugrekenen.** Los eerst voor $u$ op en deel daarna door $c$.

## Wat je nu moet beheersen

Je kunt hoeken omrekenen tussen graden en radialen en booglengtes berekenen. Je bepaalt exacte waarden van sinus en cosinus voor de standaardhoeken met behulp van kwadrant en referentiehoek. Je leest amplitude, evenwichtsstand, periode en fase van een sinusoïde af en stelt zelf een model op. Je lost eenvoudige goniometrische vergelijkingen op, met alle oplossingen in het interval. En je weet waar de grenzen van een model liggen.

Een vooruitblik: in de volgende modules komt de afgeleide. Je zult zien dat de afgeleide van $\sin x$ gelijk is aan $\cos x$, maar alleen wanneer $x$ in radialen staat. Dat is de diepste reden dat je in deze module radialen hebt leren gebruiken.

Maak nu de hoofdstuktoets. Je hebt 70% nodig om de module af te ronden en 85% voor "beheerst".

{{ quiz }}

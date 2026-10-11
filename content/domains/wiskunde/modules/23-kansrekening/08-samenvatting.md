# Samenvatting

Een kansmodel begint met uitkomsten en aannames. Je beschrijft wat er kan gebeuren (de uitkomstenruimte $\Omega$), je kiest uitkomsten die even waarschijnlijk zijn wanneer dat kan, en pas dan reken je. Onderscheid steeds drie dingen: volgorde, herhaling en de categorieën die je telt.

:::summary Kansen bepalen
- **Gunstig gedeeld door mogelijk:** $P(A)=\frac{|A|}{|\Omega|}$, alleen als alle uitkomsten even waarschijnlijk zijn.
- **Relatieve frequentie:** aantal keer dat het optrad gedeeld door aantal proeven. Volgens de wet van de grote aantallen komt zij op de lange duur dicht bij de kans, maar zonder garantie voor een korte reeks.
- Een kans ligt tussen 0 en 1; de kansen van alle afzonderlijke uitkomsten tellen op tot 1.
:::

:::summary Combineren
- **Niet $A$:** $P(A^c)=1-P(A)$. Gebruik dit bij ‘minstens één’.
- **$A$ of $B$ (uitsluitend):** $P(A\cup B)=P(A)+P(B)$.
- **$A$ of $B$ (met overlap):** $P(A\cup B)=P(A)+P(B)-P(A\cap B)$.
- **$A$ en $B$ (onafhankelijk):** $P(A\cap B)=P(A)\,P(B)$. In het algemeen: $P(A\cap B)=P(A)\,P(B\mid A)$.
- **Uitsluitend is niet onafhankelijk:** twee uitsluitende gebeurtenissen met positieve kans zijn juist afhankelijk.
:::

:::summary Kansbomen
- Langs een pad: **vermenigvuldigen**. Tussen paden: **optellen**.
- Per splitsing tellen de takkansen op tot 1; alle eindkansen samen ook.
- Zonder terugleggen verandert de zak: pas teller *en* noemer aan.
- Met terugleggen (en mengen) blijven de kansen per stap gelijk: de trekkingen zijn onafhankelijk.
:::

:::summary Tellen
- **Productregel:** $m\times n$ combinaties bij twee opeenvolgende keuzes.
- **Permutaties:** $n!$ rangschikkingen van $n$ objecten; $\frac{n!}{(n-k)!}$ geordende rijtjes van $k$ uit $n$.
- **Combinaties:** $\binom nk=\frac{n!}{k!\,(n-k)!}$ groepen van $k$ uit $n$ zonder volgorde; $\binom nk=\binom n{n-k}$.
- **Driehoek van Pascal:** $\binom nk=\binom{n-1}{k-1}+\binom{n-1}{k}$; rij $n$ telt op tot $2^n$.
- **Precies $k$ keer kop in $n$ worpen:** $\binom nk\left(\frac12\right)^n$.
:::

## Wat je nu moet beheersen

Je kunt een uitkomstenruimte en gebeurtenis opschrijven en daarmee een kans berekenen. Je kiest bij een telprobleem de juiste techniek (productregel, permutatie, combinatie) en weet waarom volgorde ertoe doet of niet. Je gebruikt het complement bij ‘minstens één’ en de somformule bij overlap. Je tekent een kansboom en rekent met en zonder terugleggen. Je herkent de gokkersdwaling, de verjaardagsparadox en de misleidende uitkomst van een test bij een zeldzame ziekte.

:::tip Typische fouten om te vermijden
1. Kansen optellen bij onafhankelijke gebeurtenissen waar je moet vermenigvuldigen.
2. Denken dat het toeval een geheugen heeft (gokkersdwaling).
3. Bij zonder terugleggen de noemer niet aanpassen.
4. Volgorde wel of niet tellen: podium tegenover commissie.
5. Bij ‘minstens één’ het complement vergeten.
:::

## Historisch in het kort

Het puntenprobleem uit de briefwisseling van Pascal en Fermat (1654) maakte duidelijk dat een eerlijke verdeling afhangt van wat er nog kan gebeuren. Huygens maakte daar in 1657 een eerste gedrukt traktaat van; Jacob Bernoulli bewees in zijn *Ars Conjectandi* (1713) de wet van de grote aantallen. Pascals driehoek verbindt het tellen met de kansen.

## Vooruitblik

In de volgende hoofdstukken gebruik je kansen om gegevens te beschrijven (module 24), om kansvariabelen en kansverdelingen te bestuderen (modules 36–38) en, in module 41, om de regel van Bayes uit te werken waarmee je de medische test van les 7 voluit begrijpt.

{{ quiz }}

# Standaardfout en centrale limietstelling

Als je steeds een nieuwe steekproef trekt, krijg je steeds een ander gemiddelde.
Die denkbeeldige verzameling gemiddelden heeft zelf een verdeling. Onder
onafhankelijke, identiek verdeelde waarnemingen met eindige variantie geldt:

$$
E(\bar X)=\mu,\qquad SE(\bar X)=\frac{\sigma}{\sqrt n}.
$$

De standaardafwijking $\sigma$ beschrijft de **individuele waarnemingen**.
De standaardfout beschrijft de **schatter**. Als $\sigma$ onbekend is,
schat je de standaardfout met $s/\sqrt n$.

:::example Groter meten, minder onzekerheid
Bij $\sigma=12$ en $n=36$ is $SE=2$. Voor $n=144$ is $SE=1$.
Vier keer zoveel waarnemingen halveert de standaardfout. Een factor vier
groter is dus niet hetzelfde als vier keer nauwkeuriger.
:::

{{ exercises: 38-004, 38-005, 38-006, 38-007 }}

## De centrale limietstelling

Onder dezelfde basisvoorwaarden wordt de gestandaardiseerde verdeling van
het gemiddelde bij groeiend $n$ ongeveer normaal. De individuele data hoeven
daarvoor niet normaal te zijn. Sterke scheefheid en zware staarten kunnen een
veel groter $n$ nodig maken; "vanaf 30 altijd goed" is geen wiskundige regel.

{{ widget: sampling n=30 seed=38 }}

Klik herhaald op 100 steekproeven. Vergelijk daarna $n=5$ met $n=100$.
De staafjes stellen **gemiddelden** voor, geen losse reistijden. De simulatie
trekt met terugleggen uit een vaste, scheve populatie. Je kunt daarom het
populatiegemiddelde als referentie gebruiken, iets wat bij echt onderzoek meestal onbekend is.

{{ exercise: 38-008 }}

:::warning Afhankelijke metingen
Honderd metingen op één persoon zijn niet hetzelfde als honderd onafhankelijke
personen. Dagmetingen uit hetzelfde proces kunnen samenhangen. Dan is
$s/\sqrt n$ niet zonder meer de juiste standaardfout. Bij trekken zonder
terugleggen uit een eindige populatie is bovendien een eindigepopulatiecorrectie
nodig als je een substantieel deel van die populatie meet.
:::

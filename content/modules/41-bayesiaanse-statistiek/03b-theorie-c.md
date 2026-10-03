# Een onbekende kans leren uit gegevens

Tot nu toe had H twee mogelijke waarden. Je kunt ook een onbekende
succeskans $p$ zelf als parameter met een priorverdeling beschrijven.
Voor $k$ successen in $n$ conditioneel onafhankelijke Bernoulli-proeven
met dezelfde p is de likelihood evenredig met $p^k(1-p)^{n-k}$.

Een Beta-prior heeft dichtheid evenredig met
$p^{a-1}(1-p)^{b-1}$ voor $0<p<1$, met $a,b>0$.
Bij $a=b=1$ is de dichtheid uniform. Vermenigvuldigen met de likelihood geeft:

$$
p\mid k,n\sim\operatorname{Beta}(a+k,b+n-k).
$$

:::example Zeven successen uit tien
Met Beta(1;1) als prior en 7 successen plus 3 mislukkingen krijg je
Beta(8;4) als posterior. Het posteriorgemiddelde is $8/12=2/3$.
Dat verschilt van de ruwe steekproefproportie 0,7, doordat de prior meeweegt.
:::

{{ exercises: 41-015, 41-016, 41-017 }}

## De invloed van de prior onderzoeken

Met dezelfde data maar Beta(2;2) krijg je Beta(9;5), met gemiddelde
$9/14\approx0{,}6429$. Beide priors zijn symmetrisch rond 0,5, maar
de tweede concentreert meer massa rond dat midden. Bij weinig gegevens kan
de prior merkbaar wegen; bij veel informatieve gegevens neemt haar relatieve invloed vaak af.

{{ exercise: 41-018 }}

De termen a en b kun je in de update als succes- en mislukkingsgewichten
interpreteren. Het zijn geen letterlijk uitgevoerde eerdere proeven, tenzij
je prior daadwerkelijk op zulke proeven is gebaseerd.

## Een posterior is meer dan haar gemiddelde

Een 95%-credible interval bevat 95% van de posteriorkans voor p onder
het gekozen model. Het geeft geen garantie dat de procedure bij elke ware
p een frequentistische dekking van 95% heeft. Bereken de grenzen met
posterior-kwantielen in geschikte software; het gemiddelde plus een
willekeurige marge is geen credible interval.

{{ exercise: 41-019 }}

Rapporteer de prior, likelihood, data, posterior en een gevoeligheidsanalyse.
Zo kan iemand anders zien welke conclusies door de gegevens worden gedragen
en welke sterker van de modelkeuzes afhangen.

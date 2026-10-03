# Basisfrequenties, odds en nieuw bewijs

In het sensorvoorbeeld is de basisfrequentie van defecten 5%. Zelfs een
informatief alarm laat veel ruimte voor goede onderdelen omdat die vóór
het alarm veel talrijker zijn. Dit is het basisfrequentieprobleem: je moet
niet alleen naar de gevoeligheid van het signaal kijken.

Als je hetzelfde signaal in een populatie met een andere defectkans gebruikt,
verandert de posterior. Een prior moet daarom bij de onderzochte situatie
passen. Een oude of niet-vergelijkbare basisfrequentie kan misleiden.

## Odds maken opeenvolgend bijwerken eenvoudig

Odds zijn $p/(1-p)$. Kans 0,2 geeft odds 0,25, ook geschreven als 1:4.
Om terug te gaan naar kans gebruik je $p=o/(1+o)$.

Voor informatie D is de likelihoodratio
$LR=P(D\mid H)/P(D\mid\neg H)$.
Posterior odds zijn prior odds maal LR. Een LR boven 1 ondersteunt H,
een LR onder 1 ondersteunt het alternatief; LR=1 verandert de odds niet.

:::example Eén update
Prior kans 0,2 geeft odds 0,25. Likelihoods 0,8 en 0,1 geven LR=8.
De posterior odds zijn 2, dus de posterior kans is $2/3$.
Dat is dezelfde uitkomst als rechtstreeks met Bayes’ breuk rekenen.
:::

{{ exercises: 41-009, 41-010, 41-011, 41-012 }}

## Twee signalen

Na een update kan de posterior de prior voor de volgende update zijn.
Je mag losse likelihoodratio’s vermenigvuldigen wanneer de signalen
**conditioneel onafhankelijk onder beide hypothesen** zijn. Alleen zeggen
"de sensoren zijn verschillend" onderbouwt dat niet.

Een gekopieerd alarm bevat geen nieuwe informatie. Twee sensoren die door
dezelfde storing worden beïnvloed, kunnen afhankelijk zijn. Gebruik dan
de gezamenlijke likelihood of een model dat die afhankelijkheid beschrijft.

{{ exercises: 41-013, 41-014 }}

Bayes geeft een consistente update **binnen** een gekozen model. Zij maakt
onjuiste uitgangskansen of een verkeerd datamodel niet automatisch juist.

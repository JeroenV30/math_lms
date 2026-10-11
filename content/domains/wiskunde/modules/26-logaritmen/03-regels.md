# Rekenregels en hun voorwaarden

Napiers tabellen werkten omdat een logaritme het rekenen één trap lager brengt: vermenigvuldigen wordt optellen, delen wordt aftrekken en machtsverheffen wordt vermenigvuldigen. In deze les leid je die drie regels zelf af. Je hoeft ze dan niet te onthouden als losse formules; je kunt ze telkens opnieuw uit de machtsregels opbouwen. Daarna kijken we naar de plaatsen waar het misgaat, want bijna alle fouten met logaritmen zijn het verkeerd toepassen van deze regels.

:::question Optellen bij vermenigvuldigen
Bereken met je hoofd $\log_2 8$, $\log_2 4$ en $\log_2 32$. Wat valt je op als je de eerste twee getallen met het derde vergelijkt? Wat gebeurt er met de argumenten 8, 4 en 32 als je ze naast elkaar zet?
:::

Je vindt $\log_2 8 = 3$, $\log_2 4 = 2$ en $\log_2 32 = 5$. De uitkomsten tellen op: $3 + 2 = 5$. En bij de argumenten is het product: $8 \times 4 = 32$. Dat is geen toeval, en ook geen eigenschap van het grondtal 2. Het is een rechtstreeks gevolg van de regel voor het vermenigvuldigen van machten.

## De productregel

Neem twee positieve getallen $u$ en $v$ en een grondtal $g$. Schrijf $p = \log_g u$ en $q = \log_g v$. Volgens de definitie betekent dat $u = g^p$ en $v = g^q$. Vermenigvuldig je de twee getallen, dan geldt volgens de machtsregel dat je bij het vermenigvuldigen van machten met hetzelfde grondtal de exponenten optelt:

$$
u \cdot v = g^p \cdot g^q = g^{p+q}.
$$

Dit zegt dat $p + q$ de exponent is waartoe je $g$ moet verheffen om $uv$ te krijgen. Met andere woorden:

:::formula Productregel
$$
\log_g(u v) = \log_g u + \log_g v \qquad (u > 0,\ v > 0).
$$
:::

## De quotiëntregel

Voor delen gaat het precies zo, met de machtsregel voor delen: bij $\dfrac{g^p}{g^q}$ trek je de exponenten af.

$$
\frac{u}{v} = \frac{g^p}{g^q} = g^{p-q}.
$$

Dus is $p - q$ de exponent bij $\dfrac{u}{v}$:

:::formula Quotiëntregel
$$
\log_g\left(\frac{u}{v}\right) = \log_g u - \log_g v \qquad (u > 0,\ v > 0).
$$
:::

Een bijzonder geval krijg je met $u = 1$. Omdat $\log_g 1 = 0$, volgt $\log_g\left(\tfrac{1}{v}\right) = -\log_g v$. De logaritme van een omgekeerd getal is dus het tegengestelde van de logaritme van dat getal. Zo is $\log_2 \tfrac{1}{8} = -\log_2 8 = -3$.

## De machtsregel

De derde regel komt uit de regel voor een macht van een macht: $(g^p)^r = g^{p \cdot r}$. Voor $u = g^p$ en een willekeurig reëel getal $r$ geldt dus

$$
u^r = \left(g^p\right)^r = g^{p r},
$$

en daarmee:

:::formula Machtsregel
$$
\log_g\left(u^r\right) = r \cdot \log_g u \qquad (u > 0,\ r \text{ reëel}).
$$
:::

Deze regel is waarschijnlijk de belangrijkste van de drie. Staat de onbekende in een exponent, dan haal je hem er met een logaritme voor naar beneden. Dat is precies wat je in les 7 nodig hebt bij vergelijkingen als $1{,}08^t = 2$. Met $r = \tfrac{1}{2}$ zie je ook dat een wortel een logaritme halveert: $\log_g \sqrt{u} = \tfrac{1}{2} \log_g u$.

:::example Een logaritme in stukken
Gebruik $\log 2 \approx 0{,}3010$ en $\log 3 \approx 0{,}4771$ (grondtal 10) om $\log 6$, $\log 5$ en $\log 8$ te schatten.

**Stap 1.** $6 = 2 \cdot 3$, dus $\log 6 = \log 2 + \log 3 \approx 0{,}3010 + 0{,}4771 = 0{,}7781$.

**Stap 2.** $5 = 10 / 2$, dus $\log 5 = \log 10 - \log 2 \approx 1 - 0{,}3010 = 0{,}6990$.

**Stap 3.** $8 = 2^3$, dus $\log 8 = 3 \log 2 \approx 3 \cdot 0{,}3010 = 0{,}9030$.

Met twee opgezochte waarden kreeg je er dus drie. Zo werden logaritmetabellen met veel minder directe berekeningen gemaakt dan er getallen in de tabel staan.
:::

## Meerdere regels combineren

In de praktijk komen de regels vaak samen voor. Vereenvoudigen betekent dan dat je ze in de goede richting toepast: uit elkaar halen als je een product of macht in een argument ziet, en samenvoegen als je een som of verschil van logaritmen met hetzelfde grondtal ziet.

:::example Samenvoegen tot één logaritme
Schrijf $2\ln 3 + \ln 5 - \ln 15$ als één logaritme en bereken die.

**Stap 1.** Gebruik de machtsregel: $2 \ln 3 = \ln\left(3^2\right) = \ln 9$.

**Stap 2.** Gebruik de productregel: $\ln 9 + \ln 5 = \ln 45$.

**Stap 3.** Gebruik de quotiëntregel: $\ln 45 - \ln 15 = \ln \dfrac{45}{15} = \ln 3$.

Het antwoord is dus $\ln 3 \approx 1{,}0986$.
:::

{{ exercises: 26-009, 26-010, 26-011 }}

## Wat de regels niet zeggen

De regels hebben een scherpe vorm: een logaritme van een *product* wordt een *som*, en een logaritme van een *quotiënt* wordt een *verschil*. Er is geen regel voor de logaritme van een som of verschil. Veel fouten komen van het verwisselen van deze richtingen.

:::warning Fout 1: log(a + b) is niet log a + log b
Controleer met getallen in grondtal 10 en $a = b = 10$. Dan is $\log(a + b) = \log 20 \approx 1{,}301$, maar $\log a + \log b = 1 + 1 = 2$. De twee zijn niet gelijk. De som van *logaritmen* hoort bij het *product* van argumenten: $\log a + \log b = \log(ab)$. Een som *binnen* de logaritme laat zich niet splitsen.
:::

:::warning Fout 2: log a / log b is niet log(a − b)
Een quotiënt van twee logaritmen is iets anders dan een verschil van argumenten. Neem in grondtal 2 de waarden $a = 8$ en $b = 2$. Dan is $\dfrac{\log_2 8}{\log_2 2} = \dfrac{3}{1} = 3$, terwijl $\log_2(8 - 2) = \log_2 6 \approx 2{,}585$. En het is ook niet $\log_2\left(\tfrac{8}{2}\right) = \log_2 4 = 2$: dat is het verschil $\log_2 8 - \log_2 2$, geen quotiënt. Het quotiënt van twee logaritmen krijgt in de volgende les een eigen betekenis, bij het veranderen van grondtal.
:::

{{ exercises: 26-032, 26-033 }}

## Het domein: wanneer gelden de regels?

Alle drie de regels vragen om positieve argumenten. Dat is geen detail. De machtsregel zegt bijvoorbeeld dat $\ln\left(x^2\right) = 2\ln x$, maar dat klopt alleen als beide kanten bestaan en dus als $x > 0$. Voor $x = -2$ is de linkerkant $\ln 4$, een gewoon getal, terwijl de rechterkant $2\ln(-2)$ is, en $\ln(-2)$ bestaat niet. De correcte vorm voor alle $x \neq 0$ is

$$
\ln\left(x^2\right) = 2\ln|x|.
$$

Dit heeft een praktisch gevolg bij vergelijkingen. Door een vergelijking om te schrijven met de regels kan het *zichtbare* domein veranderen. Neem $\ln x + \ln(x - 2) = \ln 3$. De oorspronkelijke vergelijking bevat $\ln x$ en $\ln(x - 2)$, dus het domein is $x > 0$ én $x > 2$, dus $x > 2$. Na de productregel staat er $\ln(x(x-2)) = \ln 3$, en die vorm bestaat ook voor negatieve $x$ met $x < 0$. Daardoor kan een oplossing van het omgeschreven probleem buiten het oorspronkelijke domein liggen. De goede werkwijze is daarom:

1. Noteer eerst de voorwaarden van de oorspronkelijke vergelijking.
2. Herschrijf met de regels en los op.
3. Controleer elke kandidaat tegen de voorwaarden van stap 1.

:::tip Domein eerst
Schrijf bovenaan je uitwerking het domein. Het kost één regel en voorkomt dat je een oplossing meeneemt die in de oorspronkelijke vergelijking niet eens bestaat. Dit wordt in les 7 beproefd met een vergelijking waarin een van de twee kandidaten afvalt.
:::

{{ exercises: 26-012, 26-013 }}

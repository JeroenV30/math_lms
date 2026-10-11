# Samenvatting — informatie verandert je referentiegroep

Bayes’ regel combineert een prior met de kans op de waargenomen data onder
ieder mogelijk model. De totale-kansregel levert de normalisatie. Natuurlijke
frequenties maken zichtbaar welke waarnemingen na conditioneren overblijven.
Het centrale inzicht van deze module is dat $P(D\mid H)$ en $P(H\mid D)$
verschillende vragen beantwoorden, en dat de prior het verschil maakt.

:::summary Kernpunten
- $P(D\mid H)$ en $P(H\mid D)$ zijn verschillende kansen met verschillende
  referentiegroepen; ze verwisselen is de prosecutor's fallacy.
- Bayes' regel volgt uit $P(H\cap D)=P(D\mid H)P(H)=P(H\mid D)P(D)$.
- Basisfrequenties en valse signalen zijn noodzakelijk voor een juiste update;
  de positief voorspellende waarde hangt af van de prevalentie.
- Posterior odds zijn prior odds maal likelihoodratio; bewijskracht in bans is de
  logaritme van de LR.
- Vermenigvuldig losse updates alleen met passende conditionele onafhankelijkheid
  en gebruik de posterior van stap 1 als prior van stap 2.
- Bij een Beta($a$;$b$)-prior en $k$ successen in $n$ proeven is de posterior
  Beta($a+k$;$b+n-k$), met gemiddelde $(a+k)/(a+b+n)$.
- Bij weinig data weegt de prior zwaar, bij veel data nauwelijks.
- Een posterior bevat onzekerheid; haar gemiddelde is slechts een samenvatting.
- Een credible interval en een betrouwbaarheidsinterval hebben verschillende
  interpretaties.
:::

## Wat je nu moet beheersen

Je kunt een kruistabel of kansboom opstellen vanuit sensitiviteit, specificiteit
en prevalentie en daaruit de positief en negatief voorspellende waarde afleiden. Je
herkent vijf typische fouten: de sensitiviteit als posterior lezen, de prevalentie
vergeten, odds en kans verwarren, de prior negeren en een tweede update niet op
de posterior van de eerste baseren. Je werkt een Beta-prior bij met data en je
beoordeelt hoe gevoelig de uitkomst is voor die prior.

Een correcte berekening blijft afhankelijk van een passend model. In het
eindonderzoek gebruik je alle voorgaande ideeën om echte gegevens te
beschrijven, een vraag te toetsen en een beperkte, navolgbare conclusie te schrijven.

{{ quiz }}

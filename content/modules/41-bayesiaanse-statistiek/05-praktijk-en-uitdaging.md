# Een product herleiden naar zijn machine

Een fabriek gebruikt twee machines. Machine A maakt het grootste deel van de
producten, maar machine B heeft een hogere defectkans. Als je een defect
product vindt, is de meest gebruikte machine dan ook de meest waarschijnlijke
bron? Je moet productieaandeel en defectkans samenwegen.

{{ exercise: 41-020 }}

## Maak de routes zichtbaar

Teken eerst twee takken voor de machines. Splits iedere tak in goed en defect.
Vermenigvuldig de kansen langs elke route. Selecteer daarna alleen de
defectroutes en normaliseer hun bijdragen. Die werkwijze helpt ook wanneer
er drie of meer bronnen zijn.

:::practice Controleer je posterior
Alle posterior-kansen moeten tussen 0 en 1 liggen en samen 1 zijn. Vergelijk
de uitkomst met je prior: welk bewijs zorgt voor de verschuiving? Onderzoek
wat er verandert als de defectkansen niet precies bekend zijn.
:::

In echte kwaliteitsanalyse zijn defectkansen vaak zelf schattingen. Dan kan
een tweede laag onzekerheid nodig zijn. De eenvoudige opgave behandelt ze
als gegeven om de richting van de update goed te leren.

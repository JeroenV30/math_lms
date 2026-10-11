# Van veel mogelijkheden naar één verdelingsfamilie

:::question Een vraag om mee te beginnen
Je gooit een eerlijke munt duizend keer. Het aantal keer kop is vrijwel nooit precies 500. Hoe waarschijnlijk is het dat het aantal tussen 480 en 520 ligt? Hoe zou je dat uitrekenen zonder honderden afzonderlijke kansen op te tellen, en waarom zou het antwoord er voor een munt, een fabrieksmachine en een groep patiënten zo ongeveer hetzelfde uitzien?
:::

:::history Een klok uit muntworpen
In de zeventiende eeuw rekenden Pascal, Fermat en Huygens kansen uit voor spelletjes met een handvol worpen. Jakob Bernoulli ging een stap verder: wat gebeurt er als je een proef heel vaak herhaalt? Zijn *Ars Conjectandi* (1713, na zijn dood verschenen) liet zien dat de relatieve frequentie van een gebeurtenis zich steeds dichter om de kans heen vestigt. Maar het antwoord op de vraag "hoe dicht, en met welke zekerheid?" vroeg om het uitrekenen van enorme sommen binomiale kansen. In 1733 vond Abraham de Moivre een benadering die die sommen vervangt door het oppervlak onder een klokvormige kromme. Dezelfde kromme dook later op bij Gauss, die er de afwijkingen in astronomische metingen mee beschreef.
:::

## Waarom bestaat deze wiskunde?

In module 36 leerde je een kansvariabele te beschrijven met een verdeling: een overzicht van de mogelijke waarden en hun kansen. Je kon voor elke situatie een eigen tabel opstellen. Dat werkt voor een worp met twee dobbelstenen, maar het wordt onhandelbaar zodra het aantal mogelijkheden groeit. Een controleur die twintig producten inspecteert, heeft eenentwintig mogelijke uitkomsten voor het aantal defecte stuks; bij tweehonderd producten zijn het er tweehonderdeneen. Niemand schrijft zulke tabellen met de hand uit.

Gelukkig hebben heel verschillende situaties dezelfde onderliggende structuur. Een munt werpen, een product inspecteren, een patiënt behandelen, een kiezer ondervragen: telkens is er een proef met twee uitkomsten, en telkens herhaal je die onder dezelfde voorwaarden. Als je die structuur eenmaal herkent, hoef je niet elke situatie opnieuw te modelleren. Je kiest een **verdelingsfamilie** en vult enkele getallen in, de *parameters*.

Dat is het doel van deze module: een beperkte verzameling standaardverdelingen leren herkennen, gebruiken en kritisch beoordelen. Je ontmoet drie families.

- De **binomiale verdeling** telt successen in een vast aantal onafhankelijke proeven met dezelfde kans. Ze is exact en discreet.
- De **Poisson-verdeling** telt zeldzame gebeurtenissen: het aantal gesprekken per uur, het aantal drukfouten per pagina. Ze ontstaat als limiet van de binomiale verdeling wanneer $n$ groot en $p$ klein is.
- De **normale verdeling** is continu en klokvormig. Ze beschrijft metingen met veel kleine, onafhankelijke invloeden, en ze benadert de binomiale verdeling bij veel proeven.

Er is nog een reden om dit serieus te nemen. Vrijwel alle toetsende statistiek uit de volgende modules, van betrouwbaarheidsintervallen tot hypothesetoetsen, rust op de normale en de binomiale verdeling. Wie die twee niet beheerst, rekent daar later op gevoel.

## Wat je in deze module doet

Je begint met de binomiale verdeling: de voorwaarden waaronder ze geldt, de formule voor $P(X=k)$, en de verwachting en spreiding. Daarna leer je de normale verdeling kennen, en hoe je met een z-score en een tabel kansen bepaalt, ook omgekeerd: bij welke grens hoort een gegeven kans? Dan volgt de brug tussen beide: cumulatieve kansen en de normale benadering van de binomiale verdeling, met de continuïteitscorrectie die daarbij hoort. In de vierde theorieles komen de Poisson-verdeling en de som van normale variabelen aan bod. Een historisch intermezzo vertelt hoe de klokkromme van muntworpen via sterrenkunde en volkstellingen een standaardhulpmiddel werd. Het geheel sluit af met praktijkvragen en een toets.

Eén waarschuwing vooraf. Een verdeling is een **model**, geen natuurwet. Dat een situatie "er binomiaal uitziet" is een aanname die je moet kunnen verdedigen. Veel van de fouten die in dit vak gemaakt worden, zijn geen rekenfouten maar modelfouten: een binomiaal model gebruiken waar de proeven afhankelijk zijn, of een normale benadering waar de verdeling duidelijk scheef is. Je oefent daarom steeds met twee vragen: welk model past, en wat betekent het antwoord?

{{ goals }}

{{ glossary }}

# Kwartielen en boxplots

Voor kleine datasets bestaan verschillende kwartielconventies. In deze module sorteer je eerst, bepaal je de mediaan en neem je daarna de mediaan van de onderste en bovenste helft. Bij een oneven aantal **laat je de middelste observatie buiten beide helften**. Voor één observatie stelt de widget alle kwartielen gelijk aan die waarde; de oefeningen gebruiken grotere datasets.

:::example Vijf waarden
Bij 1, 3, 5, 7, 9 is de mediaan 5. De onderste helft {1, 3} geeft Q₁ = 2; de bovenste helft {7, 9} geeft Q₃ = 8. De interkwartielafstand is 6. Software met een andere conventie kan andere kwartielen rapporteren.
:::

Een boxplot tekent een box van Q₁ tot Q₃ met een lijn bij de mediaan. In de **minimum/maximumvariant** lopen de snorren naar minimum en maximum. De widget hieronder gebruikt die variant. Een lang stuk van een boxplot betekent veel afstand tussen grenswaarden, niet automatisch veel waarnemingen.

{{ widget: boxplot values="1; 3; 5; 7; 9" }}

Boxplots met een uitschieterregel gebruiken vaak grenzen Q₁ − 1,5 IQR en Q₃ + 1,5 IQR. De snorren gaan dan naar de verste werkelijk waargenomen waarden binnen die grenzen; buitenliggende waarden krijgen losse punten. De berekende grenzen zelf zijn dus niet noodzakelijk de snoruiteinden. Vermeld altijd welke variant je leest. Zie [NIST over boxplots](https://itl.nist.gov/div898/handbook/eda/section3/boxplot.htm).

{{ exercises: 24-009, 24-010, 24-011, 24-012, 24-013 }}

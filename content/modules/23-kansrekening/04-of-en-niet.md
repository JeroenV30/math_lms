# Of, en en niet

‘A of B’ betekent in de kansrekening: A, B of allebei. Dit inclusieve of is een **vereniging**. Bij het optellen van P(A) en P(B) tel je hun overlap tweemaal. Daarom trek je $P(A\cap B)$ één keer af.

:::example Overlap
Bij een eerlijke dobbelsteen is A = even en B = groter dan 3. A bevat {2, 4, 6}, B bevat {4, 5, 6}; de overlap is {4, 6}. De vereniging bevat {2, 4, 5, 6}: kans 4/6. Met de formule: $3/6+3/6-2/6=4/6$.
:::

Het complement van A is ‘niet A’, met kans $1-P(A)$. ‘Minstens één kop’ bij drie worpen is het complement van ‘geen enkele kop’. Bij onafhankelijke eerlijke worpen krijg je $1-(1/2)^3=7/8$.

:::warning Uitsluiting is geen onafhankelijkheid
‘Eén’ en ‘zes’ bij dezelfde worp sluiten elkaar uit. Als je weet dat de uitkomst één is, is de kans op zes nul geworden. Deze gebeurtenissen zijn dus afhankelijk. Onafhankelijk betekent dat kennis van de ene gebeurtenis de kans op de andere niet verandert.
:::

{{ exercises: 23-013, 23-014, 23-015, 23-016, 23-017 }}

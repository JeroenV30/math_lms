# Amplitude, middenhoogte en fase

Een sinusmodel heeft de vorm $y=d+A\sin(b(t-c))$. Bij A ≠ 0 en b ≠ 0 is de amplitude |A|, de evenwichtsstand d en de periode T = 2π/|b|. Het bereik is [d − |A|; d + |A|]. De parameter c verschuift de basisgrafiek horizontaal.

Bij positieve A en b passeert de grafiek bij t = c de evenwichtsstand stijgend. Negatieve A of b kan die richting omkeren. Dezelfde functie kan meerdere equivalente fasebeschrijvingen hebben, omdat je hele perioden mag verschuiven.

:::example Een hoogte
$h(t)=10+3\sin((\pi/6)(t-2))$ heeft middenhoogte 10, amplitude 3 en periode 12 tijdseenheden. De hoogte ligt tussen 7 en 13. Bij t = 2 is de hoogte 10 en stijgt de grafiek; bij t = 5 is de hoek π/2 en de hoogte 13.
:::

{{ widget: function-plot fn="d+a*sin(b*(x-c))" d="10" dmin="0" dmax="15" a="3" amin="1" amax="5" b="0.5" bmin="0.2" bmax="2" c="2" cmin="-4" cmax="4" xmin="0" xmax="24" ymin="0" ymax="20" }}

De beginwaarde is niet automatisch d: daarvoor moet de sinus bij t = 0 nul zijn. Lees ook de vorm van de binnenste expressie zorgvuldig: sin(2t − 4) = sin(2(t − 2)), met verschuiving 2, niet 4.

{{ exercises: 27-017, 27-018, 27-019, 27-020, 27-021 }}

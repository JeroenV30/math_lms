# Steeds hetzelfde erbij of steeds dezelfde factor?

Een hoeveelheid begint bij 100. Model A voegt elk uur 20 toe: 100, 120, 140, 160. Model B vermenigvuldigt elk uur met 1,2: 100, 120, 144, 172,8. De eerste stap is gelijk; daarna lopen de modellen uiteen.

Bij lineaire groei is de **absolute verandering** constant. Bij exponentiële groei is de **relatieve verandering** constant. In model B is de toename steeds 20% van de hoeveelheid die er op dat moment al is.

{{ goals }}

{{ widget: function-plot fn="100*1.2^x" fn2="100+20*x" xmin="0" xmax="10" ymin="0" ymax="700" }}

De grafiek gebruikt een continu tijdmodel. Als je alleen op gehele uren telt of afrekent, zijn juist die afzonderlijke tijdstippen rechtstreeks van toepassing.

{{ exercises: 25-001, 25-002, 25-003, 25-004 }}

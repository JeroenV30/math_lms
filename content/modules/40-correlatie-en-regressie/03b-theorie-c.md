# Residuen, onzekerheid en voorspellen

Een beschrijvende lijn kun je altijd berekenen wanneer x varieert.
Voor klassieke intervallen en toetsen heb je meer nodig: een lineair
gemiddeldeverband, onafhankelijke fouten met gemiddelde nul en gelijke
variantie, en voor exacte kleine-steekproef-t-inferentie normale fouten.

Bekijk residuen tegen x of tegen de voorspelde waarde. Een boog wijst op
gemiste kromming; een waaier op veranderende spreiding; een tijdpatroon
op mogelijke afhankelijkheid. Controleer daarnaast invloedrijke punten.

{{ exercise: 40-017 }}

## Onzekerheid over de helling

Er zijn twee parameters geschat. Daardoor gebruikt de residuspreiding
$n-2$ vrijheidsgraden:

$$
s_e=\sqrt{\frac{\mathrm{SSE}}{n-2}},\qquad
SE(b_1)=\frac{s_e}{\sqrt{S_{xx}}}.
$$

Bij de vijf voorbeeldpunten is $s_e=\sqrt{2{,}4/3}\approx0{,}894$
en $SE(b_1)\approx0{,}283$. Tegen $H_0:\beta_1=0$ is
$t=b_1/SE(b_1)\approx2{,}12$ met 3 vrijheidsgraden. Voor een tweezijdige
5%-toets is de kritieke waarde 3,182. De r van ongeveer 0,775 geeft dus
bij deze kleine steekproef geen significante helling op dat niveau.

{{ exercises: 40-014, 40-015, 40-016 }}

## Een voorspelling heeft extra onzekerheid

Een interval voor de gemiddelde y bij $x_0$ en een voorspellingsinterval
voor een **nieuwe individuele** y zijn verschillend. Met
$h_0=1/n+(x_0-\bar x)^2/S_{xx}$ zijn hun standaardfouten respectievelijk
$s_e\sqrt{h_0}$ en $s_e\sqrt{1+h_0}$. Het individuele interval is breder
door de extra variatie van een nieuwe waarneming.

Beide worden breder verder van $\bar x$. Buiten het waargenomen x-bereik
komt daar onzekerheid over de geldigheid van het model bij. Die is niet
automatisch inbegrepen in de formule.

{{ exercises: 40-018, 40-019 }}

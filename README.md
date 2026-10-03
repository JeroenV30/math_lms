# Rekenen & Wiskunde door de Eeuwen

Een lokaal draaiende, interactieve leeromgeving die rekenen en wiskunde vanaf
het absolute basisniveau opnieuw opbouwt tot statistiek op HBO/WO-niveau — met
de geschiedenis van het wiskundige denken als leidraad. Gebouwd volgens
`build_plan.docx`.

**Kern:** begrijpen → toepassen → fouten maken → uitleg krijgen → opnieuw proberen → beheersen.

## Stand van zaken

| Onderdeel | Status |
|---|---|
| Deel I – Fundamenten (modules 1–6) | Volledig: 43 lessen, 216 oefeningen, 6 toetsen (90 vragen) |
| Deel II – Basisschool bovenbouw (modules 7–12) | Volledig: 47 lessen, 186 oefeningen, 6 toetsen (90 vragen) |
| Deel III – VMBO / basis middelbaar (modules 13–18) | Volledig: 48 lessen, 180 oefeningen, 6 toetsen (90 vragen) |
| Deel IV – HAVO (modules 19–24) | Volledig: 48 lessen, 180 oefeningen, 6 toetsen (90 vragen) |
| Modules 25–42 | Metadata en opzet; inhoud volgt |
| Historische tijdlijn | 60 gebeurtenissen |
| Wiskundigenbibliotheek | 23 profielen |
| Oefenengine | numeric, decimal, fraction, expression, coordinate, interval, multiple (+ foutenanalyse) |
| Voortgang, beheersing, spaced repetition | Werkend |

## Installatie

Vereist: PHP 8.3+, Composer, Node 20+.

```bash
composer install
cp .env.example .env        # DB_CONNECTION=sqlite staat al goed
php artisan key:generate
php artisan migrate
npm install
npm run build
php artisan serve           # http://127.0.0.1:8000
```

Tijdens ontwikkelen in een tweede terminal `npm run dev` voor live herladen.

> De ingebouwde PHP-server verwerkt op Windows één verzoek tegelijk. Voor
> dagelijks gebruik is dat prima; bij heel snel klikken kan een pagina even
> blijven hangen. Herstart dan `php artisan serve`.

## Architectuur

Content en applicatielogica zijn volledig gescheiden (bouwplan §4):

- **Laag A – content** (`content/`): Markdown en JSON. Zie
  [`docs/CONTENT_GUIDE.md`](docs/CONTENT_GUIDE.md) voor het exacte formaat en
  [`docs/HISTORY_IDS.md`](docs/HISTORY_IDS.md) voor de tijdlijn-id's.
- **Laag B – applicatie** (`app/`, `resources/`, `routes/`): Laravel leest en
  presenteert de content.
- **Laag C – gebruikersgegevens** (SQLite): alleen pogingen, voortgang,
  beheersing en instellingen.

```
ContentService ──► LessonRenderer / MarkdownRenderer ──► lessen, kaders, KaTeX, widgets
       │
       ▼
ExerciseService ──► AnswerCheckerFactory ──► zeven checkers, inclusief meerdere invoervelden
       │
       ├──► exercise_attempts
       ├──► MasteryService (topic_mastery: +3 goed, +1 met hint, −5 fout)
       └──► ProgressService (module_progress: afgerond ≥ 70%, beheerst ≥ 85%)
                    │
                    ▼
             ReviewService (60% zwak · 25% normaal · 15% oude stof)
```

Instelbare regels (drempels, beheersingspunten, herhalingsintervallen) staan in
[`config/course.php`](config/course.php).

## Content toevoegen

1. Vul `content/modules/NN-slug/module.json` aan en zet `status` op `available`.
2. Schrijf de lessen in Markdown (kaders `:::history`, formules `$…$`,
   directieven `{{ exercise: NN-001 }}`, `{{ widget: … }}`).
3. Zet oefeningen in `exercises.json` en de toets in `quiz.json`.
4. Controleer met:

```bash
php artisan content:validate
```

## Tests

```bash
php artisan test
```

De engine-tests draaien op een kleine vaste testcursus (`tests/Fixtures/content`);
`ContentIntegrityTest` valideert de echte content.

## Routes

`/` dashboard · `/course` cursusoverzicht · `/course/{module}` · `/course/{module}/lesson/{les}` ·
`/course/{module}/quiz` · `/practice` · `/review` · `/progress` · `/history` ·
`/mathematicians` · `/glossary` · `/formulas` · `/search` · `/settings`

## Bewust niet in versie 1

Accounts, cloud, AI-tutor, badges, rankings, CMS, docentomgeving en API
(bouwplan §47). De database is zo opgezet dat later een `user_id` kan worden
toegevoegd.

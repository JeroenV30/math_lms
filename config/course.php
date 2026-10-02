<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Content
    |--------------------------------------------------------------------------
    |
    | De cursusinhoud (Markdown/JSON) staat buiten de applicatiecode.
    |
    */

    'content_path' => env('COURSE_CONTENT_PATH', base_path('content')),

    /*
    |--------------------------------------------------------------------------
    | Toetsregels
    |--------------------------------------------------------------------------
    |
    | Vanaf welke toetsscore een module als afgerond of beheerst geldt.
    | De gebruiker mag altijd door: dit zijn geen blokkades.
    |
    */

    'completed_score' => 70,
    'mastered_score' => 85,

    /*
    |--------------------------------------------------------------------------
    | Beheersing (mastery)
    |--------------------------------------------------------------------------
    |
    | Eenvoudig puntenmodel per onderwerp (0–100). Een onderwerp dat voor het
    | eerst geoefend wordt start op 'initial'.
    |
    */

    'mastery' => [
        'initial' => 50,
        'correct' => 3,
        'correct_with_hint' => 1,
        'correct_after_solution' => 0,
        'wrong' => -5,
    ],

    /*
    |--------------------------------------------------------------------------
    | Herhaling
    |--------------------------------------------------------------------------
    |
    | Na hoeveel uur een onderwerp opnieuw aan de beurt is, afhankelijk van de
    | beheersing. Lage beheersing komt snel terug, hoge alleen voor onderhoud.
    |
    */

    'review_intervals' => [
        // ondergrens beheersing => interval in uren
        95 => 24 * 30,
        85 => 24 * 14,
        70 => 24 * 7,
        50 => 24 * 3,
        0 => 4,
    ],

    'review_session_size' => 10,

    'review_mix' => [
        'weak' => 0.60,
        'normal' => 0.25,
        'random' => 0.15,
    ],

    'weak_threshold' => 70,

];

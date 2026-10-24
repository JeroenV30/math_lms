<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Herhaling die meegroeit: per onderwerp het huidige herhalingsinterval en
 * het aantal herhalingen op rij dat op tijd en zonder hulp goed ging.
 * Bestaande rijen beginnen leeg; het interval volgt dan uit de score.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::table('topic_mastery', function (Blueprint $table) {
            $table->unsignedInteger('interval_hours')->nullable()->after('wrong_answers')->comment('huidig herhalingsinterval');
            $table->unsignedSmallInteger('review_streak')->default(0)->after('interval_hours')->comment('geslaagde herhalingen op rij');
        });
    }

    public function down(): void
    {
        Schema::table('topic_mastery', function (Blueprint $table) {
            $table->dropColumn(['interval_hours', 'review_streak']);
        });
    }
};

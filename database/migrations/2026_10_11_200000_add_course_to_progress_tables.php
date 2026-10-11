<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Voortgang per cursus: elk kennisdomein met een cursus houdt zijn eigen modules,
 * lessen, toetsen en onderwerpen bij. Bestaande voortgang hoort bij wiskunde.
 */
return new class extends Migration
{
    public function up(): void
    {
        foreach (['exercise_attempts', 'quiz_attempts'] as $name) {
            Schema::table($name, function (Blueprint $table) {
                $table->string('course', 40)->default('wiskunde')->after('id')->index();
            });
        }

        Schema::table('module_progress', function (Blueprint $table) {
            $table->string('course', 40)->default('wiskunde')->after('id');
            $table->dropUnique(['module_id']);
            $table->unique(['course', 'module_id']);
        });

        Schema::table('lesson_progress', function (Blueprint $table) {
            $table->string('course', 40)->default('wiskunde')->after('id');
            $table->dropUnique(['module_id', 'lesson_slug']);
            $table->unique(['course', 'module_id', 'lesson_slug']);
        });

        Schema::table('topic_mastery', function (Blueprint $table) {
            $table->string('course', 40)->default('wiskunde')->after('id');
            $table->dropUnique(['topic']);
            $table->unique(['course', 'topic']);
        });
    }

    public function down(): void
    {
        Schema::table('topic_mastery', function (Blueprint $table) {
            $table->dropUnique(['course', 'topic']);
            $table->unique(['topic']);
            $table->dropColumn('course');
        });

        Schema::table('lesson_progress', function (Blueprint $table) {
            $table->dropUnique(['course', 'module_id', 'lesson_slug']);
            $table->unique(['module_id', 'lesson_slug']);
            $table->dropColumn('course');
        });

        Schema::table('module_progress', function (Blueprint $table) {
            $table->dropUnique(['course', 'module_id']);
            $table->unique(['module_id']);
            $table->dropColumn('course');
        });

        foreach (['quiz_attempts', 'exercise_attempts'] as $name) {
            Schema::table($name, function (Blueprint $table) {
                $table->dropIndex(['course']);
                $table->dropColumn('course');
            });
        }
    }
};

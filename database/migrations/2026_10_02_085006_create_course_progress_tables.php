<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Laag C – gebruikersgegevens. Alleen dynamische informatie; de cursusinhoud
 * zelf staat in content/. Versie 1 kent één lokale gebruiker: wanneer accounts
 * nodig zijn, krijgt elke tabel hier een user_id.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('exercise_attempts', function (Blueprint $table) {
            $table->id();
            $table->string('exercise_id')->index();
            $table->unsignedSmallInteger('module_id')->index();
            $table->string('context', 20)->default('lesson');
            $table->string('answer');
            $table->boolean('is_correct');
            $table->unsignedTinyInteger('hints_used')->default(0);
            $table->boolean('solution_viewed')->default(false);
            $table->unsignedInteger('attempt_number')->default(1);
            $table->unsignedInteger('response_time')->nullable()->comment('milliseconden');
            $table->timestamps();
        });

        Schema::create('module_progress', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('module_id')->unique();
            $table->string('status', 20)->default('not_started');
            $table->timestamp('started_at')->nullable();
            $table->timestamp('completed_at')->nullable();
            $table->unsignedTinyInteger('score')->nullable()->comment('beste toetsscore 0–100');
            $table->unsignedInteger('attempts')->default(0)->comment('aantal toetspogingen');
            $table->string('last_lesson')->nullable();
            $table->timestamp('last_visited_at')->nullable();
            $table->timestamps();
        });

        Schema::create('lesson_progress', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('module_id');
            $table->string('lesson_slug');
            $table->timestamp('completed_at')->nullable();
            $table->timestamps();

            $table->unique(['module_id', 'lesson_slug']);
        });

        Schema::create('quiz_attempts', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('module_id')->index();
            $table->unsignedTinyInteger('score');
            $table->unsignedSmallInteger('correct');
            $table->unsignedSmallInteger('total');
            $table->json('answers');
            $table->timestamps();
        });

        Schema::create('topic_mastery', function (Blueprint $table) {
            $table->id();
            $table->string('topic')->unique();
            $table->unsignedTinyInteger('score')->default(0);
            $table->unsignedInteger('correct_answers')->default(0);
            $table->unsignedInteger('wrong_answers')->default(0);
            $table->timestamp('last_practiced_at')->nullable();
            $table->timestamp('next_review_at')->nullable()->index();
            $table->timestamps();
        });

        Schema::create('user_settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->text('value')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_settings');
        Schema::dropIfExists('topic_mastery');
        Schema::dropIfExists('quiz_attempts');
        Schema::dropIfExists('lesson_progress');
        Schema::dropIfExists('module_progress');
        Schema::dropIfExists('exercise_attempts');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('seminars', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('examiner_1')->nullable();
            $table->string('examiner_2')->nullable();
            $table->string('thesis_title');
            $table->string('supervisor_1');
            $table->string('supervisor_2');
            $table->string('type');
            $table->integer('sks');

            $table->text('seminar_attending_file')->nullable();
            $table->text('lecture_approval_file')->nullable();
            $table->text('approval_file')->nullable();
            $table->text('guidance_file')->nullable();
            $table->text('revision_file')->nullable();
            $table->text('docs_file')->nullable();
            $table->text('ppt_file')->nullable();

            $table->timestamps();

            $table->foreignUuid('user_id')->unique()->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seminars');
    }
};

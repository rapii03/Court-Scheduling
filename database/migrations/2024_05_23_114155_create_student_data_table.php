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
        Schema::create('student_data', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('academic_adviser')->nullable();
            $table->string('semester', 2)->nullable();
            $table->text('image')->nullable();
            $table->string('supervisor_1');
            $table->string('supervisor_2');
            $table->string('thesis_title');
            $table->string('nim');
            $table->string('kk');

            $table->timestamps();

            $table->foreignUuid('user_id')->unique()->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_data');
    }
};

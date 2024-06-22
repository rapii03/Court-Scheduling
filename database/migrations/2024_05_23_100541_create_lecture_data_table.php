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
        Schema::create('lecture_data', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('kk');
            $table->string('nip');
            $table->text('image')->nullable();
            $table->string('nidn');
            $table->string('address')->nullable();
            $table->string('phone_number')->nullable();

            $table->timestamps();

            $table->foreignUuid('user_id')->unique()->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lecture_data');
    }
};

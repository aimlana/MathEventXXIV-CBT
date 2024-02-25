<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('soal_smas', function (Blueprint $table) {
            $table->id();
            $table->string('soal,512');
            $table->string('jawaban_a')->nullable();
            $table->string('jawaban_b')->nullable();
            $table->string('jawaban_c')->nullable();
            $table->string('jawaban_d')->nullable();
            $table->string('jawaban_e')->nullable();
            $table->string('jawaban_benar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soal_smas');
    }
};

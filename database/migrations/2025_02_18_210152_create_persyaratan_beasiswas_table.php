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
        Schema::create('persyaratan_beasiswas', function (Blueprint $table) {
            $table->id('id_persyaratan');
            $table->unsignedBigInteger('id_beasiswa');
            $table->foreign('id_beasiswa')->references('id_beasiswa')->on('beasiswas')->onDelete('cascade');
            $table->text('persyaratan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persyaratan_beasiswas');
    }
};

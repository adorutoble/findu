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
        Schema::create('beritas', function (Blueprint $table) {
            $table->id('id_berita'); // Primary Key
            $table->string('judul_berita');
            $table->text('deskripsi_berita')->nullable();
            $table->date('tanggal_rilis')->nullable();

            // Foreign Key ke Universitas
            $table->unsignedBigInteger('id_univ');
            $table->foreign('id_univ')->references('id_univ')->on('universitas')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beritas');
    }
};

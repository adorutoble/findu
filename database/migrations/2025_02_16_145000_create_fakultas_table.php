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
        Schema::create('fakultas', function (Blueprint $table) {
            $table->id('id_fakultas'); // Primary Key
            $table->string('nama_fakultas');
            $table->text('deskripsi')->nullable();
            $table->unsignedBigInteger('id_univ'); // Foreign Key ke Universitas
            $table->foreign('id_univ')->references('id_univ')->on('universitas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fakultas');
    }
};

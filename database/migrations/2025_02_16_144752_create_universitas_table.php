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
        Schema::create('universitas', function (Blueprint $table) {
            $table->id('id_univ'); // Primary Key
            $table->string('nama_univ');
            $table->text('alamat')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('website')->nullable();
            $table->text('deskripsi_univ')->nullable();
            $table->string('akreditasi')->nullable();
            $table->string('stat_univ'); // Negeri / Swasta
            $table->integer('jumlah_prodi')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('universitas');
    }
};

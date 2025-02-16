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
        Schema::create('universities', function (Blueprint $table) {
            $table->id('id_univ');
            $table->string('nama_univ');
            $table->text('alamat');
            $table->string('no_telp')->nullable();
            $table->string('website')->nullable();
            $table->text('deskripsi_univ')->nullable();
            $table->string('akreditasi')->nullable();
            $table->string('stat_univ')->nullable();
            $table->integer('jumlah_prodi')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('universities');
    }
};

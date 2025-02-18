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
        Schema::create('daya_tampungs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_univ');
            $table->foreign('id_univ')->references('id_univ')->on('universitas')->onDelete('cascade');
            $table->unsignedBigInteger('id_jurusan');
            $table->foreign('id_jurusan')->references('id_jurusan')->on('jurusans')->onDelete('cascade');
            $table->year('tahun');
            $table->integer('daya_tampung');
            $table->integer('jumlah_peminat');
            $table->timestamps();

            // $table->unique(['id_jurusan', 'tahun']);
            $table->unique(['id_jurusan', 'tahun', 'id_univ']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('daya_tampungs', function (Blueprint $table) {
            $table->dropForeign(['id_univ']);
            $table->dropColumn('id_univ');
        });
    }
};

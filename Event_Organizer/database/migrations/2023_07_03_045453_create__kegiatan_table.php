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
        Schema::create('Kegiatan', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->integer('kapasitas');
            $table->integer('harga_tiket');
            $table->date('tanggal');
            $table->string('narasumber');
            $table->string('tempat');
            $table->string('jenis_kegiatan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Kegiatan');
    }
};

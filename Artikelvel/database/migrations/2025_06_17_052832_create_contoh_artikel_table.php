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
        Schema::create('contoh_artikel', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 512);
            $table->text('isi');
            $table->string('slug', 512)->unique();
            $table->string('gambar', 512)->nullable();
            $table->string('penulis', 256)->nullable();
            $table->dateTime('tanggal')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contoh_artikel');
    }
};

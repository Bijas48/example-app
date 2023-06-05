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
        Schema::create('layanans', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('nama');
            $table->string('gambar');
            $table->text('deksripsi');
            $table->text('fasilitas');
            $table->text('jambuka');
            $table->text('lokasi');
            $table->text('gmaps');
            $table->string('telp');
            $table->string('email');
            $table->text('url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layanans');
    }
};

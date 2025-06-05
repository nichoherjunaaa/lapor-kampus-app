<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('keluhan', function (Blueprint $table) {
            $table->string('id_keluhan')->primary();
            $table->string('username');
            $table->string('nama');
            $table->text('deskripsi');
            $table->string('gambar')->nullable();
            $table->unsignedBigInteger('kategori');
            $table->string('lokasi');
            $table->enum('prioritas', ['rendah', 'sedang', 'tinggi']);
            $table->enum('status', ['terselesaikan', 'diproses']);
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('username')->references('username')->on('users')->onDelete('cascade');
            $table->foreign('kategori')->references('id_kategori')->on('kategori_keluhan')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keluhan');
    }
};

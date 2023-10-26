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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role')->default('mahasiswa');
            $table->integer('nim');
            $table->string('nama');
            $table->string('status');
            $table->string('departemen')->default('Informatika');
            $table->string('fakultas')->default('Sains dan Matematika');
            $table->string('angkatan');
            $table->string('jalur_masuk');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('alamat');
            $table->string('foto');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};

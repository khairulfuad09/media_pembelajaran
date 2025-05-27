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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // $table->unsignedBigInteger('id_grade');
            $table->string('NISN_NIP')->unique();
            $table->string('password');
            $table->string('plain_password');
            $table->string('kelas');
            $table->enum('role', ['admin', 'guru', 'siswa']);
            $table->rememberToken();
            $table->timestamps();

            // $table->foreign('id_grade')->references('id')->on('grades');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unique()->unsigned();
            $table->unsignedBigInteger('kelas_id')->unsigned()->nullable();
            $table->string('nama_lengkap', 100);
            $table->string('email');
            $table->string('nim', 12);
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->boolean('status')->default(true);
            $table->string('alamat', 100);
            $table->enum('agama', ['1', '2', '3', '4', '5', '6', '7']);
            $table->string('no_watshapp');
            $table->text('tentang_saya')->nullable();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('kelas_id')->references('id')->on('kelas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};

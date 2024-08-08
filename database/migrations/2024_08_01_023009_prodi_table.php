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
        Schema::create('prodi', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('kode_prodi')->nullable();
            $table->string('nama_prodi')->nullable();
            $table->string('ketua_prodi');
            $table->enum('status_prodi', ['aktif', 'tidak aktif']);
            $table->date('mulai_aktif');
            $table->rememberToken();
            $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

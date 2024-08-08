<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\NullableType;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mapel', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('kode_mapel')->nullable();
            $table->string('nama_mapel')->nullable();
            $table->string('singkatan')->nullable();
            $table->enum('kelas', ['X', 'XI', 'XII']);
            $table->string('pengajar')->nullable();
            $table->string('prodi')->nullable();
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

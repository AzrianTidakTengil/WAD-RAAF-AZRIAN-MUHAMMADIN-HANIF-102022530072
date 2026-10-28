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
        Schema::create('pelatih', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('nama_pelatih', 255);
            $table->string('lisensi', 100); 
            $table->string('jenis_lisensi', 150)->nullable(); 
            $table->string('cabang_olahraga', 150)->nullable(); 
            $table->enum('status', ['Tersedia', 'Disewa', 'Cuti'])->default('Tersedia')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelatih');
    }
};

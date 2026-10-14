<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('kios', function (Blueprint $table) {
            $table->id();
        $table->string('nomor_kios')->unique();
        $table->string('nama_pemilik');
        $table->string('kategori'); 
        $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kios');
    }
};

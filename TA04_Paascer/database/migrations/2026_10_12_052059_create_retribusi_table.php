<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('retribusi', function (Blueprint $table) {
            $table->id();
        $table->foreignId('kios_id')->constrained('kios')->onDelete('cascade');
        $table->integer('nominal');
        $table->date('tanggal_bayar');
        $table->string('status_pembayaran')->default('Lunas');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('retribusi');
    }
};

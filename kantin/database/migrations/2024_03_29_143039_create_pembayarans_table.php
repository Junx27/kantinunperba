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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('id_pesanan');
            $table->string('total_bayar')->default('belum');
            $table->string('metode_pembayaran')->default('Pilih Metode Pembayaran');
            $table->string('gambar')->default('belum');
            $table->string('status_pesanan')->default('Pilih Status Pengiriman');
            $table->string('catatan')->default('Masukan catatan pembelian bila perlu, seperti lokasi pengiriman.');
            $table->string('status')->default('belum');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};

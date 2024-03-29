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
        Schema::create('keranjangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('harga');
            $table->integer('jumlah');
            $table->integer('subtotal');
            $table->string('catatan');
            $table->foreignId('menu_id')->constrained('daftar_menus');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('pembayaran_id')->nullable()->constrained('pembayarans');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keranjangs');
    }
};

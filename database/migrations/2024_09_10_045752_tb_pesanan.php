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
        Schema::create('tb_pesanan', function (Blueprint $table) {
            $table->increments('id_pesanan');

            // Relasi ke tb_pelanggan
            $table->unsignedInteger('id_pelanggan')->startingValue(1000);
            $table->foreign('id_pelanggan')->references('id_pelanggan')->on('tb_pelanggan')->onDelete('cascade');

            // Relasi ke tb_produk
            $table->unsignedInteger('id_produk');
            $table->foreign('id_produk')->references('id_produk')->on('tb_produk')->onDelete('cascade');

            // Kolom tambahan
            $table->integer('jumlah');
            $table->integer('total_harga');

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

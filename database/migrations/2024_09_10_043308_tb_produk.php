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
        Schema::create('tb_produk', function (Blueprint $table){
            $table->increments('id_produk');
            $table->string('nm_produk');
            $table->string('gambar_produk');  
            $table->integer('variant');
            $table->integer('stok_produk');
            $table->decimal('harga_produk');
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

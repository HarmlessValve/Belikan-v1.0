<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelProduk extends Model
{
    use HasFactory;

    public $table = 'tb_produk';
    protected $primaryKey = 'id_produk';
    public $timestamps = false;

    // Kolom yang bisa diisi melalui mass assignment
    protected $fillable = [
        'nm_produk',
        'variant',
        'stok_produk',
        'harga_produk',
        'gambar_produk' // Tambahkan kolom gambar_produk di sini
    ];
}

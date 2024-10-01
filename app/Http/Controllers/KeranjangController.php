<?php

namespace App\Http\Controllers;

use App\Models\ModelProduk;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function showKeranjang()
    {
        $keranjang = session()->get('keranjang', []);

        return view('keranjang', compact('keranjang'));
    }

    public function tambahKeKeranjang(Request $request)
    {

        $validated = $request->validate([
            'id_produk' => 'required|exists:tb_produk,id_produk',
            'qty' => 'required|integer|min:1',
        ]);

        $produk = ModelProduk::find($request->id_produk);

        $itemKeranjang = [
            'id_produk' => $produk->id_produk,
            'nama_produk' => $produk->nm_produk,
            'harga_produk' => $produk->harga_produk,
            'qty' => $request->qty,
            'total_harga' => $produk->harga_produk * $request->qty,
        ];

        $keranjang = session()->get('keranjang', []);
        $keranjang[$produk->id_produk] = $itemKeranjang;  // menggunakan id_produk sebagai kunci
        session()->put('keranjang', $keranjang);
        return redirect()->route('keranjang.show')->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }

    public function bayar(Request $request)
    {
        // Ambil nama dari form
        $nama = $request->input('nama');

        // Ambil data keranjang dari session
        $keranjang = session()->get('keranjang', []);

        // Periksa apakah keranjang kosong
        if (empty($keranjang)) {
            return redirect()->route('keranjang.show')->with('error', 'Keranjang Anda kosong.');
        }

        // Siapkan pesan produk dari keranjang
        $produkList = [];
        $totalHarga = 0;
        foreach ($keranjang as $item) {
            $produkList[] = $item['nama_produk'] . ' (Qty: ' . $item['qty'] . ')';
            $totalHarga += $item['total_harga']; // Hitung total harga
        }

        // Gabungkan daftar produk menjadi satu string
        $produkString = implode(', ', $produkList);

        // Format total harga
        $totalHargaFormatted = number_format($totalHarga, 3, '.', ',');

        // Nomor WhatsApp tujuan
        $whatsappNumber = '+6289620378128';

        // Buat pesan untuk dikirim ke WhatsApp, tambahkan total harga
        $message = "Permisi, Saya $nama, ingin memesan: $produkString. Seharga Rp. $totalHargaFormatted.";

        // Redirect ke WhatsApp dengan pesan
        return redirect()->away("https://api.whatsapp.com/send?phone=$whatsappNumber&text=" . urlencode($message));
    }

    public function hapusDariKeranjang($id)
    {
        $keranjang = session()->get('keranjang');

        if (isset($keranjang[$id])) {
            unset($keranjang[$id]);
            session()->put('keranjang', $keranjang);
        }

        return redirect()->route('keranjang.show')->with('success', 'Produk berhasil dihapus dari keranjang!');
    }
}

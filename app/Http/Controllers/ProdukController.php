<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelProduk;
use Illuminate\Support\Facades\Storage; // Import Storage jika ingin menggunakan public path

class ProdukController extends Controller
{
    public function index()
    {
        $produk = ModelProduk::all();
        return view('admin-index', compact('produk'));
    }

    // ProdukController.php

    public function showProduk()
    {
        // Mengambil semua data produk dari database
        $produk = ModelProduk::all();

        // Mengirim data ke view
        return view('produk', compact('produk'));
    }


    public function store(Request $request)
    {
        // Validasi input, termasuk file gambar
        $validated = $request->validate([
            'nm_produk' => 'required|string|max:255',
            'variant' => 'nullable|numeric|min:0',
            'stok_produk' => 'nullable|numeric|min:0',
            'harga_produk' => 'nullable|numeric|min:0',
            'gambar_produk' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048' // Validasi gambar
        ]);

        // Proses upload gambar
        if ($request->hasFile('gambar_produk')) {
            // Simpan gambar ke folder public/images dan ambil nama file
            $imageName = time() . '.' . $request->gambar_produk->extension();
            $request->gambar_produk->move(public_path('images'), $imageName);
        } else {
            // Jika tidak ada gambar, isi default atau null
            $imageName = null;
        }

        // Simpan produk beserta gambar
        ModelProduk::create([
            'nm_produk' => $validated['nm_produk'],
            'variant' => $validated['variant'],
            'stok_produk' => $validated['stok_produk'],
            'harga_produk' => number_format($validated['harga_produk'], 3, '.', ''), // Memformat harga
            'gambar_produk' => $imageName // Simpan nama file gambar
        ]);

        return redirect()->route('admin-stock')->with('success', 'Produk berhasil ditambahkan!');
    }

    public function destroy($id_produk)
    {
        // Cari produk berdasarkan id_produk
        $produk = ModelProduk::where('id_produk', $id_produk)->firstOrFail();

        // Hapus file gambar jika ada
        if ($produk->gambar_produk) {
            $imagePath = public_path('images/' . $produk->gambar_produk);
            if (file_exists($imagePath)) {
                unlink($imagePath); // Hapus gambar dari server
            }
        }

        // Hapus produk dari database
        $produk->delete();

        return redirect()->route('produk.index')->with('success', 'Produk berhasil dihapus');
    }
}

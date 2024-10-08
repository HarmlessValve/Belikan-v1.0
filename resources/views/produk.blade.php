@extends('layouts.app')

@section('content')
<!-- Produk -->
<div class="container-fluid text-light p-3" style="background-color:#0a0a0a;">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-12 text-center">
            <h1 style="font-size:35px">Produk Kami</h1>
            <h5 class="mb-3">Temukan berbagai pilihan ikan segar yang langsung ditangkap dari laut.</h5>
        </div>
        @foreach($produk as $item)
        <div class="card m-3 border border-danger rounded" style="width: 20rem;">
            <h5>Stock <span class="badge bg-success mt-2">{{ $item->stok_produk }}</span></h5>
            <img class="card-img-top mt-1" src="{{ asset('images/' . $item->gambar_produk) }}" alt="{{ $item->nm_produk }}" style="height: 200px; object-fit: cover;">
            <div class="card-body text-center">
                <h3 class="card-title">{{ $item->nm_produk }}</h3>
                <h6 class="card-text">{{ $item->variant }}g - Rp. {{ number_format($item->harga_produk, 3, '.', ',') }}</h6>

                <!-- Form untuk menambahkan ke keranjang -->
                <form action="{{ route('keranjang.tambah') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id_produk" value="{{ $item->id_produk }}">
                    <input type="number" name="qty" class="form-control border-danger" id="qty" placeholder="Kuantitas" style="width:200px;" min="1" max="{{ $item->stok_produk }}" required>
                    <button type="submit" class="btn btn-danger btn-lg rounded mt-2" style="width:200px;">
                        Tambahkan Ke Keranjang
                    </button>
                </form>

            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
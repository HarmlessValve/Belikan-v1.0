@extends('layouts.app-admin')

@section('content-admin')

<div class="container-fluid">

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="row">
        <div class="col-lg-8 w-100 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4">Update Ikan</h5>
                    <form action="{{ route('produk.update', $produk->id_produk) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="table-responsive">
                            <table class="table text-nowrap mb-0 align-middle">
                                <thead class="text-dark fs-4">
                                    <tr>
                                        <th class="border-bottom-0">Ikan</th>
                                        <th class="border-bottom-0">Gambar</th>
                                        <th class="border-bottom-0">Variant Berat</th>
                                        <th class="border-bottom-0">Stock Ikan</th>
                                        <th class="border-bottom-0">Harga Ikan</th>
                                        <th class="border-bottom-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border-bottom-0">
                                            <input type="text" class="form-control fw-semibold" name="nm_produk" value="{{ $produk->nm_produk }}" />
                                        </td>
                                        <td class="border-bottom-0">
                                            <input type="file" class="form-control fw-semibold mt-2" name="gambar_produk" accept="image/*" />
                                            @if($produk->gambar_produk)
                                            <img src="{{ asset('images/' . $produk->gambar_produk) }}" alt="Gambar Produk" width="100">
                                            @endif
                                        </td>
                                        <td class="border-bottom-0">
                                            <div class="input-group w-100">
                                                <input type="number" class="form-control fw-semibold" name="variant" value="{{ $produk->variant }}" />
                                                <span class="input-group-text bg-primary text-light">Gram</span>
                                            </div>
                                        </td>
                                        <td class="border-bottom-0">
                                            <input type="number" class="form-control fw-semibold mb-0" name="stok_produk" value="{{ $produk->stok_produk }}" />
                                        </td>
                                        <td class="border-bottom-0">
                                            <input type="number" class="form-control fw-semibold mb-0" name="harga_produk" value="{{ $produk->harga_produk }}" step="00.1" />
                                        </td>
                                        <td class="border-bottom-0">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
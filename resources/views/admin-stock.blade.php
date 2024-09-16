@extends('layouts.app-admin')

@section('content-admin')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 w-100 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4">Tambah Stock Ikan</h5>
                    <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="table-responsive">
                            <table class="table text-nowrap mb-0 align-middle">
                                <thead class="text-dark fs-4">
                                    <tr>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Ikan</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Gambar</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Variant Berat</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Tambah Stock Ikan</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Harga Ikan</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border-bottom-0">
                                            <input type="text" class="form-control fw-semibold" placeholder="Nama Ikan" name="nm_produk" />
                                        </td>
                                        <td class="border-bottom-0">
                                            <input type="file" class="form-control fw-semibold mt-2" name="gambar_produk" accept="image/*" />
                                        </td>
                                        <td class="border-bottom-0">
                                            <div class="input-group w-50">
                                                <input type="number" class="form-control fw-semibold" placeholder="Tambah" min="0" name="variant" />
                                                <span class="input-group-text bg-primary text-light">Gram</span>
                                            </div>
                                        </td>
                                        <td class="border-bottom-0">
                                            <input type="number" class="form-control fw-semibold mb-0" placeholder="Tambah Stock" min="0" name="stok_produk" />
                                        </td>
                                        <td class="border-bottom-0">
                                            <div class="input-group">
                                                <input type="number" class="form-control fw-semibold mb-0" placeholder="Tambah Harga" min="0" step="0.01" name="harga_produk" />
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
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
@extends('layouts.app-admin')

@section('content-admin')

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-8 w-100 d-flex align-items-stretch">
      <div class="card w-100">
        <div class="card-body p-4">
          <h5 class="card-title fw-semibold mb-4">Daftar Ikan</h5>
          <div class="table-responsive">
            <table class="table text-nowrap mb-0 align-middle">
              <thead class="text-dark fs-4">
                <tr>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Id</h6>
                  </th>
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
                    <h6 class="fw-semibold mb-0">Stock</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Harga</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Aksi</h6>
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach($produk as $item)
                <tr>
                  <td>{{ $item->id_produk }}</td>
                  <td>{{ $item->nm_produk }}</td>
                  <td>
                    @if($item->gambar_produk)
                    <img src="{{ asset('images/' . $item->gambar_produk) }}" alt="{{ $item->nm_produk }}" class="img-fluid" style="width: 200px; height: 200px; object-fit: cover;">
                    @else
                    <span>Belum ada gambar</span>
                    @endif
                  </td>
                  <td>{{ $item->variant }}g</td>
                  <td>{{ $item->stok_produk }}</td>
                  <td>Rp. {{ number_format($item->harga_produk, 3, '.', ',') }}</td> <!-- Format harga -->
                  <td>
                    <form action="{{ route('produk.destroy', $item->id_produk) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm w-50">Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
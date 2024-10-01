@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="container mb-5 mt-3">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <form action="{{ route('keranjang.bayar') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                @if(session('keranjang') && count(session('keranjang')) > 0)
                <table class="table table-striped table-borderless">
                    <thead style="background-color:#84B0CA;" class="text-white">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Harga Produk</th>
                            <th scope="col">Kuantitas</th>
                            <th scope="col">Total Harga</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $total = 0; @endphp
                        @foreach(session('keranjang') as $key => $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item['nama_produk'] }}</td>
                            <td>Rp. {{ number_format($item['harga_produk'], 3, '.', ',') }}</td>
                            <td>{{ $item['qty'] }}</td>
                            <td>Rp. {{ number_format($item['total_harga'], 3, '.', ',') }}</td>
                            <td>
                                <a href="{{ route('keranjang.hapus', $item['id_produk']) }}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        @php $total += $item['total_harga']; @endphp
                        @endforeach
                    </tbody>
                </table>
                <div class="mb-3">
                    <h5>Total: Rp. {{ number_format($total, 3, '.', ',') }}</h5>
                </div>
                <button type="submit" class="btn btn-primary">Bayar Sekarang</button>
                @else
                <p>Keranjang Anda kosong.</p>
                @endif
            </form>
        </div>
    </div>
</div>
@endsection
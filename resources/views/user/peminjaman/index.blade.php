<title>Peminjaman-Dashboard User</title>
@extends('layouts.profileuser')
@section('content')
<h3 class="mb-0 text-uppercase pb-3">PINJAMAN BUKU</h3>
<hr>
<div class="col-md-15" style="padding-top: 50px">
<div class="card" style="overflow: hidden">
    <div class="card-body">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        {{-- <a href="{{ route('peminjaman.create') }}" class="btn btn-grd btn-primary px-5 mb-2">Tambah Data Peminjaman</a> --}}
        <table class="table mb-0 table-striped" id="example">
            <thead>
                <tr class="text-center">
                    <th scope="col">No</th>
                    <th scope="col">Nama Buku</th>
                    <th scope="col">Nama Peminjam</th>
                    <th scope="col">Jumlah Buku</th>
                    <th scope="col">Tanggal Peminjaman</th>
                    <th scope="col">Batas Peminjaman</th>
                    <th scope="col">Tanggal Pengembalian</th>
                    <th scope="col">Status</th>
                    <th scope="col">AKSI</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($peminjaman as $data)
                <tr class="text-center">
                    <th scope="row">{{ $loop->index+1 }}</th>
                    <td>{{ $data->buku->judul }}</td>
                    <td>{{ $data->nama_peminjam}}</td>
                    <td>{{ $data->jumlah }}</td>
                    <td>{{ $data->tanggal_pinjam }}</td>
                    <td>{{ $data->batas_pinjam }}</td>
                    <td>{{ $data->tanggal_kembali }}</td>
                    <td class="text-center">
                        @if ($data->status == 'diterima')
                        <span class="badge bg-success">{{ ucfirst($data->status) }}</span>
                        @elseif ($data->status == 'ditolak')
                         <span class="badge bg-danger">{{ ucfirst($data->status) }}</span>
                        @elseif ($data->status == 'dikembalikan')
                        <span class="badge bg-danger">{{ ucfirst($data->status) }}</span>                            @else
                        <span class="badge bg-warning">{{ ucfirst($data->status) }}</span>
                        @endif
                    </td>

                    <td class="text-center">
                        <form action="{{ route('peminjaman.destroy', $data->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('peminjaman.edit', $data->id) }}" class="btn btn-secondary btn-small">Edit</a>
                            {{--  cb --}}
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection

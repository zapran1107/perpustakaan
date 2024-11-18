<title>Pengajuan Peminjaman-Dashboard Admin</title>
@extends('layouts.backend')
@section('content')
<h3 class="mb-0 text-uppercase pb-3">PINJAMAN BUKU</h3>
<hr>
<div class="col-md-15" style="padding-top: 50px">
<div class="card">
    <div class="card-body">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        {{-- <a href="{{ route('peminjaman.create') }}" class="btn btn-grd btn-primary px-5 mb-2">Tambah Data Peminjaman</a> --}}
        <div class="table-responsive">
        <table class="table mb-0 table-striped" id="example2">
            <thead>
                <tr class="text-center">
                    <th scope="col">NO</th>
                    <th scope="col">NAMA BUKU</th>
                    <th scope="col">NAMA PEMINJAM</th>
                    <th scope="col">JUMLAH BUKU</th>
                    <th scope="col">TANGGAL PEMINJAMAN</th>
                    <th scope="col">BATAS PEMINJAMAN</th>
                    <th scope="col">TANGGAL PENGEMBALIAN</th>
                    <th scope="col">AKSI</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($peminjaman as $data)
                <tr class="text-center">
                    <th scope="row">{{ $loop->index+1 }}</th>
                    <td>{{ $data->buku->judul}}</td>
                    <td>{{ $data->nama_peminjam}}</td>
                    <td>{{ $data->jumlah }}</td>
                    <td>{{ $data->tanggal_pinjam }}</td>
                    <td>{{ $data->batas_pinjam }}</td>
                    <td>{{ $data->tanggal_kembali }}</td>
                    {{-- <td>
                        @if($data->status)
                        <p class="dash-lable mb-0 bg-success bg-opacity-10 rounded-2">di kembalikan</p>
                        @else
                        <p class="dash-lable mb-0 bg-danger bg-opacity-10 rounded-2">di pinjam</p>
                        @endif
                    </td> --}}
                        <td class="text-center">
                            <a href="{{ route('peminjamanadmin.detail', $data->id) }}" class="btn btn-info btn-sm">Lihat
                                Detail</a>
                        </td>
                    <td>
                        {{-- <form action="{{ route('peminjamanadmin.destroy', $data->id) }}" method="POST"> --}}
                            @csrf
                            @method('DELETE')
                            {{-- <a href="{{ route('peminjaman.edit', $data->id) }}" class="btn btn-warning btn-small">Edit</a> --}}
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
</div>
@endsection

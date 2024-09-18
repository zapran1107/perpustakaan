@extends('layouts.profileuser')
@section('content')
<h3 class="mb-0 text-uppercase pb-3">PINJAMAN BUKU</h3>
<hr>
<div class="card">
    <div class="card-body">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        {{-- <a href="{{ route('peminjaman.create') }}" class="btn btn-grd btn-primary px-5 mb-2">Tambah Data Peminjaman</a> --}}
        <table class="table mb-0 table-striped" id="example">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Buku</th>
                    <th scope="col">Nama Peminjam</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Tanggal Peminjaman</th>
                    <th scope="col">Batas Peminjaman</th>
                    <th scope="col">Tanggal Pengembalian</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($peminjaman as $data)
                <tr>
                    <th scope="row">{{ $loop->index+1 }}</th>
                    <td>{{ $data->buku->judul }}</td>
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
                        <td>
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
@endsection

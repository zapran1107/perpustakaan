@extends('layouts.backend')
@section('content')
    <div class="card m-3" style="padding-top: 50px">
        <div class="card-body">
            <h4 class="card-title">Detail Peminjaman</h4>
            <div class="row mb-3">
                <div class="col-md-6">
                    <strong>Nama Buku:</strong>
                    <p>{{ $peminjaman->buku->judul }}</p>
                </div>
                <div class="col-md-6">
                    <strong>Nama Peminjam:</strong>
                    <p>{{ $peminjaman->nama_peminjam }}</p>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <strong>Jumlah:</strong>
                    <p>{{ $peminjaman->jumlah }}</p>
                </div>
                <div class="col-md-6">
                    <strong>Tanggal Peminjaman:</strong>
                    <p>{{ $peminjaman->tanggal_pinjam }}</p>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <strong>Status:</strong>
                    <form action="{{ route('peminjaman.update', $peminjaman->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <select name="status" class="form-control" onchange="this.form.submit()" style="color: black">
                            <option value="ditahan" {{ $peminjaman->status == 'ditahan' ? 'selected' : '' }}>Ditahan</option>
                            <option value="ditolak" {{ $peminjaman->status == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
                            <option value="diterima" {{ $peminjaman->status == 'diterima' ? 'selected' : '' }}>Diterima</option>
                        </select>
                    </form>
                </div>
            </div>


            <a href="{{ route('peminjaman.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
@endsection

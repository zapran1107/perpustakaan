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
                    <form action="{{ route('peminjaman.update', $peminjaman->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('PUT')
                        {{-- <select name="status" class="form-control" style="color: black">
                            <option value="ditahan" {{ $peminjaman->status == 'ditahan' ? 'selected' : '' }}>Ditahan</option>
                            <option value="ditolak" {{ $peminjaman->status == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
                            <option value="diterima" {{ $peminjaman->status == 'diterima' ? 'selected' : '' }}>Diterima</option>
                        </select> --}}
                        {{-- <button type="submit" name="status" class="btn btn-success btn-sm">Terima</button> --}}
                        <button type="submit" name="status" value="diterima" class="btn btn-success btn-sm">Terima</button>
                        <button type="submit" name="status" value="ditolak" class="btn btn-danger btn-sm">Tolak</button>
                        <button type="submit" name="status" value="ditahan" class="btn btn-warning btn-sm">Tahan</button>
                    </form>
                </div>
            </div>
            {{-- <a href="{{ route('peminjaman.edit', $peminjaman->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('peminjamanadmin.admin') }}" class="btn btn-primary">Kembali</a> --}}
        </div>
    </div>
@endsection

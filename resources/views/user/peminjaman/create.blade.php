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
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"> {{__('DATA PEMINJAMAN')}}  </div>
                        <div class="card-body">
                            <form class="row g-3" method="POST" action="{{ route('peminjaman.store') }}" enctype="multipart/form-data">
                                @csrf
                                @if ($errors->has('jumlah_pinjam'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('jumlah_pinjam') }}
                                </div>
                                @endif

                                @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                @endif

                                @if ($errors->has('id_buku'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('id_buku') }}
                                </div>
                                @endif
                                <div class="col-md-6">
                                    <label for="input13" class="form-label">Nama Peminjam</label>
                                    <div class="position-relative">
                                        <input class="form-control mb-3" type="text" name="nama_peminjam" placeholder="Nama" value="{{ Auth::user()->name }}" required readonly>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="input13" class="form-label">Tanggal Peminjaman</label>
                                    <input class="form-control mb-3" type="date" name="tanggal_pinjam" value="{{ $sekarang }}" required readonly>
                                </div>

                                <div class="col-md-6">
                                    <label for="input13" class="form-label">Batas Pengembalian</label>
                                    <input class="form-control mb-3" type="date" name="batas_pinjam" value="{{ $batastanggal }}" required readonly>
                                </div>

                                <div class="col-md-6">
                                    <label for="input19" class="form-label">Status</label>
                                    <select id="input19" name="status" class="form-select" required>
                                        <option selected="">Pilih...</option>
                                        <option value="0">Pinjam</option>
                                        <option value="1">Kembalikan</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="input13" class="form-label">Nama Buku</label>
                                    <select class="form-control mb-3" name="id_buku" placeholder="Buku" required>
                                        @foreach ($buku as $data)
                                        <option value="{{ $data->id }}">{{ $data->judul }} </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="input13" class="form-label">Jumlah</label>
                                    <input class="form-control mb-3" type="number" name="jumlah" placeholder="Jumlah" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="input13" class="form-label">Tanggal Pengembalian</label>
                                    <input class="form-control mb-3" type="date" name="tanggal_kembali" required>
                                </div>

                                <div class="col-md-12">
                                    <div class="d-md-flex d-grid align-items-center gap-3">
                                        <a href="{{ url('user')}}" class="btn btn-danger px-4">Batal</a>
                                        <button type="submit" class="btn btn-success px-4">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

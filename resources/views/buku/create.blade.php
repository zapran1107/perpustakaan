@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{__('DATA BUKU')}}  </div>
                <div class="card-body">
                <form action="{{ route('buku.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">judul</label>
                        <input type="text" class="form-control" name="judul" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">jumlah</label>
                        <input type="text" class="form-control" name="jumlah">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">id_penulis</label>
                        <select class="form-control" name="id_penulis">
                        @foreach ($penulis as $data)
                        <option value="{{ $data->id }}">{{$data->nama_penulis}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">id_penerbit</label>
                        <select class="form-control" name="id_penerbit">
                        @foreach ($penerbit as $data)
                        <option value="{{ $data->id }}">{{$data->nama_penerbit}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">id_kategori</label>
                        <select class="form-control" name="id_kategori">
                        @foreach ($kategori as $data)
                        <option value="{{ $data->id }}">{{$data->nama_kategori}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">tahun terbit</label>
                        <input type="date" class="form-control" name="tahun_terbit">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">foto</label>
                        <input type="file" class="form-control" name="foto">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">sinopsis</label>
                        <input type="text" class="form-control" name="sinopsis">
                    </div>
                        <button type="submit" class="btn btn-primary">GASKEUN CLEK</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

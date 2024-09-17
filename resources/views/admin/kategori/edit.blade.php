@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{__(' EDIT DATA KATEGORI')}}  </div>
                <div class="card-body">
                <form action="{{route('kategori.update', $kategori->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">nama_kategori</label>
                        <input type="text" class="form-control" name="nama_kategoori" value="{{ $kategori->nama_kategori }}">
                    </div>
                    <button type="submit" class="btn btn-success">EDIT CLEK</button>
                    <a href="{{ url('kategori') }}" class="btn btn-success">BALIK CLEK</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

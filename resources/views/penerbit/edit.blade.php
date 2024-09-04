@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{__(' EDIT DATA PENERBIT')}}  </div>
                <div class="card-body">
                <form action="{{route('penerbit.update', $penerbit->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">nama_penerbit</label>
                        <input type="text" class="form-control" name="nama_penerbit" value="{{ $penerbit->nama}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">alamat</label>
                        <input type="text" class="form-control" name="alamat" value="{{ $penerbit->alamat }}">
                    </div>
                    <button type="submit" class="btn btn-success">EDIT CLEK</button>
                    <a href="{{ url('penerbit') }}" class="btn btn-success">BALIK CLEK</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

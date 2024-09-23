@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="padding-top: 100px">
            <div class="card">
                <div class="card-header"> {{__('DATA KATEGORI')}}  </div>
                <div class="card-body">
                <form action="{{ route('kategori.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">nama_kategori</label>
                        <input type="text" class="form-control" name="nama_kategori" required>
                    </div>
                        <button type="submit" class="btn btn-primary">GASKEUN CLEK</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" style="padding-top: 100px">
                <div class="card">
                    <div class="card-header"> {{ __('DATA KATEGORI') }} </div>

                    <div class="card-body">
                        <a href="{{ route('kategori.create') }}" class="btn btn-primary">tambah data</a>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <table class="table" id="example2">
                            <thead>
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">NAMA KATEGORI</th>
                                    <th  scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($kategori as $data)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $data->nama_kategori }}</td>
                                        <form action="{{ route('kategori.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <td>
                                                <a href="{{ route('kategori.edit', $data->id) }}"
                                                    class="btn btn-success">edit</a>
                                                <button type="submit" class="btn btn-danger">hapus</button>
                                            </td>
                                        </form>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

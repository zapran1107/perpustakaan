<title>Penerbit-Bashboard Admin</title>
@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="padding-top: 100px">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success')}}
            </div>
            @endif
            <div class="card">
                <div class="card-header"> {{ __('DATA PENERBIT') }}

                    <div class="float-end">
                        <a href="{{ route('penerbit.create') }}" class="d-flex btn btn-primary">+ tambah
                            data</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="example2">
            <thead>
                <tr class="text-center">
                <th scope="col">NO</th>
                <th scope="col">NAMA</th>
                <th scope="col">ALAMAT</th>
                <th scope="col">AKSI</th>
                 </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($penerbit as $data)
              <tr class="text-center">
               <th scope="row">{{ $no++ }}</th>
               <td>{{ $data->nama_penerbit }}</td>
               <td>{{ $data->alamat }}</td>
               <form action="{{route('penerbit.destroy', $data->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
               <td class="text-center">
                <a href="{{ route('penerbit.edit', $data->id) }}" class="btn btn-secondary">edit</a>
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
</div>
@endsection

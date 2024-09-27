<title>Penulis-Dashboard Admin</title>
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
                <div class="card-header"> {{__('DATA PENULIS')}}  </div>
                <div class="card-body">
                    <a href="{{ route('penulis.create') }}" class="btn btn-primary">tambah data</a>
                <table class="table" id="example2">
            <thead>
                <tr class="text-center">
                <th scope="col">NO</th>
                <th scope="col">NAMA PENULIS</th>
                <th scope="col">AKSI</th>
                 </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($penulis as $data)
              <tr class="text-center">
               <th scope="row">{{ $no++ }}</th>
               <td>{{ $data->nama_penulis }}</td>
               <form action="{{route('penulis.destroy', $data->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
               <td class="text-center">
                <a href="{{ route('penulis.edit', $data->id) }}" class="btn btn-secondary">edit</a>
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

@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"> {{__('DATA RPODUCT')}}  </div>

                <div class="card-body">
                    <a href="{{ route('buku.create') }}" class="btn btn-primary">add data</a>
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success')}}
                    </div>
                    @endif
                <table class="table">
            <thead>
                <tr>
                <th scope="col">NO</th>
                <th scope="col">JUDUL</th>
                 <th scope="col">jumlah</th>
                 <th scope="col">PENULIS</th>
                <th scope="col">PENERBIT</th>
                <th scope="col">KATEGORI</th>
                <th scope="col">TAHUN TERBIT</th>
                <th scope="col">foto</th>
                <th scope="col">Sinopsis</th>
                <th scope="col">AKSI</th>
                 </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($buku as $data)
              <tr>
               <th scope="row">{{ $no++ }}</th>
               <td>{{ $data->judul}}</td>
               <td>{{ $data->jumlah}}</td>
               <td>{{ $data->penerbit->nama_penerbit}}</td>
               <td>{{ $data->penerbit->nama_penerbit}}</td>
               <td>{{ $data->kategori->nama_kategori }}</td>
               <td>{{ $data->tahun_terbit}}</td>
               <td>{{ $data->sinopsis}}</td>
               <td>
                <img src=" {{ asset('/images/buku/' . $data->foto)}}" width="100">
               </td>
               <form action="{{route('buku.destroy', $data->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
               <td>
                <a href="{{ route('buku.edit', $data->id) }}" class="btn btn-success">edit</a>
                {{-- <a href="{{ route('buku.show', $data->id) }}" class="btn btn-warning">show</a> --}}
                <button type="submit" class="btn btn-danger" onclick="return confrim('apakah anda yakin ingin menghapus data ini?')">Delete</button>
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

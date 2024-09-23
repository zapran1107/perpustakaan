@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11" style="padding-top: 100px">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success')}}
            </div>
            @endif
            <div class="card">
                <div class="card-header"> {{__('DATA BUKU')}}  </div>
                <div class="card-body" >
                    <a href="{{ route('buku.create') }}" class="btn btn-primary">tambah data</a>
                <table class="table" id="example2">
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
                <th scope="col"><center>AKSI</center></th>
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
               <td>
                <img src=" {{ asset('/images/buku/' . $data->foto)}}" width="100">
               </td>
               <form action="{{route('buku.destroy', $data->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
               <td>
                <div class="container">
                <a href="{{ route('buku.edit', $data->id) }}" class="btn btn-secondary"><center>edit</center></a>
                <button type="submit" class="btn btn-danger" onclick="return confrim('apakah anda yakin ingin menghapus data ini?')"><center>hapus</center></button>
                </div>
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



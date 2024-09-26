<title>Detail Buku</title>
@extends('layouts.frontend.user')
@section('content')

<!-- Facilities Start -->
<div class="container-fluid pt-5" style="margin-top: 50px ">
    <div class="container pb-3">
        <div class="row">
            <div class="col-lg-12 col-md-12 pb-1">
                <div class=" bg-light shadow-sm border-top mb-4">
                    <div class="p-5 mt-5">
                        <h4 class="text-center">{{$buku->judul}}</h4>
                        <p class="m-0'">
                            Buku {{$buku->judul}} lengkap. Buku {{$buku->judul}} yang ditulis oleh {{$buku->penulis->nama_penulis}}. Informasi selengkapnya mengenai Buku {{$buku->judul}} ada bawah ini.
                        </p>
                        <div class="row">
                            <div class="col-lg-4 col-md-12 pb-1">
                                    <img src="{{ asset('images/buku/' . $buku->foto) }}" alt="" class="card-img-top" class="card-img-top" width="50" height="450">
                            </div>
                            <div class="des col-lg-8 col-md-6 pb-1">
                                <p>Judul : {{$buku->judul}}</p>
                                <p>Penulis : {{$buku->penulis->nama_penulis}}</p>
                                <p>Penerbit : {{$buku->penerbit->nama_penerbit}}</p>
                                <p>Kategori : {{$buku->kategori->nama_kategori}}</p>
                                <p>Jumlah buku : {{$buku->jumlah}}</p>
                                <p>Sinopsis : {{$buku->sinopsis}}</p>
                                <a href="{{ url()->previous() }}" class="btn btn-primary px-4 mx-auto mb-4" >kembali</a>
                                <a href="{{ route('peminjaman.create') }}" class="btn btn-primary px-4 mx-auto mb-4" >pinjam</a>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

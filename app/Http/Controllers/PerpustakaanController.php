<?php

namespace App\Http\Controllers;


use App\Models\Kategori;
use App\Models\Penerbit;
use App\Models\Penulis;
use App\Models\Buku;
use App\Models\peminjaman;
use App\Models\pengembalian;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PerpustakaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = Buku::all();
        return view('user.home', compact('buku'));
    }
    public function dashboard()
    {
        $kategori = Kategori::count('id');
        $penulis = Penulis::count('id');
        $penerbit = Penerbit::count('id');
        $buku = Buku::count('id');
        $peminjaman = peminjaman::count('id');
        $kembali = peminjaman::where('status', 'Sudah Dikembalikan')->count('id');


        $bukus = Buku::all();
        $user = auth()->user();
        // Kirimkan variabel ke view
        return view('user.dashboarduser', [
            'buku' => $buku,
            'penerbit' => $penerbit,
            'penulis' => $penulis,
            'kategori' => $kategori,
            'kembali' => $kembali,
            'peminjaman' => $peminjaman,
        ]);
    }
    // public function buku()
    // {
    //     $buku = Buku::all();
    //     return view('user.buku', compact('buku'));
    // }

    public function show($id)
    {
        $buku = Buku::findOrFail($id);
        return view('user.show',compact('buku'));
    }
    public function profile()
    {
        $user = Auth::user();
        return view('user.profile',['user' => $user]);
    }
}

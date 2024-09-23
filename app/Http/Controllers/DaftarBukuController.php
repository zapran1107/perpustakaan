<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\DaftarBuku;
use App\Models\kategori;
use App\Models\peminjaman;
use Illuminate\Support\Facades\Auth;

class DaftarBukuController extends Controller
{
    public function index($id = null)
    {
        $kategori = kategori::all();
        $buku = $id ? Buku::where('id_kategori', $id)->get() :
        $buku = Buku::all();
        $user = Auth::user();
        $peminjaman = peminjaman::all();
        return view('daftarbuku.index',  compact('user', 'peminjaman', 'buku', 'kategori'));
    }
}

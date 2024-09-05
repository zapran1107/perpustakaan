<?php

namespace App\Http\Controllers;
use App\Models\Home;
use App\Models\Buku;
use App\Models\Penerbit;
use App\Models\Penulis;
use App\Models\kategori;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jumlahbuku = Buku::count();
        $jumlahpenerbit = Penerbit::count();
        $jumlahpenulis = Penulis::count();
        $jumlahkategori = Kategori::count();
        return view('dashboard', compact('jumlahbuku','jumlahpenerbit','jumlahpenulis','jumlahkategori'));
    }
}

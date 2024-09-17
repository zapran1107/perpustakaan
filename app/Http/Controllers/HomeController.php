<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Penerbit;
use App\Models\Penulis;
use App\Models\Buku;
use App\Models\peminjaman;
use App\Models\Pengembalian;
// use App\Charts\BukuChart;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // BUAT KE CHART
        // $masukPemasukan = Pemasukan::select('jumlah_pemasukan')->get();
        // $totalPemasukan = $masukPemasukan->sum('jumlah_pemasukan');
        // $hasilPemasukan = $masukPemasukan->pluck('jumlah_pemasukan');

        // Ambil data lain
        $kategori = Kategori::count('id');
        $penulis = Penulis::count('id');
        $penerbit = Penerbit::count('id');
        $buku = Buku::count('id');
        $peminjaman = Peminjaman::count('id');
        $pengembalian = Peminjaman::where('status', 'Sudah Dikembalikan')->count('id');

        // Kirimkan variabel ke view
        return view('home', [
            'buku' => $buku,
            'penerbit' => $penerbit,
            'penulis' => $penulis,
            'kategori' => $kategori,
            'pengembalian' => $pengembalian,
            'penminjaman' => $peminjaman,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\peminjaman;
use App\Models\Buku;
use App\Models\Penerbit;
use App\Models\Penulis;
use App\Models\Kategori;
use App\Models\User;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
                $peminjaman = peminjaman::orderBy('id', 'desc')->get();
                return view('user.peminjaman.index', compact('peminjaman'));
            }
    }

    public function indexAdmin()
    {
        $buku = Buku::all();
        $user = Auth::user();
        $kategori = Kategori::all();
        $penulis = Penulis::all();
        $penerbit = Penerbit::all();
        $peminjaman = Peminjaman::with('user', 'buku')->latest()->paginate(10);
        return view('admin.peminjamanadmin.index', compact('buku', 'kategori', 'penulis', 'penerbit', 'peminjaman', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peminjaman = peminjaman::orderBy('id', 'desc')->get();
        $batastanggal = Carbon::now()->addWeek()->format('Y-m-d');
        $sekarang = now()->format('Y-m-d');
        $buku = Buku::all();
        return view('user.peminjaman.create', compact('buku', 'sekarang', 'batastanggal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //     $request -> validate([
        //         'nama_Penerbit' => 'required|unique:Penerbits,nama_Penerbit'
        //     ],

        //     [
        //         'nama_Penerbit.required' => 'Nama harus diisi',
        //         'nama_Penerbit.unique' => 'Penerbit dengan nama tersebut sudah ada sebelumnya.',
        //     ]
        // );



        $peminjaman = new peminjaman();
        $peminjaman->nama_peminjam = $request->nama_peminjam;
        $peminjaman->id_buku = $request->id_buku;
        $peminjaman->jumlah = $request->jumlah;
        $peminjaman->tanggal_pinjam = $request->tanggal_pinjam;
        $peminjaman->batas_pinjam = $request->batas_pinjam;
        $peminjaman->tanggal_kembali = $request->tanggal_kembali;
        $peminjaman->status = $request->status;
        $peminjaman->save();

        return redirect()->route('peminjaman.index')->with('success', 'Buku berhasil dipinjam');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peminjaman = peminjaman::with('buku')->findOrFail($id);
        return view('admin.peminjamanadmin.detail', compact('peminjaman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(peminjaman $peminjaman)
    {
        $buku = Buku::all();
        return view('user.peminjaman.edit', compact('peminjaman','buku'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      // Temukan objek Minjem berdasarkan ID
      $peminjaman = peminjaman::findOrFail($id);

      // Ambil status dari request
      $status = $request->input('status');

      // Temukan buku yang dipinjam
      $buku = Buku::findOrFail($peminjaman->id_buku);

      // Terapkan logika berdasarkan status
      if ($status === 'diterima') {
          // Kurangi stok buku jika diterima
          $buku->jumlah -= $peminjaman->jumlah;
          $buku->save();
        $peminjaman->status = 'diterima';
          Alert::success('Peminjaman diterima', 'Stok buku berhasil dikurangi')->autoclose(1500);

      }elseif ($status === 'ditahan') {
        // Tambah stok buku jika ditahan
        $buku->jumlah += $peminjaman->jumlah;
        $buku->save();
        $peminjaman->status = 'ditahan';
        Alert::info('Peminjaman ditahan', 'Peminjaman buku ditahan')->autoclose(1500);


         }   elseif ($status === 'ditolak') {
          // Tidak ada perubahan pada stok buku jika ditolak
          $peminjaman->status = 'ditolak';
          Alert::error('Peminjaman ditolak', 'Pengajuan peminjaman buku ditolak')->autoclose(1500);

      } elseif ($status === 'dikembalikan') {
          // Tambah stok buku jika dikembalikan
          $buku->jumlah += $peminjaman->jumlah;
          $buku->save();
        //   $peminjaman->status = 'dikembalikan';
          Alert::success('Peminjaman dikembalikan', 'Peminjaman buku dikembalikan')->autoclose(1500);

      } else {
          // Jika status "ditahan"
          Alert::info('Status ditahan', 'Pengajuan peminjaman buku masih ditahan')->autoclose(1500);
      }

        $peminjaman->save();

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Status peminjaman berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        {
            $minjem = peminjaman::findOrFail($id);
            $minjem->delete();
            return redirect()->route('peminjamanadmin.index');
        }
    }
}

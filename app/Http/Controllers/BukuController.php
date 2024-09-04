<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buku;
use App\Models\penulis;
use App\Models\penerbit;
use App\Models\kategori;


class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = buku::orderBy('id', 'desc')->get();
        return view('buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penulis = penulis::all();
        $penerbit = penerbit::all();
        $kategori = kategori::all();
        return view('buku.create',compact('kategori','penulis','penerbit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'judul' => 'required|unique:bukus,judul'
        ],

        [
            'judul.required' => 'Nama harus diisi',
            'judul.unique' => 'buku dengan nama tersebut sudah ada sebelumnya.',
        ]
    );

        $buku = new buku();
        $buku->judul = $request->judul;
        $buku->id_penulis = $request->id_penulis;
        $buku->id_penerbit = $request->id_penerbit;
        $buku->id_kategori= $request->id_kategori ;
        $buku->tahun_terbit= $request->tahun_terbit ;
        $buku->jumlah= $request->jumlah ;

        // update img
        if ($request->hasFile('foto')) {
            $img = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/buku', $name);
            $buku->foto = $name;
        }

        $buku->save();

        return redirect()->route('buku.index')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(buku $buku)
    {
        return view('buku.show', compact('buku'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(buku $buku)
    {
        $penulis = penulis::all();
        $penerbit = penerbit::all();
        $kategori = kategori::all();
        return view('buku.edit',compact('kategori','penulis','penerbit','buku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, buku $buku)
    {
        $buku->judul = $request->judul;
        $buku->foto = $request->foto;
        $buku->id_penulis = $request->id_penulis;
        $buku->id_penerbit = $request->id_penerbit;
        $buku->id_kategori= $request->id_kategori ;
        $buku->tahun_terbit= $request->tahun_terbit ;
        $buku->jumlah= $request->jumlah;

        // delete img
        if ($request->hasFile('foto')) {
            $img = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/buku', $name);
            $buku->foto = $name;
        }

        $buku->save();
        return redirect()->route('buku.index')->with('success', 'Data berhasil diubah');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = buku::FindOrFail($id);
        $buku->delete();
        return redirect()->route('buku.index')->with('success', 'Data berhasil dihapus');
    }
}

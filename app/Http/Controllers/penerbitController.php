<?php

namespace App\Http\Controllers;
use App\Models\Penerbit;
use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penerbit = Penerbit::orderBy('id', 'desc')->get();
        return view('penerbit.index', compact('penerbit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penerbit.create');
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
            'nama_penerbit' => 'required|unique:Penerbits,nama_penerbit'
        ],

        [
            'nama_penerbit.required' => 'nama harus di isi',
            'nama_penerbit.unique' => 'buku dengan nama tersebut sudah ada sebelum nya',
        ]
        );

        $penerbit = new penerbit();
        $penerbit->nama_penerbit = $request->nama_penerbit;
        $penerbit->alamat = $request->alamat;
        $penerbit->save();

        return redirect()->route('penerbit.index')->with('succes', 'data berhasil di tambah kan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('penerbit.show', compact('penerbit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penerbit = penerbit::findOrFail($id);
        return view('penerbit.edit', compact('penerbit'));
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
        $penerbit = Penerbit::FindOrFail($id);
        $penerbit->save();
        return redirect()->route('penerbit.index')->with('succes', 'data berhasil di rubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penerbit = Penerbit::FindOrFail($id);
        $penerbit->delete();
        return redirect()->route('penerbit.index')->with('success', 'Data berhasil dihapus');
    }
}

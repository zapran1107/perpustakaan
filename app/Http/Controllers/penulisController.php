<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penulis;

class PenulisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penulis = Penulis::orderBy('id', 'desc')->get();
        return view('admin.penulis.index', compact('penulis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.penulis.create');
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
            'nama_penulis' => 'required|unique:penulis,nama_penulis'
        ],

        [
            'nama_penulis.required' => 'Nama harus diisi',
            'nama_penulis.unique' => 'Penulis dengan nama tersebut sudah ada sebelumnya.',
        ]
    );

        $penulis = new penulis();
        $penulis->nama_penulis = $request->nama_penulis;
        $penulis->save();

        return redirect()->route('penulis.index')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Penulis $penulis)
    {
        return view('penulis.show', compact('penulis'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penulis = Penulis::findOrFail($id);
        return view('admin.penulis.edit', compact('penulis'));
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
        $penulis = Penulis::FindOrFail($id);
        $penulis->save();
        return redirect()->route('penulis.index')->with('success', 'Data berhasil diubah');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penulis = Penulis::FindOrFail($id);
        $penulis->delete();
        return redirect()->route('penulis.index')->with('success', 'Data berhasil dihapus');
    }
}

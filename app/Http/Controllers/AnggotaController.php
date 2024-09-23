<?php

namespace App\Http\Controllers;

use App\Http\Middleware\IsAdmin;
use App\Models\Anggota;
use App\Models\peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AnggotaController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['auth', IsAdmin::class]);
    // }

    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $jumlahpengembalian = peminjaman::where('status_pengajuan','dikembalikan')->where('notif', false)->count();
    //     $jumlahpengajuan = peminjaman::where('status_pengajuan','menunggu pengajuan')->where('notif', false)->count();
    //     $anggota = Anggota::orderBy('id', 'desc')->get();
    //     $peminjamannotif = peminjaman::all();
    //     $user = Auth::user();
    //     return view('admin.anggota.index', compact('peminjamannotif','user','users','jumlahpengajuan','jumlahpengembalian'));
    // }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     $jumlahpengembalian = peminjaman::where('status_pengajuan','dikembalikan')->where('notif', false)->count();
    //     $jumlahpengajuan = peminjaman::where('status_pengajuan','menunggu pengajuan')->where('notif', false)->count();
    //     $peminjamannotif = Peminjaman::all();
    //     $anggota = Auth::user();
    //     return view('admin.anggota.create', compact('peminjamannotif','user','jumlahpengajuan','jumlahpengembalian'));
    // }

    /**
     * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     $request->validate(
    //         [
    //             'name' => ['required', 'string', 'max:255'],
    //             'alamat' => ['required', 'string', 'max:255'],
    //             'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //             'password' => ['required', 'string', 'min:8', 'confirmed'],
    //         ],
    //         [
    //             'email.required' => 'Email harus diisi',
    //             'email.unique' => 'Email dengan nama tersebut sudah ada sebelumnya.',
    //         ]
    //     );

        // $anggota = new Anggota();
        // $anggota->name = $request->name;
        // $anggota->alamat = $request->alamat;
        // $anggota->no_hp = $request->no_hp;
        // $anggota->email = $request->email;
        // $anggota->password = Hash::make($request->password);
        // $anggota->isAdmin = $request->isAdmin;

        //   // update img
        //   if ($request->hasFile('fotoprofile')) {
        //     $img = $request->file('fotoprofile');
        //     $name = rand(1000, 9999) . $img->getClientOriginalName();
        //     $img->move('images/user', $name);
        //     $anggota->fotoprofile = $name;
        // }

        // $anggota->save();

        // return redirect()->route('anggota.index')->with('success', 'berhasil didaftarkan');
    // }

    /**
     * Display the specified resource.
     */
    // public function show(Anggota $anggota)
    // {
    //     $anggota = Auth::anggota();
    //     $jumlahpengembalian = peminjaman::where('status_pengajuan','dikembalikan')->where('notif', false)->count();
    //     $jumlahpengajuan = peminjaman::where('status_pengajuan','menunggu pengajuan')->where('notif', false)->count();
    //     $peminjamannotif = peminjaman::all();
    //     return view('admin.anggota.show', compact('peminjamannotif','user','jumlahpengajuan','jumlahpengembalian'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Anggota $anggota)
    // {
    //     $anggota = Auth::anggota();
    //     $jumlahpengembalian = peminjaman::where('status_pengajuan','dikembalikan')->where('notif', false)->count();
    //     $jumlahpengajuan = peminjaman::where('status_pengajuan','menunggu pengajuan')->where('notif', false)->count();
    //     $peminjamannotif = peminjaman::all();
    //     return view('admin.anggota.edit', compact('peminjamannotif','user','jumlahpengajuan','jumlahpengembalian'));
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, Anggota $anggota)
    // {
    //     $request->validate([
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => [
    //             'required',
    //             'string',
    //             'email',
    //             'max:255',
    //             // use Illuminate\Validation\Rule;
    //             Rule::unique('anggota')->ignore($anggota->id)
    //         ],
    //     ]);

    //     $anggota->name = $request->name;
    //     $anggota->alamat = $request->alamat;
    //     $anggota->no_hp = $request->no_hp;
    //     $anggota->email = $request->email;
    //     // $user->isAdmin = $request->isAdmin;

    //     //  delete img
    //      if ($request->hasFile('fotoprofile')) {
    //         $img = $request->file('fotoprofile');
    //         $name = rand(1000, 9999) . $img->getClientOriginalName();
    //         $img->move('images/user', $name);
    //         $user->fotoprofile = $name;
    //     }


    //     $anggota->save();
    //     if ($request->has('redirect_to') && $request->redirect_to === 'profile') {
    //         return redirect()->route('profile')->with('success', 'Profil berhasil diperbarui');
    //     } else {
    //         return redirect()->route('anggota.index')->with('success', 'Data berhasil diperbarui');
    //     }
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(Anggota $anggota)
    // {
    //     if (Auth::user()->id != $anggota->id) {
    //         $anggota->delete();
    //         return redirect()->route('anggota.index');
    //     }
    //     return redirect()->route('anggota.index')->with('success', 'Data berhasil dihapus');
    // }
}

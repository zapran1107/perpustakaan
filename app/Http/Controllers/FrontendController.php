<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $buku = Buku::all();
        return view('welcome',compact('buku'));
    }

    public function show($id){
        $buku = Buku::findOrFail($id);
        return view('user.show',compact('buku'));
    }

    
}

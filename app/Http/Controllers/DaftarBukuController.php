<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\DaftarBuku;

class DaftarBukuController extends Controller
{
    public function index()
    {
        $books = DaftarBuku::all();
        return view('daftarbuku.index', compact('books'));
    }
}

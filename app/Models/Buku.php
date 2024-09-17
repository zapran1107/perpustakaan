<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $filable = ['id', 'judul' ,'id_penulis', 'id_penerbit', 'id_kategori', 'tahun_terbit', 'jumlah', 'foto', 'sinopsis'];
    protected $fileable = ['judul', 'foto'];
    public $timestamp = true;

    public function penulis()
    {
        return $this->belongsTo(Penulis::class, 'id_penulis');
    }

    public function penerbit()
    {
        return $this->belongsTo(Penerbit::class, 'id_penerbit');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
}

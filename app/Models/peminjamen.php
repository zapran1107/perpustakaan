<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjamen extends Model
{
    protected $table = 'peminjaman';
    use HasFactory;
    protected $fillable = ['id', 'nama_peminjam', 'id_buku', 'jumlah', 'tanggal_pinjam', 'tanggal_kembali', 'status'];

    public $timestamps = true;

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'id_buku');
    }
}

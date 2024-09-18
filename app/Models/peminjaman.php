<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    protected $table = 'peminjamens';

    use HasFactory;
    protected $fillable = ['id', 'nama_peminjam', 'id_buku', 'jumlah', 'tanggal_pinjam', 'tanggal_kembali', 'status'];

    public $timestamps = true;
    public function buku()
    {
        return $this->belongsTo(Buku::class, 'id_buku');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_buku');
    }

    public function peminjaman()
    {
        return $this->belongsTo(Peminjaman::class, 'id_peminjaman');
    }
}

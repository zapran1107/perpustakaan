<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    use HasFactory;

    public function buku() {
        return $this->belongsTo(Buku::class,'id_buku');
    }
    public function user() {
        return $this->belongsTo(User::class,'id_user');
    }

    public function pengembalian() {
        return $this->hasMany(Pengembalian::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
    use HasFactory;
    protected $filable = ['id', 'nama_penulis'];
    public $timestamp = true;

    public function penulis()
    {
        return $this->hasMany(Penulis::class);
    }

}

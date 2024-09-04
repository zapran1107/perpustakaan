<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerbit extends Model
{
    use HasFactory;
    protected $filable = ['id', 'nama', 'alamat'];
    public $timestamp = true;

    public function penerbit()
    {
        return $this->hasMany(penerbit::class);
    }
}

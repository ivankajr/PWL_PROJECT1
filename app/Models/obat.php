<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obat extends Model
{
    public $table = "obat";

    protected $fillable = [
        'id', 'nama_obat', 'jenis_obat', 'spesies', 'harga_obat'
    ];
}

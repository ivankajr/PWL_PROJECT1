<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obat extends Model
{
    protected $table = "obats";
    public $timestamps = false;
    protected $fillable = [
        'nama_obat', 'jenis_obat', 'stock', 'harga'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemilik extends Model
{
    public $table = "pemilik";

    protected $fillable = [
        'nama_pemilik', 'jenis_kelamin', 'alamat', 'no_telp'
    ];
}

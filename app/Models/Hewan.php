<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hewan extends Model
{
    public $table = "hewan";

    protected $fillable = [
        'nama_hewan', 'jenis_hewan', 'jenis_kelamin', 'spesies'
    ];
    public function pemilik(){
        return $this->belongsTo(Pemilik::class);
    }
}

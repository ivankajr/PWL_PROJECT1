<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transanksi extends Model
{
    public $table = "transanksi";

    protected $hidden =['created_at', 'updated_at'];

    protected $fillable = [
        'total'
    ];
    public function hewan(){
        return $this->belongsTo(Hewan::class);
    }
    public function pemilik(){
        return $this->belongsTo(Pemilik::class);
    }
    public function pelayanan(){
        return $this->belongsTo(pelayanan::class);
    }
    public function obat(){
        return $this->belongsTo(obat::class);
    }
}

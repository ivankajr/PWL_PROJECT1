<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenishewan extends Model
{
    public $table = "pemilik";

    protected $fillable = [
        'jenis_hewan'
    ];
}

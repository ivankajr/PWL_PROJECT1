<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenishewan extends Model
{
    public $table = "jenishewan";
    
    public $timestamps = false;
    protected $fillable = [
        'jenis_hewan'
    ];
}

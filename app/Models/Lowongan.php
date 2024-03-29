<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    protected $table = 'lowongan';
    protected $fillable = [
        'membutuhkan',
        'kriteria',
        'nomor',
        'status'
    ];
    public $timestamps = false;
}

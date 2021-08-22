<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriFoto extends Model
{
    protected $table = 'galeri_foto';
    protected $fillable = [
        'foto',
        'judul',
        'deskripsi'
    ];
    public $timestamps = false;
}

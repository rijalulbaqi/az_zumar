<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriVideo extends Model
{
    protected $table = 'galeri_video';
    protected $fillable = [
        'video',
        'judul',
        'deskripsi'
    ];
    public $timestamps = false;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwal_kegiatan';
    protected $fillable = [
        'tanggal',
        'kegiatan',
        'deskripsi'
    ];
    public $timestamps = false;
}

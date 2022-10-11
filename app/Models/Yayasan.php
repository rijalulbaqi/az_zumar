<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yayasan extends Model
{
    protected $table = 'yayasan';
    protected $fillable = [
        'foto_kepala',
        'nama_kepala',
        'sambutan',
        'foto_sekolah',
        'visi',
        'misi'
    ];
    public $timestamps = false;
}

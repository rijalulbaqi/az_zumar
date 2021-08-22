<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $table = 'profil';
    protected $fillable = [
        'lembaga',
        'foto_profil',
        'isi_profil',
        'foto_struktur'
          ];
    public $timestamps = false;
}

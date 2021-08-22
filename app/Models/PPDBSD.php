<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PPDBSD extends Model
{
    protected $table = 'sd';
    protected $fillable = [
        'namalengkap',
        'namapanggilan',
        'tempatlahir',
        'tanggallahir',
        'jeniskelamin',
        'agama',
        'anakke',
        'jumlahsaudara',
        'alamat',
        'nomortelepon',
        'namaayah',
        'tempatlahirayah',
        'tanggallahirayah',
        'agamaayah',
        'pekerjaanayah',
        'pendidikanayah',
        'namaibu',
        'tempatlahiribu',
        'tanggallahiribu',
        'agamaibu',
        'pekerjaanibu',
        'pendidikanibu'
    ];
    public $timestamps = false;
}

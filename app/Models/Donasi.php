<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    protected $table = 'donasi';
    protected $fillable = [
        'tanggal',
        'dari',
        'jumlah',
        'keterangan'
    ];
    public $timestamps = false;
}

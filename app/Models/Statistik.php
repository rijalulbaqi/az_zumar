<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistik extends Model
{
    protected $table = 'statistik';
    protected $fillable = [
        'murid',
        'guru',
        'ekstra'
    ];
    public $timestamps = false;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 'slide_foto';
    protected $fillable = [
        'slide',
        'foto'
    ];
    public $timestamps = false;
}

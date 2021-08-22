<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NomorDonasi extends Model
{
    protected $table = 'nomordonasi';
    protected $fillable = [
        'nomor_whatsapp'
    ];
    public $timestamps = false;
}

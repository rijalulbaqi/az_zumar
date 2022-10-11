<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Syarat extends Model
{
    protected $table = 'syarat_pendaftaran';
    protected $fillable = [
        'syarat',
        'status'
          ];
    public $timestamps = false;
}

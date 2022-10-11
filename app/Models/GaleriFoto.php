<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;  

class GaleriFoto extends Model
{
    protected $table = 'galeri_foto';
    protected $fillable = [
        'foto',
        'judul',
        'deskripsi'
    ];
    public function getCreatedAtAttribute(){
        return Carbon::parse($this->attributes['created_at'])
        ->translatedFormat('l, d F Y, H:i');
    }
}

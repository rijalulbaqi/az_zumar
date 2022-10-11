<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon; 

class GaleriVideo extends Model
{
    protected $table = 'galeri_video';
    protected $fillable = [
        'video',
        'judul',
        'deskripsi'
    ];
    public function getCreatedAtAttribute(){
        return Carbon::parse($this->attributes['created_at'])
        ->translatedFormat('l, d F Y, H:i');
    }
}

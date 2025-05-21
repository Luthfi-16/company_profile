<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoFasilitas extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'image', 'id_fasilitas'];
    public $timestamp   = true;

    public function fasilitas()
    {
        return $this->belongsTo(Fasilitas::class, 'id_fasilitas');
    }


    public function deleteImage()
    {
        if ($this->image && file_exists(public_path('storage/foto_fasilitas' . $this->image))) {
            return unlink(public_path('storage/foto_fasilitas' . $this->image));
        }
    }
}

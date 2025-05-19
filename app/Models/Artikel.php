<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'judul', 'isi', 'foto', 'tanggal'];
    public $timestamp   = true;

    public function deleteImage()
    {
        if ($this->foto && file_exists(public_path('storage/artikel' . $this->foto))) {
            return unlink(public_path('storage/artikel' . $this->foto));
        }
    }
}

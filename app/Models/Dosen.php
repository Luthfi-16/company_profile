<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_dosen', 'telepon', 'email', 'jabatan', 'foto', 'status'];
    public $timestamp   = true;

    public function deleteImage()
    {
        if ($this->foto && file_exists(public_path('storage/dosen' . $this->foto))) {
            return unlink(public_path('storage/dosen' . $this->foto));
        }
    }
}

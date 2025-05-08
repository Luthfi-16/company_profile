<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama_fakultas', 'desk', 'foto'];
    public $timestamp   = true;

    public function deleteImage()
    {
        if ($this->foto && file_exists(public_path('storage/fakultas' . $this->foto))) {
            return unlink(public_path('storage/fakultas' . $this->foto));
        }
    }
}

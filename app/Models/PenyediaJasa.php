<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenyediaJasa extends Model
{
    use HasFactory;

    protected $table = "penyedia_jasa";
    protected $fillable = ['idJasa','idPengguna','namaToko','gambar','deskripsi'];
}

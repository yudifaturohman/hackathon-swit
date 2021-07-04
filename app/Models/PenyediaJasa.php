<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Yudi1212\AutoNumber\AutoNumberTrait;

class PenyediaJasa extends Model
{
    use HasFactory, AutoNumberTrait;

    protected $table = "penyedia_jasa";
    protected $fillable = ['idJasa','idPengguna','namaToko','gambar','deskripsi'];

    public function getAutoNumberOptions()
    {
        return [
            'idJasa' => [
                'format' => 'PJS?', 
                'length' => 5
            ]
        ];
    }
}

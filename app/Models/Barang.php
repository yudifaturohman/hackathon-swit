<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Yudi1212\AutoNumber\AutoNumberTrait;

class Barang extends Model
{
    use HasFactory, AutoNumberTrait;

    protected $table = "barang";
    protected $fillable = ['idBarang','idJasa','idPengguna','namaBarang','deskripsi','harga','stok'];

    public function getAutoNumberOptions()
    {
        return [
            'idBarang' => [
                'format' => 'BRG?', 
                'length' => 5
            ]
        ];
    }
}

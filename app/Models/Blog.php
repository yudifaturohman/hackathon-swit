<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Yudi1212\AutoNumber\AutoNumberTrait;

class Blog extends Model
{
    use HasFactory, AutoNumberTrait;

    protected $table = "blog";
    protected $fillable = ['idBlog','idAdministrator','judul','slug','konten','gambar'];

    public function getAutoNumberOptions()
    {
        return [
            'idBlog' => [
                'format' => 'BLG?', 
                'length' => 5
            ]
        ];
    }
}

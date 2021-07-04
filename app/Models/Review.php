<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Yudi1212\AutoNumber\AutoNumberTrait;

class Review extends Model
{
    use HasFactory, AutoNumberTrait;

    protected $table = "review";
    protected $fillable = ['idReview','idJasa','idPengguna','review','rating'];

    public function getAutoNumberOptions()
    {
        return [
            'idReview' => [
                'format' => 'RVW?', 
                'length' => 5
            ]
        ];
    }
}

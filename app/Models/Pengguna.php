<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Yudi1212\AutoNumber\AutoNumberTrait;

class Pengguna extends Authenticatable
{
    use HasFactory, Notifiable, AutoNumberTrait;

    protected $table = "pengguna";
    protected $fillable = ['idPengguna','nama','telp','email','password','status','activation_token'];

    public function getAutoNumberOptions()
    {
        return [
            'idPengguna' => [
                'format' => 'PGN?', 
                'length' => 3 
            ]
        ];
    }
}

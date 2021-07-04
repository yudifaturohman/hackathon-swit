<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Yudi1212\AutoNumber\AutoNumberTrait;

class User extends Authenticatable
{
    use HasFactory, Notifiable, AutoNumberTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "users";

    protected $fillable = [
        'idPengguna',
        'nama',
        'telp',
        'email',
        'password',
        'status',
        'activation_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function getAutoNumberOptions()
    {
        return [
            'idPengguna' => [
                'format' => 'USR?', 
                'length' => 3 
            ]
        ];
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

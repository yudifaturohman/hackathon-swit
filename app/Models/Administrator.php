<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Yudi1212\AutoNumber\AutoNumberTrait;

class Administrator extends Authenticatable
{
    use Notifiable, AutoNumberTrait;

    protected $guard = 'masterauth';
    protected $table = "administrator";
    
    protected $fillable = ['idAdministrator','nama','email','password'];

    public function getAutoNumberOptions()
    {
        return [
            'idAdministrator' => [
                'format' => 'ADM?', 
                'length' => 3 
            ]
        ];
    }
}

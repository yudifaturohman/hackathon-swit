<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Administrator extends Authenticatable
{
    use Notifiable;

    protected $guard = 'masterauth';
    protected $table = "administrator";
    
    protected $fillable = ['idAdministrator','nama','email','password'];
}

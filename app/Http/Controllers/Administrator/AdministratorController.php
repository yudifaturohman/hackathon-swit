<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    public function index()
    {
        return view('administrator.dashboard');
    }

    public function halamanPengguna()
    {
        return view('administrator.pengguna');
    }
}

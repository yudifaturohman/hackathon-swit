<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Notifications\SignupActivate;

class DaftarController extends Controller
{
    public function pendaftaran()
    {
        return view('auth.register-pengguna');
    }

    public function pendaftaranBaru(Request $request)
    {
        $validate = $this->validate($request, [
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed',
        ]);

        $daftar = User::create([
            'email' => $request->get('email'),
            'nama'  => $request->get('nama'),
            'password' => Hash::make($request->get('password')),
            'status' => '0',
            'activation_token' => Str::random(60),
        ]);

        $daftar->notify(new SignupActivate($daftar));

        session()->flash('pesan', 'Pendaftaran dengan email '.$daftar['email'].' telah berhasil, silahkan untuk melakukan verifikasi email terlebih dahulu');

        return redirect()->back();
    }

    public function aktifasiPendaftaran($token)
    {
        $user = User::where('activation_token', $token)->first();
        if(!$user) {
            return redirect()->route('pendaftaran')->with('pesan', 'Mohon maaf email yang anda maksud tidak ditemukan');
        }
        
        $user->status = 1;
        $user->activation_token = null;
        $user->save();

        return redirect()->route('login')->with('pesan', 'Akun dengan '.$user['email'].' berhasil di verifikasi');
    }
}

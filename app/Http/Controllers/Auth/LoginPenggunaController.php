<?php
 
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
 
 
class LoginPenggunaController extends Controller
{
    public function showFormLogin()
    {
        if (Auth::check()) {
            return redirect()->route('pengguna.beranda');
        }
        return view('auth.login-pengguna');
    }
 
    public function login(Request $request)
    {
        $validator = $this->validate($request, [
            'email'    => 'required|email',
            'password' => 'required|min:6',
        ]);
   
        $credentials = request(['email', 'password']);
        $credentials['status'] = 1;
        $credentials['deleted_at'] = null;

        if(Auth::attempt($credentials)){ 
            $user = Auth::user();
            return redirect()->route('pengguna.beranda');
        }elseif(!Auth::attempt($credentials)){
            return redirect()->route('login')->with('error', 'Mohon maaf e-mail belum melakukan verifikasi atau email belum terdaftar');
        }
        else{ 
            return redirect()->route('login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
 
}
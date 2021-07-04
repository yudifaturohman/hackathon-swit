<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    protected $maxAttempts = 3;
    protected $decayMinutes = 2;

    public function __construct()
    {
        $this->middleware('guest:masterauth')->except('postLogout');
    }

    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8',
            // 'g-recaptcha-response' => 'required|captcha',
        ]);

        if (auth()->guard('masterauth')->attempt($request->only('email', 'password'))) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(["Incorrect user login details!"]);
        }
    }

    public function postLogout()
    {
        auth()->guard('masterauth')->logout();
        session()->flush();

        return redirect()->route('admin.login');
    }
}

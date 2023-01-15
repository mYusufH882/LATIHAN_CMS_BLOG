<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authentication(AuthRequest $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        
        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'Email atau Password Salah',
        ]);
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registered(RegisterRequest $request)
    {
        $data = [
            'name' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];

        User::create($data);

        return redirect()->route('login')->with('success', 'Anda Berhasil Registrasi, Silahkan Login !!!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.Login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'senha' => 'required'
        ]);

        // Criptografa a senha com MD5
        $senhaCriptografada = md5($credentials['senha']);

        // Busca o usuário pelo username
        $user = User::where('username', $credentials['username'])->first();

        if ($user && $user->password === $senhaCriptografada) {
            Auth::login($user);
            return redirect()->intended('/home');
        }

        return back()->withErrors([
            'username' => 'As credenciais fornecidas não correspondem aos nossos registros.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}

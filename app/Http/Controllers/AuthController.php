<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\SingupRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showSingupForm()
    {
        return view('Auth.singup', ['pageTitle' => 'SingUp']);
    }

    public function singup(SingupRequest $request)
    {
        //dd($request->all());
        $user = new User();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');

        $user->save();

        auth()->login($user);

        return redirect('/');
    }

    public function showLoginForm()
    {
        return view('Auth.login', ['pageTitle' => 'Login']);
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/');
        }

        return back()->withErrors([
            'email' => 'email not match',
            'password' => 'password not match'
        ]);
    }

    public function logout()
    {
        auth()->logout();

        return redirect('login');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
// use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function createRegister()
    {
        return view('auth.register');
    }

    public function storeRegister(RegisterRequest $request)
    {
        // dd($request->all());

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'password' => $request->password,

        ]);
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            Auth::attempt(['email' => $request->emailo, 'password' => $request->password]);
            $user = Auth::user();

            if ($user->hasRole('admin')) {
                return to_route('dashboard.index')->with('success', 'Login successful!');
            }

            // $request->session()->regenerate();
            return redirect('/')->with('success', 'Login successful!');
        }

        return back()->withErrors([
            'email' => 'Invalid email or password.',
        ])->onlyInput('email');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}

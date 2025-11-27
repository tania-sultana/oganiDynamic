<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function createRegister()
    {
        return view('auth.register');
    }

    public function storeRegister(RegisterRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'password' => $request->password,
        ]);

        $user->assignRole('user');

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

            /** @var App\Models\User */
            $user = Auth::user();

            if ($user->hasRole('admin')) {
                return to_route('admin.dashboard')->with('success', 'Login successful!');
            }

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

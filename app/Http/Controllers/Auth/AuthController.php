<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function loginPage()
    {
        return view("auth.login.cover_login");
    }
    public function registerPage()
    {
        return view("auth.register");
    }

    public function login(Request $request)
    {

        $validated = $request->validate([
            'auth_uid' => 'userid|required|exists:users,userid',
            'password' => 'required|min:3'
        ]);

        $user = User::where('userid', $validated['auth_uid'])->first();
        if ($user && Hash::check($validated['password'], $user->password)) {
            Auth::login($user);

            if ($user->role == "admin") {
                return redirect()->route('admin.dashboard')->with('success', 'Login successfull!');
            }

            return redirect("/")->with('success', 'Login successfull!');
        }
        return redirect('/login')->with('error', 'Wrong Credentials');
    }

    public function register(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|min:3|max:255',
            'terms' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:3'
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => 'user'
        ]);

        Auth::login($user);
        return redirect("/")->with('message', 'Regestration successful!');
    }

    public function logout(Request $request)
    {
        if (Auth::check()) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/login')->with('success', 'Logout successful!');
        }
        return redirect('/');
    }


}

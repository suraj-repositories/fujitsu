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
        return view("auth.login.cover_register");
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'auth_uid' => 'required|string|exists:users,userid',
            'password' => 'required|string|min:3',
        ]);

        $user = User::where('userid', $validated['auth_uid'])->first();

        if (!Hash::check($validated['password'], $user->password)) {
            return redirect()->back()
                ->withErrors(['password' => 'The provided password is incorrect.'])
                ->withInput($request->except('password'));
        }

        if ($user) {
            Auth::login($user);

            $roleRoutes = [
                'super_admin' => route('superadmin.dashboard.index'),
                'admin' => route('admin.dashboard.index'),
                'user' => route('user.dashboard.index', $user->userid),
            ];

            foreach ($roleRoutes as $role => $route) {
                if ($user->hasRole($role)) {
                    return redirect($route)->with('success', 'Login successful!');
                }
            }

            return redirect('/')->with('warning', 'Role not recognized. Redirected to home.');
        }

        return redirect()->back()->with('error', 'Login failed. Please check your credentials.');
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
            return redirect()->route('login')->with('success', 'Logout successful!');
        }
        return redirect('/');
    }
}

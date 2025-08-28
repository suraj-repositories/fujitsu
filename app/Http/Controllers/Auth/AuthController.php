<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\AuthTheme;
use App\Models\Form;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function loginPage()
    {
        $appliedTheme = config('initial_data.login_themes')[0];

        $dbAppliedTheme = AuthTheme::where('is_applied', true)->where('type', 'login')->first();
        if($dbAppliedTheme){
            $appliedTheme = $dbAppliedTheme->toArray();
        }

        return view($appliedTheme['view'], [
            'direction' => $appliedTheme['direction'] ?? null
        ]);
    }

    public function registerPage()
    {
        // $form = Form::with(['fields' => function ($query) {
        //     $query->where('enabled', true)->orderBy('order');
        // }])->where('name', 'registration')->firstOrFail();

        $appliedTheme = config('initial_data.register_themes')[0];

        $dbAppliedTheme = AuthTheme::where('is_applied', true)->where('type', 'register')->first();
        if($dbAppliedTheme){
            $appliedTheme = $dbAppliedTheme->toArray();
        }

        return view($appliedTheme['view'], [
            'direction' => $appliedTheme['direction'] ?? null
        ]);

        // return view("auth.register.cover_register");
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'auth_uid' => 'required|string|exists:users,username',
            'password' => 'required|string|min:3',
        ]);

        $user = User::where('username', $validated['auth_uid'])->first();

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
            'username' => 'required|min:3|max:255|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:3'
        ]);

        $user = User::create([
            'username' => $validated['username'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password'])
        ]);

        $user->assignRole('user');

        // Auth::login($user);
        return redirect()->route('login')->with('success', 'Regestration successful! Login to continue.');
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

    public function checkIfExists(Request $request)
    {
        if ($request->has('username')) {
            $exists = User::where('username', $request->username)->exists();
            return response()->json(['exists' => $exists]);
        }

        if ($request->has('email')) {
            $exists = User::where('email', $request->email)->exists();
            return response()->json(['exists' => $exists]);
        }

        return response()->json([
            'error' => 'No username or email provided.'
        ], 400);
    }
}

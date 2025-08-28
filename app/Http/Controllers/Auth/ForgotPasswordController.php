<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\AuthTheme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    public function showLinkRequestForm()
    {
        $appliedTheme = config('initial_data.forgot_password_themes')[0];

        $dbAppliedTheme = AuthTheme::where('is_applied', true)->where('type', 'forgot-password')->first();
        if($dbAppliedTheme){
            $appliedTheme = $dbAppliedTheme->toArray();
        }

        return view($appliedTheme['view'], [
            'direction' => $appliedTheme['direction'] ?? null
        ]);

        return view('auth.forgot_password.forgot_password_basic');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
                    ? back()->with([ 'success' => __($status)])
                    : back()->withErrors(['error' => 'Something went wrong!', 'email' => __($status)]);
    }
}

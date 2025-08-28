<?php

namespace App\Http\Controllers\SuperAdmin\Settings\AuthSettings;

use App\Http\Controllers\Controller;
use App\Models\AuthTheme;
use Illuminate\Http\Request;

class AuthThemeController extends Controller
{
    //
    public function index()
    {
        return view('super_admin.settings.auth.auth_theme_settings', [
            'loginThemes' => AuthTheme::where('type', 'login')->get()
        ]);
    }

    public function changeTheme(Request $request)
    {
        $type = $request->input('type');
        $enable_id = $request->input('enable_id');

        if (empty($type) || empty($enable_id)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Invalid data!',
            ]);
        }

        $isExists = AuthTheme::where('id', $enable_id)->exists();
        if (!$isExists) {
            return response()->json([
                'status' => 'error',
                'message' => 'Invalid data!',
            ]);
        }

        AuthTheme::where('type', $type)->update(['is_applied' => false]);
        AuthTheme::where('id', $enable_id)->update(['is_applied' => true]);

        return response()->json([
            'status' => 'success',
            'message' => 'Successfully updated!',
        ]);
    }
}

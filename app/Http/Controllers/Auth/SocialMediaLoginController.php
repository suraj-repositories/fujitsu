<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class SocialMediaLoginController extends Controller
{
    public function googlePage()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleRedirect()
    {
        try {
            $user = Socialite::driver('google')->user();


            $findUser = User::where('email', $user->email)->first();
            if (!$findUser) {
                $findUser = new User();
                $findUser->username = $user->name;
                $findUser->email = $user->email;
                $findUser->password = Hash::make(Str::rand(12));
                $findUser->save();

                $name = $this->extractName($user->name);

                $findUser->profile()->create([
                    'first_name' => $name['firstname'],
                    'middle_name' => $name['middlename'],
                    'last_name' => $name['lastname'],
                    'profile_picture' => $user->avatar,
                ]);

                $findUser->assignRole('user');
            }
            Auth::login($findUser);
            return redirect()->route('login');
        } catch (Exception $e) {
            return redirect()->back()->with('error', empty($e->getMessage()) ? "Something went wrong!" : $e->getMessage());
        }
    }

    public function linkedinPage()
    {
        return Socialite::driver('linkedin-openid')->redirect();
    }

    public function linkedinRedirect()
    {
        try {
            $user = Socialite::driver('linkedin-openid')->user();
            $findUser = User::where('email', $user->email)->first();

            if (!$findUser) {
                $findUser = new User();
                $findUser->email = $user->email;
                $findUser->password = Hash::make('123');
                $findUser->name = $user->name;
                $findUser->role = "USER";

                $findUser->save();
            }

            Auth::login($findUser);
            return redirect()->route('home');
        } catch (Exception $e) {
            dd('Something went wrong!! : ' . $e->getMessage());
        }
    }

    public function facebookPage()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookRedirect()
    {
        try {
            $user = Socialite::driver('facebook')->user();
            $findUser = User::where('email', $user->email)->first();

            if (!$findUser) {
                $findUser = new User();
                $findUser->name = $user->name;
                $findUser->email = $user->email;
                $findUser->password = Hash::make(Str::rand(12));
                $findUser->role = 'USER';
                $findUser->save();
            }

            Auth::login($findUser);
            return redirect()->route('login');
        } catch (Exception $e) {
            return redirect()->back()->with('error', empty($e->getMessage()) ? "Something went wrong!" : $e->getMessage());
        }
    }

    private function extractName($fullname) {
        $name = explode(" ", trim($fullname));
        $count = count($name);

        if ($count === 2) {
            return [
                'firstname' => $name[0],
                'middlename' => NULL,
                'lastname' => $name[1],
            ];
        }

        return [
            'firstname' => $name[0] ?? NULL,
            'middlename' => $name[1] ?? NULL,
            'lastname' => implode(" ", array_slice($name, 2)) ?: NULL,
        ];
    }


}

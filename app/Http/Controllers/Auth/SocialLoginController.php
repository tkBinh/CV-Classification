<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class SocialLoginController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback(\Illuminate\Http\Request $request)
    {
        $user = Socialite::driver('google')->user();
        $existingUser = User::where('email', '=', $user->email)->where('role','<',2)->first();
        if ($existingUser) {
            Auth::login($existingUser);
            $request->session()->put('login', $existingUser);
            return view('admin.dashboard');
        }

        return redirect()->route('admin.login')->withErrors('403');
    }

    public function logout() {
        Auth::logout();
        Session::forget('login');

        return redirect()->route('admin.login')->with(['logout_message' => 'Logout success']);
    }
}

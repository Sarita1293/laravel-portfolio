<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class GoogleAuthController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }


    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->user();

        // Find existing user by email
        $user = User::where('email', $googleUser->email)->first();

        if (!$user) {
            return redirect('/login')
                ->with('error', 'Your Google account is not registered.');
        }

        // Login user into Laravel session
        Auth::login($user);

        return redirect('/admin/dashboard');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            
            return Redirect::route('login')->withErrors(['msg' => 'Google login failed.']);
           
        }

        $existingUser = User::where('email', $user->getEmail())->first();

        if ($existingUser) {
            // If the user is already logged in, connect their Google account to their existing account
            if (Auth::check()) {
                $existingUser->google_id = $user->getId();
                $existingUser->save();
                
                return Redirect::route('home')->with('success', 'Google account connected successfully.');
            }

            // Otherwise, log in the existing user
            Auth::login($existingUser);
        } else {
            // Create a new user with the Google data
      
            $newUser = User::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'google_id' => $user->getId(), // Save Google ID for future connections
                
                'password' => bcrypt(str_random(16)), // Random password for Google users
            ]);

          Auth::login($newUser);
        }
        return Redirect::route('home'); // Redirect to the desired page after login
    }
}

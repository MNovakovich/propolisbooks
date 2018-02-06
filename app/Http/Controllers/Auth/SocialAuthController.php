<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
 public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();


    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
         
         
        $user = Socialite::driver($provider)->user();
   
         $user->name;
        
    }
}

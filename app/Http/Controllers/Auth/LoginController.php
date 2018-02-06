<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{


    use AuthenticatesUsers;

    
    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider()
    {
        return Socialite::driver('google')->stateless()->user();
    }

    
    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->user();

         return $user->token;
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Redirect the user after authentication.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function redirectTo()
    {
       
        // Check if user is an admin
        if (auth()->user()->role == 'admin') {
            return route('dashboard');
            
        }else {
            return route('welcome');
        }

        return $this->redirectTo;
    }
}

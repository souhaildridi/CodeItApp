<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        // Redirect based on user's role
        
        if ($user->Role === 'responsable') {
            return redirect('/responsable');
        } elseif ($user->Role === 'client') {
            return redirect('/client');
        }
        elseif ($user->Role === 'admin') {
            return redirect('/admin');
        } else {
            return redirect('/home');
        }
    }
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/home');
    }
}

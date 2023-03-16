<?php

namespace App\Http\Controllers;

use App\Http\Requests\SesionRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesionController extends Controller
{
    public function showLogin()
    {
        if (Auth::check()){
            return redirect()->route('home');
        }
        return view('login');
    }

    public function login(SesionRequest $request)
    {
        $credentials = $request->getCredentials();

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        if (!$user) {
            dd('Error: credenciales incorrectas');
            return redirect()->to('login')->withErrors('auth.failed');
        }

        Auth::login($user);

        return $this->authenticated($request, $user);             
    }

    public function authenticated(Request $request, $user)
    {
        dd('User authenticated:', $user);
        return redirect()->route('/');
    }
}

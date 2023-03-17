<?php

namespace App\Http\Controllers;

use App\Http\Requests\SesionRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;

class SesionController extends Controller
{
    // public function store(SesionRequest $request)
    // {
    //     if (Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
    //         return response()->json(['message' => 'Invalid credentials']);
    //     }

    //     return back()->withErrors([
    //         'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.'
    //     ]);
    // }

    public function store(SesionRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) { 
            return response()->json(['message' => 'Bienvenido'], Response::HTTP_OK);
        } else {
        return response(["message" =>"Credenciales inválidas"], Response::HTTP_UNAUTHORIZED);
    }}
    

    public function logout()
    {
        Auth::logout();
        return response()->json(['message' => 'closed session']);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\SesionRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;

class SesionController extends Controller
{
    public function index()
    {
        return view('sesion');
    }

    public function store(SesionRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) { 
            return response()->json(['message' => 'Welcome'], Response::HTTP_OK);
        } else {
        return response(["message" =>"invalid credentials"], Response::HTTP_UNAUTHORIZED);
    }}
    

    public function logout()
    {
        Auth::logout();
        return response()->json(['message' => 'closed session']);
    }
}

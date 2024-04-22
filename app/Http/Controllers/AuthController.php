<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{
    
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
    // if (Auth::attempt($credentials)) {
    //     $user = Auth::user();
    //     $token = $user->createToken('authToken');
    //     return response()->json([
    //         'success' => true,
    //         'token' => $token->plainTextToken,
    //         'user' => $user
    //     ]);
    // }
        try {
            $credentials = $request->only('email', 'password');

        } catch(\Exception $e)
        {
            return response()->json([
                'success' => false,
                'message' => 'Credenciales inválidas'
            ], 500);
        }
    }
}  
?>
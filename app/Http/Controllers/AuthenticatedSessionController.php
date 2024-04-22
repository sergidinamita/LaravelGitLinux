<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function destroy(Request $request)
    {
        try {
            // Handle session invalidation and regeneration according to your application's security requirements
            $request->session()->invalidate();
            $request->session()->regenerateToken();
    
            Auth::logout(); // Log out the authenticated user
    
            $request->session()->regenerate(); // Optionally regenerate the session to mitigate session fixation attacks
    
            return redirect()->intended(route('login')); // Redirect to the intended URL or login route with a flash message if desired

        } catch(\Exception $e)
        {
            return response()->json([
                'success' => false,
                'message' => 'Credenciales inválidas'
            ], 500);
        }
    }
}
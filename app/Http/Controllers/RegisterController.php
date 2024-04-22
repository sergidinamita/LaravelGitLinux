<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Asegúrate de importar el modelo de usuario si lo estás utilizando
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    // Método para mostrar el formulario de registro
    public function showRegistrationForm()
    {
        try {
            return view('auth.fortify.register'); // Nombre de la vista del formulario de registro

        } catch(\Exception $e)
        {
            return response()->json([
                'success' => false,
                'message' => 'Credenciales inválidas'
            ], 500);
        }
    }

    public function register(Request $request)
    {
        //try {
            $request->validate([
                'nombre' => 'required|string|max:255',
                'correo' => 'required|string|email|max:255',
                'contrasenya' => 'required|string|min:2',
            ]);
            
    
    
            User::create([
                'nombre' => $request->nombre,
                'correo' => $request->correo,
                'contrasenya' => $request->contrasenya, 
    
            ]);
    
        
            // return 'hola';
            return redirect('/login')->with('success', '¡Registro exitoso!');
        
        /*} catch(\Exception $e)
        {
            return response()->json([
                'success' => false,
                'message' => $e
            ], 500);
        }*/
        
    }

}
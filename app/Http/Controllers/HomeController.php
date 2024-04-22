<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\empresa; // Asegúrate de importar el modelo correcto
use App\Models\encuesta; // Asegúrate de importar el modelo correcto


class HomeController extends Controller
{
    public function mostrarEmpresa()
    {
        try {
            $empresas = empresa::all();
            return view('home', compact('empresas'));

        } catch(\Exception $e)
        {
            return response()->json([
                'success' => false,
                'message' => 'Error en mostrar la Empresa'
            ], 500);
        }
    }

    public function getEncuestasPorEmpresa(Request $request)
    {
        try {
            // Obtén el ID de la empresa seleccionada desde la solicitud
            $id_empresa = $request->route('id_empresa');
            $id_empresa = intval($id_empresa);
            // Busca las encuestas asociadas con la empresa seleccionada
            $encuestas = Encuesta::where('id_empresa', $id_empresa)->get();
            $encuestas = $encuestas->toArray();

            return response()->json($encuestas);
        } catch(\Exception $e)
        {
            return response()->json([
                'success' => false,
                'message' => 'Error en obtener enquestas'
            ], 500);
        }
    }
}

`""  HOLA CABRON Al Home QUE TANTO BUSCABAS ""`;
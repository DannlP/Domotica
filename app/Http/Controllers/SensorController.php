<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SensorController extends Controller
{
    public function guardarDatosSensor(Request $request)
    {
        $temperatura = $request->input('temperatura');
        $humedad = $request->input('humedad');

        // Aquí puedes almacenar los datos en la base de datos o en un archivo, según tus necesidades.
        // Por ejemplo, para almacenar en la base de datos:

        // TuModelo::create([
        //     'temperatura' => $temperatura,
        //     'humedad' => $humedad,
        // ]);

        return response()->json(['message' => 'Datos recibidos correctamente.']);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Race;
use GuzzleHttp\Client;
use Carbon\Carbon; // Asegúrate de importar Carbon para manejar fechas
use Illuminate\Http\Request;



class RaceController extends Controller
{
    public function fetchAndStoreRaces()
    {
        $client = new Client();
        $response = $client->get('http://ergast.com/api/f1/2024'); // URL de la API

        if ($response->getStatusCode() == 200) {
            // Cargar el contenido XML en SimpleXML
            $xmlContent = simplexml_load_string($response->getBody());

            // Convertir el XML a un array para manejarlo más fácilmente
            $json = json_encode($xmlContent);
            $data = json_decode($json, true);

            // Acceder a la lista de carreras
            $races = $data['RaceTable']['Race'];

            foreach ($races as $raceData) {
                Race::updateOrCreate(
                    ['name' => $raceData['RaceName']], // Campo único para evitar duplicados
                    [
                        'date' => rtrim($raceData['Date'] . ' ' . $raceData['Time'], 'Z'), // Combinar la fecha y la hora
                    ]
                );
            }

            return response()->json(['message' => 'Carreras almacenadas exitosamente']);
        }

        return response()->json(['error' => 'Error al obtener los datos'], 500);
    }

    // Método para obtener la próxima carrera
    public function getNextRace()
    {
        // Obtener la próxima carrera donde la fecha sea mayor o igual a hoy
        $nextRace = Race::where('date', '>', Carbon::now())->orderBy('date')->first();

        return view('welcome', compact('nextRace'));
    }
}

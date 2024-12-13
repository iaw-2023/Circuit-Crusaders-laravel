<?php

namespace App\Http\Controllers;

use App\Models\motoModel;
use App\Models\estiloModel;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http; // Esta línea es la correcta
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

use Illuminate\Http\Request;

class motoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $motos = motoModel::with('estilo')->get();

        return view('moto.index')->with('motos', $motos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $estilos = estiloModel::all();
        return view('moto.create', compact('estilos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'marca' => 'required|string',
                'modelo' => 'required|string',
                'anio' => 'required|integer',
                'cilindrada' => 'required|string',
                'patente' => 'required|string',
                'id_estilo' => 'required|exists:estilos,nro_estilo',
                'monto' => 'required|numeric',
                'foto' => 'required|image'
            ]);
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        }

        $motos = new motoModel();
        $motos->marca = $validatedData['marca'];
        $motos->modelo = $validatedData['modelo'];
        $motos->anio = $validatedData['anio'];
        $motos->cilindrada = $validatedData['cilindrada'];
        $motos->patente = $validatedData['patente'];
        $motos->id_estilo = $validatedData['id_estilo'];
        $motos->monto = $validatedData['monto'];

        $imagen = $request->file('foto');
        $base64Image = base64_encode(file_get_contents($imagen->getRealPath()));//codifica la imagen en base64
        $motos->foto = $base64Image;      

        $motos->save();

        return redirect('/motos');
    }

    /**
     * Display the specified resource.
     */
    public function show(motoModel $motoModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($nro_moto)
    {
        $moto = motoModel::find($nro_moto);
        $estilos = estiloModel::all();
        return view('moto.edit',['moto'=>$moto,'estilos'=>$estilos]);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $nro_moto)
    {
        try {
            $validatedData = $request->validate([
                'marca' => 'required|string',
                'modelo' => 'required|string',
                'anio' => 'required|integer',
                'cilindrada' => 'required|string',
                'patente' => 'required|string',
                'id_estilo' => 'required|exists:estilos,nro_estilo',
                'monto' => 'required|numeric',
                'foto' => 'required|image'
            ]);
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        }

        $moto = motoModel::find($nro_moto);

        $moto->marca = $validatedData['marca'];
        $moto->modelo = $validatedData['modelo'];
        $moto->anio = $validatedData['anio'];
        $moto->cilindrada = $validatedData['cilindrada'];
        $moto->patente = $validatedData['patente'];
        $moto->id_estilo = $validatedData['id_estilo'];
        $moto->monto = $validatedData['monto'];

        if ($request->hasFile('foto')) {
            $imagen = $request->file('foto');
            $base64Image = base64_encode(file_get_contents($imagen->getRealPath()));//codifica la imagen en base64
            $motos->foto = $base64Image; 
        }
        
        

        $moto->save();

        return redirect('motos');
    }

    /**
     * Remove the specified resource from storage.
     */
  
     public function destroy($nro_moto)
{
        $moto = motoModel::findOrFail($nro_moto);
        $moto->delete();
        return redirect('motos');
    }
    
    /**
     * Muestra la pantalla de información de la moto.
     *
     * @param string $make La marca de la moto.
     * @param string $model El modelo de la moto.
     * @return View
     */
    public function info($make, $model)
    {
        $moto = [
            'make' => strtoupper($make),
            'model' => strtoupper($model)
        ];

        try {
            // Realizar la solicitud a la API
            $response = Http::withHeaders([
                'X-Api-Key' => env('NINJA_API_KEY'), // Asegúrate de agregar esta clave en tu archivo .env
            ])->get('https://api.api-ninjas.com/v1/motorcycles', $moto);

            if ($response->successful()) {
                $motoData = $response->json();
                
                if (empty($motoData)) {
                    return view('moto.info', ['error' => 'No se encontró información para esta moto.', 'moto' => $moto]);
                }

                return view('moto.info', ['moto' => $motoData[0]]);
            } else {
                return view('moto.info', ['error' => 'Error al obtener la información de la moto.', 'moto' => $moto]);
            }
        } catch (RequestException $e) {
            Log::error('Error al conectar con la API: ' . $e->getMessage());
            return view('moto.info', ['error' => 'Hubo un error al conectarse con la API.', 'moto' => $moto]);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\motoModel;
use App\Models\estiloModel;

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
                'foto_url' => 'url'
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
        $motos->foto_url = $validatedData['foto_url'];

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
                'foto_url' => 'url'
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
        $moto->foto_url = $validatedData['foto_url'];

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
}

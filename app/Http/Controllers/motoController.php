<?php

namespace App\Http\Controllers;

use App\Models\motoModel;
use Illuminate\Http\Request;

class motoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $motos = motoModel::all();

        return view('moto.index')->with('motos',$motos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('moto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $motos= new motoModel();
        $motos->marca = $request->get('marca');
        $motos->modelo = $request->get('modelo');
        $motos->anio = $request->get('anio');
        $motos->cilindrada = $request->get('cilindrada');
        $motos->patente = $request->get('patente');

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
        return view('moto.edit', compact('moto'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $nro_moto)
    {
        $moto = motoModel::find($nro_moto);

        $moto->marca = $request->get('marca');
        $moto->modelo = $request->get('modelo');
        $moto->anio = $request->get('anio');
        $moto->cilindrada = $request->get('cilindrada');
        $moto->patente = $request->get('patente');

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

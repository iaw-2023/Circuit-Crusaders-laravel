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
        $motos= new motoModel();
        $motos->marca = $request->get('marca');
        $motos->modelo = $request->get('modelo');
        $motos->anio = $request->get('anio');
        $motos->cilindrada = $request->get('cilindrada');
        $motos->patente = $request->get('patente');
        $motos->id_estilo = $request->get('id_estilo');
        $motos->monto = $request->get('monto');


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
        $moto = motoModel::find($nro_moto);

        $moto->marca = $request->get('marca');
        $moto->modelo = $request->get('modelo');
        $moto->anio = $request->get('anio');
        $moto->cilindrada = $request->get('cilindrada');
        $moto->patente = $request->get('patente');
        $moto->id_estilo = $request->get('id_estilo');
        $moto->monto = $request->get('monto');


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

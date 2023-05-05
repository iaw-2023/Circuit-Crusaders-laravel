<?php

namespace App\Http\Controllers;

use App\Models\estiloModel;
use Illuminate\Http\Request;

class estiloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estilos = estiloModel::all();

        return view('estilo.index')->with('estilos',$estilos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estilo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $estilos= new estiloModel();
        $estilos->nombre = $request->get('nombre');
        $estilos->descripcion = $request->get('descripcion');

        $estilos->save();
        return redirect('/estilos');

    }

    /**
     * Display the specified resource.
     */
    public function show(estiloModel $estiloModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($nro_estilo)
    {
        $estilo = estiloModel::find($nro_estilo);
        return view('estilo.edit', compact('estilo'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $nro_estilo)
    {
        $estilo = estiloModel::find($nro_estilo);

        $estilo->nombre = $request->get('nombre');
        $estilo->descripcion = $request->get('descripcion');
        
        $estilo->save();

        return redirect('estilos');
    }

    /**
     * Remove the specified resource from storage.
     */
  
     public function destroy($nro_estilo)
    {
        $estilo = estiloModel::findOrFail($nro_estilo);
        $estilo->delete();
        return redirect('estilos');
    }
}

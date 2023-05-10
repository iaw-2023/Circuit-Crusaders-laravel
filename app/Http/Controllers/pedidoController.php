<?php

namespace App\Http\Controllers;

use App\Models\pedidoModel;
use App\Models\detalleModel;
use Illuminate\Http\Request;


class pedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos = pedidoModel::all();

        return view('pedido.index')->with('pedidos',$pedidos);
    }

    public function getReport($nro_pedido)
    {   
        $pedidos = pedidoModel::find($nro_pedido);
        $detalles = detalleModel::all()->where('id_pedido',$nro_pedido);

        return view('pedido.reporte', ['pedidos'=>$pedidos, 'detalles'=>$detalles]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(pedidoModel $pedidoModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pedidoModel $pedidoModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pedidoModel $pedidoModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pedidoModel $pedidoModel)
    {
        //
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pedidoModel;
use App\Models\detalleModel;

class reporteFechaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('reporte.reporteFecha');
    }

    public function searchOrders(Request $request)
    {
        $fecha_inicio = $request->input('fecha_inicio');
        $fecha_fin = $request->input('fecha_fin');
    
        $pedidos = pedidoModel::whereBetween('fecha_pedido', [$fecha_inicio, $fecha_fin])->get();
    
        return view('reporte.reporteFecha', ['pedidos' => $pedidos]);
    }

    public function openOrders($nro_pedido)
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

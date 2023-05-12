<?php

namespace App\Http\Controllers;

use App\Models\clienteModel;
use App\Models\pedidoModel;
use App\Models\detalleModel;
use Illuminate\Http\Request;

class reporteClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        return view('reporte.reporteCliente');
    }

    public function searchOrders(Request $request)
    {
        $mail = $request->input('mail');
        $cliente = clienteModel::where('email', $mail)->first();
        if ($cliente) {          
            $pedidos = pedidoModel::where('id_cliente', $cliente->nro_cliente)->get();
            return view('reporte.reporteCliente', ['cliente' => $cliente, 'pedidos' => $pedidos]);
        } else {
            return view('reporte.reporteCliente', ['error' => 'No se encontró el cliente con ese correo electrónico']);
        }
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

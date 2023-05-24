<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\motoModel;
use App\Models\estiloModel;
use App\Models\clienteModel;
use App\Models\pedidoModel;
use App\Models\detalleModel;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    
    public function motos(Request $request)
    {
        $motos = motoModel::all();

        return response()->json($motos);

    }

    
    public function estilos(Request $request)
    {
        $estilos = estiloModel::all();

        return response()->json($estilos);

    }

    public function motosPorEstilo (Request $request)
    {
        $motos = motoModel:: where('id_estilo',$request->id_estilo)
            ->select('motos.nro_moto','motos.marca','motos.modelo', 'motos.cilindrada')
            ->get();
        return response()->json($motos);
    }

    public function motosPorMarca(Request $request)
    {
        $motos = motoModel::where('marca', $request->marca)
            ->select('motos.nro_moto', 'motos.modelo', 'motos.cilindrada')
            ->get();
        return response()->json($motos);
    }



    public function pedido(Request $request)
    {
        $pedido = new pedidoModel();
        $pedido -> nro_pedido = $request->nro_pedido;
        $pedido -> fecha_pedido = now();
        $pedido -> id_cliente = $request->id_cliente;

        $pedido -> save();

        
        foreach($request->motos as $moto){
            $detalle= new detalleModel();
         
            $detalle -> id_pedido = $pedido->nro_pedido;
            $detalle -> id_moto = $moto["nro_moto"];
            $detalle-> save();
        }
    }

}
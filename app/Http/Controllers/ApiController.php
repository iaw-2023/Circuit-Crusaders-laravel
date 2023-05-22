<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\motoModel;
use App\Models\estiloModel;
use App\Models\clienteModel;
use App\Models\pedidoModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    
    public function motos(Request $request)
    {
        $motos = DB::table('motos')
        ->select('nro_moto','marca','modelo','anio', 'cilindrada','patente','id_estilo')
        ->get();
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

    public function motosPorMarca (Request $request)
    {
        $motos = DB:: table('motos')
            ->join('estilos','motos.id_estilo','=','estilos.nro_estilo')
            ->select('motos.nro_moto','estilos.nombre','motos.modelo', 'motos.cilindrada')
            ->where('motos.marca',$request->marca)
            ->get();
        return response()->json($motos);
    }

    public function pedido(Request $request)
    {
        $pedido = new pedidoModel();
        $pedido -> nro_pedido = $request->nro_pedido;
        $pedido -> fecha_pedido = now();
        $pedido -> created_at = now();
        $pedido -> update_at = now();
        $pedido -> save();

        foreach($request->motos as $moto){
            $detalle= new detalleModel();
            $detalle -> created_at = now();
            $detalle -> update_at = now();           
            $detalle -> id_pedido = $pedido->nro_pedido;
            $detalle -> id_moto = $moto["nro_moto"];
            $detalle-> save();
        }
    }

}
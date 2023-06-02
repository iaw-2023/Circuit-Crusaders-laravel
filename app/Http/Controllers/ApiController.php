<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\motoModel;
use App\Models\estiloModel;
use App\Models\clienteModel;
use App\Models\pedidoModel;
use App\Models\detalleModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
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

        $motos = motoModel::where('id_estilo', $request->id_estilo)->get();

        return response()->json($motos);
    }

    public function motosPorMarca(Request $request)
    {
        $motos = motoModel::where('marca', $request->marca)->get();
        return response()->json($motos);
    }



    public function pedido(Request $request)
    {
        if (clienteModel::where('email',$request->email)->exists()) {
            DB::beginTransaction();

            $pedido = new pedidoModel();

            $pedido -> fecha_pedido = now();

            $email = $request->email;
            $cliente = clienteModel::where('email', $email)->first();
            $pedido->id_cliente = $cliente->nro_cliente;

            $pedido -> save();

            foreach($request->motos as $moto){
                if (motoModel::where('nro_moto',$moto["nro_moto"])->exists()) {
                    $detalle= new detalleModel();
                    $detalle -> id_pedido = $pedido->nro_pedido;
                    $detalle -> id_moto = $moto["nro_moto"];
                    $detalle-> save();
                }
                else {
                    DB::rollBack();
                    return response()->json("La moto no se encuentra en la base de datos.",500);
                }
            }
            DB::commit();
            return response()->json("El pedido fue registrado correctamente.",200);
        }
        else {
            return response()->json("No existe el email ingresado.",500);
        }
    }
}
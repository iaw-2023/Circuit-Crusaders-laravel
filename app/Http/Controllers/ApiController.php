<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\motoModel;
use App\Models\estiloModel;
use App\Models\clienteModel;
use App\Models\pedidoModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ApiController extends Controller
{

    public function login(Request $request)
    {
        $response = ["status"=>0,"msg"=>""];

        $data = json_decode($request->getContent());

        $user = User::where('email',$data->email)->first();

        if($user){
            if(Hash::check($data->password,$user->password)){
                $token = $user->createToken("token");
                $response["status"] = 1;
                $response["msg"] = $token->plainTextToken;
            }
            else{
                $response["msg"]="Credenciales incorrectas.";
            }
        }
        else{
            $response["msg"]="Usuario no encontrado.";
        }

        return response()->json($response);
    }

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

    public function clientes(Request $request)
    {
        $clientes = clienteModel::all();

        return response()->json($clientes);

    }

    public function pedidos(Request $request)
    {
        $pedidos = pedidoModel::all();

        return response()->json($pedidos);

    }

    public function motoPorEstilo (Request $request)
    {
        $motos = motoModel:: where('nro_moto',$request->id);
        ->select('moto.nro_moto','moto.marca','moto.modelo', 'moto.cilindrada')
        ->get();
        return response()->json($motos);
    }

    public function motoPorMarca (Request $request)
    {
        $motos = DB:: table('estilos');
        ->join('moto.estilo','=','estilo.nro_estilo')
        ->select('moto.nro_moto','estilo.nombre','moto.modelo', 'moto.cilindrada')
        ->where('estilo.nro_estilo',$request->id)
        ->get();
        return response()->json($motos);
    }

}

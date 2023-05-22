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

   /**
* @OA\Info(
*             title="API motos Motomami", 
*             version="1.0",
*             description="Documentacion de la API de Motomami"
* )
*
* @OA\Server(url="https://circuit-crusaders-laravel-agusl1660.vercel.app/rest/")
*/

class ApiController extends Controller
{
    /**
     * Listado de todas las motos del catalogo
     * @OA\Get (
     *     path="/motos",
     *     tags={"Motos"},
     *     @OA\Response(
     *         response=200,
     *         description="Ok",
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 type="array",
     *                 property="rows",
     *                 @OA\Items(
     *                     type="object",
     *                     @OA\Property(
     *                         property="nro_moto",
     *                         type="number",
     *                         example="1"
     *                     ),
     *                     @OA\Property(
     *                         property="marca",
     *                         type="string",
     *                         example="Aderson Felix"
     *                     ),
     *                     @OA\Property(
     *                         property="modelo",
     *                         type="string",
     *                         example="Jara Lazaro"
     *                     ),
     *                     @OA\Property(
     *                         property="anio",
     *                         type="number",
     *                         example="2000"
     *                     ),
     *                     @OA\Property(
     *                         property="cilindrada",
     *                         type="string",
     *                         example="125cc"
     *                     ),
     *                     @OA\Property(
     *                         property="patente",
     *                         type="string",
     *                         example="324 ASDA"
     *                     )
     *                 )
     *             )
     *         )
     *     )
     * )
     */
    public function motos(Request $request)
    {
        $motos = DB::table('motos')
        ->select('nro_moto','marca','modelo','anio', 'cilindrada','patente','id_estilo')
        ->get();
        return response()->json($motos);

    }

    /**
     * Listado de todas los estilos en los que se dividen las motos
     * @OA\Get (
     *     path="/estilos",
     *     tags={"Estilos"},
     *     @OA\Response(
     *         response=200,
     *         description="Ok",
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 type="array",
     *                 property="rows",
     *                 @OA\Items(
     *                     type="object",
     *                     @OA\Property(
     *                         property="nro_estilo",
     *                         type="number",
     *                         example="1"
     *                     ),
     *                     @OA\Property(
     *                         property="nombre",
     *                         type="string",
     *                         example="STREET"
     *                     ),
     *                     @OA\Property(
     *                         property="descripcion",
     *                         type="string",
     *                         example="Moto STREET"
     *                     )
     *                 )
     *             )
     *         )
     *     )
     * )
     */
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
            $pedido -> created_at = now();
            $pedido -> update_at = now();
            $detalle -> id_moto = $moto["nro_moto"];
            $detalle -> id_pedido = $pedido->nro_pedido;
            $detalle ->monto = $request->monto;
            $detalle-> save();
        }
    }

    
}

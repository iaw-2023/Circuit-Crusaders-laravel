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
        $user = auth()->user();

        if (!$user) {
            return response()->json("Usuario no autenticado.", 401);
        }

        DB::beginTransaction();

        $pedido = new pedidoModel();

        $pedido->fecha_pedido = now();
        $pedido->id_cliente = $user->nro_cliente;

        $pedido->save();

        foreach ($request->motos as $moto) {
            if (motoModel::where('nro_moto', $moto["nro_moto"])->exists()) {
                $detalle = new detalleModel();
                $detalle->id_pedido = $pedido->nro_pedido;
                $detalle->id_moto = $moto["nro_moto"];
                $detalle->save();
            } else {
                DB::rollBack();
                return response()->json("La moto no se encuentra en la base de datos.", 500);
            }
        }

        DB::commit();
        return response()->json("El pedido fue registrado correctamente.", 200);
    }


    /*AUTENTICACIÓN*/
    public function register(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:clientes',
            'password' => 'required|confirmed'            
        ]);
    
        $cliente = new clienteModel();
        $cliente->name = $request->name;
        $cliente->email = $request->email;
        $cliente->password = bcrypt($request->password); // Hash de la contraseña
        $cliente->save();
    
        $token = $cliente->createToken('auth_token')->plainTextToken;
    
        return response()->json([
            "status" => 200,
            "msg" => "¡Registro de usuario exitoso!",
            "access_token" => $token,
        ]);    
    }


    public function login(Request $request) {

        $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        $cliente = clienteModel::where("email", "=", $request->email)->first();

        if( isset($cliente->nro_cliente) ){
            if(Hash::check($request->password, $cliente->password)||($request->password === $cliente->password)){
                //creamos el token
                $token = $cliente->createToken("auth_token")->plainTextToken;
                //si está todo ok
                return response()->json([
                    "status" => 200,
                    "msg" => "¡Usuario logueado exitosamente!",
                    "access_token" => $token
                ]);        
            }else{
                return response()->json([
                    "status" => 0,
                    "msg" => "La password es incorrecta",
                ], 404);    
            }

        }else{
            return response()->json([
                "status" => 0,
                "msg" => "Usuario no registrado",
            ], 404);  
        }
    }

    public function userProfile() {
        return response()->json([
            "status" => 0,
            "msg" => "Acerca del perfil de usuario",
            "data" => auth()->user()
        ]); 
    }

    public function logout() {
        auth()->cliente()->tokens()->delete();
        
        return response()->json([
            "status" => 1,
            "msg" => "Cierre de Sesión",            
        ]); 
    }

    public function getOrderHistory() {
        $cliente = clienteModel::where("email", "=", auth()->user()->email)->first();
            
        $pedidos = pedidoModel::where("id_cliente", "=", $cliente->nro_cliente)->get();
        
        $historialPedidos = [];
        
        foreach($pedidos as $pedido) {
            $detalle = detalleModel::where("id_pedido", "=", $pedido->nro_pedido)->get(); // Usar get() en lugar de first()
            
            foreach ($detalle as $detalleItem) { // Recorrer los detalles y agregar cada moto al arreglo
                $moto = motoModel::find($detalleItem->id_moto);
    
                $historialPedidos[] = [
                    "fecha_pedido" => $pedido->fecha_pedido,
                    "moto" => [
                        "marca" => $moto->marca,
                        "modelo" => $moto->modelo,
                        "anio" => $moto->anio,
                        "cilindrada" => $moto->cilindrada,
                        "monto" => $moto->monto,
                        "foto_url" => $moto->foto_url
                    ]
                ];
            }
        }
    
        return response()->json([
            "status" => 0,
            "msg" => "Historial de pedidos y detalles del cliente",
            "data" => $historialPedidos
        ]);
    }

    public function mercadoPago(Request $request)
    {
        \MercadoPago\SDK::setAccessToken('TEST-3585045211371857-012514-e5e4b22ec2435dbf44e71c83b3b3cb0f-470204286');
    
        $payment = new \MercadoPago\Payment();
    
        $payment->transaction_amount = $request->input('transaction_amount');
        $payment->token = $request->input('token');
        $payment->installments = $request->input('installments');
        $payment->payment_method_id = $request->input('payment_method_id');
        $payment->issuer_id = $request->input('issuer_id');
    
        $payer = new \MercadoPago\Payer();
        $payer->email = $request->input('payer.email');
        $payer->identification = array(
            "type" => $request->input('payer.identification.type'),
            "number" => $request->input('payer.identification.number')
        );
    
        $payment->payer = $payer;
    
        $payment->save();
    
        $response = array(
            'status' => $payment->status,
            'status_detail' => $payment->status_detail,
            'id' => $payment->id
        );
    
        return response()->json($response);
    }
     
}
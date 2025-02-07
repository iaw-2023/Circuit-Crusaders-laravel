<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MercadoPago\Preference;
use MercadoPago\Item;
use MercadoPago\SDK;

class PaymentController extends Controller
{
    public function process_payment(Request $request){
        SDK::setAccessToken(env('MP_ACCESS_TOKEN'));

        try {
            \Log::info('Request recibido:', $request->all());

            $validated = $request->validate([
                'items' => 'required|array',
                'items.*.title' => 'required|string',
                'items.*.quantity' => 'required|integer|min:1',
                'items.*.unit_price' => 'required|numeric|min:0',
                'back_urls.success' => 'required|url',
                'back_urls.failure' => 'required|url',
                'back_urls.pending' => 'required|url',
            ]);

            \Log::info('Datos validados correctamente:', $validated);

            $items = collect($validated['items'])->map(function ($product) {
                $item = new \MercadoPago\Item();
                $item->title = $product['title'];
                $item->quantity = $product['quantity'];
                $item->unit_price = $product['unit_price'];
                return $item;
            });

            $preference = new \MercadoPago\Preference();
            $preference->items = $items->all();
            $preference->back_urls = $validated['back_urls'];
            $preference->auto_return = 'approved';
            $preference->save();

            \Log::info('Preferencia creada:', ['id' => $preference->id]);

            return response()->json(['id' => $preference->id]);

        } catch (\Exception $e) {
            \Log::error('Error en process_payment:', ['error' => $e->getMessage()]);
            return response()->json(['error' => 'No se pudo crear la preferencia: ' . $e->getMessage()], 500);
        }
    }

}

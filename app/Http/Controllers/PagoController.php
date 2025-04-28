<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MercadoPago\SDK;
use MercadoPago\Preference;
use MercadoPago\Item;


class PagoController extends Controller
{
    public function pagar(Request $request)
    {
        SDK::setAccessToken(env('MERCADOPAGO_ACCESS_TOKEN'));

        $productos = $request->input('productos');

        $items = [];

        foreach ($productos as $producto) {
            $item = new Item();
            $item->title = $producto['nombre'];
            $item->quantity = 1;
            $item->unit_price = (float)$producto['precio'];
            $items[] = $item;
        }

        $preference = new Preference();
        $preference->items = $items;
        $preference->save();

        return redirect($preference->init_point);
    }
}

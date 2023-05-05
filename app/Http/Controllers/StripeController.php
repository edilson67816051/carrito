<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function checkout()
    {
        return view('checkout');
    }

    public function session(Request $request)
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        $session = \Stripe\Checkout\Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'bob',
                        'product_data' => [
                            'name' => 'gimme money!!!!',
                        ],
                        'unit_amount'  => 1000,
                    ],
                    'quantity'   => 1,
                ],
            ],
            'mode'        => 'payment',
            'success_url' => route('success'),
            'cancel_url'  => route('checkout'),
        ]);

        return redirect()->away($session->url);
    }


    public function success()
    {
        return "Yay, It works!!!";
    }

    public function procesarPago(Request $request)
    {
        // Configurar la clave secreta de Stripe
        Stripe::setApiKey(env('STRIPE_SECRET'));

        // Obtener la información de la tarjeta y el monto a cobrar
        $tarjeta = [
            'number' => $request->input('numero-tarjeta'),
            'exp_month' => $request->input('fecha-expiracion-mes'),
            'exp_year' => $request->input('fecha-expiracion-ano'),
            'cvc' => $request->input('cvv'),
        ];
        $monto = $request->input('monto');

        // Procesar el pago con Stripe
        try {
            $charge = Charge::create([
                'amount' => $monto * 100,
                'currency' => 'usd',
                'description' => 'Pago en mi sitio web',
                'source' => Stripe::createToken($tarjeta)->id,
            ]);
        } catch (\Exception $e) {
            // Manejar los errores de Stripe
            return redirect('/')->with('error', 'Hubo un problema al procesar el pago: ' . $e->getMessage());
        }

        // Si todo salió bien, mostrar un mensaje de éxito
        return redirect('/')->with('success', 'El pago se ha procesado correctamente');
    }
}

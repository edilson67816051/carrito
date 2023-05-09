<?php

namespace App\Http\Controllers;

use App\Models\Pedido;

use App\Models\Product;
use App\Models\Seguimiento;
use Illuminate\Http\Request;
use App\Models\detalle_pedido;
use Illuminate\Support\Facades\Auth;

class StripeController extends Controller
{
    public function checkout()
    {
        return view('checkout');
    }

    public function session(Request $request)
    {
        if(!Auth::user()){
            return redirect('/car')->with('success_msg', 'Usted debe Autentificarse o crear un cuenta para para continuar el pago');
        }
           

        \Stripe\Stripe::setApiKey(config('stripe.sk'));
        
        $lineitems = [];
        foreach (\Cart::getContent() as $product){
            $lineitems[] = [
                'price_data' => [
                    'currency'     => 'bob',
                    'product_data' => [
                        'name' => $product->name,
                    ],
                    'unit_amount'  => $product->price*100,
                ],
                'quantity'   => $product->quantity,

            ];
        }

        $session = \Stripe\Checkout\Session::create([
            'line_items'  => $lineitems,
            'mode'        => 'payment',
            'success_url' => route('success'),
            'cancel_url'  => route('checkout'),
        ]);
        
        return redirect()->away($session->url);
    }


    public function success()
    {
        $this->finalizarcarrito();
        return redirect('/')->with('success_msg', 'Pago Exitoso!');
    }

    public function finalizarcarrito(){

        $p = new Pedido;
        $p->users_id = Auth::user()->id;
        $p->total_in_tax =\Cart::getTotal();
        $p->total_tax =\Cart::getTotal()+\Cart::getTotal()*0.13;
        $p->seguimiento = 'enviado';
        $p->metodopago = 'Targeta Debito';
        $p->estado = 1;
        $p->save(); 

        $s = new Seguimiento();
        $s->pedido_id = $p->id;
        $s->fecha_pedido = $p->created_at;
        $s->fecha_envio = $p->created_at;
        $s->fecha_entrega=$p->created_at;
        $s->fecha_entrega->addDay();
        $s->estado_envio = 1;
        $s->estado_entrega = 0;
        $s->save();

        foreach (\Cart::getContent() as $producto){

            $item = new detalle_pedido();
            $item->fill([
                "pedido_id" =>$p->id,
                "producto_id" =>$producto->id,
                "cantidad" =>$producto->quantity,
                "precio" => $producto->price,
                "subtotal" =>$producto->quantity*$producto->price,
                "estado" =>1,
            ]);
            $p = Product::findOrFail($producto->id);
            $p->stock =  $p->stock -$producto->quantity;
            $p->update();
            $item->save();     
        }
          
        \Cart::clear();
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
                'currency' => 'bob',
                'description' => 'Pago tienda Elizabeth',
                'source' => Stripe::createToken($tarjeta)->id,
            ]);
        } catch (\Exception $e) {
            // Manejar los errores de Stripe
            return redirect('/')->with('error', 'Hubo un problema al procesar el pago: ' . $e->getMessage());
        }

        // Si todo salió bien, mostrar un mensaje de éxito
       
        return redirect('shop')->with('success', 'El pago se ha procesado correctamente');
    }
}

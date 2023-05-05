<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Models\detalle_pedido;
use Illuminate\Http\Request;
use App\Models\Product;


class CartController extends Controller
{
    public function shop()
    {
        $products = Product::all();
       //dd($products);
        return view('shop1')->withTitle('E-COMMERCE | SHOP')->with(['products' => $products]);
    }

    public function cart()  {
        $cartCollection = \Cart::getContent();
        return view('cart')->withTitle('E-COMMERCE STORE | CART')->with(['cartCollection' => $cartCollection]);
    }

    public function remove(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('cart.index')->with('success_msg', 'Item es eliminado!');
    }

    public function add(Request$request){
        \Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->img,
                'slug' => $request->slug
            )
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Item Agregado a sú Carrito!');
    }

    public function update(Request $request){
        \Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Carrito actualizado!');
    }

    public function clear(){
        \Cart::clear();
        return redirect()->route('cart.index')->with('success_msg', 'Carrito eliminado!');
    }

    public function end(){
        foreach (\Cart::getContent() as $producto){

            $item = new detalle_pedido();
            $item->fill([
                "producto_id" =>$producto->id,
                "cantidad" =>$producto->quantity,
                "precio" => $producto->price,
                "monto" =>$producto->quantity*$producto->price,
                "estado" =>0,
            ]);

            $item->save();     
        }
        \Cart::clear();
        return redirect('/');
    }
}


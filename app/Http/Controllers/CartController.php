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
        $stock = Product::findOrFail($request->id)->stock;
        if($stock>=$request->quantity){
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
        }else{
            return redirect()->route('cart.index')->with('success_msg', 'Producto Agotado: '.$stock ); 
        }
    }

    public function update(Request $request){
        $stock = Product::findOrFail($request->id)->stock;
        if($stock>=$request->quantity){
            \Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Carrito actualizado!');
        }else{
            return redirect()->route('cart.index')->with('success_msg', 'No hay suficiente Stock! Stock Maximo es :'.$stock ); 
        }
        
        
    }

    public function clear(){
        \Cart::clear();
        return redirect()->route('cart.index')->with('success_msg', 'Carrito eliminado!');
    }

   
}


<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Product::all();
        return view('producto.index', ['productos' => $productos]);
    }

    public function create()
    {
        return view('producto.create');
    }
    public function store(Request $request)
    {
        $producto = new Product();

        $producto->name = request('name');
        $producto->slug= request('slug');;
        $producto->details = request('detalle');
        $producto->price = request('precio');
        $producto->shipping_cost = request('stock');
        
        $producto->description = request('descripcion');
        $producto->category_id = 1;
        $producto->brand_id = 34;

        if ($request->hasFile('imagen')){
            $imagen=$request->file('imagen');
            $nombre = request('name').'.'.$imagen->getClientOriginalExtension();
            $url=public_path('images/productos');
            $request->imagen->move($url,$nombre);
            $producto->image_path=$nombre;
        }
        $producto->save();
        return redirect('/producto');
    }
    public function edit($id){
        $producto = Product::findOrFail($id);
        return view('producto.edit',['producto'=>$producto]);
    }

    public function update(Request $request, $id){

        $producto = Product::findOrFail($id);
        $producto->name = request('name');
        $producto->slug= request('slug');;
        $producto->details = request('detalle');
        $producto->price = request('precio');
        $producto->shipping_cost = request('costo_envio');
        
        $producto->description = request('descripcion');

        $producto->update();
        
        return redirect('/producto');
    }
}

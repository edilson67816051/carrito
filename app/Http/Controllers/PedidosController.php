<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
   
    public function index()
    {
        $pedidos = Pedido::all();
        return view('pedidos.index', ['pedidos' => $pedidos]);
    }
}

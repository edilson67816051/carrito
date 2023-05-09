<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Seguimiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{
    public function index()
    {
        $id = Auth::User()->id;
        $seguimiento = DB::table('seguimientos')
        ->join('pedidos','seguimientos.pedido_id','=','pedidos.id')
        ->where('pedidos.users_id','=',$id)
        ->get();
            
        return view('cliente.pedidos',['seguimiento'=>$seguimiento]);
    }
    public function show($id)
    {
        $s= DB::table('seguimientos')
        ->where('seguimientos.pedido_id','=',$id)
        ->get();
  
        return view('cliente.pedido',['seguimiento'=>$s[0]]);
    }
}

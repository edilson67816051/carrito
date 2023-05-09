<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $monto = DB::select('SELECT sum(total_tax)as total from pedidos');

        $cantidad = DB::select('SELECT count(*)as cantidad from products where stock <= 10' );

        $cantidad_cliente = DB::select('SELECT count(*) as cliente from users where cliente=1' );
        $n=$cantidad_cliente[0]->cliente;
   
 
        $chart_options = [
            'chart_title' => 'Pedido Realizado Por Mes',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\Pedido',
            'group_by_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_type' => 'bar',
        ];
       
            $chart = new LaravelChart($chart_options);
            return view('admin.dashboard',compact('chart'),['monto_total'=>$monto[0]->total,'cliente'=>$n])
            ->with('success_msg', 'hola '); 
        
    }
}

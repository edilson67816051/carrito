<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_pedido extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'pedido_id','producto_id','cantidad','precio','subtotal','estado',
    ];
}

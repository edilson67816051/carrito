@extends('cliente.app')
@section('content')
  <div class="card-body">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" checked disabled>
        <label class="font-weight-bold" for="flexCheckDisabled">
          Pedido el {{date('d - M - Y// H:i',strtotime($seguimiento->fecha_pedido)) }}
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" 
        {{($seguimiento->estado_envio == 1) ? 'checked':''}} disabled>
        <label class="font-weight-bold" for="flexCheckCheckedDisabled">
          Enviado el {{date('d - M - Y// H:i',strtotime($seguimiento->fecha_envio)) }}
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled"
         {{($seguimiento->estado_envio == 1) ? 'checked':''}} disabled>
        <label class="font-weight-bold" for="flexCheckCheckedDisabled">
          En Camino 
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" 
        {{($seguimiento->estado_entrega == 1) ? 'checked':''}} disabled>
        <label class="font-weight-bold" for="flexCheckCheckedDisabled">
          Entrega {{date('d - M - Y// H:i',strtotime($seguimiento->fecha_entrega)) }}
        </label>
      </div>

  </div>
@endsection
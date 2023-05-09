@extends('cliente.app')
@section('content')
  <div class="card-body">
    <div class="card-body">
      <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                  <tr>
                 
                      <th>ID</th>
                      <th>Fecha</th>
                      <th>Total</th>
                      <th>Metodo de pago</th>
                      <th>Seguimiento</th>
                  </tr>
              </thead>
              <tfoot>
                  <tr>
                    
                    <th>ID</th>
                    <th>Fecha</th>
                    <th>Total</th>
                    <th>Metodo de pago</th>
                    <th>Seguimiento</th>
                  </tr>
              </tfoot>
              <tbody>
                  @foreach ($seguimiento as $s)                
                  <tr>
                      
                      <td>{{$s->pedido_id}}</td>
                      <td>{{$s->fecha_pedido}}</td>
                      <td>{{$s->total_tax}}</td>
                      <td>{{$s->metodopago}}</td>
            
                      <td>
       
                          <form action="" method="POST">
                              <a href="{{route('pedidos.show',$s->pedido_id)}}"><button type="button" class="btn btn-primary"><i class="fa fa-edit"></i></button></a>    
                              @csrf                          
                           </form>
                        </td>
                  </tr>

                  @endforeach
              </tbody>
          </table>
      </div>

  </div>
@endsection
@extends('admin.admin')
@section('content')

 <!-- DataTales Example -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Lista de los Pedidos realizado     
          
            
        </h5>
        
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ID Usuario</th>
                        <th>Total</th>       
                        <th>Estado</th>    
                        <th>Metodo Pago</th>         
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>ID Usuario</th>
                        <th>Total</th>       
                        <th>Estado</th>    
                        <th>Metodo Pago</th>         
                        <th>Opciones</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($pedidos as $pedido)                
                    <tr>
                        <td>{{$pedido->id}}</td>
                        <td>{{$pedido->users_id}}</td>
                        <td>{{$pedido->total_tax}}</td>
                        <td>{{$pedido->seguimiento}}</td>
                        <td>{{$pedido->metodopago}}</td>
                        <td>        
                            <form action="" method="POST">
                                <a href=""><button type="button" class="btn btn-primary"><i class="fa fa-edit"></i></button></a>    
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                             </form>
                          </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
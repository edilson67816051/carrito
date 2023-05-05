@extends('admin.admin')
@section('content')

 <!-- DataTales Example -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Lista de los productos    <a href={{url("producto\create")}}>
            <button type="button" class="btn btn-success">Nuevo producto</button></a> 
            
        </h5>
        
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Imagen</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Imagen</th>
                        <th>Opciones</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($productos as $producto)                
                    <tr>
                        <td>{{$producto->id}}</td>
                        <td>{{$producto->name}}</td>
                        <td>{{$producto->price}}</td>
                        <td><img src="/images/productos/{{ $producto->image_path }}"
                            class="card-img-top mx-auto"
                            style="height: 50px; width: 50px;display: block;"
                            alt="{{ $producto->image_path }}"
                       ></td>
                        <td>
         
                            <form action="" method="POST">
                                <a href="{{route('producto.edit',$producto->id)}}"><button type="button" class="btn btn-primary"><i class="fa fa-edit"></i></button></a>    
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
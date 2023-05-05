@extends('admin.admin')
@section('content')

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block">
                        <img src="/images/{{ $producto->image_path }}"
                            class="card-img-top mx-auto"
                            style="height: 550px; width: 400px;display: block;"
                            alt="{{ $producto->image_path }}"
                       >
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Desea editar los datos del Producto</h1>
                            </div>
                            <form class="user" action="{{route('producto.update',$producto->id)}}" method="POST">
                                @method('PATCH')
                                  @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="codigo">Nombre :</label>
                                        <input type="text" name="name" class="form-control form-control-user" id="exampleFirstName"
                                        value="{{$producto->name}}">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="codigo">Slug :</label>
                                        <input type="text" name="slug" class="form-control form-control-user" id="exampleLastName"
                                        value="{{$producto->slug}}">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="codigo">Costo envio :</label>
                                        <input type="text" name="costo_envio" class="form-control form-control-user"
                                            id="exampleInputPassword" value="{{$producto->shipping_cost}}">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="codigo">Precio :</label>
                                        <input type="text" name="precio" class="form-control form-control-user"
                                            id="exampleRepeatPassword" value="{{$producto->price}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="codigo">Detalle Producto :</label>
                                    <input type="text" name="detalle" class="form-control form-control-user" id="exampleInputEmail"
                                    value="{{$producto->details}}">
                                </div>
                                <div class="form-group">
                                    <label for="codigo">Descripcion :</label>
                                    <input type="text" name="descripcion" class="form-control form-control-user" id="exampleInputEmail"
                                    value="{{$producto->description}}">
                                </div>
                        
                                <hr>
                                <button type="submit" class="btn btn-facebook btn-user btn-block"> Guardar Cambio</button>
                                <a href="{{url('producto')}}" class="btn btn-google btn-user btn-block">
                                   Cancelar Cambio
                                </a>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection   

  
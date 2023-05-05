@extends('admin.admin')
@section('content')

<div class="container">
    <h2>Nuevo Producto</h2>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
   @endif
        <form class="row g-3" action="/producto" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md-5">
                <label for="name">Nombre</label>
                <input type="text" required minlength="3" maxlength="50" class="form-control" name="name" placeholder="Nombre...">
            </div>        
            <div class="col-md-5">
                <label for="slug">Slug</label>
                <input type="text" required minlength="3" maxlength="50" class="form-control" name="slug" placeholder="slug...">
            </div> 
            <div class="col-md-5">
                <label for="detalle">Detalle</label>
                <input type="text"required  minlength="3" maxlength="100" class="form-control" name="detalle" placeholder="Detalle del producto...">
            </div>
            <div class="col-md-5">
                <label for="Stock">Stock</label>
                <input type="text" required maxlength="3" class="form-control" name="stock" placeholder="Stock...">
            </div>
           
            <div class="col-md-5">
                <label for="precio">precio</label>
                <input type="text" required maxlength="4" class="form-control" name="precio" placeholder="precio...">
            </div>
            <div class="col-md-5">
                <label for="descripcion">Descripción</label>
                <input type="text" class="form-control" name="descripcion" placeholder="Descripcion del producto...">
            </div>
            <div class="col-md-5">
                <label for="categoria">Categoria</label>
                <input type="text" class="form-control" name="categoria" placeholder="Categoria ...">
            </div>
            <div class="col-md-5">
                <label for="imagen">Imagen</label>
                <input type="file" name="imagen" id="imagen"  accept="image/*" >
            </div>
            
            <div class="col-md-12">
                <br>
                <button type="submit" class="btn btn-primary">Registrar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </div>   
        </form>
</div>
@endsection
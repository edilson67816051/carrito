@extends('cliente.app')
@section('content')
   
<form action="/my-handling-form-page" method="post">
    <ul>
     <li>
       <label for="name">Nombre: {{ Auth::user()->name}}</label>
     </li>
     <li>
       <label for="mail">Correo electrónico: {{ Auth::user()->email}}</label>
     </li>
     <li class="nav__items">
      <a class="nav__links" data-toggle="modal" data-target="#registerModal">Actualiza tus datos</a>
    </li>
    <li class="nav__items">
      <a class="nav__links" data-toggle="modal" data-target="#contracenaModal">Cambia tu contraceña</a>
    </li>
    </ul>
   
   </form>

@endsection
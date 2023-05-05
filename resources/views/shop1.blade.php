@extends('shopin.app')

@section('content')

         <!-- =================================
           HOME PRODUCTOS DESTACADOS
        ================================== -->
        <div class="hm-page-block bg-fondo">

            <div class="container">

                <div class="header-title" data-aos="fade-up">
                    <h1>Productos populares</h1>
                </div>

                <!-- TABS -->
                <ul class="hm-tabs" data-aos="fade-up">
                    <li class="hm-tab-link">
                        Ropas
                    </li>

                    <li class="hm-tab-link ">
                        Gin
                    </li>

                    <li class="hm-tab-link ">
                        Calsado
                    </li>

                    <li class="hm-tab-link ative">
                        En oferta
                    </li>

                </ul>

                <!-- CONTENIDO DE LOS TABS -->
                <!-- Zapatillas -->
                <div class="tabs-content" data-aos="fade-up">

                    <div class="grid-product">

                        @foreach($products as $pro)      
                        @if ($pro->category_id == 1)
                        <div class="product-item">
                            <div class="p-portada">
                                <a href="">
                                    <img src="/images/productos/{{ $pro->image_path }}" alt="">
                                </a>
                                <span class="stin stin-new">Nuevo</span>
                            </div>

                            <div class="p-info">
                               <a href=""> <h3>{{ $pro->name }}</h3></a>
                                <div class="precio">
                                    <span>S/ {{ $pro->price }}</span>
                                </div>
                                
                                <form action="{{ route('cart.store') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                    <input type="hidden" value="{{ $pro->name }}" id="name" name="name">
                                    <input type="hidden" value="{{ $pro->price }}" id="price" name="price">
                                    <input type="hidden" value="{{ $pro->image_path }}" id="img" name="img">
                                    <input type="hidden" value="{{ $pro->slug }}" id="slug" name="slug">
                                    <input type="hidden" value="1" id="quantity" name="quantity">
                                    
                                          <div class="row">
                                            <button class="hm-btn btn-primary uppercase" class="tooltip-test" title="add to cart">
                                                <i class="fa fa-shopping-cart"></i>agregar al carrito
                                            </button>                                            
                                        </div>                     
                                </form>
                            </div>
                        </div>
                        @endif    
                                

                         @endforeach
                    </div>

                </div>

                <!-- Moda -->
                <div class="tabs-content" data-aos="fade-up">

                    <div class="grid-product">

                        @foreach($products as $pro)          
                        @if ($pro->category_id == 2)
                                <div class="product-item">
                                    <div class="p-portada">
                                        <a href="">
                                            <img src="/images/productos/{{ $pro->image_path }}" alt="">
                                        </a>
                                        <span class="stin stin-new">Nuevo</span>
                                    </div>
        
                                    <div class="p-info">
                                       <a href=""> <h3>{{ $pro->name }}</h3></a>
                                        <div class="precio">
                                            <span>S/ {{ $pro->price }}</span>
                                        </div>
                                        
                                        <form action="{{ route('cart.store') }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                            <input type="hidden" value="{{ $pro->name }}" id="name" name="name">
                                            <input type="hidden" value="{{ $pro->price }}" id="price" name="price">
                                            <input type="hidden" value="{{ $pro->image_path }}" id="img" name="img">
                                            <input type="hidden" value="{{ $pro->slug }}" id="slug" name="slug">
                                            <input type="hidden" value="1" id="quantity" name="quantity">
                                            
                                                  <div class="row">
                                                    <button class="hm-btn btn-primary uppercase" class="tooltip-test" title="add to cart">
                                                        <i class="fa fa-shopping-cart"></i>agregar al carrito
                                                    </button>                                            
                                                </div>                     
                                        </form>
                                    </div>
        
                                </div>
                                @endif

                         @endforeach

                    </div>

                </div>

                <!-- Tecnología -->
                <div class="tabs-content" data-aos="fade-up">

                    <div class="grid-product">

                        @foreach($products as $pro)    
                        @if ($pro->category_id == 3)      
                                <div class="product-item">
                                    <div class="p-portada">
                                        <a href="">
                                            <img src="/images/productos/{{ $pro->image_path }}" alt="">
                                        </a>
                                        <span class="stin stin-new">Nuevo</span>
                                    </div>
        
                                    <div class="p-info">
                                       <a href=""> <h3>{{ $pro->name }}</h3></a>
                                        <div class="precio">
                                            <span>Bs/ {{ $pro->price }}</span>
                                        </div>
                                        
                                        <form action="{{ route('cart.store') }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                            <input type="hidden" value="{{ $pro->name }}" id="name" name="name">
                                            <input type="hidden" value="{{ $pro->price }}" id="price" name="price">
                                            <input type="hidden" value="{{ $pro->image_path }}" id="img" name="img">
                                            <input type="hidden" value="{{ $pro->slug }}" id="slug" name="slug">
                                            <input type="hidden" value="1" id="quantity" name="quantity">
                                            
                                                  <div class="row">
                                                    <button class="hm-btn btn-primary uppercase" class="tooltip-test" title="add to cart">
                                                        <i class="fa fa-shopping-cart"></i>agregar al carrito
                                                    </button>                                            
                                                </div>                     
                                        </form>
                                    </div>
        
                                </div>
                                @endif

                         @endforeach

                    </div>

                </div>

                <!-- En oferta -->
                <div class="tabs-content" data-aos="fade-up">

                    <div class="grid-product">
                        @foreach($products as $pro)          
                                <div class="product-item">
                                    <div class="p-portada">
                                        <a href="">
                                            <img src="/images/productos/{{ $pro->image_path }}" alt="">
                                        </a>
                                        <span class="stin stin-oferta">Oferta</span>
                                    </div>
        
                                    <div class="p-info">
                                       <a href=""> <h3>{{ $pro->name }}</h3></a>
                                        <div class="precio">
                                            <span>Bs/ {{ $pro->price }}</span>
                                        </div>
                                        
                                        <form action="{{ route('cart.store') }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                            <input type="hidden" value="{{ $pro->name }}" id="name" name="name">
                                            <input type="hidden" value="{{ $pro->price }}" id="price" name="price">
                                            <input type="hidden" value="{{ $pro->image_path }}" id="img" name="img">
                                            <input type="hidden" value="{{ $pro->slug }}" id="slug" name="slug">
                                            <input type="hidden" value="1" id="quantity" name="quantity">
                                            
                                                  <div class="row">
                                                    <button class="hm-btn btn-primary uppercase" class="tooltip-test" title="add to cart">
                                                        <i class="fa fa-shopping-cart"></i>agregar al carrito
                                                    </button>                                            
                                                </div>                     
                                        </form>
                                    </div>
        
                                </div>

                         @endforeach

                        

                    </div>

                </div>

            </div>

        </div>
<!-- =================================
           HOME CATEGROIAS
        ================================== -->
        <div class="hm-page-block">
            <div class="container">
                <div class="header-title">
                    <h1  data-aos="fade-up" data-aos-duration="3000">Categorías</h1>
                </div>

                <div class="hm-grid-category">

                    <div class="grid-item" data-aos="fade-up" data-aos-duration="1000">
                        <a href="#">
                            <img src="assets/shopin/img/c-1.jpg" alt="">
                            <div class="c-info">
                                <h3>Todo en calzado</h3>
                            </div>
                        </a>
                    </div>

                    <div class="grid-item" data-aos="fade-up" data-aos-duration="1500">
                        <a href="#">
                            <img src="assets/shopin/img/c-2.jpg" alt="">
                            <div class="c-info">
                                <h3>Todo a la moda</h3>
                            </div>
                        </a>
                    </div>

                    <div class="grid-item" data-aos="fade-up" data-aos-duration="2000">
                        <a href="#">
                            <img src="assets/shopin/img/c-3.jpg" alt="">
                            <div class="c-info">
                                <h3>Lo mejor en tecnología</h3>
                            </div>
                        </a>
                    </div>

                    <div class="grid-item" data-aos="fade-up" data-aos-duration="2000">
                        <a href="#">
                            <img src="assets/shopin/img/c-4.jpg" alt="">
                            <div class="c-info">
                                <h3>Accesorios</h3>
                            </div>
                        </a>
                    </div>

                </div>

            </div>
        </div>


@endsection
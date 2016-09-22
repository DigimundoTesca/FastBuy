@extends('layout')

@section('content')
    <div class="row">
        <div class="col s12 m3 l2">
            <ul class="collapsible" data-collapsible="expandible">
                <li class="active">
                    <div class="collapsible-header">
                        <i class="material-icons">attach_money</i>
                        Filtro 1
                    </div>
                    <div class="collapsible-body">
                        Sub-Filtro 1 <br>
                        Sub-Filtro 2 <br>
                        Sub-Filtro 3
                    </div>
                </li>
                <li class="active">
                    <div class="collapsible-header">
                        <i class="material-icons">attach_money</i>
                        Filtro 2
                    </div>
                    <div class="collapsible-body">
                        Se metió un pejelagarto!
                    </div>
                </li>
            </ul>
        </div>

        <div class="col s12 m9 l10">
            @foreach($products as $product)
                <div class="col s12 m6 l4">
                    <div class="card hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <figure class="product_content activator">
                                <img class="activator product_image" src="{{ asset('images/products/coca-cola-600.jpg') }}">
                            </figure>
                        </div>
                        <div class="card-content">
                            <span class="card-title activator primary-text-dark">{{ $product->name }}</span>
                            <p>En <a class="card-text-content" href="#!">Categoría del producto</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title primary-text-dark">Producto<i class="material-icons right">close</i></span>
                            <p>{{$product->description}}</p>
                        </div>
                        <div class="card-action">
                            <a href="#">Editar</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
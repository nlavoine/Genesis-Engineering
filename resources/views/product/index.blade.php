@extends('layout.app')
@section('title')
    Gamme - Genesis Engineering
@stop
@section('content')


    <div class="container mt-5">
        <h1>Gamme</h1>
        <ul class="breadcrumb">
            <li>
                <a href="">Gamme</a> <span class="divider"> /&nbsp;</span>
            </li>
            <li class="dropdown open">
                <a class="dropdown-toggle" id="branches" role="button" data-toggle="dropdown" href="#">Ordinateurs <b
                            class="caret"></b></a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{route('product.index', 'name')}}">Ordinateurs</a>
                    <a class="dropdown-item" href="{{route('product.index', 'name')}}">Périphériques</a>
                    <a class="dropdown-item" href="{{route('product.index', 'name')}}">Fauteuils</a>
                    <a class="dropdown-item" href="{{route('product.index', 'name')}}">Accessoires</a>
                </div>

            </li>
            <span class="divider"> /&nbsp;</span>
            <li class="dropdown open">
                <a class="dropdown-toggle" id="branches" role="button" data-toggle="dropdown" href="#">Laptop <b
                            class="caret"></b></a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{route('product.index', 'name')}}">Laptop</a>
                    <a class="dropdown-item" href="{{route('product.index', 'name')}}">PC</a>
                </div>
            </li>
            <span class="divider"> /&nbsp;</span>
            <li class="dropdown open">
                <a class="dropdown-toggle" id="branches" role="button" data-toggle="dropdown" href="#">17" <b
                            class="caret"></b></a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{route('product.index', 'name')}}">16"</a>
                    <a class="dropdown-item" href="{{route('product.index', 'name')}}">17"</a>
                    <a class="dropdown-item" href="{{route('product.index', 'name')}}">18"</a>
                </div>
            </li>

        </ul>
    </div>
    <div class="container">
        <ul class="filterArea">
            <li><span>Trier par :&nbsp;</span></li>
            <li><a href="{{route('product.index', 'name')}}">Nom</a></li>
            <span class="divider">&nbsp; | &nbsp;</span>
            <li><a href="{{route('product.index', 'price')}}">Prix</a></li>
        </ul>

    </div>
    @foreach($products as $product)
        <section class="sectionGamme">

            <div class="container-fluid sectionGamme mb-8 mt-5">
                <div class="row no-gutters sectionContent">
                    <div class="col-sm-6 col-md-5 mb-5 p-2 text-justify">
                        <img src="{{asset('/assets/images/product-left.jpg')}}">
                    </div>
                    <div class="col-sm-6 col-md-4 ml-6 mb-5 text-justify">
                        <h2>{{$product->name}} <span class="product-price">{{ $product->price }}€</span></h2>

                        <p class="regular-text text-gray8">
                            {!! $product->details_1 !!}
                        </p>
                        <ul class="cta-list link list-unstyled">
                            <li>
                                <a href="{{route('product.show', $product->id)}}" role="button"
                                   class="btn btn-primary btn-lg rounded-0">En savoir plus </a>
                                <button type="button" class="btn btn-secondary btn-lg rounded-0">Ajouter au panier
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

    @endforeach













@stop
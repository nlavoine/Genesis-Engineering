@extends('layout.app')
@section('title')
    Produit - Genesis Engineering
@stop
@section('content')
    <div class="container mt-5"><h1>Produit</h1></div>
        <div class="container-fluid sectionGamme mb-8 mt-5">
            <div class="row no-gutters sectionContent">
                <div class="col-sm-6 col-md-5 mb-5 p-2 text-justify">
                    <img src="{{asset('/assets/images/product-left.jpg')}}">
                </div>
                <div class="col-sm-6 col-md-4 ml-6 mb-5 text-justify">
                    <h2>{{$product->name}} <span class="product-price">{{ $product->price }}€</span></h2>

                    <p class="regular-text text-gray8">
                        {!! $product->details !!}
                    </p>
                </div>
            </div>
        </div>


    <div class="container mb-5">
        <div class="row">
            <div class="col-md-4 carre"></div>
            <div class="col-md-4 carre"></div>
            <div class="col-md-4 carre"></div>
        </div>
    </div>

    <div style="text-align: center" ;>
        <button type="button" class="btn btn-primary btn-lg rounded-0">Aller à la personnalisation</button>
    </div>






@stop
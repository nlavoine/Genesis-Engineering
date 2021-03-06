@extends('layout.app')
@section('title')
    Produit - Genesis Engineering
@stop
@section('content')
    <section class="sectionGamme">
        <div class="container sectionContent mb-8 mt-5">
            <div class="row align-content-end mb-4">
                <div class="col-9"><h1>Produit</h1></div>
                <div class="col-3 align-self-end">
                    <span class="product-price">{{ $product->price }}€</span>
                </div>
            </div>
            <div class="row align-content-end">
                <div class="col-9"></div>
                <div class="col-3 align-self-end">
                    <a href="{{route('product.addToCart', $product->id)}}" class="btn btn-secondary btn-lg rounded-0 float-right">Ajouter
                        au panier</a>
                </div>
            </div>

            <div class="row no-gutters justify-content-between">
                <div class="col-sm-6 col-md-5 mb-5 p-2 text-justify">
                    <img src="{{$images[0]->url}}" class="img-fluid">
                </div>
                <div class="col-sm-6 col-md-6 mb-5 text-justify align-content-end">

                    <h2>{{$product->name}} </h2>

                    <p class="regular-text text-gray8">
                        {!! $product->details_1 !!}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="sectionGamme"
             style="background-image: url('{{$images[1]->url}}'); background-repeat: no-repeat; background-position: right center;">
        <div class="container sectionContent  mb-8 mt-5">
            <div class="row no-gutters ">
                <div class="col-sm-6 col-md-4 mb-5 text-justify">
                    <p class="regular-text text-gray8">
                        {!! $product->details_2 !!}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="sectionGamme"
             style="background-image: url('{{$images[2]->url}}'); background-repeat: no-repeat; background-position: left center;">
        <div class="container sectionContent mb-8 mt-5">
            <div class="row no-gutters   justify-content-end">
                <div class="col-sm-6 col-md-4 mb-5 text-justify">
                    <p class="regular-text text-gray8">
                        {!! $product->details_2 !!}
                    </p>
                </div>
            </div>
        </div>
    </section>


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
@extends('Backoffice.layout.app')
@section('title')
    Gamme - Genesis Engineering
@stop
@section('content')
    <div class="container mt-5"><h1>Apperçu du produit</h1></div>
    <section class="sectionGamme">
        <div class="container sectionContent mb-8 mt-5">
            <div class="row no-gutters justify-content-between">
                <div class="col-sm-6 col-md-5 mb-5 p-2 text-justify">
                    <img src="{{$product->images[0]->url}}" style="width: 100%;">
                </div>
                <div class="col-sm-6 col-md-6 mb-5 text-justify align-content-end">
                    <ul class="list-unstyled toolbox">
                        <li><a href="{{route('admin.product.edit', $product->id)}}" title="Modifier">
                                <i class="fa fa-pencil-square-o"></i> Modifier
                            </a></li>
                        <li>
                            <form method="POST" action="{{route('admin.product.destroy', $product->id)}}">
                                @csrf
                                @method('DELETE')
                                <button class="noStyle" type="submit"><i class="fa fa-trash-o"></i> Supprimer</button>
                            </form>
                        </li>
                    </ul>

                    <p class="font-weight-bold">Catégorie : {{ $product->category->name }}

                    </p>
                    <hr/>
                    <p class="font-weight-bold">
                        <span class="product-price">{{ $product->price }}€</span>{{$product->name}}
                    </p>
                    <p>Stock : {{ $product->stock }}</p>
                    <p class="regular-text text-gray8">
                        {!! $product->details_1 !!}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="sectionGamme">
        <div class="container sectionContent  mb-8 mt-5">
            <div class="row no-gutters justify-content-between">
                <div class="col-sm-6 col-md-5 mb-5 p-2 text-justify">
                    <img src="{{$product->images[1]->url}}" style="width: 100%;">
                </div>
                <div class="col-sm-6 col-md-6 mb-5 text-justify align-content-end">
                    <p class="regular-text text-gray8">
                        {!! $product->details_2 !!}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="sectionGamme">
        <div class="container sectionContent mb-8 mt-5">
            <div class="row no-gutters justify-content-between">
                <div class="col-sm-6 col-md-5 mb-5 p-2 text-justify">
                    <img src="{{$product->images[2]->url}}" style="width: 100%;">
                </div>
                <div class="col-sm-6 col-md-6 mb-5 text-justify">
                    <p class="regular-text text-gray8">
                        {!! $product->details_3 !!}
                    </p>
                </div>
            </div>
        </div>
    </section>
@stop
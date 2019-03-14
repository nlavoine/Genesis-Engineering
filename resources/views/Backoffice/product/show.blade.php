@extends('Backoffice.layout.app')
@section('title')
    Gamme - Genesis Engineering
@stop
@section('content')
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
                            <form method="Post" action="{{route('admin.product.destroy', $product->id)}}">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE"/>
                                <button class="noStyle" type="submit"><i class="fa fa-trash-o"></i> Supprimer
                                </button>
                            </form>
                        </li>
                    </ul>
                    <h2><span class="product-price">{{ $product->price }}€</span>{{$product->name}} </h2>

                    <p class="regular-text text-gray8">
                        {!! $product->details_1 !!}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="sectionGamme"
             style="background-image: url('{{$product->images[1]->url}}'); background-repeat: no-repeat; background-position: right center;">
        <div class="container sectionContent  mb-8 mt-5">
            <div class="row no-gutters ">
                <div class="col-sm-6 col-md-6 mb-5 text-justify">
                    <p class="regular-text text-gray8">
                        {!! $product->details_2 !!}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="sectionGamme"
             style="background-image: url('{{$product->images[2]->url}}'); background-repeat: no-repeat; background-position: left center;">
        <div class="container sectionContent mb-8 mt-5">
            <div class="row no-gutters   justify-content-end">
                <div class="col-sm-6 col-md-6 mb-5 text-justify">
                    <p class="regular-text text-gray8">
                        {!! $product->details_3 !!}
                    </p>
                </div>
            </div>
        </div>
    </section>
@stop
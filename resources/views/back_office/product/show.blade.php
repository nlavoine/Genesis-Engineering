@extends('back_office.layout.app')
@section('title')
    Gamme - Genesis Engineering
@stop
@section('content')




        <section class="sectionGamme">

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















@stop
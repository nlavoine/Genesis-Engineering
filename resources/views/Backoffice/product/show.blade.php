@extends('Backoffice.layout.app')
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
                    <ul class="list-unstyled toolbox">
                        <li><a href="{{route('admin.product.edit', $product->id)}}" title="Modifier">
                                <i class="fa fa-pencil-square-o"></i> Modifier
                            </a></li>
                        <li><form method="Post" action="{{route('admin.product.destroy', $product->id)}}">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE"/>
                                <button class="noStyle" type="submit"><i class="fa fa-trash-o"></i> Supprimer</button>
                            </form></li>
                    </ul>

                    <h2>{{$product->name}} <span class="product-price">{{ $product->price }}€</span></h2>
                    <p>Stock : {{ $product->stock }}</p>
                    <p class="regular-text text-gray8">
                        {!! $product->details_1 !!}
                    </p>

                </div>
            </div>
        </div>
    </section>















@stop
@extends('Backoffice.layout.app')
@section('title')
    Gamme - Genesis Engineering
@stop
@section('content')



    <div class="container p-3">
        <ul class="list-unstyled">
            @foreach ($errors->all() as $error)
                <li class="alert-danger mb-3 p-2 text-center">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    <section class="sectionGamme editProduct">
        <form method="Post" action="{{route('admin.product.update', $product->id)}}" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}
            <input type="hidden" name="id" value="{{$product->id}}"/>
            <div class="container-fluid sectionGamme mb-8 mt-5">
                <div class="row no-gutters sectionContent">
                    <div class="col-sm-6 col-md-3 offset-md-2 mb-5 p-2 text-justify">
                        <img src="{{$product->images[0]->url}}" style="width: 100%;">
                        <p class="mt-2"><input type="file" name="img_1"/></p>
                    </div>
                    <div class="col-sm-6 col-md-4 ml-6 mb-5 text-justify">

                        <h2><input name="name" value="{{$product->name}}" required/></h2>

                        <div class="product-price">
                            <input type="number" value="{{ $product->price }}" class="price" name="price" step=".01" required>€
                        </div>
                        <p class="text-left"><input type="number" value="{{ $product->stock }}"
                                                    class="stock w-auto d-inline" name="stock" step="1" required/></p>
                        <hr class="mt-5"/>
                        <!--
                       DETAILS 1
                       -->
                        <h5 class="mt-5">Description 1</h5>
                        <textarea name="details_1" class="regular-text text-gray8 details" required>
                            {!! $product->details_1 !!}
                        </textarea>


                        <hr class="mt-5"/>
                        <!--
                        DETAILS 2
                        -->
                        <h5 class="mt-5">Description 2</h5>
                        <textarea name="details_2" class="regular-text text-gray8 details" required>
                            {!! $product->details_2 !!}
                        </textarea>
                        <p>Image 2 actuelle :</p>
                        <img src="{{$product->images[1]->url}}" style="width: 100%;">
                        <p class="mt-2"><input type="file" name="img_2" required /></p>

                        <hr class="mt-5"/>
                        <!--
                        DETAILS 2
                        -->
                        <h5 class="mt-5">Description 3</h5>
                        <textarea name="details_3" class="regular-text text-gray8 details" required>
                            {!! $product->details_3 !!}
                        </textarea>
                        <p>Image 1 actuelle :</p>
                        <img src="{{$product->images[2]->url}}" style="width: 100%;">
                        <p class="mt-2"><input type="file" name="img_3" required /></p>

                        <hr class="mt-5"/>

                        <input type="submit" class="btn btn-primary btn-lg rounded-0 mt-3" value="Sauvegarder"/>
                        <a href="{{route('admin.product.show', $product->id)}}"
                           class="btn btn-secondary btn-lg rounded-0 mt-3">Annuler</a>
                    </div>
                </div>
            </div>
        </form>
    </section>
















@stop
@extends('Backoffice.layout.app')
@section('title')
    Gamme - Genesis Engineering
@stop
@section('content')

    @if($errors->count()>0)
    <div class="container p-3">
        <ul class="list-unstyled">
            @foreach ($errors->all() as $error)
                <li class="alert-danger mb-3 p-2 text-center">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="container mt-5"><h1>Modifier un produit</h1></div>
    <section class="sectionGamme editProduct">
        <form method="Post" action="{{route('admin.product.update', $product->id)}}" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}
            <input type="hidden" name="id" value="{{$product->id}}"/>
            <div class="container sectionGamme mb-8 mt-5">
                <div class="row no-gutters sectionContent">

                    <div class="col-sm-6 col-md-12  mb-5">
                        <p><input class="w-50 mr-5" name="name" value="{{$product->name}}" required/><input type="number" class="w-auto mr-5" value="{{ $product->price }}" name="price" step=".01" required/><input type="number" value="{{ $product->stock }}" id="stock" class="stock w-auto d-inline" name="stock" step="1" required/></p>
                        <hr class="mt-5"/>
                        <!--
                       DETAILS 1
                       -->

                        <h5 class="mt-5">Description 1</h5>
                        <p><textarea name="details_1" class="regular-text text-gray8 details" required>
                            {!! $product->details_1 !!}
                        </textarea></p>
                        <p>Image 1 actuelle :
                        <img src="{{$product->images[0]->url}}" style="width: 100%;"></p>
                        <p class="mt-2"><input type="file" name="img_1"/></p>


                        <hr class="mt-5"/>
                        <!--
                        DETAILS 2
                        -->
                        <h5 class="mt-5">Description 2</h5>
                        <p><textarea name="details_2" class="regular-text text-gray8 details" required>
                            {!! $product->details_2 !!}
                        </textarea>
                        </p>
                        <p>Image 2 actuelle :
                        <img src="{{$product->images[1]->url}}" style="width: 100%;"></p>
                        <p class="mt-2"><input type="file" name="img_2" /></p>

                        <hr class="mt-5"/>
                        <!--
                        DETAILS 2
                        -->
                        <h5 class="mt-5">Description 3</h5>
                        <p><textarea name="details_3" class="regular-text text-gray8 details" required>
                            {!! $product->details_3 !!}
                        </textarea></p>
                        <p>Image 3 actuelle :
                        <img src="{{$product->images[2]->url}}" style="width: 100%;"></p>
                        <p class="mt-2"><input type="file" name="img_3" /></p>

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
@extends('Backoffice.layout.app')
@section('title')
    Gamme - Genesis Engineering
@stop
@section('content')



    <div class="container">
        <p>
        <ul class="list-unstyled">
            @foreach ($errors->all() as $error)
                <li class="alert-danger mb-3 p-2 text-center">{{ $error }}</li>
            @endforeach
        </ul>
        </p>
    </div>
    <section class="sectionGamme editProduct">
        <form method="Post" action="{{route('admin.product.store')}}">
            @csrf
            <div class="container-fluid sectionGamme mb-8 mt-5">
                <div class="row no-gutters sectionContent">
                    <div class="col-sm-6 col-md-5 mb-5 p-2 text-justify">
                        <img src="{{asset('/assets/images/product-left.jpg')}}">
                    </div>
                    <div class="col-sm-6 col-md-4 ml-6 mb-5 text-justify">
                        <h2><input name="name" placeholder="Libellé du produit"/></h2>
                        <div class="product-price">
                            <input type="number" placeholder="Prix" class="price" name="price" step=".01"/>€
                        </div>
                        <p class="text-left"><input type="number" placeholder="Stock" class="stock w-auto d-inline" name="stock" step="1"/></p>



                        <hr class="mt-5" />
                        <!--
                       DETAILS 1
                       -->
                        <h5 class="mt-5">Description 1</h5>
                        <textarea name="details_1" class="regular-text text-gray8 details" placeholder="Description 1"></textarea>
                        <p class="mt-2"><input type="file" name="img_1" value="/assets/images/product-left.jpg" /></p>
                        <hr class="mt-5" />
                        <!--
                        DETAILS 2
                        -->
                        <h5 class="mt-5">Description 2</h5>
                        <textarea name="details_2" class="regular-text text-gray8 details" placeholder="Description 2"></textarea>
                        <p class="mt-2"><input type="file" name="img_2" value="/assets/images/product-left.jpg" /></p>
                        <hr class="mt-5" />
                        <!--
                        DETAILS 2
                        -->
                        <h5 class="mt-5">Description 3</h5>
                        <textarea name="details_2" class="regular-text text-gray8 details" placeholder="Description 1"></textarea>
                        <p class="mt-2"><input type="file" name="img_3" value="/assets/images/product-left.jpg" /></p>
                        <hr class="mt-5" />
                        <input type="submit" class="btn btn-primary btn-lg rounded-0 mt-3" value="Sauvegarder"/>
                        <a href="{{route('admin.product.index')}}" class="btn btn-secondary btn-lg rounded-0 mt-3">Annuler</a>
                    </div>
                </div>
            </div>
        </form>
    </section>
















@stop
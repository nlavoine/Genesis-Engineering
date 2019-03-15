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
    <div class="container mt-5"><h1>Ajouter un produit</h1></div>
    <section class="sectionGamme editProduct">
        <form method="Post" action="{{route('admin.product.store')}}" enctype="multipart/form-data" >
            @csrf
            <div class="container sectionGamme mb-8 mt-5">
                <div class="row no-gutters sectionContent">

                    <div class="col-sm-6 col-md-12 mb-5 text-justify">
                        <p><input class="w-50 mr-5" name="name" placeholder="Libellé du produit" value="{{ old('name') }}" required/><input type="number" class="w-auto mr-5" value="{{ old('price') }}" placeholder="Prix" name="price" step=".01" required/><input type="number" placeholder="Stock" id="stock" value="{{ old('stock') }}" class="stock w-auto d-inline" name="stock" step="1" required/></p>

                        <p><input type="file" name="img_1" required value="{{ old('img_1') }}" /></p>

                        <hr class="mt-5" />
                        <!--
                       DETAILS 1
                       -->
                        <h5 class="mt-5">Description 1</h5>
                        <textarea name="details_1" class="regular-text text-gray8 details" placeholder="Description 1" required>{{ old('details_1') }}</textarea>
                        <hr class="mt-5" />
                        <!--
                        DETAILS 2
                        -->
                        <h5 class="mt-5">Description 2</h5>
                        <textarea name="details_2" class="regular-text text-gray8 details" placeholder="Description 2" required>{{ old('details_2') }}</textarea>
                        <p class="mt-2"><input type="file" name="img_2" required value="{{ old('img_2') }}" /></p>
                        <hr class="mt-5" />
                        <!--
                        DETAILS 2
                        -->
                        <h5 class="mt-5">Description 3</h5>
                        <textarea name="details_3" class="regular-text text-gray8 details" placeholder="Description 1" required>{{ old('details_3') }}</textarea>
                        <p class="mt-2"><input type="file" name="img_3" required value="{{ old('img_3') }}" /></p>
                        <hr class="mt-5" />

                        <input type="submit" class="btn btn-primary btn-lg rounded-0 mt-3" value="Sauvegarder"/>
                        <a href="{{route('admin.product.index')}}" class="btn btn-secondary btn-lg rounded-0 mt-3">Annuler</a>
                    </div>
                </div>
            </div>
        </form>
    </section>
















@stop
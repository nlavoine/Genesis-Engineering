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
        <form method="Post" action="{{route('admin.product.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="container sectionGamme mb-8 mt-5">
                <div class="row no-gutters sectionContent">

                    <div class="col-sm-6 col-md-12 mb-5 text-justify">

                        <div class="row no-gutters d-flex justify-content-between align-items-end">
                            <div class="col-5">
                                @if ($errors->get('name'))
                                    <div class="invalid-feedback d-block">
                                        {{ $errors->first('name') }}
                                    </div>
                                @endif
                                <input class="w-100 @if ($errors->get('name')) is-invalid @endif" name="name"
                                       placeholder="Libellé du produit" value="{{ old('name') }}"/>
                            </div>
                            <div class="col-3">
                                @if ($errors->get('price'))
                                    <div class="invalid-feedback d-block">
                                        {{ $errors->first('price') }}
                                    </div>
                                @endif
                                <input class="w-100 @if ($errors->get('price')) is-invalid @endif" type="number"
                                       value="{{ old('price') }}" placeholder="Prix" name="price" step=".01"/>
                            </div>
                            <div class="col-3">
                                @if ($errors->get('stock'))
                                    <div class="invalid-feedback d-block">
                                        {{ $errors->first('stock') }}
                                    </div>
                                @endif
                                <input class="stock w-100 @if ($errors->get('stock')) is-invalid @endif" type="number"
                                       placeholder="Stock" value="{{ old('stock') }}" name="stock" step="1"/>
                            </div>
                        </div>


                        <hr class="mt-5"/>
                        <!--
                       DETAILS 1
                       -->
                        <h5 class="mt-5">Description 1</h5>
                        @if ($errors->get('details_1'))
                            <div class="invalid-feedback d-block">
                                {{ $errors->first('details_1') }}
                            </div>
                        @endif
                        <textarea name="details_1"
                                  class="regular-text text-gray8 details @if ($errors->get('details_1')) is-invalid @endif"
                                  placeholder="Description 1">{{ old('details_1') }}</textarea>
                        <p class="mt-2">
                        @if ($errors->get('img_1'))
                            <div class="invalid-feedback d-block">
                                {{ $errors->first('img_1') }}
                            </div>
                        @endif
                        <input type="file" name="img_1" value="{{ old('img_1') }}"
                               class="@if ($errors->get('img_1')) is-invalid @endif"/>
                        <hr class="mt-5"/>
                        <!--
                        DETAILS 2
                        -->
                        <h5 class="mt-5">Description 2</h5>
                        @if ($errors->get('details_2'))
                            <div class="invalid-feedback d-block">
                                {{ $errors->first('details_2') }}
                            </div>
                        @endif
                        <textarea name="details_2"
                                  class="regular-text text-gray8 details @if ($errors->get('details_2')) is-invalid @endif"
                                  placeholder="Description 2">{{ old('details_2') }}</textarea>
                        <p class="mt-2">
                        @if ($errors->get('img_2'))
                            <div class="invalid-feedback d-block">
                                {{ $errors->first('img_2') }}
                            </div>
                        @endif
                        <input type="file" name="img_2" value="{{ old('img_2') }}"
                               class="@if ($errors->get('img_2')) is-invalid @endif"/></p>
                        <hr class="mt-5"/>
                        <!--
                        DETAILS 2
                        -->
                        <h5 class="mt-5">Description 3</h5>
                        @if ($errors->get('details_3'))
                            <div class="invalid-feedback d-block">
                                {{ $errors->first('details_3') }}
                            </div>
                        @endif
                        <textarea name="details_3"
                                  class="regular-text text-gray8 details @if ($errors->get('details_3')) is-invalid @endif"
                                  placeholder="Description 3">{{ old('details_3') }}</textarea>
                        <p class="mt-2">
                        @if ($errors->get('img_3'))
                            <div class="invalid-feedback d-block">
                                {{ $errors->first('img_3') }}
                            </div>
                        @endif
                        <input type="file" name="img_3" value="{{ old('img_3') }}"
                               class="@if ($errors->get('img_3')) is-invalid @endif"/></p>
                        <hr class="mt-5"/>

                        <div class="container">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-end ">
                                    <input type="submit" class="btn btn-primary btn-lg rounded-0 mt-3" value="Sauvegarder"/>
                                    <a href="{{route('admin.product.index')}}"
                                       class="btn btn-secondary btn-lg rounded-0 mt-3">Annuler</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
















@stop
@extends('layout.admin')
@section('title')
    Modifier un produit - Admin
@stop

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container mt-5">
        <form action="{{route('admin.products.store')}}" method="POST" class="formulaire">

            @csrf
            <div class="form-group row">
                <div class="col-6 mb-2">
                    <input type="text" class="form-control rounded-0" name="name" placeholder="Nom*" value="{{$product->name}}">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-6 mb-2">
                    <input type="number" class="form-control rounded-0" name="stock" placeholder="Quantité*" value="{{$product->stock}}">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-6 mb-2">
                    <input type="number" class="form-control rounded-0" name="price" placeholder="Prix*" value="{{$product->price}}">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-6 mb-2">
                    <label for="selectbox" class="sr-only">Catégory produit</label>
                    <select class="form-control rounded-0" name="category_id">

                        <option value="{{$product->category_id}}">{{$product->category->name}}</option>

                        <option value="1">Ordinateurs</option>
                        <option value="2">Périphériques</option>
                        <option value="3">Fauteuils</option>
                        <option value="4">Accessoires</option>
                        <option value="5">Laptop</option>
                        <option value="6">PC</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-6 mb-2">
                        <textarea class="form-control rounded-0" id="question" name="details_1" rows="5"
                                  placeholder="Description 1">{{$product->details_1}}</textarea>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-6 mb-2">
                        <textarea class="form-control rounded-0" id="question" name="details_2" rows="5"
                                  placeholder="Description 2">{{$product->details_2}}</textarea>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-6 mb-2">
                        <textarea class="form-control rounded-0" id="question" name="details_3" rows="5"
                                  placeholder="Description 3">{{$product->details_3}}</textarea>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-md-3">
                    <button type="submit" class="btn btn-block btn-outline-primary rounded-0 font-weight-bold"
                            style="border-width: 2px">Modifier
                    </button>
                </div>
            </div>
        </form>
    </div>

@stop
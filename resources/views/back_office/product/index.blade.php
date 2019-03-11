@extends('back_office.layout.app')
@section('title')
    Gamme - Genesis Engineering
@stop
@section('content')

    <div class="container mt-5 admin">
        <h1>Liste des produits</h1>

        <table class="table w-100 mt-5 listProduct">
            <thead>
            <tr>
                <th style="width: 70%;">Désignation</th>
                <th style="width: 10%;">Prix</th>
                <th style="width: 10%;">stock</th>
                <th style="width: 10%;" colspan="3">Outils</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td class="align-middle">{{$product->name}}</td>
                    <td class="align-middle">{{$product->price}}</td>
                    <td class="align-middle">{{$product->stock}}</td>
                    <td><a href="{{route('admin.product.show', $product->id)}}" title="Afficher"><i class="fa fa-search"></i></a></td>
                    <td><a href="{{route('admin.product.edit', $product->id)}}" title="Modifier"><i class="fa fa-pencil-square-o"></i></a></td>
                    <td><a href="{{route('admin.product.destroy', $product->id)}}" title="Supprimer"><i class="fa fa-trash-o"></i></a></td>
                </tr>

            @endforeach
            </tbody>
        </table>
    </div>















@stop
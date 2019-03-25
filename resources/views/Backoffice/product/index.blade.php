@extends('Backoffice.layout.app')
@section('title')
    Gamme - Genesis Engineering
@stop
@section('content')

    <div class="container mt-5">
        <h1>Liste des produits</h1>
        <p class="text-right"><a href="{{route('admin.product.create')}}" class="btn btn-primary btn-lg rounded-0 mt-3">Ajouter un produit</a></p>

        <table class="table w-100 mt-1 mb-5 listProduct">
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
                    <td>
                        <a href="{{route('admin.product.show', $product->id)}}" title="Afficher">
                            <i class="fa fa-search"></i>
                        </a>
                    </td>
                    <td>
                        <a href="{{route('admin.product.edit', $product->id)}}" title="Modifier">
                            <i class="fa fa-pencil-square-o"></i>
                        </a>
                    </td>
                    <td>
                        <form method="Post" action="{{route('admin.product.destroy', $product->id)}}">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE"/>
                            <button class="noStyle" type="submit"><i class="fa fa-trash-o"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            {{ $products->links() }}
            </tbody>
        </table>
    </div>















@stop
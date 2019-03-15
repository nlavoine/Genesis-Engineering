@extends('layout.admin')
@section('title')
    Produits - Admin
@stop

@section('content')

    <main>

        <form method="post" action="">

            <div class="container mt-5 mb-5">
                <p><a class="btn btn-block btn-outline-primary rounded-0 font-weight-bold"
                      style="border-width: 2px" href="{{route('admin.products.create')}}" role="button">Ajouter un produit</a></p>
            </div>

            <div class="container">

                <table class="table">
                    <thead>
                    <tr>
                        <th>Produits</th>
                        <th>Qté</th>
                        <th>Modifier Qté</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td class="align-middle"><a href="{{route('admin.products.show', $product->id)}}">{{$product->name}}</a></td>
                            <td class="align-middle">{{$product->stock}}</td>
                            <td class="align-middle"><input type="" name="" value=""/></td>
                            <td class="align-middle">
                                <button class="btn btn-sm btn-outline-primary rounded-0 font-weight-bold"
                                        style="border-width: 2px" type="submit" name="updateStock" value="">Maj Qté</button>
                            </td>
                            <td class="align-middle">
                                <a class="btn btn-sm btn-outline-primary rounded-0 font-weight-bold"
                                      style="border-width: 2px" href="{{route('admin.products.edit', $product)}}" role="button">Modifier</a>
                            </td>
                            <td class="align-middle">
                                <button class="btn btn-sm btn-outline-primary rounded-0 font-weight-bold"
                                        style="border-width: 2px" type="submit" name="deleteProduct" value="">Supprimer</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                    <tfoot>

                    </tfoot>
                </table>
            </div>
        </form>

    </main>

@stop
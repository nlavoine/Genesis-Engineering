@extends('layout.app')
@section('title')
    Votre panier - Genesis Engineering
@stop
@section('content')
    <div class="container mt-5">
        <h1>Votre panier</h1>
        <div class="row">
            <div class="col-8">
                <table class="table cart">
                    <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col">Prix</th>
                        <th scope="col">Quantité</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row"><img src="{{asset('/assets/images/pc1.jpg')}}" alt="Product Name"
                                             class="thumbnail"/></th>
                        <td>
                            <p class="productName">Designation du produit</p>
                            <p class="stock">En stock</p>
                        </td>
                        <td>3999,49€</td>
                        <td>

                            <div class="input-group mb-3">
                                <select class="custom-select rounded-0" id="productQty">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                <button class="productDelete"><i class="fa fa-trash"></i></button>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><img src="{{asset('/assets/images/pc1.jpg')}}" alt="Product Name"
                                             class="thumbnail"/></th>
                        <td>
                            <p class="productName">Designation du produit</p>
                            <p class="stock">En stock</p>
                        </td>
                        <td>3999,49€</td>
                        <td>

                            <div class="input-group mb-3">
                                <select class="custom-select rounded-0" id="productQty">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                <button class="productDelete"><i class="fa fa-trash"></i></button>
                            </div>

                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-4">
                <table class="table price">
                    <tbody>
                    <tr>
                        <td>
                            <p class="totalPdct">2 articles</p>
                            <p class="shipping">Livraison</p>
                        </td>
                        <td>
                            <p class="totalPdct text-right">5 000,99 €</p>
                            <p class="shipping text-right">29,00 €</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="totalPrice">Total H.T.</p>
                            <p class="taxes">T.V.A.</p>
                        </td>
                        <td>
                            <p class="totalPrice text-right">5 029,99 €</p>
                            <p class="taxes text-right">0 €</p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center">
                            <form method="get" action="{{route('cart.details')}}">
                                <input type="submit" class="btn btn-primary btn-lg rounded-0" value="Commander"/>
                            </form>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>




@stop



























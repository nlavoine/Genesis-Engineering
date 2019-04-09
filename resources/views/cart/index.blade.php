@extends('layout.app')
@section('title')
    Votre panier - Genesis Engineering
@stop
@section('content')
    <div class="container mt-5">
        <h1>Votre panier</h1>
    </div>
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-7">
                <form name="cart" id="cart" action="{{route('cart.update')}}" method="post">
                    {{ csrf_field() }}
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
                        @if(!is_null($products))
                            @foreach ($products as $product)
                                <tr>
                                    <th scope="row"><img src="{{asset($product->images[0]->url)}}"
                                                         alt="{{ $product->name }}" class="thumbnail"/></th>
                                    <td>
                                        <p class="productName">
                                            <a href="{{route('product.show', $product->id)}}">{{ $product->name }}</a>
                                        </p>
                                        <p class="stock">En stock</p>
                                    </td>
                                    <td>{{ $product->price }} €</td>
                                    <td>

                                        <div class="input-group mb-3">
                                            <select class="custom-select rounded-0" id="{{ $product->id }}" name="{{ $product->id }}">
                                                @for($i = 1; $i<=10; $i++)
                                                    <option value="{{$i}}" @if ($listQty[$product->id] == $i) {{'selected'}} @endif>{{$i}}</option>
                                                @endfor
                                            </select>
                                            <a href="{{route('cart.destroy', $product->id)}}" class="productDelete"><i class="fa fa-trash"></i></a>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="4">
                                    <p>Votre panier est vide</p>
                                </td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-dark">Recalculer le panier</button>
                </form>
            </div>
            @if(!is_null($products))
                <div class="col-2">
                    <table class="table price">
                        <tbody>
                        <tr>
                            <td>
                                <p class="totalPdct">{{$cart->totalQty}} article(s)</p>
                                <p class="shipping">Livraison</p>
                            </td>
                            <td>
                                <p class="totalPdct text-right">{{$cart->totalPrice}} €</p>
                                <p class="shipping text-right">29,00 €</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="totalPrice">Total H.T.</p>
                                <p class="taxes">T.V.A.</p>
                            </td>
                            <td>
                                <p class="totalPrice text-right">{{$cart->totalPrice + 29}} €</p>
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
            @endif
        </div>
    </div>




@stop



























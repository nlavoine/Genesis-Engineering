@extends('layout.app')
@section('title')
    Account
@stop
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-3">

                <h1>Commande numéro : {{ $order->number }}</h1>
                <p>Numéro de commande : {{ $order->number }}</p>
                <p>Date : {{ $order->date }}</p>
                <p>Livreur : {{ $shipping->company }}</p>
                <p>Adresse de livraison : "{{ $address_shipping->label }}" </p>
                <p>Adresse de facturation : "{{ $address_receipt->label }}"</p>
                <h3>Produits : </h3>
                <table>
                    <thead>
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Quantité</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($order->products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->pivot->price }} €</td>
                            <td>{{ $product->pivot->quantity }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@stop
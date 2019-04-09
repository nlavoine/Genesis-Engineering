@extends('layout.app')
@section('title')
    Account
@stop
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-3">
                <h4>Modification de l'adresse : {{ $address->label }}</h4>
                <form action="{{ route('user.updateaddress', $address) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <h4>Label</h4>
                        <label for="label"></label>
                        <input class="form-control" type="text" name="label" value="{{ $address->label }}">
                    </div>
                    <div class="form-group">
                        <h4>Nom</h4>
                        <label for="last_name"></label>
                        <input class="form-control" type="text" name="last_name" value="{{ $address->last_name }}">
                    </div>
                    <div class="form-group">
                        <h4>Prénom</h4>
                        <label for="first_name"></label>
                        <input class="form-control" type="text" name="first_name" value="{{ $address->first_name }}">
                    </div>
                    <div class="form-group">
                        <h4>Adresse</h4>
                        <label for="address_1"></label>
                        <input class="form-control" type="text" name="address_1" value="{{ $address->address_1 }}">
                    </div>
                    <div class="form-group">
                        <h4>Complément d'adresse</h4>
                        <label for="address_2"></label>
                        <input class="form-control" type="text" name="address_2" value="{{ $address->address_2 }}">
                    </div>
                    <div class="form-group">
                        <h4>Ville</h4>
                        <label for="city"></label>
                        <input class="form-control" type="text" name="city" value="{{ $address->city }}">
                    </div>
                    <div class="form-group">
                        <h4>Région</h4>
                        <label for="state"></label>
                        <input class="form-control" type="text" name="state" value="{{ $address->state }}">
                    </div>
                    <div class="form-group">
                        <h4>Pays</h4>
                        <label for="country"></label>
                        <input class="form-control" type="text" name="country" value="{{ $address->country }}">
                    </div>
                    <div class="form-group">
                        <h4>Code postal</h4>
                        <label for="zip_code"></label>
                        <input class="form-control" type="text" name="zip_code" value="{{ $address->zip_code }}">
                    </div>


                    <button class="btn btn-primary" type="submit">Modifier mon adresse</button>
                </form>
            </div>
        </div>
    </div>

@stop
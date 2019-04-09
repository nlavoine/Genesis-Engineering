@extends('layout.app')
@section('title')
    Account
@stop
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-3">
                @if (session('infosuccess'))
                    <div class="alert alert-success">
                        {{ session('infosuccess') }}
                    </div>
                @endif
                @if (session('mdpsucces'))
                    <div class="alert alert-success">
                        {{ session('mdpsucces') }}
                    </div>
                @endif

                <h1>{{ $address->label }}</h1>
                <p>Label : {{ $address->label }}</p>
                <p>Nom : {{ $address->last_name }}<p/>
                <p>Prénom : {{ $address->first_name }}</p>
                <p>Adresse : {{ $address->address_1 }}</p>
                <p>Complément d'adresse : {{ $address->address_2 }}</p>
                <p>Ville : {{ $address->city }}</p>
                <p>Région : {{ $address->state }}</p>
                <p>Pays : {{ $address->country }}</p>
                <p>Code postal : {{ $address->zip_code }}</p>
                <form action="{{ route('user.editaddress', $address) }}" method="GET">
                    <button class="btn btn-primary" type="submit">Modifier cette adresse</button>
                </form>
            </div>


        </div>
    </div>

@stop
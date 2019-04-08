@extends('layout.app')
@section('title')
    Account
@stop
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-3">
                <h1>Mes infos :</h1>
                <p>Prénom : {{ $user->first_name }}<p/>
                <p>Nom : {{ $user->last_name }}</p>
                <p>E-mail : {{ $user->email }}</p>
                <form action="{{ route('user.edit', $user) }}" method="GET">
                    <button class="btn btn-primary" type="submit">Modifier mes infos</button>
                </form>
            </div>

        </div>
    </div>

@stop
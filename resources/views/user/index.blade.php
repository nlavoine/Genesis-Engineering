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
                <h1>Mes infos :</h1>
                <p>Prénom : {{ $user->first_name }}<p/>
                <p>Nom : {{ $user->last_name }}</p>
                <p>E-mail : {{ $user->email }}</p>
                <form action="{{ route('user.edit', $user) }}" method="GET">
                    <button class="btn btn-primary" type="submit">Modifier mes infos</button>
                </form>

                <form action="{{ route('user.editmdp', $user) }}" method="GET">
                    <button class="btn btn-primary" type="submit">Modifier mon mot de passe</button>
                </form>
            </div>

        </div>
    </div>

@stop
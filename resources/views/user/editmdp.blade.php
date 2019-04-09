@extends('layout.app')
@section('title')
    Modifier mon mot de passe
@stop
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-3">
                <h1>Mon mot de passe :</h1>
                @if (session('mdperror'))
                    <div class="alert alert-success">
                        {{ session('mdperror') }}
                    </div>
                @endif
                <form action="{{ route('user.updatemdp', $user) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <h4>Nouveau mot de passe</h4>
                        <label for="password"></label>
                        <input class="form-control" type="password" name="password">
                    </div>
                    <div class="form-group">
                        <h4>Confirmation du nouveau mot de passe</h4>
                        <label for="password_confirm"></label>
                        <input class="form-control" type="password" name="password_confirm">
                    </div>
                    <button class="btn btn-primary" type="submit">Modifier mon mot de passe</button>
                </form>
            </div>



        </div>
    </div>

@stop
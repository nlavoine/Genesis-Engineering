@extends('layout.app')
@section('title')
    Account
@stop
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-3">
                <h1>Mes infos :</h1>
                <form action="{{ route('user.update', $user) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <h4>Nom</h4>
                        <label for="last_name"></label>
                        <input class="form-control" type="text" name="last_name" value="{{ $user->last_name }}">
                    </div>
                    <div class="form-group">
                        <h4>Prénom</h4>
                        <label for="first_name"></label>
                        <input class="form-control" type="text" name="first_name" value="{{ $user->first_name }}">
                    </div>
                    <div class="form-group">
                        <h4>Email</h4>
                        <label for="email"></label>
                        <input class="form-control" type="text" name="email" value="{{ $user->email }}">
                    </div>

                    <button class="btn btn-primary" type="submit">Modifier mes infos</button>
                </form>
            </div>



        </div>
    </div>

@stop
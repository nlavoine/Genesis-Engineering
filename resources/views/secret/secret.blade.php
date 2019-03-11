@extends('layout.app')
@section('title')
    SecretPage - Genesis Engineering
@stop
@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/secret.css') }}" />
    <h1>LA DREAM TEAM</h1>

    <div class="container mt-5"></div>
    <div class="container-fluid sectionGamme mb-8 mt-5">
        <div class="row no-gutters sectionContent">
            <div class="col-sm-4 col-md-3 mb-5 p-2 text-justify">
                <img class="licorne" src="{{asset('/assets/images/nicolas.jpg')}}">
                <h2>Nico le Mage Noire, avec lui le code devient magie !</h2>
            </div>
            <div class="col-sm-4 col-md-3 mb-5 p-2 text-justify">
                <img class="licorne" src="{{asset('/assets/images/julien.jpg')}}">
                <h2>Julien il craint la chaleur de la clim mais le code le craint !</h2>
            </div>
            <div class="col-sm-4 col-md-3 mb-5 p-2 text-justify">
                <img class="licorne" src="{{asset('/assets/images/maxime.jpg')}}">
                <h2>Maxime son amour pour le code est supérieure que son amour pour les licornes !</h2>
            </div>
            <div class="col-sm-4 col-md-3 mb-5 p-2 text-justify">
                <img class="licorne" src="{{asset('/assets/images/michel.jpg')}}">
                <h2>Michel, aka PanzerNem, et il n'est pas seulement maitre en kung-fu mais aussi en code !</h2>
            </div>
        </div>
    </div>


    @stop
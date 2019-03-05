@extends('layout.app')

@section('title')
    Nous contacter - Genesis Engineering
@stop

@section('content')

    <div class="container-fluid">

        <h2 class="pt-5 pb-5">Nous Contacter</h2>

        <form action="https://httpbin.org/get" method=get class="formulaire">
            <div class="form-group row">
                <div class="col-md text-center">
                <h5>Formulaire de contact</h5>
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-md-8">
                    <div class="form-row">
                        <div class="col-md">
                            <input type="text" class="form-control rounded-0" id="" placeholder="Nom*" required>
                        </div>
                        <div class="col-md">
                            <input type="text" class="form-control rounded-0" id="" placeholder="Prénom*" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row justify-content-center">
                <div class="col-md-8">
                    <div class="form-row">
                        <div class="col-md">
                            <input type="email" class="form-control rounded-0" id="" placeholder="E-mail*" required>
                        </div>
                        <div class="col-md">
                            <input type="text" class="form-control rounded-0" id="" placeholder="Téléphone">
                        </div>
                    </div>
                </div>

            </div>

            <div class="form-group row justify-content-center align-items-center">
                <div class="col-md-8">
                    <label for="selectbox" class="sr-only">Demande type </label>
                    <select class="custom-select rounded-0" id="selectbox">
                        <option value="none">- Demande Type -</option>
                        <option value="001">Demande générale</option>
                        <option value="002">Demande commerciale et marketing</option>
                        <option value="003">Service clientèle</option>
                        <option value="004">Support technique</option>
                    </select>
                </div>
            </div>

            <div class="form-group row justify-content-center">
                <div class="col-md-8">
                    <textarea class="form-control rounded-0" id="question" name="question" rows="5" placeholder="Votre message*" required></textarea>
                </div>
            </div>
            <div class="row justify-content-center">
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>
        </form>

    </div>

@stop

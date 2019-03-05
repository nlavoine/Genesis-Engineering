@extends('layout.app')

@section('title')
    Nous contacter - Genesis Engineering
@stop

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-around m-5">
            <div class="col-md-4 align-content-start">
                <h5 class="pb-5">Nous Contacter</h5>
                <p>Dear valued Customer,</p>
                <p>This page is intended to help clarify the right contact for your enquiry. Please see below for detailed contact information.</p>
                <p>For technical support<br>
                    Email: support@engenesis.com<br>
                    Telephone: +44 (0) 1344 – 868688<br>
                    Hours Mon – Fri 9.00am - 5.30pm GMT<br>
                    *English & French language only
                </p>
            </div>
            <div class="col-md-7">
                <form action="https://httpbin.org/get" method=get class="formulaire">

                    <div class="form-group row">
                        <div class="col mb-2">
                            <div class="form-row">
                                <div class="col-md mr-2">
                                    <input type="text" class="form-control rounded-0" id="" placeholder="Nom*" required>
                                </div>
                                <div class="col-md ml-2">
                                    <input type="text" class="form-control rounded-0" id="" placeholder="Prénom*"
                                           required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <div class="col mb-2">
                            <div class="form-row ">
                                <div class="col-md mr-2">
                                    <input type="email" class="form-control rounded-0" id="" placeholder="E-mail*"
                                           required>
                                </div>
                                <div class="col-md ml-2">
                                    <input type="text" class="form-control rounded-0" id="" placeholder="Téléphone">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="form-group row justify-content-center align-items-center">
                        <div class="col mb-2">
                            <label for="selectbox" class="sr-only">Demande type </label>
                            <select class="form-control rounded-0" id="selectbox">
                                <option value="none">- Demande Type -</option>
                                <option value="001">Demande générale</option>
                                <option value="002">Demande commerciale et marketing</option>
                                <option value="003">Service clientèle</option>
                                <option value="004">Support technique</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <div class="col mb-2">
                        <textarea class="form-control rounded-0" id="question" name="question" rows="5"
                                  placeholder="Votre message*" required></textarea>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-block btn-outline-primary rounded-0 font-weight-bold"
                                    style="border-width: 2px">Envoyer
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop

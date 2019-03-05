@extends('layout.app')
@section('title')
    Votre panier - Genesis Engineering
@stop
@section('content')
    <div class="container mt-5">
        <h1>Votre panier</h1>
        <div class="row">
            <div class="col-8">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <p class="mb-0  mt-0 font-weight-bold">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Informations personnelles
                                </button>
                            </p>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                <form class="RegisterUserForm" action="" method="post">
                                    <div class="container">
                                        <div class="form-group row justify-content-center ">
                                            <input class="text col-md-10 form-control " type="text"
                                                   placeholder="Prénom*" name="firstname" value="" required/>
                                        </div>
                                        <div class="form-group row justify-content-center ">
                                            <input class="text col-md-10 form-control " type="text" placeholder="Nom*"
                                                   name="lastname" value="" required/>
                                        </div>
                                        <div class="form-group row justify-content-center">
                                            <input class="text col-md-10 form-control " type="email"
                                                   placeholder="Email*" name="email" value="" required/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <p class="mb-0  mt-0 font-weight-bold">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    Adresses
                                </button>
                            </p>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                <form class="RegisterUserForm" action="" method="post">
                                    <div class="container">
                                        <div class="form-group row justify-content-center ">
                                            <input class="text col-md-10 form-control " type="text"
                                                   placeholder="Prénom*" name="firstname" value="" required/>
                                        </div>
                                        <div class="form-group row justify-content-center ">
                                            <input class="text col-md-10 form-control " type="text" placeholder="Nom*"
                                                   name="lastname" value="" required/>
                                        </div>
                                        <div class="form-group row justify-content-center ">
                                            <input class="text col-md-10 form-control " type="text"
                                                   placeholder="Société" name="company" value=""/>
                                        </div>
                                        <div class="form-group row justify-content-center ">
                                            <input class="text col-md-10 form-control " type="text"
                                                   placeholder="Adresse*" name="address" value="" required/>
                                        </div>
                                        <div class="form-group row justify-content-center ">
                                            <input class="text col-md-10 form-control " type="text"
                                                   placeholder="Complément d'adresse" name="complement" value=""/>
                                        </div>
                                        <div class="form-group row justify-content-center ">
                                            <input class="text col-md-10 form-control " type="text" placeholder="Ville*"
                                                   name="city" value="" required/>
                                        </div>
                                        <div class="form-group row justify-content-center ">
                                            <input class="text col-md-10 form-control " type="text" placeholder="Etat*"
                                                   name="state" value="" required/>
                                        </div>
                                        <div class="form-group row justify-content-center ">
                                            <input class="text col-md-10 form-control " type="text"
                                                   placeholder="Code postal*" name="zipcode" value="" required/>
                                        </div>
                                        <div class="form-group row justify-content-center ">
                                            <input class="text col-md-10 form-control " type="text" placeholder="Pays*"
                                                   name="country" value="" required/>
                                        </div>
                                        <div class="form-group row justify-content-center">
                                            <input class="text col-md-10 form-control " type="tel"
                                                   placeholder="Téléphone" name="phone" value=""/>
                                        </div>
                                        <div class="form-group row justify-content-center align-items-center">
                                            <input type="checkbox" name="acceptTerms" checked/>
                                            <label class="pl-3 m-0" for="acceptTerms"> Utiliser comme adresse de
                                                facturation </label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header font-weight-bold" id="headingThree">
                            <p class="mb-0  mt-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    Mode de livraison
                                </button>
                            </p>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header font-weight-bold" id="headingThree">
                            <p class="mb-0  mt-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    Paiement
                                </button>
                            </p>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content justify-content-end">
                <form method="get" action="{{route('cart.details')}}" class="justify-content-end">
                    <input type="submit" class="btn btn-primary btn-lg rounded-0" value="Commander"/>
                </form>
                </div>
            </div>
            <div class="col-4">
                <table class="table price">
                    <tbody>
                    <tr>

                        <td>
                            <p class="totalPdct">2 articles</p>
                            <p class="shipping">Livraison</p>
                        </td>
                        <td>
                            <p class="totalPdct text-right">5 000,99 €</p>
                            <p class="shipping text-right">29,00 €</p>
                        </td>
                    </tr>
                    <tr>

                        <td>
                            <p class="totalPrice">Total H.T.</p>
                            <p class="taxes">T.V.A.</p>
                        </td>
                        <td>
                            <p class="totalPrice text-right">5 029,99 €</p>
                            <p class="taxes text-right">0 €</p>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>




@stop



























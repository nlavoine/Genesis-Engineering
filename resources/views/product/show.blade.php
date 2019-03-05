@extends('layout.app')
@section('title')
    Product
@stop
@section('content')

    <div class="container mt-5">
        <h1>Nom du produit</h1>
        <div class="row justify-content-around align-items-center">
            <div class="col-sd-6 col-md-5 mb-5 p-2 d-flex align-items-stretch">
                <img src="{{asset('/assets/images/pc1.jpg')}}" class="image-produit" alt="fiche-produit">
            </div>
            <div class="col-sm-6 col-md-5 mb-5 p-2 text-justify">
                <p class="font-weight-bold product-prize">250€</p>
                <p>
                    Quibus ita sceleste patratis Paulus cruore perfusus reversusque ad principis castra multos coopertos
                    paene catenis adduxit in squalorem deiectos atque maestitiam, quorum adventu intendebantur eculei
                    uncosque parabat carnifex et tormenta. et ex is proscripti sunt plures actique in exilium alii, non
                    nullos gladii consumpsere poenales. nec enim quisquam facile meminit sub Constantio, ubi susurro
                    tenus
                    haec movebantur, quemquam absolutum.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-around align-items-center">
            <div class="col-sm-6 col-md-5 mb-5 p-2 d-flex align-items-stretch text-justify color">
                Quibus ita sceleste patratis Paulus cruore perfusus reversusque ad principis castra multos coopertos
                paene catenis adduxit in squalorem deiectos atque maestitiam, quorum adventu intendebantur eculei
                uncosque parabat carnifex et tormenta. et ex is proscripti sunt plures actique in exilium alii, non
                nullos gladii consumpsere poenales. nec enim quisquam facile meminit sub Constantio, ubi susurro tenus
                haec movebantur, quemquam absolutum.
            </div>
            <div class="col-sm-6 col-md-5 mb-5 p-2 d-flex align-items-stretch">
                <img src="{{asset('/assets/images/pc1.jpg')}}" class="image-produit" alt="fiche-produit">
            </div>

        </div>
    </div>
    <div class="container">
        <div class="row justify-content-around align-items-center">
            <div class="col-sm-6 col-md-5 mb-5 p-2 d-flex align-items-stretch">
                <img src="{{asset('/assets/images/pc1.jpg')}}" class="image-produit" alt="watch">
            </div>
            <div class="col-sm-6 col-md-5 mb-5 p-2 d-flex align-items-stretch text-justify color">
                Quibus ita sceleste patratis Paulus cruore perfusus reversusque ad principis castra multos coopertos
                paene catenis adduxit in squalorem deiectos atque maestitiam, quorum adventu intendebantur eculei
                uncosque parabat carnifex et tormenta. et ex is proscripti sunt plures actique in exilium alii, non
                nullos gladii consumpsere poenales. nec enim quisquam facile meminit sub Constantio, ubi susurro tenus
                haec movebantur, quemquam absolutum.
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4 carre"></div>
            <div class="col-md-4 carre"></div>
            <div class="col-md-4 carre"></div>
        </div>
    </div>

    <div style="text-align: center" ;>
        <button type="button" class="btn btn-primary btn-lg rounded-0">Aller à la personnalisation</button>
    </div>






@stop
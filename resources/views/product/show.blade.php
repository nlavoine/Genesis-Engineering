@extends('layout.app')
@section('title')
    Produit
@stop
@section('content')

    <div class="container"><h1>Produit</h1></div>

    @for($i = 0; $i < 5; $i++)
        <section class="sectionGamme mb-8"
                 style='background-image: url("{{asset('/assets/images/product-left.jpg')}}")'>
            <div class="container p-0">
                <div class="row sectionContent align-self-end">
                    <div class="col-sm-6 col-md-7 mb-5 p-2 text-justify">
                        <h2>Razer Blade Pro 17</h2>
                        <p class="regular-text text-gray8">La puissance d'un PC dans un portable
                            <br><span class="cat_price" style="margin-bottom: 0;"></span>
                            La nouvelle référence des ordinateurs portables aussi puissants que ceux de bureau, le Razer
                            Blade
                            Pro 17" est remarquemablement fin et possede un puissant processeur quadricoeur
                            Intel<sup>®</sup>
                            Core<sup>™</sup> i7 de 7e génération, une carte graphique NVIDIA<sup>®</sup> GeForce<sup>®</sup>
                            GTX
                            Serie 10 et d'un espace de stockage hybride.</p>
                        <ul class="cta-list link list-unstyled">
                            <li>
                                <button type="button" class="btn btn-primary btn-lg rounded-0">En savoir plus</button>
                                <button type="button" class="btn btn-secondary btn-lg rounded-0">Ajouter au panier</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    @endfor


    <div class="container mb-5">
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
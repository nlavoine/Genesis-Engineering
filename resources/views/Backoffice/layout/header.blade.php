<!--Nav-->
<header class="sticky-top">
    <div class="container">

        <div class="row">
            <nav class="navbar navbar-expand-md align-items-end">
                <a class="navbar-brand" href="/">
                    <img src="{{asset('/assets/images/logo_final.png')}}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                        aria-controls="navbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarProducts">
                    <ul class="navbar-nav justify-content-end mr-auto d-flex flex-fill">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" id="dropDownProducts"
                               role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Produits
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropDownProducts">
                                <a class="dropdown-item" href="{{route('admin.product.create')}}">Ajouter un produit</a>
                                <a class="dropdown-item" href="{{route('admin.product.index')}}">Afficher les produits</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="">Catégories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="">Commandes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="">Utilisateurs</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<!--Nav-->
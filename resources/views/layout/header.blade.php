<!--Nav-->
<header class="sticky-top">
    <div class="container">
        <div class="row justify-content-end">
            <ul class="nav subnav">
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Mon compte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{route('cart.index')}}">Mon panier</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Rechercher</a>
                </li>
            </ul>

        </div>
        <div class="row">
            <nav class="navbar navbar-expand-md align-items-end">
                <a class="navbar-brand" href="/">
                    <img src="{{asset('/assets/images/logo_final.png')}}" alt="">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                        aria-controls="navbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav justify-content-end mr-auto d-flex flex-fill">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{route('home.index')}}">Accueil</a></li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="/qui-sommes-nous">Qui sommes nous</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink"
                               role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Gammes
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Ordinateurs</a>
                                <a class="dropdown-item" href="#">Périphériques</a>
                                <a class="dropdown-item" href="#">Fauteuils</a>
                                <a class="dropdown-item" href="#">Accessoires</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<!--Nav-->
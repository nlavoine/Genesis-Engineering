@extends('layout.app')
@section('title')
    Homepage
@stop
@section('content')

    <!-- CARROUSEL-->
    <div class="container-fluid">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('/assets/images/razer.jpg')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('/assets/images/razer2.jpg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('/assets/images/razer3.jpg')}}" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span
                        class="carousel-control-prev-icon" aria-hidden="true"></span> <span
                        class="sr-only">Previous</span> </a> <a class="carousel-control-next"
                                                                href="#carouselExampleControls" role="button"
                                                                data-slide="next"> <span
                        class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- Left and right controls -->
        <div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <span
                        class="glyphicon glyphicon-chevron-left"></span> <span class="sr-only">Previous</span> </a> <a
                    class="right carousel-control" href="#myCarousel" data-slide="next"> <span
                        class="glyphicon glyphicon-chevron-right"></span> <span class="sr-only">Next</span> </a>
        </div>
    </div>


    <!-- NOUVEAUTES-->
    <div class="container">
        <h2>Nouveautés</h2>
        <div class="card-deck">
            @foreach($newProducts as $product)
                <div class="col-sd-6 col-md-3 mb-5 p-0 d-flex align-items-stretch">
                    <div class="card bg-black">
                        <img src="{{asset($product->images[0]->url)}}" class="card-img-top" alt="watch">
                        <div class="card-body d-flex flex-column shadow degradegris">
                            <h6 class="card-title text-center text-md-left font-weight-bold">{{$product->name}}</h6>
                            <p class="card-text text-center text-md-left">{{Str::limit($product->details_1, 100, $end = '...')}}</p>
                            <a href="#" class="btn btn-dark btn-block mt-auto">En savoir plus</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <!-- REASSURANCE LINE-->
    <div class="container-fluid line mt-3">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-4 carre"><i class="fa fa-wrench" style="font-size:60px;"></i>Personnalisez</div>
                    <div class="col-12 col-lg-4 carre"><i class="fa fa-shopping-basket" style="font-size:60px;"></i>Commandez
                    </div>
                    <div class="col-12 col-lg-4 carre"><i class="fa fa-gamepad" style="font-size:60px;"></i>Jouez !</div>
                </div>
            </div>
        </div>
    </div>



    <!-- GAMME-->
    <div class="container">
        <h2>Gammes</h2>
        <div class="card-deck">
            @foreach($rangeProducts as $product)
                <div class="col-sd-6 col-md-3 mb-5 p-0 d-flex align-items-stretch">
                    <div class="card bg-black">
                        <img src="{{asset($product->images[0]->url)}}" class="card-img-top" alt="watch">
                        <div class="card-body d-flex flex-column shadow degradegris">
                            <p class="card-title text-center text-md-left font-weight-bold">{{$product->category->name}}</p>
                            <a href="#" class="btn btn-primary btn-block mt-auto">En savoir plus</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <!-- REASSURANCE LINE-->
    <div class="container-fluid line mt-3">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-4 carre"><i class="fa fa-wrench" style="font-size:60px;"></i>Personnalisez</div>
                    <div class="col-12 col-lg-5 carre"><i class="fa fa-shopping-basket" style="font-size:60px;"></i>Commandez
                    </div>
                    <div class="col-12 col-lg-3 carre"><i class="fa fa-gamepad" style="font-size:60px;"></i>Jouez !</div>
                </div>
            </div>
        </div>
    </div>


    <!-- SAVOIR FAIRE-->
    <div class="card container-fluid bg-transparent p-0" style="position:relative;">
        <img class="d-block w-100" src="{{asset('/assets/images/savoir-faire.jpg')}}" alt="First slide">
        <div class="card-footer" style="margin-top: -50px;">
            <div class="container">
                <h5>Notre savoir faire</h5>
                <p>Altera sententia est, quae definit amicitiam paribus officiis ac voluntatibus. Hoc quidem est nimis
                    exigue et exiliter ad calculos vocare amicitiam, ut par sit ratio acceptorum et datorum. Divitior
                    mihi et affluentior videtur esse vera amicitia nec observare restricte, ne plus reddat quam
                    acceperit; neque enim verendum est, ne quid excidat, aut ne quid in terram defluat, aut ne plus
                    aequo quid in amicitiam congeratur.</p>
            </div>
        </div>
    </div>


@stop



























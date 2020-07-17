<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ola Tractor</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

         <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" 
            href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" 
            rel="stylesheet">

        <!-- CSS Files -->
        <link href="{{asset('css/material-kit.min.css?v=2.2.0')}}" rel="stylesheet" />


        <link href="{{asset('css/style.css')}}" rel="stylesheet" />

    </head>


    <body>

        <header>

            <nav class="navbar navbar-transparent navbar-absolute navbar-expand-lg">
                <div class="container">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-translate">

                        <a class="navbar-brand" href="{{url('/')}}">Ola Tractor</a>

                        <button type="button" class="ml-auto navbar-toggler" data-toggle="collapse" 
                            data-target="#navigation-example3">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="navbar-toggler-icon"></span>
                            <span class="navbar-toggler-icon"></span>
                            <span class="navbar-toggler-icon"></span>
                        </button>

                    </div>

                    <div class="collapse navbar-collapse" id="navigation-example3">
                    </div>

                </div>
            </nav>


            <!-- Carousel Card -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="page-header header-filter" 
                            style="background-image: url('{{asset('img/dg1.jpg')}}');">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 text-left">

                                        <h1 class="title">Material Kit PRO</h1>
                                        <h4>
                                            Dolce &amp; Gabbana is a luxury Italian fashion house 
                                            founded in 1985 in Legnano by Italian designers Domenico 
                                            Dolce and Stefano Gabbana. The two met in Milan in 1980 
                                            and designed for the same fashion house.</h4>
                                        <br>

                                        <div class="buttons">
                                            <a href="{{url('/login')}}" class="btn btn-danger btn-md">
                                                <i class="fa fa-ticket"></i> Connexion
                                            </a>
                
                                            <a href="{{url('/register')}}"class="btn  btn-md">
                                                <i class="fa fa-ticket"></i> Inscription
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="page-header header-filter" 
                            style="background-image: url('{{asset('img/dg2.jpg')}}');">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 ml-auto mr-auto text-center">

                                        <h1 class="title">Material Kit PRO</h1>
                                        <h4>
                                            Dolce &amp; Gabbana is a luxury Italian fashion house 
                                            founded in 1985 in Legnano by Italian designers Domenico 
                                            Dolce and Stefano Gabbana. The two met in Milan in 1980 
                                            and designed for the same fashion house.</h4>
                                        <br>

                                        <h6>Connect with us on:</h6>

                                        <div class="buttons">
                                            <a href="{{url('/login')}}" class="btn btn-danger btn-md">
                                                <i class="fa fa-ticket"></i> Connexion
                                            </a>
                
                                            <a href="{{url('/register')}}"class="btn  btn-md">
                                                <i class="fa fa-ticket"></i> Inscription
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="page-header header-filter" style="background-image: url('{{asset('img/dg3.jpg')}}');">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-7 ml-auto text-right">

                                        <h1 class="title">New Collection 50% Off</h1>
                                        <h4>
                                            There&apos;s no doubt that Tesla is delighted with the interest, 
                                            but the data also raises a few questions. How long will it take 
                                            for Tesla to fulfill all those extra orders?</h4>
                                        <br>

                                        <div class="buttons">
                                            <a href="{{url('/login')}}" class="btn btn-danger btn-md">
                                                <i class="fa fa-ticket"></i> Connexion
                                            </a>
                
                                            <a href="{{url('/register')}}"class="btn  btn-md">
                                                <i class="fa fa-ticket"></i> Inscription
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <i class="material-icons">keyboard_arrow_left</i>
                        <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span class="sr-only">Next</span>
                </a>

            </div>
            <!-- End Carousel Card -->

        </header>    



        @include('app.include-js')


    </body>
</html>

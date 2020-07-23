
<!DOCTYPE html>
<html lang="fr">



<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />


  <title>
    Ola Tractor
  </title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, 
    shrink-to-fit=no' name='viewport' />

    @include('app.include-css')


</head>




<body>



    <div class="wrapper ">


        <div class="sidebar" data-color="purple" data-background-color="white" 
            data-image="../assets/img/sidebar-1.jpg">


            <div class="logo">
                <a href="{{url('/')}}" class="simple-text logo-normal">
                   Ola Tractor
                </a>
            </div>


            <div class="sidebar-wrapper">
                <ul class="nav">

                    <li class="nav-item @if($namePage == 'index') active @endif">
                        <a class="nav-link" href="{{url('/app/dashboard')}}">
                            <i class="material-icons">dashboard</i>
                            <p>Accueil</p>
                        </a>
                    </li>


                    <li class="nav-item @if($namePage == 'tracteurs') active @endif">
                        <a class="nav-link" href="{{url('/app/tracteurs')}}">
                            <i class="material-icons">content_paste</i>
                            <p>Tracteurs</p>
                        </a>
                    </li>


                    <li class="nav-item active-pro dropdown">

                        <a class="nav-link" href="#pablo" id="navbarDropdownProfile" 
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                            <i class="material-icons">person</i>

                            <p>{{Auth::user()->name}}</p>

                        </a>

                        <div class="dropdown-menu dropdown-menu-right" 
                            aria-labelledby="navbarDropdownProfile">

                            <a class="dropdown-item" href="#">Mon compte</a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="{{url('logout')}}">Déconnexion</a>

                        </div>


                    </li>

                </ul>
            </div>


        </div>


        <div class="main-panel">


            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">

                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="#pablo">Dashboard</a>
                    </div>


                    <button class="navbar-toggler" type="button" data-toggle="collapse" 
                        aria-controls="navigation-index" aria-expanded="false" 
                        aria-label="Toggle navigation">

                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>

                    </button>


                    <div class="collapse navbar-collapse justify-content-end">


                        <form class="navbar-form">
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Rechercher...">
                                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                                </button>
                            </div>
                        </form>


                        <ul class="navbar-nav">

                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <i class="material-icons">dashboard</i>
                                    <p class="d-lg-none d-md-block">
                                        Stats
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item dropdown">

                                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" 
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>

                                    <p class="d-lg-none d-md-block">
                                        Some Actions
                                    </p>

                                </a>

                            </li>

                        </ul>


                    </div>


                </div>
            </nav>
            <!-- End Navbar -->


            <div class="content">
                @yield('content')
            </div>



            <footer class="footer">
                <div class="container-fluid">

                    <div class="copyright float-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>,
                        <a href="{{url('/')}}" target="_blank">Ola Tractor</a>
                    </div>

                </div>
            </footer>


        </div>


    </div>




    @include('app.include-js')


    @if(Session::has('success'))
        <span id="message" data-message="{{ Session::get('success') }}"></span>
        <script>
            $( document ).ready(function() {
                md.showNotification('top','right',$('#message').attr('data-message'));
            });
        </script>
    @endif

    
</body>




</html>
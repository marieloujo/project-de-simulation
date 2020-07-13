
<!DOCTYPE html>
<html lang="fr">



<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />


  <title>
    Material Dashboard by Creative Tim
  </title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, 
    shrink-to-fit=no' name='viewport' />

    @include('app.include-css')


</head>




<body>



    <div class="wrapper ">


        <div class="sidebar" data-color="purple" data-background-color="white" 
            data-image="../assets/img/sidebar-1.jpg">
            <!--
                Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
        
                Tip 2: you can also add an image using data-image tag
            -->


            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                    Creative Tim
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


                    <li class="nav-item @if($namePage == 'add-tracteurs') active @endif">
                        <a class="nav-link" href="#">
                            <i class="material-icons">person</i>
                            <p>Mon Profile</p>
                        </a>
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
                                <input type="text" value="" class="form-control" placeholder="Search...">
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

                                <div class="dropdown-menu dropdown-menu-right" 
                                    aria-labelledby="navbarDropdownMenuLink">

                                    <a class="dropdown-item" href="#">Mike John responded to your email</a>

                                    <a class="dropdown-item" href="#">You have 5 new tasks</a>

                                    <a class="dropdown-item" href="#">You're now friend with Andrew</a>

                                    <a class="dropdown-item" href="#">Another Notification</a>

                                    <a class="dropdown-item" href="#">Another One</a>

                                </div>

                            </li>

                            <li class="nav-item dropdown">

                                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" 
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                    <i class="material-icons">person</i>

                                    <p class="d-lg-none d-md-block">
                                        Account
                                    </p>

                                </a>

                                <div class="dropdown-menu dropdown-menu-right" 
                                    aria-labelledby="navbarDropdownProfile">

                                    <a class="dropdown-item" href="#">Profile</a>

                                    <a class="dropdown-item" href="#">Settings</a>

                                    <div class="dropdown-divider"></div>

                                    <a class="dropdown-item" href="#">Log out</a>

                                </div>


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
                        </script>, made with <i class="material-icons">favorite</i> by
                        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
                    </div>

                </div>
            </footer>


        </div>


    </div>




    @include('app.include-js')
    
</body>




</html>
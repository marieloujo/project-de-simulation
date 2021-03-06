

@extends('app.admin-layout')


@section('content')
    

<div class="container-fluid">


    <div class="row">


        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">

                <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">content_copy</i>
                    </div>

                    <p class="card-category">Tracteurs</p>

                    <h3 class="card-title">{{$nombre}}
                    </h3>
                </div>

                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons text-danger">warning</i>
                        <a href="#pablo"></a>
                    </div>
                </div>

            </div>
        </div>



        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">

                <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">store</i>
                    </div>
                
                    <p class="card-category">En location</p>

                    <h3 class="card-title"></h3>
                </div>

                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">date_range</i> 
                    </div>
                </div>

            </div>
        </div>
        

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
                <div class="card-icon">
                <i class="material-icons">info_outline</i>
                </div>
                <p class="card-category">Rendus</p>
                <h3 class="card-title"></h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                <i class="material-icons">local_offer</i> 
                </div>
            </div>
            </div>
        </div>


    </div>


</div>



@endsection
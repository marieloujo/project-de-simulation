


@extends('app.admin-layout')


@section('content')

<div class="container-fluid">

    <div class="container">


        
        <button type="submit" class="btn btn-primary pull-right mb-5 text-capitalize" 
            data-toggle="modal" data-target="#modal-add">Enregistrer un véhicules</button>

        <div class="card card-plain">

            <div class="card-header card-header-primary">
                <h4 class="card-title mt-0"> Table on Plain Background</h4>
                <p class="card-category"> Here is a subtitle for this table</p>
            </div>


            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">

                        <thead class="">
                            <th>ID</th>
                            <th>Type</th>
                            <th>Marque</th>
                            <th>Modèle</th>
                            <th class="text-center">Actions</th>
                        </thead>

                        <tbody>
                            @foreach($tracteurs as $value)
                            <tr>
                                
                                <td>{{$value->id}}</td>
                                <td>{{$value->type}}</td>
                                <td>{{$value->marque}}</td>
                                <td>{{$value->modele}}</td>
                                <td class="text-center">
                                    <a class="btn btn-link btn-warning btn-just-icon edit" data-toggle="modal" rel="tooltip"
                                        data-placement="top" title="Modifier" data-target="#modal-change" href="#" data-id="{{$value->id}}" data-url="{{ route('tractors.update', $value->id) }}" data-type="{{$value->type}}" data-modele="{{$value->modele}}" data-marque="{{$value->marque}}">
                                        <i class="material-icons">edit</i>
                                    </a>
                                    
<a class="btn btn-link btn-danger btn-just-icon supprimer" rel="tooltip" data-toggle="modal"
                                        data-placement="top" title="Supprimer" data-target="#modal-delete" href="" data-id="{{$value->id}}" data-url="{{ route('tractors.destroy', $value->id) }}">
                                        <i class="material-icons">close</i>
                                    </a>
                                </td>
                                @endforeach()
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>

        </div>

    </div>
</div>


<div class="modal fade" tabindex="-1" role="dialog" id="modal-change">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="card ">

                <div class="card-header card-header-rose">
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="card-title">Modifier</h4>
                </div>

                <form action="" method="POST" id="updateForm">
                    
                    <div class="card-body">
                {{ csrf_field() }}
               
              {{method_field('PUT')}}
                        <div class="form-group mb-3 mt-3">
                            <label for="titre" class="bmd-label-floating">Type de tracteur</label>
                            <input type="text" style="color: green" class="form-control" name="type" id="type" required="true" value="">
                        </div>

                        <div class="form-group mb-3 mt-3">
                            <label for="titre" class="bmd-label-floating">Modèle</label>
                            <input type="text" style="color: green" class="form-control" name="modele" id="modele" required="true" value="">
                        </div>

                        <div class="form-group mb-3 mt-3">
                            <label for="titre" class="bmd-label-floating">Marque</label>
                            <input type="text" style="color: green" class="form-control" name="marque" id="marque" required="true" value="">
                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-rose">Valider</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="modal-add">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="card ">

                <div class="card-header card-header-rose">
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="card-title">Ajouter un tracteur</h4>
                </div>

                <form action="{{route('admin_addTractor')}}" method="GET">
                    
                    <div class="card-body ">
                        {{ csrf_field() }}
                   
                        <div class="form-group mb-3 mt-3">
                            <label for="titre" class="bmd-label-floating">Type de tracteur</label>
                            <input type="text" class="form-control" name="type" id="type" required="true">
                        </div>

                        <div class="form-group mb-3 mt-3">
                            <label for="titre" class="bmd-label-floating">Modèle</label>
                            <input type="text" class="form-control" name="modele" id="modele" required="true">
                        </div>

                        <div class="form-group mb-3 mt-3">
                            <label for="titre" class="bmd-label-floating">Marque</label>
                            <input type="text" class="form-control" name="marque" id="marque" required="true">
                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-rose">Valider</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>


<!-- delete modal -->
<div class="modal fade modal-mini modal-primary" id="modal-delete" tabindex="-1"
    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-small">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="material-icons">clear</i>
                </button>
            </div>

            <form action="" method="POST" id="deleteForm">
                {{  csrf_field() }}
               
              {{method_field('DELETE')}}
                <div class="modal-body">
                    <p>Etes vous sûre de vouloir supprimer? Vous ne pourrez plus restorer!</p>
                </div>

                <div class="modal-footer justify-content-center">

                    <button type="button" class="btn btn-link" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-danger btn-link">Oui, supprimer
                        <div class="ripple-container"></div>
                    </button>
                </div>

            </form>

        </div>
    </div>
  </div>
<!--    end delete modal -->


@endsection
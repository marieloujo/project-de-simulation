
<!DOCTYPE html>
<html lang="fr">



<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, 
        shrink-to-fit=no' name='viewport' />



    <title>
        Ola Tractor | Inscription
    </title>

        

    <link href="{{asset('bootstrap-wizard/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('bootstrap-wizard/css/material-bootstrap-wizard.css')}}" rel="stylesheet" />

    <link href="{{asset('css/style.css')}}" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" 
        href="https://fonts.googleapis.com/css?family=Montserrat|Material+Icons" />


</head>


<body>

<!--div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div-->



<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <!--      Wizard container        -->
            <div class="wizard-container">
                <div class="card wizard-card" data-color="purple" id="wizardProfile">
                    <form action="" method="">

                        <div class="wizard-header">
                            <h3 class="wizard-title comfortaa">
                               Création de compte
                            </h3>
                            <h5 class="comfortaa">veuillez renseigner les informations correctes</h5>
                        </div>

                        <div class="wizard-navigation">
                            <ul>
                                <li><a href="#about" data-toggle="tab">Information personnel</a></li>
                                <li><a href="#account" data-toggle="tab">Pièces</a></li>
                                <li><a href="#address" data-toggle="tab">Compte</a></li>
                            </ul>
                        </div>

                        <div class="tab-content">

                            <div class="tab-pane" id="about">

                                <h4 class="info-text">  </h4>

                                <div class="row">

                                    <div class="col-sm-4 col-sm-offset-1">
                                        <div class="picture-container">
                                            <div class="picture">
                                                <img src="{{asset('img/default-avatar.png')}}" 
                                                    class="picture-src" id="" title=""/>
                                                <!--input type="file" id="wizard-picture"-->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Nom <small>(obligatoire)</small></label>
                                                <input name="firstname" type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-group label-floating">
                                              <label class="control-label">Prénom <small>(obligatoire)</small></label>
                                              <input name="lastname" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mx-auto">

                                        <div class="col-sm-5">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">place</i>
                                                </span>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Lieu de naissance 
                                                        <small>(obligatoire)</small>
                                                    </label>
                                                    <input name="naissance" type="texte" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">face</i>
                                                </span>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Sexe <small>(obligatoire)</small></label>
                                                    <select class="form-control selectpicker" 
                                                        data-style="btn btn-link" id="exampleFormControlSelect1">
                                                        <option>Masculin</option>
                                                        <option>Féminin</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row mx-auto">

                                        <div class="col-sm-5">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">phone</i>
                                                </span>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">telephone 
                                                        <small>(obligatoire)</small>
                                                    </label>
                                                    <input name="telephone" type="number" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">email</i>
                                                </span>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Email</label>
                                                    <input name="email" type="email" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane" id="account">

                                <h4 class="info-text mt-4"></h4>

                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">

                                        <div class="col-sm-4">
                                            <div class="picture-container">
                                                <div class="picture">
                                                    <img src="" 
                                                        class="picture-src" id="acte-naissance" title=""/>
                                                    <input type="file" name="acte_naissance" id="acte-naissance-picture" 
                                                        accept="image/*">
                                                </div>
                                                <h6>Acte de naissance</h6>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="picture-container">
                                                <div class="picture">
                                                    <img src="" 
                                                        class="picture-src" id="certificat" title=""/>
                                                    <input type="file" name="certificat" id="certificat-picture" 
                                                        accept="image/*">
                                                </div>
                                                <h6>Certificat de nationalité</h6>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="picture-container">
                                                <div class="picture">
                                                    <img src="" 
                                                        class="picture-src" id="carte-identite" title=""/>
                                                    <input type="file" name="carte_identite" id="carte-identite-picture"
                                                        accept="image/*">
                                                </div>
                                                <h6>Carte d'identité</h6>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="address">

                                <h4 class="info-text">  </h4>

                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-sm-7 mx-auto">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">lock</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Mot de passe</label>
                                                <input type="password" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-sm-7">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">lock</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Conifirmer mot de passe</label>
                                                <input type="password" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="wizard-footer">
                            <div class="pull-right">

                                <input type='button' class='btn btn-next btn-fill btn-primary btn-wd' 
                                    name='next' value='Suivant' />
                                
                                <input type='button' class='btn btn-finish btn-fill btn-primary btn-wd' 
                                    name='finish' value='Valider' />

                            </div>

                            <div class="pull-left">

                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' 
                                    name='previous' value='Précédent' />
                            
                            </div>

                            <div class="clearfix"></div>
                        </div>

                    </form>
                </div>
            </div> <!-- wizard container -->
        </div>
    </div><!-- end row -->
</div> 






<!--   Core JS Files   -->
<script src="{{asset('bootstrap-wizard/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
<script src="{{asset('bootstrap-wizard/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('bootstrap-wizard/js/jquery.bootstrap.js')}}" type="text/javascript"></script>


<!--  Plugin for the Wizard -->
<script src="{{asset('bootstrap-wizard/js/material-bootstrap-wizard.js')}}"></script>

<script src="{{asset('bootstrap-wizard/js/jquery.validate.min.js')}}"></script>
    

    
</body>




</html>


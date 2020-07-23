
<!DOCTYPE html>
<html lang="fr">



<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />


  <title>
    Ola Tractor | Connexion
  </title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, 
    shrink-to-fit=no' name='viewport' />

    @include('app.include-css')


</head>




<body>

    

        <div class="col-lg-4 col-md-6 col-sm-8 mx-auto mt-5">
            <form class="form" method="POST" action="{{ route('login') }}">
                <div class="card card-login card-hidden">

                    <div class="card-header card-header-primary text-center">
                        <h4 class="card-title comfortaa">Connexion</h4>
                    </div>

                    @csrf

                    <input type="hidden" name="hidden" value="web_authentifition">


                    <div class="card-body mt-4">

                        <span class="bmd-form-group">
                            <div class="input-group">

                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">person</i>
                                    </span>
                                </div>

                                <input id="email" type="text" class="form-control
                                    @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" 
                                    required autocomplete="email" autofocus placeholder="Identifiant">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </span>

                        <span class="bmd-form-group">
                            <div class="input-group mt-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">lock</i>
                                    </span>
                                </div>

                                <input id="password" type="password" 
                                    class="form-control @error('password') is-invalid @enderror" name="password" 
                                    required autocomplete="current-password" placeholder="Mot de passe">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </span>

                        <span class="bmd-form-group">
                            <div class="form-check mt-5 ml-4">
                                <label class="form-check-label mx-auto"> 
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" 
                                        {{ old('remember') ? 'checked' : '' }}>Se souvenir de moi

                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                        </span>

                    </div>

                    <div class="card-footer justify-content-center">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Se connecter') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Mot de passe oublié ?') }}
                            </a>
                        @endif
                    </div>

                </div>
            </form>
        </div>




@include('app.include-js')
    
</body>




</html>

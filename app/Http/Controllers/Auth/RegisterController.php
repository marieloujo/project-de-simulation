<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            /*'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

            'age' => ['required', 'string', 'max:3'],
            'sexe' => ['required', 'string'],
            'telephone' => ['required', 'integer', 'min:8'],
            'lieu_naissance' => ['required', 'string'],
            'acte_naissance' => ['required', 'string'],
            'certificat_nationalite' => ['required', 'string'],
            'carte_identite' => ['required', 'string']*/
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        if($data['acte_naissance'] != null) {
            $file_acte_naissance_name = $data['name']
                        .'_acte_naissance.'
                        .$data['acte_naissance']->getClientOriginalExtension();

            $acte_naissanceFile = $data['acte_naissance'];
            $acte_naissanceFile->move(public_path().'/piece_fournir',$file_acte_naissance_name);
        }

        if($data['certificat_nationalite'] != null) {
            $file_certificat_nationalite_name = $data['name']
                        .'_certificat_nationalite.'
                        .$data['certificat_nationalite']->getClientOriginalExtension();

            $certificat_nationaliteFile = $data['certificat_nationalite'];
            $certificat_nationaliteFile->move(public_path().'/piece_fournir',
                            $file_certificat_nationalite_name);
        }


        if($data['carte_identite'] != null) {
            $file_carte_identite_name = $data['name']
                        .'_carte_identite.'
                        .$data['carte_identite']->getClientOriginalExtension();

            $carte_identiteFile = $data['carte_identite'];
            $carte_identiteFile->move(public_path().'/piece_fournir',$file_carte_identite_name);
        }



        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),

            'age' => $data['age'],
            'sexe' => $data['sexe'],
            'telephone' => $data['telephone'],
            'lieu_naissance' => $data['lieu_naissance'],

            /*    'acte_naissance' => $file_acte_naissance_name,
            
            'certificat_nationalite' => $file_certificat_nationalite_name,
            'carte_identite' => $file_carte_identite_name,*/

            'id_localite' => $data['id_localite']

        ]);
    }


    protected function registered(Request $request, $user)
    {
        $user->generateToken();

    return response()->json(['data' => $user->toArray()], 201);
    }

    

    public function save_file(array $data, $filename) {


        $filename.$file->getClientOriginalExtension();

        $carte_identiteFile->move(public_path().'/piece_fournir',$filename);

    }


}

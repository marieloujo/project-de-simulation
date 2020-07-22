<?php

namespace App\Http\Controllers\api;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\Tracteur as TracteurResource;
use App\User;
use App\Tracteurs;
use App\Modeles\Localite;
use App\Modeles\Tracking;


class TracteurController extends Controller
{
    

    public function index()
    {
        return Tracteurs::all();
    }


    public function tracteurs_disponible_proximite($idUser)
    {

        //$user = User::findOrFail($idUser);
        
        /*return /*Tracteurs::collection(/
            DB::table('tracteurs')

                ->leftJoin('louer', 'tracteurs.id', '=', 'louer.tracteur_id')

                /*->join('users', 'tracteurs.user_id', '=', 'users.id')
                ->join('localites', 'users.id_localite', '=', 'localites.id')
                ->join('environner as localites_environnantes', 
                            'localites.id', '=', 'localites_environnantes.localiteA_id')
                ->join('environner as localites_environner', 
                          'localites.id', '=', 'localites_environner.localiteB_id')

                ->where('localites.id', '=', $user->localite->id)/

                ->where('louer.is_paie', '=', 0)
                ->orwhere('louer.is_paie', '=', null)

                ->select('tracteurs.*', 'users.name', 'localites.libelle')
                
                ->get();
        //);*/

    }



    public function store_tracking(Request $request) {

        return response()->json(Tracking::create($request->all()), 201);
        
    }





    

}

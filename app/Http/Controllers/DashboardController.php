<?php

namespace App\Http\Controllers;
use App\Tracteurs;

use Illuminate\Http\Request;
use Larinfo;



class DashboardController extends Controller
{
    //


    public function __construct()
    {
       
    }




    public function accueil(Request $request)
    {
       $tracteurs =  Tracteurs::all();
       $nombre = $tracteurs->count();
        return view('app.index', array(
            'namePage'=>'index'), compact('nombre')
        );
    }
      

    public function allTractor(Request $request)
    {
        $tracteurs = Tracteurs::all();
        return view('app.tracteurs', compact('tracteurs'), array(
            'namePage'=>'tracteurs')
        );
    }

    public function addTractor(Request $request)
    {

        //$clientIP = request()->ip();
        $add_trateur = Tracteurs::create([
            'user_id' => 1,
            'type' => $request->type,
            'marque' => $request->marque,
            'modele' =>$request->modele,
        ]);
        $tracteurs = Tracteurs::all();
        // return $larinfo = Larinfo::getInfo();
  
      return view('app.tracteurs', compact('tracteurs'), array(
            'namePage'=>'tracteurs')
  );
    
    }

    public function destroy($id)
    {
 $tracteurs = Tracteurs::findOrFail($id);

        $tracteurs->delete();
        return "ok";

    }



}

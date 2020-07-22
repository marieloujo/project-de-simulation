<?php

namespace App\Http\Controllers;
use App\Tracteurs;
use App\Modeles\Localite;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Larinfo;

use Illuminate\Support\Facades\Auth;



class DashboardController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
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

        return view('app.tracteurs', 
                    compact('tracteurs'), 
                    array('namePage'=>'tracteurs',
                        'localites' => Localite::all()
                    )
        );
    }



    public function addTractor(Request $request)
    {
        //$clientIP = request()->ip();
        $add_trateur = Tracteurs::create([
            'user_id' => Auth::id(),
            'type' => $request->type,
            'marque' => $request->marque,
            'modele' =>$request->modele,
        ]);

        Session::flash('success','Tracteur ajouté avec succès.');
        return redirect()->route('admin_allTractor');

        /*$tracteurs = Tracteurs::all();
        // return $larinfo = Larinfo::getInfo();
  
        return view('app.tracteurs', compact('tracteurs'), array(
                'namePage'=>'tracteurs')
            );*/
    
    }



    public function destroy($id)
    {
        $tracteurs = Tracteurs::findOrFail($id);

        $tracteurs->delete();

        Session::flash('success', 'Tracteur supprimé avec succès !');
        return redirect()->back();

    }



}

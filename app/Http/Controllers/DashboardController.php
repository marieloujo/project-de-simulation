<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //


    public function __construct()
    {
       
    }




    public function accueil(Request $request)
    {
        return view('app.index', array(
            'namePage'=>'index')
        );
    }
      

    public function allTractor(Request $request)
    {
        return view('app.tracteurs', array(
            'namePage'=>'tracteurs')
        );
    }



}

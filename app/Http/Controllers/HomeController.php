<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
     /**
        Fonction qui retourne la page d'accueil
      *
      * @return view
      **/
    public function index()
    {
        return view('layouts.app');
    }

    public function a_propos()
    {
        $name = 'Joe Wilfred AFANA';
        return view('a_propos',compact('name'));
    }
    //
}

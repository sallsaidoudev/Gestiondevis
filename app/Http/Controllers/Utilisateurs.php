<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Utilisateurs extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('utilisateurs.index');
    }
    public function enregistrer(Request $request){
        dd($request);
        return view('utilisateurs.index');
    }
}

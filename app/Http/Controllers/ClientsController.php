<?php

namespace App\Http\Controllers;

use App\Client;
use App\Http\Requests\ClientRequest;
use App\User;
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
    public function enregistrer(ClientRequest $request){
        $client=new Client();
        $client->raison_soial=$request->get('raison_social');
        $client->adresse=$request->get('adresse');
        $client->code_postal=$request->get('code_postal');
        $client->ville=$request->get('ville');
        $client->region=$request->get('region');
        $client->tel=$request->get('tel');
        $client->email=$request->get('email');
        $client->save();
        return redirect('passports')->with('success', 'Information has been added');
        return view('utilisateurs.index');
    }
}

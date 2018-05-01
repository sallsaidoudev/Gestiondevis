<?php
/**
 * Created by PhpStorm.
 * User: Stagiaire
 * Date: 26/04/2018
 * Time: 12:02
 */

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ApiController extends  Controller
{
    public function authentificate(Request $request)
    {
        $request->request->add([
            'grant_type' => 'password',
            'username' => $request->username,
            'password' => $request->password,
            'client_id' => $request->client_id,
            'client_secret' => $request->client_secret,
            'scope' => '*'      //$this->getScopes($request->username)
        ]);

        $proxy = Request::create(
            'oauth/token',
            'POST'
        );

        return Route::dispatch($proxy);
    }
}
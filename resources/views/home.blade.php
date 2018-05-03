@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">    <!--div class="row justify-content-center"-->
        <div class="col-sm-4">
            <div class="card text-white bg-danger mb-3">
                <div class="card-body">
                    <h5 class="card-title">Gestion client</h5>
                    <hr>
                    <p class="card-text">Enregistrer vos clients,Editer les informations et supprimer .</p>
                    <a href="/clients" class="btn btn-outline-warning">Gerer</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card text-white bg-info mb-3 ">
                <div class="card-body">
                    <h5 class="card-title">Gestion des Rôles</h5>
                    <hr>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="/roles" class="btn btn-outline-dark">Gerer</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h5 class="card-title">Gestion des permissions</h5>
                    <hr>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="/permission" class="btn btn-outline-primary">Gerer</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

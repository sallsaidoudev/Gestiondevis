@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">    <!--div class="row justify-content-center"-->
        <div class="col-sm-12">
            <div class="card text-info bg-light mb-3">
                <div class="card-body">
                    <h5 class="card-title">Gestion utilisateur</h5>
                    <hr>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <form method="post" action="/enregistrer">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Raison social</label>
                                <input type="text" name="raison_social" class="form-control" id="inputEmail4" placeholder="raison_social">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Adresse</label>
                                <input type="text" name="adresse" class="form-control" id="inputPassword4" placeholder="adresse">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Code postal</label>
                                <input type="text" name="code_postal" class="form-control" id="inputEmail4" placeholder="code postal">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Ville</label>
                                <input type="text" name="ville" class="form-control" id="inputPassword4" placeholder="ville">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Region</label>
                                <input type="text" name="region" class="form-control" id="inputEmail4" placeholder="region">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Telephone</label>
                                <input type="text" name="tel" class="form-control" id="inputPassword4" placeholder="tel">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Email</label>
                                <input type="email" name="email" class="form-control" id="inputPassword4" placeholder="Email">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </form>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection

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
                                <label for="inputEmail4">Nom</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Nom">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Email</label>
                                <input type="prenom" class="form-control" id="inputPassword4" placeholder="Email">
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

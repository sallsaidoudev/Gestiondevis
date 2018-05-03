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
                    @if (\Session::has('success'))
                        <div class="alert alert-success">
                            <p>{{ \Session::get('success') }}</p>
                        </div><br />
                    @endif
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Raison social</th>
                            <th>Adresse</th>
                            <th>Code postal</th>
                            <th>Ville</th>
                            <th>Tel</th>
                            <th>Region</th>
                            <th>Email</th>
                            <th colspan="2">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($clients as $client)
                            <tr>
                                <td>{{$client['id']}}</td>
                                <td>{{$client['raison_social']}}</td>
                                <td>{{$client['adresse']}}</td>
                                <td>{{$client['code_postal']}}</td>
                                <td>{{$client['ville']}}</td>
                                <td>{{$client['tel']}}</td>
                                <td>{{$client['region']}}</td>
                                <td>{{$client['email']}}</td>
                                <td><a href="#" class="btn btn-warning">Edit</a></td>
                                <td>
                                    <form action="#" method="post">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection

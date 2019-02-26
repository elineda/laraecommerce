@extends('layouts.app')

@section('content')

    <div class="container">
        <h1> Panier</h1>
        <table class="table table-bordered table-condensed">
            <tbody>

            @foreach($listes as $liste)
                <tr>

                    <td>{{$liste->id}}</td>
                    <td>{{$liste->prix}} €</td>
                    <td>{{$liste->description}}</td>
                    <td>{{$liste->count}}</td>
                    <td><a style="margin-left: 33%;" href="/laralecommerce/public/panier/s/{{$liste->id}}"><button type="button" class="btn btn-danger">supprimer</button></a></td>
                </tr>
            @endforeach

            </tbody>
        </table>

        <a style="margin-left: 33%;" href="/laralecommerce/public/panier/g"><button type="button" class="btn btn-dark">achat</button></a>

    </div>



@endsection

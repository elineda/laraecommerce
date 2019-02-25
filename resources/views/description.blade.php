@extends('layouts.app')

@section('content')


    <div class="card move">
        <img class="card-img-top" src="/laralecommerce/public/img/{{$produit->photo}}" alt="Card image cap">
        <div class="card-body cat">
            <h5 class="card-title">{{$produit->nom}}</h5>
            <p class="card-text">{{$produit->description}}<br>Taille : {{$produit->taille}}<br>{{$produit->prix}} €<br>{{$produit->categorie}}</p>
            <a class="btn btn-outline-primary" href="/laralecommerce/public/description/{{$produit->id}}" role="button">Description</a>
            <a class="btn btn-outline-warning" href="/laralecommerce/public/panier/a/{{$produit->id}}" role="button">Panier</a>
        </div>
    </div>

@endsection
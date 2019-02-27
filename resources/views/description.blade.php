@extends('layouts.app')

@section('content')

    <div class="container desc">
        <div class="row">
            <div class="col-sm-6">
                <div class="card move card_img">

                    <img class="card-img-top" src="/laralecommerce/public/img/{{$produit->photo}}" alt="Card image cap">
                </div>

            </div>

                <div class="card-body cat">
                    <div class="cardx">
                    <div class="col-sm-6">
                        <h5 class="card-title">{{$produit->nom}}</h5>
                        <p class="card-text">{{$produit->description}}<br>Taille : {{$produit->taille}}<br>{{$produit->prix}} €<br>{{$produit->categorie}}</p>
                        <div class="detail">{{$produit->detail}}</div>
                        <br>
                        <a class="btn btn-outline-primary" href="/laralecommerce/public/description/{{$produit->id}}" role="button">Description</a>
                        <a class="btn btn-outline-warning" href="/laralecommerce/public/panier/a/{{$produit->id}}" role="button">Panier</a>
                    </div>
                    </div>
                </div>
        </div>

    </div>
    </div>
@endsection
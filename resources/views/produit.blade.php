@extends('layouts.app')

@section('content')




    <main>




        <div class="container">
            <H1>Produits</H1>

            <div class="card-columns">

                @foreach($produits as $produit)

                <div class="card move">
                    <img class="card-img-top" src="/laralecommerce/public/img/{{$produit->photo}}" alt="Card image cap">
                    <div class="card-body cat">
                        <h5 class="card-title">{{$produit->nom}}</h5>
                        <p class="card-text">{{$produit->description}}<br>Taille : {{$produit->taille}}<br>{{$produit->prix}} €</p>
                        <a class="btn btn-outline-primary" href="/laralecommerce/public/description/{{$produit->id}}" role="button">Description</a>
                        <a class="btn btn-outline-danger" href="/laralecommerce/public/panier/a/{{$produit->id}}" role="button">Panier</a>
                    </div>
                </div>

                @endforeach






            </div>

        </div>

    </main>

@endsection

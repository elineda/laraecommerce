<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index()
    {

        $produits=\App\Produit::take(20)->get();

        //return $produits;
        return view('produit')->withProduits($produits);
    }
}

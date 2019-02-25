<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanierController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $id=\Auth::user()->id;
        $paniers=\App\Panier::where('user_id',$id)->get();
        $listes=[];
        foreach ($paniers as $panier){
            $produits=\App\Produit::where('id',$panier->produit_id)->get();
            foreach ($produits as $produit) {
                array_push($listes,$produit);
            }

        }
        return view('panier')->withListes($listes);
    }
}

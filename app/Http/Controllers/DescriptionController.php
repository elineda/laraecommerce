<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DescriptionController extends Controller
{

    public function index($idp){
        $produit=\App\Produit::where('id',$idp)->get();
        //return $produit;
        return view('description')->withProduit($produit[0]);
    }



}

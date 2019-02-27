<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProdAddAPI;

class ProdControllerAPI extends Controller
{
    public function all(){
        $produits=\App\Produit::all();
        return $produits;
    }
    public function get($id){
        $produits=\App\Produit::where('id',$id)->get();
        return $produits[0];
    }
    public function add(Request $request){
        $produit=new \App\Produit;
        $produit->nom=$request->nom;
        $produit->description=$request->description;
        $produit->prix=$request->prix;
        $produit->photo=$request->photo;
        $produit->taille=$request->taille;
        $produit->categorie=$request->categorie;
        $produit->detail=$request->detail;
        $produit->save();
        return $produit;

    }
    public function modi(Request $request,$id){
        $produit=\App\Produit::findOrFail($id);
        $produit->update($request->all());
        return $produit;
    }
    public function del($id){
        $produit=\App\Produit::where('id',$id)->delete();
        return 204;
    }
}

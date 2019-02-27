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
        $paniers=\App\Panier::select('produit_id')->distinct()->where('user_id',$id)->get();
        $listes=[];
        foreach ($paniers as $panier){
            $produits=\App\Produit::where('id',$panier->produit_id)->get();
            foreach ($produits as $produit) {
                $count=\App\Panier::where('user_id',$id)->where('produit_id',$produit->id)->count();
                $produit->count=$count;
                array_push($listes,$produit);
            }

        }
        //return $listes;
        $total=\App\Panier::where('user_id',$id)->sum('prix');
        return view('panier')->withListes($listes)->withTotal($total);
    }
    public function supp($idp){
        $idu=\Auth::user()->id;
        $supp=\App\Panier::where('produit_id',$idp)->where('user_id',$idu)->delete();
        return redirect('/panier');
    }
    public function add($idp){
        $idu=\Auth::user()->id;
        $prod=\App\Produit::where('id',$idp)->get();
        $add=new \App\Panier;
        $add->produit_id=$idp;
        $add->user_id=$idu;
        $add->prix=$prod[0]->prix;
        $add->save();
        return redirect('/panier');
    }
    public function achat(){
        $idu=\Auth::user()->id;
        $paniers=\App\Panier::where('user_id',$idu)->get();
        foreach ($paniers as $panier){
            $ach=new \App\Achat;
            $ach->produit_id=$panier->produit_id;
            $ach->user_id=$panier->user_id;
            $ach->save();
        }
        $paniers=\App\Panier::where('user_id',$idu)->delete();
        return redirect('/panier');
    }
}

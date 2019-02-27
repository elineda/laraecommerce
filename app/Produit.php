<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    public function paniers(){
        return  $this->hasMany('App\Panier');
    }
    public function achats(){
        return $this->hasMany('App\Achat');
    }
    protected $fillable = ['nom', 'description'];
}

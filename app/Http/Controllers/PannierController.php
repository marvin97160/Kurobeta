<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produit;

class PannierController extends Controller
{
    public function index(){
        $produits = Produit::all();
        return view('/pannier', compact('produits'));
    }
     public function show($id)
          {
              $produit = Produit::where('id', $id)->first();
              return view('/pannier')->with('produit' , $produit);
            
          }
}

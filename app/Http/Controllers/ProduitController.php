<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produit;

class ProduitController extends Controller
{
    public function index() {
        $produits = Produit::all();
        return view ('index',compact('produits'));
    }

    public function show($id)
    {
       
        $produit = Produit::where('id', $id)->first();
        return view('/produit')->with('produit' , $produit);
    }

     

    

   
}

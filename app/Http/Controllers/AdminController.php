<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produit;


class AdminController extends Controller
{
     public function index() {
         $produits = Produit::all();
         return view ('/admin',compact('produits'));
        
    }

    public function store(Request $request){

        $request->validate([
            'nom' => 'required|max:255|min:3',
            'description' => 'required|max:500|min:20',
            'prix_ht' => 'required|max:255|min:3',
            'photo' => 'required|max:255|min:3',
        ]);
           print_r($request->input());
            $produit = new produit();
            $produit->nom = $request->input('nom');
            $produit->description=$request->input('description');
            $produit->prix_ht=$request->input('prix_ht');
            $produit->photo=$request->input('photo');
            $produit->save();
            return redirect()->route("/admin");

    }
    public function destroy(){
        
    }
}

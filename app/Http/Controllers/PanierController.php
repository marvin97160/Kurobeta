<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class PanierController extends Controller
{
    //visualisation du panier
    public function show() {
        return view("panier.show");
    }

    // ajouter au panier dans la session
    public function add($id, Request $request){

        //On insère L'id du produit dans une varible $produit
        $produit = Produit::where('id', $id)->first();
        //select * from Produits where id = $id;
        //on genère une session
        $panier = session()->get("panier");

        // On insère la colone nom et prix san sla variable detail.
		$details_produit = [
			'nom' => $produit->nom,
			'prix_ht' => $produit->prix_ht,
            'quantite' => $request->quantite,
            'total' => $produit->prix_ht * $request->quantite
            
		];

		$panier[$produit->id] = $details_produit; // On ajoute ou on met à jour le produit au panier
		session()->put("panier", $panier); // On enregistre le panier

        return redirect()->route("index");        
     
    }   
    /*key : items
    [0] : ['nom': 'xxxx', 'prix_ht': 9];
    [1] : ['nom'; 'yyyyy', 'prix_ht': 10];*/

    public function destroy($id){
       //Recuperation de la session pour le panier
        $panier = session()->get("panier");
        // enelever du tableau panier l element qui a l element id
        unset($panier[$id]);
        // Mise à jour de la variable panier de la session
        session()->put("panier", $panier);

        return back();
       // return redirect()->route("panier.show");   
        //La methode put fait une mise a jour    
    }

    public function empty(){
    //on crée un formulaire pour inserer la quantiter dans la session

    
     session()->forget("panier");  
     return back();
    }
}

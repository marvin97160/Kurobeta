<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Produit;


class PaymentController extends Controller
{
    public function index(){

    //    $produit = Produit::find('prix_ht');
       return view('payment.show');
                
    }

    public function store(Request $request){

        print_r($request->input());
            $Users = new user;
            $Users-> nom = $request->input('nom');
            $Users-> prenom = $request->input('prenom');
            $Users-> email = $request->input('email');
            $Users-> adresse = $request->input('adresse');
            $Users-> postale = $request->input('postale');
            $Users-> ville = $request->input('ville');
            $Users-> telephone = $request->input('telephone');
            $Users-> appartement = $request->input('appartement');
            $Users-> password = $request->input('password');
            $Users->save();
           
            return redirect('payment');
    }
        public function add($id){
        //On insère L'id du produit dans une varible $produit
        $produit = Produit::where('id', $id)->first();
        //on genère une session
        $panier = session()->get("panier");
        // On insère la colone nom et prix san sla variable detail.
		$details_produit = [
			'nom' => $produit->nom,
			'prix_ht' => $produit->prix_ht,
		];

		$panier[$produit->id] = $details_produit; // On ajoute ou on met à jour le produit au panier
		session()->put("panier", $panier); // On enregistre le panier

        return redirect()->route("payment.show");        
     
    }   

    public function total(){

    // on recupere dabord l'atribut que l'on souhaite aditionner
    //On aditionne les atribut
    //on sauvegarde le resultat
    }
       
}

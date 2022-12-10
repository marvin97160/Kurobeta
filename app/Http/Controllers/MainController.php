<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produit;

class MainController extends Controller
{
    public function index() {
        $produits = Produit::all();
       
        return view ('index',compact('produits'));
    //      $produits = Produit::get();
    // return view('index')->with('produit',$produits);
    }
}
 
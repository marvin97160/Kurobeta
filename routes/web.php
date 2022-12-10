<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminiController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\PannierController;
use App\Http\Controllers\PaymentController;
use App\Models\Produit;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Gestion de l'admin
Route::get('/admin', 'AdminiController@index')->name('/admin'); 
Route::post('/admin', 'AdminiController@store')->name('/admin');
Route::delete('/admin/{id}', [AdminiController::class, 'destroy'])->name('/admin');

// GESTION DES PRODUITS
Route::get('/produit/{id}', [ProduitController::class, 'show']);
Route::get('/index', 'ProduitController@index')->name('index');



// Gestion des panier
Route::post('panier/add/{product}', "PanierController@add")->name('panier.add');
Route::get('panier/remove/{product}', "PanierController@destroy")->name('panier.remove');
Route::get('panier/empty',"PanierController@empty")->name('panier.empty');
Route::get('panier', "PanierController@show")->name('panier.show');

//Procedure de payment
Route::get('payment',"PaymentController@index")->name('payment.show');
Route::post('payment',"PaymentController@store")->name('payment');
Route::post('payment/{product}', "PaymentController@add")->name('payment.show');




Route::get('/pannier',['PannierController@index'])->name('pannier');
Route::get('/pannier/{id}',[PannierController::class,'show'])->name('pannier');




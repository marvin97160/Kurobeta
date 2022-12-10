<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $produit = new \App\Produit();
        // $produit->nom = "singe";
        // $produit->description = "Lorem ipsum";
        // $produit->prix_ht = 25;
        // $produit->photo = 'mockup.png';
        // $produit->save();
        Produit::create([
            'nom' => 'Post 1',
            'description' => 'Description for post 1',
            'prix_ht' => 25,
            'photo' => 'mockup1.png',
        ]);
         Produit::create([
            'nom' => 'Post 2',
            'description' => 'Description for post 2',
            'prix_ht' => 25,
            'photo' => 'mockup2.png',
        ]);
         Produit::create([
            'nom' => 'Post 3',
            'description' => 'Description for post 3',
            'prix_ht' => 24,
            'photo' => 'mockup3.png',
        ]);
         Produit::create([
            'nom' => 'Post 4',
            'description' => 'Description for post 2',
            'prix_ht' => 23,
            'photo' => 'mockup4.png',
        ]);
         Produit::create([
            'nom' => 'Post 5',
            'description' => 'Description for post 5',
            'prix_ht' => 21,
            'photo' => 'mockup5.png',
        ]);
        Produit::create([
            'nom' => 'Post 6',
            'description' => 'Description for post 6',
            'prix_ht' => 20,
            'photo' => 'mockup6.png',
        ]);
        
    }
}

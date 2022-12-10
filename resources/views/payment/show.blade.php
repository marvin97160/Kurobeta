<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link rel="stylesheet" href="{{ asset('css/expedition.css') }}" />
    <title>Document</title>
  </head>
  <body>
    <h1>Kuro</h1>
    <!-- input long -->
   
<form class="form" method="{{'post'}}" action="{{ url ('payment')}}">
        @csrf
        @method('POST')
      
      <div>
        <label   class="label"> Email </label>
        <input type="email" class="input-long"name="email">
      </div>
      <!-- input court-->
    <div class="input-court">     
        <label  class="label"  >Nom :</label>
        <input type="nom" id="name" name="nom"class="input-style" />
    </div>
    <div class="input-séparation"> 
        <label class="label" >Prenom :</label>
        <input type="prenom" id="name" name="prenom" class="input-style" />
    </div>
      <!-- input long -->
      <div>
        <label class="label">Adresse :</label>
        <input type="adresse" class="input-long" name="adresse" />
      </div>
      <div>
        <label  class="label">Appartement :</label>
        <input type="appartement" class="input-long" name="appartement" />
      </div>
      <!-- input court-->
      <div class="input-court">
        <label>Code Postale :</label>
        <input type="postale" id="name" name="postale" class="input-style" />   
      </div>
        <div class="input-séparation">
            <label>Ville :</label>
            <input type="ville" id="name" name="ville" class="input-style" />
       </div>
      <div>
        <label  class="label">Téléphone :</label>
        <input type="telephone" class="input-long" name="telephone" />
      </div>
      <div>
        <label  class="label">Password :</label>
        <input type="password" class="input-long" name="password" />
      </div>
     
      <button type="submit" class="bouton"> Continuer vesr L'expedition</button>
    </form>
    
    <!-- bouton -->
   
      <!-- <button
        type="submit"
        class="bouton"
        onclick="window.location.href ='panier' ;"
      >
        Retour au Panier
      </button> -->
    </div>
    <!-- separztion -->
    
      <section id="liste-produit">
      @if (session()->has("panier"))
                @foreach (session("panier") as $key => $item)
                 <div class="rangement-liste">
                    <img src=".//Image/collection/collection1.PNG" alt="" id="img" />
                    <h6 class="ref">Bosuto</h6>
                    <h6 class="ref">{{ $item['nom'] }}</h6>
                    <h6 class="ref">/</h6>
                    <h6 class="ref">Noir</h6>
                    <h6 class="ref">/</h6>
                    <h6 class="ref">S</h6>
                    <p class="ref">{{ $item['prix_ht'] }}</p>
                     <h6 class="ref">/</h6>
                    <h6 class="ref">{{ $item['quantite'] }}</h6>
                   </div>    
                @endforeach
     @endif
    </section>
 @if (session()->has("panier"))
    <section id="section-tt">
      <div>
        <div id="total1">
          <p>Taxes</p>
        </div>
        <div id="total">
          <p>50 euro</p>
        </div>
      </div>
    </section>
    <section id="section-tt1">
      <div>
        <div id="total1">
          <p>Livraison</p>
        </div>
        <div id="total">
          <p>Gratuit</p>
        </div>
      </div>
    </section>

    <section id="section-tt2">
      <div>
        <div id="total1">
          <p>Total</p>
           
        </div>
        <div id="total">
           
         <p class="ref">{{ $item['prix_ht'] }}</p>
       

 
        </div>
      </div>
    </section>
  @endif
  </body>
</html>

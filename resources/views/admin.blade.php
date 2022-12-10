<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
    <script
      rel="stylesheet"
      type="text/javascript"
      src="./js/jQuery.js"
    ></script>
    <script
      rel="stylesheet"
      type="text/javascript"
      src="./js/panier.js"
    ></script>
    <title>KuroIntegration</title>
  </head>
  <body>
    <!-- balise de titre -->
    <header id="Menu">
      <div>
        <a href="../Accueil/Index.html" id="Titre-M"><h1>Kuro</h1></a>
      </div>
      <div id="Sous-titre">
        <h4># ブラック ベリエ</h4>
      </div>
      <div id="Lien-M">
        <a href="{{ url('/index') }}" class="Lien-menu1">index</a>
        
      </div>
    </header>
   
<div id="form">
<form method="{{'post'}}" action="{{ url ('/admin')}}"  >
  @csrf
  @method('POST')
    <title id="titre-adm">Ajout  t-shirt</title>
      <div class="section-div">
        <ul class="label">
          <label for="nom">Nom</label>
        </ul>
        <ul class="input">
          <input name ="nom"class="input1"type="text"class="@error('title') is-invalid @enderror">
        </ul>
      </div>
        <div class="section-div">
          <ul class="label">
            <label for="">Prix</label>
          </ul>
          <ul class="input">
            <input name="prix_ht" class="input1" type="number" />
          </ul>
        </div>
          <div class="section-div">
            <ul class="label">
              <label for="">description</label>
            </ul>
            <ul class="input">
              <input name="description" class="input1" type="textarea" />
            </ul>
          </div>
            <div class="section-div">
            <ul class="label">
              <label for="">stock</label>
            </ul>
            <ul class="input">
              <input name="stock" class="input1" type="number" />
            </ul>
            </div>
           <div class="section-div">
             <ul class="label">
              <label for="">photo</label>
            </ul>
            <ul class="input">
              <input name="photo" class="input1" type="textarea" />
            </ul>
      
            
            <button type="submit"  id="button">Valider</button>
</form>
</div>
</div>
  
    
      
        <div id="info">
            @foreach( $produits as $produit)
              <h4 class="div1b">{{$produit->nom}}</h4>
              <h4 class="div1b">{{$produit->prix}}</h4>
            <div>
              <div class="div1b"><button class="button1">Modifier</button></div> 
              <form method="post" action="{{ url ( '/admin' , $produit->id) }}">
              @csrf
              @method('DELETE')
              <div class="div1b"><button type="submit" class="button1">Supprimer</button></div> 
               </form>
              </div>
              @endforeach
        </div>
     
      
    
  </body>
</html>

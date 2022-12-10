<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script rel="stylesheet"type="text/javascript"src="{{ url('js/jQuery.js') }}"></script>
    <script rel="stylesheet"type="text/javascript"src="{{ url('js/pannier.js') }}"></script>

    <title>Document</title>
</head>
<body>
     <!-- !-- Pannier -->
    <div id="container-panier">
      <h1 id="panier-titre">Panier:</h1>
  
       <section id="liste-produit">
          <div class="rangement-liste">
        <img src="{{ secure_asset('img/collection1.PNG') }}" alt="" id="img" />
        <h6 class="ref">{{$produit->nom}}</h6>
        <h6 class="ref">T-shirt</h6>
        <h6 class="ref">/</h6>
        <h6 class="ref">S</h6>
        <p class="ref">{{$produit->prix_ht}}</p>
       </section>
  
     <div id="div-bouton">
      <button
        type="button"
        class="bouton"
        onclick="window.location.href = './expedition.html';"
      >
        Procedure de payement
      </button>
</body>
</html>
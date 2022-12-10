<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <script rel="stylesheet"type="text/javascript"src="{{ url('js/jQuery.js') }}"></script>
    <script rel="stylesheet"type="text/javascript"src="{{ url('js/pannier.js') }}"></script>
    <title>Document</title>
</head>
<body>
     <header id="Menu">
      <div >
        <a href="../Accueil/Index.html" id="Titre-M"><h1>Kuro</h1></a>
      </div>
      <div id="Sous-titre">
        <h4># ブラック ベリエ</h4>
      </div>
      <div id="Lien-M">
        <a href="{{ url('/admin') }}" class="Lien-menu1">admin</a>
      </div>
      <div id="Img-M">
        <img src="../Image/zero_3.jpg" alt="" />
      </div>
    </header>
    <!-- Debut de la nav -->
   <div id="nav">
        <p id="nav-H">Sprint</p>
        <div>
         <img src="{{ url('img/enveloppe.png') }}" alt="" id="nav-I" />
        </div>
      </div>
    </nav>
    <!-- !-- Pannier -->
    <div id="container-panier">
      <h1 id="panier-titre">Panier:</h1>
      <!-- <p id="panier-text">votre panier est vide</p> -->
      <section id="liste-produit">
         @if (session()->has("panier"))
           @php $total_global = 0 @endphp
          @foreach (session("panier") as $key => $item)
    @php $total_global +=   $item['total']  @endphp
            <div class="rangement-liste">
          <img src="../Image/collection/collection1.PNG" alt="" id="img" />
          <h6 class="ref"> {{ $item['nom'] }}</h6>
          <h6 class="ref">T-shirt</h6>
          <h6 class="ref">{{ $item['quantite'] }} </h6>
          <p class="ref">{{ $item['prix_ht'] }}</p>
          <h6 class="ref">{{ $item['total']}} Euros</h6>
          <div>
          <td><a href="{{ route('panier.remove', $key) }}" >Retirer</a></td>
          </div>
        </div>
         @endforeach
      </section>
     
      <td>{{ $total_global }}</td>
     @else
        <div>Aucun produit</div>
     @endif

     <div id="div-bouton">
      <a
        type="button"
        class="bouton"
        href="{{ route('payment') }}">
        Procèdure de payement
      </a>

      <div>
       <a href="{{ route('panier.empty') }}">Vider le panier</a>
      </div>
      
      <!-- <button
        type="button" onclick="location.href='{{ url("'payment'") }}'">
        Procedure de payement
      </button>-->
    </div>
    </div>
<!-- Fin du panier -->
    <nav id="nav-B">
      <p id="dièse">K</p>
      <p class="nav-T-B">黒</p>
      <p class="nav-T-B">い</p>
      <p class="nav-T-B">ベ</p>
      <p class="nav-T-B">リ</p>
      <p class="nav-T-B">エ</p>
    </nav>
    <!-- Fin de la nav -->
    <section id="sprint-1">
      <a href="">
        <aside class="Sprint">
          <img
            src="{{ asset('img/collection1.PNG') }}"alt=""class="image-1"/>
          <h4 class="sprint-text"> Date</h4>
        </aside>
      </a>
      <a href="">
        <aside class="Sprint">
          <img
            src="../Image/textile2.jpg"
            alt=""
            class="image-1"
          />
          <h4 class="sprint-text">Couleur</h4>
        </aside>
      </a>
      <a href="">
        <aside class="Sprint">
          <img src="../Image/textile3.jpg" alt="" class="image-1" />
          <h4 class="sprint-text"> Lettre</h4>
        </aside>
      </a>
      <a href="">
        <aside class="Sprint">
          <img
            src="../Image/textile4.jpg"
            alt=""
            class="image-1"
          />
          <h4 class="sprint-text">Prix</h4>
        </aside>
      </a>  
    </section>
    <!-- Formulaire -->
        <form action="" method='' id="formulaire">
         
          <div class="Placement-f">
              <label for="Suggestion" id="Suggestion">Suggestion</label>
          </div>
          <div class="Placement-f">
            <input type="text" name="Suggestion" placeholder="Manga" class="style-f" >
          </div>
            <div class="Placement-f">
              <input type="text" name="Suggestion" placeholder="" class="style-f">
          </div>
          <div class="Placement-f">
              <input type="text" name="Suggestion" placeholder="Decription  " class="style-f">
          </div>
            <div  >
              <button  id="form-b">Valider</button >
            </div>
        </form> 
<!-- Contient les venetement -->

    <section id="content1">
      @foreach($produits as $produit)
      <div class="box" > 
        <a href="{{ url('/produit' , $produit->id ) }}" >
        <img src="{{ asset('img/collection/collection1.PNG') }}" alt=""class="box-image">
        <p class="box-text">
        {{ $produit->nom }}
        </p>
        </a>
      </div>
     @endforeach
    </section>
 

</body>
</html>
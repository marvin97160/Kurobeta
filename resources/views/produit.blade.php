<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <script rel="stylesheet"type="text/javascript"src="{{ url('js/jQuery.js') }}"></script>
    <script rel="stylesheet"type="text/javascript"src="{{ url('js/pannier.js') }}"></script>
     <link rel="stylesheet" href="{{ asset('css/produit.css') }}" />
    <title>vetement</title>
  </head>

  <body>
   <div id="nav">
        <div>
          <img src="{{ url('img/enveloppe.png') }}" alt="" id="nav-I" />
        </div>
      </div>
    </nav>
    <!-- !-- Pannier -->
    
    </div>
    </div>
     <header id="Menu">
      <div>
        <a href="../Accueil/Index.html" id="Titre-M"><h1>Kuro</h1></a>
      </div>
      <div id="Sous-titre">
        <h4># ブラック ベリエ</h4>
      </div>
      <div id="Lien-M">
        <a href="{{ url('/index') }}" class="Lien-menu1">index</a>
</header>
</div>
    </div>
    </div>
<section id="liste-vetement">
  <img src="{{url ('img/collection/collection1.PNG')}}" alt="" class="liste-vetement1">
  <img src="{{url ('img/collection/collection1.PNG')}}" alt="" class="liste-vetement1">
</section>

<!-- Image vetement -->
 <div id="container-panier">
  
      <h1 id="panier-titre">Panier:</h1>
    @if (session()->has("panier"))
    @php $total_global = 0 @endphp
      <section id="liste-produit">
         <table  class="table">
            <thead>
                <tr>
                    <th >image</th>
                    <th >Nom</th>
                    <th >Prix</th>
                    <th >Quantité</th>
                    <th >Total</th> 
                </tr>
            </thead>
        </table>
          @foreach (session("panier") as $key => $item)
    @php $total_global +=   $item['total']  @endphp
            <div class="rangement-liste">
          <img src="../Image/collection/collection1.PNG" alt="" id="img" />
          <h6 class="ref"> {{ $item['nom'] }}</h6>
          <h6 class="ref">{{ $item['quantite'] }} </h6>
          <p class="ref">{{ $item['prix_ht'] }}</p>
          <h6 class="ref">{{ $item['total']}} Euros</h6>
          <div>
            <td><a href="{{ route('panier.remove', $key) }}" >
            Retirer</a></td>
          </div>
        </div>
        <div>
        <td>{{ $total_global }}</td>
      </div>
         @endforeach
      </section>
     @else
        <div>Aucun produit</div>
    

     <div id="div-bouton">
      <button
        type="button"
        class="bouton"
        href="{{ route('payment') }}">
        Procèdure de payement
      </button>
      
      <div>
         @endif
       <a href="{{ route('panier.empty') }}">Vider le panier</a>
      </div>
      
      <!-- <button
        type="button" onclick="location.href='{{ url("'payment'") }}'">
        Procedure de payement
      </button>-->
    </div>
    </div>
<!-- Fin du panier -->








<section id="liste-description">
  <div id="liste-text">
    <div>
      <h1>{{ $produit->nom }}</h1>
      <h3 id="Prix">{{ $produit->prix_ht }}</h3>
    </div>
    <div >
      <h2>Type</h2>
      <div class="liste-row" >
        <p>T-shirt</p>
        <p>Hoodie</p>
        <p>Crewneck</p>
      </div>
    </div>
    <div>
      <h1>Taille</h1>
      <div class="liste-row" >
        <p>S</p>
        <p>M</p>
        <p>L</p>
        <p>Xl</p>
      </div>
    </div>
    <div>
      <h1>Couleur</h1>
         <div class="liste-row" >
          <p>white</p>
          <p>Black</p>
         </div>
    </div>
    <div>
    <!-- //cree un formulaire de type post avec laction  action ajout -->
    <form action="{{ route('panier.add', $produit->id) }}" method="POST">
        	{{ csrf_field() }}
          <div>
              <input type="number" name="quantite" class="form-control" placeholder="quantité">
          </div>
        <button type="submit" class="btn btn-warning"> Ajouté au panier</button>
      </form>
    </div>

    <h1>Information produit</h1>
    <div id="liste-desc">
    
      
      <p>-Coton</p>
      <p>-Lavage 30dg</p>
      <p>{{$produit->description}}</p>
      </div>
  </div>
 

   <nav id="nav-B">
      <p id="dièse">#</p>
      <p class="nav-T-B">黒</p>
      <p class="nav-T-B">い</p>
      <p class="nav-T-B">ベ</p>
      <p class="nav-T-B">リ</p>
      <p class="nav-T-B">エ</p>
    </nav>
     

</section>
</html>

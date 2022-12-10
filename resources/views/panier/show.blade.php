<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if (session()->has("panier"))
        <h1>Mon panier choisi</h1>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prix</th>
                    <th>Quantité</th>
                    <th>Total</th>
                     <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php $total_global = 0 @endphp
                @foreach (session("panier") as $key => $item)
                    @php $total_global +=   $item['total']  @endphp
                    <tr>
                        <div>
                            <td> {{ $item['nom'] }}</td> 
                        </div>
                        <div>
                            <td> {{ $item['prix_ht'] }}</td> 
                        </div>
                    
                        <div>
                            <td>{{ $item['quantite'] }}  </td> 
                        </div>
                        <div>
                            <td>{{ $item['total']}} Euros</td> 
                        </div>
                        <div>
                            <td><a href="{{ route('panier.remove', $key) }}" >Retirer</a></td>
                        </div>
                    </tr>
                @endforeach
                <tr>
                    <td>
                        total:
                    </td>
                    <td>
                        {{ $total_global }}
                    </td>
                </tr>
            </tbody>
        </table>
        <div>
       <a href="{{ route('panier.empty') }}">Vider le panier</a>
        </div>
    @else
        <div>Aucun produit</div>
    @endif
    <a href="{{ route('payment') }}">procedure de paiment</a>

</body>
</html>
<!-- <section id="liste-produit">
          <div class="rangement-liste">
        <img src="../Image/collection/collection1.PNG" alt="" id="img" />
        <h6 class="ref">Bosuto</h6>
        <h6 class="ref">T-shirt</h6>
        <h6 class="ref">/</h6>
        <h6 class="ref">S</h6>
        <p class="ref">30.00 e</p>
      </div>
       </section> -->


@extends('layouts.layout1')

@section('title', 'Page Title')

@section('content')
    <h1>Panier de fruits</h1>

	<table>
  <tr>
    <td>id</td>
    <td>fruit</td>
    <td>Prix</td>
    <td>Quantité</td>
    <td>Total</td>
  </tr>
  <tr>
    <td>{{$id}}</td>
    <td>{{$name}}</td>
    <td>{{$prix}}</td>
    <td>{{$quantité}}</td>
    <td></td>
  </tr>
  
</table>

<button class="positive ui right attached button" ><a href="/">Ajout Prix</a></button>
<button class="negative ui right attached button"><a href="/">Suprimme Prix</a></button>
<button class="positive ui right attached button" ><a href="/addQuant" >Ajout Quantité</a></button>
<button class="negative ui right attached button"><a href="/delQuant">Suprimme Quantité</a></button>
@endsection
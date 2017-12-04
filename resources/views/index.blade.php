<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Paniers de fruits </title>
	<link rel="stylesheet" href="../css/app.css">
</head>
<body>
	

</body>
</html>


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
@endsection
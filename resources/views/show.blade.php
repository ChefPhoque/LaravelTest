<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vestes</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div class="container">
    <h1 class="title">Affichage des informations de la veste N°{{$jacketid->id}} :</h1>

    <div class="info">
        <p><strong>Nom de la veste :</strong> {{$jacketid->name}}</p>
        <p><strong>Taille de la veste :</strong> {{$jacketid->taille}}</p>
        <p><strong>Prix de la veste :</strong> {{$jacketid->price}} €</p>
        <img src="{{$jacketid->image}}" alt="Image de la veste {{$jacketid->image}}" class="jacket-image">
    </div>

    <form action="{{ route('jacket.index') }}" class="back-form">
        <button type="submit" class="back-button">Retour</button>
    </form>
</div>
</body>
</html>



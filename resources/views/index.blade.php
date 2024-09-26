<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vestes</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>

    <h1 align="center">Affichage de toutes les vestes :</h1>
    <br>

    <table>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Taille</th>
            <th>Prix</th>
            <th>Date de sortie</th>
            <th>Voir informations</th>
        </tr>

    @foreach($jackets as $jacket)
        <tr>
            <td align="center"> {{ $jacket->id }}</td>
            <td align="center"> {{ $jacket->name }}</td>
            <td align="center"> {{ $jacket->taille }}</td>
            <td align="center"> {{ $jacket->price }}</td>
            <td align="center"> {{ $jacket->release_date }}</td>
            <td align="center"><a href="/jacket/{{ $jacket->id }}">Voir informations</a></td>
        </tr>
    @endforeach

    </table>
</body>
</html>

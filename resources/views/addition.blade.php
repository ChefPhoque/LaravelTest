<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonjour</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

Addition des deux nombres {{ $chiffre1 }} et {{ $chiffre2 }} : {{ $chiffre1 }} + {{ $chiffre2 }} = {{ $add }}
</body>
</html>

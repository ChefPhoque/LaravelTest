<!DOCTYPE html>
<html>
<head>
        <title>Création vestes</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="stylecreate.css" type="text/css">
</head>
<body>
<form action="{{ route('jacket.create')}}" method="POST" enctype="multipart/form-data">
    @csrf

    Nom de la veste :<input value='{{old('name')}}' type="text" name="name">
    @error('name') <p class="text-sm text-red-500">{{ $message }}</p> @enderror

    <br><br>
    Taille de la veste : <input value='{{old('taille')}} ' type="text" name="taille">
    @error('taille') <p class="text-sm text-red-500">{{ $message }}</p> @enderror

    <br><br>
    Prix de la veste <input value='{{old('price')}} ' type="text" name="price">
    @error('price') <p class="text-sm text-red-500">{{ $message }}</p> @enderror

    <br><br>
    Date de sortie de la veste : <input value='{{old('release_date')}} ' type="date" name="release_date">
    @error('release_date') <p class="text-sm text-red-500">{{ $message }}</p> @enderror

    <br><br>
    Image de la veste : <input value='{{old('image')}} ' type="text" name="image">
    @error('image') <p class="text-sm text-red-500">{{ $message }}</p> @enderror

    <br><br>
    <button type="submit">Créer</button>
</form>
</body>
</html>

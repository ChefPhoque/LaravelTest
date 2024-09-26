<?php
/*
use Illuminate\Support\Facades\Route;
use App\Models\Jacket;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    // Aller chercher des données avec le model
//    $username = 'Zab';
//    $motdepasse = '';
    // Envoyer ces données à la vue
//    return view('home', compact('username'[
//        'user' => $username,
//        'mdp' => $motdepasse
//    ]);
});

Route::get('/bonjour/{username}', function ($username) {
    return view('bonjour', compact('username'));
});

Route::get('/addition/{chiffre1}/{chiffre2}', function ($chiffre1, $chiffre2) {
    $add = $chiffre1 + $chiffre2;
    return view('addition', compact('chiffre1','chiffre2', 'add'));
});

Route::get('/jackets', function () {
    $jackets = Jacket::all();
    return view('index', compact('jackets'));
});

Route::post('/jackets/create', function () {
   return view('create');
});

Route::get('/jackets/{id}', function($id) {
    $jacket = Jacket::find($id);
    return view('show', compact('jacket'));
});

// store
Route::post('/jackets', function() {
    dd(request());
});

Route::post('/jackets', function() {
    $j = new Jacket;
    $j->name = request('name');
    $j->taille = request('taille');
    $j->price = request('price');
    $j->release_date = request('release_date');
});
 */


use \App\Models\Jacket;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Addition/{numero1}/{numero2}', function ($numero1, $numero2) {
    return view('Addition', compact(['numero1', 'numero2']));
});

Route::get('/jacket/{id}', function ($id) {
    $jacketid = Jacket::findOrFail($id);
    return view('show', compact('jacketid'));
})->name('jacket.show');;

Route::get('/jackets', function () {
    $jackets = Jacket::all();
    return view('index', compact('jackets'));
})->name('jacket.index');

Route::get('create', function (){
    return view('create');
})->name('jacket.create');

Route::post('/jacket', function () {

    $validated = request()->validate([
        'name' => 'required',
        'taille' => 'required',
        'price' => 'required',
        'release_date' => 'required',
    ]);


    $j = new Jacket;
    $j->name = request('name');
    $j->taille = request('taille');
    $j->price = request('price');
    $j->release_date = request('release_date');
    $j->image = request('image');
    $j->save();

    return redirect('/jacket/'.$j->id);
})->name('jacket.create');

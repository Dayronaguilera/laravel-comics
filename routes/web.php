<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $comics = config('comics'); // creiamo la variabile che richiama il nostro array(database)
    
    return view('home', [
        'comics' => $comics // e facciamo ritornare la variabile da poter usare dove necessario - invia un argomento all'interno della funzione
    ]);
})->name('homepage'); //possiamo richiamare la nostra route all'interno di templates dandogli un nome

Route::get('/singleComics/{id}', function ($id) { // id e una variabile e la inviamo alla callback
    $comics = config('comics');

    return view('singleComics', [
        'id' => $id, //inviamo le nostre variabili al componente che le richiamera
        'comics' => $comics
    ]);
})->name('singleComics');
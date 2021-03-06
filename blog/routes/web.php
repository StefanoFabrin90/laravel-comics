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

// homepage
Route::get('/', function () {
    return view('home');
})->name('home');

// comics
Route::get('/comics', function () {
    // comics DB
    $comics = config('products-data');

    //dump($comics);

    return view('comics', [
        'cards' => $comics,
    ]);
})->name('comics');

//comics detail
Route::get('/product/{id}', function ($id) {
    // comics DB
    $comics = config('products-data');
    //dump($comics, $id);

    if (is_numeric($id) && $id >= 0 && $id < count($comics)) {
        $comic = $comics[$id];
    } else {
        abort(404);
    }

    return view('comic-detail', [
        'comic' => $comic,
    ]);
})->name('comic-detail');

// news
Route::get('/news', function () {
    return view('news');
})->name('news');

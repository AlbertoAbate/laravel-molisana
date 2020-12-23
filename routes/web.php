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
//homepage
Route::get('/', function () {

    $data = config('site-data');

    $lunghe = [];
    $corte = [];
    $cortissime = [];

    foreach ($data as $key => $card) {

        $card['id'] = $key;

        if ($card['tipo'] == 'lunga') {
            $lunghe[] = $card;
        }
        elseif ($card['tipo'] == 'corta') {
            $corte[] = $card;
        }
        elseif ($card['tipo'] == 'cortissima') {
            $cortissime[] = $card;
        }
    }
    //dd($lunghe, $corte, $cortissime);
    //dd($data); stampa l'array con il suo contenuto(tipo var_dump)

    //return view('home', [ 'lunghe' => $lunghe, 'corte' => $corte, 'cortissime' => $cortissime]);

    return view('home', compact('lunghe', 'corte', 'cortissime'));

})->name('home');



//product details
Route::get('/product/{id}', function ($id) {

    $data = config('site-data');
   
    $product = $data[$id];
    $length = count($data) - 1;

    return view('product', compact('product', 'id', 'length'));
})->name('product');



//news
Route::get('/our-news', function () {
    return view('news');
})->name('news');
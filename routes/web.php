<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('produtos', function () {
    return view('outras.produtos');

})->name('produtos');
Route::get('departamentos', function () {
    return view('outras.departamentos');
})->name('departamentos');

Route::resource('clientes', ClienteController::class);

Route:: get('opcoes/{opcao?}', function ($opcao = null){
    return view('outras.opcoes', compact(['opcao']));
})->name('opcoes');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

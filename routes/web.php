<?php

use Illuminate\Http\Request;
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

//Route::get('/contacto/{tipo?}', function ($tipo = "publico general") {
Route::get('/contacto/{tipo?}', function ($tipo = null) {
    //dd($tipo);
    return view('contacto', compact('tipo')); //Compact = 
    //return view('contacto')->with(['tipo' => $tipo]);
});

Route::post('/contacto', function (Request $request) {
    dd($request->comentario); //->nombre del campo LABEL sin () para especifico.  // ->all() para ver todos los campos
});
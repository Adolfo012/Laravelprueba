<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\TareaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\contacto;

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
/*Route::get('/contacto/{tipo?}', function ($tipo = null) {
    //dd($tipo);
    return view('contacto', compact('tipo')); //Compact = 
    //return view('contacto')->with(['tipo' => $tipo]);
}); */

Route::get('/contacto/{tipo?}', [FormController::class, 'contactoForm']); 
Route::post('/contacto', [FormController::class, 'contactoSave']);

Route::resource('tarea', TareaController::class);

/*Route::post('/contacto', function (Request $request) {
    dd($request->comentario); //->nombre del campo LABEL sin () para especifico.  // ->all() para ver todos los campos
});*/

/*Route::post('/contacto', function (Request $request) {
    $request->validate([
        'correo' => 'required|email',
        'comentario' => ['required', 'min:10', 'max:50'],
    ]);

    $contacto = new Contacto();
    $contacto->correo = $request->correo;
    $contacto->comentario = $request->comentario;
    $contacto->save();
    
    return redirect('/contacto');

});*/
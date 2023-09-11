<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function contactoForm($tipo = null) //GET
    {
        return view('contacto', compact('tipo')); 
    }

    public function  contactoSave(Request $request) //POST
    {
        $request->validate([
            'correo' => 'required|email',
            'comentario' => ['required', 'min:10', 'max:50'],
        ]);
        
        $contacto = new Contacto();
        $contacto->correo = $request->correo;
        $contacto->comentario = $request->comentario;
        $contacto->save();
    
    return redirect('/contacto');
    }
}

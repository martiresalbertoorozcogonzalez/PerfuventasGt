<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MensajesController extends Controller
{
    public function store()
    {
        $mensaje = request()->validate([
            'name' => 'required',
            'apellido' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
         ]); 

        //  Enviar emails
        Mail::to('martiresalbertoorozcogonzalez@gmail.com')->send(new MessageReceived($mensaje));

        return redirect()->route('contacto')->with('estado','La informacion se envio correctamente');
    }
}

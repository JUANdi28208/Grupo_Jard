<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactNotification;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefono' => 'required|string|max:20',
            'mensaje' => 'required|string|max:1000'
        ]);

        try {
            // Enviar correo electrónico
            Mail::to('tu-email@ejemplo.com')->send(new ContactNotification($request->all()));
            
            return redirect()->back()->with('success', '¡Mensaje enviado correctamente! Te contactaremos pronto.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Hubo un problema al enviar tu mensaje. Por favor, intenta nuevamente.');
        }
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    // Muestra el formulario de contacto
    public function showForm()
    {
        return view('contacto');
    }

    public function storeContact(Request $request)
{
    // Validar los datos del formulario
    $request->validate([
        'nombre' => 'required|max:255',
        'correo' => 'required|email',
        'asunto' => 'required|max:255',
        'mensaje' => 'required',
    ]);

    // Enviar los datos a la API de Spring Boot
    $response = Http::post('http://localhost:8082/api/contact', [
        'nombre' => $request->input('nombre'),
        'correo' => $request->input('correo'),
        'asunto' => $request->input('asunto'),
        'mensaje' => $request->input('mensaje'),
    ]);
    

    // Verificar la respuesta de la API
    if ($response->successful()) {
        return redirect()->route('contact.form')->with('success', 'Mensaje enviado exitosamente');
    } else {
        return redirect()->route('contact.form')->with('error', 'Hubo un problema al enviar el mensaje. Código de error: ' . $response->status());
    }
}

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller
{
    // Método para mostrar todos los contactos
    public function index()
    {
        // Hacer solicitud GET a la API para obtener los contactos
        $response = Http::get('http://localhost:8082/api/contacts');

        if ($response->successful()) {
            $contacts = $response->json(); // Obtener los contactos de la respuesta JSON
            return view('admin.index', compact('contacts'));
        }

        return response()->json(['error' => 'No se pudieron cargar los contactos'], 500);
    }

    // Método para eliminar un contacto por ID
    public function destroy($id)
    {
        // Enviar solicitud DELETE a la API de Spring Boot para eliminar un contacto
        $response = Http::delete("http://localhost:8082/api/contact/{$id}");

        if ($response->successful()) {
            // Redirigir con mensaje de éxito
            return redirect()->route('admin.index')->with('success', 'Contacto eliminado correctamente.');
        }

        // Si no se pudo eliminar, redirigir con mensaje de error
        return redirect()->route('admin.index')->with('error', 'No se pudo eliminar el contacto.');
    }
}

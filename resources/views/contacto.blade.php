@extends('layouts.app')

@section('title','Contacto')

@section('content')
    <div class="container">
        <header>
            <h1>Contacto</h1>
        </header>
        <main>
            <form class="contact-form">
                <input type="text" placeholder="Nombre" required>
                <input type="email" placeholder="Correo Electrónico" required>
                <input type="text" placeholder="Asunto" required>
                <textarea placeholder="Mensaje" required></textarea>
                <button type="submit">Enviar</button>
            </form>
        </main>
    </div>
@endsection

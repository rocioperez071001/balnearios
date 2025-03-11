@extends('layouts.app')

@section('title','Inicio')

@section('content')
<div class="container">
        <main>
        <div class="balneario">
                <img src="img/la-granja-logo.png" alt="La Granja de Mariana">
                <h1>Balneario La Granja</h1>
            </div>

            <section class="description">
                <p>El Balneario La Granja es un lugar ideal para disfrutar en familia y relajarse en un entorno natural. Contamos con diversas atracciones para todas las edades, desde albercas de aguas termales hasta áreas recreativas y zonas de campamento.</p>
                
                <h3>Atracciones:</h3>

                <h3>Albercas y Chapoteaderos</h3>
                <p>Disfruta de nuestras albercas con aguas termales y chapoteaderos seguros para los más pequeños.</p>

                <h3>Toboganes</h3>
                <p>Contamos con toboganes de diferentes alturas y formas para una experiencia llena de diversión.</p>

                <h3>Zona de Camping</h3>
                <p>Pasa una noche bajo las estrellas en nuestra amplia zona de campamento equipada con servicios básicos.</p>

                <h3>Restaurante y Áreas Verdes</h3>
                <p>Prueba la deliciosa comida regional en nuestro restaurante y relájate en nuestras áreas verdes.</p>
            </section>

            <section class="info">
                <h3>Dirección</h3>
                <p>Ixmiquilpan, Hidalgo, México.</p>

                <h3>Teléfonos</h3>
                <p>Parque: 772 987 6543</p>

                <h3>Contacto</h3>
                <p>Abierto los 365 días del año.  
                Oficina de 9:00 a.m. a 8:00 p.m. de lunes a domingo.  
                <a href="mailto:contacto@balneariolagranja.com">contacto@balneariolagranja.com</a></p>
                </section>

                <a href="{{ route('servicios') }}" class="servicios-btn">Servicios</a>
            </main>

</div>
@endsection

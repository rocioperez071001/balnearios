@extends('layouts.app')

@section('title','El Manantial')

@section('content')
<div class="container">
        <main>
        <div class="balneario">
                <img src="img/el-manantial-logo.png" alt="Balneario El Manantial">
                <h1>Balneario El Manantial</h1>
            </div>

            <section class="description">
                <p>El Balneario El Manantial es un hermoso centro ecoturístico que ofrece aguas termales cristalinas, un ambiente relajante y diversas atracciones para disfrutar en familia. Es el lugar perfecto para conectar con la naturaleza y relajarse en sus piscinas naturales.</p>
                
                <h3>Atracciones:</h3>

                <h3>Pozas de Aguas Termales</h3>
                <p>Disfruta de nuestras pozas naturales con agua termal a una temperatura ideal para relajar el cuerpo y la mente.</p>

                <h3>Toboganes y Albercas</h3>
                <p>Para los amantes de la diversión, contamos con toboganes y albercas para todas las edades.</p>

                <h3>Zonas de Camping</h3>
                <p>Vive la experiencia de acampar en un entorno rodeado de naturaleza con todas las comodidades necesarias.</p>

                <h3>Restaurante y Áreas de Picnic</h3>
                <p>Disfruta de deliciosos platillos regionales en nuestro restaurante o trae tus propios alimentos y prepáralos en las áreas de picnic.</p>
            </section>

            <section class="info">
                <h3>Dirección</h3>
                <p>Ixmiquilpan, Hidalgo, México.</p>

                <h3>Teléfonos</h3>
                <p>Parque: 772 123 4567</p>

                <h3>Contacto</h3>
                <p>Abierto los 365 días del año.  
                Oficina de 9:00 a.m. a 8:00 p.m. de lunes a domingo.  
                <a href="mailto:contacto@balnearioelmanantial.com">contacto@balnearioelmanantial.com</a></p>
             </section>

                <a href="{{ route('servicios') }}" class="servicios-btn">Servicios</a>
            </main>

    </div>
@endsection

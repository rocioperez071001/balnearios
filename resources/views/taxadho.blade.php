@extends('layouts.app')

@section('title','Inicio')

@section('content')
     <div class="container">
        <main>
        <div class="balneario">
                <img src="img/taxadho-logo.png" alt="Balneario Taxadho">
                <h1>Balneario taxadho</h1>
            </div>

            <section class="description">
                <p>El Balneario taxadho es un destino turístico ideal para disfrutar de aguas termales, áreas recreativas y un ambiente familiar en el corazón de Hidalgo. Es perfecto para relajarse y divertirse en sus múltiples atracciones.</p>
                
                <h3>Atracciones:</h3>

                <h3>Piscinas de Aguas Termales</h3>
                <p>Relájate en nuestras piscinas con aguas termales cristalinas, conocidas por sus propiedades terapéuticas.</p>

                <h3>Toboganes y Juegos Acuáticos</h3>
                <p>Diviértete con nuestros emocionantes toboganes y juegos acuáticos diseñados para todas las edades.</p>

                <h3>Zona de Camping y Cabañas</h3>
                <p>Disfruta de una experiencia única en nuestra zona de camping o alójate en nuestras cómodas cabañas rústicas.</p>

                <h3>Áreas de Picnic y Restaurante</h3>
                <p>Relájate y comparte momentos especiales en nuestras áreas de picnic, o prueba los mejores platillos en nuestro restaurante.</p>
            </section>

            <section class="info">
                <h3>Dirección</h3>
                <p>Ixmiquilpan, Hidalgo, México.</p>

                <h3>Teléfonos</h3>
                <p>Parque: 772 987 6543</p>

                <h3>Contacto</h3>
                <p>Abierto los 365 días del año.  
                Oficina de 9:00 a.m. a 8:00 p.m. de lunes a domingo.  
                <a href="mailto:contacto@balneariotaxadho.com">contacto@balneariotaxadho.com</a></p>
            </section>

            <a href="{{ route('servicios') }}" class="servicios-btn">Servicios</a>
        </main>
    </div>
    @endsection

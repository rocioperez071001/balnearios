@extends('layouts.app')

@section('title','Taxadhó')

@section('content')
     <div class="container">
        <main>
        <div class="parque">
                <img src="img/taxadho-logo.png" alt="Parque Ecoturístico Taxadhó">
                <h1>Parque Ecoturístico Taxadhó</h1>
            </div>

            <section class="description">
                <p>El Parque Ecoturístico Taxadhó es un destino ideal para disfrutar de la naturaleza, actividades al aire libre y un ambiente familiar en el corazón de Hidalgo. Es perfecto para relajarse y vivir aventuras en un entorno ecológico.</p>
                
                <h3>Atracciones:</h3>

                <h3>Senderos y Caminatas</h3>
                <p>Explora nuestros senderos rodeados de naturaleza, ideales para caminatas y avistamiento de flora y fauna.</p>

                <h3>Tirolesa y Deportes de Aventura</h3>
                <p>Vive la adrenalina con nuestra tirolesa y otras actividades de aventura diseñadas para todas las edades.</p>

                <h3>Zona de Camping y Cabañas</h3>
                <p>Disfruta de una experiencia única en nuestra zona de camping o alójate en nuestras cómodas cabañas ecológicas.</p>

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
                <a href="mailto:contacto@parqueecoturisticotaxadho.com">contacto@parqueecoturisticotaxadho.com</a></p>
            </section>

            <a href="{{ route('servicios') }}" class="servicios-btn">Servicios</a>
        </main>
    </div>
@endsection

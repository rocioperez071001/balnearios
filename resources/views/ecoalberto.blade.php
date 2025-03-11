@extends('layouts.app')

@section('title','Inicio')

@section('content')
<div class="container">
        <main>
            <div class="balneario">
                <img src="img/ecoalberto-logo.png" alt="EcoAlberto">
                <h1>Balneario EcoAlberto</h1>
            </div>

            <section class="description">
                <p>EcoAlberto es un balneario ecoturístico que combina diversión, naturaleza y cultura. Disfruta de sus albercas, toboganes y aguas termales, además de actividades extremas como la tirolesa y el puente colgante.</p>
                <p>Ubicado en un entorno natural impresionante, este balneario es perfecto para quienes buscan aventura y relajación en un solo lugar.</p>

                <h3>Atracciones:</h3>
    
                <h3>Albercas y Aguas Termales</h3>
                <p>Sumérgete en las albercas de aguas termales y relájate con la tranquilidad del entorno natural.</p>
    
                <h3>Toboganes</h3>
                <p>EcoAlberto cuenta con toboganes de diferentes tamaños para toda la familia.</p>

                <h3>Parque de Aventura</h3>
                <p>Si buscas adrenalina, prueba la tirolesa, el puente colgante y otras actividades extremas.</p>
    
                <h3>Zona de Campamento</h3>
                <p>Acampa en una de las zonas más hermosas del balneario y disfruta de una noche bajo las estrellas.</p>
    
                <h3>Recorridos Culturales</h3>
                <p>Descubre la cultura de la comunidad Hñähñu a través de visitas guiadas y experiencias interactivas.</p>
            </section>

            <section class="info">
                <h3>Dirección</h3>
                <p>El Alberto, Ixmiquilpan, Hidalgo, México</p>

                <h3>Teléfono</h3>
                <p>759 789 4561 | 759 789 1234</p>

                <h3>Horario</h3>
                <p>Abierto todos los días del año, de 7:00 AM a 9:00 PM.</p>
            </section>

            <a href="{{ route('servicios') }}" class="servicios-btn">Servicios</a>
        </main>
        
</div>
     @endsection

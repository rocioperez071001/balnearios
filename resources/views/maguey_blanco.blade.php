@extends('layouts.app')

@section('title','Inicio')

@section('content')
<div class="container">
        <main>
            <div class="balneario">
                <img src="img/maguey-blanco-logo.png" alt="Maguey Blanco">
                <h1>Balneario Maguey Blanco</h1>
            </div>

            <section class="description">
                <p>El Balneario Maguey Blanco ofrece una experiencia única en contacto con la naturaleza. Disfruta de sus aguas termales, áreas recreativas y la tranquilidad de sus paisajes. Es el lugar ideal para un día en familia o con amigos.</p>
                <p>El balneario cuenta con diversas atracciones y actividades para todas las edades, como toboganes, albercas, y zonas de descanso. Además, puedes disfrutar de comida típica en su restaurante y relajarte en sus amplias áreas verdes.</p>

                <h3>Atracciones:</h3>
    
                <h3>Albercas</h3>
                <p>El balneario cuenta con varias albercas de aguas termales, ideales para relajarte y disfrutar del paisaje natural que lo rodea.</p>
    
                <h3>Toboganes</h3>
                <p>Para los más aventureros, Maguey Blanco tiene toboganes que ofrecen diversión para todas las edades.</p>
    
                <h3>Área Infantil</h3>
                <p>Los niños pueden disfrutar de una zona segura y divertida con juegos acuáticos especialmente diseñados para su entretenimiento.</p>
    
                <h3>Restaurante</h3>
                <p>El restaurante del balneario ofrece platillos típicos de la región, así como opciones para todo tipo de gustos.</p>
    
                <h3>Zona de Campamento</h3>
                <p>Si prefieres una experiencia al aire libre, puedes acampar en la zona especial para campistas del balneario.</p>
            </section>

            <section class="info">
                <h3>Dirección</h3>
                <p>Carretera México - Laredo km 152, Ixmiquilpan, Hidalgo, México</p>

                <h3>Teléfono</h3>
                <p>759 727 7610 | 759 727 7598 | 759 727 7599</p>

                <h3>Horario</h3>
                <p>Abierto todos los días del año, de 6:00 AM a 8:00 PM.</p>
            </section>

            <a href="{{ route('servicios') }}" class="servicios-btn">Servicios</a>
        </main>
     </div>

     @endsection

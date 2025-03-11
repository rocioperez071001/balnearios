@extends('layouts.app')

@section('title','Inicio')

@section('content')
<div class="container">
        <main>
        <div class="balneario">
                <h1>Balneario Dios Padre</h1>
                <img src="img/dios-padre-logo.png" alt="Balneario Dios Padre">
            </div>

            <section class="description">
                <p>El Balneario Dios Padre es un destino turístico icónico en Hidalgo, conocido por sus aguas termales, albercas recreativas y su ambiente familiar. Es un lugar ideal para disfrutar de la naturaleza, la diversión y la relajación.</p>
                
                <h3>Atracciones:</h3>

                <h3>Albercas de Aguas Termales</h3>
                <p>Sumérgete en nuestras albercas con aguas termales naturales, ideales para relajarse y mejorar la circulación.</p>

                <h3>Toboganes y Parque Acuático</h3>
                <p>Disfruta de la adrenalina en nuestros emocionantes toboganes y áreas de juegos acuáticos para niños y adultos.</p>

                <h3>Zona de Camping</h3>
                <p>Pasa una noche mágica bajo las estrellas en nuestra zona de camping equipada con áreas de fogata y servicios básicos.</p>

                <h3>Restaurante y Tiendas</h3>
                <p>Saborea los mejores platillos típicos en nuestro restaurante o encuentra todo lo que necesitas en nuestras tiendas dentro del balneario.</p>
            </section>

            <section class="info">
                <h3>Dirección</h3>
                <p>Ixmiquilpan, Hidalgo, México.</p>

                <h3>Teléfonos</h3>
                <p>Parque: 772 123 4567</p>

                <h3>Contacto</h3>
                <p>Abierto los 365 días del año.  
                Oficina de 9:00 a.m. a 8:00 p.m. de lunes a domingo.  
                <a href="mailto:contacto@balneariodiospadre.com">contacto@balneariodiospadre.com</a></p>
            </section>

            <a href="{{ route('servicios') }}" class="servicios-btn">Servicios</a>
        </main>

    </div>
    @endsection

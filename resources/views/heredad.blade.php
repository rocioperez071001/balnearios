@extends('layouts.app')

@section('title','La Heredad')

@section('content')
     <div class="container">
        <main>
        <div class="balneario">
                <img src="img/la-heredad-logo.png" alt="heredad">
                <h1>Balneario La Heredad</h1>
            </div>

            <section class="description">
                <p>El Balneario y Centro Ecoturístico La Heredad es ideal para quienes buscan tranquilidad y relajación en un entorno natural, es el único balneario con una magnífica bóveda de vapor (espacio cerrado parecido a un temazcal pero más grande) al cual se puede ingresar en pareja o con varios miembros de la familia, en su interior hay una tina con agua termal para mojarse los pies, además, hay un paquete romántico para parejas, lo decoran con pétalos de rosas, velas y ofrecen bebidas. El balneario cuenta también con dos albercas y un chapoteadero con agua termal (a 39 grados de temperatura) en donde disfrutaran al máximo nadar, refrescarse y jugar, restaurante en forma de una gran palapa abierta con deliciosos platillos típicos de la región y bebidas a precios accesibles, masajes es un ambiente de completa tranquilidad, área para eventos sociales como bodas, bautizos, cumpleaños, etc. </p>
                    <p>La Heredad es un centro ecoturístico que te invita a quedarte un día o un fin de semana en compañía de la familia y amigos, ya sea en la zona de acampar o en las confortables cabañas rústicas hechas de piedra con techos de madera y teja. Puedes ingresar con tus alimentos y prepararlos en los asadores del parque. Estamos ubicados a 15 minutos del centro del Municipio de Ixmiquilpan, Hidalgo Mexico, en la comunidad de La Heredad.</p>
                    <p></p>
                    <h3>Atracciones:</h3>
    
                    <h3>Albercas</h3>
                    <p>Disfruta de nuestras albercas de agua termal con una temperatura de 39°, ideales para relajar el cuerpo en un ambiente tranquilo y rodeado por un entorno natural.</p>
    
                    <h3>Bóveda de Vapor</h3>
                    <p>Contamos de una bóveda dispuesta para ofrecer a nuestros visitantes un espectacular baño de vapor de agua termal que te brindará una extraordinaria relajación.</p>
    
                    <h3>Masajes</h3>
                    <p>Nada como tener un día relajante en La Heredad, disfruta de un buen masaje en la tranquilidad de este centro ecoturístico.</p>
    
                </section>


            <section class="info">
                <h3>Dirección</h3>
                <p>Comunidad indígena La Heredad municipio de Ixmiquilpan Hgo.</p>

                <h3>Teléfonos</h3>
                <p>Parque:
                7721166139
                        </p>

                <h3>Contacto</h3>
                <p>Abierto los 365 días del año
                Oficina de 9:00a.m a 8:00p.m de lunes a domingo  <a href="mailto:centroecoturistico_laheredad@hotmail.com">centroecoturistico_laheredad@hotmail.com</a></p>
            </section>

            <a href="{{ route('servicios') }}" class="servicios-btn">Servicios</a>
        </main>
       
        </div>
    </div>
    @endsection

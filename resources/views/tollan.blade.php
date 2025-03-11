@extends('layouts.app')

@section('title','Tollan')

@section('content')
     <div class="container">
        <main>
        <div class="balneario">
                <img src="img/tollan-logo.png" alt="tollan">
                <h1>Balneario El Tollan</h1>
            </div>

            <section class="description">
                <p> El Parque Acuático El Tollan cuenta con albercas de aguas termales a 36 grados centígrados, lo que lo convierte en un lugar perfecto para darse un chapuzón y refrescarse.

Además, El Tollan ofrece áreas verdes donde puedes descansar y alejarte del estrés. Si deseas pasar la noche en contacto con la naturaleza, el parque también tiene áreas para acampar.

El Parque Acuático Tollan es un lugar perfecto para disfrutar en familia. ¡No dudes en visitarlo en tu próxima escapada!</p><h3>Atracciones:</h3>
    
                    <h3>Albercas</h3>
                    <p>El parque cuenta con diversas albercas de aguas termales a una temperatura aproximada de 36°C, ideales para relajarse y disfrutar de sus beneficios terapéuticos</p>
    
                    <h3>Toboganes</h3>
                    <p>Para los amantes de la adrenalina, El Tollán ofrece emocionantes toboganes de agua caliente que garantizan diversión para todas las edades. </p>
    
                    <h3>Areas Verdes</h3>
                    <p>Amplias áreas verdes rodean las instalaciones, proporcionando espacios perfectos para descansar, hacer picnic y disfrutar de la naturaleza. </p>
    
                    <h3>Juegos Infantiles</h3>
                    <p>Los más pequeños pueden divertirse en las zonas especialmente diseñadas para ellos, que incluyen juegos infantiles y chapoteaderos seguros</p>
    
                    <h3>Servicios Adicionales</h3>
                    <p>Entre otros servicios, el parque cuenta con vestidores, regaderas, palapas, áreas de asadores, restaurante con comida típica de la región, tienda de souvenirs y estacionamiento. </p>
                      
             </section>


            <section class="info">
                <h3>Dirección</h3>
                <p>Carretera México - Laredo km 155.5 (frente a la PFP)</p>

                <h3>Teléfonos</h3>
                <p>Parque:
                    01 759 723 15 96 | 01 759 723 19 56
                        </p>

                <h3>Contacto</h3>
                <p>Abierto los 365 días del año
                Oficina de 8:00a.m a 6:00p.m de lunes a domingo  <a href="mailto:balneariotollan389@gmail.com">balneariotollan389@gmail.com</a></p>
                </section>

                <a href="{{ route('servicios') }}" class="servicios-btn">Servicios</a>
            </main>

        </div>
@endsection

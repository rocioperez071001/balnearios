@extends('layouts.app')

@section('title','Inicio')

@section('content')
<div class="container">
        <main>
            <div class="balneario">
                <h1>Balneario Dauthi</h1>
                <img src="img/dauthi-logo.png" alt="Dauthi">
            </div>

            <section class="description">
                <p>El balneario Dauthi es un destino ideal para quienes buscan diversión y relajación en un ambiente natural. Con aguas termales, albercas, toboganes y amplias áreas verdes, es un lugar perfecto para disfrutar en familia.</p>

                <h3>Atracciones:</h3>
    
                <h3>Albercas Termales</h3>
                <p>Disfruta de nuestras albercas de agua termal, perfectas para relajarte y aprovechar los beneficios de sus minerales.</p>
    
                <h3>Toboganes Acuáticos</h3>
                <p>Para los amantes de la adrenalina, contamos con toboganes de diferentes alturas y niveles de emoción.</p>

                <h3>Áreas Verdes y Zona de Camping</h3>
                <p>Relájate en nuestras amplias áreas verdes o disfruta de una noche de campamento en un entorno seguro y tranquilo.</p>
    
                <h3>Restaurante y Zona de Picnic</h3>
                <p>Prueba la comida tradicional en nuestro restaurante o lleva tu propia comida y disfruta de la zona de picnic.</p>
            </section>

            <section class="info">
                <h3>Dirección</h3>
                <p>Ixmiquilpan, Hidalgo, México</p>

                <h3>Teléfono</h3>
                <p>759 123 4567 | 759 987 6543</p>

                <h3>Horario</h3>
                <p>Abierto de lunes a domingo, de 8:00 AM a 8:00 PM.</p>
            </section>

            <a href="{{ route('servicios') }}" class="servicios-btn">Servicios</a>
        </main>
        
     </div>
     @endsection

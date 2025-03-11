@extends('layouts.app')

@section('title','La Granja')

@section('content')
<div class="container">
        <main>
        <div class="granja">
                <img src="img/la-granja-logo.png" alt="La Granja de Mariana">
                <h1>Granja La Mariana</h1>
            </div>

            <section class="description">
                <p>La Granja La Mariana es un espacio ideal para disfrutar en familia y conectarse con la naturaleza. Contamos con diversas actividades educativas y recreativas para todas las edades, desde interacción con animales hasta talleres de agricultura y zonas de campamento.</p>
                
                <h3>Actividades:</h3>

                <h3>Interacción con Animales</h3>
                <p>Visita nuestra granja y aprende sobre el cuidado de animales como ovejas, caballos, conejos y gallinas.</p>

                <h3>Paseos a Caballo</h3>
                <p>Disfruta de un relajante paseo a caballo por nuestros senderos naturales.</p>

                <h3>Huerto y Agricultura</h3>
                <p>Descubre el proceso de cultivo y participa en la cosecha de productos frescos en nuestro huerto.</p>

                <h3>Restaurante y Áreas Verdes</h3>
                <p>Prueba la deliciosa comida casera elaborada con ingredientes frescos de la granja y relájate en nuestras áreas verdes.</p>
            </section>

            <section class="info">
                <h3>Dirección</h3>
                <p>Ixmiquilpan, Hidalgo, México.</p>

                <h3>Teléfonos</h3>
                <p>Granja: 772 987 6543</p>

                <h3>Contacto</h3>
                <p>Abierto los 365 días del año.  
                Oficina de 9:00 a.m. a 8:00 p.m. de lunes a domingo.  
                <a href="mailto:contacto@granjalamariana.com">contacto@granjalamariana.com</a></p>
                </section>

                <a href="{{ route('servicios') }}" class="servicios-btn">Servicios</a>
            </main>

</div>
@endsection


@extends('layouts.app')

@section('title','Inicio')

@section('content')
<div class="container">
        <main>
            <div class="balneario">
                <img src="img/la-gloria-logotipo.png" alt="Balneario La Gloria">
                <h3>Balneario La Gloria</h3>
            </div>

            <section class="description">
                <p>Disfruta de un paraíso natural con aguas cristalinas y un ambiente familiar. 
                    Entre semana hay descuentos especiales, aunque algunas atracciones pueden no estar disponibles.</p>
                <p>Albercas de aguas termales, chapoteaderos, toboganes, zonas de picnic, restaurante, 
                    vestidores, regaderas y amplio estacionamiento.</p>
            </section>

            <section class="info">
                <h3>Dirección</h3>
                <p>Carretera a La Gloria km 30, Ixmiquilpan, Hgo.</p>

                <h3>Teléfonos</h3>
                <p>759 234 5678 | 759 345 6789 | 759 456 7890</p>

                <h3>Contacto</h3>
                <p>Todos los días de 7:00 a 19:00 h | <a href="mailto:balneariolagloria@gmail.com">balneariolagloria@gmail.com</a></p>
            </section>

            <a href="{{ route('servicios') }}" class="servicios-btn">Servicios</a>
        </main>
    </div>
    @endsection

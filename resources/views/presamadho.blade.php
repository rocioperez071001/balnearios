@extends('layouts.app')

@section('title','Presa Madhó')

@section('content')
    <div class="container">
        <main>
            <div class="balneario">
                <img src="img/presa-madho-logo.png" alt="Presa Madho">
                <h3>Balneario Presa Madho</h3>
            </div>

            <section class="description">
                <p>Disfruta de un ambiente natural único y relajante. Ideal para acampar, nadar y disfrutar en familia. 
                    Entre semana hay descuentos especiales, aunque algunas atracciones pueden no estar disponibles.</p>
                <p>Albercas naturales, áreas para picnic, actividades acuáticas, zona de acampar, restaurante, palapas, 
                    vestidores, regaderas y amplio estacionamiento.</p>
            </section>

            <section class="info">
                <h3>Dirección</h3>
                <p>Carretera a Presa Madho km 45, Ixmiquilpan, Hgo.</p>

                <h3>Teléfonos</h3>
                <p>759 123 4567 | 759 234 5678 | 759 345 6789</p>

                <h3>Contacto</h3>
                <p>Todos los días de 7:00 a 19:00 h | <a href="mailto:presamadho@gmail.com">presamadho@gmail.com</a></p>
                </section>

                    <a href="{{ route('servicios') }}" class="servicios-btn">Servicios</a>
</main>

</div>
@endsection

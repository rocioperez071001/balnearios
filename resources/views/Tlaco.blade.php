@extends('layouts.app')

@section('title','Tlaco')

@section('content')
    <div class="container">
        <main>
            <div class="balneario">
                <img src="img/tlaco-logo.png" alt="Tlaco">
                <h3>Balneario Tlaco</h3>
            </div>

            <section class="description">
                <p>Disfruta de un ambiente relajante en contacto con la naturaleza. Ideal para familias y amigos, con opciones de hospedaje y áreas recreativas.</p>
                <p>Cuenta con albercas termales, toboganes, áreas verdes, zona de camping, restaurante, vestidores, regaderas, y amplio estacionamiento.</p>
            </section>
      
            <section class="info">
                <h3>Dirección</h3>
                <p>Carr. México-Laredo km 140, Ixmiquilpan, Hgo.</p>

                <h3>Teléfonos</h3>
                <p>759 727 8000 | 759 727 8001 | 759 727 8002</p>

                <h3>Contacto</h3>
                <p>Todos los días de 7:00 a 19:00 h | <a href="mailto:balneariotlaco@gmail.com">balneariotlaco@gmail.com</a></p>
                </section>

                    <a href="{{ route('servicios') }}" class="servicios-btn">Servicios</a>
        </main>

</div>
@endsection

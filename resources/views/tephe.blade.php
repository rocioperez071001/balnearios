@extends('layouts.app')

@section('title','Inicio')

@section('content')
    <div class="container">
        <main>
        <div class="balneario">
                <img src="img/tephe-logo.png" alt="Tephe">
                <h1>Balneario Tephe</h1>
            </div>

            <section class="description">
                <p>Goza de la aventura y disfruta del contacto con la naturaleza, podrás acampar u hospedarte. 
                    Entre semana aplican descuentos, ya que algunas atracciones no están disponibles.</p>
                <p>Alberca con géiser, cascadas, toboganes, área infantil, olas gigantes, multitoboganes, 
                    área para acampar, restaurante, hotel, palapas, casilleros, vestidores, regaderas y amplio estacionamiento.</p>
            </section>
      

            <section class="info">
                <h3>Dirección</h3>
                <p>Carr. México-Laredo km 152, Ixmiquilpan, Hgo.</p>

                <h3>Teléfonos</h3>
                <p>759 727 7610 | 759 727 7598 | 759 727 7599</p>

                <h3>Contacto</h3>
                <p>Todos los días de 6:00 a 20:00 h | <a href="mailto:eltephe@gmail.com">eltephe@gmail.com</a></p>
            </section>

            <a href="{{ route('servicios') }}" class="servicios-btn">Servicios</a>
        </main>
        </div>
    </div>
    @endsection

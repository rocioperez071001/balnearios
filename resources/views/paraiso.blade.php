@extends('layouts.app')

@section('title','Valle Paraíso')

@section('content')
<div class="container">
        <main>
        <div class="balneario">
                <img src="img/valle-paraiso-logo.png" alt="Valleparaiso">
                <h1>Balneario Valle Paraiso</h1>
            </div>

            <section class="description">
                <p>El Hotel y Balneario Valle Paraíso se encuentra ubicado en Ixmiquilpan en el estado de Hidalgo, a tan solo 2 horas y media de la Ciudad de México. Es un lugar ideal para visitar en familia y pasar momentos agradables y divertidos. Ofrece excelentes precios y servicios.</p>
                <p>El parque acuático Valle Paraíso cuenta con aguas termales que te ayudaran para fines terapéuticos, grandes albercas, áreas verdes, divertidos toboganes, áreas infantiles, pocitas con agua a 36º C de temperatura para relajarte, tina de hidromasaje con salidas de agua a presión, spa, hospedaje en hotel, cabañas y zona para acampar dentro de las instalaciones. Brinda sus servicios los 365 días del año para comodidad de todos los visitantes.
                    Lánzate al balneario Valle Paraíso, podrás disfrutar de su área acuática con temática de la era de los dinosaurios. Es un oasis para divertirse y relajarse en un ambiente totalmente familiar.</p>
                    <h3>Atracciones:</h3>
    
                    <h3>Alberca Familiar</h3>
                    <p>¡Nuestra ya tradicional alberca gigante está siempre lista para ti y tu familia! Disfruta del área de hidromasaje en la parte superior de la alberca</p>
    
                    <h3>Oasis Paraíso</h3>
                    <p>Un conjunto de jacuzzis, albercas y pocitas de aguas termales para disfrutar con tu pareja o amigos</p>
    
                    <h3>Turbo Rex</h3>
                    <p>Por si quieres vivir una experiencia inolvidable y emocionante con este tobogán de 4 carriles que es lo último en atracciones del parque acuático El Paraíso</p>
    
                    <h3>Zona Dinopirata</h3>
                    <p> el área infantil con una isla artificial tipo barco pirata con muchos toboganes y resbaladillas pequeñas además de cubetas y figuras para que tus niños se diviertan de forma segura
                    </p>
    
                    <h3>Alberca Gigante</h3>
                    <p>área acuática principal del balneario Valle Paraíso y sobre la cual están situadas la mayoría de palapas; cuenta con 2 toboganes y varios jacuzzis pequeños</p>
                      
             </section>


            <section class="info">
                <h3>Dirección</h3>
                <p>Carretera México – Laredo Km. 154, 42300 Ixmiquilpan, Hgo.</p>

                <h3>Teléfonos</h3>
                <p>Parque:
                    759 723 1401
                        </p>

                <h3>Contacto</h3>
                <p>Abierto los 365 días del año
                Oficina de 8:00a.m a 8:00p.m de lunes a domingo  <a href="mailto:informes@valleparaiso.com.mx">informes@valleparaiso.com.mx</a></p>
                </section>

            <a href="{{ route('servicios') }}" class="servicios-btn">Servicios</a>
    </main>

</div>
@endsection

@extends('layouts.app')

@section('title','Inicio')

@section('content')
<div class="container">
        <main>
        <div class="balneario">
                <img src="img/las-cuevitas-logo.png" alt="cuevitas">
                <h1>Balneario Las Cuevitas</h1>
            </div>

            <section class="description">
                <p>Las Cuevitas Balneario Ecoturistico ofrece una variedad de actividades para todas las edades, incluyendo toboganes de agua, piscinas, áreas de juegos infantiles y mucho más. El parque acuático también cuenta con un restaurante y una zona de picnic.

Las Cuevitas Balneario Ecoturistico es un gran lugar para pasar un día en familia o con amigos. El parque acuático está bien cuidado y el personal es amable y servicial. El precio de la entrada es razonable y el parque acuático ofrece una variedad de descuentos para grupos y familias.</p>
                <p></p>
                     <h3>Atracciones:</h3>
    
                    <h3>Cuevas</h3>
                    <p>Disfruta al máximo de las aguas termales de una forma más natural. Contamos con diferentes cuevas construidas naturalmente sobre piedra.</p>
    
                    <h3>Albercas</h3>
                    <p>Para que todos puedan encontrar un espacio ideal para divertirse, contamos con 3 albercas grandes, 1 alberca infantil y un lago artificial. Todos con aguas termales.</p>
    
                    <h3>Zona de campamento</h3>
                    <p>Contamos con una extensa zona de campamento empastado, para que disfrutes tu estancia al natural. Puedes traer tu casa de campaña o algunos de los puestos que están fuera del balneario te pueden rentar una.</p>
    
             </section>


            <section class="info">
                <h3>Dirección</h3>
                <p>carretera Humedades-El Tablon Barrio Dios Padre, Ixmiquilpan, Mexico CP 42303</p>

                <h3>Teléfono</h3>
                <p>Parque:
                    7721223472
                        </p>

                <h3></h3>
                <p>Abierto los 365 días del año
                Oficina de 8:00a.m a 9:00p.m de lunes a domingo  <a href="mailto:"></a></p>
                </section>

            <a href="{{ route('servicios') }}" class="servicios-btn">Servicios</a>
    </main>

</div>
@endsection

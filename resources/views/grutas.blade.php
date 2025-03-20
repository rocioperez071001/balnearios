@extends('layouts.app')

@section('title','Grutas Tolantongo')

@section('content')
<div class="container">
        <main>
            <div class="balneario">
                <img src="img/gru.jpg" alt="Grutas Tolantongo">
                <h3>Grutas Tolantongo</h3>
            </div>

            <section class="description">
                <p>Las Grutas de Tolantongo es un complejo de cascadas, piscinas y ríos en el estado mexicano de Hidalgo. Consiste en un sistema de cuevas y grutas, con una gruta principal que fluye hacia el río Tolantongo y un túnel más pequeño. Desde la gruta principal fluyen aguas termales hasta el río, donde se encuentran dos complejos turísticos con áreas de campamento, varias albercas, restaurantes, hoteles, cabañas, tiendas y áreas de esparcimiento. Es uno de los lugares más fotografiados de México por sus hermosas formaciones naturales y el peculiar color azul del agua.
                </p>
                
                <h3>Atracciones:</h3>
    
                <h3>Tirolesas</h3>
                <p>Primer Lanzamiento:320 metros </p>
                <p>Segundo Lanzamiento:280 mmetros</p>
                <p>Tercer Lanzamiento:690 mmetros</p>
                <p>Cuarto Lanzamiento:600 mmetros</p>
                <h3>Pozas Termales</h3>
                <p>Una joya natural de México son estas 40 pozas que están escalonadas en la barranca de este magnífico lugar, su escenario es digno de admirarse en el que incluso personas de otros países no se resisten a su belleza</p>

                <h3>Puente Colgante.</h3>
                <p>Una aventura de altura es pasar este puente que además es muy bonito y puedes tener recuerdos fotográficos desde ese punto. La adrenalina es buena contagiada con la vista a las montañas, las cascadas y a las pozas al estar muy cerca de ellas</p>

                <h3>Senderismo ante tal Naturaleza</h3>
                <p>Dispuesto a dejarte asombrar en  tu caminar es que la naturaleza te dejará increíbles mensajes; puedes resguardarte bajo la sombra de un árbol, tomar excelentes fotografías del paisaje</p>

                <h3>Hoteles</h3>
                <p>Las Grutas de Tolantongo cuentan con cuatro hoteles teniendo más de 200 habitaciones a tu disposición.

                Lo interesante es que los hoteles no aceptan reservaciones por lo que para encontrar disponibilidad es necesario llegar muy temprano: entre las 7 y las 9 de la mañana.</p>
                        </section>

            <section class="info">
                <h3>Dirección</h3>
                <p>San Cristóbal Municipio de Cardonal, Hgo.Mexico </p>

                <h3>Teléfonos</h3>
                <p>7721220889 | 7721265156 | 7727217905</p>

                <h3>Contacto</h3>
                <p>Todos los días de 7:00 a 19:00 h | <a href="mailto:informacion@grutastolantongo.com.mx">informacion@grutastolantongo.com.mx</a></p>
            </section>

            <a href="{{ route('servicios') }}" class="servicios-btn">Servicios</a>
        </main>
    </div>
    @endsection
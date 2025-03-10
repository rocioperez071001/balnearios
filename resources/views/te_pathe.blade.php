@extends('layouts.app')

@section('title','Inicio')

@section('content')
     <div class="container">
        <main>
            <div class="balneario">
                <h1>Balneario Te-Pathé</h1>
                <img src="img/te-pathe-logotipo.png" alt="Balneario Te-Pathé">
            </div>

            <section class="description">
                <p>Ubicado en el corazón del Valle del Mezquital, este parque cuenta con amplias zonas de entretenimiento para la diversión de tu familia, con áreas específicas para cada uno de sus miembros.</p>
                <p>Te-Pathé́ cuenta con la alberca de olas más grande del estado de Hidalgo; en esta área tu familia disfrutará de momentos gratos con las olas tipo diamante. Para los niños de entre seis y 12 años existe la Isla Pirata, que es un lugar encantado por castillos y serpientes donde podrán echar a volar su imaginación, inventando miles de aventuras como solo ellos saben hacer. Esta zona está rodeada de un río lento, cuya corriente tenue los deslizará alrededor de la isla.</p>
                <p>Además, el parque ofrece una Isla de Mariposas para los más pequeñitos del hogar (de tres a ocho años), rodeada de flores y mariposas entre sus mini toboganes, donde los niños y niñas, apoyados por sus padres, vivirán una experiencia de ensueño.</p>

                <h3>Atracciones:</h3>
    
                <h3>Albercas</h3>
                <p>Te-Pathé cuenta con varias albercas de aguas termales, ideales para relajarse y disfrutar de un ambiente natural único.</p>
    
                <h3>Toboganes</h3>
                <p>Diviértete con los emocionantes toboganes diseñados para toda la familia, garantizando adrenalina y diversión.</p>
    
                <h3>Área Infantil</h3>
                <p>Los más pequeños pueden disfrutar de un área infantil con juegos acuáticos seguros y diseñados para su entretenimiento.</p>
    
                <h3>Restaurante</h3>
                <p>Disfruta de la mejor comida regional en el restaurante del balneario, con una gran variedad de platillos típicos.</p>
    
                <h3>Hospedaje</h3>
                <p>Para una experiencia más completa, el balneario cuenta con cabañas y zonas de camping para pernoctar en contacto con la naturaleza.</p>
            </section>

            <section class="info">
                <h3>Dirección</h3>
                <p>Carretera México - Laredo km 152, Ixmiquilpan, Hidalgo, México</p>

                <h3>Teléfono</h3>
                <p>759 723 3810 | 759 723 3820 | 759 723 3830</p>

                <h3>Horario</h3>
                <p>Abierto todos los días del año, de 7:00 AM a 9:00 PM.</p>
            </section>

            <a href="{{ route('servicios') }}" class="servicios-btn">Servicios</a>
        </main>
        
     </div>
     @endsection

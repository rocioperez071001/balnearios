@extends('layouts.app')

@section('title','Inicio')

@section('content')
     <div class="container">
        <main>
        <div class="balneario">
                <img src="img/pueblo-nuevo-logotipo.png" alt="Pueblonuevo">
                <h1>Balneario Pueblo Nuevo</h1>
            </div>

            <section class="description">
                <p>Adentrándote en el corazón de Ixmiquilpan, descubrirás el maravilloso Balneario Pueblo Nuevo. Con sus aguas termales que alcanzan los 36 grados, este oasis es el lugar perfecto para relajarte y disfrutar en familia o con amigos. Además de sus refrescantes albercas, podrás deslizarte por divertidos toboganes y explorar las áreas infantiles con juegos y resbaladillas.

Si buscas tranquilidad, las albercas de aguas termales son ideales para descansar y renovarte. El balneario también ofrece servicios como masajes, áreas de acampar y deliciosos platillos regionales en su restaurante. Vive esta experiencia única y déjate cautivar por la belleza natural de Pueblo Nuevo
</p>
                    <h3>Atracciones:</h3>
    
                    <h3>Albercas Infantiles</h3>
                    <p>Área InfantilInfatiles
                    Son el centro de diversión para los niños y las atracciónes más recordadas de este parque. Conoce el Castillo, un área infantil compuesta de juegos acuáticos con varios pisos de altura, acceso por medio de escaleras y rampas con atracciones de chorro y toboganes de caída.</p>
    
                    <h3>Aguas Termales</h3>
                    <p>Existen diferentes zonas acuáticas dentro del parque, todas cuentan con agua termal con una temperatura de 36º ideal para relajarse y descansar.</p>
    
                    <h3>Toboganes</h3>
                    <p>ToboganesToboganes
                    Al llegar a la parte más elevada del parque encontrarás la sección de toboganes donde podrás destlizarte en ellos y tener diversión garantizada ya seas cchico o grande. Recuerda tener siempre en cuenta las indicaciones del personal del parque.</p>
                    <h3>Restaurante</h3>
                    <p>Aquí podrás saborear un menú de especialidades típicas regionales, platillos preparados, servidos con el más alto nivel de servicio y calidad que lo harán disfrutar de un buen rato acompañado de la bebida de su preferencia.
                    El servicio está disponible solamente fines de semana, días festivos y vacaciones en un horario de 7:00 a 22:00 hrs. en medio de un ambiente familiar amenizado por buena música.</p>
                    <h3>Monumento Ceremonial</h3>
                    <p>Ésta es una zona dispuesta para todo tipo de eventos: Bautizos, bodas, XV años. Dale a ese día especial, un toque mágico. Para mayores informes sobre celebración de eventos en el parque, comunícate con nosotros vía telefónica.</p>
                </section>


            <section class="info">
                <h3>Dirección</h3>
                <p>Manantial Santa Cira No. 15,
                        C.P. 42324 Ixmiquilpan, Hgo.</p>

                <h3>Teléfonos</h3>
                <p>Parque:
                771 526 6229 | 01 (759) 727 7721
                        </p>

                <h3>Contacto</h3>
                <p>Abierto los 365 días del año
                Oficina de 7:00a.m a 8:00p.m de lunes a domingo  <a href="mailto:parqueacuaticopueblonuevo@hotmail.com">parqueacuaticopueblonuevo@hotmail.com </a></p>
             <p><a href="mailto:parqueacuaticopueblonuevo@hotmail.com">contacto@pueblonuevo.mx</a></p>
            </section>

            <a href="{{ route('servicios') }}" class="servicios-btn">Servicios</a>
        </main>
       
        
    </div>
    @endsection

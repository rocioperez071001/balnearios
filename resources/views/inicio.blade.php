<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Cielos Termales</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

  <!-- Sección: Valle del Mezquital -->
  <div class="container">
    <h2>Valle del Mezquital</h2>
    <div class="content">
      <img src="{{ asset('img/mapa.png') }}" alt="Mapa de Valle del Mezquital">
      <div class="text">
      <p>Esta región de Hidalgo está rodeada por montañas donde destaca el mezquite en su vegetación, además de una gran variedad de cactáceas. Su clima es agradable la mayor parte del año, sólo en invierno se han llegado a registrar temperaturas frías. El Valle del Mezquital ofrece impresionantes vistas a los turistas, para muestra, las rocas de los Frailes que dan la bienvenida a esta hermosa región.</p>
      <p>La gastronomía de estos municipios incluye la barbacoa de borrego, consomé, gusanos de maguey, ximbó, chinicuiles, quesadillas hechas de flores de calabaza, huitlacoche y gualumbos.</p>
      <p>En las fiestas de Semana Santa se pueden visitar diversas ferias y celebraciones locales donde además de diversión, la gente del lugar comercializa artesanías hechas de concha de abulón, juguetes de madera y sombreros de palma, entre otros.</p>
      <p>Esta región cuenta con la mayoría de los balnearios y parques acuáticos con aguas termales en el estado.</p>
      </div>
    </div>
  </div>

  <!-- Sección: Ixmiquilpan -->
  <div class="container">
    <h2>Ixmiquilpan</h2>
    <p>Ixmiquilpan se ubica en el corazón del Valle del Mezquital, es una ciudad que a lo largo de su historia ha sido centro de la cultura otomí-hñähñu, ubicada en un semidesierto con áreas de riego agrícola y alrededor se encuentra un paisaje montañoso, tiene en sus inmediaciones múltiples balnearios y parques acuáticos debido a la abundancia de agua de manantial.</p>
    <p>De su patrimonio monumental destaca el convento agustino del siglo XVI, la Parroquia de San Miguel Arcángel, que cuenta con impresionantes frescos en el techo de su bóveda, mismos que fueron pintados por manos indígenas; también hay un museo de arte religioso en lo que era el convento. Es de especial atractivo la zona de la barranca del Río Tula, próxima a la comunidad de El Alberto.</p>
    <p>Otros atractivos son el puente virreinal de La Otra Banda, el Museo Regional de la Cultura Hñähñu y en la plaza central se halla una imponente fuente con la escultura clásica de la Diana Cazadora.</p>
    <p>Ixmiquilpan es también un importante centro artesanal en donde se pueden adquirir textiles de lana, de fibra de maguey o bordados diversos; piezas de madera con figuras de concha de abulón incrustadas y muebles de carrizo.</p>
    <p>Su cocina tradicional se compone especialmente de platillos hechos con ingredientes nativos, como las flores e insectos comestibles. También está su conocida barbacoa, que destaca por el método de preparación y la carne procedente de ganado de pastoreo.</p>
    <div class="collage">
      <a href="{{ route('te_pathe') }}" class="collage-item">
        <img src="{{ asset('img/te-pathe.jpg') }}" alt="Te-Pathe">
        <div class="collage-caption">TE-PATHE</div>
      </a>

      <a href="{{ route('ecoalberto') }}" class="collage-item">
        <img src="{{ asset('img/ecoalberto.jpg') }}" alt="Eco Alberto">
        <div class="collage-caption">ECO ALBERTO</div>
      </a>

      <a href="{{ route('diospadre') }}" class="collage-item">
        <img src="{{ asset('img/diospadre.jpg') }}" alt="Dios Padre">
        <div class="collage-caption">DIOS PADRE</div>
      </a>
      
      <a href="{{ route('maguey_blanco') }}" class="collage-item">
        <img src="{{ asset('img/maguey.jpg') }}" alt="Maguey Blanco">
        <div class="collage-caption">MAGUEY BLANCO</div>
      </a>

      <a href="{{ route('pueblonuevo') }}" class="collage-item">
        <img src="{{ asset('img/pueblonuevo.jpg') }}" alt="Pueblo Nuevo">
        <div class="collage-caption">PUEBLO NUEVO</div>
      </a>

      <a href="{{ route('heredad') }}" class="collage-item">
        <img src="{{ asset('img/laheredad.jpg') }}" alt="La Heredad">
        <div class="collage-caption">LA HEREDAD</div>
      </a>

      <a href="{{ route('dauthi') }}" class="collage-item">
        <img src="{{ asset('img/dauthi.jpg') }}" alt="Dauthi">
        <div class="collage-caption">DAUTHI</div>
      </a>

    <a href="{{ route('tephe') }}" class="collage-item">
      <img src="{{ asset('img/tephe.jpg') }}" alt="Tephe">
      <div class="collage-caption">TEPHE</div>
    </a>

      <a href="{{ route('taxadho') }}" class="collage-item">
        <img src="{{ asset('img/taxadho.jpg') }}" alt="Taxadhó">
        <div class="collage-caption">TAXADHÓ</div>
      </a>

      <a href="{{ route('lagranja') }}" class="collage-item">
        <img src="{{ asset('img/lagranja.jpg') }}" alt="La Granja">
        <div class="collage-caption">LA GRANJA</div>
      </a>

      <a href="{{ route('elmanantial') }}" class="collage-item">
        <img src="{{ asset('img/elmanantial.jpg') }}" alt="El Manantial">
        <div class="collage-caption">EL MANANTIAL</div>
      </a>

      <a href="{{ route('cuevitas') }}" class="collage-item">
        <img src="{{ asset('img/lascuevitas.jpg') }}" alt="Las Cuevitas">
        <div class="collage-caption">LAS CUEVITAS</div>
      </a>
      <a href="{{ route('tollan') }}" class="collage-item">
        <img src="{{ asset('img/tollan.jpg') }}" alt="Las Cuevitas">
        <div class="collage-caption">TOLLÁN</div>
      </a>
      <a href="{{ route('paraiso') }}" class="collage-item">
        <img src="{{ asset('img/valle.jpg') }}" alt="Las Cuevitas">
        <div class="collage-caption">VALLE PARAÍSO</div>
      </a>
    </div>
  </div>

  <!-- Sección: Cardonal -->
  <div class="container">
    <h2>Cardonal</h2>
    <p>Este municipio se encuentra en los límites donde termina el Valle del Mezquital y comienza la Sierra Gorda; sus primeros pobladores fueron de origen indígena otomí-hñähñu. Posee paisajes contrastantes; los yacimientos metálicos encontrados durante la conquista provocaron la instalación de minas.</p>
    <p>Este lugar posee en su territorio una diversidad de climas que van desde el desierto con vegetación xerófila o el bosque de coníferas, hasta el subtropical en la barranca de Tolantongo, por donde pasa el Río Amajac, en donde el clima cálido y el agua dan lugar a una extensa y verde vegetación.</p>
    <p>Cardonal ofrece a sus visitantes una especial joya colonial y artística de Hidalgo: el Santuario del Señor de Mapethé, ubicado en la población de Santuario, lugar en donde se ubicaban las minas del Real de Plomo Pobre y a donde fue llevado un Cristo que se hizo famoso por sus milagros. Además de su fastuosa fachada, la iglesia posee al interior cinco retablos barrocos cuyo color dorado ilumina el recinto y a ello se suman pinturas religiosas y especiales decorados en la bóveda y columnas del templo.</p>
    <p>Este sensacional lugar es famoso por sus artesanías de ixtle, fibra de maguey y lechuguilla, como son los ayates, así como jarciarías como las conocidas escobetillas de uso doméstico; además, existe el uso del telar de cintura y los tradicionales bordados otomíes en lana o algodón.</p>
    <p>En cuanto a la gastronomía, se producen y consumen múltiples derivados de maguey como los chinicuiles, los gualumbos, el jarabe de agave y el pan de pulque.</p>
    <div class="collage">
      <a href="{{ route('grutas') }}" class="collage-item">
        <img src="{{ asset('img/grutas.jpg') }}" alt="Grutas">
        <div class="collage-caption">GRUTAS DE TOLANTONGO</div>
      </a>

      <a href="{{ route('lagloria') }}" class="collage-item">
        <img src="{{ asset('img/gloria.jpeg') }}" alt="Gloria">
        <div class="collage-caption">LA GLORIA</div>
      </a>
    </div>
  </div>

  <!-- Sección: Chilcuautla -->
  <div class="container">
    <h3>Chilcuautla</h3>
    <p>Chilcuautla es un municipio ubicado en el Valle del Mezquital, por ello tiene una amplia presencia de la cultura otomí-hñänhu en su forma de vida y tradiciones.</p>
    <p>El paisaje muestra por un lado una zona semidesértica y por el otro un atractivo verdor por la abundancia de agua en la parte en donde transcurre el Río Tula por múltiples barrancas. Otra alternativa es caminar por la naturaleza y conocer los vestigios arqueológicos del emblemático Cerro del Elefante.</p>
    <p>De entre su patrimonio monumental destaca la Parroquia de La Asunción, ubicada en la cabecera municipal, la cual fue en un principio una misión agustina y posteriormente fue ocupada por padres jesuitas; en su arte hay expresiones del barroco del siglo XVII. Son también dignas de visita las haciendas de La Cofradía y Demiñho, muestras de la vida campirana de la región, aportando a la producción ganadera y la agrícola del maíz y maguey.</p>
    <p>En cuanto a patrimonio inmaterial, Chilcuautla preserva artesanías como las hechas con fibra de maguey como los ayates, los tejidos en telar de cintura o los bordados en tela de algodón propios de la indumentaria tradicional indígena. De sus fiestas tradicionales, el Carnaval hace gala con la presencia de personas ataviadas de xitás, que en hñäñhu son los viejitos, cuyo disfraz está hecho de fibras y sus máscaras de penca de maguey.</p>
    <p>En cuanto a la tradición gastronómica, existen usos comunes con el resto del Valle del Mezquital en cuanto a la abundancia de preparaciones con tuna, nopal, xoconostle o insectos, a lo que se añade el uso de ingredientes como la granada que se cultiva en la zona, así como pescados y quesos que ahí se producen.</p>
    <div class="collage">
      <a href="{{ route('tlaco') }}" class="collage-item">
        <img src="{{ asset('img/tlaco.jpeg') }}" alt="Tlaco">
        <div class="collage-caption">TLACO</div>
      </a>
    </div>
  </div>

<!-- Sección: Alfajayucan -->
<div class="container">
  <h4>Alfajayucan</h4>
  <p>Alfajayucan tiene un territorio conformado por lomeríos y un clima cálido. Posee múltiples presas y embalses de agua construidos para irrigar las tierras de cultivo de la región. En estos cuerpos de agua se produce mojarra, tilapia y carpa, y en ciertas temporadas las aves migratorias surcan el cielo para llegar ahí a reproducirse.</p>
  <p>Se ubica en una comarca agrícola de regadío, habitada por pueblos otomíes que conjugan actividades como la cosecha de múltiples alimentos con labores artesanales. De su patrimonio cultural edificado, resalta el antiguo Convento de San Martín Obispo, obra franciscana del siglo XVI que en uno de sus altares tiene una imagen del Señor de la Buena Muerte, un Cristo crucificado alabado desde hace siglos por toda la población. Otra joya de este conjunto es la cruz atrial, escultura de piedra ubicada en el centro del patio del convento, que con su tamaño y estructura majestuosa es testigo de la importancia histórica de Alfajayucan.</p>
  <p>En cuanto a la gastronomía, destaca la tradición de preparar tamales de pollo y cocoles de anís o de calabaza.</p>
</div>
<div class="collage">
    <a href="{{ route('presamadho') }}" class="collage-item">
      <img src="{{ asset('img/presa.jpg') }}" alt="Presa">
      <div class="collage-caption">PRESA MADHÓ</div>
    </a>
</body>
</html>

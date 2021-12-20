<!DOCTYPE html> <!--Doc=documento Type=tipo -->
<html lang="es"> <!--Etiqueta que abre en atml -->
<!--lang="es" es para poner el tipo de idioma -->
<head> <!--Etiqueta que abre la cabecera -->
<link rel="stylesheet" href="estilos/normalize.css"> <!--normalize es primero-->
<link rel="stylesheet"href="estilos/estilos.css"> <!--como vincular css con html -->
<meta charset="utf-8"> <!--es la codificacion del lenguaje, "utf-8" es para español  -->
<title>Jairo Lino</title>   <!--Es para el titulo de la pagina  -->
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="owl/owl.carousel.min.css">  <!---url ccs de CARRUSEL con direccion a la carpeta creada owl-->
<link rel="stylesheet" href="owl/owl.theme.default.min.css">  <!-- url ccs de CARRUSEL-->

<!--INICIO SECCION RESPONSIVE DESING "Dispositivos moviles" -->
<meta name="viewport" content="width=device-width, user-scalable=no"> <!-- el "viewport" es la pantalla del celular  este "content" contenido estara "width=device-width" adaptado al ancho del celular y el usurio "user-scalable=no" no puede realizar zoom-->

<!--FIN SECCION RESPONSIVE DESING "Dispositivos moviles" -->

</head> <!--Etiqueta que cierra la cabecera -->

<body> <!--Etiqueta que abre el cuerpo-->

<!--INICIO SECCION WATSAPP-->
<a id="whatsapp" href="https://api.whatsapp.com/send?phone=51943564215" target="_blank"><img src="imagenes/whatsapp.png" alt=""></a> <!--target="_blank" permite q habra una nueva pestaña de watsapp-->

<!--FIN SECCION WATSAPP-->

<header> <!--Es el encabezado-->
  <div class="menu">
   <div class="contenedor" >
      <!--<img class="logo" href="index.php" src="imagenes/logo.PNG" alt="Logo de la empresa"> LOGO de la pagina web segun jairo-->
      <div class="logo">
                <a href="index.php">
                        <img src="imagenes/logo.PNG" alt="Logo de la empresa">
                    </a>
      </div>
      <!--HOJO ESTO ES SEGUN EL TEACHER <p class="logo"> JAIRO LINO </p> La etqueta "P" se usa para parrafos o textos ejm el texto del logo de la pagina -->
      <img class="menu-icon" src="imagenes/menu.png" alt="imagen de menu"> <!--imagen de menu para moviles-->
      <nav>
             <ul class="lista-menu"> <!--OJO luego de href="" se esta poniendo los links q pertenece a cada uno del menu siempre llamado el id con # muy importante-->
               <li><a href="#sobre-mi">Nosotros</a><!--"a" etiqueta clicleable--></li><!--li es una etiqueta de item de lista-->
               <li><a href="#servicios">Servicios</a></li>
               <li><a href="#mis-trabajos">Mis Trabajos</a></li>
               <li><a href="#por-que-trabajar">¿Por que trabajar conmigo?</a></li>
               <li><a href="#blog">Blog</a></li>
               <li><a href="#contacto">Contacto</a></li>
             </ul><!--ul permite contener la lista sin ordenada-->
      </nav> <!--nav permite contener el menu principal -->
   </div>
   </div><!--Permite contener el contenido-->

<div class="contenedor" id="contenedor-titulo-flex"> <!--en id para que no se ponen en otros contenedores-->
  <div class="contenedor-titulo">
      <h1>Jairo Darwin Lino</h1>  <!--h1 es el titular principal de la pagina -->
      <h2>Diseñador & Desarrollador Web</h2>
      <a href="#mis-trabajos">VER MIS TRABAJOS</a>

  </div>
</div>
</header>


<main> <!--en la etiqueta main se ponen los contenidos principales -->
<!--SECCION SOBRE MI -->
<section id="sobre-mi"> <!--seccion y el id es cuando realizo un clic me lleve a dicho informacion -->
  <div class="contenedor">
    <h3>Nosotros</h3>
    <div class="contenedor-sobremi">
      <div class="computadoras">
        <img src="imagenes/computadora.jpg"> <!--img es la etiqueta de la imagen y src es el sourse-->
      </div>
      <div  class="texto"> <!--ALIGN= JUSTIFY permite Justificar todo el parrafo esto es para HTML se pone al lado del div -->
        <p>Mi nombre es <B>Jairo Lino</B> y soy <B>Desarrollador de páginas Web</B>. Tengo la experiencia en desarrollo de sitios web para pequeñas y medianas empresas, hasta tiendas en línea con carrito de compras.</p> <!--en la etiqueta p estan los textos por parrafos-->
        <p>Me aseguro de utilizar siempre las últimas tecnologías de desarrollo web: <B>HTML5, CSS3, jQuery, Wordpress</B>. Si necesitás <B>una página web moderna, funcional, que se adapte a todos los diferentes tipos de pantalla</B>, te aseguro que llegaste al lugar correcto.</p>
        <p>Puedes ponerte en contacto conmigo a través de Facebook, Linkedin o completando el formulario de contacto que se encuentra al final de mi sitio web.</p>
        <a href ="#mis-trabajos">VER MIS TRABAJOS</a>
      </div>
    </div>
  </div>
</section>
<!--FIN SOBRE MI -->

<!--SECCION DE MIS SERVICIOS-->
<section id="servicios">
  <div class="contenedor">
    <h3>Servicios</h3>
    <div class="contenedor-servicios">

      <div class="servicio violeta"> <!--a un elemnto se puede poner 2 clases con un espacio en blanco Ejemplo primera clase servicio y la segunda es violeta-->
        <h4>Diseño Web</h4>
        <p>Página web atractivas y funcionales con el objetivo de satisfacer todas tus expectativas. La importancia del diseño es fundamental para tener éxito y traer a tus visitantes. También lo es la velocidad de carga del sitio web deben ser rápidas para que el visitante tenga la mejor experiencia.</p>
        <img class="icono" src="imagenes/web.png">
        <img class="ondas" src="imagenes/waves.png">
      </div>

      <div class="servicio celeste">
        <h4>Responsive Design</h4>
        <p>Hoy en día las páginas web se ven en multitud de dispositivos como Tablet, celulares, libros electrónicos, notebooks, PCs, etc. La tecnología móvil es el presente y el futuro. Para eso es importante y me aseguro de que tu sitio web sea compatible con todos los tamaños de pantalla de esta época moderna.</p>
        <img class="icono" src="imagenes/design.png">
        <img class="ondas" src="imagenes/waves.png">
      </div>

      <div class="servicio violeta">
        <h4>SEO</h4>
        <p>Al crear sitios web, tengo muy en cuenta la optimización de motores de búsqueda (SEO). Llevo a cabo prácticas de SEO estándar en cada pagina del sitio web, lo que permite que tu sitio tenga una clasificación mas alta en los resultados de Google y así generar mas trafico a la web.</p>
        <img class="icono" src="imagenes/seo.png">
        <img class="ondas" src="imagenes/waves.png">
      </div>

      <div class="servicio celeste">
        <h4>Autoadministrable</h4>
        <p>Es importante que puedas administrar tu pagina web vos mismo desde cualquier lugar y en cualquier momento. Desarrollo sistemas de gestión de contenidos que te permiten ver los datos de tu pagina web y editar el contenido que quieras lo que te permite mantenerte actualizado.</p>
        <img  class="icono" src="imagenes/wordpress.png">
        <img class="ondas" src="imagenes/waves.png">
      </div>

      <div class="servicio violeta">
        <h4>Mantenimiento</h4>
        <p>Podes contactarme si necesitas actualizar tu pagina web agregar nuevas secciones o cualquier cambio que necesitas. Esto es perfecto para los sitios web de pequeñas empresas donde no se necesitan un diseñador de paginas web a tiempo completo sino solo en distintas ocasiones.</p>
        <img class="icono" src="imagenes/mantenimiento.png">
        <img class="ondas" src="imagenes/waves.png">
      </div>

      <div class="servicio celeste">
        <h4>Marketing Digital</h4>
        <p>Utilizo las herramientas mas importantes como Google AdWords y Google Analytics, para que tu negocio aparezca en los resultados de búsqueda de Google justo cuando alguien te necesita y analizar como los usuarios interactúan con tu pagina web.</p>
        <img class="icono" src="imagenes/digital.png">
        <img class="ondas" src="imagenes/waves.png">
      </div>

    </div>
  </div>
</section>
<!--FIN DE MIS SERVICIOS-->

<!--SECCION DE MIS TRABAJOS-->
<section id="mis-trabajos">
  <div class="contenedor">
    <h3>Mis Trabajos</h3>
    <div class="owl-carousel owl-theme"> <!--codigo html para llamar carousel-->
    <div class="item"><img src="imagenes/sassy.jpg"></div>
    <div class="item"><img src="imagenes/chaia.jpg"></div>
    <div class="item"><img src="imagenes/alimentar.jpg"></div>
    <div class="item"><img src="imagenes/isip.jpg"></div>

</div>
  </div> <!--en esta clase se creo para llama a carusel y estas son las librerias-->
</section>
<!--FIN DE MIS TRABAJOS-->

<!--SECCION PORQUE TRABAJAR CONMIGO-->
<section  id="por-que-trabajar">
  <div class="contenedor">
    <h3>¿Por que trabajar conmigo?</h3>
    <div class="contenedor-trabajar">
      <div class="item">
        <ul>
          <li><img src="imagenes/velocidad.png" alt=""></li>
          <li>Velocidad</li>
          <li>Me aseguro de que tu web cargue entre 2 y 4 segundos (depende de la cantidad de contenido del sitio). Si una web tarda más de 5 segundos en cargar, el 70% de los usuarios lo cierra y no vuelve a entrar más</li>
        </ul>
      </div>

      <div class="item">
        <ul>
          <li><img src="imagenes/asesoramiento.png" alt=""></li>
          <li>Asesoramiento</li>
          <li>Mantengo una comunicación constante con mi cliente, para enseñarle a modificar contenido mediante el panel de WordPress o para cualquier duda cambio que quiera hacer en su sitio web.</li>
        </ul>
      </div>

      <div class="item">
        <ul>
          <li><img src="imagenes/mobile.png" alt=""></li>
          <li>Mobile Priority</li>
          <li>Cada vez mas personas navegan desde sus celulares en cualquier parte del mundo. Me aseguro de que tu web esté optimizada para cualquier tipo de dispositivo móvil.</li>
        </ul>
      </div>

    </div>

  </div>
</section>
<!--FIN DE PORQUE TRABAJAR CONMIGO-->

<!--SECCION DE BLOG-->
<section id="blog">
  <div class="contenedor">
    <h3>Blog</h3>
    <div class="contenedor-publicaciones">
      <div class="publicacion">
        <img src="imagenes/blog1.jpg" alt="">
        <div class="contenido">
        <h4>No alcanza con tener solamente una página web</h4>
        <p>¿Quieres aprender cuales son las herramientas que usan las mejres marcas para generar tráfico?</p>
        <a href="">Leer más →</a> <!--La flecha se encuentra en buscardor de windows como mapa de caracteres-->
      </div>
      </div>

      <div class="publicacion">
        <img src="imagenes/blog2.jpg" alt="">
        <div class="contenido">
        <h4>¿Qué es el remarketing y como utilizarlo?</h4>
        <p>El remarketing es una de las técticas mas utilizadas por las mejores compañías! ¿Quieres saber de que se trata?</p>
        <a href="">Leer más →</a> <!--La flecha se encuentra en buscardor de windows como mapa de caracteres-->
        </div>
      </div>

    </div>
  </div>
</section>
<!--FIN SECCION DE BLOG-->

<!--SECCION QUE ESPERAS PONER TU PAGINA WEB-->
<section id="que-esperas"> <!--comando rapido de id se escribe section#que-esperas y precionar tabulador-->
  <div class="contenedor"> <!--para crear una clase en automatico .contendor y TAB -->
    <h3>¿Qué esperas para tener tu página web?</h3>
    <a href="">CHARLEMOS</a>
  </div>
</section>
<!--FIN QUE ESPERAS PONER TU PAGINA WEB-->

<!--SECCION CONTACTOS-->
<!--Codigo para el envio del formulario-->
<section id="contacto">
  <!--Inicio Codigo para el envio del formulario-->
  <?php //etiqueta q abre php
  if(@$_GET['i']=='ok'){//quiere decir que el formulario se envio correctamente ?> <!--etiqueta q sierra php es ?>-->
<!--GET es la url-->
    <h3>La consulta se envio correctamente. Nos Contactaremos a la brevedad. </h3>

    <?php //etiqueta q abre php
  }else{
  ?> <!--etiqueta q sierra php es ?>-->


  <div class="contenedor">
    <h3>Contactos</h3>
    <!--El atributo required significa que el usurio tiene q escibir algo en cada text box del formulario-->
    <form action="envio-formulario.php" method="post" enctype="multipart-form-data">

      <input type="text" placeholder="Tu Nombre" name="nombre" required>
      <input type="email" placeholder="Tu Email" name="email" required>
      <textarea placeholder="Tu Mensaje" name="mensaje" required></textarea>
      <input type="submit" value="ENVIAR MENSAJE ">

    </form>    <!--la etiqueta form permite crear el formulario-->
      <?php } ?> <!-- fin de cierre de php-->
<!-- el atributo action indica que cual es el archivo php que vas star recibiendo los datos del formulario -->
<!--el atributo method es el metodo por el cual se ba a enviar el formulario de manera oculta (post) -->
<!--el atributo enctype es para que pueda subir un archivo adjunto -->

<!--la etiqueta input son para los campos del formulario   -->
<!--type es el tipo d atributo, ejm text es texto  -->
<!--el atributo placeholder es el sms q se va ver antes q el usurio escriba algo en el campo -->
<!--name es el nombre del campo-->
<!--la etiqueta textarea es para el campo de texo-->

    <!--INICIO DE CONTACTO INFO-->
    <div class="contacto-info">
      <div class="mail"> <img src="imagenes/mail-icon.png" alt="">jairodarwinlino@gmail.com</div>
      <div class="whatsapp"> <img src="imagenes/whatsapp-icon.png" alt="">943564215 </div>
    </div>
  <!--FIN DE CONTACTO INFO-->

  </div>

</section>
<!--FIN DE CONTACTOS-->

</main>

<!--INICIO DE PIE DE PAGINA-->
<footer><!--Footer es pie osea pie de agina.-->
  <div class="contenedor">
    <!--el atributo alt es para la descripcion del imagen para q entiende google -->
    <div class="redes">
      <a href="https://web.facebook.com/profile.php?id=100010714603710" target="_blank"> <img src="imagenes/facebook.png" alt="imagen de facebook"> </a>
      <a href="https://github.com/Jairo-Lino" target="_blank"> <img src="imagenes/github.png" alt="imagen de github"> </a>
      <a href="https://www.linkedin.com/in/jairo-darwin-lino-lore%C3%B1a-0b647914a/" target="_blank"> <img src="imagenes/linkedin.png" alt="imagen de linkedin"> </a>
      <a href="https://www.instagram.com/jairo_lino31/?hl=es-la" target="_blank"> <img src="imagenes/instagram.png" alt="imagen de instagram"> </a>
      <a href="https://twitter.com/linojairodarwin" target="_blank"> <img src="imagenes/twitter.png" alt="imagen de twitter"> </a>
    </div>

    <div class="parrafo">
      <p> Desarrollador Web | <a href="https://jairolino.000webhostapp.com/">Jairo Lino</a>. Todos los derechos reservados © <?php echo date("Y"); ?></p>
    </div>

  </div>

</footer>
<!--FIN DE PIE DE PAGINA-->

<!--INICIO CARRUSEL-->
<!--URL de jquery es un lenguaje de programacion, y es un frameworks de java script -->
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="owl/owl.carousel.min.js"></script> <!--ruta de js carousel-->
<script> /*!--en esta etiqueta de scrip se van a usar archivos de jquery y jaca script por lo tanto estamo usando el conteo de lo carousel */
$('.owl-carousel').owlCarousel({
  loop:true,
  margin:10, /*margen 10 */
  nav:true,
  dots: false, /*!--dots false indica que no me muestre los puntos en la imagen de carousel*/
  responsive:{
      0:{   /*Responsive: en celulares muestrame 1 imagen de carusel*/
          items:1
      },
      600:{/*Responsive: en tablets muestrame 3 imagen de carusel*/
          items:2
      },
      1000:{/*Responsive: en pc o escritorios muestrame 5 imagen de carusel*/
          items:3
      }
  }
})
</script>
<!--FIN CARRUSEL-->

<!--INICIO SECCION MENU FIJO para escritorio-->
<script >
/* llamamos a "document"=q cuenado el documento "realy"=este listo "function"=dame la funcion la q sta detro del corchete  */
$(document).ready(function(){
/*llamamos a windows q es toda la pantalla, .scroll(es una funcion)  */
/*cuando realizas scrol en la ventana aplicame la q sta en el corchete*/
  $(window).scroll(function(){
    scroll = $(window).scrollTop(); /*una variable q se llama scroll vamos a almacenar la funcion scrolltop */
    /*si el jiro de scrool es mayor q 100 , el posicion del menu este quieto */
    if(scroll > 100){
      $('.menu').css({"position":"fixed"});
      $('.menu').css({"width":"100%"});/* el estilo width":"100%" para q el elemto del menu no se comprima*/
      $('.menu').css({"top":"0"}); /*top cero para q la pocion del menu este arriba*/
      $('.menu').css({"background":"#00babe"});// el fonfo del menu q sea verde
      $('.menu a').css({"color":"#fff"}); /* q los elementos de menu este de color blanco  */
      //$('.logo').css({"color":"#000"}); /*q los elemento logo este de color negro  */
      /*$('.menu').css({"box-shadow":"rgba(0, 0, 0, 0.22) 6px 1px 1px"});    es una sombra del menu como una linea*/
      $('.menu').css({"z-index":"100"}); /*z-index 100 es q el sistema tiene q hir por delante de todo osea el menu con la sombra tiene q hir primero */
      $('.menu').css({"transition": "o.8s"});/*  tiempo de transicion */
      $('.logo').css({"height": "80px"});/*tamaño del logo*/

    }else {
       //cuando no hay scroll, cuando el scroll es para arriba
       $('.menu').css({"position":"relative"}); //"position":"realtive" es la posicion x defecto
       $('.menu').css({"background":"transparent"}); // el fonfo del menu q sea transparente
       // $('.menu').css({"box-shadow":"0 0 0"});  la sombra del menu q sea transparente
       $('.menu a').css({"color":"#fff"}); /* q los elementos de menu este de color blanco  */
       //$('.logo').css({"color":"#fff"}); /*q los elemento logo este de color blanco  */
       $('.menu').css({"transition": "0.8s"});/*tiempo de transicion de menu*/
       $('.logo').css({"height": "80px"});
    }
  })
//fin de animacion de MENU FIJO para escritorio
//INICIO DE ANIMACION DE MENU PARA MOVIL EN JQUERY
$('.menu-icon').click(function(){ //cuando realizas un click en el menu de icon de movil aplicame la fucion
// el slideToggle permite q al realizar un clic en icono de menu deslizara hacia abajo y ademas desliza hacia arriba
// slideDown desliza hacia trabajo
//slideUp desliza hacia arriba
  $('header nav') .slideToggle() //estamos llamando a la etiqeta header nav y ademas el deslizamnto abajo y arriba
})
//fin DE ANIMACION DE MENU PARA MOVIL EN JQUERY
})

</script>
<!--FIN SECCION MENU FIJO-->


</body> <!--Etiqueta que cierre del cuerpo de la pagina-->
</html> <!--Etiqueta que cierra en atml -->

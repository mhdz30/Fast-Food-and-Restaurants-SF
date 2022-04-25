<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Oswald:wght@700&family=PT+Sans&display=swap" rel="stylesheet">
  <meta name="theme-color" content="#fafafa">
</head>

<body>
  <header class="site-header">
         <div class="hero">
           <div class="contenido-header">
             <nav class="redes-sociales">
               <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></i></a>
               <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
               <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
               <a href="login.php" class="btnIniciar" >INICIAR SESIÓN</a>
               <div class="descripcion-pagina">
                 <h1 class="nombre-pagina">Restaurants & Fast Food</h1>
                 <a href="register.php" class="bottom">Registrate aquí</a>
                 <h3 class="ciudad"><i class="fas fa-map-marker-alt"></i> SFM</h3>
                 <p class="descripcion">Encuentra y conoce los mejores restaurantes
                 y sitios de comida <br>de San Francisco aqui!</br></p>
                 <div class="utensilio-food">
                   <a href="#"><i class="fas fa-utensils"></i></a>
                 </div>
               </div>
             </nav>
           </div>
         </div><!--.hero-->
      </header>

      <div class="navegacion-sidebar">
        <nav>
          <ul>
            <li> <a href="#">Inicio</a> </li>
            <li> <a href="#">Nosotros</a>
              <ul>
                <li> <a href="#">Mision</a> </li>
                <li> <a href="#">Vision</a> </li>
                <li> <a href="#">Valores</a> </li>
              </ul>
            </li>
            <li> <a href="Restaurantes.php">Restaurantes</a>
              <ul>
                <li> <a href="Restaurantes.php">Ver</a> </li>
                <li> <a href="#">Pedidos</a> </li>
                <li> <a href="#">Reservaciones</a> </li>
              </ul>
            </li>
            <li> <a href="fastfood.php">Puestos de Comida</a>
              <ul>
                <li> <a href="fastfood.php">Ver</a> </li>
                <li> <a href="#">Ordenar</a> </li>

              </ul>
            </li>
            <li> <a href="contacto.php">Contacto</a> </li>
          </ul>
        </nav>
      </div>

      <div class="contenido contenedor">
        <main>
          <h1>Lo más destacado</h1>
          <article>
             <h2>Catalina Restaurant</h2>
             <img src="img/catalina2.jpg" alt="imagen catalina restaurant">
             <p>Ubicado en la Av. Pdt Antonio Guzman Fernandez. Puedes hacer reservaciones, pedidos, etc.</p>
             <p>Lorem ipsum dolor sit amet consectetur adipiscing elit arcu sapien, nam himenaeos fusce sollicitudin et lectus curabitur augue eu, ultricies proin semper sem convallis mus ornare vivamus. Dignissim nibh ligula suspendisse tortor blandit ultricies aptent imperdiet, dapibus mollis vehicula orci duis himenaeos gravida habitant, nam sociosqu velit montes laoreet egestas placerat.</p>
            <a href="Restaurantes.php" class="boton">Leer mas</a>
          </article>

          <article>
             <h2>Cocina Garden Bar</h2>
             <img src="img/cocinagardenbar.jpg" alt="imagen cocinagardenbar">

            <p>Rhoncus sociosqu sed dis curabitur nec molestie elementum mi, aenean duis ridiculus natoque senectus curae class congue, platea condimentum nam pretium interdum dignissim sollicitudin.</p>

            <a href="Restaurantes.php" class="boton">Leer mas</a>


          </article>

          <article>
             <h2>El Rincón de Tito</h2>
             <img src="img/tito.jpg" alt="imagen el rincon de tito">
             <p>Lorem ipsum dolor sit amet consectetur adipiscing elit arcu sapien, nam himenaeos fusce sollicitudin et lectus curabitur augue eu, ultricies proin semper sem convallis mus ornare vivamus. Dignissim nibh ligula suspendisse tortor blandit ultricies aptent imperdiet, dapibus mollis vehicula orci duis himenaeos gravida habitant, nam sociosqu velit montes laoreet egestas placerat.</p>

            <p>Rhoncus sociosqu sed dis curabitur nec molestie elementum mi, aenean duis ridiculus natoque senectus curae class congue, platea condimentum nam pretium interdum dignissim sollicitudin.</p>
            <a href="fastfood.php" class="boton">Leer mas</a>
          </article>
        </main>

        <aside class="sidebar">
          <h2>Otros Sitios</h2>
          <ul>
            <li><a href="#"></a>La Marucha</li>
            <li><a href="#"></a>El Tanque</li>
            <li><a href="#"></a>El Patio Restuarant</li>
            <li><a href="#"></a>El Doral Restaurant</li>
            <li><a href="#"></a>Barra El Polo</li>
          </ul>
        </aside>

      </div> <!--.Contenido.-->

      <footer>
        <div class="contenedor">
          <div class="nosotros">
            <h2>Sobre Nosotros</h2>
            <p>
               Restaurantes & Puesto de Comida SFM &copy; te ayuda a localizar y a conocer los restaurantes y puestos de comida que existen en San Francisco de Macoris. Republica Dominicana.
            </p>
          </div><!--.Nosotros.-->
          <div class="Menu">
            <nav>
              <ul>
                <li> <a href="#">Inicio</a> </li>
                <li> <a href="#">Nosotros</a></li>
                <li> <a href="#">Restaurantes</a></li>
                <li> <a href="#">Puestos de Comida</a> </li>
                <li> <a href="#">Contacto</a> </li>
              </ul>
            </nav>
          </div><!--.menu .-->
        </div><!--.contenedor.-->

        <p class="copyright">
          Todos los derechos reservados. &copy;. Restaurantes & Puestos de Comida SFM 2020
        </p>

      </footer>
  <!-- Add your site or application content here -->

</body>

</html>

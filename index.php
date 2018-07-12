<!DOCTYPE html>
  <html>
    <head>
       <link rel="stylesheet" type="text/css" href="../css/login.css">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/login.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
       <meta charset="UTF-8">
       <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

    <script type="text/javascript" src="js/materialize.min.js"></script>

    <script type="text/javascript" src="js/carousel.js"></script>

    <script type="text/javascript">$(document).ready(function(){$('.sidenav').sidenav();});</script>
    </head>

    <body>
      <nav>
    <div class="nav-wrapper #b71c1c red darken-4">
      <a href="#" class="brand-logo">Carnicerias Ex San Martin</a>
       <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="view\Locales.html">Locales</a></li>
        <li><a href="view\Nosotros.html">Nosotros</a></li>
         <li><a href="view\Recetas.html">Recetas</a></li>
          <li><a href="view\Trabaja.html">Trabaja con nosotros</a></li>
          <li><a href="view\vivo.html">En Vivo</a></li>
           <li><a href="view\Login.html">Iniciar Sesion</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
     <li><a href="view\Locales.html">Locales</a></li>
        <li><a href="view\Nosotros.html">Nosotros</a></li>
         <li><a href="view\Recetas.html">Recetas</a></li>
          <li><a href="view\Trabaja.html">Trabaja con nosotros</a></li>
          <li><a href="view\vivo.html">En Vivo</a></li>
           <li><a href="view\Login.html">Iniciar Sesion</a></li>
  </ul>


  <main>
  <div class="container" style="margin-top:5%; background-color:#ef5350">

      <div class="carousel carousel-slider center" style="height:90%">
      
      <div class="carousel-item red white-text " href="#one!"><img class="responsive-img" src="img/carne1.jpg" style="height:90%">
        <p class="white-text">This is your first panel</p>
      </div>
      <div class="carousel-item amber white-text" href="#two!"><img class="responsive-img" src="img/carne2.jpg" style="height:90%">
        <h2>Second Panel</h2>
        <p class="white-text">This is your second panel</p>
      </div>
      <div class="carousel-item green white-text" href="#three!"><img class="responsive-img" src="img/carne3.jpg" style="height:90%">
        <h2>Third Panel</h2>
        <p class="white-text">This is your third panel</p>
      </div>
      <div class="carousel-item blue white-text" href="#four!"><img class="responsive-img" src="img/carne4.jpg" style="height:90%">
        <h2>Fourth Panel</h2>
        <p class="white-text">This is your fourth panel</p>
      </div>
    </div>
<div class="row">
<div class="col s12">
      
      <?php
     
     require_once "model/data.php";
     $d = new data();

     $productos = $d->getProductos();
     
     foreach($productos as $p)
     {
      
           
      echo '<div class="col s4" style="background-color:#ef5350; margin-top:2%">';
      echo '<div class="row">';
      echo '<div class="col s12 m10" style="margin-left:10%">';
      echo '<div height:120px;>';
      echo '<div class="card hoverable medium" >';
      echo '<div class="card-image">';
      echo '<img src='.$p-> imagen.' class="responsive-img">';
      echo '<span class="card-title"></span>';
      echo '</div>';
      echo '<div class="card-content">';
      echo '<p>';
      echo "Nombre: " .$p-> nombre;
      echo "<br>";
      echo "Descripcion: " .$p-> descripcion;
      echo "<br>";
      echo "precio: " .$p-> precio_venta;
      echo "<br>";
      echo  '</p>';
      echo '</div>';
      echo '<div class="card-action">';
      echo '<a href="#">Agregar al carro</a>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
      
      
      
      //echo '<img src="../'.$p-> imagen.'" alt="">';

     // echo "<br>" ;
      
      
     }
     
     
     ?>
     
     
    
    </div>
     </div>
     
     


</main>



  <footer class="page-footer #b71c1c red darken-4">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Contactanos</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 1978 Carnicerias Ex San Martin
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>

    </body>
    
  </html>
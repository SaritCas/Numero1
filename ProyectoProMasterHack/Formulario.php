<?php
include("conexion.php");
 ?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario</title>
    <link rel="stylesheet" href="StyleFormulario.css">
    <link href="https://fonts.googleapis.com/css?family=Homemade+Apple|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="StyleFooter.css">

    <link rel="stylesheet" href="Animaciones.js">
    <link rel="stylesheet" href="css/fontello.css">
     <link rel="stylesheet" href="css/in.css">
     <link rel="stylesheet" href="css/menu.css">
     <link rel="stylesheet" href="css/banner.css">
     <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/info.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style media="screen">
    body{background-size: cover;}
    header{
      background-image: url(Img2/Banner1.jpg);
    }
    header h1{margin-top: 5px;}
    header a:hover{
      color: #373737;
    }
    @media screen and (max-width: 400px){
      .contenedor h1{
        margin-top: 10px;
        font-size: 20px;
      }
    }
    @media screen and (min-width: 1025px){
      header .menu{
        background: none;
      }
    }
    </style>
  </head>
  <body>

    <div class="contenido">
      <header>
        <div class="contenedor">
          <!--<h1 class="icon-cel">MobilZone</h1>-->
          <img src="Img2/Logo1.png" >
          <h1>MovilZone</h1>
          <input type="checkbox" id="menu-bar">
          <label class="icon-menu" for="menu-bar"></label>
          <nav class="menu">
            <a href="index.html">Inicio</a>
            <a href="indice.html">Indice</a>
            <a href="Formulario.php">Opiniones</a>
            <a href="referencias.html">Referencias</a>
          </nav>
        </div>
      </header>
      <br><br>
      <!--<div class="forms">
        <form class="" action="" method="post">
          <h2>Contacto</h2>
          <input type="text" name="Nombre" placeholder="Nombre" required>
          <input type="text" name="correo" placeholder="Correo" required>
          <input type="text" name="telefono" placeholder="Teléfono" required>
          <textarea name="Mensaje" placeholder="¿Razon por la cual entra a la campaña?" required></textarea>
          <input type="button" value="Enviar" id="boton">
        </form>
      -->
        <form class="" action="enviar.php" method="post">
          <h2>Comentar</h2>
          <input type="text" name="NombreC" placeholder="Nombre" required>
          <input type="email" name="correoC" placeholder="Correo" required>
          <textarea name="comentario" placeholder="Comentario" required></textarea>
          <input type="submit" value="Comentar" id="boton">
        </form>
      </div>


      <section class="losComentarios">
        <h2>Comentarios:</h2>

        <?php

          $sql = "SELECT * FROM ` mensajes`"; //Guarda el código sql
          $resultado = mysqli_query($con, $sql); //Ejecuta consulta
          while ($mostrar = mysqli_fetch_array($resultado)){ //Cada que se ejecute el while crea un cuadrito con clase .unComentario
          ?>
          <aside class="unComentario">
            <div class="cTitulo">
              <h4><?php echo $mostrar['nombre']?></h4><!--echo sirve para -->
              <img src="Img/Flechas.png" alt="...">
            </div>
            <p><?php echo $mostrar['comentario'] ?></p>
          </aside>
          <?php
            }
          ?>
      </section>
    </div>

    <footer>
      <div class="container-footer-all">

        <div class="container-body">
          <div class="colum1">
            <h1>Más información de la compañia</h1><br>
            <p>Está pagina es para aumentar la conciencia ambiental
              de la sociedad. <br>
              Somos conscientes de la importancia de cuidar nuestra salud y
              también debemos serlo de la necesidad de proteger nuestro entorno.
              La conciencia ambiental es un aprendizaje necesario, con
              independencia de nuestra edad o de nuestros conocimientos.</p>
          </div>

          <div class="colum2">
            <h1> <center> Más de nosotros </center></h1>
            <a href="Formulario.html">
              <div class="row">
                <img src="https://img.icons8.com/dusk/64/000000/comments.png" alt="...">
                <p>¡Clic aquí!</p>
              </div>
            </a>
            <a href="index.html">
              <div class="row">
                <img src="https://img.icons8.com/office/40/000000/home.png" alt="...">
                <p>Inicio</p>
              </div>
            </a>
          </div>

          <div class="colum3">
            <h1>información de contacto</h1><br>

            <div class="row2">
              <img src="https://img.icons8.com/dusk/64/000000/near-me.png" alt="...">
              <label for="">Universidad 2, La Loma Xicohtencatl, 90070 Tlaxcala de
                Xicohténcatl, Tlax.</label>
            </div>
            <div class="row2">
              <img src="https://img.icons8.com/nolan/64/000000/phone-office.png" alt="...">
              <label for="">+55-246-139-9547</label>
            </div>
            <div class="row2">
              <img src="https://img.icons8.com/dusk/64/000000/email.png" alt="...">
              <label>monse2002sarit@gmail.com, danielhachac@gmail.com</label>
            </div>
          </div>
        </div>

      </div>

      <div class="container-footer">
        <div class="footer">
          <div class="copyright">
            © 2019 Todos los derechos reservados | <a href="index.html">MovilZone</a>
          </div>

          <div class="information">
            <a href="#">Información de la compañia</a> |
            <a href="https://policies.google.com/?hl=es">Privación y Politica</a> |
            <a href="https://policies.google.com/terms?hl=es">Terminos y Condiciones
            </a>
          </div>
        </div>
      </div>
    </footer>

  </body>
</html>

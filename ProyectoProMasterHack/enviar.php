<?php
include("conexion.php");
    $nom = $_POST['NombreC'];
    $cor = $_POST['correoC'];
    $coment = $_POST['comentario'];

    /*mysql_query("inset into usuarios(nombre, correo, fecha_nacimiento, telefono)
     values('$nom', '$cor', '$fech', '$tel')")or die(mysql_error());*/
     //here
     $insert_value = 'INSERT INTO `' . $db_name . '`.` '.$db_table_name1.'` (`nombre` , `correo` , `comentario`)
     VALUES ("' . $nom . '", "' . $cor . '", "' . $coment . '")';
   //here
      mysqli_select_db($con, $db_name);
      $retry_value = mysqli_query($con, $insert_value);
      if (!$retry_value) {
        echo "error_registro ";
      }
      else{
          $contenido1="Gracias ". $nom . "Por tu comentario lo tomaremos en cuenta\n".
          "Visita elefanteweb.000webhostapp.com para mas ;D";
          mail($cor, "Comentario", $contenido1);//Destino, Asunto, contenido
          $contenido1="Hey Monse  ". $nom . "ha comentado\n".
          "consulta en elefanteweb.000webhostapp.com/Formulario.php ;D";
          mail("monse2002sarit@gmail.com", "Alguien comento", $contenido1);
          header ("Location: Formulario.php");
       }
?>

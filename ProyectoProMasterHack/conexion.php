<?php
  $db_host="localhost"; //host
  $db_name="id9446395_as"; //nombre de BD
  $db_login="id9446395_root";//Usuario
  $db_pswd="Lucky258";//Psw
  $db_table_name1="mensajes"; //Nombre Tabla
  $con=mysqli_connect($db_host,$db_login,$db_pswd,$db_name);
  if($con){
    //echo "bien_Conexion";
  }
  else{ echo "error_Conexion";}
?>

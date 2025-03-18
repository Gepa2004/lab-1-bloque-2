<?php
 $conexion = mysqli_connect (hostname:"localhost", username:"root", password:"", database:"clientedb");

 if(mysqli_connect_error()){
    echo "error: ". mysqli_connect_error();
 }else{
    echo "conexion realizada"
 }

?>

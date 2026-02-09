<?php

//conexion con mysql
$servidor = "localhost";
$usuario = "root";
$password = "";
$base_datos = "curs";

$conexion = mysql_connect($servidor, $usuario, $password, $bd);

$nombre = "Roldan";
$email = "facultadautodidacta@gmail.com";

$sql = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')";

  if(mysql_query($conexion)){

  
        echo "Registro insertado correctamente";
    } else {
        echo "Error al insertar registro: " . $stmt->error;
    }
    
    mysql_query($conexion);




?>
?>

<?php 
/**
 * areglo asociativo 
 * llaves(keys) o claves en lugar indices 
 * delarar array y 
 */

$persona = array (
    "nombre" => "juan",
    "edad" => "25",
    "ciudad" => "CDMX"
);

$producto=[
    "nombre" => "laptop",
    "precio" => 100000,
    "marca" => "DELL"
];
//acceso
echo $persona["nombre"];
//agregar elementos
$persona["profesion"] = "Ing";
echo "<pre>";
var_dump($persona);
echo "</pre>"
?>

<?php
/**
 * es una estructura de datos que permite almacenar multiples valores
 * arreglo indexado
 * declaracion con array.
 * por el indice que corresponde
 * 
*/
$frutas = array ("manzana","pera","uva");
echo  $frutas[0]; //entrar
echo "<hr>";

echo "<pre>";//ayuda a viasualizar
var_dump($frutas);
echo "<pre>";
echo "<hr>";
//sintaxis corta de array
$colores = ["rojo", "negro","blanco"];
echo "<pre>";//ayuda a viasualizar
var_dump($colores);
echo "<pre>";
echo "<hr>";
//agregar un elemento al final del arreglo cuando ya tienen elemntos
$colores[] = "gris";
echo "<hr>";
$colores[1] = "azul";
$colores[10] = "purpura";
var_dump($colores);
?>

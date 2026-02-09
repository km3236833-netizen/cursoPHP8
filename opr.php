<?php 
//operadores aritmeticos
/**
 * == , ===  , !=  o <>, !==, <, > , <=>
 * igual, identico , diferente , no identico ,menor ,mayor ,nave espacial 
 * 
 * 
 */

$x = 10;
$y = '10';
$z= 15;

// var_dum lo que ara es imprimir lo que esta adentro
var_dump($x == $y);//true
echo "<br>";
var_dump($x === $y);//false
echo "<br>";
var_dump($x != $z);//true
echo "<br>";
var_dump($x !== $y);//true 
echo "<br>";
var_dump($x < $z);//true 
echo "<br>";
var_dump($x > $z); // false 1 

//operador de nave especial  
/** 
 * Para la nave espacial  (PHP +7)
 * -1 si el valor de la izquierda es menor que el de la derecha 
 * 0 si los valores son iguales
 * 1 si es valor de la izquierda es mayor que el de la derecha 
 */
echo 5 <=> 3 ;
?>

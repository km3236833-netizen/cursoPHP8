<?php
// Proposito combinar las expresiones booleanas son el resultado de obtener de un  modulo de codigo  que va a retorno  verdadero o falso s

/** Operadores logicos 
 *  (&& o and) (y logico)  true ambas verdaderas
 *  (or  o || ) (o logico ) true si uno es true
 *   xor (o exclusivo) true si solo es true 
 * ! (not logico) true si $a es false  
 * 
 * En php xor es un operador logico que devuelve true solo si uno de sus operadores es verdadero y el otro es falso (no ambos).
 */
// operador logico and
var_dump(true && true );# es una fusion --> true 
echo "<hr>";
var_dump(true && false ); # es mas descriptivo --> false 
echo "<hr>";
var_dump(false && false ); # es mas descriptivo --> false
echo "<hr>";
var_dump(false  && true  ); # es mas descriptivo --> false 
echo "<hr>";
// operador logico or 
var_dump(true || true );# --> true 
echo "<hr>";
var_dump(true || false ); #--> true 
echo "<hr>";
var_dump(false || true  ); # -> true 
echo "<hr>";
var_dump(false  || false  ); # --> false 
echo "<hr>";
 // operador logico XOR
 var_dump(true xor true );# --> false 
echo "<hr>";
var_dump(true xor false ); #--> true 
echo "<hr>";
var_dump(false xor true  ); # -> true 
echo "<hr>";
var_dump(false  xor  false  ); # --> false 
echo "<hr>"; 
// operador not de negacion 
var_dump(!true);// false 
echo "<hr>";
var_dump(!false); //true 
echo "<hr>";
 ?>

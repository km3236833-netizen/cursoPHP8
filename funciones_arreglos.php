<?php 
$numeros = [1,2,3,4,5];
echo "<h4> Contar elementos de un arreglo </h4>";
echo count($numeros);
echo "<hr>";
//agregar al final de un arreglo 
array_push($numeros, 6);
echo "<pre>";
var_dump($numeros);
echo "</pre>";
echo "<hr>";
//arregar al inicio del arreglo 
array_unshift($numeros,100);
echo "<pre>";
var_dump($numeros);
echo "</pre>";
echo "<hr>";
// eliminar al final del arreglo
$eleminar = array_pop($numeros);
echo $eleminar;
echo "<pre>";
var_dump($numeros);
echo "</pre>";
//eliminar al inicio 
echo "<hr>";
$inicio = array_shift($numeros);
echo $inicio;
echo "<pre>";
var_dump($numeros);
echo "</pre>";
echo "<hr>";
//organiza el arreglo las funciones de los arreglos
//verificar si existe una valor
$personas =[
    "nombre" => "roldan", 
    "curso"  => "php 8"
];

if (in_array("rolda",$personas)) {
    echo "el nombre esta en el arreglo";
}else {
    echo "no lo encontre";
}
echo "<hr>"; 
//funciones de ordenamiento
//orden asendete
sort($numeros);
var_dump($numeros);
echo "<hr>"; 
print_r($numeros);
//orden descendete
echo "<hr>"; 

rsort($numeros);
print_r($numeros);

echo "<hr>"; 
//combinar arreglos 
$a = [1,2.3];
$b = [4,5,6];

$c = array_merge($a, $b);
print_r($c);

//buscar en el arreglo 
$posicion = array_search(6, $b);
echo $b[$posicion];
?>

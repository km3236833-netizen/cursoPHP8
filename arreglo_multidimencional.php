<?php 
/**
 * arreglo multidimencional 
 * es un arreglo que contiene arreglos como elementos
 * 
 * arreglo bidimencional 
 */

$estudiante =[
    ["juan",25,"ing"],
    ["maria",25,"medico"]
];
//acceder
echo $estudiante[0][0];//JUAN 
echo "<br>";
echo $estudiante [1][2];

//arreglo multidimencional

$productos = [
    "laptop" => [ 
         "marca" => "hp",
          "precio" => 8000,
          "stock"  => 5
    ],
          "marca" => "logitech",
          "precio" => 500,
          "stock"  => 20
];
echo "<br>";
//adquirir el precio de la laptop 
echo  $productos["laptop"]["precio"];
?>

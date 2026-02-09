<?php 
// si necesitas al menos una iteracion segura 
// y despues evaluacion usa do while 


// validacion simple

do {
    $respuesta = 'no';
    echo "continuar  (si/no) $respuesta";
} while ($respuesta === 'si');
echo "<hr>";
// iteracion garantizada

$contador =1;
do {
    echo "ejecucion  $contador";
    $contador ++;
 echo "<br>";   
} while ($contador <= 3);
?>

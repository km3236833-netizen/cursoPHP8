<?php
//funciones con valor de retorno 
// son funciones que retornan un valor 
//facilmente amacenable o para procesar
//PHP DE backend

function multiplicar($valor, $valor2){
    return $valor * $valor2;// por el return que perimite procesar
}
//se puede procesar 
 echo "<hr>";
 echo multiplicar(8,8);
echo "<hr>";
$total =multiplicar(7,7);
if ($total < 100) {
    echo "$total es un valor menor de cien";
}
//
?>

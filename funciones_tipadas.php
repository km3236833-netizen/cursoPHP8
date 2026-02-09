<?php 
//tipado 
/**
 * Funciones con tipado de datos:
 * organizacion del codigo parte de la documentacion 
 */
declare(strict_types = 0);
function dividir (float $valor1, float $valor2): float{
    return  $valor1 / $valor2;
    }
echo dividir (10,2);
echo "<hr>";
echo dividir (10,"2");
?>

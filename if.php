<?php 
/** Estructuras de control if 
 * que es : es una estructura que nos ayuda al flujo de ejecucion 
 *  de nuestro codigo 
 * 
 * if es una estructura condicional 
 * donde si condicion su es verdadera se ejecuta.
 * su estrutura o declaracion es 
 *  if (condicion){
 * }
 */
if (true){
    echo "Esta estructura se ejecuto bien ";
}
if (false){
    echo "Esta estructura se ejecuto bien ";// no se va ejecutar 
}
echo "<hr>";
$numero = 15;
if ($numero >10){
    // interpolacion dentro de echo de numero es mayor
    echo "el numero $numero es mayor que 10 ";   
}
echo "<hr>";
$texto = "HOLIS";

# determina if a variable declarada es diferente a null
//empety --> determina si una variablr es esta vacia 
//ISSET verificar una variable definida si no esta vacia 
if (isset($texto)&& !empty($texto)){
    
   echo "texto valido $texto";     
}
echo "<hr>";
// verificar  si una persona tiene acceso 
$estaregistrado = true;
if ($estaregistrado){
    echo "acceso consedido al sistema";
}

?>

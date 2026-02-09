<?php 
/**
 * try catch 
 * --> solo poniendo <?php finciona sin nesecidad de cierre 
 * estructura de control de errores 
 * permite ejecutar codigo que vaya a falla y maneja errores sin romper el programa 
 * finally es opcional pero recomendado
 */

try {
    $a = 10;
    $b = 0;
    if ($b === 0){
       throw new Exception ("No se puede dividir entre cero");
    echo "<hr>" ;
   }
   echo $a / $b;
} catch (Exception $th) {// aqui procesas 
    echo $th -> getMessage();
}finally{ 
     echo "<hr>" ;      
    echo "Operacion fallida";
    
}
 echo "<hr>";
// validacion email este puede venir por formulario html 
try {
    $email= "correo.com";
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
     throw new Exception ("El correo no es valido");   
    }
    echo "correo valido $email";
} catch (Exception $th) {
    echo $th -> getMessage();//funcion
}
?>

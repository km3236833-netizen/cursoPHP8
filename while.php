<?php 
// while es una estructura de conttrol mientras su condicion sea verdadera
//while (true) {
   // echo "hols";
//}

// contar numeros 

$numero =1;
while ($numero <=3){
     echo "el numero es  $numero";
     echo "<br>"; // poniendo una p se puede dar el salto
     $numero = $numero + 1;// por cada interacion     
}
echo "<hr>"; 
// repetir un mensaje 
$veces =0;
while ($veces <4){
    echo "$veces . -Hola que tal";
    echo "<br>"; 
    $veces ++; # esto es igual a esto  $numero = $numero + 1;
}
?>

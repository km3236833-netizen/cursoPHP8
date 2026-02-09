<?php 
$coches = ["deportivo" ,"sedan","camioneta"];

for ($i=0; $i < count($coches) ; $i++) { 
    echo " el en indice $i ". $coches[$i];
    echo "<hr>";
}   
$numeros = [1,4,7,8,9,6,3];
    foreach($numeros as $numero){
        echo $numero;
        echo "<br>";   
    }
    echo "<hr>"; 
foreach ($numeros as $indice => $valor) {
    echo "el indice es $indice y el valor es $valor";
    echo "<br>"; 
   
}
?>

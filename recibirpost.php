<?php
//arreglo asiciativo nombre es una llave 
var_dump($_POST);
echo "<br>";
$nombre =$_POST["nombre"];
echo $nombre;
echo "<br>";
$materia =$_POST["materia"];
echo $materia;
echo "<br>";
if($materia == 'web'){
    echo "felicidades";
}
echo "<br>s;

if ($_SERVER["REQUEST_METHOD"]== "POST"){
    echo "procesado con exito";
    }else{ 
echo "el formulario no se proceso";
}




//emCapsular
// procesar informacion
//action que se vaya donde queremos 
//cada uno de controles haran un arreglo que haran una funcion
?>


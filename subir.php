<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $Destino = "subidos/".$nombre;
    $nombre = $_FILES['archivo']['name'];
    $Temporal = $_FILES['archivo']['tmp_name'];
    
    if (move_uploaded_file($Temporal, $Destino)){ 
        echo "<p>Archivo subido.</p>";
    } else {
        echo "<p>Error al subir.</p>";
    }
}
?>

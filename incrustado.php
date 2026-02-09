<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incrustado</title>
</head>
<body>
    <h1> Bienvenido</h1>
    <?php
    $nombre = "juan";
    $edad = 35;
     echo "<p>hola $nombre </p>"
    ?>
    <p> este es un blucle de controles div </p>
    <ul>
       <?php 
       //parecido un motor de plantilla
       for ($i=0; $i < 4; $i++):
        echo "<li> Elemento $i </li>";
       endfor;
       ?>
       
    </ul>
     <h2> Usuario: <?= $nombre ?></h2>
      <h2> Edad: <?= $edad ?></h2>
</body>
</html>


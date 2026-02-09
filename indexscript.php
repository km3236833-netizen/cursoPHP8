<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!empty($_POST["nombre"])){ 
        $nombre = $_POST["nombre"];
        echo "El nombre es $nombre";
    } else {
        echo "No mandaste nombre";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Procesar formularios</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="nombre">Escribe tu nombre</label>
        <br>
        <input type="text" name="nombre" id="nombre">
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

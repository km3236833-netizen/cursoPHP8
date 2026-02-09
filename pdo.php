<?php

// diferencia con mysqli -> se conecta a diversas bases de datos
try {

    $servidor = "localhost";
    $usuario  = "root";
    $password = "";
    $bd       = "curso";

    $conexion = new PDO(
        "mysql:host=$servidor;dbname=$bd",
        $usuario,
        $password
    );

    $nombre = "Linus";
    $email  = "linux@githubub.com";

    $sql = "INSERT INTO t_usuarios (nombre, email)
            VALUES (:nombre, :email)";

    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    echo "Usuario agregado con exito!!";

} catch (PDOException $th) {
    echo "Error: " . $th->getMessage();
}

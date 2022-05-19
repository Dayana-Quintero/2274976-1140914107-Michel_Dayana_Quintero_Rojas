<?php

$servidor="localhost";  // 127.0.0.1
$usuario="root";
$contrasenia="";

try {

    $conexion=new PDO("mysql:host=$servidor;dbname=album_1140914107", $usuario,$contrasenia );
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);   

    $sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugando con la programacion', 'foto.jpg');";

    $conexion->exec($sql); 

    echo "Conexion establecida";


} catch (PDOExpection $error) {
    echo "Conexion erronea".$error;

}


?>
<?php 

$nombre_hero  = $_POST ['nombre'];
$clase_hero  = $_POST ['clase'];
$imagen_hero  = $_POST ['imagen'];
$descripcion_hero  = $_POST ['descripcion'];
include ("conexion.php"); 



mysqli_query($conexion_db, "INSERT INTO heroes VALUES (DEFAULT, '$nombre_hero' , '$clase_hero', '$imagen_hero' , '$descripcion_hero')" );

mysqli_close($conexion_db);

header("Location:index.php?ok");


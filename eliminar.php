<?php include("conexion.php");
$id_heroe =$_GET['id'];

mysqli_query($conexion_db, "DELETE FROM heroes WHERE id = $id_heroe ");

header("Location: ver.php");
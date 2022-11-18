<?php include ('header.php') ?>
<?php 
$texto = "<h4> Nombre: ". $_POST['usuario']. "Id de Steam: ". $_POST['id_steam']. "Posicion: ". $_POST['posicion']. "Correo: ". $_POST['correo'];


$archivo= fopen('solicitud.txt', 'a');
fputs($archivo, $texto);
echo "<p> Datos de solicitud almacenados.</p>";
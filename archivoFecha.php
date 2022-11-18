<?php include ('header.php') ?>
<?php date_default_timezone_set("America/Argentina/Buenos_Aires");


$Hora = date("l/M/y -- H:i");




?>


<section>
    <h1>El dia y la hora de hoy es  : <?php echo $Hora?></h1>
</section>
<section>
    <h1> Manejo de archivo </h1>
    <form action="archivo.php" method="POST">
        <input type="text" name="usuario" placeholder="Usuario" id="">
        <input type="text" name="id_steam" placeholder="id De Steam" id="">
        <input type="text" name="posicion" placeholder="posición" id="">
        <input type="text" name="correo" placeholder="correo" id="">
        <input type="submit" value="Enviar">

    </form>

</section>
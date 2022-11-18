<?php include ('header.php') ?>
<section>
    <?php include ("conexion.php");
        $consulta_db = mysqli_query($conexion_db,"SELECT * FROM heroes");

        while ($mostrar_datos = mysqli_fetch_assoc($consulta_db)){  
    ?>

    <div class="contenedor">
        <div class="contenedor2">
            <h2> <?php echo $mostrar_datos['nombre'] ?></h2>
        <h3> es de <?php echo $mostrar_datos['clase'] ?></h3>
        <img class="imagenes" src="imagenes/<?php echo $mostrar_datos['imagen'] ?>" alt="">
        <p> <?php echo $mostrar_datos['descripcion'] ?></p>
        <a  href="eliminar.php?id=<?php echo $mostrar_datos['id'] ?>">Eliminar</a>
        </div>
        
    </div>
    <?php } ?>


</section>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">
</head>
<body>
    <?php include ( 'header.php ')?>

    <h2 class="titulo3">Carga de Heroes</h2>

    <form action="cargar_heroes.php" method="POST">
    <input type="text" name="nombre" required placeholder="Nombre">
    <br>
    <input type="text" name="clase" required placeholder="Clase">
    <br>
    <input type="text" name="imagen" required placeholder="Imagen">
    <br>
    <textarea name="descripcion" id="" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" name="" id="" value="Cargar Heroe">



    </form>

    <?php
    if(isset($_GET['ok'])){
        echo "<h3> personaje cargado con exito </h3>";
        
    }
      
    ?>






    
</body>
</html>
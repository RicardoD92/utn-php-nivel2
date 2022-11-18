<?php include ('header.php') ?>
<section>
    <?php 
    $archivoVer = fopen('solicitud.txt', 'r');
    echo fread($archivoVer, 500);
    fclose($archivoVer);
    
    ?>
</section>
<!DOCTYPE html>
<html>
    <head>
        <title>mostrarCodigo - MTO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/jpg" href="../webroot/css/images/favicon.jpg" /> 
        <style>
            .imgprinc{
                width:40px;
                height:40px;
                transition: 0.5s;

            }
        </style>
    </head>
    <body>
        <a href="MtoDepartamentos.php">
            <img class="imgprinc" src="../webroot/css/images/flechaatras.png" alt="Atrás" title="Atrás"/>
        </a>
        <?php
        echo '<h1>Página Principal</h1>';
        $filename = "MtoDepartamentos.php";
        highlight_file($filename);
        ?>

    </body>

</html>



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
        echo '<h1>MtoDepartamentos [Página Principal]</h1>';
        $filename = "MtoDepartamentos.php";
        highlight_file($filename);
        
        echo '<h1>altaDepartamento [Inserción de un departamento]</h1>';
        $filename2 = "altaDepartamento.php";
        highlight_file($filename2);
        
        echo '<h1>bajaDepartamento [Eliminación de un departamento]</h1>';
        $filename3 = "bajaDepartamento.php";
        highlight_file($filename3);
        
        echo '<h1>editarDepartamento [Edición de un departamento]</h1>';
        $filename4 = "editarDepartamento.php";
        highlight_file($filename4);
        
        echo '<h1>mostrarDepartamento [Consulta de un departamento]</h1>';
        $filename5 = "mostrarDepartamento.php";
        highlight_file($filename5);
        
        ?>

    </body>

</html>



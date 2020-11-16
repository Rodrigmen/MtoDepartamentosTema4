<!DOCTYPE html>
<html>
    <head>
        <title>ConsultaDepartamento - MTO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../webroot/css/styleConsulta.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" type="image/jpg" href="../webroot/css/images/favicon.jpg"/>
    </head>
    <body>
        <form id="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <fieldset>
                <legend>Datos del Departamento</legend>

                <div class="required">
                    <label for="nombre">Código:</label>
                    <input type="text" name="nombre" value="<?php echo $_GET["codigoDep"] ?>" readonly/>
                </div>
                <div class="required">
                    <label for="nombre">Descripción:</label>
                    <input type="text" name="descripcion" value="<?php echo $_GET["descDep"] ?>" readonly/>
                </div>
                <div class="required">
                    <label for="nombre">Volumen:</label>
                    <input type="text" name="volumen"  value="<?php echo $_GET["volDep"] ?>" readonly/>
                </div>
                <?php
                if ($_GET["fechaDep"] != "") {
                    ?>
                    <div class="required">
                        <label for="nombre">Fecha de Baja:</label>
                        <input type="text" name="fecha"  value="<?php echo $_GET["fechaDep"] ?>" readonly/>
                    </div>
                    <?php
                }
                ?>
                <a href="indexMtoDepartamentosTema4.php"> <input type="button" name="volver" value="Volver" ></a>
            </fieldset>
        </form>
    </body>
</html>



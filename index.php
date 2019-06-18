<?php
require_once 'vendor/autoload.php';
use models\{Conexion};

// require_once 'php/conexion';
$meses = new Conexion('localhost', 'root', '', 'season');



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
    <nav>


    <h2>
    <a href="">Inicio</a>
    </h2>

    <h2>
    <a href="">Servicios</a>
    </h2>

    <h2>
    <a href="">Contactar</a>
    </h2>

    </nav>
    

    <div class="contenedor">



<br>

<section>

<?php

$meses-> CambiarMes('estaciones');
?>

</section>

    </div>

    </form>
</body>
</html>
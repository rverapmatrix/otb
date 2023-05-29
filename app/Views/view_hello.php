<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Introduccion a MVC</h1>
    <p>Hello world!</p>

    <h3>Paso de datos del Controlador Hello</h3>
    <p>Nombre: <?php echo $nombre; ?></p>
    <p>Precio: <?php echo $precio; ?></p>
    <p>Categoria: <?php echo $categoria; ?></p>

    <hr>

    <?php

        echo "".calcularAntiguedad('1995-05-15');

        echo "<br>";

        echo "".calcularIncremento(7);
    ?>
</body>
</html>
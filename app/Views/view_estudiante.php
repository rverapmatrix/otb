<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Vista Estudiantes</h1>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Carrera</th>
        </tr>

        <?php
            foreach($llave as $estudiante){
                echo "<tr>";
                    echo "<td>";
                        echo $estudiante['nombre'];
                    echo "</td>";

                    echo "<td>";
                        echo $estudiante['apellidoPat'];
                    echo "</td>";

                    echo "<td>";
                        echo $estudiante['apellidoMat'];
                    echo "</td>";

                    echo "<td>";
                        echo $estudiante['carrera'];
                    echo "</td>";
                echo "</tr>";
            }
        ?>
    </table>

    <hr>

    <?php
        echo "La suma de lo valores es: ".sumar(4,9);
        echo "<br>";
        echo " ".formatearFecha('19-05-2023');
    ?>
</body>
</html>
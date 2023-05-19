<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Estudiantes con materias asignadas</h1>

    <table>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Materia</th>
            <th>Docente</th>
        </tr>

        <?php
            foreach($datos as $info){
                echo "<tr>";
                    echo "<td>";
                        echo $info['id'];
                    echo "</td>";
                    echo "<td>";
                        echo $info['nombre'];
                    echo "</td>";

                    echo "<td>";
                        echo $info['apellidoPat'];
                    echo "</td>";

                    echo "<td>";
                        echo $info['apellidoMat'];
                    echo "</td>";

                    echo "<td>";
                        echo $info['materia'];
                    echo "</td>";

                    echo "<td>";
                        echo $info['docente'];
                    echo "</td>";
                echo "</tr>";
            }
        ?>
    </table>


</body>
</html>
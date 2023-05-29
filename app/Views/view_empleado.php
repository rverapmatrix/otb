<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Vista Empleados</h1>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Salario</th>
            
        </tr>

        <?php
            foreach($datos as $empleado){
                echo "<tr>";
                    echo "<td>";
                        echo $empleado['nombre'];
                    echo "</td>";

                    echo "<td>";
                        echo $empleado['apellido'];
                    echo "</td>";

                    echo "<td>";
                        echo $empleado['salario'];
                    echo "</td>";

                   
                echo "</tr>";
            }
        ?>
    </table>

  
  
</body>
</html>
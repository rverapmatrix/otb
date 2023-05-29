<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio 3 inciso b</h1>

    <table>
        <tr>
            <th>Nombre Dpto</th>
            <th>Gasto</th>
            
            
        </tr>

        <?php
            foreach($datos as $empleado){
                echo "<tr>";
                    echo "<td>";
                        echo $empleado['departamento'];
                    echo "</td>";

                    echo "<td>";
                        echo $empleado['gastoTotal'];
                    echo "</td>";


                   
                echo "</tr>";
            }
        ?>
    </table>

  
  
</body>
</html>
<?php

//ejercicio 1

function calcularAntiguedad($fecha){
    $fechaActual = new DateTime();  //fecha actual
    $fechaIngreso = DateTime::createFromFormat('Y-m-d',$fecha);

    $diferencia = $fechaActual->diff($fechaIngreso);

    return $diferencia->y;

}

//ejercicio 2

function calcularIncremento($antiguedad){
    if($antiguedad>15){
        return 2500;
    }else if($antiguedad>10){
        return 1800;
    }else if($antiguedad>5){
        return 1000;
    }else{
        return 0;
    }
}


?>
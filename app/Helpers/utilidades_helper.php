<?php

    function sumar($val1,$val2){
        return $val1+$val2;
    }

    function formatearFecha($fecha){

        $date = date('d/m/Y',strtotime($fecha));
        return $date;
    }

?>
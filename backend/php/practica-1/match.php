<?php

    $a=7;

    $x=10;
    $y=9;
    $z=7;


    $resultado= match($a) {
        $x => "Valor igual X",
        $y => "Valor igual Y",
        $z => "Valor igual Z",
    
    default => "No se encontró coincidencia"
    };
    echo $resultado;


?>

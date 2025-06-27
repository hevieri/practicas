<?php

$a = 5;
$b = 5;


if ($a > $b) {
    echo "a es mayor que b";
} elseif ($a == $b) {
    echo "El valor de a es igual al valor de b";
} else {
    echo "a es menor que b";
}


#otro

if ($a > $b):
    echo "a es mayor que b";
elseif ($a == $b):
    echo "El valor de a es igual al valor de b";
else:
    echo "a es menor que b";
endif;

#elseif:
#else if {}


$dia=0;
if($dia==1):
    echo "Lunes";
elseif($dia==2):
    echo "Martes";
elseif($dia==3):
    echo "Miercoles";
elseif($dia==4):
    echo "Jueves";
elseif($dia==5):
    echo "Viernes";
elseif($dia==6):
    echo "Sabado";
elseif($dia==7):
    echo "Domingo";
else:
    echo "No es un dia de la semana";
endif;

?>
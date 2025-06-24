<?php

//operadores logicos

// && And
// || Or
// ! Not
// xor Excluyente

$numero_1=5;
$numero_2=10;   
// And
if($numero_1==5 && $numero_2==10){
    echo "El numero 1 es 5 y el numero 2 es 10";
} else {
    echo "No se cumple la condicion";
}   
// Or
if($numero_1==5 || $numero_2==10){
    echo "El numero 1 es 5 o el numero 2 es 10";
} else {
    echo "No se cumple la condicion";
}
// Not
if(!($numero_1==5)){
    echo "El numero 1 no es 5";
} else {
    echo "El numero 1 es 5";
}
// xor
if($numero_1==5 xor $numero_2==10){
    echo "El numero 1 es 5 o el numero 2 es 10, pero no ambos";
} else {
    echo "No se cumple la condicion";
}

var_dump(); // Muestra el tipo y valor de las variables
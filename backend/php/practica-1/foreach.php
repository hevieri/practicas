<?php
/*

OPC1
foreach($array as $valor) {
   valor que tendrá en cada iteracion del array
}

OP2

foreach($array as $clave => $valor) {
   $clave tendrá en cada iteracion una clave del array

    $valor tendrá en cada iteracion el valor del array
}
*/
$laptop=["Acer Nitro", "Windows11","AMD RYZEN", "16GB RAM", "1TB SSD", "NVIDIA RTX 3060"];



foreach($laptop as $clave => $valor){
    echo $valor."<br>";
}
?>
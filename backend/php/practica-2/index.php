<?php

#🧩 Paso 1: Pedirle al usuario un número
#👉 Objetivo: que el programa le pregunte al usuario hasta qué número quiere contar.

$hasta = (int)readline("contar hasta: ");
echo "cuenta hasta el numero $hasta\n";

for($i = 1; $i <= $hasta; $i++)
    echo "número: $i - ";

if ($i % 2 === 0) {
    echo "par";
} else {
    echo "impar";
}

echo "\n";

?>
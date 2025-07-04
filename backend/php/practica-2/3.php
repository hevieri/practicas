<?php

// 🔂 Contar del 1 al 5 usando for
for ($i = 1; $i <= 5; $i++) {
    echo "Repetición $i\n";
}

/*
🔂 Consigna: Contar hacia atrás con for
Objetivo: Mostrá los mensajes "Cuenta regresiva: X" desde 5 hasta 1.

💡 Ejemplo de salida esperada:

Cuenta regresiva: 5  
Cuenta regresiva: 4  
Cuenta regresiva: 3  
Cuenta regresiva: 2  
Cuenta regresiva: 1
🧠 Tips para resolverlo:
Empezá con $i = 5

La condición debe ser $i >= 1

Usá $i-- para que baje uno por vuelta
*/

for ($i = 5; $i >=1; $i--){
    echo "cuenta regresiva: $i\n";
}

/*
🔁 Ejercicio: Contar del 1 al 5 con while
🎯 Consigna: Mostrá los números del 1 al 5 usando un bucle while. En cada línea, imprimí:

Contando: 1  
Contando: 2  
...  
Contando: 5
*/
$i = 1;

while ($i <= 5) {
    echo "Contando: $i\n";
    $i++;
}
/*Como funciona?
$i = 1 → empezamos desde 1

while ($i <= 5) → repetimos mientras $i sea menor o igual a 5

$i++ → sumamos 1 en cada vuelta para avanzar y evitar un bucle infinito

*/
#Contar hacia atrás con while
$i = 10;
while ($i >= 1) {
    echo "Contando: $i\n";
    $i--;
}

/*
🔂 Ejercicio 2: Tabla de multiplicar con for
Consigna: Pedile al usuario un número entre 1 y 10. Mostrá la tabla de multiplicar de ese número del 1 al 10 usando un bucle for.

💡 Ejemplo:

Si el usuario ingresa 3, el programa imprime:

3 x 1 = 3  
3 x 2 = 6  
...  
3 x 10 = 30
*/

$numero = (int)readline("Ingresá un número del 1 al 10: ");

if ($numero >= 1 && $numero <= 10) {
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado\n";
    }
} else {
    echo "Número inválido. Debe estar entre 1 y 10.\n";
}


?>
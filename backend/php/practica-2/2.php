<?php

/*
🧪 Ejercicio 1: Solo if
📌 Objetivo: Mostrar un mensaje solo si se cumple una condición.

Enunciado:

Pedile al usuario que escriba un número. Si ese número es mayor a 10, mostrale el mensaje: “Número grande”.

🎓 Esto te permite entender cómo funciona un if básico.
*/

$numero =(int)readline("Ingresa un numero");

if($numero >10){
    echo "Número grande\n";
}else{
    echo "numero chico\n";
}



# terminal & "C:\xampp\php\php.exe" 2.php para poner el numero


/*

🧪 Ejercicio 2: Edad para votar
📌 Objetivo: Practicar if...else verificando si una persona puede votar.

Enunciado:

Pedile al usuario su edad. Si tiene 18 o más, mostrá el mensaje: “Podés votar”. Si tiene menos de 18, mostrá: “Aún no podés votar”.

🧠 Qué vas a practicar
Comparar valores con >=

Usar if...else

Interpretar una condición en la vida real con lógica

*/

$edad=(int)readline("ingresa tu edad: ");
if($edad>=18){
    echo "podes votar\n";
}else{
    echo "aun no podes votar\n";
}


/*

🧪 Ejercicio 3: Número positivo, negativo o cero
📌 Objetivo: Practicar comparaciones múltiples con if, elseif, else.

Enunciado:

Pedile al usuario un número.

Si es mayor que 0, mostrale “Número positivo”

Si es menor que 0, mostrale “Número negativo”

Si es igual a 0, mostrale “Cero”

🧠 ¿Qué vas a usar?
readline() para entrada

Comparadores (>, <, ==)

Estructura if / elseif / else*/

$numero = (int)readline("Ingresa un número: ");

if ($numero > 0) {
    echo "Número positivo\n";
} elseif ($numero < 0) {
    echo "Número negativo\n";
} else {
    echo "Cero\n";
}


/*
🧪 Ejercicio 4: ¿Par, impar o cero?
📌 Objetivo: Practicar condición múltiple y usar operador módulo (%).

Enunciado:

Pedile al usuario un número.

Si es igual a 0, mostrale “Cero”.

Si es par, mostrale “Número par”.

Si es impar, mostrale “Número impar”.

🧠 Tips para resolverlo:
Usás readline() como ya dominás.

Para saber si es par: ($numero % 2 === 0)

Pero primero tenés que chequear si es cero.
*/

$numero =(int)readline("ingresa un numero: ");
if($numero === 0){
    echo "cero";
}elseif($numero % 2 === 0){
    echo "numero par";}
else{
    echo "numero impar";
}
    
    /*
    preparar una especie de “selector de menú” con if donde el usuario elige opciones y el código responde
    */
   $numero = (int)readline("Ingresa número: ");

if ($numero === 1) {
    echo "saludar\n";
} elseif ($numero === 2) {
    echo "despedir\n";
} else {
    echo "opción no válida\n";
}
/*
🎯 Juego 1: Adivinar el número secreto
Enunciado:

El programa tiene un número secreto guardado (por ejemplo, 7). Le pide al usuario que adivine el número.

Si el número ingresado es igual al secreto, muestra: “¡Acertaste!”

Si es menor: “Demasiado bajo”

Si es mayor: “Demasiado alto”

📌 Ideal para practicar:

if / elseif / else

Comparaciones con <, >, ===

Entrada por teclado (readline())*/

$secreto = 7;
$intento = (int)readline("Adiviná el número: ");

if ($intento === $secreto) {
    echo "¡Acertaste!\n";
} elseif ($intento < $secreto) {
    echo "Demasiado bajo\n";
} else {
    echo "Demasiado alto\n";
}
?>
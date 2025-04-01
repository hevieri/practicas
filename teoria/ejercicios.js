/*Ejemplo básico de función
function saludar(nombre) {
  return `Hola, ${nombre}!`;
}

console.log(saludar("Erik")); // "Hola, Erik!"
💡 Practica: Crea funciones simples como sumar dos números o convertir temperaturas.*/

function sumar(a, b) {
    let suma = a + b; // ✅ Ahora sí está sumando
    return `La suma es ${suma}`;
 }
 
 console.log(sumar(3, 5));

/*  2. Practica con funciones reutilizables
Las funciones sirven para evitar repetir código. Intenta hacer funciones que puedan usarse varias veces.

Ejemplo de una función reutilizable
javascript
Copiar
Editar
function calcularDescuento(precio, descuento) {
  return precio - (precio * descuento / 100);
}

console.log(calcularDescuento(1000, 10)); // 900
console.log(calcularDescuento(500, 20)); // 400
💡 Practica: Crea funciones para convertir moneda, calcular edad, o filtrar datos de una lista./*

/*
3. Usa funciones en pequeños proyectos
El mejor aprendizaje es en proyectos reales. Empieza con cosas pequeñas, como:
✅ Un contador de clics en una página web.
✅ Una calculadora de IMC (Índice de Masa Corporal).
✅ Un generador de contraseñas aleatorias.

Ejemplo: Contador de clics
javascript
Copiar
Editar
let contador = 0;

function aumentarContador() {
  contador++;
  console.log(`Has hecho clic ${contador} veces`);
}

aumentarContador(); // 1
aumentarContador(); // 2
💡 Practica: Intenta crear un temporizador, un simulador de dados o una función que cambie el color del fondo.*/

/*
Aprende sobre el Scope y el Hoisting
Las funciones tienen diferentes ámbitos (scope). Es importante saber cuándo pueden acceder a variables.

javascript
Copiar
Editar
let global = "Soy global";

function pruebaScope() {
  let local = "Soy local";
  console.log(global); // "Soy global"
  console.log(local);  // "Soy local"
}

pruebaScope();
console.log(local); // ❌ Error: local no está definida
💡 Practica: Prueba a declarar variables dentro y fuera de funciones para entender el scope.*/

/*
5. Aprende sobre funciones avanzadas
A medida que avances, aprende sobre:
🔹 Funciones anónimas: function() {}
🔹 Funciones de orden superior (aceptan otra función como parámetro).
🔹 Callbacks y Promesas (para manejar código asincrónico).
🔹 **Métodos como .map(), .filter(), .reduce(), .forEach().

Ejemplo: .map() para transformar datos
javascript
Copiar
Editar
const numeros = [1, 2, 3, 4];

const alCuadrado = numeros.map(num => num * num);

console.log(alCuadrado); // [1, 4, 9, 16]
💡 Practica: Usa .filter() para filtrar datos de una lista o .reduce() para sumar números de un array.*/





/*
Prueba hacer una función con arrow que:
Una función que devuelva tu nombre.
Una que diga si un número es positivo o negativo.
Una que diga si una palabra es corta (menos de 5 letras) o larga (más de 5).
✅ Cambie la primera letra de una palabra a mayúscula.
✅ Cuente cuántas veces aparece una letra en una frase.
✅ Transformen texto en minúsculas.
✅ Digan si una palabra empieza con una letra específica.
✅ Junten dos strings en una sola oración. 
✅ Calcular el área de un rectángulo (base × altura).
✅ Convertir grados Celsius a Fahrenheit ((C × 9/5) + 32).
✅ Determinar si un número es par o impar.
*/




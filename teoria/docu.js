// Aritmetica

let suma = 30 + 5;
console.log(suma);

var resta = 30 - 5;
console.log(resta);

var multiplicacion = 30 * 5;
console.log(multiplicacion); 

var division = 30 / 5;
console.log(division);

var modulo = 30 % 5;
console.log(modulo);

// Operadores de asignacion
var a = 1;
var b = 2;
var c = 3;

a += 3;
b -= 2;
c *= 5;

console.log(a);
console.log(b);
console.log(c);

// Operadores de comparacion
var a = 3;
var b = 2;
var c = "3";

var comparacion1 = a == b;
console.log(comparacion1);

var comparacion2 = a == c;
console.log(comparacion2);

var comparacion3 = a === c;
console.log(comparacion3);

var comparacion4 = a != b;
console.log(comparacion4);

console.log(5>7);


// AND
var edad = 18;
var dni = true;
console.log(edad >= 18 && dni); //se tienen que cumplir las dos condiciones

// OR
var edad = 18;
var dni = false;
console.log(edad >= 18 || dni); //se tiene que cumplir una de las dos condiciones

// NOT
var edad = 18;
var dni = false;
console.log(!(edad >= 18 || dni)); //se tiene que cumplir una de las dos condiciones


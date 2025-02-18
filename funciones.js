//FUNCION SENCILLA//


function saludar(){
    console.log("Hola a la practica de funciones");
}

saludar(); //llamamos a la funcion




//FUNCION CON PARAMETROS//
function saludarUsuario(nombre){
    console.log('Hola' + nombre + '¿Como estas?');
}

saludarUsuario(); //lamamos a la funcion




//FUNCIONES RETURN
function sumar(a,b){
    return a + b ;
}

let resultado= sumar(5,3); //guardamos el resultado en una variable
console.log('El resultado es ' + resultado);


//otro ejemplo
function bienvenida(nombre) {
    return "¡Hola " + nombre + "! Bienvenido a nuestra página.";
}

console.log(bienvenida("Erika"));
console.log(bienvenida("Juan"));

//FUNCIONES COMO PARAMETROS
function operar(a, b, operacion) {
    return operacion(a, b);
}

const restar = (x, y) => x - y;

console.log(operar(10, 5, restar)); // 5
console.log(operar(6, 2, (x, y) => x / y)); // 3




//Función que transforma una frase en mayúsculas
function gritar(texto) {
    return texto.toUpperCase() + "!!!";
}

console.log(gritar("esto es increíble"));
console.log(gritar("javascript es divertido"));




//Función para contar letras en una palabra
function contarLetras(palabra) {
    return "La palabra '" + palabra + "' tiene " + palabra.length + " letras.";
}

console.log(contarLetras("javascript"));
console.log(contarLetras("gato"));




//Función que revisa si una palabra contiene otra
function contienePalabra(frase, palabra) {
    return frase.includes(palabra);
}

console.log(contienePalabra("Hubo un error en el sistema", "error")); // true
console.log(contienePalabra("Todo está funcionando bien", "error")); // false





//Función para generar nombres de usuario
function generarUsuario(nombre) {
    return nombre.toLowerCase().replace(" ", "_") + "_user";
}

console.log(generarUsuario("Juan Pérez"));
console.log(generarUsuario("Erika Helfenstern"));



//FUNCIONES ARROW
const multiplicar=(a,b) => a*b;
console.log(multiplicar(4,2)) // 8

//otro ej Saludar con Arrow Function
const saludar = nombre => `¡Hola, ${nombre}!`;
console.log(saludar("Erika")); 
console.log(saludar("Juan"));

//otro ej Convertir una frase a mayúsculas
const gritar = texto => texto.toUpperCase() + "!!!";
console.log(gritar("javascript es genial"));


//otro ej Verificar si una palabra está dentro de una frase
const gritar = texto => texto.toUpperCase() + "!!!";
console.log(gritar("javascript es genial"));

//otro ej Contar letras en una palabra
const contienePalabra = (frase, palabra) => frase.includes(palabra);
console.log(contienePalabra("Aprender JavaScript es divertido", "JavaScript")); // true
console.log(contienePalabra("Hoy es un buen día", "noche")); // false

//otro ej Generar un nombre de usuario a partir de un nombre completo
const contarLetras = palabra => `La palabra '${palabra}' tiene ${palabra.length} letras.`;
console.log(contarLetras("javascript"));
console.log(contarLetras("zorro"));

//otro ej Extraer iniciales de un nombre
const obtenerIniciales = nombre => nombre.split(" ").map(palabra => palabra[0]).join("").toUpperCase();
console.log(obtenerIniciales("Juan Pérez")); // JP
console.log(obtenerIniciales("Erika Helfenstern")); // EH

//otro ej Devolver una palabra al revés
const invertirPalabra = palabra => palabra.split("").reverse().join("");
console.log(invertirPalabra("javascript")); // tpircsavaj













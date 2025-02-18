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



//FUNCIONES ARROW
const multiplicar=(a,b) => a*b;
console.log(multiplicar(4,2)) // 8




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















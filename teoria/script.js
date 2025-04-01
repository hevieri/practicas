var buttons_array = document.querySelectorAll("button"); //document.querySelectorAll("button") = [btn1,btn2,btn3,btn4,btn5,btn6,btn7,btn8,btn9,btn10]
// console.log(buttons_array); // Muestra en consola todos los botones encontrados

let mostrarPantalla = document.getElementById("mostrarPantalla"); // Busca el div donde se mostrará la cuenta y lo guarda en una variable llamada pantalla.

buttons_array.forEach(boton => {
    boton.addEventListener("click", () => {
        if (boton.textContent != "=") {
            mostrarPantalla.innerHTML = mostrarPantalla.innerHTML + boton.textContent; // Agrega el texto del botón presionado al div de la pantalla
        }
       
    });
    //button.addEventListener("click", () => {
    //   console.log(button.textContent); // Muestra en consola qué botón se presionó
    //});
 });

document.getElementById("equals").addEventListener("click", () => { 
      document.getElementById("resultado").innerHTML = eval(mostrarPantalla.innerHTML); // Evalúa la expresión en la pantalla y muestra el resultado
});

document.getElementById("borrar").addEventListener("click", () => { 
    mostrarPantalla.innerHTML = ""; 
});
    


// var btn1 = document.getElementById("btn1");
// btn1.addEventListener("click", function() {
//     console.log("Botón 1 presionado"); // Muestra en consola un mensaje al presionar el botón
// });

// var btn2 = document.getElementById("btn2");
// btn1.addEventListener("click", function() {
//     console.log("Botón 2 presionado"); // Muestra en consola un mensaje al presionar el botón
// });
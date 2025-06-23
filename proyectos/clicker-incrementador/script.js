let contador = 0;
const boton = document.getElementById("boton");
boton.addEventListener("click", () => {
  contador++;
  document.getElementById("contador").innerText = contador;
});

let miDiv = document.getElementById("miDiv");
miDiv.addEventListener("mouseover", () => {
    miDiv.style.backgroundColor = "yellow";
});

boton.addEventListener("keyup", () => {
    miDiv.style.backgroundColor = "red";
});

/* Clicks: Usa addEventListener para escuchar cuando el usuario hace clic.

Teclado: Prueba con eventos como keydown o keyup.

Mouse: Experimenta con eventos como mouseover para detectar cuando el mouse pasa sobre algo. */
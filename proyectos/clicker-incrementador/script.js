let contador = 0;
const boton = document.getElementById("boton");
boton.addEventListener("click", () => {
  contador++;
  document.getElementById("contador").innerText = contador;
});

const boton = document.getElementById("boton");

boton.addEventListener("click", () => {
    boton.classList.toggle("cambiado");
    boton.textContent = boton.classList.contains("cambiado") ? "¡Sorpresa!" : "Haz clic aquí";
});

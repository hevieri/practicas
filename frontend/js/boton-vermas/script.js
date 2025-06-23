const toggleBtn = document.getElementById("toggleBtn");
const contenido = document.getElementById("contenido");

toggleBtn.addEventListener("click", () => {
    // Alternar la visibilidad del contenido
    contenido.classList.toggle("oculto");

    // Cambiar el texto del botón según el estado del contenido
    toggleBtn.textContent = contenido.classList.contains("oculto") ? "Ver más" : "Ver menos";
});

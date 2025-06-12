const botones = document.querySelectorAll(".toggleBtn");

botones.forEach(boton => {
    boton.addEventListener("click", () => {
        const contenido = document.getElementById(boton.dataset.target);
        
        contenido.classList.toggle("oculto");

        boton.textContent = contenido.classList.contains("oculto") ? "Ver más" : "Ver menos";
    });
});

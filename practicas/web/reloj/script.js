const zonasHorarias = {
    "Argentina": -3,
    "España": 2,
    "Japón": 9,
    "Estados Unidos (Nueva York)": -4
};

function actualizarRelojes() {
    const contenedor = document.getElementById("contenedor");
    contenedor.innerHTML = ""; // Limpia los relojes para actualizarlos

    for (const [pais, diferencia] of Object.entries(zonasHorarias)) {
        const ahoraUTC = new Date();
        const horas = (ahoraUTC.getUTCHours() + diferencia + 24) % 24;
        const minutos = ahoraUTC.getUTCMinutes().toString().padStart(2, "0");
        const segundos = ahoraUTC.getUTCSeconds().toString().padStart(2, "0");

        const relojDiv = document.createElement("div");
        relojDiv.className = "reloj";
        relojDiv.innerText = `${pais}: ${horas}:${minutos}:${segundos}`;
        contenedor.appendChild(relojDiv);
    }
}

setInterval(actualizarRelojes, 1000); // Actualiza cada segundo
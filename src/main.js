import './style.css'
import javascriptLogo from './javascript.svg'
import viteLogo from '/vite.svg'
import { setupCounter } from './counter.js'

fetch("/datos.json") // Asegúrate de que `datos.json` está en `public/`
  .then(response => response.json())
  .then(data => {
    console.log("Datos cargados:", data); // Verifica en la consola
    const lista = document.createElement("ul");
    data.usuarios.forEach(usuario => {
      const item = document.createElement("li");
      item.textContent = `${usuario.nombre} - ${usuario.ciudad}`;
      lista.appendChild(item);
    });
    document.body.appendChild(lista); // Agrega la lista al HTML
  })
  .catch(error => console.error("Error al cargar el JSON:", error));

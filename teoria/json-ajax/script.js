fetch("datos.json")
  .then(response => response.json())
  .then(data => {
    console.log("Datos cargados:", data); // Esto ayuda a ver si JSON se carga bien
    const lista = document.getElementById("listaUsuarios");
    data.usuarios.forEach(usuario => {
      const item = document.createElement("li");
      item.textContent = `${usuario.nombre} - ${usuario.ciudad}`;
      lista.appendChild(item);
    });
  })
  .catch(error => console.error("Error al cargar el JSON:", error));

📌 Explicación detallada:

Buscamos todos los botones con document.querySelectorAll(".toggleBtn").

Recorremos cada botón con forEach() para asignarle la funcionalidad.

Identificamos qué texto debe mostrarse usando boton.dataset.target.

Alternamos la visibilidad del texto con classList.toggle("oculto").

Cambiamos el texto del botón según si el contenido está visible o no.

🎯 ¿Por qué es más eficiente?
✅ En lugar de escribir código separado para cada botón, usamos una lógica reutilizable. ✅ Los botones saben qué texto deben mostrar sin necesidad de múltiples funciones. ✅ Evitamos repetir código, haciéndolo más limpio y fácil de mantener.
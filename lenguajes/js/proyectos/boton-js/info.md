🚀 Análisis del código en script.js
js
const boton = document.getElementById("boton");
👉 ¿Qué hace? Este código busca el elemento <button> en tu HTML con el id="boton" y lo guarda en la variable boton. Así podemos manipularlo con JavaScript.

js
boton.addEventListener("click", () => {
👉 ¿Qué hace? Le estamos diciendo a JavaScript: "Cuando el usuario haga clic en el botón, ejecuta esta función que escribiremos dentro del {}."

📌 addEventListener("click", ...) es la forma de escuchar eventos en la página.

js
boton.classList.toggle("cambiado");
👉 ¿Qué hace?

classList.toggle("cambiado") agrega o quita la clase "cambiado".

Si el botón no tenía esa clase, ahora la tendrá.

Si ya la tenía, la elimina.

Esto hace que el botón cambie de color porque en styles.css definimos .cambiado con otro fondo.

js
boton.textContent = boton.classList.contains("cambiado") ? "¡Sorpresa!" : "Haz clic aquí";
👉 ¿Qué hace? Aquí cambiamos el texto del botón dependiendo de su estado. 📌 boton.classList.contains("cambiado") verifica si la clase "cambiado" está presente.

Si la tiene, entonces el texto cambia a "¡Sorpresa!", si no la tiene, vuelve a "Haz clic aquí".

Esto es un operador ternario (? :), que es una forma compacta de escribir condiciones en JavaScript.

🎯 Resumen de lo aprendido
✅ Identificamos el botón con document.getElementById(). ✅ Usamos addEventListener() para detectar clics. ✅ Modificamos estilos con classList.toggle(). ✅ Cambiamos el texto dinámicamente con textContent.

🔹 Tip: Puedes jugar agregando más cambios, por ejemplo, hacer que el botón también cambie de tamaño o que su animación sea más fluida. ¿Quieres probar algo más interactivo con este concepto? 🚀



































🛠 Explicación palabra por palabra
1. const
📌 ¿Por qué usar const aquí?

const crea una variable que no cambiará su valor después de definirse.

Como boton siempre será el mismo elemento HTML, usamos const en lugar de let o var.

2. boton = document.getElementById("boton")
📌 ¿Por qué usamos document.getElementById()?

document representa toda la página web.

getElementById("boton") busca un elemento con el id="boton".

boton ahora guarda ese elemento para que podamos manipularlo.

3. boton.addEventListener("click", () => {...})
📌 ¿Por qué usamos addEventListener()?

addEventListener() escucha lo que hace el usuario.

"click" significa: "cuando el usuario haga clic en el botón, ejecuta la función dentro {}."

( ) => {...} es una función flecha, que es una forma corta de escribir funciones.

4. boton.classList.toggle("cambiado")
📌 ¿Por qué usamos classList.toggle()?

classList nos permite modificar clases CSS de un elemento.

.toggle("cambiado") añade o quita la clase "cambiado" cada vez que hacemos clic.

"cambiado" es una clase que definimos en CSS para cambiar el color del botón.

✍️ Alternativa sin toggle(): Si quisiéramos hacerlo manualmente:

js
if (boton.classList.contains("cambiado")) {
    boton.classList.remove("cambiado");
} else {
    boton.classList.add("cambiado");
}
🔹 Pero toggle() hace esto en una sola línea.

5. boton.textContent = boton.classList.contains("cambiado") ? "¡Sorpresa!" : "Haz clic aquí";
📌 ¿Por qué usamos textContent?

textContent cambia el texto dentro del botón.

"¡Sorpresa!" : "Haz clic aquí" es una condición, que usa el operador ternario ? :.

📌 ¿Por qué usamos boton.classList.contains("cambiado")?

contains("cambiado") pregunta si "cambiado" está presente en el botón.

Si sí está, el texto cambia a "¡Sorpresa!".

Si no está, vuelve a "Haz clic aquí".

✍️ Alternativa sin operador ternario:

js
if (boton.classList.contains("cambiado")) {
    boton.textContent = "¡Sorpresa!";
} else {
    boton.textContent = "Haz clic aquí";
}
🔹 Pero usando ? : lo hacemos en una línea.

🚀 Resumen Final
✅ const → Crea una variable que no cambia. ✅ document.getElementById() → Busca el botón en la página. ✅ addEventListener("click", ...) → Escucha cuando hacemos clic. ✅ classList.toggle("cambiado") → Añade o quita una clase. ✅ textContent = condición ? "Opción 1" : "Opción 2" → Cambia el texto según el estado del botón.
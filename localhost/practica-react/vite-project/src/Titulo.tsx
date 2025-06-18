function Titulo() {
  const nombre = "nombre";
  if (nombre) {
    return <h1>Hola Mundo</h1>;
  }
  return null; // buena práctica: devolver algo siempre
}

export default Titulo;

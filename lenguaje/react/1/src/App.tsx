import './App.css';
import { Tarjeta } from './components/Tarjeta';

// 🧺 Acá definimos el array de frutas
const frutas = [
  { nombre: 'Banana', descripcion: 'Amarilla, rica en potasio 🍌' },
  { nombre: 'Frutilla', descripcion: 'Roja y dulce, perfecta con crema 🍓' },
  { nombre: 'Kiwi', descripcion: 'Verde, exótica y refrescante 🥝' },
];

function App() {
  return (
    <main style={{ padding: '2rem', fontFamily: 'sans-serif' }}>
      <h1>Frutas favoritas</h1>

      {frutas.map((fruta, i) => (
        <Tarjeta
          key={i}
          titulo={fruta.nombre}
          contenido={fruta.descripcion}
        />
      ))}
    </main>
  );
}

export default App;

/*
function App() {
  return (
    <main style={{ padding: '2rem', fontFamily: 'sans-serif' }}>
      <h1>Probando mi componente Tarjeta</h1>

      <Tarjeta
        titulo="¡Hola, Erika 👋!"
        contenido="Este es un componente con props: dinámico y reutilizable."
      />

      <Tarjeta
        titulo="Glassmorphism incoming 💎"
        contenido="Podemos aplicar estilos avanzados, animaciones, o hover effects si querés."
      />
    </main>
  );
}


export default App;
*/


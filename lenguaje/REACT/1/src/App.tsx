import './App.css'
import { Tarjeta } from './components/Tarjeta';


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
  )
}

export default App

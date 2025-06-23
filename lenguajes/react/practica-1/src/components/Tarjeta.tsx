type Props = {
  titulo: string;
  contenido: string;
};


export function Tarjeta({ titulo, contenido }: Props) {
  return (
    <div style={{
      background: 'rgba(255, 255, 255, 0.15)',
      borderRadius: '1rem',
      padding: '1rem',
      margin: '1rem 0',
      boxShadow: '0 4px 30px rgba(0, 0, 0, 0.1)',
      backdropFilter: 'blur(6px)',
      border: '1px solid rgba(255, 255, 255, 0.3)',
    }}>
      <h2>{titulo}</h2>
      <p>{contenido}</p>
    </div>
  );
}

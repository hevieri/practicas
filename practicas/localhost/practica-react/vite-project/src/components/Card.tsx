function Card() {
  const cardStyle = {
    width: '350px',
    border: '1px solid #ccc',
    padding: '1rem',
    borderRadius: '8px'
  };

  return (
    <div style={cardStyle}>
      <h2>Card title</h2>
      <h4 style={{ color: '#666' }}>Card subtitle</h4>
      <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" style={{ marginRight: '1rem' }}>Card link</a>
      <a href="#">Another link</a>
    </div>
  );
}

export default Card;

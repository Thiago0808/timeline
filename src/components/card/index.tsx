import './style.css';

function Card() {
  return (
    <div className="card-container">
      <div className="card-image">
        <img />
        <button className="card-button">VER</button>
      </div>

      <div className="card-info">
        <p><strong>Nome:</strong> x</p>
        <p><strong>Data:</strong> X</p>
        <p><strong>Tecnologias:</strong> A, B, C, D</p>
        <p><strong>Descrição:</strong> Blá, Blá, Blá</p>
      </div>
    </div>
  );
}

export default Card;

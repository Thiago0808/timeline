import './style.css'

interface CardProps {
  name: string;
  technologies: string[];
  description: string;
  image: string
  link: string;
}

function Card({ name, technologies, description, image, link }: CardProps) {
  return (
    <div className="card-container">
      <div className="card-image">
        <img src={`img/${image}`} />
        <a className="card-button" href={link} target="_blank" rel="noopener noreferrer">VER</a>
      </div>

      <div className="card-info">
        <p><strong>Nome:</strong> {name}</p>
        <p><strong>Tecnologias:</strong> {technologies.join(", ")}</p>
        <p><strong>Descrição:</strong> {description}</p>
      </div>
    </div>
  );
}

export default Card;

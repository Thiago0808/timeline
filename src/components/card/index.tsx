import './style.css'
import Button from "../button/index";

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
        <Button text="VER" href={link} />
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

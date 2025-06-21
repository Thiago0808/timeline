import './style.css'
import Button from "../button/index";
import Title from '../title';

interface CardProps {
  date: string;
  title: string;
  name: string;
  technologies: string[];
  description: string;
  image: string
  link: string;
}

function Card({ date, title, name, technologies, description, image, link }: CardProps) {
  return (
    <div className='card-container'>
      <Title date={date} title={title} />
      <div className="">
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
    </div>
  );
}

export default Card;

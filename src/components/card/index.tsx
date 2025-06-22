import './style.css'
import Button from "../button/index";
import Title from '../title';
import Tag from '../tag';

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
          <h3>{name}</h3>
          <div>
            {technologies.map((tech, index) => (
              <Tag key={index} name={tech} />
            ))}
          </div>
          <p>{description}</p>
        </div>
      </div>
    </div>
  );
}

export default Card;

import "./style.css";

interface TagProps {
  name: string;
}

function Tag({ name }: TagProps) {
  const className = `tag ${name.toLowerCase()}`;
  return <span className={className}>{name}</span>;
}

export default Tag;


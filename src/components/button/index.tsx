import React from "react";
import "./style.css";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faSearch } from "@fortawesome/free-solid-svg-icons";

interface ButtonProps {
  text: string;
  href: string;
  target?: string;
  rel?: string;
}

const Button: React.FC<ButtonProps> = ({ text, href, target = "_blank", rel = "noopener noreferrer" }) => {
  return (
    <a className="custom-button" href={href} target={target} rel={rel}>
      <FontAwesomeIcon icon={faSearch} style={{ marginRight: '8px' }} />
      {text}
    </a>
  );
};

export default Button;

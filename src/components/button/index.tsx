import React from "react";
import "./style.css";

interface ButtonProps {
  text: string;
  href: string;
  target?: string;
  rel?: string;
}

const Button: React.FC<ButtonProps> = ({ text, href, target = "_blank", rel = "noopener noreferrer" }) => {
  return (
    <a className="custom-button" href={href} target={target} rel={rel}>
      {text}
    </a>
  );
};

export default Button;

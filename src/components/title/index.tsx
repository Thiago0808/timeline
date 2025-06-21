import React from "react";
import "./style.css";

interface TitleProps {
  date: string;
  title: string;
}

const Title: React.FC<TitleProps> = ({ date, title}) => {
  return (
    <div className="title-div">
      <h1>{date}</h1>
      <h2>- {title}</h2>
    </div>
  );
};

export default Title;

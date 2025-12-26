import React from "react";
import "./style.css";

import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faLinkedin, faGithub } from "@fortawesome/free-brands-svg-icons";

type Language = "br" | "en";

interface HeaderProps {
  language: Language;
  setLanguage: React.Dispatch<React.SetStateAction<Language>>;
}

const Header: React.FC<HeaderProps> = ({ language, setLanguage }) => {
  const toggleLanguage = () => {
    setLanguage((prev) => (prev === "br" ? "en" : "br"));
  };

  return (
    <header className="header">
      <img src="img/icon.png" alt="Ícone da Timeline" className="header-icon" />
      <h1 className="header-title">TIMELINE</h1>

      <div className="header-actions">
        <button
          className="language-toggle"
          onClick={toggleLanguage}
          aria-label="Trocar idioma"
        >
          <img
            src={
              language === "br"
                ? "img/flags/br-pt.png"
                : "img/flags/us-uk.jpg"
            }
            alt="Idioma"
          />
        </button>

        <nav className="header-socials">
          <a
            href="https://www.linkedin.com/in/thiago-martins-9b2353285/"
            target="_blank"
            rel="noopener noreferrer"
            aria-label="LinkedIn"
          >
            <FontAwesomeIcon icon={faLinkedin} />
          </a>

          <a
            href="https://github.com/Thiago0808"
            target="_blank"
            rel="noopener noreferrer"
            aria-label="GitHub"
          >
            <FontAwesomeIcon icon={faGithub} />
          </a>
        </nav>
      </div>
    </header>
  );
};

export default Header;

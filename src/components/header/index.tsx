import React from 'react';
import './style.css';

import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faLinkedin, faGithub } from '@fortawesome/free-brands-svg-icons';

const Header: React.FC = () => {
  return (
    <header className="header">
      <img src="/img/icon.png" alt="Ícone da Timeline" className="header-icon" />
      <h1 className="header-title">TIMELINE</h1>
      <nav className="header-socials">
        <a href="https://www.linkedin.com/in/thiago-martins-9b2353285/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
          <FontAwesomeIcon icon={faLinkedin} />
        </a>
        <a href="https://github.com/Thiago0808" target="_blank" rel="noopener noreferrer" aria-label="GitHub">
          <FontAwesomeIcon icon={faGithub} />
        </a>
      </nav>
    </header>
  );
};

export default Header;

import { useEffect, useRef, useState } from 'react';
import './App.css'
import Card from './components/card'
import Header from './components/header'

function App() {
const cardsData = [
  {
    date: "9 DE FEVEREIRO DE 2023",
    title: "O PRIMEIRO DE TODOS",
    name: "Hello World",
    technologies: ["HTML"],
    description:
      "Não poderia ser diferente! Para qualquer dev, o primeiro passo é sempre esse. Com HTML puro, esse foi o primeiro site que desenvolvi. O objetivo principal era entender os fundamentos de um site — como as tags <title>, <p>, <h1> — e os conceitos básicos do processo de desenvolvimento, como o uso do VS Code, Go Live e execução local via localhost.",
    image: "helloworld.png",
    link: "/projects/first/helloworld.html",
  },
  {
    date: "9 DE FEVEREIRO DE 2023",
    title: "UM PASSO A MAIS",
    name: "GNU/Linux",
    technologies: ["HTML"],
    description:
      "Depois, foi feito site sobre GNU/Linux, o sistema operacional utilizado nos computadores do IFSC, nos quais foram feitos a maior parte dos projetos desta timelinte. O objetivo com esse site era principalmente entender melhor a separação de parágrafos, e elementos de forma geral. O strong também foi foco.",
    image: "linux.png",
    link: "/projects/first/linux.html",
  },
  {
    date: "15 DE FEVEREIRO DE 2023",
    title: "O PRIMEIRO CONTATO COM CSS & IMAGENS",
    name: "Navegadores",
    technologies: ["HTML", "CSS"],
    description:
      "Este foi meu primeiro contato com diversos fatores importantes para a programação. Foi meu primeiro uso de imagens, entendendo o elemento <img>; meu primeiro contato com links e redirecionamento; e principalmente, meu primeiro contato com CSS, mexendo basicamente com cores, fontes e um pouco de alinhamento",
    image: "navegadores.png",
    link: "/projects/navegadores/index.html",
  },
  {
    date: "23 DE FEVEREIRO DE 2023",
    title: "APRENDENDO LISTAS",
    name: "Regiões",
    technologies: ["HTML", "CSS"],
    description:
      "Foi com esse pequeno site que aprendi a programar listas em HTML, compreendendo na teoria e na prática os elementos <ul> e <li>. Também ajudou em Geografia...",
    image: "regioes.png",
    link: "/projects/listas/regioes.html",
  },
  {
    date: "1 DE MARÇO DE 2023",
    title: "DIA DAS MULHERES",
    name: "Kim Swift",
    technologies: ["HTML", "CSS"],
    description:
      "Para o dia das mulheres, foi realizado um projeto com toda a sala para cada um fazer um site simples sobre uma mulher na área da tecnologia, que seriam depois disponibilizados para o público no dia do evento. Eu escohi a Kim Swift, devido ao meu gosto por videogames e pela Valve.",
    image: "kim.png",
    link: "/projects/kim/index.html",
  },
  {
    date: "9 DE MARÇO DE 2023",
    title: "INTRODUÇÃO ÀS TABELAS",
    name: "Tabelas",
    technologies: ["HTML", "CSS"],
    description:
      "O objetivo deste era claro: Entender e aplicar o conceito de tabelas, utilizando <tr> e <th>, além de eu aprimorar meu entendimento de formatação de código. Também foi aqui que conheci o hover do CSS",
    image: "tabelas.png",
    link: "/projects/tabelas/tabelas.html",
  },
  {
    date: "15 DE MARÇO DE 2023",
    title: "DISPLAY, BORDAS & BACKGROUND",
    name: "Display do Mario",
    technologies: ["HTML", "CSS"],
    description:
      "Com o tema de um personagem que adoro, entendi o conceito de display, aprend a personalizar a borda de blocos, e também a como colocar imagens no fundo de um site.",
    image: "display.png",
    link: "/projects/display/display.html",
  },
  {
    date: "15 DE MARÇO DE 2023",
    title: "PRIMEIRAS SEÇÕES & NAV",
    name: "Seções",
    technologies: ["HTML", "CSS"],
    description:
      "Utilizando um tema marítimo, criei meu primeiro nav. Também aprendi a usar sections, e conectá-los ao nav, de modo a facilitar o uso de um site.",
    image: "secoes.png",
    link: "/projects/secoes/index.html",
  },
  {
    date: "16 DE MARÇO DE 2023",
    title: "APLICANDO CONHECIMENTOS",
    name: "IFSC Pizzas",
    technologies: ["HTML", "CSS"],
    description:
      "Com o objetivo de aplicar tudo que tinhamos aprendido até o momento, nossa primeira avaliação na matéria foi criar um site para uma pizzaria fictícia. Utilizando cores clássicas de pizzarias, utilizei de imagens, tabelas, nav, seções e até um componente do Google Maps.",
    image: "pizzaria.png",
    link: "/projects/pizzaria/index.html",
  },
  {
    date: "23 DE MARÇO DE 2023",
    title: "LAYOUTS & FLOAT",
    name: "Float",
    technologies: ["HTML", "CSS"],
    description:
      "Para aprender mais sobre layouts de sites, nos foi ensinado o float, para adquirirmos as primeiras noções deste conceito. Também montei um site com links para os diferentes layouts que tínhamos que fazer.",
    image: "float.png",
    link: "/projects/layouts/Layouts/index.html",
  },
  {
    date: "29 DE MARÇO DE 2023",
    title: "FOCO EM RESPONSIVO",
    name: "Responsividade em Meu Site",
    technologies: ["HTML", "CSS"],
    description:
      "Aqui aprendi técnicas com foco em responsividade do site, principalmente o media screen, mudando espaçamentos, fontes e até mesmo o posicionamento de blocos do site.",
    image: "responsividade.png",
    link: "/projects/responsividade/index.html",
  },
  {
    date: "29 DE MARÇO DE 2023",
    title: "REPLICANDO IMAGENS",
    name: "Dubai",
    technologies: ["HTML", "CSS"],
    description:
      "Pondo em prática minhas habilidades de CSS, o objetivo era recriar uma imagem, um anúncio de publicidade de Dubai, utilizando os conhecimentos adquiridos anteriormente.",
    image: "dubai.png",
    link: "/projects/dubai/dubai.html",
  },
  {
    date: "30 DE MARÇO DE 2023",
    title: "APRENDENDO FLEX",
    name: "Flexbox",
    technologies: ["HTML", "CSS"],
    description:
      "Neste dia aprendi bastante sobre os tipos de display, como block, none, e o display:flex, assim como os seus atributos extras.",
    image: "flexbox.png",
    link: "/projects/flex/index.html",
  },
  {
    date: "20 DE ABRIL DE 2023",
    title: "COMPRENDENDO ELEMENTOS",
    name: "Elementos Semânticos",
    technologies: ["HTML", "CSS"],
    description:
      "Para fazer um código mais claro e fácil de se entender, aprendi sobre elementos semânticos, tais como header, main, footer, facilitando a interpreação do código.",
    image: "semanticos.png",
    link: "/projects/semanticos/index.html",
  },
  {
    date: "3 DE MAIO DE 2023",
    title: "APLICANDO O QUE APRENDEMOS",
    name: "Blue Web",
    technologies: ["HTML", "CSS"],
    description:
      "Antes de partirmos para o PHP, tivemos uma aula focada em HTML e CSS, buscando replicar um website simples que o professor tinha feito.",
    image: "blueweb.png",
    link: "/projects/blueweb/index.html",
  },
];

  const cardsRefs = useRef<(HTMLDivElement | null)[]>([]);
  const [circlesTop, setCirclesTop] = useState<number[]>([]);
  const setCardRef = (index: number) => (el: HTMLDivElement | null) => {
    cardsRefs.current[index] = el;
  };

  useEffect(() => {
    const updatePositions = () => {
      const tops = cardsRefs.current.map((ref) =>
        ref ? ref.getBoundingClientRect().top + window.scrollY : 0
      );
      setCirclesTop(tops);
    };

    updatePositions();
    window.addEventListener("resize", updatePositions);
    window.addEventListener("scroll", updatePositions);

    return () => {
      window.removeEventListener("resize", updatePositions);
      window.removeEventListener("scroll", updatePositions);
    };
  }, []);

  return (
    <>
      <Header />
      <div className="main-layout">
        <div className="left-panel">
          <div className="timeline-line"></div>
          {circlesTop.map((top: number, index: number) => (
            <div
              key={index}
              className="timeline-circle"
              style={{ top: `${top}px` }}
            />
          ))}
        </div>

        <div className="right-panel">
          <div className="cards-container">
            {cardsData.map((card, index) => (
              <div key={index} ref={setCardRef(index)}>
                <Card {...card} />
              </div>
            ))}
          </div>
        </div>
      </div>
    </>
  );
}

export default App

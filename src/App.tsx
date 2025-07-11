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
    date: "5 DE ABRIL DE 2023",
    title: "OBRAS DE ARTE",
    name: "Journey",
    technologies: ["HTML", "CSS"],
    description:
      "Em colaboração com a matéria de artes, tinhamos que escolher alguma obra de arte digital e fazermos um site sobre. Eu escolhi Journey, um Art Game que é até hoje uma das experiências mais únicas que eu tive com videogames.",
    image: "journey.png",
    link: "/projects/artes/journey.html",
  },
  {
    date: "12 DE ABRIL DE 2023",
    title: "ARTE, CORES & DECISÕES",
    name: "Cores",
    technologies: ["HTML", "CSS"],
    description:
      "Nesta mesma colaboração, houve uma tarefa de criarmos a nossa obra de arte digital. Eu escolhi fazer um jogo de decisões, com temática das escolhas de vida de um artista. Utilizando animações CSS, background e um roteiro o qual curti muito, este é certamente o meu projeto HTML/CSS favorito.",
    image: "cores.png",
    link: "/projects/artes/cores/index.html",
  },
  {
    date: "18 DE ABRIL DE 2023",
    title: "O PRIMEIRO FRAMEWORK",
    name: "Boostrap",
    technologies: ["HTML", "CSS", "Bootstrap"],
    description:
      "Com um outro professor, nos foi apresentado o Bootstrap de ínicio apenas testando alguns componentes, entendendo do que se trata um framework. Acompanhando a campanha do Manchester City na época, este foi o meu tema para os testes.",
    image: "bootstrap.png",
    link: "/projects/bootstrap/index.html",
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
  {
    date: "4 DE MAIO DE 2023",
    title: "COMEÇANDO PHP",
    name: "Formulários",
    technologies: ["HTML", "CSS", "PHP"],
    description:
      "Em meu primeito contato com PHP, nosso foco foi criar formulários e trabalhar com os dados vindos deles, apresentado esses dados ao usuário, ou até utilizando para uma pesquisa Google. Montei um mini site que direciona para os sites PHP que fiz no primeiro dia.",
    image: "form.png",
    link: "/projects/form/index.html",
  },
  {
    date: "11 DE MAIO DE 2023",
    title: "APRENDENDO USOS DO PHP",
    name: "Comentários",
    technologies: ["HTML", "CSS", "PHP"],
    description:
      "Trabalhando com backend agora, fizemos algo que na época eu via como magia, que era pegar um comentário do site e inserir em um arquivo separado, assim como também apresentar o conteúdo deste arquivo no site.",
    image: "comentarios.png",
    link: "/projects/comentarios/index.php",
  },
  {
    date: "17 DE MAIO DE 2023",
    title: "PÁGINAS EM PHP",
    name: "Blog com Paginação",
    technologies: ["HTML", "CSS", "PHP"],
    description:
      "Neste mini blog, meu maior aprendizado foram páginas em PHP, um recurso extremamente útil o qual eu viria a utilizar em muitos projetos futuros, como o CodeSnape.",
    image: "paginacao.png",
    link: "/projects/paginacao/index.php",
  },
  {
    date: "17 DE MAIO DE 2023",
    title: "INTEGRANDO BANCOS DE DADOS",
    name: "Imobiliária IFSC",
    technologies: ["HTML", "CSS", "PHP", "MySQL"],
    description:
      "Após diversas aulas puramente de banco de dados, este foi o primeiro projeto em que juntamos os conhecimentos de BD com os de programação web, trabalhando com um banco de dados de casas fictícias em um site de imobiliária.",
    image: "imobiliaria.png",
    link: "/projects/imobiliaria/index.php",
  },
  {
    date: "30 DE MAIO DE 2023",
    title: "TESTANDO OS LIMITES DO BOOTSTRAP & CSS",
    name: "Futebola",
    technologies: ["HTML", "CSS", "Bootstrap"],
    description:
      "Em um projeto mais ambicioso com design da minha namorada e tematizado de algo que adoro, nasceu o Futebola, em que busquei me testar para ver o que eu era capaz de alcançar com o que eu tinha aprendido.",
    image: "futebola.png",
    link: "/projects/futebola/index.html",
  },
  {
    date: "13 DE jJUNHO DE 2023",
    title: "SITES MAIS COMPLETOS",
    name: "Liceria",
    technologies: ["HTML", "CSS", "PHP", "MySQL", "Bootstrap"],
    description:
      "Aplicando diversos aprendizados, fiz um site com diversos componentes e propriedades do Bootstrap, visando várias páginas, possibilidades, assim como divisão de site entre funcionário/cliente, e inserções no banco de dados.",
    image: "liceria.png",
    link: "/projects/livraria/cadastro.html",
  },
  {
    date: "28 DE JUNHO DE 2023",
    title: "UM CLÁSSICO",
    name: "Calculadora PHP",
    technologies: ["HTML", "CSS", "PHP"],
    description:
      "Assim como qualquer programador, também tenho meu projeto de calculadora. Além do básico, também aprendi aqui sobre try/catch, tratamento de erros e switch.",
    image: "calculadora.png",
    link: "/projects/calculadora/index.php",
  },
  {
    date: "AGOSTO DE 2023",
    title: "JAVASCRIPT",
    name: "Exercícios de JavaScript",
    technologies: ["HTML", "CSS", "JavaScript"],
    description:
      "Iniciando minhas aventuras com JS, realizei diversos exercícios para entender sua lógica, funções e possibilidades. Aqui reuni todos eles para demonstrar mais adequadamnente o que foi feito em cada um.",
    image: "javascript.png",
    link: "/projects/javascript/index.html",
  },
  {
    date: "10 DE AGOSTO DE 2023",
    title: "FUNÇÕES EM JS",
    name: "Par ou Ímpar",
    technologies: ["HTML", "CSS", "JavaScript"],
    description:
      "Neste projeto aprendi certas bases do JavaScript, tais como funções do tipo onClick, obter elementos para utilizar em funções JS, modificação de InnerHTML, e funções comuns, como Math.random.",
    image: "par_impar.png",
    link: "/projects/par_impar/par_ou_impar.html",
  },
  {
    date: "16 DE AGOSTO DE 2023",
    title: "ARQUIVOS .JS & NOVAS POSSIBILIDADES",
    name: "Jokenpo",
    technologies: ["HTML", "CSS", "JavaScript"],
    description:
      "Aprendendo a utilizar arquivos .js, também fui ensinado a mexer com imagens e cores, assim como trabalhar com possibilidades mais complexas.",
    image: "jokenpo.png",
    link: "/projects/jokenpo/jokenpo.html",
  },
  {
    date: "25 DE OUTUBRO DE 2023",
    title: "LOGIN & CONTAS",
    name: "Sessões",
    technologies: ["HTML", "CSS", "PHP", "MySQL"],
    description:
      "Neste importantíssimo projeto, aprendi o básico para criação de contas. Além do cadastro, fiz também um login, o qual mantém a sessão do usuário, páginas que são bloqueadas caso o usuário não esteja logado, e claro, um logout também.",
    image: "sessao.png",
    link: "/projects/sessao/index.php",
  },
  {
    date: "8 DE NOVEMBRO DE 2023",
    title: "ORIENTADA A OBJETOS",
    name: "PHP & POO",
    technologies: ["HTML", "CSS", "PHP", "MySQL"],
    description:
      "Após um semestre focado em Programação Orientada a Objetos em Python, finalmente aplicamos o que aprendemos na programação web, criando um site de interface extremamente simples, com o objetivo de testar POO em PHP.",
    image: "poo.png",
    link: "/projects/poo/index.php",
  },
  {
    date: "1 DE DEZEMBRO DE 2023",
    title: "TREINANDO OBJETOS",
    name: "Blog Premium",
    technologies: ["HTML", "CSS", "PHP", "MySQL"],
    description:
      "Continuando o treinamento de POO em programação web, fizemos um pequeno blog, com usuário e seus textos. Também deveríamos personalizar os nossos blogs, então adicionei um paywall para ultrapassar os caracteres, e uma função de pagar uma quantia em cada trecho para ganhar estrelas no texto.",
    image: "blog.png",
    link: "/projects/blog/index.php",
  },
  {
    date: "28 DE SETEMBRO DE 2024",
    title: "CONHECENDO REACT",
    name: "Primeiro React",
    technologies: ["HTML", "CSS", "React", "TypeScript"],
    description:
      "Em busca de aumentar meu leque de conhecimento, comecei um curso de react, visando entender principalmente a lógica de componentes, o qual treinei neste projeto.",
    image: "react.png",
    link: "/projects/react/index.html",
  },
  {
    date: "24 DE NOVEMBRO DE 2024",
    title: "APRIMORANDO REACT",
    name: "Gasolina X Álcool",
    technologies: ["HTML", "CSS", "React", "TypeScript"],
    description:
      "Aprimorando meus conhecimentos de react, fiz o classico projeto de comparar custo-benefício entre gasolina e álcool.",
    image: "gasolina.png",
    link: "/projects/gasolina/index.html",
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

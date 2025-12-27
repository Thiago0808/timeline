import { useEffect, useRef, useState } from 'react';
import './App.css'
import Card from './components/card'
import Header from './components/header'

function App() {
  const cardsDataBr = [
    {
      date: "9 DE FEVEREIRO DE 2023",
      title: "O PRIMEIRO DE TODOS",
      name: "Hello World",
      technologies: ["HTML"],
      description:
        "Não poderia ser diferente! Para qualquer dev, o primeiro passo é sempre esse. Com HTML puro, esse foi o primeiro site que desenvolvi. O objetivo principal era entender os fundamentos de um site — como as tags <title>, <p>, <h1> — e os conceitos básicos do processo de desenvolvimento, como o uso do VS Code, Go Live e execução local via localhost.",
      image: "helloworld.png",
      link: "projects/first/helloworld.html",
    },
    {
      date: "9 DE FEVEREIRO DE 2023",
      title: "UM PASSO A MAIS",
      name: "GNU/Linux",
      technologies: ["HTML"],
      description:
        "Depois, foi feito site sobre GNU/Linux, o sistema operacional utilizado nos computadores do IFSC, nos quais foram feitos a maior parte dos projetos desta timeline. O objetivo com esse site era, principalmente, entender melhor a separação de parágrafos, e elementos de forma geral. O strong também foi o foco.",
      image: "linux.png",
      link: "projects/first/linux.html",
    },
    {
      date: "15 DE FEVEREIRO DE 2023",
      title: "O PRIMEIRO CONTATO COM CSS & IMAGENS",
      name: "Navegadores",
      technologies: ["HTML", "CSS"],
      description:
        "Este foi meu primeiro contato com diversos fatores importantes para a programação. Foi meu primeiro uso de imagens, entendendo o elemento <img>; meu primeiro contato com links e redirecionamento; e principalmente, meu primeiro contato com CSS, mexendo basicamente com cores, fontes e um pouco de alinhamento.",
      image: "navegadores.png",
      link: "projects/navegadores/index.html",
    },
    {
      date: "23 DE FEVEREIRO DE 2023",
      title: "APRENDENDO LISTAS",
      name: "Regiões",
      technologies: ["HTML", "CSS"],
      description:
        "Foi com esse pequeno site que aprendi a programar listas em HTML, compreendendo na teoria e na prática os elementos <ul> e <li>. Também ajudou em Geografia...",
      image: "regioes.png",
      link: "projects/listas/regioes.html",
    },
    {
      date: "1 DE MARÇO DE 2023",
      title: "DIA DAS MULHERES",
      name: "Kim Swift",
      technologies: ["HTML", "CSS"],
      description:
        "Para o dia das mulheres, foi realizado um projeto com toda a sala para cada um fazer um site simples sobre uma mulher na área da tecnologia, que seriam depois disponibilizados para o público no dia do evento. Eu escohi a Kim Swift, devido ao meu gosto por videogames e pela Valve.",
      image: "kim.png",
      link: "projects/kim/index.html",
    },
    {
      date: "9 DE MARÇO DE 2023",
      title: "INTRODUÇÃO ÀS TABELAS",
      name: "Tabelas",
      technologies: ["HTML", "CSS"],
      description:
        "O objetivo deste era claro: Entender e aplicar o conceito de tabelas, utilizando <tr> e <th>, além de eu aprimorar meu entendimento de formatação de código. Também foi aqui que conheci o hover do CSS.",
      image: "tabelas.png",
      link: "projects/tabelas/tabelas.html",
    },
    {
      date: "15 DE MARÇO DE 2023",
      title: "DISPLAY, BORDAS & BACKGROUND",
      name: "Display do Mario",
      technologies: ["HTML", "CSS"],
      description:
        "Com o tema de um personagem que adoro, entendi o conceito de display, aprendi a personalizar a borda de blocos, e também a como colocar imagens no fundo de um site.",
      image: "display.png",
      link: "projects/display/display.html",
    },
    {
      date: "15 DE MARÇO DE 2023",
      title: "PRIMEIRAS SEÇÕES & NAV",
      name: "Seções",
      technologies: ["HTML", "CSS"],
      description:
        "Utilizando um tema marítimo, criei meu primeiro nav. Também aprendi a usar sections, e conectá-los ao nav, de modo a facilitar o uso de um site.",
      image: "secoes.png",
      link: "projects/secoes/index.html",
    },
    {
      date: "16 DE MARÇO DE 2023",
      title: "APLICANDO CONHECIMENTOS",
      name: "IFSC Pizzas",
      technologies: ["HTML", "CSS"],
      description:
        "Com o objetivo de aplicar tudo que tinhamos aprendido até o momento, nossa primeira avaliação na matéria foi criar um site para uma pizzaria fictícia. Utilizando cores clássicas de pizzarias, utilizei de imagens, tabelas, nav, seções e até um componente do Google Maps.",
      image: "pizzaria.png",
      link: "projects/pizzaria/index.html",
    },
    {
      date: "23 DE MARÇO DE 2023",
      title: "LAYOUTS & FLOAT",
      name: "Float",
      technologies: ["HTML", "CSS"],
      description:
        "Para aprender mais sobre layouts de sites, nos foi ensinado o float, para adquirirmos as primeiras noções deste conceito. Também montei um site com links para os diferentes layouts que tínhamos que fazer.",
      image: "float.png",
      link: "projects/layouts/Layouts/index.html",
    },
    {
      date: "29 DE MARÇO DE 2023",
      title: "FOCO EM RESPONSIVO",
      name: "Responsividade em Meu Site",
      technologies: ["HTML", "CSS"],
      description:
        "Aqui aprendi técnicas com foco em responsividade do site, principalmente o media screen, mudando espaçamentos, fontes e até mesmo o posicionamento de blocos do site.",
      image: "responsividade.png",
      link: "projects/responsividade/index.html",
    },
    {
      date: "29 DE MARÇO DE 2023",
      title: "REPLICANDO IMAGENS",
      name: "Dubai",
      technologies: ["HTML", "CSS"],
      description:
        "Pondo em prática minhas habilidades de CSS, o objetivo era recriar uma imagem, um anúncio de publicidade de Dubai, utilizando os conhecimentos adquiridos anteriormente.",
      image: "dubai.png",
      link: "projects/dubai/dubai.html",
    },
    {
      date: "30 DE MARÇO DE 2023",
      title: "APRENDENDO FLEX",
      name: "Flexbox",
      technologies: ["HTML", "CSS"],
      description:
        "Neste dia aprendi bastante sobre os tipos de display, como block, none, e o display:flex, assim como os seus atributos extras.",
      image: "flexbox.png",
      link: "projects/flex/index.html",
    },
    {
      date: "5 DE ABRIL DE 2023",
      title: "OBRAS DE ARTE",
      name: "Journey",
      technologies: ["HTML", "CSS"],
      description:
        "Em colaboração com a matéria de artes, tinhamos que escolher alguma obra de arte digital e fazermos um site sobre. Eu escolhi Journey, um Art Game que é até hoje uma das experiências mais únicas que eu tive com videogames.",
      image: "journey.png",
      link: "projects/artes/journey.html",
    },
    {
      date: "12 DE ABRIL DE 2023",
      title: "ARTE, CORES & DECISÕES",
      name: "Cores",
      technologies: ["HTML", "CSS"],
      description:
        "Nesta mesma colaboração acima, houve uma tarefa de criarmos a nossa obra de arte digital. Eu escolhi fazer um jogo de decisões, com temática das escolhas de vida de um artista. Utilizando animações CSS, background e um roteiro o qual curti muito, este é certamente o meu projeto HTML/CSS favorito.",
      image: "cores.png",
      link: "projects/artes/cores/index.html",
    },
    {
      date: "18 DE ABRIL DE 2023",
      title: "O PRIMEIRO FRAMEWORK",
      name: "Boostrap",
      technologies: ["HTML", "CSS", "Bootstrap"],
      description:
        "Com um outro professor, nos foi apresentado o Bootstrap de ínicio apenas testando alguns componentes, entendendo do que se trata um framework. Acompanhando a campanha do Manchester City na época, este foi o meu tema para os testes.",
      image: "bootstrap.png",
      link: "projects/bootstrap/index.html",
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
      link: "projects/blueweb/index.html",
    },
    {
      date: "4 DE MAIO DE 2023",
      title: "COMEÇANDO PHP",
      name: "Formulários",
      technologies: ["HTML", "CSS", "PHP"],
      description:
        "Em meu primeito contato com PHP, nosso foco foi criar formulários e trabalhar com os dados vindos deles, apresentado esses dados ao usuário, ou até utilizando para uma pesquisa Google. Montei um mini site que direciona para os sites PHP que fiz no primeiro dia.",
      image: "form.png",
      link: "projects/form/index.html",
    },
    {
      date: "11 DE MAIO DE 2023",
      title: "APRENDENDO USOS DO PHP",
      name: "Comentários",
      technologies: ["HTML", "CSS", "PHP"],
      description:
        "Trabalhando com backend agora, fizemos algo que na época eu via como magia, que era pegar um comentário do site e inserir em um arquivo separado, assim como também apresentar o conteúdo deste arquivo no site.",
      image: "comentarios.png",
      link: "projects/comentarios/index.php",
    },
    {
      date: "17 DE MAIO DE 2023",
      title: "PÁGINAS EM PHP",
      name: "Blog com Paginação",
      technologies: ["HTML", "CSS", "PHP"],
      description:
        "Neste mini blog, meu maior aprendizado foram páginas em PHP, um recurso extremamente útil o qual eu viria a utilizar em muitos projetos futuros, como o CodeSnape.",
      image: "paginacao.png",
      link: "projects/paginacao/index.php",
    },
    {
      date: "17 DE MAIO DE 2023",
      title: "INTEGRANDO BANCOS DE DADOS",
      name: "Imobiliária IFSC",
      technologies: ["HTML", "CSS", "PHP", "MySQL"],
      description:
        "Após diversas aulas puramente de banco de dados, este foi o primeiro projeto em que juntamos os conhecimentos de BD com os de programação web, trabalhando com um banco de dados de casas fictícias em um site de imobiliária.",
      image: "imobiliaria.png",
      link: "projects/imobiliaria/index.php",
    },
    {
      date: "30 DE MAIO DE 2023",
      title: "TESTANDO OS LIMITES DO BOOTSTRAP & CSS",
      name: "Futebola",
      technologies: ["HTML", "CSS", "Bootstrap"],
      description:
        "Em um projeto mais ambicioso com design da minha namorada e tematizado de algo que adoro, nasceu o Futebola, em que busquei me testar para ver o que eu era capaz de alcançar com o que eu tinha aprendido.",
      image: "futebola.png",
      link: "projects/futebola/index.html",
    },
    {
      date: "13 DE JUNHO DE 2023",
      title: "SITES MAIS COMPLETOS",
      name: "Liceria",
      technologies: ["HTML", "CSS", "PHP", "MySQL", "Bootstrap"],
      description:
        "Aplicando diversos aprendizados, fiz um site com diversos componentes e propriedades do Bootstrap, visando várias páginas, possibilidades, assim como divisão de site entre funcionário/cliente, e inserções no banco de dados.",
      image: "liceria.png",
      link: "projects/livraria/cadastro.html",
    },
    {
      date: "28 DE JUNHO DE 2023",
      title: "UM CLÁSSICO",
      name: "Calculadora PHP",
      technologies: ["HTML", "CSS", "PHP"],
      description:
        "Assim como qualquer programador, também tenho meu projeto de calculadora. Além do básico, também aprendi aqui sobre try/catch, tratamento de erros e switch.",
      image: "calculadora.png",
      link: "projects/calculadora/index.php",
    },
    {
      date: "AGOSTO DE 2023",
      title: "JAVASCRIPT",
      name: "Exercícios de JavaScript",
      technologies: ["HTML", "CSS", "JavaScript"],
      description:
        "Iniciando minhas aventuras com JS, realizei diversos exercícios para entender sua lógica, funções e possibilidades. Aqui reuni todos eles para demonstrar mais adequadamnente o que foi feito em cada um.",
      image: "javascript.png",
      link: "projects/javascript/index.html",
    },
    {
      date: "10 DE AGOSTO DE 2023",
      title: "FUNÇÕES EM JS",
      name: "Par ou Ímpar",
      technologies: ["HTML", "CSS", "JavaScript"],
      description:
        "Neste projeto aprendi certas bases do JavaScript, tais como funções do tipo onClick, obter elementos para utilizar em funções JS, modificação de InnerHTML, e funções comuns, como Math.random.",
      image: "par_impar.png",
      link: "projects/par_impar/par_ou_impar.html",
    },
    {
      date: "16 DE AGOSTO DE 2023",
      title: "ARQUIVOS .JS & NOVAS POSSIBILIDADES",
      name: "Jokenpo",
      technologies: ["HTML", "CSS", "JavaScript"],
      description:
        "Aprendendo a utilizar arquivos .js, também fui ensinado a mexer com imagens e cores, assim como trabalhar com possibilidades mais complexas.",
      image: "jokenpo.png",
      link: "projects/jokenpo/jokenpo.html",
    },
    {
      date: "30 DE AGOSTO DE 2023",
      title: "TRABALHO EM EQUIPE",
      name: "ChaThi",
      technologies: ["HTML", "CSS", "PHP", "MySQL", "Bootstrap"],
      description:
        "Neste trabalho em equipe, nos foi ensinado sobre GitHub, algo o qual eu conhecia antes, mas que pode conhecer ainda mais, programando junto com meus colegas.",
      image: "chathi.png",
      link: "projects/chathi/interface/index.php",
    },
    {
      date: "25 DE OUTUBRO DE 2023",
      title: "LOGIN & CONTAS",
      name: "Sessões",
      technologies: ["HTML", "CSS", "PHP", "MySQL"],
      description:
        "Neste importantíssimo projeto, aprendi o básico para criação de contas. Além do cadastro, fiz também um login, o qual mantém a sessão do usuário, páginas que são bloqueadas caso o usuário não esteja logado, e claro, um logout também.",
      image: "sessao.png",
      link: "projects/sessao/index.php",
    },
    {
      date: "8 DE NOVEMBRO DE 2023",
      title: "ORIENTADA A OBJETOS",
      name: "PHP & POO",
      technologies: ["HTML", "CSS", "PHP", "MySQL"],
      description:
        "Após um semestre focado em Programação Orientada a Objetos em Python, finalmente aplicamos o que aprendemos na programação web, criando um site de interface extremamente simples, com o objetivo de testar POO em PHP.",
      image: "poo.png",
      link: "projects/poo/index.php",
    },
    {
      date: "23 DE NOVEMBRO DE 2023",
      title: "TRADUÇÕES",
      name: "Espanhol",
      technologies: ["HTML", "CSS", "JavaScript"],
      description:
        "Durante as aulas de espanhol, uma de nossas avaliações foi adicionar um tradutor em nosso Projeto Integrador. Para testes, eu criei este pequeno site para testar como traduzir elementos do site para o espanhol.",
      image: "espanhol.png",
      link: "projects/espanhol/teste.html",
    },
    {
      date: "1 DE DEZEMBRO DE 2023",
      title: "TREINANDO OBJETOS",
      name: "Blog Premium",
      technologies: ["HTML", "CSS", "PHP", "MySQL"],
      description:
        "Continuando o treinamento de POO em programação web, fizemos um pequeno blog, com usuário e seus textos. Também deveríamos personalizar os nossos blogs, então adicionei um paywall para ultrapassar os caracteres, e uma função de pagar uma quantia em cada trecho para ganhar estrelas no texto.",
      image: "blog.png",
      link: "projects/blog/index.php",
    },
    {
      date: "28 DE SETEMBRO DE 2024",
      title: "CONHECENDO REACT",
      name: "Primeiro React",
      technologies: ["HTML", "CSS", "React", "TypeScript"],
      description:
        "Em busca de aumentar meu leque de conhecimento, comecei um curso de react, visando entender principalmente a lógica de componentes, o qual treinei neste projeto.",
      image: "react.png",
      link: "projects/react/index.html",
    },
    {
      date: "24 DE NOVEMBRO DE 2024",
      title: "APRIMORANDO REACT",
      name: "Gasolina X Álcool",
      technologies: ["HTML", "CSS", "React", "TypeScript"],
      description:
        "Aprimorando meus conhecimentos de react, fiz o classico projeto de comparar custo-benefício entre gasolina e álcool.",
      image: "gasolina.png",
      link: "projects/gasolina/index.html",
    },
  ];

  const cardsDataEn = [
    {
      date: "FEBRUARY 9, 2023",
      title: "THE FIRST OF ALL",
      name: "Hello World",
      technologies: ["HTML"],
      description: "It couldn’t be any different! For any developer, the first step is always this one. Using pure HTML, this was the first website I ever built. The main goal was to understand the fundamentals of a website — such as the <title>, <p>, and <h1> tags — and the basic concepts of the development process, including using VS Code, Go Live, and running the project locally via localhost.",
      image: "helloworld.png",
      link: "projects/first/helloworld.html"
    },
    {
      date: "FEBRUARY 9, 2023",
      title: "ONE STEP FURTHER",
      name: "GNU/Linux",
      technologies: ["HTML"],
      description: "After that, I built a website about GNU/Linux, the operating system used on IFSC computers, where most of the projects in this timeline were developed. The main goal of this site was to better understand paragraph separation and HTML elements in general. The <strong> tag was also a key focus.",
      image: "linux.png",
      link: "projects/first/linux.html"
    },
    {
      date: "FEBRUARY 15, 2023",
      title: "FIRST CONTACT WITH CSS & IMAGES",
      name: "Browsers",
      technologies: ["HTML", "CSS"],
      description:
        "This was my first contact with several important aspects of programming. It was my first time using images, understanding the <img> element; my first experience with links and redirection; and most importantly, my first contact with CSS, working mainly with colors, fonts, and a bit of alignment.",
      image: "navegadores.png",
      link: "projects/navegadores/index.html",
    },
    {
      date: "FEBRUARY 23, 2023",
      title: "LEARNING LISTS",
      name: "Regions",
      technologies: ["HTML", "CSS"],
      description:
        "With this small website, I learned how to build lists in HTML, understanding both in theory and in practice the <ul> and <li> elements. It also ended up helping with Geography...",
      image: "regioes.png",
      link: "projects/listas/regioes.html",
    },
    {
      date: "MARCH 1, 2023",
      title: "WOMEN'S DAY",
      name: "Kim Swift",
      technologies: ["HTML", "CSS"],
      description:
        "For Women’s Day, a class-wide project was carried out where each student created a simple website about a woman in the technology field. These websites were later made publicly available on the day of the event. I chose Kim Swift due to my interest in video games and my admiration for Valve.",
      image: "kim.png",
      link: "projects/kim/index.html",
    },
    {
      date: "MARCH 9, 2023",
      title: "INTRODUCTION TO TABLES",
      name: "Tables",
      technologies: ["HTML", "CSS"],
      description:
        "The goal of this project was clear: to understand and apply the concept of tables using <tr> and <th>, while also improving my understanding of code formatting. This was also where I learned about the CSS hover effect.",
      image: "tabelas.png",
      link: "projects/tabelas/tabelas.html",
    },
    {
      date: "MARCH 15, 2023",
      title: "DISPLAY, BORDERS & BACKGROUND",
      name: "Mario Display",
      technologies: ["HTML", "CSS"],
      description:
        "Using the theme of a character I love, I learned the concept of display, how to customize block borders, and how to place images as a website background.",
      image: "display.png",
      link: "projects/display/display.html",
    },
    {
      date: "MARCH 15, 2023",
      title: "FIRST SECTIONS & NAV",
      name: "Sections",
      technologies: ["HTML", "CSS"],
      description:
        "Using a maritime theme, I created my first nav. I also learned how to use sections and connect them to the nav, making website navigation easier and more intuitive.",
      image: "secoes.png",
      link: "projects/secoes/index.html",
    },
    {
      date: "MARCH 16, 2023",
      title: "APPLYING KNOWLEDGE",
      name: "IFSC Pizzas",
      technologies: ["HTML", "CSS"],
      description:
        "With the goal of applying everything we had learned up to that point, our first evaluation in the subject was to create a website for a fictional pizzeria. Using classic pizzeria colors, I worked with images, tables, navs, sections, and even integrated a Google Maps component.",
      image: "pizzaria.png",
      link: "projects/pizzaria/index.html",
    },
    {
      date: "MARCH 23, 2023",
      title: "LAYOUTS & FLOAT",
      name: "Float",
      technologies: ["HTML", "CSS"],
      description:
        "To learn more about website layouts, we were introduced to float, gaining our first understanding of this concept. I also built a website with links to the different layouts we were required to create.",
      image: "float.png",
      link: "projects/layouts/Layouts/index.html",
    },
    {
      date: "MARCH 29, 2023",
      title: "FOCUS ON RESPONSIVENESS",
      name: "Website Responsiveness",
      technologies: ["HTML", "CSS"],
      description:
        "Here I learned techniques focused on website responsiveness, mainly using media queries, changing spacing, fonts, and even the positioning of site blocks.",
      image: "responsividade.png",
      link: "projects/responsividade/index.html",
    },
    {
      date: "MARCH 29, 2023",
      title: "REPLICATING IMAGES",
      name: "Dubai",
      technologies: ["HTML", "CSS"],
      description:
        "Putting my CSS skills into practice, the goal was to recreate an image — a Dubai advertising poster — using the knowledge acquired previously.",
      image: "dubai.png",
      link: "projects/dubai/dubai.html",
    },
    {
      date: "MARCH 30, 2023",
      title: "LEARNING FLEX",
      name: "Flexbox",
      technologies: ["HTML", "CSS"],
      description:
        "On this day, I learned a lot about display types such as block, none, and display: flex, as well as their additional properties.",
      image: "flexbox.png",
      link: "projects/flex/index.html",
    },
    {
      date: "APRIL 5, 2023",
      title: "WORKS OF ART",
      name: "Journey",
      technologies: ["HTML", "CSS"],
      description:
        "In collaboration with the art class, we had to choose a digital artwork and create a website about it. I chose Journey, an art game that remains one of the most unique video game experiences I have ever had.",
      image: "journey.png",
      link: "projects/artes/journey.html",
    },
    {
      date: "APRIL 12, 2023",
      title: "ART, COLORS & DECISIONS",
      name: "Colors",
      technologies: ["HTML", "CSS"],
      description:
        "In the same collaboration mentioned above, we were tasked with creating our own digital artwork. I chose to build a decision-based game themed around the life choices of an artist. Using CSS animations, backgrounds, and a storyline I really enjoyed, this is certainly my favorite HTML/CSS project.",
      image: "cores.png",
      link: "projects/artes/cores/index.html",
    },
    {
      date: "APRIL 18, 2023",
      title: "THE FIRST FRAMEWORK",
      name: "Bootstrap",
      technologies: ["HTML", "CSS", "Bootstrap"],
      description:
        "With another teacher, we were introduced to Bootstrap by initially testing a few components and understanding what a framework is. At the time, I was following Manchester City’s campaign, which became the theme for these experiments.",
      image: "bootstrap.png",
      link: "projects/bootstrap/index.html",
    },
    {
      date: "APRIL 20, 2023",
      title: "UNDERSTANDING ELEMENTS",
      name: "Semantic Elements",
      technologies: ["HTML", "CSS"],
      description:
        "To make the code clearer and easier to understand, I learned about semantic elements such as header, main, and footer, which greatly improve code readability.",
      image: "semanticos.png",
      link: "/projects/semanticos/index.html",
    },
    {
      date: "MAY 3, 2023",
      title: "APPLYING WHAT WE LEARNED",
      name: "Blue Web",
      technologies: ["HTML", "CSS"],
      description:
        "Before moving on to PHP, we had a class focused on HTML and CSS, aiming to replicate a simple website created by the teacher.",
      image: "blueweb.png",
      link: "projects/blueweb/index.html",
    },
    {
      date: "MAY 4, 2023",
      title: "STARTING WITH PHP",
      name: "Forms",
      technologies: ["HTML", "CSS", "PHP"],
      description:
        "In my first contact with PHP, our focus was on creating forms and working with the data submitted through them, displaying this data to the user or even using it to perform a Google search. I built a small website that links to the PHP pages I created on the first day.",
      image: "form.png",
      link: "projects/form/index.html",
    },
    {
      date: "MAY 11, 2023",
      title: "LEARNING PHP USE CASES",
      name: "Comments",
      technologies: ["HTML", "CSS", "PHP"],
      description:
        "Now working with backend concepts, we built something that at the time felt like magic: taking a comment from the website and saving it into a separate file, as well as displaying the contents of that file on the site.",
      image: "comentarios.png",
      link: "projects/comentarios/index.php",
    },
    {
      date: "MAY 17, 2023",
      title: "PHP PAGES",
      name: "Paginated Blog",
      technologies: ["HTML", "CSS", "PHP"],
      description:
        "In this mini blog, my biggest learning was creating pages in PHP, an extremely useful feature that I would later use in many future projects, such as CodeSnape.",
      image: "paginacao.png",
      link: "projects/paginacao/index.php",
    },
    {
      date: "MAY 17, 2023",
      title: "INTEGRATING DATABASES",
      name: "IFSC Real Estate",
      technologies: ["HTML", "CSS", "PHP", "MySQL"],
      description:
        "After several classes focused purely on databases, this was the first project where we combined database knowledge with web programming, working with a database of fictional houses for a real estate website.",
      image: "imobiliaria.png",
      link: "projects/imobiliaria/index.php",
    },
    {
      date: "MAY 30, 2023",
      title: "PUSHING THE LIMITS OF BOOTSTRAP & CSS",
      name: "Futebola",
      technologies: ["HTML", "CSS", "Bootstrap"],
      description:
        "In a more ambitious project, with a design created by my girlfriend and themed around something I love, Futebola was born. In this project, I challenged myself to see how far I could go using everything I had learned so far.",
      image: "futebola.png",
      link: "projects/futebola/index.html",
    },
    {
      date: "JUNE 13, 2023",
      title: "MORE COMPLETE WEBSITES",
      name: "Liceria",
      technologies: ["HTML", "CSS", "PHP", "MySQL", "Bootstrap"],
      description:
        "Applying several concepts I had learned, I built a website with multiple Bootstrap components and features, focusing on multiple pages and possibilities, including separating the site into employee and customer areas, as well as inserting data into the database.",
      image: "liceria.png",
      link: "projects/livraria/cadastro.html",
    },
    {
      date: "JUNE 28, 2023",
      title: "A CLASSIC",
      name: "PHP Calculator",
      technologies: ["HTML", "CSS", "PHP"],
      description:
        "Like any programmer, I also have my own calculator project. Beyond the basics, I learned about try/catch, error handling, and switch statements.",
      image: "calculadora.png",
      link: "projects/calculadora/index.php",
    },
    {
      date: "AGOSTO DE 2023",
      title: "JAVASCRIPT",
      name: "Exercícios de JavaScript",
      technologies: ["HTML", "CSS", "JavaScript"],
      description:
        "Iniciando minhas aventuras com JS, realizei diversos exercícios para entender sua lógica, funções e possibilidades. Aqui reuni todos eles para demonstrar mais adequadamnente o que foi feito em cada um.",
      image: "javascript.png",
      link: "projects/javascript/index.html",
    },
    {
      date: "10 DE AGOSTO DE 2023",
      title: "FUNÇÕES EM JS",
      name: "Par ou Ímpar",
      technologies: ["HTML", "CSS", "JavaScript"],
      description:
        "Neste projeto aprendi certas bases do JavaScript, tais como funções do tipo onClick, obter elementos para utilizar em funções JS, modificação de InnerHTML, e funções comuns, como Math.random.",
      image: "par_impar.png",
      link: "projects/par_impar/par_ou_impar.html",
    },
    {
      date: "16 DE AGOSTO DE 2023",
      title: "ARQUIVOS .JS & NOVAS POSSIBILIDADES",
      name: "Jokenpo",
      technologies: ["HTML", "CSS", "JavaScript"],
      description:
        "Aprendendo a utilizar arquivos .js, também fui ensinado a mexer com imagens e cores, assim como trabalhar com possibilidades mais complexas.",
      image: "jokenpo.png",
      link: "projects/jokenpo/jokenpo.html",
    },
    {
      date: "30 DE AGOSTO DE 2023",
      title: "TRABALHO EM EQUIPE",
      name: "ChaThi",
      technologies: ["HTML", "CSS", "PHP", "MySQL", "Bootstrap"],
      description:
        "Neste trabalho em equipe, nos foi ensinado sobre GitHub, algo o qual eu conhecia antes, mas que pode conhecer ainda mais, programando junto com meus colegas.",
      image: "chathi.png",
      link: "projects/chathi/interface/index.php",
    },
    {
      date: "25 DE OUTUBRO DE 2023",
      title: "LOGIN & CONTAS",
      name: "Sessões",
      technologies: ["HTML", "CSS", "PHP", "MySQL"],
      description:
        "Neste importantíssimo projeto, aprendi o básico para criação de contas. Além do cadastro, fiz também um login, o qual mantém a sessão do usuário, páginas que são bloqueadas caso o usuário não esteja logado, e claro, um logout também.",
      image: "sessao.png",
      link: "projects/sessao/index.php",
    },
    {
      date: "8 DE NOVEMBRO DE 2023",
      title: "ORIENTADA A OBJETOS",
      name: "PHP & POO",
      technologies: ["HTML", "CSS", "PHP", "MySQL"],
      description:
        "Após um semestre focado em Programação Orientada a Objetos em Python, finalmente aplicamos o que aprendemos na programação web, criando um site de interface extremamente simples, com o objetivo de testar POO em PHP.",
      image: "poo.png",
      link: "projects/poo/index.php",
    },
    {
      date: "23 DE NOVEMBRO DE 2023",
      title: "TRADUÇÕES",
      name: "Espanhol",
      technologies: ["HTML", "CSS", "JavaScript"],
      description:
        "Durante as aulas de espanhol, uma de nossas avaliações foi adicionar um tradutor em nosso Projeto Integrador. Para testes, eu criei este pequeno site para testar como traduzir elementos do site para o espanhol.",
      image: "espanhol.png",
      link: "projects/espanhol/teste.html",
    },
    {
      date: "1 DE DEZEMBRO DE 2023",
      title: "TREINANDO OBJETOS",
      name: "Blog Premium",
      technologies: ["HTML", "CSS", "PHP", "MySQL"],
      description:
        "Continuando o treinamento de POO em programação web, fizemos um pequeno blog, com usuário e seus textos. Também deveríamos personalizar os nossos blogs, então adicionei um paywall para ultrapassar os caracteres, e uma função de pagar uma quantia em cada trecho para ganhar estrelas no texto.",
      image: "blog.png",
      link: "projects/blog/index.php",
    },
    {
      date: "28 DE SETEMBRO DE 2024",
      title: "CONHECENDO REACT",
      name: "Primeiro React",
      technologies: ["HTML", "CSS", "React", "TypeScript"],
      description:
        "Em busca de aumentar meu leque de conhecimento, comecei um curso de react, visando entender principalmente a lógica de componentes, o qual treinei neste projeto.",
      image: "react.png",
      link: "projects/react/index.html",
    },
    {
      date: "24 DE NOVEMBRO DE 2024",
      title: "APRIMORANDO REACT",
      name: "Gasolina X Álcool",
      technologies: ["HTML", "CSS", "React", "TypeScript"],
      description:
        "Aprimorando meus conhecimentos de react, fiz o classico projeto de comparar custo-benefício entre gasolina e álcool.",
      image: "gasolina.png",
      link: "projects/gasolina/index.html",
    },
  ];

  const [language, setLanguage] = useState<"br" | "en">("en");
  const cardsData = language === "br" ? cardsDataBr : cardsDataEn;


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
      <Header language={language} setLanguage={setLanguage} />
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

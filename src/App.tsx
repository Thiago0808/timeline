import './App.css'
import Card from './components/card'

function App() {
  return (
    <div className="main-layout">
      <div className="left-panel">
        {/* Espaço reservado (30%) */}
      </div>

      <div className="right-panel">
        <div className="cards-container">
          <Card
            date="9 DE FEVEREIRO DE 2023"
            title="O PRIMEIRO DE TODOS"
            name="Hello World"
            technologies={["HTML"]}
            description="Não poderia ser diferente! Para qualquer dev, o primeiro passo é sempre esse. 
            Com HTML puro, esse foi o primeiro site que desenvolvi. O objetivo principal era entender os fundamentos de um site — 
            como as tags <title>, <p>, <h1> — e os conceitos básicos do processo de desenvolvimento, 
            como o uso do VS Code, Go Live e execução local via localhost."
            image="helloworld.png"
            link="/projects/first/helloworld.html"
          />
          <Card
            date="9 DE FEVEREIRO DE 2023"
            title="UM PASSO A MAIS"
            name="GNU/Linux"
            technologies={["HTML"]}
            description="Depois, foi feito site sobre GNU/Linux, o sistema operacional utilizado nos computadores do IFSC,
            nos quais foram feitos a maior parte dos projetos desta timelinte. O objetivo com esse site era principalmente 
            entender melhor a separação de parágrafos, e elementos de forma geral. O strong também foi foco."
            image="linux.png"
            link="/projects/first/linux.html"
          />
          <Card
            date="15 DE FEVEREIRO DE 2023"
            title="O PRIMEIRO CONTATO COM CSS E IMAGENS"
            name="Navegadores"
            technologies={["HTML", "CSS"]}
            description="Este foi meu primeiro contato com diversos fatores importantes para a programação.
            Foi meu primeiro uso de imagens, entendendo o elemento <img>; meu primeiro contato com links e redirecionamento;
            e principalmente, meu primeiro contato com CSS, mexendo basicamente com cores, fontes e um pouco de alinhamento"
            image="navegadores.png"
            link="/projects/navegadores/index.html"
          />
          <Card
            date="23 DE FEVEREIRO DE 2023"
            title="APRENDENDO LISTAS"
            name="Regiões"
            technologies={["HTML", "CSS"]}
            description="Foi com esse pequeno site que aprendi a programar listas em HTML,
            compreendendo na teoria e na prática os elementos <ul> e <li>.
            Também ajudou em Geografia..."
            image="regioes.png"
            link="/projects/listas/regioes.html"
          />
          <Card
            date="9 DE MARÇO DE 2023"
            title="INTRODUÇÃO ÀS TABELAS"
            name="Tabelas"
            technologies={["HTML", "CSS"]}
            description="O objetivo deste era claro: Entender e aplicar o conceito de tabelas,
            utilizando <tr> e <th>, além de eu aprimorar meu entendimento de formatação de código. 
            Também foi aqui que conheci o hover do CSS"
            image="tabelas.png"
            link="/projects/tabelas/tabelas.html"
          />
        </div>
      </div>
    </div>
  );
}

export default App

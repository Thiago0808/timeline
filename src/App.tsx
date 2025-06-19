import './App.css'
import Card from './components/card'

function App() {
  return (
    <div className="app-container">
      <Card
        name="Hello World" 
        technologies={["HTML",]} 
        description="Não poderia ser diferente! Para qualquer dev, o primeiro passo é sempre esse. 
        Com HTML puro, esse foi o primeiro site que desenvolvi. O objetivo principal era entender os fundamentos de um site — 
        como as tags <title>, <p>, <h1> — e os conceitos básicos do processo de desenvolvimento, 
        como o uso do VS Code, Go Live e execução local via localhost."
        image="helloworld.png" 
        link='/projects/first/helloworld.html'
      />
    </div>
  );
}

export default App

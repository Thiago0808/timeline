import './App.css'
import Card from './components/card'

function App() {
  return (
    <div className="app-container">
      <Card name="Teste" technologies={["Tec1", "Tec2"]} description="Testando" image="teste" link='example.com'/>
    </div>
  );
}

export default App

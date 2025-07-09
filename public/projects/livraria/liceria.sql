-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Jun-2023 às 01:37
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `liceria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

CREATE TABLE `autor` (
  `cod_autor` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `nacio` varchar(50) NOT NULL,
  `nasc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`cod_autor`, `nome`, `nacio`, `nasc`) VALUES
(4, 'Jeff Kinney', 'Estados Unidos', '1971-02-19'),
(5, 'Emily Blonte', 'Reino Unido', '1818-07-30'),
(6, 'José de Alencar', 'Brasil', '1829-05-01'),
(7, 'Lauren Kate', 'Estados Unidos', '1981-03-21'),
(8, 'Jonathan Wilson', 'Reino Unido', '1976-06-09'),
(10, 'Thiago Martins', 'Brasil', '2005-08-08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cod_cliente` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sob` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `ende` varchar(100) NOT NULL,
  `rg` int(50) NOT NULL,
  `nasc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cod_cliente`, `nome`, `sob`, `senha`, `tel`, `ende`, `rg`, `nasc`) VALUES
(5, 'Pablo', 'Rodrigues', '1234', '(95) 9245-7123', 'Rua Joaquim Amorim, Uberaba, Santa Cataroma', 222052314, '1986-06-12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `editora`
--

CREATE TABLE `editora` (
  `cod_editora` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `origem` varchar(50) NOT NULL,
  `ano` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `editora`
--

INSERT INTO `editora` (`cod_editora`, `nome`, `origem`, `ano`) VALUES
(2, 'Vergara e Riba Editoras S.A.', 'Argentina', 1998),
(3, 'DarkSide Books', 'Brasil', 2012),
(4, 'Penguin Books', 'Reino Unido', 1935),
(5, 'Principis', 'Brasil', 2000),
(6, 'Galera', 'Brasil', 2007),
(7, 'Editora Grande Área', 'Brasil', 2015);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `cod_funcionario` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sob` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `ende` varchar(100) NOT NULL,
  `rg` int(20) NOT NULL,
  `nasc` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`cod_funcionario`, `nome`, `sob`, `senha`, `tel`, `ende`, `rg`, `nasc`) VALUES
(1, 'Thiago', 'Martins Oliveira', '0808', '+55 (48) 92023-2005', 'Garopaba, SC', 8, '2005-08-08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `genero`
--

CREATE TABLE `genero` (
  `cod_genero` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `genero`
--

INSERT INTO `genero` (`cod_genero`, `nome`) VALUES
(1, 'Comédia'),
(2, 'Romance'),
(3, 'Tragédia'),
(4, 'Esporte'),
(5, 'História'),
(6, 'Humor'),
(7, 'Ficção Juvenil'),
(8, 'Diário de Ficção'),
(9, 'Ficção Gótica'),
(10, 'Ficção'),
(11, 'Juvenil'),
(12, 'Paranormal'),
(13, 'Literatura Fantástica');

-- --------------------------------------------------------

--
-- Estrutura da tabela `genero_livro`
--

CREATE TABLE `genero_livro` (
  `cod` int(11) NOT NULL,
  `cod_livro` int(11) NOT NULL,
  `cod_genero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `genero_livro`
--

INSERT INTO `genero_livro` (`cod`, `cod_livro`, `cod_genero`) VALUES
(1, 1, 1),
(2, 1, 6),
(3, 1, 1),
(4, 1, 7),
(5, 1, 8),
(6, 2, 6),
(7, 2, 1),
(8, 2, 7),
(9, 2, 8),
(10, 8, 6),
(11, 8, 1),
(12, 8, 7),
(13, 8, 8),
(14, 3, 6),
(15, 3, 1),
(16, 3, 7),
(17, 3, 8),
(18, 9, 2),
(19, 9, 9),
(20, 9, 3),
(21, 4, 2),
(22, 4, 10),
(23, 10, 10),
(24, 5, 2),
(25, 5, 10),
(26, 11, 2),
(27, 11, 11),
(28, 11, 12),
(29, 11, 13),
(30, 6, 4),
(31, 6, 5),
(32, 12, 2),
(33, 12, 11),
(34, 12, 12),
(35, 12, 13),
(36, 7, 2),
(37, 7, 11),
(38, 7, 12),
(39, 7, 13);

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `cod_livro` int(11) NOT NULL,
  `tit` text NOT NULL,
  `pag` int(4) NOT NULL,
  `ano` int(4) NOT NULL,
  `edi` varchar(20) NOT NULL,
  `sin` text NOT NULL,
  `cod_autor` int(11) NOT NULL,
  `cod_editora` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`cod_livro`, `tit`, `pag`, `ano`, `edi`, `sin`, `cod_autor`, `cod_editora`) VALUES
(1, 'Diário de um Banana', 218, 2007, ' 9 788576 833932', 'Não é fácil ser criança. E ninguém sabe disso melhor do que Greg Heffley, que se vê mergulhado no mundo do ensino fundamental, onde fracotes são obrigados a dividir os corredores com garotos mais altos, mais malvados e que já se barbeiam. Em Diário de um Banana, o autor e ilustrados Jeff Kinney nos apresenta um herói improvável. Como Greg diz em seu diário. Só não espere que seja todo Querido Diário isso, Querido Diário aquilo. Para nossa sorte, o que Greg Heffley diz que fará e o que ele realmente faz são duas coisas bem diferentes.', 4, 2),
(2, 'Diário de um Banana - Vol. 2 Rodrick é o Cara', 218, 2008, '9 788576 833949 ', 'Faça o que quiser, só não pergunte a Greg Heffley como foram suas férias de verão, porque ele realmente não quer falar sobre isso. De volta às aulas, Greg está ansioso para enterrar de vez os últimos três meses... e um acontecimento em particular. Mas seu irmão mais velho, Rodrick, não vai deixar que as coisas caiam no esquecimento assim tão fácil. Ele é testemunha de um \'pequeno\' incidente que Greg quer manter em sigilo. Mas sabe como são os segredos, não é? Logo, logo estão na boca do povo, especialmente quando há um diário envolvido na confusão.', 4, 2),
(3, 'Diário de um Banana - Vol. 4 Dias de Cão', 218, 2009, '9 788576 834397', 'Férias de verão: o tempo está lindo, e toda garotada está se divertindo ao ar livre. Onde está Greg Heffley? Dentro da sua casa, jogando videogame com as cortinas fechadas. Greg, um caseiro assumido, está vivendo sua última fantasia de verão: nada de responsabilidades e regras. Mas a mãe do Greg tem uma visão diferente para um verão ideal, muitas atividades fora de casa e união da família. Qual ponto de vista vai ganhar? Ou será que uma nova aquisição para a família Heffley pode mudar tudo?', 4, 2),
(4, 'Iracema', 192, 1865, '978-8582850336', 'Iracema é um dos textos fundamentais da cultura brasileira. Parte da trilogia indianista de José de Alencar (O guarani e Ubirajara são os outros livros), o romance guarda a multiplicidade dos clássicos: sua prosa é poética, seu tratamento da matéria é mítico, seu ar é de epopeia. Livro que durante muitos anos resumiu o éthos brasileiro nas letras, ainda hoje oferece muitos caminhos de interpretação na crítica literária, na historiografia, nos estudos culturais e de gênero. A história do amor de Iracema, a “virgem dos lábios de mel”, com Martim, é a metáfora romântica do encontro entre a civilização e a cultura autóctone. Valorizando a paisagem brasileira e construindo um passado idealizado, José de Alencar criou um mito que perdura até hoje.', 6, 4),
(5, 'Senhora', 336, 1875, '978-8563560599', 'Senhora é um dos principais romances urbanos de José de Alencar, e uma de suas críticas sociais mais contundentes. Narrativa dividida em quatro partes, conta a história do casamento entre Aurélia, moça pobre e órfã que acaba se tornando herdeira de grande fortuna, e Fernando Seixas, frequentador dos altos círculos da corte, mas incapaz de manter financeiramente sua vida luxuosa. Apaixonada por Seixas em seus dias de pobreza, Aurélia é trocada pelo amado por uma moça com um dote de trinta contos de réis. Em uma das muitas reviravoltas do enredo, porém, Aurélia acaba herdeira de grande fortuna, e atrai Seixas de volta para si, anonimamente, em troca de uma quantia três vezes maior. No entanto, logo na noite de núpcias ela revela seu expediente e toda a hipocrisia inerente à transação da compra do marido, e a partir de então a relação dos recém-casados se torna um jogo mordaz de intrigas, manobras sigilosas e diálogos ácidos e repletos de subentendidos. Com sua narrativa concentrada na vida ociosa das classes abastadas e sua existência parasitária em torno da corte imperial, Senhora retrata um momento de transformação da sociedade brasileira, em que os valores patriarcais são cada vez mais deixados de lado em detrimento do poderio financeiro da burguesia ascendente e seu poder de influência na vida cotidiana, o que o torna ao mesmo tempo uma obra de arte representativa de um momento definidor da literatura brasileira e um documento precioso de uma transformação social que se mostraria irreversível.', 6, 4),
(6, 'A Pirâmide Invertida', 472, 2008, '978-8569214083', 'Prepare-se para conhecer a “bíblia da tática”. Em A pirâmide invertida, o britânico Jonathan Wilson refaz todo o roteiro histórico da tática no futebol. Desde as origens do jogo, quando o caos ainda reinava, seus relatos percorrem a já longínqua era dos cinco atacantes, passam pelas grandes transformações da segunda metade do século XX e chegam enfim aos tempos modernos, em que a “pirâmide” se inverteu completamente para consagrar os esquemas com apenas um homem na linha de frente.\r\nA obra, que é uma referência internacional entre os livros dedicados ao futebol, vem cumprindo nos países onde já foi publicada um papel fascinante: o de induzir uma mudança gradual no comportamento dos apaixonados pelo esporte. Temas como a observação dos aspectos táticos do jogo, o entendimento dos movimentos dos atletas em campo e o gosto pela história do futebol passaram por um verdadeiro reposicionamento de expectativas: de tópicos pouco conhecidos, nem sempre bem-vindos nas conversas do dia a dia ou nos bate-papos pela televisão, transformaram-se em favoritos de crítica e público.\r\nE a razão para isso é simples: o livro toma o leitor pelo braço em um passeio pela história do esporte das massas, registrando ao longo do caminho cada etapa da evolução do jogo e revelando em detalhes os traços de estilo e as ideias inovadoras dos personagens mais importantes de todo esse processo.', 8, 7),
(7, 'Paixão - Série Fallen', 378, 2011, '978-8501089649', 'Antes que Luce e Daniel se conhecessem na Sword & Cross e tivessem lutado contra Imortais e Párias, eles viveram muitas vidas. Luce não sabe mais o que pensar. Seu amor por Daniel é mais forte do que tudo ― exceto, talvez, pela necessidade de saber mais sobre a história dos dois e as razões por trás da terrível maldição que atormenta suas vidas repetidamente.', 7, 6),
(8, 'Diário de um Banana - Vol. 3 A Gota D’água', 218, 2009, '9 788576 834380', 'Greg não toma jeito mesmo. E a cada dia se envolve em mais confusão. O difícil é fazer seu pai engolir esse talento de Greg para se meter em situações embaraçosas. Ele já está por aqui com o garoto. E para botar algum juízo na cabeça dele, Frank Heffley tenta de tudo um pouco. É claro que Greg sempre encontra uma maneira de estragar tudo. Até que seu pai faz uma grande ameaça e as coisas mudam de figura. Qual será a gota d’água que vai fazer a paciência de Frank transbordar de vez?', 4, 2),
(9, 'Morro dos Ventos Uivantes', 416, 1847, '978-8594542182', 'A história de um amor que nem mesmo as armadilhas do destino e a morte conseguiram destruir\r\n 	No centro dos acontecimentos dessa história de obsessão e dor, perversidade e vingança, estão a obstinada figura de Catherine Earnshaw e o rude e enérgico Heathcliff, que aprende a odiar após sofrer humilhações e rejeições de todos os tipos.\r\n	O morro dos ventos uivantes é um retrato penetrante e comovente da degradação humana. E, como todo bom clássico, tem várias portas por onde o leitor pode entrar. Mais difícil, no entanto, será encontrar a saída, pois o efeito da leitura ficará entranhado para sempre em sua lembrança. ', 5, 3),
(10, 'Guarani', 288, 1857, '978-8594318848', 'O Guarani conta a história de Peri, um índio forte e leal da Nação Goitacá e sua relação com a família de dom Antônio de Mariz, um fidalgo português. Peri e o protetor de Cecília, uma bela donzela, filha de dom Antonio. Com a morte acidental de uma índia aimoré pelo irmão de Cecília, dom Diogo, a família portuguesa corre perigo, pois a tribo busca vingança. Assim, Ceci e sua família contarão com a ajuda e proteção de Peri, o bravo herói brasileiro desta importante obra do Romantismo.', 6, 5),
(11, 'Fallen', 406, 2009, '978-8501089625', 'Excitante, sombrio e romântico Fallen é, ao mesmo tempo, um thriller vigoroso e uma inesquecível história de amor. Lauren aposta no amor impossível entre os protagonistas para tecer o início de uma saga com todos os ingredientes de um cult do gênero. Em Fallen, acompanhamos a adolescente Luce, mandada para um reformatório ― apropriadamente batizado de Sword & Cross ― após a morte do namorado em um incêndio misterioso. Ela suspeita que estranhas sombras negras, que a atormentam desde a infância, são as verdadeiras responsáveis. Mas quem acreditaria nela?Na escola, ela encontra o etereamente belo Daniel Grigori, que desperta uma estranha sensação de reconhecimento: único ponto luminoso num lugar onde celulares são proibidos e há câmeras de vigilância por todos os cantos. Mas tanta luz hipnotiza a menina, atraída pelo rapaz como uma mariposa pela chama. Ele tenta se manter afastado de Luce, mas também não consegue. E a verdade promete separá-los como tantas outras vezes ― com a morte de Luce. Amantes destinados a se encontrar e se perder vida após vida, século após século.', 7, 6),
(12, 'Tormenta - Série Fallen', 392, 2011, '978-8501089632', 'Inferno na terra. É assim que Luce se sente quando está longe de seu namorado, um anjo caído, Daniel. Demorou uma eternidade até que eles se encontrassem, mas agora ele lhe diz que precisam se separar novamente. Somente pelo tempo necessário para caçar os Párias ― anjos caídos, como ele, mas que desejam Luce morta mais do que tudo. Daniel leva sua amada mortal até a Shoreline, uma escola na rochosa costa californiana que esconde alunos com talentos únicos: os nefilim, filhos ou descendentes de relacionamentos entre anjos e mortais. Na Shoreline, Luce aprende mais sobre as sombras, e como pode utilizá-las como janelas para suas vidas passadas. Porém, quanto mais Luce descobre todas aquelas Luces anteriores a ela, mais ela suspeita que Daniel está escondendo um segredo ― um segredo mortal. E se a versão de Daniel para o passado dos dois não é exatamente verdadeira? E se Luce devesse estar com outra pessoa ― em uma vida não amaldiçoada por esse amor proibido? Será que ser amada por um anjo vale todo o sofrimento em séculos de existência?\r\nEm Fallen o amor nunca morre.', 7, 6);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`cod_autor`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cod_cliente`);

--
-- Índices para tabela `editora`
--
ALTER TABLE `editora`
  ADD PRIMARY KEY (`cod_editora`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`cod_funcionario`);

--
-- Índices para tabela `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`cod_genero`);

--
-- Índices para tabela `genero_livro`
--
ALTER TABLE `genero_livro`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `cod_genero` (`cod_genero`),
  ADD KEY `cod_livro` (`cod_livro`);

--
-- Índices para tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`cod_livro`),
  ADD KEY `cod_autor` (`cod_autor`),
  ADD KEY `cod_editora` (`cod_editora`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `autor`
--
ALTER TABLE `autor`
  MODIFY `cod_autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cod_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `editora`
--
ALTER TABLE `editora`
  MODIFY `cod_editora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `cod_funcionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `genero`
--
ALTER TABLE `genero`
  MODIFY `cod_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `genero_livro`
--
ALTER TABLE `genero_livro`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `cod_livro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `genero_livro`
--
ALTER TABLE `genero_livro`
  ADD CONSTRAINT `genero_livro_ibfk_1` FOREIGN KEY (`cod_genero`) REFERENCES `genero` (`cod_genero`),
  ADD CONSTRAINT `genero_livro_ibfk_2` FOREIGN KEY (`cod_livro`) REFERENCES `livro` (`cod_livro`);

--
-- Limitadores para a tabela `livro`
--
ALTER TABLE `livro`
  ADD CONSTRAINT `livro_ibfk_1` FOREIGN KEY (`cod_autor`) REFERENCES `autor` (`cod_autor`),
  ADD CONSTRAINT `livro_ibfk_2` FOREIGN KEY (`cod_editora`) REFERENCES `editora` (`cod_editora`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

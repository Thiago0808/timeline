-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 01-Dez-2023 às 21:12
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
-- Banco de dados: `blog`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `texto`
--

CREATE TABLE `texto` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  `premium` varchar(5) NOT NULL,
  `valor_pago` decimal(20,2) DEFAULT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `texto`
--

INSERT INTO `texto` (`id`, `titulo`, `texto`, `premium`, `valor_pago`, `usuario_id`) VALUES
(2, 'Testanto', 'ttttttttttttttttttttttttttttttttttttttttttttttt', 'sim', '200.29', 1),
(3, 'Sem', 'aaaa', 'nao', NULL, 6),
(4, 'Premium', 'Chique', 'sim', '99.99', 6),
(5, 'Legal', 'Legalzão', 'nao', NULL, 6),
(6, 'Caro', 'PAguei Muito', 'sim', '150.00', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` char(200) NOT NULL,
  `email` char(200) NOT NULL,
  `senha` char(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Thiago', 'thiago@gmail.com', 'Teste'),
(2, 'Cristiano Ronaldo', 'cr7@gmail.com', '$2y$10$b1zV9n5E6lcQEvOq8bE5KueMSPvHaggH7DRGGbiZsB8RFJzZ/nAca'),
(3, 'Aline', 'aline@gmail.com', '$2y$10$xnrRsyqcgr87ojAY0xnaeu5Fb1r0kcw9M8wHJ5UMlt1Yo2Bx5lZzu'),
(6, 'Thi', 'thi@gmail.com', '$2y$10$pbFliumMJEzYMEZxhip86.n4BKH2mcaqiiJbSKMNUwA/AE2bkg9su');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `texto`
--
ALTER TABLE `texto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `texto`
--
ALTER TABLE `texto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `texto`
--
ALTER TABLE `texto`
  ADD CONSTRAINT `texto_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
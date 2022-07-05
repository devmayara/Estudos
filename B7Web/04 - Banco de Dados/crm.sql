-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Jul-2022 às 21:23
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crm`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedores`
--

CREATE TABLE `fornecedores` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL DEFAULT '',
  `telefone` varchar(50) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `fornecedores`
--

INSERT INTO `fornecedores` (`id`, `nome`, `telefone`) VALUES
(1, 'XYZ', '(11) 9999-9999'),
(2, 'Bigsoft', '(12) 8888-8888'),
(3, 'Bla', '(13) 7777-7777'),
(4, 'Positivo', '(14) 6666-6666'),
(5, 'LG', '(15) 5555-5555'),
(6, 'NASA', '(16) 4444-4444');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `preco` float NOT NULL,
  `estoque` int(11) NOT NULL DEFAULT 0,
  `min_estoque` int(11) NOT NULL DEFAULT 0,
  `id_fornecedores` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `estoque`, `min_estoque`, `id_fornecedores`) VALUES
(1, 'Teclado Gamer XYZ', 200, 10, 5, 1),
(2, 'Mouse 9200dpi', 125.66, 36, 15, 2),
(3, 'Monitor 99\' Ultrawide', 999.99, 14, 10, 3),
(4, 'Notebook 50GB ram', 9546.54, 7, 10, 4),
(5, 'Teclado Numérico XYX', 37.5, 5, 5, 1),
(6, 'Cadeira Gamer Bla', 864.1, 12, 10, 3),
(7, 'Monitor 5\' Curvo', 140, 33, 35, 5),
(8, 'PC da NASA', 60020.4, 2, 1, 6),
(9, 'PC Ruim', 56.089, 75, 50, 6),
(10, 'Cubo Mágico de 13 faces', 3.85, 324, 350, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `data_cadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `data_cadastro`) VALUES
(1, 'Borieky', '2017-12-10'),
(2, 'Pedro Silva', '2009-04-15'),
(3, 'João', '2011-03-18'),
(4, 'Jessica', '2019-07-22'),
(5, 'Beatriz', '2021-01-11');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

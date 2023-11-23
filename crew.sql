-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Nov-2023 às 14:54
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `rcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `crew`
--

CREATE TABLE `crew` (
  `id` int(11) NOT NULL,
  `nomeCrew` varchar(200) NOT NULL,
  `qtdParticipantes` int(11) NOT NULL,
  `sexo` varchar(200) NOT NULL,
  `cidade` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `crew`
--

INSERT INTO `crew` (`id`, `nomeCrew`, `qtdParticipantes`, `sexo`, `cidade`) VALUES
(1, 'jonas', 0, 'masc', 'rio grande do leste'),
(3, 'jonas', 0, 'fem', 'rio grande do leste'),
(4, 'jonas', 4800, 'masc', 'rio grande do leste'),
(5, 'jonas', 0, 'fem', 'longe'),
(6, 'jonas', 7, 'fem', 'rio grande do leste');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `crew`
--
ALTER TABLE `crew`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `crew`
--
ALTER TABLE `crew`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

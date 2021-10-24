-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Out-2021 às 23:19
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `planejamentos_transacoes`
--
CREATE DATABASE IF NOT EXISTS `planejamentos_transacoes` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `planejamentos_transacoes`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `planejamentos`
--

CREATE TABLE `planejamentos` (
  `id` int(11) NOT NULL,
  `planejamento` varchar(50) NOT NULL,
  `descricao` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `planejamentos`
--

INSERT INTO `planejamentos` (`id`, `planejamento`, `descricao`) VALUES
(1, 'Viagem', 'Fortaleza'),
(2, 'carros', 'jetta'),
(3, '123', '321'),
(4, 'jooj', 'jaaj'),
(5, 'jiij', 'juuj123123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `planejamentos`
--
ALTER TABLE `planejamentos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `planejamentos`
--
ALTER TABLE `planejamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

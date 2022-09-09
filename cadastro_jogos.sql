-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 09-Set-2022 às 03:44
-- Versão do servidor: 8.0.27
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro_jogos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogos`
--

DROP TABLE IF EXISTS `jogos`;
CREATE TABLE IF NOT EXISTS `jogos` (
  `codProduto` int NOT NULL,
  `nome` varchar(30) NOT NULL,
  `genero` varchar(10) NOT NULL,
  `Classificacao_Idade` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `jogos`
--

INSERT INTO `jogos` (`codProduto`, `nome`, `genero`, `Classificacao_Idade`) VALUES
(1, 'Valorant', 'FPS', '14 Anos'),
(2, 'Terraria', 'Sobrevivên', '10 Anos'),
(3, 'Minecraft', 'Sobrevivên', '10 Anos'),
(4, 'League of Legends', 'MOBA', '14 Anos'),
(5, 'Raft', '$Sobrevivê', '$10 Anos'),
(5, 'Raft', 'Sobrevivên', '10 Anos'),
(6, 'Mortal Kombat', 'Luta', '14 Anos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `usuario` varchar(40) NOT NULL,
  `senha` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`usuario`, `senha`) VALUES
('Hugo', '123'),
('Pedro', '456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

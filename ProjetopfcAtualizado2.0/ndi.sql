-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 23-Ago-2018 às 02:33
-- Versão do servidor: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ndi`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `certificados`
--

DROP TABLE IF EXISTS `certificados`;
CREATE TABLE IF NOT EXISTS `certificados` (
  `id` int(11) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `curso` varchar(45) NOT NULL,
  `ano` int(11) NOT NULL,
  `turma` int(11) NOT NULL,
  `duracao` varchar(45) NOT NULL,
  `area` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `unidade` varchar(45) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `certificados`
--

INSERT INTO `certificados` (`id`, `cpf`, `nome`, `curso`, `ano`, `turma`, `duracao`, `area`, `cidade`, `unidade`) VALUES
(1, '01712289527', 'JOAO CARLOS DE FREITAS BARRETO', 'OPERADOR DE EMPILHADEIRA', 2009, 0, '2010', 'FABRICA', 'SALVADOR', 'DENDEZEIROS');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dossie`
--

DROP TABLE IF EXISTS `dossie`;
CREATE TABLE IF NOT EXISTS `dossie` (
  `id` int(11) DEFAULT NULL,
  `nome` text,
  `cpf` varchar(11) DEFAULT NULL,
  `curso` text,
  `ano` int(11) DEFAULT NULL,
  `turma` int(11) DEFAULT NULL,
  `duracao` text,
  `area` text,
  `cidade` text,
  `unidade` text,
  `box` text,
  `prateleira` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `dossie`
--

INSERT INTO `dossie` (`id`, `nome`, `cpf`, `curso`, `ano`, `turma`, `duracao`, `area`, `cidade`, `unidade`, `box`, `prateleira`) VALUES
(1, 'ANA LUCIA FERREIRA', '34647180506', 'ELETRICIDADE', 1982, 0, '1983', 'ELETRICA', 'SALVADOR', 'DENDEZEIROS', 'AS65', '12'),
(2, 'ANTONIO CARLOS COSTA PAIXAO', '15809757553', 'MECANICA GERAL', 1974, 0, '1975', 'AUTOMOTIVA', 'SALVADOR', 'DENDEZEIROS', 'ER023', '235'),
(1, 'ANA LUCIA FERREIRA', '34647180506', 'ELETRICIDADE', 1982, 0, '1983', 'ELETRICA', 'SALVADOR', 'DENDEZEIROS', 'AS65', '12'),
(2, 'ANTONIO CARLOS COSTA PAIXAO', '15809757553', 'MECANICA GERAL', 1974, 0, '1975', 'AUTOMOTIVA', 'SALVADOR', 'DENDEZEIROS', 'ER023', '235');

-- --------------------------------------------------------

--
-- Estrutura da tabela `registros`
--

DROP TABLE IF EXISTS `registros`;
CREATE TABLE IF NOT EXISTS `registros` (
  `id` int(11) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `curso` varchar(45) NOT NULL,
  `ano` int(11) NOT NULL,
  `turma` int(11) NOT NULL,
  `duracao` varchar(45) NOT NULL,
  `area` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `unidade` varchar(45) NOT NULL,
  `box` varchar(45) NOT NULL,
  `prateleira` int(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `registros`
--

INSERT INTO `registros` (`id`, `cpf`, `nome`, `curso`, `ano`, `turma`, `duracao`, `area`, `cidade`, `unidade`, `box`, `prateleira`) VALUES
(1, '05512249592', 'Leonardo Pedreira de Alvarenga', 'Tec em info', 2017, 55223, 'hoje', 'ti', 'salvador', 'dendezeiros', '11223', 22222),
(2, '00463579550', 'ODEMIR JESUS DOS REIS', 'CALDERARIA', 2006, 0, '2007', 'CULINARIA', 'SALVADOR', 'DENDEZEIROS', 'A1', 1),
(3, '07177844520', 'ERIVELTON RIBEIRO DE OLIVEIRA', 'MECANICA GERAL', 1966, 0, '1970', 'AUTOMOTIVA', 'SALVADOR', 'DENDEZEIROS', 'F5', 23),
(4, '05512249592', 'ueueueu', 'ueueueu', 1234, 0, '2105', 'CULINARIA', 'SALVADOR', 'DENDEZEIROS', 'asd', 120);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` text NOT NULL,
  `login` text NOT NULL,
  `senha` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `login`, `senha`) VALUES
(1, 'Administrador', 'admin', '21232f297a57a5a743894a0e4a801fc3');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

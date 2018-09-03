-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 03-Set-2018 às 22:19
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
  `id_certificados` int(11) NOT NULL AUTO_INCREMENT,
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
  `prateleira` int(11) NOT NULL,
  PRIMARY KEY (`id_certificados`),
  UNIQUE KEY `id` (`id_certificados`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `certificados`
--

INSERT INTO `certificados` (`id_certificados`, `cpf`, `nome`, `curso`, `ano`, `turma`, `duracao`, `area`, `cidade`, `unidade`, `box`, `prateleira`) VALUES
(1, '01712289527', 'JOAO CARLOS DE FREITAS BARRETO', 'OPERADOR DE EMPILHADEIRA', 2009, 0, '2010', 'FABRICA', 'SALVADOR', 'DENDEZEIROS', '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `dossie`
--

DROP TABLE IF EXISTS `dossie`;
CREATE TABLE IF NOT EXISTS `dossie` (
  `id_dossie` int(11) NOT NULL AUTO_INCREMENT,
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
  `prateleira` text,
  PRIMARY KEY (`id_dossie`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `dossie`
--

INSERT INTO `dossie` (`id_dossie`, `nome`, `cpf`, `curso`, `ano`, `turma`, `duracao`, `area`, `cidade`, `unidade`, `box`, `prateleira`) VALUES
(1, 'ANA LUCIA FERREIRA', '34647180506', 'ELETRICIDADE', 1982, 0, '1983', 'ELETRICA', 'SALVADOR', 'DENDEZEIROS', 'AS65', '12'),
(2, 'ANTONIO CARLOS COSTA PAIXAO', '15809757553', 'MECANICA GERAL', 1974, 0, '1975', 'AUTOMOTIVA', 'SALVADOR', 'DENDEZEIROS', 'ER023', '235'),
(3, 'ANA LUCIA FERREIRA', '34647180506', 'ELETRICIDADE', 1982, 0, '1983', 'ELETRICA', 'SALVADOR', 'DENDEZEIROS', 'AS65', '12'),
(4, 'ANTONIO CARLOS COSTA PAIXAO', '15809757553', 'MECANICA GERAL', 1974, 0, '1975', 'AUTOMOTIVA', 'SALVADOR', 'DENDEZEIROS', 'ER023', '235');

-- --------------------------------------------------------

--
-- Estrutura da tabela `registros`
--

DROP TABLE IF EXISTS `registros`;
CREATE TABLE IF NOT EXISTS `registros` (
  `id_registros` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`id_registros`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `registros`
--

INSERT INTO `registros` (`id_registros`, `cpf`, `nome`, `curso`, `ano`, `turma`, `duracao`, `area`, `cidade`, `unidade`, `box`, `prateleira`) VALUES
(1, '05512249592', 'Leonardo Pedreira de Alvarenga', 'Tec em info', 2017, 55223, 'hoje', 'ti', 'salvador', 'dendezeiros', '11223', 22222),
(2, '00463579550', 'ODEMIR JESUS DOS REIS', 'CALDERARIA', 2006, 0, '2007', 'CULINARIA', 'SALVADOR', 'DENDEZEIROS', 'A1', 1),
(3, '07177844520', 'ERIVELTON RIBEIRO DE OLIVEIRA', 'MECANICA GERAL', 1966, 0, '1970', 'AUTOMOTIVA', 'SALVADOR', 'DENDEZEIROS', 'F5', 23);

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
  `adm` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `login`, `senha`, `adm`) VALUES
(1, 'Administrador', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'Leo', 'leo', '0f759dd1ea6c4c76cedc299039ca4f23', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

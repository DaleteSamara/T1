-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 06-Abr-2018 às 18:27
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `loja`
--
CREATE DATABASE IF NOT EXISTS `loja` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `loja`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE IF NOT EXISTS `cadastro` (
  `cpf` varchar(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sexo` char(1) NOT NULL,
  `cod_cidade` int(11) NOT NULL,
  PRIMARY KEY (`cpf`),
  KEY `cod_cidade` (`cod_cidade`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`cpf`, `nome`, `email`, `sexo`, `cod_cidade`) VALUES
('123456765', 'Nayla', 'nayla@email.com', 'F', 136),
('123456770', 'Agatha', 'agatha_queeusou@email.com', 'F', 124),
('123456771', 'Agnes', 'Agnes@email.com', 'F', 125),
('123456772', 'Suzete', 'suzete@email.com', 'F', 125),
('123456773', 'Betina', 'betina@email.com', 'F', 126),
('123456774', 'Fiona', 'fioninha@email.com', 'F', 126),
('123456775', 'Lolita', 'lolita_loka@email.com', 'F', 132),
('123456777', 'Nina', 'nina@email.com', 'F', 133),
('123456778', 'Ivana', 'ivaninha@email.com', 'F', 134),
('123456779', 'Valentina', 'valentinha@email.com', 'F', 135),
('123456780', 'Vicente', 'vi_centinho@email.com', 'M', 136),
('123456781', 'Braian', 'braian@email.com', 'M', 123),
('123456782', 'Heitor', 'heitor2@email.com', 'M', 123),
('123456783', 'Lorenzo', 'lorenzo01@email.com', 'M', 122),
('123456784', 'Dante', 'dante003@email.com', 'M', 122),
('123456785', 'Cauâ', 'cauazica@email.com', 'M', 124),
('123456786', 'Lucca', 'lucca_luccinha@email.com', 'M', 132),
('123456787', 'Joaquim', 'joaquim@email.com', 'M', 133),
('123456788', 'Nicolas', 'nicolinha@email.com', 'M', 134),
('123456789', 'Henry', 'henry_0@email.com', 'M', 135);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

CREATE TABLE IF NOT EXISTS `cidade` (
  `id_cidade` int(11) NOT NULL,
  `nome_cidade` varchar(100) NOT NULL,
  `cod_estado` int(11) NOT NULL,
  PRIMARY KEY (`id_cidade`),
  KEY `cod_estado` (`cod_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cidade`
--

INSERT INTO `cidade` (`id_cidade`, `nome_cidade`, `cod_estado`) VALUES
(122, 'Rincão', 555),
(123, 'Araraquara', 555),
(124, 'São Paulo', 555),
(125, 'Ribeirão Preto', 555),
(126, 'Matão', 555),
(132, 'Rio de Janeiro', 556),
(133, 'Petrópolis', 556),
(134, 'Cabo Frio', 556),
(135, 'Piraí', 556),
(136, 'Rio Bonito', 556);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado`
--

CREATE TABLE IF NOT EXISTS `estado` (
  `id_estado` int(11) NOT NULL,
  `sigla` char(2) NOT NULL,
  `nome_estado` varchar(50) NOT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estado`
--

INSERT INTO `estado` (`id_estado`, `sigla`, `nome_estado`) VALUES
(555, 'SP', 'São Paulo'),
(556, 'RJ', 'Rio de Janeiro');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD CONSTRAINT `cadastro_ibfk_1` FOREIGN KEY (`cod_cidade`) REFERENCES `cidade` (`id_cidade`);

--
-- Limitadores para a tabela `cidade`
--
ALTER TABLE `cidade`
  ADD CONSTRAINT `cidade_ibfk_1` FOREIGN KEY (`cod_estado`) REFERENCES `estado` (`id_estado`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

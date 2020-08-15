-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 23-Jul-2020 às 00:25
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gerencial`
--
CREATE DATABASE IF NOT EXISTS `gerencial` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `gerencial`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CODIGO` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `PRODUTO` varchar(80) COLLATE utf8_bin NOT NULL,
  `GRUPO` int(11) DEFAULT NULL,
  `TIPO_DE_MEDICAO` int(11) DEFAULT NULL,
  `DESCRICAO` text COLLATE utf8_bin DEFAULT NULL,
  `USUARIO_INCLUSAO` int(11) DEFAULT NULL,
  `DATA_INCLUSAO` datetime DEFAULT NULL,
  `USUARIO_ALTERACAO` int(11) DEFAULT NULL,
  `DATA_ALTERACAO` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `tipodemedicao` (`TIPO_DE_MEDICAO`),
  KEY `produtogrupo` (`GRUPO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto_grupo`
--

DROP TABLE IF EXISTS `produto_grupo`;
CREATE TABLE IF NOT EXISTS `produto_grupo` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CODIGO` varchar(45) COLLATE utf8_bin NOT NULL,
  `GRUPO` varchar(80) COLLATE utf8_bin NOT NULL,
  `DESCRICAO` text COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_de_medicao`
--

DROP TABLE IF EXISTS `tipo_de_medicao`;
CREATE TABLE IF NOT EXISTS `tipo_de_medicao` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `SIGLA` varchar(10) COLLATE utf8_bin NOT NULL,
  `TIPO_DE_MEDICAO` varchar(80) COLLATE utf8_bin NOT NULL,
  `DESCRICAO` text COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `USUARIO` varchar(20) COLLATE utf8_bin NOT NULL,
  `SENHA` varchar(48) COLLATE utf8_bin NOT NULL,
  `NIVEL_ACESSO` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tabela de login de usuarios ';

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`ID`, `USUARIO`, `SENHA`, `NIVEL_ACESSO`) VALUES
(1, 'luiz', '25f9e794323b453885f5181f1b624d0b', 1);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produtogrupo` FOREIGN KEY (`GRUPO`) REFERENCES `produto_grupo` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tipodemedicao` FOREIGN KEY (`TIPO_DE_MEDICAO`) REFERENCES `tipo_de_medicao` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

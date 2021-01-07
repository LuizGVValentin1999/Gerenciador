-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 07-Jan-2021 às 23:52
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `ID` int NOT NULL AUTO_INCREMENT,
  `CODIGO` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `NOME` varchar(80) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `GRUPO` int DEFAULT NULL,
  `TIPO_DE_MEDICAO` int DEFAULT NULL,
  `DESCRICAO` text CHARACTER SET utf8 COLLATE utf8_bin,
  `USUARIO_INCLUSAO` int DEFAULT NULL,
  `DATA_INCLUSAO` datetime DEFAULT NULL,
  `USUARIO_ALTERACAO` int DEFAULT NULL,
  `DATA_ALTERACAO` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `tipodemedicao` (`TIPO_DE_MEDICAO`),
  KEY `produtogrupo` (`GRUPO`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`ID`, `CODIGO`, `NOME`, `GRUPO`, `TIPO_DE_MEDICAO`, `DESCRICAO`, `USUARIO_INCLUSAO`, `DATA_INCLUSAO`, `USUARIO_ALTERACAO`, `DATA_ALTERACAO`) VALUES
(14, '01', 'Teste 1', 1, 5, 'teste gabriel\r\n', 2, '2021-01-05 00:46:44', NULL, NULL),
(15, '02', 'Teste 2', 1, 5, 'teste 2', 2, '2021-01-05 00:51:05', NULL, NULL),
(16, '03', 'Teste 3', 1, 7, 'teste 3', 2, '2021-01-05 00:51:45', NULL, NULL),
(17, '004', 'Teste 4', 2, 5, '', 2, '2021-01-05 23:23:31', NULL, NULL),
(18, '01d', 'Teste 1', 1, 5, '', 2, '2021-01-07 22:32:21', NULL, NULL),
(19, 'ff', 'ff', 2, 8, 'ff', 2, '2021-01-07 22:55:40', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto_grupo`
--

DROP TABLE IF EXISTS `produto_grupo`;
CREATE TABLE IF NOT EXISTS `produto_grupo` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `CODIGO` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `NOME` varchar(80) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `DESCRICAO` text CHARACTER SET utf8 COLLATE utf8_bin,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `produto_grupo`
--

INSERT INTO `produto_grupo` (`ID`, `CODIGO`, `NOME`, `DESCRICAO`) VALUES
(1, '0001', 'teste de grupo', 'teste de descrição com grupo '),
(2, '0002', 'TESTE Á ÇÃO', 'BATATA SSS AAAA ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_de_medicao`
--

DROP TABLE IF EXISTS `tipo_de_medicao`;
CREATE TABLE IF NOT EXISTS `tipo_de_medicao` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `ABREVIACAO` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `NOME` varchar(80) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `TIPO_DE_MEDICAO` int NOT NULL,
  `DESCRICAO` text CHARACTER SET utf8 COLLATE utf8_bin,
  `CODIGO` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `tipo_de_medicao`
--

INSERT INTO `tipo_de_medicao` (`ID`, `ABREVIACAO`, `NOME`, `TIPO_DE_MEDICAO`, `DESCRICAO`, `CODIGO`) VALUES
(5, 'ML', 'Mililitro', 3, 'testee ', NULL),
(7, 'MG Minas', 'Teste Medição', 3, '1212', NULL),
(8, 'w', 'w', 2, '', NULL),
(9, 'FF', 'FF', 3, 'FF', 'FF'),
(10, 'f', 'f', 4, '', 'f'),
(11, 'f', 'f', 4, '', 'f'),
(12, 'f', 'f', 4, '', 'f'),
(13, 'f', 'f', 4, '', 'f'),
(14, 'f', 'f', 4, '', 'f'),
(15, 'f', 'f', 4, '', 'f'),
(16, 'f', 'W', 2, '', 'd'),
(17, 'd', 'd', 4, '', 'alo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `USUARIO` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `SENHA` varchar(48) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `NIVEL_ACESSO` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tabela de login de usuarios ';

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`ID`, `USUARIO`, `SENHA`, `NIVEL_ACESSO`) VALUES
(1, 'luiz', '25f9e794323b453885f5181f1b624d0b', 1),
(2, 'gabriel', 'fcea920f7412b5da7be0cf42b8c93759', 1);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produtogrupo` FOREIGN KEY (`GRUPO`) REFERENCES `produto_grupo` (`ID`),
  ADD CONSTRAINT `tipodemedicao` FOREIGN KEY (`TIPO_DE_MEDICAO`) REFERENCES `tipo_de_medicao` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

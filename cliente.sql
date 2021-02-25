-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Fev-2021 às 16:14
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `clientes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `codCli` int(6) NOT NULL,
  `nomCli` varchar(100) DEFAULT NULL,
  `cpfCli` varchar(20) DEFAULT NULL,
  `emailClie` varchar(100) DEFAULT NULL,
  `teleCli` varchar(20) DEFAULT NULL,
  `dataCli` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`codCli`, `nomCli`, `cpfCli`, `emailClie`, `teleCli`, `dataCli`) VALUES
(1, 'Luís Artur Correia', '087.179.619-80', 'luisarturcorreia@gmail.com', '(47)98423-6050', '2002-07-25'),
(17, 'helton', '123.345.567-89', 'helton@gmail.com', '(79) 32147-8558', '2000-09-23'),
(20, 'Lucas Rodrigues', '287.943.700-87', 'lucasRdrigues@gmail.com', '(43) 75933-2894', '0000-00-00'),
(21, 'asas', '234.123.456-67', 'ducdll8@gmail.com', '(56) 80820-9532', '2021-02-15');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`codCli`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `codCli` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

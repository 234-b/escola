-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Maio-2020 às 01:40
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cliente`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `cd_disc` int(11) NOT NULL,
  `nome_disc` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`cd_disc`, `nome_disc`) VALUES
(100, 'física'),
(169, 'Português'),
(248, 'Teologia'),
(303, 'gastronomia'),
(325, 'História'),
(332, 'estudos sociais'),
(392, 'Geologia'),
(590, 'Q'),
(677, 'Química'),
(752, 'Matemática'),
(978, 'Filosofia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `código` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cep` varchar(30) NOT NULL,
  `rua` varchar(30) NOT NULL,
  `número` int(4) DEFAULT NULL,
  `telefone` varchar(15) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `Disciplina` varchar(30) NOT NULL,
  `nota_1` double DEFAULT NULL,
  `nota_2` double DEFAULT NULL,
  `nota_3` double DEFAULT NULL,
  `nota_final` double DEFAULT NULL,
  `Situacao` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`código`, `nome`, `cep`, `rua`, `número`, `telefone`, `Email`, `bairro`, `cidade`, `estado`, `Disciplina`, `nota_1`, `nota_2`, `nota_3`, `nota_final`, `Situacao`) VALUES
(533, 'João Paulo Brasil Rocha da Silva', '03813-390', 'Rua Ida', 342, '(11)96574-5568', 'tower_of@hotmail.com', 'Vila Santa Inês', 'São Paulo', 'SP', 'Português', 10, 10, 6, 2, 'F- REPROVADO POR FALTA'),
(317, 'Jorge', '03813-390', 'Rua Ida', 12, '(11)96574-5568', 'tower_of@hotmail.com', 'Vila Santa Inês', 'São Paulo', 'SP', 'Filosofia', 10, 8.5, 9.5, 10, 'A'),
(317, 'Jorge', '03813-390', 'Rua Ida', 12, '(11)96574-5568', 'tower_of@hotmail.com', 'Vila Santa Inês', 'São Paulo', 'SP', 'Filosofia', 10, 8.5, 9.5, 10, 'A');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_nota`
--

CREATE TABLE `tb_nota` (
  `id_nota` int(11) NOT NULL,
  `disciplina` varchar(30) NOT NULL,
  `nome_Aluno` varchar(30) NOT NULL,
  `avaliacao_1` int(2) DEFAULT NULL,
  `avaliacao_2` int(2) DEFAULT NULL,
  `avaliacao_3` int(2) DEFAULT NULL,
  `avaliacao_final` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`cd_disc`);

--
-- Índices para tabela `tb_nota`
--
ALTER TABLE `tb_nota`
  ADD PRIMARY KEY (`id_nota`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_nota`
--
ALTER TABLE `tb_nota`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 31-Jul-2020 às 14:09
-- Versão do servidor: 10.3.18-MariaDB
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
-- Banco de dados: `id10015427_cooperurbansistemas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `codigo_empresa` tinyint(5) NOT NULL,
  `razacao_social` varchar(100) CHARACTER SET utf8 NOT NULL,
  `cnpj` varchar(11) CHARACTER SET utf8 NOT NULL,
  `insc_estadual` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `endereco` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `telefone` varchar(20) CHARACTER SET utf8 NOT NULL,
  `contato_responsavel` varchar(100) CHARACTER SET utf8 NOT NULL,
  `funcao` varchar(100) CHARACTER SET utf8 NOT NULL,
  `data_fundacao` date NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fiscal`
--

CREATE TABLE `fiscal` (
  `codigo_fiscal` tinyint(5) NOT NULL,
  `nome` varchar(100) CHARACTER SET utf8 NOT NULL,
  `rg` varchar(10) CHARACTER SET utf8 NOT NULL,
  `cpf` varchar(11) CHARACTER SET utf8mb4 NOT NULL,
  `habilitacao` varchar(11) CHARACTER SET utf8 DEFAULT NULL,
  `endereco` varchar(100) CHARACTER SET utf8 NOT NULL,
  `data_adm` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fiscal`
--

INSERT INTO `fiscal` (`codigo_fiscal`, `nome`, `rg`, `cpf`, `habilitacao`, `endereco`, `data_adm`) VALUES
(4, 'Iago Ryan Vicente Santos', '25.921.593', '90142425222', '104.102.358', ' Rua São Francisco de Salles ', '2016-10-02'),
(5, ' Samuel Cláudio César Martins', '42.896.993', '65378744911', '091.589.348', ' Rua Maria José Ferrari ', '2010-02-20'),
(6, 'José Medeiros', '2222', '222', '3333', 'Rua Alonso escobar 20', '2019-10-01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `intinerario`
--

CREATE TABLE `intinerario` (
  `codigo_linha` tinyint(5) NOT NULL,
  `nome` varchar(100) CHARACTER SET utf8 NOT NULL,
  `numero` varchar(10) CHARACTER SET utf8 NOT NULL,
  `saida` datetime DEFAULT NULL,
  `chegada` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `intinerario`
--

INSERT INTO `intinerario` (`codigo_linha`, `nome`, `numero`, `saida`, `chegada`) VALUES
(5, 'JARDIM ETELVINA', '2023-10', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `motorista`
--

CREATE TABLE `motorista` (
  `codigo_condutor` tinyint(5) NOT NULL,
  `nome` varchar(100) CHARACTER SET utf8 NOT NULL,
  `rg` varchar(10) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `habilitacao` varchar(11) CHARACTER SET utf8 NOT NULL,
  `endereco` varchar(100) CHARACTER SET utf8 NOT NULL,
  `validade_habilitacao` datetime DEFAULT NULL,
  `data_adm` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `motorista`
--

INSERT INTO `motorista` (`codigo_condutor`, `nome`, `rg`, `cpf`, `habilitacao`, `endereco`, `validade_habilitacao`, `data_adm`) VALUES
(15, 'José da  Cruz Silva', '254006191', '22648871845', '12345', 'Rua : Major número 500', '2019-08-22 00:00:00', '2019-02-09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `codigo_usuario` tinyint(5) NOT NULL,
  `nome` varchar(100) CHARACTER SET utf8 NOT NULL,
  `rg` varchar(14) CHARACTER SET utf8 NOT NULL,
  `cpf` varchar(14) CHARACTER SET utf8 DEFAULT NULL,
  `endereco` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `telefone` varchar(20) CHARACTER SET utf8 NOT NULL,
  `senha` char(64) CHARACTER SET utf8 NOT NULL,
  `perfil` varchar(100) CHARACTER SET utf8 NOT NULL,
  `data_admissao` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`codigo_usuario`, `nome`, `rg`, `cpf`, `endereco`, `email`, `telefone`, `senha`, `perfil`, `data_admissao`) VALUES
(9, 'lampião', '171', '987654', 'Catinga', 'lampiao@gmail.com', '1120535644', '$2y$10$3NiLS4nI6J/tbkwhPOgsfuCup66R3SdmC8K8ns0SJkiP9gvDUU9Xm', 'convidado', '1956-01-02'),
(10, 'chaves', '12345678', '123456789', 'Vila do Chaves', 'chaves@gmail.com', '22645502', '$2y$10$7RUwjiz.j3sFE0G3PimrR.rY9ZGyjK69uTAVwx.lEfuQfp02PKEbK', 'Administrador', '1980-07-12'),
(11, 'Juan Nelson Elias da Cruz', '2525252', '24242424', 'avenida coroa de frade 53', 'traves8@msn.com', '1120535644', '$2y$10$eBXwrRCCwW7Nh52b5rBpv.LpwjbT9pDyg0ckdZNmVogCO1C4KFyTu', 'convidado', '2019-02-12'),
(12, 'Carlos Henrique ', '22222', '89800', 'Rua: Airi nº 20', 'carlos@gmail.com', '11 994440011', '$2y$10$fzrQ6kXHU1C6aRZ4JradSeo6B9xde/btV.pUb1UIB0qdXGzKE9BDa', 'usuário', '2019-08-01'),
(13, 'jose', '1234', '122', 'avenida coroa de frade 53', 'jose@gmail.com', '1120535644', '$2y$10$8I6zYWC7MWsHcZRG88f64.8Y7uXzSvS2zFi3OBsntimzstu5axrYq', 'Administrador', '1980-10-11'),
(14, 'moises', '2554406191', '22648871845', 'avenida coroa de frade 53', 'traves@msn.com', '1120535644', '$2y$10$zvNS7rS7V6NmQxIH5bwvne9O1cyKyYXo7BRVgtFQxFyNUySIsGOku', 'Usuário', '1979-04-19');

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculo`
--

CREATE TABLE `veiculo` (
  `codigo_veiculo` tinyint(5) NOT NULL,
  `modelo` varchar(20) CHARACTER SET utf8 NOT NULL,
  `placa` char(8) CHARACTER SET utf8 NOT NULL,
  `ano_fabricacao` year(4) NOT NULL,
  `inicio_operacao` year(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `veiculo`
--

INSERT INTO `veiculo` (`codigo_veiculo`, `modelo`, `placa`, `ano_fabricacao`, `inicio_operacao`) VALUES
(5, 'Apache 352', 'cva523', 2019, 2020),
(6, 'Apache 310', 'CVA3042', 2018, 2019),
(7, 'Apache 320', 'cva3022', 2016, 2019);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`codigo_empresa`);

--
-- Índices para tabela `fiscal`
--
ALTER TABLE `fiscal`
  ADD PRIMARY KEY (`codigo_fiscal`);

--
-- Índices para tabela `intinerario`
--
ALTER TABLE `intinerario`
  ADD PRIMARY KEY (`codigo_linha`);

--
-- Índices para tabela `motorista`
--
ALTER TABLE `motorista`
  ADD PRIMARY KEY (`codigo_condutor`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codigo_usuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `veiculo`
--
ALTER TABLE `veiculo`
  ADD PRIMARY KEY (`codigo_veiculo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `codigo_empresa` tinyint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `fiscal`
--
ALTER TABLE `fiscal`
  MODIFY `codigo_fiscal` tinyint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `intinerario`
--
ALTER TABLE `intinerario`
  MODIFY `codigo_linha` tinyint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `motorista`
--
ALTER TABLE `motorista`
  MODIFY `codigo_condutor` tinyint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codigo_usuario` tinyint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `veiculo`
--
ALTER TABLE `veiculo`
  MODIFY `codigo_veiculo` tinyint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

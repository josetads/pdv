-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Ago-2024 às 21:47
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pdv`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `cep` varchar(20) NOT NULL,
  `rua` varchar(200) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `numero` varchar(20) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `ativo` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome`, `email`, `cpf`, `telefone`, `cep`, `rua`, `bairro`, `numero`, `cidade`, `estado`, `ativo`) VALUES
(6, 'Rogerio Alves da Rocha', 'rogeriomtc@gmail.com', '820.824.566-68', '31988518392', '31990-070', 'Rua Américo Alves', 'Nazaré', '200', 'Belo Horizonte', 'MG', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `entrada`
--

CREATE TABLE `entrada` (
  `id_entrada` int(11) NOT NULL,
  `data_entrada` date NOT NULL,
  `id_produto` varchar(100) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `codproduto` varchar(100) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `qtd` int(100) NOT NULL,
  `minimo` int(100) NOT NULL,
  `maximo` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `entrada`
--

INSERT INTO `entrada` (`id_entrada`, `data_entrada`, `id_produto`, `valor`, `codproduto`, `descricao`, `qtd`, `minimo`, `maximo`) VALUES
(17, '2024-08-09', '7', '124.00', '120', 'Muito bom', 15, 2, 34);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `produto` varchar(100) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `codproduto` varchar(100) NOT NULL,
  `descricao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `produto`, `valor`, `codproduto`, `descricao`) VALUES
(2, 'mesa', '1453.53', '100', 'Boa'),
(3, 'Note', '1550.05', '123', 'teste'),
(5, 'teclado', '0.50', '123', 'tese'),
(7, 'Celular', '124.00', '120', 'Muito bom');

-- --------------------------------------------------------

--
-- Estrutura da tabela `saida`
--

CREATE TABLE `saida` (
  `id_saida` int(11) NOT NULL,
  `data_saida` date NOT NULL,
  `id_produto` varchar(100) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `codproduto` varchar(100) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `qtd` int(100) NOT NULL,
  `minimo` int(100) NOT NULL,
  `maximo` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `nivel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `email`, `senha`, `nivel`) VALUES
(1, 'erico2223@gmail.com', '123', 'Administrador'),
(2, 'erico2223@gmail.com', '321', 'Usuario');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `id_venda` int(11) NOT NULL,
  `data_venda` date NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `cpf` varchar(100) NOT NULL,
  `total_venda` decimal(10,2) NOT NULL,
  `desconto` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `venda`
--

INSERT INTO `venda` (`id_venda`, `data_venda`, `id_cliente`, `cpf`, `total_venda`, `desconto`) VALUES
(32, '2024-08-09', 6, '820.824.566-68', '200.00', '48.00'),
(33, '2024-08-09', 6, '820.824.566-68', '200.00', '48.00'),
(34, '2024-08-09', 6, '820.824.566-68', '200.00', '48.00'),
(35, '2024-08-09', 6, '820.824.566-68', '200.00', '48.00'),
(36, '2024-08-09', 6, '820.824.566-68', '200.00', '48.00'),
(37, '2024-08-09', 6, '820.824.566-68', '200.00', '48.00'),
(38, '2024-08-09', 6, '820.824.566-68', '0.00', '0.00'),
(39, '2024-08-09', 6, '820.824.566-68', '495.50', '0.50'),
(40, '2024-08-10', 6, '820.824.566-68', '495.85', '15.00'),
(41, '2024-08-10', 6, '820.824.566-68', '124.00', '0.00'),
(42, '2024-08-10', 6, '820.824.566-68', '124.00', '0.00'),
(43, '2024-08-10', 6, '820.824.566-68', '496.00', '0.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda_produto`
--

CREATE TABLE `venda_produto` (
  `id_vendaproduto` int(11) NOT NULL,
  `id_venda` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `qtd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `venda_produto`
--

INSERT INTO `venda_produto` (`id_vendaproduto`, `id_venda`, `id_produto`, `valor`, `qtd`) VALUES
(11, 37, 7, '124.00', 2),
(12, 38, 7, '124.00', 3),
(13, 39, 7, '124.00', 4),
(14, 40, 7, '124.00', 4),
(15, 41, 7, '124.00', 1),
(16, 42, 7, '124.00', 1),
(17, 43, 7, '124.00', 4);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `entrada`
--
ALTER TABLE `entrada`
  ADD PRIMARY KEY (`id_entrada`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices para tabela `saida`
--
ALTER TABLE `saida`
  ADD PRIMARY KEY (`id_saida`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Índices para tabela `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`id_venda`);

--
-- Índices para tabela `venda_produto`
--
ALTER TABLE `venda_produto`
  ADD PRIMARY KEY (`id_vendaproduto`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `entrada`
--
ALTER TABLE `entrada`
  MODIFY `id_entrada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `saida`
--
ALTER TABLE `saida`
  MODIFY `id_saida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `venda`
--
ALTER TABLE `venda`
  MODIFY `id_venda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de tabela `venda_produto`
--
ALTER TABLE `venda_produto`
  MODIFY `id_vendaproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

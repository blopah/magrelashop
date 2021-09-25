-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Set-2021 às 20:53
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bicicletaria_magrelas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` decimal(10,0) NOT NULL,
  `nome_cliente` varchar(50) DEFAULT NULL,
  `telefone` varchar(10) DEFAULT NULL,
  `cpf_cnpj` varchar(13) DEFAULT NULL,
  `cep` varchar(50) DEFAULT NULL,
  `Num_end` int(11) DEFAULT NULL,
  `e_mail` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome_cliente`, `telefone`, `cpf_cnpj`, `cep`, `Num_end`, `e_mail`) VALUES
('1', 'Cliente1', '1198208034', '42132818843', '06083180', 10, 'andreldsantosp@gmail.com'),
('2', 'Cliente2', '1198208034', '42132818843', '06083180', 10, 'andreldsantosp@gmail.com'),
('3', 'Cliente3', '1198208034', '42132818843', '06083180', 10, 'andreldsantosp@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos_funcionario`
--

CREATE TABLE `enderecos_funcionario` (
  `cidade` varchar(10) DEFAULT NULL,
  `uf` varchar(10) DEFAULT NULL,
  `bairro` varchar(10) DEFAULT NULL,
  `logradouro` varchar(10) DEFAULT NULL,
  `cep` varchar(8) NOT NULL,
  `telefone` varchar(10) DEFAULT NULL,
  `data_desl` datetime DEFAULT NULL,
  `id_funcionario` int(11) NOT NULL,
  `nome` varchar(10) DEFAULT NULL,
  `funcao` varchar(10) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `salario` decimal(20,0) DEFAULT NULL,
  `data_adm` datetime DEFAULT NULL,
  `situacao` varchar(10) DEFAULT NULL,
  `cpf` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `enderecos_funcionario`
--

INSERT INTO `enderecos_funcionario` (`cidade`, `uf`, `bairro`, `logradouro`, `cep`, `telefone`, `data_desl`, `id_funcionario`, `nome`, `funcao`, `email`, `salario`, `data_adm`, `situacao`, `cpf`) VALUES
('Osasco', 'SP', 'Jd Osasco', 'Rua', '06083180', '982080347', NULL, 1, 'Andre Luiz', 'Anl JR', 'andreldsantosp@gmail.com', '5000', '2021-01-10 08:00:00', 'Ativo', '42132818843'),
('Osasco', 'SP', 'Jd Osasco', 'Rua', '06083180', '982080347', NULL, 2, 'Andre Luiz', 'Anl JR', 'andreldsantosp@gmail.com1', '5000', '2021-01-10 08:00:00', 'Ativo', '42132818844'),
('Osasco', 'SP', 'Jd Osasco', 'Rua', '06083180', '982080347', NULL, 3, 'Andre Luiz', 'Anl PL', 'andreldsantosp@gmail.com3', '10000', '2021-01-10 08:00:00', 'Ativo', '42132818845'),
('Osasco', 'SP', 'Jd Osasco', 'Rua', '06083180', '982080347', NULL, 4, 'Andre Luiz', 'Anl SR', 'andreldsantosp@gmail.com4', '15000', '2021-01-10 08:00:00', 'Ativo', '42132818846');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `id_fornecedor` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `num_end` varchar(10) DEFAULT NULL,
  `cep` varchar(8) DEFAULT NULL,
  `telefone` varchar(10) DEFAULT NULL,
  `cnpj` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`id_fornecedor`, `nome`, `num_end`, `cep`, `telefone`, `cnpj`) VALUES
(1, 'Fornecedor1', '250', '06083180', '982080347', '9999999999999'),
(2, 'Fornecedor2', '250', '06083180', '982080347', '9999999999999'),
(3, 'Fornecedor3', '250', '06083180', '982080347', '9999999999999');

-- --------------------------------------------------------

--
-- Estrutura da tabela `item_pedidos`
--

CREATE TABLE `item_pedidos` (
  `preco` decimal(10,0) DEFAULT NULL,
  `descricao` varchar(30) DEFAULT NULL,
  `id_produto` int(11) NOT NULL,
  `id_pedido` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `data_pedido` datetime DEFAULT NULL,
  `id_produto` int(11) DEFAULT NULL,
  `id_pedido` int(11) NOT NULL,
  `id_cliente` decimal(10,0) DEFAULT NULL,
  `data_manutencao` datetime DEFAULT NULL,
  `valor_pgto` decimal(10,0) DEFAULT NULL,
  `id_funcionario` int(11) DEFAULT NULL,
  `id_serv` int(11) DEFAULT NULL,
  `tipo_pedido` varchar(10) DEFAULT NULL,
  `origem_pedido` varchar(10) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `cpf_cnpj` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_fornecedor` int(11) DEFAULT NULL,
  `id_produto` int(11) NOT NULL,
  `descricao` varchar(10) DEFAULT NULL,
  `data_cadastro` varchar(10) DEFAULT NULL,
  `preco` varchar(10) DEFAULT NULL,
  `categoria` varchar(10) DEFAULT NULL,
  `quantidade` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_fornecedor`, `id_produto`, `descricao`, `data_cadastro`, `preco`, `categoria`, `quantidade`) VALUES
(1, 1, 'bike1', '10/01/2021', '100', 'ESPORTIVA', '10'),
(1, 2, 'bike2', '12/01/2021', '100', 'ESPORTIVA', '10'),
(1, 3, 'bike3', '13/01/2021', '100', 'ESPORTIVA', '10'),
(2, 4, 'bike4', '14/01/2021', '100', 'ESPORTIVA', '10'),
(3, 5, 'bike5', '15/01/2021', '100', 'ESPORTIVA', '10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `id_serv` int(11) NOT NULL,
  `id_funcionario` int(11) DEFAULT NULL,
  `cep` varchar(8) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `tipo_servico` varchar(10) DEFAULT NULL,
  `id_pedido` int(11) DEFAULT NULL,
  `valor_serv` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `enderecos_funcionario`
--
ALTER TABLE `enderecos_funcionario`
  ADD PRIMARY KEY (`id_funcionario`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`id_fornecedor`);

--
-- Índices para tabela `item_pedidos`
--
ALTER TABLE `item_pedidos`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `id_pedido` (`id_pedido`);

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_funcionario` (`id_funcionario`),
  ADD KEY `id_produto` (`id_produto`),
  ADD KEY `id_serv` (`id_serv`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `id_fornecedor` (`id_fornecedor`);

--
-- Índices para tabela `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`id_serv`),
  ADD KEY `id_funcionario` (`id_funcionario`);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `item_pedidos`
--
ALTER TABLE `item_pedidos`
  ADD CONSTRAINT `item_pedidos_ibfk_1` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`id_produto`),
  ADD CONSTRAINT `item_pedidos_ibfk_2` FOREIGN KEY (`id_pedido`) REFERENCES `pedidos` (`id_pedido`);

--
-- Limitadores para a tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`),
  ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`id_funcionario`) REFERENCES `enderecos_funcionario` (`id_funcionario`),
  ADD CONSTRAINT `pedidos_ibfk_3` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`id_produto`),
  ADD CONSTRAINT `pedidos_ibfk_4` FOREIGN KEY (`id_serv`) REFERENCES `servico` (`id_serv`);

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`id_fornecedor`) REFERENCES `fornecedor` (`id_fornecedor`);

--
-- Limitadores para a tabela `servico`
--
ALTER TABLE `servico`
  ADD CONSTRAINT `servico_ibfk_1` FOREIGN KEY (`id_funcionario`) REFERENCES `enderecos_funcionario` (`id_funcionario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

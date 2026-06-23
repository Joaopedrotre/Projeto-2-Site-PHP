-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/06/2026 às 03:29
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `autonobre_bd`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nome`, `descricao`) VALUES
(1, 'Copos', 'Copos descartáveis PP e PS'),
(2, 'Talheres', 'Talheres descartáveis refeição e master'),
(3, 'Marmitas', 'Marmitas descartáveis redondas e retangulares'),
(4, 'Filmes PVC', 'Filmes de PVC institucionais e domésticos');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `nome`, `descricao`, `imagem`) VALUES
(1, 'Copo PS 50ml Estriado', 'Copo PS 50ml Estriado Branco/Transparente 50x100 Cx5000', 'assets/img/produtos/Copo-PS-Branco-50-ml.png'),
(2, 'Copo PP 150ml Estriado', 'Copo PP 150ml Estriado Branco/Transparente 25x100 Cx2500', 'assets/img/produtos/Copo-Branco-PP-150-ml.png'),
(3, 'Copo PP 180ml Estriado', 'Copo PP 180ml Estriado Branco/Transparente 25x100 Cx2500', 'assets/img/produtos/Copo-Branco-PP-180-ml.png'),
(4, 'Copo PP 330ml Chopp Liso', 'Copo PP 330ml LISO CHOPP Transparente 20x50 Cx1000', 'assets/img/produtos/Produtos-sem-fundo-Copo-PP-330-ml-1.png'),
(5, 'Copo PP 550ml Liso', 'Copo PP 550ml LISO Transparente 20x50 Cx1000', 'assets/img/produtos/Copo-Transparente-liso-PP-550-ml.png'),
(6, 'Copo PP 770ml Liso', 'Copo PP 770ml LISO Transparente 20x25 Cx500', 'assets/img/produtos/Copo-PP-Transparente-770-ml.png'),
(7, 'Garfo Master', 'Garfo Master Branco/Cristal 20x50 Cx1000', 'assets/img/produtos/Garfo-Master-Branco-Com-Fundo.png'),
(8, 'Faca Master', 'Faca Master Branca/Cristal 20x50 Cx1000', 'assets/img/produtos/Faca-Master-Branca-Com-Fundo-1.png'),
(9, 'Colher Master', 'Colher Master Branca/Cristal 20x50 Cx1000', 'assets/img/produtos/Colher-Master-Branco.png'),
(10, 'Garfo Refeição', 'Garfo Refeição Branco/Cristal 20x50 CX1000', 'assets/img/produtos/Garfo-Refeicao-branco2.png'),
(11, 'Faca Refeição', 'Faca Refeição Branca/Cristal 20x50 Cx1000', 'assets/img/produtos/Faca-Linha-Refeicao-Branca-1.png'),
(12, 'Colher Refeição', 'Colher Refeição Branca/Cristal 20x50 Cx1000', 'assets/img/produtos/Colher-Refeicao-Branca-Com-Fundo-1.png'),
(13, 'Marmita Redonda P - 500ml', 'Marmita M32 Branca Base e Tampa Fd600 (Pequena - 500ml) ', 'assets/img/produtos/SITE-Marmita-M32-2.png'),
(14, 'Marmita Redonda M - 700ml', 'Marmita M50 Branca base e tampa Fd600 (Média - 700ml)', 'assets/img/produtos/Marmita-M50-1.png'),
(15, 'Marmita Redonda G - 900ml', 'Marmita M65 Branca base e tampa Fd600 (Grande - 900ml)', 'assets/img/produtos/M65.png'),
(16, 'Marmita Retangular 500ml', 'MR500 Redonda Branca Base e Tampa Fd400 (500ml)', 'assets/img/produtos/Marmita-M500-1.png'),
(17, 'Marmita 900ml - 3 Divisórias', 'M900/3 Branca Base e Tampa Fd300 (900ml)', 'assets/img/produtos/Marmita-M900-3.png'),
(18, 'Marmita 1200ml - 4 Divisórias', 'M1200/4 Branca Base e Tampa Fd300 (1200ml)', 'assets/img/produtos/Marmita-M1200-4.png'),
(19, 'Filme de PVC 30x9x800', 'Filme de PVC Institucional 30x9x800', 'assets/img/produtos/Filme-de-PVC-300mm-x-10µ-x-1000m.png'),
(20, 'Filme de PVC 38x9x800', 'Filme de PVC Institucional 38x9x800', 'assets/img/produtos/Filme-de-PVC-380mm-x-10µ-x-700m.png'),
(21, 'Filme de PVC 38x9x1000', 'Filme de PVC Institucional 38x9x1000', 'assets/img/produtos/Filme-de-PVC-380-x-10u-x-1000.png'),
(22, 'Filme de PVC Doméstico 28x15', 'Filme de PVC Doméstico 28cmx15mt Cx25', 'assets/img/produtos/Filme-PVC-280mm-x-15m-Deitado-1.png'),
(23, 'Filme de PVC Doméstico 28x30', 'Filme de PVC Doméstico 28cmx30mt Cx25', 'assets/img/produtos/Filme-PVC-280mm-x-30m.png'),
(24, 'Filme de PVC Doméstico 28x100', 'Filme de PVC Doméstico 28cmx30mt Cx25', 'assets/img/produtos/Filme-PVC-280mm-x-100m-1.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto_categoria`
--

CREATE TABLE `produto_categoria` (
  `id_produto` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produto_categoria`
--

INSERT INTO `produto_categoria` (`id_produto`, `id_categoria`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 2),
(12, 2),
(13, 3),
(14, 3),
(15, 3),
(16, 3),
(17, 3),
(18, 3),
(19, 4),
(20, 4),
(21, 4),
(22, 4),
(23, 4),
(24, 4);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices de tabela `produto_categoria`
--
ALTER TABLE `produto_categoria`
  ADD PRIMARY KEY (`id_produto`,`id_categoria`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `produto_categoria`
--
ALTER TABLE `produto_categoria`
  ADD CONSTRAINT `produto_categoria_ibfk_1` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`id_produto`),
  ADD CONSTRAINT `produto_categoria_ibfk_2` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

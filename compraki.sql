-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 10/06/2019 às 10:59
-- Versão do servidor: 5.7.24-0ubuntu0.18.04.1
-- Versão do PHP: 7.2.13-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `compraki`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cad_usuario`
--

CREATE TABLE `cad_usuario` (
  `cpf` varchar(11) NOT NULL,
  `rg` varchar(10) DEFAULT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tel` int(10) DEFAULT NULL,
  `cel` int(10) DEFAULT NULL,
  `pwd` varchar(45) DEFAULT NULL,
  `tipuser_cd` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `cad_usuario`
--

INSERT INTO `cad_usuario` (`cpf`, `rg`, `nome`, `email`, `tel`, `cel`, `pwd`, `tipuser_cd`) VALUES
('09582746512', NULL, 'Karina José Ribeiro', NULL, NULL, NULL, NULL, 5),
('10210765461', NULL, 'HalleBerry', 'halleberry@metus.com', NULL, NULL, NULL, 4),
('123653355', NULL, 'Scottie Pippen', 'scottie_pippen@amet.com', NULL, 95197243, NULL, 2),
('14476645585', NULL, 'Summer Glau', 'summer.glau@urna.com', NULL, 58478906, NULL, 2),
('17844942401', NULL, 'Boudicca', 'boudicca@facilisis.com', NULL, 22162246, NULL, 2),
('2253479977', NULL, 'Paul Walker', 'paul_walker@odio.com', NULL, 90895685, NULL, 4),
('32740280882', NULL, 'Jay Adams', 'jayadams@elementum.com', NULL, 21754601, NULL, 5),
('33961382280', NULL, 'Charles V, Holy Roman Emperor', 'charlesvholyromanemperor@auctor.com', NULL, 12675506, NULL, 2),
('35383154698', NULL, 'Phil Taylor', 'phil_taylor@phasellus.com', NULL, 72603196, NULL, 4),
('46166640480', NULL, 'Jaromir Jagr', 'jaromir_jagr@placerat.com', NULL, 61070565, NULL, 2),
('46510479982', NULL, 'Lana Parrilla', 'lanaparrilla@non.com', NULL, 32794754, NULL, 2),
('46520093807', NULL, 'Mao Zedong', 'mao.zedong@hendrerit.com', NULL, 98848766, NULL, 5),
('52640146718', NULL, 'Mikhail Gorbachev', 'mikhailgorbachev@tincidunt.com', NULL, 98961142, NULL, 2),
('53163444059', NULL, 'Alexander The Great', 'alexander_the_great@laoreet.com', NULL, 88384063, NULL, 4),
('53205295463', NULL, 'Dave Winfield', 'dave.winfield@sit.com', NULL, 79593238, NULL, 4),
('56572286932', NULL, 'CYRUS the GREAT', 'cyrus.the.great@urna.com', NULL, 78891763, NULL, 2),
('57124443997', NULL, 'Joe Frazier', 'joe.frazier@rhoncus.com', NULL, 18239897, NULL, 5),
('61243899409', NULL, 'Nina Dobrev', 'nina_dobrev@enim.com', NULL, 20852007, NULL, 5),
('62915556032', NULL, 'Brie Larson', 'brie.larson@aliquet.com', NULL, 2137214, NULL, 2),
('63022539266', NULL, 'Freddy Adu', 'freddy.adu@aliquam.com', NULL, 35421255, NULL, 3),
('63748762435', NULL, 'Juliana Ribeiro da Silva', NULL, NULL, NULL, NULL, 6),
('6554785078', NULL, 'Eddy Merckx', 'eddymerckx@mattis.com', NULL, 11275296, NULL, 6),
('66114689003', NULL, 'Franklin D. Roosevelt', 'franklin.d..roosevelt@vestibulum.com', NULL, 57485082, NULL, 3),
('6737760775', NULL, 'Eddy Merckx', 'eddy.merckx@diam.com', NULL, 22418377, NULL, 2),
('67538476857', NULL, 'Pavel Nedvěd', 'pavel.nedvěd@ornare.com', NULL, 54289623, NULL, 2),
('68570473672', NULL, 'NicolasCage', 'nicolascage@vitae.com', NULL, NULL, NULL, 5),
('71298375606', NULL, 'Justinian I', 'justinian.i@netus.com', NULL, 5319220, NULL, 2),
('75634363594', NULL, 'TeresaPalmer', 'teresapalmer@sed.com', NULL, NULL, NULL, 5),
('75886275908', NULL, 'Sylvester Stallone', 'sylvester.stallone@laoreet.com', NULL, 51796291, NULL, 5),
('7811974738', NULL, 'Leslie Mann', 'leslie_mann@amet.com', NULL, 53331146, NULL, 1),
('78812447805', NULL, 'Dirk Nowitzki', 'dirk_nowitzki@est.com', NULL, 70116074, NULL, 2),
('79378838472', NULL, 'Oscar DeLa Hoya', 'oscar.dela.hoya@at.com', NULL, 66158594, NULL, 1),
('83402232324', NULL, 'Kelly Slater', 'kelly.slater@pellentesque.com', NULL, 35262625, NULL, 1),
('84045484981', NULL, 'Vladimir Lenin', 'vladimir_lenin@adipiscing.com', NULL, 68158186, NULL, 2),
('84085962337', NULL, 'Gene Conley', 'gene.conley@netus.com', NULL, 61437513, NULL, 5),
('84244714740', NULL, 'Sibel Kekilli', 'sibelkekilli@lacus.com', NULL, 35597047, NULL, 4),
('84335238215', NULL, 'January Jones', 'january_jones@eget.com', NULL, 42016241, NULL, 6),
('85763098123', NULL, 'Guilherme do Santos', NULL, NULL, NULL, NULL, 1),
('86341140401', NULL, 'Darius The Great', 'darius.the.great@purus.com', NULL, 303049, NULL, 2),
('86420946727', NULL, 'Usain Bolt', 'usainbolt@curabitur.com', NULL, 526456, NULL, 6),
('87984715971', NULL, 'Rahul Dravid', 'rahul.dravid@tellus.com', NULL, 335877, NULL, 3),
('88541649091', NULL, 'Robert Griffin III', 'robertgriffiniii@aenean.com', NULL, 664234, NULL, 4),
('89837052643', NULL, 'Kiefer Ravena', 'kiefer_ravena@urna.com', NULL, 292331, NULL, 6),
('9010329569', NULL, 'Alexis Knapp', 'alexis_knapp@sollicitudin.com', NULL, 416525, NULL, 6),
('90729178048', NULL, 'Emilio Estevez', 'emilio.estevez@nam.com', NULL, 265635, NULL, 5),
('91384018271', NULL, 'Hope Solo', 'hope_solo@aliquet.com', NULL, 324284, NULL, 6),
('91548075655', NULL, 'Widukind', 'widukind@in.com', NULL, 723707, NULL, 2),
('93682741771', NULL, 'Jeremy Wotherspoon', 'jeremywotherspoon@nibh.com', NULL, 662346, NULL, NULL),
('98736485912', NULL, 'João de Medeiros', NULL, NULL, 4987, NULL, 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `endereco`
--

CREATE TABLE `endereco` (
  `rua` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `complemento` varchar(15) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `num_casa` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `endereco`
--

INSERT INTO `endereco` (`rua`, `bairro`, `complemento`, `cidade`, `num_casa`) VALUES
('5220 Hoppe Forest', 'brooklyn', 'c ', 'Portland', 77),
('7727 Luettgen Plains', 'brooklyn', 'casa verde', 'Missoula', 23),
('004 Chance Stravenue', 'centro', 'c', 'Alburquerque', 12),
('7645 Emmett Mountain', 'centro', 'na esquina', 'Portland', 14),
('5947 Micaela Centers', 'bronks', 'c ', 'New York', 15),
('715 Balistreri Loaf', 'bronks', 'c', 'New York', 89),
('6889 Rath Falls', 'broklyn', 'ao lado do park', 'New york', 78),
('7727 Luettgen Plains', 'brooklyn', 'casa verde', 'Missoula', 23),
('004 Chance Stravenue', 'centro', ' c', 'Alburquerque', 12),
('7645 Emmett Mountain', 'centro', 'na esquina', 'Portland', 14),
('5947 Micaela Centers', 'bronks', ' c', 'New York', 15),
('715 Balistreri Loaf', 'bronks', ' c', 'New York', 89),
('6889 Rath Falls', 'broklyn', 'ao lado do park', 'New york', 78),
('7727 Luettgen Plains', 'brooklyn', 'casa verde', 'Missoula', 23),
('004 Chance Stravenue', 'centro', 'c ', 'Alburquerque', 12),
('7645 Emmett Mountain', 'centro', 'na esquina', 'Portland', 14),
('5947 Micaela Centers', 'bronks', 'c ', 'New York', 15),
('715 Balistreri Loaf', 'bronks', 'c ', 'New York', 89),
('6889 Rath Falls', 'broklyn', 'ao lado do park', 'New york', 78),
('7727 Luettgen Plains', 'brooklyn', 'casa verde', 'Missoula', 23),
('004 Chance Stravenue', 'centro', 'c ', 'Alburquerque', 12),
('7645 Emmett Mountain', 'centro', 'na esquina', 'Portland', 14),
('5947 Micaela Centers', 'bronks', 'c ', 'New York', 15),
('715 Balistreri Loaf', 'bronks', ' c', 'New York', 89),
('6889 Rath Falls', 'broklyn', 'ao lado do park', 'New york', 78),
('7727 Luettgen Plains', 'brooklyn', 'casa verde', 'Missoula', 23),
('004 Chance Stravenue', 'centro', ' c', 'Alburquerque', 12),
('7645 Emmett Mountain', 'centro', 'na esquina', 'Portland', 14);

-- --------------------------------------------------------

--
-- Estrutura para tabela `pagamento`
--

CREATE TABLE `pagamento` (
  `cpf_user` varchar(15) NOT NULL,
  `num_cartao` int(17) NOT NULL,
  `cod_seguranca` int(3) NOT NULL,
  `mesVencimento` int(2) DEFAULT NULL,
  `anoVencimento` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `pagamento`
--

INSERT INTO `pagamento` (`cpf_user`, `num_cartao`, `cod_seguranca`, `mesVencimento`, `anoVencimento`) VALUES
('1231546123', 1231231231, 123, NULL, NULL),
('1231546234', 1231237485, 134, NULL, NULL),
('2253479977', 123456787, 324, 12, 2022);

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedido`
--

CREATE TABLE `pedido` (
  `cod_pedido` int(5) NOT NULL,
  `nome_cliente` varchar(200) NOT NULL,
  `cod_produtos_add` int(5) NOT NULL,
  `end_pedido` varchar(150) NOT NULL,
  `preco_pedido` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `pedido`
--

INSERT INTO `pedido` (`cod_pedido`, `nome_cliente`, `cod_produtos_add`, `end_pedido`, `preco_pedido`) VALUES
(1, 'joao paulo', 1, 'jose souza, centro, joinville, 22', '300'),
(2, 'pedrinha', 2, 'alma solza, centro, joinville, 34', '278');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `nome` varchar(150) NOT NULL,
  `desc_prod` varchar(300) NOT NULL,
  `preco` varchar(8) NOT NULL,
  `cod_prod` int(5) NOT NULL,
  `qtd_emb` int(3) NOT NULL,
  `categoria` varchar(25) NOT NULL,
  `preco_unit` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `produtos`
--

INSERT INTO `produtos` (`nome`, `desc_prod`, `preco`, `cod_prod`, `qtd_emb`, `categoria`, `preco_unit`) VALUES
('AÇAFRÃO', 'AÇAFRÃO', '60.00', 1, 20, 'Frutaria', '3.00'),
('BICARBONATO DE SÓDIO', 'BICARBONATO DE SÓDIO', '120.00', 2, 30, 'Cozinha', '4.00'),
('CAMOMILA', 'CAMOMILA', '40.00', 3, 20, 'Frutaria', '2.00'),
('CANELA EM PÓ', 'CANELA EM PÓ', '20.00', 4, 20, 'Frutaria', '1.00'),
('CANELA EM CASCA', 'CANELA EM CASCA', '60.00', 5, 20, 'Frutaria', '3.00'),
('CHOCOLATE GRANULADO ESCURO', 'CHOCOLATE GRANULADO ESCURO', '90.00', 6, 30, 'Cozinha', '3.00'),
('COENTRO EM GRÃO', 'COENTRO EM GRÃO', '69.00', 7, 23, 'Frutaria', '3.00'),
('COENTRO EM PÓ', 'COENTRO EM PÓ', '86.70', 8, 34, 'Frutaria', '2.55'),
('COLORÍFICO', 'COLORÍFICO', '40.00', 9, 20, 'Cozinha', '2.00'),
('COMINHO EM PÓ', 'COMINHO EM PÓ', '20.00', 10, 20, 'Frutaria', '1.00'),
('CRAVO', 'CRAVO', '90.00', 11, 30, 'Frutaria', '3.00'),
('ERVA DOCE', 'ERVA DOCE', '92.00', 12, 46, 'Frutaria', '2.00'),
('LOURO EM FOLHA', 'LOURO EM FOLHA', '10.00', 13, 5, 'Frutaria', '2.00'),
('CHA MATE LEAO VARIOS SABORES', 'CHA MATE LEAO VARIOS SABORES', '28.00', 14, 14, 'Cozinha', '2.00'),
('SUCRILHO KELLHESS MUSLIX TRDICIONAL 350G', 'SUCRILHO KELLHESS MUSLIX TRDICIONAL 350G', '96.00', 15, 16, 'Cozinha', '6.00'),
('CATCHUP 200G KONSUMO', 'CATCHUP 200G KONSUMO', '0.00', 16, 14, 'Cozinha', '0.00'),
('CHA LEAO HORTELA 10G', 'CHA LEAO HORTELA 10G', '18.00', 17, 18, 'Cozinha', '1.00'),
('GELATINA DR.OETKER 45G', 'GELATINA DR.OETKER 45G', '0.00', 18, 4, 'Cozinha', '0.00'),
('MOUSSE DR.OETKER 70G', 'MOUSSE DR.OETKER 70G', '32.00', 19, 16, 'Cozinha', '2.00'),
('CHA MATE LEAO 200G', 'CHA MATE LEAO 200G', '54.00', 20, 18, 'Cozinha', '3.00');

-- --------------------------------------------------------

--
-- Estrutura stand-in para view `user_view`
-- (Veja abaixo para a visão atual)
--
CREATE TABLE `user_view` (
`nomeUsuario` varchar(60)
,`rgUsuario` varchar(10)
);

-- --------------------------------------------------------

--
-- Estrutura para view `user_view`
--
DROP TABLE IF EXISTS `user_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`aluno`@`localhost` SQL SECURITY DEFINER VIEW `user_view`  AS  select `cad_usuario`.`nome` AS `nomeUsuario`,`cad_usuario`.`rg` AS `rgUsuario` from `cad_usuario` ;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `cad_usuario`
--
ALTER TABLE `cad_usuario`
  ADD PRIMARY KEY (`cpf`),
  ADD KEY `nome` (`nome`),
  ADD KEY `tipuser_cd` (`tipuser_cd`);

--
-- Índices de tabela `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`cpf_user`);

--
-- Índices de tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`cod_pedido`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`cod_prod`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `cod_pedido` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `cod_prod` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

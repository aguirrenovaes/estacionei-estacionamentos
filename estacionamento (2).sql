-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Abr-2023 às 20:40
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `estacionamento`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carros`
--

CREATE TABLE `carros` (
  `pk_carros` int(11) NOT NULL,
  `placa` varchar(11) NOT NULL,
  `entrada` datetime NOT NULL,
  `saida` datetime DEFAULT NULL,
  `fk_vagas` int(3) NOT NULL,
  `fk_preco` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `precos`
--

CREATE TABLE `precos` (
  `pk_preco` int(11) NOT NULL,
  `preco` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `pk_usuarios` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `cargo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`pk_usuarios`, `usuario`, `email`, `senha`, `cargo`) VALUES
(17, 'Amri', 'amri@gmail.com', 'MTIzNDU2Nzg=', 'Admin'),
(18, 'Aguirre', 'aguirre@gmail.com', 'MTIzNDU2Nzg=', 'Admin'),
(19, 'Breno', 'breno@gmail.com', 'MTIzNDU2Nzg=', 'Admin'),
(20, 'Gustavo', 'gustavo@gmail.com', 'MTIzNDU2Nzg=', 'Admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vagas`
--

CREATE TABLE `vagas` (
  `pk_vagas` int(3) NOT NULL,
  `numero_vaga` enum('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40','41','42','43','44','45','46','47','48','49','50','51','52','53','54','55','56','57','58','59','60','61','62','63','64','65','66','67','68','69','70','71','72','73','74','75','76','77','78','79','80','81','82','83','84','85','86','87','88','89','90','91','92','93','94','95','96','97','98','99','100','101','102','103','104','105','106','107','108','109','110','111','112','113','114','115','116','117','118','119','120','121','122','123','124','125','126','127','128','129','130','131','132','133','134','135','136','137','138','139','140','141','142','143','144','145','146','147','148','149','150','151','152','153','154','155','156','157','158','159','160','161','162','163','164','165','166','167','168','169','170','171','172','173','174','175','176','177','178','179','180','181','182','183','184','185','186','187','188','189','190','191','192','193','194','195','196','197','198','199','200') NOT NULL,
  `ocupado` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `vagas`
--

INSERT INTO `vagas` (`pk_vagas`, `numero_vaga`, `ocupado`) VALUES
(1, '1', 0),
(2, '2', 0),
(3, '3', 0),
(4, '4', 0),
(5, '5', 0),
(6, '6', 0),
(7, '7', 0),
(8, '8', 0),
(9, '9', 0),
(10, '10', 0),
(11, '11', 0),
(12, '12', 0),
(13, '13', 0),
(14, '14', 0),
(15, '15', 0),
(16, '16', 0),
(17, '17', 0),
(18, '18', 0),
(19, '19', 0),
(20, '20', 0),
(21, '21', 0),
(22, '22', 0),
(23, '23', 0),
(24, '24', 0),
(25, '25', 0),
(26, '26', 0),
(27, '27', 0),
(28, '28', 0),
(29, '29', 0),
(30, '30', 1),
(31, '31', 0),
(32, '32', 0),
(33, '33', 0),
(34, '34', 0),
(35, '35', 0),
(36, '36', 0),
(37, '37', 0),
(38, '38', 0),
(39, '39', 0),
(40, '40', 0),
(41, '41', 0),
(42, '42', 0),
(43, '43', 0),
(44, '44', 0),
(45, '45', 0),
(46, '46', 0),
(47, '47', 0),
(48, '48', 0),
(49, '49', 0),
(50, '50', 0),
(51, '51', 0),
(52, '52', 0),
(53, '53', 0),
(54, '54', 0),
(55, '55', 0),
(56, '56', 0),
(57, '57', 0),
(58, '58', 0),
(59, '59', 0),
(60, '60', 0),
(61, '61', 0),
(62, '62', 0),
(63, '63', 0),
(64, '64', 0),
(65, '65', 0),
(66, '66', 0),
(67, '67', 0),
(68, '68', 0),
(69, '69', 0),
(70, '70', 0),
(71, '71', 0),
(72, '72', 0),
(73, '73', 0),
(74, '74', 0),
(75, '75', 0),
(76, '76', 0),
(77, '77', 0),
(78, '78', 0),
(79, '79', 0),
(80, '80', 0),
(81, '81', 0),
(82, '82', 0),
(83, '83', 0),
(84, '84', 0),
(85, '85', 0),
(86, '86', 0),
(87, '87', 0),
(88, '88', 0),
(89, '89', 0),
(90, '90', 0),
(91, '91', 0),
(92, '92', 0),
(93, '93', 0),
(94, '94', 0),
(95, '95', 0),
(96, '96', 0),
(97, '97', 0),
(98, '98', 0),
(99, '99', 0),
(100, '100', 0),
(101, '101', 0),
(102, '102', 0),
(103, '103', 0),
(104, '104', 0),
(105, '105', 0),
(106, '106', 0),
(107, '107', 0),
(108, '108', 0),
(109, '109', 0),
(110, '110', 0),
(111, '111', 0),
(112, '112', 0),
(113, '113', 0),
(114, '114', 0),
(115, '115', 0),
(116, '116', 0),
(117, '117', 0),
(118, '118', 0),
(119, '119', 0),
(120, '120', 0),
(121, '121', 0),
(122, '122', 0),
(123, '123', 0),
(124, '124', 0),
(125, '125', 0),
(126, '126', 0),
(127, '127', 0),
(128, '128', 0),
(129, '129', 0),
(130, '130', 0),
(131, '131', 0),
(132, '132', 0),
(133, '133', 0),
(134, '134', 0),
(135, '135', 0),
(136, '136', 0),
(137, '137', 0),
(138, '138', 0),
(139, '139', 0),
(140, '140', 0),
(141, '141', 0),
(142, '142', 0),
(143, '143', 0),
(144, '144', 0),
(145, '145', 0),
(146, '146', 0),
(147, '147', 0),
(148, '148', 0),
(149, '149', 0),
(150, '150', 0),
(151, '151', 0),
(152, '152', 0),
(153, '153', 0),
(154, '154', 0),
(155, '155', 0),
(156, '156', 0),
(157, '157', 0),
(158, '158', 0),
(159, '159', 0),
(160, '160', 0),
(161, '161', 0),
(162, '162', 0),
(163, '163', 0),
(164, '164', 0),
(165, '165', 0),
(166, '166', 0),
(167, '167', 0),
(168, '168', 0),
(169, '169', 0),
(170, '170', 0),
(171, '171', 0),
(172, '172', 0),
(173, '173', 0),
(174, '174', 0),
(175, '175', 0),
(176, '176', 0),
(177, '177', 0),
(178, '178', 0),
(179, '179', 0),
(180, '180', 0),
(181, '181', 0),
(182, '182', 0),
(183, '183', 0),
(184, '184', 0),
(185, '185', 0),
(186, '186', 0),
(187, '187', 0),
(188, '188', 0),
(189, '189', 0),
(190, '190', 0),
(191, '191', 0),
(192, '192', 0),
(193, '193', 0),
(194, '194', 0),
(195, '195', 0),
(196, '196', 0),
(197, '197', 0),
(198, '198', 0),
(199, '199', 0),
(200, '200', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carros`
--
ALTER TABLE `carros`
  ADD PRIMARY KEY (`pk_carros`),
  ADD KEY `fk_vagas` (`fk_vagas`),
  ADD KEY `fk_preco` (`fk_preco`);

--
-- Índices para tabela `precos`
--
ALTER TABLE `precos`
  ADD PRIMARY KEY (`pk_preco`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`pk_usuarios`);

--
-- Índices para tabela `vagas`
--
ALTER TABLE `vagas`
  ADD PRIMARY KEY (`pk_vagas`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carros`
--
ALTER TABLE `carros`
  MODIFY `pk_carros` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de tabela `precos`
--
ALTER TABLE `precos`
  MODIFY `pk_preco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `pk_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `vagas`
--
ALTER TABLE `vagas`
  MODIFY `pk_vagas` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `carros`
--
ALTER TABLE `carros`
  ADD CONSTRAINT `carros_ibfk_1` FOREIGN KEY (`fk_vagas`) REFERENCES `vagas` (`pk_vagas`),
  ADD CONSTRAINT `carros_ibfk_2` FOREIGN KEY (`fk_preco`) REFERENCES `precos` (`pk_preco`),
  ADD CONSTRAINT `carros_ibfk_3` FOREIGN KEY (`fk_vagas`) REFERENCES `vagas` (`pk_vagas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

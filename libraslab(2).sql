-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2019 at 02:46 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `libraslab`
--

-- --------------------------------------------------------

--
-- Table structure for table `exercicios`
--

CREATE TABLE `exercicios` (
  `idExercicio` int(11) NOT NULL,
  `resposta` varchar(255) NOT NULL,
  `pergunta` varchar(255) NOT NULL,
  `idVideo` int(11) DEFAULT NULL,
  `idSinal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `flashcards`
--

CREATE TABLE `flashcards` (
  `idFlash` int(11) NOT NULL,
  `idSinal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `interacao`
--

CREATE TABLE `interacao` (
  `idInt` int(11) NOT NULL,
  `idFlash` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `avaliacao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sinal`
--

CREATE TABLE `sinal` (
  `idSinal` int(11) NOT NULL,
  `classe` varchar(255) NOT NULL,
  `topico` varchar(255) NOT NULL,
  `palavra` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sinal`
--

INSERT INTO `sinal` (`idSinal`, `classe`, `topico`, `palavra`) VALUES
(1, 'expressao', 'saudacao', 'Bom dia'),
(2, 'expressao', 'saudacao', 'Boa tarde'),
(3, 'expressao', 'saudacao', 'Boa noite');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `email`, `nome`, `senha`) VALUES
(11, 'carla@carla.com', 'Carla', '$2y$10$0OsAPBK9z9Fk1Kdpwnu.I.DEGke2YtMqxocXaHL.ZGE6y4g1.ySOG'),
(12, 'luis@luis.com', 'Luis', '$2y$10$4smpiBzohCEYjjvX3eyxyOS7HhvijwgxK7FF/vN7i2BGhBPn2snwS'),
(13, 'bea@bea.com', 'bea', '$2y$10$ckD7nhiz7b30/mSwCjqfXOzi5OMrcYo.x8Eo6GJ/7UmYLq1wquSXW'),
(14, 'aaa@aaa', 'tati', '12345'),
(15, 'deivis@deivis.com', 'deivis', '$2y$10$Z6e8USxqjK6aYL7cI.C54ekTc3Z5Xf1u5SeDu9QsnqraYbB1zH4tW'),
(19, 'pablo@pablo', 'pablo', '$2y$10$6JFgKST7wbadRjn4qvljv.eaz84MEaJBKYvCKS3W9jd1tc8m2/lCe'),
(20, 'mannu@mannu', 'Mannu', '$2y$10$DfbqKEqMrZA74JTq2B0MtO2xTjNdg97jkJvsrOC87Sb5/RyFbkgpG'),
(21, 'gab@gab', 'Gabriel', '$2y$10$V5Zc9.TKwMeIlsxnO0oStu09mf273Q1zlvIeM30ys1UqrOG3kS/Ge'),
(22, 'jacque@jacque', 'Jacqueline', '$2y$10$7eDfRSoDTkVVY5gGVsHT6uq5a5cmjwMV9ZUG.7MMkm3BpmECm5Owe'),
(23, 'tami@tami', 'tami', '$2y$10$Mssck1uO/9BZzKQRBzZrouk.mXFooqphHEB92S7rsGUqhlVz/TD5y'),
(24, 'carlinha@carlinha', 'carlinha', '$2y$10$XHkt.J2V3uN82wj7oWpq4esMCDnAxMeEU9rbpcXtr9xNY6aHJMexK'),
(25, 'aa@aa', 'aaaaa', '$2y$10$Jpgg4M3WJMzhrGyhb0V2bOxsGmE4yH4RM7H5Pq0WStdddIh30lV8u'),
(26, 'a@a', 'nome', '$2y$10$RBpYDQ7OpK6LCNhqRUkwpeDj1qqBpwZ1.mm5xz93.M68BTaQVSjh2'),
(27, 'toto@toto', 'toto', '$2y$10$xw07TjTE3WdE4nkI29k1WOimD5cLxHqAsurkoo6oFVn7rGBM3xpuy');

-- --------------------------------------------------------

--
-- Table structure for table `usuario_sinal`
--

CREATE TABLE `usuario_sinal` (
  `idUserSinal` int(11) NOT NULL,
  `idSinal` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuario_sinal`
--

INSERT INTO `usuario_sinal` (`idUserSinal`, `idSinal`, `idUsuario`) VALUES
(0, 1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `idVideo` int(11) NOT NULL,
  `nomeVideo` varchar(255) NOT NULL,
  `caminho` text NOT NULL,
  `sessao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`idVideo`, `nomeVideo`, `caminho`, `sessao`) VALUES
(1, 'Amar', 'videos/01.mp4', 6),
(2, 'Comer', 'videos/02.mp4', 6),
(3, 'Escrever', 'videos/03.mp4', 6),
(4, 'Beber', 'videos/05.mp4', 6),
(5, 'Entender', 'videos/05.mp4', 6),
(6, 'Falar', 'videos/06.mp4', 6),
(7, 'Ter', 'videos/07.mp4', 6),
(8, 'Andar', 'videos/08.mp4', 6),
(9, 'Aprender', 'videos/09.mp4', 6),
(10, 'Fazer', 'videos/10.mp4', 6),
(11, 'Trabalhar', 'videos/11.mp4', 6),
(12, 'Estar', 'videos/12.mp4', 6),
(13, 'Soletrar', 'videos/13.mp4', 6),
(14, 'Gostar', 'videos/14.mp4', 6),
(15, 'Chorar', 'videos/15.mp4', 6),
(16, 'Comprar', 'videos/16.mp4', 6),
(17, 'Conversar', 'videos/17.mp4', 6),
(18, 'Estudar', 'videos/18.mp4', 6),
(19, 'Perguntar', 'videos/19.mp4', 6),
(20, 'H', 'videos/20.mp4', 1),
(21, 'J', 'videos/21.mp4', 1),
(23, 'K', 'videos/23.mp4', 1),
(24, 'X', 'videos/24.mp4', 1),
(25, 'Y', 'videos/25.mp4', 1),
(26, 'Z', 'videos/26.mp4', 1),
(28, '10', 'videos/28.mp4', 2),
(29, '11', 'videos/29.mp4', 2),
(30, '12', 'videos/30.mp4', 2),
(32, '13', 'videos/32.mp4', 2),
(34, '14', 'videos/34.mp4', 2),
(35, '15', 'videos/35.mp4', 2),
(36, '16', 'videos/36.mp4', 2),
(37, '17', 'videos/37.mp4', 2),
(38, '18', 'videos/38.mp4', 2),
(39, '19', 'videos/39.mp4', 2),
(40, '20', 'videos/40.mp4', 2),
(41, '30', 'videos/41.mp4', 2),
(42, '40', 'videos/42.mp4', 2),
(43, '50', 'videos/43.mp4', 2),
(44, '60', 'videos/44.mp4', 2),
(45, '70', 'videos/45.mp4', 2),
(46, '80', 'videos/46.mp4', 2),
(47, '90', 'videos/47.mp4', 2),
(48, '100', 'videos/48.mp4', 2),
(49, 'Olá!/Tchau!', 'videos/49.mp4', 3),
(50, 'Tudo bem?', 'videos/50.mp4', 3),
(51, 'Desculpa', 'videos/51.mp4', 3),
(52, 'Por favor', 'videos/52.mp4', 3),
(54, 'Com licença', 'videos/54.mp4', 3),
(55, 'Obrigado', 'videos/55.mp4', 3),
(56, 'Bom dia', 'videos/56.mp4', 3),
(57, 'Boa tarde', 'videos/57.mp4', 3),
(58, 'Boa noite', 'videos/58.mp4', 3),
(59, 'Prazer em conhecer', 'videos/59.mp4', 3),
(60, 'Oi!', 'videos/60.mp4', 3),
(61, 'Eu', 'videos/61.mp4', 4),
(62, 'Você', 'videos/62.mp4', 4),
(63, 'Ele', 'videos/63.mp4', 4),
(64, 'Meu', 'videos/64.mp4', 4),
(65, 'Seu', 'videos/65.mp4', 4),
(66, 'Nós', 'videos/66.mp4', 4),
(67, 'Meu nome é ...', 'videos/67.mp4', 5),
(68, 'Meu sinal é ...', 'videos/68.mp4', 5),
(69, 'Minha idade é ...', 'videos/69.mp4', 5),
(70, 'Amarelo', 'videos/70.mp4', 7),
(71, 'Azul', 'videos/71.mp4', 7),
(72, 'Vermelho', 'videos/72.mp4', 7),
(73, 'Branco', 'videos/73.mp4', 7),
(74, 'Preto', 'videos/74.mp4', 7),
(75, 'Verde', 'videos/75.mp4', 7),
(76, 'Roxo', 'videos/76.mp4', 7),
(77, 'Laranja', 'videos/77.mp4', 7),
(78, 'Cinza', 'videos/78.mp4', 7),
(79, 'Marrom', 'videos/79.mp4', 7),
(80, 'Rosa', 'videos/80.mp4', 7),
(81, 'Claro', 'videos/81.mp4', 7),
(82, 'Escuro', 'videos/82.mp4', 7);

-- --------------------------------------------------------

--
-- Table structure for table `videos_assistidos`
--

CREATE TABLE `videos_assistidos` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idVideo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exercicios`
--
ALTER TABLE `exercicios`
  ADD PRIMARY KEY (`idExercicio`),
  ADD KEY `idVideo` (`idVideo`),
  ADD KEY `idSinal` (`idSinal`);

--
-- Indexes for table `flashcards`
--
ALTER TABLE `flashcards`
  ADD PRIMARY KEY (`idFlash`),
  ADD KEY `idSinal` (`idSinal`);

--
-- Indexes for table `interacao`
--
ALTER TABLE `interacao`
  ADD PRIMARY KEY (`idInt`),
  ADD KEY `idFlash` (`idFlash`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `sinal`
--
ALTER TABLE `sinal`
  ADD PRIMARY KEY (`idSinal`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Indexes for table `usuario_sinal`
--
ALTER TABLE `usuario_sinal`
  ADD PRIMARY KEY (`idUserSinal`),
  ADD KEY `idSinal` (`idSinal`,`idUsuario`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`idVideo`);

--
-- Indexes for table `videos_assistidos`
--
ALTER TABLE `videos_assistidos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sinal`
--
ALTER TABLE `sinal`
  MODIFY `idSinal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `videos_assistidos`
--
ALTER TABLE `videos_assistidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `exercicios`
--
ALTER TABLE `exercicios`
  ADD CONSTRAINT `exercicios_ibfk_1` FOREIGN KEY (`idSinal`) REFERENCES `sinal` (`idSinal`),
  ADD CONSTRAINT `exercicios_ibfk_2` FOREIGN KEY (`idVideo`) REFERENCES `video` (`idVideo`);

--
-- Constraints for table `flashcards`
--
ALTER TABLE `flashcards`
  ADD CONSTRAINT `flashcards_ibfk_1` FOREIGN KEY (`idSinal`) REFERENCES `sinal` (`idSinal`);

--
-- Constraints for table `interacao`
--
ALTER TABLE `interacao`
  ADD CONSTRAINT `interacao_ibfk_1` FOREIGN KEY (`idFlash`) REFERENCES `flashcards` (`idFlash`),
  ADD CONSTRAINT `interacao_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `usuario` (`idUsuario`);

--
-- Constraints for table `usuario_sinal`
--
ALTER TABLE `usuario_sinal`
  ADD CONSTRAINT `usuario_sinal_ibfk_1` FOREIGN KEY (`idSinal`) REFERENCES `sinal` (`idSinal`),
  ADD CONSTRAINT `usuario_sinal_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

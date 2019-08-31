-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2019 at 07:03 PM
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
(20, 'mannu@mannu', 'Mannu', '$2y$10$DfbqKEqMrZA74JTq2B0MtO2xTjNdg97jkJvsrOC87Sb5/RyFbkgpG');

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
  `nomeVideo` varchar(255) NOT NULL
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
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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

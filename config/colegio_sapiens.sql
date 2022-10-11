-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2022 at 08:28 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `colegio_sapiens`
--

-- --------------------------------------------------------

--
-- Table structure for table `classe`
--

CREATE TABLE `classe` (
  `codigo` int(11) NOT NULL,
  `numero_turmas` int(3) DEFAULT NULL,
  `nome_classe` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classe`
--

INSERT INTO `classe` (`codigo`, `numero_turmas`, `nome_classe`) VALUES
(1, 5, '1'),
(2, 5, '2'),
(3, 4, '3'),
(4, 4, '4'),
(5, 3, '5'),
(6, 3, '6'),
(7, 4, '7'),
(8, 5, '8');

-- --------------------------------------------------------

--
-- Table structure for table `classe_disciplina`
--

CREATE TABLE `classe_disciplina` (
  `classe_cod` int(11) DEFAULT NULL,
  `disciplina_cod` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classe_disciplina`
--

INSERT INTO `classe_disciplina` (`classe_cod`, `disciplina_cod`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(2, 4),
(2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `disciplina`
--

CREATE TABLE `disciplina` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `disciplina`
--

INSERT INTO `disciplina` (`codigo`, `nome`) VALUES
(1, 'Português '),
(2, 'Matemática '),
(3, 'Ciências Naturais'),
(4, 'Ciências Sociais');

-- --------------------------------------------------------

--
-- Table structure for table `educando`
--

CREATE TABLE `educando` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `apelido` varchar(20) DEFAULT NULL,
  `encarregado_id` int(11) DEFAULT NULL,
  `data_nascimento` datetime DEFAULT NULL,
  `genero` varchar(10) NOT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `quarteirao` varchar(45) DEFAULT NULL,
  `turma_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `educando`
--

INSERT INTO `educando` (`codigo`, `nome`, `apelido`, `encarregado_id`, `data_nascimento`, `genero`, `bairro`, `quarteirao`, `turma_id`) VALUES
(1, 'Hidelgio', 'Novela', 2, '2022-09-24 16:44:19', '', '1 de Maio', '13', 1),
(2, 'Jose', 'Langa', 1, '2022-09-24 16:44:19', '', 'T-3', '2', 2),
(3, 'Sidio', 'Novela', 2, '2022-09-24 16:45:52', '', '1 de Maio', '13', 4),
(4, 'Sónia ', 'Langa', 1, '2022-09-24 16:45:52', '', 'T-3', '5', 2),
(5, 'Dinho', 'Muculo', 1, '2022-09-07 00:00:00', 'M', 'Matola', '23', 2),
(6, 'Dinho', 'Muculo', 1, '2022-09-07 00:00:00', 'M', 'Matola', '23', 2),
(7, 'Dinhp', 'Fabiao', 2, '4311-03-12 00:00:00', 'M', 'matola', '31', 1),
(8, 'Dinho', 'Fabiao', 8, '0001-12-01 00:00:00', 'M', 'matola', '31', 1),
(9, 'alvaro', 'Fabiao', 1, '0011-12-12 00:00:00', 'M', 'matola', '31', 1),
(10, 'filipe', 'Fabiao', 1, '2120-12-12 00:00:00', 'M', 'matola', '31', 1),
(11, 'Dinhp', 'Fabiao', 2, '0112-02-21 00:00:00', 'M', 'matola', '31', 1),
(13, 'Dinho', 'Fabiao', 13, '2022-09-20 00:00:00', 'M', 'matola', '31', 3);

-- --------------------------------------------------------

--
-- Table structure for table `encarregado`
--

CREATE TABLE `encarregado` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `apelido` varchar(45) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `quarteirao` varchar(45) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `genero` char(1) DEFAULT NULL,
  `data_nascimento` datetime NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `encarregado`
--

INSERT INTO `encarregado` (`codigo`, `nome`, `apelido`, `telefone`, `bairro`, `quarteirao`, `email`, `genero`, `data_nascimento`, `user_id`) VALUES
(1, 'Maria', 'Langa', '842759368', 'Malhazine', '12', 'maria@gmail.com', 'F', '1990-09-24 16:05:42', 2),
(2, 'Tania', 'Malate', '824569875', 'Zona Verde', '19', 'tania@gmail.com', 'F', '1980-09-24 16:08:16', 4),
(7, 'elio', '', '', '', '', '', 'G', '0000-00-00 00:00:00', 17),
(8, 'justino', 'muculo', '83307261', 'Machava', '31', 'emuculo25@gmail.com', 'M', '2022-09-23 00:00:00', 18),
(9, 'justino', 'muculo', '83307261', 'Machava', '31', 'emuculo25@gmail.com', 'M', '2022-09-16 00:00:00', 19),
(10, 'lucas', 'muculo', '83307261', 'Machava', '31', 'emuculo25@gmail.com', 'M', '0000-00-00 00:00:00', 20),
(11, 'pedro', 'mateus', '842644623', 'matola', '31', 'emuculo25@gmail.com', 'M', '0000-00-00 00:00:00', 21),
(12, 'alvaro', 'mateus', '83217612', 'matola', '31', 'emuculo25@gmail.com', 'M', '0000-00-00 00:00:00', 23),
(13, 'filipe', 'Fabiao', '1212', 'Matola', '31', 'qmake65@gmail.com', 'F', '0000-00-00 00:00:00', 25),
(14, 'filipe', 'Fabiao', '1212', 'matola', '31', 'qmake65@gmail.com', 'M', '0120-02-12 00:00:00', 26);

-- --------------------------------------------------------

--
-- Table structure for table `nota`
--

CREATE TABLE `nota` (
  `codigo` int(11) NOT NULL,
  `prof_id` int(11) DEFAULT NULL,
  `educa_id` int(11) DEFAULT NULL,
  `nota1` double DEFAULT NULL,
  `nota2` double DEFAULT NULL,
  `trabalho1` double DEFAULT NULL,
  `trabalho2` double DEFAULT NULL,
  `apt` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nota`
--

INSERT INTO `nota` (`codigo`, `prof_id`, `educa_id`, `nota1`, `nota2`, `trabalho1`, `trabalho2`, `apt`) VALUES
(1, 4, 1, 10, 9, 11, 15, 12),
(2, 5, 1, 12, 12, 15, 17, 13),
(3, 4, 2, 14, 13, 17, 10, 19),
(4, 5, 2, 15, 12, 17, 10, 7);

-- --------------------------------------------------------

--
-- Table structure for table `professor`
--

CREATE TABLE `professor` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `apelido` varchar(45) DEFAULT NULL,
  `numero_BI` varchar(45) DEFAULT NULL,
  `experiencia` varchar(45) DEFAULT NULL,
  `formacao` varchar(45) DEFAULT NULL,
  `quarteirao` varchar(45) DEFAULT NULL,
  `genero` char(1) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professor`
--

INSERT INTO `professor` (`codigo`, `nome`, `apelido`, `numero_BI`, `experiencia`, `formacao`, `quarteirao`, `genero`, `userId`) VALUES
(2, 'Manuel', 'Batista', '123456789H', '2 anos', 'Matemática ', '13', 'M', 1),
(3, 'Vasco', 'Sozinho', '123459876F', '10 anos', 'Geografia', '5', 'M', 3),
(4, 'Amélia ', 'Guambe', '123400789A', '5 anos', 'Gestão ', '4', 'F', 5),
(5, 'Fátima ', 'Bacela', '123459876K', '6 anos', 'História ', '10', 'F', 6),
(6, 'elio', 'muculo', '1001217N', '2', 'Matematica', '32', 'M', 16),
(7, 'filipe', 'mateus', '1212187612', '2', 'matematica', '31', 'M', 22),
(8, 'primo', 'Fabiao', '12751725817', '12', 'Matematica', '31', 'M', 24),
(9, 'Agnaldo', 'Massango', '100101287N', '2', 'Matem', '31', 'M', 27);

-- --------------------------------------------------------

--
-- Table structure for table `professor_disciplina`
--

CREATE TABLE `professor_disciplina` (
  `profe_id` int(11) DEFAULT NULL,
  `disciplina_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professor_disciplina`
--

INSERT INTO `professor_disciplina` (`profe_id`, `disciplina_id`) VALUES
(4, 3),
(5, 1),
(2, 2),
(3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `reuniao`
--

CREATE TABLE `reuniao` (
  `codigo` int(11) NOT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `assunto` varchar(45) DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `professor_cod` int(11) DEFAULT NULL,
  `encarregado_cod` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reuniao`
--

INSERT INTO `reuniao` (`codigo`, `tipo`, `assunto`, `data`, `professor_cod`, `encarregado_cod`) VALUES
(3, 'Urgente', 'Lucas bateu no docente', '2022-09-28 00:00:00', 7, 2),
(4, 'Extra-ordinaria', 'Lucas bateu no docente', '2022-09-07 00:00:00', 7, 2),
(5, 'Extra-ordinaria', 'Lucas bateu no docente', '2022-09-07 00:00:00', 7, 2),
(6, 'Ordinaria', 'Lucas bateu no docente', '2022-09-05 00:00:00', 7, 12),
(7, 'Ordinaria', 'Lucas bateu no docente', '2022-09-05 00:00:00', 7, 12),
(8, 'Ordinaria', 'Lucas bateu no docente', '2022-09-05 00:00:00', 7, 12),
(9, 'Ordinaria', 'Lucas bateu no docente', '2022-09-05 00:00:00', 7, 12),
(10, 'Ordinaria', 'Lucas bateu no docente', '2022-09-05 00:00:00', 7, 12),
(11, 'Ordinaria', 'Lucas bateu no docente', '2022-09-05 00:00:00', 7, 12),
(12, 'Ordinaria', 'Lucas bateu no docente', '2022-09-05 00:00:00', 7, 12),
(13, 'Ordinaria', 'Lucas bateu no docente', '2022-09-05 00:00:00', 7, 12),
(14, 'Ordinaria', 'Lucas bateu no docente', '2022-09-05 00:00:00', 7, 12),
(15, 'Ordinaria', 'Tommorow we are gonna make it', '2022-09-16 00:00:00', 7, 8),
(16, 'Ordinaria', 'Tommorow we are gonna make it', '2022-09-29 00:00:00', 7, 2),
(17, 'Ordinaria', 'Tommorow we are gonna make it', '2022-09-29 00:00:00', 7, 7),
(18, 'Ordinaria', 'Tommorow we are testing the app', '2022-09-28 00:00:00', 7, 7),
(19, 'Ordinaria', 'Tommorow we are testing the app', '2022-10-06 00:00:00', 7, 12),
(28, 'Ordinaria', 'Tommorow we are testing the app', '2022-10-05 00:00:00', 7, 12),
(29, 'Ordinaria', 'Notas', '2022-09-30 00:00:00', 7, 11);

-- --------------------------------------------------------

--
-- Table structure for table `turma`
--

CREATE TABLE `turma` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `numero_educandos` varchar(45) DEFAULT NULL,
  `turno` varchar(45) DEFAULT NULL,
  `Classe_id` int(11) DEFAULT NULL,
  `professor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `turma`
--

INSERT INTO `turma` (`codigo`, `nome`, `numero_educandos`, `turno`, `Classe_id`, `professor_id`) VALUES
(1, '1A', '30', 'Manhã ', 1, 2),
(2, '1B', '32', 'Manhã ', 1, 3),
(3, '2A', '25', 'Tarde', 2, 4),
(4, '2B', '32', 'Tarde', 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `codigo` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `perfil` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`codigo`, `username`, `senha`, `perfil`, `estado`) VALUES
(1, 'Manuel', '1234', 'professor', '1'),
(2, 'Maria', '1234', 'encarregado', '1'),
(3, 'Vasco', '1234', 'professor', '1'),
(4, 'Tania', '1234', 'encarregado', '1'),
(5, 'Amelia ', '1234', 'professor', '1'),
(6, 'Fatima', '1234', 'professor', '1'),
(7, NULL, '$2y$10$IyRpqFyTHW0ilKUq7VyOne5KbKeOOubbHHVts1TzySAnpWtt9O3oa', 'encarregado', '1'),
(14, 'Dark', '$2y$10$HKobKXiroLFkYcmKRQBrlei5V8qMl7KIHv2WoTl.kD7gwloTozqDO', 'encarregado', '1'),
(15, 'Dark', '$2y$10$1dSeK0PxW.z9cQfcWj3Pj.MErvpmvA10NOUrizzhYPL58h5b5wV42', 'encarregado', '1'),
(16, 'elio', '$2y$10$UhzIYSn3KtCivKR/LcCsn.wc7IIsVb3Sg7QkScM/sXT6VwdGo9EQ.', 'professor', '1'),
(17, 'elio', '$2y$10$IVu5ZjnjsSa3zIQupch62OK5zenrqTYL/tDfI2URr/TIodkKBhbTe', 'encarregado', '1'),
(18, 'justino', '$2y$10$IGx1kbXUv7nCuizitY0PEOUR1hTKo5KwAKu6eyjMwkgfsJoA0v7YW', 'encarregado', '1'),
(19, 'justino', '$2y$10$KT9rrxJ60DCB6VqUqVbwXOESGLWbFZSVZb3Is0MeRfSUrLHSceSv.', 'encarregado', '1'),
(20, 'lucas', '$2y$10$oGNNenWzcK4ZS1aiJV19NuQtfMHNEHn1edehd9iDDhR2XNyiSfrU.', 'encarregado', '1'),
(21, 'pedro', '$2y$10$FNgJNRqI7Rg139eJpreRT.qBbyw0mhadqCDkl9rdl4aj3PckQwHy.', 'encarregado', '1'),
(22, 'filipe', '$2y$10$uOP/VnvKfpQ4gfdGZs7gd.bu25WkqFlIJ2wczBMIb9tbMpykrrID6', 'professor', '1'),
(23, 'alvaro', '$2y$10$W5YSWElP4ccC9CspvK/1ZuzgeMvGvWVZOtjMz6WNn6/ti6HxHiHKy', 'admin', '1'),
(24, 'primo', '$2y$10$cSFH/Dj9u3kjVinS7QuiAeuRX3x5V0Wq5a1AgEEqyE.Daxoj5xGJq', 'professor', '1'),
(25, 'filipe', '$2y$10$eKX6oforXYiHd/Vp9KFZJu7bQSjD9SuDCYVIvRxnhQ7AditR/T5bm', 'encarregado', '1'),
(26, 'filipe', '$2y$10$vOBBI3ONVy8junkPlcir4uHVi.kW.N.GPoN6Et//5onMv.8joHq.y', 'encarregado', '1'),
(27, 'Agnaldo', '$2y$10$2XpsIfUXChdF6MSojQrnZesLKdkIHzk5bARTnT/R6FRn0iY/1M8am', 'professor', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `classe_disciplina`
--
ALTER TABLE `classe_disciplina`
  ADD KEY `classe_cod` (`classe_cod`),
  ADD KEY `disciplina_cod` (`disciplina_cod`);

--
-- Indexes for table `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `educando`
--
ALTER TABLE `educando`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `encarregado_id` (`encarregado_id`),
  ADD KEY `turma_id` (`turma_id`);

--
-- Indexes for table `encarregado`
--
ALTER TABLE `encarregado`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `prof_id` (`prof_id`),
  ADD KEY `educa_id` (`educa_id`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `professor_disciplina`
--
ALTER TABLE `professor_disciplina`
  ADD KEY `profe_id` (`profe_id`),
  ADD KEY `disciplina_id` (`disciplina_id`);

--
-- Indexes for table `reuniao`
--
ALTER TABLE `reuniao`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `professor_cod` (`professor_cod`),
  ADD KEY `encarregado_cod` (`encarregado_cod`);

--
-- Indexes for table `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `Classe_id` (`Classe_id`),
  ADD KEY `professor_id` (`professor_id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classe`
--
ALTER TABLE `classe`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `educando`
--
ALTER TABLE `educando`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `encarregado`
--
ALTER TABLE `encarregado`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `nota`
--
ALTER TABLE `nota`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reuniao`
--
ALTER TABLE `reuniao`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `turma`
--
ALTER TABLE `turma`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `classe_disciplina`
--
ALTER TABLE `classe_disciplina`
  ADD CONSTRAINT `classe_cod` FOREIGN KEY (`classe_cod`) REFERENCES `classe` (`codigo`),
  ADD CONSTRAINT `disciplina_cod` FOREIGN KEY (`disciplina_cod`) REFERENCES `disciplina` (`codigo`);

--
-- Constraints for table `educando`
--
ALTER TABLE `educando`
  ADD CONSTRAINT `encarregado_id` FOREIGN KEY (`encarregado_id`) REFERENCES `encarregado` (`codigo`),
  ADD CONSTRAINT `turma_id` FOREIGN KEY (`turma_id`) REFERENCES `turma` (`codigo`);

--
-- Constraints for table `encarregado`
--
ALTER TABLE `encarregado`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `usuario` (`codigo`);

--
-- Constraints for table `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `educa_id` FOREIGN KEY (`educa_id`) REFERENCES `educando` (`codigo`),
  ADD CONSTRAINT `prof_id` FOREIGN KEY (`prof_id`) REFERENCES `professor` (`codigo`);

--
-- Constraints for table `professor`
--
ALTER TABLE `professor`
  ADD CONSTRAINT `userId` FOREIGN KEY (`userId`) REFERENCES `usuario` (`codigo`);

--
-- Constraints for table `professor_disciplina`
--
ALTER TABLE `professor_disciplina`
  ADD CONSTRAINT `disciplina_id` FOREIGN KEY (`disciplina_id`) REFERENCES `disciplina` (`codigo`),
  ADD CONSTRAINT `profe_id` FOREIGN KEY (`profe_id`) REFERENCES `professor` (`codigo`);

--
-- Constraints for table `reuniao`
--
ALTER TABLE `reuniao`
  ADD CONSTRAINT `encarregado_cod` FOREIGN KEY (`encarregado_cod`) REFERENCES `encarregado` (`codigo`),
  ADD CONSTRAINT `professor_cod` FOREIGN KEY (`professor_cod`) REFERENCES `professor` (`codigo`);

--
-- Constraints for table `turma`
--
ALTER TABLE `turma`
  ADD CONSTRAINT `Classe_id` FOREIGN KEY (`Classe_id`) REFERENCES `classe` (`codigo`),
  ADD CONSTRAINT `professor_id` FOREIGN KEY (`professor_id`) REFERENCES `professor` (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

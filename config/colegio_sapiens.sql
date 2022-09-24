-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Set-2022 às 17:46
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `colegio sapiens`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `classe`
--

CREATE TABLE `classe` (
  `codigo` int(11) NOT NULL,
  `numero_turmas` int(3) DEFAULT NULL,
  `nome_classe` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `classe`
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
-- Estrutura da tabela `classe_disciplina`
--

CREATE TABLE `classe_disciplina` (
  `classe_cod` int(11) DEFAULT NULL,
  `disciplina_cod` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `classe_disciplina`
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
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`codigo`, `nome`) VALUES
(1, 'Português '),
(2, 'Matemática '),
(3, 'Ciências Naturais'),
(4, 'Ciências Sociais');

-- --------------------------------------------------------

--
-- Estrutura da tabela `educando`
--

CREATE TABLE `educando` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `apelido` varchar(20) DEFAULT NULL,
  `encarregado_id` int(11) DEFAULT NULL,
  `data_nascimento` datetime DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `quarteirao` varchar(45) DEFAULT NULL,
  `turma_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `educando`
--

INSERT INTO `educando` (`codigo`, `nome`, `apelido`, `encarregado_id`, `data_nascimento`, `bairro`, `quarteirao`, `turma_id`) VALUES
(1, 'Hidelgio', 'Novela', 2, '2022-09-24 16:44:19', '1 de Maio', '13', 1),
(2, 'Jose', 'Langa', 1, '2022-09-24 16:44:19', 'T-3', '2', 2),
(3, 'Sidio', 'Novela', 2, '2022-09-24 16:45:52', '1 de Maio', '13', 4),
(4, 'Sónia ', 'Langa', 1, '2022-09-24 16:45:52', 'T-3', '5', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `encarregado`
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
-- Extraindo dados da tabela `encarregado`
--

INSERT INTO `encarregado` (`codigo`, `nome`, `apelido`, `telefone`, `bairro`, `quarteirao`, `email`, `genero`, `data_nascimento`, `user_id`) VALUES
(1, 'Maria', 'Langa', '842759368', 'Malhazine', '12', 'maria@gmail.com', 'F', '1990-09-24 16:05:42', 2),
(2, 'Tania', 'Malate', '824569875', 'Zona Verde', '19', 'tania@gmail.com', 'F', '1980-09-24 16:08:16', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `nota`
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
-- Extraindo dados da tabela `nota`
--

INSERT INTO `nota` (`codigo`, `prof_id`, `educa_id`, `nota1`, `nota2`, `trabalho1`, `trabalho2`, `apt`) VALUES
(1, 4, 1, 10, 9, 11, 15, 12),
(2, 5, 1, 12, 12, 15, 17, 13),
(3, 4, 2, 14, 13, 17, 10, 19),
(4, 5, 2, 15, 12, 17, 10, 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
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
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`codigo`, `nome`, `apelido`, `numero_BI`, `experiencia`, `formacao`, `quarteirao`, `genero`, `userId`) VALUES
(2, 'Manuel', 'Batista', '123456789H', '2 anos', 'Matemática ', '13', 'M', 1),
(3, 'Vasco', 'Sozinho', '123459876F', '10 anos', 'Geografia', '5', 'M', 3),
(4, 'Amélia ', 'Guambe', '123400789A', '5 anos', 'Gestão ', '4', 'F', 5),
(5, 'Fátima ', 'Bacela', '123459876K', '6 anos', 'História ', '10', 'F', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor_disciplina`
--

CREATE TABLE `professor_disciplina` (
  `profe_id` int(11) DEFAULT NULL,
  `disciplina_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `professor_disciplina`
--

INSERT INTO `professor_disciplina` (`profe_id`, `disciplina_id`) VALUES
(4, 3),
(5, 1),
(2, 2),
(3, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `reuniao`
--

CREATE TABLE `reuniao` (
  `codigo` int(11) NOT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `assunto` varchar(45) DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `professor_cod` int(11) DEFAULT NULL,
  `encarregado_cod` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
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
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`codigo`, `nome`, `numero_educandos`, `turno`, `Classe_id`, `professor_id`) VALUES
(1, '1A', '30', 'Manhã ', 1, 2),
(2, '1B', '32', 'Manhã ', 1, 3),
(3, '2A', '25', 'Tarde', 2, 4),
(4, '2B', '32', 'Tarde', 2, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `codigo` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `perfil` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`codigo`, `username`, `senha`, `perfil`, `estado`) VALUES
(1, 'Manuel', '1234', 'professor', '1'),
(2, 'Maria', '1234', 'encarregado', '1'),
(3, 'Vasco', '1234', 'professor', '1'),
(4, 'Tania', '1234', 'encarregado', '1'),
(5, 'Amelia ', '1234', 'professor', '1'),
(6, 'Fatima', '1234', 'professor', '1');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `classe_disciplina`
--
ALTER TABLE `classe_disciplina`
  ADD KEY `classe_cod` (`classe_cod`),
  ADD KEY `disciplina_cod` (`disciplina_cod`);

--
-- Índices para tabela `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `educando`
--
ALTER TABLE `educando`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `encarregado_id` (`encarregado_id`),
  ADD KEY `turma_id` (`turma_id`);

--
-- Índices para tabela `encarregado`
--
ALTER TABLE `encarregado`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `user_id` (`user_id`);

--
-- Índices para tabela `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `prof_id` (`prof_id`),
  ADD KEY `educa_id` (`educa_id`);

--
-- Índices para tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `userId` (`userId`);

--
-- Índices para tabela `professor_disciplina`
--
ALTER TABLE `professor_disciplina`
  ADD KEY `profe_id` (`profe_id`),
  ADD KEY `disciplina_id` (`disciplina_id`);

--
-- Índices para tabela `reuniao`
--
ALTER TABLE `reuniao`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `professor_cod` (`professor_cod`),
  ADD KEY `encarregado_cod` (`encarregado_cod`);

--
-- Índices para tabela `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `Classe_id` (`Classe_id`),
  ADD KEY `professor_id` (`professor_id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `classe`
--
ALTER TABLE `classe`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `educando`
--
ALTER TABLE `educando`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `encarregado`
--
ALTER TABLE `encarregado`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `nota`
--
ALTER TABLE `nota`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `reuniao`
--
ALTER TABLE `reuniao`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `turma`
--
ALTER TABLE `turma`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `classe_disciplina`
--
ALTER TABLE `classe_disciplina`
  ADD CONSTRAINT `classe_cod` FOREIGN KEY (`classe_cod`) REFERENCES `classe` (`codigo`),
  ADD CONSTRAINT `disciplina_cod` FOREIGN KEY (`disciplina_cod`) REFERENCES `disciplina` (`codigo`);

--
-- Limitadores para a tabela `educando`
--
ALTER TABLE `educando`
  ADD CONSTRAINT `encarregado_id` FOREIGN KEY (`encarregado_id`) REFERENCES `encarregado` (`codigo`),
  ADD CONSTRAINT `turma_id` FOREIGN KEY (`turma_id`) REFERENCES `turma` (`codigo`);

--
-- Limitadores para a tabela `encarregado`
--
ALTER TABLE `encarregado`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `usuario` (`codigo`);

--
-- Limitadores para a tabela `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `educa_id` FOREIGN KEY (`educa_id`) REFERENCES `educando` (`codigo`),
  ADD CONSTRAINT `prof_id` FOREIGN KEY (`prof_id`) REFERENCES `professor` (`codigo`);

--
-- Limitadores para a tabela `professor`
--
ALTER TABLE `professor`
  ADD CONSTRAINT `userId` FOREIGN KEY (`userId`) REFERENCES `usuario` (`codigo`);

--
-- Limitadores para a tabela `professor_disciplina`
--
ALTER TABLE `professor_disciplina`
  ADD CONSTRAINT `disciplina_id` FOREIGN KEY (`disciplina_id`) REFERENCES `disciplina` (`codigo`),
  ADD CONSTRAINT `profe_id` FOREIGN KEY (`profe_id`) REFERENCES `professor` (`codigo`);

--
-- Limitadores para a tabela `reuniao`
--
ALTER TABLE `reuniao`
  ADD CONSTRAINT `encarregado_cod` FOREIGN KEY (`encarregado_cod`) REFERENCES `encarregado` (`codigo`),
  ADD CONSTRAINT `professor_cod` FOREIGN KEY (`professor_cod`) REFERENCES `professor` (`codigo`);

--
-- Limitadores para a tabela `turma`
--
ALTER TABLE `turma`
  ADD CONSTRAINT `Classe_id` FOREIGN KEY (`Classe_id`) REFERENCES `classe` (`codigo`),
  ADD CONSTRAINT `professor_id` FOREIGN KEY (`professor_id`) REFERENCES `professor` (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

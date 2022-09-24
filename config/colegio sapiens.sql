-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Set-2022 às 23:06
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `colegio`
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `classe_disciplina`
--

CREATE TABLE `classe_disciplina` (
  `classe_cod` int(11) DEFAULT NULL,
  `disciplina_cod` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `numero_casa` int(10) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `genero` char(1) DEFAULT NULL,
  `data_nascimento` datetime NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `bairro` varchar(45) DEFAULT NULL,
  `quarteirao` varchar(45) DEFAULT NULL,
  `genero` char(1) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor_disciplina`
--

CREATE TABLE `professor_disciplina` (
  `profe_id` int(11) DEFAULT NULL,
  `disciplina_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `educando`
--
ALTER TABLE `educando`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `encarregado`
--
ALTER TABLE `encarregado`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `nota`
--
ALTER TABLE `nota`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `reuniao`
--
ALTER TABLE `reuniao`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `turma`
--
ALTER TABLE `turma`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `encarregado_id` FOREIGN KEY (`encarregado_id`) REFERENCES `mydb`.`encarregado` (`codigo`),
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

--
-- Base de Dados: `db_lojacomp`
--
CREATE DATABASE IF NOT EXISTS `db_lojacomp` 
DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE `db_lojacomp`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cliente`
--

CREATE TABLE IF NOT EXISTS `tb_cliente` (
  `COD_CLI` int NOT NULL AUTO_INCREMENT,
  `NOME` varchar(50) NOT NULL,
  `ENDERECO` varchar(80) NOT NULL,
  `DATA_NASC` date NOT NULL,
  `NUMERO` varchar(5) NOT NULL,
  `BAIRRO` varchar(20) NOT NULL,
  `CEP` char(8) NOT NULL,
  `CIDADE` varchar(30) NOT NULL,
  `ESTADO` char(2) NOT NULL,
  `CEL` char(11) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `SEXO` char(1) NOT NULL,
  `RG` char(9) NOT NULL,
  `CPF` char(11) NOT NULL,
  `LOGIN` varchar(20) NOT NULL,
  `SENHA` varchar(20) NOT NULL,
  PRIMARY KEY (`COD_CLI`)
) DEFAULT CHARSET=utf8;


-- ------------------------

--
-- Estrutura da tabela `tb_produto`
--

CREATE TABLE IF NOT EXISTS `tb_produto` (
  `COD_PROD` int NOT NULL AUTO_INCREMENT,
  `NOME` varchar(50) NOT NULL,
  `TIPO` varchar(30) NOT NULL,
  `IMAGEM` varchar(100) NOT NULL,
  `MARCA` varchar(30) NOT NULL,
  `DESCRICAO` varchar(1000) NOT NULL,
  `VALOR` float NOT NULL,
  PRIMARY KEY (`COD_PROD`)
) DEFAULT CHARSET=utf8;


-- ------------------------

--
-- Usuário BD
-- 

CREATE USER IF NOT EXISTS 'aluno'@'localhost' IDENTIFIED BY 'aluno';

GRANT ALL PRIVILEGES ON `db_lojacomp` . * TO 'aluno'@'localhost';
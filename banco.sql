-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.37-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para projetobusca
CREATE DATABASE IF NOT EXISTS `projetobusca` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `projetobusca`;

-- Copiando estrutura para tabela projetobusca.categoria
CREATE TABLE IF NOT EXISTS `categoria` (
  `idcategoria` int(11) NOT NULL,
  `txnomecategoria` varchar(45) NOT NULL,
  PRIMARY KEY (`idcategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projetobusca.categoria: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
REPLACE INTO `categoria` (`idcategoria`, `txnomecategoria`) VALUES
	(1, 'Prato Principal'),
	(2, 'Salada'),
	(3, 'Massa'),
	(4, 'Peixes'),
	(5, 'Carnes'),
	(6, 'Doces'),
	(7, 'Bebidas'),
	(8, 'Vegana');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;

-- Copiando estrutura para tabela projetobusca.categoriareceita
CREATE TABLE IF NOT EXISTS `categoriareceita` (
  `idreceitace` int(11) NOT NULL,
  `idcategoriace` int(11) NOT NULL,
  `idcategoriareceita` int(11) NOT NULL,
  PRIMARY KEY (`idcategoriareceita`),
  KEY `fk_Pentencer_Receita1_idx` (`idreceitace`),
  KEY `fk_Pentencer_Categoria1_idx` (`idcategoriace`),
  CONSTRAINT `fk_Pentencer_Categoria1` FOREIGN KEY (`idcategoriace`) REFERENCES `categoria` (`idcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pentencer_Receita1` FOREIGN KEY (`idreceitace`) REFERENCES `receita` (`idreceita`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projetobusca.categoriareceita: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `categoriareceita` DISABLE KEYS */;
REPLACE INTO `categoriareceita` (`idreceitace`, `idcategoriace`, `idcategoriareceita`) VALUES
	(1, 2, 1),
	(2, 4, 2),
	(3, 1, 3),
	(4, 1, 4),
	(5, 3, 5),
	(6, 8, 6);
/*!40000 ALTER TABLE `categoriareceita` ENABLE KEYS */;

-- Copiando estrutura para tabela projetobusca.comentario
CREATE TABLE IF NOT EXISTS `comentario` (
  `idcomentario` int(11) NOT NULL,
  `txcomentario` tinytext NOT NULL,
  `dtcomentario` date NOT NULL,
  `idusuarioce` int(11) NOT NULL,
  `idreceitacp` int(11) NOT NULL,
  `like11` varchar(45) DEFAULT NULL,
  `dislike11` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idcomentario`),
  KEY `fk_Comentario_Usuario1_idx` (`idusuarioce`),
  KEY `fk_Comentario_Receita1_idx` (`idreceitacp`),
  CONSTRAINT `fk_Comentario_Receita1` FOREIGN KEY (`idreceitacp`) REFERENCES `receita` (`idreceita`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Comentario_Usuario1` FOREIGN KEY (`idusuarioce`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projetobusca.comentario: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `comentario` DISABLE KEYS */;
REPLACE INTO `comentario` (`idcomentario`, `txcomentario`, `dtcomentario`, `idusuarioce`, `idreceitacp`, `like11`, `dislike11`) VALUES
	(1, 'Me parece um peixe', '2019-06-04', 2, 2, '0', '1'),
	(2, 'Lido e comentado', '2019-06-04', 2, 1, '0', '1'),
	(3, 'Gostei', '2019-06-04', 3, 5, '1', '0');
/*!40000 ALTER TABLE `comentario` ENABLE KEYS */;

-- Copiando estrutura para tabela projetobusca.comentarioaux1
CREATE TABLE IF NOT EXISTS `comentarioaux1` (
  `verificacao` int(11) NOT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `comentario_idcomentario` int(11) NOT NULL,
  `receita_idreceita` int(11) NOT NULL,
  KEY `fk_comentarioaux1_usuario1_idx` (`usuario_idusuario`),
  KEY `fk_comentarioaux1_comentario1_idx` (`comentario_idcomentario`),
  KEY `fk_comentarioaux1_receita1_idx` (`receita_idreceita`),
  CONSTRAINT `fk_comentarioaux1_comentario1` FOREIGN KEY (`comentario_idcomentario`) REFERENCES `comentario` (`idcomentario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_comentarioaux1_receita1` FOREIGN KEY (`receita_idreceita`) REFERENCES `receita` (`idreceita`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_comentarioaux1_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projetobusca.comentarioaux1: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `comentarioaux1` DISABLE KEYS */;
REPLACE INTO `comentarioaux1` (`verificacao`, `usuario_idusuario`, `comentario_idcomentario`, `receita_idreceita`) VALUES
	(2, 2, 1, 2),
	(2, 2, 2, 1),
	(1, 3, 3, 5);
/*!40000 ALTER TABLE `comentarioaux1` ENABLE KEYS */;

-- Copiando estrutura para tabela projetobusca.denuncia
CREATE TABLE IF NOT EXISTS `denuncia` (
  `iddenuncia` int(11) NOT NULL,
  `dtdenuncia` date NOT NULL,
  `idusuarioce` int(11) NOT NULL,
  `idreceitace` int(11) DEFAULT NULL,
  `idcomentarioce` int(11) DEFAULT NULL,
  PRIMARY KEY (`iddenuncia`),
  KEY `fk_denuncia_usuario1_idx` (`idusuarioce`),
  KEY `fk_denuncia_receita1_idx` (`idreceitace`),
  KEY `fk_denuncia_comentario1_idx` (`idcomentarioce`),
  CONSTRAINT `fk_denuncia_comentario1` FOREIGN KEY (`idcomentarioce`) REFERENCES `comentario` (`idcomentario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_denuncia_receita1` FOREIGN KEY (`idreceitace`) REFERENCES `receita` (`idreceita`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_denuncia_usuario1` FOREIGN KEY (`idusuarioce`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projetobusca.denuncia: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `denuncia` DISABLE KEYS */;
REPLACE INTO `denuncia` (`iddenuncia`, `dtdenuncia`, `idusuarioce`, `idreceitace`, `idcomentarioce`) VALUES
	(1, '2019-06-04', 2, 1, NULL);
/*!40000 ALTER TABLE `denuncia` ENABLE KEYS */;

-- Copiando estrutura para tabela projetobusca.favoritos
CREATE TABLE IF NOT EXISTS `favoritos` (
  `verificacao` int(11) NOT NULL,
  `receita_idreceita` int(11) NOT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  KEY `fk_favoritos_receita1_idx` (`receita_idreceita`),
  KEY `fk_favoritos_usuario1_idx` (`usuario_idusuario`),
  CONSTRAINT `fk_favoritos_receita1` FOREIGN KEY (`receita_idreceita`) REFERENCES `receita` (`idreceita`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_favoritos_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projetobusca.favoritos: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `favoritos` DISABLE KEYS */;
REPLACE INTO `favoritos` (`verificacao`, `receita_idreceita`, `usuario_idusuario`) VALUES
	(1, 1, 2),
	(1, 2, 2),
	(1, 3, 2),
	(1, 4, 2),
	(1, 5, 3),
	(1, 2, 1);
/*!40000 ALTER TABLE `favoritos` ENABLE KEYS */;

-- Copiando estrutura para tabela projetobusca.ingrediente
CREATE TABLE IF NOT EXISTS `ingrediente` (
  `idingrediente` int(11) NOT NULL,
  `txnomeingrediente` varchar(45) NOT NULL,
  PRIMARY KEY (`idingrediente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projetobusca.ingrediente: ~12 rows (aproximadamente)
/*!40000 ALTER TABLE `ingrediente` DISABLE KEYS */;
REPLACE INTO `ingrediente` (`idingrediente`, `txnomeingrediente`) VALUES
	(1, 'Azeitona'),
	(2, 'FeijÃ£o'),
	(3, 'Fermento'),
	(4, 'AÃ§ucar'),
	(5, 'Farinha'),
	(6, 'Leite'),
	(7, 'Ovo'),
	(8, 'Tomate'),
	(9, 'Pipoca'),
	(10, 'file de peixe'),
	(11, 'sal'),
	(12, 'pimenta'),
	(13, 'Leite de soja');
/*!40000 ALTER TABLE `ingrediente` ENABLE KEYS */;

-- Copiando estrutura para tabela projetobusca.livrodereceita
CREATE TABLE IF NOT EXISTS `livrodereceita` (
  `idlivro` int(11) NOT NULL,
  `txnomelivro` varchar(45) NOT NULL,
  `idusuarioce` int(11) NOT NULL,
  PRIMARY KEY (`idlivro`),
  KEY `fk_LivroDeReceita_Usuario1_idx` (`idusuarioce`),
  CONSTRAINT `fk_LivroDeReceita_Usuario1` FOREIGN KEY (`idusuarioce`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projetobusca.livrodereceita: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `livrodereceita` DISABLE KEYS */;
REPLACE INTO `livrodereceita` (`idlivro`, `txnomelivro`, `idusuarioce`) VALUES
	(1, 'Favoritos', 1),
	(2, 'Favoritos', 2),
	(3, 'Favoritos', 3);
/*!40000 ALTER TABLE `livrodereceita` ENABLE KEYS */;

-- Copiando estrutura para tabela projetobusca.livroreceitas
CREATE TABLE IF NOT EXISTS `livroreceitas` (
  `idreceitace` int(11) NOT NULL,
  `idlivroce` int(11) NOT NULL,
  `idlivroaux` int(11) NOT NULL,
  PRIMARY KEY (`idlivroaux`),
  KEY `fk_Gerar_Receita1_idx` (`idreceitace`),
  KEY `idlivroce` (`idlivroce`),
  CONSTRAINT `fk_Gerar_LivroDeReceita1` FOREIGN KEY (`idlivroce`) REFERENCES `livrodereceita` (`idlivro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Gerar_Receita1` FOREIGN KEY (`idreceitace`) REFERENCES `receita` (`idreceita`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projetobusca.livroreceitas: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `livroreceitas` DISABLE KEYS */;
REPLACE INTO `livroreceitas` (`idreceitace`, `idlivroce`, `idlivroaux`) VALUES
	(1, 2, 1),
	(1, 2, 2),
	(1, 2, 3),
	(1, 2, 4),
	(1, 2, 5),
	(2, 2, 6),
	(3, 2, 7),
	(4, 2, 8),
	(5, 3, 9),
	(2, 1, 10);
/*!40000 ALTER TABLE `livroreceitas` ENABLE KEYS */;

-- Copiando estrutura para tabela projetobusca.receita
CREATE TABLE IF NOT EXISTS `receita` (
  `idreceita` int(11) NOT NULL,
  `txrendimento` varchar(45) DEFAULT NULL,
  `txnomereceita` varchar(45) NOT NULL,
  `txmodopreparo` longtext NOT NULL,
  `txtempopreparo` varchar(15) NOT NULL,
  `idusuarioce` int(11) NOT NULL,
  `qtfavoritos` int(11) DEFAULT NULL,
  `tximagem` varchar(200) NOT NULL,
  PRIMARY KEY (`idreceita`),
  KEY `fk_Receita_Usuario1_idx` (`idusuarioce`),
  CONSTRAINT `fk_Receita_Usuario1` FOREIGN KEY (`idusuarioce`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projetobusca.receita: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `receita` DISABLE KEYS */;
REPLACE INTO `receita` (`idreceita`, `txrendimento`, `txnomereceita`, `txmodopreparo`, `txtempopreparo`, `idusuarioce`, `qtfavoritos`, `tximagem`) VALUES
	(1, '1 prato', 'Salada Boa', 'Corte o tomate', '2 min', 1, 1, 'tomate.jpg'),
	(2, '4 porÃ§Ãµes', 'Peixe Assado', 'tempere o peixe, coloque no forno', '40 min', 1, 2, 'peixe-assado-e-recheado.jpg'),
	(3, '1 miojo', 'Miojo Hardware', 'Ferva a Ã¡gua, coma o miojo cru, cheire o tempero e beba a Ã¡gua.', '5 minutos', 1, 1, 'foto do miojo que baixei.png'),
	(4, '2 porÃ§Ãµes', 'Torta de miojo', 'FaÃ§a uma torta, depois faÃ§a um miojo', '5 dias', 2, 1, 'torta de miojo.jpg'),
	(5, '1 miojo', 'Miojo', 'colocar o sal na agua', '5 minutos', 3, 1, 'foto do miojo que baixei.png'),
	(6, '', '', '', '', 1, 0, '');
/*!40000 ALTER TABLE `receita` ENABLE KEYS */;

-- Copiando estrutura para tabela projetobusca.receitaingrediente
CREATE TABLE IF NOT EXISTS `receitaingrediente` (
  `idreceitaingrediente` int(11) NOT NULL,
  `txquantidade` varchar(45) NOT NULL,
  `idreceitace` int(11) NOT NULL,
  `idingredientece` int(11) NOT NULL,
  `txmedidas` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`idreceitaingrediente`),
  KEY `fk_ReceitaIngrediente_Receita1_idx` (`idreceitace`),
  KEY `fk_ReceitaIngrediente_iNGREDIENTES1_idx` (`idingredientece`),
  CONSTRAINT `fk_ReceitaIngrediente_Receita1` FOREIGN KEY (`idreceitace`) REFERENCES `receita` (`idreceita`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ReceitaIngrediente_iNGREDIENTES1` FOREIGN KEY (`idingredientece`) REFERENCES `ingrediente` (`idingrediente`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projetobusca.receitaingrediente: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `receitaingrediente` DISABLE KEYS */;
REPLACE INTO `receitaingrediente` (`idreceitaingrediente`, `txquantidade`, `idreceitace`, `idingredientece`, `txmedidas`) VALUES
	(1, '2', 1, 8, 'unidades'),
	(2, '500', 2, 10, 'gramas'),
	(3, '1/2', 2, 11, 'pote'),
	(4, '1', 3, 12, 'pouco'),
	(5, '5', 4, 4, 'chicaras'),
	(6, '1', 5, 11, 'pacote'),
	(7, '1', 6, 13, 'copo');
/*!40000 ALTER TABLE `receitaingrediente` ENABLE KEYS */;

-- Copiando estrutura para tabela projetobusca.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(11) NOT NULL,
  `txnome` varchar(100) NOT NULL,
  `txsenha` varchar(20) NOT NULL,
  `txemail` varchar(45) NOT NULL,
  `dtnascimento` date NOT NULL,
  `Foto` varchar(200) DEFAULT NULL,
  `txsexo` varchar(1) NOT NULL,
  `txuser` varchar(45) NOT NULL,
  `txtipo` varchar(1) NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projetobusca.usuario: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
REPLACE INTO `usuario` (`idusuario`, `txnome`, `txsenha`, `txemail`, `dtnascimento`, `Foto`, `txsexo`, `txuser`, `txtipo`) VALUES
	(1, 'Leonardo Hitoshi Baba', 'baba123', 'email@gmail.com', '1999-09-22', 'psyduck4-640x360.jpg', 'M', 'Golfo', 'A'),
	(2, 'Meu nome Ã© Mateus', '123', 'emaildomateus', '2019-06-12', 'Perfil.png', 'F', 'Jefferson', 'U'),
	(3, 'Nome completo', '123', 'mateus@hotmail.com', '2019-06-04', 'torta de miojo.jpg', 'M', 'Mateus', 'U');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

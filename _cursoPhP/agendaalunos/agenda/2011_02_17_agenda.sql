-- MySQL dump 10.13  Distrib 5.1.37, for Win32 (ia32)
--
-- Host: localhost    Database: agenda201102
-- ------------------------------------------------------
-- Server version	5.1.37

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `contato`
--

DROP TABLE IF EXISTS `contato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contato` (
  `idcontato` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) NOT NULL,
  `telefone` int(8) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idcontato`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contato`
--

LOCK TABLES `contato` WRITE;
/*!40000 ALTER TABLE `contato` DISABLE KEYS */;
INSERT INTO `contato` VALUES (1,'Priscila',33445566,'p@p.com.br');
/*!40000 ALTER TABLE `contato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `idade`
--

DROP TABLE IF EXISTS `idade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `idade` (
  `idIdade` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(80) DEFAULT NULL,
  `Idade` int(3) DEFAULT NULL,
  PRIMARY KEY (`idIdade`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `idade`
--

LOCK TABLES `idade` WRITE;
/*!40000 ALTER TABLE `idade` DISABLE KEYS */;
INSERT INTO `idade` VALUES (1,'André',12),(2,'Pedro',10),(3,'João',23);
/*!40000 ALTER TABLE `idade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mrdataconverter`
--

DROP TABLE IF EXISTS `mrdataconverter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mrdataconverter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idIdade` int(11) DEFAULT NULL,
  `Nome` varchar(255) DEFAULT NULL,
  `Idade` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mrdataconverter`
--

LOCK TABLES `mrdataconverter` WRITE;
/*!40000 ALTER TABLE `mrdataconverter` DISABLE KEYS */;
INSERT INTO `mrdataconverter` VALUES (1,1,'André',12),(2,2,'Pedro',10),(3,3,'João',23);
/*!40000 ALTER TABLE `mrdataconverter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `noticia`
--

DROP TABLE IF EXISTS `noticia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `noticia` (
  `idnoticia` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(80) NOT NULL,
  `noticia` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`idnoticia`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `noticia`
--

LOCK TABLES `noticia` WRITE;
/*!40000 ALTER TABLE `noticia` DISABLE KEYS */;
INSERT INTO `noticia` VALUES (1,'oi','oi'),(2,'ola','pla'),(3,'Rio: ex-chefe de pol','O ex-chefe da PolÃ­cia Civil do Rio de Janeiro Allan Turnowski foi indiciado nesta quinta-feira pela PolÃ­cia Federal na OperaÃ§Ã£o Guilhotina por violaÃ§Ã£o de sigilo funcional. Se condenado, ele pode pegar atÃ© seis anos de prisÃ£o, alÃ©m de multa. '),(4,'Esportes Â» Futebol Â»','\"NÃ£o posso adiantar nada. Tenho possibilidades, mas nÃ£o para o torcedor criar muita expectativa. Ã‰ difÃ­cil repatriar algum jogador neste momento. Tem de ter paciÃªncia para fazer alguma coisa muito importante\", disse Ã  RÃ¡dio Globo.');
/*!40000 ALTER TABLE `noticia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `idusuarios` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(8) NOT NULL,
  `senha` varchar(8) NOT NULL,
  `nome` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`idusuarios`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'william','pipoca','William H. dos Santos');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-02-18 13:12:45

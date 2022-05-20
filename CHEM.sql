CREATE DATABASE  IF NOT EXISTS `chem-vic` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `chem-vic`;
-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: chem-vic
-- ------------------------------------------------------
-- Server version	5.7.33

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categorias` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(10) CHARACTER SET utf8 NOT NULL,
  `url` varchar(10) CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (1,'Orgánica','organica','2022-04-25 15:32:20','2022-04-25 15:32:21'),(2,'Inorgánica','inorganica','2022-04-25 15:32:29','2022-04-25 15:32:29');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `elementos`
--

DROP TABLE IF EXISTS `elementos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `elementos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(15) NOT NULL,
  `simbolo` char(2) NOT NULL,
  `serie_id` int(11) NOT NULL,
  `electrones` varchar(30) NOT NULL,
  `estado` enum('Gas','Sólido','Líquido','Desconocido') NOT NULL,
  `densidad` float DEFAULT NULL,
  `fusionK` float DEFAULT NULL,
  `fusionC` int(11) DEFAULT NULL,
  `ebullicionK` float DEFAULT NULL,
  `ebullicionC` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK__series` (`serie_id`) USING BTREE,
  CONSTRAINT `FK_elementos_series` FOREIGN KEY (`serie_id`) REFERENCES `series` (`serie_id`)
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elementos`
--

LOCK TABLES `elementos` WRITE;
/*!40000 ALTER TABLE `elementos` DISABLE KEYS */;
INSERT INTO `elementos` VALUES (1,'Hidrógeno','H',9,'1','Gas',0,14.025,-259,20.268,-253),(2,'Helio','He',10,'2','Gas',0.1785,0.95,-272,4.22,-269),(3,'Litio','Li',1,'2, 1','Sólido',535,453.69,181,1615,1342),(4,'Berilio','Be',2,'2, 2','Sólido',1848,1560,1287,2742,2469),(5,'Boro','B',7,'2, 3','Sólido',2460,2349,2076,4200,3927),(6,'Carbono','C',9,'2, 4','Sólido',2267,3915,3642,3915,3642),(7,'Nitrógeno','N',9,'2, 5','Gas',1,63.14,-210,77.35,-196),(8,'Oxígeno','O',9,'2, 6','Gas',1,50.35,-223,90.18,-183),(9,'Flúor','F',9,'2, 7','Gas',1.613,53.53,-220,85.03,-188),(10,'Neón','Ne',10,'2, 8','Gas',0,24.56,-249,27.104,-246),(11,'Sodio','Na',1,'2, 8, 1','Sólido',968,370.87,98,1156,883),(12,'Magnesio','Mg',2,'2, 8, 2','Sólido',1738,923,650,1363,1090),(13,'Aluminio','Al',6,'2, 8, 3','Sólido',2698,933.47,660,2792,2519),(14,'Silicio','Si',7,'2, 8, 4','Sólido',2330,1687,1414,3538,3265),(15,'Fósforo','P',9,'2, 8, 5','Sólido',1823,317.3,44,550,277),(16,'Azfure','S',9,'2, 8, 6','Sólido',1960,388.36,115,717.87,445),(17,'Cloro','Cl',9,'2, 8, 7','Gas',3,171.16,-102,239.16,-34),(18,'Argón','Ar',10,'2, 8, 8','Gas',1,83.8,-189,87.3,-186),(19,'Potasio','K',1,'2, 8, 8, 1','Sólido',856,336.53,63,1032,759),(20,'Calcio','Ca',2,'2, 8, 8, 2','Sólido',1550,1115,842,1757,1484),(21,'Escandio','Sc',5,'2, 8, 9, 2','Sólido',2985,1814,1541,3103,2830),(22,'Titanio','Ti',5,'2, 8, 10, 2','Sólido',4507,1941,1668,3560,3287),(23,'Vanadio','V',5,'2, 8, 11, 2','Sólido',6110,2175,1902,3682,3409),(24,'Cromo','Cr',5,'2, 8, 13, 1','Sólido',7140,2130,1857,2945,2672),(25,'Manganeso','Mn',5,'2, 8, 13, 2','Sólido',7430,1519,1246,2334,2061),(26,'Hierro','Fe',5,'2, 8, 14, 2','Sólido',7874,1808,1535,3023,2750),(27,'Cobalto','Co',5,'2, 8, 15, 2','Sólido',8900,1768,1495,3200,2927),(28,'Níquel','Ni',5,'2, 8, 16, 2','Sólido',8908,1728,1455,2730,2457),(29,'Cobre','Cu',5,'2, 8, 18, 1','Sólido',8960,1357.77,1085,2835,2562),(30,'Zinc','Zn',5,'2, 8, 18, 2','Sólido',7138,692.68,420,1180,907),(31,'Galio','Ga',6,'2, 8, 18, 3','Sólido',5904,302.915,30,2477,2204),(32,'Germanio','Ge',7,'2, 8, 18, 4','Sólido',5323,1211.4,938,3093,2820),(33,'Arsénico','As',7,'2, 8, 18, 5','Sólido',5727,887,614,1090,817),(34,'Selenio','Se',9,'2, 8, 18, 6','Sólido',4790,494,221,957.8,685),(35,'Bromo','Br',9,'2, 8, 18, 7','Líquido',3119,265.8,-7,332,59),(36,'Kriptón','Kr',10,'2, 8, 18, 8','Gas',3.708,115.79,-157,119.93,-153),(37,'Rubidio','Rb',1,'2, 8, 18, 8, 1','Sólido',1532,312.46,39,961,688),(38,'Estroncio','Sr',2,'2, 8, 18, 8, 2','Sólido',2630,1050,777,1655,1382),(39,'Itrio','Y',5,'2, 8, 18, 9, 2','Sólido',4472,1799,1526,3609,3336),(40,'Circonio','Zr',5,'2, 8, 18, 10, 2','Sólido',6.501,2128,1855,4644,4371),(41,'Niobio','Nb',5,'2, 8, 18, 12, 1','Sólido',8570,2750,2477,5017,4744),(42,'Molibdeno','Mo',5,'2, 8, 18, 13, 1','Sólido',10280,2896,2623,4912,4639),(43,'Tecnecio','Tc',5,'2, 8, 18, 14, 1','Sólido',11500,2430,2157,4538,4265),(44,'Rutenio','Ru',5,'2, 8, 18, 15, 1','Sólido',12370,2607,2334,4423,4150),(45,'Rodio','Rh',5,'2, 8, 18, 16, 1','Sólido',12450,2237,1964,3969,3695),(46,'Paladio','Pd',5,'2, 8, 18, 18','Sólido',12023,1828.05,1555,3236,2963),(47,'Plata','Ag',5,'2, 8, 18, 18, 1','Sólido',10490,1234.93,962,2435,2162),(48,'Cadmio','Cd',5,'2, 8, 18, 18, 2','Sólido',8650,594.22,321,1042,769),(49,'Indio','In',6,'2, 8, 18, 18, 3','Sólido',7310,429.75,157,2345,2072),(50,'Estaño','Sn',6,'2, 8, 18, 18, 4','Sólido',7365,505.08,232,2875,2602),(51,'Antimonio','Sb',7,'2, 8, 18, 18, 5','Sólido',6697,903.78,631,1860,1587),(52,'Telurio','Te',7,'2, 8, 18, 18, 6','Sólido',6240,722.66,450,1261,988),(53,'Yodo','I',9,'2, 8, 18, 18, 7','Sólido',4930,386.85,114,457.4,184),(54,'Xenón','Xe',10,'2, 8, 18, 18, 8','Gas',5.9,161.4,-112,165.1,-108),(55,'Cesio','Cs',1,'2, 8, 18, 18, 8, 1','Sólido',1879,301.59,28,944,671),(56,'Bario','Ba',2,'2, 8, 18, 18, 8, 2','Sólido',3620,1000,727,2118,1845),(57,'Lantano','La',3,'2, 8, 18, 18, 9, 2','Sólido',6146,1193,920,3730,3457),(58,'Cerio','Ce',3,'2, 8, 18, 19, 9, 2','Sólido',6689,1071,798,3699,3426),(59,'Praseodimio','Pr',3,'2, 8, 18, 21, 8, 2','Sólido',6640,1204,931,3793,3520),(60,'Neodimio','Nd',3,'2, 8, 18, 22, 8, 2','Sólido',6800,1297,1024,3373,3100),(61,'Prometio','Pm',3,'2, 8, 18, 23, 8, 2','Sólido',7264,1373,1100,3273,3000),(62,'Samario','Sm',3,'2, 8, 18, 24, 8, 2','Sólido',7353,1345,1072,2076,1803),(63,'Europio','Eu',3,'2, 8, 18, 25, 8, 2','Sólido',5244,1099,826,1800,1527),(64,'Gadolinio','Gd',3,'2, 8, 18, 25, 9, 2','Sólido',7901,1585,1312,3523,3250),(65,'Terbio','Tb',3,'2, 8, 18, 27, 8, 2','Sólido',8219,1629,1356,3503,3230),(66,'Disprosio','Dy',3,'2, 8, 18, 28, 8, 2','Sólido',8551,1680,1407,2840,2567),(67,'Holmio','Ho',3,'2, 8, 18, 29, 8, 2','Sólido',8800,1734,1461,2873,2600),(68,'Erbio','Er',3,'2, 8, 18, 30, 8, 2','Sólido',9066,1795,1522,3136,2836),(69,'Tulio','Tm',3,'2, 8, 18, 31, 8, 2','Sólido',9231,1818,1545,2220,1947),(70,'Iterbio','Yb',3,'2, 8, 18, 32, 8, 2','Sólido',9965,1097,824,1467,1194),(71,'Lutecio','Lu',3,'2, 8, 18, 32, 9, 2','Sólido',9841,1925,1652,3675,3402),(72,'Hafnio','Hf',5,'2, 8, 18, 32, 10, 2','Sólido',13310,2506,2233,4876,4603),(73,'Tántalo','Ta',5,'2, 8, 18, 32, 11, 2','Sólido',16650,3290,3017,5731,5458),(74,'Wolframio','W',5,'2, 8, 18, 32, 12, 2','Sólido',19600,3695,3422,6203,5930),(75,'Renio','Re',5,'2, 8, 18, 32, 13, 2','Sólido',21020,3459,3186,5869,5596),(76,'Osmio','Os',5,'2, 8, 18, 32, 14, 2','Sólido',22610,3306,3033,5285,5012),(77,'Iridio','Ir',5,'2, 8, 18, 32, 15, 2','Sólido',22560,2739,2466,4701,4428),(78,'Platino','Pt',5,'2, 8, 18, 32, 17, 1','Sólido',21450,2042.15,1769,4098,3825),(79,'Oro','Au',5,'2, 8, 18, 32, 18, 1','Sólido',19300,1337.33,1064,3129,2856),(80,'Mercurio','Hg',5,'2, 8, 18, 32, 18, 2','Líquido',13534,234.32,-39,629.88,357),(81,'Talio','Tl',6,'2, 8, 18, 32, 18, 3','Sólido',11850,577,304,1746,1473),(82,'Plomo','Pb',6,'2, 8, 18, 32, 18, 4','Sólido',11340,600.61,327,2022,1749),(83,'Bismuto','Bi',6,'2, 8, 18, 32, 18, 5','Sólido',9780,544.4,271,1837,1564),(84,'Polonio','Po',7,'2, 8, 18, 32, 18, 6','Sólido',9196,527,254,1235,962),(85,'Astato','At',9,'2, 8, 18, 32, 18, 7','Sólido',0,575,302,610,337),(86,'Radón','Rn',10,'2, 8, 18, 32, 18, 8','Gas',9,202,-71,211.3,-62),(87,'Francio','Fr',1,'2, 8, 18, 32, 18, 8, 1','Líquido',1870,300,27,950,677),(88,'Radio','Ra',2,'2, 8, 18, 32, 18, 8, 2','Sólido',5500,973,700,2010,1737),(89,'Actinio','Ac',4,'2, 8, 18, 32, 18, 9, 2','Sólido',10,1323,1050,3471,3198),(90,'Torio','Th',4,'2, 8, 18, 32, 18, 10, 2','Sólido',11724,2028,1755,5061,4788),(91,'Protactinio','Pa',4,'2, 8, 18, 32, 20, 9, 2','Sólido',15370,2113,1840,4300,4027),(92,'Uranio','U',4,'2, 8, 18, 32, 21, 9, 2','Sólido',19,1406,1133,4203,3930),(93,'Neptunio','Np',4,'2, 8, 18, 32, 22, 9, 2','Sólido',20250,910,637,4273,4000),(94,'Plutonio','Pu',4,'2, 8, 18, 32, 24, 8, 2','Sólido',19816,912.5,639,3505,3232),(95,'Americio','Am',4,'2, 8, 18, 32, 25, 8, 2','Sólido',13,1449,1176,2880,2607),(96,'Curio','Cm',4,'2, 8, 18, 32, 25, 9, 2','Sólido',13.51,1613,1340,3383,3110),(97,'Berkelio','Bk',4,'2, 8, 18, 32, 27, 8, 2','Sólido',NULL,NULL,NULL,NULL,NULL),(98,'Californio','Cf',4,'2, 8, 18, 32, 28, 8, 2','Sólido',15.1,1173,900,1743,1470),(99,'Einstenio','Es',4,'2, 8, 18, 32, 29, 8, 2','Sólido',8,NULL,NULL,NULL,NULL),(100,'Fermio','Fm',4,'2, 8, 18, 32, 30, 8, 2','Sólido',NULL,NULL,NULL,NULL,NULL),(101,'Mendelevio','Md',4,'2, 8, 18, 32, 31, 8, 2','Sólido',NULL,NULL,NULL,NULL,NULL),(102,'Nobelio','No',4,'2, 8, 18, 32, 32, 8, 2','Sólido',NULL,NULL,NULL,NULL,NULL),(103,'Lawrencio','Lr',4,'2, 8, 18, 32 32, 8, 3','Sólido',NULL,NULL,NULL,NULL,NULL),(104,'Rutherfordio','Rf',4,'0','Sólido',NULL,NULL,NULL,NULL,NULL),(105,'Dubnio','Db',5,'0','Sólido',NULL,NULL,NULL,NULL,NULL),(106,'Seaborgio','Sg',5,'2, 8, 18, 32, 32, 12, 2','Sólido',NULL,NULL,NULL,NULL,NULL),(107,'Bohrio','Bh',5,'0','Sólido',NULL,NULL,NULL,NULL,NULL),(108,'Hasio','Hs',5,'2, 8, 18, 32, 32, 16, 2','Sólido',NULL,NULL,NULL,NULL,NULL),(109,'Meitnerio','Mt',5,'2, 8, 18, 32, 32, 15, 2','Sólido',NULL,NULL,NULL,NULL,NULL),(110,'Darmstatio','Ds',5,'2, 8, 18, 32, 32, 16, 2','Sólido',NULL,NULL,NULL,NULL,NULL),(111,'Roentgenio','Rg',5,'2, 8, 18, 32, 32, 17, 2','Sólido',NULL,NULL,NULL,NULL,NULL),(112,'Copernicio','Cn',5,'2, 8, 18, 32, 32, 18, 2','Sólido',NULL,NULL,NULL,NULL,NULL),(113,'Nihonio','Nh',6,'2, 8, 18, 32, 32, 18, 3','Sólido',16,700,427,14000,1127),(114,'Flerovio','Fl',6,'2, 8, 18, 32, 32, 18, 4','Sólido',14,340,67,420,147),(115,'Moscovio','Mc',6,'2, 8, 18, 32, 32, 18, 5','Sólido',NULL,NULL,NULL,NULL,NULL),(116,'Livermorio','Lv',6,'2, 8, 18, 32, 32, 18, 6','Sólido',NULL,NULL,NULL,NULL,NULL),(117,'Teneso','Ts',9,'2, 8, 18, 32, 32, 18, 7','Sólido',NULL,NULL,NULL,823,550),(118,'Organesón','Og',10,'2, 8, 18, 32, 32, 18, 8','Desconocido',13,NULL,NULL,320,47);
/*!40000 ALTER TABLE `elementos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `favorites`
--

DROP TABLE IF EXISTS `favorites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `favorites` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL COMMENT 'user_id',
  `formula_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`,`formula_id`),
  KEY `FK_favorites_formulas` (`formula_id`),
  CONSTRAINT `FK_favorites_formulas` FOREIGN KEY (`formula_id`) REFERENCES `formulas` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_favorites_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=156 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `favorites`
--

LOCK TABLES `favorites` WRITE;
/*!40000 ALTER TABLE `favorites` DISABLE KEYS */;
INSERT INTO `favorites` VALUES (155,1,74,NULL,NULL);
/*!40000 ALTER TABLE `favorites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formulas`
--

DROP TABLE IF EXISTS `formulas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `formulas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `nombre_comun` varchar(45) NOT NULL,
  `nombre_sistematico` varchar(45) NOT NULL,
  `tipo` bigint(20) unsigned NOT NULL DEFAULT '0',
  `descripcion` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `elemento_1` char(2) NOT NULL,
  `elemento_2` char(2) DEFAULT NULL,
  `elemento_3` char(2) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `url` (`url`),
  KEY `fk_formulas_users1_idx` (`user_id`),
  KEY `fk_category_id` (`tipo`),
  CONSTRAINT `fk_category_id` FOREIGN KEY (`tipo`) REFERENCES `categorias` (`id`),
  CONSTRAINT `fk_formulas_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formulas`
--

LOCK TABLES `formulas` WRITE;
/*!40000 ALTER TABLE `formulas` DISABLE KEYS */;
INSERT INTO `formulas` VALUES (74,1,'vcarreto-74','Acetona','Dimetilcetona',2,'La acetona es una sustancia química que se puede encontrar naturalmente en el medioambiente y también se puede producir artificialmente.','C','H','O','2022-05-20 18:31:38','2022-05-20 18:31:38'),(75,1,'vcarreto-75','Alcohol','Etanol',1,'Los alcoholes son compuesto orgánicos que contienen el grupo hidroxilo (-OH).','C','H','H','2022-05-20 18:32:09','2022-05-20 18:32:08');
/*!40000 ALTER TABLE `formulas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formulas_favoritas`
--

DROP TABLE IF EXISTS `formulas_favoritas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `formulas_favoritas` (
  `user_id` bigint(20) unsigned NOT NULL,
  `formula_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`,`formula_id`),
  KEY `fk_users_has_formulas_formulas1_idx` (`formula_id`),
  KEY `fk_users_has_formulas_users1_idx` (`user_id`),
  CONSTRAINT `fk_users_has_formulas_formulas1` FOREIGN KEY (`formula_id`) REFERENCES `formulas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_has_formulas_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formulas_favoritas`
--

LOCK TABLES `formulas_favoritas` WRITE;
/*!40000 ALTER TABLE `formulas_favoritas` DISABLE KEYS */;
/*!40000 ALTER TABLE `formulas_favoritas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2022_05_05_164337_create_favorites_table',2),(6,'2018_12_14_000000_create_favorites_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `series`
--

DROP TABLE IF EXISTS `series`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `series` (
  `serie_id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(50) DEFAULT NULL,
  `nombre` varchar(30) NOT NULL,
  `grupo` enum('metales','no metales','otros') NOT NULL,
  PRIMARY KEY (`serie_id`),
  UNIQUE KEY `nombre_UNIQUE` (`nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `series`
--

LOCK TABLES `series` WRITE;
/*!40000 ALTER TABLE `series` DISABLE KEYS */;
INSERT INTO `series` VALUES (1,'alcalino','Alcalino','metales'),(2,'alcalinoterreos','Alcalinotérreos','metales'),(3,'lantanidos','Lantánidos','metales'),(4,'actinido','Actínido','metales'),(5,'metal_de_transicion','Metal de transición','metales'),(6,'metal_del_bloque_p','Metal del bloque p','metales'),(7,'semimetal','Semimetal','otros'),(8,'desconocida','Desconocida','otros'),(9,'otros_no_metales','Otros no metales','no metales'),(10,'gases_nobles','Gases nobles','no metales');
/*!40000 ALTER TABLE `series` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'user.jpg',
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci DEFAULT 'user',
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `user` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bio` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Akira Tachibana.jpg','admin','Victoria','vcarreto','v.carreto@sapalomera.cat',NULL,'$2y$10$6FFTrO.D2roqH6bC2q2KK.3ssGOID054KRLZeLb4XaPi5TzwqLnjy','DcnaoZuybsPFO3LSRUAUkRNFqF30cS4kB0iFU9yeEDdn83XuKEJFYSD5fG6T','2022-04-05 11:46:24','2022-05-20 16:32:37','20');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-20 20:35:17

-- MySQL dump 10.13  Distrib 8.0.24, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: cantinhodoce
-- ------------------------------------------------------
-- Server version	8.0.24

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
-- Table structure for table `avaliacoes`
--

DROP TABLE IF EXISTS `avaliacoes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `avaliacoes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produto_id` int NOT NULL,
  `nota` int NOT NULL,
  `avaliacao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `avaliacoes`
--

LOCK TABLES `avaliacoes` WRITE;
/*!40000 ALTER TABLE `avaliacoes` DISABLE KEYS */;
INSERT INTO `avaliacoes` VALUES (1,'Luisa',21,5,'ótimo produto',1,NULL,NULL);
/*!40000 ALTER TABLE `avaliacoes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carrinho_detalhes`
--

DROP TABLE IF EXISTS `carrinho_detalhes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `carrinho_detalhes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `pedido_id` int NOT NULL,
  `produto_id` int NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` int NOT NULL DEFAULT '0',
  `quantidade` int NOT NULL DEFAULT '0',
  `preco_total` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carrinho_detalhes`
--

LOCK TABLES `carrinho_detalhes` WRITE;
/*!40000 ALTER TABLE `carrinho_detalhes` DISABLE KEYS */;
/*!40000 ALTER TABLE `carrinho_detalhes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carrinhos`
--

DROP TABLE IF EXISTS `carrinhos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `carrinhos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `total` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `carrinhos_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carrinhos`
--

LOCK TABLES `carrinhos` WRITE;
/*!40000 ALTER TABLE `carrinhos` DISABLE KEYS */;
/*!40000 ALTER TABLE `carrinhos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contactos`
--

DROP TABLE IF EXISTS `contactos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contactos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mensagem` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contactos`
--

LOCK TABLES `contactos` WRITE;
/*!40000 ALTER TABLE `contactos` DISABLE KEYS */;
/*!40000 ALTER TABLE `contactos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
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
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2021_05_13_170733_create_produtos_table',1),(5,'2021_05_19_161104_add_imagem_column_to_produtos_table',1),(6,'2021_05_24_214513_create_pedidos_table',1),(7,'2021_05_24_221528_create_pedidos_detalhes_table',1),(8,'2021_05_26_230216_create_contactos_table',1),(9,'2021_05_27_181317_create_carrinhos_table',1),(10,'2021_05_27_182216_create_carrinho_detalhes_table',1),(11,'2021_05_28_222441_create_avaliacoes_table',1);
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
-- Table structure for table `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pedidos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `nome_cliente` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtotal` int DEFAULT '0',
  `taxa_entrega` int DEFAULT '0',
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pedidos_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidos`
--

LOCK TABLES `pedidos` WRITE;
/*!40000 ALTER TABLE `pedidos` DISABLE KEYS */;
INSERT INTO `pedidos` VALUES (1,3,'Luísa Endres',8,3,'Em processamento',11,'2021-05-18 15:51:24',NULL),(2,4,'Teste',13,2,'Concluido',15,'2021-05-19 09:34:12',NULL),(3,6,'ultimo',15,0,'Concluido',15,'2021-05-19 13:32:43',NULL),(4,3,'Luísa Endres',9,3,'Concluido',12,'2021-05-20 11:31:34',NULL);
/*!40000 ALTER TABLE `pedidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedidos_detalhes`
--

DROP TABLE IF EXISTS `pedidos_detalhes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pedidos_detalhes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `pedido_id` int NOT NULL,
  `produto_id` int NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` int NOT NULL DEFAULT '0',
  `quantidade` int NOT NULL DEFAULT '0',
  `preco_total` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidos_detalhes`
--

LOCK TABLES `pedidos_detalhes` WRITE;
/*!40000 ALTER TABLE `pedidos_detalhes` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedidos_detalhes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produtos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_categoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` decimal(8,2) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `imagem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES (3,'pastel de nata','Doces','Pastéis Miniatura Diversos',0.80,1,'2021-05-14 18:20:52','2021-05-20 14:27:54','public/images/RpU9VghraEjNJGZonTvgygVVHU5hPBr7aretDazI.jpg'),(4,'empada','Salgados','Pizzas, Bolas e Quiches',0.80,1,'2021-05-16 14:57:04','2021-05-22 14:03:30','public/images/t2xVChNoOo1Zm3lU81NQexDqcS6dtGy5c2tKvJtq.jpg'),(8,'croissant Misto','Salgados','Pastéis Diversos',1.20,1,'2021-05-19 15:31:04','2021-05-20 12:38:44','public/images/AgjYaX5AiyvpLbGF6hbf95Bg4Z1nStkTpkhKLmCu.jpg'),(10,'pudim','Doces','Sobremesas',2.50,1,'2021-05-19 15:51:24','2021-05-22 14:01:08','public/images/CjTFiVOggsRSyGufGxuQ3wsThuTpMHl1mRCDXjcw.jpg'),(12,'bolo de Chocolate','Doces','Sobremesas',1.90,1,'2021-05-20 13:24:08','2021-05-20 13:28:07','public/images/jY5edPqWcrzFVZE6yVuq6Ncvxl0GIUTbfgVsCcik.jpg'),(21,'broa de Milho','Padaria','Broa Pequena',1.50,1,'2021-05-22 13:39:32','2021-05-22 13:39:32','public/images/0h0l2gb2OkuT6VM9pAb52ZtfikRcXxTVutpXYwFC.jpg'),(22,'bolo Mil Folhas','Produtos ao Peso','Bolos de Aniversário',9.00,1,'2021-05-22 13:45:24','2021-05-22 13:45:24','public/images/if3P9SDNo2L2ieEP6k9nKpe1lejp0u4w39ts3DPs.jpg'),(23,'pão de Trigo','Padaria','Pão 0,5',0.30,1,'2021-05-22 14:05:11','2021-05-22 14:05:11','public/images/1DEEypNhjymPyMBEJ5a9i5ozbiZZWK096ZahOeDV.jpg'),(24,'broa','Padaria','Broa Grande',1.90,1,'2021-05-22 14:07:52','2021-05-22 14:07:52','public/images/fSraieLC5pdyJ8ef4uidiVrzltl4QPz3bOiDGrYt.jpg'),(25,'rissóis de Carne','Salgados','Rissóis',1.00,1,'2021-05-22 14:09:06','2021-05-22 14:09:06','public/images/HVFlZeIZQFi5bucBACuW9DLuYg0PGOpzgnRAmrws.jpg'),(26,'tarte Gelada','Produtos ao Peso','Sobremesas',5.60,1,'2021-05-22 14:13:49','2021-05-22 14:13:49','public/images/iFnMgiQM8JcVsukONRizJ8wt8se6tJdt3C8eG7Ge.jpg'),(27,'miniaturas Doces','Produtos ao Peso','Sortidos',4.50,1,'2021-05-22 14:15:46','2021-05-22 14:15:46','public/images/oKTSA4eNTuw4U3g28c9lvvy0PPkmZAXSlfH026jI.jpg');
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telemovel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `morada` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cidade` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@cantinhodoce.com',NULL,NULL,NULL,NULL,1,NULL,'$2y$10$F3XdH1umaJm3K3q2DXTeweP5i8LdhTJ4UMG3t4qepjNwVkNQoMp2i',NULL,'2021-05-13 14:15:42','2021-05-13 14:15:42'),(2,'User','normal@cantinhodoce.com',NULL,NULL,NULL,NULL,0,NULL,'$2y$10$Ehf4p3h98jh.iIoTNNnrmuu3Ntm8DKZ618xht.AHHyFLuJ8BsoSi.',NULL,'2021-05-13 14:15:42','2021-05-13 14:15:42'),(3,'Luísa','luendres@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$pgafH.G7/bXDlBh27dJ5R.94uRaS4SPR1hgb44nYzWXMfpsjNUZge',NULL,'2021-05-13 14:54:30','2021-05-13 14:54:30'),(4,'Teste','teste@ad.com',NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$KexqyrkqcQ8x/fCmhZn3NetokvFfA4NYDyYx6Mr9CkpZDdMZz67HO',NULL,'2021-05-22 17:12:12','2021-05-22 17:12:12'),(5,'teste','teste@teste.com',NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$7p18nCId/aCcx9aVXZ9y4eN5dY9709OtWNnHdTe4glwrH9DG1J5dG',NULL,'2021-05-22 17:25:47','2021-05-22 17:25:47'),(6,'ultimo','ultimo@ultimo.com',NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$zkOStZDmuio8hyBvOP3/6uncEv6abRiWgir/.HtWPfUUsPzBx00cu',NULL,'2021-05-22 17:42:52','2021-05-22 17:42:52'),(7,'Maria','mariiajmsantoos@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$5naNoDrguWKygrr9gaNwgeMoY7x0TdDeW5N0tyS/dgN5R9U/kJjhK',NULL,'2021-05-28 08:52:57','2021-05-28 08:52:57'),(9,'Nome do admin','admin2@cantinhodoce.com',NULL,NULL,NULL,NULL,1,'2021-05-27 23:00:00','$2y$10$YpTrd0kbrZIM5tqYvs2vkuJ3C8YG/WsuF20Ndr3rez5ipk5xMcoCW',NULL,'2021-05-28 15:27:30','2021-05-28 15:27:30');
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

-- Dump completed on 2021-05-29 21:00:02

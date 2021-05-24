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
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avaliacao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_produto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `avaliacoes`
--

LOCK TABLES `avaliacoes` WRITE;
/*!40000 ALTER TABLE `avaliacoes` DISABLE KEYS */;
/*!40000 ALTER TABLE `avaliacoes` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (4,'2016_01_01_000000_add_voyager_user_fields',2),(5,'2016_01_01_000000_create_data_types_table',2),(6,'2016_05_19_173453_create_menu_table',2),(7,'2016_10_21_190000_create_roles_table',2),(8,'2016_10_21_190000_create_settings_table',2),(9,'2016_11_30_135954_create_permission_table',2),(10,'2016_11_30_141208_create_permission_role_table',2),(11,'2016_12_26_201236_data_types__add__server_side',2),(12,'2017_01_13_000000_add_route_to_menu_items_table',2),(13,'2017_01_14_005015_create_translations_table',2),(14,'2017_01_15_000000_make_table_name_nullable_in_permissions_table',2),(15,'2017_03_06_000000_add_controller_to_data_types_table',2),(16,'2017_04_21_000000_add_order_to_data_rows_table',2),(17,'2017_07_05_210000_add_policyname_to_data_types_table',2),(18,'2017_08_05_000000_add_group_to_settings_table',2),(19,'2017_11_26_013050_add_user_role_relationship',2),(20,'2017_11_26_015000_create_user_roles_table',2),(21,'2018_03_11_000000_add_user_settings',2),(22,'2018_03_14_000000_add_details_to_data_types_table',2),(23,'2018_03_16_000000_make_settings_value_nullable',2),(43,'2014_10_12_000000_create_users_table',3),(44,'2014_10_12_100000_create_password_resets_table',3),(45,'2019_08_19_000000_create_failed_jobs_table',3),(46,'2021_05_13_163437_create_avaliacoes_table',4),(47,'2021_05_13_170733_create_produtos_table',5),(48,'2021_05_19_161104_add_imagem_column_to_produtos_table',6),(49,'2021_05_24_144010_create_categorias_table',7);
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
  `preco` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `produtos` VALUES (3,'Pastel de nata','Doces','Pastéis Miniatura Diversos','0.80€',1,'2021-05-14 18:20:52','2021-05-20 14:27:54','public/images/RpU9VghraEjNJGZonTvgygVVHU5hPBr7aretDazI.jpg'),(4,'Empada','Salgados','Pizzas, Bolas e Quiches','0,80€',1,'2021-05-16 14:57:04','2021-05-22 14:03:30','public/images/t2xVChNoOo1Zm3lU81NQexDqcS6dtGy5c2tKvJtq.jpg'),(8,'Croissant Misto','Salgados','Pastéis Diversos','1,20€',1,'2021-05-19 15:31:04','2021-05-20 12:38:44','public/images/AgjYaX5AiyvpLbGF6hbf95Bg4Z1nStkTpkhKLmCu.jpg'),(10,'Pudim','Doces','Sobremesas','2,50€',1,'2021-05-19 15:51:24','2021-05-22 14:01:08','public/images/CjTFiVOggsRSyGufGxuQ3wsThuTpMHl1mRCDXjcw.jpg'),(12,'Bolo de Chocolate','Doces','Sobremesas','1,90€',1,'2021-05-20 13:24:08','2021-05-20 13:28:07','public/images/jY5edPqWcrzFVZE6yVuq6Ncvxl0GIUTbfgVsCcik.jpg'),(21,'Broa de Milho','Padaria','Broa Pequena','1,50€',1,'2021-05-22 13:39:32','2021-05-22 13:39:32','public/images/0h0l2gb2OkuT6VM9pAb52ZtfikRcXxTVutpXYwFC.jpg'),(22,'Bolo Mil Folhas','Produtos ao Peso','Bolos de Aniversário','9,00€',1,'2021-05-22 13:45:24','2021-05-22 13:45:24','public/images/if3P9SDNo2L2ieEP6k9nKpe1lejp0u4w39ts3DPs.jpg'),(23,'Pão de Trigo','Padaria','Pão 0,5','0,30€',1,'2021-05-22 14:05:11','2021-05-22 14:05:11','public/images/1DEEypNhjymPyMBEJ5a9i5ozbiZZWK096ZahOeDV.jpg'),(24,'Broa','Padaria','Broa Grande','1,90€',1,'2021-05-22 14:07:52','2021-05-22 14:07:52','public/images/fSraieLC5pdyJ8ef4uidiVrzltl4QPz3bOiDGrYt.jpg'),(25,'Rissóis de Carne','Salgados','Rissóis','1,00€',1,'2021-05-22 14:09:06','2021-05-22 14:09:06','public/images/HVFlZeIZQFi5bucBACuW9DLuYg0PGOpzgnRAmrws.jpg'),(26,'Tarte Gelada','Produtos ao Peso','Sobremesas','5,60€',1,'2021-05-22 14:13:49','2021-05-22 14:13:49','public/images/iFnMgiQM8JcVsukONRizJ8wt8se6tJdt3C8eG7Ge.jpg'),(27,'Miniaturas Doces','Produtos ao Peso','Sortidos','4,50€',1,'2021-05-22 14:15:46','2021-05-22 14:15:46','public/images/oKTSA4eNTuw4U3g28c9lvvy0PPkmZAXSlfH026jI.jpg');
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@cantinhodoce.com',NULL,NULL,NULL,NULL,1,NULL,'$2y$10$F3XdH1umaJm3K3q2DXTeweP5i8LdhTJ4UMG3t4qepjNwVkNQoMp2i',NULL,'2021-05-13 14:15:42','2021-05-13 14:15:42'),(2,'User','normal@cantinhodoce.com',NULL,NULL,NULL,NULL,0,NULL,'$2y$10$Ehf4p3h98jh.iIoTNNnrmuu3Ntm8DKZ618xht.AHHyFLuJ8BsoSi.',NULL,'2021-05-13 14:15:42','2021-05-13 14:15:42'),(3,'Luísa','luendres@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$pgafH.G7/bXDlBh27dJ5R.94uRaS4SPR1hgb44nYzWXMfpsjNUZge',NULL,'2021-05-13 14:54:30','2021-05-13 14:54:30'),(4,'Teste','teste@ad.com',NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$KexqyrkqcQ8x/fCmhZn3NetokvFfA4NYDyYx6Mr9CkpZDdMZz67HO',NULL,'2021-05-22 17:12:12','2021-05-22 17:12:12'),(5,'teste','teste@teste.com',NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$7p18nCId/aCcx9aVXZ9y4eN5dY9709OtWNnHdTe4glwrH9DG1J5dG',NULL,'2021-05-22 17:25:47','2021-05-22 17:25:47'),(6,'ultimo','ultimo@ultimo.com',NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$zkOStZDmuio8hyBvOP3/6uncEv6abRiWgir/.HtWPfUUsPzBx00cu',NULL,'2021-05-22 17:42:52','2021-05-22 17:42:52');
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

-- Dump completed on 2021-05-24 18:58:17

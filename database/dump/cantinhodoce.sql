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
  `estado` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `avaliacoes`
--

LOCK TABLES `avaliacoes` WRITE;
/*!40000 ALTER TABLE `avaliacoes` DISABLE KEYS */;
INSERT INTO `avaliacoes` VALUES (1,'Luisa',12,5,'Este bolo de chocolate é vida',1,'2021-05-29 23:14:27','2021-05-29 23:14:27'),(2,'Ana',26,5,'O melhor doce que já comi',1,'2021-05-29 23:14:56','2021-05-29 23:14:56'),(3,'Sr Misterio',25,4,'Eu amo estes rissóis, pena que engorda',1,'2021-05-29 23:15:43','2021-05-29 23:15:43'),(4,'João',60,5,'Melhor croquete que já provei em Condeixa',1,'2021-05-30 21:32:50','2021-05-30 21:32:50');
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contactos`
--

LOCK TABLES `contactos` WRITE;
/*!40000 ALTER TABLE `contactos` DISABLE KEYS */;
INSERT INTO `contactos` VALUES (1,'Luisa','luendres@gmail.com','Olá, este é mais um teste.','2021-05-29 23:57:56','2021-05-29 23:57:56');
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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2021_05_13_170733_create_produtos_table',1),(5,'2021_05_19_161104_add_imagem_column_to_produtos_table',1),(6,'2021_05_24_214513_create_pedidos_table',1),(7,'2021_05_24_221528_create_pedidos_detalhes_table',1),(8,'2021_05_26_230216_create_contactos_table',1),(9,'2021_05_27_181317_create_carrinhos_table',1),(10,'2021_05_27_182216_create_carrinho_detalhes_table',1),(11,'2021_05_28_222441_create_avaliacoes_table',1),(12,'2021_05_29_235859_drop_avaliacoes_table',2),(13,'2021_05_30_001210_create_avaliacoes_table',3),(14,'2021_05_30_165650_add_nif_column_to_users',4),(15,'2021_05_30_153929_create_orders_table',5),(16,'2021_05_30_154922_create_order_product_table',5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_product`
--

DROP TABLE IF EXISTS `order_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `order_product` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint unsigned DEFAULT NULL,
  `product_id` bigint unsigned DEFAULT NULL,
  `quantity` int unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_product_order_id_foreign` (`order_id`),
  KEY `order_product_product_id_foreign` (`product_id`),
  CONSTRAINT `order_product_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `order_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `produtos` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_product`
--

LOCK TABLES `order_product` WRITE;
/*!40000 ALTER TABLE `order_product` DISABLE KEYS */;
INSERT INTO `order_product` VALUES (1,1,23,1,'2021-05-30 20:03:32','2021-05-30 20:03:32'),(2,2,31,1,'2021-05-30 20:33:01','2021-05-30 20:33:01'),(3,2,4,1,'2021-05-30 20:33:01','2021-05-30 20:33:01'),(4,3,25,1,'2021-05-30 20:39:46','2021-05-30 20:39:46'),(5,3,56,1,'2021-05-30 20:39:46','2021-05-30 20:39:46'),(6,3,53,1,'2021-05-30 20:39:46','2021-05-30 20:39:46'),(7,4,45,1,'2021-05-30 21:07:59','2021-05-30 21:07:59'),(8,4,57,1,'2021-05-30 21:07:59','2021-05-30 21:07:59');
/*!40000 ALTER TABLE `order_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned DEFAULT NULL,
  `metodo_entrega` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_entrega` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hora_entrega` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `morada_entrega` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `taxa_entrega` decimal(8,2) NOT NULL,
  `subtotal` decimal(8,2) NOT NULL,
  `metodo_pagamento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`),
  CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,3,'Pastelaria Cantinho Doce','21/02/2021','10:30','Pastelaria Cantinho Doce',0.15,0.01,0.14,'Pagamento ao Balcão','2021-05-30 20:03:32','2021-05-30 20:03:32'),(2,1,'Casa','31/05/2021','14:00','Rua sésamo 4',1.65,0.15,1.50,'MB Way','2021-05-30 20:33:01','2021-05-30 20:33:01'),(3,11,'Pastelaria Sisi','03/06/2021','18:20','Pastelaria Sisi',17.00,1.55,15.45,'Cartão de Crédito','2021-05-30 20:39:46','2021-05-30 20:39:46'),(4,12,'Casa','01/06/2021','18:00','Rua informática, 27',11.66,1.06,10.60,'MB Way','2021-05-30 21:07:59','2021-05-30 21:07:59');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
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
INSERT INTO `password_resets` VALUES ('luendres@gmail.com','$2y$10$EO05Vs2Llwzu5ij514iq7O1H/S1dhmFvk/BHR5.lVov9YB9nD8eDm','2021-05-30 21:04:58');
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
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES (3,'pastel de nata','Doces','Pastéis Miniatura Diversos',0.90,1,'2021-05-14 18:20:52','2021-05-30 11:39:39','public/images/rpF5w14cs3SkXgEiIO1TF8bNiK8YMXQpObD8Gqxr.jpg'),(4,'empada de frango','Salgados','Pastéis Diversos',0.90,1,'2021-05-16 14:57:04','2021-05-30 12:36:14','public/images/WzErlWz7pxVi6j7vQyvqynk2gJMsoqXFC30R5kyy.jpg'),(21,'broa de milho','Padaria','Broa',0.80,1,'2021-05-22 13:39:32','2021-05-30 11:58:29','public/images/Cn636WE3oK7F4iBrjNnqzHWQKdEa1kk6mSEQkD2a.jpg'),(22,'bolo de aniversário doce de ovos','Produtos ao Peso','Bolos de Aniversário',10.00,1,'2021-05-22 13:45:24','2021-05-30 12:12:26','public/images/ko4rVnyRJYCTURO9v20CkgwKxLj9Fyi1abU95YaJ.jpg'),(23,'pão de água','Padaria','Pão',0.14,1,'2021-05-22 14:05:11','2021-05-30 12:00:28','public/images/Vt8brh2ISuEyiGhX2kutNjLI1jhYqAWHJGLKi1Sh.jpg'),(24,'broa','Padaria','Broa',0.80,1,'2021-05-22 14:07:52','2021-05-30 11:58:59','public/images/sgFg8DN3tDiqcHDZxwksMhrSQMXc23wmGbRx8E6m.jpg'),(25,'rissóis','Salgados','Salgados Miniatura Diversos',0.45,1,'2021-05-22 14:09:06','2021-05-30 12:42:21','public/images/QfAFluIrzstbYkSTIDol9dfzERVUrWZJmNoICvQE.jpg'),(27,'húngaro doce de morango','Produtos ao Peso','Sortidos',14.00,1,'2021-05-22 14:15:46','2021-05-30 12:32:21','public/images/qKNZg0CW9OH76cp22Yg4Iw1uyf5avOZuDr5zUchC.jpg'),(28,'croissant de chocolate','Doces','Pastéis Diversos',0.90,1,'2021-05-30 01:17:06','2021-05-30 11:43:01','public/images/HA3YBa8b8AH6BU8i7F6H10lGAoULZ2NPVh3hLp6s.jpg'),(29,'pão de centeio','Padaria','Pão',0.14,1,'2021-05-30 10:16:13','2021-05-30 12:00:55','public/images/qaIdB75E1WCwBpxb63PSm8wPXlh2YrYmUo6oJDa8.jpg'),(31,'bola de berlim pequena','Doces','Pastéis Miniatura Diversos',0.60,1,'2021-05-30 11:38:15','2021-05-30 11:45:53','public/images/DvNNJ3tlPGYG7jDvHCqndajUsaj6T3AF21xWBTVN.jpg'),(32,'éclair de chocolate pequeno','Doces','Pastéis Miniatura Diversos',0.60,1,'2021-05-30 11:38:45','2021-05-30 11:46:59','public/images/83CTmJej5JeNPH2an7h40OR8khr6eQwr4YscfouT.jpg'),(33,'mil folhas pequeno','Doces','Pastéis Miniatura Diversos',0.60,1,'2021-05-30 11:39:10','2021-05-30 11:47:43','public/images/ayJ1rZjTizNxhuzdKkntYu2UrKD8kUfPMutRw5IZ.jpg'),(34,'croissant de ovo','Doces','Pastéis Diversos',0.90,1,'2021-05-30 11:44:41','2021-05-30 11:44:41','public/images/PX4GllSKLNj4qXGj5mL8mGJohng7RSNDmdU1obmc.jpg'),(35,'croissant simples','Doces','Pastéis Diversos',0.90,1,'2021-05-30 11:45:11','2021-05-30 11:45:11','public/images/2jwMBPcCFwtVhN5oypHoY8OjFy28HwXtuBBoBT3l.jpg'),(36,'bola de berlim','Doces','Pastéis Diversos',0.90,1,'2021-05-30 11:46:30','2021-05-30 11:46:30','public/images/Q7tE9YVjQo4mSfdw3FZOEc92gbpC1sGZCgOWdLxL.jpg'),(37,'éclair de chocolate','Doces','Pastéis Diversos',0.90,1,'2021-05-30 11:47:20','2021-05-30 11:47:20','public/images/tWLlougm2qQogYamMxNQy8H2vKExGUWBRapsduSj.jpg'),(38,'mil folhas','Doces','Pastéis Diversos',0.90,1,'2021-05-30 11:48:03','2021-05-30 11:48:03','public/images/fKKd6oLLw3ozuwt4P9L7PqXz3ejO7V8D0VBg9wc9.jpg'),(39,'pastel de nata pequeno','Doces','Pastéis Miniatura Diversos',0.60,1,'2021-05-30 11:48:53','2021-05-30 11:48:53','public/images/Ik2o7dznvJT5ekPtWYiSw14e32Sz0XssagJPPBFX.jpg'),(40,'queijadas','Doces','Pastéis Diversos',0.90,1,'2021-05-30 11:49:15','2021-05-30 11:49:15','public/images/8NbvTf9KZA0U6siiE7ELPu0bL4qp7bQYsekqbkeR.jpg'),(41,'escarpiada','Doces','Sobremesas',6.00,1,'2021-05-30 11:53:12','2021-05-30 12:16:39','public/images/fwIJ0VU8VyCsm7HZVH9NonytA3eZ7XPSzTYDU6E4.jpg'),(42,'pão de deus','Doces','Sobremesas',6.00,1,'2021-05-30 11:53:54','2021-05-30 11:53:54','public/images/c8owoevTA3JESBVQ1UlVvPPbqP8Dvl8DAJZHpfxO.jpg'),(43,'pão de ló buraco','Doces','Sobremesas',6.00,1,'2021-05-30 11:54:35','2021-05-30 11:54:35','public/images/eP5GOX1yMcgHOZpsvWmPBSpFwy1mgWsL2BRa51AQ.jpg'),(44,'pudim de pão','Doces','Sobremesas',6.00,1,'2021-05-30 11:54:57','2021-05-30 11:54:57','public/images/AZFMROOxWEA0wqcm4MmvnDv8QRYTZw22pCegVgkf.jpg'),(45,'broa pequena','Padaria','Broa',0.60,1,'2021-05-30 11:59:25','2021-05-30 11:59:25','public/images/JH17hRMNfWdWy4A3vGnsXz33cbIIKic2baFSqtXn.jpg'),(46,'pão de bico','Padaria','Pão',0.14,1,'2021-05-30 12:01:28','2021-05-30 12:01:28','public/images/mXeLjjI3KYKVfYldT2yJPzdisyVH95fZqc9qDqkV.jpg'),(47,'pão de mistura','Padaria','Pão',0.14,1,'2021-05-30 12:01:49','2021-05-30 12:01:49','public/images/HI392eZR3f6L8Ih7IneX6bJb4G6ZwDYfgmwUo3gb.jpg'),(48,'pão de 0.5kg branco','Padaria','Pão 0,5',0.50,1,'2021-05-30 12:04:05','2021-05-30 12:04:53','public/images/59wJtR5jgKPvlZdcWQm2vczSLXzZNzODPD9fdEr6.jpg'),(49,'pão de 0.5kg de mistura','Padaria','Pão 0,5',0.50,1,'2021-05-30 12:04:36','2021-05-30 12:04:36','public/images/J1ST36x4weHp8h9Kj5Pgkg7nugdKMBc9fk4p3mPj.jpg'),(50,'pão de forma','Padaria','Pão 0,5',0.50,1,'2021-05-30 12:05:17','2021-05-30 12:05:17','public/images/lpfaFMiJsRtMh5gKKR856vzf7UBmrMekg3dQFVT5.jpg'),(51,'bolo de batizado','Produtos ao Peso','Bolos de Aniversário',10.00,1,'2021-05-30 12:13:06','2021-05-30 12:13:37','public/images/NAJJNlJNW7lM6BqfMdazdslvP69bi2DM6nzrDIxj.jpg'),(52,'bolo personalizado','Produtos ao Peso','Bolos de Aniversário',10.00,1,'2021-05-30 12:15:41','2021-05-30 12:15:41','public/images/jjavmtJ4qbu4QYWCYL1khRf5VqarnekkTVAoD9YS.jpg'),(53,'profiteroles','Produtos ao Peso','Sobremesas ao Peso',14.00,1,'2021-05-30 12:18:04','2021-05-30 12:18:04','public/images/Mn1FeoPL2TwevfdSYfYtC3G9dZA5G6ycLcs2lUIL.jpg'),(54,'parisbrest','Produtos ao Peso','Sobremesas ao Peso',14.00,1,'2021-05-30 12:18:32','2021-05-30 12:18:32','public/images/Jy4HMVGEYLHSrWnM1hqViu0TooZnnAaupv50a1ij.jpg'),(55,'torta de laranja','Produtos ao Peso','Sobremesas ao Peso',14.00,1,'2021-05-30 12:19:25','2021-05-30 12:19:25','public/images/UEzsuIbzcDyCvYJygOsnOjXHg7C4eXi0NoQbTxFb.jpg'),(56,'folhado misto','Salgados','Pastéis Diversos',1.00,1,'2021-05-30 12:35:48','2021-05-30 12:35:48','public/images/JeRgfvuNIhiwMmowxeTDs0msUkkOspdprW3NPi9x.jpg'),(57,'pizza de kebab','Salgados','Pizzas, Bolas e Quiches',10.00,1,'2021-05-30 12:37:13','2021-05-30 12:37:13','public/images/alf152l41VtVwlwa7ylmhBEGFDuxCJIvXQAjNnVh.jpg'),(58,'pizza mista','Salgados','Pizzas, Bolas e Quiches',10.00,1,'2021-05-30 12:37:41','2021-05-30 12:37:41','public/images/jMHhbN2Y80ZZJ4piQxmh0pwgtk88IEQadDXkwxHv.jpg'),(59,'bolos de bacalhau','Salgados','Salgados Miniatura Diversos',0.45,1,'2021-05-30 12:42:05','2021-05-30 12:42:05','public/images/K712TOT3ankn05CHgo9OQpG05eKnu02IirCZeLkt.jpg'),(60,'croquetes','Salgados','Salgados Miniatura Diversos',0.45,1,'2021-05-30 12:42:45','2021-05-30 12:42:45','public/images/Y0Pg5OLWgiW4BAz3HKLw76IeUUP13f5b4BPvuW62.jpg'),(61,'húngaro de chocolate','Produtos ao Peso','Sortidos',14.00,1,'2021-05-30 12:43:27','2021-05-30 12:43:27','public/images/71FCsH4npN6bEtemjY7YnXLzAA7ERdOKumYs3twK.jpg'),(62,'sortidos de doce de ovos','Produtos ao Peso','Sortidos',14.00,1,'2021-05-30 12:44:25','2021-05-30 12:44:25','public/images/LXRhzZjUBKvQmZJFyNJckm4y6dggEobuq2XzbHrG.jpg');
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
  `nif` int DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@cantinhodoce.com',NULL,NULL,NULL,NULL,1,NULL,'$2y$10$F3XdH1umaJm3K3q2DXTeweP5i8LdhTJ4UMG3t4qepjNwVkNQoMp2i',NULL,'2021-05-13 14:15:42','2021-05-13 14:15:42',0),(2,'User','normal@cantinhodoce.com',NULL,NULL,NULL,NULL,0,NULL,'$2y$10$Ehf4p3h98jh.iIoTNNnrmuu3Ntm8DKZ618xht.AHHyFLuJ8BsoSi.',NULL,'2021-05-13 14:15:42','2021-05-13 14:15:42',0),(3,'Luísa Olá','luendres@gmail.com','934283746','Por ai','3030303','Coimbra',NULL,NULL,'$2y$10$SObg7qnJn9nUoUUjLXjJDOE/bEoWSO6R8mz8ZB2jT1RUlm3t3G4O2',NULL,'2021-05-13 14:54:30','2021-05-30 20:05:23',5),(4,'Teste','teste@ad.com',NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$KexqyrkqcQ8x/fCmhZn3NetokvFfA4NYDyYx6Mr9CkpZDdMZz67HO',NULL,'2021-05-22 17:12:12','2021-05-22 17:12:12',0),(5,'teste','teste@teste.com',NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$7p18nCId/aCcx9aVXZ9y4eN5dY9709OtWNnHdTe4glwrH9DG1J5dG',NULL,'2021-05-22 17:25:47','2021-05-22 17:25:47',0),(6,'ultimo','ultimo@ultimo.com',NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$zkOStZDmuio8hyBvOP3/6uncEv6abRiWgir/.HtWPfUUsPzBx00cu',NULL,'2021-05-22 17:42:52','2021-05-22 17:42:52',0),(7,'Maria','mariiajmsantoos@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$5naNoDrguWKygrr9gaNwgeMoY7x0TdDeW5N0tyS/dgN5R9U/kJjhK',NULL,'2021-05-28 08:52:57','2021-05-28 08:52:57',0),(9,'Nome do admin','admin2@cantinhodoce.com',NULL,NULL,NULL,NULL,1,'2021-05-27 23:00:00','$2y$10$YpTrd0kbrZIM5tqYvs2vkuJ3C8YG/WsuF20Ndr3rez5ipk5xMcoCW',NULL,'2021-05-28 15:27:30','2021-05-28 15:27:30',0),(10,'Sofia','sofia@teste.com',NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$O5EMoH08zkDbui3KBiT2ZOMFfaYiBZHWOylTfzMWCtGYSnBhJtSOK',NULL,'2021-05-30 11:29:44','2021-05-30 11:29:44',0),(11,'Ana','ana@teste.com',NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$EstpiGbSpyGVqHfFF.BzwOG4qPAnpFv/kesR.oE5ccixezrbL.yWG',NULL,'2021-05-30 20:37:05','2021-05-30 20:37:05',0),(12,'Pedro','pedro@teste.com','932544872','Rua Informática, 27','3030210','Ega',NULL,NULL,'$2y$10$t1NT4opDweCQFCxowysL..3w.fec3VmrICBF43yoV3wLHQ6aMtHNu',NULL,'2021-05-30 21:06:30','2021-05-30 21:08:44',0);
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

-- Dump completed on 2021-05-30 23:52:19

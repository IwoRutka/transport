-- MySQL dump 10.13  Distrib 8.0.26, for Linux (x86_64)
--
-- Host: localhost    Database: transport
-- ------------------------------------------------------
-- Server version	8.0.26-0ubuntu0.20.04.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `address`
--

DROP TABLE IF EXISTS `address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `address` (
  `id` int NOT NULL AUTO_INCREMENT,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `address`
--

LOCK TABLES `address` WRITE;
/*!40000 ALTER TABLE `address` DISABLE KEYS */;
INSERT INTO `address` VALUES (1,'Polska','PL','80-394','Gdańsk'),(2,'Niemcy','DE','53111','Bonn');
/*!40000 ALTER TABLE `address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `articles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(1240) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_date` datetime NOT NULL,
  `added_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,'fototimocom.jpg','Dzięki aplikacjom Frachty i Powierzchnie ładunkowe działasz szybko i efektywnie na rynku spot niezależnie od tego czy jesteś usługodawcą transportowym, czy zleceniodawcą. Dzięki nowoczesnej giełdzie ładunków znajdziesz kontrahentów, których szukasz. Twoje korzyści: zyskujesz nowe możliwości biznesowe, zwiększasz obroty i zmniejszasz liczbę pustych przebiegów. Skorzystaj również z naszych ofert specjalnych dla dostawców usług kurierskich (KEP) lub znajdź fracht albo przestrzeń ładunkową przy pomocy naszej aplikacji mobilnej.','2021-10-16 22:44:00','iwo','Timocom - Lider wśród giełd ładunków'),(2,'fotodkvetoll.jpg','Od 4 października można wybrać kartę paliwową DKV jako metodę rozliczania opłat drogowych e-Toll. To ważna zmiana, bo zwiększa bezpieczeństwo i wygodę uiszczania tych opłat: umożliwia automatyczne doładowania konta e-Toll, a płatności sprowadza do jednej faktury na kilka tygodni. W relacjach z e-Toll, karta paliwowa to pierwsze rozwiązanie, które wspomaga na równi profesjonalnych przewoźników, jak i użytkowników osobowych aut firmowych. Samochody osobowe korzystają dzisiaj z aplikacji e-Toll, która wymusza indywidualne regulowanie płatności. Teraz, dzięki akceptacji karty paliwowej DKV, kierowcy będą mogli zautomatyzować swoje rozliczenia i zapewnić wygodne fakturowanie.  Wpłynie to na łatwiejsze prowadzenie biznesu, bo przy pomocy jednej karty paliwowej przedsiębiorca będzie mógł zapłacić za: paliwo, opłaty drogowe, akcesoria, warsztaty, myjnie, parkingi czy akcesoria na stacjach. A tym samym, wliczyć sobie w koszty prowadzenia działalności wszystkie powyższe pozycje – co w przypadku rozdrobnionych płatności bardzo rzadko ma miejsce.','2021-10-15 21:59:00','Iwo','DKV CARD akceptowana jako metoda płatności za e-Toll'),(4,'fotostenaline.jpg','Operator promowy informuje, że w 2022 roku planuje wprowadzić dwa nowoczesne promy Stena Scandica i Stena Baltica o długości 222 metrów na linię Gdynia-Karlskrona. Dla klientów frachtowych Stena Line oznacza to wzrost zdolności przewozowej połączenia o 30%, a dla pasażerów – nową jakość podróżowania.  Stena Line obsługuje linię promową między Gdynią a Karlskroną w Szwecji od ponad 26 lat. W tym czasie statki z charakterystycznym czerwonym kominem przewiozły ponad 10 milionów pasażerów i blisko 2 miliony ciężarówek. Połączenie ma status Autostrady Morskiej i jest dziś ważną częścią europejskiej sieci logistycznej a także ma znaczenie dla turystyki w Polsce i Szwecji. W ciągu ostatnich dziesięciu lat wzrosty przewozów na tej linii sięgnęły 60%. Trasa jest dziś jednym z najważniejszych połączeń promowych w sieci Stena Line z prawie 2000 rejsów między Gdynią a Karlskroną rocznie.','2021-10-17 23:17:00','Iwo','Stena Line kontynuuje rozwój swoich połączeń na Morzu Bałtyckim'),(5,'fotoznaki.jpg','Celem projektu jest poprawa bezpieczeństwa przemieszczania się po drogach publicznych poprzez opracowanie koncepcyjne, budowę i badania testowe nowego rodzaju inteligentnych znaków drogowych, które umożliwią zapobieganie najbardziej powszechnym kolizjom na drogach szybkiego ruchu. Znaki drogowe: stojące, wiszące i mobilne, które wyświetlają, aktualizowaną w czasie rzeczywistym i określaną samoczynnie, zalecaną prędkość jazdy. Jest to możliwe dzięki temu, że wbudowany w znaki moduł elektroniczny umożliwia wielomodalny pomiar warunków ruchu: wizyjny i akustyczny, a także bieżącą analizę warunków meterologicznych na drodze. Realizacja projektu jest już za nami, system przeszedł pomyślnie testy i możemy teraz realnie myśleć o wdrożeniu go na rynek – informował prof. Andrzej Czyżewski, kierownik Katedry Systemów Multimedialnych Politechniki Gdańskiej (WETI) i współautor projektu INZNAK – systemu inteligentnych znaków drogowych.','2021-12-18 08:44:00','Iwo','Będą inteligentne znaki drogowe');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `capacity`
--

DROP TABLE IF EXISTS `capacity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `capacity` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tons` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `capacity`
--

LOCK TABLES `capacity` WRITE;
/*!40000 ALTER TABLE `capacity` DISABLE KEYS */;
INSERT INTO `capacity` VALUES (1,'3,5'),(2,'5'),(3,'9'),(4,'12'),(5,'16'),(6,'19'),(7,'21'),(8,'24');
/*!40000 ALTER TABLE `capacity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contractor`
--

DROP TABLE IF EXISTS `contractor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contractor` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contractor`
--

LOCK TABLES `contractor` WRITE;
/*!40000 ALTER TABLE `contractor` DISABLE KEYS */;
INSERT INTO `contractor` VALUES (1,'PKS Gdańsk-Oliwa','Polska','80-394','Gdańsk','Kołobrzeska','28','5841031823','+48 58 76 99 900','sekretariat@pks-sa.com');
/*!40000 ALTER TABLE `contractor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_migration_versions`
--

LOCK TABLES `doctrine_migration_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_migration_versions` DISABLE KEYS */;
INSERT INTO `doctrine_migration_versions` VALUES ('DoctrineMigrations\\Version20211017150905','2021-10-17 17:09:40',267),('DoctrineMigrations\\Version20211017162521','2021-10-17 18:25:32',878),('DoctrineMigrations\\Version20211017163217','2021-10-17 18:32:25',867),('DoctrineMigrations\\Version20211017172923','2021-10-17 19:29:31',131),('DoctrineMigrations\\Version20211017203508','2021-10-17 22:35:17',162);
/*!40000 ALTER TABLE `doctrine_migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loads`
--

DROP TABLE IF EXISTS `loads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `loads` (
  `id` int NOT NULL AUTO_INCREMENT,
  `loading_id` int NOT NULL,
  `unloading_id` int NOT NULL,
  `capacity_id` int NOT NULL,
  `vehicle_type_id` int NOT NULL,
  `added_by_id` int NOT NULL,
  `create_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_782DA536FE3B4E08` (`loading_id`),
  UNIQUE KEY `UNIQ_782DA536D82FABCB` (`unloading_id`),
  UNIQUE KEY `UNIQ_782DA53666B6F0BA` (`capacity_id`),
  UNIQUE KEY `UNIQ_782DA536DA3FD1FC` (`vehicle_type_id`),
  UNIQUE KEY `UNIQ_782DA53655B127A4` (`added_by_id`),
  CONSTRAINT `FK_782DA53655B127A4` FOREIGN KEY (`added_by_id`) REFERENCES `contractor` (`id`),
  CONSTRAINT `FK_782DA53666B6F0BA` FOREIGN KEY (`capacity_id`) REFERENCES `capacity` (`id`),
  CONSTRAINT `FK_782DA536D82FABCB` FOREIGN KEY (`unloading_id`) REFERENCES `address` (`id`),
  CONSTRAINT `FK_782DA536DA3FD1FC` FOREIGN KEY (`vehicle_type_id`) REFERENCES `vehicle_type` (`id`),
  CONSTRAINT `FK_782DA536FE3B4E08` FOREIGN KEY (`loading_id`) REFERENCES `address` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loads`
--

LOCK TABLES `loads` WRITE;
/*!40000 ALTER TABLE `loads` DISABLE KEYS */;
INSERT INTO `loads` VALUES (1,1,2,7,1,1,'2021-10-17 18:00:00');
/*!40000 ALTER TABLE `loads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vehicle_type`
--

DROP TABLE IF EXISTS `vehicle_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vehicle_type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehicle_type`
--

LOCK TABLES `vehicle_type` WRITE;
/*!40000 ALTER TABLE `vehicle_type` DISABLE KEYS */;
INSERT INTO `vehicle_type` VALUES (1,'standard'),(2,'low deck');
/*!40000 ALTER TABLE `vehicle_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vehicles`
--

DROP TABLE IF EXISTS `vehicles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vehicles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `loading_id` int NOT NULL,
  `capacity_id` int NOT NULL,
  `vehicle_type_id` int NOT NULL,
  `added_by_id` int NOT NULL,
  `available_from` date NOT NULL,
  `available_until` date NOT NULL,
  `create_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1FCE69FAFE3B4E08` (`loading_id`),
  UNIQUE KEY `UNIQ_1FCE69FA66B6F0BA` (`capacity_id`),
  UNIQUE KEY `UNIQ_1FCE69FADA3FD1FC` (`vehicle_type_id`),
  UNIQUE KEY `UNIQ_1FCE69FA55B127A4` (`added_by_id`),
  CONSTRAINT `FK_1FCE69FA55B127A4` FOREIGN KEY (`added_by_id`) REFERENCES `contractor` (`id`),
  CONSTRAINT `FK_1FCE69FA66B6F0BA` FOREIGN KEY (`capacity_id`) REFERENCES `capacity` (`id`),
  CONSTRAINT `FK_1FCE69FADA3FD1FC` FOREIGN KEY (`vehicle_type_id`) REFERENCES `vehicle_type` (`id`),
  CONSTRAINT `FK_1FCE69FAFE3B4E08` FOREIGN KEY (`loading_id`) REFERENCES `address` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehicles`
--

LOCK TABLES `vehicles` WRITE;
/*!40000 ALTER TABLE `vehicles` DISABLE KEYS */;
INSERT INTO `vehicles` VALUES (1,1,5,2,1,'2021-10-20','2021-10-23','2021-10-17 18:00:00');
/*!40000 ALTER TABLE `vehicles` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-04-19  9:37:47

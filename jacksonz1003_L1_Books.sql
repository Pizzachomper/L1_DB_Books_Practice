-- mysqldump-php https://github.com/ifsnop/mysqldump-php
--
-- Host: localhost	Database: jacksonz1003_L1_Books
-- ------------------------------------------------------
-- Server version 	8.0.34-0ubuntu0.20.04.1
-- Date: Thu, 07 Sep 2023 21:56:07 +0000

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40101 SET @OLD_AUTOCOMMIT=@@AUTOCOMMIT */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `book_reviews`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book_reviews` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Author` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Genre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Rating` int NOT NULL,
  `Review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book_reviews`
--

LOCK TABLES `book_reviews` WRITE;
/*!40000 ALTER TABLE `book_reviews` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `book_reviews` VALUES (1,'Hitchiker\'s Guide to the Galaxy','Douglas Adams','Humour',3,'The book is not as good as its cult status would lead one to believe. Whilst it has some memorable quotes and a number of cool ideas the overall plot is weak and often the jokes / humour are simply not all that funny. This book may well appeal to a younger audience but for me it was quite a disappointment.'),(2,'Saturn Run','John Sandford and Ctein','Sci Fi',4,'The story is fast moving and compelling. The characters are well developed and as a reader I became quite invested in their personal stories. Whilst the book took quite a while to read, the journey was worthwhile. The Physics underlying the novel has been well researched and this helps to make the story both interesting and believable.'),(3,'Don\'t Make Me Think','Steve Krug','Non Fiction',5,'Don\'t Make me Think is a fun, practical book that describes the need for frequent, informal testing to ensure that an interface (such as a website) is easy to use. The book\'s informal style is appealing and whilst some of the material is out of date, most of the information easy to understand and implement.  This is a \'must read\' for anyone involved with the design or development of websites / interfaces.'),(4,'This was a man','Jeffrey Archer','Historical Fiction',4,'This was a thoroughly enjoyable read that provided a deeply satisfying ending to the Clifton Chronicles.  Whilst the story is fictitious, the setting, believable characters and tight writing made it feel as if it could have been real.'),(5,'Honour\'s knight','Rachel Bach','Sci Fi',3,'This is the sequel to \'Fortune\'s Pawn\' and it is every bit as enjoyable as its predecessor.  The premise is fun (but unlikely).  This is a very light read and is the literary equivalent of junk food - enjoyable to consume but not all that beneficial for one\'s intellect.  Bach is best enjoyed in moderation.'),(6,'Fortune\'s Pawn','Rachel Bach','Sci Fi',3,'A great light read - perfect for long journeys or when one is too tired for something more substantial.  Whilst the novel was fun, the story is also firmly in the \'forgettable\' category.'),(7,'Camino Island','Jhon Grisham','Thriller',2,'');
/*!40000 ALTER TABLE `book_reviews` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `book_reviews` with 7 row(s)
--

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET AUTOCOMMIT=@OLD_AUTOCOMMIT */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on: Thu, 07 Sep 2023 21:56:07 +0000

-- MySQL dump 10.13  Distrib 8.0.27, for macos11.6 (x86_64)
--
-- Host: localhost    Database: sim_sekolah
-- ------------------------------------------------------
-- Server version	8.0.27

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
-- Table structure for table `angkatan`
--

DROP TABLE IF EXISTS `angkatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `angkatan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `angkatan`
--

LOCK TABLES `angkatan` WRITE;
/*!40000 ALTER TABLE `angkatan` DISABLE KEYS */;
INSERT INTO `angkatan` VALUES (1,'2021','0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `angkatan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kelas`
--

DROP TABLE IF EXISTS `kelas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kelas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `angkatan_id` int NOT NULL,
  `created_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  KEY `angkatan_id` (`angkatan_id`),
  CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`angkatan_id`) REFERENCES `angkatan` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kelas`
--

LOCK TABLES `kelas` WRITE;
/*!40000 ALTER TABLE `kelas` DISABLE KEYS */;
/*!40000 ALTER TABLE `kelas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kelas_siswa`
--

DROP TABLE IF EXISTS `kelas_siswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kelas_siswa` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kelas_id` int NOT NULL,
  `siswa_id` int NOT NULL,
  `created_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  KEY `kelas_id` (`kelas_id`),
  KEY `siswa_id` (`siswa_id`),
  CONSTRAINT `kelas_siswa_ibfk_1` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`),
  CONSTRAINT `kelas_siswa_ibfk_2` FOREIGN KEY (`siswa_id`) REFERENCES `siswa` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kelas_siswa`
--

LOCK TABLES `kelas_siswa` WRITE;
/*!40000 ALTER TABLE `kelas_siswa` DISABLE KEYS */;
/*!40000 ALTER TABLE `kelas_siswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` VALUES (1,'Admin'),(3,'Siswa');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `siswa`
--

DROP TABLE IF EXISTS `siswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `siswa` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nis` int NOT NULL,
  `nama` varchar(150) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(150) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `created_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `siswa`
--

LOCK TABLES `siswa` WRITE;
/*!40000 ALTER TABLE `siswa` DISABLE KEYS */;
/*!40000 ALTER TABLE `siswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `role_id` int NOT NULL,
  `created_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Admin','admin@admin.com','$2a$10$INKwaFg7UIy9mawq8C0KSO8PXF9XuRdn5uYgsipi.CAIfCexnYNxC',1,'2022-07-13 15:02:08','2022-03-08 21:56:23'),(4,'Test','test1@test.com','$2y$10$lvdqY.JF00khscUxAC7l9.2vGjj6VIAZRxO/DZ5k8zmylUZ.3D3S6',1,'2022-07-24 23:09:12','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-25  6:17:18

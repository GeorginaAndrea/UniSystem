-- MySQL dump 10.13  Distrib 8.0.41, for Win64 (x86_64)
--
-- Host: localhost    Database: universidadtestprueba2
-- ------------------------------------------------------
-- Server version	8.0.41

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
-- Table structure for table `alumno`
--

DROP TABLE IF EXISTS `alumno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alumno` (
  `ClaveAlumno` varchar(16) NOT NULL,
  `ApePaterno` varchar(40) NOT NULL,
  `ApeMaterno` varchar(40) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Curp` varchar(18) NOT NULL,
  `Genero` char(1) NOT NULL,
  `EstCivil` varchar(20) NOT NULL,
  `Estado` varchar(15) NOT NULL,
  `Municipio` varchar(40) NOT NULL,
  `Colonia` varchar(50) NOT NULL,
  `Direccion` varchar(150) NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `Celular` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `FechaNacimiento` date DEFAULT NULL,
  `ClaveCarrera` int NOT NULL,
  `FechaIngreso` date NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`ClaveAlumno`),
  KEY `ClaveCarrera` (`ClaveCarrera`),
  KEY `fk_alumno_user` (`user_id`),
  CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`ClaveCarrera`) REFERENCES `carrera` (`ClaveCarrera`),
  CONSTRAINT `fk_alumno_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumno`
--

LOCK TABLES `alumno` WRITE;
/*!40000 ALTER TABLE `alumno` DISABLE KEYS */;
INSERT INTO `alumno` VALUES ('ALU-20240001','González','Pérez','Alejandro','GOPA19980101HDFLRR','M','Soltero','México','Coyoacán','Del Valle','Av. Coyoacán 500','5551234567','5559876543','agonzalez@estudiante.edu','1998-01-01',6,'2024-01-15','2025-04-30 10:07:32','2025-05-14 00:44:01',NULL),('ALU-20240002','López','Martínez','Fernanda','LOMF19990202MDFLTR','F','Soltera','México','Toluca','Potinaspak','Calle Independencia 213','5552345678','5558765432','flopez@estudiante.edu','1999-02-02',2,'2024-01-15','2025-04-30 10:07:32','2025-05-06 06:01:24',NULL),('ALU-20240003','Ramírez','Sánchez','Diego','RASD20000303HDFLNR','M','Soltero','México','Benito Juárez','Narvarte','Av. Universidad 300','5553456789','5557654321','dramirez@estudiante.edu','2000-03-03',2,'2024-01-15','2025-04-30 10:07:32','2025-04-30 10:07:32',NULL),('ALU-20240004','Torres','García','Valeria','TOGV20010404MDFLTR','F','Soltera','México','Naucalpan','Satélite','Paseo de la Reforma 400','5554567890','5556543210','vtorres@estudiante.edu','2001-04-04',4,'2024-01-15','2025-04-30 10:07:32','2025-04-30 10:07:32',NULL),('ALU-20240005','Vargas','Hernández','Santiago','VAHS20020505HDFLRR','M','Soltero','México','Miguel Hidalgo','Polanco','Av. Presidente Masaryk 500','5555678901','5555432109','svargas@estudiante.edu','2002-05-05',5,'2024-01-15','2025-04-30 10:07:32','2025-04-30 10:07:32',NULL),('ALU-20240006','Castro','Díaz','Camila','CADC20030606MDFLTR','F','Soltera','México','Atizapán','Lomas Verdes','Av. Lomas Verdes 600','5556789012','5554321098','ccastro@estudiante.edu','2003-06-06',6,'2024-01-15','2025-04-30 10:07:32','2025-04-30 10:07:32',NULL),('ALU-20240007','Ortega','Flores','Javier','ORFJ20040707HDFLNR','M','Soltero','México','Álvaro Obregón','San Ángel','Av. Revolución 700','5557890123','5553210987','jortega@estudiante.edu','2004-07-07',7,'2024-01-15','2025-04-30 10:07:32','2025-04-30 10:07:32',NULL),('ALU-20240008','Mendoza','Ruiz','Daniela','MERD20050808MDFLTR','F','Soltera','México','Huixquilucan','Interlomas','Paseo Interlomas 800','5558901234','5552109876','dmendoza@estudiante.edu','2005-08-08',8,'2024-01-15','2025-04-30 10:07:32','2025-04-30 10:07:32',NULL),('ALU-20240009','Silva','Jiménez','Emilio','SIJE20060909HDFLRR','M','Soltero','México','Tlalpan','Tlalpan Centro','Calzada de Tlalpan 900','5559012345','5551098765','esilva@estudiante.edu','2006-09-09',9,'2024-01-15','2025-04-30 10:07:32','2025-04-30 10:07:32',NULL),('ALU-20240010','Ríos','Moreno','Renata','RIMR20071010MDFLTR','F','Soltera','México','Ecatepec','San Cristóbal','Av. Central 1000','5550123456','5550987654','rrios@estudiante.edu','2007-10-10',10,'2024-01-15','2025-04-30 10:07:32','2025-04-30 10:07:32',NULL),('ALU0CXNAL9Y','López','Martínes','Jorge','WER34RTI98HJKLO0P2','F','Soltero','Chiapas','Tuxtla','Francisco I. Madero','Calle Independencia 200','9864751236','9614857236','jorgeg@edu.com','2000-03-25',9,'2025-05-13','2025-05-13 23:24:26','2025-05-13 23:45:57',53),('ALU4GU0MH5H','Hernández','Hernández','Adrian','ADRHERNHERNTY78IOP','M','Chis.','Chis.','TUXTLA','Las palmas','35 Los Flamboyanes','9611095231','9611095231','adrian@gmail.com','2000-08-25',7,'2025-05-07','2025-05-07 14:07:46','2025-05-07 14:09:15',NULL),('ALUBDVULIMQ','López','Martínez','Sara','WER34RTI98HJKLO0P9','M','Casado','Chiapas','Tuxtla','Francisco I. Madero','Calle Independencia 200','9864751236','9614857236','sara@edu.com','1998-08-12',5,'2025-05-13','2025-05-13 22:43:53','2025-05-13 22:54:12',52),('ALUBWW4PWKM','Méndez','Hernández','Georgina','AWERTYUIOLP987JMK9','F','Chis.','Chis.','TUXTLA','Las palmas','35 Los Flamboyanes','9617894563','9611891216','gina4@gmail.com','1998-07-23',8,'2025-05-02','2025-05-02 16:15:08','2025-05-02 16:15:08',NULL),('ALUEOEDT5VO','Méndez','Hernández','Georgina','AWERTYUIOLP987JMKw','F','Chis.','Chis.','TUXTLA','Las palmas','35 Los Flamboyanes','9614235876','9611095231','gina23@gmail.com','1998-08-09',6,'2025-05-02','2025-05-02 16:42:39','2025-05-02 16:42:39',NULL),('ALUFTD4G9IT','Méndez','Hernández','Georgina','AWERTYUIOLP987JMK6','F','Chis.','Chis.','TUXTLA','Las palmas','35 Los Flamboyanes','9611095321','9611891216','gina5@gmail.com','1998-07-14',4,'2025-05-02','2025-05-02 16:28:34','2025-05-02 16:28:34',NULL),('ALUGQZSU9Y7','López','Martínez','Diego','WER34RTI98HJKLO0PI','M','Soltero','Chiapas','Tuxtla','Francisco I. Madero','Calle Independencia 200','9864751236','9614857236','diego@edu.com','1998-08-12',1,'2025-05-13','2025-05-13 22:29:38','2025-05-13 22:29:38',51),('ALUGZIR8IBK','Méndez','Hernández','Georgina','AWERTYUIOLP987JMKr','F','Chis.','Chis.','TUXTLA','Las palmas','35 Los Flamboyanes','9611095321','9611891216','gina11@gmail.com','1997-01-21',8,'2025-05-02','2025-05-02 16:35:40','2025-05-02 16:35:40',NULL),('ALUI8DJIUJB','Méndez','Hernández','José Román','AWERTYUIOLP987JMK5','M','Chis.','Chis.','TUXTLA','Las palmas','35 Los Flamboyanes','9611095321','9647863256','jose.roman@edu.com','2000-07-16',10,'2025-05-08','2025-05-08 22:56:09','2025-05-08 22:56:09',NULL),('ALUNY3HL2L2','Fernandez','Solis','Juan','WER34RTI98HJKLO0K3','M','Soltero','Chiapas','San juan chamula','San Francisco','Calle Pepsi 14','9687415847','9684576352','juanSolis@unach.mx','2003-08-12',3,'2025-05-13','2025-05-14 00:41:35','2025-05-14 00:41:35',56),('ALUURZ8J1S0','Armando','Ramos','Flores','WER34RTI98HJKLO0K5','M','Casado','Chiapas','San juan chamula','cocacola','Calle Pepsi 14','9687415847','9684576352','nosoyflorista@unach.mx','2003-07-13',8,'2025-05-13','2025-05-13 23:52:16','2025-05-13 23:52:16',55);
/*!40000 ALTER TABLE `alumno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
INSERT INTO `cache` VALUES ('laravel_cache_00c14fb630fd2ee499f943c7f675c0e7','i:1;',1747434344),('laravel_cache_00c14fb630fd2ee499f943c7f675c0e7:timer','i:1747434344;',1747434344),('laravel_cache_11d467acc88c98f408682cefcde30a2d','i:1;',1747151309),('laravel_cache_11d467acc88c98f408682cefcde30a2d:timer','i:1747151309;',1747151309),('laravel_cache_1b03ec890866afa02e1e294ca5fb5790','i:1;',1747258370),('laravel_cache_1b03ec890866afa02e1e294ca5fb5790:timer','i:1747258370;',1747258370),('laravel_cache_1eb4487cbadb76c3032e7edc6145abe8','i:1;',1747152214),('laravel_cache_1eb4487cbadb76c3032e7edc6145abe8:timer','i:1747152214;',1747152214),('laravel_cache_2e9b2fafc03fe602950649eeb100a8ba','i:1;',1747158874),('laravel_cache_2e9b2fafc03fe602950649eeb100a8ba:timer','i:1747158874;',1747158874),('laravel_cache_38ec0bbe7a7a09ab86565f2cdacb0898','i:1;',1747254260),('laravel_cache_38ec0bbe7a7a09ab86565f2cdacb0898:timer','i:1747254260;',1747254260),('laravel_cache_6cdc81f0c5206aa68eb4de3043d7f585','i:1;',1747430481),('laravel_cache_6cdc81f0c5206aa68eb4de3043d7f585:timer','i:1747430481;',1747430481),('laravel_cache_793714839e9546edee0ea86bfd883f3a','i:2;',1747384294),('laravel_cache_793714839e9546edee0ea86bfd883f3a:timer','i:1747384294;',1747384294),('laravel_cache_8c26e195e32328b3845db3d6ce59ff43','i:2;',1747430527),('laravel_cache_8c26e195e32328b3845db3d6ce59ff43:timer','i:1747430527;',1747430527),('laravel_cache_9db835caf46ba43c8a1bd71a34e82301','i:1;',1746941985),('laravel_cache_9db835caf46ba43c8a1bd71a34e82301:timer','i:1746941985;',1746941985),('laravel_cache_9e0296975d4ded99eeb892f1939e6f3c:timer','i:1747434309;',1747434309),('laravel_cache_a92010ec111034679263e55bb1c05abc','i:2;',1747154745),('laravel_cache_a92010ec111034679263e55bb1c05abc:timer','i:1747154745;',1747154745),('laravel_cache_c553985b9d7d7eb0cb88bded62eadbd2','i:1;',1747254225),('laravel_cache_c553985b9d7d7eb0cb88bded62eadbd2:timer','i:1747254225;',1747254225),('laravel_cache_c7bb03a36301cb861d64bee367e82666','i:1;',1747151262),('laravel_cache_c7bb03a36301cb861d64bee367e82666:timer','i:1747151262;',1747151262),('laravel_cache_d582e41306cbaba182a6f0a8ce82d3d5','i:1;',1747151292),('laravel_cache_d582e41306cbaba182a6f0a8ce82d3d5:timer','i:1747151292;',1747151292),('laravel_cache_f0ceb5c34480114622178c94be4df72b','i:1;',1747434208),('laravel_cache_f0ceb5c34480114622178c94be4df72b:timer','i:1747434208;',1747434208),('laravel_cache_fortify.2fa_codes.00bfec675a3f7116d5ebdeee8f3f9ef6','i:58238581;',1747157507),('laravel_cache_fortify.2fa_codes.22ebf4c7b8502948debc587465b2fb1c','i:58238239;',1747147232),('laravel_cache_fortify.2fa_codes.33f3d696acf0120a17236ffb930a9a13','i:58238276;',1747148347),('laravel_cache_fortify.2fa_codes.52045f5397f2723d3aac05760908336b','i:58238881;',1747166503),('laravel_cache_fortify.2fa_codes.541e64ed28a597dfc3aae4f47ffd2e61','i:58241948;',1747258524),('laravel_cache_fortify.2fa_codes.57ff0de28727a37e8aeef1be5134c9c3','i:58238359;',1747150851),('laravel_cache_fortify.2fa_codes.86c4bbb1867610bd86c50ef7e2908d23','i:58238240;',1747147276),('laravel_cache_fortify.2fa_codes.a417ed6d9df69eb85308e455bafdd936','i:58238286;',1747148660),('laravel_cache_fortify.2fa_codes.bde26dbb6873a8f46fd751ea3da023ce','i:58238714;',1747161485),('laravel_cache_fortify.2fa_codes.cb75a542b9277b58cab382c62547570c','i:58247810;',1747434367),('laravel_cache_fortify.2fa_codes.d530896aab9a43acdb77eb8cdacd6c27','i:58238688;',1747160707),('laravel_cache_fortify.2fa_codes.e01dd30921cd503e0102141a73b131dd','i:58238374;',1747151309),('laravel_cache_fortify.2fa_codes.e3b45fee90a57243d0f40692069293b2','i:58238889;',1747166735),('laravel_cache_fortify.2fa_codes.e4c78afd76af6c84aff046acd9bf679b','i:58247682;',1747430538),('laravel_cache_fortify.2fa_codes.f79e67b13ed3a2479097925ff4135f4d','i:58238686;',1747160644),('laravel_cache_spatie.permission.cache','a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:43:{i:0;a:4:{s:1:\"a\";i:1;s:1:\"b\";s:16:\"super-admin.home\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:1;a:4:{s:1:\"a\";i:2;s:1:\"b\";s:23:\"super-admin.admin.index\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:2;a:4:{s:1:\"a\";i:3;s:1:\"b\";s:24:\"super-admin.admin.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:3;a:4:{s:1:\"a\";i:4;s:1:\"b\";s:22:\"super-admin.admin.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:4;a:4:{s:1:\"a\";i:5;s:1:\"b\";s:25:\"super-admin.admin.destroy\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:5;a:4:{s:1:\"a\";i:6;s:1:\"b\";s:10:\"admin.home\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:6;a:4:{s:1:\"a\";i:7;s:1:\"b\";s:19:\"admin.alumnos.index\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:7;a:4:{s:1:\"a\";i:8;s:1:\"b\";s:20:\"admin.alumnos.kardex\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:8;a:4:{s:1:\"a\";i:9;s:1:\"b\";s:20:\"admin.alumnos.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:9;a:4:{s:1:\"a\";i:10;s:1:\"b\";s:18:\"admin.alumnos.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:10;a:4:{s:1:\"a\";i:11;s:1:\"b\";s:21:\"admin.alumnos.destroy\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:11;a:4:{s:1:\"a\";i:12;s:1:\"b\";s:22:\"admin.profesores.index\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:12;a:4:{s:1:\"a\";i:13;s:1:\"b\";s:23:\"admin.profesores.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:13;a:4:{s:1:\"a\";i:14;s:1:\"b\";s:21:\"admin.profesores.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:14;a:4:{s:1:\"a\";i:15;s:1:\"b\";s:24:\"admin.profesores.destroy\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:15;a:3:{s:1:\"a\";i:16;s:1:\"b\";s:12:\"alumnos.home\";s:1:\"c\";s:3:\"web\";}i:16;a:3:{s:1:\"a\";i:17;s:1:\"b\";s:12:\"alumnos.show\";s:1:\"c\";s:3:\"web\";}i:17;a:3:{s:1:\"a\";i:18;s:1:\"b\";s:14:\"alumnos.kardex\";s:1:\"c\";s:3:\"web\";}i:18;a:4:{s:1:\"a\";i:19;s:1:\"b\";s:13:\"profesor.home\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:4;}}i:19;a:4:{s:1:\"a\";i:20;s:1:\"b\";s:13:\"profesor.show\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:4;}}i:20;a:4:{s:1:\"a\";i:21;s:1:\"b\";s:22:\"profesor.alumnos.index\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:4;}}i:21;a:3:{s:1:\"a\";i:22;s:1:\"b\";s:21:\"profesor.alumnos.edit\";s:1:\"c\";s:3:\"web\";}i:22;a:4:{s:1:\"a\";i:23;s:1:\"b\";s:23:\"profesor.materias.index\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:4;}}i:23;a:4:{s:1:\"a\";i:24;s:1:\"b\";s:18:\"admin.grupos.index\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:24;a:4:{s:1:\"a\";i:25;s:1:\"b\";s:19:\"admin.grupos.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:25;a:4:{s:1:\"a\";i:26;s:1:\"b\";s:17:\"admin.grupos.show\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:26;a:4:{s:1:\"a\";i:27;s:1:\"b\";s:17:\"admin.grupos.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:27;a:4:{s:1:\"a\";i:28;s:1:\"b\";s:20:\"admin.materias.index\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:28;a:4:{s:1:\"a\";i:29;s:1:\"b\";s:21:\"admin.materias.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:29;a:4:{s:1:\"a\";i:30;s:1:\"b\";s:19:\"amdin.materias.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:30;a:4:{s:1:\"a\";i:31;s:1:\"b\";s:24:\"admin.grupomateria.index\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:31;a:4:{s:1:\"a\";i:32;s:1:\"b\";s:23:\"admin.grupomateria.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:32;a:4:{s:1:\"a\";i:33;s:1:\"b\";s:18:\"admin.kardex.index\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:33;a:4:{s:1:\"a\";i:34;s:1:\"b\";s:37:\"super-admin.auditoria.historial.index\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:34;a:4:{s:1:\"a\";i:35;s:1:\"b\";s:36:\"super-admin.auditoria.historial.show\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:35;a:4:{s:1:\"a\";i:36;s:1:\"b\";s:27:\"profesor.asistencias.create\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:4;}}i:36;a:4:{s:1:\"a\";i:37;s:1:\"b\";s:28:\"profesor.calificaciones.edit\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:4;}}i:37;a:4:{s:1:\"a\";i:38;s:1:\"b\";s:11:\"alumno.home\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:3;}}i:38;a:4:{s:1:\"a\";i:39;s:1:\"b\";s:13:\"alumno.kardex\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:3;}}i:39;a:4:{s:1:\"a\";i:40;s:1:\"b\";s:21:\"alumno.materias.index\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:3;}}i:40;a:4:{s:1:\"a\";i:41;s:1:\"b\";s:40:\"super-admin.auditoria.dispositivos.index\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:41;a:4:{s:1:\"a\";i:42;s:1:\"b\";s:36:\"super-admin.auditoria.sesiones.index\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:42;a:4:{s:1:\"a\";i:43;s:1:\"b\";s:23:\"super-admin.users.index\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}}s:5:\"roles\";a:4:{i:0;a:3:{s:1:\"a\";i:1;s:1:\"b\";s:11:\"super-admin\";s:1:\"c\";s:3:\"web\";}i:1;a:3:{s:1:\"a\";i:2;s:1:\"b\";s:5:\"admin\";s:1:\"c\";s:3:\"web\";}i:2;a:3:{s:1:\"a\";i:4;s:1:\"b\";s:8:\"profesor\";s:1:\"c\";s:3:\"web\";}i:3;a:3:{s:1:\"a\";i:3;s:1:\"b\";s:6:\"alumno\";s:1:\"c\";s:3:\"web\";}}}',1747517404);
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carrera`
--

DROP TABLE IF EXISTS `carrera`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `carrera` (
  `ClaveCarrera` int NOT NULL AUTO_INCREMENT,
  `NombreCarrera` varchar(255) NOT NULL,
  `ClaveFacultad` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ClaveCarrera`),
  KEY `ClaveFacultad` (`ClaveFacultad`),
  CONSTRAINT `carrera_ibfk_1` FOREIGN KEY (`ClaveFacultad`) REFERENCES `facultad` (`ClaveFacultad`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carrera`
--

LOCK TABLES `carrera` WRITE;
/*!40000 ALTER TABLE `carrera` DISABLE KEYS */;
INSERT INTO `carrera` VALUES (1,'Ingeniería en Sistemas Computacionales',1,'2025-04-30 10:07:32','2025-04-30 10:07:32'),(2,'Ingeniería Civil',1,'2025-04-30 10:07:32','2025-04-30 10:07:32'),(3,'Medicina General',2,'2025-04-30 10:07:32','2025-04-30 10:07:32'),(4,'Derecho Penal',3,'2025-04-30 10:07:32','2025-04-30 10:07:32'),(5,'Administración de Empresas',4,'2025-04-30 10:07:32','2025-04-30 10:07:32'),(6,'Diseño Gráfico',5,'2025-04-30 10:07:32','2025-04-30 10:07:32'),(7,'Ingeniería Industrial',1,'2025-04-30 10:07:32','2025-04-30 10:07:32'),(8,'Psicología',2,'2025-04-30 10:07:32','2025-04-30 10:07:32'),(9,'Contaduría Pública',4,'2025-04-30 10:07:32','2025-04-30 10:07:32'),(10,'Arquitectura',5,'2025-04-30 10:07:32','2025-04-30 10:07:32');
/*!40000 ALTER TABLE `carrera` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dispositivos`
--

DROP TABLE IF EXISTS `dispositivos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dispositivos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dispositivos`
--

LOCK TABLES `dispositivos` WRITE;
/*!40000 ALTER TABLE `dispositivos` DISABLE KEYS */;
/*!40000 ALTER TABLE `dispositivos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facultad`
--

DROP TABLE IF EXISTS `facultad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `facultad` (
  `ClaveFacultad` int NOT NULL AUTO_INCREMENT,
  `NombreFacultad` varchar(100) NOT NULL,
  `Direccion` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ClaveFacultad`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facultad`
--

LOCK TABLES `facultad` WRITE;
/*!40000 ALTER TABLE `facultad` DISABLE KEYS */;
INSERT INTO `facultad` VALUES (1,'Facultad de Ingeniería','Av. Universidad 1000, Ciudad Universitaria','2025-04-30 10:07:32','2025-04-30 10:07:32'),(2,'Facultad de Medicina','Av. Siempre Viva 742, Zona Médica','2025-04-30 10:07:32','2025-04-30 10:07:32'),(3,'Facultad de Derecho','Calle Jurídica 500, Centro Legal','2025-04-30 10:07:32','2025-04-30 10:07:32'),(4,'Facultad de Administración','Blvd. Empresarial 200, Distrito Financiero','2025-04-30 10:07:32','2025-04-30 10:07:32'),(5,'Facultad de Artes','Calle Creativa 350, Zona Cultural','2025-04-30 10:07:32','2025-04-30 10:07:32');
/*!40000 ALTER TABLE `facultad` ENABLE KEYS */;
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
-- Table structure for table `grupo`
--

DROP TABLE IF EXISTS `grupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `grupo` (
  `ClaveGrupo` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(1) NOT NULL,
  `Semestre` int NOT NULL,
  `ClaveCarrera` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ClaveGrupo`),
  KEY `ClaveCarrera` (`ClaveCarrera`),
  CONSTRAINT `grupo_ibfk_1` FOREIGN KEY (`ClaveCarrera`) REFERENCES `carrera` (`ClaveCarrera`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grupo`
--

LOCK TABLES `grupo` WRITE;
/*!40000 ALTER TABLE `grupo` DISABLE KEYS */;
INSERT INTO `grupo` VALUES (1,'A',1,1,'2025-04-30 10:07:32','2025-04-30 10:07:32'),(2,'B',1,1,'2025-04-30 10:07:32','2025-04-30 10:07:32'),(3,'A',1,2,'2025-04-30 10:07:32','2025-04-30 10:07:32'),(4,'A',3,3,'2025-04-30 10:07:32','2025-04-30 10:07:32'),(5,'B',3,3,'2025-04-30 10:07:32','2025-04-30 10:07:32'),(6,'A',5,4,'2025-04-30 10:07:32','2025-04-30 10:07:32'),(7,'A',7,5,'2025-04-30 10:07:32','2025-04-30 10:07:32'),(8,'B',7,5,'2025-04-30 10:07:32','2025-04-30 10:07:32'),(9,'A',1,6,'2025-04-30 10:07:32','2025-04-30 10:07:32'),(10,'A',1,7,'2025-04-30 10:07:32','2025-04-30 10:07:32'),(11,'J',8,1,'2025-05-06 08:33:33','2025-05-06 08:33:33'),(12,'O',5,1,'2025-05-06 10:03:04','2025-05-06 10:03:04'),(13,'C',5,4,'2025-05-06 12:05:05','2025-05-06 12:05:05'),(14,'C',5,4,'2025-05-06 12:05:05','2025-05-06 12:05:05'),(15,'C',6,1,'2025-05-06 12:08:01','2025-05-06 12:08:01'),(16,'C',6,1,'2025-05-06 12:08:01','2025-05-06 12:08:01'),(17,'J',4,1,'2025-05-06 12:17:42','2025-05-06 12:17:42'),(18,'J',4,1,'2025-05-06 12:17:42','2025-05-06 12:17:42'),(19,'O',5,1,'2025-05-06 14:32:22','2025-05-06 14:32:22'),(20,'O',5,1,'2025-05-06 14:32:22','2025-05-06 14:32:22'),(21,'D',1,1,'2025-05-06 14:38:49','2025-05-06 14:38:49'),(22,'D',1,1,'2025-05-06 14:38:49','2025-05-06 14:38:49'),(23,'C',1,1,'2025-05-07 00:42:04','2025-05-07 00:42:04'),(24,'C',1,1,'2025-05-07 00:42:04','2025-05-07 00:42:04'),(25,'B',4,6,'2025-05-13 23:21:29','2025-05-13 23:21:29'),(26,'B',4,6,'2025-05-13 23:21:29','2025-05-13 23:21:29');
/*!40000 ALTER TABLE `grupo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grupomateria`
--

DROP TABLE IF EXISTS `grupomateria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `grupomateria` (
  `ClaveGrupoMateria` int NOT NULL AUTO_INCREMENT,
  `ClaveGrupo` int NOT NULL,
  `ClaveMateria` int NOT NULL,
  `CupoMaximo` int NOT NULL DEFAULT '30',
  `FechaInicio` date NOT NULL,
  `FechaFin` date NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ClaveGrupoMateria`),
  KEY `ClaveGrupo` (`ClaveGrupo`),
  KEY `ClaveMateria` (`ClaveMateria`),
  CONSTRAINT `grupomateria_ibfk_1` FOREIGN KEY (`ClaveGrupo`) REFERENCES `grupo` (`ClaveGrupo`),
  CONSTRAINT `grupomateria_ibfk_2` FOREIGN KEY (`ClaveMateria`) REFERENCES `materia` (`ClaveMateria`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grupomateria`
--

LOCK TABLES `grupomateria` WRITE;
/*!40000 ALTER TABLE `grupomateria` DISABLE KEYS */;
INSERT INTO `grupomateria` VALUES (1,1,1,30,'2024-01-15','2024-05-30','2025-04-30 10:07:32','2025-04-30 10:07:32'),(2,2,1,30,'2024-01-15','2024-05-30','2025-04-30 10:07:32','2025-04-30 10:07:32'),(3,3,6,25,'2024-01-15','2024-05-30','2025-04-30 10:07:32','2025-04-30 10:07:32'),(4,4,2,20,'2024-01-15','2024-05-30','2025-04-30 10:07:32','2025-04-30 10:07:32'),(5,5,2,20,'2024-01-15','2024-05-30','2025-04-30 10:07:32','2025-04-30 10:07:32'),(6,6,3,35,'2024-01-15','2024-05-30','2025-04-30 10:07:32','2025-04-30 10:07:32'),(7,7,5,15,'2024-01-15','2024-05-30','2025-04-30 10:07:32','2025-04-30 10:07:32'),(8,8,5,15,'2024-01-15','2024-05-30','2025-04-30 10:07:32','2025-04-30 10:07:32'),(9,9,4,30,'2024-01-15','2024-05-30','2025-04-30 10:07:32','2025-04-30 10:07:32'),(10,10,7,25,'2024-01-15','2024-05-30','2025-04-30 10:07:32','2025-04-30 10:07:32'),(11,12,1,25,'2025-05-06','2025-10-06','2025-05-06 10:03:04','2025-05-06 10:03:04'),(12,12,6,25,'2025-05-06','2025-10-06','2025-05-06 10:03:04','2025-05-06 10:03:04');
/*!40000 ALTER TABLE `grupomateria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kardex`
--

DROP TABLE IF EXISTS `kardex`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kardex` (
  `ClaveKardex` int NOT NULL AUTO_INCREMENT,
  `ClaveAlumno` varchar(16) DEFAULT NULL,
  `ClaveGrupoMateria` int NOT NULL,
  `Calificacion` decimal(5,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Faltas` int DEFAULT NULL,
  PRIMARY KEY (`ClaveKardex`),
  UNIQUE KEY `ClaveAlumno` (`ClaveAlumno`,`ClaveGrupoMateria`),
  KEY `ClaveGrupoMateria` (`ClaveGrupoMateria`),
  CONSTRAINT `kardex_ibfk_1` FOREIGN KEY (`ClaveAlumno`) REFERENCES `alumno` (`ClaveAlumno`),
  CONSTRAINT `kardex_ibfk_2` FOREIGN KEY (`ClaveGrupoMateria`) REFERENCES `grupomateria` (`ClaveGrupoMateria`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kardex`
--

LOCK TABLES `kardex` WRITE;
/*!40000 ALTER TABLE `kardex` DISABLE KEYS */;
INSERT INTO `kardex` VALUES (1,'ALU-20240001',1,8.50,'2025-04-30 10:07:32','2025-04-30 10:07:32',NULL),(2,'ALU-20240001',3,9.00,'2025-04-30 10:07:32','2025-04-30 10:07:32',NULL),(3,'ALU-20240002',4,8.00,'2025-04-30 10:07:32','2025-04-30 10:07:32',NULL),(4,'ALU-20240002',5,9.50,'2025-04-30 10:07:32','2025-04-30 10:07:32',NULL),(5,'ALU-20240003',3,7.50,'2025-04-30 10:07:32','2025-04-30 10:07:32',NULL),(6,'ALU-20240004',6,8.80,'2025-04-30 10:07:32','2025-04-30 10:07:32',NULL),(7,'ALU-20240005',7,9.20,'2025-04-30 10:07:32','2025-04-30 10:07:32',NULL),(8,'ALU-20240006',9,8.30,'2025-04-30 10:07:32','2025-04-30 10:07:32',NULL),(9,'ALU-20240007',10,7.90,'2025-04-30 10:07:32','2025-04-30 10:07:32',NULL),(10,'ALU-20240008',4,9.10,'2025-04-30 10:07:32','2025-04-30 10:07:32',NULL),(11,'ALUNY3HL2L2',4,8.50,'2025-05-16 08:43:23','2025-05-16 08:43:23',NULL),(12,'ALUNY3HL2L2',5,9.00,'2025-05-16 08:43:23','2025-05-16 08:43:23',NULL);
/*!40000 ALTER TABLE `kardex` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log_cambios`
--

DROP TABLE IF EXISTS `log_cambios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `log_cambios` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log_cambios`
--

LOCK TABLES `log_cambios` WRITE;
/*!40000 ALTER TABLE `log_cambios` DISABLE KEYS */;
/*!40000 ALTER TABLE `log_cambios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materia`
--

DROP TABLE IF EXISTS `materia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `materia` (
  `ClaveMateria` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) NOT NULL,
  `Descripcion` varchar(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Semestre` int unsigned DEFAULT NULL,
  `ClaveCarrera` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`ClaveMateria`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materia`
--

LOCK TABLES `materia` WRITE;
/*!40000 ALTER TABLE `materia` DISABLE KEYS */;
INSERT INTO `materia` VALUES (1,'Programación I','Fundamentos de programación en Python','2025-04-30 10:07:32','2025-05-14 00:38:04',2,1),(2,'Anatomía Humana','Estructura del cuerpo humano','2025-04-30 10:07:32','2025-05-06 08:24:48',3,3),(3,'Derecho Constitucional','Estudio de la constitución','2025-04-30 10:07:32','2025-05-06 08:24:48',5,4),(4,'Contabilidad Básica','Principios fundamentales de contabilidad','2025-04-30 10:07:32','2025-05-06 08:24:48',1,2),(5,'Diseño Digital','Principios de diseño con herramientas digitales','2025-04-30 10:07:32','2025-05-06 08:24:48',1,6),(6,'Cálculo Diferencial','Fundamentos del cálculo diferencial','2025-04-30 10:07:32','2025-05-06 08:24:48',1,7),(7,'Psicología General','Introducción a la psicología','2025-04-30 10:07:32','2025-05-06 08:24:48',7,5),(8,'Derecho Civil','Leyes que regulan relaciones entre particulares','2025-04-30 10:07:32','2025-05-06 08:24:48',7,5),(9,'Finanzas Corporativas','Gestión financiera en empresas','2025-04-30 10:07:32','2025-05-06 08:24:48',1,2),(10,'Historia del Arte','Evolución del arte a través del tiempo','2025-04-30 10:07:32','2025-05-06 08:24:48',1,6),(11,'Investigacion de Operaciones','Por medio de diferentes procedimientos el alumno determinara el punto optimo','2025-05-07 10:58:51','2025-05-07 10:58:51',5,1),(12,'Matemáticas Discretas','Probabilidad y razionamiento','2025-05-07 13:36:49','2025-05-07 13:36:49',2,1),(13,'Computo Forense','Metodos y conceptos para un analisis forense','2025-05-07 13:56:42','2025-05-07 13:56:42',8,1),(14,'Base de datos','visualizara presentación de relaciones','2025-05-13 23:20:48','2025-05-13 23:20:48',6,1),(15,'Startup','pon de proyectos','2025-05-14 00:38:42','2025-05-14 00:38:42',8,1);
/*!40000 ALTER TABLE `materia` ENABLE KEYS */;
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
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2025_04_21_005911_add_two_factor_columns_to_users_table',1),(5,'2025_04_21_005943_create_personal_access_tokens_table',1),(6,'2025_04_21_030237_create_permission_tables',1),(7,'2025_04_29_203147_create_log_cambios_table',1),(8,'2025_04_29_203340_create_sesions_table',1),(9,'2025_04_29_203351_create_dispositivos_table',1),(10,'2025_05_06_074622_add_semestre_and_clavecarrera_to_materia_table',2),(11,'2025_05_13_105804_add_password_changed_at_to_users_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (4,'App\\Models\\User',3),(3,'App\\Models\\User',6),(3,'App\\Models\\User',7),(3,'App\\Models\\User',9),(1,'App\\Models\\User',11),(1,'App\\Models\\User',12),(2,'App\\Models\\User',13),(3,'App\\Models\\User',14),(4,'App\\Models\\User',15),(4,'App\\Models\\User',16),(4,'App\\Models\\User',17),(4,'App\\Models\\User',18),(4,'App\\Models\\User',19),(4,'App\\Models\\User',20),(4,'App\\Models\\User',21),(3,'App\\Models\\User',22),(4,'App\\Models\\User',23),(4,'App\\Models\\User',24),(4,'App\\Models\\User',25),(4,'App\\Models\\User',26),(4,'App\\Models\\User',27),(3,'App\\Models\\User',28),(3,'App\\Models\\User',29),(3,'App\\Models\\User',30),(3,'App\\Models\\User',31),(3,'App\\Models\\User',32),(3,'App\\Models\\User',33),(3,'App\\Models\\User',34),(4,'App\\Models\\User',45),(3,'App\\Models\\User',46),(4,'App\\Models\\User',47),(4,'App\\Models\\User',48),(4,'App\\Models\\User',49),(4,'App\\Models\\User',50),(3,'App\\Models\\User',51),(3,'App\\Models\\User',52),(3,'App\\Models\\User',53),(3,'App\\Models\\User',55),(3,'App\\Models\\User',56),(2,'App\\Models\\User',59),(4,'App\\Models\\User',60);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'super-admin.home','web','2025-04-30 15:18:51','2025-04-30 15:18:51'),(2,'super-admin.admin.index','web','2025-04-30 15:18:51','2025-04-30 15:18:51'),(3,'super-admin.admin.create','web','2025-04-30 15:18:51','2025-04-30 15:18:51'),(4,'super-admin.admin.edit','web','2025-04-30 15:18:51','2025-04-30 15:18:51'),(5,'super-admin.admin.destroy','web','2025-04-30 15:18:51','2025-04-30 15:18:51'),(6,'admin.home','web','2025-04-30 15:18:51','2025-04-30 15:18:51'),(7,'admin.alumnos.index','web','2025-04-30 15:18:51','2025-04-30 15:18:51'),(8,'admin.alumnos.kardex','web','2025-04-30 15:18:51','2025-04-30 15:18:51'),(9,'admin.alumnos.create','web','2025-04-30 15:18:51','2025-04-30 15:18:51'),(10,'admin.alumnos.edit','web','2025-04-30 15:18:51','2025-04-30 15:18:51'),(11,'admin.alumnos.destroy','web','2025-04-30 15:18:51','2025-04-30 15:18:51'),(12,'admin.profesores.index','web','2025-04-30 15:18:51','2025-04-30 15:18:51'),(13,'admin.profesores.create','web','2025-04-30 15:18:51','2025-04-30 15:18:51'),(14,'admin.profesores.edit','web','2025-04-30 15:18:51','2025-04-30 15:18:51'),(15,'admin.profesores.destroy','web','2025-04-30 15:18:51','2025-04-30 15:18:51'),(16,'alumnos.home','web','2025-04-30 15:18:51','2025-04-30 15:18:51'),(17,'alumnos.show','web','2025-04-30 15:18:51','2025-04-30 15:18:51'),(18,'alumnos.kardex','web','2025-04-30 15:18:51','2025-04-30 15:18:51'),(19,'profesor.home','web','2025-04-30 15:18:51','2025-04-30 15:18:51'),(20,'profesor.show','web','2025-04-30 15:18:51','2025-04-30 15:18:51'),(21,'profesor.alumnos.index','web','2025-04-30 15:18:51','2025-04-30 15:18:51'),(22,'profesor.alumnos.edit','web','2025-04-30 15:18:51','2025-04-30 15:18:51'),(23,'profesor.materias.index','web','2025-04-30 15:18:51','2025-04-30 15:18:51'),(24,'admin.grupos.index','web','2025-05-01 01:00:50','2025-05-01 01:00:50'),(25,'admin.grupos.create','web','2025-05-01 01:00:51','2025-05-01 01:00:51'),(26,'admin.grupos.show','web','2025-05-01 01:00:51','2025-05-01 01:00:51'),(27,'admin.grupos.edit','web','2025-05-01 01:00:51','2025-05-01 01:00:51'),(28,'admin.materias.index','web','2025-05-01 01:00:51','2025-05-01 01:00:51'),(29,'admin.materias.create','web','2025-05-01 01:00:51','2025-05-01 01:00:51'),(30,'amdin.materias.edit','web','2025-05-01 01:00:51','2025-05-01 01:00:51'),(31,'admin.grupomateria.index','web','2025-05-01 01:00:51','2025-05-01 01:00:51'),(32,'admin.grupomateria.edit','web','2025-05-01 01:00:51','2025-05-01 01:00:51'),(33,'admin.kardex.index','web','2025-05-01 01:00:51','2025-05-01 01:00:51'),(34,'super-admin.auditoria.historial.index','web','2025-05-02 15:22:32','2025-05-02 15:22:32'),(35,'super-admin.auditoria.historial.show','web','2025-05-02 15:22:33','2025-05-02 15:22:33'),(36,'profesor.asistencias.create','web','2025-05-09 13:20:01','2025-05-09 13:20:01'),(37,'profesor.calificaciones.edit','web','2025-05-09 13:20:01','2025-05-09 13:20:01'),(38,'alumno.home','web','2025-05-09 15:41:23','2025-05-09 15:41:23'),(39,'alumno.kardex','web','2025-05-09 15:41:23','2025-05-09 15:41:23'),(40,'alumno.materias.index','web','2025-05-09 15:41:23','2025-05-09 15:41:23'),(41,'super-admin.auditoria.dispositivos.index','web','2025-05-13 13:32:55','2025-05-13 13:32:55'),(42,'super-admin.auditoria.sesiones.index','web','2025-05-13 13:32:55','2025-05-13 13:32:55'),(43,'super-admin.users.index','web','2025-05-13 21:58:48','2025-05-13 21:58:48');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
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
-- Table structure for table `profesor`
--

DROP TABLE IF EXISTS `profesor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `profesor` (
  `ClaveProfesor` varchar(16) NOT NULL,
  `ApePaterno` varchar(40) NOT NULL,
  `ApeMaterno` varchar(40) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `ClaveFacultad` int NOT NULL,
  `Departamento` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`ClaveProfesor`),
  KEY `ClaveFacultad` (`ClaveFacultad`),
  KEY `fk_profesor_user` (`user_id`),
  CONSTRAINT `fk_profesor_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `profesor_ibfk_1` FOREIGN KEY (`ClaveFacultad`) REFERENCES `facultad` (`ClaveFacultad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profesor`
--

LOCK TABLES `profesor` WRITE;
/*!40000 ALTER TABLE `profesor` DISABLE KEYS */;
INSERT INTO `profesor` VALUES ('PROF-1001','García','López','Juan Carlos','jgarcia@universidad.edu','5512345678',1,'Sistemas Computacionales','2025-04-30 10:07:32','2025-05-08 01:24:25',35),('PROF-1002','Martínez','Sánchez','María Elena','mmartinez@universidad.edu','5523456789',2,'Anatomía','2025-04-30 10:07:32','2025-05-08 05:05:48',36),('PROF-1003','Rodríguez','Pérez','Luis Fernando','lrodriguez@universidad.edu','5534567890',3,'Derecho Penal','2025-04-30 10:07:32','2025-05-08 05:05:48',37),('PROF-1004','Hernández','Gómez','Ana Patricia','ahernandez@universidad.edu','5545678909',4,'Administración','2025-04-30 10:07:32','2025-05-08 05:05:48',38),('PROF-1005','Díaz','Hernandez','Carlos Alberto','cdiaz@universidad.edu','5556789012',5,'Diseño','2025-04-30 10:07:32','2025-05-13 23:22:53',39),('PROF-1006','Vázquez','Ruiz','Laura Isabel','lvazquez@universidad.edu','5567890123',1,'Industrial','2025-04-30 10:07:32','2025-05-08 05:05:48',40),('PROF-1007','Jiménez','Torres','Roberto Antonio','rjimenez@universidad.edu','5578901234',2,'Psiquiatría','2025-04-30 10:07:32','2025-05-08 05:05:48',41),('PROF-1008','Moreno','Castro','Sofía Guadalupe','smoreno@universidad.edu','5589012345',3,'Derecho Civil','2025-04-30 10:07:32','2025-05-08 05:05:48',42),('PROF-1009','Alvarez','Mendez','Jorge Eduardo','jalvarez@unach.mx','5590123456',4,'Contabilidad','2025-04-30 10:07:32','2025-05-08 05:05:48',43),('PROF-1010','Romero','Ortega','Patricia Beatriz','promero@universidad.edu','5501234567',5,'Arquitectura','2025-04-30 10:07:32','2025-05-08 05:05:48',44),('PROF4EAS726V','Moreno','Prieto','Blanca Nieves','blanca.moreno@unach.mx','9618524786',1,NULL,'2025-05-01 07:26:41','2025-05-01 07:26:41',NULL),('PROF5YUXMQL1','Santiago','Hernández','Humberto','humberto@edu.com','9617534820',3,NULL,'2025-05-11 13:33:40','2025-05-11 13:33:40',50),('PROFABEBFQ3I','Perez','Perez','Jose','jose@unach.mx','9617539639',3,NULL,'2025-05-01 05:10:37','2025-05-01 05:10:37',NULL),('PROFCKP7C3L5','Pérez','Sanchez','Manuel Alejandro','perez.sancehz@edu.com','9647856345',3,NULL,'2025-05-08 23:06:56','2025-05-08 23:06:56',48),('PROFCOIWUKLA','López','Martínez','Ramón','ramon@edu.com','9647853210',1,NULL,'2025-05-17 03:30:47','2025-05-17 03:30:47',60),('PROFELQMXI1A','Zenteno','Santiago','José','zenteno@edu.com','9617458230',1,NULL,'2025-05-11 13:29:20','2025-05-11 13:29:20',49),('PROFF1JLMVKG','Méndez','Hernández','Jose','jose@admin.unach.mx','9614537861',3,NULL,'2025-05-01 07:38:37','2025-05-01 07:38:37',NULL),('PROFH4HL3WHK','Méndez','Hernández','Sebastian','sebastian@edu.com','9611095231',2,NULL,'2025-05-08 23:00:40','2025-05-08 23:00:40',47),('PROFHM40JS3P','Zenteno','Juarez','Roberto','roberto@gmail.com','9612035894',2,NULL,'2025-05-01 05:04:40','2025-05-01 05:04:40',NULL),('PROFIQUDFOD3','Méndez','Hernández','Juan','juan@unach.mx','9614235876',3,NULL,'2025-05-01 04:59:33','2025-05-01 04:59:33',NULL),('PROFKXPGJDT9','López','Martínez','José Gerardo','jose@edu.profesor.com','9647895231',1,NULL,'2025-05-08 12:53:37','2025-05-08 12:53:37',NULL),('PROFRFOEIFAO','Diego','Mendez','Diego','diego.diego@unach.mx','9611222753',2,NULL,'2025-05-01 05:20:12','2025-05-01 05:20:12',NULL),('PROFSI69YYII','Méndez','Hernández','Georgina','geomendezhdz@gmail.com','9611095321',1,NULL,'2025-04-30 16:32:15','2025-04-30 16:32:15',NULL),('PROFXXBI4DQW','Ramos','Flores','Armando','armando.ramos@unach.mx','9611596458',4,NULL,'2025-05-01 06:12:34','2025-05-01 06:12:34',NULL),('PROFYBO9NADJ','Mulller','Martinez','Duhasteco','Duhasteco@unach.mx','9611235645',4,NULL,'2025-05-01 06:00:57','2025-05-01 06:00:57',NULL),('PROFYKCICLHX','Nañez','Coutiño','Ádan','adan.nanez69@unach.mx','9617894588',1,NULL,'2025-05-01 04:06:29','2025-05-09 05:33:51',NULL);
/*!40000 ALTER TABLE `profesor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profesor_grupomateria`
--

DROP TABLE IF EXISTS `profesor_grupomateria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `profesor_grupomateria` (
  `ClaveProfesor` varchar(16) NOT NULL,
  `ClaveGrupoMateria` int NOT NULL,
  PRIMARY KEY (`ClaveProfesor`,`ClaveGrupoMateria`),
  KEY `ClaveGrupoMateria` (`ClaveGrupoMateria`),
  CONSTRAINT `profesor_grupomateria_ibfk_1` FOREIGN KEY (`ClaveProfesor`) REFERENCES `profesor` (`ClaveProfesor`),
  CONSTRAINT `profesor_grupomateria_ibfk_2` FOREIGN KEY (`ClaveGrupoMateria`) REFERENCES `grupomateria` (`ClaveGrupoMateria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profesor_grupomateria`
--

LOCK TABLES `profesor_grupomateria` WRITE;
/*!40000 ALTER TABLE `profesor_grupomateria` DISABLE KEYS */;
INSERT INTO `profesor_grupomateria` VALUES ('PROF-1001',1),('PROFELQMXI1A',1),('PROFKXPGJDT9',1),('PROF-1001',2),('PROF-1006',2),('PROF-1002',4),('PROF-1002',5),('PROF-1007',5),('PROF-1003',6),('PROF-1008',6),('PROF-1005',7),('PROF-1005',8),('PROF-1009',9),('PROF-1010',10),('PROFELQMXI1A',12);
/*!40000 ALTER TABLE `profesor_grupomateria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(34,1),(35,1),(41,1),(42,1),(43,1),(6,2),(7,2),(8,2),(9,2),(10,2),(11,2),(12,2),(13,2),(14,2),(15,2),(24,2),(25,2),(26,2),(27,2),(28,2),(29,2),(30,2),(31,2),(32,2),(33,2),(38,3),(39,3),(40,3),(19,4),(20,4),(21,4),(23,4),(36,4),(37,4);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'super-admin','web','2025-04-30 15:18:51','2025-04-30 15:18:51'),(2,'admin','web','2025-04-30 15:18:51','2025-04-30 15:18:51'),(3,'alumno','web','2025-04-30 15:18:51','2025-04-30 15:18:51'),(4,'profesor','web','2025-04-30 15:18:51','2025-04-30 15:18:51');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sesions`
--

DROP TABLE IF EXISTS `sesions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sesions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sesions`
--

LOCK TABLES `sesions` WRITE;
/*!40000 ALTER TABLE `sesions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sesions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('5voqd5OPVliFOE2zOnjg0DLNrhSP0dbvl8kfCnCQ',12,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36','YTo2OntzOjY6Il90b2tlbiI7czo0MDoiTUIxU1hpVGJ3ZWJnWlFXRXdTTVNzTEhJaWwzeFpRUjBSNFNBZER4WiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zdXBlci1hZG1pbi9hdWRpdG9yaWEvZGlwb3NpdGl2b3MiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjU6ImxvZ2luIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxMjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMiRwcVNEbWh3MUdvSHJkR1NyTVovWmhPSGpOTmk4Zk9PVmhzTnJnb1ZFODRrdGRuNkp0cE1oLiI7fQ==',1747434699),('B07Rs0Nk6arjbeeCclRgTb7GDY2UHOTg9dM3kPiX',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiMFplQnZkSklnRnZxeTJRdE1LWVRtejFabXpvdmVRSlF5OXBOeUczUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1747453513),('n0dE4Slj8OBWUBLC2U3KmrTCb00HEIrbRKkmWjhn',59,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36 Edg/136.0.0.0','YTo2OntzOjY6Il90b2tlbiI7czo0MDoic1JsUVlVSmx2ZkNXcGZVdTNZUGczb2ZLdDlGY0E1MzFwVHFxb1Q1MiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9wcm9mZXNvcmVzL1BST0ZZS0NJQ0xIWC9lZGl0Ijt9czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo1NjoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkbWluL3Byb2Zlc29yZXMvUFJPRllLQ0lDTEhYL2VkaXQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo1OTtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMiRuYkVXNGRJZnNPRUcxUTdPNWVFM05lWUN4dHc1LzNFblZwWFV1LzJxY0RhclkubHpDWXQ5aSI7fQ==',1747434336);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `password_changed_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Test User','test@example.com','2025-04-30 15:18:54','$2y$12$5gkaGLZLVZv5ZoJ42.N8COS9MT5gWbJMnuMUMKBMD9wwDMak7tZqi',NULL,NULL,NULL,'n8qTTWRUOC',NULL,NULL,'2025-04-30 15:18:54','2025-04-30 15:18:54',NULL),(2,'Georgina Andrea Méndez Hernández','and_admin@example','2025-04-30 16:03:15','$2y$12$RX4XtQxhWy5CnGH4qiB41uJd1JoBmoljXtoBImeFb97yYI/SnwlRe',NULL,NULL,NULL,'Blxh71LnbYpF50EOvHM3G19ayI3GCn8QZl3tjsuTHzWlS4k70MvEFEj6ICgx',NULL,NULL,'2025-04-30 16:02:43','2025-04-30 16:03:15',NULL),(3,'Georgina Méndez','geomendezhdz@gmail.com',NULL,'$2y$12$xrMgyjg/l59tqiXcnaNKpu3.kKwvBxRZuiIoon7wRIEo3QS5/b9rG',NULL,NULL,NULL,NULL,NULL,NULL,'2025-04-30 16:32:15','2025-04-30 16:32:15',NULL),(6,'Georgina Méndez','admin@admin.com',NULL,'$2y$12$Z.cmUV9JoNFObebTyzGjp.oskrq6s2.nVrTaEmgyeuyoBCVEyqZAa',NULL,NULL,NULL,NULL,NULL,NULL,'2025-04-30 16:39:29','2025-04-30 16:39:29',NULL),(7,'Jorge Luis Méndez','jorge@gmail.com',NULL,'$2y$12$7T9YTJQ88i1GLvMkHPhSp.FZ7MnDf8i3nBTcYzv6rGxyWEAT5G.aq',NULL,NULL,NULL,NULL,NULL,NULL,'2025-04-30 19:35:01','2025-04-30 19:35:01',NULL),(9,'Georgina Méndez','jorgell@gmail.com',NULL,'$2y$12$9tQ7bUPiKR8F9eRFJmnKqOHPgYvG5zKS..JHlZKyCH4Za3kIVq.BG',NULL,NULL,NULL,NULL,NULL,NULL,'2025-04-30 19:43:18','2025-04-30 19:43:18',NULL),(11,'Test User','test@gmail.com','2025-04-30 20:18:21','$2y$12$1YL37vESTDKsz67poJxAau6Y5ujLLF8R49ml6rD6p7FiE3Bs0ZnR6',NULL,NULL,NULL,'DfG1KLiU0ZKglcoNs39G8u9nOvsJFqwYRNKx6HmcsyQ7tZfGVPrLOT5rNmjx',NULL,NULL,'2025-04-30 20:18:21','2025-04-30 20:18:21',NULL),(12,'Test User','test2@gmail.com','2025-04-30 20:23:19','$2y$12$pqSDmhw1GoHrdGSrMZ/ZhOHjNNi8fOOVhsNrgoVE84ktdn6JtpMh.','eyJpdiI6ImxGYVU1NVhVUnRCRDh2T0tkaWI5R2c9PSIsInZhbHVlIjoiWUVDTld1Um9GaEJEK0FIZnFUanRrdFlrNmk3Wmc1RDR0ZFNtUEV4NG5tOD0iLCJtYWMiOiI3Zjc0YjMxMzE5MWE2ZWUzYjFjNjcyYTFjM2U0Y2EwYTlmNWI0YWI2NjY2OGIzNGNmYjZiOTAxOTgwNmY0NTE4IiwidGFnIjoiIn0=','eyJpdiI6Im85SEl1UGhUclBXZk5vY0xxcjRDekE9PSIsInZhbHVlIjoiWHphVnZac1RJR1VwdUtWWHNQSU9uZll6YnlRNmNhcW1yQnp2MkNyNFVzTTFkODdUYTVDSEF0N0tva1hhZFYxNUc4SEcrWEp2UFcvVW5GTWM4dlg0VXNyZGN3Myt4N2o1UWt0Zmc4ejlMcFNFbDAwSlhnRnl0Vk91QlpMU28rdFRqM3VMNHhkTU5wNHBta3k2OGpySUVudlFsZG1QeUJUTU1WMFBDU21DUjNCU2JWUGFyeGRZMlBxRVdkUEl2Q1BENlFWakJvQWRiOEx6Z1I0YlFQRFQ1MTNjQXoyWmh2YkQ0QVI3WE8wanIxdG1KdHRIUGU2WVJKNWh5N1h6K29pRnpiN2htSEtQajd0U1dCUzI0eVlwRUE9PSIsIm1hYyI6IjcxOGEyNTcwMjMyOWVhMTU1NWYzYmE5OWVhNmI1NTcwMzAyYzJlY2EyYzUxNWJiZmFlOThkZTZjNzM3YzQyMzEiLCJ0YWciOiIifQ==','2025-05-13 23:30:47','JdZ3MFhE8TPRmpdn9RtqGF6XYoljgxtWwtnBCKorouHXA8VYE2zPfPYUuTFD',NULL,NULL,'2025-04-30 20:23:19','2025-05-13 23:30:47',NULL),(13,'Test User','test_admin@gmail.com','2025-04-30 20:23:19','$2y$12$MIM/7ZJTtRX5l5agVZnxxOs7lIHYsb1fjM/evtSThBBzPMmPwIDQm','eyJpdiI6IkxzTmtHa1N0K2hYVzZwTDE1djhob1E9PSIsInZhbHVlIjoiZVRsWXQ2YmZra01HVEtXNnRqOWt3MnZyUnN4cUdMZmE4NmlrU0VDbkRzZz0iLCJtYWMiOiJmNTM0NjU1Mjg0YmQ1ODlmZWUwYzZjNzljYzA4NjlmM2U5OWIwYzJiNWNhMzhmYWY0MmUwMTRmNWY5NzcwMjdiIiwidGFnIjoiIn0=','eyJpdiI6IjkwRVdML3JaelUxckplTkJFZVJBUVE9PSIsInZhbHVlIjoiYXpCYW05YTFwdnM5Tlo2TWc2dTJ5eXluRThqWjBPYmlWRTlHRHlSVW9IMUtHNVh3Q3hzbFJZV1lNVjIyTHlIb2FwZk1IYmJpRXBENG4rUTJ3VU1YMTJKUjNVTFZJd0FreitScXRLelB5S2dWc296TmdmOGQ1SjdrOVd1SEdjWTArSEljRmM1Q3g2THJvakxGa3ZNUmRvRjRXVGRpZjRSRFRuRlVLL3J0S1gwd3Z0K3B0VTU1UTBPZm5DWjRURjczaXFGOTljT29PUVFjQ3llSi8wTHdYZS83N3lkcjJYSjdRWTB4bGUvd0xjTU5QM2Zxdk5nVHdyZ3hzOWZuajc2QVArOWlhK3JzcHNhT0xTTitka1AzMVE9PSIsIm1hYyI6IjQ1MDBmMTRhMjQ4OTkwNGQ2MmY1MzA1MmEyNjc3MWNlOWI5YzA0NzkzZjA1YzZhN2M4MzZhYWYzZDZkODk0NWEiLCJ0YWciOiIifQ==','2025-05-14 00:23:04','Mao0mB3vArl7Xbs3Cwa2rtJA4EiR3CrscAsNDcy85BwffGeHMl9uigJnsTKs',NULL,NULL,'2025-04-30 20:23:19','2025-05-14 00:23:04',NULL),(14,'Test User','test_alumno@gmail.com','2025-04-30 20:23:20','$2y$12$ZIwqZHe1zNBcMxVI46qW7uKMV8aTlW9pNKWAw3IMaZfaGB.nT6g8i',NULL,NULL,NULL,'KEhsTIWesQSBhvpmxz0ed6orFwj8CNt7VPQAaSZ2dLFYabmlAqdlRGfUBJ0Z',NULL,NULL,'2025-04-30 20:23:20','2025-04-30 20:23:20',NULL),(15,'Test User','test_profesor@gmail.com','2025-04-30 20:23:20','$2y$12$TdLJGc0JDzWEmOf2Ti1Xs.DOo7iUyDC2slOcDx4FT1BDRgRTLVYVS',NULL,NULL,NULL,'jHNKy3XpYGup4C2Xl71DSGeiBsvYWrvOHiqIT9mtSvAMUG4kuPLFQlDTACcw',NULL,NULL,'2025-04-30 20:23:20','2025-04-30 20:23:20',NULL),(16,'Ádan Nañez','adan.nanez@unach.mx',NULL,'$2y$12$M7m7.3QsFIys9WD9r1YdzOjO0SUpCK1kvEztHCIn7lfk4.hM77Zmq',NULL,NULL,NULL,NULL,NULL,NULL,'2025-05-01 04:06:29','2025-05-01 04:06:29',NULL),(17,'Jose Damian Juarez','jose.dam@unach.mx',NULL,'$2y$12$pJv0kiZSoQR9sq4yQJHUteJfaGb4wjnLwP/40qWWF4NrARz2ZsRHy',NULL,NULL,NULL,NULL,NULL,NULL,'2025-05-01 04:57:17','2025-05-01 04:57:17',NULL),(18,'Juan Méndez','juan@unach.mx',NULL,'$2y$12$VF76KvK5J3PxFx2UoWcy7OojIoWDNQhDlYSq11ShanikdiSZisXca',NULL,NULL,NULL,NULL,NULL,NULL,'2025-05-01 04:59:33','2025-05-01 04:59:33',NULL),(19,'Roberto Zenteno','roberto@gmail.com',NULL,'$2y$12$zseyOrrCGlTaI9CCF8bSqeUmIDEZc3IKs3MW5tAljESwOpqI4hyia',NULL,NULL,NULL,NULL,NULL,NULL,'2025-05-01 05:04:40','2025-05-01 05:04:40',NULL),(20,'Jose Perez','jose@unach.mx',NULL,'$2y$12$dISmHc.6y0cK./6GjwtIRujuuex9zFAP.9dV/pPyoLuukjLex2b0G',NULL,NULL,NULL,NULL,NULL,NULL,'2025-05-01 05:10:37','2025-05-01 05:10:37',NULL),(21,'Diego Diego','diego.diego@unach.mx',NULL,'$2y$12$IOOik1TN7efPpMl0tXjm.uAnSjrM2Nv3lEK16LHC286OOJ6y5199W',NULL,NULL,NULL,NULL,NULL,NULL,'2025-05-01 05:20:12','2025-05-01 05:20:12',NULL),(22,'Cristian Alvarez','Cris.Alv@unach.mx',NULL,'$2y$12$cU5ki3iNoqirG4eU24n0qezXCZK2SgtSMOy2K3Svia0oKDegtRMNG',NULL,NULL,NULL,NULL,NULL,NULL,'2025-05-01 05:26:34','2025-05-01 05:26:34',NULL),(23,'Duhasteco Mulller','Duhasteco@unach.mx',NULL,'$2y$12$5PUbJ6p1OZWJ0zda2aBhhOfy7C9n.dgHy94n5JrQga549kUQ1oTmq',NULL,NULL,NULL,NULL,NULL,NULL,'2025-05-01 06:00:57','2025-05-01 06:00:57',NULL),(24,'Sebastian Méndez','sebastian@unach.mx',NULL,'$2y$12$.cHQ/yAgpR0Bv/Q7c4956OjMy/KhPtilgCkSqaqLpuxUxe4yTs8ba',NULL,NULL,NULL,NULL,NULL,NULL,'2025-05-01 06:08:35','2025-05-01 06:08:35',NULL),(25,'Armando Ramos','armando.ramos@unach.mx',NULL,'$2y$12$oFggo59EOKrm9wjuqxUsUOULGpaky9JDzpf/d20Y2wjiNuJ3cJGM2',NULL,NULL,NULL,NULL,NULL,NULL,'2025-05-01 06:12:34','2025-05-01 06:12:34',NULL),(26,'Blanca Nieves Moreno','blanca.moreno@unach.mx',NULL,'$2y$12$kgZIOx1oVMR06yeMHbu0DOZrCG9cjuuBMneR9tqWHW/Sv9X.oSjKe',NULL,NULL,NULL,NULL,NULL,NULL,'2025-05-01 07:26:41','2025-05-01 07:26:41',NULL),(27,'Jose Méndez','jose@admin.unach.mx',NULL,'$2y$12$sYB6Vpsk/aI8x8fkZySWVurzDIjKz5oq.UO6CMWOq83TWCZsq13Vq',NULL,NULL,NULL,NULL,NULL,NULL,'2025-05-01 07:38:37','2025-05-01 07:38:37',NULL),(28,'Georgina Méndez','prueba_prueba@unach.mx',NULL,'$2y$12$jQRwwZ/Zad2DXS3bstLqP.vxXrdE.Q/7p0QC64CNFhMoIjOvJQcAG',NULL,NULL,NULL,NULL,NULL,NULL,'2025-05-02 16:02:06','2025-05-02 16:02:06',NULL),(29,'Georgina Méndez','gina3@gmail.com',NULL,'$2y$12$3zcU1soq4Gpgy0WhiS0OvuA.HIad3z21c8ih0Kd.N4/h9nWmv4sIO',NULL,NULL,NULL,NULL,NULL,NULL,'2025-05-02 16:10:02','2025-05-02 16:10:02',NULL),(30,'Georgina Méndez','gina4@gmail.com',NULL,'$2y$12$/XihjAxsZyFdJymTYxN60O1GqhqoAXQ333EpnlELCj5acddSnEw/y',NULL,NULL,NULL,NULL,NULL,NULL,'2025-05-02 16:15:08','2025-05-02 16:15:08',NULL),(31,'Georgina Méndez','gina5@gmail.com',NULL,'$2y$12$zJ5VHistlq9bHh6JPX6tfuNFZ2qQbR.t5q1yba9r0k4DiSoscb92q',NULL,NULL,NULL,NULL,NULL,NULL,'2025-05-02 16:28:34','2025-05-02 16:28:34',NULL),(32,'Georgina Méndez','gina11@gmail.com',NULL,'$2y$12$jY4fN9U7KhIqQEOjPfpxnueRa2bT4MLrQyzca0Nln5VZazvU8Jucq',NULL,NULL,NULL,NULL,NULL,NULL,'2025-05-02 16:35:40','2025-05-02 16:35:40',NULL),(33,'Georgina Méndez','gina23@gmail.com',NULL,'$2y$12$IO95QmJTFIhhdPwX4U/wjeJW0nI4VUgVt.a5PMTsmuaakaIpSdaVu',NULL,NULL,NULL,NULL,NULL,NULL,'2025-05-02 16:42:39','2025-05-02 16:42:39',NULL),(34,'Adrian Hernández','adrian@gmail.com',NULL,'$2y$12$WORYNbC.zadWmrPRVG4LXehwhrUewrzE3w85gACZGkWnSAlWIbDIa',NULL,NULL,NULL,NULL,NULL,NULL,'2025-05-07 14:07:46','2025-05-07 14:07:46',NULL),(35,'Juan Carlos','jgarcia@universidad.edu',NULL,'contra123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(36,'María Elena','mmartinez@universidad.edu',NULL,'contra123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(37,'Luis Fernando','lrodriguez@universidad.edu',NULL,'contra123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(38,'Ana Patricia','ahernandez@universidad.edu',NULL,'contra123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(39,'Carlos Alberto','cdiaz@universidad.edu',NULL,'contra123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(40,'Laura Isabel','lvazquez@universidad.edu',NULL,'contra123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(41,'Roberto Antonio','rjimenez@universidad.edu',NULL,'contra123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(42,'Sofía Guadalupe','smoreno@universidad.edu',NULL,'contra123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(43,'Jorge Eduardo','jalvarez@unach.mx',NULL,'contra123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(44,'Patricia Beatriz','promero@universidad.edu',NULL,'contra123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(45,'José Gerardo López','jose@edu.profesor.com','2025-05-08 12:58:53','$2y$12$l/lR/k8.j4rFigepFmSgreRtNsaJc4TtMINBuiuuvg9dqA36GVPTK','eyJpdiI6Ikhjc0YyWnEvMUpLak1GVXN5eWxlSXc9PSIsInZhbHVlIjoiK2h6N3BCUFdobFNKMGpnU2prSk9paFhDZEsreFNwWFY5dXNIeXFrbW4zST0iLCJtYWMiOiJkMGMzYzkyOGE4ODk5NzA2ZWIzOTNiZDk3ZWMyYzM4NmU5NmFhNmM0NThlYzg0Mzc1OTc0OTEwOTdiYTcwOTExIiwidGFnIjoiIn0=','eyJpdiI6Ii9MVk9NYWdPb1lxamU5ekpZMW93a2c9PSIsInZhbHVlIjoidkNIcUtwbmpmU3hSb0h5WmdQa2xpamhwUnpKekhSOE5qdE1Hd2RoVXdPWXRaOVU5T0FVM1JFdDRjdENFV1Z3alNCNUk2a1htWEduaWdHYXYrdHhXQTB2Z0l2YUQ0d0lzdlVDWXE0eC9FKzdleWRac2hPeEdPam9JUHZvbEovQTIvMUE3ZFhGTGpYOU9wSWs4UG81aFZkbDJCa05aV2d2M1ZjQldpOUJrMjhTc3JRRjQ5MDdJUjNwREk5U0FlQnBaOGF1eGo1RnFldlNNRG1QMFJXbEYvZVh3U01RdmJ0ZkErQ2lzaW9Id3lwbGE2Q0d6R1ZVaW4xQ1hUUG9DeFA1U3AvRnpKTVhWeDljQmdUakUvMTkxY3c9PSIsIm1hYyI6IjMxODk4MzU2M2NjYThjZTk5ZTAxZjEyYTI4OTMyNDIwYzdlNDMxZDBlNWIzOTdiYTlmNWQ3NDYyOTEyMDAyODgiLCJ0YWciOiIifQ==','2025-05-13 20:58:07',NULL,NULL,NULL,'2025-05-08 12:53:37','2025-05-13 20:58:07',NULL),(46,'José Román Méndez','jose.roman@edu.com',NULL,'$2y$12$B7FYGF7GnTFyJyJQLvhDHecmH4GyI9i8jzDZQycv3VEJ0QpiO.IKi',NULL,NULL,NULL,NULL,NULL,NULL,'2025-05-08 22:56:09','2025-05-08 22:56:09',NULL),(47,'Sebastian Méndez','sebastian@edu.com',NULL,'$2y$12$BZF/4NzgENTC64CvwSHo6uTi6slDq.R7KbPfoC5DA8sI3k6SzavUe',NULL,NULL,NULL,NULL,NULL,NULL,'2025-05-08 23:00:40','2025-05-08 23:00:40',NULL),(48,'Manuel Alejandro Pérez','perez.sancehz@edu.com',NULL,'$2y$12$3tqPpaVrERWvy0UAvrJrfuSYmaKgRj80EN3JO4PJIHCz78XfEUDqa',NULL,NULL,NULL,NULL,NULL,NULL,'2025-05-08 23:06:55','2025-05-08 23:06:55',NULL),(49,'José Zenteno','zenteno@edu.com',NULL,'$2y$12$8zPKzBLefVFK3zSaqEQ5yupzod5/0vEWAfG72XXqLCn3UMlClyQVS',NULL,NULL,NULL,NULL,NULL,NULL,'2025-05-11 13:29:20','2025-05-13 16:50:25',NULL),(50,'Humberto Santiago','humberto@edu.com',NULL,'$2y$12$rT10CqZ4RJgasQTOrr6/Ie0l1sj1g0y7xuX03pDShyQradz0wDUZC',NULL,NULL,NULL,NULL,NULL,NULL,'2025-05-11 13:33:40','2025-05-11 13:33:40',NULL),(51,'Diego López','diego@edu.com',NULL,'$2y$12$5iU.W0nrrhGO8pmQ33pt5ezPf94AB0pRC/b2k96UH97nU3so5/OIW',NULL,NULL,NULL,NULL,NULL,NULL,'2025-05-13 22:29:38','2025-05-13 22:29:38',NULL),(52,'Sara López','sara@edu.com',NULL,'$2y$12$BUXZRlP/PS7Ci3M9NexRrOA5SWDTeYeE8HB/gYRigSHOHpVW96vXa',NULL,NULL,NULL,NULL,NULL,NULL,'2025-05-13 22:43:53','2025-05-13 22:43:53',NULL),(53,'Jorge López','jorgeg@edu.com',NULL,'$2y$12$Tij9Crnp/SSlstOGVjbqKuPPQtoctL4lV7ayvEpQxSj/AXjierRLa',NULL,NULL,NULL,NULL,NULL,NULL,'2025-05-13 23:24:26','2025-05-13 23:24:26',NULL),(55,'Flores Armando','nosoyflorista@unach.mx',NULL,'$2y$12$JQ7eXUPpLcnB3jO/t.a6Uef2pHW3HCpPi8Kt8rIOh4E4tRzd7BCYu',NULL,NULL,NULL,NULL,NULL,NULL,'2025-05-13 23:52:16','2025-05-13 23:52:16',NULL),(56,'Juan Fernandez','c',NULL,'$2y$12$AiCxvHHTEm1ffF85sbEoKu7xA2w53YkA5W7ve7ri8LTD9938CsncS',NULL,NULL,NULL,NULL,NULL,NULL,'2025-05-14 00:41:35','2025-05-14 00:41:35',NULL),(59,'Admin','test_admin2@gmail.com','2025-05-17 03:28:56','$2y$12$nbEW4dIfsOEG1Q7O5eE3NeYCxtw5/3EnVpXUu/2qcDarY.lzCYt9i',NULL,NULL,NULL,'ekzuwHpiFR7aAC5I8fzDIUDxgsn11q5dgGkbG12rNuXM8j1FU04oEhxCB8jw',NULL,NULL,'2025-05-17 03:28:56','2025-05-17 03:28:56',NULL),(60,'Ramón López','ramon@edu.com',NULL,'$2y$12$iMFFlfWEkbSRk.DOhk4HmOnageICoI.kbDa7GM5ZsKtrewDb/euM.',NULL,NULL,NULL,NULL,NULL,NULL,'2025-05-17 03:30:47','2025-05-17 03:30:47',NULL);
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

-- Dump completed on 2025-06-02 22:29:10

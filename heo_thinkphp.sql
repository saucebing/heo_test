-- MySQL dump 10.14  Distrib 5.5.33a-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: thinkphp
-- ------------------------------------------------------
-- Server version	5.5.33a-MariaDB

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
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `test` (
  `id` int(8) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `city` varchar(255)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test`
--

LOCK TABLES `test` WRITE;
/*!40000 ALTER TABLE `test` DISABLE KEYS */;
INSERT INTO `test` VALUES (1,'234',NULL),(2,'234',NULL),(4,'234',NULL),(45,'233',NULL),(41,'233',NULL),(31,'233',NULL);
/*!40000 ALTER TABLE `test` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `think_customer`
--

DROP TABLE IF EXISTS `think_customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `think_customer` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `think_customer`
--

LOCK TABLES `think_customer` WRITE;
/*!40000 ALTER TABLE `think_customer` DISABLE KEYS */;
INSERT INTO `think_customer` VALUES (1,'123','123','m','123@qq.com'),(2,'zhhuab','111','m','111@qq.com'),(3,'33online','11223344','f','1316267054@qq.com'),(4,'1234','1234','m','123@qq.com'),(5,'cbeiw','123','m','123@123.com'),(6,'abc','abc','f','abc@q.a'),(7,'1233','1233','m','123@qq.com'),(8,'aaa','aaa','m','aa@qq.com'),(9,'222','222','m','222@as.com'),(10,'333','333','m','a@q.cin'),(11,'444','444','m','1@2.com'),(12,'bbb','bbb','m','123@123.com'),(13,'111','111','m','10@qq.com'),(14,'666','666','m','666@1.com'),(15,'ccc ','ccc','m','abc@q.a'),(16,'ddd','ddd','m','abc@q.a'),(17,'fff','fff','m','abc@q.a'),(18,'ttt','ttt','m','abc@q.a');
/*!40000 ALTER TABLE `think_customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `think_data`
--

DROP TABLE IF EXISTS `think_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `think_data` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `data` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `think_data`
--

LOCK TABLES `think_data` WRITE;
/*!40000 ALTER TABLE `think_data` DISABLE KEYS */;
INSERT INTO `think_data` VALUES (1,'thinkphp'),(2,'php'),(3,'framework');
/*!40000 ALTER TABLE `think_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `think_info`
--

DROP TABLE IF EXISTS `think_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `think_info` (
  `firstname` varchar(255) NOT NULL,
  `secondname` varchar(255) DEFAULT NULL,
  `id` int(8) DEFAULT NULL,
  PRIMARY KEY (`firstname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `think_info`
--

LOCK TABLES `think_info` WRITE;
/*!40000 ALTER TABLE `think_info` DISABLE KEYS */;
INSERT INTO `think_info` VALUES ('123','sgsd',2),('1sdfdf','sgs234',3),('adsf','sgsd',1),('sdf','sg34',4);
/*!40000 ALTER TABLE `think_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `think_message`
--

DROP TABLE IF EXISTS `think_message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `think_message` (
  `mid` int(8) NOT NULL AUTO_INCREMENT,
  `msid` int(8) DEFAULT NULL,
  `mrid` int(8) DEFAULT NULL,
  `mtid` int(8) DEFAULT NULL,
  `mtype` varchar(8) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `think_message`
--

LOCK TABLES `think_message` WRITE;
/*!40000 ALTER TABLE `think_message` DISABLE KEYS */;
INSERT INTO `think_message` VALUES (1,9,7,-1,'1000','Hello!'),(2,9,7,-1,'1000','Can you receive my message?'),(3,9,6,-1,'1000','eee'),(4,6,8,36,'10','Cancel Posed Task'),(9,7,9,-1,'1000','You are a fool.'),(8,7,3,-1,'1000','werwedfs'),(7,6,9,41,'20','Cancel Received Task');
/*!40000 ALTER TABLE `think_message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `think_person`
--

DROP TABLE IF EXISTS `think_person`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `think_person` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(255) DEFAULT NULL,
  `passwd` varchar(255) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `think_person`
--

LOCK TABLES `think_person` WRITE;
/*!40000 ALTER TABLE `think_person` DISABLE KEYS */;
INSERT INTO `think_person` VALUES (1,'123','123','m');
/*!40000 ALTER TABLE `think_person` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `think_task_info`
--

DROP TABLE IF EXISTS `think_task_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `think_task_info` (
  `tid` int(8) NOT NULL AUTO_INCREMENT,
  `pid` int(8) NOT NULL,
  `rid` int(8) DEFAULT '-1',
  `type` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `rgender` char(1) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'New Pose',
  `taskgpp` int(8) DEFAULT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `think_task_info`
--

LOCK TABLES `think_task_info` WRITE;
/*!40000 ALTER TABLE `think_task_info` DISABLE KEYS */;
INSERT INTO `think_task_info` VALUES (36,6,8,'Fetch the express','buy an apple','please help me buy an apple','m','no','New Pose',2),(44,9,-1,'Fetch the express','I want to travel','Who can go with me?','m','','New Pose',2),(38,8,9,'Pack a meal','PackAMeal','帮我打包～　　至　慎六　３０8','m','thank you very much','Received',1),(39,8,-1,'Fetch the express','组队吃宵夜～　今晚10:45','一起去贝岗吃宵夜，有么？　10:45p.m.','m','来吧～　','New Pose',0),(41,9,6,'Pack a meal','I want a bowl of noodle.','Please help me.','m','I will give you money.','Received',5),(42,9,-1,'Pack a meal','Tell me a joke','Let me laugh','m','Nothing else.','New Pose',6),(43,9,-1,'Fetch the express','Can you share happy with me?','I am so sad now.','f','I expect you can.','New Pose',3);
/*!40000 ALTER TABLE `think_task_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `think_test`
--

DROP TABLE IF EXISTS `think_test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `think_test` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `think_test`
--

LOCK TABLES `think_test` WRITE;
/*!40000 ALTER TABLE `think_test` DISABLE KEYS */;
INSERT INTO `think_test` VALUES (1,'abc'),(2,'bc'),(3,'sd');
/*!40000 ALTER TABLE `think_test` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `think_user_info`
--

DROP TABLE IF EXISTS `think_user_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `think_user_info` (
  `uid` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` char(1) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gpp` int(8) NOT NULL DEFAULT '20',
  `area` varchar(255) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `think_user_info`
--

LOCK TABLES `think_user_info` WRITE;
/*!40000 ALTER TABLE `think_user_info` DISABLE KEYS */;
INSERT INTO `think_user_info` VALUES (1,'aaa','aaa','m','abc@q.a',20,''),(2,'bbb','bbb','m','abc@q.a',20,'East Campus'),(3,'123','123','m','abc@q.a',20,'East Campus'),(4,'qqq','qqq','m','abc@q.a',20,'East Campus'),(5,'ttt','ttt','m','abc@q.a',20,'East Campus'),(6,'you','you','m','abc@q.a',20,'East Campus'),(7,'33online','11223344','m','1316267054@qq.com',20,'East Campus'),(8,'eric','eric','m','nameljh@sina.com',20,'East Campus'),(9,'at','at','m','abc@q.a',20,'East Campus'),(-1,'NULL','','','',20,'');
/*!40000 ALTER TABLE `think_user_info` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-11-17 15:08:24

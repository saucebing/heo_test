-- MySQL dump 10.13  Distrib 5.5.28, for Linux (i686)
--
-- Host: localhost    Database: thinkphp
-- ------------------------------------------------------
-- Server version	5.5.28-log

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
  `city` varchar(255) DEFAULT NULL,
  `ctime` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test`
--

LOCK TABLES `test` WRITE;
/*!40000 ALTER TABLE `test` DISABLE KEYS */;
INSERT INTO `test` VALUES (1,'234',NULL,NULL),(2,'234',NULL,NULL),(4,'234',NULL,NULL),(45,'233',NULL,NULL),(41,'233',NULL,NULL),(31,'233',NULL,NULL);
/*!40000 ALTER TABLE `test` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `test2`
--

DROP TABLE IF EXISTS `test2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `test2` (
  `id` int(8) DEFAULT NULL,
  `id2` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test2`
--

LOCK TABLES `test2` WRITE;
/*!40000 ALTER TABLE `test2` DISABLE KEYS */;
INSERT INTO `test2` VALUES (2,2);
/*!40000 ALTER TABLE `test2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `test3`
--

DROP TABLE IF EXISTS `test3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `test3` (
  `id` int(8) DEFAULT NULL,
  `ctime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test3`
--

LOCK TABLES `test3` WRITE;
/*!40000 ALTER TABLE `test3` DISABLE KEYS */;
INSERT INTO `test3` VALUES (2,'2013-11-18 18:15:01'),(3,'2013-11-18 18:15:22');
/*!40000 ALTER TABLE `test3` ENABLE KEYS */;
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
-- Table structure for table `think_feedback`
--

DROP TABLE IF EXISTS `think_feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `think_feedback` (
  `uid` int(8) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `feedbackcreatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `think_feedback`
--

LOCK TABLES `think_feedback` WRITE;
/*!40000 ALTER TABLE `think_feedback` DISABLE KEYS */;
INSERT INTO `think_feedback` VALUES (9,'at','Good!','0000-00-00 00:00:00'),(9,'at','Good!','0000-00-00 00:00:00'),(9,'at','You can do it better!','0000-00-00 00:00:00'),(9,'at','Yes,you can.','0000-00-00 00:00:00'),(9,'at','','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `think_feedback` ENABLE KEYS */;
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
  `messagecreatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`mid`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `think_message`
--

LOCK TABLES `think_message` WRITE;
/*!40000 ALTER TABLE `think_message` DISABLE KEYS */;
INSERT INTO `think_message` VALUES (1,9,7,-1,'1000','Hello!','0000-00-00 00:00:00'),(2,9,7,-1,'1000','Can you receive my message?','0000-00-00 00:00:00'),(3,9,6,-1,'1000','eee','0000-00-00 00:00:00'),(4,6,8,36,'10','Cancel Posed Task','0000-00-00 00:00:00'),(9,7,9,-1,'1001','You are a fool.','0000-00-00 00:00:00'),(8,7,3,-1,'1000','werwedfs','0000-00-00 00:00:00'),(22,15,9,-1,'1001','小蓝啦啦啦','0000-00-00 00:00:00'),(20,14,9,-1,'1001','159357','0000-00-00 00:00:00'),(21,9,14,-1,'1001','eee','0000-00-00 00:00:00'),(23,9,15,-1,'1001','cao!','0000-00-00 00:00:00'),(24,15,9,-1,'1001','heehehhehehe','0000-00-00 00:00:00'),(25,9,15,-1,'1001','还可以输中文','0000-00-00 00:00:00'),(27,9,15,48,'20','Cancel Received Task','0000-00-00 00:00:00');
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
-- Table structure for table `think_prosecute`
--

DROP TABLE IF EXISTS `think_prosecute`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `think_prosecute` (
  `proid` int(8) NOT NULL AUTO_INCREMENT,
  `prosid` int(8) DEFAULT NULL,
  `prorid` int(8) DEFAULT NULL,
  `protid` int(8) DEFAULT NULL,
  `proreason` varchar(255) DEFAULT NULL,
  `procreatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`proid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `think_prosecute`
--

LOCK TABLES `think_prosecute` WRITE;
/*!40000 ALTER TABLE `think_prosecute` DISABLE KEYS */;
INSERT INTO `think_prosecute` VALUES (1,17,-1,0,'adffwer','2013-11-19 06:42:45'),(2,17,-1,0,'adffwerwer','2013-11-19 06:43:49'),(3,17,-1,52,'adffwerasf','2013-11-19 06:44:27'),(4,17,11,-1,'adffwerwerwer','2013-11-19 06:47:25');
/*!40000 ALTER TABLE `think_prosecute` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `think_submiss`
--

DROP TABLE IF EXISTS `think_submiss`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `think_submiss` (
  `subid` int(8) NOT NULL AUTO_INCREMENT,
  `subuid` int(8) DEFAULT NULL,
  `subcontent` text,
  `subcreatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`subid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `think_submiss`
--

LOCK TABLES `think_submiss` WRITE;
/*!40000 ALTER TABLE `think_submiss` DISABLE KEYS */;
INSERT INTO `think_submiss` VALUES (1,NULL,'adfsdf','2013-11-19 08:04:10'),(2,NULL,'adfsdfasdf','2013-11-19 08:04:56'),(3,NULL,'asdfsafsdasgdsdgs','2013-11-19 08:10:28'),(4,17,'sgdftrwetgf','2013-11-19 08:11:26');
/*!40000 ALTER TABLE `think_submiss` ENABLE KEYS */;
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
  `taskcreatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `availabletime` datetime DEFAULT NULL,
  `accomplishtime` datetime DEFAULT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `think_task_info`
--

LOCK TABLES `think_task_info` WRITE;
/*!40000 ALTER TABLE `think_task_info` DISABLE KEYS */;
INSERT INTO `think_task_info` VALUES (36,6,8,'Fetch the express','buy an apple','please help me buy an apple','m','no','New Pose',2,'0000-00-00 00:00:00',NULL,NULL),(44,9,14,'Fetch the express','I want to travel','Who can go with me?','m','','Accomplished',2,'0000-00-00 00:00:00',NULL,NULL),(38,8,9,'Pack a meal','PackAMeal','帮我打包～　　至　慎六　３０8','m','thank you very much','Received',1,'0000-00-00 00:00:00',NULL,NULL),(39,8,11,'Fetch the express','组队吃宵夜～　今晚10:45','一起去贝岗吃宵夜，有么？　10:45p.m.','m','来吧～　','Received',0,'0000-00-00 00:00:00',NULL,NULL),(41,9,-1,'Pack a meal','I want a bowl of noodle.','Please help me.','m','I will give you money.','New Pose',5,'0000-00-00 00:00:00',NULL,NULL),(42,9,-1,'Pack a meal','Tell me a joke','Let me laugh','m','Nothing else.','New Pose',6,'0000-00-00 00:00:00',NULL,NULL),(45,9,-1,'Fetch the express','test','test','m','test','New Pose',2,'0000-00-00 00:00:00',NULL,NULL),(48,15,9,'Fetch the express','gogogo','gogogo','m','nothing','Received',2,'0000-00-00 00:00:00',NULL,NULL),(49,17,-1,'Fetch the express','asdf','dsf','m','','New Pose',0,'2013-11-18 18:48:18','2013-11-19 12:32:34','2013-11-20 12:33:04'),(50,17,-1,'Fetch the express','saf','234','m','','New Pose',0,'2013-11-18 18:50:24','0000-00-00 00:00:00','0000-00-00 00:00:00'),(51,17,-1,'Fetch the express','ad','sf','m','','New Pose',0,'2013-11-18 18:52:43','2013-11-10 12:23:43','0000-00-00 00:00:00'),(52,17,-1,'Fetch the express','ad','sdf','m','','New Pose',0,'2013-11-18 18:54:00','2013-11-13 23:23:04','2013-11-21 02:32:34'),(53,17,-1,'Fetch the express','aa','aa','m','','New Pose',0,'2013-11-19 05:26:26','2013-11-19 11:11:11','2013-11-19 21:11:11'),(54,17,-1,'Fetch the express','aaa','aaa','m','','New Pose',0,'2013-11-19 05:38:35','2013-11-19 13:44:12','2013-11-19 14:14:14');
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
  `usercreatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `think_user_info`
--

LOCK TABLES `think_user_info` WRITE;
/*!40000 ALTER TABLE `think_user_info` DISABLE KEYS */;
INSERT INTO `think_user_info` VALUES (1,'aaa','aaa','m','abc@q.a',20,'','0000-00-00 00:00:00'),(2,'bbb','bbb','m','abc@q.a',20,'East Campus','0000-00-00 00:00:00'),(3,'123','123','m','abc@q.a',20,'East Campus','0000-00-00 00:00:00'),(4,'qqq','qqq','m','abc@q.a',20,'East Campus','0000-00-00 00:00:00'),(5,'ttt','ttt','m','abc@q.a',20,'East Campus','0000-00-00 00:00:00'),(6,'you','you','m','abc@q.a',20,'East Campus','0000-00-00 00:00:00'),(7,'33online','11223344','m','1316267054@qq.com',20,'East Campus','0000-00-00 00:00:00'),(8,'eric','eric','m','nameljh@sina.com',20,'East Campus','0000-00-00 00:00:00'),(9,'at','at','m','abc@q.a',10,'East Campus','0000-00-00 00:00:00'),(-1,'NULL','','','',20,'','0000-00-00 00:00:00'),(10,'haha','haha','m','abc@q.a',20,'East Campus','0000-00-00 00:00:00'),(11,'lala','lala','m','abc@q.a',5,'East Campus','0000-00-00 00:00:00'),(12,'ppp','[[[','m','abc@q.a',20,'East Campus','0000-00-00 00:00:00'),(13,'rrr','rrr','m','abc@q.a',20,'East Campus','0000-00-00 00:00:00'),(14,'chesternimiz','zxcvb','m','648345005@qq.com',20,'East Campus','0000-00-00 00:00:00'),(15,'zhhuab','111','m','111@qq.com',20,'East Campus','0000-00-00 00:00:00'),(16,'hehe','hehe','f','a@b.com',100,'East Campus','0000-00-00 00:00:00'),(17,'wa','wa','m','abc@q.a',20,'East Campus','2013-11-18 18:41:11');
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

-- Dump completed on 2013-11-19 16:36:07

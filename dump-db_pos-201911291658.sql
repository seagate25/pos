-- MySQL dump 10.13  Distrib 5.7.12, for Win32 (AMD64)
--
-- Host: 192.168.169.26    Database: db_pos
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.22-MariaDB

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
-- Table structure for table `as_accounts`
--

DROP TABLE IF EXISTS `as_accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_accounts` (
  `accountID` int(11) NOT NULL AUTO_INCREMENT,
  `accountCode` varchar(10) NOT NULL,
  `accountName` varchar(50) NOT NULL,
  `accountStatus` char(1) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`accountID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_accounts`
--

LOCK TABLES `as_accounts` WRITE;
/*!40000 ALTER TABLE `as_accounts` DISABLE KEYS */;
/*!40000 ALTER TABLE `as_accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_auth`
--

DROP TABLE IF EXISTS `as_auth`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_auth` (
  `authID` int(11) NOT NULL AUTO_INCREMENT,
  `authGroupID` int(11) NOT NULL,
  `authMenuID` int(11) NOT NULL,
  `authView` int(1) NOT NULL,
  `authCreate` int(1) NOT NULL,
  `authUpdate` int(1) NOT NULL,
  `authDelete` int(1) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  PRIMARY KEY (`authID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_auth`
--

LOCK TABLES `as_auth` WRITE;
/*!40000 ALTER TABLE `as_auth` DISABLE KEYS */;
INSERT INTO `as_auth` VALUES (1,1,1,1,1,1,1,'2019-11-29 15:30:00',1),(2,1,2,1,1,1,1,'2019-11-29 15:30:00',1),(3,1,3,1,1,1,1,'2019-11-29 15:30:00',1),(4,1,4,1,1,1,1,'2019-11-29 15:30:00',1),(5,1,5,1,1,1,1,'2019-11-29 15:30:00',1),(6,1,6,1,1,1,1,'2019-11-29 15:30:00',1);
/*!40000 ALTER TABLE `as_auth` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_barcodes`
--

DROP TABLE IF EXISTS `as_barcodes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_barcodes` (
  `barcodeID` int(11) NOT NULL AUTO_INCREMENT,
  `productBarcode` varchar(20) NOT NULL,
  `qty` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`barcodeID`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_barcodes`
--

LOCK TABLES `as_barcodes` WRITE;
/*!40000 ALTER TABLE `as_barcodes` DISABLE KEYS */;
/*!40000 ALTER TABLE `as_barcodes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_brands`
--

DROP TABLE IF EXISTS `as_brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_brands` (
  `brandID` int(11) NOT NULL AUTO_INCREMENT,
  `brandName` varchar(100) NOT NULL,
  `brandStatus` char(1) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`brandID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_brands`
--

LOCK TABLES `as_brands` WRITE;
/*!40000 ALTER TABLE `as_brands` DISABLE KEYS */;
/*!40000 ALTER TABLE `as_brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_buy_detail_transactions`
--

DROP TABLE IF EXISTS `as_buy_detail_transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_buy_detail_transactions` (
  `detailID` int(11) NOT NULL AUTO_INCREMENT,
  `invoiceBuyID` varchar(16) NOT NULL,
  `productBarcode` varchar(16) NOT NULL,
  `detailBuyPrice` int(11) NOT NULL,
  `detailBuyQty` int(11) NOT NULL,
  `detailBuySubtotal` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserId` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`detailID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_buy_detail_transactions`
--

LOCK TABLES `as_buy_detail_transactions` WRITE;
/*!40000 ALTER TABLE `as_buy_detail_transactions` DISABLE KEYS */;
INSERT INTO `as_buy_detail_transactions` VALUES (3,'BJSH141025113296','3212758009345',4500,5,22500,'2014-10-25 23:32:23',1,'2014-10-25 23:32:51',1),(5,'BJSH141025113296','2140912123601',11990,10,119900,'2014-10-25 23:32:58',1,'2014-10-25 23:33:03',1);
/*!40000 ALTER TABLE `as_buy_detail_transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_buy_transactions`
--

DROP TABLE IF EXISTS `as_buy_transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_buy_transactions` (
  `trxID` int(11) NOT NULL AUTO_INCREMENT,
  `invoiceBuyID` varchar(16) NOT NULL,
  `invoiceSupplier` varchar(50) NOT NULL,
  `supplierID` varchar(10) NOT NULL,
  `trxFullName` varchar(100) NOT NULL,
  `trxAddress` text NOT NULL,
  `trxPhone` varchar(20) NOT NULL,
  `trxDate` date NOT NULL,
  `trxSubtotal` int(11) NOT NULL,
  `trxDiscount` int(11) NOT NULL,
  `trxTotal` int(11) NOT NULL,
  `trxDP` int(11) NOT NULL,
  `trxStatus` char(1) NOT NULL,
  `trxTerminDate` date NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`trxID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_buy_transactions`
--

LOCK TABLES `as_buy_transactions` WRITE;
/*!40000 ALTER TABLE `as_buy_transactions` DISABLE KEYS */;
INSERT INTO `as_buy_transactions` VALUES (1,'BJSH141025113296','45734578475847874','0001','OT Group','Jakarta Pusat','(021) 73263267','2014-10-25',142400,0,142400,0,'2','2014-11-25','2014-10-25 23:33:28',1,'2014-10-25 23:37:48',1);
/*!40000 ALTER TABLE `as_buy_transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_categories`
--

DROP TABLE IF EXISTS `as_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_categories` (
  `categoryID` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(100) NOT NULL,
  `categoryStatus` char(1) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_categories`
--

LOCK TABLES `as_categories` WRITE;
/*!40000 ALTER TABLE `as_categories` DISABLE KEYS */;
INSERT INTO `as_categories` VALUES (8,'Alat Kecantikan','Y','2014-10-25 08:41:42',1,'0000-00-00 00:00:00',0),(9,'Perlengkapan Bayi','Y','2014-10-25 08:41:51',1,'0000-00-00 00:00:00',0),(10,'Minyak Wangi','Y','2014-10-25 08:42:07',1,'0000-00-00 00:00:00',0),(11,'Minuman','Y','2014-10-25 08:42:15',1,'0000-00-00 00:00:00',0),(12,'Buku dan Majalah','Y','2014-10-25 08:42:21',1,'0000-00-00 00:00:00',0),(13,'Makanan Ringan','Y','2014-10-25 08:42:57',1,'0000-00-00 00:00:00',0);
/*!40000 ALTER TABLE `as_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_debts`
--

DROP TABLE IF EXISTS `as_debts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_debts` (
  `debtID` int(11) NOT NULL AUTO_INCREMENT,
  `invoiceID` varchar(20) NOT NULL,
  `status` char(1) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`debtID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_debts`
--

LOCK TABLES `as_debts` WRITE;
/*!40000 ALTER TABLE `as_debts` DISABLE KEYS */;
/*!40000 ALTER TABLE `as_debts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_debts_payment`
--

DROP TABLE IF EXISTS `as_debts_payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_debts_payment` (
  `paymentID` int(11) NOT NULL AUTO_INCREMENT,
  `debtID` int(11) NOT NULL,
  `debtDate` date NOT NULL,
  `debtPay` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`paymentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_debts_payment`
--

LOCK TABLES `as_debts_payment` WRITE;
/*!40000 ALTER TABLE `as_debts_payment` DISABLE KEYS */;
/*!40000 ALTER TABLE `as_debts_payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_funds`
--

DROP TABLE IF EXISTS `as_funds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_funds` (
  `fundID` int(11) NOT NULL AUTO_INCREMENT,
  `accountID` int(11) NOT NULL,
  `fundDate` date NOT NULL,
  `fundAmount` int(11) NOT NULL,
  `fundNote` varchar(150) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserId` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`fundID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_funds`
--

LOCK TABLES `as_funds` WRITE;
/*!40000 ALTER TABLE `as_funds` DISABLE KEYS */;
/*!40000 ALTER TABLE `as_funds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_group`
--

DROP TABLE IF EXISTS `as_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_group` (
  `groupID` int(11) NOT NULL AUTO_INCREMENT,
  `groupName` varchar(100) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`groupID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_group`
--

LOCK TABLES `as_group` WRITE;
/*!40000 ALTER TABLE `as_group` DISABLE KEYS */;
INSERT INTO `as_group` VALUES (1,'Administrator','2014-09-23 12:20:29',0,'0000-00-00 00:00:00',0),(2,'Staff','2014-10-31 15:47:59',1,'2014-10-31 15:56:23',1);
/*!40000 ALTER TABLE `as_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_identity`
--

DROP TABLE IF EXISTS `as_identity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_identity` (
  `identityID` int(11) NOT NULL AUTO_INCREMENT,
  `identityName` varchar(100) NOT NULL,
  `identityAddress` varchar(200) NOT NULL,
  `identityPhone` varchar(20) NOT NULL,
  `identityEmail` varchar(100) NOT NULL,
  `identityImage` text NOT NULL,
  `identityOwner` varchar(100) NOT NULL,
  `identityOwnerPhone` varchar(20) NOT NULL,
  `identityPPN` varchar(10) NOT NULL,
  `identityPrintSale` int(11) NOT NULL,
  `identityPrintBuy` int(11) NOT NULL,
  `identityPrintRetur` int(11) NOT NULL,
  `identityPrintDebt` int(11) NOT NULL,
  `identityPrintReceive` int(11) NOT NULL,
  `identityPrintReport` int(11) NOT NULL,
  `identityNPWP` varchar(50) NOT NULL,
  `identityPKP` varchar(50) NOT NULL,
  `identityPKPDate` date NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`identityID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_identity`
--

LOCK TABLES `as_identity` WRITE;
/*!40000 ALTER TABLE `as_identity` DISABLE KEYS */;
/*!40000 ALTER TABLE `as_identity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_members`
--

DROP TABLE IF EXISTS `as_members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_members` (
  `memberID` int(11) NOT NULL AUTO_INCREMENT,
  `memberCode` char(5) NOT NULL,
  `memberFullName` varchar(100) NOT NULL,
  `memberAddress` text NOT NULL,
  `memberPhone` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`memberID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_members`
--

LOCK TABLES `as_members` WRITE;
/*!40000 ALTER TABLE `as_members` DISABLE KEYS */;
INSERT INTO `as_members` VALUES (1,'00001','CV. ASFA Solution','Jl. Pegadaian No. 38 RT. 01 RW. 01 Arjawinangun - Cirebon','(0231) 358630','2014-10-25 10:57:47',1,'0000-00-00 00:00:00',0),(2,'00002','Vans Motor','Jl. Ki Hajar Dewantara No. 130 Arjawinangun Cirebon','(0231) 359000','2014-10-25 10:58:07',1,'0000-00-00 00:00:00',0);
/*!40000 ALTER TABLE `as_members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_menu`
--

DROP TABLE IF EXISTS `as_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_menu` (
  `menuID` int(11) NOT NULL AUTO_INCREMENT,
  `menuParentID` int(11) NOT NULL,
  `menuName` varchar(100) NOT NULL,
  `menuUri` varchar(100) DEFAULT NULL,
  `menuIcon` varchar(100) DEFAULT NULL,
  `menuOrder` int(11) NOT NULL,
  `menuStatus` int(1) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`menuID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_menu`
--

LOCK TABLES `as_menu` WRITE;
/*!40000 ALTER TABLE `as_menu` DISABLE KEYS */;
INSERT INTO `as_menu` VALUES (1,0,'Dashboard','dashboard','flaticon2-architecture-and-city',1,1,'2019-11-29 15:30:00',1,'2019-11-29 15:30:00',1),(2,0,'Pengaturan Sistem','#','flaticon2-console',20,1,'2019-11-29 15:30:00',1,'2019-11-29 15:30:00',1),(3,2,'Hak Akses','privillege','',1,1,'2019-11-29 15:30:00',1,'2019-11-29 15:30:00',1),(4,2,'Grup','group','',2,1,'2019-11-29 15:30:00',1,'2019-11-29 15:30:00',1),(5,2,'Menu','menu','',3,1,'2019-11-29 15:30:00',1,'2019-11-29 15:30:00',1),(6,2,'User','user','',4,1,'2019-11-29 15:30:00',1,'2019-11-29 15:30:00',1);
/*!40000 ALTER TABLE `as_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_products`
--

DROP TABLE IF EXISTS `as_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_products` (
  `productID` int(11) NOT NULL AUTO_INCREMENT,
  `supplierID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `brandID` int(11) NOT NULL,
  `productBarcode` varchar(20) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `productImei` varchar(50) NOT NULL,
  `productBuyPrice` int(11) NOT NULL,
  `productSalePrice` int(11) NOT NULL,
  `productDiscount` int(11) NOT NULL,
  `productStock` int(11) NOT NULL,
  `productNote` text NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`productID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_products`
--

LOCK TABLES `as_products` WRITE;
/*!40000 ALTER TABLE `as_products` DISABLE KEYS */;
/*!40000 ALTER TABLE `as_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_receivables`
--

DROP TABLE IF EXISTS `as_receivables`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_receivables` (
  `receivableID` int(11) NOT NULL AUTO_INCREMENT,
  `invoiceID` varchar(20) NOT NULL,
  `status` char(1) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`receivableID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_receivables`
--

LOCK TABLES `as_receivables` WRITE;
/*!40000 ALTER TABLE `as_receivables` DISABLE KEYS */;
/*!40000 ALTER TABLE `as_receivables` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_receivables_payment`
--

DROP TABLE IF EXISTS `as_receivables_payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_receivables_payment` (
  `paymentID` int(11) NOT NULL AUTO_INCREMENT,
  `receivableID` int(11) NOT NULL,
  `receivableDate` date NOT NULL,
  `receivablePay` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`paymentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_receivables_payment`
--

LOCK TABLES `as_receivables_payment` WRITE;
/*!40000 ALTER TABLE `as_receivables_payment` DISABLE KEYS */;
/*!40000 ALTER TABLE `as_receivables_payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_retur_detail_transactions`
--

DROP TABLE IF EXISTS `as_retur_detail_transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_retur_detail_transactions` (
  `detailID` int(11) NOT NULL AUTO_INCREMENT,
  `invoiceReturID` varchar(16) NOT NULL,
  `productBarcode` varchar(16) NOT NULL,
  `detailReturPrice` int(11) NOT NULL,
  `detailReturQty` int(11) NOT NULL,
  `detailReturSubtotal` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`detailID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_retur_detail_transactions`
--

LOCK TABLES `as_retur_detail_transactions` WRITE;
/*!40000 ALTER TABLE `as_retur_detail_transactions` DISABLE KEYS */;
INSERT INTO `as_retur_detail_transactions` VALUES (1,'YCOG141026103632','2140912123601',11990,2,23980,'2014-10-26 10:45:05',1,'2014-10-26 10:45:11',1),(2,'YCOG141026103632','4452904810353',5600,4,22400,'2014-10-26 10:46:47',1,'2014-10-26 10:46:54',1),(5,'HKGR141026105599','3288305105689',11990,3,35970,'2014-10-27 02:54:09',1,'2014-10-27 02:54:21',1),(6,'HKGR141026105599','2140902110832',3400,3,10200,'2014-10-27 02:54:15',1,'2014-10-27 02:54:47',1),(8,'HKGR141026105599','3212758009345',4500,5,22500,'2014-10-27 02:55:07',1,'2014-10-27 02:55:12',1);
/*!40000 ALTER TABLE `as_retur_detail_transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_retur_transactions`
--

DROP TABLE IF EXISTS `as_retur_transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_retur_transactions` (
  `trxID` int(11) NOT NULL AUTO_INCREMENT,
  `invoiceReturID` varchar(16) NOT NULL,
  `supplierID` varchar(10) NOT NULL,
  `trxFullName` varchar(100) NOT NULL,
  `trxAddress` text NOT NULL,
  `trxPhone` varchar(20) NOT NULL,
  `trxDate` date NOT NULL,
  `trxTotal` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`trxID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_retur_transactions`
--

LOCK TABLES `as_retur_transactions` WRITE;
/*!40000 ALTER TABLE `as_retur_transactions` DISABLE KEYS */;
INSERT INTO `as_retur_transactions` VALUES (1,'YCOG141026103632','0001','OT Group','Jakarta Pusat','(021) 73263267','2014-10-26',46380,'2014-10-26 10:51:39',1,'2014-10-26 10:52:05',1),(2,'HKGR141026105599','0001','OT Group','Jakarta Pusat','(021) 73263267','2014-10-27',68670,'2014-10-27 02:55:52',1,'2014-10-27 02:57:12',1);
/*!40000 ALTER TABLE `as_retur_transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_sales_detail_transactions`
--

DROP TABLE IF EXISTS `as_sales_detail_transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_sales_detail_transactions` (
  `detailID` int(11) NOT NULL AUTO_INCREMENT,
  `invoiceID` varchar(16) NOT NULL,
  `productBarcode` varchar(20) NOT NULL,
  `detailModal` int(11) NOT NULL,
  `detailSubtotalModal` int(11) NOT NULL,
  `detailPrice` int(11) NOT NULL,
  `detailQty` int(11) NOT NULL,
  `note` varchar(100) NOT NULL,
  `discPercent` int(11) NOT NULL,
  `discTotal` int(11) NOT NULL,
  `detailSubtotal` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserId` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`detailID`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_sales_detail_transactions`
--

LOCK TABLES `as_sales_detail_transactions` WRITE;
/*!40000 ALTER TABLE `as_sales_detail_transactions` DISABLE KEYS */;
INSERT INTO `as_sales_detail_transactions` VALUES (12,'YSSB141025074334','3212758009345',0,0,5500,5,'',0,0,27500,'2014-10-25 19:53:19',1,'2014-10-25 19:53:43',1),(13,'YSSB141025074334','2140912123601',11990,11990,12990,1,'',0,0,12990,'2014-10-25 19:53:21',1,'0000-00-00 00:00:00',0),(14,'YSSB141025074334','4339019760411',0,0,1200,2,'',0,0,2400,'2014-10-25 19:53:24',1,'2014-10-25 19:53:31',1),(15,'FTMP141025080798','2140902110832',3400,3400,3900,1,'',0,0,3900,'2014-10-25 20:17:15',1,'0000-00-00 00:00:00',0),(17,'DEYT141026103676','2140902110832',3400,3400,3900,1,'',0,0,3900,'2014-10-26 11:30:03',1,'0000-00-00 00:00:00',0),(18,'DEYT141026103676','3288305105689',11990,11990,12990,1,'',0,0,12990,'2014-10-26 11:30:25',1,'0000-00-00 00:00:00',0);
/*!40000 ALTER TABLE `as_sales_detail_transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_sales_transactions`
--

DROP TABLE IF EXISTS `as_sales_transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_sales_transactions` (
  `trxID` int(11) NOT NULL AUTO_INCREMENT,
  `memberID` varchar(10) NOT NULL,
  `invoiceID` varchar(16) NOT NULL,
  `trxFullName` varchar(100) NOT NULL,
  `trxAddress` varchar(150) NOT NULL,
  `trxPhone` varchar(20) NOT NULL,
  `trxDate` date NOT NULL,
  `trxTotalModal` int(11) NOT NULL,
  `trxSubtotal` int(11) NOT NULL,
  `trxDiscount` int(11) NOT NULL,
  `trxPPN` int(11) NOT NULL,
  `trxTotal` int(11) NOT NULL,
  `trxPay` int(11) NOT NULL,
  `trxChange` int(11) NOT NULL,
  `trxStatus` char(1) NOT NULL,
  `trxTerminDate` date NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`trxID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_sales_transactions`
--

LOCK TABLES `as_sales_transactions` WRITE;
/*!40000 ALTER TABLE `as_sales_transactions` DISABLE KEYS */;
INSERT INTO `as_sales_transactions` VALUES (2,'','YSSB141025074334','','','','2014-10-25',0,42890,0,4289,47179,50000,2821,'1','0000-00-00','2014-10-25 19:59:58',1,'2014-10-25 20:02:52',1),(3,'00003','FTMP141025080798','GBI Arjawinangun','Jl. Kantor Pos No. 1 Arjawinangun Cirebon','(0231) 357216','2014-10-25',0,3900,0,390,4290,4500,210,'1','0000-00-00','2014-10-25 20:23:04',1,'2014-10-25 20:25:25',1);
/*!40000 ALTER TABLE `as_sales_transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_stock_opname`
--

DROP TABLE IF EXISTS `as_stock_opname`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_stock_opname` (
  `soID` int(11) NOT NULL AUTO_INCREMENT,
  `productBarcode` varchar(16) NOT NULL,
  `soDate` date NOT NULL,
  `productStock` int(11) NOT NULL,
  `realStock` int(11) NOT NULL,
  `status` char(1) NOT NULL,
  `qty` int(11) NOT NULL,
  `soDescription` varchar(100) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`soID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_stock_opname`
--

LOCK TABLES `as_stock_opname` WRITE;
/*!40000 ALTER TABLE `as_stock_opname` DISABLE KEYS */;
INSERT INTO `as_stock_opname` VALUES (1,'6527036212518','2014-10-29',45,43,'2',2,'Rusak','2014-10-29 15:57:41',1,'0000-00-00 00:00:00',0),(2,'3288305105689','2014-10-29',54,53,'2',1,'Hilang','2014-10-29 16:11:49',1,'0000-00-00 00:00:00',0);
/*!40000 ALTER TABLE `as_stock_opname` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_suppliers`
--

DROP TABLE IF EXISTS `as_suppliers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_suppliers` (
  `supplierID` int(11) NOT NULL AUTO_INCREMENT,
  `supplierCode` char(4) NOT NULL,
  `supplierName` varchar(100) NOT NULL,
  `supplierAddress` text NOT NULL,
  `supplierPhone` varchar(20) NOT NULL,
  `supplierFax` varchar(20) NOT NULL,
  `supplierContactPerson` varchar(100) NOT NULL,
  `supplierCPHp` varchar(20) NOT NULL,
  `supplierStatus` char(1) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`supplierID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_suppliers`
--

LOCK TABLES `as_suppliers` WRITE;
/*!40000 ALTER TABLE `as_suppliers` DISABLE KEYS */;
INSERT INTO `as_suppliers` VALUES (1,'0001','OT Group','Jakarta Pusat','(021) 73263267','(021) 73263267','Indriana','0812787336877','Y','2014-10-25 10:10:07',1,'0000-00-00 00:00:00',0),(2,'0002','PT. MitraComm Ekasarana','Jakarta Selatan','(021) 75419289','(021) 75419289','Hendro Purwadi','089217877736','Y','2014-10-25 10:10:44',1,'0000-00-00 00:00:00',0),(3,'0003','PT. Coba-Coba Aja','Cirebon','(0231) 358630','-','Feni Agustin','089837288882','Y','2014-10-25 10:13:01',1,'0000-00-00 00:00:00',0);
/*!40000 ALTER TABLE `as_suppliers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_users`
--

DROP TABLE IF EXISTS `as_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `as_users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `userNIP` char(4) NOT NULL,
  `userFullName` varchar(100) NOT NULL,
  `userPhone` varchar(20) NOT NULL,
  `userLevel` int(11) NOT NULL,
  `userBlocked` char(1) NOT NULL,
  `userName` varchar(32) NOT NULL,
  `userPassword` varchar(32) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_users`
--

LOCK TABLES `as_users` WRITE;
/*!40000 ALTER TABLE `as_users` DISABLE KEYS */;
INSERT INTO `as_users` VALUES (1,'0001','Agus Saputra','',1,'N','agus.saputra','e10adc3949ba59abbe56e057f20f883e','2014-09-23 12:20:29',0,'0000-00-00 00:00:00',0),(2,'0002','Feni Agustin, S.Kom.','08987300xxx',2,'Y','felicia.feni','e10adc3949ba59abbe56e057f20f883e','2014-10-31 15:47:59',1,'2014-10-31 15:56:23',1);
/*!40000 ALTER TABLE `as_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'db_pos'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-29 16:58:43

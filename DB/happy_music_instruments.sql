-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 10, 2018 at 05:22 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `happy_music_instruments`
--
CREATE DATABASE IF NOT EXISTS `happy_music_instruments` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `happy_music_instruments`;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `article_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `amount` float NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `article_categorie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_id`, `title`, `description`, `amount`, `image_name`, `article_categorie_id`) VALUES
(1, 'Selmer SE-A3S Series III', 'Série III Nouveau design 2010 Corps gravé à la main Corps, bocal et pavillon en laiton Clé de Fa# aigu Tampons en cuir Résonateurs en métal Finition: Argenté Bec S80 C* et étui souple incl.', 2524.67, 'saxophone.png', 6),
(2, 'Yamaha Cx3', 'Vestibulum eros lacus, sollicitudin at volutpat non, bibendum et lorem. In purus tellus, cursus vel massa sed, tempus varius justo. Quisque egestas felis arcu, ut posuere felis porttitor ut. Vestibulum leo tellus, pellentesque ut dictum in, auctor at dolor. Nam ut risus vel urna fringilla malesuada. In id lacus id ex vehicula consectetur. Phasellus sodales ac libero et facilisis. Maecenas placerat vitae purus et interdum. Mauris et nisl nulla. Aenean tristique blandit feugiat. Donec sed nibh rhoncus orci egestas ullamcorper in sed ante. In hac habitasse platea dictumst. Nam ultricies a neque a varius. Etiam sed elementum erat. In hac habitasse platea dictumst.', 27000, 'cx3.jpg', 1),
(5, 'FEURICH 161 PROFESSIONAL I', 'Le piano à queue Feurich 161 Professional I est le premier modèle de la gamme des pianos à queue Feurich. Le son de ce piano se distingue par des basses clairement définies, des médiums riche en nuances et des aigus d\'une belle longueur.  Ce piano est particulièrement apprécié dans le monde entier, que ce soit pour l\'enseignement ou pour l’accompagnement.', 11500, 'feurich161.jpeg', 1),
(6, 'Steinway et sons', 'Ce piano a bénéficié d\'une restauration soignée et complète: structure harmonique, cordes, chevilles, marteaux, meuble.  Doté d\'une richesse de timbre raffinée, signature de la marque, la sonorité déploie une exceptionnelle dynamique. Grande sensibilité aux nuances servie par un toucher très précis.', 45657, 'steinwaymodels.png', 1),
(10, 'Fender ', 'Table épicéa massifDos et éclisses acajouBarrages en X sculptéChevalet palissandreTouche palissandreContrôles volume, basses, mediums, aiguës, phasePréampli Fishman Presys plus avec accordeurRadius 12', 289, 'Fender1.png', 2),
(22, 'Avid Sibelius', 'Version actuelle de Pro Tools en tant que carte d\'activation Licence permanente avec plan de support et toutes les mises à niveau pendant 12 mois Jusqu\'à 32 entrées et sorties simultanément, 128 pistes audio et 512 pistes MIDI et instruments Nombre illimité de bus Contient plus de 60 instruments virtuels et effets avec plug-ins Channel Strip de console System 5 (EQ, Compresseur / Limiteur, Expander / Gate avec routing flexible) Avid Cloud Collaboration avec 1 GB de stockage Nombreuses fonctions telles que le Bounce hors ligne, la compensation automatique de délai, la détection de pulse (Beat Detective) multipistes,Elastic Time und Pitch, Clip Gain, fondus en temps réel, mesure du niveau de canal étendue avec affichage de réduction de gain etc. Intégration de contrôleurs matériels via le protocole EUCON et Mackie HUI Prise en chargedes pilotes ASIO et Core Audio pour l\'intégration de matériel audio tiers Contenu de la livraison: carte de licence, clé d\'autorisation Pace iLok Remarque: licence logiciel sans support de données: téléchargement requis!  Spécifications:  Formats de plugin pris en charge: AAXnative Système requis: à partir de Win7 (64 bits), de Mac OSX 10.8, processeur Intel Core i5, 8 GB de RAM, 15 GB HD, connexion Internet', 599, 'sibelius.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categorie_id` int(11) NOT NULL,
  `categorie_name` varchar(255) NOT NULL,
  `categorie_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categorie_id`, `categorie_name`, `categorie_image`) VALUES
(1, 'Clavier', 'categoriePiano.png'),
(2, 'Guitare', 'categorieGuitare.png'),
(5, 'Logiciel', 'categorieLog.jpg'),
(6, 'Vent', 'categorieVent.png');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country_id`, `country_name`) VALUES
(1, 'AFGHANISTAN  (AFG)'),
(2, 'ALBANIA  (ALB)'),
(3, 'ALGERIA  (DZA)'),
(4, 'AMERICAN SAMOA  (ASM)'),
(5, 'ANDORRA  (AND)'),
(6, 'ANGOLA  (AGO)'),
(7, 'ANGUILLA  (AIA)'),
(8, 'ANTARCTICA  (ATA)'),
(9, 'ANTIGUA AND BARBUDA  (ATG)'),
(10, 'ARGENTINA  (ARG)'),
(11, 'ARMENIA  (ARM)'),
(12, 'ARUBA  (ABW)'),
(13, 'AUSTRALIA  (AUS)'),
(14, 'AUSTRIA  (AUT)'),
(15, 'AZERBAIJAN  (AZE)'),
(16, 'BAHAMAS  (BHS)'),
(17, 'BAHRAIN  (BHR)'),
(18, 'BANGLADESH  (BGD)'),
(19, 'BARBADOS  (BRB)'),
(20, 'BELARUS  (BLR)'),
(21, 'BELGIUM  (BEL)'),
(22, 'BELIZE  (BLZ)'),
(23, 'BENIN  (BEN)'),
(24, 'BERMUDA  (BMU)'),
(25, 'BHUTAN  (BTN)'),
(26, 'BOLIVIA  (BOL)'),
(27, 'BOSNIA AND HERZEGOVINA  (BIH)'),
(28, 'BOTSWANA  (BWA)'),
(29, 'BOUVET ISLAND  (BVT)'),
(30, 'BRAZIL  (BRA)'),
(31, 'BRITISH INDIAN OCEAN TERRITORY  (IOT)'),
(32, 'BRUNEI  (BRN)'),
(33, 'BULGARIA  (BGR)'),
(34, 'BURKINA FASO  (BFA)'),
(35, 'BURMA  (BUR)'),
(36, 'BURUNDI  (BDI)'),
(37, 'CAMBODIA  (KHM)'),
(38, 'CAMEROON  (CMR)'),
(39, 'CANADA  (CAN)'),
(40, 'CANTON AND ENDERBURY ISLANDS  (CTE)'),
(41, 'CAPE VERDE  (CPV)'),
(42, 'CAYMAN ISLANDS  (CYM)'),
(43, 'CENTRAL AFRICAN REPUBLIC  (CAF)'),
(44, 'CHAD  (TCD)'),
(45, 'CHILE  (CHL)'),
(46, 'CHINA  (CHN)'),
(47, 'CHRISTMAS ISLAND  (CXR)'),
(48, 'COCOS (KEELING) ISLANDS  (CCK)'),
(49, 'COLOMBIA  (COL)'),
(50, 'COMOROS  (COM)'),
(51, 'CONGO  (COG)'),
(52, 'COOK ISLANDS  (COK)'),
(53, 'COSTA RICA  (CRI)'),
(54, 'COTE D\'IVOIRE  (CIV)'),
(55, 'CROATIA  (HRV)'),
(56, 'CUBA  (CUB)'),
(57, 'CYPRUS  (CYP)'),
(58, 'CZECH REPUBLIC  (CZE)'),
(59, 'DEMOCRATIC YEMEN  (YMD)'),
(60, 'DENMARK  (DNK)'),
(61, 'DJIBOUTI  (DJI)'),
(62, 'DOMINICA  (DMA)'),
(63, 'DOMINICAN REPUBLIC  (DOM)'),
(64, 'DRONNING MAUD LAND  (DML)'),
(65, 'EAST TIMOR  (TMP)'),
(66, 'ECUADOR  (ECU)'),
(67, 'EGYPT  (EGY)'),
(68, 'EL SALVADOR  (SLV)'),
(69, 'EQUATORIAL GUINEA  (GNQ)'),
(70, 'ERITREA  (ERI)'),
(71, 'ESTONIA  (EST)'),
(72, 'ETHIOPIA  (ETH)'),
(73, 'FALKLAND ISLANDS  (FLK)'),
(74, 'FAROE ISLANDS  (FRO)'),
(75, 'FIJI  (FJI)'),
(76, 'FINLAND  (FIN)'),
(77, 'FRANCE  (FRA)'),
(78, 'FRANCE METROPOLITAN  (FXX)'),
(79, 'FRENCH GUIANA  (GUF)'),
(80, 'FRENCH POLYNESIA  (PYF)'),
(81, 'FRENCH SOUTHERN TERRITORIES  (ATF)'),
(82, 'GABON  (GAB)'),
(83, 'GAMBIA  (GMB)'),
(84, 'GEORGIA  (GEO)'),
(85, 'GERMANY  (DEU)'),
(86, 'GHANA  (GHA)'),
(87, 'GIBRALTAR  (GIB)'),
(88, 'GREECE  (GRC)'),
(89, 'GREENLAND  (GRL)'),
(90, 'GRENADA  (GRD)'),
(91, 'GUADELOUPE  (GLP)'),
(92, 'GUAM  (GUM)'),
(93, 'GUATEMALA  (GTM)'),
(94, 'GUINEA  (GIN)'),
(95, 'GUINEA-BISSAU  (GNB)'),
(96, 'GUYANA  (GUY)'),
(97, 'HAITI  (HTI)'),
(98, 'HEARD AND MC DONALD ISLANDS  (HMD)'),
(99, 'HONDURAS  (HND)'),
(100, 'HONG KONG  (HKG)'),
(101, 'HUNGARY  (HUN)'),
(102, 'ICELAND  (ISL)'),
(103, 'INDIA  (IND)'),
(104, 'INDONESIA  (IDN)'),
(105, 'IRAN  (IRN)'),
(106, 'IRAQ  (IRQ)'),
(107, 'IRELAND  (IRL)'),
(108, 'ISRAEL  (ISR)'),
(109, 'ITALY  (ITA)'),
(110, 'JAMAICA  (JAM)'),
(111, 'JAPAN  (JPN)'),
(112, 'JOHNSTON ISLAND  (JTN)'),
(113, 'JORDAN  (JOR)'),
(114, 'KAZAKHSTAN  (KAZ)'),
(115, 'KENYA  (KEN)'),
(116, 'KIRIBATI  (KIR)'),
(117, 'KOSOVO  (KVV)'),
(118, 'KUWAIT  (KWT)'),
(119, 'KYRGYZSTAN  (KGZ)'),
(120, 'LAOS  (LAO)'),
(121, 'LATVIA  (LVA)'),
(122, 'LEBANON  (LBN)'),
(123, 'LESOTHO  (LSO)'),
(124, 'LIBERIA  (LBR)'),
(125, 'LIBYA  (LBY)'),
(126, 'LIECHTENSTEIN  (LIE)'),
(127, 'LITHUANIA  (LTU)'),
(128, 'LUXEMBOURG  (LUX)'),
(129, 'MACAU  (MAC)'),
(130, 'MACEDONIA  (MKD)'),
(131, 'MADAGASCAR  (MDG)'),
(132, 'MALAWI  (MWI)'),
(133, 'MALAYSIA  (MYS)'),
(134, 'MALDIVES  (MDV)'),
(135, 'MALI  (MLI)'),
(136, 'MALTA  (MLT)'),
(137, 'MARSHALL ISLANDS  (MHL)'),
(138, 'MARTINIQUE  (MTQ)'),
(139, 'MAURITANIA  (MRT)'),
(140, 'MAURITIUS  (MUS)'),
(141, 'MAYOTTE  (MYT)'),
(142, 'MEXICO  (MEX)'),
(143, 'MICRONESIA - FEDERATED STATES OF  (FSM)'),
(144, 'MIDWAY ISLANDS  (MID)'),
(145, 'MOLDOVA  (MDA)'),
(146, 'MONACO  (MCO)'),
(147, 'MONGOLIA  (MNG)'),
(148, 'MONTSERRAT  (MSR)'),
(149, 'MOROCCO  (MAR)'),
(150, 'MOZAMBIQUE  (MOZ)'),
(151, 'MYANMAR  (MMR)'),
(152, 'NAMIBIA  (NAM)'),
(153, 'NAURU  (NRU)'),
(154, 'NEPAL  (NPL)'),
(155, 'NETHERLANDS  (NLD)'),
(156, 'NETHERLANDS ANTILLES  (ANT)'),
(157, 'NEUTRAL ZONE  (NTZ)'),
(158, 'NEW CALEDONIA  (NCL)'),
(159, 'NEW ZEALAND  (NZL)'),
(160, 'NICARAGUA  (NIC)'),
(161, 'NIGER  (NER)'),
(162, 'NIGERIA  (NGA)'),
(163, 'NIUE  (NIU)'),
(164, 'NORFOLK ISLAND  (NFK)'),
(165, 'NORTH KOREA  (PRK)'),
(166, 'NORTHERN MARIANA ISLANDS  (MNP)'),
(167, 'NORWAY  (NOR)'),
(168, 'OMAN  (OMN)'),
(169, 'PAKISTAN  (PAK)'),
(170, 'PALAU  (PLW)'),
(171, 'PALESTINIAN TERRITORIES  (PSE)'),
(172, 'PANAMA  (PAN)'),
(173, 'PAPUA NEW GUINEA  (PNG)'),
(174, 'PARAGUAY  (PRY)'),
(175, 'PERU  (PER)'),
(176, 'PHILIPPINES  (PHL)'),
(177, 'PITCAIRN ISLANDS  (PCN)'),
(178, 'POLAND  (POL)'),
(179, 'PORTUGAL  (PRT)'),
(180, 'PUERTO RICO  (PRI)'),
(181, 'QATAR  (QAT)'),
(182, 'REUNION  (REU)'),
(183, 'ROMANIA  (ROM)'),
(184, 'RUSSIA  (RUS)'),
(185, 'RWANDA  (RWA)'),
(186, 'SAINT KITTS AND NEVIS  (KNA)'),
(187, 'SAINT LUCIA  (LCA)'),
(188, 'SAINT VINCENT AND THE GRENADINES  (VCT)'),
(189, 'SAMOA  (WSM)'),
(190, 'SAN MARINO  (SMR)'),
(191, 'SAO TOME AND PRINCIPE  (STP)'),
(192, 'SAUDI ARABIA  (SAU)'),
(193, 'SENEGAL  (SEN)'),
(194, 'SERBIA  (SRB)'),
(195, 'SERBIA AND MONTENEGRO  (SCG)'),
(196, 'SEYCHELLES  (SYC)'),
(197, 'SIERRA LEONE  (SLE)'),
(198, 'SINGAPORE  (SGP)'),
(199, 'SLOVAKIA  (SVK)'),
(200, 'SLOVENIA  (SVN)'),
(201, 'SOLOMON ISLANDS  (SLB)'),
(202, 'SOMALIA  (SOM)'),
(203, 'SOUTH AFRICA  (ZAF)'),
(204, 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS  (SGS)'),
(205, 'SOUTH KOREA  (KOR)'),
(206, 'SPAIN  (ESP)'),
(207, 'SRI LANKA  (LKA)'),
(208, 'ST. HELENA  (SHN)'),
(209, 'ST. PIERRE AND MIQUELON  (SPM)'),
(210, 'SUDAN  (SDN)'),
(211, 'SURINAME  (SUR)'),
(212, 'SVALBARD AND JAN MAYEN ISLANDS  (SJM)'),
(213, 'SWAZILAND  (SWZ)'),
(214, 'SWEDEN  (SWE)'),
(215, 'SWITZERLAND  (CHE)'),
(216, 'SYRIA  (SYR)'),
(217, 'TAIWAN  (TWN)'),
(218, 'TAJIKISTAN  (TJK)'),
(219, 'TANZANIA  (TZA)'),
(220, 'THAILAND  (THA)'),
(221, 'TIMOR-LESTE  (TLS)'),
(222, 'TOGO  (TGO)'),
(223, 'TOKELAU  (TKL)'),
(224, 'TONGA  (TON)'),
(225, 'TRINIDAD AND TOBAGO  (TTO)'),
(226, 'TUNISIA  (TUN)'),
(227, 'TURKEY  (TUR)'),
(228, 'TURKMENISTAN  (TKM)'),
(229, 'TURKS AND CAICOS ISLANDS  (TCA)'),
(230, 'TUVALU  (TUV)'),
(231, 'UGANDA  (UGA)'),
(232, 'UKRAINE  (UKR)'),
(233, 'UNITED ARAB EMIRATES  (ARE)'),
(234, 'UNITED KINGDOM  (GBR)'),
(235, 'UNITED STATES  (USA)'),
(236, 'UNITED STATES MINOR OUTLYING ISLANDS  (UMI)'),
(237, 'URUGUAY  (URY)'),
(238, 'UZBEKISTAN  (UZB)'),
(239, 'VANUATU  (VUT)'),
(240, 'VATICAN CITY STATE (HOLY SEE)  (VAT)'),
(241, 'VENEZUELA  (VEN)'),
(242, 'VIETNAM  (VNM)'),
(243, 'VIRGIN ISLANDS (BRITISH)  (VGB)'),
(244, 'VIRGIN ISLANDS (U.S.)  (VIR)'),
(245, 'WAKE ISLAND  (WAK)'),
(246, 'WALLIS AND FUTUNA ISLANDS  (WLF)'),
(247, 'WESTERN SAHARA  (ESH)'),
(248, 'YEMEN  (YEM)'),
(249, 'ZAIRE  (ZAR)'),
(250, 'ZAMBIA  (ZMB)'),
(251, 'ZIMBABWE  (ZWE)');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_id` int(11) NOT NULL,
  `image_article_id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_id`, `image_article_id`, `image_name`) VALUES
(1, 1, 'cx3.jpg'),
(2, 2, 'Fender1.png'),
(5, 5, 'sibelius.jpg'),
(6, 6, 'saxophone.png'),
(8, 10, 'steinwaymodels.png');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_user_id` int(11) DEFAULT NULL,
  `order_amt` float NOT NULL,
  `order_total_items` int(11) NOT NULL,
  `order_token` varchar(255) NOT NULL,
  `order_paypal_infos` text NOT NULL,
  `order_valid` tinyint(1) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_user_id`, `order_amt`, `order_total_items`, `order_token`, `order_paypal_infos`, `order_valid`, `order_date`) VALUES
(1, 21, 2567, 1, 'EC-5SP83194L7634214U', 'a:26:{s:5:\"TOKEN\";s:20:\"EC-5SP83194L7634214U\";s:28:\"SUCCESSPAGEREDIRECTREQUESTED\";s:5:\"false\";s:9:\"TIMESTAMP\";s:20:\"2018-05-10T10:32:44Z\";s:13:\"CORRELATIONID\";s:13:\"98a0ac6bbd20e\";s:3:\"ACK\";s:7:\"Success\";s:7:\"VERSION\";s:2:\"97\";s:5:\"BUILD\";s:8:\"46219369\";s:23:\"INSURANCEOPTIONSELECTED\";s:5:\"false\";s:23:\"SHIPPINGOPTIONISDEFAULT\";s:5:\"false\";s:27:\"PAYMENTINFO_0_TRANSACTIONID\";s:17:\"0L356496RA905223C\";s:29:\"PAYMENTINFO_0_TRANSACTIONTYPE\";s:15:\"expresscheckout\";s:25:\"PAYMENTINFO_0_PAYMENTTYPE\";s:7:\"instant\";s:23:\"PAYMENTINFO_0_ORDERTIME\";s:20:\"2018-05-10T10:32:43Z\";s:17:\"PAYMENTINFO_0_AMT\";s:7:\"2567.00\";s:20:\"PAYMENTINFO_0_FEEAMT\";s:5:\"87.63\";s:20:\"PAYMENTINFO_0_TAXAMT\";s:4:\"0.00\";s:26:\"PAYMENTINFO_0_CURRENCYCODE\";s:3:\"EUR\";s:27:\"PAYMENTINFO_0_PAYMENTSTATUS\";s:9:\"Completed\";s:27:\"PAYMENTINFO_0_PENDINGREASON\";s:4:\"None\";s:24:\"PAYMENTINFO_0_REASONCODE\";s:4:\"None\";s:35:\"PAYMENTINFO_0_PROTECTIONELIGIBILITY\";s:8:\"Eligible\";s:39:\"PAYMENTINFO_0_PROTECTIONELIGIBILITYTYPE\";s:51:\"ItemNotReceivedEligible,UnauthorizedPaymentEligible\";s:35:\"PAYMENTINFO_0_SELLERPAYPALACCOUNTID\";s:32:\"testBusinessHappyMusic@gmail.com\";s:37:\"PAYMENTINFO_0_SECUREMERCHANTACCOUNTID\";s:13:\"4D68LYSYTQR3U\";s:23:\"PAYMENTINFO_0_ERRORCODE\";s:1:\"0\";s:17:\"PAYMENTINFO_0_ACK\";s:7:\"Success\";}', 1, '2018-05-10 10:30:52'),
(3, 26, 289, 1, 'EC-392374214S098692C', 'a:26:{s:5:\"TOKEN\";s:20:\"EC-392374214S098692C\";s:28:\"SUCCESSPAGEREDIRECTREQUESTED\";s:5:\"false\";s:9:\"TIMESTAMP\";s:20:\"2018-05-10T17:19:44Z\";s:13:\"CORRELATIONID\";s:13:\"41d5a14880d67\";s:3:\"ACK\";s:7:\"Success\";s:7:\"VERSION\";s:2:\"97\";s:5:\"BUILD\";s:8:\"46219369\";s:23:\"INSURANCEOPTIONSELECTED\";s:5:\"false\";s:23:\"SHIPPINGOPTIONISDEFAULT\";s:5:\"false\";s:27:\"PAYMENTINFO_0_TRANSACTIONID\";s:17:\"1BL63776DA067845C\";s:29:\"PAYMENTINFO_0_TRANSACTIONTYPE\";s:15:\"expresscheckout\";s:25:\"PAYMENTINFO_0_PAYMENTTYPE\";s:7:\"instant\";s:23:\"PAYMENTINFO_0_ORDERTIME\";s:20:\"2018-05-10T17:19:44Z\";s:17:\"PAYMENTINFO_0_AMT\";s:6:\"289.00\";s:20:\"PAYMENTINFO_0_FEEAMT\";s:5:\"10.18\";s:20:\"PAYMENTINFO_0_TAXAMT\";s:4:\"0.00\";s:26:\"PAYMENTINFO_0_CURRENCYCODE\";s:3:\"EUR\";s:27:\"PAYMENTINFO_0_PAYMENTSTATUS\";s:9:\"Completed\";s:27:\"PAYMENTINFO_0_PENDINGREASON\";s:4:\"None\";s:24:\"PAYMENTINFO_0_REASONCODE\";s:4:\"None\";s:35:\"PAYMENTINFO_0_PROTECTIONELIGIBILITY\";s:8:\"Eligible\";s:39:\"PAYMENTINFO_0_PROTECTIONELIGIBILITYTYPE\";s:51:\"ItemNotReceivedEligible,UnauthorizedPaymentEligible\";s:35:\"PAYMENTINFO_0_SELLERPAYPALACCOUNTID\";s:32:\"testBusinessHappyMusic@gmail.com\";s:37:\"PAYMENTINFO_0_SECUREMERCHANTACCOUNTID\";s:13:\"4D68LYSYTQR3U\";s:23:\"PAYMENTINFO_0_ERRORCODE\";s:1:\"0\";s:17:\"PAYMENTINFO_0_ACK\";s:7:\"Success\";}', 1, '2018-05-10 17:14:06');

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `price_id` int(11) NOT NULL,
  `price_article_id` int(11) NOT NULL,
  `price_amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`price_id`, `price_article_id`, `price_amount`) VALUES
(1, 1, 27000),
(2, 2, 289),
(3, 3, 4000),
(4, 4, 3567.99),
(5, 5, 599),
(6, 6, 2524.67),
(7, 7, 50000),
(8, 8, 2550),
(9, 9, 4389),
(10, 10, 45000);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sale_id` int(11) NOT NULL,
  `sale_user_id` int(11) DEFAULT NULL,
  `sale_article_id` int(11) NOT NULL,
  `sale_amt` float NOT NULL,
  `sale_qty` int(11) NOT NULL,
  `sale_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sale_order_token` varchar(255) NOT NULL,
  `sale_valid` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sale_id`, `sale_user_id`, `sale_article_id`, `sale_amt`, `sale_qty`, `sale_date`, `sale_order_token`, `sale_valid`) VALUES
(21, 7, 2, 289, 1, '2018-04-27 04:49:04', 'EC-4V158980NP180535J', 1),
(22, 7, 2, 289, 1, '2018-04-28 14:09:59', 'EC-8WS68082DE7137412', 1),
(23, 7, 2, 289, 1, '2018-04-28 14:30:32', 'EC-2R014458TJ2096542', 1),
(24, 7, 2, 289, 1, '2018-04-28 14:51:38', 'EC-3C825222BU422140R', 1),
(25, 7, 5, 599, 1, '2018-04-28 14:51:38', 'EC-3C825222BU422140R', 1),
(26, 7, 1, 27000, 1, '2018-04-28 20:44:22', 'EC-6NN77140S34446220', 0),
(27, 7, 6, 2524.67, 1, '2018-04-28 20:46:08', 'EC-1WW16754J5316741M', 0),
(28, 7, 6, 2524.67, 1, '2018-04-28 20:56:56', 'EC-8L701760NG207361P', 0),
(29, 7, 6, 2524.67, 1, '2018-04-28 21:00:39', 'EC-95E24194P3779112L', 0),
(30, 7, 5, 599, 1, '2018-04-28 21:00:39', 'EC-95E24194P3779112L', 0),
(31, 7, 2, 289, 1, '2018-04-29 20:25:52', 'EC-7RG24554DW633514F', 1),
(32, 7, 2, 289, 1, '2018-04-29 20:37:29', 'EC-9BP194556H947223J', 1),
(33, 7, 5, 599, 1, '2018-04-29 20:41:05', 'EC-1MR79113KE4066920', 1),
(34, 7, 2, 289, 1, '2018-05-01 10:07:28', 'EC-90F63176YC1357459', 1),
(35, NULL, 5, 599, 4, '2018-05-05 18:09:10', 'EC-1V831803AA9548824', 1),
(36, 21, 2, 289, 2, '2018-05-07 17:32:15', 'EC-2BX27178SM647611Y', 1),
(37, 21, 6, 2567, 1, '2018-05-10 10:30:52', 'EC-5SP83194L7634214U', 1),
(38, 26, 10, 289, 1, '2018-05-10 17:08:13', 'EC-7DW83861PF9874054', 0),
(39, 26, 10, 289, 1, '2018-05-10 17:14:06', 'EC-392374214S098692C', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postal` varchar(255) NOT NULL,
  `user_country_id` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `date_user` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `roles` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `address`, `city`, `postal`, `user_country_id`, `phone`, `date_user`, `firstname`, `lastname`, `roles`) VALUES
(20, 'supra3946@gmail.com', 'fe703d258c7ef5f50b71e06565a65aa07194907f', 'rue de la musique', 'Binche', '7134', 21, '0494864497', '2018-05-06 20:03:38', 'gaetan', 'seggio', 1),
(26, 'test@test.com', 'fe703d258c7ef5f50b71e06565a65aa07194907f', 'rue de la musique', 'Binche', '7134', 21, '0494864497', '2018-05-10 17:07:25', 'test', 'Ramu', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categorie_id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`price_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sale_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categorie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=252;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `price_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

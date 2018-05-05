-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 05, 2018 at 02:35 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `article_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `article_categorie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_id`, `title`, `description`, `article_categorie_id`) VALUES
(1, 'Yamaha Cx3', 'Le Yamaha C3X ENSPIRE PRO est un piano acoustique équipé d\'un système de jeu automatique; en particulier le système Yamaha Disklavier Enspire.\r\n\r\nCe système marie le savoir faire traditionnel et des techniques d’ingénieries innovantes afin de créer un instrument unique : le piano de divertissement parfait qui permet d’enregistrer toutes les performances en les restituant par la suite dans les moindres détails.', 1),
(2, 'Fender CD-140SCE Nat', 'Table épicéa massif\r\nDos et éclisses acajou\r\nBarrages en X sculpté\r\nChevalet palissandre\r\nTouche palissandre\r\nContrôles volume, basses, mediums, aiguës, phase\r\nPréampli Fishman Presys plus avec accordeur\r\nRadius 12\" (305 mm)\r\nFrettes vintage\r\nAccastillage chrome\r\nManche acajou', 2),
(5, 'Avid Sibelius', 'Version actuelle avec 12 mois de mise à niveau et plan de support\r\nInterface utilisateur orientée tâche\r\nBibliothèque de sons professionnelle (36 Go)\r\nLogiciel de notation natif 64 bits\r\nSupport VST\r\nReWire\r\nOptions graphiques et typographiques avancées\r\nExport de partition en fichiers PDF\r\nImport / export MusicXML 3.0\r\nÉmulation rapide du mode d\'entrée d\'une note depuis le logiciel Finale\r\nNouvelle fenêtre de timeline pour travailler avec les grandes partitions\r\nLecture plus expressive avec Espressivo 2.0\r\nÉcoute précise grâce à une meilleure interprétation des notes\r\nOption pour médias sociaux pour YouTube, Facebook, SoundCloud\r\nExportation de partitions par email, audio et vidéo\r\nExportation de la vidéo en haute résolution 1080p\r\nExporter vers Avid Scorch scores sur iPad\r\nContient le logiciel Note PhotoScore Lite logiciel de numérisation et de détection audio Audio Lite\r\nLangues suivantes: anglais, français, allemand, italien, japonais, chinois simplifié, espagnol, portugais brésilien et russe\r\nAttention: licence seule - aucun média (CD / DVD) inclus, nécessite le téléchargement depuis le site Web du fabricant\r\nConfiguration minimale du système (configuration minimum):\r\nPC: Windows 7 ou 8 (64 bit, pas Windows RT)\r\nMAC: Mac OS X 10.9 ou plus récent\r\n1 GB de RAM ou plus\r\n1 GB d\'espace libre sur le disque dur pour le logiciel Sibelius\r\n34 GB d\'espace disque en plus pour bibliothèque Sibelius Sounds 7.5 (installation facultative)\r\nLecteur de DVD- ROM', 5),
(6, 'Selmer SE-A3S Series III', 'Série III\r\nNouveau design 2010\r\nCorps gravé à la main\r\nCorps, bocal et pavillon en laiton\r\nClé de Fa# aigu\r\nTampons en cuir\r\nRésonateurs en métal\r\nFinition: Argenté\r\nBec S80 C* et étui souple incl.', 6),
(10, 'Steinway et sons', 'Le plus petit piano à queue de STEINWAY & SONS fut introduit dans les années 1930 pour que le son puissant d\'un STEINWAY puisse se déployer même lorsqu\'on ne dispose que d\'un espace restreint. Sinon vous ne trouverez ailleurs un volume sonore d\'une telle richesse que sur de grands modèles.', 1);

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
(34, 7, 2, 289, 1, '2018-05-01 10:07:28', 'EC-90F63176YC1357459', 1);

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
(19, 'supra3946@gmail.com', 'fe703d258c7ef5f50b71e06565a65aa07194907f', 'rue de la musique', 'Binche', '7134', 21, '0494864497', '2018-05-05 08:19:33', 'gaetan', 'Bonjour', 0);

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
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `price_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

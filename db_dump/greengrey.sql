-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Nov 04, 2018 alle 16:11
-- Versione del server: 5.7.23-0ubuntu0.18.04.1
-- Versione PHP: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greengrey`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dump dei dati per la tabella `migration_versions`
--

INSERT INTO `migration_versions` (`version`) VALUES
('20181102120856'),
('20181102160622'),
('20181102161534'),
('20181103145049'),
('20181103152654');

-- --------------------------------------------------------

--
-- Struttura della tabella `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `code` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `note` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `task`
--

INSERT INTO `task` (`id`, `code`, `date`, `note`, `username`) VALUES
(1, 'A001', '2018-11-04 09:49:14', 'Questo è un testo di prova. ', 'Fabio');

-- --------------------------------------------------------

--
-- Struttura della tabella `trees`
--

CREATE TABLE `trees` (
  `id` int(20) NOT NULL,
  `code` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `latitude` decimal(10,6) NOT NULL,
  `longitude` decimal(10,6) NOT NULL,
  `section` varchar(6) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `row` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `trees`
--

INSERT INTO `trees` (`id`, `code`, `latitude`, `longitude`, `section`, `row`) VALUES
(1, 'A001', '39.323041', '9.059667', 'A', 1),
(2, 'A002', '39.323112', '9.059622', 'A', 1),
(3, 'A003', '39.323179', '9.059567', 'A', 1),
(4, 'A004', '39.323251', '9.059520', 'A', 1),
(5, 'A005', '39.323325', '9.059465', 'A', 1),
(6, 'A006', '39.323379', '9.059418', 'A', 1),
(7, 'A007', '39.323466', '9.059369', 'A', 1),
(8, 'A008', '39.323522', '9.059313', 'A', 1),
(9, 'A009', '39.323603', '9.059262', 'A', 1),
(10, 'A010', '39.323676', '9.059203', 'A', 1),
(11, 'A011', '39.323736', '9.059164', 'A', 1),
(12, 'A012', '39.322999', '9.059581', 'A', 2),
(13, 'A013', '39.323051', '9.059533', 'A', 2),
(14, 'A014', '39.323131', '9.059482', 'A', 2),
(15, 'A015', '39.323206', '9.059434', 'A', 2),
(16, 'A016', '39.323272', '9.059387', 'A', 2),
(17, 'A017', '39.323355', '9.059313', 'A', 2),
(18, 'A018', '39.323414', '9.059275', 'A', 2),
(19, 'A019', '39.323481', '9.059225', 'A', 2),
(20, 'A020', '39.323562', '9.059185', 'A', 2),
(21, 'A021', '39.323625', '9.059132', 'A', 2),
(22, 'A022', '39.323707', '9.059075', 'A', 2),
(23, 'A023', '39.323759', '9.059037', 'A', 2),
(24, 'A024', '39.322944', '9.059498', 'A', 3),
(25, 'A025', '39.323018', '9.059444', 'A', 3),
(26, 'A026', '39.323088', '9.059401', 'A', 3),
(27, 'A027', '39.323161', '9.059350', 'A', 3),
(28, 'A028', '39.323238', '9.059299', 'A', 3),
(29, 'A029', '39.323295', '9.059254', 'A', 3),
(30, 'A030', '39.323365', '9.059195', 'A', 3),
(31, 'A031', '39.323435', '9.059149', 'A', 3),
(32, 'A032', '39.323516', '9.059090', 'A', 3),
(33, 'A033', '39.323584', '9.059037', 'A', 3),
(34, 'A034', '39.323653', '9.058988', 'A', 3),
(35, 'A035', '39.323726', '9.058943', 'A', 3),
(36, 'A036', '39.322906', '9.059414', 'A', 4),
(37, 'A037', '39.322971', '9.059355', 'A', 4),
(38, 'A038', '39.323041', '9.059310', 'A', 4),
(39, 'A039', '39.323109', '9.059257', 'A', 4),
(40, 'A040', '39.323179', '9.059212', 'A', 4),
(41, 'A041', '39.323252', '9.059157', 'A', 4),
(42, 'A042', '39.323328', '9.059104', 'A', 4),
(43, 'A043', '39.323399', '9.059050', 'A', 4),
(44, 'A044', '39.323469', '9.059006', 'A', 4),
(45, 'A045', '39.323536', '9.058953', 'A', 4),
(46, 'A046', '39.323603', '9.058894', 'A', 4),
(47, 'A047', '39.323674', '9.058854', 'A', 4),
(48, 'A048', '39.322861', '9.059330', 'A', 5),
(49, 'A049', '39.322927', '9.059276', 'A', 5),
(50, 'A050', '39.322999', '9.059227', 'A', 5),
(51, 'A051', '39.323073', '9.059168', 'A', 5),
(52, 'A052', '39.323141', '9.059117', 'A', 5),
(53, 'A053', '39.323215', '9.059071', 'A', 5),
(54, 'A054', '39.323286', '9.059021', 'A', 5),
(55, 'A055', '39.323350', '9.058967', 'A', 5),
(56, 'A056', '39.323423', '9.058914', 'A', 5),
(57, 'A057', '39.323487', '9.058860', 'A', 5),
(58, 'A058', '39.323554', '9.058820', 'A', 5),
(59, 'A059', '39.323628', '9.058762', 'A', 5),
(60, 'A060', '39.322818', '9.059232', 'A', 6),
(61, 'A061', '39.322885', '9.059192', 'A', 6),
(62, 'A062', '39.322955', '9.059142', 'A', 6),
(63, 'A063', '39.323023', '9.059084', 'A', 6),
(64, 'A064', '39.323094', '9.059034', 'A', 6),
(65, 'A065', '39.323163', '9.058979', 'A', 6),
(66, 'A066', '39.323234', '9.058926', 'A', 6),
(67, 'A067', '39.323313', '9.058876', 'A', 6),
(68, 'A068', '39.323366', '9.058829', 'A', 6),
(69, 'A069', '39.323449', '9.058767', 'A', 6),
(70, 'A070', '39.323525', '9.058726', 'A', 6),
(71, 'A071', '39.323582', '9.058672', 'A', 6),
(72, 'A072', '39.322766', '9.059146', 'A', 7),
(73, 'A073', '39.322837', '9.059086', 'A', 7),
(74, 'A074', '39.322903', '9.059042', 'A', 7),
(75, 'A075', '39.322973', '9.058992', 'A', 7),
(76, 'A076', '39.323049', '9.058936', 'A', 7),
(77, 'A077', '39.323111', '9.058892', 'A', 7),
(78, 'A078', '39.323190', '9.058837', 'A', 7),
(79, 'A079', '39.323257', '9.058781', 'A', 7),
(80, 'A080', '39.323328', '9.058728', 'A', 7),
(81, 'A081', '39.323408', '9.058678', 'A', 7),
(82, 'A082', '39.323483', '9.058636', 'A', 7),
(83, 'A083', '39.323556', '9.058583', 'A', 7),
(84, 'A084', '39.322719', '9.059048', 'A', 8),
(85, 'A085', '39.322794', '9.059003', 'A', 8),
(86, 'A086', '39.322867', '9.058951', 'A', 8),
(87, 'A087', '39.322935', '9.058900', 'A', 8),
(88, 'A088', '39.323011', '9.058855', 'A', 8),
(89, 'A089', '39.323076', '9.058800', 'A', 8),
(90, 'A090', '39.323143', '9.058749', 'A', 8),
(91, 'A091', '39.323219', '9.058700', 'A', 8),
(92, 'A092', '39.323287', '9.058639', 'A', 8),
(93, 'A093', '39.323347', '9.058588', 'A', 8),
(94, 'A094', '39.323420', '9.058534', 'A', 8),
(95, 'A095', '39.323502', '9.058495', 'A', 8),
(96, 'A096', '39.322670', '9.058953', 'A', 9),
(97, 'A097', '39.322748', '9.058913', 'A', 9),
(98, 'A098', '39.322813', '9.058859', 'A', 9),
(99, 'A099', '39.322883', '9.058804', 'A', 9),
(100, 'A100', '39.322948', '9.058747', 'A', 9),
(101, 'A101', '39.323029', '9.058703', 'A', 9),
(102, 'A102', '39.323098', '9.058657', 'A', 9),
(103, 'A103', '39.323167', '9.058614', 'A', 9),
(104, 'A104', '39.323236', '9.058555', 'A', 9),
(105, 'A105', '39.323312', '9.058500', 'A', 9),
(106, 'A106', '39.323374', '9.058452', 'A', 9),
(107, 'A107', '39.323452', '9.058399', 'A', 9),
(108, 'A108', '39.322625', '9.058871', 'A', 10),
(109, 'A109', '39.322697', '9.058822', 'A', 10),
(110, 'A110', '39.322767', '9.058770', 'A', 10),
(111, 'A111', '39.322838', '9.058723', 'A', 10),
(112, 'A112', '39.322913', '9.058671', 'A', 10),
(113, 'A113', '39.322976', '9.058619', 'A', 10),
(114, 'A114', '39.323041', '9.058577', 'A', 10),
(115, 'A115', '39.323119', '9.058519', 'A', 10),
(116, 'A116', '39.323191', '9.058473', 'A', 10),
(117, 'A117', '39.323264', '9.058416', 'A', 10),
(118, 'A118', '39.323333', '9.058372', 'A', 10),
(119, 'A119', '39.323408', '9.058319', 'A', 10),
(120, 'A120', '39.322584', '9.058785', 'A', 11),
(121, 'A121', '39.322653', '9.058739', 'A', 11),
(122, 'A122', '39.322720', '9.058686', 'A', 11),
(123, 'A123', '39.322795', '9.058631', 'A', 11),
(124, 'A124', '39.322857', '9.058586', 'A', 11),
(125, 'A125', '39.322935', '9.058534', 'A', 11),
(126, 'A126', '39.323002', '9.058480', 'A', 11),
(127, 'A127', '39.323075', '9.058428', 'A', 11),
(128, 'A128', '39.323139', '9.058382', 'A', 11),
(129, 'A129', '39.323212', '9.058328', 'A', 11),
(130, 'A130', '39.323298', '9.058281', 'A', 11),
(131, 'A131', '39.323364', '9.058228', 'A', 11),
(132, 'A132', '39.322546', '9.058706', 'A', 12),
(133, 'A133', '39.322609', '9.058643', 'A', 12),
(134, 'A134', '39.322678', '9.058595', 'A', 12),
(135, 'A135', '39.322743', '9.058553', 'A', 12),
(136, 'A136', '39.322820', '9.058505', 'A', 12),
(137, 'A137', '39.322888', '9.058447', 'A', 12),
(138, 'A138', '39.322958', '9.058398', 'A', 12),
(139, 'A139', '39.323033', '9.058340', 'A', 12),
(140, 'A140', '39.323104', '9.058286', 'A', 12),
(141, 'A141', '39.323178', '9.058237', 'A', 12),
(142, 'A142', '39.323245', '9.058179', 'A', 12),
(143, 'A143', '39.323313', '9.058132', 'A', 12),
(144, 'A144', '39.322484', '9.058616', 'A', 13),
(145, 'A145', '39.322570', '9.058565', 'A', 13),
(146, 'A146', '39.322637', '9.058510', 'A', 13),
(147, 'A147', '39.322702', '9.058464', 'A', 13),
(148, 'A148', '39.322778', '9.058401', 'A', 13),
(149, 'A149', '39.322846', '9.058355', 'A', 13),
(150, 'A150', '39.322922', '9.058305', 'A', 13),
(151, 'A151', '39.322988', '9.058257', 'A', 13),
(152, 'A152', '39.323060', '9.058212', 'A', 13),
(153, 'A153', '39.323132', '9.058152', 'A', 13),
(154, 'A154', '39.323201', '9.058100', 'A', 13),
(155, 'A155', '39.323261', '9.058052', 'A', 13),
(156, 'A156', '39.323339', '9.057994', 'A', 13),
(157, 'B001', '39.322016', '9.059738', 'B', 1),
(158, 'B002', '39.322091', '9.059692', 'B', 1),
(159, 'B003', '39.322166', '9.059642', 'B', 1),
(160, 'B004', '39.322252', '9.059590', 'B', 1),
(161, 'B005', '39.322328', '9.059536', 'B', 1),
(162, 'B006', '39.322416', '9.059482', 'B', 1),
(163, 'B007', '39.322489', '9.059433', 'B', 1),
(164, 'B008', '39.322576', '9.059384', 'B', 1),
(165, 'B009', '39.322658', '9.059336', 'B', 1),
(166, 'B010', '39.322743', '9.059279', 'B', 1),
(167, 'B011', '39.321956', '9.059648', 'B', 2),
(168, 'B012', '39.322039', '9.059602', 'B', 2),
(169, 'B013', '39.322123', '9.059552', 'B', 2),
(170, 'B014', '39.322205', '9.059500', 'B', 2),
(171, 'B015', '39.322287', '9.059441', 'B', 2),
(172, 'B016', '39.322368', '9.059393', 'B', 2),
(173, 'B017', '39.322446', '9.059340', 'B', 2),
(174, 'B018', '39.322526', '9.059286', 'B', 2),
(175, 'B019', '39.322605', '9.059243', 'B', 2),
(176, 'B020', '39.322684', '9.059186', 'B', 2),
(177, 'B021', '39.321921', '9.059577', 'B', 3),
(178, 'B022', '39.322002', '9.059509', 'B', 3),
(179, 'B023', '39.322073', '9.059463', 'B', 3),
(180, 'B024', '39.322156', '9.059417', 'B', 3),
(181, 'B025', '39.322235', '9.059359', 'B', 3),
(182, 'B026', '39.322318', '9.059305', 'B', 3),
(183, 'B027', '39.322399', '9.059254', 'B', 3),
(184, 'B028', '39.322482', '9.059202', 'B', 3),
(185, 'B029', '39.322562', '9.059148', 'B', 3),
(186, 'B030', '39.322642', '9.059091', 'B', 3),
(187, 'B031', '39.321870', '9.059485', 'B', 4),
(188, 'B032', '39.321944', '9.059421', 'B', 4),
(189, 'B033', '39.322032', '9.059375', 'B', 4),
(190, 'B034', '39.322108', '9.059319', 'B', 4),
(191, 'B035', '39.322182', '9.059269', 'B', 4),
(192, 'B036', '39.322275', '9.059219', 'B', 4),
(193, 'B037', '39.322362', '9.059170', 'B', 4),
(194, 'B038', '39.322436', '9.059114', 'B', 4),
(195, 'B039', '39.322515', '9.059057', 'B', 4),
(196, 'B040', '39.322600', '9.058997', 'B', 4),
(197, 'B041', '39.321821', '9.059381', 'B', 5),
(198, 'B042', '39.321905', '9.059330', 'B', 5),
(199, 'B043', '39.321986', '9.059282', 'B', 5),
(200, 'B044', '39.322062', '9.059233', 'B', 5),
(201, 'B045', '39.322141', '9.059185', 'B', 5),
(202, 'B046', '39.322218', '9.059140', 'B', 5),
(203, 'B047', '39.322309', '9.059079', 'B', 5),
(204, 'B048', '39.322393', '9.059023', 'B', 5),
(205, 'B049', '39.322472', '9.058975', 'B', 5),
(206, 'B050', '39.322559', '9.058920', 'B', 5),
(207, 'B051', '39.321766', '9.059290', 'B', 6),
(208, 'B052', '39.321860', '9.059242', 'B', 6),
(209, 'B053', '39.321930', '9.059195', 'B', 6),
(210, 'B054', '39.322016', '9.059145', 'B', 6),
(211, 'B055', '39.322106', '9.059096', 'B', 6),
(212, 'B056', '39.322185', '9.059038', 'B', 6),
(213, 'B057', '39.322266', '9.058990', 'B', 6),
(214, 'B058', '39.322351', '9.058937', 'B', 6),
(215, 'B059', '39.322426', '9.058879', 'B', 6),
(216, 'B060', '39.322517', '9.058834', 'B', 6),
(217, 'B061', '39.321729', '9.059205', 'B', 7),
(218, 'B062', '39.321816', '9.059161', 'B', 7),
(219, 'B063', '39.321891', '9.059101', 'B', 7),
(220, 'B064', '39.321973', '9.059056', 'B', 7),
(221, 'B065', '39.322067', '9.058994', 'B', 7),
(222, 'B066', '39.322149', '9.058939', 'B', 7),
(223, 'B067', '39.322230', '9.058893', 'B', 7),
(224, 'B068', '39.322320', '9.058829', 'B', 7),
(225, 'B069', '39.322397', '9.058785', 'B', 7),
(226, 'B070', '39.322461', '9.058742', 'B', 7),
(227, 'B071', '39.322114', '9.058874', 'B', 8),
(228, 'B072', '39.322177', '9.058825', 'B', 8),
(229, 'B073', '39.322256', '9.058774', 'B', 8),
(230, 'B074', '39.322344', '9.058711', 'B', 8),
(231, 'B075', '39.322422', '9.058658', 'B', 8),
(232, 'C001', '39.322056', '9.059832', 'C', 1),
(233, 'C002', '39.322146', '9.059781', 'C', 1),
(234, 'C003', '39.322218', '9.059731', 'C', 1),
(235, 'C004', '39.322300', '9.059682', 'C', 1),
(236, 'C005', '39.322372', '9.059626', 'C', 1),
(237, 'C006', '39.322439', '9.059578', 'C', 1),
(238, 'C007', '39.322523', '9.059520', 'C', 1),
(239, 'C008', '39.322616', '9.059466', 'C', 1),
(240, 'C009', '39.322690', '9.059422', 'C', 1),
(241, 'C010', '39.322776', '9.059366', 'C', 1),
(242, 'C011', '39.322103', '9.059924', 'C', 2),
(243, 'C012', '39.322178', '9.059863', 'C', 2),
(244, 'C013', '39.322256', '9.059817', 'C', 2),
(245, 'C014', '39.322341', '9.059766', 'C', 2),
(246, 'C015', '39.322428', '9.059710', 'C', 2),
(247, 'C016', '39.322498', '9.059662', 'C', 2),
(248, 'C017', '39.322578', '9.059610', 'C', 2),
(249, 'C018', '39.322673', '9.059551', 'C', 2),
(250, 'C019', '39.322736', '9.059500', 'C', 2),
(251, 'C020', '39.322821', '9.059461', 'C', 2),
(252, 'C021', '39.322146', '9.060004', 'C', 3),
(253, 'C022', '39.322219', '9.059937', 'C', 3),
(254, 'C023', '39.322282', '9.059890', 'C', 3),
(255, 'C024', '39.322383', '9.059856', 'C', 3),
(256, 'C025', '39.322461', '9.059790', 'C', 3),
(257, 'C026', '39.322533', '9.059738', 'C', 3),
(258, 'C027', '39.322616', '9.059684', 'C', 3),
(259, 'C028', '39.322702', '9.059634', 'C', 3),
(260, 'C029', '39.322777', '9.059593', 'C', 3),
(261, 'C030', '39.322195', '9.060095', 'C', 4),
(262, 'C031', '39.322254', '9.060028', 'C', 4),
(263, 'C032', '39.322343', '9.059985', 'C', 4),
(264, 'C033', '39.322414', '9.059926', 'C', 4),
(265, 'C034', '39.322494', '9.059876', 'C', 4),
(266, 'C035', '39.322583', '9.059831', 'C', 4),
(267, 'C036', '39.322658', '9.059772', 'C', 4),
(268, 'C037', '39.322742', '9.059726', 'C', 4),
(269, 'C038', '39.322818', '9.059678', 'C', 4),
(270, 'C039', '39.322243', '9.060188', 'C', 5),
(271, 'C040', '39.322329', '9.060136', 'C', 5),
(272, 'C041', '39.322403', '9.060081', 'C', 5),
(273, 'C042', '39.322481', '9.060029', 'C', 5),
(274, 'C043', '39.322542', '9.059964', 'C', 5),
(275, 'C044', '39.322625', '9.059912', 'C', 5),
(276, 'C045', '39.322720', '9.059875', 'C', 5),
(277, 'C046', '39.322795', '9.059817', 'C', 5),
(278, 'C047', '39.322884', '9.059770', 'C', 5),
(279, 'C048', '39.322942', '9.059716', 'C', 5),
(280, 'C049', '39.322299', '9.060289', 'C', 6),
(281, 'C050', '39.322365', '9.060230', 'C', 6),
(282, 'C051', '39.322438', '9.060168', 'C', 6),
(283, 'C052', '39.322512', '9.060103', 'C', 6),
(284, 'C053', '39.322601', '9.060063', 'C', 6),
(285, 'C054', '39.322680', '9.060017', 'C', 6),
(286, 'C055', '39.322762', '9.059970', 'C', 6),
(287, 'C056', '39.322842', '9.059921', 'C', 6),
(288, 'C057', '39.322924', '9.059860', 'C', 6),
(289, 'C058', '39.323005', '9.059815', 'C', 6),
(290, 'C059', '39.322348', '9.060374', 'C', 7),
(291, 'C060', '39.322415', '9.060317', 'C', 7),
(292, 'C061', '39.322493', '9.060263', 'C', 7),
(293, 'C062', '39.322571', '9.060208', 'C', 7),
(294, 'C063', '39.322651', '9.060156', 'C', 7),
(295, 'C064', '39.322733', '9.060100', 'C', 7),
(296, 'C065', '39.322818', '9.060052', 'C', 7),
(297, 'C066', '39.322893', '9.060003', 'C', 7),
(298, 'C067', '39.322973', '9.059945', 'C', 7),
(299, 'C068', '39.323050', '9.059892', 'C', 7),
(300, 'C069', '39.322385', '9.060462', 'C', 8),
(301, 'C070', '39.322466', '9.060406', 'C', 8),
(302, 'C071', '39.322535', '9.060361', 'C', 8),
(303, 'C072', '39.322621', '9.060299', 'C', 8),
(304, 'C073', '39.322700', '9.060245', 'C', 8),
(305, 'C074', '39.322779', '9.060195', 'C', 8),
(306, 'C075', '39.322849', '9.060136', 'C', 8),
(307, 'C076', '39.322936', '9.060078', 'C', 8),
(308, 'C077', '39.323016', '9.060030', 'C', 8),
(309, 'C078', '39.323094', '9.059983', 'C', 8),
(310, 'C079', '39.322435', '9.060557', 'C', 9),
(311, 'C080', '39.322512', '9.060497', 'C', 9),
(312, 'C081', '39.322589', '9.060451', 'C', 9),
(313, 'C082', '39.322662', '9.060388', 'C', 9),
(314, 'C083', '39.322741', '9.060329', 'C', 9),
(315, 'C084', '39.322823', '9.060277', 'C', 9),
(316, 'C085', '39.322903', '9.060224', 'C', 9),
(317, 'C086', '39.322983', '9.060172', 'C', 9),
(318, 'C087', '39.323057', '9.060119', 'C', 9),
(319, 'C088', '39.323148', '9.060073', 'C', 9),
(320, 'C089', '39.322485', '9.060647', 'C', 10),
(321, 'C090', '39.322571', '9.060586', 'C', 10),
(322, 'C091', '39.322641', '9.060540', 'C', 10),
(323, 'C092', '39.322707', '9.060478', 'C', 10),
(324, 'C093', '39.322798', '9.060430', 'C', 10),
(325, 'C094', '39.322875', '9.060369', 'C', 10),
(326, 'C095', '39.322948', '9.060322', 'C', 10),
(327, 'C096', '39.323026', '9.060262', 'C', 10),
(328, 'C097', '39.323105', '9.060210', 'C', 10),
(329, 'C098', '39.323188', '9.060154', 'C', 10),
(330, 'C099', '39.322535', '9.060737', 'C', 11),
(331, 'C100', '39.322615', '9.060686', 'C', 11),
(332, 'C101', '39.322693', '9.060634', 'C', 11),
(333, 'C102', '39.322763', '9.060579', 'C', 11),
(334, 'C103', '39.322848', '9.060523', 'C', 11),
(335, 'C104', '39.322927', '9.060466', 'C', 11),
(336, 'C105', '39.323004', '9.060417', 'C', 11),
(337, 'C106', '39.323087', '9.060366', 'C', 11),
(338, 'C107', '39.323157', '9.060304', 'C', 11),
(339, 'C108', '39.323228', '9.060247', 'C', 11),
(340, 'C109', '39.322582', '9.060829', 'C', 12),
(341, 'C110', '39.322660', '9.060776', 'C', 12),
(342, 'C111', '39.322734', '9.060726', 'C', 12),
(343, 'C112', '39.322809', '9.060668', 'C', 12),
(344, 'C113', '39.322891', '9.060616', 'C', 12),
(345, 'C114', '39.322972', '9.060560', 'C', 12),
(346, 'C115', '39.323053', '9.060505', 'C', 12),
(347, 'C116', '39.323134', '9.060452', 'C', 12),
(348, 'C117', '39.323205', '9.060399', 'C', 12),
(349, 'C118', '39.323283', '9.060355', 'C', 12),
(350, 'C119', '39.322624', '9.060931', 'C', 13),
(351, 'C120', '39.322708', '9.060869', 'C', 13),
(352, 'C121', '39.322786', '9.060812', 'C', 13),
(353, 'C122', '39.322866', '9.060769', 'C', 13),
(354, 'C123', '39.322947', '9.060717', 'C', 13),
(355, 'C124', '39.323007', '9.060656', 'C', 13),
(356, 'C125', '39.323105', '9.060601', 'C', 13),
(357, 'C126', '39.323179', '9.060549', 'C', 13),
(358, 'C127', '39.323253', '9.060490', 'C', 13),
(359, 'C128', '39.323324', '9.060437', 'C', 13),
(360, 'C129', '39.322670', '9.061017', 'C', 14),
(361, 'C130', '39.322756', '9.060964', 'C', 14),
(362, 'C131', '39.322828', '9.060900', 'C', 14),
(363, 'C132', '39.322907', '9.060847', 'C', 14),
(364, 'C133', '39.322989', '9.060798', 'C', 14),
(365, 'C134', '39.323064', '9.060748', 'C', 14),
(366, 'C135', '39.323144', '9.060687', 'C', 14),
(367, 'C136', '39.323221', '9.060632', 'C', 14),
(368, 'C137', '39.323302', '9.060575', 'C', 14),
(369, 'C138', '39.323377', '9.060533', 'C', 14),
(370, 'C139', '39.322719', '9.061123', 'C', 15),
(371, 'C140', '39.322797', '9.061053', 'C', 15),
(372, 'C141', '39.322874', '9.060993', 'C', 15),
(373, 'C142', '39.322954', '9.060949', 'C', 15),
(374, 'C143', '39.323033', '9.060887', 'C', 15),
(375, 'C144', '39.323115', '9.060839', 'C', 15),
(376, 'C145', '39.323190', '9.060778', 'C', 15),
(377, 'C146', '39.323268', '9.060735', 'C', 15),
(378, 'C147', '39.323353', '9.060679', 'C', 15),
(379, 'C148', '39.323420', '9.060619', 'C', 15),
(380, 'C149', '39.322770', '9.061207', 'C', 16),
(381, 'C150', '39.322840', '9.061146', 'C', 16),
(382, 'C151', '39.322928', '9.061093', 'C', 16),
(383, 'C152', '39.323005', '9.061041', 'C', 16),
(384, 'C153', '39.323083', '9.060986', 'C', 16),
(385, 'C154', '39.323174', '9.060938', 'C', 16),
(386, 'C155', '39.323244', '9.060879', 'C', 16),
(387, 'C156', '39.323320', '9.060827', 'C', 16),
(388, 'C157', '39.323401', '9.060775', 'C', 16),
(389, 'C158', '39.323476', '9.060732', 'C', 16),
(390, 'C159', '39.322817', '9.061299', 'C', 17),
(391, 'C160', '39.322889', '9.061240', 'C', 17),
(392, 'C161', '39.322961', '9.061178', 'C', 17),
(393, 'C162', '39.323051', '9.061124', 'C', 17),
(394, 'C163', '39.323137', '9.061087', 'C', 17),
(395, 'C164', '39.323225', '9.061033', 'C', 17),
(396, 'C165', '39.323298', '9.060974', 'C', 17),
(397, 'C166', '39.323377', '9.060923', 'C', 17),
(398, 'C167', '39.323461', '9.060873', 'C', 17),
(399, 'C168', '39.322862', '9.061402', 'C', 18),
(400, 'C169', '39.322943', '9.061341', 'C', 18),
(401, 'C170', '39.323024', '9.061272', 'C', 18),
(402, 'C171', '39.323103', '9.061231', 'C', 18),
(403, 'C172', '39.323170', '9.061172', 'C', 18),
(404, 'C173', '39.323270', '9.061121', 'C', 18),
(405, 'C174', '39.323340', '9.061069', 'C', 18),
(406, 'C175', '39.323423', '9.061018', 'C', 18),
(407, 'C176', '39.323506', '9.060964', 'C', 18),
(408, 'C177', '39.322917', '9.061492', 'C', 19),
(409, 'C178', '39.322990', '9.061427', 'C', 19),
(410, 'C179', '39.323063', '9.061367', 'C', 19),
(411, 'C180', '39.323151', '9.061313', 'C', 19),
(412, 'C181', '39.323231', '9.061265', 'C', 19),
(413, 'C182', '39.323313', '9.061215', 'C', 19),
(414, 'C183', '39.323399', '9.061153', 'C', 19),
(415, 'C184', '39.323475', '9.061104', 'C', 19),
(416, 'C185', '39.323546', '9.061047', 'C', 19),
(417, 'C186', '39.323614', '9.060995', 'C', 19),
(418, 'C187', '39.322972', '9.061582', 'C', 20),
(419, 'C188', '39.323035', '9.061514', 'C', 20),
(420, 'C189', '39.323118', '9.061460', 'C', 20),
(421, 'C190', '39.323194', '9.061409', 'C', 20),
(422, 'C191', '39.323287', '9.061343', 'C', 20),
(423, 'C192', '39.323357', '9.061297', 'C', 20),
(424, 'C193', '39.323441', '9.061259', 'C', 20),
(425, 'C194', '39.323511', '9.061191', 'C', 20),
(426, 'C195', '39.323602', '9.061145', 'C', 20),
(427, 'C196', '39.323672', '9.061095', 'C', 20),
(428, 'C197', '39.323014', '9.061674', 'C', 21),
(429, 'C198', '39.323087', '9.061608', 'C', 21),
(430, 'C199', '39.323163', '9.061550', 'C', 21),
(431, 'C200', '39.323251', '9.061504', 'C', 21),
(432, 'C201', '39.323325', '9.061450', 'C', 21),
(433, 'C202', '39.323408', '9.061398', 'C', 21),
(434, 'C203', '39.323498', '9.061339', 'C', 21),
(435, 'C204', '39.323575', '9.061286', 'C', 21),
(436, 'C205', '39.323653', '9.061238', 'C', 21),
(437, 'C206', '39.323054', '9.061774', 'C', 22),
(438, 'C207', '39.323134', '9.061703', 'C', 22),
(439, 'C208', '39.323213', '9.061642', 'C', 22),
(440, 'C209', '39.323299', '9.061585', 'C', 22),
(441, 'C210', '39.323372', '9.061522', 'C', 22),
(442, 'C211', '39.323457', '9.061482', 'C', 22),
(443, 'C212', '39.323539', '9.061432', 'C', 22),
(444, 'C213', '39.323614', '9.061370', 'C', 22),
(445, 'C214', '39.323694', '9.061328', 'C', 22),
(446, 'C215', '39.323098', '9.061858', 'C', 23),
(447, 'C216', '39.323177', '9.061794', 'C', 23),
(448, 'C217', '39.323265', '9.061737', 'C', 23),
(449, 'C218', '39.323345', '9.061682', 'C', 23),
(450, 'C219', '39.323425', '9.061634', 'C', 23),
(451, 'C220', '39.323509', '9.061578', 'C', 23),
(452, 'C221', '39.323578', '9.061520', 'C', 23),
(453, 'C222', '39.323661', '9.061468', 'C', 23),
(454, 'C223', '39.323744', '9.061405', 'C', 23),
(455, 'C224', '39.323819', '9.061353', 'C', 23),
(456, 'C225', '39.323157', '9.061957', 'C', 24),
(457, 'C226', '39.323234', '9.061887', 'C', 24),
(458, 'C227', '39.323310', '9.061837', 'C', 24),
(459, 'C228', '39.323396', '9.061781', 'C', 24),
(460, 'C229', '39.323468', '9.061723', 'C', 24),
(461, 'C230', '39.323557', '9.061669', 'C', 24),
(462, 'C231', '39.323625', '9.061614', 'C', 24),
(463, 'C232', '39.323707', '9.061556', 'C', 24),
(464, 'C233', '39.323786', '9.061502', 'C', 24),
(465, 'C234', '39.323858', '9.061447', 'C', 24),
(466, 'C235', '39.323195', '9.062034', 'C', 25),
(467, 'C236', '39.323276', '9.061986', 'C', 25),
(468, 'C237', '39.323359', '9.061931', 'C', 25),
(469, 'C238', '39.323436', '9.061867', 'C', 25),
(470, 'C239', '39.323522', '9.061809', 'C', 25),
(471, 'C240', '39.323602', '9.061750', 'C', 25),
(472, 'C241', '39.323670', '9.061695', 'C', 25),
(473, 'C242', '39.323760', '9.061644', 'C', 25),
(474, 'C243', '39.323839', '9.061591', 'C', 25);

-- --------------------------------------------------------

--
-- Struttura della tabella `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `roles` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `username`) VALUES
(2, 'fabio@rncstudio.com', 'a:1:{i:0;s:9:"ROLE_USER";}', '$argon2i$v=19$m=1024,t=2,p=2$YU5qcmpTU1pMOUppVS9WLg$C9w/fBnquc8WhM31feIO6WSaMUpKd8aNdKiKDUas220', 'Fabio'),
(4, 'escanto@libero.it', 'a:1:{i:0;s:9:"ROLE_USER";}', '$argon2i$v=19$m=1024,t=2,p=2$SkhMZjAwL0p1MGtUbnZWQQ$ao7H2hgG8wYIvDeW95EcpXBPxdjwrSWOMUr7aBWv+Y4', 'Antonio');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indici per le tabelle `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `trees`
--
ALTER TABLE `trees`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`),
  ADD UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT per la tabella `trees`
--
ALTER TABLE `trees`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=475;
--
-- AUTO_INCREMENT per la tabella `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2022 at 12:12 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diamond`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin@example.com', 'superadmin', NULL, '$2y$10$gFokNdYKFCz1J5.lXgQ5HOZaPQrhcr5Ou4oWJXSB8ZGNrDxtliw9C', NULL, '2022-10-13 09:59:44', '2022-10-13 09:59:44');

-- --------------------------------------------------------

--
-- Table structure for table `bactches`
--

CREATE TABLE `bactches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `batchsquares`
--

CREATE TABLE `batchsquares` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cancelpackets`
--

CREATE TABLE `cancelpackets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `batch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pcs` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shape` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `length` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chocolates`
--

CREATE TABLE `chocolates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `batch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pcs` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shape` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `length` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dist` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gstno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comregister` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `createlanguages`
--

CREATE TABLE `createlanguages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `createsettingusers`
--

CREATE TABLE `createsettingusers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `districtid` int(11) NOT NULL,
  `district_title` varchar(100) NOT NULL,
  `state_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`districtid`, `district_title`, `state_id`) VALUES
(36, 'Anantnag', 15),
(37, 'Bandipore', 15),
(38, 'Baramulla', 15),
(39, 'Budgam', 15),
(40, 'Doda', 15),
(41, 'Ganderbal', 15),
(42, 'Jammu', 15),
(43, 'Kargil', 15),
(44, 'Kathua', 15),
(45, 'Kishtwar', 15),
(46, 'Kulgam', 15),
(47, 'Kupwara', 15),
(48, 'Leh (Ladakh)', 15),
(49, 'Poonch', 15),
(50, 'Pulwama', 15),
(51, 'Rajouri', 15),
(52, 'Ramban', 15),
(53, 'Reasi', 15),
(54, 'Samba', 15),
(55, 'Shopian', 15),
(56, 'Srinagar', 15),
(57, 'Udhampur', 15),
(58, 'Bilaspur (Himachal Pradesh)', 14),
(59, 'Chamba', 14),
(60, 'Hamirpur (Himachal Pradesh)', 14),
(61, 'Kangra', 14),
(62, 'Kinnaur', 14),
(63, 'Kullu', 14),
(64, 'Lahul & Spiti', 14),
(65, 'Mandi', 14),
(66, 'Shimla', 14),
(67, 'Sirmaur', 14),
(68, 'Solan', 14),
(69, 'Una', 14),
(70, 'Amritsar', 28),
(71, 'Barnala', 28),
(72, 'Bathinda', 28),
(73, 'Faridkot', 28),
(74, 'Fatehgarh Sahib', 28),
(75, 'Firozpur', 28),
(76, 'Gurdaspur', 28),
(77, 'Hoshiarpur', 28),
(78, 'Jalandhar', 28),
(79, 'Kapurthala', 28),
(80, 'Ludhiana', 28),
(81, 'Mansa', 28),
(82, 'Moga', 28),
(83, 'Muktsar', 28),
(84, 'Patiala', 28),
(85, 'Rupnagar (Ropar)', 28),
(86, 'Sahibzada Ajit Singh Nagar (Mohali)', 28),
(87, 'Sangrur', 28),
(88, 'Shahid Bhagat Singh Nagar (Nawanshahr)', 28),
(89, 'Tarn Taran', 28),
(90, 'Chandigarh', 6),
(91, 'Almora', 34),
(92, 'Bageshwar', 34),
(93, 'Chamoli', 34),
(94, 'Champawat', 34),
(95, 'Dehradun', 34),
(96, 'Haridwar', 34),
(97, 'Nainital', 34),
(98, 'Pauri Garhwal', 34),
(99, 'Pithoragarh', 34),
(100, 'Rudraprayag', 34),
(101, 'Tehri Garhwal', 34),
(102, 'Udham Singh Nagar', 34),
(103, 'Uttarkashi', 34),
(104, 'Ambala', 13),
(105, 'Bhiwani', 13),
(106, 'Faridabad', 13),
(107, 'Fatehabad', 13),
(108, 'Gurgaon', 13),
(109, 'Hisar', 13),
(110, 'Jhajjar', 13),
(111, 'Jind', 13),
(112, 'Kaithal', 13),
(113, 'Karnal', 13),
(114, 'Kurukshetra', 13),
(115, 'Mahendragarh', 13),
(116, 'Mewat', 13),
(117, 'Palwal', 13),
(118, 'Panchkula', 13),
(119, 'Panipat', 13),
(120, 'Rewari', 13),
(121, 'Rohtak', 13),
(122, 'Sirsa', 13),
(123, 'Sonipat', 13),
(124, 'Yamuna Nagar', 13),
(125, 'Central Delhi', 10),
(126, 'East Delhi', 10),
(127, 'New Delhi', 10),
(128, 'North Delhi', 10),
(129, 'North East Delhi', 10),
(130, 'North West Delhi', 10),
(131, 'South Delhi', 10),
(132, 'South West Delhi', 10),
(133, 'West Delhi', 10),
(134, 'Ajmer', 29),
(135, 'Alwar', 29),
(136, 'Banswara', 29),
(137, 'Baran', 29),
(138, 'Barmer', 29),
(139, 'Bharatpur', 29),
(140, 'Bhilwara', 29),
(141, 'Bikaner', 29),
(142, 'Bundi', 29),
(143, 'Chittorgarh', 29),
(144, 'Churu', 29),
(145, 'Dausa', 29),
(146, 'Dholpur', 29),
(147, 'Dungarpur', 29),
(148, 'Ganganagar', 29),
(149, 'Hanumangarh', 29),
(150, 'Jaipur', 29),
(151, 'Jaisalmer', 29),
(152, 'Jalor', 29),
(153, 'Jhalawar', 29),
(154, 'Jhunjhunu', 29),
(155, 'Jodhpur', 29),
(156, 'Karauli', 29),
(157, 'Kota', 29),
(158, 'Nagaur', 29),
(159, 'Pali', 29),
(160, 'Pratapgarh (Rajasthan)', 29),
(161, 'Rajsamand', 29),
(162, 'Sawai Madhopur', 29),
(163, 'Sikar', 29),
(164, 'Sirohi', 29),
(165, 'Tonk', 29),
(166, 'Udaipur', 29),
(167, 'Agra', 33),
(168, 'Aligarh', 33),
(169, 'Allahabad', 33),
(170, 'Ambedkar Nagar', 33),
(171, 'Auraiya', 33),
(172, 'Azamgarh', 33),
(173, 'Bagpat', 33),
(174, 'Bahraich', 33),
(175, 'Ballia', 33),
(176, 'Balrampur', 33),
(177, 'Banda', 33),
(178, 'Barabanki', 33),
(179, 'Bareilly', 33),
(180, 'Basti', 33),
(181, 'Bijnor', 33),
(182, 'Budaun', 33),
(183, 'Bulandshahr', 33),
(184, 'Chandauli', 33),
(185, 'Chitrakoot', 33),
(186, 'Deoria', 33),
(187, 'Etah', 33),
(188, 'Etawah', 33),
(189, 'Faizabad', 33),
(190, 'Farrukhabad', 33),
(191, 'Fatehpur', 33),
(192, 'Firozabad', 33),
(193, 'Gautam Buddha Nagar', 33),
(194, 'Ghaziabad', 33),
(195, 'Ghazipur', 33),
(196, 'Gonda', 33),
(197, 'Gorakhpur', 33),
(198, 'Hamirpur', 33),
(199, 'Hardoi', 33),
(200, 'Hathras', 33),
(201, 'Jalaun', 33),
(202, 'Jaunpur', 33),
(203, 'Jhansi', 33),
(204, 'Jyotiba Phule Nagar', 33),
(205, 'Kannauj', 33),
(206, 'Kanpur Dehat', 33),
(207, 'Kanpur Nagar', 33),
(208, 'Kanshiram Nagar', 33),
(209, 'Kaushambi', 33),
(210, 'Kheri', 33),
(211, 'Kushinagar', 33),
(212, 'Lalitpur', 33),
(213, 'Lucknow', 33),
(214, 'Maharajganj', 33),
(215, 'Mahoba', 33),
(216, 'Mainpuri', 33),
(217, 'Mathura', 33),
(218, 'Mau', 33),
(219, 'Meerut', 33),
(220, 'Mirzapur', 33),
(221, 'Moradabad', 33),
(222, 'Muzaffarnagar', 33),
(223, 'Pilibhit', 33),
(224, 'Pratapgarh', 33),
(225, 'Rae Bareli', 33),
(226, 'Rampur', 33),
(227, 'Saharanpur', 33),
(228, 'Sant Kabir Nagar', 33),
(229, 'Sant Ravidas Nagar (Bhadohi)', 33),
(230, 'Shahjahanpur', 33),
(231, 'Shrawasti', 33),
(232, 'Siddharthnagar', 33),
(233, 'Sitapur', 33),
(234, 'Sonbhadra', 33),
(235, 'Sultanpur', 33),
(236, 'Unnao', 33),
(237, 'Varanasi', 33),
(238, 'Araria', 5),
(239, 'Arwal', 5),
(240, 'Aurangabad (Bihar)', 5),
(241, 'Banka', 5),
(242, 'Begusarai', 5),
(243, 'Bhagalpur', 5),
(244, 'Bhojpur', 5),
(245, 'Buxar', 5),
(246, 'Darbhanga', 5),
(247, 'East Champaran', 5),
(248, 'Gaya', 5),
(249, 'Gopalganj', 5),
(250, 'Jamui', 5),
(251, 'Jehanabad', 5),
(252, 'Kaimur (Bhabua)', 5),
(253, 'Katihar', 5),
(254, 'Khagaria', 5),
(255, 'Kishanganj', 5),
(256, 'Lakhisarai', 5),
(257, 'Madhepura', 5),
(258, 'Madhubani', 5),
(259, 'Munger', 5),
(260, 'Muzaffarpur', 5),
(261, 'Nalanda', 5),
(262, 'Nawada', 5),
(263, 'Patna', 5),
(264, 'Purnia', 5),
(265, 'Rohtas', 5),
(266, 'Saharsa', 5),
(267, 'Samastipur', 5),
(268, 'Saran', 5),
(269, 'Sheikhpura', 5),
(270, 'Sheohar', 5),
(271, 'Sitamarhi', 5),
(272, 'Siwan', 5),
(273, 'Supaul', 5),
(274, 'Vaishali', 5),
(275, 'West Champaran', 5),
(276, 'East Sikkim', 30),
(277, 'North Sikkim', 30),
(278, 'South Sikkim', 30),
(279, 'West Sikkim', 30),
(280, 'Anjaw', 3),
(281, 'Changlang', 3),
(282, 'Dibang Valley', 3),
(283, 'East Kameng', 3),
(284, 'East Siang', 3),
(285, 'Kurung Kumey', 3),
(286, 'Lohit', 3),
(287, 'Lower Dibang Valley', 3),
(288, 'Lower Subansiri', 3),
(289, 'Papum Pare', 3),
(290, 'Tawang', 3),
(291, 'Tirap', 3),
(292, 'Upper Siang', 3),
(293, 'Upper Subansiri', 3),
(294, 'West Kameng', 3),
(295, 'West Siang', 3),
(296, 'Dimapur', 25),
(297, 'Kiphire', 25),
(298, 'Kohima', 25),
(299, 'Longleng', 25),
(300, 'Mokokchung', 25),
(301, 'Mon', 25),
(302, 'Peren', 25),
(303, 'Phek', 25),
(304, 'Tuensang', 25),
(305, 'Wokha', 25),
(306, 'Zunheboto', 25),
(307, 'Bishnupur', 22),
(308, 'Chandel', 22),
(309, 'Churachandpur', 22),
(310, 'Imphal East', 22),
(311, 'Imphal West', 22),
(312, 'Senapati', 22),
(313, 'Tamenglong', 22),
(314, 'Thoubal', 22),
(315, 'Ukhrul', 22),
(316, 'Aizawl', 24),
(317, 'Champhai', 24),
(318, 'Kolasib', 24),
(319, 'Lawngtlai', 24),
(320, 'Lunglei', 24),
(321, 'Mamit', 24),
(322, 'Saiha', 24),
(323, 'Serchhip', 24),
(324, 'Dhalai', 32),
(325, 'North Tripura', 32),
(326, 'South Tripura', 32),
(327, 'West Tripura', 32),
(328, 'East Garo Hills', 23),
(329, 'East Khasi Hills', 23),
(330, 'Jaintia Hills', 23),
(331, 'Ri Bhoi', 23),
(332, 'South Garo Hills', 23),
(333, 'West Garo Hills', 23),
(334, 'West Khasi Hills', 23),
(335, 'Baksa', 4),
(336, 'Barpeta', 4),
(337, 'Bongaigaon', 4),
(338, 'Cachar', 4),
(339, 'Chirang', 4),
(340, 'Darrang', 4),
(341, 'Dhemaji', 4),
(342, 'Dhubri', 4),
(343, 'Dibrugarh', 4),
(344, 'Dima Hasao (North Cachar Hills)', 4),
(345, 'Goalpara', 4),
(346, 'Golaghat', 4),
(347, 'Hailakandi', 4),
(348, 'Jorhat', 4),
(349, 'Kamrup', 4),
(350, 'Kamrup Metropolitan', 4),
(351, 'Karbi Anglong', 4),
(352, 'Karimganj', 4),
(353, 'Kokrajhar', 4),
(354, 'Lakhimpur', 4),
(355, 'Morigaon', 4),
(356, 'Nagaon', 4),
(357, 'Nalbari', 4),
(358, 'Sivasagar', 4),
(359, 'Sonitpur', 4),
(360, 'Tinsukia', 4),
(361, 'Udalguri', 4),
(362, 'Bankura', 35),
(363, 'Bardhaman', 35),
(364, 'Birbhum', 35),
(365, 'Cooch Behar', 35),
(366, 'Dakshin Dinajpur (South Dinajpur)', 35),
(367, 'Darjiling', 35),
(368, 'Hooghly', 35),
(369, 'Howrah', 35),
(370, 'Jalpaiguri', 35),
(371, 'Kolkata', 35),
(372, 'Maldah', 35),
(373, 'Murshidabad', 35),
(374, 'Nadia', 35),
(375, 'North 24 Parganas', 35),
(376, 'Paschim Medinipur (West Midnapore)', 35),
(377, 'Purba Medinipur (East Midnapore)', 35),
(378, 'Puruliya', 35),
(379, 'South 24 Parganas', 35),
(380, 'Uttar Dinajpur (North Dinajpur)', 35),
(381, 'Bokaro', 16),
(382, 'Chatra', 16),
(383, 'Deoghar', 16),
(384, 'Dhanbad', 16),
(385, 'Dumka', 16),
(386, 'East Singhbhum', 16),
(387, 'Garhwa', 16),
(388, 'Giridih', 16),
(389, 'Godda', 16),
(390, 'Gumla', 16),
(391, 'Hazaribagh', 16),
(392, 'Jamtara', 16),
(393, 'Khunti', 16),
(394, 'Koderma', 16),
(395, 'Latehar', 16),
(396, 'Lohardaga', 16),
(397, 'Pakur', 16),
(398, 'Palamu', 16),
(399, 'Ramgarh', 16),
(400, 'Ranchi', 16),
(401, 'Sahibganj', 16),
(402, 'Seraikela-Kharsawan', 16),
(403, 'Simdega', 16),
(404, 'West Singhbhum', 16),
(405, 'Angul', 26),
(406, 'Balangir', 26),
(407, 'Baleswar', 26),
(408, 'Bargarh', 26),
(409, 'Bhadrak', 26),
(410, 'Boudh', 26),
(411, 'Cuttack', 26),
(412, 'Debagarh', 26),
(413, 'Dhenkanal', 26),
(414, 'Gajapati', 26),
(415, 'Ganjam', 26),
(416, 'Jagatsinghapur', 26),
(417, 'Jajapur', 26),
(418, 'Jharsuguda', 26),
(419, 'Kalahandi', 26),
(420, 'Kandhamal', 26),
(421, 'Kendrapara', 26),
(422, 'Kendujhar', 26),
(423, 'Khordha', 26),
(424, 'Koraput', 26),
(425, 'Malkangiri', 26),
(426, 'Mayurbhanj', 26),
(427, 'Nabarangapur', 26),
(428, 'Nayagarh', 26),
(429, 'Nuapada', 26),
(430, 'Puri', 26),
(431, 'Rayagada', 26),
(432, 'Sambalpur', 26),
(433, 'Subarnapur (Sonapur)', 26),
(434, 'Sundergarh', 26),
(435, 'Bastar', 7),
(436, 'Bijapur (Chhattisgarh)', 7),
(437, 'Bilaspur (Chhattisgarh)', 7),
(438, 'Dakshin Bastar Dantewada', 7),
(439, 'Dhamtari', 7),
(440, 'Durg', 7),
(441, 'Janjgir-Champa', 7),
(442, 'Jashpur', 7),
(443, 'Kabirdham (Kawardha)', 7),
(444, 'Korba', 7),
(445, 'Koriya', 7),
(446, 'Mahasamund', 7),
(447, 'Narayanpur', 7),
(448, 'Raigarh (Chhattisgarh)', 7),
(449, 'Raipur', 7),
(450, 'Rajnandgaon', 7),
(451, 'Surguja', 7),
(452, 'Uttar Bastar Kanker', 7),
(453, 'Alirajpur', 20),
(454, 'Anuppur', 20),
(455, 'Ashok Nagar', 20),
(456, 'Balaghat', 20),
(457, 'Barwani', 20),
(458, 'Betul', 20),
(459, 'Bhind', 20),
(460, 'Bhopal', 20),
(461, 'Burhanpur', 20),
(462, 'Chhatarpur', 20),
(463, 'Chhindwara', 20),
(464, 'Damoh', 20),
(465, 'Datia', 20),
(466, 'Dewas', 20),
(467, 'Dhar', 20),
(468, 'Dindori', 20),
(469, 'Guna', 20),
(470, 'Gwalior', 20),
(471, 'Harda', 20),
(472, 'Hoshangabad', 20),
(473, 'Indore', 20),
(474, 'Jabalpur', 20),
(475, 'Jhabua', 20),
(476, 'Katni', 20),
(477, 'Khandwa (East Nimar)', 20),
(478, 'Khargone (West Nimar)', 20),
(479, 'Mandla', 20),
(480, 'Mandsaur', 20),
(481, 'Morena', 20),
(482, 'Narsinghpur', 20),
(483, 'Neemuch', 20),
(484, 'Panna', 20),
(485, 'Raisen', 20),
(486, 'Rajgarh', 20),
(487, 'Ratlam', 20),
(488, 'Rewa', 20),
(489, 'Sagar', 20),
(490, 'Satna', 20),
(491, 'Sehore', 20),
(492, 'Seoni', 20),
(493, 'Shahdol', 20),
(494, 'Shajapur', 20),
(495, 'Sheopur', 20),
(496, 'Shivpuri', 20),
(497, 'Sidhi', 20),
(498, 'Singrauli', 20),
(499, 'Tikamgarh', 20),
(500, 'Ujjain', 20),
(501, 'Umaria', 20),
(502, 'Vidisha', 20),
(503, 'Ahmedabad', 12),
(504, 'Amreli', 12),
(505, 'Anand', 12),
(506, 'Banaskantha', 12),
(507, 'Bharuch', 12),
(508, 'Bhavnagar', 12),
(509, 'Dahod', 12),
(510, 'Gandhi Nagar', 12),
(511, 'Jamnagar', 12),
(512, 'Junagadh', 12),
(513, 'Kachchh', 12),
(514, 'Kheda', 12),
(515, 'Mahesana', 12),
(516, 'Narmada', 12),
(517, 'Navsari', 12),
(518, 'Panch Mahals', 12),
(519, 'Patan', 12),
(520, 'Porbandar', 12),
(521, 'Rajkot', 12),
(522, 'Sabarkantha', 12),
(523, 'Surat', 12),
(524, 'Surendra Nagar', 12),
(525, 'Tapi', 12),
(526, 'The Dangs', 12),
(527, 'Vadodara', 12),
(528, 'Valsad', 12),
(529, 'Daman', 9),
(530, 'Diu', 9),
(531, 'Dadra & Nagar Haveli', 8),
(532, 'Ahmed Nagar', 21),
(533, 'Akola', 21),
(534, 'Amravati', 21),
(535, 'Aurangabad', 21),
(536, 'Beed', 21),
(537, 'Bhandara', 21),
(538, 'Buldhana', 21),
(539, 'Chandrapur', 21),
(540, 'Dhule', 21),
(541, 'Gadchiroli', 21),
(542, 'Gondia', 21),
(543, 'Hingoli', 21),
(544, 'Jalgaon', 21),
(545, 'Jalna', 21),
(546, 'Kolhapur', 21),
(547, 'Latur', 21),
(548, 'Mumbai', 21),
(549, 'Mumbai Suburban', 21),
(550, 'Nagpur', 21),
(551, 'Nanded', 21),
(552, 'Nandurbar', 21),
(553, 'Nashik', 21),
(554, 'Osmanabad', 21),
(555, 'Parbhani', 21),
(556, 'Pune', 21),
(557, 'Raigarh (Maharashtra)', 21),
(558, 'Ratnagiri', 21),
(559, 'Sangli', 21),
(560, 'Satara', 21),
(561, 'Sindhudurg', 21),
(562, 'Solapur', 21),
(563, 'Thane', 21),
(564, 'Wardha', 21),
(565, 'Washim', 21),
(566, 'Yavatmal', 21),
(567, 'Adilabad', 2),
(568, 'Anantapur', 2),
(569, 'Chittoor', 2),
(570, 'East Godavari', 2),
(571, 'Guntur', 2),
(572, 'Hyderabad', 2),
(573, 'Kadapa (Cuddapah)', 2),
(574, 'Karim Nagar', 2),
(575, 'Khammam', 2),
(576, 'Krishna', 2),
(577, 'Kurnool', 2),
(578, 'Mahbubnagar', 2),
(579, 'Medak', 2),
(580, 'Nalgonda', 2),
(581, 'Nellore', 2),
(582, 'Nizamabad', 2),
(583, 'Prakasam', 2),
(584, 'Rangareddy', 2),
(585, 'Srikakulam', 2),
(586, 'Visakhapatnam', 2),
(587, 'Vizianagaram', 2),
(588, 'Warangal', 2),
(589, 'West Godavari', 2),
(590, 'Bagalkot', 17),
(591, 'Bangalore', 17),
(592, 'Bangalore Rural', 17),
(593, 'Belgaum', 17),
(594, 'Bellary', 17),
(595, 'Bidar', 17),
(596, 'Bijapur (Karnataka)', 17),
(597, 'Chamrajnagar', 17),
(598, 'Chickmagalur', 17),
(599, 'Chikkaballapur', 17),
(600, 'Chitradurga', 17),
(601, 'Dakshina Kannada', 17),
(602, 'Davanagere', 17),
(603, 'Dharwad', 17),
(604, 'Gadag', 17),
(605, 'Gulbarga', 17),
(606, 'Hassan', 17),
(607, 'Haveri', 17),
(608, 'Kodagu', 17),
(609, 'Kolar', 17),
(610, 'Koppal', 17),
(611, 'Mandya', 17),
(612, 'Mysore', 17),
(613, 'Raichur', 17),
(614, 'Ramanagara', 17),
(615, 'Shimoga', 17),
(616, 'Tumkur', 17),
(617, 'Udupi', 17),
(618, 'Uttara Kannada', 17),
(619, 'Yadgir', 17),
(620, 'North Goa', 11),
(621, 'South Goa', 11),
(622, 'Lakshadweep', 19),
(623, 'Alappuzha', 18),
(624, 'Ernakulam', 18),
(625, 'Idukki', 18),
(626, 'Kannur', 18),
(627, 'Kasaragod', 18),
(628, 'Kollam', 18),
(629, 'Kottayam', 18),
(630, 'Kozhikode', 18),
(631, 'Malappuram', 18),
(632, 'Palakkad', 18),
(633, 'Pathanamthitta', 18),
(634, 'Thiruvananthapuram', 18),
(635, 'Thrissur', 18),
(636, 'Wayanad', 18),
(637, 'Ariyalur', 31),
(638, 'Chennai', 31),
(639, 'Coimbatore', 31),
(640, 'Cuddalore', 31),
(641, 'Dharmapuri', 31),
(642, 'Dindigul', 31),
(643, 'Erode', 31),
(644, 'Kanchipuram', 31),
(645, 'Kanyakumari', 31),
(646, 'Karur', 31),
(647, 'Krishnagiri', 31),
(648, 'Madurai', 31),
(649, 'Nagapattinam', 31),
(650, 'Namakkal', 31),
(651, 'Nilgiris', 31),
(652, 'Perambalur', 31),
(653, 'Pudukkottai', 31),
(654, 'Ramanathapuram', 31),
(655, 'Salem', 31),
(656, 'Sivaganga', 31),
(657, 'Thanjavur', 31),
(658, 'Theni', 31),
(659, 'Thoothukudi (Tuticorin)', 31),
(660, 'Tiruchirappalli', 31),
(661, 'Tirunelveli', 31),
(662, 'Tiruppur', 31),
(663, 'Tiruvallur', 31),
(664, 'Tiruvannamalai', 31),
(665, 'Tiruvarur', 31),
(666, 'Vellore', 31),
(667, 'Viluppuram', 31),
(668, 'Virudhunagar', 31),
(669, 'Karaikal', 27),
(670, 'Mahe', 27),
(671, 'Puducherry (Pondicherry)', 27),
(672, 'Yanam', 27),
(673, 'Nicobar', 1),
(674, 'North And Middle Andaman', 1),
(675, 'South Andaman', 1);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `finishtypes`
--

CREATE TABLE `finishtypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jangads`
--

CREATE TABLE `jangads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `partys` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dates` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expectedreturndates` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobworks`
--

CREATE TABLE `jobworks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `party` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expectedreturndate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` char(49) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`) VALUES
(1, 'English'),
(2, 'Afar'),
(3, 'Abkhazian'),
(4, 'Afrikaans'),
(5, 'Amharic'),
(6, 'Arabic'),
(7, 'Assamese'),
(8, 'Aymara'),
(9, 'Azerbaijani'),
(10, 'Bashkir'),
(11, 'Belarusian'),
(12, 'Bulgarian'),
(13, 'Bihari'),
(14, 'Bislama'),
(15, 'Bengali/Bangla'),
(16, 'Tibetan'),
(17, 'Breton'),
(18, 'Catalan'),
(19, 'Corsican'),
(20, 'Czech'),
(21, 'Welsh'),
(22, 'Danish'),
(23, 'German'),
(24, 'Bhutani'),
(25, 'Greek'),
(26, 'Esperanto'),
(27, 'Spanish'),
(28, 'Estonian'),
(29, 'Basque'),
(30, 'Persian'),
(31, 'Finnish'),
(32, 'Fiji'),
(33, 'Faeroese'),
(34, 'French'),
(35, 'Frisian'),
(36, 'Irish'),
(37, 'Scots/Gaelic'),
(38, 'Galician'),
(39, 'Guarani'),
(40, 'Gujarati'),
(41, 'Hausa'),
(42, 'Hindi'),
(43, 'Croatian'),
(44, 'Hungarian'),
(45, 'Armenian'),
(46, 'Interlingua'),
(47, 'Interlingue'),
(48, 'Inupiak'),
(49, 'Indonesian'),
(50, 'Icelandic'),
(51, 'Italian'),
(52, 'Hebrew'),
(53, 'Japanese'),
(54, 'Yiddish'),
(55, 'Javanese'),
(56, 'Georgian'),
(57, 'Kazakh'),
(58, 'Greenlandic'),
(59, 'Cambodian'),
(60, 'Kannada'),
(61, 'Korean'),
(62, 'Kashmiri'),
(63, 'Kurdish'),
(64, 'Kirghiz'),
(65, 'Latin'),
(66, 'Lingala'),
(67, 'Laothian'),
(68, 'Lithuanian'),
(69, 'Latvian/Lettish'),
(70, 'Malagasy'),
(71, 'Maori'),
(72, 'Macedonian'),
(73, 'Malayalam'),
(74, 'Mongolian'),
(75, 'Moldavian'),
(76, 'Marathi'),
(77, 'Malay'),
(78, 'Maltese'),
(79, 'Burmese'),
(80, 'Nauru'),
(81, 'Nepali'),
(82, 'Dutch'),
(83, 'Norwegian'),
(84, 'Occitan'),
(85, '(Afan)/Oromoor/Oriya'),
(86, 'Punjabi'),
(87, 'Polish'),
(88, 'Pashto/Pushto'),
(89, 'Portuguese'),
(90, 'Quechua'),
(91, 'Rhaeto-Romance'),
(92, 'Kirundi'),
(93, 'Romanian'),
(94, 'Russian'),
(95, 'Kinyarwanda'),
(96, 'Sanskrit'),
(97, 'Sindhi'),
(98, 'Sangro'),
(99, 'Serbo-Croatian'),
(100, 'Singhalese'),
(101, 'Slovak'),
(102, 'Slovenian'),
(103, 'Samoan'),
(104, 'Shona'),
(105, 'Somali'),
(106, 'Albanian'),
(107, 'Serbian'),
(108, 'Siswati'),
(109, 'Sesotho'),
(110, 'Sundanese'),
(111, 'Swedish'),
(112, 'Swahili'),
(113, 'Tamil'),
(114, 'Telugu'),
(115, 'Tajik'),
(116, 'Thai'),
(117, 'Tigrinya'),
(118, 'Turkmen'),
(119, 'Tagalog'),
(120, 'Setswana'),
(121, 'Tonga'),
(122, 'Turkish'),
(123, 'Tsonga'),
(124, 'Tatar'),
(125, 'Twi'),
(126, 'Ukrainian'),
(127, 'Urdu'),
(128, 'Uzbek'),
(129, 'Vietnamese'),
(130, 'Volapuk'),
(131, 'Wolof'),
(132, 'Xhosa'),
(133, 'Yoruba'),
(134, 'Chinese'),
(135, 'Zulu');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `batch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pcs` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shape` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `length` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lotprocesses`
--

CREATE TABLE `lotprocesses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lots`
--

CREATE TABLE `lots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `batch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pcs` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shape` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `length` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(28, '2022_09_29_151720_create_jangads_table', 8),
(30, '2014_10_12_000000_create_users_table', 9),
(31, '2014_10_12_100000_create_password_resets_table', 9),
(32, '2019_08_19_000000_create_failed_jobs_table', 9),
(33, '2022_09_19_102205_create_bactches_table', 9),
(34, '2022_09_19_102454_create_packets_table', 9),
(35, '2022_09_20_071700_create_lots_table', 9),
(36, '2022_09_20_090545_create_weightlosses_table', 9),
(37, '2022_09_20_092553_create_cancelpackets_table', 9),
(38, '2022_09_20_094658_create_chocolates_table', 9),
(39, '2022_09_20_095615_create_locations_table', 9),
(40, '2022_09_20_100407_create_stockmoves_table', 9),
(41, '2022_09_20_101533_create_stockquants_table', 9),
(42, '2022_09_20_104346_create_stockpackets_table', 9),
(43, '2022_09_21_040431_create_shaps_table', 9),
(44, '2022_09_21_091740_create_stocklosses_table', 9),
(45, '2022_09_21_100713_create_lotprocesses_table', 9),
(46, '2022_09_21_103156_create_processresons_table', 9),
(47, '2022_09_21_104301_create_finishtypes_table', 9),
(48, '2022_09_21_105403_create_colors_table', 9),
(49, '2022_09_21_110343_create_purities_table', 9),
(50, '2022_09_21_124248_create_batchsquares_table', 9),
(51, '2022_09_26_070822_create_createsettingusers_table', 9),
(52, '2022_09_26_124332_create_createlanguages_table', 9),
(53, '2022_09_27_045811_create_companies_table', 9),
(54, '2022_09_27_065714_create_parties_table', 9),
(55, '2022_09_27_163359_create_jobworks_table', 9),
(56, '2022_09_28_101734_create_images_table', 9),
(57, '2022_09_29_170749_create_jangads_table', 9),
(58, '2020_07_24_184706_create_permission_tables', 10),
(59, '2020_09_12_043205_create_admins_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\Admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `packets`
--

CREATE TABLE `packets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `batch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pcs` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shape` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `length` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `parties`
--

CREATE TABLE `parties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `group_name`, `created_at`, `updated_at`) VALUES
(1, 'dashboard.view', 'admin', 'dashboard', '2022-10-13 09:59:44', '2022-10-13 09:59:44'),
(2, 'dashboard.edit', 'admin', 'dashboard', '2022-10-13 09:59:44', '2022-10-13 09:59:44'),
(3, 'blog.create', 'admin', 'blog', '2022-10-13 09:59:44', '2022-10-13 09:59:44'),
(4, 'blog.view', 'admin', 'blog', '2022-10-13 09:59:44', '2022-10-13 09:59:44'),
(5, 'blog.edit', 'admin', 'blog', '2022-10-13 09:59:44', '2022-10-13 09:59:44'),
(6, 'blog.delete', 'admin', 'blog', '2022-10-13 09:59:44', '2022-10-13 09:59:44'),
(7, 'blog.approve', 'admin', 'blog', '2022-10-13 09:59:44', '2022-10-13 09:59:44'),
(8, 'admin.create', 'admin', 'admin', '2022-10-13 09:59:44', '2022-10-13 09:59:44'),
(9, 'admin.view', 'admin', 'admin', '2022-10-13 09:59:44', '2022-10-13 09:59:44'),
(10, 'admin.edit', 'admin', 'admin', '2022-10-13 09:59:44', '2022-10-13 09:59:44'),
(11, 'admin.delete', 'admin', 'admin', '2022-10-13 09:59:44', '2022-10-13 09:59:44'),
(12, 'admin.approve', 'admin', 'admin', '2022-10-13 09:59:44', '2022-10-13 09:59:44'),
(13, 'role.create', 'admin', 'role', '2022-10-13 09:59:44', '2022-10-13 09:59:44'),
(14, 'role.view', 'admin', 'role', '2022-10-13 09:59:44', '2022-10-13 09:59:44'),
(15, 'role.edit', 'admin', 'role', '2022-10-13 09:59:44', '2022-10-13 09:59:44'),
(16, 'role.delete', 'admin', 'role', '2022-10-13 09:59:44', '2022-10-13 09:59:44'),
(17, 'role.approve', 'admin', 'role', '2022-10-13 09:59:44', '2022-10-13 09:59:44'),
(18, 'profile.view', 'admin', 'profile', '2022-10-13 09:59:45', '2022-10-13 09:59:45'),
(19, 'profile.edit', 'admin', 'profile', '2022-10-13 09:59:45', '2022-10-13 09:59:45');

-- --------------------------------------------------------

--
-- Table structure for table `processresons`
--

CREATE TABLE `processresons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purities`
--

CREATE TABLE `purities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'admin', '2022-10-13 09:59:44', '2022-10-13 09:59:44');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1);

-- --------------------------------------------------------

--
-- Table structure for table `shaps`
--

CREATE TABLE `shaps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `state_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_title`) VALUES
(1, 'Andaman & Nicobar Islands'),
(2, 'Andhra Pradesh'),
(3, 'Arunachal Pradesh'),
(4, 'Assam'),
(5, 'Bihar'),
(6, 'Chandigarh'),
(7, 'Chhattisgarh'),
(8, 'Dadra & Nagar Haveli'),
(9, 'Daman & Diu'),
(10, 'Delhi'),
(11, 'Goa'),
(12, 'Gujarat'),
(13, 'Haryana'),
(14, 'Himachal Pradesh'),
(15, 'Jammu & Kashmir'),
(16, 'Jharkhand'),
(17, 'Karnataka'),
(18, 'Kerala'),
(19, 'Lakshadweep'),
(20, 'Madhya Pradesh'),
(21, 'Maharashtra'),
(22, 'Manipur'),
(23, 'Meghalaya'),
(24, 'Mizoram'),
(25, 'Nagaland'),
(26, 'Odisha'),
(27, 'Puducherry'),
(28, 'Punjab'),
(29, 'Rajasthan'),
(30, 'Sikkim'),
(31, 'Tamil Nadu'),
(32, 'Tripura'),
(33, 'Uttar Pradesh'),
(34, 'Uttarakhand'),
(35, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `stocklosses`
--

CREATE TABLE `stocklosses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `batch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pcs` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shape` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `length` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stockmoves`
--

CREATE TABLE `stockmoves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `batch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pcs` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shape` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `length` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stockpackets`
--

CREATE TABLE `stockpackets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `batch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pcs` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shape` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `length` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stockquants`
--

CREATE TABLE `stockquants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `batch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pcs` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shape` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `length` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hardik', 'sharddhagarsondiya365@gmail.com', NULL, '$2y$10$.BzzgW.fnOzbMsloUTh4GuZ0RDW/uTEXCObfBGjoKSmkC3uRS4toW', NULL, '2022-10-10 06:56:08', '2022-10-10 06:56:08'),
(2, 'Maniruzzaman Akash', 'manirujjamanakash@gmail.com', NULL, '$2y$10$RnJWvRoPwx3CLucNgMvKIu4dcTinBh4Bq7Bj.oSZKP0B4xa43q5Fm', NULL, '2022-10-13 09:59:44', '2022-10-13 09:59:44');

-- --------------------------------------------------------

--
-- Table structure for table `weightlosses`
--

CREATE TABLE `weightlosses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `batch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pcs` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shape` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `length` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_username_unique` (`username`);

--
-- Indexes for table `bactches`
--
ALTER TABLE `bactches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batchsquares`
--
ALTER TABLE `batchsquares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cancelpackets`
--
ALTER TABLE `cancelpackets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chocolates`
--
ALTER TABLE `chocolates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `companies_email_unique` (`email`);

--
-- Indexes for table `createlanguages`
--
ALTER TABLE `createlanguages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `createsettingusers`
--
ALTER TABLE `createsettingusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`districtid`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `finishtypes`
--
ALTER TABLE `finishtypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jangads`
--
ALTER TABLE `jangads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobworks`
--
ALTER TABLE `jobworks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lotprocesses`
--
ALTER TABLE `lotprocesses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lots`
--
ALTER TABLE `lots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `packets`
--
ALTER TABLE `packets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parties`
--
ALTER TABLE `parties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `processresons`
--
ALTER TABLE `processresons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purities`
--
ALTER TABLE `purities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `shaps`
--
ALTER TABLE `shaps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `stocklosses`
--
ALTER TABLE `stocklosses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stockmoves`
--
ALTER TABLE `stockmoves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stockpackets`
--
ALTER TABLE `stockpackets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stockquants`
--
ALTER TABLE `stockquants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `weightlosses`
--
ALTER TABLE `weightlosses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bactches`
--
ALTER TABLE `bactches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `batchsquares`
--
ALTER TABLE `batchsquares`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cancelpackets`
--
ALTER TABLE `cancelpackets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chocolates`
--
ALTER TABLE `chocolates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `createlanguages`
--
ALTER TABLE `createlanguages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `createsettingusers`
--
ALTER TABLE `createsettingusers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `districtid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6600;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `finishtypes`
--
ALTER TABLE `finishtypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jangads`
--
ALTER TABLE `jangads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobworks`
--
ALTER TABLE `jobworks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lotprocesses`
--
ALTER TABLE `lotprocesses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lots`
--
ALTER TABLE `lots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `packets`
--
ALTER TABLE `packets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parties`
--
ALTER TABLE `parties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `processresons`
--
ALTER TABLE `processresons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purities`
--
ALTER TABLE `purities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shaps`
--
ALTER TABLE `shaps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6600;

--
-- AUTO_INCREMENT for table `stocklosses`
--
ALTER TABLE `stocklosses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stockmoves`
--
ALTER TABLE `stockmoves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stockpackets`
--
ALTER TABLE `stockpackets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stockquants`
--
ALTER TABLE `stockquants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `weightlosses`
--
ALTER TABLE `weightlosses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 09, 2019 at 06:48 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bcaresult`
--

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(5) UNSIGNED NOT NULL,
  `rollNumber` varchar(12) NOT NULL,
  `studentname` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `studentMarks` varchar(50) NOT NULL,
  `Max_Marks` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `rollNumber`, `studentname`, `subject`, `studentMarks`, `Max_Marks`) VALUES
(204, '10721601941', 'AMIT NATH INDORIA', 'DATA STRUCTURE & FILE PROCESSING', '-', '75'),
(205, '10721601941', 'AMIT NATH INDORIA', 'INFORMATION SYSTEMS', '31', '75'),
(206, '10721601941', 'AMIT NATH INDORIA', 'INTERNET APPLICATIONS', '29', '75'),
(207, '10721601941', 'AMIT NATH INDORIA', 'SYSTEM SOFTWARE', '38', '75'),
(208, '10721601941', 'AMIT NATH INDORIA', 'ENVIRONMENTAL STUDIES-II (COMPULSORY)', '26', '50'),
(209, '10721601941', 'AMIT NATH INDORIA', 'LAB-DATA STRUCTURES IMPLEMENTATION USING C++', '47', '50'),
(210, '10721601941', 'AMIT NATH INDORIA', 'LAB-WEB DESIGNING AND USE OF INTERNET', '48', '50'),
(211, '10721601944', 'GURSHARAN SINGH', 'DATA STRUCTURE & FILE PROCESSING', '-', '75'),
(212, '10721601944', 'GURSHARAN SINGH', 'INFORMATION SYSTEMS', '26', '75'),
(213, '10721601944', 'GURSHARAN SINGH', 'INTERNET APPLICATIONS', '-', '75'),
(214, '10721601944', 'GURSHARAN SINGH', 'SYSTEM SOFTWARE', '-', '75'),
(215, '10721601944', 'GURSHARAN SINGH', 'ENVIRONMENTAL STUDIES-II (COMPULSORY)', '20', '50'),
(216, '10721601944', 'GURSHARAN SINGH', 'LAB-DATA STRUCTURES IMPLEMENTATION USING C++', '40', '50'),
(217, '10721601944', 'GURSHARAN SINGH', 'LAB-WEB DESIGNING AND USE OF INTERNET', '41', '50'),
(218, '10721601946', 'AJAY KUMAR', 'DATA STRUCTURE & FILE PROCESSING', '-', '75'),
(219, '10721601946', 'AJAY KUMAR', 'INFORMATION SYSTEMS', '26', '75'),
(220, '10721601946', 'AJAY KUMAR', 'INTERNET APPLICATIONS', '27', '75'),
(221, '10721601946', 'AJAY KUMAR', 'SYSTEM SOFTWARE', '27', '75'),
(222, '10721601946', 'AJAY KUMAR', 'ENVIRONMENTAL STUDIES-II (COMPULSORY)', '19', '50'),
(223, '10721601946', 'AJAY KUMAR', 'LAB-DATA STRUCTURES IMPLEMENTATION USING C++', '43', '50'),
(224, '10721601946', 'AJAY KUMAR', 'LAB-WEB DESIGNING AND USE OF INTERNET', '44', '50'),
(225, '10721601947', 'VISHAL KUMAR', 'DATA STRUCTURE & FILE PROCESSING', '28', '75'),
(226, '10721601947', 'VISHAL KUMAR', 'INFORMATION SYSTEMS', '-', '75'),
(227, '10721601947', 'VISHAL KUMAR', 'INTERNET APPLICATIONS', '-', '75'),
(228, '10721601947', 'VISHAL KUMAR', 'SYSTEM SOFTWARE', '26', '75'),
(229, '10721601947', 'VISHAL KUMAR', 'ENVIRONMENTAL STUDIES-II (COMPULSORY)', '22', '50'),
(230, '10721601947', 'VISHAL KUMAR', 'LAB-DATA STRUCTURES IMPLEMENTATION USING C++', '45', '50'),
(231, '10721601947', 'VISHAL KUMAR', 'LAB-WEB DESIGNING AND USE OF INTERNET', '46', '50'),
(232, '10721601949', 'SHUBHAM BHANDARI', 'DATA STRUCTURE & FILE PROCESSING', '-', '75'),
(233, '10721601949', 'SHUBHAM BHANDARI', 'INFORMATION SYSTEMS', '32', '75'),
(234, '10721601949', 'SHUBHAM BHANDARI', 'INTERNET APPLICATIONS', '-', '75'),
(235, '10721601949', 'SHUBHAM BHANDARI', 'SYSTEM SOFTWARE', '40', '75'),
(236, '10721601949', 'SHUBHAM BHANDARI', 'ENVIRONMENTAL STUDIES-II (COMPULSORY)', '19', '50'),
(237, '10721601949', 'SHUBHAM BHANDARI', 'LAB-DATA STRUCTURES IMPLEMENTATION USING C++', '46', '50'),
(238, '10721601949', 'SHUBHAM BHANDARI', 'LAB-WEB DESIGNING AND USE OF INTERNET', '47', '50'),
(239, '10721601950', 'VISHAL SINGH', 'DATA STRUCTURE & FILE PROCESSING', '-', '75'),
(240, '10721601950', 'VISHAL SINGH', 'INFORMATION SYSTEMS', '26', '75'),
(241, '10721601950', 'VISHAL SINGH', 'INTERNET APPLICATIONS', '28', '75'),
(242, '10721601950', 'VISHAL SINGH', 'SYSTEM SOFTWARE', '41', '75'),
(243, '10721601950', 'VISHAL SINGH', 'ENVIRONMENTAL STUDIES-II (COMPULSORY)', '18', '50'),
(244, '10721601950', 'VISHAL SINGH', 'LAB-DATA STRUCTURES IMPLEMENTATION USING C++', '42', '50'),
(245, '10721601950', 'VISHAL SINGH', 'LAB-WEB DESIGNING AND USE OF INTERNET', '43', '50'),
(246, '10721601951', 'KARAN BHANDARI', 'DATA STRUCTURE & FILE PROCESSING', '-', '75'),
(247, '10721601951', 'KARAN BHANDARI', 'INFORMATION SYSTEMS', '-', '75'),
(248, '10721601951', 'KARAN BHANDARI', 'INTERNET APPLICATIONS', '27', '75'),
(249, '10721601951', 'KARAN BHANDARI', 'SYSTEM SOFTWARE', '33', '75'),
(250, '10721601951', 'KARAN BHANDARI', 'ENVIRONMENTAL STUDIES-II (COMPULSORY)', '18', '50'),
(251, '10721601951', 'KARAN BHANDARI', 'LAB-DATA STRUCTURES IMPLEMENTATION USING C++', '41', '50'),
(252, '10721601951', 'KARAN BHANDARI', 'LAB-WEB DESIGNING AND USE OF INTERNET', '42', '50'),
(253, '10721601953', 'KARAN', 'DATA STRUCTURE & FILE PROCESSING', '-', '75'),
(254, '10721601953', 'KARAN', 'INFORMATION SYSTEMS', '-', '75'),
(255, '10721601953', 'KARAN', 'INTERNET APPLICATIONS', '29', '75'),
(256, '10721601953', 'KARAN', 'SYSTEM SOFTWARE', '26', '75'),
(257, '10721601953', 'KARAN', 'ENVIRONMENTAL STUDIES-II (COMPULSORY)', '18', '50'),
(258, '10721601953', 'KARAN', 'LAB-DATA STRUCTURES IMPLEMENTATION USING C++', '41', '50'),
(259, '10721601953', 'KARAN', 'LAB-WEB DESIGNING AND USE OF INTERNET', '42', '50'),
(260, '10721601955', 'NAVNEET SINGH', 'DATA STRUCTURE & FILE PROCESSING', '-', '75'),
(261, '10721601955', 'NAVNEET SINGH', 'INFORMATION SYSTEMS', '26', '75'),
(262, '10721601955', 'NAVNEET SINGH', 'INTERNET APPLICATIONS', '32', '75'),
(263, '10721601955', 'NAVNEET SINGH', 'SYSTEM SOFTWARE', '29', '75'),
(264, '10721601955', 'NAVNEET SINGH', 'ENVIRONMENTAL STUDIES-II (COMPULSORY)', '18', '50'),
(265, '10721601955', 'NAVNEET SINGH', 'LAB-DATA STRUCTURES IMPLEMENTATION USING C++', '40', '50'),
(266, '10721601955', 'NAVNEET SINGH', 'LAB-WEB DESIGNING AND USE OF INTERNET', '41', '50'),
(267, '10721601959', 'GOURAV SHARMA', 'DATA STRUCTURE & FILE PROCESSING', '-', '75'),
(268, '10721601959', 'GOURAV SHARMA', 'INFORMATION SYSTEMS', '27', '75'),
(269, '10721601959', 'GOURAV SHARMA', 'INTERNET APPLICATIONS', '-', '75'),
(270, '10721601959', 'GOURAV SHARMA', 'SYSTEM SOFTWARE', '-', '75'),
(271, '10721601959', 'GOURAV SHARMA', 'ENVIRONMENTAL STUDIES-II (COMPULSORY)', '18', '50'),
(272, '10721601959', 'GOURAV SHARMA', 'LAB-DATA STRUCTURES IMPLEMENTATION USING C++', '41', '50'),
(273, '10721601959', 'GOURAV SHARMA', 'LAB-WEB DESIGNING AND USE OF INTERNET', '41', '50'),
(274, '10721601964', 'GURJANT SINGH', 'DATA STRUCTURE & FILE PROCESSING', '-', '75'),
(275, '10721601964', 'GURJANT SINGH', 'INFORMATION SYSTEMS', '27', '75'),
(276, '10721601964', 'GURJANT SINGH', 'INTERNET APPLICATIONS', '-', '75'),
(277, '10721601964', 'GURJANT SINGH', 'SYSTEM SOFTWARE', '26', '75'),
(278, '10721601964', 'GURJANT SINGH', 'ENVIRONMENTAL STUDIES-II (COMPULSORY)', '20', '50'),
(279, '10721601964', 'GURJANT SINGH', 'LAB-DATA STRUCTURES IMPLEMENTATION USING C++', '42', '50'),
(280, '10721601964', 'GURJANT SINGH', 'LAB-WEB DESIGNING AND USE OF INTERNET', '42', '50'),
(281, '10721601965', 'GURMUKH SINGH', 'DATA STRUCTURE & FILE PROCESSING', '-', '75'),
(282, '10721601965', 'GURMUKH SINGH', 'INFORMATION SYSTEMS', '31', '75'),
(283, '10721601965', 'GURMUKH SINGH', 'INTERNET APPLICATIONS', '-', '75'),
(284, '10721601965', 'GURMUKH SINGH', 'SYSTEM SOFTWARE', '-', '75'),
(285, '10721601965', 'GURMUKH SINGH', 'ENVIRONMENTAL STUDIES-II (COMPULSORY)', '22', '50'),
(286, '10721601965', 'GURMUKH SINGH', 'LAB-DATA STRUCTURES IMPLEMENTATION USING C++', '40', '50'),
(287, '10721601965', 'GURMUKH SINGH', 'LAB-WEB DESIGNING AND USE OF INTERNET', '41', '50'),
(288, '10721601971', 'DHURUV MAHAJAN', 'DATA STRUCTURE & FILE PROCESSING', '-', '75'),
(289, '10721601971', 'DHURUV MAHAJAN', 'INFORMATION SYSTEMS', '27', '75'),
(290, '10721601971', 'DHURUV MAHAJAN', 'INTERNET APPLICATIONS', '27', '75'),
(291, '10721601971', 'DHURUV MAHAJAN', 'SYSTEM SOFTWARE', '32', '75'),
(292, '10721601971', 'DHURUV MAHAJAN', 'ENVIRONMENTAL STUDIES-II (COMPULSORY)', '-', '50'),
(293, '10721601971', 'DHURUV MAHAJAN', 'LAB-DATA STRUCTURES IMPLEMENTATION USING C++', '43', '50'),
(294, '10721601971', 'DHURUV MAHAJAN', 'LAB-WEB DESIGNING AND USE OF INTERNET', '43', '50'),
(295, '10721601972', 'AMRITPAL SINGH', 'DATA STRUCTURE & FILE PROCESSING', '30', '75'),
(296, '10721601972', 'AMRITPAL SINGH', 'INFORMATION SYSTEMS', '45', '75'),
(297, '10721601972', 'AMRITPAL SINGH', 'INTERNET APPLICATIONS', '45', '75'),
(298, '10721601972', 'AMRITPAL SINGH', 'SYSTEM SOFTWARE', '45', '75'),
(299, '10721601972', 'AMRITPAL SINGH', 'ENVIRONMENTAL STUDIES-II (COMPULSORY)', '20', '50'),
(300, '10721601972', 'AMRITPAL SINGH', 'LAB-DATA STRUCTURES IMPLEMENTATION USING C++', '48', '50'),
(301, '10721601972', 'AMRITPAL SINGH', 'LAB-WEB DESIGNING AND USE OF INTERNET', '48', '50'),
(302, '10721601974', 'VISHAL', 'DATA STRUCTURE & FILE PROCESSING', '-', '75'),
(303, '10721601974', 'VISHAL', 'INFORMATION SYSTEMS', '38', '75'),
(304, '10721601974', 'VISHAL', 'INTERNET APPLICATIONS', '27', '75'),
(305, '10721601974', 'VISHAL', 'SYSTEM SOFTWARE', '32', '75'),
(306, '10721601974', 'VISHAL', 'ENVIRONMENTAL STUDIES-II (COMPULSORY)', '20', '50'),
(307, '10721601974', 'VISHAL', 'LAB-DATA STRUCTURES IMPLEMENTATION USING C++', '44', '50'),
(308, '10721601974', 'VISHAL', 'LAB-WEB DESIGNING AND USE OF INTERNET', '45', '50'),
(309, '10721601975', 'NISHAT KUMAR', 'DATA STRUCTURE & FILE PROCESSING', '-', '75'),
(310, '10721601975', 'NISHAT KUMAR', 'INFORMATION SYSTEMS', '-', '75'),
(311, '10721601975', 'NISHAT KUMAR', 'INTERNET APPLICATIONS', '30', '75'),
(312, '10721601975', 'NISHAT KUMAR', 'SYSTEM SOFTWARE', '33', '75'),
(313, '10721601975', 'NISHAT KUMAR', 'ENVIRONMENTAL STUDIES-II (COMPULSORY)', '18', '50'),
(314, '10721601975', 'NISHAT KUMAR', 'LAB-DATA STRUCTURES IMPLEMENTATION USING C++', '40', '50'),
(315, '10721601975', 'NISHAT KUMAR', 'LAB-WEB DESIGNING AND USE OF INTERNET', '41', '50'),
(316, '10721601976', 'AMRITPAL SINGH', 'DATA STRUCTURE & FILE PROCESSING', '-', '75'),
(317, '10721601976', 'AMRITPAL SINGH', 'INFORMATION SYSTEMS', '30', '75'),
(318, '10721601976', 'AMRITPAL SINGH', 'INTERNET APPLICATIONS', '60', '75'),
(319, '10721601976', 'AMRITPAL SINGH', 'SYSTEM SOFTWARE', '31', '75'),
(320, '10721601976', 'AMRITPAL SINGH', 'ENVIRONMENTAL STUDIES-II (COMPULSORY)', '18', '50'),
(321, '10721601976', 'AMRITPAL SINGH', 'LAB-DATA STRUCTURES IMPLEMENTATION USING C++', '41', '50'),
(322, '10721601976', 'AMRITPAL SINGH', 'LAB-WEB DESIGNING AND USE OF INTERNET', '42', '50'),
(323, '10721601978', 'ANKUSH KUMAR SAINI', 'DATA STRUCTURE & FILE PROCESSING', '30', '75'),
(324, '10721601978', 'ANKUSH KUMAR SAINI', 'INFORMATION SYSTEMS', '37', '75'),
(325, '10721601978', 'ANKUSH KUMAR SAINI', 'INTERNET APPLICATIONS', '59', '75'),
(326, '10721601978', 'ANKUSH KUMAR SAINI', 'SYSTEM SOFTWARE', '33', '75'),
(327, '10721601978', 'ANKUSH KUMAR SAINI', 'ENVIRONMENTAL STUDIES-II (COMPULSORY)', '28', '50'),
(328, '10721601978', 'ANKUSH KUMAR SAINI', 'LAB-DATA STRUCTURES IMPLEMENTATION USING C++', '46', '50'),
(329, '10721601978', 'ANKUSH KUMAR SAINI', 'LAB-WEB DESIGNING AND USE OF INTERNET', '45', '50'),
(330, '10721601988', 'KAWALJIT KAUR', 'DATA STRUCTURE & FILE PROCESSING', '-', '75'),
(331, '10721601988', 'KAWALJIT KAUR', 'INFORMATION SYSTEMS', '29', '75'),
(332, '10721601988', 'KAWALJIT KAUR', 'INTERNET APPLICATIONS', '60', '75'),
(333, '10721601988', 'KAWALJIT KAUR', 'SYSTEM SOFTWARE', '28', '75'),
(334, '10721601988', 'KAWALJIT KAUR', 'ENVIRONMENTAL STUDIES-II (COMPULSORY)', '29', '50'),
(335, '10721601988', 'KAWALJIT KAUR', 'LAB-DATA STRUCTURES IMPLEMENTATION USING C++', '44', '50'),
(336, '10721601988', 'KAWALJIT KAUR', 'LAB-WEB DESIGNING AND USE OF INTERNET', '46', '50'),
(337, '10721601989', 'ANU SHARMA', 'DATA STRUCTURE & FILE PROCESSING', '33', '75'),
(338, '10721601989', 'ANU SHARMA', 'INFORMATION SYSTEMS', '41', '75'),
(339, '10721601989', 'ANU SHARMA', 'INTERNET APPLICATIONS', '49', '75'),
(340, '10721601989', 'ANU SHARMA', 'SYSTEM SOFTWARE', '38', '75'),
(341, '10721601989', 'ANU SHARMA', 'ENVIRONMENTAL STUDIES-II (COMPULSORY)', '25', '50'),
(342, '10721601989', 'ANU SHARMA', 'LAB-DATA STRUCTURES IMPLEMENTATION USING C++', '42', '50'),
(343, '10721601989', 'ANU SHARMA', 'LAB-WEB DESIGNING AND USE OF INTERNET', '43', '50'),
(344, '10721601990', 'GURJEET KAUR', 'DATA STRUCTURE & FILE PROCESSING', '36', '75'),
(345, '10721601990', 'GURJEET KAUR', 'INFORMATION SYSTEMS', '38', '75'),
(346, '10721601990', 'GURJEET KAUR', 'INTERNET APPLICATIONS', '65', '75'),
(347, '10721601990', 'GURJEET KAUR', 'SYSTEM SOFTWARE', '49', '75'),
(348, '10721601990', 'GURJEET KAUR', 'ENVIRONMENTAL STUDIES-II (COMPULSORY)', '32', '50'),
(349, '10721601990', 'GURJEET KAUR', 'LAB-DATA STRUCTURES IMPLEMENTATION USING C++', '47', '50'),
(350, '10721601990', 'GURJEET KAUR', 'LAB-WEB DESIGNING AND USE OF INTERNET', '48', '50'),
(351, '10721601991', 'RAJINDER KAUR', 'DATA STRUCTURE & FILE PROCESSING', '27', '75'),
(352, '10721601991', 'RAJINDER KAUR', 'INFORMATION SYSTEMS', '35', '75'),
(353, '10721601991', 'RAJINDER KAUR', 'INTERNET APPLICATIONS', '65', '75'),
(354, '10721601991', 'RAJINDER KAUR', 'SYSTEM SOFTWARE', '33', '75'),
(355, '10721601991', 'RAJINDER KAUR', 'ENVIRONMENTAL STUDIES-II (COMPULSORY)', '24', '50'),
(356, '10721601991', 'RAJINDER KAUR', 'LAB-DATA STRUCTURES IMPLEMENTATION USING C++', '41', '50'),
(357, '10721601991', 'RAJINDER KAUR', 'LAB-WEB DESIGNING AND USE OF INTERNET', '45', '50'),
(358, '10721601992', 'MANSI', 'DATA STRUCTURE & FILE PROCESSING', '-', '75'),
(359, '10721601992', 'MANSI', 'INFORMATION SYSTEMS', '34', '75'),
(360, '10721601992', 'MANSI', 'INTERNET APPLICATIONS', '65', '75'),
(361, '10721601992', 'MANSI', 'SYSTEM SOFTWARE', '45', '75'),
(362, '10721601992', 'MANSI', 'ENVIRONMENTAL STUDIES-II (COMPULSORY)', '22', '50'),
(363, '10721601992', 'MANSI', 'LAB-DATA STRUCTURES IMPLEMENTATION USING C++', '46', '50'),
(364, '10721601992', 'MANSI', 'LAB-WEB DESIGNING AND USE OF INTERNET', '45', '50'),
(365, '10721601993', 'KOMAL DEVI', 'DATA STRUCTURE & FILE PROCESSING', '27', '75'),
(366, '10721601993', 'KOMAL DEVI', 'INFORMATION SYSTEMS', '28', '75'),
(367, '10721601993', 'KOMAL DEVI', 'INTERNET APPLICATIONS', '57', '75'),
(368, '10721601993', 'KOMAL DEVI', 'SYSTEM SOFTWARE', '29', '75'),
(369, '10721601993', 'KOMAL DEVI', 'ENVIRONMENTAL STUDIES-II (COMPULSORY)', '25', '50'),
(370, '10721601993', 'KOMAL DEVI', 'LAB-DATA STRUCTURES IMPLEMENTATION USING C++', '43', '50'),
(371, '10721601993', 'KOMAL DEVI', 'LAB-WEB DESIGNING AND USE OF INTERNET', '46', '50'),
(372, '10721601994', 'ALPANA', 'DATA STRUCTURE & FILE PROCESSING', '28', '75'),
(373, '10721601994', 'ALPANA', 'INFORMATION SYSTEMS', '29', '75'),
(374, '10721601994', 'ALPANA', 'INTERNET APPLICATIONS', '51', '75'),
(375, '10721601994', 'ALPANA', 'SYSTEM SOFTWARE', '39', '75'),
(376, '10721601994', 'ALPANA', 'ENVIRONMENTAL STUDIES-II (COMPULSORY)', '25', '50'),
(377, '10721601994', 'ALPANA', 'LAB-DATA STRUCTURES IMPLEMENTATION USING C++', '46', '50'),
(378, '10721601994', 'ALPANA', 'LAB-WEB DESIGNING AND USE OF INTERNET', '45', '50'),
(379, '10721601996', 'TAMANNA', 'DATA STRUCTURE & FILE PROCESSING', '-', '75'),
(380, '10721601996', 'TAMANNA', 'INFORMATION SYSTEMS', '-', '75'),
(381, '10721601996', 'TAMANNA', 'INTERNET APPLICATIONS', '51', '75'),
(382, '10721601996', 'TAMANNA', 'SYSTEM SOFTWARE', '-', '75'),
(383, '10721601996', 'TAMANNA', 'ENVIRONMENTAL STUDIES-II (COMPULSORY)', '18', '50'),
(384, '10721601996', 'TAMANNA', 'LAB-DATA STRUCTURES IMPLEMENTATION USING C++', '41', '50'),
(385, '10721601996', 'TAMANNA', 'LAB-WEB DESIGNING AND USE OF INTERNET', '44', '50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`) KEY_BLOCK_SIZE=7;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=386;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

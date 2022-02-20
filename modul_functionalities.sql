-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2022 at 11:32 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `modul_functionalities`
--

CREATE TABLE `modul_functionalities` (
  `id` int(11) NOT NULL,
  `module_keyword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `module_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `module_text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `module_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `modul_functionalities`
--

INSERT INTO `modul_functionalities` (`id`, `module_keyword`, `module_title`, `module_text`, `module_status`) VALUES
(1, 'loader', 'Yükləmə animasıyası', 'Səhifə yüklənərkən gözlətmə animasiyasını aktiv/deaktiv edir.', 0),
(2, 'security', 'Saytın kopyalanması', 'Saytın kopyalanmasının müdafiəsini aktiv/deaktiv edir.', 0),
(3, 'left_icons', 'Sol tərəfdəki ikonlar', 'Solda yer alan ikonları aktiv/deaktiv edir.', 1),
(4, 'language', 'Saytın dil funksiyası', 'Saytın dil funksiyasını aktiv/deaktiv edir.', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `modul_functionalities`
--
ALTER TABLE `modul_functionalities`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `modul_functionalities`
--
ALTER TABLE `modul_functionalities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

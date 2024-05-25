-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2024 at 08:29 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_introduction`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `create_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`, `create_at`) VALUES
(1, 'Kanha', 'Kanha@gmail.com', 'Beautiful picture & have good time ', '2024-04-02'),
(2, 'Thida', 'Thida@gmail.com', 'Beautiful picture & have good time ', '2024-04-02');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `thumbnail`, `description`, `create_at`) VALUES
(1, 'MeowMeow', '300324041257_meow.jpg', 'NUMBER1', '2024-03-30 22:12:57'),
(3, 'PINKDAY', '392_PI.jpg', 'NUMBER2', '2024-03-30 22:18:37'),
(5, 'Girl', '649_LIKA.jpg', 'NUMBER3', '2024-03-30 22:28:01'),
(6, 'TEAKKKKKKK', '134_te.jpg', 'NUMBER4', '2024-03-31 21:38:44'),
(7, 'AFTER NO CLASS', '326_smile.jpg', 'NUMBER5', '2024-03-31 21:40:14'),
(8, 'Sit on the football field', '417_totot.jpg', 'NUMBER6', '2024-03-31 21:41:07'),
(9, 'Go shopping at Cantin', '875_yv.jpg', 'NUMBER7', '2024-03-31 21:41:47'),
(10, 'ON THO BOAT', '141_cutee.jpg', 'NUMBER8', '2024-03-31 21:42:18'),
(11, ' HAA&NEATH', '303_cendererla.jpg', 'NUMBER9', '2024-03-31 21:43:55'),
(12, 'Two already', '199_haert.jpg', 'NUMBER10', '2024-03-31 21:46:30'),
(13, 'GLASSES', '99_FR.jpg', 'NUMBER11', '2024-03-31 21:47:35'),
(14, 'C EY', '948_GG.jpg', 'NUMBER12', '2024-03-31 21:48:32'),
(15, 'MAKKHAAA', '996_haaaa.jpg', 'NUMBER12', '2024-03-31 21:49:01'),
(16, '😜😮‍💨', '178_YYY.jpg', 'NUMBER13', '2024-03-31 21:49:33'),
(17, 'FT MAK MAK', '540_MAK.jpg', 'NUMBER14', '2024-03-31 21:54:27'),
(18, 'C TEAKKKK', '788_HM.jpg', 'NUMBER15', '2024-03-31 21:55:27'),
(19, 'CUTEEEE', '376_cutee.jpg', 'NUMBER16', '2024-03-31 21:57:00'),
(20, 'ERROR ', '436_SLON.jpg', 'NUMBER17', '2024-03-31 22:27:45'),
(21, '🫶💸', '443_kaka.jpg', 'NUMBER18', '2024-04-08 23:52:21'),
(22, 'PANG PANG', '253_hik.jpg', 'NUMBER19', '2024-04-08 23:52:46'),
(23, 'HOTTTTTT', '27_tea.jpg', 'NUMBER20', '2024-04-08 23:53:21'),
(24, 'NAK LUK JAAA', '530_du.jpg', 'NUMBER21', '2024-04-08 23:53:42'),
(25, 'FRI FIR😜', '547_UI.jpg', 'NUMBER22', '2024-04-08 23:59:40'),
(26, '😘🤦‍♀️', '427_RR.jpg', 'NUMBER23', '2024-04-09 00:00:30'),
(27, 'usssss', '379_SSS.jpg', 'NUMBER24', '2024-04-09 00:00:50'),
(28, 'Lika', '325_YU.jpg', 'NUMBER25', '2024-04-09 00:01:58'),
(29, 'Secret girl', '920_4g.jpg', 'NUMBER26', '2024-05-25 00:20:24'),
(30, 'NG HAII', '143_pex.jpg', 'NUMBER27', '2024-05-25 00:20:48'),
(31, 'After Final Exam S1Y2', '745_vi.jpg', 'NUMBER28', '2024-05-25 00:21:24'),
(32, 'Set sorm Kut', '227_uii.jpg', 'NUMBER29', '2024-05-25 00:22:13'),
(33, 'Final s1', '589_done.jpg', 'NUMBER30', '2024-05-25 00:25:41'),
(34, 'Jomjom', '61_we.jpg', 'NUMBER31', '2024-05-25 00:28:15');

-- --------------------------------------------------------

--
-- Table structure for table `introduction`
--

CREATE TABLE `introduction` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `create_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `introduction`
--

INSERT INTO `introduction` (`id`, `title`, `thumbnail`, `description`, `create_at`) VALUES
(7, 'OLD Friend', '080424070825_UI.jpg', 'Long time see you -,- Maybe .....\r\n😍\r\n', '2024-03-27'),
(8, '4 GIRL', '240524073127_4g.jpg', 'Girl A2 Y2 <IT< ', '2024-03-28'),
(10, 'MAK HAA STAR IN A2', '310324053308_JJH.jpg', 'NEARY MNEAK DEAL SL KE 10 NEAK KNONG PEL TEA MUY ', '2024-03-31');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `create_at` varchar(255) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `profile`, `create_at`) VALUES
(1, 'lika', 'lika@gmail.com', '202cb962ac59075b964b07152d234b70', '280324054247_meow.jpg', '2024-03-28 23:42:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `introduction`
--
ALTER TABLE `introduction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `introduction`
--
ALTER TABLE `introduction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

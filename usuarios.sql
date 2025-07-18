-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2025 at 09:38 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_2fa`
--

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `token_recordar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `correo`, `clave`, `token_recordar`) VALUES
(1, 'ramon', 'demonalf99@gmail.com', '$2y$10$9XJTbupsqGdEmltyt89sOuSyflWPQmKO.NG/N0wyTxTbf.DnMaYB.', NULL),
(2, 'juan', 'demonalf2@gmail.com', '$2y$10$pa8nvNJq1UQealE7Y9QCP.0Pc6MXwheK.RoCRSkE4uBCu4hT5dxau', NULL),
(7, 'yop', 'gazobrikameu-1234@yopmail.com', '$2y$10$uIXhU6lWSR8I6Ay2QHEJZes.09MVgmw.efaNTiq6.5wIR2dwfPYkO', 'f1db49628a9afa423d793740646db17c3a084203df32312fcf3d851294a28720'),
(9, 'demon', 'alt.r9-82a1vox@yopmail.com', '$2y$10$ZDWQMoINZhyXa2CMFkWdJO0PGjlDrG2GJcViK1m1/2mcXDgDhzUeq', NULL),
(13, 'carla', 'faxaummebixo-4607@yopmail.com', '$2y$10$ihY2ir7PNrg.0hFo3xCgbuISNOMq2QiieXn/sCcXJ//DbCN1h5VZK', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

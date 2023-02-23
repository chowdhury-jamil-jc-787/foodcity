-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2023 at 03:59 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_city`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'Electronic', 'This is Electronic', '2023-02-17 06:41:37', '2023-02-17 06:41:37', 'jamil', 'jamil'),
(2, 'food', 'this is food', '2023-02-17 08:34:08', '2023-02-17 08:34:08', 'jc', 'jc'),
(3, 'gadget', 'this is gadjet', '2023-02-17 08:35:42', '2023-02-17 08:35:42', 'jamil', 'jamil'),
(4, 'dfsdsffdg', 'cvzcvxnbcv', '2023-02-17 08:38:19', '2023-02-17 08:38:19', 'dxfds', 'dfgd'),
(5, 'dafgdsg', 'dgdsd', '2023-02-17 08:38:19', '2023-02-17 08:38:19', 'ddd', 'ddd'),
(6, 'dfsdsffdg', 'cvzcvxnbcv', '2023-02-17 08:38:27', '2023-02-17 08:38:27', 'dxfds', 'dfgd'),
(7, 'dafgdsg', 'dgdsd', '2023-02-17 08:38:27', '2023-02-17 08:38:27', 'ddd', 'ddd'),
(8, 'sfdasz', 'dafgdsz', '2023-02-17 08:38:48', '2023-02-17 08:38:48', 'ddsds', 'dfgds'),
(9, 'dgdsgvd', 'dfgdsg', '2023-02-17 08:38:48', '2023-02-17 08:38:48', 'dgdsg', 'ddsgd'),
(12, 'sakib', 'fxghbfxhnbfcvxnhbvxc', '2023-02-17 09:44:25', '2023-02-17 09:44:25', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `stock` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `category_id`, `price`, `stock`, `description`, `quantity`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(12, 'sakib', 'tree-736885__480.jpg', 1, '124', '', '1222', '12', 1, '2023-02-17 22:00:29', '2023-02-17 22:00:29', NULL, NULL),
(13, 'sakib', 'Overlay-multiple-images-using-Fotor.jpg', 7, '12', '', 'ftdchg', '12', 0, '2023-02-17 22:34:47', '2023-02-17 22:34:47', NULL, NULL),
(14, 'iphone1', 'tree-736885__480.jpg', 12, '121', '', 'this is iphone', '121', 1, '2023-02-18 03:39:23', '2023-02-18 03:39:23', NULL, NULL),
(15, 'saroar', 'Overlay-multiple-images-using-Fotor.jpg', 1, '23', 'in-stock', 'sa', '23', 1, '2023-02-18 04:06:25', '2023-02-18 04:06:25', NULL, NULL),
(16, 'jc', 'ai-image-enlarger-1-after-2.jpg', 2, '126', 'in-stock', 'jc', '126', 1, '2023-02-18 06:21:50', '2023-02-18 06:21:50', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(2555) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'jamil', 'jamil@gmail.com', '12345678', 'tree-736885__480.jpg', '2023-02-17 23:08:17', '2023-02-17 23:08:17', NULL, NULL),
(2, 'jamil', 'jamil@gmail.com', '$2y$10$rU/UjO82/l4Jduney7q2Q.4cSAsgpPt.u6.hxYMz34gNfNOBgARWG', 'Overlay-multiple-images-using-Fotor.jpg', '2023-02-17 23:10:50', '2023-02-17 23:10:50', NULL, NULL),
(3, 'jamil', 'jamil1@gmail.com', '$2y$10$NYWAAl6.MHy3K1mvY25Yf.PwtdI15lNG7pfMNMPeyr1KjVdj.2.S6', 'tree-736885__480.jpg', '2023-02-17 23:33:47', '2023-02-17 23:33:47', NULL, NULL),
(4, 'jamil', 'jamil2@gmail.com', '$2y$10$vzkAfm.rjm2AWrU5FVwYIO/of/Hc.sfgB9FjfC.mW2CXi4GfabLF6', 'Overlay-multiple-images-using-Fotor.jpg', '2023-02-17 23:34:39', '2023-02-17 23:34:39', NULL, NULL),
(5, 'jamil', 'jamil2@gmail.co3', '$2y$10$7D3tUiO39lVW10V9vHjSJO3Qe7YnrzPSfFcDV1Lw7touUzAIG//ve', 'tree-736885__480.jpg', '2023-02-17 23:35:22', '2023-02-17 23:35:22', NULL, NULL),
(6, 'sakib', 'jamil2@gmail.com3', '$2y$10$4K8Ox8wUd3ivp5p.pSWbDuIF4/MbZLvO28w46rcoMKr9TbF9N9TJa', 'tree-736885__480.jpg', '2023-02-17 23:39:41', '2023-02-17 23:39:41', NULL, NULL),
(7, '', '', '$2y$10$4lqqGvh8D.mgGQh9xxJxHOJYCmMhPhp2FzAnmGgTO0f66Suj7o5ke', '', '2023-02-17 23:45:32', '2023-02-17 23:45:32', NULL, NULL),
(8, 'sakib', 'jamil23@gmail.com3', '$2y$10$ZLtJr5RGnEjU28OkwNbW3eknko4VEvuOW2Z.MU0fyyXJiFJ/ut5ia', 'Overlay-multiple-images-using-Fotor.jpg', '2023-02-17 23:58:15', '2023-02-17 23:58:15', NULL, NULL),
(9, 'opi', 'opi@gmail.com', '$2y$10$yUzwpJD33iBbMwT/sn5I1OyzaU8k0kldMDKLOoV/tOX/MDqS2KpKm', 'download-high-quality-photo_2022-11-11-104722_hwlr.png', '2023-02-18 00:12:23', '2023-02-18 00:12:23', NULL, NULL),
(10, 'opi', 'opi@gmail.com1', '$2y$10$JhcAYr6SFslnWHp94FdoL.29TxVrd2YzDkb4sFx4R8ZS6BEfle7SK', 'tree-736885__480.jpg', '2023-02-18 00:27:06', '2023-02-18 00:27:06', NULL, NULL),
(11, 'opi', 'opi@gmail.com20', '$2y$10$vLaoA1AyOzvb6NmNPP8yUeQmS6TeF8t60mYltDWBO69eYfN5gP112', 'tree-736885__480.jpg', '2023-02-18 00:41:25', '2023-02-18 00:41:25', NULL, NULL),
(12, 'opi', 'op4i@gmail.com', '$2y$10$sylKl1GNIKDwuBBIzWNWfuf0L8ohD8Uqyh.fgxuEaH/78AHZr8P.G', 'Overlay-multiple-images-using-Fotor.jpg', '2023-02-18 03:45:26', '2023-02-18 03:45:26', NULL, NULL),
(13, 'tanvir1', 'tanvir1@gmail.com', '$2y$10$.FLW6n2x1PKvIKxRb2Eob.W0oeAVJs3ftElMqszOcnABnY/MgygNa', 'tree-.jpg', '2023-02-18 04:25:05', '2023-02-18 04:25:05', NULL, NULL),
(14, 'tanvir123', 'tanvir123@gmail.com', '$2y$10$gxDYsJRbUoDPMIJgD4l7k.PS8uLPBi/VS09DnI3UU2GhrHPZA7p5m', 'Overlay-multiple-images-using-Fotor.jpg', '2023-02-18 06:49:47', '2023-02-18 06:49:47', NULL, NULL),
(15, 'jk1', 'jk1@gmail.com', '$2y$10$7GmjDWAt02WbbtdbWPxTRuUK4dCo.P9ifNkLxccMkDlK3tqtgZkUO', 'download-high-quality-photo_2022-11-11-104722_hwlr.png', '2023-02-18 06:54:52', '2023-02-18 06:54:52', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

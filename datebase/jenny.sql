-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2023 at 08:56 AM
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
-- Database: `jenny`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcat`
--

CREATE TABLE `addcat` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addcat`
--

INSERT INTO `addcat` (`id`, `name`, `type`, `description`, `status`) VALUES
(1, 'Braneded cosmetics', 'Branded and most attractive products', 'For Womens ', 1),
(2, 'Branded Jewellery', 'Most attractive products', 'For Womens ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `addproduct`
--

CREATE TABLE `addproduct` (
  `pid` int(11) NOT NULL,
  `ptitle` varchar(255) NOT NULL,
  `pdescription` text NOT NULL,
  `pcategory` int(255) NOT NULL,
  `pprice` varchar(255) NOT NULL,
  `pimage` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addproduct`
--

INSERT INTO `addproduct` (`pid`, `ptitle`, `pdescription`, `pcategory`, `pprice`, `pimage`, `status`) VALUES
(1, 'New Necklace', 'Most attractive product ', 2, '66K', 'card6.jpg', 1),
(2, 'Jhumka', 'Most attractive product', 2, '888K', 'j1.jpg', 1),
(3, 'Gold Rings', 'very attractive ', 2, '888K', 'j3.webp', 1),
(4, 'silver stone  set', 'Most attractive product', 2, '888K', 'j8.webp', 1),
(5, 'clipearing', 'autofishal', 2, '$20', 'j20.jpg', 1),
(7, 'Bangles', 'Mostly in silver , gold   ', 2, '11K', 'j4.webp', 1),
(18, 'Set of lipsticks', 'Mostly in  (Multiple shades)', 1, '11K', 'c5.jpg', 1),
(19, 'Charmacy Lipstick', 'Multiple shades', 1, '88$', 'cos5.webp', 1),
(20, 'Bunch of blushes', 'Kit is awesome', 1, '11K', 'cos2.jpg', 1),
(21, 'skin care', 'new beauty product', 1, '$09', 'c10.jpg', 1),
(22, 'brush kit', 'brush set', 1, '$05', 'c6.webp', 1),
(24, 'ring', 'silver', 2, '$11', 'c19.jpg', 1),
(25, 'earimg', 'gold plated', 2, '$25', 'imagesj7.jpg', 1),
(26, 'braclet', 'chain with stone', 2, '$15', 'c20.jpg', 1),
(27, 'neckless', 'silver gold', 2, '$49', 'c16.jpg', 1),
(28, 'bangles with ring', 'silver stone', 2, '$35', 'imagesj18.webp', 1),
(30, 'lipstick kit', 'multicolour', 1, '$10', 'cos1.webp', 1),
(31, 'face powder kit ', 'light & dark shade', 1, '$30', 'c13.jpg', 1),
(32, 'liner & maskara', 'eye meckup', 1, '$25', 'c12.jpg', 1),
(33, 'eye shade', 'eye meckup', 1, '$20', 'c7.jpg', 1),
(34, 'cosmetic kit', 'skin lotion, lipstick, eyeshade etc.', 1, '$25', 'c11.jpg', 1),
(35, 'silver gold earing', 'silver stone', 2, '$29', 'j14.jpg', 1),
(36, 'jewellery set', 'silver', 2, '$15', 'imagesj16.jpg', 1),
(37, 'silver bangless', 'whit stone', 2, '$30', 'c18.jpg', 1),
(38, 'multi stone ring', 'gold plated', 2, '$15', 'j2.webp', 1),
(39, 'chain locket', 'silver gold', 2, '$20', 'imagesj9.jpg', 1),
(40, 'small clip earing', 'silver stone with  gold', 2, '$50', 'j21.jpg', 1),
(41, 'eyeliner kit', 'eye meckup', 1, '$15', 'c24.webp', 1),
(42, 'beauty lotion', 'face lotion', 1, '$11', 'c9.jpg', 1),
(43, 'nailpaint', 'nails color', 1, '$09', 'c25.webp', 1),
(44, 'brushes', 'meckup kit', 1, '$10', 'pro5.jpg', 1),
(45, 'multi shade kit', 'light & dark shade', 1, '$21', 'pro11.webp', 1),
(47, 'bais cream', 'face cream', 1, '$20', 'c8.jpg', 1),
(48, 'bridal set', 'neckless, earing, matha-patti etc', 2, '$50', 'c27.jpg', 1),
(49, 'multi earing', 'colorful ston earing', 2, '$25', 'c3.webp', 1),
(50, 'silver locket', 'chain locket', 2, '$15', 'imagesj11.webp', 1),
(51, 'stone rings', 'white stone ', 2, '$21', 'j12.webp', 1),
(52, 'stone braclate', 'silver stone', 2, '$25', 'j22.jpg', 1),
(53, 'gold plated clip earing', 'gold plated', 2, '$30', 'j23.webp', 1),
(54, 'heart shape locket', 'chain locket ', 2, '$10', 'j10.webp', 1),
(55, 'makeup kit', 'cream, lotion, powder etc', 1, '$25', 'cos4.webp', 1),
(56, 'multi shade lipstick', 'multi color ', 1, '$15', 'c30.jpg', 1),
(57, 'blushes set', 'blush size', 1, '$15', 'c28.jpg', 1),
(58, 'bais kit', 'makeup bais', 1, '$20', 'pro4.jpg', 1),
(59, 'eyeshade kit', 'light & dark', 1, '$10', 'card5.jpg', 1),
(60, 'lipstick shade', 'red shade', 1, '$12', 'cos5.jpg', 1),
(61, ' bais makeup', 'bais cream', 1, '$19', 'pro9.jpg', 1),
(62, 'cosmetics', 'multiple things', 1, '$10', 'cos6.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_reg`
--

CREATE TABLE `admin_reg` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_reg`
--

INSERT INTO `admin_reg` (`id`, `name`, `email`, `password`, `phone`) VALUES
(1, 'talha', 'muhammadtalha.aptech2006@gmail.com', '$2y$10$2122xI6lqR1wXS1sU/Osgek9DilhJ5KCyokRKB1WdOnLAt/RWslTO', 789456),
(2, 'sadia', 'sadiabader433@gmail.com', '$2y$10$r29xLVTSIOeMiQBco5fPHupxUA77btKhKB/chAc9xL/oLUgLIivP2', 2147483647),
(3, 'Tayyaba muslim', 'muslimtayyaba@gmail.com', '$2y$10$wDI44wBQUyPsBmKVzfMahe/mKM9sSy671OGszI/yxkaTY6YrHgAUq', 123456);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `proid` int(11) NOT NULL,
  `cartqty` tinyint(20) NOT NULL,
  `cartstatus` tinyint(1) NOT NULL DEFAULT 1,
  `cartdate` datetime NOT NULL DEFAULT current_timestamp(),
  `carttime` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `userid`, `proid`, `cartqty`, `cartstatus`, `cartdate`, `carttime`) VALUES
(8, 11, 1, 2, 1, '2023-11-08 12:50:09', '12:50:09');

-- --------------------------------------------------------

--
-- Table structure for table `jewellery`
--

CREATE TABLE `jewellery` (
  `id` int(11) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `sttus` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jewellery`
--

INSERT INTO `jewellery` (`id`, `tittle`, `image`, `price`, `sttus`) VALUES
(1, 'Earing', 'j1.jpg', '$39', 1),
(2, 'Neckless', 'j8.webp', '$99', 1),
(3, 'ring', 'j2.webp', '$20', 1),
(4, 'bangles', 'j5.webp', '$49', 1),
(5, 'locket set', 'j9.jpg', '$59', 1),
(6, 'bangles with ring', 'j18.webp', '$25', 1),
(7, 'locket set', 'j11.webp', '$49', 1),
(8, 'earing', 'j7.jpg\r\n', '$39', 1),
(9, 'jewellery set', 'j13.jpg', '$115', 1),
(10, 'ring', 'j19.jpg', '$09', 1),
(11, 'clip earing', 'j20.jpg', '$19', 1),
(12, 'bangles', 'j4.webp', '$45', 1),
(13, 'rings', 'j12.webp', '$19', 1),
(14, 'clip earing', 'j21.jpg', '$09', 1),
(15, 'bangles', 'j22.jpg', '$49', 1),
(16, 'locket set', 'j10.webp', '$35', 1),
(17, 'neckless', 'j6.webp', '$99', 1),
(18, 'earing', 'j14.jpg', '$39', 1),
(19, 'neckless', 'j17.jpg', '$109', 1),
(20, 'locket set', 'j26.jpg', '$49', 1),
(21, 'ring', 'j3.webp', '$19', 1),
(22, 'earing', 'j27.jpg', '$15', 1),
(23, 'bangles', 'j24.jpg', '$20', 1),
(24, 'clip earing', 'j25.jpeg', '$10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user-register`
--

CREATE TABLE `user-register` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user-register`
--

INSERT INTO `user-register` (`id`, `username`, `email`, `password`) VALUES
(10, 'sawera ansari', 'saw@gmail.com', '$2y$10$1PzUTp2SFpp8vGWGbdsO6uJqR2H2Hb7HniEL.02u4ftCvLXJK9jf.'),
(11, 'midhat@gmail.com', 'mid@gmail.com', '$2y$10$Ivo55pM0PdZLFT5.w5IrVOiRA.YEKy55CblzOk4.WE8NeGyKYe2Em'),
(12, 'sadia', 'sadia@gmail.com', '$2y$10$d/26d2f6mPRUcHq50vLUmulxJ5noZVY9bFbN6a/8tGQELQJFd0Ihu'),
(13, 'abc', 'abc@gmail. com', '$2y$10$lHZ/uLONZyib3yecBmdcGOOICgfBh4k7c1sj0LW9Hto3nH6TXyOFu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcat`
--
ALTER TABLE `addcat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addproduct`
--
ALTER TABLE `addproduct`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `pcategory` (`pcategory`);

--
-- Indexes for table `admin_reg`
--
ALTER TABLE `admin_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`),
  ADD KEY `user_fk` (`userid`),
  ADD KEY `pro_fk` (`proid`);

--
-- Indexes for table `jewellery`
--
ALTER TABLE `jewellery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user-register`
--
ALTER TABLE `user-register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcat`
--
ALTER TABLE `addcat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `addproduct`
--
ALTER TABLE `addproduct`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `admin_reg`
--
ALTER TABLE `admin_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jewellery`
--
ALTER TABLE `jewellery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user-register`
--
ALTER TABLE `user-register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addproduct`
--
ALTER TABLE `addproduct`
  ADD CONSTRAINT `addproduct_ibfk_1` FOREIGN KEY (`pcategory`) REFERENCES `addcat` (`id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `proidfk` FOREIGN KEY (`proid`) REFERENCES `addproduct` (`pid`),
  ADD CONSTRAINT `useridfk` FOREIGN KEY (`userid`) REFERENCES `user-register` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

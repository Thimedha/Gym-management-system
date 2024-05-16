-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 10:48 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `body_tone_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `announsment_table`
--

CREATE TABLE `announsment_table` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `start` date NOT NULL,
  `message` varchar(255) NOT NULL,
  `offering` varchar(50) NOT NULL,
  `end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announsment_table`
--

INSERT INTO `announsment_table` (`id`, `name`, `start`, `message`, `offering`, `end`) VALUES
(2, 'New Members', '2024-04-01', 'Annual Package for two person', '25% off', '2024-04-30'),
(3, '3 Month Membership', '2024-05-07', 'Basic Pack', '30% Offer', '2024-05-14'),
(4, '3 Month Membership', '2024-05-07', 'Basic Pack', '30% Offer', '2024-05-14'),
(5, 'One month ', '2024-05-23', 'basic', '15% offer', '2024-06-06'),
(6, 'One month ', '2024-05-09', 'basic', '15% offer', '2024-05-24'),
(9, 'Advance ', '2024-05-07', 'Advance Traning', '10%', '2024-05-11');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_table`
--

CREATE TABLE `appointment_table` (
  `id` int(10) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` varchar(20) NOT NULL,
  `users_id` int(10) NOT NULL,
  `user_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile` int(10) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`id`, `name`, `email`, `mobile`, `message`) VALUES
(7, 'viraj', 'viraj@gmail.com', 112753606, 'Best Pckages'),
(8, 'Thamira Sandaruwan', 'damith@gmail.com', 777835766, 'sasd'),
(9, 'Kavi', 'ka@gmail.com', 1234567891, 'asd'),
(10, 'assa', 'sasaa@gmailsdd', 148426216, 'sdsdsdsad');

-- --------------------------------------------------------

--
-- Table structure for table `diet`
--

CREATE TABLE `diet` (
  `id` int(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(255) NOT NULL,
  `calorie` int(10) NOT NULL,
  `days` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `diet`
--

INSERT INTO `diet` (`id`, `name`, `details`, `calorie`, `days`) VALUES
(1, 'LowFat ', 'One egg ,Wheat Germ 28 grams', 10, 15);

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  `schedule` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`id`, `name`, `type`, `schedule`) VALUES
(1, 'Treadmills', 'worm up', '30 min'),
(2, 'Pull Over Mechine', 'Sholder', '10 * 4');

-- --------------------------------------------------------

--
-- Table structure for table `packages_table`
--

CREATE TABLE `packages_table` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `wormup` varchar(255) NOT NULL,
  `physical` varchar(255) NOT NULL,
  `equipment` varchar(255) NOT NULL,
  `diet` varchar(255) NOT NULL,
  `dates` varchar(10) NOT NULL,
  `total` int(255) NOT NULL,
  `user_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `packages_table`
--

INSERT INTO `packages_table` (`id`, `name`, `wormup`, `physical`, `equipment`, `diet`, `dates`, `total`, `user_id`) VALUES
(1, 'sdds', 'sdsd', 'sdsd', 'sdsd', 'sdsd', '20', 123423, 3);

-- --------------------------------------------------------

--
-- Table structure for table `payment_info`
--

CREATE TABLE `payment_info` (
  `id` int(255) NOT NULL,
  `date` date NOT NULL,
  `user_id` int(10) NOT NULL,
  `package_id` int(10) NOT NULL,
  `package_price` int(100) NOT NULL,
  `quentity` int(10) NOT NULL,
  `amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `physical_ex`
--

CREATE TABLE `physical_ex` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `physical_ex`
--

INSERT INTO `physical_ex` (`id`, `name`, `details`) VALUES
(3, 'Push Ups', '15 * 5 '),
(4, 'Squets', '15 * 4');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(255) NOT NULL,
  `worm_up` varchar(255) NOT NULL,
  `equipment` varchar(255) NOT NULL,
  `physical_ex` varchar(255) NOT NULL,
  `diet_plan` varchar(255) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `contact` int(10) NOT NULL,
  `age` varchar(2) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `contact`, `age`, `gender`, `email`, `password`, `user_type`) VALUES
(1, 'Thimedha Viraj Pushpakumara', 713163304, '31', 'male', 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(3, 'Dineth bandara', 772846262, '34', 'male', 'dineth@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'member'),
(4, 'Suraj Kumara', 745123451, '32', 'Male', 'suraj@gmail.com', '202cb962ac59075b964b07152d234b70', 'member'),
(5, 'Chatha  Saranga', 777835766, '38', 'male', 'charith@gmail.com', '202cb962ac59075b964b07152d234b70', 'member'),
(6, 'Nadisha', 772846262, '42', 'male', 'nadisha@gmail.com', '202cb962ac59075b964b07152d234b70', 'member'),
(7, 'Kavidu Sathsara', 112785635, '54', 'male', 'kavidu@gmail.com', '202cb962ac59075b964b07152d234b70', 'member'),
(8, 'Kavi Sithum', 112785625, '38', 'male', 'kavi@gmail.com', '202cb962ac59075b964b07152d234b70', 'member'),
(10, 'Nimha', 776467663, '29', 'female', 'nimha@gmail.com', '202cb962ac59075b964b07152d234b70', 'instructor');

-- --------------------------------------------------------

--
-- Table structure for table `user_packages`
--

CREATE TABLE `user_packages` (
  `id` int(10) NOT NULL,
  `users_id` int(255) NOT NULL,
  `packages_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_package_payment`
--

CREATE TABLE `user_package_payment` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `package_id` int(255) NOT NULL,
  `payment_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `warm_up`
--

CREATE TABLE `warm_up` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `details` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `warm_up`
--

INSERT INTO `warm_up` (`id`, `name`, `details`) VALUES
(1, 'Basic', 'Arm Circles , Arm swings');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announsment_table`
--
ALTER TABLE `announsment_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment_table`
--
ALTER TABLE `appointment_table`
  ADD KEY `appointment` (`user_name`),
  ADD KEY `appoint` (`users_id`);

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diet`
--
ALTER TABLE `diet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages_table`
--
ALTER TABLE `packages_table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `User Register ID` (`user_id`);

--
-- Indexes for table `payment_info`
--
ALTER TABLE `payment_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_id` (`package_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `physical_ex`
--
ALTER TABLE `physical_ex`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_packages`
--
ALTER TABLE `user_packages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Users` (`users_id`),
  ADD KEY `Packages` (`packages_id`);

--
-- Indexes for table `user_package_payment`
--
ALTER TABLE `user_package_payment`
  ADD KEY `Register user` (`user_id`),
  ADD KEY `package reg` (`package_id`),
  ADD KEY `payament id` (`payment_id`);

--
-- Indexes for table `warm_up`
--
ALTER TABLE `warm_up`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announsment_table`
--
ALTER TABLE `announsment_table`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `diet`
--
ALTER TABLE `diet`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `packages_table`
--
ALTER TABLE `packages_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment_info`
--
ALTER TABLE `payment_info`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `physical_ex`
--
ALTER TABLE `physical_ex`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_packages`
--
ALTER TABLE `user_packages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `warm_up`
--
ALTER TABLE `warm_up`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment_table`
--
ALTER TABLE `appointment_table`
  ADD CONSTRAINT `appoint` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appointment` FOREIGN KEY (`user_name`) REFERENCES `users` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `packages_table`
--
ALTER TABLE `packages_table`
  ADD CONSTRAINT `User Register ID` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment_info`
--
ALTER TABLE `payment_info`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_packages`
--
ALTER TABLE `user_packages`
  ADD CONSTRAINT `Packages` FOREIGN KEY (`packages_id`) REFERENCES `packages_table` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Users` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_package_payment`
--
ALTER TABLE `user_package_payment`
  ADD CONSTRAINT `Register user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `package reg` FOREIGN KEY (`package_id`) REFERENCES `packages_table` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payament id` FOREIGN KEY (`payment_id`) REFERENCES `payment_info` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

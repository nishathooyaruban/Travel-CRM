-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 03, 2024 at 11:48 PM
-- Server version: 5.7.23-23
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xvbqtaq3_empire_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `attractions`
--

CREATE TABLE `attractions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_on` datetime NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `attractions`
--

INSERT INTO `attractions` (`id`, `name`, `description`, `location`, `img1`, `created_by`, `created_on`, `status`) VALUES
(1, 'Royal Botanic Gardens', 'Royal Botanic Gardens, Peradeniya are about 5.5 km to the west of the city of Kandy in the Central Province of Sri Lanka. In 2016, the garden was visited by 1.2 million locals and 400,000 foreign visitors. It is near the Mahaweli River. It is renowned for', 'Kandy', '2024-02-05 10:03:40amdownload (1).jpg', '', '2024-02-05 10:03:40', 'ENABLE'),
(2, 'Temple of the Sacred Tooth Relic', 'The Temple of the Sacred Tooth Relic, or Sri Dalada Maligawa, is a Buddhist temple in Kandy, Sri Lanka. It is located in the royal palace complex of the former Kingdom of Kandy, which houses the relic of the tooth of the Buddha.', 'Kandy', '2024-02-05 10:12:02amdownload (2).jpg', '', '2024-02-05 10:12:02', 'ENABLE'),
(3, 'Lotus Tower', 'Lotus Tower, also referred to as Colombo Lotus Tower, is a 351.5 m tall tower, located in Colombo, Sri Lanka. It has been called a symbolic landmark of Sri Lanka.', 'Colombo', '2024-02-05 10:19:56amlotus-tower.jpg', '', '2024-02-05 10:19:56', 'ENABLE'),
(4, 'Lake Gregory', 'Lake Gregory sometimes also called Gregory Lake or Gregory Reservoir, is a reservoir in the heart of the tea country hill city of Nuwara Eliya in Sri Lanka. Lake Gregory was created during the period of British Governor Sir William Gregory in 1873. The la', 'Nuwara Eliya', '2024-02-05 10:30:50amNuwara-Eliya-town-2.jpg', '', '2024-02-05 10:30:50', 'ENABLE'),
(5, 'Galle Face', 'This is a nice park and beach worth visiting when in a colombo. It is right opposite the shopping mall, which is also handy. ', 'Colombo', '2024-02-06 08:27:12pmColombo-Blog.jpg', '', '2024-02-06 08:27:12', 'ENABLE');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `arrival_date` date NOT NULL,
  `nod` int(11) NOT NULL,
  `adults` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `babies` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_on` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `status` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `assign_to` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `book_itinery`
--

CREATE TABLE `book_itinery` (
  `id` int(11) NOT NULL,
  `nod` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `vehi_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `spe_note` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `curruncy` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_image`
--

CREATE TABLE `general_image` (
  `id` int(11) NOT NULL,
  `img_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_url` longblob NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `star` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `name`, `location`, `img_url`, `description`, `star`, `created_by`, `created_on`, `status`) VALUES
(1, 'Royal Kandyan', 'Kandy', 0x323032342d30322d30352031303a30353a3433616d3139333235303030302e6a7067, 'the hotel royal kandyan the precious jewel in the kandy city. hotel royal kandyan is luxury & cozy accommodation located in the heart of kandy.it is an ideal base to explore the attraction of world famous kandyan kingdom and many places of interest around', 4, 1, '2024-02-05 10:05:43', 'ENABLE'),
(2, 'The Kingsbury Colombo', 'Colombo', 0x323032342d30322d30352031303a32313a3035616d3133343339343330362e6a7067, 'The Kingsbury Hotel, an iconic luxury among Colombo hotels, is renowned for its elegant accommodation, exceptional service and diverse culinary experience.', 5, 1, '2024-02-05 10:21:05', 'ENABLE'),
(3, 'Araliya Green Hills Hotel', 'Nuwara Eliya', 0x323032342d30322d30352031303a33333a3333616d38303036313635362e6a7067, 'Located amidst misty mountains, surreal tea hills and salubrious climes Araliya Green Hills is premier amongst hotels in Nuwaraeliya', 4, 1, '2024-02-05 10:33:33', 'ENABLE');

-- --------------------------------------------------------

--
-- Table structure for table `itinery`
--

CREATE TABLE `itinery` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `nod` int(11) NOT NULL,
  `ref_num` int(11) NOT NULL,
  `location` int(11) NOT NULL,
  `attractions` text COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_on` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `hotel01` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `description`, `img_url`, `created_by`, `created_on`, `status`) VALUES
(1, 'Kandy', 'Kandy is a small city in Sri Lanka known for its botanical gardens, ancient temples, and colonial architecture. The city is also home to the sacred Tooth relic of Buddha.', '2024-02-05 10:02:15amdownload.jpg', 1, '2024-02-05 10:02:15', 'ENABLE'),
(2, 'Colombo', 'Colombo is the largest city and capital of Sri Lanka, offering a heady blend of tropical environment, colonial villas, and modern cityscape. It dates from 800 AD and there is history to explore around every corner. You can wander through the many temples ', '2024-02-05 10:15:11am07351718-city-36384-1645c1c43cd.jpg', 1, '2024-02-05 10:15:11', 'ENABLE'),
(3, 'Nuwara Eliya', 'Nuwara Eliya is a small city in the central hills of Sri Lanka. It\'s known for its temperate climate and is considered the most important location for tea production in the country.', '2024-02-05 10:27:05amnuwaraeliya.jpg', 1, '2024-02-05 10:27:05', 'ENABLE');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_type` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `created_on` datetime NOT NULL,
  `status` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `pass`, `user_type`, `created_on`, `status`) VALUES
(1, 'Kanchana', '0775920297', 'ckp.bandara@gmail.com', '159753', 'admin', '2023-10-09 11:16:52', 'ENABLE'),
(3, 'Oshada', '0777473878', 'oshada2009@gmail.com', '123456', 'admin', '2023-10-12 08:57:17', 'ENABLE'),
(4, 'Oshada Test', '0777473878', 'oshada1991v@gmail.com', '123456', 'executive', '2023-10-12 08:58:58', 'ENABLE'),
(5, 'Nisha', '+94772215592', 'nishthooya@gmail.com', 'press123', 'executive', '2024-03-02 05:53:55', 'ENABLE');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(11) NOT NULL,
  `make_model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vehi_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `max_pass` int(11) NOT NULL,
  `max_lug` int(11) NOT NULL,
  `air_c` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `img1` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `make_model`, `vehi_type`, `max_pass`, `max_lug`, `air_c`, `img1`) VALUES
(1, 'KDH High Roof', 'Van', 8, 8, 'Yes', '2024-02-21 01:39:43amhhhh_114.jpg'),
(2, 'Toyota Prius', 'Car', 3, 6, 'Yes', '2024-02-23 10:19:12am11c20c64-2020-toyota-prius-phev-0.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attractions`
--
ALTER TABLE `attractions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_itinery`
--
ALTER TABLE `book_itinery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_image`
--
ALTER TABLE `general_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itinery`
--
ALTER TABLE `itinery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attractions`
--
ALTER TABLE `attractions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `book_itinery`
--
ALTER TABLE `book_itinery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `general_image`
--
ALTER TABLE `general_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `itinery`
--
ALTER TABLE `itinery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2020 at 02:13 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utsimk`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `part` varchar(50) NOT NULL,
  `about_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `part`, `about_text`) VALUES
(1, 'sub1', 'A pet shop or pet store is a retail \r\n          business which sells different kinds \r\n          of animals to the public. A variety of \r\n          animal supplies and pet accessories are \r\n          also sold in pet shops. The products sold \r\n          include: food, treats, toys, collars, leashes, \r\n          cat litter, cages and aquariums.'),
(2, 'sub2', 'At our pet shop we provide many things for our customer such as day care, \r\n          grooming product and even food product.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `part` varchar(50) NOT NULL,
  `contact_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `part`, `contact_text`) VALUES
(1, 'email', 'petshop@gmail.com'),
(2, 'address', 'Jl. Tanjung Duren Raya No.4, RT.12/RW.2, Tj. Duren Utara, Kec. Grogol petamburan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11470'),
(3, 'phone_number', '(021) 5666953'),
(4, 'instagram', '@albertsalomo'),
(5, 'facebook', 'albertsalimo@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `part` varchar(20) NOT NULL,
  `home_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `part`, `home_text`) VALUES
(1, 'Sub Homepage', 'Over many lifetimes, we accumulate many give-and-take accounts that are a direct result of our deeds and actions. The accounts may be positive or negative depending on the positive or negative nature of our actions. As a rule of thumb, in the current era approximately 65% of our lives are destined (not within our control) and 35% of our lives are governed by our own freewill. All major events in our life are by and large destined. These events include our birth, the family we are born into, the person (or persons) we marry, the children we have, serious illnesses and the time of our death. The happiness and pain that we give and receive from loved ones and acquaintances are by and large simply a case of prior give-and-take accounts directing the way relationships unravel and play out.!'),
(2, 'Article 1', 'A frustrated Manhattan woman unleashed a lawsuit against a pet store \r\n                that she claimed wouldn’t give her the \r\n                pricey poodle she purchased.'),
(3, 'Article 2', 'The country\'s once-notorious religious police used to ban the walking of pets, \r\n                saying men were using it as a means to make \r\n                passes at women.'),
(4, 'Article 3', 'Every dog owner knows that it\'s a horror to get your furbaby \r\n                ready for a bath. Fortunately, dog wipes have been introduced tosave you from this \r\n                situation frequently.'),
(5, 'Article 4', 'A group of people in the city and beyond has set out to check if animals \r\n                and birds kept for sale in pet shops need to be rescued.'),
(6, 'Article 5', 'In a study by the universities of Portsmouth and Sussex, \r\n                researchers found that the technique mimics what is known as a cat smile – \r\n                referred to as a ‘slow blink’ –and it appears to help to form a bond between the human and the cat.'),
(7, 'Article 6', 'In a new docuseries, a child who uses a walker meets a dog with its own version of wheels. Inmates find solace in \r\n                training canines for adoption, and pigs strut their stuff in a “body positivity\" \r\n                celebration.'),
(8, 'ArticleTitle 1', 'NYC woman sues pet shop for not letting her take pricey poodle home'),
(10, 'ArticleTitle 2', 'The Barking Lot cafe opened its doors in the Saudi city of Khobar this summer'),
(11, 'ArticleTitle 3', 'Dog wipes that are perfect for your four-legged baby'),
(13, 'ArticleTitle 4', 'Pet shops in Mumbai could turn coffins for animals'),
(14, 'ArticleTitle 5', 'Eight mind-blowing facts about cats, according to science'),
(15, 'ArticleTitle 6', 'Animals, people rescue each other in heartfelt docuseries');

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `login_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`id`, `username`, `login_time`) VALUES
(50, 'albert', '2020-11-08 11:58:31'),
(51, 'albert', '2020-11-08 11:59:47'),
(52, 'albert', '2020-11-08 12:38:58'),
(53, 'admin', '2020-11-08 16:53:24'),
(54, 'albert', '2020-11-08 16:53:51'),
(55, 'albertalbert', '2020-11-09 16:41:06');

-- --------------------------------------------------------

--
-- Stand-in structure for view `orderpreview`
-- (See below for the actual view)
--
CREATE TABLE `orderpreview` (
`order_id` int(11)
,`username` varchar(50)
,`product_id` int(11)
,`amount` int(11)
,`order_time` varchar(50)
,`id` int(11)
,`part` varchar(50)
,`product_title` varchar(50)
,`product_text` text
,`price` double
);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `part` varchar(50) NOT NULL,
  `product_title` varchar(50) NOT NULL,
  `product_text` text NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `part`, `product_title`, `product_text`, `price`) VALUES
(1, 'product1', 'CRAVE™ Cat Food', 'With 40% protein, CRAVE™ Adult Dry Cat Food is inspired by a cat\'s \r\n            natural diet. Real meat is the first ingredient. \r\n            These protein-rich recipes provide cats with energy and \r\n            support lean bodies.', 30.5),
(2, 'product2', 'Fish Food Product', 'Aquarium fish feed is plant or animal material intended for consumption\r\n             by pet fish kept in aquariums or ponds. Fish foods normally contain \r\n             macronutrients, trace elements and vitamins necessary to keep captive \r\n             fish in good health.', 20),
(3, 'product3', 'Pet Shampoo', 'For maximum care of sensitive skin and coat, we’ve identified Earthbath\r\n               All Natural Pet Shampoo as a top choice. With a specialized formula \r\n               made of oatmeal and aloe, which are particularly efficient in catering \r\n               to the needs of dry and itchy skin, this shampoo is ideal for all skin types\r\n                as it has a gentle effect on the skin and coat while removing dirt and odor\r\n                 efficiently. Its balanced pH and soap-free formula make it a safe choice \r\n                 for any type of dog skin that won’t cause irritation or inflammation.', 11.2),
(4, 'product4', 'Pet Bowl', 'A simple pet bowl', 5.34);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `order_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `product_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `order_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`order_id`, `username`, `product_id`, `amount`, `order_time`) VALUES
(1, 'albertsalomo', 1, 1, '2020-11-07 14:24:33'),
(2, 'albertsalomo', 1, 1, '2020-11-07 14:30:52'),
(4, 'albertsalomo', 1, 1, '2020-11-07 14:39:27'),
(5, 'albertsalomo', 1, 1, '2020-11-07 15:46:13'),
(7, 'albert', 1, 6, '2020-11-08 12:38:26'),
(8, 'albertalbert', 2, 3, '2020-11-09 16:41:17');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `name`, `email`, `username`, `password`) VALUES
(2, 'admin', 'admin', 'admin', 'admin'),
(3, 'exampleAccount1', 'ex1acc@gmail.com', 'ex1', 'example1'),
(35, 'test1', 'albert@gmail.com', 'albert', 'albert123'),
(36, 'Albert Salomo', 'albert123@gmail.com', 'albertalbert', 'albert123');

-- --------------------------------------------------------

--
-- Structure for view `orderpreview`
--
DROP TABLE IF EXISTS `orderpreview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `orderpreview`  AS SELECT `transaction`.`order_id` AS `order_id`, `transaction`.`username` AS `username`, `transaction`.`product_id` AS `product_id`, `transaction`.`amount` AS `amount`, `transaction`.`order_time` AS `order_time`, `product`.`id` AS `id`, `product`.`part` AS `part`, `product`.`product_title` AS `product_title`, `product`.`product_text` AS `product_text`, `product`.`price` AS `price` FROM (`transaction` join `product` on(`transaction`.`product_id` = `product`.`id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `login_info`
--
ALTER TABLE `login_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2019 at 03:22 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`, `email`) VALUES
(1, 'admin', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(255) NOT NULL,
  `customer_id` int(255) NOT NULL,
  `time_of_purchase` timestamp NOT NULL DEFAULT current_timestamp(),
  `total_amt` int(255) NOT NULL,
  `type_of_payment` enum('Cash on delivery','card') NOT NULL DEFAULT 'card',
  `status` varchar(255) DEFAULT 'Payment Done'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `customer_id`, `time_of_purchase`, `total_amt`, `type_of_payment`, `status`) VALUES
(18, 1, '2019-11-20 07:04:12', 400, 'card', 'Payment Done'),
(19, 1, '2019-11-20 07:53:23', 40, 'card', 'Payment Done'),
(20, 1, '2019-11-25 15:05:17', 460, 'card', 'Payment Done'),
(21, 1, '2019-11-25 15:07:40', 520, 'card', 'Payment Done'),
(22, 1, '2019-11-25 16:19:18', 155, 'card', 'Payment Done'),
(23, 1, '2019-11-28 07:14:55', 50, 'card', 'Payment Done'),
(24, 1, '2019-11-28 07:20:16', 50, 'card', 'Payment Done'),
(25, 1, '2019-11-28 07:22:45', 400, 'card', 'Payment Done'),
(26, 1, '2019-11-28 07:33:06', 400, 'card', 'Payment Done'),
(27, 1, '2019-11-28 07:39:07', 450, 'card', 'Payment Done'),
(28, 1, '2019-11-28 07:43:19', 35, 'card', 'Payment Rebounced'),
(32, 1, '2019-11-28 08:45:31', 35, 'card', 'Payment Done'),
(33, 1, '2019-11-28 08:47:52', 400, 'card', 'Payment Done'),
(34, 1, '2019-11-28 08:54:49', 50, 'card', 'Payment Done'),
(35, 8, '2019-11-28 15:21:44', 510, 'card', 'Payment Done');

-- --------------------------------------------------------

--
-- Table structure for table `bill_temp`
--

CREATE TABLE `bill_temp` (
  `bill_id` int(255) NOT NULL,
  `customer_id` int(255) NOT NULL,
  `time_of_purchase` timestamp NOT NULL DEFAULT current_timestamp(),
  `total_amt` int(255) NOT NULL,
  `type_of_payment` enum('Cash on delivery','card') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill_temp`
--

INSERT INTO `bill_temp` (`bill_id`, `customer_id`, `time_of_purchase`, `total_amt`, `type_of_payment`) VALUES
(35, 8, '2019-11-28 15:21:44', 510, 'Cash on delivery');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` bigint(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `delivery_address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `name`, `email`, `password`, `contact`, `city`, `address`, `delivery_address`) VALUES
(1, 'Ramya T', 'tramya1611@gmail.com', 'aa145ea2a0d85792614750b31762fd62', 7204713205, 'Banglore', 'garudacharpalya ,banglore', 'GARUDACHARPALYA'),
(2, 'test', 'test@gmail.com', '0c1ccf98666ed505310c0471529429db', 8204713209, 'Banglore', 'garudacharpalya ,banglore', ''),
(6, 'rakshitha', 'rakshitha@gmail.com', '719b3e60be9105f064990e098c29a1b7', 7456712345, 'banglore', 'namaste road', NULL),
(7, 'ramyat', 'ramya@gmail.com', 'aa145ea2a0d85792614750b31762fd62', 7890765431, 'banglore', 'banglore', NULL),
(8, 'rakshu', 'rakshu@gmail.com', '69a4a93134c61555643815e5110250a3', 7890765481, 'banglore', 'banglore', 'GARUDACHARPALYA');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `item_code` int(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `restaurant_name` varchar(255) NOT NULL,
  `foodimage` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`item_code`, `item_name`, `price`, `restaurant_name`, `foodimage`) VALUES
(1, 'Dosa', 50, 'Udupi Park', '1.jpg'),
(2, 'Fried Rice', 60, 'Udupi Park', '2.jpg'),
(3, 'Choole Batoore', 60, 'Udupi Park', '3.jpg'),
(4, 'Paratha', 50, 'Udupi Park', '4.jpg'),
(5, 'Veg Noodles', 100, 'Udupi Park', '5.jpg'),
(6, 'Kichidi Meal', 40, 'Udupi Park', '6.jpg'),
(7, 'Poha', 35, 'Udupi Park', '7.jpg'),
(8, 'Rava Idli', 40, 'Udupi Park', '8.jpg'),
(9, 'Plain Idli', 30, 'Udupi Park', '9.jpg'),
(10, 'Curd Rice', 30, 'Udupi Park', '10.jpg'),
(11, 'Jeera Rice', 50, 'Udupi Park', '11.jpg'),
(12, 'White Rice', 40, 'Udupi Park', '12.jpg'),
(13, 'Puri', 50, 'Udupi Park', '13.jpg'),
(14, 'Fruit Cake', 300, 'Dessert Kingdom', '14.jpg'),
(15, 'Chocolate Cake', 450, 'Dessert Kingdom', '15.jpg'),
(16, 'Strawberry Cake', 400, 'Dessert Kingdom', '16.jpg'),
(17, 'Chocolate Ice cream', 50, 'Dessert Kingdom', '17.jpg'),
(18, 'Gulaab Jamun', 50, 'Dessert Kingdom', '18.jpg'),
(19, 'Jaleebi', 40, 'Dessert Kingdom', '19.jpg'),
(20, 'Cupcake', 80, 'Dessert Kingdom', '20.jpg'),
(21, 'Pasta', 60, 'Snack Park', '21.jpg'),
(22, 'Pani Puri', 40, 'Snack Park', '22.jpg'),
(23, 'Sev Puri', 35, 'Snack Park', '23.jpg'),
(24, 'Dahi Puri', 50, 'Snack Park', '24.jpg'),
(25, 'Puniyaram', 40, 'Snack Park', '25.jpg'),
(26, 'Vada Pav', 45, 'Snack Park', '26.jpg'),
(27, 'Vada', 25, 'Snack Park', '27.jpg'),
(28, 'Murukku', 30, 'Snack Park', '28.jpg'),
(29, 'Black Chana Chat', 40, 'Snack Park', '29.jpg'),
(30, 'Makhana Namkeen', 35, 'Snack Park', '30.jpg'),
(31, 'Masala Corn', 40, 'Snack Park', '31.jpg'),
(32, 'Bhel Puri', 50, 'Snack Park', '32.jpg'),
(33, 'Combo Pack of 5 chats', 400, 'Snack Park', '33.jpg'),
(34, 'Samosa', 35, 'Snack Park', '34.jpg'),
(35, 'Gobi Manchurian', 80, 'Snack Park', '35.jpg'),
(36, 'Pizza', 200, 'Burgzz', '36.jpg'),
(37, 'Veg Burger', 120, 'Burgzz', '37.jpg'),
(38, 'French Fries', 80, 'Burgzz', '38.jpg'),
(39, 'Ravioli', 95, 'Burgzz', '39.jpg'),
(40, 'Nacho', 70, 'Burgzz', '40.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(255) NOT NULL,
  `items_ordered` varchar(255) NOT NULL,
  `frequency_ordered` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `item_code` int(255) NOT NULL,
  `customer_id` int(255) NOT NULL,
  `status` enum('Confirmed','Added to cart','Cancelled') NOT NULL,
  `ordered_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `bill_id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `items_ordered`, `frequency_ordered`, `price`, `item_code`, `customer_id`, `status`, `ordered_time`, `bill_id`) VALUES
(10, 'Strawberry Cake', 1, 400, 16, 1, 'Confirmed', '2019-11-20 07:04:07', 18),
(11, 'Pani Puri', 1, 40, 22, 1, 'Confirmed', '2019-11-20 07:53:14', 19),
(12, 'Strawberry Cake', 1, 400, 16, 1, 'Confirmed', '2019-11-25 15:04:44', 19),
(13, 'Murukku', 2, 60, 28, 1, 'Confirmed', '2019-11-25 15:04:58', 19),
(14, 'Pizza', 2, 400, 36, 1, 'Confirmed', '2019-11-25 15:07:13', 21),
(15, 'Veg Burger', 1, 120, 37, 1, 'Confirmed', '2019-11-25 15:07:25', 21),
(16, 'French Fries', 1, 80, 38, 1, 'Confirmed', '2019-11-25 16:18:52', 22),
(17, 'Sev Puri', 2, 70, 23, 1, 'Confirmed', '2019-11-25 16:19:00', 22),
(18, 'White Rice', 1, 40, 12, 1, 'Confirmed', '2019-11-25 16:19:07', 22),
(19, 'Chocolate Ice cream', 1, 50, 17, 1, 'Confirmed', '2019-11-28 07:14:52', 22),
(20, 'Dahi Puri', 1, 50, 24, 1, 'Confirmed', '2019-11-28 07:20:13', 24),
(21, 'Strawberry Cake', 1, 400, 16, 1, 'Confirmed', '2019-11-28 07:22:42', 25),
(22, 'Chocolate Cake', 1, 450, 15, 1, 'Confirmed', '2019-11-28 07:39:03', 27),
(23, 'Sev Puri', 2, 70, 23, 1, 'Confirmed', '2019-11-28 07:43:16', 28),
(27, 'Sev Puri', 2, 70, 23, 1, 'Confirmed', '2019-11-28 08:45:15', 32),
(28, 'Strawberry Cake', 1, 400, 16, 1, 'Confirmed', '2019-11-28 08:47:49', 33),
(29, 'Dahi Puri', 1, 50, 24, 1, 'Added to cart', '2019-11-28 08:54:46', NULL),
(30, 'Sev Puri', 2, 70, 23, 7, 'Added to cart', '2019-11-28 14:42:11', NULL),
(31, 'Dahi Puri', 1, 50, 24, 7, 'Added to cart', '2019-11-28 14:45:12', NULL),
(32, 'Pasta', 1, 60, 21, 8, 'Confirmed', '2019-11-28 14:49:56', 35),
(33, 'Chocolate Cake', 1, 450, 15, 8, 'Confirmed', '2019-11-28 14:57:02', 35);

-- --------------------------------------------------------

--
-- Table structure for table `orders_temp`
--

CREATE TABLE `orders_temp` (
  `order_id` int(255) NOT NULL,
  `customer_id` int(255) NOT NULL,
  `item_code` int(255) NOT NULL,
  `frequency_ordered` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `status` enum('Confirmed','Added to cart') NOT NULL,
  `order_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `bill_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders_temp`
--

INSERT INTO `orders_temp` (`order_id`, `customer_id`, `item_code`, `frequency_ordered`, `price`, `status`, `order_time`, `bill_id`) VALUES
(32, 8, 21, 1, 60, 'Confirmed', '2019-11-28 14:49:56', 35),
(33, 8, 15, 1, 450, 'Confirmed', '2019-11-28 14:57:02', 35);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `restaurant_name` varchar(255) NOT NULL,
  `restaurant_address` varchar(255) DEFAULT NULL,
  `restaurant_phone` bigint(255) DEFAULT NULL,
  `restaurant_id` int(255) NOT NULL,
  `restaurant_image` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`restaurant_name`, `restaurant_address`, `restaurant_phone`, `restaurant_id`, `restaurant_image`) VALUES
('Burgzz', ' No. 92, G-18, Kedia Arcade, Infantry Road, Shivajinagar, Bengaluru, Karnataka 560001', 42334567789, 4, 'snacks.jpg'),
('Dessert Kingdom', '18/3 Near Honda Showroom, Vasanth Nagar, Bengaluru, Karnataka 560052', 34567899999, 2, 'des.jpg'),
('Snack Park', ' 81, 3rd Cross Rd, Tavarekere, Chikku Lakshmaiah Layout, Adugodi, Bengaluru, Karnataka 560029', 32334567789, 3, 'starters.jpg'),
('Udupi Park', 'SY NO 6, 1C, Outer Ring Rd, Chinappa Layout, Mahadevapura, Bengaluru, Karnataka 560037', 12334567789, 1, 'main.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(255) NOT NULL,
  `restaurant_name` varchar(255) NOT NULL,
  `customer_id` int(255) NOT NULL,
  `status` enum('Added','Confirmed') NOT NULL,
  `restaurant_stars` int(255) NOT NULL,
  `food_taste_stars` int(255) NOT NULL,
  `food_quality_stars` int(255) NOT NULL,
  `customer_service_stars` int(255) NOT NULL,
  `review_text` varchar(1000) NOT NULL,
  `overall_ratings` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `restaurant_name`, `customer_id`, `status`, `restaurant_stars`, `food_taste_stars`, `food_quality_stars`, `customer_service_stars`, `review_text`, `overall_ratings`) VALUES
(1, 'Burgzz', 1, 'Added', 3, 3, 5, 4, 'koo', 4),
(2, 'Burgzz', 1, 'Added', 5, 5, 3, 4, 'hello', 4);

--
-- Triggers `reviews`
--
DELIMITER $$
CREATE TRIGGER `MysqlTrigger` BEFORE INSERT ON `reviews` FOR EACH ROW SET NEW.overall_ratings=(NEW.restaurant_stars+NEW.food_taste_stars+NEW.food_quality_stars+NEW.customer_service_stars)/4
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `custo` (`customer_id`);

--
-- Indexes for table `bill_temp`
--
ALTER TABLE `bill_temp`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`item_code`),
  ADD KEY `res_men` (`restaurant_name`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer` (`customer_id`),
  ADD KEY `bill1` (`bill_id`);

--
-- Indexes for table `orders_temp`
--
ALTER TABLE `orders_temp`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `custo34` (`bill_id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`restaurant_name`,`restaurant_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `bill_temp`
--
ALTER TABLE `bill_temp`
  MODIFY `bill_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `item_code` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `orders_temp`
--
ALTER TABLE `orders_temp`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `custo` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `res_men` FOREIGN KEY (`restaurant_name`) REFERENCES `restaurant` (`restaurant_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `bill1` FOREIGN KEY (`bill_id`) REFERENCES `bill` (`bill_id`),
  ADD CONSTRAINT `customer` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);

--
-- Constraints for table `orders_temp`
--
ALTER TABLE `orders_temp`
  ADD CONSTRAINT `custo34` FOREIGN KEY (`bill_id`) REFERENCES `bill_temp` (`bill_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

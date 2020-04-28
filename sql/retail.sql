-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2020 at 09:29 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `retail`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `credit_worthiness` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `name`, `email`, `phone`, `credit_worthiness`) VALUES
(1, 'Innocent Anyaele', 'innocentanyaele2000@gmail.com', '0557187667', 4),
(2, 'Gabriel Anyaele', 'gabrielanyaele12@gmail.com', '0540665086', 2),
(3, 'Dickson Anyaele', 'dicksonanyaele@gmail.com', '0548985462', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `product_id`, `number`, `date`) VALUES
(11, 3, 4, 8, '2020-04-04 10:04:06'),
(18, 2, 1, 500, '2020-04-04 11:54:53'),
(19, 2, 9, 4, '2020-04-04 11:58:40'),
(22, 2, 6, 5, '2020-04-04 13:01:50'),
(25, 2, 3, 2, '2020-04-04 16:33:56'),
(26, 1, 1, 4, '2020-04-13 12:20:21'),
(27, 1, 2, 2, '2020-04-14 18:30:13');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `location` text NOT NULL,
  `stock` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `number_of_orders` int(11) NOT NULL DEFAULT 0,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `location`, `stock`, `date`, `number_of_orders`, `description`) VALUES
(1, 'books', 'warehouse A', 486, '2020-04-13 12:20:24', 14, 'This is a brief description of the product. This description may include the product name, manufacturer, expiry date, how to use and other possible descriptions of the product.'),
(2, 'toilet rolls', 'warehouse B', 18, '2020-04-14 18:30:14', 2, 'This is a brief description of the product. This description may include the product name, manufacturer, expiry date, how to use and other possible descriptions of the product.'),
(3, 'utensils', 'warehouse C', 39, '2020-04-04 16:34:18', 4, 'This is a brief description of the product. This description may include the product name, manufacturer, expiry date, how to use and other possible descriptions of the product.'),
(4, 'pillows', 'warehouse D', 75, '2020-04-04 16:25:54', 0, 'This is a brief description of the product. This description may include the product name, manufacturer, expiry date, how to use and other possible descriptions of the product.'),
(5, 'buckets', 'warehouse E', 70, '2020-04-04 16:25:54', 0, 'This is a brief description of the product. This description may include the product name, manufacturer, expiry date, how to use and other possible descriptions of the product.'),
(6, 'mats', 'warehouse F', 100, '2020-04-04 16:25:54', 0, 'This is a brief description of the product. This description may include the product name, manufacturer, expiry date, how to use and other possible descriptions of the product.'),
(7, 'chairs', 'warehouse G', 90, '2020-04-04 16:25:54', 0, 'This is a brief description of the product. This description may include the product name, manufacturer, expiry date, how to use and other possible descriptions of the product.'),
(8, 'tables', 'warehouse H', 99, '2020-04-04 16:25:54', 0, 'This is a brief description of the product. This description may include the product name, manufacturer, expiry date, how to use and other possible descriptions of the product.'),
(9, 'white boards', 'warehouse I', 20, '2020-04-04 16:25:54', 0, 'This is a brief description of the product. This description may include the product name, manufacturer, expiry date, how to use and other possible descriptions of the product.'),
(10, 'markers', 'warehouse J', 12, '2020-04-04 16:25:54', 0, 'This is a brief description of the product. This description may include the product name, manufacturer, expiry date, how to use and other possible descriptions of the product.');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `log` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`log`, `name`, `password`) VALUES
(1, 'Sales Person', 'salespersonpassword'),
(2, 'Reorder Clerk', 'reorderclerkpassword'),
(3, 'Technical Salesperson', 'technicalsalespersonpassword'),
(4, 'Sales Supervisor', 'salessupervisorpassword'),
(5, 'Stock Clerk', 'stockclerkpassword'),
(6, 'Dispatcher', 'dispatcherpassword'),
(7, 'Staff Member', 'staffmemberpassword'),
(15, 'admin', 'adminpassword');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer id` (`customer_id`),
  ADD KEY `product id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`log`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2023 at 06:33 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digital_inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill_details`
--

CREATE TABLE `bill_details` (
  `bill_id` int(120) NOT NULL,
  `bill_date` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `bill_operation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill_details`
--

INSERT INTO `bill_details` (`bill_id`, `bill_date`, `username`, `bill_operation`) VALUES
(1, 'Wednesday, June 21, 2023', 'Nischal65', 'purchase'),
(2, 'Saturday, June 24, 2023', 'Nischal65', 'purchase'),
(3, 'Thursday, June 29, 2023', 'Nischal65', 'purchase'),
(4, 'Friday, June 30, 2023', 'Nischal65', 'purchase');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(120) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `purchase_price` double NOT NULL,
  `sales_price` double NOT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_image`, `purchase_price`, `sales_price`, `supplier_id`, `category_id`) VALUES
(1, 'Fanta 1 Litre', 'fanta 1l.jpg', 95, 100, 1, 1),
(2, 'Coke 1 Litre', 'coke 1l.jpg', 90, 100, 1, 1),
(3, 'Tide 500g Regular', 'tide.jpg', 125, 130, 1, 2),
(4, 'Surf Excel 500g ', 'surf excel.jpg', 185, 190, 1, 2),
(5, 'Dettol Skin Care Hand Wash 200 ML', 'dettol skincare handwash.jpg', 150, 160, 3, 4),
(6, 'Dettol Hand Wash Original 200 ML', 'dettol-hand-wash-original-200ml.jpg', 150, 160, 3, 4),
(7, 'Roza Fish ', 'roza can.jpg', 150, 160, 2, 5),
(8, 'Kingbell Mushroom', 'kingbellmushroom.jpg', 200, 220, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `category_id` int(120) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`category_id`, `category_name`) VALUES
(1, 'Beverage'),
(2, 'Cleaning supplies'),
(3, 'Dairy Products'),
(4, 'Health products'),
(5, 'Can products'),
(6, 'Breakfast & cereals');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_details`
--

CREATE TABLE `purchase_details` (
  `product_id` int(11) DEFAULT NULL,
  `invoice_no` varchar(255) DEFAULT NULL,
  `invoice_date` varchar(255) DEFAULT NULL,
  `purchase_qty` int(120) DEFAULT NULL,
  `discount_amt` double DEFAULT NULL,
  `purchase_id` int(120) NOT NULL,
  `bill_id` int(120) DEFAULT NULL,
  `purchase_rate` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_details`
--

INSERT INTO `purchase_details` (`product_id`, `invoice_no`, `invoice_date`, `purchase_qty`, `discount_amt`, `purchase_id`, `bill_id`, `purchase_rate`) VALUES
(2, '1230', '2023-06-14', 40, 36, 1, 1, 90),
(1, '1230', '2023-06-14', 20, 188, 2, 1, 95),
(3, 'AMJ-11200-79/80', '2023-06-23', 12, 15, 3, 2, 125),
(4, 'AMJ-11200-79/80', '2023-06-23', 12, 22, 4, 2, 185),
(6, 'TC-288', '2023-06-28', 12, 180, 5, 3, 150),
(5, 'TC-288', '2023-06-28', 12, 180, 6, 3, 150),
(7, '5210', '2023-06-29', 12, 120, 7, 4, 150),
(8, '5210', '2023-06-29', 20, 40, 8, 4, 200);

-- --------------------------------------------------------

--
-- Table structure for table `sales_bill_details`
--

CREATE TABLE `sales_bill_details` (
  `sales_bill_no` int(120) NOT NULL,
  `sales_bill_date` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `bill_operation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_bill_details`
--

INSERT INTO `sales_bill_details` (`sales_bill_no`, `sales_bill_date`, `username`, `bill_operation`) VALUES
(1, 'Friday, August 11, 2023', 'Nischal65', 'sales'),
(2, 'Friday, August 11, 2023', 'Nischal65', 'sales'),
(3, 'Friday, August 11, 2023', 'Nischal65', 'sales'),
(4, 'Friday, August 11, 2023', 'Nischal65', 'sales'),
(5, 'Friday, August 11, 2023', 'Nischal65', 'sales'),
(6, 'Friday, August 11, 2023', 'Nischal65', 'sales');

-- --------------------------------------------------------

--
-- Table structure for table `sales_details`
--

CREATE TABLE `sales_details` (
  `sales_id` int(120) NOT NULL,
  `item_id` int(120) NOT NULL,
  `discount_amt` double NOT NULL,
  `sales_qty` int(120) NOT NULL,
  `sales_bill_no` int(120) NOT NULL,
  `sales_date` varchar(255) DEFAULT NULL,
  `sales_rate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_details`
--

INSERT INTO `sales_details` (`sales_id`, `item_id`, `discount_amt`, `sales_qty`, `sales_bill_no`, `sales_date`, `sales_rate`) VALUES
(1, 2, 0, 1, 1, '6/8/2023', '100'),
(2, 7, 0, 1, 1, '6/8/2023', '160'),
(3, 3, 0, 1, 2, '6/8/2023', '130'),
(4, 5, 0, 1, 2, '6/8/2023', '160'),
(5, 6, 0, 1, 3, '6/8/2023', '160'),
(6, 2, 0, 1, 3, '6/8/2023', '100'),
(7, 1, 0, 2, 4, '6/8/2023', '100'),
(8, 2, 0, 1, 4, '6/8/2023', '100'),
(9, 8, 0, 1, 5, '6/8/2023', '220'),
(10, 3, 0, 1, 6, '6/8/2023', '130');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(120) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `supplier_contact` varchar(255) DEFAULT NULL,
  `supplier_address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `supplier_name`, `supplier_contact`, `supplier_address`) VALUES
(1, 'Amazon Distributor', '5527621', 'Sanepa'),
(2, 'H.T Suppliers', '9803020977', 'Daubahal, Lalitpur'),
(3, 'Groin Traders', '529029', 'satobato');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(120) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `user_contact` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `group_id` int(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email_id`, `user_contact`, `status`, `group_id`) VALUES
(1, 'Nischal65', '$2y$10$qfL3./vkAXIRwPU2loZ/4eDOZ8NOz5zSbgaEopJyvN2hY9GvB/CEm', 'nischalshakya55@gmail.com', '9840151590', 'Active', 1),
(2, 'Alisha65', '$2y$10$3H0c1buqJaSZYl6/GLsWvODZzf9UJ5p3AjQSlKs8.MFLc5rmvI/VS', 'mdhralisha590@gmail.com', '9861770872', 'Active', 2),
(3, 'Ramesh65', '$2y$10$CwBsUUPyzAOcFDCkam.MheWxWqEx2TkldL9G39/q4pj/8N403TDd6', 'rameshkunwar369@gmail.com', '9803468381', 'Active', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE `user_group` (
  `group_id` int(120) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `roles` varchar(255) NOT NULL,
  `group_level` int(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`group_id`, `group_name`, `roles`, `group_level`) VALUES
(1, 'Admin', 'Admin', 1),
(2, 'Supervisor', 'supervisor', 2),
(3, 'Teller', 'Teller', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill_details`
--
ALTER TABLE `bill_details`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `supplier_id` (`supplier_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `purchase_details`
--
ALTER TABLE `purchase_details`
  ADD PRIMARY KEY (`purchase_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `sales_bill_details`
--
ALTER TABLE `sales_bill_details`
  ADD PRIMARY KEY (`sales_bill_no`);

--
-- Indexes for table `sales_details`
--
ALTER TABLE `sales_details`
  ADD PRIMARY KEY (`sales_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `group_id` (`group_id`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill_details`
--
ALTER TABLE `bill_details`
  MODIFY `bill_id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `category_id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `purchase_details`
--
ALTER TABLE `purchase_details`
  MODIFY `purchase_id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sales_bill_details`
--
ALTER TABLE `sales_bill_details`
  MODIFY `sales_bill_no` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sales_details`
--
ALTER TABLE `sales_details`
  MODIFY `sales_id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `group_id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `product_category` (`category_id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`supplier_id`);

--
-- Constraints for table `purchase_details`
--
ALTER TABLE `purchase_details`
  ADD CONSTRAINT `purchase_details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `user_group` (`group_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

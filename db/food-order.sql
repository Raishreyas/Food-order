-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2022 at 04:32 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food-order`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `username` varchar(300) NOT NULL,
  `image_name` varchar(250) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `full_name`, `username`, `image_name`, `password`) VALUES
(22, 'Shreyas Rai', 'shreyasrai_', '', '8538985595'),
(23, 'Ankit Sharma', 'ankitsharma_', '', '8538985595'),
(24, 'Hridyansh Bharti', 'hridyanshbharti_', '', '8538985595'),
(25, 'dhruvsingh', 'dhruvsingh_', '', '8538985595'),
(26, 'Lakshya Beniwal', 'lakshyabeniwal_', '', '8538985595'),
(27, 'Rudra Shrivastva', 'rudrashrivastva_', '', '8538985595');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_catagories`
--

CREATE TABLE `tbl_catagories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_catagories`
--

INSERT INTO `tbl_catagories` (`id`, `title`, `image_name`, `featured`, `active`) VALUES
(13, 'Burger King', 'Food_category_725.webp', 'Yes', 'Yes'),
(14, 'KFC', 'Food_category_194.webp', 'Yes', 'Yes'),
(15, 'Dominos', 'Food_category_350.webp', 'Yes', 'Yes'),
(16, 'Subway', 'Food_category_542.webp', 'Yes', 'Yes'),
(17, 'McDonalds', 'Food_category_808.webp', 'Yes', 'Yes'),
(18, 'Haldiram', 'Food_category_764.svg', 'Yes', 'Yes'),
(19, 'Kwality Walls', 'Food_category_927.jpg', 'Yes', 'Yes'),
(20, 'Hongs Kitchen', 'Food_category_53.png', 'Yes', 'Yes'),
(21, 'Chaayos', 'Food_category_771.webp', 'Yes', 'Yes'),
(22, 'Biryani Blues', 'Food_category_46.png', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_food`
--

CREATE TABLE `tbl_food` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_food`
--

INSERT INTO `tbl_food` (`id`, `title`, `description`, `price`, `image_name`, `category_id`, `featured`, `active`) VALUES
(9, 'Fiery Paneer 65 Biryani', 'Spicy chicken 65 pieces layered with Biryani Rice and served with Raita.\r\n\r\n', '329.00', 'Food_Name49.webp', 22, 'Yes', 'Yes'),
(10, 'Hyderabadi Chicken Dum Biryani Boneless', 'Hyderabadi Chicken Biryani with boneless chicken pieces and served with Raita', '329.00', 'Food_Name201.webp', 22, 'Yes', 'Yes'),
(11, ' Hyderabadi Chicken Dum Biryani', 'Hyderabadi Chicken Dum Biryani served with Raita.', '299.00', 'Food_Name530.jpg', 22, 'Yes', 'Yes'),
(12, 'Hyderabadi Paneer Biryani', 'A delightful mix of paneer & biryani rice in Hyderabadi Spices and served with Raita', '299.00', 'Food_Name799.webp', 22, 'Yes', 'Yes'),
(13, 'Hyderabadi Veg Dum Biryani', 'Hyderabadi Veg Dum Biryani with Beans, Cauliflower, Potatoes & Carrots and served with Raita.', '249.00', 'Food_Name952.webp', 22, 'Yes', 'Yes'),
(15, 'Veg Dum Biryani Handi (with Paneer)', 'Hyderabadi Veg Dum Biryani served in an earthen handi along with Raita\r\n\r\n', '469.00', 'Food_Name498.webp', 22, 'Yes', 'Yes'),
(16, '2 Crispy Veg Double Patty + 1King Fries + 1Veggie strips', '2 Crispy Veg Double Patty + 1King Fries + 1Veggie strips', '318.00', 'Food_Name776.webp', 13, 'Yes', 'Yes'),
(17, 'Hashbrown', 'What every potato wants to be.', '39.00', 'Food_Name670.webp', 13, 'Yes', 'Yes'),
(18, 'King Egg Burger', '', '60.00', 'Food_category_182.webp', 13, 'Yes', 'Yes'),
(19, 'King Egg Double Patty Burger', '', '80.00', 'Food_Name613.webp', 13, 'Yes', 'Yes'),
(20, 'King Egg with Cheese', '', '80.00', 'Food_Name232.webp', 13, 'Yes', 'Yes'),
(21, 'King Egg Wrap', 'A fresh and fluffy egg patty loaded with juicy veggies, topped with a delightful spicy sauce, wrapped in a grilled paratha', '80.00', 'Food_Name752.jpg', 13, 'Yes', 'Yes'),
(22, 'Super Over Combo (Veg)', '2 Crispy Veg Double Patty+ 1 King Peri Peri Fries + 1 Veggie Strips + 2 Pepsi (M)', '511.00', 'Food_category_548.jpg', 13, 'Yes', 'Yes'),
(23, 'Super Over Combo (Chicken)', '2 Crispy Chicken Double Patty + 1King Peri Peri Fries + 1 Chicken Fries + 2 Pepsi (M)', '624.00', 'Food_Name13.jpg', 13, 'Yes', 'Yes'),
(24, 'Strategic Timeout Combo (Chicken)', '1 Classic Chicken + 2 Crispy Chicken Double Patty + 1 King Fries + 1Chicken Fries + 2 Pepsi (M)', '723.00', 'Food_Name685.jpg', 13, 'Yes', 'Yes'),
(25, 'Crispy Veg Double Patty + Crispy Veg Double Patty', 'Crispy Veg Double Patty + Crispy Veg Double Patty', '160.00', 'Food_Name842.webp', 13, 'Yes', 'Yes'),
(26, 'Bun Maska', 'Freshly toasted bun with a more than generous dollop of butter', '79.00', 'Food_Name548.webp', 21, 'Yes', 'Yes'),
(27, 'Moms Poha', 'Home-style Poha with the tanginess of Lemon & crispiness of Peanuts', '130.00', 'Food_category_356.webp', 21, 'Yes', 'Yes'),
(28, 'Bun Omelette', 'Fluffy Omelette topped with our secret spice inside a Bun', '159.00', 'Food_Name369.webp', 21, 'Yes', 'Yes'),
(29, 'Chilli Cheese Toast', 'Perfect fix for your all-time hunger pangs', '189.00', '', 21, 'Yes', 'Yes'),
(30, 'Desi Chai', 'Customize your chai by adding adrak, tulsi, cinnamon and 9 other immunity boosting add-ons', '119.00', 'Food_Name740.webp', 21, 'Yes', 'Yes'),
(31, 'Corn n Cheese Paratha Pizza', 'A crazy fusion like never before. A delicious fusion of corn stuffed paratha and cheesy pizza.', '189.00', 'Food_Name785.webp', 15, 'Yes', 'Yes'),
(32, 'Creamy Tomato Pasta Pizza - Veg', 'Loaded with a delicious creamy tomato pasta topping , green capsicum, crunchy red and yellow bell peppers and black olives', '519.00', 'Food_Name620.jpg', 15, 'Yes', 'Yes'),
(33, 'Paneer Paratha Pizza', 'An epic fusion of paratha and pizza with melting cheese & soft paneer stuffing to satisfy all your indulgent cravings.', '219.00', 'Food_Name559.jpg', 15, 'Yes', 'Yes'),
(34, 'The 4 Cheese Pizza', 'Cheese Overloaded pizza with 4 different varieties of cheese and 4 times the cheese of a normal pizza, including a spicy hit of Ghost Pepper flavoured Cheese', '679.00', 'Food_Name197.jpg', 15, 'Yes', 'Yes'),
(35, 'The Cheese Dominator', 'Loaded with 1 Pound of Mozzarella and gooey Liquid Cheese on a Classic Large Pizza topped with a generous helping of herb sprinkle', '679.00', 'Food_Name271.jpg', 15, 'Yes', 'Yes'),
(36, 'Aloo Tikki With Choley', '', '165.00', 'Food_Name440.webp', 18, 'Yes', 'Yes'),
(37, 'Bhalla Papdi', '', '165.00', 'Food_Name831.jpg', 18, 'Yes', 'Yes'),
(38, 'Choley Bhature', '', '190.00', 'Food_Name309.webp', 18, 'Yes', 'Yes'),
(39, 'Idli Sambhar', '', '145.00', 'Food_Name991.webp', 18, 'Yes', 'Yes'),
(40, 'Masala Dosa', '', '240.00', 'Food_Name759.webp', 18, 'Yes', 'Yes'),
(41, 'Matar Kulcha', '', '160.00', 'Food_Name747.webp', 18, 'Yes', 'Yes'),
(42, 'Raj Kachori', '', '165.00', 'Food_Name843.webp', 18, 'Yes', 'Yes'),
(43, 'Honey Chilli Potato', 'Must-have Fried Potato strips tossed in a balanced honey & Chilli sauce garnished with sesame seeds', '99.00', 'Food_Name518.webp', 20, 'Yes', 'Yes'),
(44, 'Veg Manchurian', 'Must Have Classic: Soy, tomato and chili based sauce with a touch of coriander, ginger garlic garnished with spring onions', '149.00', 'Food_Name663.webp', 20, 'Yes', 'Yes'),
(45, 'Biryani & Fries Treat', 'Popcorn Biryani & Medium Fries at a deal price [serves 1]', '299.00', 'Food_Name271.webp', 14, 'Yes', 'Yes'),
(46, 'Classic Biryani Combo', 'Large portions of our new Hyderabadi style Biryani rice, served with 2 pc Hot & Crispy Chicken, 2 Spicy Gravies, 4pc Chicken Strips & a Pepsi PET [serves 2-3]', '740.00', 'Food_Name384.jpg', 14, 'Yes', 'Yes'),
(47, 'Duo Burger Meal', 'Deal Meal of 2 Classic Krisper Burgers, 2 Medium Fries, 2 Dips & a Pepsi PET [serves 2]', '539.00', 'Food_Name640.jpg', 14, 'Yes', 'Yes'),
(48, 'Smoky Grilled Biryani Combo', 'arge portions of our new Hyderabadi style Biryani rice, served with 2 pc Smoky Red Chicken, 2 Spicy Gravies, Medium Popcorn & a Pepsi PET [serves 2-3]', '740.00', 'Food_Name496.jpg', 14, 'Yes', 'Yes'),
(49, 'Snack Pack Combo', 'Combo of 3 Chicken Strips, Medium Popcorn, Medium Fries & Pepsi PET [serves 2]', '448.00', 'Food_Name278.webp', 14, 'Yes', 'Yes'),
(50, 'Wings & Fries Treat', '3 Hot Wings & Medium Fries at a deal price [serves 1]', '199.00', 'Food_Name538.webp', 14, 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `food` varchar(150) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `customer_name` varchar(150) NOT NULL,
  `customer_contact` varchar(20) NOT NULL,
  `customer_email` varchar(150) NOT NULL,
  `customer_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `food`, `price`, `qty`, `total`, `order_date`, `status`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`) VALUES
(5, 'Hyderabadi Veg Dum Biryani', '249.00', 2, '498.00', '2022-06-12 07:12:07', 'Ordered', 'Carlos Harrison', '+1 (536) 532-2433', 'gifacelyc@mailinator.com', 'etrertwat'),
(6, 'The Cheese Dominator', '679.00', 1, '679.00', '2022-06-14 05:51:17', 'Ordered', 'khushi', '9865456721', 'cinyhewol@mailinator.com', 'sec 7 extension gurugram'),
(7, '2 Crispy Veg Double Patty + 1King Fries + 1Veggie strips', '318.00', 1, '318.00', '2022-06-14 05:58:58', 'Ordered', 'Rishabh Chauhan', '9560881629', 'rpchauhan1953@gmail.com', 'Dpg degree collegesec 34 near marble market');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_catagories`
--
ALTER TABLE `tbl_catagories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_food`
--
ALTER TABLE `tbl_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_catagories`
--
ALTER TABLE `tbl_catagories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_food`
--
ALTER TABLE `tbl_food`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

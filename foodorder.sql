-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 08:36 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodorder`
--

-- --------------------------------------------------------

--
-- Table structure for table `appetizers`
--

CREATE TABLE `appetizers` (
  `F_ID` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `images_path` varchar(200) NOT NULL,
  `options` varchar(10) NOT NULL DEFAULT 'ENABLE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appetizers`
--

INSERT INTO `appetizers` (`F_ID`, `name`, `price`, `images_path`, `options`) VALUES
(1, 'Chicken Skewers', 250, 'https://images.unsplash.com/photo-1594266063697-304befca9629?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60', 'ENABLE'),
(2, 'Paneer Tikka', 230, 'https://images.unsplash.com/photo-1567188040759-fb8a883dc6d8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60', 'ENABLE'),
(3, 'Bruschetta', 120, 'https://previews.123rf.com/images/ryzhkov86/ryzhkov861502/ryzhkov86150200002/36933716-italian-appetizer-bruschetta-with-tomatoes-cheese-and-basil.jpg', 'ENABLE'),
(4, 'Veg Manchurian', 220, 'https://www.sanjanafeasts.co.uk/blog/wp-content/uploads/2020/04/IMG_1746.jpg', 'ENABLE'),
(5, 'Fish Taco Bites', 275, 'https://cdn3.tmbi.com/toh/GoogleImagesPostCard/Fish-Taco-Bites_exps143738_THCA2916394C09_26_5bC_RMS.jpg', 'ENABLE'),
(6, 'Avocado Salad', 175, 'https://images.unsplash.com/photo-1528216142275-f64d7a59d8d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60', 'ENABLE'),
(7, 'Mexican Taco', 225, 'https://previews.123rf.com/images/topntp/topntp1811/topntp181104764/112447549-tacos-with-meat-and-vegetables-mexican-food-style.jpg', 'ENABLE'),
(8, 'Paneer Royale', 255, 'https://www.wanderglobe.org/wp-content/uploads/2018/05/Indian-Starters-for-Your-Wedding-Reception.jpg', 'ENABLE');

-- --------------------------------------------------------

--
-- Table structure for table `beverages`
--

CREATE TABLE `beverages` (
  `F_ID` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `images_path` varchar(200) NOT NULL,
  `options` varchar(10) NOT NULL DEFAULT 'ENABLE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `beverages`
--

INSERT INTO `beverages` (`F_ID`, `name`, `price`, `images_path`, `options`) VALUES
(17, 'Pina Colada', 250, 'https://images.absolutdrinks.com/drink-images/Raw/Absolut/d32f1cf1-2a28-463b-9b64-26be5eaf75ed.jpg?imwidth=500', 'ENABLE'),
(18, 'Lagoon Margarita', 230, 'https://www.thespruceeats.com/thmb/D9348jCXFtzXKqeYlIAEhq-HW_E=/1500x844/smart/filters:no_upscale()/BlueLagoonMargarita-171667681-56a171335f9b58b7d0bf5242.jpg', 'ENABLE'),
(19, 'Virgin Sangria', 220, 'https://images.unsplash.com/photo-1598990386084-8af4dd12b3b4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60', 'ENABLE');

-- --------------------------------------------------------

--
-- Table structure for table `breads`
--

CREATE TABLE `breads` (
  `F_ID` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `images_path` varchar(200) NOT NULL,
  `options` varchar(10) NOT NULL DEFAULT 'ENABLE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `breads`
--

INSERT INTO `breads` (`F_ID`, `name`, `price`, `images_path`, `options`) VALUES
(32, 'Bread Basket', 250, 'https://images.unsplash.com/photo-1571881319340-0d2727144584?ixid=MXwxMjA3fDB8MHxzZWFyY2h8OXx8YnJlYWQlMjBiYXNrZXR8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60', 'ENABLE'),
(33, 'Garlic Naan', 230, 'https://media-cdn.tripadvisor.com/media/photo-s/12/66/77/21/butter-garlic-naan.jpg', 'ENABLE'),
(34, 'Parathas', 270, 'https://cdn.cdnparenting.com/articles/2020/01/19152919/Aloo-Paratha-Recipe.jpg', 'ENABLE');

-- --------------------------------------------------------

--
-- Table structure for table `desserts`
--

CREATE TABLE `desserts` (
  `F_ID` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `images_path` varchar(200) NOT NULL,
  `options` varchar(10) NOT NULL DEFAULT 'ENABLE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `desserts`
--

INSERT INTO `desserts` (`F_ID`, `name`, `price`, `images_path`, `options`) VALUES
(35, 'Mousse', 250, 'https://images.unsplash.com/photo-1517417196127-9ad11f8a8dd3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60', 'ENABLE'),
(36, 'Macarons', 300, 'https://images.unsplash.com/photo-1528975604071-b4dc52a2d18c?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60', 'ENABLE'),
(37, 'Tiramisu', 220, 'https://food.fnr.sndimg.com/content/dam/images/food/fullset/2011/2/4/2/RX-FNM_030111-Sugar-Fix-005_s4x3.jpg.rend.hgtvcom.826.620.suffix/1371597326801.jpeg', 'ENABLE'),
(38, 'Cheesecake', 320, 'https://bakingamoment.com/wp-content/uploads/2019/05/IMG_4626-no-bake-cheesecake.jpg', 'ENABLE'),
(39, 'Doughnuts', 275, 'https://images.unsplash.com/photo-1517721488698-bacb2d6085b9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60', 'ENABLE'),
(40, 'Waffles n Crepes', 375, 'https://www.clubchefman.com/upload/recipe-images/crepe303-1000x600.jpg', 'ENABLE');

-- --------------------------------------------------------

--
-- Table structure for table `fastfood`
--

CREATE TABLE `fastfood` (
  `F_ID` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `images_path` varchar(200) NOT NULL,
  `options` varchar(10) NOT NULL DEFAULT 'ENABLE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fastfood`
--

INSERT INTO `fastfood` (`F_ID`, `name`, `price`, `images_path`, `options`) VALUES
(9, 'Burger with Fries', 250, 'https://www.epicurus.com/food/recipes/wp-content/uploads/2018/06/double-bacon-double-cheeseburger.jpg', 'ENABLE'),
(10, 'Paleo Pizza', 330, 'https://images.unsplash.com/photo-1590534247854-e97d5e3feef6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60', 'ENABLE'),
(11, 'Nachos', 200, 'https://thebusybaker.ca/wp-content/uploads/2017/12/rainbow-vegetable-skillet-nachos-fbig1.jpg', 'ENABLE'),
(12, 'Garlic Bread', 220, 'https://images.unsplash.com/photo-1593527270723-834c53a3fed4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60', 'ENABLE'),
(13, 'Chicken Wings', 275, 'https://www.thespruceeats.com/thmb/9shc4F8CQ-9alqEnpLNXhWS0WlE=/3068x3068/smart/filters:no_upscale()/traditional-chicken-wings-912937-hero-01-6c1a003373a54538a732abc0005145d8.jpg', 'ENABLE'),
(14, 'Spinach Panini', 375, 'https://static.onecms.io/wp-content/uploads/sites/44/2018/11/30/6060587.jpg', 'ENABLE'),
(15, 'Cheese Spaghetti', 225, 'https://www.recipetineats.com/wp-content/uploads/2018/03/Creamy-Tomato-Pasta_8.jpg', 'ENABLE'),
(16, 'Lasagna', 255, 'https://www.cookingclassy.com/wp-content/uploads/2013/03/lasagna15.jpg', 'ENABLE');

-- --------------------------------------------------------

--
-- Table structure for table `form_data`
--

CREATE TABLE `form_data` (
  `id` int(30) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `submitted_on` datetime NOT NULL DEFAULT current_timestamp(),
  `Message` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

CREATE TABLE `main` (
  `F_ID` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `images_path` varchar(200) NOT NULL,
  `options` varchar(10) NOT NULL DEFAULT 'ENABLE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`F_ID`, `name`, `price`, `images_path`, `options`) VALUES
(20, 'Butter Chicken', 450, 'https://www.simplyrecipes.com/wp-content/uploads/2019/01/Butter-Chicken-LEAD-5.jpg', 'ENABLE'),
(21, 'Chicken Sizzler', 530, 'https://thumbs.dreamstime.com/b/sizzler-fresh-chicken-spaghetti-102092930.jpg', 'ENABLE'),
(22, 'Shahi Paneer', 420, 'https://i2.wp.com/tiffinandteaofficial.com/wp-content/uploads/2020/07/IMG_7080-1.jpg?resize=800%2C1028&ssl=1', 'ENABLE'),
(23, 'Pav Bhaji', 220, 'https://zaykarecipes.com/wp-content/uploads/2017/02/Pav-Bhaji-Recipe-500x375.jpg', 'ENABLE'),
(24, 'Veggies in Black Bean Sauce', 575, 'https://www.ndtv.com/cooks/images/black.000.jpg', 'ENABLE'),
(25, 'Dal Makhani', 375, 'https://static.toiimg.com/thumb/53097626.cms?width=1200&height=900', 'ENABLE');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_ID` int(30) NOT NULL,
  `F_ID` int(30) NOT NULL,
  `foodname` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `quantity` int(30) NOT NULL,
  `order_date` date NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_ID`, `F_ID`, `foodname`, `price`, `quantity`, `order_date`, `username`) VALUES
(111, 35, 'Mousse', 250, 1, '2019-03-03', 'monika'),
(112, 33, 'Garlic Naan', 230, 2, '2019-03-03', 'mahek'),
(113, 37, 'Tiramisu', 220, 2, '2019-03-03', 'mahek');

-- --------------------------------------------------------

--
-- Table structure for table `rice`
--

CREATE TABLE `rice` (
  `F_ID` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `images_path` varchar(200) NOT NULL,
  `options` varchar(10) NOT NULL DEFAULT 'ENABLE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rice`
--

INSERT INTO `rice` (`F_ID`, `name`, `price`, `images_path`, `options`) VALUES
(26, 'Special Veg Biryani', 350, 'https://www.cookwithmanali.com/wp-content/uploads/2019/09/Vegetable-Biryani-Restaurant-Style-500x500.jpg', 'ENABLE'),
(27, 'Chicken Handi Biryani', 430, 'https://sifu.unileversolutions.com/image/en-LK/recipe-topvisual/2/1260-709/authentic-chicken-biryani-50434132.jpg', 'ENABLE'),
(28, 'Chicken Burnt Garlic Fried Ric', 420, 'https://s3.ap-south-1.amazonaws.com/mumbai.urbanpiper.com/media/bizmedia/2020/03/18/Chicken_Burnt_Garlic_Fried_Rice_COMPRESSED.jpg', 'ENABLE'),
(29, 'Triple Schezwan Fried Rice', 420, 'https://media-cdn.tripadvisor.com/media/photo-s/13/06/1c/75/triple-schezwan-rice.jpg', 'ENABLE'),
(30, 'Schezwan Noodles', 375, 'https://www.archanaskitchen.com/images/archanaskitchen/0-Archanas-Kitchen-Recipes/2016/1-Archana/Spicy_Vegetable_Noodles_Recipe-1.jpg', 'ENABLE'),
(31, 'Chicken Hakka Noodles', 475, 'https://www.cubesnjuliennes.com/wp-content/uploads/2020/06/Spicy-Chicken-Hakka-Noodles-Recipe.jpg', 'ENABLE');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `firstname`, `lastname`, `username`, `contact`, `email`, `password`, `confirmp`) VALUES
(200, 'Monika', 'Jha', 'Monika12', '7715899478', 'monikajha70@gmail.com', 'Aq@90', 'Aq@90');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appetizers`
--
ALTER TABLE `appetizers`
  ADD PRIMARY KEY (`F_ID`);

--
-- Indexes for table `beverages`
--
ALTER TABLE `beverages`
  ADD PRIMARY KEY (`F_ID`);

--
-- Indexes for table `breads`
--
ALTER TABLE `breads`
  ADD PRIMARY KEY (`F_ID`);

--
-- Indexes for table `desserts`
--
ALTER TABLE `desserts`
  ADD PRIMARY KEY (`F_ID`);

--
-- Indexes for table `fastfood`
--
ALTER TABLE `fastfood`
  ADD PRIMARY KEY (`F_ID`);

--
-- Indexes for table `form_data`
--
ALTER TABLE `form_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`F_ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_ID`),
  ADD KEY `F_ID` (`F_ID`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `rice`
--
ALTER TABLE `rice`
  ADD PRIMARY KEY (`F_ID`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appetizers`
--
ALTER TABLE `appetizers`
  MODIFY `F_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `beverages`
--
ALTER TABLE `beverages`
  MODIFY `F_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `breads`
--
ALTER TABLE `breads`
  MODIFY `F_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `desserts`
--
ALTER TABLE `desserts`
  MODIFY `F_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `fastfood`
--
ALTER TABLE `fastfood`
  MODIFY `F_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `form_data`
--
ALTER TABLE `form_data`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300;

--
-- AUTO_INCREMENT for table `main`
--
ALTER TABLE `main`
  MODIFY `F_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `rice`
--
ALTER TABLE `rice`
  MODIFY `F_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

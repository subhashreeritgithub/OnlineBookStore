-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2023 at 03:23 PM
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
-- Database: `online_book_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_signup`
--

CREATE TABLE `admin_signup` (
  `admin_id` int(100) NOT NULL,
  `usert_type` varchar(100) NOT NULL DEFAULT 'admin',
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_signup`
--

INSERT INTO `admin_signup` (`admin_id`, `usert_type`, `email`, `password`) VALUES
(1, 'admin', 'mradilanwar1995@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `comics_books`
--

CREATE TABLE `comics_books` (
  `b_id` int(100) NOT NULL,
  `book_id` varchar(100) NOT NULL DEFAULT 'comics',
  `book_name` varchar(100) NOT NULL,
  `author_name` varchar(100) NOT NULL,
  `released_date` date NOT NULL,
  `book_price` varchar(100) NOT NULL,
  `publisher_name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comics_books`
--

INSERT INTO `comics_books` (`b_id`, `book_id`, `book_name`, `author_name`, `released_date`, `book_price`, `publisher_name`, `image`) VALUES
(6, 'comics', 'Pet Stories', ' Enid Blyton', '2019-02-23', '999', 'Hachette Childrens Group', 'pet-stories.jpg'),
(7, 'comics', 'A box of stories', 'BOND RUSKIN', '2011-06-30', '849', ' Penguin Random House India', 'a-box-of-stories.jpg'),
(8, 'comics', 'Attack on titan 1', 'Hajime Isayama', '2019-06-20', '789', 'Kodansha Comics', 'Attack-on-Titan-1.jpg'),
(9, 'comics', 'Attack on titan 29', 'Hajime Isayama', '2022-09-22', '879', 'Kodansha Comics', 'Attack-on-Titan-29.jpg'),
(10, 'comics', 'Batman and Three Joker', 'Jason Fabok', '2022-09-23', '789', ' DC Comics', 'bat-man-joker.jpg'),
(11, 'comics', 'Batman year one', 'David Mazzucchelli', '2014-05-28', '999', 'DC Comics', 'batman-year-one.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `message_id` int(11) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `messages` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'sended',
  `date_time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`message_id`, `full_name`, `contact`, `address`, `email`, `subject`, `messages`, `status`, `date_time`) VALUES
(6, 'Adil Anwar', '8210097113', 'Haydrabbad', 'mradilanwar1995@gmail.com', 'Order Related', 'Actually i am just checking your delivery process\r\nso thats why i order this product', 'sended', '2023-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `cooking_books`
--

CREATE TABLE `cooking_books` (
  `b_id` int(100) NOT NULL,
  `book_id` varchar(100) NOT NULL DEFAULT 'cooking',
  `book_name` varchar(100) NOT NULL,
  `author_name` varchar(100) NOT NULL,
  `release_date` date NOT NULL,
  `book_price` varchar(100) NOT NULL,
  `publisher_name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cooking_books`
--

INSERT INTO `cooking_books` (`b_id`, `book_id`, `book_name`, `author_name`, `release_date`, `book_price`, `publisher_name`, `image`) VALUES
(2, 'cooking', 'Indian Cookery Course', 'Asad Ansari', '2020-02-02', '848', 'Adil Anwar corporation', 'Indian Cookery Course.jpg'),
(3, 'cooking', 'indian pantry', 'SANGHVI VIR', '2020-11-27', '700', ' Penguin Random House India', 'indian-pantry.jpg'),
(4, 'cooking', 'Science of Cooking', 'Stuart Farrimond', '2020-06-18', '450', 'Dorling Kindersley Ltd', 'Science of Cooking.jpg'),
(5, 'cooking', 'The Jewels of Nizam', 'Devi Geeta', '2018-11-29', '870', 'Rupa Publications India', 'The Jewels of Nizam.jpg'),
(6, 'cooking', 'The Lucknow Cookbook', 'Chand Kohli Sunita Sur', '2018-06-15', '700', 'Rupa Corporation', 'The Lucknow Cookbook.jpg'),
(7, 'cooking', 'The Modern Tiffin', 'Priyanka Naik', '2020-07-17', '849', 'Tiller Press', 'The Modern Tiffin.jpg'),
(8, 'cooking', 'The Mughal Feast', 'Salma Yusuf Husain', '2022-09-10', '945', 'Roli Books', 'The Mughal Feast.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `educational_books`
--

CREATE TABLE `educational_books` (
  `b_id` int(100) NOT NULL,
  `book_id` varchar(100) NOT NULL DEFAULT 'education',
  `book_name` varchar(100) NOT NULL,
  `author_name` varchar(100) NOT NULL,
  `release_date` date NOT NULL,
  `book_price` varchar(100) NOT NULL,
  `publisher_name` varchar(100) NOT NULL,
  `book_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `educational_books`
--

INSERT INTO `educational_books` (`b_id`, `book_id`, `book_name`, `author_name`, `release_date`, `book_price`, `publisher_name`, `book_image`) VALUES
(8, 'education', 'Theory of every thing', 'Albert Eienstin', '2018-06-16', '899', 'Jaico Pub House', 'Theory of Everything.jpg'),
(9, 'education', 'Vedic Mathematics', 'Bharati Krsna Tirthaji', '2017-06-20', '499', 'Motilal Banarsidass,', 'Vedic Mathematics.jpg'),
(10, 'education', 'Book Handbook Chemestry', 'Saleha Ansari Gupta', '2022-09-09', '544', 'Repro Books Limited', 'Book Handbook Chemistry.jpg'),
(11, 'education', 'Conrad and Nature', 'John G Peters', '2019-11-13', '784', 'Routledge', 'Conrad and Nature.jpg'),
(12, 'education', 'Homo Deus', 'Yuval Noah Harari', '2019-06-13', '894', ' Vintage Publishing', 'Homo Deus.jpg'),
(13, 'education', 'NCERT Examplar Science 9th', 'Rajeev Kashyap ', '2022-09-15', '897', 'Arihant Prakashan', 'NCERT Examplar Science 9th.jpg'),
(14, 'education', 'Handbook Physics', 'Sharma sir', '2022-09-16', '999', 'Arihant Publications', 'physics.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `novel_books`
--

CREATE TABLE `novel_books` (
  `b_id` int(100) NOT NULL,
  `book_id` varchar(100) NOT NULL DEFAULT 'novels',
  `book_name` varchar(100) NOT NULL,
  `author_name` varchar(100) NOT NULL,
  `release_date` date NOT NULL,
  `book_price` varchar(100) NOT NULL,
  `publisher_name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `novel_books`
--

INSERT INTO `novel_books` (`b_id`, `book_id`, `book_name`, `author_name`, `release_date`, `book_price`, `publisher_name`, `image`) VALUES
(1, 'novels', 'Great Indian Novel', 'Ankita Sharam', '2021-02-19', '879', 'Penguin Books India', 'Great Indian Novel.jpg'),
(2, 'novels', 'Never Let Me Go', 'Kazuo Ishiguro', '2020-02-20', '879', 'Faber ', 'Never Let Me Go.jpg'),
(3, 'novels', 'The Dragon Republic', 'RF Kuang', '2017-10-28', '879', 'HarperCollins Publishers', 'The Dragon Republic.jpg'),
(4, 'novels', 'The Family Upstairs', 'Lisa Jewell', '2020-10-14', '978', 'Cornerstone', 'The Family Upstairs.jpg'),
(5, 'novels', 'The Silent Patient', 'Alex Michaelides', '2013-10-16', '784', 'Tansung Wang', 'The Silent Patient.jpg'),
(6, 'novels', 'The Wife Upstairs', 'Rachel Hawkins', '2019-10-11', '498', 'HarperCollins Publishers', 'The Wife Upstairs.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order_manager`
--

CREATE TABLE `purchase_order_manager` (
  `order_id` int(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `payment_mode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase_order_manager`
--

INSERT INTO `purchase_order_manager` (`order_id`, `full_name`, `contact`, `email`, `address`, `payment_mode`) VALUES
(1, 'Adil Anwar', '9534109707', 'mradilanwar1995@gmail.com', 'Mandar', 'cod'),
(2, 'Amir Anwar', '8457889954', 'amir1234@gmail.com', 'Ranchi', 'cod'),
(3, 'Hemant Kumar', '8754985478', 'h@gmail.com', 'hgfchcf', 'cod'),
(4, 'Adil Anwar', '8210097113', 'mradilanwar1995@gmail.com', 'ascasd', 'cod'),
(5, 'Jony Dep', '8457898548', 'jony12@g.com', 'USA', 'cod');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_user_orders`
--

CREATE TABLE `purchase_user_orders` (
  `order_id` int(100) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `book_price` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase_user_orders`
--

INSERT INTO `purchase_user_orders` (`order_id`, `book_name`, `book_price`, `quantity`) VALUES
(1, 'MS Dhoni', '599', 2),
(1, 'Messi', '599', 3),
(1, 'No Limits', '999', 1),
(2, 'No Limits', '999', 6),
(3, 'MS Dhoni', '599', 2),
(4, 'Vedic Mathematics', '499', 1),
(5, 'Batman year one', '999', 1),
(5, 'Book Handbook Chemestry', '544', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sports_books`
--

CREATE TABLE `sports_books` (
  `b_id` int(100) NOT NULL,
  `book_id` varchar(100) NOT NULL DEFAULT 'sports',
  `book_name` varchar(100) NOT NULL,
  `author_name` varchar(100) NOT NULL,
  `release_date` date NOT NULL,
  `book_price` varchar(100) NOT NULL,
  `publisher_name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sports_books`
--

INSERT INTO `sports_books` (`b_id`, `book_id`, `book_name`, `author_name`, `release_date`, `book_price`, `publisher_name`, `image`) VALUES
(3, 'sports', 'Born to Run', 'Christopher McDougall', '2018-10-18', '599', 'Profile Books Ltd', 'Born to Run.jpg'),
(4, 'sports', 'Bound by Love', 'Nityanand Charan Das', '2016-12-22', '599', 'Birch Books', 'Bound by Love.jpg'),
(5, 'sports', 'MS Dhoni', 'Bharat Sundaresan', '2016-12-27', '599', ' Penguin Random House India', 'dhoni.jpg'),
(6, 'sports', 'Messi', 'Luca Caioli', '2016-12-14', '599', 'Icon Books', 'Messi.jpg'),
(7, 'sports', 'No Limits', 'Alan Abrahamson', '2016-12-14', '999', 'Free Press', 'No Limits.jpg'),
(8, 'sports', 'The Champions Mind', 'PhD Afremow', '2016-12-14', '99', 'Rodale Books', 'The Champions Mind.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_signup`
--

CREATE TABLE `user_signup` (
  `user_id` int(11) NOT NULL,
  `user_type` varchar(100) NOT NULL DEFAULT 'user',
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip_code` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `tc_accepted` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_signup`
--

INSERT INTO `user_signup` (`user_id`, `user_type`, `f_name`, `l_name`, `contact`, `dob`, `address`, `email`, `password`, `city`, `state`, `zip_code`, `gender`, `image`, `tc_accepted`) VALUES
(1, 'user', 'Adil', 'Anwar', '9534109707', '1995-02-27', 'Mandar', 'mradilanwar1995@gmail.com', 'adil', 'Ranchi', 'Jharkhand', '835214', 'male', 'adil2.jpg', 'accepted'),
(2, 'user', 'Amir', 'Anwar', '8877556654', '2022-09-28', 'Ranchi', 'amir1234@gmail.com', 'amir1234', 'Ranchi', 'Jharkhand', '835214', 'male', 'amir.jpg', 'accepted'),
(3, 'user', 'Asad', 'Ansari', '9865487548', '2022-09-16', 'Mandar', 'asad@g.com', 'a123456', 'Ranchi', 'Jharkhand', '835214', 'male', 'asad12.jpg', 'accepted'),
(4, 'user', 'Priyanka', 'Chopda', '8844571520', '2022-09-15', 'Mumbai', 'p154@g.com', 'p12', 'Mumbai', 'Maharashtra', '784587', 'female', 'priyanka-chopra.jpg', 'accepted'),
(5, 'user', 'Jony', 'Dep', '8745987548', '2022-09-21', 'New York', 'jony12@g.com', 'jony12', 'New York', 'Goa', '548751', 'male', 'jony2.jpg', 'accepted'),
(6, 'user', 'Hemant', 'Kumar', '8754985478', '2023-05-31', 'Haydrabbad', 'h@gmail.com', 'h12', 'Haydrabaad', 'Karnataka', '985487', 'male', '44.jpg', 'accepted'),
(8, 'user', 'Sahid', 'Kapoor', '8649875487', '2023-06-01', 'Mumbai', 'sahid@gmail.com', 'sahid', 'Mumbai', 'Maharashtra', '986548', 'male', 'sahid.jpg', 'accepted');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_signup`
--
ALTER TABLE `admin_signup`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `comics_books`
--
ALTER TABLE `comics_books`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `cooking_books`
--
ALTER TABLE `cooking_books`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `educational_books`
--
ALTER TABLE `educational_books`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `novel_books`
--
ALTER TABLE `novel_books`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `purchase_order_manager`
--
ALTER TABLE `purchase_order_manager`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `sports_books`
--
ALTER TABLE `sports_books`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `user_signup`
--
ALTER TABLE `user_signup`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_signup`
--
ALTER TABLE `admin_signup`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comics_books`
--
ALTER TABLE `comics_books`
  MODIFY `b_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cooking_books`
--
ALTER TABLE `cooking_books`
  MODIFY `b_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `educational_books`
--
ALTER TABLE `educational_books`
  MODIFY `b_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `novel_books`
--
ALTER TABLE `novel_books`
  MODIFY `b_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `purchase_order_manager`
--
ALTER TABLE `purchase_order_manager`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sports_books`
--
ALTER TABLE `sports_books`
  MODIFY `b_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_signup`
--
ALTER TABLE `user_signup`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

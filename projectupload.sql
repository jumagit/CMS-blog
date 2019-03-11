-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2019 at 01:25 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(3, 'DARASA'),
(8, 'PRAYER'),
(9, 'ARTICLES'),
(10, 'DRIVER'),
(11, 'REPAIR'),
(14, 'TOURISM');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_post_id` int(11) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` varchar(255) NOT NULL,
  `comment_date` date NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `In_response_to` varchar(255) NOT NULL,
  `comment_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_email`, `comment_content`, `comment_date`, `comment_author`, `comment_status`, `In_response_to`, `comment_count`) VALUES
(7, 7, 'ja@gmail.com', 'read some php', '2018-01-03', 'hoom', 'Approved', '', 0),
(8, 0, 'ja@gmail.com', 'read some php', '2018-01-03', 'hoom', 'Approved', '', 0),
(9, 0, 'juma@gmail.com', 'Some cool features', '2018-01-03', 'just', 'Approved', '', 0),
(18, 0, 'ja@gmail.com', 'wowoooooooooooooooooooooo', '2018-01-04', 'home', 'Approved', '', 0),
(19, 0, 'juma@gmail.com', 'could u be knowing me', '2018-01-04', 'hetas', 'Approved', '', 0),
(20, 3, 'kolop@gmail.com', 'i want to get him now', '2018-03-12', 'juma', 'Approved', 'ANY', 2),
(21, 3, 'test@gmail.com', 'i wana see exactly whats happening', '2018-03-12', 'test', 'Approved', 'ANY', 2),
(22, 3, 'A@gmail.com', 'u gonna see this', '2018-03-12', 'hey ', 'Approved', 'ANY', 2),
(23, 3, 'A@gmail.com', 'u gonna see this', '2018-03-12', 'hey ', 'Approved', 'ANY', 1),
(24, 4, 'juma@gmall.com', 'it has to work', '2018-03-13', 'reo', 'Approved', 'ANY', 2),
(25, 4, 'juma@gmall.com', 'it has to work', '2018-03-13', 'reo', 'Approved', 'ANY', 1),
(26, 47, 'xompex@gmail.com', 'i wana rock here and brake some bones', '2018-03-13', 'XOMPEX', 'Approved', 'ANY', 2),
(27, 47, 'esa1@gmail.com', 'Keep it cool and easy', '2018-03-13', 'Esawat', 'Approved', 'ANY', 1),
(28, 8, 'shaban@gmail.com', 'we are tight buddies', '2018-03-18', 'Shaban', 'Approved', 'ANY', 1),
(29, 76, 'asas@gmail.com', 'he trys to be ok', '2018-03-18', 'TREUSER', 'Approved', 'ANY', 1),
(30, 76, 'busesa@gmail.com', 'let us make some changes', '2018-03-18', 'bucesa', 'Unapproved', 'ANY', 0),
(31, 67, 'mi@gmail.com', 'hey', '2019-02-24', 'juma', 'Unapproved', 'ANY', 0);

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `path` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`id`, `name`, `path`) VALUES
(12, 'SUBLIME TEXT', 'admin/document/IMG_20171104_171236.jpg'),
(13, 'JQUERY', 'admin/document/bootstrap.zip'),
(14, 'JAVASCRIPT', 'admin/document/deamon assignement.pptx'),
(15, 'NOTES', 'admin/document/JetAudio_7.0.0.3001_20170913_230340.zip'),
(16, 'ANDROID', 'admin/document/HALAKA GROUPS 2017.rar'),
(17, 'XAMPP', 'admin/document/CMS-TEMPLATE.zip'),
(18, 'PHP', 'admin/document/books_3955_0.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `online_users`
--

CREATE TABLE `online_users` (
  `id` int(11) NOT NULL,
  `session` varchar(255) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online_users`
--

INSERT INTO `online_users` (`id`, `session`, `time`) VALUES
(1, '8ag13rkfm1jub94ivlnrpcsbnv', 1519462701),
(2, 'jgk2rhtnhhbdm6vhmee3d8ioom', 1519462708),
(3, 'hc1idmdc3ihir38agj7n14c5gu', 1519467236),
(4, 'ls1am8hld2lsqlgn0svt0445b6', 1519475029),
(5, '53u40bmc02k0a64b8aaraos793', 1519762974),
(6, 'q0p9bqbr6i8m1ujp77s6bst91o', 1519762962),
(7, 'ul9mpuesvs4mpb58fslf4f9lpl', 1519762921),
(8, 'cqn4r6mm8dakgftdpk1vhp16ok', 1519876049),
(9, 'j67ie0i5s72i32hfbrolab3gqv', 1519992629),
(10, 'trqb8th1kduqrp5fthkaelnhvp', 1520003535),
(11, 'vv70jrj5mhvi33p82ebdlh2tib', 1520005943),
(12, 'j0q98s97psdjqi3fqvptjnk9qe', 1520003112),
(13, '0p3k4kle373bilcci3i2nsl1ab', 1520061082),
(14, 'jibspe7bimi07v0tn226b0slqe', 1520366687),
(15, 'hpvaf5nttnakv5o54mmioj7uip', 1520501043),
(16, '6vrug16qnd0u3sjdvbb8ohb66h', 1520628367),
(17, '5mtthi6bnhppoai9k8lht8f100', 1520666327),
(18, '2miu09lumbm1t39ucdbcradnik', 1520714693),
(19, '3ra3cfqh6np5t4nisejisg3eb9', 1520855647),
(20, 'snfidlviafsi7s2ek4cptklrg7', 1520884492),
(21, 'n33tkqucmcpmho7c7ovkoak278', 1520933587),
(22, 'gmqrctsfshd8rs5bmv167fon0h', 1521059008),
(23, 'l097o62a0tos0lamo6s4j2nlv1', 1521100584),
(24, '1mgkmkmsddvfqdnqavpi253v0r', 1521105525),
(25, 'kmduufdaug4vf8r2ba7pl5rlui', 1521111857),
(26, '69pvpsg16227sj1rr33i8v8ep2', 1521188957),
(27, 'sn36m0c0cqq6aje74qmpvecusm', 1521352399),
(28, 'o1lodi2j5th6dats84j27jei43', 1521371797),
(29, '1hj55ros55c9jdnb7slnabhphr', 1521387093),
(30, '5itr3hqfo1scl8j1l91q61nf9v', 1550305608),
(31, 't7hqgvtcnu5m89fuuqfcrb0o06', 1550311728),
(32, 'msibhnutt08i36emqllgkpceq8', 1550314258),
(33, 'rl14qmseso7v4l1upj7m8hra9b', 1551010767);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `Post_category_id` int(11) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_image` text NOT NULL,
  `post_status` varchar(255) NOT NULL,
  `post_content` varchar(255) NOT NULL,
  `post_date` varchar(255) NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_views_count` int(11) NOT NULL,
  `post_comment_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_title`, `Post_category_id`, `post_author`, `post_image`, `post_status`, `post_content`, `post_date`, `post_tags`, `post_views_count`, `post_comment_count`) VALUES
(67, 'PROJECT IS MAKING ME THINK OF THE FUTURE', 3, 'TRUELY', 'IMG_20190214_102208.jpg', 'Published', '     Muhammadi Site is an Islamic website provides reading material Such as Quran,Hadith, \r\nKalema, Durood, Images of Mosques and Dargahs, Islamic Videos, Audios, Free E-Books, \r\nand Islamic website links', '2019-02-24 04:11:21', 'books,pdf', 17, 1),
(68, 'Back in real times', 3, 'Voltage', 'IMG_20190213_102205.jpg', 'Published', 'This was an incident when i was tractor room with some guys learning some database', '2019-02-24 04:14:34', 'books,pdf', 9, 0),
(69, 'ARTIFICIAL INTELLIGENCE IN COMPUTER ENGINEERING', 9, 'GOLDLIVER', 'IMG_20190214_101525.jpg', 'Published', '   East Essence is proud to serve a diverse array of customers looking for quality and style at ultimate prices. From Kurtis to Abayas, we have you covered in so many beautiful ways. Shirts, Jackets, Shawls and accessories are all just a click away to com', '2019-02-24 04:08:09', 'learn', 9, 0),
(70, 'Long time ago in busitema university', 3, 'Himself', 'Abstract (10).jpg', 'Published', '  Sometimes things get so jumpy and hard to become interesting', '2019-02-24 04:17:28', 'TRADE', 11, 0),
(76, 'Bumsa assembly guys it was so bloody ', 9, 'Juma theodrom', 'IMG_20190214_102116.jpg', 'Published', '    It was so colorfull my dear because we enjoyed alot and we even got new friends that seemed to be liking our visitation.', '2019-02-24 04:07:46', 'assembly', 28, 1),
(77, 'Real avator coming into worlds of today', 3, 'Himself', 'Abstract (13).jpg', 'Published', 'My current post today brothers and sisters', '2019-02-24 04:19:10', 'real', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `StdNo` int(11) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `user_status` varchar(255) NOT NULL,
  `user_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`StdNo`, `Firstname`, `Lastname`, `Username`, `Email`, `Password`, `user_status`, `user_image`) VALUES
(70, 'IBANDA', 'AKILAM', 'IBANDA', 'acram@yahoo.com', '$2y$10$pexTGIaj3IoKLTXOiHh5OOvViscTld82ithJ.zw/NmYODADzsQDZO', 'Subscriber', ''),
(71, 'SAAKA', 'TOMAS', 'TOM', 'tom@gmail.com', '$2y$10$EUokmNSMRNVHFTtX0jz0Xel6F.kSVhrzB8qylDhXbujsYrxmpnF2W', 'Subscriber', ''),
(74, 'SENNINDE', 'LANKAHE', 'emma', 'emma@gmail.com', '$2y$12$7kPVOOx/dqAhANvoe4Qvz.WRBg3MATgjTdraL.nkkc7JUtYUimi3C', 'Subscriber', 'Abstract (3).jpg'),
(75, 'KIWOMA', 'MAWULANA', 'HARUNA', 'haruna@gmail.com', '$2y$12$SyGPNmjgYIF2mQ1Sd4FU1OL3QGe47GqoDutpsIr4W6tbOIVwr/bAe', 'Admin', 'Abstract (8).jpg'),
(76, 'THEORETICAL', 'MATH', 'LUBANGA', 'muzam@gmail.com', '$2y$12$y6LvU/ut5NWTJ/EQi796tOi2G8iifjuRcL/3BZpMyjhZh01k7X.Ca', 'Subscriber', 'Abstract (22).jpg'),
(77, 'MUKOOVA', 'JUMA', 'again', 'serm@gmail.com', 'c8759924c3699fb35269dc39ba7fee56', 'Subscriber', 'IMG_20190214_102116.jpg'),
(78, 'hey', 'their', 'username', 'juma@gmail.com', '$2y$12$0Z07cK1EBJ7e6/AbExV7u.kLhNPAa06.XEdKZtcAqxZ/yPt/MgDEy', 'Subscriber', 'Abstract (9).jpg'),
(79, 'IBANDA', 'KRAM', 'acram', 'acram@yahoo.com', '$2y$12$pawMawuB4EObm.aqvNIBz.arDC40mb.lBPAYGhMe7Ti7PQW0nLtDu', 'Admin', ''),
(80, '', '', 'male', 'male@me.com', '$2y$12$hE7adDS3/B0FltiOyd.IkuRONJqyodLyXHKHkMg3Oe8Wm3mNXb1XO', 'Subscriber', ''),
(81, '', '', 'acram', 'acram@gmail.com', '$2y$12$iKZzk7iQ0AmpKyJSphGopuqDKFDWP5nfRbgslHkWHYjDHsJGGSHYW', 'Subscriber', ''),
(82, '', '', 'acram', 'ddd@gmail.com', '$2y$12$0Xe9a2h.ufVR4mbLGKMKvOK/oT04YjH7CsE4NTehCPy1T0zTYzhDS', 'Subscriber', ''),
(83, '', '', 'emma', 'emma@gmail.com', '$2y$12$KsSzNitWhxCHk5bIjMy88.xFRLj7hnmOpH5hhcIcH4nooQ8R77.U.', 'Subscriber', ''),
(84, '', '', 'emma', 'emma@gmail.com', '$2y$12$azRmxM2YpkC1GOdpF26lve1LhROhcoDL96Uts9PR7TF/zqZEynlpa', 'Subscriber', ''),
(85, '', '', 'tool', 'tool@gmail.com', '$2y$12$sbyGVJIoQ1B58klrjjGgZ.Cea3wpAiswrMuI/BP494XdJdVBuh6Y6', 'Admin', 'mn.jpg'),
(86, '', '', 'dolop', 'dolop@gmail.com', '$2y$12$cDlqodXZg9n39FUqdBAVcuCbiXyDKOG9dzCu2807PfMG33tAEwYrS', 'Admin', 'IMG_20180311_135649.jpg'),
(87, 'sdfghjk', '', '', 'bob@bryanaustin.com', '$2y$10$hCOy1WK7rOjI4kD.zn3JkOG2BwMLheJQpaEirfkrG37pYIkFpUT.u', '', ''),
(88, 'Bryan Austin de French', 'IUREND', 'MAASER', 'bryanaustin@bryan.com', '$2y$10$ovTq/s9UY9JOQqmPDKUshuCIGNVpVf40k7keWlbQZS8PBMaDOGGj.', 'Admin', 'Abstract (13).jpg'),
(89, 'Bryan', 'Austin', 'de French', 'bryanaustin@bryan.com', '$2y$10$dLkOq1hkNTLrHRuEGKQCGOX1oK0uV1G6dCAY/mbADQ4FW.eoP3ore', 'Admin', 'jjj.jpg'),
(90, 'Bryan Austin de French', 'Kulaba', 'trend', 'bryanaustin@bryan.com', '$2y$10$TmcyyLRlXyeVklQuGXUFoucT.0F8303ZHL38w6ay.T5.ppQEX1jee', 'Subscriber', 'IMG_20180215_134809 - Copy.jpg'),
(108, 'USERNAME', 'USER', 'drek', 'brrr@free.com', '$2y$10$J8Z8lFOv3A26MHMQt36FEuBMG6MvCnvXctkuFMIpn4Mgy96Y15kaa', 'Subscriber', 'IMG_20180215_135849.jpg'),
(109, 'NUTRITION', 'PROPER', 'try', 'try@gmail.com', '$2y$12$szp2OovYLDL69baY93btYehDcorMvIEqhLrUk2QCfda7bVF95eepW', 'Subscriber', 'IMG_20180215_134822.jpg'),
(110, '', '', 'groove', 'mukoova183@gmail.com', '$2y$12$uDyqNFsxzmCyOKaSPJP3Ourv9w9cfv0cx1RVib/oS1X6xmiXruy6W', 'Subscriber', ''),
(111, '', '', 'akilam', 'juma@gmail.com', '$2y$12$UzPwkPGmtRv0sdV8C0JaWOatc2UcavCNCA.VIkZ8xISi8ISP3nL2a', 'Subscriber', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_users`
--
ALTER TABLE `online_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`StdNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `online_users`
--
ALTER TABLE `online_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `StdNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 11:09 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `get_me_desk`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `website` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `glassdoor` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `location` varchar(500) NOT NULL,
  `establishedin` date NOT NULL,
  `employee_size` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `primary_contact_person_designation` varchar(50) NOT NULL,
  `primary_contact_person_name` varchar(50) NOT NULL,
  `primary_contact_person_number` varchar(15) NOT NULL,
  `primary_contact_person_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `company_name`, `description`, `website`, `linkedin`, `facebook`, `instagram`, `twitter`, `glassdoor`, `logo`, `location`, `establishedin`, `employee_size`, `email`, `phone`, `primary_contact_person_designation`, `primary_contact_person_name`, `primary_contact_person_number`, `primary_contact_person_email`) VALUES
(1, 'Scalefull Technoligies', 'At ScaleFull Technologies, We Specialize In Crafting Exceptional Digital Experiences That Drive Your Business Growth. With Our Expertise In Website Development, Web Application Design, E-Commerce Solutions, Mobile Application Development And Many More, We Are Dedicated To Delivering High-Quality Solutions That Resonate With Your Audience.', 'https://scalefull.com/', 'https://in.linkedin.com/company/scalefull', 'https://in.linkedin.com/company/scalefull', 'https://in.linkedin.com/company/scalefull', 'https://in.linkedin.com/company/scalefull', 'https://in.linkedin.com/company/scalefull', 'scalefull.jpg', 'https://maps.app.goo.gl/FLBjZ7LoawVTkT8c6', '2012-11-15', 500, 'scalefull@gmail.com', '8329665740', 'HR', 'Sarang Joshi', '8329665740', 'Sarang.joshi@gmail.com'),
(2, 'Nova Corporations', 'Nova Corporations', 'www.novacorps.com', 'www.novacorps.linkedin.com', 'www.novacorps.facebook.com', 'www.novacorps.instagram.com', 'www.novacorps.twitter.com', 'www.novacorps.glassdoor.com', 'flower.png', 'Mars', '2023-11-09', 500, 'nova@gmail.com', '123456789', 'HR', 'Amitabh bacchan', '99999999', 'haye@gmail.com'),
(3, 'sdfds', 'dfds', 'sdfds', 'dsf', 'sdfd', 'sdfd', 'df', 'dsfds', 'wallpaperflare.com_wallpaper (1).jpg', 'sdf', '2023-11-08', 33, 'test@gmail.com', '55555555', 'HR', 'Mahesh Bhatt', '666666666', 'www.mb.test.com'),
(4, 'fsdfss', '  sfdsfdd', 'fdsfs', 'sdfdsf', 'fsdf', 'sfsdfff', 'sdfs', 'sdfds', '', 'Pune', '2023-12-01', 500, 'as@gamil.com', '43434343', 'HR', 'sdfd', '5555555', 'as@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `company_id` varchar(50) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `min_experience` int(3) NOT NULL,
  `max_experience` int(3) NOT NULL,
  `location` varchar(50) NOT NULL,
  `job_type` varchar(50) NOT NULL,
  `no_of_openings` int(10) NOT NULL,
  `date_posted` date NOT NULL,
  `min_salary` int(10) NOT NULL,
  `max_salary` int(10) NOT NULL,
  `role` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `notice_period` int(11) NOT NULL,
  `deadline` varchar(50) NOT NULL,
  `short_desc` varchar(500) NOT NULL,
  `skills` varchar(500) NOT NULL,
  `work_mode` varchar(50) NOT NULL,
  `company_logo` varchar(100) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `description`, `company_id`, `qualification`, `min_experience`, `max_experience`, `location`, `job_type`, `no_of_openings`, `date_posted`, `min_salary`, `max_salary`, `role`, `category`, `gender`, `notice_period`, `deadline`, `short_desc`, `skills`, `work_mode`, `company_logo`, `is_deleted`) VALUES
(1, 'MERN Stacks', 'MERN Stack developers are primarily in charge of developing and designing front end web architecture and building interactive consumer data from multiple systems. They define code architecture decisions to support high-performance products.', '1', 'Under Graduate', 0, 5, 'Pune', 'Internship', 8, '2023-11-02', 3, 8, 'Developer', 'Development', 'Any', 30, '2023-11-20', '- Adept with ReactJs or Angular.\r\n\r\n- Good to have knowledge of hooks.\r\n\r\n- Experience in NodeJS, PHP or Python with any of its respective framework.\r\n\r\n- Mastery of object-oriented JavaScript, TypeScript, ES6, HTML\r\n\r\n- Experience with state-management library such as Redux, Flux, or anything similar', 'React, mongodb, node, express, html, css, javascript', 'On-site', NULL, NULL),
(2, 'MEAN Stack', 'MEAN Stack', '2', 'Graduate', 2, 4, 'Mars', 'Full Time', 10, '0000-00-00', 1000, 5000, 'Developer', 'Web Developer', 'Any', 3, '2023-11-09', 'Ability to make interactive web pages', 'MongoDB,ExpressJs,AngularJs,NodeJs', 'On Site', 'flower.png', NULL),
(3, 'Test', '<p>Test</p>', '3', 'Graduate', 1, 2, 'Pune', 'Full Time', 3, '0000-00-00', 10000, 50000, 'Developer', 'Consultancy', 'Any', 3, '2023-11-08', 'Test', 'MongoDB, ExpressJs, AngularJs, NodeJs ,React ', 'Remote', 'Swaraj.jpg', NULL),
(4, 'Test', '<p>Test</p>', '4', 'Under Graduate', 1, 2, 'Pune', 'Internship', 3, '0000-00-00', 10000, 50000, 'Developer', 'Development', 'Male', 3, '2023-11-08', '', 'MongoDB, ExpressJs, AngularJs, NodeJs ,React ', 'On-site', NULL, NULL),
(5, 'Full Stack Developer', '\r\nA full stack developer is like a coding chameleon—they\'re fluent in both front-end and back-end technologies, allowing them to navigate the entire web development landscape. From crafting user interfaces and enhancing user experiences on the client side to managing servers and databases on the server side, they\'re the Swiss Army knives of the digital world. Think of them as the bridge builders of the internet, connecting the dots between what users see and what goes on behind the scenes.', '2', 'BE Computer Science', 4, 11, 'Pune', 'Full Time', 20, '0000-00-00', 2, 8, 'Developer', 'Development', 'Any', 0, '2023-11-30', '\r\nA full stack developer is a digital architect who masters both front-end (what you see) and back-end (what makes it work) technologies, ensuring seamless and dynamic web experiences. They\'re the wizards who bring websites and applications to life from start to finish.', 'Javascript, Html, Css, Bootstrap, MongoDB, NodeJS', 'Hybrid', 'flower-color.png', NULL),
(6, 'JavaScript Developer', 'A JavaScript developer is responsible for implementing the front-end logic that defines the behavior of the visual elements of a web application. A JavaScript developer is also responsible for connecting this with the services that reside on the back-end.', '2', 'BE Computer Science', 2, 6, 'Pune', 'Full Time', 20, '0000-00-00', 2, 3, 'Developer', 'Development', 'Any', 15, '2023-11-30', 'A JavaScript developer is responsible for implementing the front-end logic that defines the behavior of the visual elements of a web application. A JavaScript developer is also responsible for connecting this with the services that reside on the back-end.', 'Javascript, Html, Css', 'On-site', '', NULL),
(7, 'Python Developer', 'abcdefghi', '1', 'Under Graduate', 1, 8, 'Bangalore', 'Internship', 3, '0000-00-00', 3, 5, 'Developer', 'Development', 'Any', 0, '2023-11-30', 'adasdasd', 'Css, Angular, Python, Bootstrap', 'On-site', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'admin', 'admin@admin.com', 'admin', 'admin'),
(2, 'Shantanu', 'shantanu@gmail.com', 'shantanu', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

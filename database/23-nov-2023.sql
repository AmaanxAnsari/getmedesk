-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2023 at 02:59 PM
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
  `primary_contact_person_email` varchar(50) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_date` varchar(255) NOT NULL,
  `created_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `company_name`, `description`, `website`, `linkedin`, `facebook`, `instagram`, `twitter`, `glassdoor`, `logo`, `location`, `establishedin`, `employee_size`, `email`, `phone`, `primary_contact_person_designation`, `primary_contact_person_name`, `primary_contact_person_number`, `primary_contact_person_email`, `created_by`, `created_date`, `created_time`) VALUES
(1, 'Scalefull Technologies', 'At ScaleFull Technologies, We Specialize In Crafting Exceptional Digital Experiences That Drive Your Business Growth. With Our Expertise In Website Development, Web Application Design, E-Commerce Solutions, Mobile Application Development And Many More, We Are Dedicated To Delivering High-Quality Solutions That Resonate With Your Audience.', 'https://scalefull.com/', 'https://in.linkedin.com/company/scalefull', 'https://in.linkedin.com/company/scalefull', 'https://in.linkedin.com/company/scalefull', 'https://in.linkedin.com/company/scalefull', 'https://in.linkedin.com/company/scalefull', 'scalefull.jpg', 'https://maps.app.goo.gl/FLBjZ7LoawVTkT8c6', '2012-11-15', 500, 'scalefull@gmail.com', '8329665740', 'HR', 'Sarang Joshi', '8329665740', 'Sarang.joshi@gmail.com', '', '', ''),
(2, 'Nova Corporations', 'Nova Corporations', 'www.novacorps.com', 'www.novacorps.linkedin.com', 'www.novacorps.facebook.com', 'www.novacorps.instagram.com', 'www.novacorps.twitter.com', 'www.novacorps.glassdoor.com', 'flower.png', 'Mars', '2023-11-09', 500, 'nova@gmail.com', '123456789', 'HR', 'Amitabh bacchan', '99999999', 'haye@gmail.com', '', '', ''),
(3, 'sdfds', 'dfds', 'sdfds', 'dsf', 'sdfd', 'sdfd', 'df', 'dsfds', 'wallpaperflare.com_wallpaper (1).jpg', 'sdf', '2023-11-08', 33, 'test@gmail.com', '55555555', 'HR', 'Mahesh Bhatt', '666666666', 'www.mb.test.com', '', '', ''),
(4, 'fsdfss', '  sfdsfdd', 'fdsfs', 'sdfdsf', 'fsdf', 'sfsdfff', 'sdfs', 'sdfds', '', 'Pune', '2023-12-01', 500, 'as@gamil.com', '43434343', 'HR', 'sdfd', '5555555', 'as@gmail.com', '', '', ''),
(14, 'Wisdom Sprouts', 'Wisdom Sprouts', 'www.wisdomsprouts.in', 'www.wisdomsprouts.linkedin.com', 'www.wisdomsprouts.facebook.com', 'www.wisdomsprouts.instagram.com', 'www.wisdomsprouts.twitter.com', 'www.wisdomsprouts.glassdoor.com', '655f023e8744bLogoWS.png', 'Hinjewadi', '2023-11-23', 3, 'wisdomsprouts@gmail.com', '899569855', 'MD', 'Swapneel Petkar', '9898989898', 'swapneel@gmail.com', '1', '23-11-2023', '01:11:50');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
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
  `deadline` date NOT NULL,
  `short_desc` text NOT NULL,
  `skills` varchar(500) NOT NULL,
  `work_mode` varchar(50) NOT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `slug` varchar(500) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `description`, `company_id`, `qualification`, `min_experience`, `max_experience`, `location`, `job_type`, `no_of_openings`, `date_posted`, `min_salary`, `max_salary`, `role`, `category`, `gender`, `notice_period`, `deadline`, `short_desc`, `skills`, `work_mode`, `is_deleted`, `slug`, `created_date`) VALUES
(1, 'MERN Stacks', 'MERN Stack developers are primarily in charge of developing and designing front end web architecture and building interactive consumer data from multiple systems. They define code architecture decisions to support high-performance products.', '1', 'Under Graduate', 0, 5, 'Bangalore', 'Internship', 8, '2023-11-02', 3, 8, 'Developer', 'Development', 'Any', 30, '2023-11-20', '- Adept with ReactJs or Angular.\r\n\r\n- Good to have knowledge of hooks.\r\n\r\n- Experience in NodeJS, PHP or Python with any of its respective framework.\r\n\r\n- Mastery of object-oriented JavaScript, TypeScript, ES6, HTML\r\n\r\n- Experience with state-management library such as Redux, Flux, or anything similar', 'React, mongodb, node, express, html, css, javascript', 'On-site', NULL, 'mern-stacks-23112023192755', '2023-11-23 19:27:55'),
(2, 'MEAN Stack', 'MEAN Stack', '1', 'Graduate', 2, 4, 'Bangalore', 'Internship', 10, '0000-00-00', 1000, 5000, 'Developer', 'Development', 'Any', 3, '2023-11-09', 'Ability to make interactive web pages', 'MongoDB,ExpressJs,AngularJs,NodeJs', 'On-site', NULL, 'mean-stack23112023180800', '2023-11-23 18:08:00'),
(5, 'Full Stack Developer', 'A full stack developer is like a coding chameleon—they\'re fluent in both front-end and back-end technologies, allowing them to navigate the entire web development landscape. From crafting user interfaces and enhancing user experiences on the client side to managing servers and databases on the server side, they\'re the Swiss Army knives of the digital world. Think of them as the bridge builders of the internet, connecting the dots between what users see and what goes on behind the scenes.', '1', 'BE Computer Science', 4, 11, 'Bangalore', 'Internship', 20, '0000-00-00', 2, 8, 'Developer', 'Development', 'Any', 0, '2023-11-30', 'A full stack developer is a digital architect who masters both front-end (what you see) and back-end (what makes it work) technologies, ensuring seamless and dynamic web experiences. They\'re the wizards who bring websites and applications to life from start to finish.', 'Javascript, Html, Css, Bootstrap, MongoDB, NodeJS', 'On-site', NULL, 'full-stack-developer23112023180808', '2023-11-23 18:08:08'),
(6, 'JavaScript Developer', 'A JavaScript developer is responsible for implementing the front-end logic that defines the behavior of the visual elements of a web application. A JavaScript developer is also responsible for connecting this with the services that reside on the back-end.', '1', 'BE Computer Science', 2, 6, 'Bangalore', 'Internship', 20, '0000-00-00', 2, 3, 'Developer', 'Development', 'Any', 15, '2023-11-30', 'A JavaScript developer is responsible for implementing the front-end logic that defines the behavior of the visual elements of a web application. A JavaScript developer is also responsible for connecting this with the services that reside on the back-end.', 'Javascript, Html, Css, jklm', 'On-site', NULL, 'javascript-developer23112023180822', '2023-11-23 18:08:22'),
(7, 'Python Developer', 'abcdefghi', '1', 'Under Graduate', 1, 8, 'Bangalore', 'Internship', 3, '0000-00-00', 3, 5, 'Developer', 'Development', 'Any', 30, '2023-11-30', 'adasdasd', 'Bootstrap', 'On-site', NULL, 'python-developer23112023180833', '2023-11-23 18:08:33'),
(12, 'Angular Developer', '<p>Angular Developer<br></p>', '1', 'BE Computer Science', 1, 4, 'Bangalore', 'Internship', 10, '0000-00-00', 2, 9, 'Developer', 'Development', 'Any', 15, '2023-11-30', '<p>Angular Developer<br></p>', 'Javascript, Html', 'On-site', NULL, 'angular-developer23112023181201', '2023-11-23 18:12:01'),
(13, 'React Developer', '<p>React Developer<br></p>', '1', 'BE Computer Science', 2, 4, 'Bangalore', 'Internship', 2, '0000-00-00', 3, 6, 'Developer', 'Development', 'Any', 30, '2023-12-01', '<p>React Developer<br></p>', 'Bootstrap, MongoDB, NodeJS, React', 'On-site', NULL, 'react-developer23112023181210', '2023-11-23 18:12:10'),
(14, 'Android Developer', '<p>Android Developer<br></p>', '1', 'BE Computer Science', 1, 2, 'Bangalore', 'Internship', 2, '0000-00-00', 2, 3, 'Developer', 'Development', 'Any', 0, '2023-11-24', '<p>Android Developer<br></p>', 'Flutter', 'On-site', NULL, 'android-developer23112023180514', '2023-11-23 18:05:14'),
(15, 'UI/UX Developer', '<p>UI/UX Developer<br></p>', '1', 'BE Computer Science', 2, 6, 'Bangalore', 'Internship', 1, '0000-00-00', 5, 10, 'Developer', 'Development', 'Any', 15, '2023-11-25', '<p>UI/UX Developer<br></p>', 'Flutter, Figma, React', 'On-site', NULL, 'ui-ux-developer-23112023192820', '2023-11-23 19:28:20'),
(16, 'IOS Developer', '<h3 style=\"line-height: 42px; color: rgb(10, 10, 10); font-family: Poppins, sans-serif; margin-right: 0px; margin-left: 0px; margin-bottom: 15px !important; font-size: 24px !important;\"><span style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\"><b>Job Description: </b></span></h3><h3 style=\"line-height: 42px; color: rgb(10, 10, 10); font-family: Poppins, sans-serif; margin-right: 0px; margin-left: 0px; margin-bottom: 15px !important; font-size: 24px !important;\"><span style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\">We are seeking a skilled and passionate iOS Developer to join our dynamic team. As an iOS Developer, you will be responsible for designing, developing, and maintaining high-quality mobile applications for iOS devices. You will collaborate with cross-functional teams to define, design, and ship new features, ensuring the performance, quality, and responsiveness of the applications meet our standards.</span></h3><h3 style=\"line-height: 42px; color: rgb(10, 10, 10); font-family: Poppins, sans-serif; margin-right: 0px; margin-left: 0px; margin-bottom: 15px !important; font-size: 24px !important;\"><span style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\"><b>Responsibilities:</b></span><br style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\"><span style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\">Mobile App Development:</span><br style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\"><span style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\">1. Design and build advanced applications for the iOS platform.</span><br style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\"><span style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\">Collaborate with cross-functional teams to define, design, and ship new features.</span><br style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\"><span style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\">Ensure the performance, quality, and responsiveness of applications.</span><br style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\"><span style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\">Code Review and Optimization:</span><br style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\"><span style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\">2. Perform code reviews to ensure the codebase is efficient, maintainable, and adheres to coding standards.</span><br style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\"><span style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\">Optimize application performance, continually identifying and correcting bottlenecks.</span><br style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\"><span style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\">Problem Solving:</span><br style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\"><span style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\">3. Troubleshoot, debug, and optimize application code to resolve issues.</span><br style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\"><span style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\">Stay up-to-date with the latest industry trends and technologies to propose innovative solutions.</span><br style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\"><span style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\">Collaboration:</span><br style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\"><span style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\">4. Collaborate with Product Managers, Designers, and other Developers to deliver high-quality software solutions.</span><br style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\"><span style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\">Continuous Learning:</span><br style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\"><span style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\">5. Continuously explore and evaluate new technologies to enhance the functionality and performance of applications.</span><br style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\"><span style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\">Participate in knowledge-sharing sessions and mentor junior team members.</span><br style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\"><span style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\">Competencies:</span><br style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\"><br style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\"><span style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\">iOS Development Expertise:</span><br style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\"><span style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\">1. Proficient in Swift and Objective-C.</span><br style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\"><span style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\">Solid understanding of the iOS development lifecycle and Apple’s design principles.</span><br style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\"><span style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\">UI/UX Design:</span><br style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\"><span style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\">2. Ability to collaborate with designers to implement visually appealing and intuitive user interfaces.</span><br style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\"><span style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\">Problem-Solving Skills:</span><br style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\"><span style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\">3. Strong analytical and problem-solving abilities to troubleshoot and resolve complex issues.</span><br style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\"><span style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\">Team Collaboration:</span><br style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\"><span style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\">4. Excellent communication skills and ability to work effectively in a collaborative team environment.</span><br style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\"><span style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\">Adaptability:</span><br style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\"><span style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\">5. Willingness to adapt to evolving technologies and learn new skills as needed.</span><br style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\"><span style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\">Attention to Detail:</span><br style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\"><span style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\">6. Meticulous attention to detail to ensure the delivery of high-quality, bug-free applications.</span><br style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\"><span style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\">Continuous Improvement:</span><br style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\"><span style=\"color: rgb(0, 0, 0); font-family: lato, \"helvetica neue\", Helvetica, Arial, sans-serif; font-size: 15px;\">7. Proactive in seeking opportunities for process improvement and personal development.</span><br></h3>', '1', 'BE Computer Science', 3, 7, 'Bangalore', 'Internship', 1, '0000-00-00', 4, 7, 'Developer', 'Development', 'Any', 0, '2023-11-27', '<p>IOS Developer<br></p>', 'Swift', 'On-site', NULL, 'ios-developer23112023181219', '2023-11-23 18:12:19'),
(17, 'jOS Developer', '<p>dfdsfdf</p><p><b>sfdsfsdf</b></p><ul><li>sfdsf</li><li>sdfsdf</li></ul>', '1', '', 0, 0, 'Bangalore', 'Internship', 0, '0000-00-00', 0, 0, 'Developer', 'Development', 'Any', 0, '0000-00-00', '', 'Javascript', 'On-site', NULL, 'jos-developer23112023181247', '2023-11-23 18:12:47'),
(18, 'Android Developer', '', '1', '', 0, 0, 'Bangalore', 'Internship', 0, '0000-00-00', 0, 0, 'Developer', 'Development', 'Any', 0, '2023-11-23', '', 'Html', 'On-site', NULL, 'android-developer23112023180443', '2023-11-23 18:04:43');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

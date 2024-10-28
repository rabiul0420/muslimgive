-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 02, 2020 at 04:28 PM
-- Server version: 10.2.27-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `engineers_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `ic_application_course`
--

CREATE TABLE `ic_application_course` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `branch_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `institute` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comments` text COLLATE utf8_unicode_ci NOT NULL,
  `training_id` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ic_application_course`
--

INSERT INTO `ic_application_course` (`id`, `name`, `phone`, `email`, `branch_id`, `institute`, `comments`, `training_id`, `updated_at`, `created_at`) VALUES
(1, 'rabiul islam', '0166789', 'rabiul0420@gmail.com', 'safs', 'sdgdsf', 'This for test', 3, '2019-01-18 14:11:33', '2019-01-18 14:11:33'),
(2, 'Hai Sarkar', '017874556678', 'rabiul.ruet04@gmail.com', 'Uttara', 'sdgdsf', 'zsfsdg', 5, '2019-01-18 16:30:18', '2019-01-18 16:30:18'),
(3, 'Md Hafizur', '01731376671', 'pmtcorporate@gmail.com', 'dhaka', 'dsd', 'sdfa', 4, '2019-03-02 18:16:32', '2019-03-02 18:16:32');

-- --------------------------------------------------------

--
-- Table structure for table `ic_branch`
--

CREATE TABLE `ic_branch` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` varchar(45) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ic_branch`
--

INSERT INTO `ic_branch` (`id`, `name`, `address`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Farmgate', 'Dhaka ok', 'Active', '2019-03-10 07:02:27', '2019-03-10 07:05:38'),
(2, 'Dhanmondi', 'Dhaka', 'Active', '2019-03-10 07:06:08', '2019-03-10 07:06:08');

-- --------------------------------------------------------

--
-- Table structure for table `ic_cv_academic_summery`
--

CREATE TABLE `ic_cv_academic_summery` (
  `id` int(11) NOT NULL,
  `result` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `education_level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `exam_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passing_year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `concentration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `board` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `instute_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `achievement` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ic_cv_academic_summery`
--

INSERT INTO `ic_cv_academic_summery` (`id`, `result`, `education_level`, `exam_title`, `passing_year`, `concentration`, `duration`, `board`, `instute_name`, `achievement`, `user_id`, `updated_at`, `created_at`) VALUES
(1, '45', 'Higher Secondary', '', '2011', 'eetert', '7 days', 'Dhaka', 'ti7y6', '1st cls', 2, '2020-01-13 18:30:45', '2019-06-15 01:56:43'),
(2, '45', 'Bachelor/Honors', '', '2011', 'eetert', '7 days', 'Dhaka', 'ti7y6', '1st cls', 2, '2019-06-15 01:59:24', '2019-06-15 01:58:23');

-- --------------------------------------------------------

--
-- Table structure for table `ic_cv_basic_info`
--

CREATE TABLE `ic_cv_basic_info` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mother_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mstatus` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `present_add` text COLLATE utf8_unicode_ci NOT NULL,
  `permanent_add` text COLLATE utf8_unicode_ci NOT NULL,
  `national_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passport_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passport_issue_date` date NOT NULL,
  `current_location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_h` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_off` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `categories` text COLLATE utf8_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `objective` text COLLATE utf8_unicode_ci NOT NULL,
  `present_salary` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `expected_salary` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `job_level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `job_nature` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `career_summery` text COLLATE utf8_unicode_ci NOT NULL,
  `special_qualification` text COLLATE utf8_unicode_ci NOT NULL,
  `skills` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `skills_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `skills_activities` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photograph` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ic_cv_basic_info`
--

INSERT INTO `ic_cv_basic_info` (`id`, `first_name`, `last_name`, `father_name`, `mother_name`, `dob`, `gender`, `religion`, `mstatus`, `nationality`, `present_add`, `permanent_add`, `national_id`, `passport_no`, `passport_issue_date`, `current_location`, `phone_h`, `phone_off`, `email2`, `mobile`, `email`, `category_id`, `categories`, `user_type`, `objective`, `present_salary`, `expected_salary`, `job_level`, `job_nature`, `career_summery`, `special_qualification`, `skills`, `skills_description`, `skills_activities`, `keywords`, `photograph`, `cv`, `user_id`, `active`, `slug`, `updated_at`, `created_at`) VALUES
(26, 'abdul ok', 'islam', 'ahmed', 's kbir', '0000-00-00', 'Male', 'islam', 'Married', 'United Kingdom', 'house182/road25, Pallabi, Dhaka', 'gmmmm', '34555', '23444', '0000-00-00', '', '7463394459', '07463394459', 'steer', '7463394459', 'language_park@yahoo.com', 0, '', '', 'hjjj  ok', '40000', '50000', 'Entry', 'Full Time', '', '', '', '', '', '', '1560127044.png', '', 2, 1, '', '2019-07-16 09:14:36', '2019-03-27 00:41:31');

-- --------------------------------------------------------

--
-- Table structure for table `ic_cv_exp_info`
--

CREATE TABLE `ic_cv_exp_info` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `responsibilities` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_business` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `experiences_area` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `currently_working` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ic_cv_exp_info`
--

INSERT INTO `ic_cv_exp_info` (`id`, `company_name`, `responsibilities`, `company_business`, `company_location`, `designation`, `department`, `start_date`, `end_date`, `experiences_area`, `currently_working`, `user_id`, `updated_at`, `created_at`) VALUES
(46, 'Dk Technology', 'Manager hmm', 'uiuiu', 'Mirpur 10', 'Software developer', 'Accounts', '0000-00-00', '0000-00-00', '3 years', '', 2, '2019-06-18 16:24:04', '2019-04-26 14:17:23'),
(47, 'amar dwsh', 'Maneger', 'uiuiu', 'Mirpur 10', 'Software developer', 'Accounts', NULL, NULL, '4 Yesrs', NULL, 2, '2019-06-18 16:33:46', '2019-06-18 16:33:46');

-- --------------------------------------------------------

--
-- Table structure for table `ic_cv_language_summery`
--

CREATE TABLE `ic_cv_language_summery` (
  `id` int(11) NOT NULL,
  `language` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reading` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `writing` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `speaking` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ic_cv_language_summery`
--

INSERT INTO `ic_cv_language_summery` (`id`, `language`, `reading`, `writing`, `speaking`, `user_id`, `updated_at`, `created_at`) VALUES
(3, 'bangla', 'High', 'High', 'High', 2, '2019-05-06 23:47:16', '2019-05-06 00:05:47'),
(4, 'English', 'Medium', 'Medium', 'Medium', 2, '2019-06-11 17:07:58', '2019-06-11 17:07:58');

-- --------------------------------------------------------

--
-- Table structure for table `ic_cv_professional_summery`
--

CREATE TABLE `ic_cv_professional_summery` (
  `id` int(11) NOT NULL,
  `certification` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `institute` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ic_cv_professional_summery`
--

INSERT INTO `ic_cv_professional_summery` (`id`, `certification`, `location`, `institute`, `start_date`, `end_date`, `user_id`, `updated_at`, `created_at`) VALUES
(1, 'hkhkjjhk', '', '', '0000-00-00', '0000-00-00', 2, '2019-04-28 00:54:53', '2019-04-28 00:54:53'),
(6, 'Okyhj', '', '', '0000-00-00', '0000-00-00', 2, '2019-06-13 17:04:22', '2019-06-13 17:04:22'),
(7, 'ghhkjkj', '', '', '0000-00-00', '0000-00-00', 2, '2019-06-13 17:12:00', '2019-06-13 17:09:45'),
(8, 'hjjjjjjj', 'mirpur', 'Bangla college', '0000-00-00', '0000-00-00', 2, '2019-06-13 17:19:35', '2019-06-13 17:10:30');

-- --------------------------------------------------------

--
-- Table structure for table `ic_cv_reference_summery`
--

CREATE TABLE `ic_cv_reference_summery` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `organization` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_off` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_res` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `relation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ic_cv_reference_summery`
--

INSERT INTO `ic_cv_reference_summery` (`id`, `name`, `organization`, `designation`, `phone_off`, `mobile`, `phone_res`, `email`, `address`, `relation`, `user_id`, `updated_at`, `created_at`) VALUES
(1, 'dxv ki', 'Dk teck', 'wetre', '07463394459', '7463394459', '07463394459', 'rabiul.ruet04@gmail.com', 'htryret', 'Family Friend', 2, '2019-05-07 00:15:37', '2019-05-07 00:03:10');

-- --------------------------------------------------------

--
-- Table structure for table `ic_cv_training_summery`
--

CREATE TABLE `ic_cv_training_summery` (
  `id` int(11) NOT NULL,
  `training_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `topics_covered` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `training_year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `institute` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ic_cv_training_summery`
--

INSERT INTO `ic_cv_training_summery` (`id`, `training_title`, `country`, `topics_covered`, `training_year`, `institute`, `duration`, `location`, `user_id`, `updated_at`, `created_at`) VALUES
(1, 'Java Programming', 'Bangladesh', 'Java,Data Base Etc', '2017', 'Binnary Care', '12 month', 'GEC', 8, '2019-04-28 00:58:11', '2019-04-28 00:58:11'),
(2, 'Training 1', 'Bangladesh', 'font', '2018', 'imrpur academy', '7 days', 'mirpur', 2, '2019-06-14 05:28:46', '2019-04-28 00:58:18');

-- --------------------------------------------------------

--
-- Table structure for table `ic_districts`
--

CREATE TABLE `ic_districts` (
  `id` int(2) UNSIGNED NOT NULL,
  `division_id` int(2) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `bn_name` varchar(50) NOT NULL,
  `lat` double NOT NULL,
  `lon` double NOT NULL,
  `website` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ic_districts`
--

INSERT INTO `ic_districts` (`id`, `division_id`, `name`, `bn_name`, `lat`, `lon`, `website`) VALUES
(1, 3, 'Dhaka', 'ঢাকা', 23.7115253, 90.4111451, 'www.dhaka.gov.bd'),
(2, 3, 'Faridpur', 'ফরিদপুর', 23.6070822, 89.8429406, 'www.faridpur.gov.bd'),
(3, 3, 'Gazipur', 'গাজীপুর', 24.0022858, 90.4264283, 'www.gazipur.gov.bd'),
(4, 3, 'Gopalganj', 'গোপালগঞ্জ', 23.0050857, 89.8266059, 'www.gopalganj.gov.bd'),
(5, 8, 'Jamalpur', 'জামালপুর', 24.937533, 89.937775, 'www.jamalpur.gov.bd'),
(6, 3, 'Kishoreganj', 'কিশোরগঞ্জ', 24.444937, 90.776575, 'www.kishoreganj.gov.bd'),
(7, 3, 'Madaripur', 'মাদারীপুর', 23.164102, 90.1896805, 'www.madaripur.gov.bd'),
(8, 3, 'Manikganj', 'মানিকগঞ্জ', 0, 0, 'www.manikganj.gov.bd'),
(9, 3, 'Munshiganj', 'মুন্সিগঞ্জ', 0, 0, 'www.munshiganj.gov.bd'),
(10, 8, 'Mymensingh', 'ময়মনসিংহ', 0, 0, 'www.mymensingh.gov.bd'),
(11, 3, 'Narayanganj', 'নারায়াণগঞ্জ', 23.63366, 90.496482, 'www.narayanganj.gov.bd'),
(12, 3, 'Narsingdi', 'নরসিংদী', 23.932233, 90.71541, 'www.narsingdi.gov.bd'),
(13, 8, 'Netrokona', 'নেত্রকোণা', 24.870955, 90.727887, 'www.netrokona.gov.bd'),
(14, 3, 'Rajbari', 'রাজবাড়ি', 23.7574305, 89.6444665, 'www.rajbari.gov.bd'),
(15, 3, 'Shariatpur', 'শরীয়তপুর', 0, 0, 'www.shariatpur.gov.bd'),
(16, 8, 'Sherpur', 'শেরপুর', 25.0204933, 90.0152966, 'www.sherpur.gov.bd'),
(17, 3, 'Tangail', 'টাঙ্গাইল', 0, 0, 'www.tangail.gov.bd'),
(18, 5, 'Bogura', 'বগুড়া', 24.8465228, 89.377755, 'www.bogra.gov.bd'),
(19, 5, 'Joypurhat', 'জয়পুরহাট', 0, 0, 'www.joypurhat.gov.bd'),
(20, 5, 'Naogaon', 'নওগাঁ', 0, 0, 'www.naogaon.gov.bd'),
(21, 5, 'Natore', 'নাটোর', 24.420556, 89.000282, 'www.natore.gov.bd'),
(22, 5, 'Nawabganj', 'নবাবগঞ্জ', 24.5965034, 88.2775122, 'www.chapainawabganj.gov.bd'),
(23, 5, 'Pabna', 'পাবনা', 23.998524, 89.233645, 'www.pabna.gov.bd'),
(24, 5, 'Rajshahi', 'রাজশাহী', 0, 0, 'www.rajshahi.gov.bd'),
(25, 5, 'Sirajgonj', 'সিরাজগঞ্জ', 24.4533978, 89.7006815, 'www.sirajganj.gov.bd'),
(26, 6, 'Dinajpur', 'দিনাজপুর', 25.6217061, 88.6354504, 'www.dinajpur.gov.bd'),
(27, 6, 'Gaibandha', 'গাইবান্ধা', 25.328751, 89.528088, 'www.gaibandha.gov.bd'),
(28, 6, 'Kurigram', 'কুড়িগ্রাম', 25.805445, 89.636174, 'www.kurigram.gov.bd'),
(29, 6, 'Lalmonirhat', 'লালমনিরহাট', 0, 0, 'www.lalmonirhat.gov.bd'),
(30, 6, 'Nilphamari', 'নীলফামারী', 25.931794, 88.856006, 'www.nilphamari.gov.bd'),
(31, 6, 'Panchagarh', 'পঞ্চগড়', 26.3411, 88.5541606, 'www.panchagarh.gov.bd'),
(32, 6, 'Rangpur', 'রংপুর', 25.7558096, 89.244462, 'www.rangpur.gov.bd'),
(33, 6, 'Thakurgaon', 'ঠাকুরগাঁও', 26.0336945, 88.4616834, 'www.thakurgaon.gov.bd'),
(34, 1, 'Barguna', 'বরগুনা', 0, 0, 'www.barguna.gov.bd'),
(35, 1, 'Barishal', 'বরিশাল', 0, 0, 'www.barisal.gov.bd'),
(36, 1, 'Bhola', 'ভোলা', 22.685923, 90.648179, 'www.bhola.gov.bd'),
(37, 1, 'Jhalokati', 'ঝালকাঠি', 0, 0, 'www.jhalakathi.gov.bd'),
(38, 1, 'Patuakhali', 'পটুয়াখালী', 22.3596316, 90.3298712, 'www.patuakhali.gov.bd'),
(39, 1, 'Pirojpur', 'পিরোজপুর', 0, 0, 'www.pirojpur.gov.bd'),
(40, 2, 'Bandarban', 'বান্দরবান', 22.1953275, 92.2183773, 'www.bandarban.gov.bd'),
(41, 2, 'Brahmanbaria', 'ব্রাহ্মণবাড়িয়া', 23.9570904, 91.1119286, 'www.brahmanbaria.gov.bd'),
(42, 2, 'Chandpur', 'চাঁদপুর', 23.2332585, 90.6712912, 'www.chandpur.gov.bd'),
(43, 2, 'Chattogram', 'চট্টগ্রাম', 22.335109, 91.834073, 'www.chittagong.gov.bd'),
(44, 2, 'Cumilla', 'কুমিল্লা', 23.4682747, 91.1788135, 'www.comilla.gov.bd'),
(45, 2, 'Cox\'s Bazar', 'কক্স বাজার', 0, 0, 'www.coxsbazar.gov.bd'),
(46, 2, 'Feni', 'ফেনী', 23.023231, 91.3840844, 'www.feni.gov.bd'),
(47, 2, 'Khagrachari', 'খাগড়াছড়ি', 23.119285, 91.984663, 'www.khagrachhari.gov.bd'),
(48, 2, 'Lakshmipur', 'লক্ষ্মীপুর', 22.942477, 90.841184, 'www.lakshmipur.gov.bd'),
(49, 2, 'Noakhali', 'নোয়াখালী', 22.869563, 91.099398, 'www.noakhali.gov.bd'),
(50, 2, 'Rangamati', 'রাঙ্গামাটি', 0, 0, 'www.rangamati.gov.bd'),
(51, 7, 'Habiganj', 'হবিগঞ্জ', 24.374945, 91.41553, 'www.habiganj.gov.bd'),
(52, 7, 'Maulvibazar', 'মৌলভীবাজার', 24.482934, 91.777417, 'www.moulvibazar.gov.bd'),
(53, 7, 'Sunamganj', 'সুনামগঞ্জ', 25.0658042, 91.3950115, 'www.sunamganj.gov.bd'),
(54, 7, 'Sylhet', 'সিলেট', 24.8897956, 91.8697894, 'www.sylhet.gov.bd'),
(55, 4, 'Bagerhat', 'বাগেরহাট', 22.651568, 89.785938, 'www.bagerhat.gov.bd'),
(56, 4, 'Chuadanga', 'চুয়াডাঙ্গা', 23.6401961, 88.841841, 'www.chuadanga.gov.bd'),
(57, 4, 'Jashore', 'যশোর', 23.16643, 89.2081126, 'www.jessore.gov.bd'),
(58, 4, 'Jhenaidah', 'ঝিনাইদহ', 23.5448176, 89.1539213, 'www.jhenaidah.gov.bd'),
(59, 4, 'Khulna', 'খুলনা', 22.815774, 89.568679, 'www.khulna.gov.bd'),
(60, 4, 'Kushtia', 'কুষ্টিয়া', 23.901258, 89.120482, 'www.kushtia.gov.bd'),
(61, 4, 'Magura', 'মাগুরা', 23.487337, 89.419956, 'www.magura.gov.bd'),
(62, 4, 'Meherpur', 'মেহেরপুর', 23.762213, 88.631821, 'www.meherpur.gov.bd'),
(63, 4, 'Narail', 'নড়াইল', 23.172534, 89.512672, 'www.narail.gov.bd'),
(64, 4, 'Satkhira', 'সাতক্ষীরা', 0, 0, 'www.satkhira.gov.bd');

-- --------------------------------------------------------

--
-- Table structure for table `ic_divisions`
--

CREATE TABLE `ic_divisions` (
  `id` int(2) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `bn_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ic_divisions`
--

INSERT INTO `ic_divisions` (`id`, `name`, `bn_name`) VALUES
(1, 'Barishal', 'বরিশাল'),
(2, 'Chattogram', 'চট্টগ্রাম'),
(3, 'Dhaka', 'ঢাকা'),
(4, 'Khulna', 'খুলনা'),
(5, 'Rajshahi', 'রাজশাহী'),
(6, 'Rangpur', 'রংপুর'),
(7, 'Sylhet', 'সিলেট'),
(8, 'Mymensingh', 'ময়মনসিংহ');

-- --------------------------------------------------------

--
-- Table structure for table `ic_educational_infos`
--

CREATE TABLE `ic_educational_infos` (
  `id` int(11) NOT NULL,
  `institute_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `officer_contact_number` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `class_year` varchar(255) DEFAULT NULL,
  `branch_name` varchar(255) DEFAULT NULL,
  `course_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ic_educational_infos`
--

INSERT INTO `ic_educational_infos` (`id`, `institute_name`, `officer_contact_number`, `address`, `class_year`, `branch_name`, `course_title`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'afrwer', 'ewrewr', 'ewtert', 'wetr', 'rtyt', 'rtuy', 0, '2018-12-09 06:23:54', '2018-12-09 06:23:54'),
(2, 'Pabna Polytechnique institute', 'ewrewr', 'ertr', 'ryt', 'rtyt', 'Test', 20, '2018-12-09 06:27:18', '2018-12-09 06:38:46'),
(3, 'Pabna Polytechnique institute', 'ewrewr', 'wrew', 'wetr', 'rtyt', 'Test', 33, '2019-01-12 16:50:54', '2019-01-12 16:50:54'),
(4, 'Dhaka', '120301983', 'zxzc', 'Book', 'zxczxc', 'czdadq', 45, '2019-03-02 18:03:08', '2019-03-03 04:29:26');

-- --------------------------------------------------------

--
-- Table structure for table `ic_jobs`
--

CREATE TABLE `ic_jobs` (
  `id` int(11) NOT NULL,
  `company` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `job_location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `application_deadline` date NOT NULL,
  `vacancy` int(11) NOT NULL,
  `responsibilities` text COLLATE utf8_unicode_ci NOT NULL,
  `educational_qualification` text COLLATE utf8_unicode_ci NOT NULL,
  `job_experience` text COLLATE utf8_unicode_ci NOT NULL,
  `additional_requirements` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `salary` int(11) NOT NULL,
  `additional_benefits` text COLLATE utf8_unicode_ci NOT NULL,
  `application_procedure` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `published_date` date NOT NULL,
  `category_id` int(11) NOT NULL,
  `status` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ic_jobs`
--

INSERT INTO `ic_jobs` (`id`, `company`, `designation`, `job_location`, `application_deadline`, `vacancy`, `responsibilities`, `educational_qualification`, `job_experience`, `additional_requirements`, `salary`, `additional_benefits`, `application_procedure`, `gender`, `age`, `published_date`, `category_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'A reputed Group of Companies', 'Executive, Accounts', 'Dhaka', '2019-02-28', 5, '<ul style=\"box-sizing: border-box; margin: 0px 0px 0px 40px; padding: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif, solaimanlipi; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Preparing Daily Cash Book and Bank Book</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Preparing Monthly Receipt &amp; Payment Reports</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">NOC collect from MPA Office A/C of ISAL</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Dealing with daily corporate cash and bank transactions</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Conducting daily bank &amp; cash reconciliations and report accordingly</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">To collect and check invoices and prepare vouchers accordingly</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Assist in preparing accounts reports</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Any job assigned by Management</li>\r\n</ul>', '<ul style=\"box-sizing: border-box; margin: 0px 0px 0px 40px; padding: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif, solaimanlipi; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">Master of Business Administration (MBA) in Accounting or Finance</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">BBS (Hon\'s)/ BBA and MBS/ MBA in Accounting/Finance from reputed institution(s).</li>\r\n</ul>', '<ul style=\"box-sizing: border-box; margin: 0px 0px 0px 40px; padding: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif, solaimanlipi; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">3 to 5 year(s)</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">The applicants should have experience in the following area(s):<br style=\"box-sizing: border-box;\" />Accounts, Finance, Cash Management</li>\r\n<li style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px;\">The applicants should have experience in the following business area(s):<br style=\"box-sizing: border-box;\" />Freight forwarding, Shipping</li>\r\n</ul>', '<ul style=\"box-sizing: border-box; margin: 0px 0px 0px 40px; padding: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif, solaimanlipi; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight', 30000, '<ul style=\"box-sizing: border-box; margin: 0px 0px 0px 40px; padding: 0px; color: #333333; font-family: Arial, Helvetica, sans-serif, solaimanlipi; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">\r\n<li class=\"bn\" style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px; font-family: solaimanlipi, sans-serif !important; font-size: 15px !important;\">Unlimited Tea And cofee</li>\r\n<li class=\"bn\" style=\"box-sizing: border-box; color: #5c5c5c; line-height: 24px; padding-bottom: 5px; font-family: solaimanlipi, sans-serif !important; font-size: 15px !important;\">Lunch free</li>\r\n</ul>', 'hmmmm', 'Male', 30, '0000-00-00', 2, 'Active', '2019-02-21 13:14:07', '2019-02-25 13:30:49'),
(4, 'This for test', 'rwerewrewr', 'wetertert', '2019-02-12', 4, '<p>dgryrtytryt</p>', '<p>rhrtyrtytryty</p>', '<p>sdgdfgfhgfh</p>', '<p>tyreyrtytry</p>', 67000, '<p>tyrtytrytryt ok</p>', 'rewewsdwe', 'Male', 43, '0000-00-00', 2, 'Active', '2019-02-24 15:02:29', '2019-02-24 15:19:06');

-- --------------------------------------------------------

--
-- Table structure for table `ic_jobs_category`
--

CREATE TABLE `ic_jobs_category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ic_jobs_category`
--

INSERT INTO `ic_jobs_category` (`id`, `title`) VALUES
(2, 'Information & Technilogy');

-- --------------------------------------------------------

--
-- Table structure for table `ic_menu`
--

CREATE TABLE `ic_menu` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `priority` int(11) NOT NULL DEFAULT 100,
  `menu_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `has_column` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Left',
  `status` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ic_menu`
--

INSERT INTO `ic_menu` (`id`, `title`, `parent_id`, `link`, `target`, `priority`, `menu_type`, `has_column`, `position`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Home', 0, '', '_self', 1, NULL, NULL, '0', 'Active', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Contact Us', 0, 'contact-us', '_self', 100, NULL, 'Yes', 'Right', 'Active', 0, '2018-10-30 18:01:50', '2020-02-01 22:41:29'),
(12, 'Registration Success', 0, 'registration-success', '_self', 100, NULL, NULL, '0', 'InActive', 0, '2018-11-10 16:46:54', '2018-12-05 01:42:45'),
(16, 'Products', 0, '#', '_self', 5, NULL, NULL, '0', 'Active', 1, '2018-12-18 01:54:09', '2018-12-18 01:54:09'),
(19, 'BRAKER pro', 16, 'product/braker-pro', '_self', 100, NULL, NULL, '0', 'Active', 0, '2018-12-18 16:15:20', '2019-01-17 13:25:05'),
(20, 'Others', 16, 'sponsor/others', '_self', 100, NULL, NULL, '0', 'Active', 0, '2018-12-18 16:15:28', '2018-12-18 16:16:11'),
(21, 'Service', 0, '#', '_self', 8, NULL, NULL, '0', 'Active', 1, '2018-12-20 01:47:20', '2018-12-20 01:47:20'),
(25, 'Trainers', 0, 'trainers', '_self', 100, NULL, NULL, '0', 'Active', 0, '2019-01-16 01:12:09', '2019-01-16 01:13:01'),
(26, 'Training', 0, '#', '_self', 100, NULL, NULL, '0', 'Active', 0, '2019-01-16 01:12:33', '2019-01-18 16:19:49'),
(27, 'Privacy and policy', 0, 'privacy-and-policy', '_self', 100, NULL, NULL, '0', 'Active', 0, '2019-01-16 13:54:01', '2019-01-16 13:54:01'),
(31, 'AUTOMATION', 21, 'service/automation', '_self', 100, NULL, NULL, '0', 'Active', 0, '2019-01-17 13:38:16', '2019-01-17 13:38:16'),
(32, 'Video', 0, 'video', '_self', 100, NULL, NULL, '0', 'Active', 0, '2019-01-18 04:45:44', '2019-01-18 04:45:44'),
(39, 'This for test', 26, 'training/this-for-test', '_self', 100, NULL, NULL, '0', 'Active', 0, '2019-01-18 10:03:58', '2019-01-18 16:22:44'),
(40, 'This course', 26, 'training/this-course', '_self', 100, NULL, NULL, '0', 'Active', 0, '2019-01-18 10:04:39', '2019-01-18 16:23:35'),
(41, 'PLC training', 26, 'training/plc-training', '_self', 100, NULL, NULL, '0', 'Active', 0, '2019-01-18 16:26:29', '2019-01-28 16:36:59'),
(42, 'PLC training', 26, 'training/plc-training', '_self', 100, NULL, NULL, '0', 'Active', 0, '2019-01-28 16:36:23', '2019-01-28 16:36:59');

-- --------------------------------------------------------

--
-- Table structure for table `ic_migrations`
--

CREATE TABLE `ic_migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ic_migrations`
--

INSERT INTO `ic_migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_02_13_085619_create_products_table', 1),
(2, '2018_02_13_085716_create_product_photos_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ic_model_has_permissions`
--

CREATE TABLE `ic_model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ic_model_has_roles`
--

CREATE TABLE `ic_model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ic_model_has_roles`
--

INSERT INTO `ic_model_has_roles` (`role_id`, `model_id`, `model_type`) VALUES
(1, 1, 'App\\User'),
(1, 12, 'App\\User'),
(2, 12, 'App\\User'),
(2, 34, 'App\\User'),
(3, 35, 'App\\User');

-- --------------------------------------------------------

--
-- Table structure for table `ic_news`
--

CREATE TABLE `ic_news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ic_news`
--

INSERT INTO `ic_news` (`id`, `title`, `short_description`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'This for test ', 'This for test 1', '<p>fjghjhku</p>', '/photos/1/abstract_approved_bnr.png', 'Active', '2018-10-30 16:44:51', '2019-02-02 04:54:27');

-- --------------------------------------------------------

--
-- Table structure for table `ic_pages`
--

CREATE TABLE `ic_pages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `template` varchar(45) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `extra` text DEFAULT NULL,
  `extra_file` varchar(255) DEFAULT NULL,
  `venue_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `extra1` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ic_pages`
--

INSERT INTO `ic_pages` (`id`, `title`, `short_description`, `slug`, `description`, `template`, `image`, `extra`, `extra_file`, `venue_image`, `created_at`, `updated_at`, `extra1`) VALUES
(1, 'Home', 'djyujytu', 'home', '<p>yiyuiyuiu</p>', 'home', NULL, 'a:7:{i:0;s:3:\"yes\";i:1;s:9:\"sgertyery\";i:2;s:24:\"https://www.youtube.com/\";i:3;s:17:\"<p>dhyrtytyut</p>\";i:4;s:9:\"sgertyery\";i:5;s:9:\"sgertyery\";i:6;s:9:\"sgertyery\";}', NULL, NULL, '2018-10-19 01:57:26', '2018-10-23 17:02:02', 'yes'),
(4, 'About Us', 'This for test', 'about-us', '<p style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-align: justify; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">Alhamdulillah Thousands Of Pilgrims Have Enjoyed Performing Hajj &amp; Umrah With Us Over The Years &hellip;. Here Are Some Of The Reasons Why&hellip;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-align: justify; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">By the Grace of Almighty Allah,Engineershas established as a front-runner in a relatively short time ( since 2009 ) in offering Hajj &amp; Umrah packages.&nbsp; Alhamdulillah, Our main concern has always been to remain fair and honest in all our dealings, delivering what we promise and combining professionalism with firm adherence to the&nbsp;<strong style=\"box-sizing: border-box; font-weight: bold;\">Qur&rsquo;an &amp; Sunnah.</strong>&nbsp;We offering Hajj Package&nbsp; &amp; Umrah Hajj Package in Bangladesh at affordable price.&nbsp;</p>\r\n<p><span style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">As a result of this, we find that the majority of people who travel with us do so based on recommendations from previous customers [Hajji&rsquo;s].</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-align: justify; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">we served happily a large group of High Officials, Alhamdulillah, all of them are very happy about our service. To know more about us , you can visit Haji list &amp; testimonials of this website, Even you can discuss with them before booking Hajj package.</p>\r\n<p><span style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">We are specialized &amp; country leading company for&nbsp;</span><strong style=\"box-sizing: border-box; font-weight: bold; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">VIP 5 STAR HAJJ</strong><span style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">&nbsp;management at reasonable cost , Even we cater customized packages also to suit clients busy schedule. Hajj trip accompanied by religious person (Mufti Maolana) to guide Hajj rituals &amp; steps according to&nbsp;</span><strong style=\"box-sizing: border-box; font-weight: bold; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">Qur&rsquo;an &amp; Sunnah</strong><span style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">. Skilled people appointed in Our Liaison offices in Holy Makkah &amp; Madinah to ensure Quality of service. we are improving our efficiency gradually to ensure Higher level of comfort to our respected Hajis. Jetway Hajj team consist of educated, experienced, skilled &amp; dedicated young peoples to serve respected Guest of Allah(Hajji) properly 24/7. Each &amp; every year we want to serve them at Holy Makkah - Madinah -Arafa-Mudalifa &amp; Jamara. Our aim is your complete satisfaction. we want your travel experience to be memorable in positive way. Our motivated and skilled team is totally committed in providing a reliable, efficient service to the successful completion of every Hajj &amp; umrah trip. We hope you find our web site to be informative and helpful. We always offer the&nbsp;</span><strong style=\"box-sizing: border-box; font-weight: bold; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">Hajj package in Bangladesh</strong><span style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">. if you interested please feel free to contact us any time. if you would like to take our&nbsp;</span><strong style=\"box-sizing: border-box; font-weight: bold; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\"><a style=\"box-sizing: border-box; background-color: transparent; color: #ac9013; text-decoration: none; outline: none medium;\" href=\"https://hajjumrahinfobd.com/\" target=\"_blank\" rel=\"noopener\">Hajj and Umrah Hajj package</a></strong><span style=\"color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">&nbsp;then booking now. Our dedicated team will help you how to quick process on time.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-align: justify; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">May Allah Help us to perform our Hajj properly. Jazak Allah Khair</p>', 'general_page', NULL, 'N;', NULL, NULL, '2018-10-24 01:46:23', '2018-12-05 02:07:45', NULL),
(9, 'Contact Us', 'Lorem ipsum dolor sit amet, Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat consectetuer adipiscing elit, sed diam nonummy nibh euismod tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.', 'contact-us', NULL, 'contact_us', NULL, 'N;', NULL, NULL, '2018-10-30 18:01:50', '2018-10-30 18:01:50', NULL),
(10, 'Registration Success', NULL, 'registration-success', '<h2><span style=\"background-color: #ffffff; color: #0000ff;\">Your resgistration form successfully. Please check your email or spam to activate account.</span></h2>', 'general_page', NULL, 'N;', NULL, NULL, '2018-11-10 16:46:53', '2018-12-05 01:42:45', NULL),
(11, 'Offer', NULL, 'offer', '<h3 style=\"box-sizing: border-box; font-family: Roboto; font-weight: 500; line-height: 1.1; color: #000000; margin-top: 0px; margin-bottom: 10px; font-size: 24px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">Bring Your 4G Handset to Robi</h3>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; text-align: justify; color: #000000; font-family: Roboto; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\" align=\"center\">Get 4GB Welcome Bonus &amp; for Six Month keep getting Buy-1 Get-1 Bonus</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; text-align: justify; color: #000000; font-family: Roboto; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\"><strong style=\"box-sizing: border-box; font-weight: bold;\">Offer details:</strong></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; text-align: justify; color: #000000; font-family: Roboto; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">If you have a 4G handset but not using in Robi 4.5G Network, we invite you to come Robi to avail 6 month long exciting benefits. As soon as you connect Robi and make 1<sup style=\"box-sizing: border-box; position: relative; font-size: 10.5px; line-height: 0; vertical-align: baseline; top: -0.5em;\">st</sup> voice call using 4G handset with a 4G SIM you will get following benefits:</p>\r\n<p><span style=\"color: #000000; font-family: Roboto; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">&nbsp;</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; text-align: justify; color: #000000; font-family: Roboto; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\"><strong style=\"box-sizing: border-box; font-weight: bold;\">How can you avail the offer?</strong></p>\r\n<div class=\"list_new\" style=\"box-sizing: border-box; color: #000000; font-family: Roboto; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; padding-left: 25px;\">\r\n<li style=\"box-sizing: border-box; list-style-type: none; line-height: 25px; padding-left: 25px; text-align: left;\">Make a Voice Call from your 4G Handset with Robi 4G SIM to register for the campaign</li>\r\n<li style=\"box-sizing: border-box; list-style-type: none; line-height: 25px; padding-left: 25px; text-align: left;\">Within 72 Hours you will get the Welcome Bonus (4GB)</li>\r\n<li style=\"box-sizing: border-box; list-style-type: none; line-height: 25px; padding-left: 25px; text-align: left;\">On *Regular Pack purchase of above 100Tk MRP, you will get double bonus after Principal pack expire</li>\r\n</ul>\r\n</div>\r\n<p><span style=\"color: #000000; font-family: Roboto; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">&nbsp;</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; text-align: justify; color: #000000; font-family: Roboto; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\"><strong style=\"box-sizing: border-box; font-weight: bold;\">Eligibility &amp; Conditions:</strong></p>\r\n<div class=\"list_new\" style=\"box-sizing: border-box; color: #000000; font-family: Roboto; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; padding-left: 25px;\">\r\n<li style=\"box-sizing: border-box; list-style-type: none; line-height: 25px; padding-left: 25px; text-align: left;\">Your 4G handset (Unique IMEI) should be New to Robi Network, never used before 17<sup style=\"box-sizing: border-box; position: relative; font-size: 10.5px; line-height: 0; vertical-align: baseline; top: -0.5em;\">th</sup>Aug 2018. That is, if your 4G handset IMEI already used before 17<sup style=\"box-sizing: border-box; position: relative; font-size: 10.5px; line-height: 0; vertical-align: baseline; top: -0.5em;\">th</sup>Aug 2018 in Robi network, you will not be eligible for the campaign.</li>\r\n<li style=\"box-sizing: border-box; list-style-type: none; line-height: 25px; padding-left: 25px; text-align: left;\">For multiple tagging (Unique IMEI + Multiple Mobile Number Or Multiple IMEI + Unique Mobile Number) you will not be eligible for the offers.</li>\r\n<li style=\"box-sizing: border-box; list-style-type: none; line-height: 25px; padding-left: 25px; text-align: left;\">You will get Welcome bonus (4GB)once only and can use from same handset IMEI &amp; SIM slot only.</li>\r\n<li style=\"box-sizing: border-box; list-style-type: none; line-height: 25px; padding-left: 25px; text-align: left;\">Double bonus will be applicable for above 100Tk *Regular data pack purchase on Recharge or USSD (Not Auto Renew). In case of Auto Renew you will not get Double bonus benefits.</li>\r\n<li style=\"box-sizing: border-box; list-style-type: none; line-height: 25px; padding-left: 25px; text-align: left;\">In case of Repeat purchase within same pack validity, you will get Double bonus once, on expiry of Principal pack.</li>\r\n<li style=\"box-sizing: border-box; list-style-type: none; line-height: 25px; padding-left: 25px; text-align: left;\">Double bonus benefit will be applicable from your successful registration (successfully received welcome bonus) to six months.</li>\r\n<li style=\"box-sizing: border-box; list-style-type: none; line-height: 25px; padding-left: 25px; text-align: left;\">Benefits will be discontinued if the sim is detached from handset.</li>\r\n<li style=\"box-sizing: border-box; list-style-type: none; line-height: 25px; padding-left: 25px; text-align: left;\">Benefits will be discontinued if no pack purchase found in 90 days.</li>\r\n<li style=\"box-sizing: border-box; list-style-type: none; line-height: 25px; padding-left: 25px; text-align: left;\">Samsung&nbsp;<a class=\"inner_page_content_anchor\" style=\"box-sizing: border-box; background-color: transparent; color: #003399 !important; text-decoration: none; outline: 0px;\" href=\"https://www.robi.com.bd/current-offers/samsung-cash-back-offer?lang=eng\">Cash back offer</a>&nbsp;subscribers won&rsquo;t be eligible for this campaign.</li>\r\n<li style=\"box-sizing: border-box; list-style-type: none; line-height: 25px; padding-left: 25px; text-align: left;\">In-case of any conflict, Robi reserves the right to judge and assign eligibility towards freebees/rewards delivering.</li>\r\n<li style=\"box-sizing: border-box; list-style-type: none; line-height: 25px; padding-left: 25px; text-align: left;\">Robi/authority reserves the right to change, modify, cancel/terminate/stop this competition/contest/ quiz/campaign without assigning any reason whatsoever</li>\r\n<li style=\"box-sizing: border-box; list-style-type: none; line-height: 25px; padding-left: 25px; text-align: left;\">Any decision in relation to the campaign given by the Authority/Robi&nbsp; shall be considered and or construed as full and final</li>\r\n</ul>\r\n</div>\r\n<p><span style=\"box-sizing: border-box; color: #000000; font-family: Roboto; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\"><br style=\"box-sizing: border-box;\" /></span></p>', 'general_page', NULL, 'N;', NULL, NULL, '2018-12-04 16:20:45', '2018-12-05 01:28:47', NULL),
(13, 'Test page', NULL, 'test-page', '<p>Dasfsadfds</p>', 'general_page', NULL, 'N;', NULL, NULL, '2018-12-05 02:14:19', '2018-12-05 02:14:19', NULL),
(14, 'Trainers', NULL, 'trainers', NULL, 'trainers', NULL, 'N;', NULL, NULL, '2019-01-16 01:12:09', '2019-01-16 01:12:09', NULL),
(15, 'Training', NULL, 'training', NULL, 'training', NULL, 'N;', NULL, NULL, '2019-01-16 01:12:33', '2019-01-16 01:12:33', NULL),
(16, 'Privacy and policy', 'This is caption', 'privacy-and-policy', '<p style=\"box-sizing: border-box; margin: 0px 0px 21px; font-family: \'Droid Serif\', serif; font-size: 16px; line-height: 24px; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px;\">movement for 10 <span style=\"color: #99cc00;\">minutes</span> over the last 10 years while his party couldn\'t get even 10 seats in the election. BNP has failed both in the movement and the election. He (Fakhrul) should resign taking the responsibility for the failures if he has the minimum sense of shame,\" he said.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 21px; font-family: \'Droid Serif\', serif; font-size: 16px; line-height: 24px; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 21px; font-family: \'Droid Serif\', serif; font-size: 16px; line-height: 24px; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px;\"><img src=\"/photos/1/org-m4.jpg\" alt=\"\" /></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 21px; font-family: \'Droid Serif\', serif; font-size: 16px; line-height: 24px; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">A day after Fakhrul asked him to apologise publicly for committing the offence of \"vote rigging\" in the 11th parliamentary election, Quader hit back at his BNP counterpart while talking to reporters at AL\'s Bangabandhu Avenue central office after an extended meeting of Dhaka south city unit of Jubo League.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 21px; font-family: \'Droid Serif\', serif; font-size: 16px; line-height: 24px; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">Quader, also the road transport and bridges minister, said those who turned down people\'s outstanding victory should apologise to the nation.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 21px; font-family: \'Droid Serif\', serif; font-size: 16px; line-height: 24px; color: #000000; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\">He also said Fakhrul is now behaving like a \'reckless driver\', and urged all to remain alert about him to avert any accident.</p>', 'general_page', NULL, 'N;', NULL, NULL, '2019-01-16 13:54:01', '2019-01-16 13:54:01', NULL),
(17, 'Video', NULL, 'video', NULL, 'video', NULL, 'N;', NULL, NULL, '2019-01-18 04:45:44', '2019-01-18 04:45:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ic_password_resets`
--

CREATE TABLE `ic_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ic_password_resets`
--

INSERT INTO `ic_password_resets` (`email`, `token`, `created_at`) VALUES
('utpalseu@gmail.com', '$2y$10$VZF6rgGMkgrB.MDjX9gTxOHykxd7fjh0O6YhgDh.bSnieufx5/zpe', '2018-03-13 17:03:28'),
('utpalseu@gmail.com', '$2y$10$VZF6rgGMkgrB.MDjX9gTxOHykxd7fjh0O6YhgDh.bSnieufx5/zpe', '2018-03-13 17:03:28');

-- --------------------------------------------------------

--
-- Table structure for table `ic_payments`
--

CREATE TABLE `ic_payments` (
  `id` int(11) NOT NULL,
  `user_course_id` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `type` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Bkash,Cash',
  `trabsaction_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(45) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Pending',
  `payment_by` int(11) NOT NULL,
  `update_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ic_payments`
--

INSERT INTO `ic_payments` (`id`, `user_course_id`, `amount`, `type`, `trabsaction_id`, `status`, `payment_by`, `update_by`, `created_at`, `updated_at`) VALUES
(2, 3, '7500.00', 'Bkash', '34555', 'Pending', 0, 0, '2019-01-22 13:53:24', '2019-01-22 13:53:24'),
(3, 3, '5000.00', 'Bkash', '34555', 'Active', 0, 0, '2019-01-22 13:53:42', '2019-02-03 13:36:23'),
(4, 5, '6000.00', 'Bkash', '34555', 'Pending', 0, 0, '2019-01-22 14:26:29', '2019-01-22 14:26:29'),
(5, 5, '1000.00', 'Bkash', '34555', 'Pending', 0, 0, '2019-01-22 14:26:50', '2019-01-22 14:26:50'),
(6, 6, '8000.00', 'Bkash', '34555', 'Pending', 0, 0, '2019-01-28 16:39:53', '2019-01-28 16:39:53'),
(7, 6, '5000.00', 'Bkash', '345464657657', 'Pending', 0, 0, '2019-01-28 16:47:10', '2019-01-28 16:47:10'),
(8, 7, '5000.00', 'Cash', '', 'Pending', 0, 0, '2019-02-02 11:25:19', '2019-02-02 11:25:19'),
(10, 8, '5000.00', 'Cash', '', 'Active', 0, 0, '2019-02-02 11:26:04', '2019-02-02 15:42:21'),
(11, 9, '5000.00', 'Cash', '', 'Active', 0, 0, '2019-02-03 16:03:28', '2019-02-03 16:03:28'),
(12, 10, '3000.00', 'Cash', '', 'Active', 0, 0, '2019-02-03 16:09:52', '2019-02-03 16:09:52'),
(13, 10, '2000.00', 'Cash', '', 'Active', 0, 0, '2019-02-03 16:10:26', '2019-02-03 16:10:26'),
(14, 10, '2000.00', 'Cash', '', 'Active', 0, 0, '2019-02-03 16:22:13', '2019-02-03 16:22:13'),
(15, 10, '1000.00', 'Cash', '', 'Active', 1, 0, '2019-02-03 16:26:17', '2019-02-03 16:26:17');

-- --------------------------------------------------------

--
-- Table structure for table `ic_permissions`
--

CREATE TABLE `ic_permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ic_permissions`
--

INSERT INTO `ic_permissions` (`id`, `name`, `parent_id`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 0, 'web', '2018-04-21 22:34:11', '2018-08-16 12:54:10'),
(15, 'User List', 1, 'web', '2018-07-05 09:12:37', '2018-07-05 09:12:37'),
(16, 'Add User', 1, 'web', '2018-07-05 09:18:55', '2018-07-05 09:18:55'),
(21, 'Settings Manager', 0, 'web', '2018-07-22 12:34:36', '2018-07-22 12:34:36'),
(27, 'Pages Manager', 0, 'web', '2018-07-23 06:57:35', '2018-07-23 06:57:35'),
(28, 'Menu Manager', 0, 'web', '2018-07-30 09:04:58', '2018-07-30 09:04:58'),
(29, 'Sliders Manager', 0, 'web', '2018-08-01 06:21:59', '2018-08-01 06:21:59'),
(30, 'Roles Manager', 1, 'web', '2018-08-07 09:09:16', '2018-08-07 09:09:16'),
(32, 'Edit User', 1, 'web', '2018-08-07 09:11:46', '2018-08-07 09:11:46'),
(33, 'Delete User', 1, 'web', '2018-08-07 09:20:15', '2018-08-07 09:20:27'),
(37, 'News Manager', 0, 'web', '2018-10-30 16:07:23', '2018-10-30 16:07:23'),
(41, 'Product Manager', 0, 'web', '2018-12-18 01:49:53', '2018-12-18 01:49:53'),
(42, 'Service Manager', 0, 'web', '2018-12-20 01:30:32', '2018-12-20 01:30:32'),
(43, 'Trainaer Manager', 0, 'web', '2018-12-24 15:20:20', '2018-12-24 15:20:20'),
(44, 'Student Manager', 0, 'web', '2019-01-11 08:09:13', '2019-01-11 08:09:13'),
(45, 'Training Manager', 0, 'web', '2019-01-15 15:23:30', '2019-01-15 15:23:30'),
(46, 'Video Manager', 0, 'web', '2019-01-18 04:34:18', '2019-01-18 04:34:18'),
(47, 'Course Applicant', 0, 'web', '2019-01-18 14:16:04', '2019-01-18 14:16:04'),
(48, 'Branch Manager', 0, 'web', '2019-03-10 08:37:30', '2019-03-10 08:37:30');

-- --------------------------------------------------------

--
-- Table structure for table `ic_product`
--

CREATE TABLE `ic_product` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `product_type_id` int(11) DEFAULT NULL,
  `description` text NOT NULL,
  `status` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ic_product`
--

INSERT INTO `ic_product` (`id`, `logo`, `title`, `product_type_id`, `description`, `status`, `created_at`, `updated_at`) VALUES
(6, '/photos/1/sub-logo-2.png', 'Maternal medicine', 2, '', NULL, '2018-08-26 08:48:21', '2018-08-26 09:30:56'),
(7, '/photos/1/sub-logo-1.png', 'Organizing Committee', 2, '', NULL, '2018-08-26 08:49:19', '2018-08-26 08:49:19'),
(8, '/photos/1/sub-logo-1.png', 'Maternal medicine', 3, '', NULL, '2018-08-26 09:32:50', '2018-08-26 09:32:50'),
(9, '/photos/1/s1.png', 'test', 9, '<p>tedu</p>', 'Active', '2018-10-09 12:36:46', '2018-12-19 15:46:56'),
(10, '/photos/1/s2.png', 'Diamond', 9, '', 'Active', '2018-10-09 12:37:11', '2018-10-09 12:42:58'),
(11, '/photos/1/s1.png', 'gsk', 10, '', 'Active', '2018-10-10 06:13:54', '2018-10-10 06:14:10'),
(12, '/photos/1/s2.png', 'Buyer', 11, '', 'Active', '2018-10-10 06:14:58', '2018-10-10 06:14:58');

-- --------------------------------------------------------

--
-- Table structure for table `ic_product_type`
--

CREATE TABLE `ic_product_type` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ic_product_type`
--

INSERT INTO `ic_product_type` (`id`, `title`, `short_description`, `image`, `link`, `created_at`, `updated_at`) VALUES
(9, 'VARIOUS SENSOR pro', 'Test2', '/photos/1/general-info-banner.png', 'product/various-sensor-pro', '2018-10-09 12:09:35', '2019-01-17 13:24:58'),
(10, 'BRAKER pro', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fermentum, turpis in tempor finibus, metus magna auctor justo, eu varius mauris diam nec turpis.', '/photos/1/general-info-banner.png', 'product/braker-pro', '2018-10-10 06:12:01', '2019-01-17 13:25:05');

-- --------------------------------------------------------

--
-- Table structure for table `ic_roles`
--

CREATE TABLE `ic_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ic_roles`
--

INSERT INTO `ic_roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2018-04-21 22:34:11', '2018-10-17 01:39:33'),
(2, 'Staff', 'web', '2018-04-21 22:58:52', '2018-10-17 01:39:04'),
(3, 'Manager', 'web', '2019-01-16 13:39:24', '2019-01-16 13:39:24');

-- --------------------------------------------------------

--
-- Table structure for table `ic_role_assign`
--

CREATE TABLE `ic_role_assign` (
  `id` int(11) NOT NULL,
  `client_role_id` varchar(45) DEFAULT 'null',
  `employee_role_id` varchar(45) DEFAULT 'null'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ic_role_assign`
--

INSERT INTO `ic_role_assign` (`id`, `client_role_id`, `employee_role_id`) VALUES
(1, '5', '4');

-- --------------------------------------------------------

--
-- Table structure for table `ic_role_has_permissions`
--

CREATE TABLE `ic_role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `module_id` int(11) DEFAULT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ic_role_has_permissions`
--

INSERT INTO `ic_role_has_permissions` (`permission_id`, `module_id`, `role_id`) VALUES
(1, NULL, 1),
(15, NULL, 1),
(16, NULL, 1),
(21, NULL, 1),
(27, NULL, 1),
(28, NULL, 1),
(29, NULL, 1),
(29, NULL, 2),
(30, NULL, 1),
(32, NULL, 1),
(37, NULL, 1),
(41, NULL, 1),
(41, NULL, 2),
(41, NULL, 3),
(42, NULL, 1),
(42, NULL, 3),
(43, NULL, 1),
(43, NULL, 3),
(44, NULL, 1),
(44, NULL, 3),
(45, NULL, 1),
(46, NULL, 1),
(47, NULL, 1),
(48, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ic_service`
--

CREATE TABLE `ic_service` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `service_type_id` int(11) DEFAULT NULL,
  `description` text NOT NULL,
  `status` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ic_service`
--

INSERT INTO `ic_service` (`id`, `logo`, `title`, `service_type_id`, `description`, `status`, `created_at`, `updated_at`) VALUES
(6, '/photos/1/sub-logo-2.png', 'Maternal medicine', 2, '', NULL, '2018-08-26 08:48:21', '2018-08-26 09:30:56'),
(7, '/photos/1/sub-logo-1.png', 'Organizing Committee', 2, '', NULL, '2018-08-26 08:49:19', '2018-08-26 08:49:19'),
(8, '/photos/1/sub-logo-1.png', 'Maternal medicine', 3, '', NULL, '2018-08-26 09:32:50', '2018-08-26 09:32:50'),
(9, '/photos/1/s1.png', 'test', NULL, '<p>tedu ok</p>', 'Active', '2018-10-09 12:36:46', '2018-12-20 01:46:39'),
(10, '/photos/1/s2.png', 'Diamond', 9, '', 'Active', '2018-10-09 12:37:11', '2018-10-09 12:42:58'),
(11, '/photos/1/s1.png', 'gsk', 10, '', 'Active', '2018-10-10 06:13:54', '2018-10-10 06:14:10'),
(12, '/photos/1/s2.png', 'Buyer', 11, '', 'Active', '2018-10-10 06:14:58', '2018-10-10 06:14:58');

-- --------------------------------------------------------

--
-- Table structure for table `ic_service_type`
--

CREATE TABLE `ic_service_type` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ic_service_type`
--

INSERT INTO `ic_service_type` (`id`, `title`, `short_description`, `image`, `link`, `created_at`, `updated_at`) VALUES
(11, 'AUTOMATION', NULL, NULL, 'service/automation', '2019-01-17 13:38:16', '2019-01-17 13:38:16');

-- --------------------------------------------------------

--
-- Table structure for table `ic_settings`
--

CREATE TABLE `ic_settings` (
  `id` int(11) NOT NULL,
  `key` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ic_settings`
--

INSERT INTO `ic_settings` (`id`, `key`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'site_title', NULL, 'Engineers', NULL, NULL),
(2, 'site_slogan', NULL, 'For Intelligent Technology', NULL, NULL),
(3, 'site_favicon', NULL, NULL, NULL, NULL),
(4, 'site_logo', NULL, '/photos/1/Engineers logo.png', NULL, NULL),
(5, 'header_logo_1', NULL, NULL, NULL, NULL),
(6, 'header_logo_2', NULL, NULL, NULL, NULL),
(7, 'footer_logo_1', NULL, NULL, NULL, NULL),
(8, 'footer_logo_2', NULL, NULL, NULL, NULL),
(9, 'site_phone', NULL, '01671971454', NULL, NULL),
(10, 'site_phone2', NULL, NULL, NULL, NULL),
(11, 'site_email', NULL, NULL, NULL, NULL),
(12, 'site_email2', NULL, NULL, NULL, NULL),
(13, 'site_address', NULL, NULL, NULL, NULL),
(14, 'site_facebook', NULL, 'bjvj', NULL, NULL),
(15, 'site_twitter', NULL, NULL, NULL, NULL),
(16, 'site_linkedin', NULL, NULL, NULL, NULL),
(17, 'site_instagram', NULL, NULL, NULL, NULL),
(18, 'count_down_time_title', NULL, NULL, NULL, NULL),
(19, 'countdown_ending_date', NULL, NULL, NULL, NULL),
(20, 'countdown_ending_time', NULL, '7:30 AM', NULL, NULL),
(21, 'home_page_about_us', NULL, NULL, NULL, NULL),
(22, 'home_page_registration', NULL, NULL, NULL, NULL),
(23, 'facebook', NULL, 'https://www.facebook.com/engrmdhafizur', NULL, NULL),
(24, 'twitter', NULL, 'https://twitter.com/l', NULL, NULL),
(25, 'google_plus', NULL, 'https://plus.google.com', NULL, NULL),
(26, 'youtube', NULL, 'https://www.youtube.com/', NULL, NULL),
(27, 'extra_day_passport_umrah', NULL, '30', NULL, NULL),
(28, 'site_lat', NULL, '23.775106', NULL, NULL),
(29, 'site_lon', NULL, '90.384533', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ic_slider`
--

CREATE TABLE `ic_slider` (
  `id` int(11) NOT NULL,
  `title_top` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `title_bottom` varchar(255) DEFAULT NULL,
  `button_title` varchar(255) DEFAULT NULL,
  `button_link` varchar(255) DEFAULT NULL,
  `link_target` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ic_slider`
--

INSERT INTO `ic_slider` (`id`, `title_top`, `title`, `title_bottom`, `button_title`, `button_link`, `link_target`, `status`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'The conference of', 'Maternal medicine', 'Dhaka, Bangladesh,Sep 15-20, 2018', 'Register now', '#', '_self', 'Active', '/photos/1/Engineers logo.png', 1, '2018-07-12 05:47:11', '2020-02-01 23:02:54'),
(2, 'The conference of', 'Home', 'Dhaka, Bangladesh,Sep 15-20, 2018', 'Register now', '#', '_blank', 'Active', '/photos/1/general-info-banner.png', 1, '2018-07-12 05:52:57', '2018-12-04 15:31:27'),
(3, NULL, 'Bangladesh', NULL, NULL, NULL, '_self', 'Active', '/photos/1/abstract_approved_bnr.png', 2, '2018-08-08 05:37:21', '2018-12-04 15:32:08'),
(4, NULL, 'Umrah Package', 'hyryryry', 'rtuytt', 'rtytry', '_self', 'Active', '/photos/1/bd-banner.jpg', 1, '2018-12-05 02:06:34', '2018-12-05 02:06:34');

-- --------------------------------------------------------

--
-- Table structure for table `ic_slider_category`
--

CREATE TABLE `ic_slider_category` (
  `id` int(11) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ic_slider_category`
--

INSERT INTO `ic_slider_category` (`id`, `title`, `status`, `updated_at`, `created_at`) VALUES
(1, 'Home', NULL, '2018-08-08 04:48:52', '2018-08-08 04:41:02'),
(2, 'Bangladesh', NULL, '2018-08-08 06:00:48', '2018-08-08 05:01:31');

-- --------------------------------------------------------

--
-- Table structure for table `ic_templates`
--

CREATE TABLE `ic_templates` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `page_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ic_templates`
--

INSERT INTO `ic_templates` (`id`, `title`, `page_name`, `created_at`, `updated_at`) VALUES
(1, 'General Page', 'general_page', NULL, NULL),
(4, 'Home', 'home', NULL, NULL),
(9, 'Trainers', 'trainers', NULL, NULL),
(10, 'Training', 'training', NULL, NULL),
(11, 'Contact Us', 'contact_us', NULL, NULL),
(12, 'Video', 'video', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ic_trainers`
--

CREATE TABLE `ic_trainers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `education` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_breif` text COLLATE utf8_unicode_ci NOT NULL,
  `experience` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `job_location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ic_trainers`
--

INSERT INTO `ic_trainers` (`id`, `name`, `image`, `education`, `short_breif`, `experience`, `job_location`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Hai Sarkar ed', '/photos/1/LOGOg png.png', 'Bsc Engineering', 'This for test', '5 Years', 'Dhaka', 'Active', '2019-02-02 05:10:17', '2019-02-02 05:10:17');

-- --------------------------------------------------------

--
-- Table structure for table `ic_training`
--

CREATE TABLE `ic_training` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `course_fee` decimal(10,2) NOT NULL,
  `starting_date` date NOT NULL,
  `duration` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `course_materials` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ic_training`
--

INSERT INTO `ic_training` (`id`, `title`, `course_fee`, `starting_date`, `duration`, `course_materials`, `image`, `link`, `status`, `created_at`, `updated_at`) VALUES
(3, 'This for test', '20.00', '2019-01-22', '40 Days', '<p>etewr<img src=\"/photos/1/LOGOg png.png\" alt=\"\" /></p>', '', 'training/this-for-test', 'Active', '2019-01-18 10:03:57', '2019-01-18 16:22:44'),
(4, 'This course', '30.00', '2019-01-16', '40 Days', '<p>Content Here</p>', '', 'training/this-course', 'Active', '2019-01-18 10:04:39', '2019-01-18 16:23:35'),
(6, 'PLC training', '20000.00', '2019-01-31', '60 days', '<p>Content Here</p>', '', 'training/plc-training', 'Active', '2019-01-28 16:36:22', '2019-01-28 16:36:58');

-- --------------------------------------------------------

--
-- Table structure for table `ic_upazilas`
--

CREATE TABLE `ic_upazilas` (
  `id` int(2) UNSIGNED NOT NULL,
  `district_id` int(2) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `bn_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ic_upazilas`
--

INSERT INTO `ic_upazilas` (`id`, `district_id`, `name`, `bn_name`) VALUES
(1, 34, 'Amtali Upazila', 'আমতলী'),
(2, 34, 'Bamna Upazila', 'বামনা'),
(3, 34, 'Barguna Sadar Upazila', 'বরগুনা সদর'),
(4, 34, 'Betagi Upazila', 'বেতাগি'),
(5, 34, 'Patharghata Upazila', 'পাথরঘাটা'),
(6, 34, 'Taltali Upazila', 'তালতলী'),
(7, 35, 'Muladi Upazila', 'মুলাদি'),
(8, 35, 'Babuganj Upazila', 'বাবুগঞ্জ'),
(9, 35, 'Agailjhara Upazila', 'আগাইলঝরা'),
(10, 35, 'Barisal Sadar Upazila', 'বরিশাল সদর'),
(11, 35, 'Bakerganj Upazila', 'বাকেরগঞ্জ'),
(12, 35, 'Banaripara Upazila', 'বানাড়িপারা'),
(13, 35, 'Gaurnadi Upazila', 'গৌরনদী'),
(14, 35, 'Hizla Upazila', 'হিজলা'),
(15, 35, 'Mehendiganj Upazila', 'মেহেদিগঞ্জ '),
(16, 35, 'Wazirpur Upazila', 'ওয়াজিরপুর'),
(17, 36, 'Bhola Sadar Upazila', 'ভোলা সদর'),
(18, 36, 'Burhanuddin Upazila', 'বুরহানউদ্দিন'),
(19, 36, 'Char Fasson Upazila', 'চর ফ্যাশন'),
(20, 36, 'Daulatkhan Upazila', 'দৌলতখান'),
(21, 36, 'Lalmohan Upazila', 'লালমোহন'),
(22, 36, 'Manpura Upazila', 'মনপুরা'),
(23, 36, 'Tazumuddin Upazila', 'তাজুমুদ্দিন'),
(24, 37, 'Jhalokati Sadar Upazila', 'ঝালকাঠি সদর'),
(25, 37, 'Kathalia Upazila', 'কাঁঠালিয়া'),
(26, 37, 'Nalchity Upazila', 'নালচিতি'),
(27, 37, 'Rajapur Upazila', 'রাজাপুর'),
(28, 38, 'Bauphal Upazila', 'বাউফল'),
(29, 38, 'Dashmina Upazila', 'দশমিনা'),
(30, 38, 'Galachipa Upazila', 'গলাচিপা'),
(31, 38, 'Kalapara Upazila', 'কালাপারা'),
(32, 38, 'Mirzaganj Upazila', 'মির্জাগঞ্জ '),
(33, 38, 'Patuakhali Sadar Upazila', 'পটুয়াখালী সদর'),
(34, 38, 'Dumki Upazila', 'ডুমকি'),
(35, 38, 'Rangabali Upazila', 'রাঙ্গাবালি'),
(36, 39, 'Bhandaria', 'ভ্যান্ডারিয়া'),
(37, 39, 'Kaukhali', 'কাউখালি'),
(38, 39, 'Mathbaria', 'মাঠবাড়িয়া'),
(39, 39, 'Nazirpur', 'নাজিরপুর'),
(40, 39, 'Nesarabad', 'নেসারাবাদ'),
(41, 39, 'Pirojpur Sadar', 'পিরোজপুর সদর'),
(42, 39, 'Zianagar', 'জিয়ানগর'),
(43, 40, 'Bandarban Sadar', 'বান্দরবন সদর'),
(44, 40, 'Thanchi', 'থানচি'),
(45, 40, 'Lama', 'লামা'),
(46, 40, 'Naikhongchhari', 'নাইখংছড়ি '),
(47, 40, 'Ali kadam', 'আলী কদম'),
(48, 40, 'Rowangchhari', 'রউয়াংছড়ি '),
(49, 40, 'Ruma', 'রুমা'),
(50, 41, 'Brahmanbaria Sadar Upazila', 'ব্রাহ্মণবাড়িয়া সদর'),
(51, 41, 'Ashuganj Upazila', 'আশুগঞ্জ'),
(52, 41, 'Nasirnagar Upazila', 'নাসির নগর'),
(53, 41, 'Nabinagar Upazila', 'নবীনগর'),
(54, 41, 'Sarail Upazila', 'সরাইল'),
(55, 41, 'Shahbazpur Town', 'শাহবাজপুর টাউন'),
(56, 41, 'Kasba Upazila', 'কসবা'),
(57, 41, 'Akhaura Upazila', 'আখাউরা'),
(58, 41, 'Bancharampur Upazila', 'বাঞ্ছারামপুর'),
(59, 41, 'Bijoynagar Upazila', 'বিজয় নগর'),
(60, 42, 'Chandpur Sadar', 'চাঁদপুর সদর'),
(61, 42, 'Faridganj', 'ফরিদগঞ্জ'),
(62, 42, 'Haimchar', 'হাইমচর'),
(63, 42, 'Haziganj', 'হাজীগঞ্জ'),
(64, 42, 'Kachua', 'কচুয়া'),
(65, 42, 'Matlab Uttar', 'মতলব উত্তর'),
(66, 42, 'Matlab Dakkhin', 'মতলব দক্ষিণ'),
(67, 42, 'Shahrasti', 'শাহরাস্তি'),
(68, 43, 'Anwara Upazila', 'আনোয়ারা'),
(69, 43, 'Banshkhali Upazila', 'বাশখালি'),
(70, 43, 'Boalkhali Upazila', 'বোয়ালখালি'),
(71, 43, 'Chandanaish Upazila', 'চন্দনাইশ'),
(72, 43, 'Fatikchhari Upazila', 'ফটিকছড়ি'),
(73, 43, 'Hathazari Upazila', 'হাঠহাজারী'),
(74, 43, 'Lohagara Upazila', 'লোহাগারা'),
(75, 43, 'Mirsharai Upazila', 'মিরসরাই'),
(76, 43, 'Patiya Upazila', 'পটিয়া'),
(77, 43, 'Rangunia Upazila', 'রাঙ্গুনিয়া'),
(78, 43, 'Raozan Upazila', 'রাউজান'),
(79, 43, 'Sandwip Upazila', 'সন্দ্বীপ'),
(80, 43, 'Satkania Upazila', 'সাতকানিয়া'),
(81, 43, 'Sitakunda Upazila', 'সীতাকুণ্ড'),
(82, 44, 'Barura Upazila', 'বড়ুরা'),
(83, 44, 'Brahmanpara Upazila', 'ব্রাহ্মণপাড়া'),
(84, 44, 'Burichong Upazila', 'বুড়িচং'),
(85, 44, 'Chandina Upazila', 'চান্দিনা'),
(86, 44, 'Chauddagram Upazila', 'চৌদ্দগ্রাম'),
(87, 44, 'Daudkandi Upazila', 'দাউদকান্দি'),
(88, 44, 'Debidwar Upazila', 'দেবীদ্বার'),
(89, 44, 'Homna Upazila', 'হোমনা'),
(90, 44, 'Comilla Sadar Upazila', 'কুমিল্লা সদর'),
(91, 44, 'Laksam Upazila', 'লাকসাম'),
(92, 44, 'Monohorgonj Upazila', 'মনোহরগঞ্জ'),
(93, 44, 'Meghna Upazila', 'মেঘনা'),
(94, 44, 'Muradnagar Upazila', 'মুরাদনগর'),
(95, 44, 'Nangalkot Upazila', 'নাঙ্গালকোট'),
(96, 44, 'Comilla Sadar South Upazila', 'কুমিল্লা সদর দক্ষিণ'),
(97, 44, 'Titas Upazila', 'তিতাস'),
(98, 45, 'Chakaria Upazila', 'চকরিয়া'),
(100, 45, 'Cox\'s Bazar Sadar Upazila', 'কক্স বাজার সদর'),
(101, 45, 'Kutubdia Upazila', 'কুতুবদিয়া'),
(102, 45, 'Maheshkhali Upazila', 'মহেশখালী'),
(103, 45, 'Ramu Upazila', 'রামু'),
(104, 45, 'Teknaf Upazila', 'টেকনাফ'),
(105, 45, 'Ukhia Upazila', 'উখিয়া'),
(106, 45, 'Pekua Upazila', 'পেকুয়া'),
(107, 46, 'Feni Sadar', 'ফেনী সদর'),
(108, 46, 'Chagalnaiya', 'ছাগল নাইয়া'),
(109, 46, 'Daganbhyan', 'দাগানভিয়া'),
(110, 46, 'Parshuram', 'পরশুরাম'),
(111, 46, 'Fhulgazi', 'ফুলগাজি'),
(112, 46, 'Sonagazi', 'সোনাগাজি'),
(113, 47, 'Dighinala Upazila', 'দিঘিনালা '),
(114, 47, 'Khagrachhari Upazila', 'খাগড়াছড়ি'),
(115, 47, 'Lakshmichhari Upazila', 'লক্ষ্মীছড়ি'),
(116, 47, 'Mahalchhari Upazila', 'মহলছড়ি'),
(117, 47, 'Manikchhari Upazila', 'মানিকছড়ি'),
(118, 47, 'Matiranga Upazila', 'মাটিরাঙ্গা'),
(119, 47, 'Panchhari Upazila', 'পানছড়ি'),
(120, 47, 'Ramgarh Upazila', 'রামগড়'),
(121, 48, 'Lakshmipur Sadar Upazila', 'লক্ষ্মীপুর সদর'),
(122, 48, 'Raipur Upazila', 'রায়পুর'),
(123, 48, 'Ramganj Upazila', 'রামগঞ্জ'),
(124, 48, 'Ramgati Upazila', 'রামগতি'),
(125, 48, 'Komol Nagar Upazila', 'কমল নগর'),
(126, 49, 'Noakhali Sadar Upazila', 'নোয়াখালী সদর'),
(127, 49, 'Begumganj Upazila', 'বেগমগঞ্জ'),
(128, 49, 'Chatkhil Upazila', 'চাটখিল'),
(129, 49, 'Companyganj Upazila', 'কোম্পানীগঞ্জ'),
(130, 49, 'Shenbag Upazila', 'শেনবাগ'),
(131, 49, 'Hatia Upazila', 'হাতিয়া'),
(132, 49, 'Kobirhat Upazila', 'কবিরহাট '),
(133, 49, 'Sonaimuri Upazila', 'সোনাইমুরি'),
(134, 49, 'Suborno Char Upazila', 'সুবর্ণ চর '),
(135, 50, 'Rangamati Sadar Upazila', 'রাঙ্গামাটি সদর'),
(136, 50, 'Belaichhari Upazila', 'বেলাইছড়ি'),
(137, 50, 'Bagaichhari Upazila', 'বাঘাইছড়ি'),
(138, 50, 'Barkal Upazila', 'বরকল'),
(139, 50, 'Juraichhari Upazila', 'জুরাইছড়ি'),
(140, 50, 'Rajasthali Upazila', 'রাজাস্থলি'),
(141, 50, 'Kaptai Upazila', 'কাপ্তাই'),
(142, 50, 'Langadu Upazila', 'লাঙ্গাডু'),
(143, 50, 'Nannerchar Upazila', 'নান্নেরচর '),
(144, 50, 'Kaukhali Upazila', 'কাউখালি'),
(145, 1, 'Dhamrai Upazila', 'ধামরাই'),
(146, 1, 'Dohar Upazila', 'দোহার'),
(147, 1, 'Keraniganj Upazila', 'কেরানীগঞ্জ'),
(148, 1, 'Nawabganj Upazila', 'নবাবগঞ্জ'),
(149, 1, 'Savar Upazila', 'সাভার'),
(150, 2, 'Faridpur Sadar Upazila', 'ফরিদপুর সদর'),
(151, 2, 'Boalmari Upazila', 'বোয়ালমারী'),
(152, 2, 'Alfadanga Upazila', 'আলফাডাঙ্গা'),
(153, 2, 'Madhukhali Upazila', 'মধুখালি'),
(154, 2, 'Bhanga Upazila', 'ভাঙ্গা'),
(155, 2, 'Nagarkanda Upazila', 'নগরকান্ড'),
(156, 2, 'Charbhadrasan Upazila', 'চরভদ্রাসন '),
(157, 2, 'Sadarpur Upazila', 'সদরপুর'),
(158, 2, 'Shaltha Upazila', 'শালথা'),
(159, 3, 'Gazipur Sadar-Joydebpur', 'গাজীপুর সদর'),
(160, 3, 'Kaliakior', 'কালিয়াকৈর'),
(161, 3, 'Kapasia', 'কাপাসিয়া'),
(162, 3, 'Sripur', 'শ্রীপুর'),
(163, 3, 'Kaliganj', 'কালীগঞ্জ'),
(164, 3, 'Tongi', 'টঙ্গি'),
(165, 4, 'Gopalganj Sadar Upazila', 'গোপালগঞ্জ সদর'),
(166, 4, 'Kashiani Upazila', 'কাশিয়ানি'),
(167, 4, 'Kotalipara Upazila', 'কোটালিপাড়া'),
(168, 4, 'Muksudpur Upazila', 'মুকসুদপুর'),
(169, 4, 'Tungipara Upazila', 'টুঙ্গিপাড়া'),
(170, 5, 'Dewanganj Upazila', 'দেওয়ানগঞ্জ'),
(171, 5, 'Baksiganj Upazila', 'বকসিগঞ্জ'),
(172, 5, 'Islampur Upazila', 'ইসলামপুর'),
(173, 5, 'Jamalpur Sadar Upazila', 'জামালপুর সদর'),
(174, 5, 'Madarganj Upazila', 'মাদারগঞ্জ'),
(175, 5, 'Melandaha Upazila', 'মেলানদাহা'),
(176, 5, 'Sarishabari Upazila', 'সরিষাবাড়ি '),
(177, 5, 'Narundi Police I.C', 'নারুন্দি'),
(178, 6, 'Astagram Upazila', 'অষ্টগ্রাম'),
(179, 6, 'Bajitpur Upazila', 'বাজিতপুর'),
(180, 6, 'Bhairab Upazila', 'ভৈরব'),
(181, 6, 'Hossainpur Upazila', 'হোসেনপুর '),
(182, 6, 'Itna Upazila', 'ইটনা'),
(183, 6, 'Karimganj Upazila', 'করিমগঞ্জ'),
(184, 6, 'Katiadi Upazila', 'কতিয়াদি'),
(185, 6, 'Kishoreganj Sadar Upazila', 'কিশোরগঞ্জ সদর'),
(186, 6, 'Kuliarchar Upazila', 'কুলিয়ারচর'),
(187, 6, 'Mithamain Upazila', 'মিঠামাইন'),
(188, 6, 'Nikli Upazila', 'নিকলি'),
(189, 6, 'Pakundia Upazila', 'পাকুন্ডা'),
(190, 6, 'Tarail Upazila', 'তাড়াইল'),
(191, 7, 'Madaripur Sadar', 'মাদারীপুর সদর'),
(192, 7, 'Kalkini', 'কালকিনি'),
(193, 7, 'Rajoir', 'রাজইর'),
(194, 7, 'Shibchar', 'শিবচর'),
(195, 8, 'Manikganj Sadar Upazila', 'মানিকগঞ্জ সদর'),
(196, 8, 'Singair Upazila', 'সিঙ্গাইর'),
(197, 8, 'Shibalaya Upazila', 'শিবালয়'),
(198, 8, 'Saturia Upazila', 'সাঠুরিয়া'),
(199, 8, 'Harirampur Upazila', 'হরিরামপুর'),
(200, 8, 'Ghior Upazila', 'ঘিওর'),
(201, 8, 'Daulatpur Upazila', 'দৌলতপুর'),
(202, 9, 'Lohajang Upazila', 'লোহাজং'),
(203, 9, 'Sreenagar Upazila', 'শ্রীনগর'),
(204, 9, 'Munshiganj Sadar Upazila', 'মুন্সিগঞ্জ সদর'),
(205, 9, 'Sirajdikhan Upazila', 'সিরাজদিখান'),
(206, 9, 'Tongibari Upazila', 'টঙ্গিবাড়ি'),
(207, 9, 'Gazaria Upazila', 'গজারিয়া'),
(208, 10, 'Bhaluka', 'ভালুকা'),
(209, 10, 'Trishal', 'ত্রিশাল'),
(210, 10, 'Haluaghat', 'হালুয়াঘাট'),
(211, 10, 'Muktagachha', 'মুক্তাগাছা'),
(212, 10, 'Dhobaura', 'ধবারুয়া'),
(213, 10, 'Fulbaria', 'ফুলবাড়িয়া'),
(214, 10, 'Gaffargaon', 'গফরগাঁও'),
(215, 10, 'Gauripur', 'গৌরিপুর'),
(216, 10, 'Ishwarganj', 'ঈশ্বরগঞ্জ'),
(217, 10, 'Mymensingh Sadar', 'ময়মনসিং সদর'),
(218, 10, 'Nandail', 'নন্দাইল'),
(219, 10, 'Phulpur', 'ফুলপুর'),
(220, 11, 'Araihazar Upazila', 'আড়াইহাজার'),
(221, 11, 'Sonargaon Upazila', 'সোনারগাঁও'),
(222, 11, 'Bandar', 'বান্দার'),
(223, 11, 'Naryanganj Sadar Upazila', 'নারায়ানগঞ্জ সদর'),
(224, 11, 'Rupganj Upazila', 'রূপগঞ্জ'),
(225, 11, 'Siddirgonj Upazila', 'সিদ্ধিরগঞ্জ'),
(226, 12, 'Belabo Upazila', 'বেলাবো'),
(227, 12, 'Monohardi Upazila', 'মনোহরদি'),
(228, 12, 'Narsingdi Sadar Upazila', 'নরসিংদী সদর'),
(229, 12, 'Palash Upazila', 'পলাশ'),
(230, 12, 'Raipura Upazila, Narsingdi', 'রায়পুর'),
(231, 12, 'Shibpur Upazila', 'শিবপুর'),
(232, 13, 'Kendua Upazilla', 'কেন্দুয়া'),
(233, 13, 'Atpara Upazilla', 'আটপাড়া'),
(234, 13, 'Barhatta Upazilla', 'বরহাট্টা'),
(235, 13, 'Durgapur Upazilla', 'দুর্গাপুর'),
(236, 13, 'Kalmakanda Upazilla', 'কলমাকান্দা'),
(237, 13, 'Madan Upazilla', 'মদন'),
(238, 13, 'Mohanganj Upazilla', 'মোহনগঞ্জ'),
(239, 13, 'Netrakona-S Upazilla', 'নেত্রকোনা সদর'),
(240, 13, 'Purbadhala Upazilla', 'পূর্বধলা'),
(241, 13, 'Khaliajuri Upazilla', 'খালিয়াজুরি'),
(242, 14, 'Baliakandi Upazila', 'বালিয়াকান্দি'),
(243, 14, 'Goalandaghat Upazila', 'গোয়ালন্দ ঘাট'),
(244, 14, 'Pangsha Upazila', 'পাংশা'),
(245, 14, 'Kalukhali Upazila', 'কালুখালি'),
(246, 14, 'Rajbari Sadar Upazila', 'রাজবাড়ি সদর'),
(247, 15, 'Shariatpur Sadar -Palong', 'শরীয়তপুর সদর '),
(248, 15, 'Damudya Upazila', 'দামুদিয়া'),
(249, 15, 'Naria Upazila', 'নড়িয়া'),
(250, 15, 'Jajira Upazila', 'জাজিরা'),
(251, 15, 'Bhedarganj Upazila', 'ভেদারগঞ্জ'),
(252, 15, 'Gosairhat Upazila', 'গোসাইর হাট '),
(253, 16, 'Jhenaigati Upazila', 'ঝিনাইগাতি'),
(254, 16, 'Nakla Upazila', 'নাকলা'),
(255, 16, 'Nalitabari Upazila', 'নালিতাবাড়ি'),
(256, 16, 'Sherpur Sadar Upazila', 'শেরপুর সদর'),
(257, 16, 'Sreebardi Upazila', 'শ্রীবরদি'),
(258, 17, 'Tangail Sadar Upazila', 'টাঙ্গাইল সদর'),
(259, 17, 'Sakhipur Upazila', 'সখিপুর'),
(260, 17, 'Basail Upazila', 'বসাইল'),
(261, 17, 'Madhupur Upazila', 'মধুপুর'),
(262, 17, 'Ghatail Upazila', 'ঘাটাইল'),
(263, 17, 'Kalihati Upazila', 'কালিহাতি'),
(264, 17, 'Nagarpur Upazila', 'নগরপুর'),
(265, 17, 'Mirzapur Upazila', 'মির্জাপুর'),
(266, 17, 'Gopalpur Upazila', 'গোপালপুর'),
(267, 17, 'Delduar Upazila', 'দেলদুয়ার'),
(268, 17, 'Bhuapur Upazila', 'ভুয়াপুর'),
(269, 17, 'Dhanbari Upazila', 'ধানবাড়ি'),
(270, 55, 'Bagerhat Sadar Upazila', 'বাগেরহাট সদর'),
(271, 55, 'Chitalmari Upazila', 'চিতলমাড়ি'),
(272, 55, 'Fakirhat Upazila', 'ফকিরহাট'),
(273, 55, 'Kachua Upazila', 'কচুয়া'),
(274, 55, 'Mollahat Upazila', 'মোল্লাহাট '),
(275, 55, 'Mongla Upazila', 'মংলা'),
(276, 55, 'Morrelganj Upazila', 'মরেলগঞ্জ'),
(277, 55, 'Rampal Upazila', 'রামপাল'),
(278, 55, 'Sarankhola Upazila', 'স্মরণখোলা'),
(279, 56, 'Damurhuda Upazila', 'দামুরহুদা'),
(280, 56, 'Chuadanga-S Upazila', 'চুয়াডাঙ্গা সদর'),
(281, 56, 'Jibannagar Upazila', 'জীবন নগর '),
(282, 56, 'Alamdanga Upazila', 'আলমডাঙ্গা'),
(283, 57, 'Abhaynagar Upazila', 'অভয়নগর'),
(284, 57, 'Keshabpur Upazila', 'কেশবপুর'),
(285, 57, 'Bagherpara Upazila', 'বাঘের পাড়া '),
(286, 57, 'Jessore Sadar Upazila', 'যশোর সদর'),
(287, 57, 'Chaugachha Upazila', 'চৌগাছা'),
(288, 57, 'Manirampur Upazila', 'মনিরামপুর '),
(289, 57, 'Jhikargachha Upazila', 'ঝিকরগাছা'),
(290, 57, 'Sharsha Upazila', 'সারশা'),
(291, 58, 'Jhenaidah Sadar Upazila', 'ঝিনাইদহ সদর'),
(292, 58, 'Maheshpur Upazila', 'মহেশপুর'),
(293, 58, 'Kaliganj Upazila', 'কালীগঞ্জ'),
(294, 58, 'Kotchandpur Upazila', 'কোট চাঁদপুর '),
(295, 58, 'Shailkupa Upazila', 'শৈলকুপা'),
(296, 58, 'Harinakunda Upazila', 'হাড়িনাকুন্দা'),
(297, 59, 'Terokhada Upazila', 'তেরোখাদা'),
(298, 59, 'Batiaghata Upazila', 'বাটিয়াঘাটা '),
(299, 59, 'Dacope Upazila', 'ডাকপে'),
(300, 59, 'Dumuria Upazila', 'ডুমুরিয়া'),
(301, 59, 'Dighalia Upazila', 'দিঘলিয়া'),
(302, 59, 'Koyra Upazila', 'কয়ড়া'),
(303, 59, 'Paikgachha Upazila', 'পাইকগাছা'),
(304, 59, 'Phultala Upazila', 'ফুলতলা'),
(305, 59, 'Rupsa Upazila', 'রূপসা'),
(306, 60, 'Kushtia Sadar', 'কুষ্টিয়া সদর'),
(307, 60, 'Kumarkhali', 'কুমারখালি'),
(308, 60, 'Daulatpur', 'দৌলতপুর'),
(309, 60, 'Mirpur', 'মিরপুর'),
(310, 60, 'Bheramara', 'ভেরামারা'),
(311, 60, 'Khoksa', 'খোকসা'),
(312, 61, 'Magura Sadar Upazila', 'মাগুরা সদর'),
(313, 61, 'Mohammadpur Upazila', 'মোহাম্মাদপুর'),
(314, 61, 'Shalikha Upazila', 'শালিখা'),
(315, 61, 'Sreepur Upazila', 'শ্রীপুর'),
(316, 62, 'angni Upazila', 'আংনি'),
(317, 62, 'Mujib Nagar Upazila', 'মুজিব নগর'),
(318, 62, 'Meherpur-S Upazila', 'মেহেরপুর সদর'),
(319, 63, 'Narail-S Upazilla', 'নড়াইল সদর'),
(320, 63, 'Lohagara Upazilla', 'লোহাগাড়া'),
(321, 63, 'Kalia Upazilla', 'কালিয়া'),
(322, 64, 'Satkhira Sadar Upazila', 'সাতক্ষীরা সদর'),
(323, 64, 'Assasuni Upazila', 'আসসাশুনি '),
(324, 64, 'Debhata Upazila', 'দেভাটা'),
(325, 64, 'Tala Upazila', 'তালা'),
(326, 64, 'Kalaroa Upazila', 'কলরোয়া'),
(327, 64, 'Kaliganj Upazila', 'কালীগঞ্জ'),
(328, 64, 'Shyamnagar Upazila', 'শ্যামনগর'),
(329, 18, 'Adamdighi', 'আদমদিঘী'),
(330, 18, 'Bogra Sadar', 'বগুড়া সদর'),
(331, 18, 'Sherpur', 'শেরপুর'),
(332, 18, 'Dhunat', 'ধুনট'),
(333, 18, 'Dhupchanchia', 'দুপচাচিয়া'),
(334, 18, 'Gabtali', 'গাবতলি'),
(335, 18, 'Kahaloo', 'কাহালু'),
(336, 18, 'Nandigram', 'নন্দিগ্রাম'),
(337, 18, 'Sahajanpur', 'শাহজাহানপুর'),
(338, 18, 'Sariakandi', 'সারিয়াকান্দি'),
(339, 18, 'Shibganj', 'শিবগঞ্জ'),
(340, 18, 'Sonatala', 'সোনাতলা'),
(341, 19, 'Joypurhat S', 'জয়পুরহাট সদর'),
(342, 19, 'Akkelpur', 'আক্কেলপুর'),
(343, 19, 'Kalai', 'কালাই'),
(344, 19, 'Khetlal', 'খেতলাল'),
(345, 19, 'Panchbibi', 'পাঁচবিবি'),
(346, 20, 'Naogaon Sadar Upazila', 'নওগাঁ সদর'),
(347, 20, 'Mohadevpur Upazila', 'মহাদেবপুর'),
(348, 20, 'Manda Upazila', 'মান্দা'),
(349, 20, 'Niamatpur Upazila', 'নিয়ামতপুর'),
(350, 20, 'Atrai Upazila', 'আত্রাই'),
(351, 20, 'Raninagar Upazila', 'রাণীনগর'),
(352, 20, 'Patnitala Upazila', 'পত্নীতলা'),
(353, 20, 'Dhamoirhat Upazila', 'ধামইরহাট '),
(354, 20, 'Sapahar Upazila', 'সাপাহার'),
(355, 20, 'Porsha Upazila', 'পোরশা'),
(356, 20, 'Badalgachhi Upazila', 'বদলগাছি'),
(357, 21, 'Natore Sadar Upazila', 'নাটোর সদর'),
(358, 21, 'Baraigram Upazila', 'বড়াইগ্রাম'),
(359, 21, 'Bagatipara Upazila', 'বাগাতিপাড়া'),
(360, 21, 'Lalpur Upazila', 'লালপুর'),
(361, 21, 'Natore Sadar Upazila', 'নাটোর সদর'),
(362, 21, 'Baraigram Upazila', 'বড়াই গ্রাম'),
(363, 22, 'Bholahat Upazila', 'ভোলাহাট'),
(364, 22, 'Gomastapur Upazila', 'গোমস্তাপুর'),
(365, 22, 'Nachole Upazila', 'নাচোল'),
(366, 22, 'Nawabganj Sadar Upazila', 'নবাবগঞ্জ সদর'),
(367, 22, 'Shibganj Upazila', 'শিবগঞ্জ'),
(368, 23, 'Atgharia Upazila', 'আটঘরিয়া'),
(369, 23, 'Bera Upazila', 'বেড়া'),
(370, 23, 'Bhangura Upazila', 'ভাঙ্গুরা'),
(371, 23, 'Chatmohar Upazila', 'চাটমোহর'),
(372, 23, 'Faridpur Upazila', 'ফরিদপুর'),
(373, 23, 'Ishwardi Upazila', 'ঈশ্বরদী'),
(374, 23, 'Pabna Sadar Upazila', 'পাবনা সদর'),
(375, 23, 'Santhia Upazila', 'সাথিয়া'),
(376, 23, 'Sujanagar Upazila', 'সুজানগর'),
(377, 24, 'Bagha', 'বাঘা'),
(378, 24, 'Bagmara', 'বাগমারা'),
(379, 24, 'Charghat', 'চারঘাট'),
(380, 24, 'Durgapur', 'দুর্গাপুর'),
(381, 24, 'Godagari', 'গোদাগারি'),
(382, 24, 'Mohanpur', 'মোহনপুর'),
(383, 24, 'Paba', 'পবা'),
(384, 24, 'Puthia', 'পুঠিয়া'),
(385, 24, 'Tanore', 'তানোর'),
(386, 25, 'Sirajganj Sadar Upazila', 'সিরাজগঞ্জ সদর'),
(387, 25, 'Belkuchi Upazila', 'বেলকুচি'),
(388, 25, 'Chauhali Upazila', 'চৌহালি'),
(389, 25, 'Kamarkhanda Upazila', 'কামারখান্দা'),
(390, 25, 'Kazipur Upazila', 'কাজীপুর'),
(391, 25, 'Raiganj Upazila', 'রায়গঞ্জ'),
(392, 25, 'Shahjadpur Upazila', 'শাহজাদপুর'),
(393, 25, 'Tarash Upazila', 'তারাশ'),
(394, 25, 'Ullahpara Upazila', 'উল্লাপাড়া'),
(395, 26, 'Birampur Upazila', 'বিরামপুর'),
(396, 26, 'Birganj', 'বীরগঞ্জ'),
(397, 26, 'Biral Upazila', 'বিড়াল'),
(398, 26, 'Bochaganj Upazila', 'বোচাগঞ্জ'),
(399, 26, 'Chirirbandar Upazila', 'চিরিরবন্দর'),
(400, 26, 'Phulbari Upazila', 'ফুলবাড়ি'),
(401, 26, 'Ghoraghat Upazila', 'ঘোড়াঘাট'),
(402, 26, 'Hakimpur Upazila', 'হাকিমপুর'),
(403, 26, 'Kaharole Upazila', 'কাহারোল'),
(404, 26, 'Khansama Upazila', 'খানসামা'),
(405, 26, 'Dinajpur Sadar Upazila', 'দিনাজপুর সদর'),
(406, 26, 'Nawabganj', 'নবাবগঞ্জ'),
(407, 26, 'Parbatipur Upazila', 'পার্বতীপুর'),
(408, 27, 'Fulchhari', 'ফুলছড়ি'),
(409, 27, 'Gaibandha sadar', 'গাইবান্ধা সদর'),
(410, 27, 'Gobindaganj', 'গোবিন্দগঞ্জ'),
(411, 27, 'Palashbari', 'পলাশবাড়ী'),
(412, 27, 'Sadullapur', 'সাদুল্যাপুর'),
(413, 27, 'Saghata', 'সাঘাটা'),
(414, 27, 'Sundarganj', 'সুন্দরগঞ্জ'),
(415, 28, 'Kurigram Sadar', 'কুড়িগ্রাম সদর'),
(416, 28, 'Nageshwari', 'নাগেশ্বরী'),
(417, 28, 'Bhurungamari', 'ভুরুঙ্গামারি'),
(418, 28, 'Phulbari', 'ফুলবাড়ি'),
(419, 28, 'Rajarhat', 'রাজারহাট'),
(420, 28, 'Ulipur', 'উলিপুর'),
(421, 28, 'Chilmari', 'চিলমারি'),
(422, 28, 'Rowmari', 'রউমারি'),
(423, 28, 'Char Rajibpur', 'চর রাজিবপুর'),
(424, 29, 'Lalmanirhat Sadar', 'লালমনিরহাট সদর'),
(425, 29, 'Aditmari', 'আদিতমারি'),
(426, 29, 'Kaliganj', 'কালীগঞ্জ'),
(427, 29, 'Hatibandha', 'হাতিবান্ধা'),
(428, 29, 'Patgram', 'পাটগ্রাম'),
(429, 30, 'Nilphamari Sadar', 'নীলফামারী সদর'),
(430, 30, 'Saidpur', 'সৈয়দপুর'),
(431, 30, 'Jaldhaka', 'জলঢাকা'),
(432, 30, 'Kishoreganj', 'কিশোরগঞ্জ'),
(433, 30, 'Domar', 'ডোমার'),
(434, 30, 'Dimla', 'ডিমলা'),
(435, 31, 'Panchagarh Sadar', 'পঞ্চগড় সদর'),
(436, 31, 'Debiganj', 'দেবীগঞ্জ'),
(437, 31, 'Boda', 'বোদা'),
(438, 31, 'Atwari', 'আটোয়ারি'),
(439, 31, 'Tetulia', 'তেতুলিয়া'),
(440, 32, 'Badarganj', 'বদরগঞ্জ'),
(441, 32, 'Mithapukur', 'মিঠাপুকুর'),
(442, 32, 'Gangachara', 'গঙ্গাচরা'),
(443, 32, 'Kaunia', 'কাউনিয়া'),
(444, 32, 'Rangpur Sadar', 'রংপুর সদর'),
(445, 32, 'Pirgachha', 'পীরগাছা'),
(446, 32, 'Pirganj', 'পীরগঞ্জ'),
(447, 32, 'Taraganj', 'তারাগঞ্জ'),
(448, 33, 'Thakurgaon Sadar Upazila', 'ঠাকুরগাঁও সদর'),
(449, 33, 'Pirganj Upazila', 'পীরগঞ্জ'),
(450, 33, 'Baliadangi Upazila', 'বালিয়াডাঙ্গি'),
(451, 33, 'Haripur Upazila', 'হরিপুর'),
(452, 33, 'Ranisankail Upazila', 'রাণীসংকইল'),
(453, 51, 'Ajmiriganj', 'আজমিরিগঞ্জ'),
(454, 51, 'Baniachang', 'বানিয়াচং'),
(455, 51, 'Bahubal', 'বাহুবল'),
(456, 51, 'Chunarughat', 'চুনারুঘাট'),
(457, 51, 'Habiganj Sadar', 'হবিগঞ্জ সদর'),
(458, 51, 'Lakhai', 'লাক্ষাই'),
(459, 51, 'Madhabpur', 'মাধবপুর'),
(460, 51, 'Nabiganj', 'নবীগঞ্জ'),
(461, 51, 'Shaistagonj Upazila', 'শায়েস্তাগঞ্জ'),
(462, 52, 'Moulvibazar Sadar', 'মৌলভীবাজার'),
(463, 52, 'Barlekha', 'বড়লেখা'),
(464, 52, 'Juri', 'জুড়ি'),
(465, 52, 'Kamalganj', 'কামালগঞ্জ'),
(466, 52, 'Kulaura', 'কুলাউরা'),
(467, 52, 'Rajnagar', 'রাজনগর'),
(468, 52, 'Sreemangal', 'শ্রীমঙ্গল'),
(469, 53, 'Bishwamvarpur', 'বিসশম্ভারপুর'),
(470, 53, 'Chhatak', 'ছাতক'),
(471, 53, 'Derai', 'দেড়াই'),
(472, 53, 'Dharampasha', 'ধরমপাশা'),
(473, 53, 'Dowarabazar', 'দোয়ারাবাজার'),
(474, 53, 'Jagannathpur', 'জগন্নাথপুর'),
(475, 53, 'Jamalganj', 'জামালগঞ্জ'),
(476, 53, 'Sulla', 'সুল্লা'),
(477, 53, 'Sunamganj Sadar', 'সুনামগঞ্জ সদর'),
(478, 53, 'Shanthiganj', 'শান্তিগঞ্জ'),
(479, 53, 'Tahirpur', 'তাহিরপুর'),
(480, 54, 'Sylhet Sadar', 'সিলেট সদর'),
(481, 54, 'Beanibazar', 'বেয়ানিবাজার'),
(482, 54, 'Bishwanath', 'বিশ্বনাথ'),
(483, 54, 'Dakshin Surma Upazila', 'দক্ষিণ সুরমা'),
(484, 54, 'Balaganj', 'বালাগঞ্জ'),
(485, 54, 'Companiganj', 'কোম্পানিগঞ্জ'),
(486, 54, 'Fenchuganj', 'ফেঞ্চুগঞ্জ'),
(487, 54, 'Golapganj', 'গোলাপগঞ্জ'),
(488, 54, 'Gowainghat', 'গোয়াইনঘাট'),
(489, 54, 'Jaintiapur', 'জয়ন্তপুর'),
(490, 54, 'Kanaighat', 'কানাইঘাট'),
(491, 54, 'Zakiganj', 'জাকিগঞ্জ'),
(492, 54, 'Nobigonj', 'নবীগঞ্জ');

-- --------------------------------------------------------

--
-- Table structure for table `ic_users`
--

CREATE TABLE `ic_users` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `home_phone` varchar(255) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `father_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mother_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `present_address` varchar(255) DEFAULT NULL,
  `division_id` int(11) NOT NULL,
  `district_id` int(11) DEFAULT NULL,
  `upzilla_id` int(11) DEFAULT NULL,
  `per_post_office` varchar(255) DEFAULT NULL,
  `per_villlege` varchar(255) DEFAULT NULL,
  `dob` date NOT NULL,
  `gender` varchar(45) NOT NULL,
  `proffession` varchar(255) NOT NULL,
  `institute` varchar(255) NOT NULL,
  `educational_institute` varchar(255) NOT NULL,
  `passing_year` year(4) NOT NULL,
  `is_computer_laptop` varchar(45) NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ic_users`
--

INSERT INTO `ic_users` (`id`, `title`, `name`, `email`, `password`, `phone`, `home_phone`, `reference`, `father_name`, `mother_name`, `present_address`, `division_id`, `district_id`, `upzilla_id`, `per_post_office`, `per_villlege`, `dob`, `gender`, `proffession`, `institute`, `educational_institute`, `passing_year`, `is_computer_laptop`, `image`, `type`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ma', 'Admin', 'admin@gmail.com', '$2y$10$E00Pww9HVtpaWsx0sSqIQeA.BW.qI0COQKRdEhwE0YKD.qGlI6tX6', NULL, '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '0000', '', 'Admin', 'Active', 'ogMCT5wxkI3SG7pJi9R2UdXJa7JioUsFKEhODwxqHIwXa6WCHrXYkJyOZVbF', '2018-10-20 04:30:46', '2018-10-20 04:30:46'),
(2, 'Md.', 'rashed khan', 'rabiul0420@gmail.com', '$2y$10$yMpiuRwOiZ3AJrjbVjWw.ezlDA9Uh0QB8Od48s0irz/O7ver9Q5xC', '017874556678', '', '', 'abdur rahim', 'amena begum', '5th floor, House#17, Road#17, Mirpur, Dhaka', 2, 49, 133, 'Boro Dunail', 'Chor Dunail', '1900-12-30', 'Male', 'Job Holder', 'IT Clan Bangladesh', 'Ruet', 2013, '2009', 'images/cjbkigxPK7Jyd9s576IsgvrMTPSnUzAblKCcANnd.png', 'Student', 'Active', 'ELrokctucIz425T26TDTXVd8lx2pOKqJQkfibIJT38SL8tLW1KCnEYB2H2EI', '2018-10-20 04:34:32', '2018-10-27 08:38:13'),
(3, 'Md.', 'Bulbul Ahmed', 'bulbul@gmail.com', '$2y$10$QUSniCOFF7cOiJo6E4ovhu4.rlBXhvC9k4ksOO7cIgbXWJZHacjGS', NULL, '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '0000', '', 'Student', 'Active', 'prw9CYGYaJry5Kdk6cuKP5O2LI0PRXjgL60e3z9ZGlZTO2CnoJTVd0ae3TzF', '2018-10-26 14:08:58', '2018-10-26 14:08:58'),
(5, 'Md', 'Amir Sardar', 'amir04@gmail.com', '$2y$10$4WkC9xIMEzo6/OB1k/fumupaz9KjsCO/V9Baz6HBR4wTbSqZw21Vu', NULL, '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '0000', '', 'Student', 'Pending', 'lnA0MnrkfLI874na6esC4eKw8VTWVj1rMdNTglxpKyJalAZIAVTe0HlNZUPo', '2018-10-29 01:20:11', '2018-10-29 01:20:11'),
(10, 'Md.', 'rabiul islam', 'rabiul04e@gmail.com', '$2y$10$H/CeAdldXYeH7TuknMusy.xDZftQ4GKf8uMLLSURoYWC8owawN3fq', NULL, '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '0000', '', 'Student', 'Pending', '', '2018-11-07 17:32:59', '2018-11-07 17:32:59'),
(12, 'Md', 'rabiul islam', 'rabiul042044@gmail.com', '$2y$10$ucZ.pE45Jby1OzBw38ic0.QtkdyTotGV4rEWmNxoQ/GtR/Y/AILp.', NULL, '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '0000', '', 'Student', 'Pending', '', '2018-11-07 17:38:57', '2018-11-07 17:38:57'),
(14, 'Md', 'rabiul islam', 'rabiul042o@gmail.com', '$2y$10$wvUMcIaHKN1Nn2dPdXap7elBIukc6vspsrIew5gLA17CBxOklSTgC', NULL, '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '0000', '', 'Student', 'Pending', '', '2018-11-07 17:58:28', '2018-11-07 17:58:28'),
(15, NULL, 'rabiul islam', 'amir1@gmail.com', '$2y$10$lrxri6WE2abRsi8qEdm1Seslpfrv2.GjDml3PMEfmWfcchLzghP1.', NULL, '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '0000', '', '', '', 'r673BLl6lnlGasTCnpRZ3Z87ftJnmHyDRxvFE4EzkYCgbxjM9Dsou5eZII0Q', '2018-12-05 01:09:18', '2018-12-05 01:09:18'),
(16, NULL, 'halim khan', 'halim@gmail.com', '$2y$10$bi//Ou4KHH4Iwoikc.Ni8.btzZTgFgZKhyOtfeSr1L7QE7wQ0PJcS', NULL, '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '0000', '', '', '', 'XBnBmoRDIGKhdfUtSVv7hh8A4X4B2s8UFR6XuBMyWeB2HPnqKSGcccvpL2Yb', '2018-12-05 01:12:28', '2018-12-05 01:12:28'),
(17, NULL, 'rashed khan', 'rashed2@gmail.com', '$2y$10$JrDWvFYG3giKx6UallfBjeje9o4QNE7Zxf4T98/BD.1OWjCEOOvB6', NULL, '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '0000', '', '', '', 'QihEftEAdDIRQBaX0wEkumu2NH9f85CLczBKrL1zll2bZXMjItJ3ligLdr1W', '2018-12-05 01:35:37', '2018-12-05 01:35:37'),
(19, NULL, 'rashed khan', 'rabiul045@gmail.com', '$2y$10$fpejCDV4hnALUYH7uOLbTu3SXQ2FB9/i8F/MST01vh27x7lAn1uFy', '017874556678', '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '0000', '', 'Student', 'Pending', '', '2018-12-07 15:58:46', '2018-12-07 15:58:46'),
(20, NULL, 'abdul khalek', 'khalek@gmail.com', '$2y$10$VxIZQJ4oxlzo/cn1S8K5nOcP9Dx.mlEK.BYA7b4o9.DL0ps1mEYuW', '0166789', 'rtyrt', 'tutyu65tu7657', 'abdur rahim', 'amena begum', '5th floor, House#17, Road#17, Mirpur, Dhaka', 1, 35, 15, NULL, 'Chor Dunail', '2018-12-14', '', '', '', '', 0000, '0000', 'images/mkkTvo2EzjDSXskCdJUG6wiG73TqaK37T7Qfn8LG.jpeg', 'Student', 'Active', '', '2018-12-09 02:41:05', '2018-12-09 04:13:11'),
(21, NULL, NULL, 'rabiutyl0420@gmail.com', NULL, NULL, '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '0000', '', '', 'Active', '', '2018-12-16 05:13:02', '2018-12-16 05:17:29'),
(22, NULL, NULL, 'rabiutyl0420@gmail.com', NULL, NULL, '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '0000', '', '', '', '', '2018-12-16 05:14:34', '2018-12-16 05:14:34'),
(23, NULL, NULL, 'rabiutopyl0420@gmail.com', NULL, NULL, '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '0000', '', '', '', '', NULL, NULL),
(24, NULL, NULL, 'rabiul0io420@gmail.com', NULL, NULL, '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '0000', '', '', '', '', NULL, NULL),
(25, NULL, NULL, 'rabiul0io420@gmail.com', NULL, NULL, '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '0000', '', '', 'Active', '', '2018-12-16 05:29:48', '2018-12-16 05:30:06'),
(26, NULL, 'rashed khan', 'rabiul04204@gmail.com', '$2y$10$9C8dsQtLLP01b0/scuzN4OIUt/rFk1x78mrXPa79aoR3LMbD8ZCYq', '0166789', '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '0000', '', '', 'Active', '', '2018-12-16 05:38:12', '2018-12-16 05:38:35'),
(27, NULL, 'rashed khan', 'rabiul0gh420@gmail.com', '$2y$10$gV5pxuMFv3BnUsviOng26.Asp0CqTVRuTXJKfhhSQmBPgfzQgp8M6', '0166789', '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '0000', '', '', 'Pending', '', '2018-12-16 05:41:59', '2018-12-16 05:41:59'),
(28, NULL, 'rashed khan', 'rabiul0fgh420@gmail.com', '$2y$10$9spg6qLPGcRYpYs8W5SWa.AfP./4HIGWUYUSmqlb4oOMh684w1DuO', '0166789', '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '0000', '', '', 'Active', '', '2018-12-16 05:42:35', '2018-12-16 05:42:58'),
(29, NULL, 'rashed khan', 'rabiul.ruet04@gmail.com', '$2y$10$1FrInsARfbfkwBTkFyIZ..WYLvc6kTKFQw5jkUM0bV4xiKhUb4niq', '0166789', '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '0000', '', '', 'Active', '', '2018-12-16 05:57:56', '2018-12-16 05:58:17'),
(30, NULL, 'rashed khan', 'test1@gmail.com', '$2y$10$Pb3IPA.OVgDdIoEZWAY7k.g7BqFIJaBaN.WqvxPHR9WP9r2/CNJNe', '0166789', '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '0000', '', '', 'Active', 'robtN4wsChbsi4GgsZXnLiUP2Z05myYYKG2Xw8RWoZKtUrBfzlFthRBFaoAy', '2018-12-16 06:04:27', '2018-12-16 06:04:46'),
(31, NULL, 'Abul Ahad', 'rabiul04@gmail.com', '$2y$10$WtVpDBXPsdiFLYY2AjuyEuJjxjomlXpR6PkvuzPEsOpmTZv4anzkK', '016678', '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '', '', 'Student', 'Pending', '', '2019-01-11 07:42:18', '2019-01-11 07:42:18'),
(32, NULL, 'Abul Ahad', 'rabiul02@gmail.com', '$2y$10$1rqp5BUG.THQGb9BaD7.DupqEPbRKd5BApdv9AMUjspPCtBpWFMgm', '016678', '', '', 'Abul khan', 'rabeya bosri', 'Dhaka', 0, NULL, NULL, NULL, NULL, '2018-11-07', '', '', '', 'Ruet', 0000, 'Yes', '', 'Student', 'Pending', '', '2019-01-11 07:52:47', '2019-01-11 07:52:47'),
(33, NULL, 'Abul Ahad', 'rabiul05@gmail.com', '$2y$10$IGcvXiMMYfZjQZxOzyW8tuc6hNwn/XlO6H6u8/xt185aOfYg.7kFy', '0166787899', '017892222', 'This for test', 'Abul khan', 'rabeya bosri', 'Dhaka', 2, 49, 127, NULL, 'Chor Dunail', '2019-03-20', '', '', '', '', 0000, 'Yes', 'images/gISmi9D98VZpcKslZI9Ls25vxoA45nxUndK55bo5.png', 'Student', 'Active', 'o6lsw8hQSzeAly9SOekU7QKvij2yMwGl5uYYbzyVwfbzyuk3dIXTu5ce6R5m', '2019-01-11 07:56:22', '2019-01-12 16:43:47'),
(34, NULL, 'Rabiul', 'rabiul@gmail.com', '$2y$10$E77bIMEyi/.gTUadIyNHGuawxvKStCSMUCDfBTecjZFzKk96aAb2e', '123456', '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '', '/photos/1/LOGOg png.png', 'Admin', 'Active', 'ibEaui8GUObQ55o6qSnOOlL0CKPWsvsVtX9D44mOgtF1h0u2AhYny6JWHvOo', '2019-01-16 13:08:12', '2019-01-16 13:19:35'),
(35, NULL, 'Abul kashem', 'kashem@gmail.com', '$2y$10$4.JUGTzb.Esg5pql3nIEZOVsWzY3xdY7MYfaNjhBEM8bwcRnu8hIu', NULL, '', '', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', 0000, '', '', 'Admin', 'Active', 'hF78XD6l43YI2DzUTdeG9R6hHMUadEBQZd2oOgfiEnPkZ1jirpJfcPs9JTfZ', '2019-01-16 13:40:33', '2019-01-16 13:40:33'),
(44, NULL, 'rabiul islam', 'rabiulitclan@gmail.com', '$2y$10$hXUM.ZLI8VO.Ym41mer9veACpvTcG0q/Q8K7Jc/MwQl/zHPl/maO.', '0172383', '', '', 'jhygew', 'ertgre', 'erytr', 0, NULL, NULL, NULL, NULL, '2019-02-25', '', '', '', 'yyrty', 0000, 'Yes', '', 'Student', 'Active', '', '2019-02-05 04:06:15', '2019-02-05 04:10:57'),
(45, NULL, 'Md Hafizur', 'pmtcorporate@gmail.com', '$2y$10$JBuAwhhX84mxDR3pW7rzQOdReynqDA0s61aKfh7Au3MNzfgsknnGW', '01731376671', '', '', 'sdf', 'sdf', 'dsf', 0, NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', 'RUET', 0000, 'Yes', '', 'Student', 'Active', 'ZB3PQA3v1QiHfJ62UXFkF7rdOVLPj0BLi1zZDvlhSHHOQEjgJJJ1DaOMIE7S', '2019-03-02 17:56:33', '2019-03-02 17:59:31');

-- --------------------------------------------------------

--
-- Table structure for table `ic_users_course_fee`
--

CREATE TABLE `ic_users_course_fee` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_fee` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) NOT NULL,
  `total_payment` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ic_users_course_fee`
--

INSERT INTO `ic_users_course_fee` (`id`, `course_id`, `user_id`, `course_fee`, `discount`, `total_payment`, `created_at`, `updated_at`) VALUES
(3, 4, 2, '30.00', '0.00', '0.00', '2019-01-21 16:59:42', '2019-01-21 16:59:42'),
(5, 3, 2, '20.00', '0.00', '0.00', '2019-01-22 14:26:28', '2019-01-22 14:26:28'),
(6, 6, 2, '20000.00', '0.00', '0.00', '2019-01-28 16:39:53', '2019-01-28 16:39:53'),
(7, 4, 1, '30.00', '0.00', '0.00', '2019-02-02 11:25:19', '2019-02-02 11:25:19'),
(8, 6, 1, '20000.00', '0.00', '0.00', '2019-02-02 11:26:04', '2019-02-02 11:26:04'),
(9, 6, 1, '20000.00', '0.00', '0.00', '2019-02-03 16:03:28', '2019-02-03 16:03:28'),
(10, 6, 20, '20000.00', '0.00', '0.00', '2019-02-03 16:09:52', '2019-02-03 16:09:52');

-- --------------------------------------------------------

--
-- Table structure for table `ic_video`
--

CREATE TABLE `ic_video` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `video_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ic_video`
--

INSERT INTO `ic_video` (`id`, `title`, `video_link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'This for test', 'https://www.youtube.com/watch?v=nL56TEOTNSk', 'Active', '2019-01-18 04:39:25', '2019-01-18 04:43:46'),
(2, 'This for test', 'https://www.youtube.com/watch?v=Wsrcast_KBo', 'Active', '2019-01-18 05:17:48', '2019-01-18 05:17:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ic_application_course`
--
ALTER TABLE `ic_application_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_branch`
--
ALTER TABLE `ic_branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_cv_academic_summery`
--
ALTER TABLE `ic_cv_academic_summery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_cv_basic_info`
--
ALTER TABLE `ic_cv_basic_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_cv_exp_info`
--
ALTER TABLE `ic_cv_exp_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_cv_language_summery`
--
ALTER TABLE `ic_cv_language_summery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_cv_professional_summery`
--
ALTER TABLE `ic_cv_professional_summery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_cv_reference_summery`
--
ALTER TABLE `ic_cv_reference_summery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_cv_training_summery`
--
ALTER TABLE `ic_cv_training_summery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_districts`
--
ALTER TABLE `ic_districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `division_id` (`division_id`);

--
-- Indexes for table `ic_divisions`
--
ALTER TABLE `ic_divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_educational_infos`
--
ALTER TABLE `ic_educational_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_jobs`
--
ALTER TABLE `ic_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_jobs_category`
--
ALTER TABLE `ic_jobs_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_menu`
--
ALTER TABLE `ic_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_migrations`
--
ALTER TABLE `ic_migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_model_has_permissions`
--
ALTER TABLE `ic_model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `ic_model_has_roles`
--
ALTER TABLE `ic_model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `ic_news`
--
ALTER TABLE `ic_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_pages`
--
ALTER TABLE `ic_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_password_resets`
--
ALTER TABLE `ic_password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `ic_payments`
--
ALTER TABLE `ic_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_permissions`
--
ALTER TABLE `ic_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_product`
--
ALTER TABLE `ic_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_product_type`
--
ALTER TABLE `ic_product_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_roles`
--
ALTER TABLE `ic_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_role_assign`
--
ALTER TABLE `ic_role_assign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_role_has_permissions`
--
ALTER TABLE `ic_role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `ic_service`
--
ALTER TABLE `ic_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_service_type`
--
ALTER TABLE `ic_service_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_settings`
--
ALTER TABLE `ic_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_slider`
--
ALTER TABLE `ic_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_slider_category`
--
ALTER TABLE `ic_slider_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_templates`
--
ALTER TABLE `ic_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_trainers`
--
ALTER TABLE `ic_trainers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_training`
--
ALTER TABLE `ic_training`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_upazilas`
--
ALTER TABLE `ic_upazilas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `district_id` (`district_id`);

--
-- Indexes for table `ic_users`
--
ALTER TABLE `ic_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_users_course_fee`
--
ALTER TABLE `ic_users_course_fee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ic_video`
--
ALTER TABLE `ic_video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ic_application_course`
--
ALTER TABLE `ic_application_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ic_branch`
--
ALTER TABLE `ic_branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ic_cv_academic_summery`
--
ALTER TABLE `ic_cv_academic_summery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ic_cv_basic_info`
--
ALTER TABLE `ic_cv_basic_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `ic_cv_exp_info`
--
ALTER TABLE `ic_cv_exp_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `ic_cv_language_summery`
--
ALTER TABLE `ic_cv_language_summery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ic_cv_professional_summery`
--
ALTER TABLE `ic_cv_professional_summery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ic_cv_reference_summery`
--
ALTER TABLE `ic_cv_reference_summery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ic_cv_training_summery`
--
ALTER TABLE `ic_cv_training_summery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ic_districts`
--
ALTER TABLE `ic_districts`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `ic_divisions`
--
ALTER TABLE `ic_divisions`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ic_educational_infos`
--
ALTER TABLE `ic_educational_infos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ic_jobs`
--
ALTER TABLE `ic_jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ic_jobs_category`
--
ALTER TABLE `ic_jobs_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ic_menu`
--
ALTER TABLE `ic_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `ic_migrations`
--
ALTER TABLE `ic_migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ic_news`
--
ALTER TABLE `ic_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ic_pages`
--
ALTER TABLE `ic_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `ic_payments`
--
ALTER TABLE `ic_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ic_permissions`
--
ALTER TABLE `ic_permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `ic_product`
--
ALTER TABLE `ic_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ic_product_type`
--
ALTER TABLE `ic_product_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ic_roles`
--
ALTER TABLE `ic_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ic_role_assign`
--
ALTER TABLE `ic_role_assign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ic_service`
--
ALTER TABLE `ic_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ic_service_type`
--
ALTER TABLE `ic_service_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ic_settings`
--
ALTER TABLE `ic_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `ic_slider`
--
ALTER TABLE `ic_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ic_slider_category`
--
ALTER TABLE `ic_slider_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ic_templates`
--
ALTER TABLE `ic_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ic_trainers`
--
ALTER TABLE `ic_trainers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ic_training`
--
ALTER TABLE `ic_training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ic_upazilas`
--
ALTER TABLE `ic_upazilas`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=493;

--
-- AUTO_INCREMENT for table `ic_users`
--
ALTER TABLE `ic_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `ic_users_course_fee`
--
ALTER TABLE `ic_users_course_fee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ic_video`
--
ALTER TABLE `ic_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ic_model_has_permissions`
--
ALTER TABLE `ic_model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `ic_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ic_model_has_roles`
--
ALTER TABLE `ic_model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `ic_roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ic_role_has_permissions`
--
ALTER TABLE `ic_role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `ic_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `ic_roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

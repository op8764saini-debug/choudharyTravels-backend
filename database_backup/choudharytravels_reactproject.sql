-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2025 at 01:35 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `choudharytravels_reactproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `multiple_image` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `description2` longtext DEFAULT NULL,
  `short_description` longtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `image`, `multiple_image`, `description`, `description2`, `short_description`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Choudhary Travels', '1734603688_123jpg', '[\"1736424352_0.jpg\",\"1736424352_1.jpg\",\"1736424352_2.jpg\",\"1736424352_3.jpg\",\"1736424352_4.jpg\"]', 'Choudhary Travels is a renowned travel agency offering a wide range of services including tour packages, transport services, and travel bookings. Known for their customer-centric approach, they aim to provide hassle-free travel experiences with a focus on comfort, reliability, and affordability. Whether it\'s a family vacation, a corporate trip, or a group tour, Choudhary Travels ensures quality service and memorable journeys for every traveler.', '<p><b>Choudhary Travels</b> is a leading travel agency dedicated to providing exceptional travel experiences for individuals, families, and corporate clients. With years of experience in the travel industry, Choudhary Travels has established a reputation for offering reliable, comfortable, and affordable travel services. Their mission is to make every journey memorable by offering customized travel solutions that meet the unique needs and preferences of each customer.<span style=\"color: var(--bs-card-color); font-size: 0.875rem; font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">The agency provides a wide range of services, including domestic and international tour packages, group tours, transportation arrangements, hotel bookings, and flight reservations. Whether you\'re looking to explore scenic destinations, embark on a cultural adventure, or take a relaxing beach holiday, Choudhary Travels has options to suit all kinds of travelers.</span><span style=\"font-size: 0.875rem; color: var(--bs-card-color); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">One of the standout features of </span><span style=\"font-size: 0.875rem; color: var(--bs-card-color); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"><b>Choudhary Travels</b></span><span style=\"font-size: 0.875rem; color: var(--bs-card-color); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"> is their customer-centric approach. The team is dedicated to ensuring that every detail of your trip is taken care of, from planning and booking to ensuring smooth travel and on-ground support during your journey. Their expert travel advisors work closely with clients to design personalized itineraries that align with their interests, budget, and schedule.</span><span style=\"font-size: 0.875rem; color: var(--bs-card-color); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"><b>Choudhary Travels</b></span><span style=\"font-size: 0.875rem; color: var(--bs-card-color); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"> also offers specialized services for corporate travel, group tours, and pilgrimages, making it a one-stop solution for all types of travel needs. With a fleet of well-maintained vehicles, clients can enjoy hassle-free transport services for both short and long-distance travel.</span><span style=\"font-size: 0.875rem; color: var(--bs-card-color); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">As a trusted name in the industry, </span><span style=\"font-size: 0.875rem; color: var(--bs-card-color); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"><b>Choudhary Travels</b></span><span style=\"font-size: 0.875rem; color: var(--bs-card-color); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"> is committed to providing high-quality services, ensuring safety, and delivering great value to all travelers. Whether you are planning a solo trip, a family vacation, or a business trip, Choudhary Travels is your go-to travel partner for an unforgettable experience.</span></p>', 'Welcome to Choudhary Travel! We offer personalized travel solutions, including tours, flight bookings, and accommodations, ensuring your journeys are seamless, memorable, and stress-free. Let’s make your travel dreams a reality!', 1, '2024-08-20 01:14:17', '2025-08-27 23:18:43'),
(8, 'Hello', '1737446576_123webp', '[\"1737446576_0.webp\",\"1737446576_1.webp\",\"1737446576_2.webp\",\"1737446576_3.webp\",\"1737446576_4.webp\"]', 'Watch for time', 'Nice watch collection', 'watch collection', 0, '2025-01-21 08:02:56', '2025-01-21 12:14:43');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `image`, `description`, `date`, `status`, `created_at`, `updated_at`) VALUES
(7, 'Discover Your Next Adventure with Choudhary Travels', '1736153217_123jpg', 'Choudhary Travels’ blog offers insightful travel tips, destination guides, and helpful advice to inspire your next adventure. Stay tuned for updates!', '2024-08-23', 1, '2024-08-20 05:56:51', '2025-03-22 07:57:08'),
(8, 'Journey Beyond Destinations — Explore, Experience, Repeat with Choudhary Travel', '1742632807_123jpg', 'Choudhary Travel — Turning your travel dreams into unforgettable journeys. Explore new places, create lasting memories, and travel with comfort.', '2024-08-20', 1, '2024-08-20 05:59:09', '2025-03-22 08:40:07'),
(10, 'Exploring India with Choudhary Travels: Your Gateway to Unforgettable Journeys', '1745310881_123jpg', 'Explore India with Choudhary Travels: Premium buses, seamless bookings, and unforgettable journeys await. Your comfort, our priority.', '2025-01-15', 1, '2025-01-21 12:22:49', '2025-04-22 08:40:55');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT 0,
  `title` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `multiple_image` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `short_description` longtext DEFAULT NULL,
  `banner_image` varchar(250) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `parent_id`, `title`, `image`, `multiple_image`, `description`, `short_description`, `banner_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Bus', '1734595722_123.jpg', NULL, 'Are you looking for a luxurious or budget-friendly 20-seater bus rental in Jaipur? Look no further than&nbsp;<span style=\"color: rgb(117, 117, 117); font-family: Roboto, sans-serif;\"><b>Choudhary Travels</b></span>! We offer AC and non-AC coach rental with 18 to 20 seats in Jaipur, complete with a driver and cleaner, each with their own separate seat. Enjoy a comfortable ride throughout your trip at an economical price. Enjoy a comfortable ride during your journey by renting one of our 18-seater, 19-seater, or 20-seater buses at a rate per km. At&nbsp;<span style=\"color: rgb(117, 117, 117); font-family: Roboto, sans-serif;\"><b>Choudhary Travels</b></span>, we are proud to offer the latest vehicles and be one of the leading fleet owners and car/coach rental companies in Jaipur today. Trust us to provide you with an enjoyable and safe trip!', 'Are you looking for a luxurious or budget-friendly 20-seater bus rental in Jaipur', NULL, 1, '2024-12-12 09:48:26', '2025-03-22 07:07:19'),
(3, 1, '20 Seater Bus Rental', '1734602291_123jpg', '[\"1736511973_0.jpg\",\"1736511973_1.jpg\",\"1736511973_2.jpg\",\"1736511973_3.jpg\",\"1736511973_4.jpg\"]', 'Are you looking for a luxurious or budget-friendly 20-seater bus rental in Jaipur? Look no further than Choudhary Travels! We offer AC and non-AC coach rental with 18 to 20 seats in Jaipur, complete with a driver and cleaner, each with their own separate seat. Enjoy a comfortable ride throughout your trip at an economical price. Enjoy a comfortable ride during your journey by renting one of our 18-seater, 19-seater, or 20-seater buses at a rate per km.&nbsp;we are proud to offer the latest vehicles and be one of the leading fleet owners and car/coach rental companies in Jaipur today. Trust us to provide you with an enjoyable and safe trip!', 'Are you looking for a luxurious or budget-friendly 20-seater bus rental in Jaipur', '1734602258_123jpg', 1, '2024-12-12 10:01:48', '2025-03-22 07:10:12'),
(5, 1, '45 Seater Bus Rental', '1734602395_123jpg', '[\"1736511999_0.jpg\",\"1736511999_1.jpg\",\"1736511999_4.jpg\",\"1744183078_0.jpeg\",\"1744183078_1.jpeg\",\"1744183078_2.jpeg\",\"1744183078_3.jpeg\",\"1744183078_4.jpeg\"]', 'Choudhary Travels in Jaipur offers a wide selection of fleets, including 40-seater, 41-seater, 42-seater, 44-seater &amp; 45 Seater (2X2), 2X1 AC, and NON-AC buses hire throughout Jaipur and Rajasthan. Whether you’re looking for an affordable way to travel or simply need reliable transport services, our fleet has something to suit your needs. \r\n\r\nWe offer the best 45-seater bus rentals in Jaipur, Rajasthan. Whether you’re planning a family trip, group tour, wedding function, or corporate event – we have everything you need for your journey! Our luxury AC buses provide spacious seating and top-notch facilities to ensure that your ride is comfortable and memorable. Plus, our rates are highly competitive so you can rest assured knowing that you’ll get the most value for your money. So book with us today and enjoy an unforgettable journey with friends or family in one of our luxurious 45-seater buses!', 'Are you looking for a luxurious or budget-friendly 45-seater bus rental in Jaipur.', '1734602333_123jpg', 1, '2024-12-12 13:00:56', '2025-04-09 07:17:58'),
(6, 4, '21 Seater Tempo', NULL, NULL, 'A 17-seater tempo traveller on rent can accommodate 17 passengers for a comfortable journey. Choudhary Travel offers 17 Seater luxury tempo travellers in Jaipur at a per km rate with 17 pushback seats for a comfortable journey. A 16-seater tempo traveler is the most reliable and comfortable vehicle with a 2+1 seating arrangement. For groups of 17 or less, a 17 seat tempo traveler is the perfect vehicle because it has a separate seat for the driver.', 'dsfs', NULL, 1, '2024-12-12 13:07:14', '2024-12-13 09:46:03'),
(7, 4, '17 Seater Tempo', NULL, NULL, 'A 17-seater tempo traveller on rent can accommodate 17 passengers for a comfortable journey. Choudhary Travel offers 17 Seater luxury tempo travellers in Jaipur at a per km rate with 17 pushback seats for a comfortable journey. A 16-seater tempo traveler is the most reliable and comfortable vehicle with a 2+1 seating arrangement. For groups of 17 or less, a 17 seat tempo traveler is the perfect vehicle because it has a separate seat for the driver.', 'dfs', NULL, 1, '2024-12-12 13:09:11', '2024-12-13 09:46:38'),
(24, 0, 'Tempo Traveler', '1734596142_123jpg', NULL, 'A 17-seater tempo traveller on rent can accommodate 17 passengers for a comfortable journey. ChoudharyTravel offers 17 Seater luxury tempo travellers in Jaipur at a per km rate with 17 pushback seats for a comfortable journey. A 17-seater tempo traveler is the most reliable and comfortable vehicle with a 2+1 seating arrangement. For groups of 17 or less, a 17 seat tempo traveler is the perfect vehicle because it has a separate seat for the driver.', 'ChoudharyTravel offers 17 Seater luxury tempo travellers in Jaipur', NULL, 1, '2024-12-19 08:15:42', '2025-01-11 11:11:46'),
(25, 24, '17 Seater Tempo Traveler', '1734601564_123jpg', '[\"1736512498_0.jpg\",\"1736512498_1.jpg\",\"1736512498_2.jpg\",\"1736512498_3.jpg\",\"1736512498_4.jpg\",\"1736512498_5.jpg\"]', 'A 17-seater tempo traveller on rent can accommodate 17 passengers for a comfortable journey. ChoudharyTravel offers 17 Seater luxury tempo travellers in Jaipur at a per km rate with 17 pushback seats for a comfortable journey. A 17-seater tempo traveler is the most reliable and comfortable vehicle with a 2+1 seating arrangement. For groups of 17 or less, a 17 seat tempo traveler is the perfect vehicle because it has a separate seat for the driver.', 'ChoudharyTravel offers 17 Seater luxury tempo travellers in Jaipur', '1734602068_123jpg', 1, '2024-12-19 08:18:43', '2025-01-10 12:34:58'),
(26, 24, '21 Seater Tempo Traveler Rental', '1734596499_123jpg', '[\"1736512627_0.jpg\",\"1736512627_1.jpg\",\"1736512627_2.jpg\",\"1736512627_3.jpg\",\"1736512627_4.jpg\",\"1736512627_5.jpg\",\"1736512627_6.jpg\",\"1736512627_7.jpg\"]', 'A 21-seater tempo traveller on rent can accommodate 21 passengers for a comfortable journey. ChoudharyTravel offers 21 Seater luxury tempo travellers in Jaipur at a per km rate with 21 pushback seats for a comfortable journey. A 21-seater tempo traveler is the most reliable and comfortable vehicle with a 2+1 seating arrangement. For groups of 21 or less, a 21 seat tempo traveler is the perfect vehicle because it has a separate seat for the driver.', 'ChoudharyTravel offers 21 Seater luxury tempo travellers in Jaipur', '1734602080_123jpg', 1, '2024-12-19 08:21:39', '2025-01-10 12:37:07'),
(51, 1, '12 Seater', '677fb51f46f0f_123.webp', '[\"1736422687_0.jpg\",\"1736422687_1.jpg\"]', 'Write your description here...qqwweerrt', 'qwert', '677fb51f4770b_123.jpg', 0, '2025-01-09 11:38:07', '2025-01-21 12:18:59'),
(52, 1, '27 Seater Bus Rental', '67de79ce00ebf_123.jpg', '[\"1742633422_3.jpeg\",\"1742633422_4.jpeg\",\"1742633422_5.jpeg\",\"1742633899_0.jpeg\",\"1742633899_1.jpeg\"]', '<strong style=\"font-size: 0.875rem; color: var(--bs-card-color); text-align: var(--bs-body-text-align);\">27-Seater Bus Hire in Jaipur – Choudhary Travels</strong><p>Choudhary Travels in Jaipur offers reliable and affordable <strong>27-seater bus rental services</strong> for all your travel needs. Whether it\'s a <strong>family trip</strong>, <strong>group tour</strong>, <strong>wedding function</strong>, or <strong>corporate event</strong>, our 27-seater buses provide <strong>spacious seating</strong>, <strong>comfortable interiors</strong>, and <strong>modern amenities</strong> to make your journey memorable.</p>\r\n<span style=\"font-size: 0.875rem; color: var(--bs-card-color); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">With both </span><strong style=\"font-size: 0.875rem; color: var(--bs-card-color); text-align: var(--bs-body-text-align);\">AC and NON-AC</strong><span style=\"font-size: 0.875rem; color: var(--bs-card-color); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"> options available, we ensure that your travel experience is smooth and hassle-free. Our competitive rates guarantee excellent value for money. So, if you\'re looking for a dependable transport solution in </span><strong style=\"font-size: 0.875rem; color: var(--bs-card-color); text-align: var(--bs-body-text-align);\">Jaipur</strong><span style=\"font-size: 0.875rem; color: var(--bs-card-color); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"> or </span><strong style=\"font-size: 0.875rem; color: var(--bs-card-color); text-align: var(--bs-body-text-align);\">Rajasthan</strong><span style=\"font-size: 0.875rem; color: var(--bs-card-color); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">, book with </span><strong style=\"font-size: 0.875rem; color: var(--bs-card-color); text-align: var(--bs-body-text-align);\">Choudhary Travels</strong><span style=\"font-size: 0.875rem; color: var(--bs-card-color); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"> today and enjoy a safe, comfortable, and unforgettable ride!</span>ere...', 'Are you looking for a luxurious or budget-friendly 27-seater bus rental in Jaipur.', '67de79ce01398_123.jpg', 1, '2025-03-22 08:50:22', '2025-03-22 08:58:19'),
(53, 24, '27 Seater Tempo Traveler', '67de7d31a4fd6_123.jpg', '[\"1742634289_0.jpeg\",\"1742634289_1.jpeg\",\"1742634289_2.jpeg\",\"1742634289_3.jpeg\"]', '<strong style=\"font-size: 0.875rem; color: var(--bs-card-color); text-align: var(--bs-body-text-align);\">27-Seater Tempo Traveller on Rent in Jaipur – Choudhary Travels</strong><p>A <strong>27-seater tempo traveller</strong> is the ideal choice for larger groups seeking a comfortable and reliable journey. Choudhary Travels offers <strong>27-seater luxury tempo travellers</strong> in Jaipur at competitive <strong>per km rates</strong>, ensuring an affordable yet premium travel experience.</p>\r\n<p>With <strong>27 pushback seats</strong>, a <strong>2+1 seating arrangement</strong>, and a <strong>separate seat for the driver</strong>, our tempo travellers provide ample space and comfort for group tours, family trips, weddings, or corporate events. Whether you’re traveling in Jaipur or across Rajasthan, our well-maintained vehicles promise a smooth and memorable ride.</p>\r\n<span style=\"font-size: 0.875rem; color: var(--bs-card-color); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Book your </span><strong style=\"font-size: 0.875rem; color: var(--bs-card-color); text-align: var(--bs-body-text-align);\">27-seater tempo traveller</strong><span style=\"font-size: 0.875rem; color: var(--bs-card-color); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"> with </span><strong style=\"font-size: 0.875rem; color: var(--bs-card-color); text-align: var(--bs-body-text-align);\">Choudhary Travels</strong><span style=\"font-size: 0.875rem; color: var(--bs-card-color); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"> today for a hassle-free and enjoyable journey!</span>&nbsp;here...', 'ChoudharyTravel offers 27 Seater luxury tempo travellers in Jaipur', '67de7d31a57c8_123.jpg', 1, '2025-03-22 09:04:49', '2025-03-22 09:04:49'),
(54, 1, '45 Seater Bus Rental', '67f6195c7ca4c_123.jpg', '[\"1744182894_0.jpeg\",\"1744182894_1.jpeg\",\"1744182894_2.jpeg\",\"1744183120_0.jpeg\",\"1744183120_1.jpeg\",\"1744183120_2.jpeg\",\"1744183120_3.jpeg\",\"1744183120_4.jpeg\"]', 'Write your description here...Choudhary Travels in Jaipur offers a wide selection of fleets, including 40-seater, 41-seater, 42-seater, 44-seater &amp; 45 Seater (2X2), 2X1 AC, and NON-AC buses hire throughout Jaipur and Rajasthan. Whether you’re looking for an affordable way to travel or simply need reliable transport services, our fleet has something to suit your needs. We offer the best 45-seater bus rentals in Jaipur, Rajasthan. Whether you’re planning a family trip, group tour, wedding function, or corporate event – we have everything you need for your journey! Our luxury AC buses provide spacious seating and top-notch facilities to ensure that your ride is comfortable and memorable. Plus, our rates are highly competitive so you can rest assured knowing that you’ll get the most value for your money. So book with us today and enjoy an unforgettable journey with friends or family in one of our luxurious 45-seater buses!', 'Are you looking for a luxurious or budget-friendly 45-seater bus rental in Jaipur.', '67f6195c7d01f_123.jpg', 1, '2025-04-09 06:53:16', '2025-04-09 07:18:40'),
(55, 1, '49 Seater Bus Rental', '67f61c396aded_123.jpg', '[\"1744182451_0.jpg\",\"1744182451_1.jpeg\",\"1744182451_2.jpeg\",\"1744182451_3.jpeg\"]', '<p><strong>Choudhary Travels</strong> provides <strong>49-seater AC bus rentals</strong> in Jaipur for group tours, weddings, corporate events, and family trips. Our buses feature <strong>comfortable pushback seats, ample legroom, modern amenities, and professional drivers</strong> for a smooth journey. Enjoy <strong>affordable rates and top-notch service</strong> across Rajasthan. <strong>Book now</strong> for a luxurious and hassle-free travel experience! 🚍✨</p>', 'Are you looking for a luxurious or budget-friendly 49-seater bus rental in Jaipur.', '67f61b976f497_123.jpg', 1, '2025-04-09 07:02:47', '2025-04-09 07:07:31');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `image`, `designation`, `description`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Priya Mehta, Jaipur', '1737100778_123png', '\"Reliable and Comfortable Journey!\"', 'I recently booked a trip with Choudhary Travels and was extremely impressed by the professionalism and punctuality. The bus was clean, the driver was courteous, and the entire journey was smooth. Highly recommended for anyone looking for a hassle-free travel experience!', 1, '2024-11-12 12:22:24', '2025-04-23 08:26:22'),
(5, 'Rahul Sharma, Delhi', '1737100850_123png', '\"Great Service and Value for Money!\"', 'I\'ve used Choudhary Travels multiple times for both personal and business trips. They always deliver on time, their vehicles are well-maintained, and the customer service is top-notch. Definitely my go-to travel agency.', 1, '2024-12-19 10:55:00', '2025-04-23 08:27:33'),
(6, 'Manish Rajput', '1737462365_123png', '\"Safe and Family-Friendly!\"', 'We traveled with our kids from Jaipur to Jodhpur and felt completely safe throughout the trip. The driver was very cooperative and even made helpful stops for food and rest. Thank you, Choudhary Travels, for making our family trip so memorable!', 1, '2025-01-21 12:26:05', '2025-04-23 08:30:39'),
(7, 'Sherya Thhakur', '1756550315_123jpg', '\"Great Service and Value for Money!\"', 'I\'ve used Choudhary Travels multiple times for both personal and business trips. They always deliver on time, their vehicles are well-maintained, and the customer service is top-notch. Definitely my go-to travel agency.', 1, '2025-08-30 05:08:34', '2025-08-30 05:08:35');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(9, 'Kavis Sharma', 'abc@gmail.com', 'Jaipur to Prayagraj', 'we are planning go jaipur to Prayagraj with 17 members', '2025-01-17 11:22:04', '2025-01-17 11:22:04'),
(11, 'igefww', 'admin@gmail.com', 'Web Development', 'wdd', '2025-01-22 09:44:13', '2025-01-22 09:44:13'),
(12, 'Wasim Ahamad', 'info@digigrowinfotech.com', 'Enhance Your Website\'s Lead Generation with Modern Design and Functionality', 'hdxdxdgf', '2025-01-24 10:09:08', '2025-01-24 10:09:08'),
(21, 'aabid', 'omparkashsaini6289@gmail.com', 'hello', 'heelo', '2025-03-20 08:32:29', '2025-03-20 08:32:29'),
(26, 'op', 'op@gmail.com', 'enquiry', 'ok', '2025-08-31 06:44:14', '2025-08-31 06:44:14'),
(33, 'Test User', 'test@example.com', 'API Test', 'Hello, this is a dummy test from Thunder Client', '2025-08-31 06:51:06', '2025-08-31 06:51:06'),
(34, 'op', 'op2@gmail.com', 'okks', 'okk', '2025-08-31 07:15:39', '2025-08-31 07:15:39'),
(35, 'op', 'op@gmail.com', 'ok', 'ok', '2025-09-01 00:34:32', '2025-09-01 00:34:32');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `index_forms`
--

CREATE TABLE `index_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `datetime` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `persons` varchar(255) DEFAULT NULL,
  `categories` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `index_forms`
--

INSERT INTO `index_forms` (`id`, `name`, `email`, `datetime`, `mobile`, `persons`, `categories`, `description`, `created_at`, `updated_at`) VALUES
(175, 'e', 'rahul@gmail.com', '08/29/2025 2:41 PM', '87647258060', 'Person 2', 'Category 2', NULL, '2025-08-30 04:19:33', '2025-08-30 04:19:33'),
(176, NULL, 'test4@gmail.com', '08/30/2025 2:41 PM', '08764725806', 'Person 2', 'Category 2', 'fsdf', '2025-08-30 04:33:18', '2025-08-30 04:33:18'),
(177, NULL, 'op2@gmail.com', '08/30/2025 3:34 PM', '08764725806', 'Person 2', 'Category 2', 'ok', '2025-08-30 04:34:14', '2025-08-30 04:34:14'),
(178, 'op', 'rohit3@gmail.com', '09/03/2025 3:34 PM', '87647258060', 'Person 3', 'Category 2', 'ok', '2025-08-30 04:34:53', '2025-08-30 04:34:53'),
(179, NULL, 'test4@gmail.com', '09/06/2025 3:37 PM', '08764725806', 'Person 1', 'Category 1', 'test', '2025-08-30 04:38:09', '2025-08-30 04:38:09'),
(180, 'test2', 'test2@gmail.com', '08/30/2025 2:41 PM', '08764725806', 'Person 2', 'Category 2', NULL, '2025-08-30 04:42:33', '2025-08-30 04:42:33'),
(181, 'test', 'test@gmail.com', '08/30/2025 2:41 PM', '7894561223', 'Person 1', 'Category 1', NULL, '2025-08-30 04:43:39', '2025-08-30 04:43:39');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_08_26_113602_create_personal_access_tokens_table', 2),
(5, '2025_09_01_101729_create_personal_access_tokens_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car_name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `car_name`, `image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Bus Rental', '1733897974_123jpg', 'Standard Bus for a drive around the city at your services', 1, '2024-08-20 03:22:00', '2025-01-22 05:27:06'),
(2, 'Tempo Traveler', '1733898020_123jpg', 'Standard Tempo Traveler for a drive around the city at your service', 1, '2024-08-20 03:45:05', '2025-01-22 05:30:32'),
(3, 'Car Rental', '1733898150_123jpg', 'Standard Car Rental for a drive around the city at your service', 1, '2024-08-20 03:46:40', '2025-01-22 05:27:43');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `travel_name` varchar(250) DEFAULT NULL,
  `price` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `short_description` longtext DEFAULT NULL,
  `banner_image` varchar(250) DEFAULT NULL,
  `multiple_image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `travel_name`, `price`, `image`, `description`, `short_description`, `banner_image`, `multiple_image`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Wedding & Events', NULL, '1744184109_123jpg', '<p>At <strong>Choudhary Travels</strong>, we specialize in providing luxurious, reliable, and tailored transportation services for weddings and events. We understand that these moments are special, and we are dedicated to ensuring that your transportation is seamless, elegant, and stress-free. Whether it\'s a grand wedding, a corporate event, or a private celebration, we offer a fleet of high-end vehicles to suit your style and needs.</p>\r\n<p>Our professional and experienced chauffeurs are committed to providing you and your guests with exceptional service, ensuring timely arrivals and a smooth, comfortable journey. From the bride’s arrival to guest transfers, we handle all the details, so you can focus on enjoying the occasion.</p>\r\n<p>With <strong>Choudhary Travels</strong>, you can trust that your transportation will be a key part of making your event unforgettable. We work closely with you to accommodate any specific requests and ensure everything runs smoothly from start to finish. Let us be a part of your special day, delivering elegance, luxury, and reliability every step of the way.</p>', 'Choudhary Travels offers luxurious transportation for weddings and events, ensuring comfort, elegance, and punctuality for a memorable experience.', '1733742551_123jpg', '[\"1736510889_0.jpeg\",\"1736510889_1.jpeg\",\"1736510889_2.jpg\",\"1736510889_3.jpeg\"]', 1, '2024-08-17 04:39:47', '2025-04-09 07:35:09'),
(6, 'Corporate Meetings / Trips', NULL, '1744184091_123jpg', '<p><strong>Choudhary Travels</strong> offers exceptional transportation services for corporate meetings, trips, and events, ensuring that your business travel is smooth, professional, and stress-free. We understand the importance of punctuality and reliability in the corporate world, which is why our fleet of modern, well-maintained vehicles is always ready to provide comfort and efficiency.</p>\r\n<p>Whether you’re attending a meeting, conference, or business trip, our experienced chauffeurs ensure timely arrivals and a smooth, comfortable journey. With a focus on professionalism, safety, and customer satisfaction, <strong>Choudhary Travels</strong> offers a seamless travel experience that lets you focus on your business, while we take care of the rest.</p>\r\n<p>From single-day trips to long-term corporate travel, we offer flexible packages to suit your needs. Trust <strong>Choudhary Travels</strong> for all your business transportation needs, and experience the highest level of comfort and convenience.</p>', 'Choudhary Travels offers reliable and luxurious transportation services, providing safe, punctual, and comfortable rides for corporate meetings, business trips.', '1733744385_123jpg', '[\"1736510656_0.avif\",\"1736510656_1.jpg\",\"1736510656_2.jpg\",\"1736510656_3.webp\"]', 1, '2024-08-17 05:08:51', '2025-04-09 07:34:51'),
(17, 'School & College Trips', NULL, '1744189096_123jpg', '<p><strong>Choudhary Travels</strong> offers safe, reliable, and comfortable transportation services for school and college trips. Whether it\'s a field trip, sports event, or a day excursion, we understand the importance of safety and punctuality when it comes to transporting students. Our fleet of modern, well-maintained vehicles ensures that students travel in comfort and style, with ample space for luggage or equipment.</p>\r\n<p>With a focus on safety, our experienced drivers are thoroughly vetted and trained to handle group transportation, ensuring a smooth and secure experience throughout the journey. We prioritize on-time arrivals and departures, so both students and teachers can enjoy their trip without worries.</p>\r\n<p>For school and college administrators, <strong>Choudhary Travels</strong> provides a reliable, hassle-free transportation solution that makes planning trips easier. Trust us to make your next school or college trip enjoyable, safe, and stress-free.</p>', 'Choudhary Travels offers safe, reliable, and comfortable transportation for school and college trips, ensuring punctuality, peace of mind, and a smooth experience for all passengers.', '1733894894_123jpg', '[\"1736510490_0.jpeg\",\"1736510490_1.jpg\",\"1736510490_2.jpg\",\"1736510490_3.jpeg\"]', 1, '2024-12-10 23:58:14', '2025-04-09 08:58:16'),
(20, 'Airport Transfer Service', NULL, '1744186859_123jpg', '<p>At <strong>Choudhary Travels</strong>, we are committed to delivering exceptional airport transfer services, prioritizing safety, reliability, and customer satisfaction. With years of experience in the travel industry, we recognize the importance of timely and hassle-free transfers. Our fleet of modern vehicles, coupled with professional drivers, guarantees a smooth, comfortable journey from start to finish, ensuring you arrive at your destination relaxed and on time. Trust <strong>Choudhary Travels</strong> for all your airport transfer needs.</p>\r\n<p data-start=\"1278\" data-end=\"1402\" class=\"\"></p>', 'Welcome to Choudhary Travels, where comfort is our priority. We offer timely airport transfers to all major airports, ensuring a smooth journey for both business and leisure travelers.', '1733896934_123jpg', '[\"1736510185_0.jpg\",\"1736510185_1.jpg\",\"1736510185_2.webp\",\"1736510185_3.png\"]', 1, '2024-12-11 00:32:14', '2025-04-09 08:20:59'),
(27, 'Taj Mahal One Day Tri', NULL, '1736589252_123jpg', 'Write your description here...', 'sa', '1736589252_123jpg', '[\"1736589253_0.jpg\",\"1736589253_1.jpg\"]', 0, '2025-01-11 09:54:12', '2025-01-11 09:54:55');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2EAbeCouOYdKtsB7XMt3TuZaC7nIBtYZGU98Zh7R', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiU3pKTHZ4STJhTmtqeHFZZ2w1eWlsaTgzNnd3d3JQN25MSnVMaVZucCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1756777380),
('2gfN3hiKjXm1B2dF9hRfWCYX9AqZuUrYcBzLeL4a', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWnVXNlhzeTdWZElNaGhuaFF3TmVybzNLRG9xTlpoSjE5STRUOVBreCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1756795162),
('9yUPewVZpSTEfmLgupqYJb4WZCYZW28cFrGFhQsK', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVjhMZjR6ZzN1cXRZZ3AwWlg5UldaRTJYZkJ1eXpob3Y4UjdUNHFXNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1759570732),
('gPzCWPnNjTZ5uGppxW2AytF8Wry1nDd7tR1WTwXw', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibXVpZkVsSGpybzdURU8ycEs1RVRDckRyTTR4NWk1dGFsbzc5RWlTRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1756707254),
('JfjSSGnvmFtvBc9yZCxHySc9EfxNxOAAflDxSOAg', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMFFVQmV2OXIzcEZLenpCM1NFSm5BM0pxaWw2QXdFSk1VTzdmcXViMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1756740685),
('oTUFzNtG5c6ktbtnr9t63ioMJ2K7QxTnDz7Y3wvc', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMDV2OHNqdXl0UnhTbzFTUnY1eFdNU1NxYzlhSGpRb0Y4N1kyS3VDYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1758609166),
('pp8Cxxt7BqipIV4ORp06MNzKxpyhXf0OA3GkFbkA', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibDF5UnpZNkJlbGh3VjNYT0hLcER3SDliU3dUWnNJeTg5NG5td2JCaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9jb250YWN0X2RldGFpbHM/cGFnZT0xIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MjoibG9naW5fYWRtaW5fNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=', 1756644353),
('VsBLFjFw1EOICcQEPunXEbgE2fxCERdGjtcdM2mz', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYVB5QzViRVJTZjgxU1ZuTzVnTzI1cGhGTW1HOHdhckd2QTh5Wmk4ZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1757693048);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'aa', '1735895636_123jpg', 1, '2024-08-16 00:31:13', '2025-01-21 12:08:21'),
(2, 'ab', '1735895645_123jpg', 1, '2024-08-16 00:31:50', '2025-01-03 09:14:05'),
(4, 'ac', '1735895659_123jpg', 1, '2024-08-16 23:56:24', '2025-01-03 09:14:19'),
(19, 'ad', '1735554502_123webp', 1, '2024-12-25 07:54:02', '2025-01-11 11:09:14'),
(21, 'ab', '1737461332_123jpg', 0, '2025-01-21 12:08:52', '2025-01-21 12:09:34');

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'WEEKEND TOUR', '1724321426_123jpg', '2024-08-22 04:12:48', '2024-08-22 04:40:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('customer','admin') NOT NULL DEFAULT 'customer',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'testing', 'testing@gmail.com', NULL, '$2y$12$QNjHU.TPBmW6O4/pnp2qUejFcUNNg2S/0g/0DhbdQAGqHsj.XlSAi', 'customer', NULL, '2025-08-24 05:06:33', '2025-08-24 05:06:33'),
(2, 'omprakash saini', 'op@gmail.com', NULL, '$2y$12$YhhQo.Up8suarZEjIT.Ys.2k209GlwBXEBw8Zc/L4FuYsH9xviNmm', 'admin', NULL, '2025-08-24 05:17:28', '2025-08-24 05:17:28'),
(3, 'rk', 'rk@gmail.com', NULL, '$2y$12$onIYUuAl5KSjw0gOC.7oS.0j4TdFr1xUYZbZo7ImdWTIfBa/oNg9.', 'customer', NULL, '2025-09-01 03:51:46', '2025-09-01 03:51:46'),
(4, 'ramesh', 'ramesh@gmail.com', NULL, '$2y$12$QB10GNw/owlBKLNg.9cXIuyIwHw/B.TjK6kSAy.7slq0Yn44B1KvG', 'customer', NULL, '2025-09-01 04:28:00', '2025-09-01 04:28:00'),
(5, 'sita', 'sita@gmail.com', NULL, '$2y$12$/H/fxJ1ga0NWo61rxphJ/ebokiIRBQaghgsILGW/xQkiDjzBZwTzq', 'customer', NULL, '2025-09-01 04:34:16', '2025-09-01 04:34:16'),
(6, 'ram', 'ram@gmail.com', NULL, '$2y$12$WZ3jRZCXIm2oB1vDKOj2DehR4DlnEbcNsv7OfcWNkGkip/fb8y2XK', 'customer', NULL, '2025-09-01 04:39:05', '2025-09-01 04:39:05'),
(7, 'om ji', 'op2@gmail.com', NULL, '$2y$12$8.UCUO54fYEouzUC2Rl.n.T7ssGwKn.V8MGCroLJwB7XK.sqxm4Iq', 'customer', NULL, '2025-09-01 07:17:41', '2025-09-01 07:17:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `index_forms`
--
ALTER TABLE `index_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`),
  ADD KEY `personal_access_tokens_expires_at_index` (`expires_at`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `index_forms`
--
ALTER TABLE `index_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

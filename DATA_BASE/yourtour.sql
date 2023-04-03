-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2023 at 12:40 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yourtour`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Egypt', 'egypt.png', 'Egypt has one of the longest histories of any country, tracing its heritage along the Nile Delta\r\n', NULL, NULL),
(2, 'Jordan', 'jordan.png', 'the geography offered makes Jordan an attractive tourism destination', NULL, NULL),
(3, 'Maldives ', 'Maldives.png', 'Maldives is largely flat and has no land features such as hills or rivers, but some islands have dunes\r\n', NULL, NULL),
(4, 'Turkey', 'turkey.png', 'Turkey is famous for the Blue Mosque, the New Mosque, the Hagia Sophia', NULL, '2023-03-08 03:14:36');

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
-- Table structure for table `feeds`
--

CREATE TABLE `feeds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneNumber` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feeds`
--

INSERT INTO `feeds` (`id`, `name`, `email`, `phoneNumber`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(11, 'mohammad', 'mohammadalnuqeiti@gmail.com', 790369501, 'question', 'HOW DO I BOOK FROM THE SITE', NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_25_063140_create_categories_table', 1),
(6, '2023_01_25_063926_create_trips_table', 1),
(7, '2023_01_25_064119_create_reservations_table', 1),
(8, '2023_01_30_092219_create_feeds_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phoneNumber` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `trip_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `number_of_guest` int(11) NOT NULL DEFAULT 1,
  `comment` text DEFAULT NULL,
  `res_date` date NOT NULL,
  `res_stop` date DEFAULT NULL,
  `price` decimal(8,2) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `first_name`, `last_name`, `phoneNumber`, `email`, `user_id`, `trip_id`, `status`, `number_of_guest`, `comment`, `res_date`, `res_stop`, `price`, `deleted_at`, `created_at`, `updated_at`) VALUES
(16, 'mohammad', 'ddd', 1234567890, 'mohammadalnuqeiti@gmail.com', 1, 8, 'Accepted', 2, NULL, '2023-01-28', NULL, '895.95', '2023-01-29 12:01:46', '2023-01-29 10:33:43', '2023-01-29 12:01:46'),
(21, 'mohammad', 'alnuqeiti', 1234567890, 'mohammadalnuqeiti@gmail.com', 1, 2, 'Accepted', 3, 'bhkbkh', '2023-02-28', NULL, '637.65', NULL, '2023-01-29 15:16:24', '2023-02-01 10:28:12'),
(24, 'mohammad', 'alnuqeiti', 1234567890, 'mohammadalnuqeiti@gmail.com', 1, 1, 'Rejected', 2, 'bjjnlj', '2023-02-19', NULL, '607.90', NULL, '2023-01-30 18:40:47', '2023-02-01 04:14:14'),
(26, 'mohammad', 'alnuqeiti', 790369501, 'admin@gmail.com', 1, 6, 'Accepted', 3, 'mm', '2023-02-25', NULL, '226.95', NULL, '2023-01-31 09:13:00', '2023-01-31 09:20:52'),
(29, 'mohammad', 'alnuqeiti', 790369501, 'mohammadalnuqeiti@gmail.com', 7, 5, 'Accepted', 2, '--', '2023-04-26', NULL, '99.18', NULL, '2023-03-07 08:47:42', '2023-03-07 08:48:04');

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `long_description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `guest_number` int(11) NOT NULL DEFAULT 1,
  `price` decimal(8,2) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`id`, `name`, `short_description`, `long_description`, `image`, `image2`, `category_id`, `guest_number`, `price`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '4 Days Nile Cruise Luxor, Aswan, Abu Simbel', 'Discover the most fascinated historical temples in Abu Simbel for the Pharaoh Ramses ', 'Join the trip with sail from Aswan to Luxor, with plenty of stops along the way to visit ancient temples. On-board amenities include a swimming pool, buffet meals, and live entertainment every evening. During the day, you\'ll visit attractive destinations according to the itinerary', 'egypt1.png', 'egypt1inside.png', 1, 1, '303.95', NULL, NULL, NULL),
(2, '3 Days Tour of the Pyramids, Egyptian Museum and Bazaar from Cairo', 'Experience Cairo’s very best on a private, full-day tour that takes in ancient sites, artifacts, and a bustling bazaar.', 'Experience Cairo’s very best on taking in ancient sites, artifacts, and a bustling bazaar. Ride a camel through the sand beside the soaring pyramids, visiting the Egyptian Museum and explore the stunning collection of artifacts, mummies and royal treasures.', 'egypt2.png', 'egypt2inside.png', 1, 1, '212.55', NULL, NULL, NULL),
(3, '4 Days Sharm El Sheikh Desert Adventure', 'Enjoy a desert adventure. See the beautiful scenery of the Sharm El Sheikh\n', 'For a perfect vacation in Sharm El Sheikh, let take part in a desert adventure. This trip includes five separate activities: quad biking, camel riding, dinner, a show, and gazing at the myriad of stars that populate the desert sky.', 'egypt3.png', 'egypt3inside.png', 1, 1, '283.40', NULL, NULL, NULL),
(4, 'Petra day tour', 'Petra, the great Ancient City that lies half-hidden in the wind-blown landscape in southern Jordan\r\n', 'Join our Petra Day Tour starting in Petra for a once-in-a-lifetime experience of the lost city of Petra. After making your own way to the historic site, You will experience this UNESCO World Heritage site with a group of like-minded travelers, with a maximum group size of 25 travelers per guide. Petra is one of the Seven Wonders of the World. The Nabatean City was lost for many centuries, before being rediscovered just 200 years ago.', 'jordan1.png', 'jordan1inside.png', 2, 1, '85.02', NULL, NULL, NULL),
(5, 'Dead Sea', 'Not only the lowest spot on earth, but also the saltiest and most mineral-laden body of water in the world', 'The Dead Sea is renowned for its mineral-rich water. Wellness devotees believe the water has healing properties for the skin. Don\'t plan to swim laps, though – the Dead Sea is so dense and salient that all you can really do is float atop the surface\r\n', 'jordan2.png', 'jordan2inside.png', 2, 1, '49.59', NULL, NULL, NULL),
(6, 'Wadi Rum', 'Adventure lovers, eat your heart out: The Bedouin, a cultural group that lives in the area, have transformed the Wadi Rum into an ecotourism playground', 'A full day includes lunch in the desert and the sunset. And plenty of time to see all the main sites: the ancient inscriptions and drawings deep inside Khazali, huge sand-dunes, rock bridges, the real Lawrence\'s spring at Al Shallaleh above the 2,000 year old Nabatean temple, quiet cool canyons and breath-taking views. You can walk or ride or have an hour or two by camel.', 'jordan3.png', 'jordan3inside.png', 2, 1, '75.65', NULL, NULL, NULL),
(7, '5 Days Bandos Maldives', 'In the middle of the Indian Ocean sits the island of Bandos. A picture perfect paradise hidden away from life\'s everyday stresses. The clear blue water', 'Bandos resort is a private island located 8 Km away from Male. Bandos Maldives features spacious rooms with balconies overlooking the garden or beach. A water sports centre and dive school are available. The hotel has multiple dining options. Free WiFi access is available.\r\n\r\nBandos Resort is ideally situated on North Male\' Atoll, just a 10-minute speed boat ride from Male International Airport, which is 7 Km away.\r\n', 'Maldives1.png', 'Maldives1inside.png', 3, 2, '681.59', NULL, NULL, NULL),
(8, '6 Days Royal Island Resort ', 'Come experience the Maldives you’ve always dreamt of at Royal Island Resort & Spa. Amidst the sparkling jewels of the Indian Ocean', 'Royal Island Resort & Spa is located in Maldives’ Baa Atoll. This tropical Island overlooks the Indian Ocean and offers free Wi-Fi, a Spa and a peaceful white sandy beaches.\r\n\r\nGuests can enjoy diving trips and sunset cruises. Those looking for more adventurous sports can try water skiing or kite surfing. Other recreational facilities include an outdoor pool, gym and tennis courts.', 'Maldives2.png', 'Maldives2inside.png', 3, 2, '895.95', NULL, NULL, NULL),
(9, '3 Days Sun Island Resort', 'in Sun Island Resort all Standard and Superior Beach Bungalows as well as Sunset Villas are built on the beach ensuring a direct view of the shore and sea. ', 'Facing the beachfront, Sun Island Resort & Spa offers 5-star accommodation in Maamigili and has a fitness centre, garden and terrace. This 5-star resort offers a bar. The accommodation features a 24-hour front desk, airport transfers, room service and free WiFi.', 'Maldives3.png', 'Maldives3inside.png', 3, 2, '354.25', NULL, NULL, NULL),
(13, 'petra', 'petra', 'aaxx', 'Mention-bro.png', 'Connected-cuate.png', 1, 11, '111.00', '2023-02-01 10:31:34', '2023-01-31 09:17:00', '2023-02-01 10:31:34'),
(15, 'ahmed', 'ahmed', 'aaxx', 'Connected-cuate.png', NULL, 1, 11, '111.00', '2023-02-01 09:25:04', '2023-02-01 09:23:58', '2023-02-01 09:25:04'),
(16, 'ahmed', 'ahmed', 'aa', '404-tick.png', '404-tick.png', 1, 11, '11.00', '2023-02-01 10:31:27', '2023-02-01 09:25:28', '2023-02-01 10:31:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'icon.png',
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `image`, `password`, `is_admin`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', 797621548, '2023-01-28 08:38:30', 'icon.png', '$2y$10$UEY.rxdxxBVBXdh5ldC2v.zCJcIMFSvdDEbVMzxgLqMqKK11cK3CS', 1, NULL, NULL, '2023-01-28 08:38:30', '2023-01-29 06:27:59'),
(2, 'mohammad', 'mohammad@gmail.com', 775412854, NULL, 'icon.png', '$2y$10$FfJ6276SzYCa6lzm4BAWuuczhS4mNVVeVVMHNr3mQTlLfNC6xbs26', 0, NULL, NULL, '2023-01-28 12:04:41', '2023-01-28 12:04:41'),
(3, 'jack', 'jack@gmail.com', 775412854, NULL, 'icon.png', '$2y$10$1u.3nTF9v6n8ymj5sp9x0.65TEVwZ2Xk1vv8/2ub/waOFU.lSIu8S', 0, NULL, NULL, '2023-01-28 12:06:17', '2023-01-28 12:06:17'),
(4, 'leen', 'leen@gmail.com', 125478542, NULL, 'icon.png', '$2y$10$HqFer.cfHS1tghx0vCv/Tedaes0U4nupvMepd0FXvV0qPgXsq.MZW', 0, NULL, NULL, '2023-01-28 12:07:47', '2023-01-28 12:07:47'),
(5, 'oday alghoul', 'alghoul@gmail.com', 790369501, NULL, 'icon.png', '$2y$10$4Qr.XjaCJhkXD6diLiIsKes88Ybq8ZNVKTcFWwEjyGD6SoT6nAr1i', 0, NULL, NULL, '2023-01-30 04:50:29', '2023-01-30 04:53:30'),
(6, 'mona', 'alopeisat@gamil.com', 797621549, NULL, 'icon.png', '$2y$10$eOBsJSENeiSpHou2ulHpWueAaIAnZHzXwIiQHjmM7SQ6lG4KPs7xG', 0, NULL, NULL, '2023-01-31 09:19:39', '2023-01-31 09:19:39'),
(7, 'mohammad', 'mohammadalnuqeiti@gmail.com', 797621540, NULL, 'icon.png', '$2y$10$EzyLd7XDfeWqPjwpMj06Ru8P/SzqBHqqNEBt04lCq/uDZoeTUdhRK', 1, NULL, NULL, '2023-02-01 03:49:21', '2023-02-01 03:49:21'),
(8, 'ahmed', 'asem@gmail.com', 797621547, NULL, 'icon.png', '$2y$10$HUlgj2P4VyK4s10EyrtBe.TU3y.ztG19ws00/axfSoRe7/BWp57V6', 0, NULL, NULL, '2023-02-01 07:19:13', '2023-02-01 07:19:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feeds`
--
ALTER TABLE `feeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservations_user_id_foreign` (`user_id`),
  ADD KEY `reservations_trip_id_foreign` (`trip_id`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trips_category_id_foreign` (`category_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feeds`
--
ALTER TABLE `feeds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_trip_id_foreign` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reservations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `trips`
--
ALTER TABLE `trips`
  ADD CONSTRAINT `trips_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

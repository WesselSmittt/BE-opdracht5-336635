-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2024 at 07:22 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be-opdracht-5`
--

-- --------------------------------------------------------

--
-- Table structure for table `allergeen`
--

CREATE TABLE `allergeen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Naam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Omschrijving` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `allergeen`
--

INSERT INTO `allergeen` (`id`, `Naam`, `Omschrijving`, `created_at`, `updated_at`) VALUES
(1, 'Gluten', 'Dit product bevat gluten', NULL, NULL),
(2, 'Gelatine', 'Dit product bevat gelatine', NULL, NULL),
(3, 'AZO-Kleurstof', 'Dit product bevat AZO-kleurstoffen', NULL, NULL),
(4, 'Lactose', 'Dit product bevat lactose', NULL, NULL),
(5, 'Soja', 'Dit product bevat soja', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leverancier`
--

CREATE TABLE `leverancier` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Naam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ContactPersoon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LeverancierNummer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mobiel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leverancier`
--

INSERT INTO `leverancier` (`id`, `Naam`, `ContactPersoon`, `LeverancierNummer`, `Mobiel`, `created_at`, `updated_at`) VALUES
(1, 'Venco', 'Bert van Linge', 'L1029384719', '06-28493827', NULL, NULL),
(2, 'Astra Sweets', 'Jasper del Monte', 'L1029284315', '06-39398734', NULL, NULL),
(3, 'Haribo', 'Sven Stalman', 'L1029324748', '06-24383291', NULL, NULL),
(4, 'Basset', 'Joyce Stelterberg', 'L1023845773', '06-48293823', NULL, NULL),
(5, 'De Bron', 'Remco Veenstra', 'L1023857736', '06-34291234', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `magazijn`
--

CREATE TABLE `magazijn` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `VerpakkingsEenheid` decimal(8,2) NOT NULL,
  `AantalAanwezig` int(11) DEFAULT NULL,
  `LeveringInfo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `magazijn`
--

INSERT INTO `magazijn` (`id`, `product_id`, `VerpakkingsEenheid`, `AantalAanwezig`, `LeveringInfo`, `created_at`, `updated_at`) VALUES
(1, 1, '5.00', 453, NULL, NULL, NULL),
(2, 2, '2.50', 400, NULL, NULL, NULL),
(3, 3, '5.00', 1, NULL, NULL, NULL),
(4, 4, '1.00', 800, NULL, NULL, NULL),
(5, 5, '3.00', 234, NULL, NULL, NULL),
(6, 6, '2.00', 345, NULL, NULL, NULL),
(7, 7, '1.00', 795, NULL, NULL, NULL),
(8, 8, '10.00', 233, NULL, NULL, NULL),
(9, 9, '2.50', 123, NULL, NULL, NULL),
(10, 10, '3.00', NULL, NULL, NULL, NULL),
(11, 11, '2.00', 367, NULL, NULL, NULL),
(12, 12, '1.00', 467, NULL, NULL, NULL),
(13, 13, '5.00', 20, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_18_091128_create_product_table', 1),
(6, '2024_03_18_091129_create_magazijn_table', 1),
(7, '2024_03_18_091139_create_allergeen_table', 1),
(8, '2024_03_18_091140_create_product_per_allergeen_table', 1),
(9, '2024_03_18_091147_create_leverancier_table', 1),
(10, '2024_03_18_091148_create_product_per_leverancier_table', 1),
(11, '2024_03_31_170146_add_levering_info_to_magazijn_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Naam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Barcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `Naam`, `Barcode`, `created_at`, `updated_at`) VALUES
(1, 'Mintnopjes', '8719587231278', NULL, NULL),
(2, 'Schoolkrijt', '8719587326713', NULL, NULL),
(3, 'Honingdrop', '8719587327836', NULL, NULL),
(4, 'Zure Beren', '8719587321441', NULL, NULL),
(5, 'Cola Flesjes', '8719587321237', NULL, NULL),
(6, 'Turtles', '8719587322245', NULL, NULL),
(7, 'Witte Muizen', '8719587328256', NULL, NULL),
(8, 'Reuzen Slangen', '8719587325641', NULL, NULL),
(9, 'Zoute Rijen', '8719587322739', NULL, NULL),
(10, 'Winegums', '8719587327527', NULL, NULL),
(11, 'Drop Munten', '8719587322345', NULL, NULL),
(12, 'Kruis Drop', '8719587322265', NULL, NULL),
(13, 'Zoute Ruitjes', '8719587323256', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `productperallergeen`
--

CREATE TABLE `productperallergeen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `allergeen_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productperallergeen`
--

INSERT INTO `productperallergeen` (`id`, `product_id`, `allergeen_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL),
(2, 1, 1, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 3, 4, NULL, NULL),
(5, 6, 5, NULL, NULL),
(6, 9, 2, NULL, NULL),
(7, 9, 5, NULL, NULL),
(8, 10, 2, NULL, NULL),
(9, 12, 4, NULL, NULL),
(10, 13, 1, NULL, NULL),
(11, 13, 4, NULL, NULL),
(12, 13, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `productperleverancier`
--

CREATE TABLE `productperleverancier` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `leverancier_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `DatumLevering` date NOT NULL,
  `Aantal` int(11) NOT NULL,
  `DatumEerstVolgendeLevering` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productperleverancier`
--

INSERT INTO `productperleverancier` (`id`, `leverancier_id`, `product_id`, `DatumLevering`, `Aantal`, `DatumEerstVolgendeLevering`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2023-04-09', 23, '2023-04-16', NULL, NULL),
(2, 1, 1, '2023-04-18', 21, '2023-04-25', NULL, NULL),
(3, 1, 2, '2023-04-09', 12, '2023-04-16', NULL, NULL),
(4, 1, 3, '2023-04-10', 11, '2023-04-17', NULL, NULL),
(5, 2, 4, '2023-04-14', 16, '2023-04-21', NULL, NULL),
(6, 2, 4, '2023-04-21', 23, '2023-04-28', NULL, NULL),
(7, 2, 5, '2023-04-14', 45, '2023-04-21', NULL, NULL),
(8, 2, 6, '2023-04-14', 30, '2023-04-21', NULL, NULL),
(9, 3, 7, '2023-04-12', 12, '2023-04-19', NULL, NULL),
(10, 3, 7, '2023-04-19', 23, '2023-04-26', NULL, NULL),
(11, 3, 8, '2023-04-10', 12, '2023-04-17', NULL, NULL),
(12, 3, 9, '2023-04-11', 1, '2023-04-18', NULL, NULL),
(13, 4, 10, '2023-04-16', 24, '2023-04-30', NULL, NULL),
(14, 5, 11, '2023-04-10', 47, '2023-04-17', NULL, NULL),
(15, 5, 11, '2023-04-19', 60, '2023-04-26', NULL, NULL),
(16, 5, 12, '2023-04-11', 45, NULL, NULL, NULL),
(17, 5, 13, '2023-04-12', 23, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Wessel Smit', 'wessel@smit-online.nl', NULL, '$2y$12$DTf19FLN51azo1PzeUIqoODb43lOyb04ufjUWxscuj0q6ugcH1/ca', 'oBNhwU0Gz7M0xSb3lbuZK452R7JmijFcOt5lA2CK6bnwVjzLXLRUHGmWYKpI', '2024-03-25 09:35:51', '2024-03-25 09:35:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allergeen`
--
ALTER TABLE `allergeen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `leverancier`
--
ALTER TABLE `leverancier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `magazijn`
--
ALTER TABLE `magazijn`
  ADD PRIMARY KEY (`id`),
  ADD KEY `magazijn_product_id_foreign` (`product_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productperallergeen`
--
ALTER TABLE `productperallergeen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productperallergeen_product_id_foreign` (`product_id`),
  ADD KEY `productperallergeen_allergeen_id_foreign` (`allergeen_id`);

--
-- Indexes for table `productperleverancier`
--
ALTER TABLE `productperleverancier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productperleverancier_leverancier_id_foreign` (`leverancier_id`),
  ADD KEY `productperleverancier_product_id_foreign` (`product_id`);

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
-- AUTO_INCREMENT for table `allergeen`
--
ALTER TABLE `allergeen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leverancier`
--
ALTER TABLE `leverancier`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `magazijn`
--
ALTER TABLE `magazijn`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `productperallergeen`
--
ALTER TABLE `productperallergeen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `productperleverancier`
--
ALTER TABLE `productperleverancier`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `magazijn`
--
ALTER TABLE `magazijn`
  ADD CONSTRAINT `magazijn_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `productperallergeen`
--
ALTER TABLE `productperallergeen`
  ADD CONSTRAINT `productperallergeen_allergeen_id_foreign` FOREIGN KEY (`allergeen_id`) REFERENCES `allergeen` (`id`),
  ADD CONSTRAINT `productperallergeen_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `productperleverancier`
--
ALTER TABLE `productperleverancier`
  ADD CONSTRAINT `productperleverancier_leverancier_id_foreign` FOREIGN KEY (`leverancier_id`) REFERENCES `leverancier` (`id`),
  ADD CONSTRAINT `productperleverancier_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

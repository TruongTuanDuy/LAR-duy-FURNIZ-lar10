-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th5 19, 2024 lúc 09:48 AM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `furniz`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `articles`
--

CREATE TABLE `articles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `category_id` int NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `ordering` int NOT NULL DEFAULT '10',
  `created_by` bigint UNSIGNED DEFAULT NULL,
  `updated_by` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `articles`
--

INSERT INTO `articles` (`id`, `name`, `description`, `content`, `category_id`, `status`, `ordering`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Emerald Tyson', NULL, NULL, 10, 0, 53, NULL, NULL, '2024-05-08 08:05:41', '2024-05-16 22:53:47'),
(2, 'Zeph Willis', NULL, NULL, 7, 1, 7, NULL, NULL, '2024-05-08 08:05:52', '2024-05-16 23:08:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `article_categories`
--

CREATE TABLE `article_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `ordering` int NOT NULL,
  `created_by` bigint UNSIGNED DEFAULT NULL,
  `updated_by` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `article_categories`
--

INSERT INTO `article_categories` (`id`, `name`, `status`, `ordering`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'A libero distinctio quo sunt.', 1, 10, NULL, NULL, '2011-07-24 12:55:33', '2024-05-16 22:53:40'),
(2, 'Eos voluptatum atque deserunt molestiae.', 1, 9, NULL, NULL, '2009-12-02 14:05:49', '1994-11-25 23:03:21'),
(3, 'Est et dolores et quia est ut.', 0, 10, NULL, NULL, '1987-07-16 14:28:02', '1985-05-20 03:52:25'),
(4, 'Possimus architecto qui quidem.', 1, 6, NULL, NULL, '1998-03-26 18:17:03', '2021-12-01 02:44:41'),
(5, 'Quis id molestiae excepturi corrupti.', 0, 7, NULL, NULL, '2019-10-24 19:45:56', '2024-01-10 01:07:47'),
(6, 'Porro repudiandae sit qui earum.', 1, 1, NULL, NULL, '2007-12-17 22:42:03', '1990-08-05 20:39:42'),
(7, 'Aut impedit et architecto sed.', 0, 3, NULL, NULL, '1987-09-04 04:25:50', '1976-04-22 06:15:52'),
(8, 'Voluptas quis quia perferendis ut aut labore.', 0, 8, NULL, NULL, '2019-09-21 07:42:26', '1982-03-16 09:57:21'),
(9, 'Quos veritatis voluptatum voluptas sunt.', 1, 10, NULL, NULL, '1993-07-25 14:25:04', '1988-01-02 12:58:38'),
(10, 'Facilis aut distinctio rerum.', 0, 4, NULL, NULL, '2010-12-21 16:58:20', '1980-11-10 02:35:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `collections`
--

CREATE TABLE `collections` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `ordering` int NOT NULL DEFAULT '10',
  `created_by` bigint UNSIGNED DEFAULT NULL,
  `updated_by` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `collections`
--

INSERT INTO `collections` (`id`, `name`, `status`, `ordering`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Tanek Mcpherson', 0, 87, NULL, NULL, '2024-05-08 08:06:09', '2024-05-08 08:06:09'),
(2, 'Jackson Pollard', 1, 80, NULL, NULL, '2024-05-08 08:06:16', '2024-05-08 08:06:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `media`
--

CREATE TABLE `media` (
  `id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint UNSIGNED NOT NULL,
  `manipulations` json NOT NULL,
  `custom_properties` json NOT NULL,
  `generated_conversions` json NOT NULL,
  `responsive_images` json NOT NULL,
  `order_column` int UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\Article', 1, '31ec2b9f-c4f6-4697-a5ab-b38f85f042da', 'images', '1-1', '1-1.jpg', 'image/jpeg', 'media', 'media', 20180, '[]', '[]', '{\"webp\": true, \"thumb\": true}', '[]', 1, '2024-05-08 08:05:41', '2024-05-08 08:05:42'),
(2, 'App\\Models\\Article', 2, 'a370a2e3-8246-46b1-ab25-51b22e89a2ac', 'images', '1-2', '1-2.jpg', 'image/jpeg', 'media', 'media', 17706, '[]', '[]', '{\"webp\": true, \"thumb\": true}', '[]', 1, '2024-05-08 08:05:52', '2024-05-08 08:05:53'),
(3, 'App\\Models\\Collection', 1, '63ff8f8d-810f-421c-a3b0-cf926399f5cb', 'images', '8-1', '8-1.jpg', 'image/jpeg', 'media', 'media', 17405, '[]', '[]', '{\"webp\": true, \"thumb\": true}', '[]', 1, '2024-05-08 08:06:09', '2024-05-08 08:06:09'),
(4, 'App\\Models\\Collection', 2, '628ca6f0-49c0-49dc-87f9-9233e706f706', 'images', '6-2', '6-2.jpg', 'image/jpeg', 'media', 'media', 23537, '[]', '[]', '{\"webp\": true, \"thumb\": true}', '[]', 1, '2024-05-08 08:06:16', '2024-05-08 08:06:17'),
(7, 'App\\Models\\Product', 3, '3510fb77-c8ed-4491-ab91-517e18630555', 'images', '1-1', '1-1.jpg', 'image/jpeg', 'media', 'media', 20180, '[]', '[]', '{\"webp\": true, \"thumb\": true}', '[]', 1, '2024-05-17 00:12:20', '2024-05-17 00:12:20'),
(8, 'App\\Models\\Product', 4, '686bffcd-9a59-47d3-ad11-4effb65fcdc3', 'images', '1-2', '1-2.jpg', 'image/jpeg', 'media', 'media', 17706, '[]', '[]', '{\"webp\": true, \"thumb\": true}', '[]', 1, '2024-05-17 00:12:36', '2024-05-17 00:12:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(33, '2024_04_03_040020_create_category_articles_table', 1),
(56, '2024_04_03_040020_create_article_categories_table', 2),
(129, '2024_04_21_071929_create_category_products_table', 3),
(140, '2014_10_12_000000_create_users_table', 4),
(141, '2014_10_12_100000_create_password_reset_tokens_table', 4),
(142, '2019_08_19_000000_create_failed_jobs_table', 4),
(143, '2019_12_14_000001_create_personal_access_tokens_table', 4),
(144, '2024_04_03_035956_create_collections_table', 4),
(145, '2024_04_15_025359_create_articles_table', 4),
(146, '2024_04_19_073028_create_media_table', 4),
(147, '2024_05_08_075931_create_article_categories_table', 4),
(148, '2024_05_08_091548_create_product_categories_table', 4),
(149, '2024_05_17_043145_create_products_table', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `price` int NOT NULL,
  `category_id` int NOT NULL,
  `ordering` int NOT NULL DEFAULT '10',
  `status` tinyint NOT NULL DEFAULT '1',
  `created_by` bigint UNSIGNED DEFAULT NULL,
  `updated_by` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `code`, `name`, `description`, `price`, `category_id`, `ordering`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(3, 'Fugiat corrupti si', 'Shelby Sellers', NULL, 1111, 4, 23, 0, NULL, NULL, '2024-05-17 00:12:19', '2024-05-17 00:12:19'),
(4, 'Quasi sed error sit', 'Chaney Lucas', NULL, 2222, 6, 86, 1, NULL, NULL, '2024-05-17 00:12:36', '2024-05-17 00:12:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_by` bigint UNSIGNED DEFAULT NULL,
  `updated_by` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `_lft` int UNSIGNED NOT NULL DEFAULT '0',
  `_rgt` int UNSIGNED NOT NULL DEFAULT '0',
  `parent_id` int UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `_lft`, `_rgt`, `parent_id`) VALUES
(1, 'Root', 1, NULL, NULL, '2024-05-08 08:04:21', '2024-05-08 08:04:21', 1, 12, NULL),
(2, 'Aphrodite Yates', 1, NULL, NULL, '2024-05-08 08:06:34', '2024-05-09 08:20:51', 2, 7, 1),
(3, 'Kelly Reese', 1, NULL, NULL, '2024-05-08 08:06:38', '2024-05-08 08:06:38', 10, 11, 1),
(4, 'Elliott Booth', 0, NULL, NULL, '2024-05-08 08:06:44', '2024-05-09 08:24:50', 3, 6, 2),
(5, 'Beck Hunter', 1, NULL, NULL, '2024-05-08 08:06:56', '2024-05-09 08:24:50', 4, 5, 4),
(6, 'Ethan Valdez', 0, NULL, NULL, '2024-05-08 08:07:05', '2024-05-09 08:20:51', 8, 9, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `article_categories`
--
ALTER TABLE `article_categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  ADD KEY `media_order_column_index` (`order_column`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_categories__lft__rgt_parent_id_index` (`_lft`,`_rgt`,`parent_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `article_categories`
--
ALTER TABLE `article_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `collections`
--
ALTER TABLE `collections`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

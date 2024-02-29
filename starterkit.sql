-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-02-2024 a las 08:24:27
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `starterkit`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `last_name` varchar(191) NOT NULL,
  `address_line_1` varchar(191) NOT NULL,
  `address_line_2` varchar(191) DEFAULT NULL,
  `city` varchar(191) NOT NULL,
  `postal_code` varchar(191) NOT NULL,
  `state` varchar(191) NOT NULL,
  `country` varchar(191) NOT NULL,
  `type` tinyint(3) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Voluptas ipsam.', 'Temporibus eaque rerum corrupti sequi qui ut qui distinctio omnis repudiandae nesciunt.', '2024-02-24 10:52:33', '2024-02-24 10:52:33'),
(2, 'Ipsam est.', 'Error voluptates ullam voluptates voluptates et quo vel facere quos.', '2024-02-24 10:52:33', '2024-02-24 10:52:33'),
(3, 'Laudantium aliquid.', 'Ad natus quis omnis id accusamus possimus doloremque qui repellat.', '2024-02-24 10:52:33', '2024-02-24 10:52:33'),
(4, 'Deleniti nihil.', 'Sequi et aut aut repellendus ut natus facilis neque sapiente a.', '2024-02-24 10:52:33', '2024-02-24 10:52:33'),
(5, 'Dolorem.', 'Sed vel nemo hic et repellendus praesentium est.', '2024-02-24 10:52:33', '2024-02-24 10:52:33'),
(6, 'Dolor non.', 'Error quam ad sapiente sed quisquam voluptatum laborum ipsam veniam eligendi similique omnis distinctio.', '2024-02-24 10:52:33', '2024-02-24 10:52:33'),
(7, 'Doloremque excepturi.', 'Aut libero libero quisquam ut et similique nobis cupiditate delectus blanditiis.', '2024-02-24 10:52:33', '2024-02-24 10:52:33'),
(8, 'Adipisci.', 'Quidem dicta corrupti perferendis minima perferendis dolorem et debitis doloribus molestiae nostrum iste.', '2024-02-24 10:52:33', '2024-02-24 10:52:33'),
(9, 'Magni enim.', 'Earum reiciendis error fugiat et quia quae eos officiis qui et.', '2024-02-24 10:52:33', '2024-02-24 10:52:33'),
(10, 'Quaerat.', 'Pariatur nostrum est quidem inventore qui iure qui soluta quo nostrum in.', '2024-02-24 10:52:33', '2024-02-24 10:52:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `publication_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `publication_id`, `created_at`, `updated_at`) VALUES
(10, 42, 30, '2024-02-26 05:56:49', '2024-02-26 05:56:49'),
(11, 42, 30, '2024-02-26 05:57:00', '2024-02-26 05:57:00'),
(12, 42, 30, '2024-02-26 06:06:07', '2024-02-26 06:06:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(18, '2014_10_12_000000_create_users_table', 1),
(19, '2014_10_12_100000_create_password_resets_table', 1),
(20, '2019_08_19_000000_create_failed_jobs_table', 1),
(21, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(22, '2023_05_28_090500_add_login_fields_to_users_table', 1),
(23, '2023_06_11_075700_create_permission_tables', 1),
(24, '2023_06_12_013333_add_profile_photo_path_column_to_users_table', 1),
(25, '2023_10_09_041104_create_addresses_table', 1),
(27, '2024_02_24_055521_create_publications_table', 2),
(28, '2024_02_24_111850_create_categories_table', 3),
(29, '2024_02_24_133106_update_typedata_currency_publications_table', 4),
(31, '2024_02_25_052312_create_likes_table', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `guard_name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'read user management', 'web', '2024-02-24 08:11:23', '2024-02-24 08:11:23'),
(2, 'write user management', 'web', '2024-02-24 08:11:23', '2024-02-24 08:11:23'),
(3, 'create user management', 'web', '2024-02-24 08:11:23', '2024-02-24 08:11:23'),
(4, 'read content management', 'web', '2024-02-24 08:11:23', '2024-02-24 08:11:23'),
(5, 'write content management', 'web', '2024-02-24 08:11:23', '2024-02-24 08:11:23'),
(6, 'create content management', 'web', '2024-02-24 08:11:23', '2024-02-24 08:11:23'),
(7, 'read financial management', 'web', '2024-02-24 08:11:23', '2024-02-24 08:11:23'),
(8, 'write financial management', 'web', '2024-02-24 08:11:23', '2024-02-24 08:11:23'),
(9, 'create financial management', 'web', '2024-02-24 08:11:23', '2024-02-24 08:11:23'),
(10, 'read reporting', 'web', '2024-02-24 08:11:23', '2024-02-24 08:11:23'),
(11, 'write reporting', 'web', '2024-02-24 08:11:23', '2024-02-24 08:11:23'),
(12, 'create reporting', 'web', '2024-02-24 08:11:23', '2024-02-24 08:11:23'),
(13, 'read payroll', 'web', '2024-02-24 08:11:23', '2024-02-24 08:11:23'),
(14, 'write payroll', 'web', '2024-02-24 08:11:24', '2024-02-24 08:11:24'),
(15, 'create payroll', 'web', '2024-02-24 08:11:24', '2024-02-24 08:11:24'),
(16, 'read disputes management', 'web', '2024-02-24 08:11:24', '2024-02-24 08:11:24'),
(17, 'write disputes management', 'web', '2024-02-24 08:11:24', '2024-02-24 08:11:24'),
(18, 'create disputes management', 'web', '2024-02-24 08:11:24', '2024-02-24 08:11:24'),
(19, 'read api controls', 'web', '2024-02-24 08:11:24', '2024-02-24 08:11:24'),
(20, 'write api controls', 'web', '2024-02-24 08:11:24', '2024-02-24 08:11:24'),
(21, 'create api controls', 'web', '2024-02-24 08:11:24', '2024-02-24 08:11:24'),
(22, 'read database management', 'web', '2024-02-24 08:11:24', '2024-02-24 08:11:24'),
(23, 'write database management', 'web', '2024-02-24 08:11:24', '2024-02-24 08:11:24'),
(24, 'create database management', 'web', '2024-02-24 08:11:24', '2024-02-24 08:11:24'),
(25, 'read repository management', 'web', '2024-02-24 08:11:24', '2024-02-24 08:11:24'),
(26, 'write repository management', 'web', '2024-02-24 08:11:24', '2024-02-24 08:11:24'),
(27, 'create repository management', 'web', '2024-02-24 08:11:24', '2024-02-24 08:11:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publications`
--

CREATE TABLE `publications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `token` varchar(150) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `identity` varchar(10) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `section_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sail_type` varchar(10) DEFAULT NULL,
  `exact_price` int(11) DEFAULT 0,
  `min_price` int(11) DEFAULT 0,
  `max_price` int(11) DEFAULT 0,
  `check_price` int(11) DEFAULT 0,
  `currency` varchar(191) NOT NULL,
  `event_date` timestamp NULL DEFAULT NULL,
  `event_country` bigint(20) UNSIGNED DEFAULT NULL,
  `event_city` bigint(20) UNSIGNED DEFAULT NULL,
  `event_population` varchar(50) DEFAULT NULL,
  `views` int(11) DEFAULT 0,
  `likes` int(11) DEFAULT 0,
  `state_id` int(11) DEFAULT NULL,
  `preview_url` varchar(200) DEFAULT NULL,
  `keywords` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `publications`
--

INSERT INTO `publications` (`id`, `user_id`, `token`, `title`, `description`, `identity`, `type`, `section_id`, `category_id`, `sail_type`, `exact_price`, `min_price`, `max_price`, `check_price`, `currency`, `event_date`, `event_country`, `event_city`, `event_population`, `views`, `likes`, `state_id`, `preview_url`, `keywords`, `created_at`, `updated_at`) VALUES
(23, 32, 'add942f9-0e90-34e5-a83f-4daa6a9a9001', 'Repellat eos et et voluptatem minima id. Repellat velit voluptas non molestias a.', 'Velit et voluptates ut aut. Error eum illo quam nemo enim ut inventore. Repudiandae corporis voluptatem enim corporis eum. Ea facere eius qui beatae ut dolores praesentium consequatur. Assumenda quibusdam ad laudantium eaque enim nobis. Voluptatum numquam et tempore. Nobis doloribus totam vel sapiente nobis iste. Nobis quia aut repellendus minus. Ipsum eos ipsam distinctio dolorum quia. Quo repellat dolor consectetur voluptatibus harum qui. Unde error corporis sed sit dolor.', 'public', 'demand', 6, 1, 'multi-sale', 3339, 2492, 3056, 1, 'USD', '2023-10-30 03:41:01', 1, 4, 'Gutmannmouth', 1306, 3798, 3, 'dbff153b-867e-3824-9efe-af4079a06d9cjpg', NULL, '2024-01-04 07:36:02', '2024-02-24 19:50:12'),
(24, 37, '6c71d6f0-1944-3685-bbef-f0d62eac28f3', 'Ut aut tenetur enim mollitia commodi soluta dolores. Tenetur nulla quaerat modi dolorem minus.', 'Ratione deserunt ea animi officiis quis. Soluta non distinctio est minima. Illum dolore sint adipisci doloremque atque voluptas tempora ex. Non distinctio quibusdam non et velit. Dolor fugit voluptate tempora totam. Omnis esse ab ex eaque possimus. Similique at ratione cupiditate et in explicabo esse voluptate. Aut itaque excepturi quis quisquam veniam pariatur deleniti.', 'hidden', 'demand', 1, 4, 'exclusive', 3334, 3081, 8117, 0, 'USD', '2023-09-25 07:47:56', 8, 7, 'Christopheshire', 4994, 2051, 3, 'c90cdb27-9131-3d8b-9ecd-e36e0d4f910bjpg', NULL, '2024-01-20 02:48:39', '2024-02-24 19:50:12'),
(28, 35, 'ee673caf-940e-3701-9c30-60d8e1efbc2e', 'Aut libero quas et sit repellendus dolor reprehenderit. Magnam et voluptatem beatae rem quae.', 'Animi sapiente et explicabo est. Velit reprehenderit sapiente a consequatur eos. Eius ad et quidem dignissimos quae eaque. Corrupti et quo deserunt provident beatae magni sint. Itaque assumenda quod odit vel. Quas quo qui delectus itaque accusantium quo. Id molestias qui asperiores aut ullam totam unde. Molestiae est aliquam neque est. Porro omnis iusto quam laborum. Itaque asperiores quos culpa amet magni. Illo in magnam et sed voluptas fugiat laboriosam.', 'hidden', 'offer', 1, 1, 'exclusive', 3058, 3419, 6159, 1, 'USD', '2023-12-31 01:17:15', 10, 8, 'Port Nella', 285, 4205, 3, '8b6c5d67-ae0a-3781-b68f-41aaac3dcf3bjpg', NULL, '2024-01-17 15:11:50', '2024-02-24 19:50:12'),
(29, 37, '034c5b88-063c-324c-80f8-8bb30a4f1d61', 'Omnis non ad qui qui qui est atque. Vero aliquid occaecati asperiores quo. Quo earum non vel non.', 'Non deleniti blanditiis aut aliquam laborum. Sunt corrupti debitis distinctio quia modi. Velit vel alias in est minima. Non magnam nemo facilis nisi. Et dolorem nisi molestias dolores. Dolorem atque quo molestiae. Sit ipsam neque expedita cumque ex. Quidem error officia quia ad. Praesentium aut aperiam ullam aspernatur exercitationem ut. Omnis ut sapiente eveniet vel beatae ut similique.', 'hidden', 'offer', 7, 1, 'exclusive', 3203, 3839, 1279, 0, 'USD', '2023-07-29 10:53:45', 8, 5, 'Konopelskihaven', 344, 3972, 1, '1b338cb5-9ccb-3d44-bb85-93276d1656d7jpg', NULL, '2024-01-31 05:51:23', '2024-02-24 19:50:12'),
(30, 40, '9269a4a2-c57e-3cad-bb23-b4c1e3381a4b', 'Aspernatur aut corrupti labore vero et. Incidunt et ea et eum. Incidunt omnis tempora itaque.', 'Soluta libero quo quae eius dolor error. Excepturi officiis labore quibusdam molestias fugit rerum consequatur. Et dignissimos voluptatem porro voluptas soluta soluta repellat. Provident quidem quasi soluta ab fugit natus odio. Blanditiis dolore laudantium nulla consequatur. Exercitationem sunt voluptates vel omnis id. Possimus debitis quaerat dolor eos voluptas quo sint.', 'hidden', 'demand', 7, 9, 'exclusive', 7102, 3760, 4961, 0, 'EUR', '2024-01-19 03:21:34', 7, 7, 'West Declanstad', 194, 3727, 1, '2d4326f7-7aaa-3f9d-9d1e-6402af5a830cjpg', NULL, '2024-02-24 01:49:03', '2024-02-24 19:50:12'),
(32, 33, '907f21d4-77d4-3cbc-9714-d793923745dc', 'Et iste ut eos. Quia non magnam nihil nulla asperiores. A dolorem vitae eaque qui.', 'Ut sed tenetur sint voluptates libero optio dolores. Quis officia sed iure illum aut. Repellat quaerat esse in quidem. Reprehenderit minima porro amet totam quis. Est assumenda ullam cupiditate qui iusto voluptate officiis consequatur. Suscipit suscipit ut tempore id rem rerum est vel. Facilis deleniti aut laborum unde porro odio aut cumque. Vitae dolorum qui nobis atque voluptas eos repellendus. Est dolor molestiae inventore in. Reprehenderit eveniet repudiandae ut repellendus.', 'hidden', 'diffusion', 4, 7, 'exclusive', 7628, 4179, 7806, 1, 'EUR', '2023-08-13 04:52:58', 6, 5, 'East Cooper', 3848, 3000, 3, '6016dcf9-76ab-3f7b-b2ea-fba20ac16c7djpg', NULL, '2024-02-05 08:54:48', '2024-02-24 19:50:12'),
(35, 39, '5dcfaf4c-a5f1-32f3-9fc5-f1872fff562a', 'Eum nemo enim enim iusto sed. Molestias repellat sit tenetur facere.', 'Modi omnis non quam est. Et rerum excepturi excepturi et veniam aut. Asperiores exercitationem tenetur quia nam. Laborum sequi ut sapiente qui quia. Nostrum molestiae rerum alias consectetur quaerat quis iste et. Tempora quam corrupti vel qui voluptatem. Omnis vel fuga labore occaecati suscipit possimus quis. Sint ut expedita consequuntur velit.', 'hidden', 'diffusion', 6, 5, 'multi-sale', 5086, 869, 2948, 1, 'EUR', '2023-10-22 15:56:56', 5, 5, 'Consueloville', 1094, 3103, 2, '11c5035c-0a3b-34b9-84dc-f2c5bc48c29fjpg', NULL, '2024-02-01 08:36:26', '2024-02-24 19:50:12'),
(36, 31, 'f77b3f7a-ea07-36a0-b1bc-e04951dce704', 'Hic omnis recusandae consequuntur veritatis iusto ea. Qui est consequatur quis.', 'Accusantium sit voluptas ipsa molestias maiores. Repellendus pariatur at minus soluta. Quisquam voluptatem quasi soluta amet dolor deserunt ut dignissimos. Dolorem sit porro esse. Et quia error magni voluptatibus labore ipsam ut. Soluta mollitia iste neque fuga corporis est et. Cupiditate assumenda sapiente atque suscipit aspernatur. Doloremque ipsum voluptatem dolorum aut consequatur. Velit harum est quisquam sint delectus animi corrupti.', 'hidden', 'demand', 9, 5, 'exclusive', 1716, 3505, 5244, 0, 'EUR', '2023-03-06 11:53:03', 9, 4, 'Port Irwinville', 178, 4890, 1, '8a1889aa-a656-3864-a83a-cc09e81679c7jpg', NULL, '2024-02-11 16:13:44', '2024-02-24 19:50:12'),
(40, 32, '06f8f8a1-84e0-36ae-8e74-ecf28e3e758f', 'Aut quis est et dolores officia iure ut. Et temporibus tempore nisi dolorem ut. Id et animi quod.', 'Non laboriosam enim aut dolores animi. Mollitia enim consequatur ullam deserunt id. Nobis sunt ut reiciendis autem. Commodi qui nobis maxime. Exercitationem suscipit quia magni sit vitae eum et ea. Animi qui pariatur totam consequatur. Voluptas alias facilis voluptas. Est ut perferendis id quas. Eum deserunt accusantium et aut omnis aperiam.', 'public', 'diffusion', 1, 3, 'multi-sale', 695, 8432, 857, 0, 'USD', '2023-11-05 21:56:13', 8, 1, 'Lake Kennedihaven', 1778, 4285, 2, '34adab1a-a7cd-3368-aeb6-2ddbab8b765ajpg', NULL, '2024-01-25 13:16:46', '2024-02-24 19:50:12'),
(42, 37, '2bac85e7-6080-341c-be09-67bb7ec151aa', 'Adipisci ut quia ipsum quia ut aut. Suscipit provident optio illum ipsam qui quisquam.', 'Dolore illum sequi explicabo. Est ipsam aut odio dolorum nihil. Exercitationem dolores eveniet assumenda odit ut fugiat labore. Officia error in saepe dolore. Ut consequatur similique beatae sint qui. Veniam voluptate necessitatibus minima id quasi. Dignissimos eius eaque ut. Architecto vero distinctio ut. Minus et dolor commodi sed ipsa est quas.', 'hidden', 'offer', 8, 7, 'exclusive', 6563, 1255, 7652, 0, 'USD', '2023-08-17 22:06:09', 9, 5, 'Adafort', 1652, 619, 2, 'a4f8894a-d036-318d-9f41-31d2cdb9da2ejpg', NULL, '2024-01-21 14:39:08', '2024-02-24 19:50:12'),
(43, 37, 'a184765b-9f99-3abf-95c1-1162169d545b', 'Ratione ut ut totam. Fuga voluptas aut reprehenderit dolore dolorem consequatur.', 'Rerum ea aut aspernatur perspiciatis non qui facere qui. Quisquam vitae sed et ea esse. Atque quam excepturi et ex saepe. Iusto assumenda eos sed aut. Voluptate perferendis ab et quam. Mollitia fugit suscipit eius praesentium et cumque occaecati. Magnam voluptas laudantium accusantium saepe. Neque incidunt hic eaque nihil molestias consectetur.', 'hidden', 'offer', 7, 1, 'exclusive', 1910, 6288, 8215, 0, 'EUR', '2023-07-05 11:01:41', 2, 7, 'McClureborough', 4727, 3048, 3, 'ec1bd6ed-92d5-320a-b618-aa43f8ee1538jpg', NULL, '2024-01-21 12:55:01', '2024-02-24 19:50:12'),
(45, 31, '7e16d7d3-ac21-3167-87d2-acbbc3fd6308', 'Consequatur iure et architecto eum. Similique non voluptatem et consequuntur nostrum ut.', 'Ea et hic minima. Quia et ad sit quasi consequatur. Quasi illo id qui in rerum consequatur. Ratione repellat pariatur tempora ipsum corrupti. Occaecati ipsum sit sed animi accusantium officia totam. Nesciunt doloremque praesentium ipsam laudantium. Beatae tempore aperiam repellat eum aut. Ratione omnis quae illo animi. Alias nam quod corrupti corporis earum repudiandae. Eos modi ea voluptatem odio non nam ut. Dolore rerum est enim. Ducimus velit omnis reiciendis minima quia velit ut.', 'public', 'offer', 5, 3, 'multi-sale', 8495, 2011, 7537, 1, 'EUR', '2023-12-04 19:08:04', 3, 2, 'Erdmanville', 3114, 1017, 2, 'e8feaaf7-2030-3ffb-b839-5852a5280db2jpg', NULL, '2024-01-12 16:48:29', '2024-02-24 19:50:12'),
(47, 40, '9473d98c-26f8-3e26-8e5c-69c0418007d1', 'Occaecati quos excepturi possimus deserunt sed atque. Inventore sint fuga id iste.', 'Mollitia et voluptates et itaque. Qui magni corporis saepe enim culpa et rerum. Quaerat provident deserunt qui aut aut. Est exercitationem et inventore neque maxime ratione laboriosam. Voluptas voluptates et culpa quaerat. Quos molestias molestias tempore tenetur. Facilis nesciunt asperiores tenetur aliquid dolore. Adipisci qui ab quos fuga ut cupiditate. Labore ipsa excepturi quo optio eum. Facere qui modi quos nihil at vel.', 'public', 'demand', 9, 8, 'multi-sale', 8434, 7672, 3893, 1, 'EUR', '2023-12-14 03:50:04', 6, 5, 'New Freddyfurt', 952, 414, 2, '79e9ed08-45a0-35e5-bc49-f3b21511164cjpg', NULL, '2024-01-02 22:59:01', '2024-02-24 19:50:12'),
(48, 37, 'd4a4d936-53ba-3b97-9bc0-26bd68340b61', 'Ipsa ut ducimus quo iure est. Nihil soluta et deleniti ducimus non tenetur suscipit.', 'Omnis aut dolorem et commodi voluptate. Sequi id ipsum perferendis quia eius aliquid eum. Porro laudantium commodi at est reprehenderit molestias est perferendis. Minus architecto in velit quas. Voluptatem voluptatem magni quo ut quis placeat. Quis cumque quam quos nam qui ut nihil accusamus. Aspernatur minima cum aut. Consectetur sed nihil non commodi. Reiciendis quo doloribus ut et. Nostrum nesciunt adipisci accusamus debitis quam ut. Aut officiis dolore ut commodi quo sunt.', 'public', 'demand', 7, 1, 'multi-sale', 7469, 4381, 6443, 0, 'USD', '2023-06-24 21:27:00', 4, 9, 'Sanfordfurt', 654, 2076, 2, '8b919f82-78d0-3b6a-b07b-d2367d3645b4jpg', NULL, '2024-01-31 02:53:59', '2024-02-24 19:50:12'),
(49, 33, 'ece70f9a-f193-3f24-a595-02a7421f8c27', 'Tempore perferendis optio aut praesentium eos quod ullam. Quo officia quas et omnis quae ad quas.', 'Officiis aliquam ut est reprehenderit omnis. Rerum aliquid et libero et quo. Voluptatum sed ipsa accusantium necessitatibus sit magnam. Debitis molestiae veritatis et eos nihil nisi ratione. Soluta id nihil ipsam est enim blanditiis sit aut. Eos temporibus et facilis voluptatem commodi nihil cumque ea. Omnis quibusdam tenetur totam amet et. Esse ut hic quos dolorem.', 'hidden', 'offer', 3, 9, 'multi-sale', 4737, 765, 5253, 1, 'USD', '2023-10-29 07:42:10', 2, 9, 'Lake Oliver', 3184, 4333, 2, '66f7dcfe-1864-3993-b8ce-f3e76e979147jpg', NULL, '2024-02-05 22:02:51', '2024-02-24 19:50:12'),
(51, 32, 'ad453337-6393-3092-b542-cadc391544cb', 'Est qui odit aliquam maxime eos consequatur soluta. Dolorem corporis voluptatem voluptas eos ipsum.', 'Qui omnis nesciunt praesentium et sit et ut. Tempore unde velit vel aperiam aut voluptatem. Voluptas voluptates at iusto aliquid et. Non eius fugit et quos. Et error id dicta molestiae tempora. Dolores est tempora sed. Ex eaque possimus excepturi enim itaque tenetur consequatur. Quia voluptatibus necessitatibus cum earum voluptatem quis quia. Dolores cumque eius provident libero sint. Eum ex ut enim ad ullam. Autem libero eveniet nostrum qui consequatur. Inventore et quae ut.', 'hidden', 'demand', 1, 1, 'multi-sale', 5456, 8473, 2020, 0, 'EUR', '2023-12-21 11:08:19', 6, 3, 'Rosemaryshire', 503, 4944, 1, 'acc2d231-c870-3b93-a224-b0ce9b7e87c5jpg', NULL, '2024-01-14 18:48:43', '2024-02-24 19:50:12'),
(52, 34, '97f11398-90d1-3822-949c-7a80b8636aee', 'Tenetur qui delectus eum vel dolor modi. Ut et id alias occaecati quisquam.', 'Vitae aut nulla nostrum quia pariatur eius. Dolorum quis reiciendis molestias. Doloribus et eligendi possimus consequatur. Occaecati occaecati id ipsam. Voluptatem cumque maxime ducimus eos molestiae. Velit at quo optio voluptatem voluptatem. Officia eum unde quod est est eum. Enim expedita error fugit culpa maiores voluptas neque consequuntur. Dignissimos et ut ipsa ipsam.', 'public', 'offer', 3, 5, 'multi-sale', 2923, 1874, 2402, 1, 'EUR', '2023-03-30 10:32:53', 9, 5, 'New Savanah', 3655, 1678, 1, '1d201997-a7d3-33e5-9ef5-9aad12695e66jpg', NULL, '2024-01-03 08:08:16', '2024-02-24 19:50:12'),
(53, 40, '45f67d4c-cc98-31ad-9ced-aa8ee17004a0', 'Eius et totam doloremque. Odio hic quia et. Dolorem facere quas magnam nesciunt dolores natus.', 'Distinctio velit non illo asperiores optio molestias. Sunt sunt sequi qui est ea recusandae modi. Beatae quis quis possimus. Et dignissimos asperiores rerum sit fugiat eveniet. Deserunt numquam suscipit laboriosam tenetur. Error reprehenderit est necessitatibus. Rem iusto debitis ut ullam in et. Rerum ipsam quia temporibus consequatur. At reiciendis quas vitae dicta. Et itaque quasi vero commodi nesciunt enim aut. Exercitationem nobis voluptatem sed est officia natus voluptatem dolor.', 'hidden', 'diffusion', 1, 2, 'exclusive', 883, 7470, 6958, 1, 'EUR', '2023-06-25 18:47:56', 4, 3, 'North Jewellchester', 4050, 4988, 3, 'faf95d19-0b9d-3e22-ae1f-3f25927b23b1jpg', NULL, '2024-01-26 22:33:16', '2024-02-24 19:50:12'),
(54, 32, '47e07c35-a8f1-31f9-9375-65866d99cd44', 'Fuga eos cumque eligendi dolore qui ut voluptatem. Sed tenetur et voluptas possimus.', 'Laborum assumenda totam esse vero in enim. Nihil et vel occaecati ea laboriosam veritatis dicta. Iure expedita sint et aspernatur ut incidunt. Doloremque animi occaecati fugit. Explicabo est provident tempore excepturi qui maiores. Eos non vel amet rerum pariatur. Adipisci atque in tenetur et et. Ducimus in aspernatur numquam excepturi quos aut reiciendis.', 'public', 'diffusion', 1, 7, 'multi-sale', 3923, 7519, 765, 0, 'EUR', '2023-10-25 10:11:10', 6, 10, 'Margaretemouth', 4171, 3725, 1, '187ea88d-6f4e-315c-bbe2-b989bf02d39ajpg', NULL, '2024-01-23 17:58:13', '2024-02-24 19:50:12'),
(55, 37, '32230e73-11b2-3a00-9bfa-e3b8cbcbee84', 'Facilis eos molestiae quaerat possimus. Similique sit enim aut aut. Quis autem quas natus aliquid.', 'Inventore nihil sit et atque. Et voluptas consequatur dolores accusamus vel enim. Et est impedit inventore omnis eum. Voluptatibus vero praesentium non quaerat rerum fuga aut cumque. Temporibus non quasi cumque officiis nulla. Delectus tempora ut occaecati rerum placeat odio repellat. Neque dolores nam veritatis quos. Beatae perspiciatis veritatis tempore voluptatem qui ut laboriosam amet. Quo accusamus provident ab culpa quia illo non.', 'hidden', 'diffusion', 4, 4, 'exclusive', 1294, 4215, 8526, 0, 'EUR', '2023-12-28 16:27:41', 10, 9, 'West Jaylan', 89, 4972, 1, '1222be07-d574-37f8-b6b4-a8c7733a245cjpg', NULL, '2024-01-23 00:46:12', '2024-02-24 19:50:12'),
(57, 36, '35998681-e10e-3123-bd3a-3b0ca45abbf0', 'Natus incidunt possimus sint. Consectetur dolor rerum necessitatibus. Atque non repellat ex illum.', 'Harum sequi est autem recusandae. Ipsam in sint excepturi. Tenetur beatae natus aut. Impedit dolor et error sunt. Temporibus sed magni porro dolores incidunt enim pariatur. Rerum perspiciatis ut dicta dolor sed placeat. Aliquid voluptas voluptates officiis quam. Eaque illum numquam aspernatur molestias aut dignissimos. Aut amet non id inventore dolorem. Molestias omnis voluptatibus iure quia.', 'public', 'demand', 7, 9, 'multi-sale', 4694, 357, 4242, 0, 'EUR', '2023-12-28 19:37:46', 9, 9, 'East Quinn', 4467, 4440, 3, '0e613a2c-1ec8-304d-a3f7-4547dbf22968jpg', NULL, '2024-02-08 23:49:34', '2024-02-24 19:50:12'),
(59, 34, 'afcbd7d5-c5cf-39c7-adf9-8b7a712a71f1', 'Hic rerum sed id quae. Corrupti omnis magni amet labore. Debitis libero atque ut quis asperiores.', 'Similique officiis voluptate eos architecto hic dolorem. Harum laboriosam minima est molestias consequatur recusandae eius earum. Voluptatem iusto nam doloremque rerum aut ipsam. Rerum error autem qui fuga. Sunt minima officia nihil minima explicabo numquam totam iste. Molestiae perferendis occaecati eos reiciendis distinctio. Voluptatem odio et inventore ut aliquid. Molestiae ut voluptatibus placeat itaque eaque. Velit ab in beatae ea delectus ut.', 'public', 'offer', 1, 2, 'multi-sale', 960, 2566, 8034, 1, 'EUR', '2023-04-30 06:45:45', 5, 7, 'South Arturo', 678, 2981, 2, 'f9bf8f9d-ce22-37e0-88c0-02070ef21ec5jpg', NULL, '2024-02-01 08:26:33', '2024-02-24 19:50:12'),
(60, 32, '61588ed3-30b0-3288-be69-d7c69da00783', 'Optio fuga non non nam. Enim ab cumque molestiae ipsa impedit illum. Vel recusandae et ipsum.', 'Sint suscipit corrupti dolores architecto. Incidunt earum quia maiores ut. Quisquam quidem dignissimos dolores sequi. Autem vitae nihil minus ex odit architecto est. Voluptas quidem cum provident delectus minima. Sint debitis iusto ipsam qui non fuga. Repellat officia architecto ut aspernatur eos ea similique. Qui at accusantium aliquam harum. Error voluptatem nostrum esse quaerat.', 'hidden', 'diffusion', 8, 10, 'multi-sale', 1235, 547, 1594, 1, 'EUR', '2023-04-13 13:39:00', 7, 4, 'Grahamton', 4234, 3753, 2, '9d099cfd-83f9-3d28-8d77-c457f8f39642jpg', NULL, '2024-01-17 04:00:56', '2024-02-24 19:50:12'),
(61, 31, '81f9193f-832a-33d9-9db0-b208c571450e', 'Dolor quasi odio voluptatem dolor in animi. Dolore dolores nulla possimus sequi.', 'Aut sit ea dolores voluptatem consectetur cumque magnam maiores. Voluptatem pariatur consequatur quaerat consectetur dolore. Enim alias ut eum doloribus aspernatur itaque. Cupiditate hic est cum sapiente. Et laborum consectetur dicta necessitatibus dolor dolor. Ipsum unde beatae voluptatem facere nesciunt similique. Ut eaque est sint nemo modi odit. Ut dolorem reiciendis error aliquam.', 'public', 'demand', 8, 8, 'exclusive', 8838, 6086, 1421, 0, 'USD', '2023-10-19 03:40:04', 7, 10, 'Borerview', 4322, 2479, 2, 'fbc12f31-4aca-3aff-9d77-9f42e6c7d741jpg', NULL, '2024-02-21 08:30:18', '2024-02-24 19:50:12'),
(64, 33, '13fc734b-f013-3e25-981a-070a200d4920', 'Omnis repudiandae eos quibusdam est doloremque quos et. Enim totam voluptatem quos illo.', 'Provident minima minus a molestiae. Qui officiis libero ad cumque ipsum deleniti sit. Et totam qui dolorem aut quo odit. Eum sint ducimus asperiores quisquam laborum ut harum. Quidem fugit quaerat qui molestiae natus. Perspiciatis quas ut fuga deleniti ullam id. Neque rerum architecto deleniti facilis voluptates cupiditate veritatis. Provident saepe nisi enim illo. Doloribus quod dignissimos blanditiis rerum. Dolore non consectetur voluptatem nulla unde et. Nostrum esse ea tempore fuga.', 'public', 'offer', 9, 6, 'multi-sale', 4640, 3614, 7931, 0, 'USD', '2023-04-07 14:45:13', 8, 7, 'North Albertastad', 3551, 3191, 3, '105783d1-fcdf-314a-b855-167b3241f472jpg', NULL, '2024-01-29 01:07:14', '2024-02-24 19:50:12'),
(65, 31, '9095e442-682e-36f2-b425-d4a7981a0cdb', 'Accusantium atque et voluptas omnis ut. Omnis laborum facere sint magni.', 'Ipsam rerum velit optio eveniet quisquam. Aut pariatur eum ut et voluptatum corrupti. Nemo qui necessitatibus quis laborum. Dolore unde et ipsam illum voluptatum itaque consequatur. Quis error culpa amet qui praesentium. Non et minus asperiores. Eos architecto est nobis ipsam. Quasi odit vel suscipit. Architecto dolorem non in nostrum laboriosam.', 'public', 'offer', 8, 9, 'exclusive', 1526, 7613, 8611, 1, 'USD', '2023-11-03 15:55:36', 2, 8, 'Ratkeport', 513, 3811, 1, '2fc90382-f4f6-3992-a179-cddef6e3703ejpg', NULL, '2024-02-02 13:20:46', '2024-02-24 19:50:12'),
(67, 33, 'd78df1e6-cdb0-37b4-9b0c-ac32acf847fd', 'Qui ipsa eaque rerum ea ut. Blanditiis voluptas eum blanditiis quia. Non autem nemo sint repellat.', 'Rem culpa non vel quae. Amet beatae et sed quam fuga eaque totam ut. Aut id harum cumque hic minus. Ex qui quidem quidem sed nobis eaque fugiat voluptates. Sunt repellat et sed et. Eos animi voluptatem expedita qui fuga. Magni tempora omnis autem blanditiis placeat. Autem consequatur odit quaerat sunt voluptatibus qui repellendus.', 'hidden', 'diffusion', 1, 2, 'multi-sale', 8311, 4011, 7982, 1, 'USD', '2023-12-07 16:08:56', 2, 9, 'Shannyland', 1788, 4875, 2, '734ece1e-95a7-30c0-ab79-692323d25f54jpg', NULL, '2024-02-11 14:48:23', '2024-02-24 19:50:12'),
(68, 31, '7c41a675-974f-36be-b4e5-7ba82a9680d8', 'Aut fuga tempore fugiat quis laborum soluta. Dolor molestiae aut unde nemo sed.', 'Ratione laudantium natus adipisci pariatur aut. Amet eos saepe fugiat neque nobis quaerat officia. Qui tempora iusto non saepe ut doloribus officia. Dolorum consequuntur expedita accusantium sed magnam. Cum alias recusandae est quas aut omnis vel corporis. Sunt necessitatibus aliquid eveniet iusto saepe. Sed est cum quia nam. Et labore iste soluta ut aut.', 'hidden', 'offer', 6, 6, 'multi-sale', 4887, 1229, 2630, 1, 'EUR', '2024-01-02 09:48:40', 4, 8, 'Raynorton', 1829, 266, 2, '98d9f052-80b3-325f-873e-4efaa9000888jpg', NULL, '2024-01-29 12:08:26', '2024-02-24 19:50:12'),
(69, 36, '89153d92-d40f-316c-b06c-87b63dce96f3', 'Numquam nostrum repudiandae omnis nihil asperiores occaecati omnis. Neque sed ut omnis deleniti.', 'Voluptas sed sunt et fugiat ad aut. Repudiandae amet quo culpa voluptatem molestiae. Quae at iusto voluptatibus voluptas. Consectetur sequi nobis expedita. Reprehenderit quia fuga odit reprehenderit perspiciatis aperiam deleniti. Consectetur velit hic qui enim modi. Est et dolores est temporibus. Eaque eum aut aut dolores ut. Nostrum laudantium harum autem occaecati assumenda in adipisci. Quo dolore quidem veniam atque corrupti quibusdam iste eos.', 'public', 'offer', 4, 10, 'multi-sale', 8391, 2648, 3547, 1, 'USD', '2023-09-14 01:06:01', 6, 1, 'Hellerhaven', 4918, 70, 3, '6e24365f-9e58-35ef-85d7-b9a3b2c2211ajpg', NULL, '2024-01-15 12:33:24', '2024-02-24 19:50:12'),
(71, 36, '72da84a9-0d97-346e-b54d-40b70e5227e1', 'Totam possimus est accusamus aut animi numquam voluptatem. Non labore fugit reiciendis sit.', 'Odio ratione ipsam qui tenetur. Consequatur delectus dolor aspernatur. Et consequuntur quia libero veritatis quibusdam et dolores. Est et enim labore voluptas ullam neque. Temporibus ut omnis neque commodi qui voluptate. Voluptatibus aliquid nostrum et sed. Alias at ut facilis enim maiores cum. Voluptatibus animi ab sed dolorem et.', 'public', 'offer', 1, 8, 'multi-sale', 4224, 3914, 5654, 1, 'EUR', '2024-01-24 23:59:54', 3, 1, 'Wintheiserton', 3710, 4127, 1, '18e2b721-33c3-35b5-ad7f-97b725ce435ejpg', NULL, '2024-01-01 14:33:28', '2024-02-24 19:50:12'),
(72, 35, '813b7553-125a-36a5-9e77-5e5672090522', 'Et quas alias sit dicta qui. In dolore dolores eum pariatur. Omnis qui porro sunt.', 'Aut rerum est quasi voluptates corrupti alias officiis et. Deserunt vel harum maxime harum. Corrupti doloremque et perspiciatis sit aut. Quasi laborum et rerum omnis consequuntur sint dolore. Ullam earum sint quis et. Voluptates aspernatur ipsa sint repudiandae repellat id eos veritatis. Saepe dolores est debitis voluptas non in fugiat. Iure voluptatem et perspiciatis dolore omnis natus quos sunt. Ipsam voluptate non nihil inventore quis quasi.', 'hidden', 'demand', 7, 9, 'multi-sale', 1575, 683, 2549, 1, 'USD', '2023-06-05 07:01:58', 6, 9, 'Lake Linnieside', 1881, 3170, 1, '19896e82-ad1d-3181-8885-42e8c3820ec9jpg', NULL, '2024-02-11 12:43:13', '2024-02-24 19:50:12'),
(74, 33, '5145594a-bef9-31ff-9fbd-776339748d24', 'Id assumenda ipsam fugiat est non. Qui ut et qui ratione eos dolore cum est.', 'Aut aut molestiae sequi vero excepturi quasi harum. Laboriosam reprehenderit consequatur id eaque architecto ut provident. Est voluptatem sit eveniet magni laborum distinctio ut eum. Sit fugit eius quaerat ducimus. Reiciendis odit aut et totam autem est odit. Nesciunt distinctio maxime at. Eum odit sit sint accusamus officia. Eos ut ullam repellendus quisquam et dolor. Eaque pariatur similique consectetur est reiciendis deleniti eveniet.', 'hidden', 'diffusion', 9, 5, 'multi-sale', 4246, 5090, 6825, 0, 'USD', '2023-09-11 05:10:23', 1, 8, 'Botsfordside', 1939, 3830, 1, '37200e1a-f84e-3795-9fce-9f333a8d132ejpg', NULL, '2024-02-17 05:50:19', '2024-02-24 19:50:12'),
(76, 31, 'f71289b6-9421-329e-bc22-b253b15d815c', 'Esse sed et est expedita quidem recusandae ad. Voluptatem ut veniam rerum ullam.', 'Ipsa voluptatum illo impedit deleniti perferendis animi quidem. Vel beatae laudantium enim dignissimos enim at. Provident eos ex quasi. Et molestiae minima quaerat ad. Quas cumque beatae a. Ipsam vel magnam eveniet esse quidem. Amet ipsum rerum corrupti maiores et. Ut voluptatem aut rerum magnam sunt ipsam odio. Ut ut voluptatem id ut. Vero optio corporis rem laborum quod qui facere cum. Eum occaecati ab et necessitatibus sit. Provident hic alias rerum recusandae consequatur quaerat.', 'public', 'demand', 2, 9, 'multi-sale', 4768, 284, 7735, 1, 'USD', '2023-12-03 11:34:51', 8, 4, 'East Cullenburgh', 2342, 3781, 3, '9480098b-f7ec-38a2-9e0a-17c794eb9dc7jpg', NULL, '2024-02-17 16:24:42', '2024-02-24 19:50:12'),
(77, 32, '154854d4-2642-3ef3-a3a6-983788b720c5', 'Porro sapiente nisi impedit eum. Molestiae animi deleniti sit delectus voluptas quos.', 'Soluta dolores distinctio atque et commodi cumque odit. Quia quia autem labore. Distinctio non esse et dolorem maiores. Consequuntur est explicabo inventore quas. Vel maiores ex pariatur perferendis et ipsa non. Ut tempore ratione aspernatur est ut quos. Consequatur dolor quaerat facilis odio facere. Et dolores est commodi enim. Aspernatur veniam blanditiis quaerat velit. Perferendis exercitationem vero veniam repellat non dicta sit. Omnis dolore facere dolorem et culpa.', 'hidden', 'demand', 6, 4, 'multi-sale', 2078, 8224, 6150, 1, 'USD', '2023-06-26 00:55:18', 5, 6, 'East Royalmouth', 688, 4950, 3, 'fe6725be-33c8-3cba-a8fe-87a9ec1dd5c4jpg', NULL, '2024-01-05 20:07:53', '2024-02-24 19:50:12'),
(78, 36, '57557f3a-d14f-32fb-94cd-22c2a2e5f4f3', 'Dolores est quisquam et voluptatibus nisi. Quia nostrum atque mollitia.', 'Natus voluptatum minus aut totam temporibus quia culpa doloribus. Quam ipsam soluta quisquam et. Dolore nesciunt et quia blanditiis. Optio non non harum reprehenderit nobis. Numquam sapiente voluptatem saepe. Accusamus et voluptatem repellendus vel iste nulla ea. Consequuntur in est at quis sed ab. Nostrum optio quo et quia dicta. Totam voluptas cupiditate quaerat magni. Tempora repellendus aut autem repellat distinctio. Quia et amet quis ex repellendus consequatur nisi.', 'public', 'offer', 9, 3, 'multi-sale', 2516, 7383, 916, 1, 'USD', '2024-02-11 07:49:13', 2, 4, 'Edwardshire', 2993, 2632, 3, '894f0f1e-5136-3cd6-b65b-e13603b47bf0jpg', NULL, '2024-02-10 12:38:16', '2024-02-24 19:50:12'),
(79, 39, '6e9f19e4-bb6c-32c1-ab63-1ba14abbbdc1', 'Maiores deserunt rerum qui. Consequatur eum adipisci quis. Est et quis sed nobis aut rerum.', 'Aut aperiam doloremque minus quae eos. Ipsam sint perferendis minus iusto. Consequuntur dolores et tempore asperiores. Eum quod non fugiat id autem. Ex qui totam fuga. Cum quisquam soluta et officiis tenetur. Enim qui eaque est ut molestiae pariatur neque. Itaque velit est modi earum. Ad et magnam aut. Praesentium repudiandae ab et cupiditate eaque. Ab cumque maxime quia ex veritatis ipsam quia. Voluptatem consequatur nam aut earum.', 'hidden', 'demand', 2, 10, 'multi-sale', 2335, 6744, 4242, 1, 'USD', '2023-05-01 22:58:57', 3, 9, 'Thielmouth', 4412, 1589, 1, '164b8257-986d-35f8-beaa-41f969fcc8ccjpg', NULL, '2024-01-12 04:42:49', '2024-02-24 19:50:12'),
(80, 35, '90695608-5c25-3e3b-96d9-bd237b120b9f', 'Voluptate id corporis totam ad. Animi error ea esse sunt nisi non.', 'Aut enim placeat quibusdam veritatis quae minus ut. Fugiat quibusdam et sapiente. Inventore sunt nostrum facere dolores. Pariatur quae unde temporibus quis temporibus aut. Impedit commodi nesciunt voluptatem et enim nemo odio. Possimus id et labore ipsam. Necessitatibus libero nesciunt qui qui rerum. Iure alias aperiam voluptatem est exercitationem recusandae dolorum. Eaque adipisci id veniam voluptas.', 'public', 'offer', 3, 1, 'exclusive', 8573, 5344, 5625, 1, 'EUR', '2023-12-01 19:32:07', 7, 6, 'West Harmonton', 1476, 863, 2, '1382b0b1-1be7-3409-ae19-abdb36eb7fc6jpg', NULL, '2024-01-13 09:56:05', '2024-02-24 19:50:12'),
(81, 31, 'eccd0ee6-f025-37ee-8da4-a2e436ba7f8c', 'Sit autem eaque quos voluptatem provident enim. Iusto aut impedit corrupti perspiciatis eaque est.', 'Voluptatem aspernatur modi in qui. Vero minus quasi qui ex culpa nesciunt. Quis aperiam esse possimus suscipit. Dolorem iure consectetur eius ipsa alias optio molestiae. Provident omnis pariatur tempora rem quia nihil nihil. Accusamus animi delectus dolores quia accusantium perspiciatis.', 'public', 'offer', 1, 6, 'exclusive', 3541, 4447, 1581, 0, 'EUR', '2023-03-16 07:14:59', 6, 5, 'Purdyborough', 3442, 3471, 1, '386b5955-4ae6-3334-854d-2e11ad05eb39jpg', NULL, '2024-01-10 22:27:22', '2024-02-24 19:50:12'),
(82, 37, '7efcec44-94e5-3034-b718-976dacda9252', 'Aliquam repellendus deserunt et error laudantium. Nihil quia doloribus tempore enim aut.', 'Non reiciendis est repudiandae magnam eos. Aut consequatur sit autem itaque vel qui. Ex autem velit adipisci exercitationem consequuntur. Autem cumque voluptates qui illum aut. Vero quae facilis dolores et distinctio optio. Inventore eos explicabo ratione reiciendis neque atque. Fuga quis reprehenderit quaerat saepe rerum veniam. Earum qui et sint aliquid. Et similique harum debitis odit et.', 'hidden', 'demand', 9, 7, 'exclusive', 2741, 3723, 5483, 1, 'EUR', '2023-07-16 18:34:18', 8, 5, 'Lake Estel', 2268, 2158, 3, '479a5b74-9c43-310f-bfca-2950eba93b24jpg', NULL, '2024-01-22 18:15:40', '2024-02-24 19:50:12'),
(83, 32, 'c9f1099a-c569-3cc2-b7d9-58c7cf7547ce', 'Voluptas et et voluptas sunt. Sed velit nesciunt illo. Sed ullam illo in nesciunt vel.', 'Laboriosam sunt dolor distinctio repudiandae ex. Voluptatem illo sit velit deleniti est deserunt. Earum perspiciatis possimus debitis et optio necessitatibus mollitia similique. Placeat quis veritatis eligendi autem. Voluptas nemo reprehenderit quibusdam velit unde. Assumenda eos fuga rerum iste similique. Rerum pariatur rem suscipit quis. Consequuntur modi rerum et laboriosam consequatur. Ut magni sint laboriosam quod ut corporis tempore. Rem eveniet aut iusto sed et.', 'hidden', 'demand', 6, 6, 'exclusive', 1616, 5401, 8282, 0, 'EUR', '2023-06-27 10:54:53', 7, 10, 'North Phyllis', 268, 508, 1, 'd298f30f-11c4-358e-bba8-9b213609d415jpg', NULL, '2024-01-20 06:36:21', '2024-02-24 19:50:12'),
(84, 32, 'c9d7cda6-bab4-38cd-954d-f705b2d7805d', 'Totam mollitia nihil soluta dolor cupiditate rem dolore ut. Necessitatibus quo est perspiciatis ut.', 'Quidem quo eaque non ut. Illo saepe sint totam illo qui laudantium. Quidem odio aut veritatis maiores. Commodi voluptatibus rem minus et neque nostrum eos. Provident ut fugiat voluptatum ea sit. Velit est quia occaecati ab harum vitae suscipit quis. Consectetur earum maiores dolorem pariatur qui vel. Non minus omnis minus et qui veritatis. Quo voluptas quasi et et minima eligendi quibusdam. Possimus quis facere et alias amet inventore.', 'public', 'offer', 6, 6, 'exclusive', 4077, 8312, 3265, 0, 'USD', '2024-01-05 14:18:19', 9, 10, 'South Hannah', 4420, 3074, 3, '4c697079-2581-3a5f-8ea1-94357dfdf44cjpg', NULL, '2024-01-06 00:42:52', '2024-02-24 19:50:12'),
(85, 36, '4a2ebcd3-6e75-3907-a86d-cb2483a8dd1a', 'Quia et est ipsam quia officia sed et. Sint blanditiis eum nobis et tempora.', 'Quas dolorem et animi aperiam. Expedita id quae rerum officia. Qui ullam deserunt aliquid sunt aut. Expedita consequatur hic nesciunt. Id quis dolorem maxime pariatur voluptatem ea esse. Maiores sit harum laudantium aut itaque id. Quo temporibus nihil in quibusdam sint. Autem sed sint nulla eos perferendis. Quos commodi provident rem sit et impedit quia. Iure dignissimos dolorum eum ipsum nam. Quia enim dicta cumque atque est aliquam. Sit officia qui neque enim dignissimos natus aliquam.', 'hidden', 'demand', 6, 8, 'exclusive', 1867, 6449, 638, 1, 'USD', '2023-06-21 19:10:21', 6, 3, 'Lake Clarissaville', 1473, 931, 2, 'ee7cbde0-5106-3595-ab3d-795c598d2783jpg', NULL, '2024-01-12 03:57:37', '2024-02-24 19:50:12'),
(86, 34, '324ee918-b159-3ade-b32e-5e862c3c4f9b', 'Dicta rerum earum iste harum. Sed fugit neque veniam. Aut id fugiat laborum sed alias id explicabo.', 'Maxime cum et similique sit eaque totam maxime et. Ipsa deserunt illum sit. Sapiente officiis dolores mollitia molestias laborum id ratione. Aut eum eaque officiis assumenda commodi. Quam quia inventore omnis architecto perferendis eos mollitia. Nostrum repudiandae sed aperiam iure. Labore aut adipisci earum quia quas et. Distinctio nesciunt aspernatur totam reprehenderit. Illum ullam et veritatis expedita.', 'public', 'offer', 8, 8, 'multi-sale', 5082, 1370, 273, 1, 'USD', '2024-02-04 08:57:48', 10, 4, 'New Rashadland', 2761, 443, 2, 'b19efde3-f290-3fc1-9b37-752f45db0501jpg', NULL, '2024-01-31 10:24:23', '2024-02-24 19:50:12'),
(87, 39, 'e1bc76c8-3e62-337c-bdfb-67ad5c5770ef', 'Enim sit quis pariatur rerum. Sed rerum et odio. Accusantium odio sint neque officiis.', 'Iure culpa minus veniam minima reprehenderit hic. Non at dolorem cum. Fuga cumque quod error officiis exercitationem autem. Expedita a vitae alias enim vero quam doloribus. Eveniet sint ut ducimus delectus ipsum cupiditate unde. Quidem vitae aspernatur modi vel ipsam quia. Occaecati aut culpa molestiae. Assumenda debitis facilis saepe dicta commodi. Et doloribus perferendis molestias voluptatem. Quidem est consectetur voluptatem dolorum accusamus rem ipsum nobis.', 'public', 'demand', 9, 9, 'multi-sale', 8749, 257, 7431, 1, 'USD', '2023-06-14 14:33:43', 6, 1, 'Ethelchester', 3632, 2811, 1, 'abb2ca03-e2d1-3449-90c8-25ca582addd1jpg', NULL, '2024-02-17 18:17:16', '2024-02-24 19:50:12'),
(90, 39, '219ad43e-c22b-336b-8c8a-b7aaa13ed0ac', 'Est aut non et totam. Ut qui maxime voluptatem et et.', 'Corrupti eveniet deleniti nisi deleniti inventore. Officia et incidunt dolorem non aut. In et optio repellat natus. Itaque inventore repellendus doloremque similique. Dolorem repellat aut aliquam quia quasi in. Rerum debitis cumque nesciunt ut illum qui modi eum. Quia et sed itaque tenetur. Non necessitatibus quo ea. Eius fugiat aut voluptatem sint. Quia aspernatur tenetur non autem eveniet dolores sed.', 'hidden', 'diffusion', 8, 2, 'exclusive', 339, 540, 335, 0, 'EUR', '2023-07-03 08:18:30', 10, 1, 'Port Zechariah', 4712, 809, 2, 'dea386de-70f8-351c-940b-d174ad003fe8jpg', NULL, '2024-02-03 17:24:02', '2024-02-24 19:50:12'),
(91, 34, 'b8675424-0774-3369-8908-244db6eab094', 'Non ut nesciunt ullam et. Enim explicabo quis est ab.', 'Adipisci ab est blanditiis quod aut. Alias quaerat dicta facere eos mollitia adipisci. Amet quo ea voluptatem nostrum repudiandae similique iste. Velit repellendus quisquam non dolor est esse nemo facilis. Consectetur porro nihil minus aliquid alias adipisci. Et consectetur in sit vitae ut labore totam. Officia magni ut distinctio.', 'hidden', 'diffusion', 1, 9, 'multi-sale', 4713, 6404, 5445, 1, 'EUR', '2023-03-11 13:09:08', 10, 6, 'Langshire', 419, 4730, 1, '40ef025b-97a7-36d4-9851-4145fd693840jpg', NULL, '2024-02-02 07:06:55', '2024-02-24 19:50:12'),
(92, 32, 'fee4ab48-991e-3c84-be21-936d7d8a3baa', 'Natus laborum et rerum non. Tenetur qui et est ab eligendi.', 'Totam tenetur et eum sed cumque amet qui consequatur. Accusamus et numquam aspernatur recusandae repellat praesentium. Provident quibusdam voluptas et quia sapiente. Minus sint ad id officiis dolores. Aut perspiciatis maxime soluta eos. Optio reiciendis neque earum minus. Eaque nesciunt sint quia explicabo. Sed dolor reiciendis quia praesentium quisquam non. Fugiat ipsa atque qui et ut veritatis possimus. Reiciendis dolorem quo aut quidem architecto maxime.', 'hidden', 'diffusion', 8, 2, 'multi-sale', 4489, 4563, 5247, 1, 'EUR', '2023-04-18 18:48:08', 2, 4, 'West Emanuel', 2996, 3141, 3, 'b51648f4-dbd4-31ed-873e-b86efe70a473jpg', NULL, '2024-02-05 11:57:58', '2024-02-24 19:50:12'),
(93, 36, 'fca1c6e3-2fb4-3232-8a94-1d98d44413ac', 'Velit voluptates dolor sunt tenetur. Debitis ut est corporis rem illo.', 'Dolor aliquam dolore eveniet ea natus et esse. Magnam et excepturi et excepturi. Assumenda facilis tempora aperiam asperiores. Iure incidunt incidunt modi non laboriosam ut. Ut aspernatur voluptas perspiciatis labore quia aspernatur saepe harum. Eligendi sint voluptas qui cumque labore quam. Perferendis iusto esse rerum omnis voluptate. Sit deserunt est voluptate minus rerum atque aut optio.', 'hidden', 'demand', 5, 1, 'multi-sale', 8916, 8330, 2842, 1, 'EUR', '2023-09-08 14:54:56', 6, 2, 'North Brittanyshire', 1834, 1362, 2, '89c4e2f6-41d5-3771-9d35-6f438671266djpg', NULL, '2024-01-21 09:28:05', '2024-02-24 19:50:12'),
(96, 40, '3926b19e-e7a3-31ac-9dcd-56c84227f896', 'Nobis velit dolores ullam dolorem quibusdam. Quia amet neque qui vel.', 'Amet enim quasi aut harum suscipit quos. Officia modi dolor iste nemo veniam rem. Voluptates quas laboriosam exercitationem omnis suscipit. Iure quia architecto aut sunt maiores. Ea culpa saepe rerum fugit et optio est. Repellendus fugiat deleniti at. Voluptatum assumenda laboriosam quod rerum iusto. Voluptatibus iste unde deleniti qui voluptatibus sunt. Sit molestiae ut dignissimos aliquam. Omnis ut unde reiciendis ratione sunt fuga quia. Quae vel cumque qui blanditiis aut quidem.', 'hidden', 'demand', 2, 3, 'multi-sale', 3660, 8085, 5883, 1, 'USD', '2023-08-21 10:08:21', 8, 8, 'North Keyshawnhaven', 2477, 4068, 1, '50687bde-f629-3b6f-a4ba-2839636ec248jpg', NULL, '2024-02-11 06:39:35', '2024-02-24 19:50:12'),
(97, 34, '47b8dbb1-17a3-3a09-b7a8-376f79338e09', 'Illum excepturi nostrum libero unde. Veritatis architecto et eligendi deleniti.', 'Recusandae id eaque sunt qui. Et officiis ipsa voluptatum quo qui dolores sequi. Et asperiores quisquam et quas. Laboriosam incidunt velit ut consequatur qui. Sed a rerum ab esse sit ea. Hic ratione quia dolorum quaerat. Quo reprehenderit voluptates nulla facilis sunt et. Occaecati error illum aperiam iste. Pariatur non fuga quidem eveniet. Dolorem eligendi nemo sed dolor. Aut est magni unde quibusdam quia dignissimos.', 'hidden', 'demand', 5, 9, 'multi-sale', 8890, 3036, 4111, 1, 'EUR', '2023-11-13 19:57:21', 7, 6, 'North Jackeline', 2638, 1476, 1, '1b79aee9-3791-301a-a3b3-2c3ee511a22fjpg', NULL, '2024-02-07 16:07:09', '2024-02-24 19:50:12'),
(98, 39, '065f7ccd-d117-32bf-988d-733b00c0d033', 'Pariatur dolorum provident consequuntur. Ipsam consequatur provident expedita et quis nam sunt.', 'Cum illum et cumque excepturi architecto officiis quo. Est eos nemo ut ea iste corporis aut. Et ducimus excepturi dolores rerum. Et est autem non necessitatibus quia. Autem distinctio deserunt rerum est. Praesentium sit molestiae dolor aut minima ducimus quia. Hic nemo nobis voluptatem ea officiis ratione sit.', 'hidden', 'offer', 5, 7, 'exclusive', 287, 4210, 7611, 1, 'USD', '2023-03-17 22:49:58', 4, 2, 'Lake Josephine', 1676, 1226, 1, '1756ee7d-8a3d-3c07-8513-205470672452jpg', NULL, '2024-02-04 14:56:49', '2024-02-24 19:50:12'),
(99, 31, '02ddaf55-e41b-3ce8-b517-9f63c7e43bc7', 'Quod nihil rerum ut. Iste in ex non perspiciatis. Voluptate maxime maxime deleniti nam.', 'Natus accusantium magnam possimus doloremque ut. Id quia voluptatum quibusdam officiis sunt saepe. Ullam consequatur eos eveniet illum porro. Dolorem architecto accusamus et nam vel. Maiores non consequatur qui ut quidem rem. Sint nihil aperiam quasi facilis. Voluptas officiis officiis autem necessitatibus. Non illum voluptas iusto ad neque similique.', 'hidden', 'offer', 3, 3, 'multi-sale', 6270, 413, 266, 1, 'USD', '2023-03-25 08:07:00', 8, 7, 'Kossville', 2983, 3922, 1, '41057d99-0442-3462-9e95-4882fb7af7a9jpg', NULL, '2024-01-26 10:49:29', '2024-02-24 19:50:12'),
(101, 35, '663e9525-bc40-3243-af56-35dd63d40cc8', 'Ipsam est voluptatem sunt et ea non rerum. Quisquam explicabo est qui hic praesentium ut optio.', 'Recusandae unde dolor ut sed non. Soluta velit nemo commodi quaerat animi vitae. Molestiae sed unde quidem sed. Nihil autem ut non excepturi quo aut officia. Pariatur vel illo voluptatibus at adipisci. Repellendus culpa accusantium molestias. Ipsum harum eaque mollitia aliquam. Quia facere cupiditate et dolores. Id impedit rerum et quisquam deleniti nisi iure.', 'public', 'diffusion', 4, 3, 'multi-sale', 627, 8194, 1516, 0, 'EUR', '2023-12-22 20:00:26', 4, 7, 'North Zenaport', 4331, 4211, 2, 'e27adc08-cd0d-3237-aba5-412559ae914ejpg', NULL, '2024-02-18 20:09:54', '2024-02-24 19:50:12'),
(102, 31, 'b51f3380-a0de-39f0-a4ac-f2fb7794e94a', 'Rerum ipsam aliquid molestiae tenetur quam. Eaque sit voluptate fuga a molestias quia.', 'Eos voluptas debitis recusandae illo accusantium. Laudantium sunt consequuntur omnis ipsam cum. Dolorem aperiam nihil autem commodi ducimus sit. Doloribus corrupti voluptas dolor aut vel consequuntur molestiae. Harum reiciendis ipsam dicta necessitatibus possimus. Tenetur neque et harum laudantium est. Nulla ut reiciendis quidem nesciunt. Atque nisi provident quam laborum. In aliquam facilis voluptas minima. Sit iste eum aliquam et ratione aliquam.', 'public', 'demand', 6, 4, 'multi-sale', 8136, 3271, 5965, 0, 'USD', '2024-02-17 20:07:45', 9, 3, 'New Mozelleton', 4619, 3147, 2, '4f4fc57c-ab4e-3169-ba3c-42b4657fb60djpg', NULL, '2024-01-12 04:30:42', '2024-02-24 19:50:12'),
(103, 35, '82c6f0e6-801a-3de1-b152-38a3cdcf1de5', 'Perspiciatis quod molestias odio qui. Qui quia provident error asperiores.', 'Sit fuga enim cum fugit omnis. Vel illum cumque reprehenderit tempore dolor eius voluptates. Sunt facere sint deleniti eaque. Alias debitis veniam ab aliquam sunt aperiam quia itaque. Sit dolore officiis et enim est. Voluptatibus quos ipsa veritatis quos qui nostrum. Dolor molestias dolor illo eaque et ullam eos. Laboriosam rerum fugit illo unde quae sint. Necessitatibus esse aliquam quae illum. Quisquam veniam sint consequuntur dolorem omnis beatae.', 'hidden', 'offer', 8, 9, 'exclusive', 8336, 5457, 2480, 1, 'EUR', '2023-04-19 10:40:52', 10, 1, 'South Kaiamouth', 2934, 3847, 3, 'e96b7d69-d0e0-3f2c-9757-fe97eba20ae5jpg', NULL, '2024-01-13 00:12:32', '2024-02-24 19:50:12'),
(104, 40, '76869d91-654e-3536-93df-52b2bc9a29b9', 'Voluptatum ex eligendi qui. In inventore quod quae cum aliquid.', 'Voluptatem rerum libero libero et. Et error ex vel. Fugiat nisi iusto quas error animi et. Atque nihil sapiente aspernatur et recusandae provident nobis magni. Eius velit dignissimos debitis unde. At atque ea provident est. Aut nobis earum quo quia distinctio est quia. Quasi ea autem accusantium vero et consequatur. Fugit omnis fugit minima assumenda autem culpa facilis. Aut est placeat voluptate qui repellat ad.', 'hidden', 'diffusion', 6, 10, 'exclusive', 6024, 1486, 2645, 0, 'USD', '2023-04-22 15:24:20', 2, 3, 'Tremblayside', 859, 1367, 2, '23b05fe4-e617-3716-b7e4-4cf3d9a3f86cjpg', NULL, '2024-01-14 18:41:29', '2024-02-24 19:50:12'),
(105, 35, '8322cb1b-9cea-3211-ab93-8f6edf9dacc4', 'Iste ut vitae quasi nesciunt sunt. Repellat omnis fuga quidem est exercitationem.', 'Eius quidem nesciunt delectus non autem fugiat. Amet illum expedita a ut et atque fugiat impedit. Odit debitis maiores nihil iusto facilis nulla. Recusandae libero blanditiis consequatur voluptatem dignissimos consequatur deleniti. Quos molestias maiores ea optio. Numquam quia voluptates eius quo. Enim ipsam quaerat doloribus hic. Fuga quam consectetur veniam neque rerum corrupti voluptas.', 'public', 'demand', 1, 3, 'multi-sale', 2388, 274, 3989, 0, 'EUR', '2023-06-10 14:16:54', 5, 3, 'Bechtelarport', 3647, 1504, 3, 'e90aa6cd-0d48-32e9-bce6-f8cba56d1eddjpg', NULL, '2024-02-14 23:10:22', '2024-02-24 19:50:12'),
(106, 31, '37e9ab6e-f479-308e-82e0-52f3ae58d6e7', 'Ipsum illum reiciendis sit vitae voluptate molestiae et. Consequatur illo provident atque aut.', 'At doloremque iusto omnis praesentium veritatis consequatur. Minus delectus soluta non similique. Iusto voluptas porro doloremque quia. Omnis voluptates in possimus impedit adipisci. Nisi eius aut vel quia suscipit. Quidem quia est saepe. Quam qui distinctio distinctio voluptatibus provident ad illo. Libero officia ea et quia deleniti. Sit officia nihil libero.', 'public', 'demand', 6, 2, 'exclusive', 3951, 4004, 1247, 1, 'USD', '2023-12-03 10:34:53', 4, 3, 'Eastonmouth', 4844, 3637, 2, '1285a533-9825-375b-bd3e-aeb63bfa47ecjpg', NULL, '2024-02-14 16:57:17', '2024-02-24 19:50:12'),
(107, 36, '87f4ff9c-52cc-3479-9be1-27337d082686', 'Eum dolore impedit est qui perspiciatis. Aut voluptatem et adipisci quae id necessitatibus.', 'Minima maiores iure sed. Eligendi quia dolorum et blanditiis. Sint at mollitia iusto quod. Illo molestiae sit aut dolorem itaque deleniti. Quia perferendis at necessitatibus perferendis delectus. Maxime labore nostrum totam hic ut ipsam itaque. Blanditiis eaque voluptas autem similique nihil a. Sit maiores est quis eos dolorum. Aut ullam quis natus ut natus et vel. Dignissimos enim rerum molestias quasi beatae et.', 'hidden', 'offer', 4, 10, 'exclusive', 2178, 7261, 566, 0, 'EUR', '2024-02-07 16:35:21', 7, 5, 'Metzhaven', 4247, 3628, 1, '895289a2-b773-3b3f-a580-6bbad7437668jpg', NULL, '2024-01-06 02:21:35', '2024-02-24 19:50:12'),
(108, 39, '8eb3537e-0185-36cb-9d62-b683c7c373b9', 'Quaerat maxime itaque non in. Minima consequatur sed aspernatur atque.', 'Beatae quasi qui nihil. Reprehenderit quo numquam earum. Molestias eos debitis et quia. Minus placeat atque repudiandae quas tempora. Odio aliquam voluptatibus accusamus culpa quis ullam dolores. Alias autem magni quia deleniti dolores repellendus. Explicabo porro debitis voluptas aliquam. Error rerum eveniet nostrum illum vel. Id consequuntur sint modi in. Consequatur ut debitis explicabo consectetur et. Ut exercitationem quidem quam dignissimos.', 'public', 'offer', 2, 6, 'multi-sale', 3071, 8255, 1914, 1, 'EUR', '2023-04-26 13:56:49', 5, 3, 'Zoilamouth', 4833, 4903, 3, '6ac2c7d2-be28-335e-a82d-f5e953e09407jpg', NULL, '2024-01-27 17:59:43', '2024-02-24 19:50:12'),
(109, 34, 'c96653db-ed23-3f42-b340-33d5f5eaafce', 'Odio autem nihil qui ut odio. Commodi nisi et tempore sint dolorum. Aut sed est praesentium.', 'Veniam quia dolores incidunt adipisci. Minus voluptatem architecto totam aut. Rerum sit praesentium dolorem voluptatem iste ad tempora. Unde blanditiis quibusdam vel non dolor. Amet quo quae maxime cumque accusantium animi. Eveniet nemo id provident provident commodi. Sint est qui doloremque adipisci rerum atque voluptatem. Quos expedita consequuntur sed aut. Placeat omnis eos dolor qui et. Perspiciatis quo sit aut tempore itaque.', 'hidden', 'demand', 9, 2, 'exclusive', 3305, 4039, 8503, 0, 'USD', '2023-05-04 13:10:50', 5, 3, 'East Robert', 3233, 1935, 2, '5975fa4c-f1a4-3b5c-942a-64a3187a16c0jpg', NULL, '2024-01-05 02:35:02', '2024-02-24 19:50:12'),
(110, 40, '17165095-8bff-3b31-bf22-2172cedb52e2', 'Est eius ut qui quas et incidunt sed. Ut et molestiae qui fugit.', 'Sit eos veniam illum. Eum dolore ratione corporis et. Reiciendis sed est officia harum vel tenetur sequi. Consequuntur dolorem quia perferendis occaecati tempora autem pariatur. Ea tempora exercitationem ut voluptatem quae. Nihil dignissimos veniam distinctio magnam magnam ab sapiente molestiae. Fugiat eaque ipsam in quos repellendus. Et magnam aliquid quod et rerum necessitatibus sequi similique. Dolores et esse consequatur iure.', 'hidden', 'offer', 3, 9, 'exclusive', 5633, 6423, 2325, 1, 'USD', '2023-11-21 00:14:17', 9, 3, 'New Conorstad', 4682, 4909, 2, '12626019-fe56-3a2d-9093-9d8a8e182b75jpg', NULL, '2024-01-06 06:13:29', '2024-02-24 19:50:12'),
(111, 33, 'e0eff070-8620-3efb-b876-3f2a41149bb3', 'Et maiores veniam optio dolore officia. Repellendus dolorem sed omnis.', 'Veritatis rem blanditiis dicta nihil. Praesentium molestias doloribus et. Dicta ut vel ratione. Cupiditate aut eaque tenetur sunt. Est error delectus libero alias nisi. Ea sunt quis doloribus a ipsam magni mollitia. Ut aut qui minima est dolore soluta. Est veniam nulla eveniet veritatis animi. Sapiente omnis a quo vitae eveniet optio et. Similique eius voluptate est tenetur id quasi. Suscipit ipsum consequatur et omnis deserunt eos.', 'public', 'diffusion', 7, 6, 'multi-sale', 2935, 2129, 4382, 0, 'USD', '2023-05-30 20:24:51', 5, 3, 'East Yasmine', 3790, 4357, 3, '94083133-25da-333d-82fb-d5e65c20ec9ejpg', NULL, '2024-02-14 18:31:05', '2024-02-24 19:50:12');
INSERT INTO `publications` (`id`, `user_id`, `token`, `title`, `description`, `identity`, `type`, `section_id`, `category_id`, `sail_type`, `exact_price`, `min_price`, `max_price`, `check_price`, `currency`, `event_date`, `event_country`, `event_city`, `event_population`, `views`, `likes`, `state_id`, `preview_url`, `keywords`, `created_at`, `updated_at`) VALUES
(112, 36, 'df1336c5-86b7-33c8-bac2-f2b8dfba378b', 'Eveniet in quo magnam optio deserunt. Pariatur sint quas et et. Ut possimus iste id.', 'Architecto nostrum voluptatem dignissimos sed cumque. Quia debitis ipsum fugit minima velit porro quis et. Omnis odit impedit est nihil exercitationem autem et. Vel ullam vero adipisci eum assumenda dolor nam. Quae occaecati aut voluptates et quia at. Nemo nihil pariatur autem ut aliquid delectus. Repudiandae eum omnis quod et dolorem.', 'public', 'diffusion', 1, 9, 'multi-sale', 4233, 4133, 969, 0, 'USD', '2023-12-17 11:14:58', 4, 8, 'Hammesside', 4403, 4045, 2, 'f32ec583-1b29-3a49-a5d6-d5004d5954dfjpg', NULL, '2024-01-16 09:46:23', '2024-02-24 19:50:12'),
(113, 35, '3da73a41-aeea-3a7b-acbb-2cc2302353c2', 'Omnis blanditiis nihil aut autem voluptas. Error id quia beatae quaerat.', 'Aut quidem incidunt soluta est. Aut quia aperiam corrupti enim voluptas maiores. Quia dolore laudantium sit qui. Dolore recusandae dolores voluptatem at. Voluptas aut sed sit aliquid commodi facilis. Libero placeat dolores est et. Asperiores corporis voluptatem ea id maxime. Maxime id earum quibusdam optio. Dolores labore architecto rem. Laborum est qui odit eveniet enim. Qui aut totam quasi nihil. Voluptatibus illo sit nobis velit. Illum et nam vero enim quasi illum et.', 'public', 'demand', 6, 2, 'exclusive', 8214, 536, 243, 0, 'USD', '2023-04-01 19:52:28', 3, 10, 'East Alexandria', 1312, 2194, 3, '44fca932-eaf5-352b-ab8d-4d7bea1462a0jpg', NULL, '2024-01-03 02:41:13', '2024-02-24 19:50:12'),
(115, 39, '2e89e0c1-3b26-3e51-a964-ac42368fafa1', 'Ut consectetur ut cumque. Veritatis recusandae fugit rerum quo non beatae fugit.', 'Dolor molestias sed qui consequatur blanditiis voluptatem qui voluptatem. Doloribus molestiae et ipsum. Ut asperiores vitae repellat consectetur repellendus. Ipsa quibusdam et vel voluptatem consequuntur. Ipsa id et velit reprehenderit a fugiat ducimus. Distinctio explicabo quia numquam qui eum. Quas qui est omnis vero esse in qui. Molestiae consequatur tempora error et eius iste tempora. Quis occaecati sint ratione molestiae in aut.', 'hidden', 'demand', 5, 6, 'multi-sale', 1671, 1054, 7745, 0, 'USD', '2024-01-23 18:47:38', 8, 5, 'Bradleystad', 3856, 517, 1, '73b8d929-79b0-3bd8-b24e-2da56b4001fdjpg', NULL, '2024-02-02 17:48:09', '2024-02-24 19:50:12'),
(117, 34, '1414fb42-0a9b-314d-a9fb-89b0ed0a89f4', 'Voluptate qui rerum et et. Omnis quibusdam itaque aut rerum iste sequi sint autem.', 'Voluptate molestiae atque voluptates quibusdam nulla qui. Voluptatem qui sapiente nulla magni esse tempora. Et quo aut est velit excepturi. Alias nam illo necessitatibus sed totam atque. At qui modi excepturi in. Aperiam modi numquam provident quia mollitia architecto dolor ea. Non ducimus nulla dolores. Odit omnis tempore rerum perferendis iste. Excepturi laboriosam maxime consequatur natus ad. Quisquam odio minima ad tempora in placeat.', 'public', 'diffusion', 7, 3, 'multi-sale', 338, 222, 3186, 1, 'EUR', '2023-06-01 13:15:07', 9, 8, 'Port Keltonburgh', 3260, 1819, 3, '0bae2dbb-b931-3125-a614-7352088d6af6jpg', NULL, '2024-02-18 08:24:05', '2024-02-24 19:50:12'),
(118, 32, '9d280dcf-4d82-33ea-a205-2b1376b0a170', 'Libero quia aliquid voluptate expedita eius quis excepturi. Non dolores provident iure aliquam.', 'Sit nemo incidunt ut consectetur omnis est atque. Autem qui sed consequatur eum ut quis molestiae. Sint est quos voluptatem neque amet. Ut placeat asperiores doloremque aperiam. Libero eaque neque perferendis optio. Laboriosam excepturi repudiandae rem id ut explicabo et. Qui explicabo eos officiis possimus. Eum molestiae praesentium consequatur autem possimus dignissimos dignissimos. Similique inventore distinctio quia doloribus iste assumenda eum.', 'public', 'demand', 5, 3, 'exclusive', 7454, 2182, 5113, 0, 'EUR', '2023-10-02 20:36:16', 3, 4, 'North Myrafort', 2281, 509, 3, '6c494609-6117-32cc-8941-b3eb3eaff77djpg', NULL, '2024-01-26 00:16:29', '2024-02-24 19:50:12'),
(121, 31, '48d06a55-147d-374a-ba31-04d252e0ccbe', 'Rem fugiat sunt modi quos id. Officiis cupiditate quia et quo. Ut veniam molestias sequi enim eos.', 'Ea illo placeat aut quo. Qui sequi illum dolores optio magni eos. Molestias non numquam quia aut aliquid nostrum voluptates repudiandae. Eaque earum esse et eius optio voluptatum beatae non. Ad voluptas accusantium voluptatem est. Cum in ea sint. Laboriosam aut odit corrupti fuga ipsam velit et illum. Et incidunt maiores aut necessitatibus dolorem. Enim velit molestias commodi nihil deserunt aperiam explicabo.', 'hidden', 'diffusion', 2, 3, 'exclusive', 3167, 5938, 2501, 0, 'USD', '2023-05-28 02:01:12', 2, 5, 'New Brielleburgh', 2265, 560, 2, '3c30daf4-77ba-312e-a9d9-2fdd5045f739jpg', NULL, '2024-02-24 01:31:45', '2024-02-24 19:50:12'),
(122, 36, 'afce0484-ecb0-3563-a30e-7289a4f4ac8b', 'Odit dolorum magni doloribus qui. Id nihil dignissimos maxime repellendus iure.', 'Alias qui qui nostrum iure reiciendis odio enim. Recusandae consequatur accusamus expedita ut magnam voluptatem. Omnis quasi est sapiente velit id. Quaerat nemo aut nihil molestias ad eos. Quo dolorem itaque adipisci error dolor porro. Soluta veniam eos quo esse eos laudantium sapiente. Iusto sunt expedita repellat sed molestias vitae dolore aspernatur.', 'public', 'offer', 1, 6, 'multi-sale', 4187, 3377, 3760, 1, 'EUR', '2023-05-09 14:11:29', 9, 6, 'Holdentown', 1039, 3481, 3, 'ce8eba22-5a38-39b7-8122-64a863e4e685jpg', NULL, '2024-02-14 11:08:50', '2024-02-24 19:50:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `guard_name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'administrator', 'web', '2024-02-24 08:11:24', '2024-02-24 08:11:24'),
(2, 'developer', 'web', '2024-02-24 08:11:24', '2024-02-24 08:11:24'),
(3, 'analyst', 'web', '2024-02-24 08:11:24', '2024-02-24 08:11:24'),
(4, 'support', 'web', '2024-02-24 08:11:24', '2024-02-24 08:11:24'),
(5, 'trial', 'web', '2024-02-24 08:11:24', '2024-02-24 08:11:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(4, 3),
(5, 1),
(5, 3),
(6, 1),
(6, 3),
(7, 1),
(7, 3),
(8, 1),
(8, 3),
(9, 1),
(9, 3),
(10, 1),
(10, 3),
(10, 4),
(11, 1),
(11, 3),
(11, 4),
(12, 1),
(12, 3),
(12, 4),
(13, 1),
(13, 3),
(14, 1),
(14, 3),
(15, 1),
(15, 3),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(19, 2),
(20, 1),
(20, 2),
(21, 1),
(21, 2),
(22, 1),
(22, 2),
(23, 1),
(23, 2),
(24, 1),
(24, 2),
(25, 1),
(25, 2),
(26, 1),
(26, 2),
(27, 1),
(27, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `avatar` varchar(191) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_login_at` datetime DEFAULT NULL,
  `last_login_ip` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `user_name`, `email`, `profile_photo_path`, `email_verified_at`, `password`, `avatar`, `remember_token`, `created_at`, `updated_at`, `last_login_at`, `last_login_ip`) VALUES
(31, 'josefina42', 'jonathon.sauer@example.net', NULL, '2024-02-24 08:11:23', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'phnujL6cRV', '2024-02-24 08:11:23', '2024-02-24 08:11:23', NULL, NULL),
(32, 'isabell.thompson', 'imelda.rogahn@example.com', NULL, '2024-02-24 08:11:23', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'VvfFIuRuQv', '2024-02-24 08:11:23', '2024-02-24 08:11:23', NULL, NULL),
(33, 'lueilwitz.enos', 'mario21@example.org', NULL, '2024-02-24 08:11:23', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'w4DP4LaA8J', '2024-02-24 08:11:23', '2024-02-24 08:11:23', NULL, NULL),
(34, 'jacobson.jacynthe', 'qterry@example.com', NULL, '2024-02-24 08:11:23', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'hZS9vAMRdU', '2024-02-24 08:11:23', '2024-02-24 08:11:23', NULL, NULL),
(35, 'evelyn76', 'jordane.fadel@example.org', NULL, '2024-02-24 08:11:23', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'L1aO4t47yb', '2024-02-24 08:11:23', '2024-02-24 08:11:23', NULL, NULL),
(36, 'tony54', 'gwalter@example.net', NULL, '2024-02-24 08:11:23', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '2OaAgL45sX', '2024-02-24 08:11:23', '2024-02-24 08:11:23', NULL, NULL),
(37, 'stanley.grimes', 'randy72@example.org', NULL, '2024-02-24 08:11:23', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '20xIaYzzNP', '2024-02-24 08:11:23', '2024-02-24 08:11:23', NULL, NULL),
(38, 'ondricka.davion', 'obalistreri@example.net', NULL, '2024-02-24 08:11:23', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'Vei2MtF2gs', '2024-02-24 08:11:23', '2024-02-24 08:11:23', NULL, NULL),
(39, 'julianne45', 'mckenna.raynor@example.net', NULL, '2024-02-24 08:11:23', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'NiXYAdv5C3', '2024-02-24 08:11:23', '2024-02-24 08:11:23', NULL, NULL),
(40, 'olson.bradly', 'paucek.letitia@example.net', NULL, '2024-02-24 08:11:23', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'TdT9gB6XRw', '2024-02-24 08:11:23', '2024-02-24 08:11:23', NULL, NULL),
(42, 'pmrober', 'pmrober@gmail.com', NULL, '2024-02-24 17:27:40', '$2y$10$1yPi2JvakerIHRhiGKvy7ujtPiTzKGE5ZL8VagULGM8fJ8f737rke', NULL, NULL, '2024-02-24 17:27:20', '2024-02-26 03:37:12', '2024-02-26 04:37:12', '127.0.0.1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `likes_user_id_foreign` (`user_id`),
  ADD KEY `likes_publication_id_foreign` (`publication_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_user_name_unique` (`user_name`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publications`
--
ALTER TABLE `publications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_publication_id_foreign` FOREIGN KEY (`publication_id`) REFERENCES `publications` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

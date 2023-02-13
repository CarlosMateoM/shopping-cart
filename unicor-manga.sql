-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 13, 2023 at 05:53 PM
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
-- Database: `unicor-manga`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `AGREGAR_AL_CARRITO` (IN `ID_MANGA` INT, IN `ID_CARRITO` INT, IN `CANTIDAD` INT)   BEGIN

SET @ID = (SELECT id FROM item_carts WHERE cart_id = ID_CARRITO AND manga_id = ID_MANGA);
IF(@ID > 0) THEN
UPDATE item_carts SET quantity = CANTIDAD WHERE id = @ID;
ELSE
INSERT INTO item_carts(cart_id, manga_id, quantity) VALUES (ID_CARRITO, ID_MANGA, CANTIDAD);
END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `DISMINUIR_EXISTENCIA_MANGA` (IN `ID_MANGA` INT, IN `QUANTITY` INT)   BEGIN
SET @EXISTENCIA_ACTUAL = (SELECT m.stock FROM mangas as m WHERE m.id = ID_MANGA);

SET @NUEVA_EXISTENCIA = (@EXISTENCIA_ACTUAL - QUANTITY);

UPDATE mangas SET stock = @NUEVA_EXISTENCIA WHERE id = ID_MANGA;


END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `DISMINUIR_EXISTENCIA_MANGAS` (IN `ID_CARRITO` INT)   BEGIN

DECLARE v CURSOR FOR SELECT * FROM item_carts AS ic WHERE ic.cart_id = ID_CARRITO;

FOR i IN v
DO
	CALL DISMINUIR_EXISTENCIA_MANGA(i.manga_id, i.quantity);
END FOR;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `PASAR_DE_CARRITO_A_FACTURA` (IN `ID_FACTURA` INT, IN `ID_CARRITO` INT)   BEGIN

INSERT INTO item_invoices(invoice_id, manga_id, quantity)
SELECT ID_FACTURA, ic.manga_id, ic.quantity
FROM item_carts as ic
WHERE ic.cart_id = ID_CARRITO;

CALL DISMINUIR_EXISTENCIA_MANGAS(ID_CARRITO);

DELETE FROM item_carts
WHERE item_carts.cart_id = ID_CARRITO;

END$$

--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `SUBTOTAL_CARRITO` (`ID_CARRITO` INT) RETURNS DOUBLE  BEGIN
RETURN TRUNCATE((SELECT SUM((i.quantity * m.price))
FROM item_carts AS i
INNER JOIN mangas as m 
on i.manga_id = m.id
WHERE i.cart_id = ID_CARRITO), 2);
END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `TOTAL_FACTURA` (`ID_FACTURA` INT) RETURNS DOUBLE  BEGIN
RETURN TRUNCATE((SELECT SUM((i.quantity * m.price))
FROM item_invoices AS i 
INNER JOIN mangas AS m
ON i.manga_id = m.id 
WHERE i.id = ID_FACTURA), 2);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `person_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `person_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-01-23 20:17:28', '2023-01-23 20:17:28'),
(2, 2, '2023-01-23 20:17:28', '2023-01-23 20:17:28'),
(3, 3, '2023-01-23 20:17:28', '2023-01-23 20:17:28'),
(4, 4, '2023-01-23 20:17:28', '2023-01-23 20:17:28'),
(5, 5, '2023-01-23 20:17:28', '2023-01-23 20:17:28'),
(6, 6, '2023-01-23 20:17:28', '2023-01-23 20:17:28'),
(7, 7, '2023-01-23 20:17:29', '2023-01-23 20:17:29'),
(8, 8, '2023-01-23 20:17:29', '2023-01-23 20:17:29'),
(9, 9, '2023-01-23 20:17:29', '2023-01-23 20:17:29'),
(10, 10, '2023-01-23 20:17:29', '2023-01-23 20:17:29'),
(11, 11, '2023-01-23 20:17:29', '2023-01-23 20:17:29'),
(12, 12, '2023-01-23 20:17:29', '2023-01-23 20:17:29'),
(13, 13, '2023-01-23 20:17:29', '2023-01-23 20:17:29'),
(14, 14, '2023-01-23 20:17:29', '2023-01-23 20:17:29'),
(15, 15, '2023-01-23 20:17:29', '2023-01-23 20:17:29'),
(16, 16, '2023-01-23 20:17:29', '2023-01-23 20:17:29'),
(17, 17, '2023-01-23 20:17:29', '2023-01-23 20:17:29'),
(18, 18, '2023-01-23 20:17:29', '2023-01-23 20:17:29'),
(19, 19, '2023-01-23 20:17:29', '2023-01-23 20:17:29'),
(20, 20, '2023-01-23 20:17:29', '2023-01-23 20:17:29'),
(21, 21, '2023-01-23 20:17:29', '2023-01-23 20:17:29'),
(22, 22, '2023-01-23 20:17:29', '2023-01-23 20:17:29'),
(23, 23, '2023-01-23 20:17:29', '2023-01-23 20:17:29'),
(24, 24, '2023-01-23 20:17:29', '2023-01-23 20:17:29'),
(25, 25, '2023-01-23 20:17:30', '2023-01-23 20:17:30'),
(26, 26, '2023-01-23 20:17:30', '2023-01-23 20:17:30'),
(27, 27, '2023-01-23 20:17:30', '2023-01-23 20:17:30'),
(28, 28, '2023-01-23 20:17:30', '2023-01-23 20:17:30'),
(29, 29, '2023-01-23 20:17:30', '2023-01-23 20:17:30'),
(30, 30, '2023-01-23 20:17:30', '2023-01-23 20:17:30'),
(31, 31, '2023-01-23 20:17:30', '2023-01-23 20:17:30'),
(32, 32, '2023-01-23 20:17:30', '2023-01-23 20:17:30'),
(33, 33, '2023-01-23 20:17:30', '2023-01-23 20:17:30'),
(34, 34, '2023-01-23 20:17:30', '2023-01-23 20:17:30');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-01-23 20:17:41', '2023-01-23 20:17:41'),
(2, 2, '2023-01-23 20:17:41', '2023-01-23 20:17:41'),
(3, 3, '2023-01-23 20:17:41', '2023-01-23 20:17:41'),
(4, 4, '2023-01-25 23:00:27', '2023-01-25 23:00:27'),
(5, 5, '2023-01-25 23:03:19', '2023-01-25 23:03:19'),
(6, 6, '2023-01-26 02:09:00', '2023-01-26 02:09:00');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Ciencia Ficción', '2023-01-23 20:17:34', '2023-01-23 20:17:34'),
(2, 'Deporte', '2023-01-23 20:17:35', '2023-01-23 20:17:35'),
(3, 'Distópico', '2023-01-23 20:17:35', '2023-01-23 20:17:35'),
(4, 'Fantasía', '2023-01-23 20:17:35', '2023-01-23 20:17:35'),
(5, 'Historia', '2023-01-23 20:17:35', '2023-01-23 20:17:35'),
(6, 'Horror', '2023-01-23 20:17:35', '2023-01-23 20:17:35'),
(7, 'Josei', '2023-01-23 20:17:35', '2023-01-23 20:17:35'),
(8, 'LGBT', '2023-01-23 20:17:35', '2023-01-23 20:17:35'),
(9, 'Acción y Aventura', '2023-01-23 20:17:35', '2023-01-23 20:17:35'),
(10, 'Romance', '2023-01-23 20:17:35', '2023-01-23 20:17:35'),
(11, 'Medios', '2023-01-23 20:17:35', '2023-01-23 20:17:35'),
(12, 'Misterio', '2023-01-23 20:17:35', '2023-01-23 20:17:35'),
(13, 'No Ficción', '2023-01-23 20:17:35', '2023-01-23 20:17:35'),
(14, 'Religión Y Espiritualidad', '2023-01-23 20:17:35', '2023-01-23 20:17:35'),
(15, 'Seinen', '2023-01-23 20:17:35', '2023-01-23 20:17:35'),
(16, 'Shojo', '2023-01-23 20:17:35', '2023-01-23 20:17:35'),
(17, 'Shonen', '2023-01-23 20:17:36', '2023-01-23 20:17:36'),
(18, 'Yaoi', '2023-01-23 20:17:36', '2023-01-23 20:17:36'),
(19, 'Yuri', '2023-01-23 20:17:36', '2023-01-23 20:17:36');

-- --------------------------------------------------------

--
-- Table structure for table `category_manga`
--

CREATE TABLE `category_manga` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `manga_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_manga`
--

INSERT INTO `category_manga` (`id`, `manga_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2023-01-23 20:17:36', '2023-01-23 20:17:36'),
(2, 2, 1, '2023-01-23 20:17:36', '2023-01-23 20:17:36'),
(3, 3, 1, '2023-01-23 20:17:36', '2023-01-23 20:17:36'),
(4, 4, 1, '2023-01-23 20:17:36', '2023-01-23 20:17:36'),
(5, 5, 2, '2023-01-23 20:17:36', '2023-01-23 20:17:36'),
(6, 6, 2, '2023-01-23 20:17:36', '2023-01-23 20:17:36'),
(7, 7, 2, '2023-01-23 20:17:36', '2023-01-23 20:17:36'),
(8, 8, 2, '2023-01-23 20:17:36', '2023-01-23 20:17:36'),
(9, 9, 3, '2023-01-23 20:17:36', '2023-01-23 20:17:36'),
(10, 10, 3, '2023-01-23 20:17:36', '2023-01-23 20:17:36'),
(11, 11, 3, '2023-01-23 20:17:36', '2023-01-23 20:17:36'),
(12, 12, 3, '2023-01-23 20:17:36', '2023-01-23 20:17:36'),
(13, 13, 5, '2023-01-23 20:17:36', '2023-01-23 20:17:36'),
(14, 14, 5, '2023-01-23 20:17:36', '2023-01-23 20:17:36'),
(15, 15, 5, '2023-01-23 20:17:36', '2023-01-23 20:17:36'),
(16, 16, 5, '2023-01-23 20:17:36', '2023-01-23 20:17:36'),
(17, 17, 6, '2023-01-23 20:17:36', '2023-01-23 20:17:36'),
(18, 18, 6, '2023-01-23 20:17:37', '2023-01-23 20:17:37'),
(19, 19, 6, '2023-01-23 20:17:37', '2023-01-23 20:17:37'),
(20, 20, 6, '2023-01-23 20:17:37', '2023-01-23 20:17:37'),
(21, 21, 7, '2023-01-23 20:17:37', '2023-01-23 20:17:37'),
(22, 22, 7, '2023-01-23 20:17:37', '2023-01-23 20:17:37'),
(23, 23, 7, '2023-01-23 20:17:37', '2023-01-23 20:17:37'),
(24, 24, 7, '2023-01-23 20:17:37', '2023-01-23 20:17:37'),
(25, 25, 8, '2023-01-23 20:17:37', '2023-01-23 20:17:37'),
(26, 26, 8, '2023-01-23 20:17:37', '2023-01-23 20:17:37'),
(27, 27, 8, '2023-01-23 20:17:37', '2023-01-23 20:17:37'),
(28, 28, 9, '2023-01-23 20:17:38', '2023-01-23 20:17:38'),
(29, 29, 9, '2023-01-23 20:17:38', '2023-01-23 20:17:38'),
(30, 30, 9, '2023-01-23 20:17:38', '2023-01-23 20:17:38'),
(31, 31, 9, '2023-01-23 20:17:38', '2023-01-23 20:17:38'),
(32, 32, 10, '2023-01-23 20:17:38', '2023-01-23 20:17:38'),
(33, 33, 10, '2023-01-23 20:17:38', '2023-01-23 20:17:38'),
(34, 34, 10, '2023-01-23 20:17:38', '2023-01-23 20:17:38'),
(35, 35, 10, '2023-01-23 20:17:38', '2023-01-23 20:17:38'),
(36, 36, 11, '2023-01-23 20:17:38', '2023-01-23 20:17:38'),
(37, 37, 11, '2023-01-23 20:17:38', '2023-01-23 20:17:38'),
(38, 38, 11, '2023-01-23 20:17:38', '2023-01-23 20:17:38'),
(39, 39, 11, '2023-01-23 20:17:38', '2023-01-23 20:17:38'),
(40, 40, 11, '2023-01-23 20:17:38', '2023-01-23 20:17:38'),
(41, 41, 12, '2023-01-23 20:17:38', '2023-01-23 20:17:38'),
(42, 42, 12, '2023-01-23 20:17:38', '2023-01-23 20:17:38'),
(43, 43, 12, '2023-01-23 20:17:38', '2023-01-23 20:17:38'),
(44, 44, 12, '2023-01-23 20:17:39', '2023-01-23 20:17:39'),
(45, 45, 14, '2023-01-23 20:17:39', '2023-01-23 20:17:39'),
(46, 46, 14, '2023-01-23 20:17:39', '2023-01-23 20:17:39'),
(47, 47, 14, '2023-01-23 20:17:39', '2023-01-23 20:17:39'),
(48, 48, 15, '2023-01-23 20:17:39', '2023-01-23 20:17:39'),
(49, 49, 15, '2023-01-23 20:17:39', '2023-01-23 20:17:39'),
(50, 50, 15, '2023-01-23 20:17:39', '2023-01-23 20:17:39'),
(51, 51, 15, '2023-01-23 20:17:39', '2023-01-23 20:17:39'),
(52, 52, 16, '2023-01-23 20:17:39', '2023-01-23 20:17:39'),
(53, 53, 16, '2023-01-23 20:17:39', '2023-01-23 20:17:39'),
(54, 54, 16, '2023-01-23 20:17:39', '2023-01-23 20:17:39'),
(55, 55, 16, '2023-01-23 20:17:39', '2023-01-23 20:17:39'),
(56, 56, 17, '2023-01-23 20:17:39', '2023-01-23 20:17:39'),
(57, 57, 17, '2023-01-23 20:17:39', '2023-01-23 20:17:39'),
(58, 58, 17, '2023-01-23 20:17:39', '2023-01-23 20:17:39'),
(59, 59, 17, '2023-01-23 20:17:40', '2023-01-23 20:17:40'),
(60, 60, 18, '2023-01-23 20:17:40', '2023-01-23 20:17:40'),
(61, 61, 18, '2023-01-23 20:17:40', '2023-01-23 20:17:40'),
(62, 62, 18, '2023-01-23 20:17:40', '2023-01-23 20:17:40'),
(63, 63, 18, '2023-01-23 20:17:40', '2023-01-23 20:17:40'),
(64, 64, 19, '2023-01-23 20:17:40', '2023-01-23 20:17:40'),
(65, 65, 19, '2023-01-23 20:17:40', '2023-01-23 20:17:40'),
(66, 66, 19, '2023-01-23 20:17:40', '2023-01-23 20:17:40'),
(67, 67, 19, '2023-01-23 20:17:40', '2023-01-23 20:17:40');

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
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-01-23 20:17:40', '2023-01-23 20:17:40'),
(2, 2, '2023-01-23 20:17:40', '2023-01-23 20:17:40'),
(3, 3, '2023-01-23 20:17:40', '2023-01-23 20:17:40'),
(4, 1, '2023-01-23 20:51:25', '2023-01-23 20:51:25'),
(5, 1, '2023-01-23 20:54:58', '2023-01-23 20:54:58'),
(6, 1, '2023-01-23 20:56:51', '2023-01-23 20:56:51'),
(7, 2, '2023-01-24 20:41:41', '2023-01-24 20:41:41'),
(8, 3, '2023-01-24 20:42:40', '2023-01-24 20:42:40'),
(9, 4, '2023-01-25 23:01:07', '2023-01-25 23:01:07'),
(10, 4, '2023-01-25 23:02:16', '2023-01-25 23:02:16'),
(11, 5, '2023-01-25 23:03:54', '2023-01-25 23:03:54'),
(12, 5, '2023-01-25 23:12:38', '2023-01-25 23:12:38'),
(13, 2, '2023-01-25 23:14:39', '2023-01-25 23:14:39'),
(14, 2, '2023-01-25 23:15:35', '2023-01-25 23:15:35'),
(15, 2, '2023-01-25 23:16:24', '2023-01-25 23:16:24'),
(16, 3, '2023-01-25 23:17:26', '2023-01-25 23:17:26'),
(17, 3, '2023-01-25 23:21:27', '2023-01-25 23:21:27'),
(18, 3, '2023-01-25 23:29:07', '2023-01-25 23:29:07'),
(19, 6, '2023-01-26 02:10:09', '2023-01-26 02:10:09'),
(20, 1, '2023-02-07 02:44:57', '2023-02-07 02:44:57');

-- --------------------------------------------------------

--
-- Table structure for table `item_carts`
--

CREATE TABLE `item_carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cart_id` bigint(20) UNSIGNED NOT NULL,
  `manga_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_carts`
--

INSERT INTO `item_carts` (`id`, `cart_id`, `manga_id`, `quantity`, `created_at`, `updated_at`) VALUES
(23, 2, 2, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `item_invoices`
--

CREATE TABLE `item_invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_id` bigint(20) UNSIGNED NOT NULL,
  `manga_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_invoices`
--

INSERT INTO `item_invoices` (`id`, `invoice_id`, `manga_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2023-01-23 20:17:40', '2023-01-23 20:17:40'),
(2, 1, 2, 1, '2023-01-23 20:17:40', '2023-01-23 20:17:40'),
(3, 1, 3, 1, '2023-01-23 20:17:40', '2023-01-23 20:17:40'),
(4, 1, 4, 1, '2023-01-23 20:17:40', '2023-01-23 20:17:40'),
(5, 2, 5, 1, '2023-01-23 20:17:40', '2023-01-23 20:17:40'),
(6, 2, 6, 1, '2023-01-23 20:17:41', '2023-01-23 20:17:41'),
(7, 2, 7, 1, '2023-01-23 20:17:41', '2023-01-23 20:17:41'),
(8, 3, 8, 1, '2023-01-23 20:17:41', '2023-01-23 20:17:41'),
(9, 3, 3, 1, '2023-01-23 20:17:41', '2023-01-23 20:17:41'),
(10, 3, 10, 1, '2023-01-23 20:17:41', '2023-01-23 20:17:41'),
(11, 1, 5, 1, NULL, NULL),
(12, 2, 5, 1, NULL, NULL),
(13, 3, 5, 1, NULL, NULL),
(14, 4, 5, 1, NULL, NULL),
(18, 1, 6, 1, NULL, NULL),
(19, 2, 6, 1, NULL, NULL),
(20, 3, 6, 1, NULL, NULL),
(21, 4, 6, 1, NULL, NULL),
(22, 5, 7, 3, NULL, NULL),
(23, 6, 7, 2, NULL, NULL),
(24, 7, 7, 1, NULL, NULL),
(25, 4, 8, 1, NULL, NULL),
(26, 3, 9, 1, NULL, NULL),
(27, 9, 10, 2, NULL, NULL),
(28, 7, 11, 1, NULL, NULL),
(29, 1, 12, 1, NULL, NULL),
(31, 14, 14, 1, NULL, NULL),
(32, 15, 15, 1, NULL, NULL),
(33, 5, 16, 1, NULL, NULL),
(34, 7, 17, 1, NULL, NULL),
(35, 18, 45, 1, NULL, NULL),
(36, 19, 4, 2, NULL, NULL),
(37, 19, 3, 2, NULL, NULL),
(38, 19, 2, 1, NULL, NULL),
(39, 20, 7, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mangas`
--

CREATE TABLE `mangas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `stock` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `publication_date` date NOT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mangas`
--

INSERT INTO `mangas` (`id`, `title`, `price`, `stock`, `image_path`, `publication_date`, `author_id`, `created_at`, `updated_at`) VALUES
(1, 'Attack on Titan Vol. 34', 30174, 8, '51cTF-CFKcL._SY346_.jpg', '2021-10-19', 1, '2023-01-23 20:17:30', '2023-01-23 20:17:30'),
(2, 'Attack on Titan Vol. 1', 34357, 8, '51QWSFImgvL._SY346_.jpg', '2013-07-16', 1, '2023-01-23 20:17:30', '2023-01-23 20:17:30'),
(3, 'Remina', 56353, 6, '51hdD1lnCL.jpg', '2020-12-15', 2, '2023-01-23 20:17:30', '2023-01-23 20:17:30'),
(4, 'Smashed', 56353, 6, '51P0jM5TomL._SY346_.jpg', '2019-04-16', 2, '2023-01-23 20:17:30', '2023-01-23 20:17:30'),
(5, 'Real, Vol. 1', 89353, 6, '51mBtPl5ZrL._SY346_.jpg', '2021-04-27', 3, '2023-01-23 20:17:30', '2023-01-23 20:17:30'),
(6, 'Vagabond, Vol. 1', 34253, 8, '41Dn6uOzXsL._SX334_BO1,204,203,200_.jpg', '2008-09-16', 3, '2023-01-23 20:17:31', '2023-01-23 20:17:31'),
(7, 'Haiku!!, Vol. 3', 30503, 4, '51A8IFXRSJL.jpg', '2016-09-06', 4, '2023-01-23 20:17:31', '2023-01-23 20:17:31'),
(8, 'Haiku!!, Vol. 45', 30503, 10, '51norhRDWYL._SY346_.jpg', '2021-07-03', 4, '2023-01-23 20:17:31', '2023-01-23 20:17:31'),
(9, 'Fire Force Vol. 28', 37553, 8, '51CePey2QqL.jpg', '2022-08-16', 5, '2023-01-23 20:17:31', '2023-01-23 20:17:31'),
(10, 'Fire Force, Vol. 31', 32853, 10, '51MkyeOXyML.jpg', '2021-07-03', 5, '2023-01-23 20:17:31', '2023-01-23 20:17:31'),
(11, 'Appleseed Book 1: The Promethean Challenge', 23453, 10, '61wIzH6KSlL.jpg', '2014-09-10', 6, '2023-01-23 20:17:31', '2023-01-23 20:17:31'),
(12, 'The Ghost in the Shell Vol. 1', 56353, 10, '61Lfm1YWY5L.jpg', '2016-12-14', 6, '2023-01-23 20:17:31', '2023-01-23 20:17:31'),
(13, 'Viland Saga Vol. 13', 46953, 10, '51uZQFXMFaL.jpg', '2022-12-20', 7, '2023-01-23 20:17:31', '2023-01-23 20:17:31'),
(14, 'Viland Saga Vol. 5', 65753, 9, '51f6sYBmkoL.jpg', '2014-10-07', 7, '2023-01-23 20:17:31', '2023-01-23 20:17:31'),
(15, 'The Apothecary Diaries 06', 37553, 9, '51dlUl4PLgL.jpg', '2022-09-13', 8, '2023-01-23 20:17:31', '2023-01-23 20:17:31'),
(16, 'the Apothecary Diaries: Valumen 5', 37553, 10, '51LkBDLTUJL.jpg', '2014-10-07', 8, '2023-01-23 20:17:31', '2023-01-23 20:17:31'),
(17, 'Bersek Valumen 6', 23453, 10, '51eNfK5M36L.jpg', '2017-07-18', 9, '2023-01-23 20:17:31', '2023-01-23 20:17:31'),
(18, 'Bersek Valumen 1', 23453, 10, '5197DEKOybL.jpg', '2017-07-18', 9, '2023-01-23 20:17:31', '2023-01-23 20:17:31'),
(19, 'The Las Kids on Earth', 37553, 10, '51IC0SfDvQL.jpg', '2015-10-13', 10, '2023-01-23 20:17:31', '2023-01-23 20:17:31'),
(20, 'The Last Kids on Earth and the Zombie Parade', 37553, 10, '51usMTVxh3L.jpg', '2014-10-07', 10, '2023-01-23 20:17:31', '2023-01-23 20:17:31'),
(21, 'Happy Marriage?!, Vol. 3', 30585, 10, '5157tW6kgL.jpg', '2013-12-03', 11, '2023-01-23 20:17:31', '2023-01-23 20:17:31'),
(22, 'Happy Marriage?!, Vol. 7', 30585, 10, '512kakc16nL.jpg', '2014-08-05', 11, '2023-01-23 20:17:32', '2023-01-23 20:17:32'),
(23, 'Everyone\'s Getting Married, Vol 7', 30585, 10, '51n2eGou2DL.jpg', '2017-12-05', 12, '2023-01-23 20:17:32', '2023-01-23 20:17:32'),
(24, 'Everyone\'s Getting Married, Vol 2', 30585, 10, '51d9InsnccL.jpg', '2016-09-06', 12, '2023-01-23 20:17:32', '2023-01-23 20:17:32'),
(25, 'Asumi-chan is Intereseted in Lesbian Brothels! Vol. 1', 42367, 10, '51oeq75CmWL.jpg', '2022-11-15', 13, '2023-01-23 20:17:32', '2023-01-23 20:17:32'),
(26, 'Sasaki and Miyano Vol. 1', 32942, 10, '51fBWV96avL.jpg', '2021-02-02', 14, '2023-01-23 20:17:32', '2023-01-23 20:17:32'),
(27, 'Sasaki and Miyano Vol. 4', 32942, 10, '41ey8v8lNEL.jpg', '2021-11-09', 14, '2023-01-23 20:17:32', '2023-01-23 20:17:32'),
(28, 'Jujutsu Kaisen, Vol. 18', 30585, 10, '51B-QlzZmfL.jpg', '2022-12-20', 15, '2023-01-23 20:17:32', '2023-01-23 20:17:32'),
(29, 'Jujutsu Kaisen, Vol. 14: The Shibuya Incident--Right And Wrong', 30585, 10, '51KiuPSG8ML.jpg', '2022-02-01', 15, '2023-01-23 20:17:32', '2023-01-23 20:17:32'),
(30, 'Demon Slayer: Kimetsu no Yaiba, Vol 16: Undying', 30585, 10, '61pLtbHSEfL.jpg', '2020-09-01', 16, '2023-01-23 20:17:32', '2023-01-23 20:17:32'),
(31, 'Demon Slayer: Kimetsu no Yaiba, Vol 17: Successors', 30585, 10, '51csbemoi9L.jpg', '2020-10-06', 16, '2023-01-23 20:17:32', '2023-01-23 20:17:32'),
(32, 'Given, Vol. 7', 30585, 10, '51l818ksn7L.jpg', '2023-01-10', 17, '2023-01-23 20:17:32', '2023-01-23 20:17:32'),
(33, 'Given 03', 30585, 10, '51LdGE9LL._SX343_BO1,204,203,200_.jpg', '2018-09-06', 17, '2023-01-23 20:17:32', '2023-01-23 20:17:32'),
(34, 'You Like Me, Not My Daughter?! Vol. 1', 59333, 10, '819U2cIjSTL.jpg', '2022-11-22', 18, '2023-01-23 20:17:32', '2023-01-23 20:17:32'),
(35, 'You Like Me, don\'t you?: So wanna go out with me?', 47080, 10, '51jktwMiY6L.jpg', '2022-06-13', 18, '2023-01-23 20:17:32', '2023-01-23 20:17:32'),
(36, 'Naruto, Vol 1: Uzumaki Naruto', 30585, 10, '61blYDiS4L.jpg', '2010-11-02', 19, '2023-01-23 20:17:32', '2023-01-23 20:17:32'),
(37, 'Naruto, Vol 2: The Worst Client', 30585, 10, '61IH90LyydL.jpg', '2010-11-02', 19, '2023-01-23 20:17:32', '2023-01-23 20:17:32'),
(38, 'Naruto, Vol 3: Dreams', 30585, 10, '51GuuAYeH1L.jpg', '2010-11-16', 19, '2023-01-23 20:17:33', '2023-01-23 20:17:33'),
(39, 'One Piece, Vol. 101: The Stars Take The Stage', 30585, 10, '61hTfZGWp7L.jpg', '2022-12-06', 20, '2023-01-23 20:17:33', '2023-01-23 20:17:33'),
(40, 'One Piece, Vol2: Buggy The Clown', 30585, 10, '61mPXYW0vdL.jpg', '2010-11-02', 20, '2023-01-23 20:17:33', '2023-01-23 20:17:33'),
(41, 'Spy x Family, Vol. 8', 30585, 10, '41XsoqiayL.jpg', '2022-09-20', 21, '2023-01-23 20:17:33', '2023-01-23 20:17:33'),
(42, 'Spy x Family, Vol. 4', 30585, 10, '41KlMbHa6RL.jpg', '2021-03-02', 21, '2023-01-23 20:17:33', '2023-01-23 20:17:33'),
(43, 'Dandadan, Vol. 1', 30585, 10, '510yool0ZuL.jpg', '2022-10-11', 22, '2023-01-23 20:17:33', '2023-01-23 20:17:33'),
(44, 'Dandadan, Vol. 2', 30585, 10, '519-mBNIgXL.jpg', '2023-01-10', 22, '2023-01-23 20:17:33', '2023-01-23 20:17:33'),
(45, 'Blank Comic Book for Kids with Variety of Templates: Draw Your Own Comics', 61219, 9, '71kURPQsv7S.jpg', '2021-05-13', 23, '2023-01-23 20:17:33', '2023-01-23 20:17:33'),
(46, 'Blank Comic Book for Kids with Variety of Templates: 100 Different Templates in 100 Page Blank Comic Notebook', 56506, 10, '71TDBI0Q7fL.jpg', '2022-01-25', 23, '2023-01-23 20:17:33', '2023-01-23 20:17:33'),
(47, 'The Manga Bible: From Genesis to Revelation', 70644, 10, '815UXzH3VL.jpg', '2008-01-15', 24, '2023-01-23 20:17:33', '2023-01-23 20:17:33'),
(48, 'Chainsaw Man, Vol. 7: In a Dream', 30585, 10, '51NyBfrkm8L.jpg', '2020-10-05', 25, '2023-01-23 20:17:33', '2023-01-23 20:17:33'),
(49, 'Chainsaw Man, Vol. 9: Bath', 30585, 10, '51-NwxmgrL.jpg', '2002-10-23', 25, '2023-01-23 20:17:33', '2023-01-23 20:17:33'),
(50, 'A Side Character\'s Love Story Vol. 13', 25354, 10, '514R-5hF5aL.jpg', '2023-01-23', 26, '2023-01-23 20:17:33', '2023-01-23 20:17:33'),
(51, 'A Side Character\'s Love Story Vol.11', 25354, 10, '41NfETXWTL.jpg', '2022-07-21', 26, '2023-01-23 20:17:34', '2023-01-23 20:17:34'),
(52, 'Wotaki: O Amor É Dificil Para Otakus Vol. 6', 194072, 10, '51L22Ric7tL._SX339_BO1,204,203,200_.jpg', '2020-01-01', 27, '2023-01-23 20:17:34', '2023-01-23 20:17:34'),
(53, 'Wotakoi: Love is Hard For Otaku Vol. 6', 46939, 10, '51TbJFtoKEL.jpg', '2022-04-24', 27, '2023-01-23 20:17:34', '2023-01-23 20:17:34'),
(54, 'My Dress-UP Darling 10', 47080, 10, '41qTnqir7OL.jpg', '2023-09-19', 28, '2023-01-23 20:17:34', '2023-01-23 20:17:34'),
(55, 'My Dress-Up Darling 05', 47080, 10, '51OecwnfAGL.jpg', '2022-05-10', 28, '2023-01-23 20:17:34', '2023-01-23 20:17:34'),
(56, 'Dragon Ball Super, Vol. 10: Moro\'s Wish', 30585, 10, '51clQcGgrrL.jpg', '2020-09-01', 29, '2023-01-23 20:17:34', '2023-01-23 20:17:34'),
(57, 'Dragon Ball Super, Vol. 17: God of Destructin Power', 30585, 10, '61wagkhNDJL.jpg', '2022-12-06', 29, '2023-01-23 20:17:34', '2023-01-23 20:17:34'),
(58, 'JoJo\'s Bizarre Adventure', 47080, 10, '51SLVzly2OL.jpg', '2014-09-02', 30, '2023-01-23 20:17:34', '2023-01-23 20:17:34'),
(59, 'Thus Spoke Rohan Kishibe, vol. 2', 51793, 10, '51R6wajz1wL.jpg', '2022-12-27', 30, '2023-01-23 20:17:34', '2023-01-23 20:17:34'),
(60, 'The Titan\'s Bride Vol. 2', 63575, 10, '51MQeBWTp8L._SX354_BO1,204,203,200_.jpg', '2023-01-03', 31, '2023-01-23 20:17:34', '2023-01-23 20:17:34'),
(61, 'Glanz BL', 118809, 10, '51LQTYNCNfL._SX350_BO1,204,203,200_.jpg', '2023-01-12', 31, '2023-01-23 20:17:34', '2023-01-23 20:17:34'),
(62, 'Dick Figth Island, Vol. 1', 30585, 10, '514PoU0VhFS.jpg', '2021-05-11', 32, '2023-01-23 20:17:34', '2023-01-23 20:17:34'),
(63, 'Bi no Kyoujin X Side', 100240, 10, '51ogloe8q7L._SX354_BO1,204,203,200_.jpg', '2018-12-06', 32, '2023-01-23 20:17:34', '2023-01-23 20:17:34'),
(64, 'Citrus Vol. 4', 47080, 10, '51NMT95hA0L.jpg', '2022-11-10', 33, '2023-01-23 20:17:34', '2023-01-23 20:17:34'),
(65, 'Citrus Vol. 5', 47080, 10, '514gBfpaNUL.jpg', '2016-09-06', 33, '2023-01-23 20:17:34', '2023-01-23 20:17:34'),
(66, 'Catch These Hands! Vol. 2', 32942, 10, '51megEnnGL.jpg', '2022-06-28', 34, '2023-01-23 20:17:34', '2023-01-23 20:17:34'),
(67, 'Catch These Hands! Vol. 3', 32942, 10, '517YnOb68L.jpg', '2022-11-22', 34, '2023-01-23 20:17:34', '2023-01-23 20:17:34');

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
(1, '2014_01_13_171257_create_people_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_01_13_181702_create_authors_table', 1),
(7, '2023_01_13_182613_create_mangas_table', 1),
(8, '2023_01_13_184727_create_categories_table', 1),
(9, '2023_01_13_185215_create_manga_categories_table', 1),
(10, '2023_01_13_212624_create_invoices_table', 1),
(11, '2023_01_13_213543_create_item_invoices_table', 1),
(12, '2023_01_13_220001_create_carts_table', 1),
(13, '2023_01_13_221145_create_item_carts_table', 1);

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
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `frist_surname` varchar(255) NOT NULL,
  `second_surname` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `first_name`, `middle_name`, `frist_surname`, `second_surname`, `created_at`, `updated_at`) VALUES
(1, 'Hajime', '', 'Isayama', '', '2023-01-23 20:17:26', '2023-01-23 20:17:26'),
(2, 'Junji', '', 'Ito', '', '2023-01-23 20:17:26', '2023-01-23 20:17:26'),
(3, 'Takehiko', '', 'Inoue', '', '2023-01-23 20:17:26', '2023-01-23 20:17:26'),
(4, 'Haruichi', '', 'Furudate', '', '2023-01-23 20:17:26', '2023-01-23 20:17:26'),
(5, 'Atsushi', '', 'Ohkubo', '', '2023-01-23 20:17:26', '2023-01-23 20:17:26'),
(6, 'Masamune', '', 'Shirow', '', '2023-01-23 20:17:26', '2023-01-23 20:17:26'),
(7, 'Makoto', '', 'Yurimura', '', '2023-01-23 20:17:26', '2023-01-23 20:17:26'),
(8, 'Natsu', '', 'Hyuuga', '', '2023-01-23 20:17:26', '2023-01-23 20:17:26'),
(9, 'Kentaro', '', 'Miura', '', '2023-01-23 20:17:26', '2023-01-23 20:17:26'),
(10, 'Max', '', 'Braillier', '', '2023-01-23 20:17:26', '2023-01-23 20:17:26'),
(11, 'Maki', '', 'Enjoji', '', '2023-01-23 20:17:26', '2023-01-23 20:17:26'),
(12, 'Izumi', '', 'Miyazono', '', '2023-01-23 20:17:26', '2023-01-23 20:17:26'),
(13, 'Kuro', '', 'Itsuki', '', '2023-01-23 20:17:26', '2023-01-23 20:17:26'),
(14, 'Shou', '', 'Harusono', '', '2023-01-23 20:17:26', '2023-01-23 20:17:26'),
(15, 'Gege', '', 'Akutami', '', '2023-01-23 20:17:26', '2023-01-23 20:17:26'),
(16, 'Koyoharu', '', 'Gotouge', '', '2023-01-23 20:17:26', '2023-01-23 20:17:26'),
(17, 'Natsuki', '', 'Kizu', '', '2023-01-23 20:17:26', '2023-01-23 20:17:26'),
(18, 'Kota', '', 'Nozomi', '', '2023-01-23 20:17:27', '2023-01-23 20:17:27'),
(19, 'Masashi', '', 'Kishimoto', '', '2023-01-23 20:17:27', '2023-01-23 20:17:27'),
(20, 'Eiichiro', '', 'Oda', '', '2023-01-23 20:17:27', '2023-01-23 20:17:27'),
(21, 'Tatsuya', '', 'Endo', '', '2023-01-23 20:17:27', '2023-01-23 20:17:27'),
(22, 'Yukinobu', '', 'Tatsu', '', '2023-01-23 20:17:27', '2023-01-23 20:17:27'),
(23, 'Archie', '', 'Strange', '', '2023-01-23 20:17:27', '2023-01-23 20:17:27'),
(24, 'Siku', '', '', '', '2023-01-23 20:17:27', '2023-01-23 20:17:27'),
(25, 'Tatsuki', '', 'Fujimoto', '', '2023-01-23 20:17:27', '2023-01-23 20:17:27'),
(26, 'Akane', '', 'Tamura', '', '2023-01-23 20:17:27', '2023-01-23 20:17:27'),
(27, 'Fujita', '', '', '', '2023-01-23 20:17:27', '2023-01-23 20:17:27'),
(28, 'Shinichi', '', 'Fukuda', '', '2023-01-23 20:17:27', '2023-01-23 20:17:27'),
(29, 'Akira', '', 'Toriyama', '', '2023-01-23 20:17:27', '2023-01-23 20:17:27'),
(30, 'Hirohiko', '', 'Araki', '', '2023-01-23 20:17:27', '2023-01-23 20:17:27'),
(31, 'ITKZ', '', '', '', '2023-01-23 20:17:27', '2023-01-23 20:17:27'),
(32, 'Reibun', '', 'Ike', '', '2023-01-23 20:17:27', '2023-01-23 20:17:27'),
(33, 'Saburouta', '', '', '', '2023-01-23 20:17:28', '2023-01-23 20:17:28'),
(34, 'Murata', '', '', '', '2023-01-23 20:17:28', '2023-01-23 20:17:28'),
(35, 'Demo1', '', '', '', '2023-01-23 20:17:28', '2023-01-23 20:17:28'),
(36, 'Demo2', '', '', '', '2023-01-23 20:17:28', '2023-01-23 20:17:28'),
(37, 'Demo3', '', '', '', '2023-01-23 20:17:28', '2023-01-23 20:17:28'),
(38, 'demo4', 'demo4', 'demo4', 'demo4', '2023-01-25 23:00:27', '2023-01-25 23:00:27'),
(39, 'demo5', 'demo5', 'demo5', 'demo5', '2023-01-25 23:03:18', '2023-01-25 23:03:18'),
(40, 'demo7', 'demo7', 'demo7', 'demo7', '2023-01-26 02:09:00', '2023-01-26 02:09:00');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `person_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `person_id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 35, 'demo1@gmail.com', '2023-01-23 20:17:28', '$2a$12$otlTjH16acMBb2/bUwNnZuHCY8wWVZS6/C9UgOSWw3aqiieY4nvt2', 'ZaCsBNxBGGaOxkUopnV6goaIyIc0TgapVIEiK8oIbLgvfzyhEG3l2HvqzJwS', '2023-01-23 20:17:28', '2023-01-23 20:17:28'),
(2, 36, 'demo2@gmail.com', '2023-01-23 20:17:28', '$2a$12$otlTjH16acMBb2/bUwNnZuHCY8wWVZS6/C9UgOSWw3aqiieY4nvt2', 'u0d19d9I2NxYA5GsFepncOdmPV9cUcoM9QKTiZhe1VlKhIrY0Zp7ygL3BHvk', '2023-01-23 20:17:28', '2023-01-23 20:17:28'),
(3, 37, 'demo3@gmail.com', '2023-01-23 20:17:28', '$2a$12$otlTjH16acMBb2/bUwNnZuHCY8wWVZS6/C9UgOSWw3aqiieY4nvt2', '74DSGlPet5g89eJPJWOHD479nIsL09qcpXoWy1afMaf5IecQuG3LUSyqeqCU', '2023-01-23 20:17:28', '2023-01-23 20:17:28'),
(4, 38, 'demo4@gmail.com', NULL, '$2y$10$KZetJSkwZ/qIGILuvCEyjeT1kWiz8A4DWRXg0lvBIvv7WjUbxrdDK', NULL, '2023-01-25 23:00:27', '2023-01-25 23:00:27'),
(5, 39, 'demo5@gmail.com', NULL, '$2y$10$lsdvaes7Ps4GA0SGfE.JJ.y/xDdhUCTBANGn153hfS/647PZvIlOm', NULL, '2023-01-25 23:03:18', '2023-01-25 23:03:18'),
(6, 40, 'demo7@gmail.com', NULL, '$2y$10$egFessynOb7bBwHYdrwBneN2xBvLZ38vkzvpMlsfGNr6/xXl65ULC', NULL, '2023-01-26 02:09:00', '2023-01-26 02:09:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `authors_person_id_foreign` (`person_id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_manga`
--
ALTER TABLE `category_manga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_manga_manga_id_foreign` (`manga_id`),
  ADD KEY `category_manga_category_id_foreign` (`category_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoices_user_id_foreign` (`user_id`);

--
-- Indexes for table `item_carts`
--
ALTER TABLE `item_carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_carts_cart_id_foreign` (`cart_id`),
  ADD KEY `item_carts_manga_id_foreign` (`manga_id`);

--
-- Indexes for table `item_invoices`
--
ALTER TABLE `item_invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_invoices_invoice_id_foreign` (`invoice_id`),
  ADD KEY `item_invoices_manga_id_foreign` (`manga_id`);

--
-- Indexes for table `mangas`
--
ALTER TABLE `mangas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mangas_author_id_foreign` (`author_id`);

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
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_person_id_foreign` (`person_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `category_manga`
--
ALTER TABLE `category_manga`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `item_carts`
--
ALTER TABLE `item_carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `item_invoices`
--
ALTER TABLE `item_invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `mangas`
--
ALTER TABLE `mangas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `authors`
--
ALTER TABLE `authors`
  ADD CONSTRAINT `authors_person_id_foreign` FOREIGN KEY (`person_id`) REFERENCES `people` (`id`);

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `category_manga`
--
ALTER TABLE `category_manga`
  ADD CONSTRAINT `category_manga_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `category_manga_manga_id_foreign` FOREIGN KEY (`manga_id`) REFERENCES `mangas` (`id`);

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `item_carts`
--
ALTER TABLE `item_carts`
  ADD CONSTRAINT `item_carts_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`),
  ADD CONSTRAINT `item_carts_manga_id_foreign` FOREIGN KEY (`manga_id`) REFERENCES `mangas` (`id`);

--
-- Constraints for table `item_invoices`
--
ALTER TABLE `item_invoices`
  ADD CONSTRAINT `item_invoices_invoice_id_foreign` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`id`),
  ADD CONSTRAINT `item_invoices_manga_id_foreign` FOREIGN KEY (`manga_id`) REFERENCES `mangas` (`id`);

--
-- Constraints for table `mangas`
--
ALTER TABLE `mangas`
  ADD CONSTRAINT `mangas_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_person_id_foreign` FOREIGN KEY (`person_id`) REFERENCES `people` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

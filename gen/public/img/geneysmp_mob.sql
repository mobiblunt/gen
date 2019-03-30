-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 24, 2019 at 03:06 PM
-- Server version: 10.1.38-MariaDB-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `geneysmp_mob`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `balance` double DEFAULT NULL,
  `dollars` double(8,2) NOT NULL,
  `plan_id` int(10) UNSIGNED DEFAULT NULL,
  `owing` double(8,1) NOT NULL,
  `earnings` double NOT NULL,
  `end_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `user_id`, `balance`, `dollars`, `plan_id`, `owing`, `earnings`, `end_date`, `created_at`, `updated_at`) VALUES
(1, 9, 6, 300.00, 4, 0.0, 303.5, '2019-05-13', '2019-01-14 15:25:22', '2019-02-02 18:02:17'),
(8, 31, 0, 0.00, 4, 1.0, 0, '2019-03-01', '2019-01-30 19:03:29', '2019-01-30 19:03:29'),
(9, 32, 0, 0.00, 4, 0.0, 0, '2019-04-20', '2019-03-21 15:06:22', '2019-03-21 15:06:22'),
(10, 33, 0, 0.00, 6, 0.0, 0, '2019-06-29', '2019-03-21 17:48:10', '2019-03-21 17:48:10'),
(11, 34, 0, 0.00, 6, 0.0, 0, '2019-06-29', '2019-03-21 21:43:45', '2019-03-21 21:43:45'),
(12, 35, 0, 0.00, 5, 0.0, 0, '2019-04-21', '2019-03-22 15:05:10', '2019-03-22 15:05:10'),
(13, 36, 0, 0.00, 1, 0.0, 0, '2019-04-12', '2019-03-22 15:06:03', '2019-03-22 15:06:03');

-- --------------------------------------------------------

--
-- Table structure for table `activations`
--

CREATE TABLE `activations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activations`
--

INSERT INTO `activations` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'fE2qB0eA4uK9huSc8MxFhhh4vbb7ydFH', 1, '2018-12-22 00:34:28', '2018-12-22 00:34:28', '2018-12-22 00:34:28'),
(2, 2, 'aItD4OBeE8N0cc97gsPno6uVALZNi6X4', 1, '2018-12-22 00:34:28', '2018-12-22 00:34:28', '2018-12-22 00:34:28'),
(3, 3, 'cKE5B39UzFUziCD8YgQRPIV4nBL4snn3', 1, '2018-12-29 22:06:22', '2018-12-29 22:06:22', '2018-12-29 22:06:22'),
(5, 5, 'dp1SfpWz4VNrHJp79igmfjVar8feBOoK', 1, '2018-12-29 22:38:09', '2018-12-29 22:38:09', '2018-12-29 22:38:09'),
(6, 6, 'xcN5OPbrjrPG1HU4qmIgJ3IQpsDzrutq', 1, '2018-12-29 22:41:30', '2018-12-29 22:41:30', '2018-12-29 22:41:30'),
(7, 7, '9vXc1uik3mGbNSqBQtgWd85ra48JSBcI', 1, '2019-01-09 22:00:26', '2019-01-09 22:00:26', '2019-01-09 22:00:26'),
(8, 8, '3CqGzTa6wXSl2ELuuQLxkCgPSWWzdtti', 1, '2019-01-14 15:10:58', '2019-01-14 15:10:58', '2019-01-14 15:10:58'),
(9, 9, 'M2Zj0Hx9lKKCnvYWyTkuROESt9YO4qge', 1, '2019-01-14 15:25:22', '2019-01-14 15:25:22', '2019-01-14 15:25:22'),
(10, 10, 'qOfd6imfAfre4ClUphh81ST7sLpSH9VX', 1, '2019-01-15 22:09:24', '2019-01-15 22:09:24', '2019-01-15 22:09:24'),
(11, 11, '5QfdBW4G0gARK62w9aJaMXMcc0PDJ4Va', 1, '2019-01-15 23:10:43', '2019-01-15 23:10:43', '2019-01-15 23:10:43'),
(12, 12, 'u7hOYbUYNxWq2tSx2rsqdZXgvTfD3Cix', 1, '2019-01-15 23:14:13', '2019-01-15 23:14:13', '2019-01-15 23:14:13'),
(13, 13, 'aGdOlI0imptIQft0gKOHi6SNjkTCJlLY', 1, '2019-01-15 23:19:21', '2019-01-15 23:19:21', '2019-01-15 23:19:21'),
(14, 14, 'hn3lMC8NCJkK5aQJ3JpG0E1hVKkqKmGj', 1, '2019-01-15 23:20:14', '2019-01-15 23:20:14', '2019-01-15 23:20:14'),
(15, 15, 'jWZTD2gJj203IicCYui8vQLvlxLXuZeC', 1, '2019-01-15 23:24:47', '2019-01-15 23:24:47', '2019-01-15 23:24:47'),
(16, 16, 'lVDjF3kQHl8GjVgnRgaEuIyXGJng2IZz', 1, '2019-01-19 12:28:55', '2019-01-19 12:28:55', '2019-01-19 12:28:55'),
(17, 17, 'h1uGWPU2m2i9fgU0LvQRSlkYYjqAtRNh', 1, '2019-01-19 16:06:59', '2019-01-19 16:06:59', '2019-01-19 16:06:59'),
(18, 18, 'NVxKrLhT1HmW6Zrv5XFgJurmnohOpqUX', 1, '2019-01-19 16:10:03', '2019-01-19 16:10:03', '2019-01-19 16:10:03'),
(19, 19, '68vODwvIOkkHNHwnh7hMvCBsraqi4PiF', 1, '2019-01-19 16:11:58', '2019-01-19 16:11:58', '2019-01-19 16:11:58'),
(20, 17, 'Lcy7DIcMQAXJtdVT78IuEzAcQuUOIjwn', 1, '2019-01-30 18:00:01', '2019-01-30 18:00:01', '2019-01-30 18:00:01'),
(21, 18, 'Y7hcvYp9w3AkLyEbVNBpzo8GDmFrukeB', 1, '2019-01-30 18:13:21', '2019-01-30 18:13:21', '2019-01-30 18:13:21'),
(22, 19, 'Way3sHNJutkYwHijMwGu321ULgxrce4M', 1, '2019-01-30 18:15:43', '2019-01-30 18:15:43', '2019-01-30 18:15:43'),
(23, 20, 'B8NFdOZh1qiGH2jez8M8OnvPAiPBwekp', 1, '2019-01-30 18:18:17', '2019-01-30 18:18:17', '2019-01-30 18:18:17'),
(24, 21, 'p5rz1lYT0fLbLshl7dZuKjvTyc5PpOyq', 1, '2019-01-30 18:19:46', '2019-01-30 18:19:46', '2019-01-30 18:19:46'),
(25, 22, 'Mz1xVWZxbXq7N8HIaGCoYCaGKo7NEnaC', 1, '2019-01-30 18:31:36', '2019-01-30 18:31:36', '2019-01-30 18:31:36'),
(26, 23, 'OgPhW3kanVNrttC2lZ6Axh9QbPdgYk1T', 1, '2019-01-30 18:36:13', '2019-01-30 18:36:13', '2019-01-30 18:36:13'),
(27, 24, 'XMeNPjiMZxbdtLwPacAUTKZuGc1D8m8f', 1, '2019-01-30 18:38:28', '2019-01-30 18:38:28', '2019-01-30 18:38:28'),
(28, 25, 'ZuU69hW9BqWg9s2JKP1NJ83wgwwL02IP', 1, '2019-01-30 18:39:40', '2019-01-30 18:39:40', '2019-01-30 18:39:40'),
(29, 26, 'ZeP8v4Pyy21GqNP0wSHxa3TybbeZgd3Y', 1, '2019-01-30 18:43:13', '2019-01-30 18:43:13', '2019-01-30 18:43:13'),
(30, 27, '2RWpo0CJWJRKvuP6fURwcwvx6aUQtGDs', 1, '2019-01-30 18:49:07', '2019-01-30 18:49:07', '2019-01-30 18:49:07'),
(31, 28, '15jgTgsBba7ZP458H5OuaMnFCJPb9JrT', 1, '2019-01-30 18:50:37', '2019-01-30 18:50:37', '2019-01-30 18:50:37'),
(32, 29, 'N0YdGYnq9ewcL3IeTlpeaXx4ZXAP6ax4', 1, '2019-01-30 18:56:36', '2019-01-30 18:56:36', '2019-01-30 18:56:36'),
(33, 30, 'fCt8JrNo1kcWhajeKaEIJ8cRcMUTraOZ', 1, '2019-01-30 18:59:36', '2019-01-30 18:59:36', '2019-01-30 18:59:36'),
(34, 31, 'beFXs3TRea7zS6CbYXkd5VCgoLmOZQE8', 1, '2019-01-30 19:03:29', '2019-01-30 19:03:29', '2019-01-30 19:03:29'),
(35, 32, 'ylMpQeSgeFnrXjSxlJq9eO8rjj07zGNV', 1, '2019-03-21 15:06:22', '2019-03-21 15:06:22', '2019-03-21 15:06:22'),
(36, 33, 'gCUoJ8fP68wM4rKpFZxY75EOTxDkWt3p', 1, '2019-03-21 17:48:10', '2019-03-21 17:48:10', '2019-03-21 17:48:10'),
(37, 34, 'kUHtIWsUhZefnMtHIbsBKpjSPX3dnHGL', 1, '2019-03-21 21:43:45', '2019-03-21 21:43:45', '2019-03-21 21:43:45'),
(38, 35, '1oORdDy2RYKuY5JcfFBldN94gMvGDB0B', 1, '2019-03-22 15:05:10', '2019-03-22 15:05:10', '2019-03-22 15:05:10'),
(39, 36, 'X8wxDs3EKTgUKdnBIkuflTW1TSp573Um', 1, '2019-03-22 15:06:03', '2019-03-22 15:06:03', '2019-03-22 15:06:03');

-- --------------------------------------------------------

--
-- Table structure for table `alerts`
--

CREATE TABLE `alerts` (
  `id` int(10) UNSIGNED NOT NULL,
  `deposit_id` int(10) UNSIGNED DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_paid` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alerts`
--

INSERT INTO `alerts` (`id`, `deposit_id`, `amount`, `date_paid`, `created_at`, `updated_at`) VALUES
(2, 7, '2000', '2019-01-16', '2019-01-16 12:55:15', '2019-01-16 12:55:15'),
(3, 7, '2000', '2019-01-16', '2019-01-16 13:32:28', '2019-01-16 13:32:28'),
(4, 7, '100.00', '2019-01-16', '2019-01-16 13:39:18', '2019-01-16 13:39:18'),
(5, 8, '1000', '2019-01-23', '2019-01-19 12:41:04', '2019-01-19 12:41:04'),
(6, 9, '500', '2019-01-29', '2019-01-29 13:20:25', '2019-01-29 13:20:25'),
(7, 10, '10.00', '2019-03-24', '2019-03-21 18:08:17', '2019-03-21 18:08:17');

-- --------------------------------------------------------

--
-- Table structure for table `cointpayment_log_trxes`
--

CREATE TABLE `cointpayment_log_trxes` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coin` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fiat` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `payment_created_at` datetime NOT NULL,
  `expired` datetime NOT NULL,
  `confirmation_at` datetime DEFAULT NULL,
  `amount` double(20,8) NOT NULL,
  `confirms_needed` int(11) NOT NULL,
  `qrcode_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cp_callback_addresses`
--

CREATE TABLE `cp_callback_addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `address` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pubkey` text COLLATE utf8mb4_unicode_ci,
  `ipn_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dest_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cp_conversions`
--

CREATE TABLE `cp_conversions` (
  `id` int(10) UNSIGNED NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_id` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dest_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cp_deposits`
--

CREATE TABLE `cp_deposits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `txn_id` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `status_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirms` tinyint(3) UNSIGNED NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amounti` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feei` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dest_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cp_ipns`
--

CREATE TABLE `cp_ipns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ipn_version` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ipn_id` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ipn_mode` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merchant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ipn_type` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `txn_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `status_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirms` tinyint(3) UNSIGNED DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amounti` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feei` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dest_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buyer_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `custom` text COLLATE utf8mb4_unicode_ci,
  `send_tx` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_confirms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cp_log`
--

CREATE TABLE `cp_log` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `log` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cp_mass_withdrawals`
--

CREATE TABLE `cp_mass_withdrawals` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cp_transactions`
--

CREATE TABLE `cp_transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amount1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency1` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency2` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dest_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buyer_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buyer_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `custom` text COLLATE utf8mb4_unicode_ci,
  `ipn_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `txn_id` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirms_needed` tinyint(3) UNSIGNED NOT NULL,
  `timeout` int(10) UNSIGNED NOT NULL,
  `status_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qrcode_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `status_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_confirms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `received_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cp_transfers`
--

CREATE TABLE `cp_transfers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merchant` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pbntag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auto_confirm` tinyint(1) NOT NULL DEFAULT '0',
  `ref_id` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cp_withdrawals`
--

CREATE TABLE `cp_withdrawals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mass_withdrawal_id` int(10) UNSIGNED DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amounti` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency2` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pbntag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dest_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ipn_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auto_confirm` tinyint(1) NOT NULL DEFAULT '0',
  `note` text COLLATE utf8mb4_unicode_ci,
  `ref_id` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL,
  `status_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `txn_id` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deposits`
--

CREATE TABLE `deposits` (
  `id` int(10) UNSIGNED NOT NULL,
  `trans_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `amount` double(8,2) NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btc_amt` int(11) DEFAULT NULL,
  `plan_id` int(10) UNSIGNED DEFAULT NULL,
  `pay_option` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('OPEN','PAID','CANCELLED') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'OPEN',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deposits`
--

INSERT INTO `deposits` (`id`, `trans_id`, `user_id`, `amount`, `mobile`, `btc_amt`, `plan_id`, `pay_option`, `status`, `created_at`, `updated_at`) VALUES
(5, 'bfebdf90-0e88-11e9-8925-ad8165294272', 2, 3000.00, '', 0, 1, 'USD', 'OPEN', '2019-01-02 11:20:11', '2019-01-02 11:20:11'),
(6, 'd4e38330-0ea8-11e9-9d8f-3570a4a55c76', 2, 5.00, '7067208421', NULL, 1, 'USD', 'OPEN', '2019-01-02 15:09:50', '2019-01-02 15:09:50'),
(7, 'd9a15370-1819-11e9-adfe-fb8bcb5ca5b5', 9, 3.00, '7067208421', NULL, 4, 'USD', 'PAID', '2019-01-14 15:31:31', '2019-01-14 15:55:54'),
(8, 'cfe86c00-1bef-11e9-823f-2324b4fe1ba1', 9, 10.00, '7084569478', NULL, 4, 'USD', 'OPEN', '2019-01-19 12:40:41', '2019-01-19 12:40:41'),
(9, 'be7c6430-23d0-11e9-bb6b-2b20fe7bd043', 9, 600.00, '7098097970', NULL, 4, 'USD', 'PAID', '2019-01-29 13:18:26', '2019-01-29 13:54:16'),
(10, '9917e9e0-4be2-11e9-aa8a-4108668c1506', 33, 500.19, '090', NULL, 6, 'USD', 'OPEN', '2019-03-21 18:07:01', '2019-03-21 18:07:01');

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
(1, '2014_07_02_230147_migration_cartalyst_sentinel', 1),
(2, '2018_12_22_132801_add_fields_to_users_table', 2),
(3, '2018_12_22_134016_create_plan_table', 2),
(4, '2018_12_22_134628_add_planid_to_users_table', 3),
(5, '2018_12_22_140410_add_name_to_plan_table', 3),
(6, '2018_12_22_134628_add_plad_to_users_table', 4),
(7, '2018_12_22_142657_create_wallets_table', 5),
(8, '2018_12_22_143610_create_accounts_table', 6),
(9, '2018_12_22_143839_create_deposits_table', 7),
(10, '2018_12_22_144231_create_withdrawals_table', 8),
(11, '2018_12_29_112107_add_planid_to_deposit_table', 9),
(12, '2018_12_29_205621_modify_wallets_table', 10),
(13, '2018_12_29_213521_add_unique_id_to_users_table', 11),
(14, '2018_12_29_214816_mod_unique_id_to_users_table', 12),
(15, '2018_12_29_234703_mod_accounts_table', 13),
(16, '2018_12_30_122645_modi_accounts_table', 14),
(28, '2017_09_15_051156_setup_coinpayment_tables', 15),
(29, '2018_03_23_021431_create_cointpayment_log_trxes_table', 15),
(30, '2018_03_24_032432_create_callback_address_table', 15),
(31, '2018_05_07_123123_fix_transactions_table', 15),
(32, '2018_05_08_037214_cp_create_mass_withdrawal', 15),
(33, '2018_07_01_112608_add_column_dest_tag_to_transactions_table', 15),
(34, '2019_01_02_113256_add_tran_id_to_deposits_table', 15),
(35, '2019_01_02_115606_mod_tran_id_to_deposits_table', 16),
(36, '2019_01_02_134443_mod_btcamt_to_deposits_table', 17),
(37, '2019_01_02_151835_add_charge_to_plan_table', 18),
(38, '2019_01_02_152911_add_chargde_to_plan_table', 19),
(39, '2019_01_02_160317_add_mobile_to_plan_table', 20),
(40, '2019_01_02_165256_mod_mob_to_wit_table', 21),
(41, '2019_01_02_165632_mod_add_to_wit_table', 22),
(42, '2019_01_14_170415_modify_accounts_table', 23),
(43, '2019_01_14_171829_add_dollars_accounts_table', 24),
(44, '2019_01_16_113709_create_alert_table', 25),
(45, '2019_01_16_123016_add_owing_deposit_table', 26),
(46, '2019_01_16_123223_remove_owing_accounts_table', 26),
(47, '2019_01_16_131112_add_date_alerts_table', 27),
(48, '2016_10_23_194639_create_tracking_table', 28),
(49, '2018_02_26_203625_add_fields_to_trackings_table', 28),
(50, '2018_08_17_151635_add_status_to_trackings_table', 28),
(51, '2019_01_30_180729_add_fields_accounts_table', 29),
(52, '2019_01_30_181720_remove_plan_users_table', 30),
(53, '2019_01_30_182846_remove_owing_deposits_table', 31);

-- --------------------------------------------------------

--
-- Table structure for table `persistences`
--

CREATE TABLE `persistences` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `persistences`
--

INSERT INTO `persistences` (`id`, `user_id`, `code`, `created_at`, `updated_at`) VALUES
(59, 1, 'F63KkzHWTONpU7pSmF1bp9fJfV9tgewp', '2019-01-30 20:43:26', '2019-01-30 20:43:26'),
(60, 9, 'yiKr8gDUhdCnZO0laSSoBjsiIpOC3hlK', '2019-02-02 09:05:58', '2019-02-02 09:05:58'),
(61, 9, 'vlKZ1LDEx7VKgbD4AIsn3BtfmvOgPgkY', '2019-02-02 12:02:05', '2019-02-02 12:02:05'),
(62, 1, 'uTcmkUNgcJo1p1LjLbvak3Wlssqnj5YT', '2019-03-20 08:03:33', '2019-03-20 08:03:33'),
(64, 9, 'EjQw8dVteTY9VfoDroGfLXSEYC7ksNGl', '2019-03-20 14:13:21', '2019-03-20 14:13:21'),
(66, 32, 'QT4AFKtdTrTUIGAhmstyRhFL6QQL2GP4', '2019-03-21 15:07:29', '2019-03-21 15:07:29'),
(67, 33, 'LXVMvTJSImDgCaVOsaxtZsK78TGeGl1y', '2019-03-21 17:53:35', '2019-03-21 17:53:35'),
(68, 1, 'RO3xDWUaPL0ADroZYxl4US4CLKlRYdes', '2019-03-21 21:05:53', '2019-03-21 21:05:53'),
(70, 36, 'j0pB6ru8KJ7J8ZXLVGnCYfcanxVWk3w6', '2019-03-22 15:06:14', '2019-03-22 15:06:14'),
(71, 35, 'w8HEe61zcP0E4GkxrfuqDAx6HD19UQWD', '2019-03-22 15:07:42', '2019-03-22 15:07:42'),
(72, 1, '1rVQn2zShrPJPwSylQm3Ex0WUcEwPPPd', '2019-03-22 20:00:27', '2019-03-22 20:00:27'),
(73, 1, 'lI6mq7YPeOnCPXfltVM74UUlozYOKjgX', '2019-03-22 23:50:59', '2019-03-22 23:50:59');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profit` int(11) NOT NULL,
  `robot_charge` double(8,3) NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minimum` double(11,2) NOT NULL,
  `maximum` double(8,3) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `name`, `profit`, `robot_charge`, `duration`, `minimum`, `maximum`, `created_at`, `updated_at`) VALUES
(1, 'Sapphire', 15, 0.065, '14', 0.50, 0.013, NULL, '2019-03-20 14:01:48'),
(4, 'Bronze', 30, 0.100, '14', 1.00, 0.026, '2018-12-30 00:34:24', '2019-03-20 14:08:33'),
(5, 'Gold', 40, 0.300, '30', 5.00, 0.078, '2018-12-30 00:36:33', '2019-03-20 14:09:49'),
(6, 'Diamond', 50, 1.000, '30', 10.00, 0.260, '2018-12-30 00:38:35', '2019-03-20 14:11:01');

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE `reminders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reminders`
--

INSERT INTO `reminders` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES
(3, 6, 'GhJvinMvDPfWgrGWskURjPCxZQyEyY3l', 1, '2019-01-15 21:46:56', '2019-01-15 21:43:14', '2019-01-15 21:46:56'),
(6, 15, 'WrusbJzcKuYnmVxDbqbo6cRvZJidb1Mf', 1, '2019-01-19 12:48:29', '2019-01-19 12:47:13', '2019-01-19 12:48:29'),
(7, 1, '4kmjTNOjUaNdCYOT3dX2KmJY5abBabLt', 1, '2019-01-29 14:54:27', '2019-01-29 14:12:13', '2019-01-29 14:54:27');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `slug`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'administrator', 'Administrator', '{\"users.create\":true,\"users.update\":true,\"users.view\":true,\"users.destroy\":true,\"roles.create\":true,\"roles.update\":true,\"roles.view\":true,\"roles.delete\":true}', '2018-12-22 00:34:29', '2018-12-22 00:34:29'),
(2, 'moderator', 'Moderator', '{\"users.update\":true,\"users.view\":true}', '2018-12-22 00:34:29', '2018-12-22 00:34:29'),
(3, 'subscriber', 'Subscriber', '', '2018-12-22 00:34:29', '2018-12-22 00:34:29');

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE `role_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_users`
--

INSERT INTO `role_users` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2018-12-22 00:34:29', '2018-12-22 00:34:29'),
(2, 3, '2018-12-22 00:34:29', '2018-12-22 00:34:29');

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE `throttle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `type`, `ip`, `created_at`, `updated_at`) VALUES
(1, NULL, 'global', NULL, '2018-12-22 00:45:05', '2018-12-22 00:45:05'),
(2, NULL, 'ip', '127.0.0.1', '2018-12-22 00:45:05', '2018-12-22 00:45:05'),
(3, 1, 'user', NULL, '2018-12-22 00:45:05', '2018-12-22 00:45:05'),
(4, NULL, 'global', NULL, '2019-01-09 20:31:12', '2019-01-09 20:31:12'),
(5, NULL, 'ip', '127.0.0.1', '2019-01-09 20:31:12', '2019-01-09 20:31:12'),
(6, NULL, 'global', NULL, '2019-01-09 20:31:25', '2019-01-09 20:31:25'),
(7, NULL, 'ip', '127.0.0.1', '2019-01-09 20:31:25', '2019-01-09 20:31:25'),
(8, NULL, 'global', NULL, '2019-01-30 20:43:14', '2019-01-30 20:43:14'),
(9, NULL, 'ip', '::1', '2019-01-30 20:43:14', '2019-01-30 20:43:14'),
(10, 1, 'user', NULL, '2019-01-30 20:43:14', '2019-01-30 20:43:14'),
(11, NULL, 'global', NULL, '2019-02-02 18:06:05', '2019-02-02 18:06:05'),
(12, NULL, 'ip', '::1', '2019-02-02 18:06:05', '2019-02-02 18:06:05'),
(13, NULL, 'global', NULL, '2019-02-02 18:06:20', '2019-02-02 18:06:20'),
(14, NULL, 'ip', '::1', '2019-02-02 18:06:20', '2019-02-02 18:06:20'),
(15, 1, 'user', NULL, '2019-02-02 18:06:20', '2019-02-02 18:06:20'),
(16, NULL, 'global', NULL, '2019-03-21 13:15:36', '2019-03-21 13:15:36'),
(17, NULL, 'ip', '41.203.78.217', '2019-03-21 13:15:36', '2019-03-21 13:15:36'),
(18, 9, 'user', NULL, '2019-03-21 13:15:36', '2019-03-21 13:15:36'),
(19, NULL, 'global', NULL, '2019-03-21 13:15:51', '2019-03-21 13:15:51'),
(20, NULL, 'ip', '41.203.78.217', '2019-03-21 13:15:51', '2019-03-21 13:15:51'),
(21, 1, 'user', NULL, '2019-03-21 13:15:51', '2019-03-21 13:15:51'),
(22, NULL, 'global', NULL, '2019-03-21 13:54:06', '2019-03-21 13:54:06'),
(23, NULL, 'ip', '212.100.92.138', '2019-03-21 13:54:06', '2019-03-21 13:54:06'),
(24, NULL, 'global', NULL, '2019-03-21 16:11:02', '2019-03-21 16:11:02'),
(25, NULL, 'ip', '212.100.92.13', '2019-03-21 16:11:02', '2019-03-21 16:11:02'),
(26, NULL, 'global', NULL, '2019-03-21 16:11:15', '2019-03-21 16:11:15'),
(27, NULL, 'ip', '212.100.92.13', '2019-03-21 16:11:15', '2019-03-21 16:11:15'),
(28, NULL, 'global', NULL, '2019-03-21 16:12:01', '2019-03-21 16:12:01'),
(29, NULL, 'ip', '212.100.92.13', '2019-03-21 16:12:01', '2019-03-21 16:12:01'),
(30, NULL, 'global', NULL, '2019-03-21 16:14:04', '2019-03-21 16:14:04'),
(31, NULL, 'ip', '212.100.92.13', '2019-03-21 16:14:04', '2019-03-21 16:14:04'),
(32, NULL, 'global', NULL, '2019-03-21 16:14:15', '2019-03-21 16:14:15'),
(33, NULL, 'ip', '212.100.92.13', '2019-03-21 16:14:15', '2019-03-21 16:14:15'),
(34, NULL, 'global', NULL, '2019-03-21 16:15:57', '2019-03-21 16:15:57'),
(35, NULL, 'ip', '212.100.92.13', '2019-03-21 16:15:57', '2019-03-21 16:15:57');

-- --------------------------------------------------------

--
-- Table structure for table `trackings`
--

CREATE TABLE `trackings` (
  `id` int(10) UNSIGNED NOT NULL,
  `product` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `delivery_date` date NOT NULL,
  `tracking_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `origin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `from` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `waybill_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `orignate_count` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `to` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipment_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `last_login` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `first_name`, `last_name`, `mobile`, `address`, `country`, `ref`, `u_id`, `permissions`, `last_login`, `created_at`, `updated_at`) VALUES
(1, 'uchedim79@gmail.com', '$2y$10$eOjeumxq80cnn0Eg29KuKOjw7h5PCxSDwYs3rxIPohkuphsGec.ZC', 'Admin', NULL, '', '', '', '', '56c3096338cdb', NULL, '2019-03-22 23:50:59', '2018-12-22 00:34:27', '2019-03-22 23:50:59'),
(2, 'user@user.com', '$2y$10$EMtCk.gduKKtDdxcqypwGewTNMChlyAZOc2MYrRcnBaclf8L61.fO', 'Blunt', NULL, '', '', '', '', '', NULL, '2019-01-09 19:28:09', '2018-12-22 00:34:28', '2019-01-09 19:28:09'),
(3, 'ifeanyiblunt@gmail.com', '$2y$10$sJSXSNdL6VYxaACOksECwe40G9xoDeI.jc5jRtl4lYofEw3f6Y4oO', 'ifeanyi', 'udeh', '7067208421', NULL, 'Nigeria', '56c3096338cdb', '5c27fdee6f22e', NULL, '2018-12-29 22:06:51', '2018-12-29 22:06:22', '2018-12-29 22:06:51'),
(5, 'sheev.palpatin@outlook.com', '$2y$10$hI9uTwvfOxWZg4IOzYrC5ej.UggSLytMKKr5uZA9N.4lBzeHBN0ki', 'Sheev', 'Palpatine', '7084569478', NULL, 'Nigeria', '5c28046bcf19e', '5c28056091b8e', NULL, NULL, '2018-12-29 22:38:08', '2018-12-29 22:38:08'),
(9, 'wejiofor@yahoo.com', '$2y$10$gF5nTQ7HdUj44WaHskUisOMHW5U.E9XExbuRZ9ZYZMnyL8Kymvs/m', 'Sheev', 'Palpatine', '7084569478', NULL, 'Nigeria', '56c3096338cdb', '5c3cb7f1e9076', NULL, '2019-03-21 13:16:34', '2019-01-14 15:25:22', '2019-03-21 13:16:34'),
(16, 'chimobi.ejiofor@gmail.com', '$2y$10$L6OPzokNEUD6haF3.u/ghemzKM9HdiGcfJGYZJqDTOFrcNolsGtnq', 'Barney', 'Sam', '+23470987675', NULL, 'Nigeria', '56c3096338cdb', '5c4326172d3fa', NULL, NULL, '2019-01-19 12:28:55', '2019-01-19 12:28:55'),
(31, 'presomatic5@gmail.com', '$2y$10$8T59Y.yUKvEWMoD5jEN69uQCcUW6vQuXyvLjJW.h7p3kGg9t34Hr6', 'Barney', 'Sam', '+23470987675', NULL, 'Nigeria', '56c3096338cdb', '5c52031140da7', NULL, NULL, '2019-01-30 19:03:29', '2019-01-30 19:03:29'),
(32, 'freesmoke@vivaldi.net', '$2y$10$DTBbthgmj3FryGOUvoZ2fOa4OJ5vVN3zuU9e38NljcG1UD2fsAbdO', 'Mobi', 'Blunt', '7067208421', NULL, 'Nigeria', '56c3096338cdb', '5c93702ebed2e', NULL, '2019-03-21 15:07:29', '2019-03-21 15:06:22', '2019-03-21 15:07:29'),
(33, 'josephreedy9@gmail.com', '$2y$10$K3uDbF5KL8ii5TnWiiXtwu8.7S6bbin27Z3lrMuIHVjqfjz2gCvf2', 'Joseph', 'Reedy', '090', NULL, 'New Hamsphire', '56c3096338cdb', '5c939619e9863', NULL, '2019-03-21 17:53:35', '2019-03-21 17:48:10', '2019-03-21 17:53:35'),
(34, 'michael.rosen.d.11@gmail.com', '$2y$10$FUZMTQ32wo5Sc.6c8gX5NOlS3PglyKn2mNj5.ysOqafSNQRN58gY2', 'Michael', 'Rosen', 'NA', NULL, 'USA', '56c3096338cdb', '5c93cd51c75f1', NULL, '2019-03-21 21:44:10', '2019-03-21 21:43:45', '2019-03-21 21:44:10'),
(35, 'gollanarcher@gmail.com', '$2y$10$rSRkVcMQuN5Te49xN3CBNO.g48sHL/gp42yjV44q5wA0nBWzOpQla', 'Archer', 'Gollan', 'N/A', NULL, 'USA', '56c3096338cdb', '5c94c1661a3fe', NULL, '2019-03-22 15:07:42', '2019-03-22 15:05:10', '2019-03-22 15:07:42'),
(36, 'bowemichelle107@gmail.com', '$2y$10$Sesry4Do1uGObGaNDIwUMO1TrHaOqXLaZQt9ipohwlE9PoF48MUnm', 'Michelle', 'Bowe', 'N/A', NULL, 'Australia ', '56c3096338cdb', '5c94c19bb8a29', NULL, '2019-03-22 15:06:14', '2019-03-22 15:06:03', '2019-03-22 15:06:14');

-- --------------------------------------------------------

--
-- Table structure for table `wallets`
--

CREATE TABLE `wallets` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `btc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ltc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `withdrawals`
--

CREATE TABLE `withdrawals` (
  `id` int(10) UNSIGNED NOT NULL,
  `tran_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pay_option` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('OPEN','PAID','CANCELLED') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'OPEN',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `withdrawals`
--

INSERT INTO `withdrawals` (`id`, `tran_id`, `user_id`, `amount`, `address`, `pay_option`, `mobile`, `status`, `created_at`, `updated_at`) VALUES
(1, '0b429ea0-0eb4-11e9-b113-1b8ed1cfda4e', 2, 1, '191SKRQwgu2ASykTgsJDDME2Y1jjzUctVo', 'BTC', '70987675', 'CANCELLED', '2019-01-02 16:30:05', '2019-01-15 14:56:56'),
(2, '85738030-18cf-11e9-b510-a3fdee4307d4', 9, 2, 'hhhhhhhhhhhhh', 'BTC', '7067208421', 'PAID', '2019-01-15 13:11:59', '2019-01-15 14:57:24'),
(3, '0b1d9140-23d2-11e9-8296-9542581fd4c6', 9, 300, 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 'BTC', '7098097970', 'OPEN', '2019-01-29 13:27:44', '2019-01-29 13:27:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `accounts_user_id_foreign` (`user_id`),
  ADD KEY `accounts_plan_id_foreign` (`plan_id`);

--
-- Indexes for table `activations`
--
ALTER TABLE `activations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alerts`
--
ALTER TABLE `alerts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alerts_deposit_id_foreign` (`deposit_id`);

--
-- Indexes for table `cointpayment_log_trxes`
--
ALTER TABLE `cointpayment_log_trxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cp_callback_addresses`
--
ALTER TABLE `cp_callback_addresses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cp_callback_addresses_address_currency_unique` (`address`,`currency`);

--
-- Indexes for table `cp_conversions`
--
ALTER TABLE `cp_conversions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cp_conversions_ref_id_unique` (`ref_id`),
  ADD KEY `cp_conversions_from_index` (`from`),
  ADD KEY `cp_conversions_to_index` (`to`);

--
-- Indexes for table `cp_deposits`
--
ALTER TABLE `cp_deposits`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cp_deposits_txn_id_unique` (`txn_id`),
  ADD KEY `cp_deposits_address_index` (`address`);

--
-- Indexes for table `cp_ipns`
--
ALTER TABLE `cp_ipns`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cp_ipns_ipn_id_unique` (`ipn_id`),
  ADD KEY `cp_ipns_address_index` (`address`);

--
-- Indexes for table `cp_log`
--
ALTER TABLE `cp_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cp_mass_withdrawals`
--
ALTER TABLE `cp_mass_withdrawals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cp_transactions`
--
ALTER TABLE `cp_transactions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cp_transactions_txn_id_unique` (`txn_id`);

--
-- Indexes for table `cp_transfers`
--
ALTER TABLE `cp_transfers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cp_transfers_ref_id_unique` (`ref_id`),
  ADD KEY `cp_transfers_status_index` (`status`);

--
-- Indexes for table `cp_withdrawals`
--
ALTER TABLE `cp_withdrawals`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cp_withdrawals_ref_id_unique` (`ref_id`),
  ADD UNIQUE KEY `cp_withdrawals_txn_id_unique` (`txn_id`),
  ADD KEY `cp_withdrawals_mass_withdrawal_id_index` (`mass_withdrawal_id`);

--
-- Indexes for table `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deposits_user_id_foreign` (`user_id`),
  ADD KEY `deposits_plan_id_foreign` (`plan_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persistences`
--
ALTER TABLE `persistences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `persistences_code_unique` (`code`(15));

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`(15));

--
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`user_id`,`role_id`);

--
-- Indexes for table `throttle`
--
ALTER TABLE `throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `throttle_user_id_index` (`user_id`);

--
-- Indexes for table `trackings`
--
ALTER TABLE `trackings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `trackings_tracking_code_unique` (`tracking_code`(15));

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`(15));

--
-- Indexes for table `wallets`
--
ALTER TABLE `wallets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wallets_user_id_foreign` (`user_id`);

--
-- Indexes for table `withdrawals`
--
ALTER TABLE `withdrawals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `withdrawals_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `activations`
--
ALTER TABLE `activations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `alerts`
--
ALTER TABLE `alerts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cointpayment_log_trxes`
--
ALTER TABLE `cointpayment_log_trxes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cp_callback_addresses`
--
ALTER TABLE `cp_callback_addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cp_conversions`
--
ALTER TABLE `cp_conversions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cp_deposits`
--
ALTER TABLE `cp_deposits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cp_ipns`
--
ALTER TABLE `cp_ipns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cp_log`
--
ALTER TABLE `cp_log`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cp_mass_withdrawals`
--
ALTER TABLE `cp_mass_withdrawals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cp_transactions`
--
ALTER TABLE `cp_transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cp_transfers`
--
ALTER TABLE `cp_transfers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cp_withdrawals`
--
ALTER TABLE `cp_withdrawals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deposits`
--
ALTER TABLE `deposits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `persistences`
--
ALTER TABLE `persistences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reminders`
--
ALTER TABLE `reminders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `throttle`
--
ALTER TABLE `throttle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `trackings`
--
ALTER TABLE `trackings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `wallets`
--
ALTER TABLE `wallets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `withdrawals`
--
ALTER TABLE `withdrawals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `accounts_plan_id_foreign` FOREIGN KEY (`plan_id`) REFERENCES `plans` (`id`),
  ADD CONSTRAINT `accounts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `alerts`
--
ALTER TABLE `alerts`
  ADD CONSTRAINT `alerts_deposit_id_foreign` FOREIGN KEY (`deposit_id`) REFERENCES `deposits` (`id`);

--
-- Constraints for table `cp_deposits`
--
ALTER TABLE `cp_deposits`
  ADD CONSTRAINT `cp_deposits_address_foreign` FOREIGN KEY (`address`) REFERENCES `cp_callback_addresses` (`address`) ON UPDATE CASCADE;

--
-- Constraints for table `cp_withdrawals`
--
ALTER TABLE `cp_withdrawals`
  ADD CONSTRAINT `cp_withdrawals_mass_withdrawal_id_foreign` FOREIGN KEY (`mass_withdrawal_id`) REFERENCES `cp_mass_withdrawals` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `deposits`
--
ALTER TABLE `deposits`
  ADD CONSTRAINT `deposits_plan_id_foreign` FOREIGN KEY (`plan_id`) REFERENCES `plans` (`id`),
  ADD CONSTRAINT `deposits_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `wallets`
--
ALTER TABLE `wallets`
  ADD CONSTRAINT `wallets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `withdrawals`
--
ALTER TABLE `withdrawals`
  ADD CONSTRAINT `withdrawals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

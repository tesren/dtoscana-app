-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 28-10-2024 a las 15:33:12
-- Versión del servidor: 5.7.39
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dtoscana`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `action_events`
--

DROP TABLE IF EXISTS `action_events`;
CREATE TABLE `action_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `batch_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actionable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actionable_id` bigint(20) UNSIGNED NOT NULL,
  `target_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED DEFAULT NULL,
  `fields` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'running',
  `exception` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `original` mediumtext COLLATE utf8mb4_unicode_ci,
  `changes` mediumtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `action_events`
--

INSERT INTO `action_events` (`id`, `batch_id`, `user_id`, `name`, `actionable_type`, `actionable_id`, `target_type`, `target_id`, `model_type`, `model_id`, `fields`, `status`, `exception`, `created_at`, `updated_at`, `original`, `changes`) VALUES
(1, '9d368054-50a4-4385-8c69-ac1b0c23b9eb', 1, 'Create', 'App\\Models\\Tower', 1, 'App\\Models\\Tower', 1, 'App\\Models\\Tower', 1, '', 'finished', '', '2024-10-10 21:27:48', '2024-10-10 21:27:48', NULL, '{\"name\":\"Lucca\",\"secondary_name\":null,\"updated_at\":\"2024-10-10T15:27:48.000000Z\",\"created_at\":\"2024-10-10T15:27:48.000000Z\",\"id\":1}'),
(2, '9d368058-dcf0-4fdd-96fe-d7c60d464ad9', 1, 'Create', 'App\\Models\\Tower', 2, 'App\\Models\\Tower', 2, 'App\\Models\\Tower', 2, '', 'finished', '', '2024-10-10 21:27:51', '2024-10-10 21:27:51', NULL, '{\"name\":\"Siena\",\"secondary_name\":null,\"updated_at\":\"2024-10-10T15:27:51.000000Z\",\"created_at\":\"2024-10-10T15:27:51.000000Z\",\"id\":2}'),
(3, '9d368b88-06ff-48c1-add2-6d823ab481a1', 1, 'Update', 'App\\Models\\Tower', 2, 'App\\Models\\Tower', 2, 'App\\Models\\Tower', 2, '', 'finished', '', '2024-10-10 21:59:07', '2024-10-10 21:59:07', '{\"description_es\":null}', '{\"description_es\":\"Unidades de entrega inmediata\"}'),
(4, '9d368ba0-25b4-447c-b293-58101cc0e3f8', 1, 'Update', 'App\\Models\\Tower', 1, 'App\\Models\\Tower', 1, 'App\\Models\\Tower', 1, '', 'finished', '', '2024-10-10 21:59:23', '2024-10-10 21:59:23', '{\"description_es\":null}', '{\"description_es\":\"Condominio en preventa\"}'),
(5, '9d368bb3-89aa-48ea-9b49-597e7886f6cf', 1, 'Update', 'App\\Models\\Tower', 1, 'App\\Models\\Tower', 1, 'App\\Models\\Tower', 1, '', 'finished', '', '2024-10-10 21:59:35', '2024-10-10 21:59:35', '{\"description_es\":\"Condominio en preventa\"}', '{\"description_es\":\"Condominios en preventa\"}'),
(6, '9d368c0f-f7c8-4e27-a71a-cb8db1d48cab', 1, 'Create', 'App\\Models\\Section', 1, 'App\\Models\\Section', 1, 'App\\Models\\Section', 1, '', 'finished', '', '2024-10-10 22:00:36', '2024-10-10 22:00:36', NULL, '{\"view\":\"Vista al Club H\\u00edpico\",\"tower_id\":2,\"updated_at\":\"2024-10-10T16:00:36.000000Z\",\"created_at\":\"2024-10-10T16:00:36.000000Z\",\"id\":1}'),
(7, '9d368c17-4421-438d-9f74-c5d39f56c348', 1, 'Create', 'App\\Models\\Section', 2, 'App\\Models\\Section', 2, 'App\\Models\\Section', 2, '', 'finished', '', '2024-10-10 22:00:41', '2024-10-10 22:00:41', NULL, '{\"view\":\"Vista a Los Tigres Residencial\",\"tower_id\":2,\"updated_at\":\"2024-10-10T16:00:41.000000Z\",\"created_at\":\"2024-10-10T16:00:41.000000Z\",\"id\":2}'),
(8, '9d368c1c-dae9-4df4-a268-e4e77a238b20', 1, 'Create', 'App\\Models\\Section', 3, 'App\\Models\\Section', 3, 'App\\Models\\Section', 3, '', 'finished', '', '2024-10-10 22:00:44', '2024-10-10 22:00:44', NULL, '{\"view\":\"Vista al Club H\\u00edpico\",\"tower_id\":1,\"updated_at\":\"2024-10-10T16:00:44.000000Z\",\"created_at\":\"2024-10-10T16:00:44.000000Z\",\"id\":3}'),
(9, '9d368c23-fc73-44c6-8478-d0280df78e29', 1, 'Create', 'App\\Models\\Section', 4, 'App\\Models\\Section', 4, 'App\\Models\\Section', 4, '', 'finished', '', '2024-10-10 22:00:49', '2024-10-10 22:00:49', NULL, '{\"view\":\"Vista a Los Tigres Residencial\",\"tower_id\":1,\"updated_at\":\"2024-10-10T16:00:49.000000Z\",\"created_at\":\"2024-10-10T16:00:49.000000Z\",\"id\":4}'),
(10, '9d369a3d-f713-473c-a766-b2e5d216ede5', 1, 'Create', 'App\\Models\\UnitType', 1, 'App\\Models\\UnitType', 1, 'App\\Models\\UnitType', 1, '', 'finished', '', '2024-10-10 16:40:15', '2024-10-10 16:40:15', NULL, '{\"name\":\"1\",\"bedrooms\":\"3\",\"flexrooms\":null,\"bathrooms\":\"3\",\"interior_const\":\"118.79\",\"exterior_const\":\"20.12\",\"updated_at\":\"2024-10-10T16:40:15.000000Z\",\"created_at\":\"2024-10-10T16:40:15.000000Z\",\"id\":1}'),
(11, '9d369a81-5113-4d34-a464-c62f0a55e149', 1, 'Create', 'App\\Models\\UnitType', 2, 'App\\Models\\UnitType', 2, 'App\\Models\\UnitType', 2, '', 'finished', '', '2024-10-10 16:40:59', '2024-10-10 16:40:59', NULL, '{\"name\":\"2\",\"bedrooms\":\"2\",\"flexrooms\":null,\"bathrooms\":\"2.5\",\"interior_const\":\"88.29\",\"exterior_const\":\"19.62\",\"updated_at\":\"2024-10-10T16:40:59.000000Z\",\"created_at\":\"2024-10-10T16:40:59.000000Z\",\"id\":2}'),
(12, '9d369b68-d409-4678-a886-1aa6f17faa0a', 1, 'Create', 'App\\Models\\UnitType', 3, 'App\\Models\\UnitType', 3, 'App\\Models\\UnitType', 3, '', 'finished', '', '2024-10-10 16:43:31', '2024-10-10 16:43:31', NULL, '{\"name\":\"3\",\"bedrooms\":\"2\",\"flexrooms\":null,\"bathrooms\":\"2.5\",\"interior_const\":\"86.24\",\"exterior_const\":\"19.50\",\"updated_at\":\"2024-10-10T16:43:31.000000Z\",\"created_at\":\"2024-10-10T16:43:31.000000Z\",\"id\":3}'),
(13, '9d369bbc-078c-4004-a54c-26fb8a727e91', 1, 'Create', 'App\\Models\\UnitType', 4, 'App\\Models\\UnitType', 4, 'App\\Models\\UnitType', 4, '', 'finished', '', '2024-10-10 16:44:25', '2024-10-10 16:44:25', NULL, '{\"name\":\"4\",\"bedrooms\":\"2\",\"flexrooms\":null,\"bathrooms\":\"2.5\",\"interior_const\":\"86.24\",\"exterior_const\":\"19.50\",\"updated_at\":\"2024-10-10T16:44:25.000000Z\",\"created_at\":\"2024-10-10T16:44:25.000000Z\",\"id\":4}'),
(14, '9d369bfe-2aba-45c0-9499-5cedfa7dc2d9', 1, 'Create', 'App\\Models\\UnitType', 5, 'App\\Models\\UnitType', 5, 'App\\Models\\UnitType', 5, '', 'finished', '', '2024-10-10 16:45:09', '2024-10-10 16:45:09', NULL, '{\"name\":\"5\",\"bedrooms\":\"2\",\"flexrooms\":null,\"bathrooms\":\"2.5\",\"interior_const\":\"88.29\",\"exterior_const\":\"19.62\",\"updated_at\":\"2024-10-10T16:45:09.000000Z\",\"created_at\":\"2024-10-10T16:45:09.000000Z\",\"id\":5}'),
(15, '9d369c3c-e168-47e5-b28e-b46f6df850eb', 1, 'Create', 'App\\Models\\UnitType', 6, 'App\\Models\\UnitType', 6, 'App\\Models\\UnitType', 6, '', 'finished', '', '2024-10-10 16:45:50', '2024-10-10 16:45:50', NULL, '{\"name\":\"6\",\"bedrooms\":\"3\",\"flexrooms\":null,\"bathrooms\":\"3\",\"interior_const\":\"120.71\",\"exterior_const\":\"20.48\",\"updated_at\":\"2024-10-10T16:45:50.000000Z\",\"created_at\":\"2024-10-10T16:45:50.000000Z\",\"id\":6}'),
(16, '9d36a130-8448-44e5-ba47-7785b71602e0', 1, 'Create', 'App\\Models\\UnitType', 7, 'App\\Models\\UnitType', 7, 'App\\Models\\UnitType', 7, '', 'finished', '', '2024-10-10 16:59:41', '2024-10-10 16:59:41', NULL, '{\"name\":\"7\",\"bedrooms\":\"3\",\"flexrooms\":null,\"bathrooms\":\"3\",\"interior_const\":\"120.71\",\"exterior_const\":\"20.48\",\"updated_at\":\"2024-10-10T16:59:41.000000Z\",\"created_at\":\"2024-10-10T16:59:41.000000Z\",\"id\":7}'),
(17, '9d36a19c-fd17-4f26-acf1-ce7a7157c278', 1, 'Create', 'App\\Models\\UnitType', 8, 'App\\Models\\UnitType', 8, 'App\\Models\\UnitType', 8, '', 'finished', '', '2024-10-10 17:00:52', '2024-10-10 17:00:52', NULL, '{\"name\":\"8\",\"bedrooms\":\"2\",\"flexrooms\":null,\"bathrooms\":\"2.5\",\"interior_const\":\"88.29\",\"exterior_const\":\"19.62\",\"updated_at\":\"2024-10-10T17:00:52.000000Z\",\"created_at\":\"2024-10-10T17:00:52.000000Z\",\"id\":8}'),
(18, '9d36a2bd-f690-46a5-8747-d7923d129184', 1, 'Create', 'App\\Models\\UnitType', 9, 'App\\Models\\UnitType', 9, 'App\\Models\\UnitType', 9, '', 'finished', '', '2024-10-10 17:04:01', '2024-10-10 17:04:01', NULL, '{\"name\":\"9\",\"bedrooms\":\"2\",\"flexrooms\":null,\"bathrooms\":\"2.5\",\"interior_const\":\"86.24\",\"exterior_const\":\"19.50\",\"updated_at\":\"2024-10-10T17:04:01.000000Z\",\"created_at\":\"2024-10-10T17:04:01.000000Z\",\"id\":9}'),
(19, '9d36a4cd-3a3b-4f99-9bdb-bbf54d355e85', 1, 'Create', 'App\\Models\\UnitType', 10, 'App\\Models\\UnitType', 10, 'App\\Models\\UnitType', 10, '', 'finished', '', '2024-10-10 17:09:47', '2024-10-10 17:09:47', NULL, '{\"name\":\"10\",\"bedrooms\":\"2\",\"flexrooms\":null,\"bathrooms\":\"2.5\",\"interior_const\":\"86.24\",\"exterior_const\":\"19.5\",\"updated_at\":\"2024-10-10T17:09:47.000000Z\",\"created_at\":\"2024-10-10T17:09:47.000000Z\",\"id\":10}'),
(20, '9d36a4fa-4b3e-47bd-8705-64e5edff125a', 1, 'Create', 'App\\Models\\UnitType', 11, 'App\\Models\\UnitType', 11, 'App\\Models\\UnitType', 11, '', 'finished', '', '2024-10-10 17:10:16', '2024-10-10 17:10:16', NULL, '{\"name\":\"11\",\"bedrooms\":\"2\",\"flexrooms\":null,\"bathrooms\":\"2.5\",\"interior_const\":\"88.29\",\"exterior_const\":\"19.62\",\"updated_at\":\"2024-10-10T17:10:16.000000Z\",\"created_at\":\"2024-10-10T17:10:16.000000Z\",\"id\":11}'),
(21, '9d36a541-2c67-4af0-b5a6-bae2da5ef05e', 1, 'Create', 'App\\Models\\UnitType', 12, 'App\\Models\\UnitType', 12, 'App\\Models\\UnitType', 12, '', 'finished', '', '2024-10-10 17:11:03', '2024-10-10 17:11:03', NULL, '{\"name\":\"12\",\"bedrooms\":\"3\",\"flexrooms\":null,\"bathrooms\":\"3\",\"interior_const\":\"118.79\",\"exterior_const\":\"20.12\",\"updated_at\":\"2024-10-10T17:11:03.000000Z\",\"created_at\":\"2024-10-10T17:11:03.000000Z\",\"id\":12}'),
(22, '9d36aeeb-60e9-407f-b6de-55ad8201bd28', 1, 'Create', 'App\\Models\\Unit', 1, 'App\\Models\\Unit', 1, 'App\\Models\\Unit', 1, '', 'finished', '', '2024-10-10 17:38:04', '2024-10-10 17:38:04', NULL, '{\"name\":\"101\",\"section_id\":2,\"floor\":\"1\",\"price\":\"9295000\",\"currency\":\"MXN\",\"status\":\"Disponible\",\"unit_type_id\":1,\"bedrooms\":\"3\",\"bathrooms\":\"3\",\"interior_const\":\"127.96\",\"exterior_const\":\"27.72\",\"garden\":\"8.35\",\"const_total\":\"199.43\",\"updated_at\":\"2024-10-10T17:38:04.000000Z\",\"created_at\":\"2024-10-10T17:38:04.000000Z\",\"id\":1}'),
(23, '9d36aff0-b9b1-4b0b-a0fa-3050259c49dd', 1, 'Update', 'App\\Models\\Unit', 1, 'App\\Models\\Unit', 1, 'App\\Models\\Unit', 1, '', 'finished', '', '2024-10-10 17:40:55', '2024-10-10 17:40:55', '{\"interior_const\":127.96,\"exterior_const\":27.72,\"parking_area\":null,\"const_total\":199.43}', '{\"interior_const\":\"118.79\",\"exterior_const\":\"20.12\",\"parking_area\":\"35.4\",\"const_total\":\"138.91\"}'),
(24, '9d36bc29-ba9d-4338-8a5a-b0e187bd1063', 1, 'Create', 'App\\Models\\UnitType', 13, 'App\\Models\\UnitType', 13, 'App\\Models\\UnitType', 13, '', 'finished', '', '2024-10-10 18:15:06', '2024-10-10 18:15:06', NULL, '{\"name\":\"7\",\"tower_id\":2,\"bedrooms\":\"3\",\"flexrooms\":null,\"bathrooms\":\"2.5\",\"interior_const\":\"120\",\"exterior_const\":\"30\",\"updated_at\":\"2024-10-10T18:15:06.000000Z\",\"created_at\":\"2024-10-10T18:15:06.000000Z\",\"id\":13}'),
(25, '9d36bc58-8b1a-46f6-a19d-08c00f847b66', 1, 'Create', 'App\\Models\\UnitType', 14, 'App\\Models\\UnitType', 14, 'App\\Models\\UnitType', 14, '', 'finished', '', '2024-10-10 18:15:37', '2024-10-10 18:15:37', NULL, '{\"name\":\"8\",\"tower_id\":2,\"bedrooms\":\"2\",\"flexrooms\":null,\"bathrooms\":\"2\",\"interior_const\":\"93\",\"exterior_const\":\"23\",\"updated_at\":\"2024-10-10T18:15:37.000000Z\",\"created_at\":\"2024-10-10T18:15:37.000000Z\",\"id\":14}'),
(26, '9d36bcd7-a76d-4240-baa1-2855a92d0df0', 1, 'Create', 'App\\Models\\UnitType', 15, 'App\\Models\\UnitType', 15, 'App\\Models\\UnitType', 15, '', 'finished', '', '2024-10-10 18:17:00', '2024-10-10 18:17:00', NULL, '{\"name\":\"9\",\"tower_id\":2,\"bedrooms\":\"2\",\"flexrooms\":null,\"bathrooms\":\"2.5\",\"interior_const\":\"101\",\"exterior_const\":\"21\",\"updated_at\":\"2024-10-10T18:17:00.000000Z\",\"created_at\":\"2024-10-10T18:17:00.000000Z\",\"id\":15}'),
(27, '9d36bd0f-277f-4fb7-b972-a15bd5b9f42b', 1, 'Create', 'App\\Models\\UnitType', 16, 'App\\Models\\UnitType', 16, 'App\\Models\\UnitType', 16, '', 'finished', '', '2024-10-10 18:17:36', '2024-10-10 18:17:36', NULL, '{\"name\":\"10\",\"tower_id\":2,\"bedrooms\":\"2\",\"flexrooms\":null,\"bathrooms\":\"2.5\",\"interior_const\":\"92\",\"exterior_const\":\"18\",\"updated_at\":\"2024-10-10T18:17:36.000000Z\",\"created_at\":\"2024-10-10T18:17:36.000000Z\",\"id\":16}'),
(28, '9d36bd2a-95b9-4a1d-b3d9-d8763e270d51', 1, 'Create', 'App\\Models\\UnitType', 17, 'App\\Models\\UnitType', 17, 'App\\Models\\UnitType', 17, '', 'finished', '', '2024-10-10 18:17:54', '2024-10-10 18:17:54', NULL, '{\"name\":\"11\",\"tower_id\":2,\"bedrooms\":\"2\",\"flexrooms\":null,\"bathrooms\":\"2\",\"interior_const\":\"93\",\"exterior_const\":\"23\",\"updated_at\":\"2024-10-10T18:17:54.000000Z\",\"created_at\":\"2024-10-10T18:17:54.000000Z\",\"id\":17}'),
(29, '9d36bd4a-bd81-4d22-a31d-0afc10d1b1d7', 1, 'Create', 'App\\Models\\UnitType', 18, 'App\\Models\\UnitType', 18, 'App\\Models\\UnitType', 18, '', 'finished', '', '2024-10-10 18:18:15', '2024-10-10 18:18:15', NULL, '{\"name\":\"12\",\"tower_id\":2,\"bedrooms\":\"3\",\"flexrooms\":null,\"bathrooms\":\"2.5\",\"interior_const\":\"146\",\"exterior_const\":\"0\",\"updated_at\":\"2024-10-10T18:18:15.000000Z\",\"created_at\":\"2024-10-10T18:18:15.000000Z\",\"id\":18}'),
(30, '9d41150f-1050-4546-84c0-879242bbd9d5', 1, 'Update', 'App\\Models\\UnitType', 1, 'App\\Models\\UnitType', 1, 'App\\Models\\UnitType', 1, '', 'finished', '', '2024-10-15 21:41:57', '2024-10-15 21:41:57', '[]', '[]'),
(31, '9d4115bb-75f7-4aaf-9b9d-f75c8b931394', 1, 'Update', 'App\\Models\\UnitType', 1, 'App\\Models\\UnitType', 1, 'App\\Models\\UnitType', 1, '', 'finished', '', '2024-10-15 21:43:50', '2024-10-15 21:43:50', '[]', '[]'),
(32, '9d46e50c-7497-4263-b8b4-218be9578d99', 1, 'Update', 'App\\Models\\Unit', 1, 'App\\Models\\Unit', 1, 'App\\Models\\Unit', 1, '', 'finished', '', '2024-10-18 19:02:40', '2024-10-18 19:02:40', '{\"unit_type_id\":1,\"section_id\":2,\"name\":\"101\",\"floor\":1,\"price\":9295000,\"status\":\"Disponible\",\"bathrooms\":3,\"interior_const\":118.79,\"exterior_const\":20.12,\"parking_area\":35.4,\"garden\":8.35,\"const_total\":138.91}', '{\"unit_type_id\":18,\"section_id\":1,\"name\":\"512\",\"floor\":\"5\",\"price\":\"7290000\",\"status\":\"Apartada\",\"bathrooms\":\"2.5\",\"interior_const\":\"146\",\"exterior_const\":\"0\",\"parking_area\":\"31\",\"garden\":\"0\",\"const_total\":\"177\"}'),
(33, '9d46ecbd-3567-47ca-b85a-880055fb37c2', 1, 'Create', 'App\\Models\\Unit', 2, 'App\\Models\\Unit', 2, 'App\\Models\\Unit', 2, '', 'finished', '', '2024-10-18 19:24:10', '2024-10-18 19:24:10', NULL, '{\"name\":\"PH 7\",\"section_id\":1,\"floor\":\"6\",\"price\":\"8230000\",\"currency\":\"MXN\",\"status\":\"Apartada\",\"unit_type_id\":13,\"bedrooms\":\"3\",\"bathrooms\":\"2.5\",\"interior_const\":\"120\",\"exterior_const\":\"30\",\"garden\":null,\"parking_area\":\"32\",\"const_total\":\"182\",\"updated_at\":\"2024-10-18T19:24:10.000000Z\",\"created_at\":\"2024-10-18T19:24:10.000000Z\",\"id\":2}'),
(34, '9d46f040-5429-4a79-b00d-79a84b522d60', 1, 'Create', 'App\\Models\\Unit', 3, 'App\\Models\\Unit', 3, 'App\\Models\\Unit', 3, '', 'finished', '', '2024-10-18 19:34:00', '2024-10-18 19:34:00', NULL, '{\"name\":\"PH 8\",\"section_id\":1,\"floor\":\"6\",\"price\":\"6970000\",\"currency\":\"MXN\",\"status\":\"Disponible\",\"unit_type_id\":14,\"bedrooms\":\"2\",\"bathrooms\":\"2\",\"interior_const\":\"93\",\"exterior_const\":\"23\",\"garden\":null,\"parking_area\":\"33\",\"const_total\":\"149\",\"updated_at\":\"2024-10-18T19:34:00.000000Z\",\"created_at\":\"2024-10-18T19:34:00.000000Z\",\"id\":3}'),
(35, '9d46f201-3f90-4a8b-b87e-32ae5712716a', 1, 'Create', 'App\\Models\\Unit', 4, 'App\\Models\\Unit', 4, 'App\\Models\\Unit', 4, '', 'finished', '', '2024-10-18 19:38:54', '2024-10-18 19:38:54', NULL, '{\"name\":\"PH 9\",\"section_id\":1,\"floor\":\"6\",\"price\":\"7285000\",\"currency\":\"MXN\",\"status\":\"Disponible\",\"unit_type_id\":15,\"bedrooms\":\"2\",\"bathrooms\":\"2.5\",\"interior_const\":\"101\",\"exterior_const\":\"21\",\"garden\":null,\"parking_area\":\"34\",\"const_total\":\"156\",\"updated_at\":\"2024-10-18T19:38:54.000000Z\",\"created_at\":\"2024-10-18T19:38:54.000000Z\",\"id\":4}'),
(36, '9d46f310-8587-482e-84e2-dafaa2f8a92e', 1, 'Create', 'App\\Models\\Unit', 5, 'App\\Models\\Unit', 5, 'App\\Models\\Unit', 5, '', 'finished', '', '2024-10-18 19:41:52', '2024-10-18 19:41:52', NULL, '{\"name\":\"PH 10\",\"section_id\":1,\"floor\":\"6\",\"price\":\"7285000\",\"currency\":\"MXN\",\"status\":\"Disponible\",\"unit_type_id\":16,\"bedrooms\":\"2\",\"bathrooms\":\"2.5\",\"interior_const\":\"101\",\"exterior_const\":\"21\",\"garden\":null,\"parking_area\":\"32\",\"const_total\":\"154\",\"updated_at\":\"2024-10-18T19:41:52.000000Z\",\"created_at\":\"2024-10-18T19:41:52.000000Z\",\"id\":5}'),
(37, '9d46f365-b03b-4d3f-90e9-b78fb9e47841', 1, 'Create', 'App\\Models\\Unit', 6, 'App\\Models\\Unit', 6, 'App\\Models\\Unit', 6, '', 'finished', '', '2024-10-18 19:42:47', '2024-10-18 19:42:47', NULL, '{\"name\":\"PH 11\",\"section_id\":1,\"floor\":\"6\",\"price\":\"6970000\",\"currency\":\"MXN\",\"status\":\"Disponible\",\"unit_type_id\":17,\"bedrooms\":\"2\",\"bathrooms\":\"2\",\"interior_const\":\"93\",\"exterior_const\":\"23\",\"garden\":null,\"parking_area\":\"35\",\"const_total\":\"151\",\"updated_at\":\"2024-10-18T19:42:47.000000Z\",\"created_at\":\"2024-10-18T19:42:47.000000Z\",\"id\":6}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `construction_updates`
--

DROP TABLE IF EXISTS `construction_updates`;
CREATE TABLE `construction_updates` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `description_en` varchar(255) DEFAULT NULL,
  `portrait_path` varchar(255) DEFAULT NULL,
  `video_link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emails`
--

DROP TABLE IF EXISTS `emails`;
CREATE TABLE `emails` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `information`
--

DROP TABLE IF EXISTS `information`;
CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `valid` tinyint(1) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `media`
--

DROP TABLE IF EXISTS `media`;
CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(2, 'App\\Models\\UnitType', 1, '8ea9b555-aac8-43dd-9f9b-5f03848c2fe2', 'blueprints', 'B-101', 'b-101jpg.jpg', 'image/jpeg', 'media', 'media', 438589, '[]', '[]', '{\"thumb\":true,\"medium\":true,\"large\":true}', '[]', 1, '2024-10-15 21:43:50', '2024-10-15 21:43:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `phone`, `content`, `url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Erick Pérez', 'erick@punto401.com', '3221084847', 'Probando', 'http://localhost:8000', '2024-10-14 17:20:40', '2024-10-14 17:20:40', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nova_field_attachments`
--

DROP TABLE IF EXISTS `nova_field_attachments`;
CREATE TABLE `nova_field_attachments` (
  `id` int(10) UNSIGNED NOT NULL,
  `attachable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachable_id` bigint(20) UNSIGNED NOT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nova_notifications`
--

DROP TABLE IF EXISTS `nova_notifications`;
CREATE TABLE `nova_notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nova_pending_field_attachments`
--

DROP TABLE IF EXISTS `nova_pending_field_attachments`;
CREATE TABLE `nova_pending_field_attachments` (
  `id` int(10) UNSIGNED NOT NULL,
  `draft_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('erick@punto401.com', '$2y$12$dfdmJOpygOkSRf1oJie50Owl6cv5Q/k1vnFo/4abTc2xhbGPPWKwC', '2024-10-24 15:38:46'),
('erickalejandropm117@gmail.com', '$2y$12$pYWI/myYngsMA2HGw6jDluIr.sIBzFzxHFtIT5qfSCDyTUUMRgxtG', '2024-10-23 18:45:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payment_plans`
--

DROP TABLE IF EXISTS `payment_plans`;
CREATE TABLE `payment_plans` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `additional_discount` double DEFAULT NULL,
  `down_payment` int(11) NOT NULL,
  `second_payment` int(11) DEFAULT NULL,
  `months_percent` int(11) DEFAULT NULL,
  `closing_payment` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payment_plan_unit`
--

DROP TABLE IF EXISTS `payment_plan_unit`;
CREATE TABLE `payment_plan_unit` (
  `id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `payment_plan_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
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
-- Estructura de tabla para la tabla `private_messages`
--

DROP TABLE IF EXISTS `private_messages`;
CREATE TABLE `private_messages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sections`
--

DROP TABLE IF EXISTS `sections`;
CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `view` varchar(100) DEFAULT NULL,
  `tower_id` int(10) NOT NULL,
  `render_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sections`
--

INSERT INTO `sections` (`id`, `view`, `tower_id`, `render_path`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Vista al Club Hípico', 2, NULL, '2024-10-10 22:00:36', '2024-10-10 22:00:36', NULL),
(2, 'Vista a Los Tigres Residencial', 2, NULL, '2024-10-10 22:00:41', '2024-10-10 22:00:41', NULL),
(3, 'Vista al Club Hípico', 1, NULL, '2024-10-10 22:00:44', '2024-10-10 22:00:44', NULL),
(4, 'Vista a Los Tigres Residencial', 1, NULL, '2024-10-10 22:00:49', '2024-10-10 22:00:49', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shapes`
--

DROP TABLE IF EXISTS `shapes`;
CREATE TABLE `shapes` (
  `id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `points` varchar(255) DEFAULT NULL,
  `text_x` double DEFAULT NULL,
  `text_y` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `towers`
--

DROP TABLE IF EXISTS `towers`;
CREATE TABLE `towers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description_es` varchar(100) DEFAULT NULL,
  `description_en` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `towers`
--

INSERT INTO `towers` (`id`, `name`, `description_es`, `description_en`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Lucca', 'Condominios en preventa', NULL, '2024-10-10 21:27:48', '2024-10-10 21:59:35', NULL),
(2, 'Siena', 'Unidades de entrega inmediata', NULL, '2024-10-10 21:27:51', '2024-10-10 21:59:07', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `units`
--

DROP TABLE IF EXISTS `units`;
CREATE TABLE `units` (
  `id` int(11) NOT NULL,
  `unit_type_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `floor` int(11) NOT NULL,
  `price` double NOT NULL,
  `currency` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `youtube_link` varchar(255) DEFAULT NULL,
  `view_path` varchar(255) DEFAULT NULL,
  `bedrooms` double DEFAULT NULL,
  `bathrooms` double DEFAULT NULL,
  `interior_const` double NOT NULL,
  `exterior_const` double NOT NULL,
  `parking_area` double DEFAULT NULL,
  `garden` double DEFAULT NULL,
  `const_total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `units`
--

INSERT INTO `units` (`id`, `unit_type_id`, `section_id`, `name`, `floor`, `price`, `currency`, `status`, `youtube_link`, `view_path`, `bedrooms`, `bathrooms`, `interior_const`, `exterior_const`, `parking_area`, `garden`, `const_total`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 18, 1, '512', 5, 7290000, 'MXN', 'Apartada', NULL, NULL, 3, 2.5, 146, 0, 31, 0, 177, '2024-10-10 17:38:04', '2024-10-18 19:02:40', NULL),
(2, 13, 1, 'PH 7', 6, 8230000, 'MXN', 'Apartada', NULL, NULL, 3, 2.5, 120, 30, 32, NULL, 182, '2024-10-18 19:24:10', '2024-10-18 19:24:10', NULL),
(3, 14, 1, 'PH 8', 6, 6970000, 'MXN', 'Disponible', NULL, NULL, 2, 2, 93, 23, 33, NULL, 149, '2024-10-18 19:34:00', '2024-10-18 19:34:00', NULL),
(4, 15, 1, 'PH 9', 6, 7285000, 'MXN', 'Disponible', NULL, NULL, 2, 2.5, 101, 21, 34, NULL, 156, '2024-10-18 19:38:54', '2024-10-18 19:38:54', NULL),
(5, 16, 1, 'PH 10', 6, 7285000, 'MXN', 'Disponible', NULL, NULL, 2, 2.5, 101, 21, 32, NULL, 154, '2024-10-18 19:41:52', '2024-10-18 19:41:52', NULL),
(6, 17, 1, 'PH 11', 6, 6970000, 'MXN', 'Disponible', NULL, NULL, 2, 2, 93, 23, 35, NULL, 151, '2024-10-18 19:42:47', '2024-10-18 19:42:47', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unit_types`
--

DROP TABLE IF EXISTS `unit_types`;
CREATE TABLE `unit_types` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `tower_id` int(11) NOT NULL,
  `bedrooms` int(11) NOT NULL,
  `flexrooms` int(11) DEFAULT NULL,
  `bathrooms` double NOT NULL,
  `interior_const` double NOT NULL,
  `parking_spaces` double DEFAULT NULL,
  `exterior_const` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `unit_types`
--

INSERT INTO `unit_types` (`id`, `name`, `tower_id`, `bedrooms`, `flexrooms`, `bathrooms`, `interior_const`, `parking_spaces`, `exterior_const`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', 1, 3, NULL, 3, 118.79, NULL, 20.12, '2024-10-10 16:40:15', '2024-10-10 16:40:15', NULL),
(2, '2', 1, 2, NULL, 2.5, 88.29, NULL, 19.62, '2024-10-10 16:40:59', '2024-10-10 16:40:59', NULL),
(3, '3', 1, 2, NULL, 2.5, 86.24, NULL, 19.5, '2024-10-10 16:43:31', '2024-10-10 16:43:31', NULL),
(4, '4', 1, 2, NULL, 2.5, 86.24, NULL, 19.5, '2024-10-10 16:44:25', '2024-10-10 16:44:25', NULL),
(5, '5', 1, 2, NULL, 2.5, 88.29, NULL, 19.62, '2024-10-10 16:45:09', '2024-10-10 16:45:09', NULL),
(6, '6', 1, 3, NULL, 3, 120.71, NULL, 20.48, '2024-10-10 16:45:50', '2024-10-10 16:45:50', NULL),
(7, '7', 1, 3, NULL, 3, 120.71, NULL, 20.48, '2024-10-10 16:59:41', '2024-10-10 16:59:41', NULL),
(8, '8', 1, 2, NULL, 2.5, 88.29, NULL, 19.62, '2024-10-10 17:00:52', '2024-10-10 17:00:52', NULL),
(9, '9', 1, 2, NULL, 2.5, 86.24, NULL, 19.5, '2024-10-10 17:04:01', '2024-10-10 17:04:01', NULL),
(10, '10', 1, 2, NULL, 2.5, 86.24, NULL, 19.5, '2024-10-10 17:09:47', '2024-10-10 17:09:47', NULL),
(11, '11', 1, 2, NULL, 2.5, 88.29, NULL, 19.62, '2024-10-10 17:10:16', '2024-10-10 17:10:16', NULL),
(12, '12', 1, 3, NULL, 3, 118.79, NULL, 20.12, '2024-10-10 17:11:03', '2024-10-10 17:11:03', NULL),
(13, '7', 2, 3, NULL, 2.5, 120, NULL, 30, '2024-10-10 18:15:06', '2024-10-10 18:15:06', NULL),
(14, '8', 2, 2, NULL, 2, 93, NULL, 23, '2024-10-10 18:15:37', '2024-10-10 18:15:37', NULL),
(15, '9', 2, 2, NULL, 2.5, 101, NULL, 21, '2024-10-10 18:17:00', '2024-10-10 18:17:00', NULL),
(16, '10', 2, 2, NULL, 2.5, 92, NULL, 18, '2024-10-10 18:17:36', '2024-10-10 18:17:36', NULL),
(17, '11', 2, 2, NULL, 2, 93, NULL, 23, '2024-10-10 18:17:54', '2024-10-10 18:17:54', NULL),
(18, '12', 2, 3, NULL, 2.5, 146, NULL, 0, '2024-10-10 18:18:15', '2024-10-10 18:18:15', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unit_user`
--

DROP TABLE IF EXISTS `unit_user`;
CREATE TABLE `unit_user` (
  `id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `unit_user`
--

INSERT INTO `unit_user` (`id`, `unit_id`, `user_id`, `created_at`, `updated_at`) VALUES
(7, 4, 1, NULL, NULL),
(12, 5, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'es',
  `country_code` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'client' COMMENT 'superadmin,admin,agent, client',
  `notes` text COLLATE utf8mb4_unicode_ci,
  `agent_id` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `lang`, `country_code`, `email_verified_at`, `password`, `role`, `notes`, `agent_id`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Erick Pérez Macedo', 'erick@punto401.com', '3221084847', 'es', NULL, NULL, '$2y$12$5q.A/uO8nmueEVcHGFTfMuJ3Ra7LRCC34JAJW45LS11IxzNFuIMfq', 'superadmin', NULL, NULL, 'uojwodXi8fNYUmqszYfyZOSkWksdtAS852z2sVlxVbh2PvPZLTxhbme200yD', '2024-08-28 00:30:14', '2024-10-23 22:03:39', NULL),
(4, 'Erick Pérez', 'erickalejandropm117@gmail.com', '3221084847', 'es', NULL, NULL, '$2y$12$9pYcgo/qJNhq.E/.KOj8/OmOJ73xQ2jyfEjH6upaOy9Eah8T1f0qK', 'client', NULL, NULL, NULL, '2024-10-23 16:44:51', '2024-10-23 16:44:51', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `action_events`
--
ALTER TABLE `action_events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `action_events_actionable_type_actionable_id_index` (`actionable_type`,`actionable_id`),
  ADD KEY `action_events_target_type_target_id_index` (`target_type`,`target_id`),
  ADD KEY `action_events_batch_id_model_type_model_id_index` (`batch_id`,`model_type`,`model_id`),
  ADD KEY `action_events_user_id_index` (`user_id`);

--
-- Indices de la tabla `construction_updates`
--
ALTER TABLE `construction_updates`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agent_id` (`agent_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  ADD KEY `media_order_column_index` (`order_column`);

--
-- Indices de la tabla `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nova_field_attachments`
--
ALTER TABLE `nova_field_attachments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nova_field_attachments_attachable_type_attachable_id_index` (`attachable_type`,`attachable_id`),
  ADD KEY `nova_field_attachments_url_index` (`url`);

--
-- Indices de la tabla `nova_notifications`
--
ALTER TABLE `nova_notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nova_notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indices de la tabla `nova_pending_field_attachments`
--
ALTER TABLE `nova_pending_field_attachments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nova_pending_field_attachments_draft_id_index` (`draft_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `payment_plans`
--
ALTER TABLE `payment_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `payment_plan_unit`
--
ALTER TABLE `payment_plan_unit`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `private_messages`
--
ALTER TABLE `private_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tower_id` (`tower_id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `shapes`
--
ALTER TABLE `shapes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unit_id` (`unit_id`);

--
-- Indices de la tabla `towers`
--
ALTER TABLE `towers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `unit_type_id` (`unit_type_id`),
  ADD KEY `section_id` (`section_id`);

--
-- Indices de la tabla `unit_types`
--
ALTER TABLE `unit_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unit_type_id` (`tower_id`);

--
-- Indices de la tabla `unit_user`
--
ALTER TABLE `unit_user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `agent_id` (`agent_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `action_events`
--
ALTER TABLE `action_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `construction_updates`
--
ALTER TABLE `construction_updates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `nova_field_attachments`
--
ALTER TABLE `nova_field_attachments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `nova_pending_field_attachments`
--
ALTER TABLE `nova_pending_field_attachments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `payment_plans`
--
ALTER TABLE `payment_plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `payment_plan_unit`
--
ALTER TABLE `payment_plan_unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `private_messages`
--
ALTER TABLE `private_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `shapes`
--
ALTER TABLE `shapes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `towers`
--
ALTER TABLE `towers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `units`
--
ALTER TABLE `units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `unit_types`
--
ALTER TABLE `unit_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `unit_user`
--
ALTER TABLE `unit_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

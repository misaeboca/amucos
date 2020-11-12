-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.3.17-MariaDB - MariaDB Server
-- SO del servidor:              Linux
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla amuco_db.aauth_groups
CREATE TABLE IF NOT EXISTS `aauth_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `definition` text DEFAULT NULL,
  `dashboard_page` varchar(250) DEFAULT NULL,
  `enable_two_fa` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.aauth_groups: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `aauth_groups` DISABLE KEYS */;
INSERT INTO `aauth_groups` (`id`, `name`, `definition`, `dashboard_page`, `enable_two_fa`) VALUES
	(1, 'Admin', 'Superadmin Group', NULL, 0),
	(2, 'Public', 'Public Group', NULL, 0),
	(3, 'Default', 'Default Access Group', NULL, 0),
	(4, 'Member', 'Member Access Group', NULL, 0),
	(5, 'Amuco Admin', 'Administrator Amuco', 'administrator/amuco_dashboard_seller', 0),
	(6, 'seller', 'Sales agent', 'administrator/amuco_dashboard_seller', 0),
	(7, 'Amuco Office', 'Office amuco', 'administrator/amuco_dashboard_office', 0);
/*!40000 ALTER TABLE `aauth_groups` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.aauth_group_to_group
CREATE TABLE IF NOT EXISTS `aauth_group_to_group` (
  `group_id` int(11) unsigned NOT NULL,
  `subgroup_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`group_id`,`subgroup_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.aauth_group_to_group: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `aauth_group_to_group` DISABLE KEYS */;
/*!40000 ALTER TABLE `aauth_group_to_group` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.aauth_login_attempts
CREATE TABLE IF NOT EXISTS `aauth_login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(39) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  `login_attempts` tinyint(2) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=123 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.aauth_login_attempts: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `aauth_login_attempts` DISABLE KEYS */;
INSERT INTO `aauth_login_attempts` (`id`, `ip_address`, `timestamp`, `login_attempts`) VALUES
	(14, '162.158.123.143', '2020-06-04 12:56:06', 2),
	(15, '162.158.123.23', '2020-06-04 12:57:56', 3),
	(33, '162.158.122.82', '2020-06-17 14:04:07', 1),
	(40, '162.158.123.241', '2020-06-24 14:01:23', 2),
	(63, '108.162.210.116', '2020-07-13 08:15:26', 1),
	(80, '162.158.123.231', '2020-07-28 17:33:02', 1),
	(92, '108.162.210.116', '2020-08-11 11:41:32', 1),
	(96, '108.162.212.29', '2020-08-18 11:38:38', 1),
	(114, '108.162.237.174', '2020-09-09 11:24:35', 1);
/*!40000 ALTER TABLE `aauth_login_attempts` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.aauth_perms
CREATE TABLE IF NOT EXISTS `aauth_perms` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `definition` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=226 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.aauth_perms: ~183 rows (aproximadamente)
/*!40000 ALTER TABLE `aauth_perms` DISABLE KEYS */;
INSERT INTO `aauth_perms` (`id`, `name`, `definition`) VALUES
	(1, 'menu_dashboard', NULL),
	(2, 'menu_crud_builder', NULL),
	(3, 'menu_api_builder', NULL),
	(4, 'menu_page_builder', NULL),
	(5, 'menu_form_builder', NULL),
	(6, 'menu_menu', NULL),
	(7, 'menu_auth', NULL),
	(8, 'menu_user', NULL),
	(9, 'menu_group', NULL),
	(10, 'menu_access', NULL),
	(11, 'menu_permission', NULL),
	(12, 'menu_api_documentation', NULL),
	(13, 'menu_web_documentation', NULL),
	(14, 'menu_settings', NULL),
	(15, 'user_list', NULL),
	(16, 'user_update_status', NULL),
	(17, 'user_export', NULL),
	(18, 'user_add', NULL),
	(19, 'user_update', NULL),
	(20, 'user_update_profile', NULL),
	(21, 'user_update_password', NULL),
	(22, 'user_profile', NULL),
	(23, 'user_view', NULL),
	(24, 'user_delete', NULL),
	(25, 'blog_list', NULL),
	(26, 'blog_export', NULL),
	(27, 'blog_add', NULL),
	(28, 'blog_update', NULL),
	(29, 'blog_view', NULL),
	(30, 'blog_delete', NULL),
	(31, 'form_list', NULL),
	(32, 'form_export', NULL),
	(33, 'form_add', NULL),
	(34, 'form_update', NULL),
	(35, 'form_view', NULL),
	(36, 'form_manage', NULL),
	(37, 'form_delete', NULL),
	(38, 'crud_list', NULL),
	(39, 'crud_export', NULL),
	(40, 'crud_add', NULL),
	(41, 'crud_update', NULL),
	(42, 'crud_view', NULL),
	(43, 'crud_delete', NULL),
	(44, 'rest_list', NULL),
	(45, 'rest_export', NULL),
	(46, 'rest_add', NULL),
	(47, 'rest_update', NULL),
	(48, 'rest_view', NULL),
	(49, 'rest_delete', NULL),
	(50, 'group_list', NULL),
	(51, 'group_export', NULL),
	(52, 'group_add', NULL),
	(53, 'group_update', NULL),
	(54, 'group_view', NULL),
	(55, 'group_delete', NULL),
	(56, 'permission_list', NULL),
	(57, 'permission_export', NULL),
	(58, 'permission_add', NULL),
	(59, 'permission_update', NULL),
	(60, 'permission_view', NULL),
	(61, 'permission_delete', NULL),
	(62, 'access_list', NULL),
	(63, 'access_add', NULL),
	(64, 'access_update', NULL),
	(65, 'menu_list', NULL),
	(66, 'menu_add', NULL),
	(67, 'menu_update', NULL),
	(68, 'menu_delete', NULL),
	(69, 'menu_save_ordering', NULL),
	(70, 'menu_type_add', NULL),
	(71, 'page_list', NULL),
	(72, 'page_export', NULL),
	(73, 'page_add', NULL),
	(74, 'page_update', NULL),
	(75, 'page_view', NULL),
	(76, 'page_delete', NULL),
	(77, 'blog_list', NULL),
	(78, 'blog_export', NULL),
	(79, 'blog_add', NULL),
	(80, 'blog_update', NULL),
	(81, 'blog_view', NULL),
	(82, 'blog_delete', NULL),
	(83, 'setting', NULL),
	(84, 'setting_update', NULL),
	(85, 'dashboard', NULL),
	(86, 'extension_list', NULL),
	(87, 'extension_activate', NULL),
	(88, 'extension_deactivate', NULL),
	(89, 'menu_amuco', ''),
	(90, 'menu_customers_dashboard', ''),
	(91, 'menu_customers', ''),
	(92, 'menu_credit_insurance', ''),
	(93, 'menu_contacts', ''),
	(94, 'menu_samples', ''),
	(95, 'menu_visits', ''),
	(96, 'menu_suppliers', ''),
	(97, 'menu_products', ''),
	(98, 'menu_product_categories', ''),
	(99, 'menu_type', ''),
	(100, 'menu_industries', ''),
	(101, 'amuco_contacts_list', ''),
	(102, 'amuco_customers_list', ''),
	(103, 'amuco_samples_list', ''),
	(104, 'amuco_visits_list', ''),
	(105, 'amuco_products_list', ''),
	(106, 'amuco_industry_type_list', ''),
	(107, 'amuco_unit_types_list', ''),
	(108, 'menu_type_units', ''),
	(109, 'amuco_suppliers_list', ''),
	(110, 'amuco_credit_insurance_list', ''),
	(111, 'amuco_customers_add', ''),
	(112, 'amuco_category_product_list', ''),
	(113, 'amuco_industry_type_add', ''),
	(114, 'amuco_unit_types_add', ''),
	(115, 'amuco_category_product_add', ''),
	(116, 'amuco_products_add', ''),
	(117, 'amuco_suppliers_add', ''),
	(118, 'amuco_suppliers_view', ''),
	(119, 'amuco_customers_view', ''),
	(120, 'amuco_contacts_view', ''),
	(121, 'amuco_samples_view', ''),
	(122, 'amuco_credit_insurance_view', ''),
	(123, 'amuco_credit_insurance_update', ''),
	(124, 'amuco_customers_update', ''),
	(125, 'amuco_customers_delete', ''),
	(126, 'amuco_samples_update', ''),
	(127, 'amuco_samples_delete', ''),
	(128, 'amuco_contacts_update', ''),
	(129, 'amuco_contacts_delete', ''),
	(130, 'amuco_suppliers_update', ''),
	(131, 'amuco_suppliers_delete', ''),
	(132, 'amuco_products_view', ''),
	(133, 'amuco_products_update', ''),
	(134, 'amuco_industry_type_view', ''),
	(135, 'amuco_industry_type_update', ''),
	(136, 'amuco_unit_types_view', ''),
	(137, 'amuco_unit_types_update', ''),
	(138, 'amuco_credit_insurance_delete', ''),
	(139, 'amuco_visits_view', 'amuco_visits_view'),
	(140, 'amuco_unit_types_delete', ''),
	(141, 'amuco_credit_insurance_add', ''),
	(142, 'amuco_samples_add', ''),
	(143, 'amuco_category_product_view', ''),
	(144, 'amuco_contacts_add', ''),
	(145, 'amuco_visits_add', ''),
	(146, 'menu_blog', ''),
	(147, 'menu_other', ''),
	(148, 'menu_extension', ''),
	(149, 'amuco_credit_insurance_export', ''),
	(150, 'amuco_incoterm_add', ''),
	(151, 'amuco_incoterm_update', ''),
	(152, 'amuco_incoterm_view', ''),
	(153, 'amuco_incoterm_delete', ''),
	(154, 'amuco_incoterm_list', ''),
	(155, 'menu_incoterm', ''),
	(156, 'menu_destination_port', ''),
	(157, 'menu_csutomers_requests', ''),
	(158, 'menu_create_quotation_request', ''),
	(159, 'menu_customers_requests', ''),
	(160, 'amuco_customer_request_add', ''),
	(161, 'amuco_destination_port_list', ''),
	(162, 'amuco_destination_port_add', ''),
	(163, 'amuco_destination_port_view', ''),
	(164, 'amuco_destination_port_update', ''),
	(165, 'amuco_customer_request_view', ''),
	(166, 'menu_list_customers_requests', ''),
	(167, 'amuco_customer_request_list', ''),
	(168, 'amuco_customer_request_update', ''),
	(169, 'amuco_request_customers_add', ''),
	(170, 'amuco_request_customers_list', ''),
	(171, 'amuco_request_customers_view', ''),
	(172, 'menu_china_offering', ''),
	(173, 'menu_new_requests_received', ''),
	(174, 'amuco_requests_china_list', ''),
	(175, 'amuco_details_customers_request_add', ''),
	(176, 'amuco_requests_china_update', ''),
	(177, 'amuco_customer_request_delete', ''),
	(178, 'amuco_request_customers_delete', ''),
	(179, 'amuco_category_product_update', ''),
	(180, 'amuco_category_product_delete', ''),
	(181, 'menu_purchasing_office', ''),
	(182, 'amuco_purchasing_office_list', ''),
	(183, 'amuco_purchasing_office_add', ''),
	(184, 'amuco_purchasing_office_view', ''),
	(185, 'amuco_purchasing_office_update', ''),
	(186, 'amuco_purchasing_office_delete', ''),
	(187, 'amuco_products_delete', ''),
	(188, 'amuco_suppliers_bank_add', ''),
	(189, 'amuco_suppliers_bank_view', ''),
	(190, 'amuco_visits_update', ''),
	(191, 'amuco_suppliers_bank_update', ''),
	(192, 'amuco_suppliers_bank_delete', ''),
	(193, 'amuco_visits_delete', ''),
	(194, 'amuco_destination_port_delete', ''),
	(195, 'amuco_classification_suppliers_list', ''),
	(196, 'menu_suppliers_classification', ''),
	(197, 'amuco_classification_suppliers_delete', ''),
	(198, 'amuco_classification_suppliers_update', ''),
	(199, 'amuco_details_customers_request_view', ''),
	(200, 'amuco_details_customers_request_update', ''),
	(201, 'menu_offers', ''),
	(202, 'menu_office_offers', ''),
	(203, 'menu_pending_requests', ''),
	(204, 'amuco_packing_add', ''),
	(205, 'amuco_material_add', ''),
	(206, 'amuco_material_list', ''),
	(207, 'amuco_material_update', ''),
	(208, 'amuco_packing_list', ''),
	(209, 'amuco_packing_update', ''),
	(210, 'extension_add', ''),
	(211, 'amuco_details_customers_request_delete', ''),
	(212, 'amuco_details_request_office_list', ''),
	(213, 'amuco_details_request_office_add', ''),
	(214, 'amuco_payments_terms_suppliers_list', ''),
	(215, 'amuco_payments_terms_suppliers_add', ''),
	(216, 'amuco_details_request_office_view', ''),
	(217, 'amuco_details_request_office_update', ''),
	(218, 'menu_list_quotation_requests', ''),
	(219, 'menu_list_quotation_pending', ''),
	(220, 'menu_list_quotation_requested', ''),
	(221, 'menu_list_customer_quot._requests', ''),
	(222, 'amuco_price_calculator_list', ''),
	(223, 'menu_calculator', ''),
	(224, 'menu_price_calculator', ''),
	(225, 'amuco_offers_sent_customers_add', '');
/*!40000 ALTER TABLE `aauth_perms` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.aauth_perm_to_group
CREATE TABLE IF NOT EXISTS `aauth_perm_to_group` (
  `perm_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.aauth_perm_to_group: ~413 rows (aproximadamente)
/*!40000 ALTER TABLE `aauth_perm_to_group` DISABLE KEYS */;
INSERT INTO `aauth_perm_to_group` (`perm_id`, `group_id`) VALUES
	(173, 0),
	(85, 4),
	(2, 1),
	(89, 1),
	(90, 1),
	(91, 1),
	(92, 1),
	(93, 1),
	(94, 1),
	(95, 1),
	(96, 1),
	(97, 1),
	(98, 1),
	(100, 1),
	(108, 1),
	(146, 1),
	(147, 1),
	(148, 1),
	(155, 1),
	(156, 1),
	(157, 1),
	(158, 1),
	(159, 1),
	(166, 1),
	(172, 1),
	(173, 1),
	(181, 1),
	(101, 1),
	(102, 1),
	(103, 1),
	(104, 1),
	(105, 1),
	(106, 1),
	(107, 1),
	(109, 1),
	(110, 1),
	(111, 1),
	(112, 1),
	(113, 1),
	(114, 1),
	(115, 1),
	(116, 1),
	(117, 1),
	(118, 1),
	(119, 1),
	(120, 1),
	(121, 1),
	(122, 1),
	(123, 1),
	(124, 1),
	(125, 1),
	(126, 1),
	(127, 1),
	(128, 1),
	(129, 1),
	(130, 1),
	(131, 1),
	(132, 1),
	(133, 1),
	(134, 1),
	(135, 1),
	(136, 1),
	(137, 1),
	(138, 1),
	(139, 1),
	(140, 1),
	(141, 1),
	(142, 1),
	(143, 1),
	(144, 1),
	(145, 1),
	(149, 1),
	(150, 1),
	(151, 1),
	(152, 1),
	(153, 1),
	(154, 1),
	(160, 1),
	(161, 1),
	(162, 1),
	(163, 1),
	(164, 1),
	(165, 1),
	(167, 1),
	(168, 1),
	(169, 1),
	(170, 1),
	(171, 1),
	(174, 1),
	(175, 1),
	(176, 1),
	(177, 1),
	(178, 1),
	(179, 1),
	(180, 1),
	(182, 1),
	(183, 1),
	(184, 1),
	(185, 1),
	(186, 1),
	(187, 1),
	(188, 1),
	(189, 1),
	(190, 1),
	(191, 1),
	(192, 1),
	(193, 1),
	(194, 1),
	(195, 1),
	(197, 1),
	(198, 1),
	(199, 1),
	(200, 1),
	(204, 1),
	(205, 1),
	(206, 1),
	(207, 1),
	(208, 1),
	(209, 1),
	(211, 1),
	(212, 1),
	(213, 1),
	(1, 7),
	(173, 7),
	(201, 7),
	(202, 7),
	(85, 7),
	(165, 7),
	(167, 7),
	(168, 7),
	(199, 7),
	(200, 7),
	(212, 7),
	(213, 7),
	(203, 7),
	(224, 1),
	(224, 7),
	(1, 6),
	(89, 6),
	(90, 6),
	(91, 6),
	(92, 6),
	(93, 6),
	(94, 6),
	(95, 6),
	(96, 6),
	(97, 6),
	(98, 6),
	(100, 6),
	(108, 6),
	(155, 6),
	(156, 6),
	(157, 6),
	(158, 6),
	(159, 6),
	(166, 6),
	(172, 6),
	(173, 6),
	(181, 6),
	(218, 6),
	(219, 6),
	(221, 6),
	(223, 6),
	(224, 6),
	(19, 6),
	(22, 6),
	(23, 6),
	(83, 6),
	(84, 6),
	(85, 6),
	(101, 6),
	(102, 6),
	(103, 6),
	(104, 6),
	(105, 6),
	(106, 6),
	(107, 6),
	(109, 6),
	(110, 6),
	(111, 6),
	(112, 6),
	(113, 6),
	(114, 6),
	(115, 6),
	(116, 6),
	(117, 6),
	(118, 6),
	(119, 6),
	(120, 6),
	(121, 6),
	(122, 6),
	(123, 6),
	(124, 6),
	(125, 6),
	(126, 6),
	(127, 6),
	(128, 6),
	(129, 6),
	(130, 6),
	(131, 6),
	(132, 6),
	(133, 6),
	(134, 6),
	(135, 6),
	(136, 6),
	(137, 6),
	(138, 6),
	(139, 6),
	(140, 6),
	(141, 6),
	(142, 6),
	(143, 6),
	(144, 6),
	(145, 6),
	(150, 6),
	(151, 6),
	(152, 6),
	(153, 6),
	(154, 6),
	(160, 6),
	(161, 6),
	(162, 6),
	(163, 6),
	(164, 6),
	(165, 6),
	(167, 6),
	(168, 6),
	(169, 6),
	(170, 6),
	(171, 6),
	(174, 6),
	(175, 6),
	(176, 6),
	(177, 6),
	(178, 6),
	(179, 6),
	(180, 6),
	(182, 6),
	(183, 6),
	(184, 6),
	(185, 6),
	(186, 6),
	(187, 6),
	(188, 6),
	(189, 6),
	(190, 6),
	(191, 6),
	(192, 6),
	(193, 6),
	(194, 6),
	(195, 6),
	(197, 6),
	(198, 6),
	(199, 6),
	(200, 6),
	(204, 6),
	(205, 6),
	(206, 6),
	(207, 6),
	(208, 6),
	(209, 6),
	(211, 6),
	(212, 6),
	(213, 6),
	(214, 6),
	(215, 6),
	(216, 6),
	(217, 6),
	(222, 6),
	(225, 6),
	(1, 5),
	(7, 5),
	(8, 5),
	(9, 5),
	(11, 5),
	(89, 5),
	(90, 5),
	(91, 5),
	(92, 5),
	(93, 5),
	(94, 5),
	(95, 5),
	(96, 5),
	(97, 5),
	(98, 5),
	(100, 5),
	(108, 5),
	(155, 5),
	(156, 5),
	(157, 5),
	(158, 5),
	(159, 5),
	(166, 5),
	(172, 5),
	(173, 5),
	(181, 5),
	(196, 5),
	(218, 5),
	(219, 5),
	(220, 5),
	(221, 5),
	(223, 5),
	(224, 5),
	(15, 5),
	(16, 5),
	(18, 5),
	(19, 5),
	(20, 5),
	(22, 5),
	(23, 5),
	(24, 5),
	(85, 5),
	(101, 5),
	(102, 5),
	(103, 5),
	(104, 5),
	(105, 5),
	(106, 5),
	(107, 5),
	(109, 5),
	(110, 5),
	(111, 5),
	(112, 5),
	(113, 5),
	(114, 5),
	(115, 5),
	(116, 5),
	(117, 5),
	(118, 5),
	(119, 5),
	(120, 5),
	(121, 5),
	(122, 5),
	(123, 5),
	(124, 5),
	(125, 5),
	(126, 5),
	(127, 5),
	(128, 5),
	(129, 5),
	(130, 5),
	(131, 5),
	(132, 5),
	(133, 5),
	(134, 5),
	(135, 5),
	(136, 5),
	(137, 5),
	(138, 5),
	(139, 5),
	(140, 5),
	(141, 5),
	(142, 5),
	(143, 5),
	(144, 5),
	(145, 5),
	(149, 5),
	(150, 5),
	(151, 5),
	(152, 5),
	(153, 5),
	(154, 5),
	(160, 5),
	(161, 5),
	(162, 5),
	(163, 5),
	(164, 5),
	(165, 5),
	(167, 5),
	(168, 5),
	(169, 5),
	(170, 5),
	(171, 5),
	(174, 5),
	(175, 5),
	(176, 5),
	(177, 5),
	(178, 5),
	(179, 5),
	(180, 5),
	(182, 5),
	(183, 5),
	(184, 5),
	(185, 5),
	(186, 5),
	(187, 5),
	(188, 5),
	(189, 5),
	(190, 5),
	(191, 5),
	(192, 5),
	(193, 5),
	(194, 5),
	(195, 5),
	(197, 5),
	(198, 5),
	(199, 5),
	(200, 5),
	(204, 5),
	(205, 5),
	(206, 5),
	(207, 5),
	(208, 5),
	(209, 5),
	(211, 5),
	(212, 5),
	(213, 5),
	(214, 5),
	(215, 5),
	(216, 5),
	(217, 5),
	(222, 5),
	(225, 5);
/*!40000 ALTER TABLE `aauth_perm_to_group` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.aauth_perm_to_user
CREATE TABLE IF NOT EXISTS `aauth_perm_to_user` (
  `perm_id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`perm_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.aauth_perm_to_user: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `aauth_perm_to_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `aauth_perm_to_user` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.aauth_pms
CREATE TABLE IF NOT EXISTS `aauth_pms` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sender_id` int(11) unsigned NOT NULL,
  `receiver_id` int(11) unsigned NOT NULL,
  `title` varchar(225) NOT NULL,
  `message` text DEFAULT NULL,
  `date_sent` datetime DEFAULT NULL,
  `date_read` datetime DEFAULT NULL,
  `pm_deleted_sender` int(1) DEFAULT NULL,
  `pm_deleted_receiver` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.aauth_pms: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `aauth_pms` DISABLE KEYS */;
/*!40000 ALTER TABLE `aauth_pms` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.aauth_user
CREATE TABLE IF NOT EXISTS `aauth_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `definition` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.aauth_user: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `aauth_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `aauth_user` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.aauth_users
CREATE TABLE IF NOT EXISTS `aauth_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `oauth_uid` text DEFAULT NULL,
  `oauth_provider` varchar(100) DEFAULT NULL,
  `pass` varchar(64) NOT NULL,
  `username` varchar(100) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `avatar` text NOT NULL,
  `banned` tinyint(1) DEFAULT 0,
  `last_login` datetime DEFAULT NULL,
  `last_activity` datetime DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `forgot_exp` text DEFAULT NULL,
  `remember_time` datetime DEFAULT NULL,
  `remember_exp` text DEFAULT NULL,
  `verification_code` text DEFAULT NULL,
  `totp_secret` varchar(16) DEFAULT NULL,
  `ip_address` text DEFAULT NULL,
  `enable_two_fa` int(1) NOT NULL,
  `verification_email_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.aauth_users: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `aauth_users` DISABLE KEYS */;
INSERT INTO `aauth_users` (`id`, `email`, `oauth_uid`, `oauth_provider`, `pass`, `username`, `full_name`, `avatar`, `banned`, `last_login`, `last_activity`, `date_created`, `forgot_exp`, `remember_time`, `remember_exp`, `verification_code`, `totp_secret`, `ip_address`, `enable_two_fa`, `verification_email_date`) VALUES
	(1, 'oscar@ztgroupcorp.com', NULL, NULL, '59c6d64df889f0de8384b52dda34dd45e51391305c91afbc75b3a92cab629f46', 'oscar', 'oscar', '', 0, '2020-09-01 17:42:08', '2020-09-01 17:42:08', '2020-05-30 20:17:16', NULL, NULL, NULL, NULL, NULL, '162.158.122.250', 0, NULL),
	(2, 'juan@ztgroupcorp.com', NULL, NULL, '55947e638b69b8faa760eeeddaef752f188bf0bb1651292c425100dca6216e73', 'juan', 'Juan Vargas', 'default.png', 0, '2020-09-09 11:33:41', '2020-09-09 11:33:41', '2020-05-31 03:19:57', NULL, NULL, NULL, NULL, NULL, '108.162.210.104', 0, NULL),
	(3, 'seller1_amuco@yopmail.com', NULL, NULL, '61ae1954dc6f92ab42660fc7b391ac194c04a905774f9e34960878c5f8e7683f', 'seller1', 'Seller First', '20200604160258-letters-2077226_640.png', 0, '2020-09-10 11:44:34', '2020-09-10 11:44:34', '2020-06-01 09:56:35', NULL, '2020-07-24 00:00:00', 'q4Ugfr9WeO5ojpRm', NULL, NULL, '108.162.212.29', 0, NULL),
	(4, 'amuco_admin@yopmail.com', NULL, NULL, '3080344ac0118f116e8189ff69c66cde606f29e00013cb4351eba8ce9d4dad41', 'Admin', 'Admin Amuco', '20200604145649-letters-2077226_640.png', 0, '2020-06-26 12:15:01', '2020-06-26 12:15:01', '2020-06-01 09:58:06', NULL, NULL, NULL, NULL, NULL, '108.162.210.134', 0, NULL),
	(5, 'elisa@ztgroupcorp.com', NULL, NULL, '81d692d7c8898340507135a2ea7b4f166ea22e355ff99e93e4d54f173c55e6a4', 'elisa', 'Elisa Zozaya', 'default.png', 0, '2020-09-11 09:47:04', '2020-09-11 09:47:04', '2020-06-04 15:41:39', NULL, NULL, NULL, NULL, NULL, '108.162.210.172', 0, NULL),
	(6, 'laura.monsalve@amucoinc.com', NULL, NULL, '68882f86b63e52343238a5f7820f500cd5310f0829b9163ab16350e013dc3c06', 'Laura', 'Laura Molsalve', 'default.png', 0, '2020-09-10 12:02:32', '2020-09-10 12:02:32', '2020-07-08 10:02:13', NULL, '2020-08-29 00:00:00', 'TZ8XMWYIgQh4ayie', NULL, NULL, '162.158.186.94', 0, NULL),
	(7, 'office@yopmail.com', NULL, NULL, '39c2111450e9d1e736ca202430376280b7df2e2b1b13f779d64ed6da6c655220', 'Office', 'Office', 'default.png', 0, '2020-08-11 09:31:36', '2020-08-11 09:31:36', '2020-07-23 18:21:43', NULL, NULL, NULL, NULL, NULL, '108.162.210.234', 0, NULL),
	(8, 'oscarh2485@gmail.com', NULL, NULL, 'b3895740fe9f56428682705662dfac6f2587d68da601fb3b8606a81843142e1a', 'oscarh2485', 'Oscar', 'default.png', 0, '2020-08-21 16:15:50', '2020-08-21 16:15:50', '2020-08-21 16:05:04', NULL, NULL, NULL, NULL, NULL, '108.162.210.158', 0, NULL);
/*!40000 ALTER TABLE `aauth_users` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.aauth_user_to_group
CREATE TABLE IF NOT EXISTS `aauth_user_to_group` (
  `user_id` int(11) unsigned NOT NULL,
  `group_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.aauth_user_to_group: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `aauth_user_to_group` DISABLE KEYS */;
INSERT INTO `aauth_user_to_group` (`user_id`, `group_id`) VALUES
	(1, 1),
	(2, 1),
	(3, 6),
	(4, 5),
	(5, 6),
	(6, 6),
	(7, 7),
	(8, 6);
/*!40000 ALTER TABLE `aauth_user_to_group` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.aauth_user_variables
CREATE TABLE IF NOT EXISTS `aauth_user_variables` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `data_key` varchar(100) NOT NULL,
  `value` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.aauth_user_variables: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `aauth_user_variables` DISABLE KEYS */;
/*!40000 ALTER TABLE `aauth_user_variables` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.amuco_category_product
CREATE TABLE IF NOT EXISTS `amuco_category_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `description` varchar(250) CHARACTER SET latin1 NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1,
  `parent_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.amuco_category_product: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `amuco_category_product` DISABLE KEYS */;
INSERT INTO `amuco_category_product` (`id`, `name`, `description`, `active`, `parent_id`) VALUES
	(9, 'Category 1', 'category first', 1, 0),
	(10, 'Category 2', 'category Second', 1, 9),
	(11, 'Category 3', 'Category third', 1, 10),
	(13, 'Categoria 4', 'categoria fourth', 1, 11),
	(14, 'PROTEINS', 'Protein Food Grade', 1, 9);
/*!40000 ALTER TABLE `amuco_category_product` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.amuco_classification_suppliers
CREATE TABLE IF NOT EXISTS `amuco_classification_suppliers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla amuco_db.amuco_classification_suppliers: 2 rows
/*!40000 ALTER TABLE `amuco_classification_suppliers` DISABLE KEYS */;
INSERT INTO `amuco_classification_suppliers` (`id`, `name`, `description`, `active`) VALUES
	(5, 'Direct Supplier', '', 1),
	(6, 'Purchasing Office', '', 1);
/*!40000 ALTER TABLE `amuco_classification_suppliers` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.amuco_contacts
CREATE TABLE IF NOT EXISTS `amuco_contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type_contact` varchar(10) NOT NULL,
  `date_updated` timestamp NULL DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `name` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `department` varchar(100) DEFAULT NULL,
  `mobile_phone` varchar(30) NOT NULL,
  `office_phone` varchar(30) NOT NULL,
  `personal_phone` varchar(30) NOT NULL,
  `fax` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `skype` varchar(100) NOT NULL,
  `line_products` varchar(100) NOT NULL,
  `customer_id` int(10) unsigned DEFAULT NULL,
  `supplier_id` int(10) unsigned DEFAULT NULL,
  `picture` varchar(250) NOT NULL,
  `home_address` varchar(250) NOT NULL,
  `country` int(10) unsigned NOT NULL,
  `city` varchar(100) NOT NULL,
  `home_phone` varchar(30) NOT NULL,
  `birthday` datetime NOT NULL,
  `additional_information` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `customer_id` (`customer_id`),
  KEY `supplier_id` (`supplier_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla amuco_db.amuco_contacts: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `amuco_contacts` DISABLE KEYS */;
INSERT INTO `amuco_contacts` (`id`, `type_contact`, `date_updated`, `date_created`, `active`, `name`, `first_name`, `last_name`, `position`, `department`, `mobile_phone`, `office_phone`, `personal_phone`, `fax`, `email`, `skype`, `line_products`, `customer_id`, `supplier_id`, `picture`, `home_address`, `country`, `city`, `home_phone`, `birthday`, `additional_information`) VALUES
	(1, 'Supplier', NULL, '2020-07-03 13:25:24', 1, 'pedro perez', 'pedro', 'perez', '', '', '54654645465', '', '', '', 'pp@yopmail.com', '', '', NULL, 4, '', '', 2, '', '', '0000-00-00 00:00:00', ''),
	(2, 'Customer', '2020-07-10 09:33:57', '2020-07-03 13:26:27', 1, 'Anibal Rojas', 'Anibal', 'Rojas', 'Comprados', 'Comercial', '+56 9 9679 2968', '', '', '', 'anibal.rojas@coce.cl', 'anibal_rojasep', '', 7, 0, '', '', 46, 'Santiago de Chile', '', '0000-00-00 00:00:00', ''),
	(3, 'Customer', '2020-07-10 10:24:02', '2020-07-09 10:55:59', 1, 'Marco Parada', 'Marco', 'Parada', 'Documentación Logística', NULL, 'xxx', '', '', '', 'marco.parada@coce.cl', '', '2', 7, NULL, '', 'calle las ursulina', 46, 'Santiago de Chile', '', '0000-00-00 00:00:00', ''),
	(4, 'Customer', '2020-07-21 09:28:45', '2020-07-14 10:54:34', 1, 'Zoila Bazalar palacin', 'Zoila', 'Bazalar palacin', 'Jefe de compras e importaciones', '', '+511 9352 7439', '+511 349 7788 Ext. 110', '', '', 'zbazalar@dresdenfi.com', '', '', 6, NULL, '', '', 173, 'Lima', '', '0000-00-00 00:00:00', ''),
	(5, 'Customer', '2020-07-21 09:16:57', '2020-07-15 08:33:35', 1, 'Roberto Valdebenito', 'Roberto', 'Valdebenito', 'Jefe de comercio exterior', '', '+56 9 9801 8151', '+56 2 2437 0950', '', '', 'rvaldebenito@traverso.cl', '', '', 9, NULL, '', '', 46, 'Santiago de chile', '', '0000-00-00 00:00:00', ''),
	(6, 'Customer', NULL, '2020-07-21 09:21:16', 1, 'Mariela Garcia', 'Mariela', 'Garcia', '', 'Compras', '+511 955 094 152', '', '', '', 'marielag@frutarom.com', '', '', 8, NULL, '', '', 173, 'Lima', '', '0000-00-00 00:00:00', ''),
	(7, 'Supplier', NULL, '2020-07-21 09:33:14', 1, 'Jose Perez', 'Jose', 'Perez', '', '', '+587195666', '', '', '', 'perez@yopmail.com', '', '', NULL, 6, '', '', 232, '', '', '0000-00-00 00:00:00', ''),
	(8, 'Customer', NULL, '2020-08-27 09:57:48', 1, 'Pedro Perez', 'Pedro', 'Perez', '', '', '4565465465', '', '', '', 'pp@yopmail.com', '', '', 6, NULL, '', '', 2, '', '', '2020-10-27 00:00:00', ''),
	(9, 'Supplier', NULL, '2020-08-27 09:59:22', 1, 'Ronaldo De lima', 'Ronaldo', 'De lima', '', '', '5465465', '', '', '', 'rn@yopmail.com', '', '', NULL, 5, '', '', 33, '', '', '0000-00-00 00:00:00', ''),
	(10, 'Customer', NULL, '2020-09-10 11:35:16', 1, 'Camila Pezo', 'Camila', 'Pezo', 'Compras', 'Compras', '+511 93302276', '', '', '', 'cpezo@frutarom.com', '', '', 8, NULL, '', '', 173, '', '', '0000-00-00 00:00:00', ''),
	(11, 'Supplier', NULL, '2020-09-10 11:43:11', 1, 'Manuel Garcia', 'Manuel', 'Garcia', 'Commercial manager', 'Ventas', '+89 3458902', '', '', '', 'manuelgarcia@yopmail.com', '', '', NULL, 9, '', '', 47, '', '', '0000-00-00 00:00:00', '');
/*!40000 ALTER TABLE `amuco_contacts` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.amuco_countries
CREATE TABLE IF NOT EXISTS `amuco_countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iso` char(2) CHARACTER SET latin1 DEFAULT NULL,
  `name` varchar(80) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=241 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.amuco_countries: ~240 rows (aproximadamente)
/*!40000 ALTER TABLE `amuco_countries` DISABLE KEYS */;
INSERT INTO `amuco_countries` (`id`, `iso`, `name`) VALUES
	(1, 'AF', 'Afganistán'),
	(2, 'AX', 'Islas Gland'),
	(3, 'AL', 'Albania'),
	(4, 'DE', 'Alemania'),
	(5, 'AD', 'Andorra'),
	(6, 'AO', 'Angola'),
	(7, 'AI', 'Anguilla'),
	(8, 'AQ', 'Antártida'),
	(9, 'AG', 'Antigua y Barbuda'),
	(10, 'AN', 'Antillas Holandesas'),
	(11, 'SA', 'Arabia Saudí'),
	(12, 'DZ', 'Argelia'),
	(13, 'AR', 'Argentina'),
	(14, 'AM', 'Armenia'),
	(15, 'AW', 'Aruba'),
	(16, 'AU', 'Australia'),
	(17, 'AT', 'Austria'),
	(18, 'AZ', 'Azerbaiyán'),
	(19, 'BS', 'Bahamas'),
	(20, 'BH', 'Bahréin'),
	(21, 'BD', 'Bangladesh'),
	(22, 'BB', 'Barbados'),
	(23, 'BY', 'Bielorrusia'),
	(24, 'BE', 'Bélgica'),
	(25, 'BZ', 'Belice'),
	(26, 'BJ', 'Benin'),
	(27, 'BM', 'Bermudas'),
	(28, 'BT', 'Bhután'),
	(29, 'BO', 'Bolivia'),
	(30, 'BA', 'Bosnia y Herzegovina'),
	(31, 'BW', 'Botsuana'),
	(32, 'BV', 'Isla Bouvet'),
	(33, 'BR', 'Brasil'),
	(34, 'BN', 'Brunéi'),
	(35, 'BG', 'Bulgaria'),
	(36, 'BF', 'Burkina Faso'),
	(37, 'BI', 'Burundi'),
	(38, 'CV', 'Cabo Verde'),
	(39, 'KY', 'Islas Caimán'),
	(40, 'KH', 'Camboya'),
	(41, 'CM', 'Camerún'),
	(42, 'CA', 'Canadá'),
	(43, 'CF', 'República Centroafricana'),
	(44, 'TD', 'Chad'),
	(45, 'CZ', 'República Checa'),
	(46, 'CL', 'Chile'),
	(47, 'CN', 'China'),
	(48, 'CY', 'Chipre'),
	(49, 'CX', 'Isla de Navidad'),
	(50, 'VA', 'Ciudad del Vaticano'),
	(51, 'CC', 'Islas Cocos'),
	(52, 'CO', 'Colombia'),
	(53, 'KM', 'Comoras'),
	(54, 'CD', 'República Democrática del Congo'),
	(55, 'CG', 'Congo'),
	(56, 'CK', 'Islas Cook'),
	(57, 'KP', 'Corea del Norte'),
	(58, 'KR', 'Corea del Sur'),
	(59, 'CI', 'Costa de Marfil'),
	(60, 'CR', 'Costa Rica'),
	(61, 'HR', 'Croacia'),
	(62, 'CU', 'Cuba'),
	(63, 'DK', 'Dinamarca'),
	(64, 'DM', 'Dominica'),
	(65, 'DO', 'República Dominicana'),
	(66, 'EC', 'Ecuador'),
	(67, 'EG', 'Egipto'),
	(68, 'SV', 'El Salvador'),
	(69, 'AE', 'Emiratos Árabes Unidos'),
	(70, 'ER', 'Eritrea'),
	(71, 'SK', 'Eslovaquia'),
	(72, 'SI', 'Eslovenia'),
	(73, 'ES', 'España'),
	(74, 'UM', 'Islas ultramarinas de Estados Unidos'),
	(75, 'US', 'Estados Unidos'),
	(76, 'EE', 'Estonia'),
	(77, 'ET', 'Etiopía'),
	(78, 'FO', 'Islas Feroe'),
	(79, 'PH', 'Filipinas'),
	(80, 'FI', 'Finlandia'),
	(81, 'FJ', 'Fiyi'),
	(82, 'FR', 'Francia'),
	(83, 'GA', 'Gabón'),
	(84, 'GM', 'Gambia'),
	(85, 'GE', 'Georgia'),
	(86, 'GS', 'Islas Georgias del Sur y Sandwich del Sur'),
	(87, 'GH', 'Ghana'),
	(88, 'GI', 'Gibraltar'),
	(89, 'GD', 'Granada'),
	(90, 'GR', 'Grecia'),
	(91, 'GL', 'Groenlandia'),
	(92, 'GP', 'Guadalupe'),
	(93, 'GU', 'Guam'),
	(94, 'GT', 'Guatemala'),
	(95, 'GF', 'Guayana Francesa'),
	(96, 'GN', 'Guinea'),
	(97, 'GQ', 'Guinea Ecuatorial'),
	(98, 'GW', 'Guinea-Bissau'),
	(99, 'GY', 'Guyana'),
	(100, 'HT', 'Haití'),
	(101, 'HM', 'Islas Heard y McDonald'),
	(102, 'HN', 'Honduras'),
	(103, 'HK', 'Hong Kong'),
	(104, 'HU', 'Hungría'),
	(105, 'IN', 'India'),
	(106, 'ID', 'Indonesia'),
	(107, 'IR', 'Irán'),
	(108, 'IQ', 'Iraq'),
	(109, 'IE', 'Irlanda'),
	(110, 'IS', 'Islandia'),
	(111, 'IL', 'Israel'),
	(112, 'IT', 'Italia'),
	(113, 'JM', 'Jamaica'),
	(114, 'JP', 'Japón'),
	(115, 'JO', 'Jordania'),
	(116, 'KZ', 'Kazajstán'),
	(117, 'KE', 'Kenia'),
	(118, 'KG', 'Kirguistán'),
	(119, 'KI', 'Kiribati'),
	(120, 'KW', 'Kuwait'),
	(121, 'LA', 'Laos'),
	(122, 'LS', 'Lesotho'),
	(123, 'LV', 'Letonia'),
	(124, 'LB', 'Líbano'),
	(125, 'LR', 'Liberia'),
	(126, 'LY', 'Libia'),
	(127, 'LI', 'Liechtenstein'),
	(128, 'LT', 'Lituania'),
	(129, 'LU', 'Luxemburgo'),
	(130, 'MO', 'Macao'),
	(131, 'MK', 'ARY Macedonia'),
	(132, 'MG', 'Madagascar'),
	(133, 'MY', 'Malasia'),
	(134, 'MW', 'Malawi'),
	(135, 'MV', 'Maldivas'),
	(136, 'ML', 'Malí'),
	(137, 'MT', 'Malta'),
	(138, 'FK', 'Islas Malvinas'),
	(139, 'MP', 'Islas Marianas del Norte'),
	(140, 'MA', 'Marruecos'),
	(141, 'MH', 'Islas Marshall'),
	(142, 'MQ', 'Martinica'),
	(143, 'MU', 'Mauricio'),
	(144, 'MR', 'Mauritania'),
	(145, 'YT', 'Mayotte'),
	(146, 'MX', 'México'),
	(147, 'FM', 'Micronesia'),
	(148, 'MD', 'Moldavia'),
	(149, 'MC', 'Mónaco'),
	(150, 'MN', 'Mongolia'),
	(151, 'MS', 'Montserrat'),
	(152, 'MZ', 'Mozambique'),
	(153, 'MM', 'Myanmar'),
	(154, 'NA', 'Namibia'),
	(155, 'NR', 'Nauru'),
	(156, 'NP', 'Nepal'),
	(157, 'NI', 'Nicaragua'),
	(158, 'NE', 'Níger'),
	(159, 'NG', 'Nigeria'),
	(160, 'NU', 'Niue'),
	(161, 'NF', 'Isla Norfolk'),
	(162, 'NO', 'Noruega'),
	(163, 'NC', 'Nueva Caledonia'),
	(164, 'NZ', 'Nueva Zelanda'),
	(165, 'OM', 'Omán'),
	(166, 'NL', 'Países Bajos'),
	(167, 'PK', 'Pakistán'),
	(168, 'PW', 'Palau'),
	(169, 'PS', 'Palestina'),
	(170, 'PA', 'Panamá'),
	(171, 'PG', 'Papúa Nueva Guinea'),
	(172, 'PY', 'Paraguay'),
	(173, 'PE', 'Perú'),
	(174, 'PN', 'Islas Pitcairn'),
	(175, 'PF', 'Polinesia Francesa'),
	(176, 'PL', 'Polonia'),
	(177, 'PT', 'Portugal'),
	(178, 'PR', 'Puerto Rico'),
	(179, 'QA', 'Qatar'),
	(180, 'GB', 'Reino Unido'),
	(181, 'RE', 'Reunión'),
	(182, 'RW', 'Ruanda'),
	(183, 'RO', 'Rumania'),
	(184, 'RU', 'Rusia'),
	(185, 'EH', 'Sahara Occidental'),
	(186, 'SB', 'Islas Salomón'),
	(187, 'WS', 'Samoa'),
	(188, 'AS', 'Samoa Americana'),
	(189, 'KN', 'San Cristóbal y Nevis'),
	(190, 'SM', 'San Marino'),
	(191, 'PM', 'San Pedro y Miquelón'),
	(192, 'VC', 'San Vicente y las Granadinas'),
	(193, 'SH', 'Santa Helena'),
	(194, 'LC', 'Santa Lucía'),
	(195, 'ST', 'Santo Tomé y Príncipe'),
	(196, 'SN', 'Senegal'),
	(197, 'CS', 'Serbia y Montenegro'),
	(198, 'SC', 'Seychelles'),
	(199, 'SL', 'Sierra Leona'),
	(200, 'SG', 'Singapur'),
	(201, 'SY', 'Siria'),
	(202, 'SO', 'Somalia'),
	(203, 'LK', 'Sri Lanka'),
	(204, 'SZ', 'Suazilandia'),
	(205, 'ZA', 'Sudáfrica'),
	(206, 'SD', 'Sudán'),
	(207, 'SE', 'Suecia'),
	(208, 'CH', 'Suiza'),
	(209, 'SR', 'Surinam'),
	(210, 'SJ', 'Svalbard y Jan Mayen'),
	(211, 'TH', 'Tailandia'),
	(212, 'TW', 'Taiwán'),
	(213, 'TZ', 'Tanzania'),
	(214, 'TJ', 'Tayikistán'),
	(215, 'IO', 'Territorio Británico del Océano Índico'),
	(216, 'TF', 'Territorios Australes Franceses'),
	(217, 'TL', 'Timor Oriental'),
	(218, 'TG', 'Togo'),
	(219, 'TK', 'Tokelau'),
	(220, 'TO', 'Tonga'),
	(221, 'TT', 'Trinidad y Tobago'),
	(222, 'TN', 'Túnez'),
	(223, 'TC', 'Islas Turcas y Caicos'),
	(224, 'TM', 'Turkmenistán'),
	(225, 'TR', 'Turquía'),
	(226, 'TV', 'Tuvalu'),
	(227, 'UA', 'Ucrania'),
	(228, 'UG', 'Uganda'),
	(229, 'UY', 'Uruguay'),
	(230, 'UZ', 'Uzbekistán'),
	(231, 'VU', 'Vanuatu'),
	(232, 'VE', 'Venezuela'),
	(233, 'VN', 'Vietnam'),
	(234, 'VG', 'Islas Vírgenes Británicas'),
	(235, 'VI', 'Islas Vírgenes de los Estados Unidos'),
	(236, 'WF', 'Wallis y Futuna'),
	(237, 'YE', 'Yemen'),
	(238, 'DJ', 'Yibuti'),
	(239, 'ZM', 'Zambia'),
	(240, 'ZW', 'Zimbabue');
/*!40000 ALTER TABLE `amuco_countries` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.amuco_credit_insurance
CREATE TABLE IF NOT EXISTS `amuco_credit_insurance` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` int(10) unsigned NOT NULL,
  `date_updated` datetime NOT NULL,
  `date_created` datetime NOT NULL,
  `raiting` double NOT NULL,
  `credit_ever_denied` tinyint(1) NOT NULL,
  `available_credit` double NOT NULL,
  `insured_credit` double NOT NULL,
  `own_risk` double NOT NULL,
  `highest_ever_insured` double NOT NULL,
  `request_increase_status` varchar(20) CHARACTER SET latin1 NOT NULL,
  `mount_increase` double NOT NULL,
  `last_increased_requested` double NOT NULL,
  `date_last_increased_requested` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla amuco_db.amuco_credit_insurance: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `amuco_credit_insurance` DISABLE KEYS */;
INSERT INTO `amuco_credit_insurance` (`id`, `customer_id`, `date_updated`, `date_created`, `raiting`, `credit_ever_denied`, `available_credit`, `insured_credit`, `own_risk`, `highest_ever_insured`, `request_increase_status`, `mount_increase`, `last_increased_requested`, `date_last_increased_requested`) VALUES
	(9, 6, '2020-07-09 16:58:00', '2020-06-03 16:27:13', 6, 0, 6592, 500000, 150000, 500000, '', 0, 500000, '2019-01-04 16:27:00'),
	(10, 7, '2020-07-09 16:45:01', '2020-06-26 10:35:43', 7, 0, 9856, 280000, 0, 500000, '', 0, 540000, '2020-06-18 09:00:00'),
	(11, 9, '2020-07-21 09:18:16', '2020-07-01 12:12:22', 4, 1, -3, 100, 0, 259000, 'pending', 10, 10, '2020-04-30 00:00:00');
/*!40000 ALTER TABLE `amuco_credit_insurance` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.amuco_customers
CREATE TABLE IF NOT EXISTS `amuco_customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `code` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `nit` varchar(50) CHARACTER SET latin1 NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `city` varchar(100) CHARACTER SET latin1 NOT NULL,
  `state` varchar(100) CHARACTER SET latin1 NOT NULL,
  `postal_code` varchar(20) CHARACTER SET latin1 NOT NULL,
  `address` varchar(100) CHARACTER SET latin1 NOT NULL,
  `mobile_phone` varchar(30) CHARACTER SET latin1 NOT NULL,
  `office_phone` varchar(30) CHARACTER SET latin1 NOT NULL,
  `fax` varchar(30) CHARACTER SET latin1 NOT NULL,
  `pobox` varchar(50) CHARACTER SET latin1 NOT NULL,
  `url` varchar(100) CHARACTER SET latin1 NOT NULL,
  `head_office` int(10) unsigned DEFAULT NULL,
  `is_branche` tinyint(1) NOT NULL DEFAULT 0,
  `country` int(11) NOT NULL,
  `industry_type` varchar(100) NOT NULL,
  `sales_agent` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `head_office` (`head_office`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.amuco_customers: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `amuco_customers` DISABLE KEYS */;
INSERT INTO `amuco_customers` (`id`, `date_created`, `date_updated`, `active`, `code`, `nit`, `name`, `email`, `city`, `state`, `postal_code`, `address`, `mobile_phone`, `office_phone`, `fax`, `pobox`, `url`, `head_office`, `is_branche`, `country`, `industry_type`, `sales_agent`) VALUES
	(6, '0000-00-00 00:00:00', '2020-07-14 10:48:09', 1, 'DRESDEN', '20263019807', 'Dresden food ingredients', 'XXX', 'Lima', 'xxx', '3', 'Avenida los ingenieros #124, urbanización sta. raquel 2da etapa', '+511 349-7788', '+511 349-7788', '+511 349-6307', '', 'dresdenfi.com.pe', 0, 0, 173, '2', '3'),
	(7, '2020-06-26 10:29:59', '2020-08-03 16:53:05', 1, 'CERRILLOS', '84.264.990-5', 'Comercial Cerrillos S.a.', 'xxx@comercial.com.cl', 'Santiago De Chile', 'Xxxx', '', 'Ave. Americo Vespucio #2680 Ofic 81 Conchalí', '+56 2 2624-7028', '+56 2 2624-7028', '', '', 'www.comercialcerrillos.cl', 0, 0, 46, '2', '3,6'),
	(8, '2020-06-30 14:06:27', '0000-00-00 00:00:00', 1, 'FRUTAROM PERU', '20563120135', 'FRUTAROM PERU S.A.', 'xxxxx', 'Lima', 'xxxxxx', 'xxxx', 'Ave. Los Rosales 280, Santa Anita, Lima 43', '+511 2306090', '', '', '', '', 0, 0, 173, '2', '3,5'),
	(9, '2020-07-01 11:50:42', '2020-08-03 16:53:30', 1, 'TRAVERSO', '96 606780-2', 'TRAVERSO S.A.', 'xxx@traverso.cl', 'Santiago De Chile', 'Santiago', '', 'Ave. Americo Vespusio  01313  La Cisterna', '+56 2 2437-0950', '', '', '', 'http://', 0, 0, 46, '2', '2,3,5');
/*!40000 ALTER TABLE `amuco_customers` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.amuco_customer_payment_terms
CREATE TABLE IF NOT EXISTS `amuco_customer_payment_terms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_code` varchar(50) NOT NULL,
  `real_days` int(11) unsigned NOT NULL,
  `theoretical days` int(11) NOT NULL,
  `percentage_1` double DEFAULT NULL,
  `percentage_2` double DEFAULT NULL,
  `financial_expenses` double DEFAULT NULL,
  `apply_coface` int(11) NOT NULL,
  `description` varchar(255) NOT NULL DEFAULT '',
  `short_description` varchar(50) DEFAULT '',
  `company` varchar(50) NOT NULL DEFAULT '',
  `company_code` varchar(2) NOT NULL DEFAULT '',
  `date_from` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla amuco_db.amuco_customer_payment_terms: ~40 rows (aproximadamente)
/*!40000 ALTER TABLE `amuco_customer_payment_terms` DISABLE KEYS */;
INSERT INTO `amuco_customer_payment_terms` (`id`, `payment_code`, `real_days`, `theoretical days`, `percentage_1`, `percentage_2`, `financial_expenses`, `apply_coface`, `description`, `short_description`, `company`, `company_code`, `date_from`) VALUES
	(1, ' 000', 15, 0, 0, 0, 0, 0, '100% TT Advance', '100% TT Advance', 'AMUCO INC.', 'AI', '2020-08-05'),
	(2, '% 10/90', 105, 90, 10, 90, 0, 0, '10% CAD, 90% 90 days BL/AWB date, subject OK Coface', '10% CAD 90% 90 days', '', 'AI', '2020-08-05'),
	(3, '% 15/85', 130, 120, 15, 85, 0, 0, '15% CAD, 85% 120 days BL/AWB date, subject OK Coface', '15% CAD 85% 120 days', '', 'AI', '2020-08-05'),
	(4, '% 20/80', 39, 30, 20, 80, 0, 0, '20%/80% against Copy of Docs', '20%/80% against Docs', 'AMUCO INC.', 'AI', '2020-08-05'),
	(5, '% 20/80 90', 100, 90, 20, 80, 0, 0, '20% CAD / 80% 90 days BL/AWB date, subject OK Coface', '20%/80% 90 days BL', '', 'AI', '2020-08-05'),
	(6, '% 2A/80 90', 100, 90, 20, 80, 0, 0, '20% Advanced / 80% 90 days BL/AWB date, subject OK Coface', '20%/80% 90 days BL', '', 'AI', '2020-08-05'),
	(7, '% 30/70', 36, 30, 30, 70, 0, 0, '30%/70% against Copy of Docs', '30%/70% against Docs', 'AMUCO INC.', 'AI', '2020-08-05'),
	(8, '% 30/70 12', 135, 120, 30, 70, 0, 0, '30% against Copy of Docs / 70% 120 days BL/AWB Date', '30%/70% 120 days BL', '', 'AI', '2020-08-05'),
	(9, '% 30/70 60', 75, 60, 30, 70, 0, 0, '30% against Copy of Doc / 70% 60 days BL/AWB Date', '30%/70% 60 days BL', '', 'AI', '2020-08-05'),
	(10, '% 3A/70 90', 100, 90, 30, 70, 0, 0, '30% Advanced / 70% 90 days BL/AWB date, subject OK Coface', '30%/70% 90 days BL', '', 'AI', '2020-08-05'),
	(11, '% 40/60', 36, 30, 40, 60, 0, 0, '40%/60% against Copy of Docs', '40%/60% against Docs', 'AMUCO INC.', 'AI', '2020-08-05'),
	(12, '% 50/50', 36, 30, 50, 50, 0, 0, '50%/50% against Copy of Docs', '50%/50% against Docs', 'AMUCO INC.', 'AI', '2020-08-05'),
	(13, '% 50/50 60', 75, 60, 50, 50, 0, 0, '50% Advanced / 50% 60 days date BL/AWB', '50%/50% 60 days BL', '', 'AI', '2020-08-05'),
	(14, '% 70/30 60', 75, 60, 70, 30, 0, 0, '70% Advanced / 30% 60 days BL/AWB Date', '70%/30% 60 days BL', '', 'AI', '2020-08-05'),
	(15, '% 80/20 60', 75, 60, 80, 20, 0, 0, '80% against Copy of Docs / 20% 60 days BL/AWB Date', '80%/20% 60 days BL', '', 'AI', '2020-08-05'),
	(16, '001', 40, 15, 0, 0, 0, 0, 'Cash against Copy of Documents', 'Cash vs copy of Docs', 'AMUCO INC.', 'AI', '2020-08-05'),
	(17, '002', 45, 30, 0, 0, 0, 0, 'DP Sight', 'DP Sight', 'AMUCO INC.', 'AI', '2020-08-05'),
	(18, '003', 105, 90, 0, 0, 0, 0, 'DP 90 days date BL/AWB', 'DP 90 days date BL', '', 'AI', '2020-08-05'),
	(19, '004', 40, 15, 0, 0, 0, 0, 'Cash against Cargo Delivery', 'Cash vs Cargo Delive', '', 'AI', '2020-08-05'),
	(20, '010', 10, 5, 0, 0, 0, 0, '10 days date BL/AWB', '10 days date BL/AWB', '', 'AI', '2020-08-05'),
	(21, '030', 45, 30, 0, 0, 0, 0, 'CAD, subject OK Coface', 'CAD', 'AMUCO INC.', 'AI', '2020-08-05'),
	(22, '031', 45, 30, 0, 0, 0, 0, '30 days date BL/AWB subject OK Coface', '30 days BL/AWB date', 'AMUCO INC.', 'AI', '2020-08-05'),
	(23, '045', 60, 45, 0, 0, 0, 0, '45 days date BL subject OK Coface', '45 days BL date', 'AMUCO INC.', 'AI', '2020-08-05'),
	(24, '060', 75, 60, 0, 0, 0, 0, '60 days date BL/AWB subject OK Coface', '60 days BL/AWB date', 'AMUCO INC.', 'AI', '2020-08-05'),
	(25, '075', 90, 75, 0, 0, 0, 0, '75 days date BL subject OK Coface', '75 days BL date', 'AMUCO INC.', 'AI', '2020-08-05'),
	(26, '090', 105, 90, 0, 0, 0, 0, '90 days date BL/AWB subject OK Coface', '90 days BL/AWB date', 'AMUCO INC.', 'AI', '2020-08-05'),
	(27, '091', 105, 90, 0, 0, 0, 0, '50% CAD, 50% 90 days date BL/AWB subject OK Coface', '50% CAD, 50% 90 days', '', 'AI', '2020-08-05'),
	(28, '105', 0, 105, 0, 0, 0, 0, '105 days date BL/AWB subject OK Coface', '105 days BL date', '', 'RE', '2020-08-05'),
	(29, '120', 135, 120, 0, 0, 0, 0, '120 days date BL subject OK Coface', '120 days BL date', 'AMUCO INC.', 'AI', '2020-08-05'),
	(30, '150', 165, 150, 0, 0, 0, 0, '150 days date BL subject OK Coface', '150 days BL date', '', 'AI', '2020-08-05'),
	(31, '240', 0, 240, 0, 0, 0, 0, '240 days date BL/AWB subject OK Coface', '240 days BL/AWB date', '', 'RE', '2020-08-05'),
	(32, '92', 0, 120, 0, 0, 0, 0, '20% CAD, 80% 120 days date BL/AWB subject OK Coface', '20% CAD, 80% 120 day', '', 'AI', '2020-08-05'),
	(33, 'D 000', 0, 0, 0, 0, 0, 0, '100% TT Advance', '100% TT Advance', 'DPCC', 'DP', '2020-08-05'),
	(34, 'D 001', 0, 30, 0, 0, 0, 0, '100% TT against Copy of Docs', '100% TT copy of Docs', 'DPCC', 'DP', '2020-08-05'),
	(35, 'D% 30/70', 36, 30, 30, 70, 0, 0, '30% Advanced / 70% against Copy of Docs', '', 'DPCC', 'DP', '2020-08-05'),
	(36, 'D% 50/50', 30, 30, 50, 50, 0, 0, '50% Advanced / 50% against Copy of Docs', '', 'DPCC', 'DP', '2020-08-05'),
	(37, 'D/P Bank', 30, 30, 0, 0, 500, 0, 'Docs on Presentation by Bank', '', 'DPCC', 'DP', '2020-08-05'),
	(38, 'L/C Sight', 30, 30, 0, 0, 500, 0, 'Letter of Credit at Sight', '', 'DPCC', 'DP', '2020-08-05'),
	(39, 'PREPAID', 0, 0, 0, 0, 0, 0, 'Prepaid', 'Prepaid', '', 'AI', '2020-08-05'),
	(40, 'R 030', 30, 30, 0, 0, 0, 0, '30 Días Documentos de embarque', '30 days against Docs', 'RECIEND', 'RE', '2020-08-05');
/*!40000 ALTER TABLE `amuco_customer_payment_terms` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.amuco_customer_request
CREATE TABLE IF NOT EXISTS `amuco_customer_request` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `date_updated` datetime DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `customer` int(10) unsigned NOT NULL,
  `sales_agent` int(10) unsigned NOT NULL,
  `contact` int(10) unsigned NOT NULL,
  `destination_port` int(10) unsigned NOT NULL,
  `incoterm` int(10) unsigned NOT NULL,
  `remarks` varchar(250) NOT NULL,
  `quantity` varchar(250) DEFAULT NULL,
  `combinate_container` tinyint(1) NOT NULL,
  `RSD` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla amuco_db.amuco_customer_request: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `amuco_customer_request` DISABLE KEYS */;
INSERT INTO `amuco_customer_request` (`id`, `date_created`, `date_updated`, `status`, `customer`, `sales_agent`, `contact`, `destination_port`, `incoterm`, `remarks`, `quantity`, `combinate_container`, `RSD`) VALUES
	(21, '2020-08-18 13:52:08', '2020-08-27 09:57:54', 'New', 6, 3, 8, 3, 2, 'Request 1', NULL, 1, NULL),
	(22, '2020-08-25 15:16:46', '2020-08-26 13:54:38', 'Requested', 7, 3, 2, 7, 1, '', NULL, 1, NULL),
	(23, '2020-08-26 10:21:02', '2020-09-01 10:34:46', 'Requested', 9, 3, 5, 8, 8, 'prueba 3', NULL, 1, NULL),
	(24, '2020-09-07 15:18:54', NULL, 'New', 6, 3, 8, 2, 1, 'dasdada', NULL, 1, NULL),
	(25, '2020-09-08 12:20:33', NULL, 'New', 9, 8, 5, 4, 2, '', NULL, 0, NULL),
	(26, '2020-09-09 09:38:55', '2020-09-09 09:40:49', 'Requested', 7, 3, 2, 5, 3, 'Cualquier cosa s', NULL, 1, NULL),
	(27, '2020-09-10 11:37:19', '2020-09-10 11:59:26', 'Requested', 8, 5, 10, 9, 1, 'prueba final', NULL, 1, NULL);
/*!40000 ALTER TABLE `amuco_customer_request` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.amuco_destination_port
CREATE TABLE IF NOT EXISTS `amuco_destination_port` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `country` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla amuco_db.amuco_destination_port: 9 rows
/*!40000 ALTER TABLE `amuco_destination_port` DISABLE KEYS */;
INSERT INTO `amuco_destination_port` (`id`, `name`, `description`, `active`, `country`) VALUES
	(1, 'Abidjan', 'Abidjan', 1, 0),
	(2, 'Acajutla', 'Acajutla', 1, 0),
	(3, 'Alajuela', 'Alajuela', 1, 0),
	(4, 'Alexandria', 'Alexandria', 1, 0),
	(5, 'Altamira', 'Altamira', 1, 0),
	(6, 'Amuco Stok', 'Amuco Stok', 1, 3),
	(7, 'San Antonio', '', 1, 46),
	(8, 'San Antonio', '', 1, 46),
	(9, 'Callao', '', 1, 173);
/*!40000 ALTER TABLE `amuco_destination_port` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.amuco_details_customers_request
CREATE TABLE IF NOT EXISTS `amuco_details_customers_request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL,
  `customer_request_id` int(10) unsigned NOT NULL,
  `quantity` int(10) unsigned NOT NULL,
  `unit` int(10) unsigned NOT NULL,
  `status` varchar(50) NOT NULL,
  `specific_remarks` varchar(250) NOT NULL,
  `fcl` int(10) unsigned NOT NULL,
  `fcl_option` int(11) DEFAULT NULL,
  `type_fcl` varchar(50) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `packing` varchar(20) DEFAULT NULL,
  `material` varchar(20) DEFAULT NULL,
  `pallets` tinyint(1) DEFAULT 0,
  `unit_pack` int(10) unsigned NOT NULL DEFAULT 0,
  `supplier` int(10) unsigned DEFAULT NULL,
  `purchasing` int(10) unsigned DEFAULT NULL,
  `contacts` varchar(250) NOT NULL,
  `ETD` datetime DEFAULT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime DEFAULT NULL,
  `ETA` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla amuco_db.amuco_details_customers_request: ~60 rows (aproximadamente)
/*!40000 ALTER TABLE `amuco_details_customers_request` DISABLE KEYS */;
INSERT INTO `amuco_details_customers_request` (`id`, `product_id`, `customer_request_id`, `quantity`, `unit`, `status`, `specific_remarks`, `fcl`, `fcl_option`, `type_fcl`, `weight`, `packing`, `material`, `pallets`, `unit_pack`, `supplier`, `purchasing`, `contacts`, `ETD`, `date_created`, `date_updated`, `ETA`) VALUES
	(21, 2, 12, 4, 1, 'New', 'Prueba', 0, NULL, '0', '', '', '', NULL, 0, 6, NULL, '7', '2020-07-21 00:00:00', '0000-00-00 00:00:00', NULL, NULL),
	(22, 5, 13, 30000, 1, 'New', '', 0, NULL, '0', '', '', '', NULL, 0, 6, NULL, '7', '2020-07-21 00:00:00', '0000-00-00 00:00:00', NULL, NULL),
	(23, 5, 13, 30000, 1, 'New', '', 0, NULL, '0', '', '', '', NULL, 0, 8, NULL, '', '2020-07-21 00:00:00', '0000-00-00 00:00:00', NULL, NULL),
	(24, 3, 13, 0, 0, 'New', '', 1, 40, '1', '', '', '', NULL, 0, NULL, 2, '', '2020-07-21 00:00:00', '0000-00-00 00:00:00', NULL, NULL),
	(25, 2, 13, 50000, 2, 'New', '', 0, NULL, '0', '', '', '', NULL, 0, 6, NULL, '7', '2020-07-21 00:00:00', '0000-00-00 00:00:00', NULL, NULL),
	(26, 6, 14, 0, 0, 'New', '', 1, 20, '0', '', '', '', NULL, 0, 9, NULL, '', '2020-07-23 00:00:00', '0000-00-00 00:00:00', NULL, NULL),
	(27, 2, 14, 50000, 2, 'New', '', 1, NULL, '0', '', '', '', NULL, 0, NULL, 5, '', '2020-07-23 00:00:00', '0000-00-00 00:00:00', NULL, NULL),
	(28, 3, 15, 20, 1, 'Requested', '', 0, NULL, '0', '', '', '', NULL, 0, 6, NULL, '7', '2020-07-23 00:00:00', '0000-00-00 00:00:00', '2020-08-11 10:26:22', NULL),
	(29, 3, 15, 20, 1, 'Requested', '', 0, NULL, '0', '', '', '', NULL, 0, NULL, 3, '', '2020-07-23 00:00:00', '0000-00-00 00:00:00', '2020-08-11 10:26:21', NULL),
	(30, 2, 15, 0, 0, 'Requested', '', 1, NULL, '0', '', '', '', NULL, 0, 6, NULL, '7', '2020-07-23 00:00:00', '0000-00-00 00:00:00', '2020-08-11 10:26:21', NULL),
	(31, 5, 15, 15, 2, 'Offer Received', '', 0, NULL, '0', '', '', '', NULL, 0, 7, NULL, '', '2020-07-23 00:00:00', '0000-00-00 00:00:00', '2020-08-11 10:26:21', NULL),
	(32, 5, 15, 15, 2, 'Requested', '', 0, NULL, '0', '', '', '', NULL, 0, 5, NULL, '', '2020-07-23 00:00:00', '0000-00-00 00:00:00', '2020-08-11 10:26:21', NULL),
	(33, 5, 14, 0, 0, 'New', '', 1, 40, 'NOR', '', '', '', NULL, 0, NULL, 2, '', '2020-07-24 00:00:00', '2020-07-24 11:58:43', NULL, '2020-07-24 00:00:00'),
	(34, 5, 14, 0, 0, 'New', '', 1, 40, 'NOR', '', '', '', NULL, 0, NULL, 3, '', '2020-07-24 00:00:00', '2020-07-24 11:58:43', NULL, '2020-07-24 00:00:00'),
	(35, 5, 14, 0, 0, 'New', '', 1, 40, 'NOR', '', '', '', NULL, 0, NULL, 6, '', '2020-07-24 00:00:00', '2020-07-24 11:58:43', NULL, '2020-07-24 00:00:00'),
	(36, 2, 15, 10, 1, 'Requested', '', 0, NULL, '', '', '', '', NULL, 0, NULL, 7, '', '2020-07-28 00:00:00', '2020-07-28 11:32:41', '2020-08-11 10:26:21', '2020-07-28 00:00:00'),
	(38, 3, 15, 34, 1, 'Requested', '', 1, 20, 'HCube', '', '', '', NULL, 0, NULL, 4, '', '2020-07-28 00:00:00', '2020-07-28 13:08:58', '2020-08-11 10:26:21', '2020-07-28 00:00:00'),
	(43, 3, 15, 4, 0, 'Requested', '', 2, NULL, 'NOR', '', '', '', NULL, 0, NULL, 6, '', '0000-00-00 00:00:00', '2020-07-29 15:43:53', '2020-08-11 10:26:21', '0000-00-00 00:00:00'),
	(44, 3, 15, 34, 1, 'Requested', '', 2, 20, 'NOR', '', '', '', NULL, 0, 6, NULL, '7', '0000-00-00 00:00:00', '2020-08-03 12:44:33', '2020-08-11 10:26:21', '0000-00-00 00:00:00'),
	(46, 5, 15, 45, 1, 'Offer Received', '', 2, 20, 'NOR', '', '', '', NULL, 0, NULL, 2, '', '2021-01-03 00:00:00', '2020-08-03 12:54:42', '2020-08-11 10:26:21', '2021-01-03 00:00:00'),
	(48, 3, 16, 0, 0, 'Pending', '', 1, 20, 'NOR', '', '', '', NULL, 0, NULL, 7, '', '2020-09-03 00:00:00', '2020-08-03 16:57:52', '2020-08-03 17:08:45', '2020-09-03 00:00:00'),
	(49, 3, 16, 0, 0, 'New', '', 0, NULL, '', '', '', '', NULL, 0, 6, NULL, '7', '2020-10-04 00:00:00', '2020-08-04 09:52:17', NULL, '0000-00-00 00:00:00'),
	(50, 3, 16, 1, 1, 'New', '', 2, NULL, 'NOR', '', '', '', NULL, 0, NULL, 6, '', '2020-10-04 00:00:00', '2020-08-04 09:53:06', NULL, '2020-10-04 00:00:00'),
	(51, 5, 17, 500, 1, 'New', 'marca XXX', 0, NULL, '', '', '', '', NULL, 0, 8, 0, '', NULL, '0000-00-00 00:00:00', NULL, NULL),
	(52, 5, 17, 500, 1, 'New', 'marca XXX', 0, NULL, '', '', '', '', NULL, 0, NULL, 7, '', '2020-08-31 00:00:00', '2020-08-04 10:03:46', NULL, '2020-08-31 00:00:00'),
	(53, 3, 18, 20, 2, 'Requested', 'micronizado', 2, NULL, 'Standard', '20', '13', '25', 1, 1, 0, 1, '', '2020-08-31 00:00:00', '0000-00-00 00:00:00', NULL, '2020-08-31 00:00:00'),
	(54, 3, 18, 3000, 2, 'Requested', 'micronizado', 0, NULL, '', '', '', '', NULL, 0, 6, NULL, '', '2020-08-31 00:00:00', '2020-08-04 11:41:19', '2020-08-07 11:33:17', '0000-00-00 00:00:00'),
	(55, 2, 18, 15, 2, 'Requested', '', 0, NULL, '', '', '', '', NULL, 0, 0, 3, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
	(56, 2, 18, 0, 4, 'Requested', 'ahora necesitamos dos contenedores', 2, 20, '', '', '', '', NULL, 0, 0, 7, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2020-08-07 11:33:17', '0000-00-00 00:00:00'),
	(57, 5, 19, 30, 4, 'Requested', 'prueba', 1, NULL, 'Standard', '25', '11', '10', NULL, 2, 0, 7, '', '2020-08-31 00:00:00', '0000-00-00 00:00:00', NULL, '2020-08-31 00:00:00'),
	(58, 2, 19, 10, 4, 'Requested', 'asdasdas', 2, 20, 'Standard', '3', '15', '25', 1, 1, 7, 0, '', '2020-09-03 00:00:00', '0000-00-00 00:00:00', '2020-08-13 11:20:04', '2020-08-08 00:00:00'),
	(59, 2, 18, 500, 1, 'Requested', 'probando chante', 2, NULL, 'NOR', '20', '6', '26', 1, 2, 5, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
	(61, 2, 18, 0, 4, 'Requested', 'disculpen necesito un nuevo precio por container', 4, 20, 'Standard', '3', '24', '25', 1, 2, 8, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00'),
	(62, 2, 19, 10, 4, 'New', 'asdasdas', 2, NULL, 'Standard', '3', '15', '25', 1, 1, 4, NULL, '1', '2020-09-03 00:00:00', '2020-08-13 11:44:26', NULL, '2020-08-08 00:00:00'),
	(63, 2, 20, 25, 1, 'Offer Received', '', 1, 40, 'NOR', '500', '13', '', NULL, 2, 6, NULL, '', '2020-09-01 00:00:00', '2020-08-17 12:30:53', '2020-08-17 12:35:28', '2020-09-30 00:00:00'),
	(64, 3, 20, 15, 1, 'Offer Received', '', 0, NULL, '', '20', '20', '', NULL, 2, 9, NULL, '', '2020-09-01 00:00:00', '2020-08-17 12:33:48', '2020-08-17 12:35:28', '2020-09-30 00:00:00'),
	(65, 5, 20, 40, 1, 'Requested', '', 1, NULL, 'NOR', '580', '19', '22', NULL, 2, 0, 7, '', '2020-09-01 00:00:00', '0000-00-00 00:00:00', '2020-08-17 17:00:29', '2020-09-01 00:00:00'),
	(66, 3, 20, 15, 1, 'Offer Received', '', 0, NULL, '', '20', '13', '22', 1, 2, 9, NULL, '', '2020-09-01 00:00:00', '2020-08-17 13:34:02', '2020-08-17 17:00:29', '2020-09-30 00:00:00'),
	(67, 2, 20, 25, 1, 'Requested', '', 1, NULL, 'NOR', '500', '13', '', NULL, 2, 7, NULL, '', '2020-09-01 00:00:00', '2020-08-18 11:03:39', '2020-08-18 11:13:55', '2020-09-30 00:00:00'),
	(68, 2, 20, 25, 1, 'New', '', 4, 0, 'NOR', '500', '13', '', NULL, 2, 7, NULL, '', '2020-09-01 00:00:00', '2020-08-18 11:58:07', NULL, '2020-09-30 00:00:00'),
	(69, 2, 21, 15, 1, 'Offer Received', 'Request 1', 4, NULL, 'Standard', '3', '25', '26', 1, 1, 5, NULL, '', '2020-08-19 00:00:00', '2020-08-18 13:53:15', NULL, '2020-08-20 00:00:00'),
	(71, 5, 23, 150, 1, 'Requested', 'prueba 3', 3, NULL, 'HCube', '3', '7', '10', 1, 1, 5, NULL, '', '2020-08-25 00:00:00', '2020-08-26 10:22:16', '2020-09-01 10:34:46', '2020-08-26 00:00:00'),
	(72, 5, 23, 155, 1, 'Requested', 'prueba 3', 3, 20, 'HCube', '3', '7', '10', 1, 1, 6, 0, '7', '2020-08-25 00:00:00', '0000-00-00 00:00:00', '2020-09-01 10:34:46', '2020-08-26 00:00:00'),
	(73, 5, 23, 150, 1, 'Offer Received', 'prueba 3', 3, NULL, 'HCube', '3', '7', '10', 1, 1, NULL, 7, '', '2020-08-25 00:00:00', '2020-08-26 10:22:16', NULL, '2020-08-25 00:00:00'),
	(74, 3, 22, 15, 1, 'Offer Received', '', 1, NULL, '', '', '', '', NULL, 0, 8, NULL, '', '2020-09-04 00:00:00', '2020-08-26 13:50:18', '2020-08-26 13:51:05', '0000-00-00 00:00:00'),
	(76, 2, 22, 20, 1, 'Offer Received', '', 1, 20, '', '', '', '', NULL, 0, NULL, 1, '', '2020-09-04 00:00:00', '2020-08-26 13:54:19', '2020-08-26 13:54:38', '2020-09-04 00:00:00'),
	(77, 5, 21, 10, 1, 'Offer Received', '', 4, 20, '', '', '', '', NULL, 0, 5, NULL, '9', '0000-00-00 00:00:00', '2020-08-27 09:59:32', NULL, '0000-00-00 00:00:00'),
	(78, 2, 24, 10, 1, 'New', 'sadda', 4, 20, '', '3', '22', '26', 1, 1, 6, NULL, '7', '2020-09-07 00:00:00', '2020-09-07 15:21:31', NULL, '2020-09-08 00:00:00'),
	(79, 2, 24, 10, 1, 'New', 'sadda', 4, 20, '', '3', '22', '26', 1, 1, 7, NULL, '', '2020-09-07 00:00:00', '2020-09-07 15:21:32', NULL, '2020-09-08 00:00:00'),
	(80, 2, 24, 10, 1, 'New', 'sadda', 4, 20, '', '3', '22', '26', 1, 1, NULL, 5, '', '2020-09-07 00:00:00', '2020-09-07 15:21:32', NULL, '2020-09-07 00:00:00'),
	(81, 2, 24, 10, 1, 'New', 'sadda', 4, 20, '', '3', '22', '26', 1, 1, NULL, 3, '', '2020-09-07 00:00:00', '2020-09-07 15:21:32', NULL, '2020-09-07 00:00:00'),
	(82, 2, 24, 10, 1, 'New', 'sadda', 4, 20, '', '3', '22', '26', 1, 1, NULL, 6, '', '2020-09-07 00:00:00', '2020-09-07 15:21:32', NULL, '2020-09-07 00:00:00'),
	(83, 2, 24, 10, 1, 'New', 'sadda', 4, 20, '', '3', '16', '26', 1, 1, 0, 5, '', '2020-09-07 00:00:00', '0000-00-00 00:00:00', NULL, '2020-09-07 00:00:00'),
	(84, 2, 24, 10, 1, 'Offer Received', 'sadda', 4, 20, '', '3', '15', '26', 1, 1, 0, 6, '', '2020-09-07 00:00:00', '0000-00-00 00:00:00', NULL, '2020-09-07 00:00:00'),
	(85, 2, 26, 100, 1, 'Requested', 'Cualquier cosa', 4, 20, 'HCube', '20', '10', '12', 1, 2, 6, NULL, '7', '2020-10-09 00:00:00', '2020-09-09 09:40:18', '2020-09-09 09:40:49', '2020-09-10 00:00:00'),
	(86, 2, 26, 100, 1, 'Offer Received', 'Cualquier cosa', 4, 20, 'HCube', '20', '10', '12', 1, 2, NULL, 3, '', '2020-10-09 00:00:00', '2020-09-09 09:40:19', '2020-09-09 09:40:49', '2020-10-09 00:00:00'),
	(87, 5, 25, 20, 1, 'Offer Received', '', 1, 20, '', '', '', '', NULL, 0, 5, NULL, '', '0000-00-00 00:00:00', '2020-09-09 10:50:53', NULL, '2020-12-09 00:00:00'),
	(88, 3, 27, 10, 1, 'Offer Received', '', 1, 20, '', '25', '11', '26', 1, 2, NULL, 6, '', '0000-00-00 00:00:00', '2020-09-10 11:43:26', '2020-09-10 11:43:50', '0000-00-00 00:00:00'),
	(89, 3, 27, 10, 1, 'Offer Received', '', 1, 20, '', '25', '11', '26', 1, 2, 9, NULL, '11', '0000-00-00 00:00:00', '2020-09-10 11:43:26', '2020-09-10 11:43:50', '2020-10-01 00:00:00'),
	(90, 2, 27, 10, 1, 'Offer Received', '', 0, NULL, '', '30', '20', '22', NULL, 2, 6, NULL, '7', '0000-00-00 00:00:00', '2020-09-10 11:59:17', '2020-09-10 11:59:27', '2020-10-01 00:00:00');
/*!40000 ALTER TABLE `amuco_details_customers_request` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.amuco_details_request_price
CREATE TABLE IF NOT EXISTS `amuco_details_request_price` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customer_request_id` int(10) unsigned NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `ETD` datetime NOT NULL,
  `product_id` int(10) unsigned NOT NULL DEFAULT 0,
  `details_customer_request_id` int(10) unsigned NOT NULL DEFAULT 0,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `unit` int(10) unsigned NOT NULL DEFAULT 0,
  `fcl` int(10) NOT NULL DEFAULT 0,
  `fcl_option` int(10) NOT NULL DEFAULT 0,
  `type_fcl` varchar(50) NOT NULL DEFAULT '0',
  `weight` double NOT NULL DEFAULT 0,
  `unit_pack` int(10) unsigned NOT NULL DEFAULT 0,
  `shape` varchar(50) NOT NULL DEFAULT '0',
  `material` varchar(50) NOT NULL DEFAULT '0',
  `pallets` varchar(50) DEFAULT '0',
  `price_fob` decimal(18,2) NOT NULL DEFAULT 0.00,
  `total_freight` decimal(18,2) NOT NULL DEFAULT 0.00,
  `total_price` decimal(18,2) NOT NULL DEFAULT 0.00,
  `incoterm_price` int(10) unsigned NOT NULL DEFAULT 0,
  `comission_supplier` varchar(50) DEFAULT '0',
  `shipping_port` int(10) unsigned NOT NULL DEFAULT 0,
  `supplier_incoterm` int(10) unsigned NOT NULL DEFAULT 0,
  `supplier` int(10) unsigned DEFAULT 0,
  `destination_port` int(10) unsigned NOT NULL DEFAULT 0,
  `brand` varchar(150) NOT NULL DEFAULT '0',
  `payment_terms` int(10) unsigned NOT NULL DEFAULT 0,
  `comments` varchar(250) NOT NULL DEFAULT '0',
  `analysis_standard` varchar(250) NOT NULL DEFAULT '0',
  `valid_until` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `purchasing` int(10) unsigned DEFAULT NULL,
  `supplier_direct` int(10) unsigned DEFAULT NULL,
  `manufacturer` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla amuco_db.amuco_details_request_price: ~27 rows (aproximadamente)
/*!40000 ALTER TABLE `amuco_details_request_price` DISABLE KEYS */;
INSERT INTO `amuco_details_request_price` (`id`, `customer_request_id`, `date_created`, `date_updated`, `ETD`, `product_id`, `details_customer_request_id`, `quantity`, `unit`, `fcl`, `fcl_option`, `type_fcl`, `weight`, `unit_pack`, `shape`, `material`, `pallets`, `price_fob`, `total_freight`, `total_price`, `incoterm_price`, `comission_supplier`, `shipping_port`, `supplier_incoterm`, `supplier`, `destination_port`, `brand`, `payment_terms`, `comments`, `analysis_standard`, `valid_until`, `status`, `purchasing`, `supplier_direct`, `manufacturer`) VALUES
	(7, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2020-08-15 00:00:00', 5, 0, 45, 1, 2, 20, 'NOR', 0, 0, '', '', NULL, 500.00, 50.00, 5001.11, 2, NULL, 1, 1, 5, 0, '', 1, 'prueba 1', 'analysis', '2020-08-29 00:00:00', 'Pending', NULL, NULL, NULL),
	(8, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2020-08-13 00:00:00', 5, 46, 45, 1, 2, 20, 'NOR', 0, 0, '', '', NULL, 50.00, 50.00, 51.11, 2, NULL, 3, 1, 0, 0, '121', 1, 'asdasd', 'asdasd', '2020-08-13 00:00:00', 'Pending', NULL, NULL, NULL),
	(9, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2020-08-13 00:00:00', 3, 44, 34, 1, 2, 20, 'NOR', 0, 0, '', '', NULL, 15.00, 15.00, 15.44, 2, NULL, 1, 2, NULL, 0, 'adasd', 1, 'asdasd', 'adsasd', '2020-08-13 00:00:00', 'Pending', NULL, 6, NULL),
	(10, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2020-08-13 00:00:00', 3, 44, 34, 1, 2, 20, 'NOR', 0, 0, '', '', NULL, 1000.00, 34.00, 1001.00, 2, NULL, 3, 1, NULL, 0, '', 1, '', '', '2020-08-13 00:00:00', 'Pending', NULL, 6, NULL),
	(11, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2020-08-28 00:00:00', 5, 46, 45, 1, 2, 20, 'NOR', 45000, 0, '24', '19', NULL, 3000.00, 0.00, 3000.00, 2, NULL, 2, 5, 0, 0, 'ssssss', 1, 'xxxxxx', '', '2020-08-17 00:00:00', 'Pending', NULL, NULL, NULL),
	(12, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2020-09-05 00:00:00', 2, 36, 20, 1, 1, 20, '', 25, 0, '11', '', NULL, 600.00, 2000.00, 700.00, 2, NULL, 1, 5, 6, 0, 'ensign', 1, 'ninguna', 'BP', '2020-08-25 00:00:00', 'Pending', NULL, NULL, NULL),
	(13, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2020-08-14 00:00:00', 5, 46, 45, 1, 2, 20, 'NOR', 4, 0, '25', '26', NULL, 30.00, 10.00, 30.22, 2, NULL, 1, 2, 0, 0, '121', 1, 'asdasdasdad', 'xxxxx', '2020-08-14 00:00:00', 'Pending', NULL, NULL, NULL),
	(14, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2020-08-31 00:00:00', 5, 31, 15, 1, 2, 40, '', 40000, 0, '20', '19', NULL, 7000.00, 1000.00, 7066.66, 1, NULL, 2, 3, NULL, 0, 'ddddddd', 1, '', '', '2020-08-25 00:00:00', 'Pending', NULL, 7, NULL),
	(15, 20, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-12-17 00:00:00', 3, 64, 15, 1, 1, 40, 'NOR', 200, 0, '20', '14', NULL, 500.00, 1000.00, 566.67, 2, NULL, 7, 1, NULL, 0, 'xxxx', 1, '', 'xxxxx', '2020-08-17 00:00:00', 'Pending', NULL, 9, NULL),
	(16, 20, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2020-08-17 00:00:00', 3, 64, 15, 1, 1, 40, 'NOR', 20, 0, '20', '18', NULL, 756.00, 1000.00, 822.67, 2, NULL, 5, 1, NULL, 0, '', 1, '', '', '2020-08-17 00:00:00', 'Pending', NULL, 9, NULL),
	(17, 20, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2020-08-17 00:00:00', 2, 63, 25, 1, 1, 40, 'NOR', 500, 0, '13', '25', NULL, 250.00, 0.00, 250.00, 2, NULL, 3, 5, NULL, 0, 'ssss', 1, '', '', '2020-08-17 00:00:00', 'Pending', NULL, 6, NULL),
	(18, 20, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2021-01-18 00:00:00', 3, 66, 15, 1, 15, 20, 'NOR', 20, 0, '13', '22', '1', 2000.00, 1500.00, 2100.00, 2, NULL, 1, 3, NULL, 0, 'brand', 1, 'asdasd', 'adasd', '2020-08-18 00:00:00', 'Pending', NULL, 9, NULL),
	(19, 21, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2020-01-18 00:00:00', 2, 70, 15, 1, 4, 20, 'Standard', 3, 0, '25', '26', '1', 1000.00, 500.00, 1033.33, 2, NULL, 1, 1, 5, 0, 'brand', 1, 'Request 1', 'analysis', '2020-08-18 00:00:00', 'Pending', NULL, NULL, NULL),
	(20, 21, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2020-08-25 00:00:00', 2, 69, 15, 1, 4, 20, 'Standard', 3, 0, '25', '26', '1', 2000.00, 3000.00, 2300.00, 2, NULL, 1, 1, NULL, 0, 'brand', 1, '', 'adasd', '2020-08-25 00:00:00', 'Pending', NULL, 5, NULL),
	(21, 23, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2020-08-26 00:00:00', 5, 73, 150, 1, 3, 20, 'HCube', 3, 0, '7', '10', '1', 30000.00, 3000.00, 30000.00, 8, NULL, 1, 2, 5, 0, 'brand', 1, '', 'adasd', '2020-08-26 00:00:00', 'Pending', NULL, NULL, NULL),
	(22, 23, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2020-08-26 00:00:00', 5, 73, 150, 1, 3, 20, 'HCube', 3, 0, '7', '10', '1', 40000.00, 3000.00, 40000.00, 8, NULL, 2, 2, 5, 0, 'brand', 1, '', 'adasd', '2020-08-26 00:00:00', 'Pending', NULL, NULL, NULL),
	(23, 21, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2020-08-27 00:00:00', 5, 77, 10, 1, 4, 20, '', 0, 0, '', '', NULL, 3000.00, 1000.00, 3100.00, 2, NULL, 2, 2, NULL, 0, 'brand', 1, '', 'adasd', '2020-08-27 00:00:00', 'Pending', NULL, 5, 5),
	(24, 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2020-09-04 00:00:00', 2, 76, 20, 1, 1, 20, '', 25, 0, '11', '23', '', 600.00, 2000.00, 700.00, 1, NULL, 1, 1, 5, 0, 'Ensign', 12, 'laura y elisa probando', 'BP', '2020-09-07 00:00:00', 'Pending', NULL, NULL, 6),
	(25, 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2020-09-04 00:00:00', 3, 74, 15, 1, 1, 20, '', 25, 0, '11', '25', '', 620.00, 2000.00, 753.33, 1, NULL, 2, 1, NULL, 0, '', 1, 'preuba dos', 'BP', '2020-08-27 00:00:00', 'Pending', NULL, 8, 0),
	(26, 24, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2020-09-07 00:00:00', 2, 84, 10, 1, 4, 20, '', 3, 0, '22', '26', '1', 1000.00, 1000.00, 1100.00, 1, NULL, 4, 3, 5, 0, 'brand', 19, '', '', '2020-09-07 00:00:00', 'Pending', 6, NULL, 5),
	(27, 26, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2020-09-09 00:00:00', 2, 86, 100, 1, 4, 20, 'HCube', 20, 0, '10', '12', '1', 1000.00, 1000.00, 1010.00, 3, NULL, 3, 2, 6, 5, 'brand', 18, 'Cualquier cosa', 'analysis', '2020-09-09 00:00:00', 'Pending', 3, NULL, 5),
	(28, 25, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2020-09-09 00:00:00', 5, 87, 20, 1, 1, 20, '', 0, 0, '', '', NULL, 700.00, 0.00, 700.00, 2, NULL, 0, 1, NULL, 4, '', 0, '', '', '2020-09-09 00:00:00', 'Pending', NULL, 5, 0),
	(29, 24, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2020-09-09 00:00:00', 2, 84, 10, 1, 4, 20, '', 3, 0, '9', '26', '1', 700.00, 1000.00, 800.00, 1, NULL, 0, 2, 5, 2, '', 0, '', '', '2020-09-09 00:00:00', 'Pending', 6, NULL, 0),
	(30, 24, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2020-09-09 00:00:00', 2, 84, 10, 1, 4, 20, '', 3, 0, '15', '26', '1', 3000.00, 250.00, 3025.00, 1, NULL, 1, 4, 6, 2, '', 0, '', '', '2020-09-09 00:00:00', 'Pending', 6, NULL, 0),
	(31, 27, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2020-09-25 00:00:00', 2, 90, 10, 1, 1, 20, '', 30, 0, '20', '22', NULL, 1000.00, 1000.00, 1100.00, 1, NULL, 1, 1, NULL, 9, 'Ensign', 12, 'prueba final', 'BP', '2020-09-14 00:00:00', 'Pending', NULL, 6, 0),
	(32, 27, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2020-09-25 00:00:00', 3, 89, 10, 1, 1, 20, '', 25, 0, '11', '26', '1', 500.00, 1000.00, 600.00, 1, NULL, 1, 1, NULL, 9, '', 1, 'preuba 2', 'USP', '2020-09-14 00:00:00', 'Pending', NULL, 9, 0),
	(33, 27, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2020-09-25 00:00:00', 3, 88, 10, 1, 1, 20, '', 25, 0, '11', '26', '1', 400.00, 1000.00, 500.00, 1, NULL, 1, 1, 5, 9, 'Ensign', 12, '', 'USP', '2020-09-14 00:00:00', 'Pending', 6, NULL, 6);
/*!40000 ALTER TABLE `amuco_details_request_price` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.amuco_incoterm
CREATE TABLE IF NOT EXISTS `amuco_incoterm` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla amuco_db.amuco_incoterm: 9 rows
/*!40000 ALTER TABLE `amuco_incoterm` DISABLE KEYS */;
INSERT INTO `amuco_incoterm` (`id`, `name`, `description`, `active`) VALUES
	(1, 'CFR', 'CFR', 1),
	(2, 'CIF', 'CIF', 1),
	(3, 'CIP', 'CIP', 1),
	(4, 'CPT', 'CPT', 1),
	(5, 'FOB', 'FOB', 1),
	(6, 'DDP', 'DDP', 1),
	(7, 'DDU', 'DDU', 1),
	(8, 'FCA', 'FCA', 1),
	(9, 'DAP', 'DAP', 1);
/*!40000 ALTER TABLE `amuco_incoterm` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.amuco_industry_type
CREATE TABLE IF NOT EXISTS `amuco_industry_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `description` varchar(250) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.amuco_industry_type: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `amuco_industry_type` DISABLE KEYS */;
INSERT INTO `amuco_industry_type` (`id`, `name`, `description`) VALUES
	(1, 'Feed', 'Feed industry'),
	(2, 'Food', 'Food industry'),
	(3, 'Paints', 'Paints Industry'),
	(4, 'Home Care', 'Home Industry'),
	(5, 'Chemistry', 'Productos químicos');
/*!40000 ALTER TABLE `amuco_industry_type` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.amuco_material
CREATE TABLE IF NOT EXISTS `amuco_material` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla amuco_db.amuco_material: ~26 rows (aproximadamente)
/*!40000 ALTER TABLE `amuco_material` DISABLE KEYS */;
INSERT INTO `amuco_material` (`id`, `name`, `description`) VALUES
	(10, 'Carton', ''),
	(11, 'Compound', ''),
	(12, 'Fibre', ''),
	(13, 'Galvanized Iron', ''),
	(14, 'Glass', ''),
	(15, 'Hdpe', ''),
	(16, 'IN 1000 KG BIG-BAGS', ''),
	(17, 'IN 20 KG CARTON', ''),
	(18, 'IN 25 KG DRUM', ''),
	(19, 'IN 50 KG DRUM', ''),
	(20, 'Iron', ''),
	(21, 'Kraft Paper', ''),
	(22, 'Non-Galvanized Iron', ''),
	(23, 'Paper', ''),
	(24, 'PE', ''),
	(25, 'Plastic', ''),
	(26, 'PP', ''),
	(27, 'Steel', ''),
	(28, 'W/ INTERNAL DOUBLE LAYER OF PE', ''),
	(29, 'W/ INTERNAL SINGLE LAYER OF PE', ''),
	(30, 'Wood', ''),
	(31, 'Woven', ''),
	(32, 'ruperto', NULL),
	(33, 'categoria 1', NULL),
	(34, 'alberto', NULL),
	(35, 'alberto', NULL);
/*!40000 ALTER TABLE `amuco_material` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.amuco_offers_sent_customers
CREATE TABLE IF NOT EXISTS `amuco_offers_sent_customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_created` datetime DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `date_updated` datetime DEFAULT NULL,
  `customer_request_id` int(10) unsigned NOT NULL DEFAULT 0,
  `request_details_id` int(10) unsigned NOT NULL DEFAULT 0,
  `request_details_price_id` int(10) unsigned NOT NULL DEFAULT 0,
  `payments_terms_id` int(10) unsigned NOT NULL DEFAULT 0,
  `quantity` int(11) unsigned NOT NULL DEFAULT 0,
  `unit` int(10) unsigned NOT NULL DEFAULT 0,
  `freight` decimal(18,2) unsigned DEFAULT 0.00,
  `unit_price` decimal(18,2) unsigned NOT NULL DEFAULT 0.00,
  `price_fob` decimal(18,2) unsigned NOT NULL DEFAULT 0.00,
  `incoterm` int(10) unsigned NOT NULL DEFAULT 0,
  `shipping_port` int(10) unsigned NOT NULL DEFAULT 0,
  `destination_port` int(10) unsigned NOT NULL DEFAULT 0,
  `packing` int(10) unsigned NOT NULL DEFAULT 0,
  `fcl` int(10) unsigned NOT NULL DEFAULT 0,
  `weight` double unsigned NOT NULL DEFAULT 0,
  `unit_pack` int(10) unsigned NOT NULL DEFAULT 0,
  `material` int(10) unsigned NOT NULL DEFAULT 0,
  `type_fcl` varchar(50) NOT NULL DEFAULT '0',
  `option_fcl` int(10) unsigned DEFAULT 0,
  `offer_price_per_unit` double NOT NULL DEFAULT 0,
  `calculated_offer_price` double NOT NULL DEFAULT 0,
  `price_increase` double NOT NULL DEFAULT 0,
  `sales_amount` double NOT NULL DEFAULT 0,
  `estimated_gross_profit` double NOT NULL DEFAULT 0,
  `estimated_comm` double NOT NULL DEFAULT 0,
  `rep_comm` double NOT NULL DEFAULT 0,
  `analysis_standard` varchar(250) NOT NULL,
  `ETD` datetime NOT NULL,
  `pallets` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla amuco_db.amuco_offers_sent_customers: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `amuco_offers_sent_customers` DISABLE KEYS */;
INSERT INTO `amuco_offers_sent_customers` (`id`, `date_created`, `status`, `date_updated`, `customer_request_id`, `request_details_id`, `request_details_price_id`, `payments_terms_id`, `quantity`, `unit`, `freight`, `unit_price`, `price_fob`, `incoterm`, `shipping_port`, `destination_port`, `packing`, `fcl`, `weight`, `unit_pack`, `material`, `type_fcl`, `option_fcl`, `offer_price_per_unit`, `calculated_offer_price`, `price_increase`, `sales_amount`, `estimated_gross_profit`, `estimated_comm`, `rep_comm`, `analysis_standard`, `ETD`, `pallets`) VALUES
	(16, '2020-09-10 13:01:35', 'New', NULL, 27, 88, 33, 12, 10, 0, 1000.00, 400.00, 0.00, 1, 1, 9, 11, 1, 25, 0, 26, '', NULL, 553.54, 5535.35, 6, 0, 332.12, 0, 0, 'USP', '2020-09-25 00:00:00', '1'),
	(17, '2020-09-10 13:01:36', 'New', NULL, 27, 90, 31, 12, 10, 0, 1000.00, 1000.00, 0.00, 1, 1, 9, 20, 1, 30, 0, 22, '', NULL, 1200.31, 12003.07, 6, 0, 720.18, 0, 0, 'BP', '2020-09-25 00:00:00', '');
/*!40000 ALTER TABLE `amuco_offers_sent_customers` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.amuco_packing
CREATE TABLE IF NOT EXISTS `amuco_packing` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla amuco_db.amuco_packing: ~27 rows (aproximadamente)
/*!40000 ALTER TABLE `amuco_packing` DISABLE KEYS */;
INSERT INTO `amuco_packing` (`id`, `name`, `description`) VALUES
	(6, 'Amuco Bag', ''),
	(7, 'Amucool Can', ''),
	(8, 'Amucool Cylinder', ''),
	(9, 'Amucool Cylinder And Box', ''),
	(10, 'Amusoy Bag', ''),
	(11, 'Bag', ''),
	(12, 'Bale', ''),
	(13, 'Big Bag', ''),
	(14, 'Bottle', ''),
	(15, 'Box', ''),
	(16, 'Can', ''),
	(17, 'Canister', ''),
	(18, 'Carton', ''),
	(19, 'Cylinder', ''),
	(20, 'Drum', ''),
	(21, 'Flexibag', ''),
	(22, 'Flexitank', ''),
	(23, 'Ibc Tank', ''),
	(24, 'Iso Tank', ''),
	(25, 'Neutral Bag', ''),
	(26, 'Original Factory Bag', ''),
	(27, 'Paper Bag', ''),
	(28, 'Premex Bag', ''),
	(29, 'Tin', ''),
	(30, 'To Be Confirmed', ''),
	(31, 'Torrington Cylinder', ''),
	(32, 'Woven Bag', ''),
	(33, 'test-pack', NULL);
/*!40000 ALTER TABLE `amuco_packing` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.amuco_payments_terms_suppliers
CREATE TABLE IF NOT EXISTS `amuco_payments_terms_suppliers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL DEFAULT '0',
  `description` varchar(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla amuco_db.amuco_payments_terms_suppliers: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `amuco_payments_terms_suppliers` DISABLE KEYS */;
INSERT INTO `amuco_payments_terms_suppliers` (`id`, `name`, `description`) VALUES
	(1, '100% TT Advance', '100% TT Advance');
/*!40000 ALTER TABLE `amuco_payments_terms_suppliers` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.amuco_pricing_settings
CREATE TABLE IF NOT EXISTS `amuco_pricing_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fix_expenses` double NOT NULL DEFAULT 0,
  `variable_expenses` double NOT NULL DEFAULT 0,
  `finance_costs` double NOT NULL DEFAULT 0,
  `coface` double NOT NULL DEFAULT 0,
  `bank_charge` double NOT NULL DEFAULT 0,
  `freight_insurance` double NOT NULL DEFAULT 0,
  `commision_purchase_office` double NOT NULL DEFAULT 0,
  `commision_representative` double NOT NULL DEFAULT 0,
  `commision_sales_agent` double NOT NULL DEFAULT 0,
  `date_from` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla amuco_db.amuco_pricing_settings: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `amuco_pricing_settings` DISABLE KEYS */;
INSERT INTO `amuco_pricing_settings` (`id`, `fix_expenses`, `variable_expenses`, `finance_costs`, `coface`, `bank_charge`, `freight_insurance`, `commision_purchase_office`, `commision_representative`, `commision_sales_agent`, `date_from`) VALUES
	(1, 3.89, 0.84, 5.1, 0.21, 60, 0.1875, 1, 0, 3, '2020-08-05');
/*!40000 ALTER TABLE `amuco_pricing_settings` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.amuco_products
CREATE TABLE IF NOT EXISTS `amuco_products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `custom_number` varchar(50) CHARACTER SET latin1 NOT NULL,
  `custom_number_brazil` varchar(50) CHARACTER SET latin1 NOT NULL,
  `cas` varchar(50) CHARACTER SET latin1 NOT NULL,
  `unit_id` int(10) unsigned NOT NULL,
  `remarks` varchar(250) CHARACTER SET latin1 NOT NULL,
  `active` tinyint(1) DEFAULT 1,
  `category_id` int(10) unsigned NOT NULL,
  `industry_id` varchar(250) DEFAULT NULL,
  `suppliers_id` varchar(250) DEFAULT NULL,
  `purchasing_office` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.amuco_products: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `amuco_products` DISABLE KEYS */;
INSERT INTO `amuco_products` (`id`, `date_created`, `date_updated`, `name`, `custom_number`, `custom_number_brazil`, `cas`, `unit_id`, `remarks`, `active`, `category_id`, `industry_id`, `suppliers_id`, `purchasing_office`) VALUES
	(2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CITRIC ACID ANHYDROUS MESH 30-100', '29.18.14.00.00', '', '77-92-9', 1, 'this is a first product created', 1, 9, 'Food', '', '5'),
	(3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Onion powder mesh 80-100', 'XXX', '', 'XXX', 1, 'This is a second product', 1, 10, 'Food', '', '5'),
	(5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Soy protein isolated 90% min non functional instant type 200-88', 'XXX', '', '9010-10-0', 1, 'Proteina de uso comercial, solo para pruebas de laboratorio', 1, 14, 'Food', '8', '6'),
	(6, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'SOY PROTEIN ISOLATED 90% MIN FUNCTIONAL NON DUSTY', 'XXX', '', '9010-10-0', 1, '', 1, 14, 'Food', '8', '6');
/*!40000 ALTER TABLE `amuco_products` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.amuco_purchasing_office
CREATE TABLE IF NOT EXISTS `amuco_purchasing_office` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `description` varchar(250) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla amuco_db.amuco_purchasing_office: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `amuco_purchasing_office` DISABLE KEYS */;
INSERT INTO `amuco_purchasing_office` (`id`, `name`, `description`) VALUES
	(5, 'Yan', 'Nanjing Office'),
	(6, 'Maggie', 'Dalian Office');
/*!40000 ALTER TABLE `amuco_purchasing_office` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.amuco_purchasing_unit_product
CREATE TABLE IF NOT EXISTS `amuco_purchasing_unit_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_purchasing_office` int(11) NOT NULL DEFAULT 0,
  `id_product` int(11) NOT NULL DEFAULT 0,
  `id_unit` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla amuco_db.amuco_purchasing_unit_product: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `amuco_purchasing_unit_product` DISABLE KEYS */;
INSERT INTO `amuco_purchasing_unit_product` (`id`, `id_purchasing_office`, `id_product`, `id_unit`) VALUES
	(29, 6, 5, 1),
	(30, 5, 2, 3),
	(32, 6, 6, 1);
/*!40000 ALTER TABLE `amuco_purchasing_unit_product` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.amuco_request_customers
CREATE TABLE IF NOT EXISTS `amuco_request_customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `supplier_id` int(10) unsigned NOT NULL DEFAULT 0,
  `customer_id` int(10) unsigned NOT NULL DEFAULT 0,
  `status` int(10) unsigned DEFAULT 0,
  `customer_request_id` int(10) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla amuco_db.amuco_request_customers: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `amuco_request_customers` DISABLE KEYS */;
/*!40000 ALTER TABLE `amuco_request_customers` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.amuco_samples
CREATE TABLE IF NOT EXISTS `amuco_samples` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `supplier_id` int(10) unsigned NOT NULL,
  `note` varchar(250) NOT NULL,
  `lot` varchar(250) NOT NULL,
  `status` varchar(50) NOT NULL,
  `remarks` varchar(250) NOT NULL,
  `date_received` datetime NOT NULL,
  `date_sent` datetime NOT NULL,
  `date_requested` datetime NOT NULL,
  `customer_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.amuco_samples: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `amuco_samples` DISABLE KEYS */;
INSERT INTO `amuco_samples` (`id`, `date_created`, `date_updated`, `product_id`, `supplier_id`, `note`, `lot`, `status`, `remarks`, `date_received`, `date_sent`, `date_requested`, `customer_id`) VALUES
	(4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 4, 'Note One', 'lot 3', 'Pending', 'Remarks', '2020-06-01 16:52:00', '2020-06-02 16:53:00', '2020-06-03 16:53:00', 6);
/*!40000 ALTER TABLE `amuco_samples` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.amuco_suppliers
CREATE TABLE IF NOT EXISTS `amuco_suppliers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `supplier_code` varchar(50) CHARACTER SET latin1 NOT NULL,
  `country` int(10) unsigned NOT NULL,
  `state` varchar(100) CHARACTER SET latin1 NOT NULL,
  `city` varchar(100) CHARACTER SET latin1 NOT NULL,
  `address` varchar(100) CHARACTER SET latin1 NOT NULL,
  `postal_code` varchar(30) CHARACTER SET latin1 NOT NULL,
  `url` varchar(100) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `mobile_phone` varchar(30) CHARACTER SET latin1 NOT NULL,
  `office_phone` varchar(30) CHARACTER SET latin1 NOT NULL,
  `fax` varchar(30) CHARACTER SET latin1 NOT NULL,
  `payment_terms` varchar(250) CHARACTER SET latin1 NOT NULL,
  `classification_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla amuco_db.amuco_suppliers: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `amuco_suppliers` DISABLE KEYS */;
INSERT INTO `amuco_suppliers` (`id`, `date_created`, `date_updated`, `name`, `active`, `supplier_code`, `country`, `state`, `city`, `address`, `postal_code`, `url`, `email`, `mobile_phone`, `office_phone`, `fax`, `payment_terms`, `classification_id`) VALUES
	(4, '0000-00-00 00:00:00', '2020-07-13 08:22:45', 'Office China', 1, 'china', 47, 'wuan', 'wuan', 'wuan 22', '', '', 'supplier_1@yopmail.com', '564654564564646', '', '', 'payment', 0),
	(5, '2020-06-11 14:26:00', '2020-07-17 09:42:35', 'Supplier second', 1, 'supp 2', 6, 'Colombia', 'Medellin', 'Asdd', '', 'www.supplier.com', 'supplier_2@yopmail.com', '+571546465', '', '', 'payment', 6),
	(6, '2020-06-11 14:27:06', '2020-07-29 15:15:34', 'WEIFANG ENSIGN INDUSTRY CO., LTD.', 1, 'WEIFANG ENSIGN', 47, 'Shandong', 'Weifang', '#1567 Changsheng Street, Changle', '', '', 'XXX', '+86 536 628-8516', '', '', '60 day date BL/AWB', 6),
	(7, '2020-06-19 12:48:24', '2020-07-17 10:12:02', 'Hufei', 1, '20 MICRONS', 105, '', 'Vadodara', '307-308, anundeep  complex  race  course', '390007', 'www.20microns.com', 'info@20microns.com', '+91 265 3057000', '+91 265 3057000', '+91 265 2333755', '', 5),
	(8, '2020-07-02 15:46:43', '2020-07-13 08:23:46', 'DEZHOU RUIKANG FOOD CO., LTD.', 1, 'DEZHOU RUI', 47, 'Shandong Province', 'Shandong', 'No. 968  Rui kang rd, De Zhou Economical Development', '253034', 'www.crisoyprotein.com', 'dzruikang@allyum.com', '+86  534 2562280', '+86 534 2562270', '+86 534 256 2270', '30% / 70%  against copy of document', 0),
	(9, '2020-07-02 16:28:37', '2020-07-21 09:34:32', 'Liaocheng new era foods', 1, 'NEW ERA FOODS', 47, 'Shandong province', 'Liaocheng', 'Room 103, unit 3. no 1, canal commercial building', '', 'http://', 'xxxx@newerafoods.com', '+86 456 9009876', '', '', '', 5);
/*!40000 ALTER TABLE `amuco_suppliers` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.amuco_suppliers_bank
CREATE TABLE IF NOT EXISTS `amuco_suppliers_bank` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `supplier_id` int(10) unsigned NOT NULL,
  `beneficiary_wires` varchar(100) NOT NULL,
  `beneficiary_bank` varchar(100) NOT NULL,
  `account_number` varchar(100) NOT NULL,
  `switf` varchar(100) NOT NULL,
  `intermediary_bank` varchar(100) NOT NULL,
  `account_intermediary` varchar(100) NOT NULL,
  `swift_intermediary` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_update` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla amuco_db.amuco_suppliers_bank: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `amuco_suppliers_bank` DISABLE KEYS */;
INSERT INTO `amuco_suppliers_bank` (`id`, `supplier_id`, `beneficiary_wires`, `beneficiary_bank`, `account_number`, `switf`, `intermediary_bank`, `account_intermediary`, `swift_intermediary`, `date_created`, `date_update`) VALUES
	(5, 9, 'LIAOCHENG NEW ERA FOODS', 'Banko 1', '123456646546', '213546asda', 'Banck in', '13213213546546', '132131322', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(6, 4, 'Office China', 'Bank 1', '1234567898754654', '45asdas', 'bank2', '1234567987987987987', '213213asd', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `amuco_suppliers_bank` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.amuco_supplier_payment_terms
CREATE TABLE IF NOT EXISTS `amuco_supplier_payment_terms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_code` varchar(25) COLLATE utf8_bin NOT NULL,
  `days` int(11) NOT NULL DEFAULT 0,
  `days_02` double NOT NULL DEFAULT 0,
  `percentage_01` double NOT NULL DEFAULT 0,
  `percentage_02` double NOT NULL DEFAULT 0,
  `description` varchar(255) COLLATE utf8_bin NOT NULL,
  `company` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `company_code` varchar(2) COLLATE utf8_bin NOT NULL,
  `active` int(11) NOT NULL DEFAULT 0,
  `no_name_06` int(11) NOT NULL DEFAULT 0,
  `date_from` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Volcando datos para la tabla amuco_db.amuco_supplier_payment_terms: ~22 rows (aproximadamente)
/*!40000 ALTER TABLE `amuco_supplier_payment_terms` DISABLE KEYS */;
INSERT INTO `amuco_supplier_payment_terms` (`id`, `payment_code`, `days`, `days_02`, `percentage_01`, `percentage_02`, `description`, `company`, `company_code`, `active`, `no_name_06`, `date_from`) VALUES
	(1, ' 000', 0, 0, 0, 0, '100% TT Advance', 'AMUCO INC.', 'AI', 1, 1, '2020-08-11'),
	(2, '% 20/80', 24, -6, 20, 80, '20%/80% against Copy of Docs', 'AMUCO INC.', 'AI', 1, 1, '2020-08-11'),
	(3, '% 30/70', 21, -9, 30, 70, '30%/70% against Copy of Docs', 'AMUCO INC.', 'AI', 1, 1, '2020-08-11'),
	(4, '% 40/60', 18, -12, 40, 60, '40%/60% against Copy of Docs', 'AMUCO INC.', 'AI', 1, 1, '2020-08-11'),
	(5, '% 50/50', 15, -15, 50, 50, '50%/50% against Copy of Docs', 'AMUCO INC.', 'AI', 1, 1, '2020-08-11'),
	(6, '% 50/50 60', 30, 0, 50, 50, '50%/50% 60 days date BL/AWB', '', 'AI', 1, 0, '2020-08-11'),
	(7, '% 80/20', 10, -24, 80, 20, '80%/20% against Copy of Docs', 'AMUCO INC.', 'AI', 1, 1, '2020-08-11'),
	(8, '000', 15, 0, 0, 0, '100% against Copy of Docs', 'AMUCO INC.', 'AI', 1, 1, '2020-08-11'),
	(9, '030', 30, 30, 0, 0, 'CAD', 'AMUCO INC.', 'AI', 1, 1, '2020-08-11'),
	(10, '031', 30, 30, 0, 0, '30 days date BL/AWB', 'AMUCO INC.', 'AI', 1, 1, '2020-08-11'),
	(11, '045', 45, 0, 0, 0, '45 days date BL/AWB', '', 'AI', 1, 0, '2020-08-11'),
	(12, '060', 60, 60, 0, 0, '60 days date BL/AWB', 'AMUCO INC.', 'AI', 1, 1, '2020-08-11'),
	(13, '090', 90, 90, 0, 0, '90 days date BL/AWB', 'AMUCO INC.', 'AI', 1, 1, '2020-08-11'),
	(14, '105', 105, 0, 0, 0, '105 days date BL/AWB', '', 'RE', 1, 0, '2020-08-11'),
	(15, '120', 120, 120, 0, 0, '120 days date BL/AWB', 'AMUCO INC.', 'AI', 1, 1, '2020-08-11'),
	(16, '150', 150, 150, 0, 0, '150 days date BL/AWB', 'AMUCO INC.', 'AI', 1, 1, '2020-08-11'),
	(17, '180', 180, 180, 0, 0, '180 days date BL/AWB', 'AMUCO INC.', 'AI', 1, 1, '2020-08-11'),
	(18, '240', 240, 0, 0, 0, '240 days date BL/AWB', '', 'RE', 1, 0, '2020-08-11'),
	(19, 'D 000', 0, 0, 0, 0, '100% TT Advance', 'DPCC', 'DP', 1, 1, '2020-08-11'),
	(20, 'D 030', 30, 30, 0, 0, '30 days date BL', 'DPCC', 'DP', 1, 1, '2020-08-11'),
	(21, 'D% 30/70', 0, 0, 30, 70, '30% Advanced / 70% against Copy of Docs', 'DPCC', 'DP', 0, 0, '2020-08-11'),
	(22, 'D% 50/50', 0, 0, 50, 50, '50% Advanced / 50% against Copy of Docs', 'DPCC', 'DP', 0, 0, '2020-08-11');
/*!40000 ALTER TABLE `amuco_supplier_payment_terms` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.amuco_unit_types
CREATE TABLE IF NOT EXISTS `amuco_unit_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `description` varchar(250) CHARACTER SET latin1 NOT NULL,
  `value_gramos` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.amuco_unit_types: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `amuco_unit_types` DISABLE KEYS */;
INSERT INTO `amuco_unit_types` (`id`, `name`, `description`, `value_gramos`) VALUES
	(1, 'MT', 'Metric Tons', 1000000),
	(2, 'Kg', 'Kilograms', 1000),
	(4, 'Cylinders', 'Cylinders', 0);
/*!40000 ALTER TABLE `amuco_unit_types` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.amuco_visits
CREATE TABLE IF NOT EXISTS `amuco_visits` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `customer_id` int(10) unsigned NOT NULL,
  `supplier_id` int(10) unsigned NOT NULL,
  `date_visit` datetime NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  `notes` text NOT NULL,
  `subject` varchar(250) NOT NULL,
  `type_client` varchar(10) NOT NULL,
  `type_visit` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla amuco_db.amuco_visits: 2 rows
/*!40000 ALTER TABLE `amuco_visits` DISABLE KEYS */;
INSERT INTO `amuco_visits` (`id`, `date_created`, `date_updated`, `user_id`, `customer_id`, `supplier_id`, `date_visit`, `contact_name`, `notes`, `subject`, `type_client`, `type_visit`) VALUES
	(17, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5, 6, 0, '2020-07-14 00:00:00', '4', 'Se hablo por telefono sobre el envio de la cotizacion&nbsp;', 'Prueba de envio de cotizacion', 'Customer', 'Telephone'),
	(18, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3, 9, 0, '2020-07-15 00:00:00', '5', 'Estas es nueva<br />\r\nx<br />\r\nx<br />\r\nx<br />\r\nx<br />\r\nx<br />\r\nx<br />\r\nx<br />\r\nx<br />\r\nx<br />\r\nx<br />\r\n&nbsp;', 'Visita 2', 'Customer', 'Personal');
/*!40000 ALTER TABLE `amuco_visits` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.blog
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `image` text NOT NULL,
  `tags` text NOT NULL,
  `category` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL,
  `author` varchar(100) NOT NULL,
  `viewers` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.blog: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
INSERT INTO `blog` (`id`, `title`, `slug`, `content`, `image`, `tags`, `category`, `status`, `author`, `viewers`, `created_at`, `updated_at`) VALUES
	(1, 'Hello Wellcome To Cicool Builder', 'Hello-Wellcome-To-Ciool-Builder', 'greetings from our team I hope to be happy! ', 'wellcome.jpg', 'greetings', '1', 'publish', 'admin', 0, '2020-05-30 20:17:15', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.blog_category
CREATE TABLE IF NOT EXISTS `blog_category` (
  `category_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(200) NOT NULL,
  `category_desc` text NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.blog_category: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `blog_category` DISABLE KEYS */;
INSERT INTO `blog_category` (`category_id`, `category_name`, `category_desc`) VALUES
	(1, 'Technology', ''),
	(2, 'Lifestyle', '');
/*!40000 ALTER TABLE `blog_category` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.captcha
CREATE TABLE IF NOT EXISTS `captcha` (
  `captcha_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `captcha_time` int(10) DEFAULT NULL,
  `ip_address` varchar(45) NOT NULL,
  `word` varchar(20) NOT NULL,
  PRIMARY KEY (`captcha_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.captcha: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `captcha` DISABLE KEYS */;
/*!40000 ALTER TABLE `captcha` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.cc_options
CREATE TABLE IF NOT EXISTS `cc_options` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `option_name` varchar(200) NOT NULL,
  `option_value` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.cc_options: ~13 rows (aproximadamente)
/*!40000 ALTER TABLE `cc_options` DISABLE KEYS */;
INSERT INTO `cc_options` (`id`, `option_name`, `option_value`) VALUES
	(1, 'active_theme', 'cicool'),
	(2, 'favicon', 'default.png'),
	(3, 'site_name', 'Amuco'),
	(4, 'timezone', 'America/New_York'),
	(5, 'limit_pagination', '10'),
	(6, 'site_description', 'site amuco'),
	(7, 'keywords', ''),
	(8, 'author', ''),
	(9, 'logo', '20200603112157-2020-06-03setting103619.png'),
	(10, 'landing_page_id', 'login'),
	(11, 'email', 'jaz@ztgroupcorp.com'),
	(12, 'google_id', ''),
	(13, 'google_secret', '');
/*!40000 ALTER TABLE `cc_options` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.cc_session
CREATE TABLE IF NOT EXISTS `cc_session` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) NOT NULL,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.cc_session: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `cc_session` DISABLE KEYS */;
/*!40000 ALTER TABLE `cc_session` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.crud
CREATE TABLE IF NOT EXISTS `crud` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `table_name` varchar(200) NOT NULL,
  `primary_key` varchar(200) NOT NULL,
  `page_read` varchar(20) DEFAULT NULL,
  `page_create` varchar(20) DEFAULT NULL,
  `page_update` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.crud: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `crud` DISABLE KEYS */;
INSERT INTO `crud` (`id`, `title`, `subject`, `table_name`, `primary_key`, `page_read`, `page_create`, `page_update`) VALUES
	(1, 'Amuco Incoterm', 'Amuco Incoterm', 'amuco_incoterm', 'id', 'yes', 'yes', 'yes');
/*!40000 ALTER TABLE `crud` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.crud_custom_option
CREATE TABLE IF NOT EXISTS `crud_custom_option` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `crud_field_id` int(11) NOT NULL,
  `crud_id` int(11) NOT NULL,
  `option_value` text NOT NULL,
  `option_label` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.crud_custom_option: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `crud_custom_option` DISABLE KEYS */;
/*!40000 ALTER TABLE `crud_custom_option` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.crud_field
CREATE TABLE IF NOT EXISTS `crud_field` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `crud_id` int(11) NOT NULL,
  `field_name` varchar(200) NOT NULL,
  `field_label` varchar(200) DEFAULT NULL,
  `input_type` varchar(200) NOT NULL,
  `show_column` varchar(10) DEFAULT NULL,
  `show_add_form` varchar(10) DEFAULT NULL,
  `show_update_form` varchar(10) DEFAULT NULL,
  `show_detail_page` varchar(10) DEFAULT NULL,
  `sort` int(11) NOT NULL,
  `relation_table` varchar(200) DEFAULT NULL,
  `relation_value` varchar(200) DEFAULT NULL,
  `relation_label` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.crud_field: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `crud_field` DISABLE KEYS */;
INSERT INTO `crud_field` (`id`, `crud_id`, `field_name`, `field_label`, `input_type`, `show_column`, `show_add_form`, `show_update_form`, `show_detail_page`, `sort`, `relation_table`, `relation_value`, `relation_label`) VALUES
	(1, 1, 'id', 'id', 'number', '', '', '', 'yes', 1, '', '', ''),
	(2, 1, 'name', 'name', 'input', 'yes', 'yes', 'yes', 'yes', 2, '', '', ''),
	(3, 1, 'description', 'description', 'input', 'yes', 'yes', 'yes', 'yes', 3, '', '', ''),
	(4, 1, 'active', 'active', 'input', '', '', 'yes', 'yes', 4, '', '', '');
/*!40000 ALTER TABLE `crud_field` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.crud_field_configuration
CREATE TABLE IF NOT EXISTS `crud_field_configuration` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `crud_field_id` int(11) NOT NULL,
  `crud_id` int(11) NOT NULL,
  `group_config` varchar(200) NOT NULL,
  `config_name` text NOT NULL,
  `config_value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.crud_field_configuration: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `crud_field_configuration` DISABLE KEYS */;
/*!40000 ALTER TABLE `crud_field_configuration` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.crud_field_validation
CREATE TABLE IF NOT EXISTS `crud_field_validation` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `crud_field_id` int(11) NOT NULL,
  `crud_id` int(11) NOT NULL,
  `validation_name` varchar(200) NOT NULL,
  `validation_value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.crud_field_validation: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `crud_field_validation` DISABLE KEYS */;
INSERT INTO `crud_field_validation` (`id`, `crud_field_id`, `crud_id`, `validation_name`, `validation_value`) VALUES
	(1, 2, 1, 'required', ''),
	(2, 2, 1, 'max_length', '20'),
	(3, 3, 1, 'max_length', '100'),
	(4, 4, 1, 'required', ''),
	(5, 4, 1, 'max_length', '1');
/*!40000 ALTER TABLE `crud_field_validation` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.crud_input_chained
CREATE TABLE IF NOT EXISTS `crud_input_chained` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `chain_field` varchar(250) DEFAULT NULL,
  `chain_field_eq` varchar(250) DEFAULT NULL,
  `crud_field_id` int(11) DEFAULT NULL,
  `crud_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.crud_input_chained: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `crud_input_chained` DISABLE KEYS */;
/*!40000 ALTER TABLE `crud_input_chained` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.crud_input_type
CREATE TABLE IF NOT EXISTS `crud_input_type` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(200) NOT NULL,
  `relation` varchar(20) NOT NULL,
  `custom_value` int(11) NOT NULL,
  `validation_group` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.crud_input_type: ~27 rows (aproximadamente)
/*!40000 ALTER TABLE `crud_input_type` DISABLE KEYS */;
INSERT INTO `crud_input_type` (`id`, `type`, `relation`, `custom_value`, `validation_group`) VALUES
	(1, 'input', '0', 0, 'input'),
	(2, 'textarea', '0', 0, 'text'),
	(3, 'select', '1', 0, 'select'),
	(4, 'editor_wysiwyg', '0', 0, 'editor'),
	(5, 'password', '0', 0, 'password'),
	(6, 'email', '0', 0, 'email'),
	(7, 'address_map', '0', 0, 'address_map'),
	(8, 'file', '0', 0, 'file'),
	(9, 'file_multiple', '0', 0, 'file_multiple'),
	(10, 'datetime', '0', 0, 'datetime'),
	(11, 'date', '0', 0, 'date'),
	(12, 'timestamp', '0', 0, 'timestamp'),
	(13, 'number', '0', 0, 'number'),
	(14, 'yes_no', '0', 0, 'yes_no'),
	(15, 'time', '0', 0, 'time'),
	(16, 'year', '0', 0, 'year'),
	(17, 'select_multiple', '1', 0, 'select_multiple'),
	(18, 'checkboxes', '1', 0, 'checkboxes'),
	(19, 'options', '1', 0, 'options'),
	(20, 'true_false', '0', 0, 'true_false'),
	(21, 'current_user_username', '0', 0, 'user_username'),
	(22, 'current_user_id', '0', 0, 'current_user_id'),
	(23, 'custom_option', '0', 1, 'custom_option'),
	(24, 'custom_checkbox', '0', 1, 'custom_checkbox'),
	(25, 'custom_select_multiple', '0', 1, 'custom_select_multiple'),
	(26, 'custom_select', '0', 1, 'custom_select'),
	(27, 'chained', '1', 0, 'chained');
/*!40000 ALTER TABLE `crud_input_type` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.crud_input_validation
CREATE TABLE IF NOT EXISTS `crud_input_validation` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `validation` varchar(200) NOT NULL,
  `input_able` varchar(20) NOT NULL,
  `group_input` text NOT NULL,
  `input_placeholder` text NOT NULL,
  `call_back` varchar(10) NOT NULL,
  `input_validation` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.crud_input_validation: ~37 rows (aproximadamente)
/*!40000 ALTER TABLE `crud_input_validation` DISABLE KEYS */;
INSERT INTO `crud_input_validation` (`id`, `validation`, `input_able`, `group_input`, `input_placeholder`, `call_back`, `input_validation`) VALUES
	(1, 'required', 'no', 'input, file, number, text, datetime, select, password, email, editor, date, yes_no, time, year, select_multiple, options, checkboxes, true_false, address_map, custom_option, custom_checkbox, custom_select_multiple, custom_select, file_multiple, chained', '', '', ''),
	(2, 'max_length', 'yes', 'input, number, text, select, password, email, editor, yes_no, time, year, select_multiple, options, checkboxes, address_map', '', '', 'numeric'),
	(3, 'min_length', 'yes', 'input, number, text, select, password, email, editor, time, year, select_multiple, address_map', '', '', 'numeric'),
	(4, 'valid_email', 'no', 'input, email', '', '', ''),
	(5, 'valid_emails', 'no', 'input, email', '', '', ''),
	(6, 'regex', 'yes', 'input, number, text, datetime, select, password, email, editor, date, yes_no, time, year, select_multiple, options, checkboxes', '', 'yes', 'callback_valid_regex'),
	(7, 'decimal', 'no', 'input, number, text, select', '', '', ''),
	(8, 'allowed_extension', 'yes', 'file, file_multiple', 'ex : jpg,png,..', '', 'callback_valid_extension_list'),
	(9, 'max_width', 'yes', 'file, file_multiple', '', '', 'numeric'),
	(10, 'max_height', 'yes', 'file, file_multiple', '', '', 'numeric'),
	(11, 'max_size', 'yes', 'file, file_multiple', '... kb', '', 'numeric'),
	(12, 'max_item', 'yes', 'file_multiple', '', '', 'numeric'),
	(13, 'valid_url', 'no', 'input, text', '', '', ''),
	(14, 'alpha', 'no', 'input, text, select, password, editor, yes_no', '', '', ''),
	(15, 'alpha_numeric', 'no', 'input, number, text, select, password, editor', '', '', ''),
	(16, 'alpha_numeric_spaces', 'no', 'input, number, text,select, password, editor', '', '', ''),
	(17, 'valid_number', 'no', 'input, number, text, password, editor, true_false', '', 'yes', ''),
	(18, 'valid_datetime', 'no', 'input, datetime, text', '', 'yes', ''),
	(19, 'valid_date', 'no', 'input, datetime, date, text', '', 'yes', ''),
	(20, 'valid_max_selected_option', 'yes', 'select_multiple, custom_select_multiple, custom_checkbox, checkboxes', '', 'yes', 'numeric'),
	(21, 'valid_min_selected_option', 'yes', 'select_multiple, custom_select_multiple, custom_checkbox, checkboxes', '', 'yes', 'numeric'),
	(22, 'valid_alpha_numeric_spaces_underscores', 'no', 'input, text,select, password, editor', '', 'yes', ''),
	(23, 'matches', 'yes', 'input, number, text, password, email', 'any field', 'no', 'callback_valid_alpha_numeric_spaces_underscores'),
	(24, 'valid_json', 'no', 'input, text, editor', '', 'yes', ' '),
	(25, 'valid_url', 'no', 'input, text, editor', '', 'no', ' '),
	(26, 'exact_length', 'yes', 'input, text, number', '0 - 99999*', 'no', 'numeric'),
	(27, 'alpha_dash', 'no', 'input, text', '', 'no', ''),
	(28, 'integer', 'no', 'input, text, number', '', 'no', ''),
	(29, 'differs', 'yes', 'input, text, number, email, password, editor, options, select', 'any field', 'no', 'callback_valid_alpha_numeric_spaces_underscores'),
	(30, 'is_natural', 'no', 'input, text, number', '', 'no', ''),
	(31, 'is_natural_no_zero', 'no', 'input, text, number', '', 'no', ''),
	(32, 'less_than', 'yes', 'input, text, number', '', 'no', 'numeric'),
	(33, 'less_than_equal_to', 'yes', 'input, text, number', '', 'no', 'numeric'),
	(34, 'greater_than', 'yes', 'input, text, number', '', 'no', 'numeric'),
	(35, 'greater_than_equal_to', 'yes', 'input, text, number', '', 'no', 'numeric'),
	(36, 'in_list', 'yes', 'input, text, number, select, options', '', 'no', 'callback_valid_multiple_value'),
	(37, 'valid_ip', 'no', 'input, text', '', 'no', '');
/*!40000 ALTER TABLE `crud_input_validation` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.form
CREATE TABLE IF NOT EXISTS `form` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `table_name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.form: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `form` DISABLE KEYS */;
/*!40000 ALTER TABLE `form` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.form_custom_attribute
CREATE TABLE IF NOT EXISTS `form_custom_attribute` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `form_field_id` int(11) NOT NULL,
  `form_id` int(11) NOT NULL,
  `attribute_value` text NOT NULL,
  `attribute_label` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.form_custom_attribute: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `form_custom_attribute` DISABLE KEYS */;
/*!40000 ALTER TABLE `form_custom_attribute` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.form_custom_option
CREATE TABLE IF NOT EXISTS `form_custom_option` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `form_field_id` int(11) NOT NULL,
  `form_id` int(11) NOT NULL,
  `option_value` text NOT NULL,
  `option_label` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.form_custom_option: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `form_custom_option` DISABLE KEYS */;
/*!40000 ALTER TABLE `form_custom_option` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.form_field
CREATE TABLE IF NOT EXISTS `form_field` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `form_id` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `field_name` varchar(200) NOT NULL,
  `input_type` varchar(200) NOT NULL,
  `field_label` varchar(200) DEFAULT NULL,
  `placeholder` text DEFAULT NULL,
  `auto_generate_help_block` varchar(10) DEFAULT NULL,
  `help_block` text DEFAULT NULL,
  `relation_table` varchar(200) DEFAULT NULL,
  `relation_value` varchar(200) DEFAULT NULL,
  `relation_label` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.form_field: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `form_field` DISABLE KEYS */;
/*!40000 ALTER TABLE `form_field` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.form_field_validation
CREATE TABLE IF NOT EXISTS `form_field_validation` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `form_field_id` int(11) NOT NULL,
  `form_id` int(11) NOT NULL,
  `validation_name` varchar(200) NOT NULL,
  `validation_value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.form_field_validation: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `form_field_validation` DISABLE KEYS */;
/*!40000 ALTER TABLE `form_field_validation` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.keys
CREATE TABLE IF NOT EXISTS `keys` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL,
  `is_private_key` tinyint(1) NOT NULL,
  `ip_addresses` text DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.keys: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `keys` DISABLE KEYS */;
INSERT INTO `keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
	(1, 0, '77397F413CB7A74F33E103FCC4B98C50', 0, 0, 0, NULL, '2020-05-30 20:17:16');
/*!40000 ALTER TABLE `keys` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.menu
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `label` varchar(200) DEFAULT NULL,
  `type` varchar(200) DEFAULT NULL,
  `icon_color` varchar(200) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `sort` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `menu_type_id` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.menu: ~46 rows (aproximadamente)
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` (`id`, `label`, `type`, `icon_color`, `link`, `sort`, `parent`, `icon`, `menu_type_id`, `active`) VALUES
	(1, 'MAIN NAVIGATION', 'label', '', '{admin_url}/dashboard', 1, 0, '', 1, 1),
	(2, 'Dashboard', 'menu', '', '{admin_url}/dashboard', 2, 0, 'fa-dashboard', 1, 1),
	(3, 'CRUD Builder', 'menu', 'default', '{admin_url}/crud', 3, 0, 'fa-table', 1, 1),
	(4, 'API Builder', 'menu', '', '{admin_url}/rest', 4, 0, 'fa-code', 1, 1),
	(5, 'Page Builder', 'menu', '', '{admin_url}/page', 5, 0, 'fa-file-o', 1, 1),
	(6, 'Form Builder', 'menu', '', '{admin_url}/form', 6, 0, 'fa-newspaper-o', 1, 1),
	(7, 'Blog', 'menu', 'default', '{admin_url}/blog', 7, 0, 'fa-file-text-o', 1, 1),
	(8, 'Menu', 'menu', '', '{admin_url}/menu', 8, 0, 'fa-bars', 1, 1),
	(9, 'Auth', 'menu', '', '', 9, 0, 'fa-shield', 1, 1),
	(10, 'User', 'menu', '', '{admin_url}/user', 10, 9, '', 1, 1),
	(11, 'Groups', 'menu', '', '{admin_url}/group', 11, 9, '', 1, 1),
	(12, 'Access', 'menu', '', '{admin_url}/access', 12, 9, '', 1, 1),
	(13, 'Permission', 'menu', '', '{admin_url}/permission', 13, 9, '', 1, 1),
	(14, 'API Keys', 'menu', '', '{admin_url}/keys', 14, 9, '', 1, 1),
	(15, 'Extension', 'menu', 'default', '{admin_url}/extension', 15, 0, 'fa-puzzle-piece', 1, 1),
	(16, 'OTHER', 'label', 'default', '{admin_url}', 16, 0, '', 1, 1),
	(17, 'Settings', 'menu', 'text-red', '{admin_url}/setting', 17, 0, 'fa-circle-o', 1, 1),
	(18, 'Web Documentation', 'menu', 'text-blue', '{admin_url}/doc/web', 18, 0, 'fa-circle-o', 1, 1),
	(19, 'API Documentation', 'menu', 'text-yellow', '{admin_url}/doc/api', 19, 0, 'fa-circle-o', 1, 1),
	(20, 'Home', 'menu', '', '/', 1, 0, '', 2, 1),
	(21, 'Blog', 'menu', '', 'blog', 4, 0, '', 2, 1),
	(22, 'Dashboard', 'menu', '', 'administrator/dashboard', 5, 0, '', 2, 1),
	(23, 'Amuco', 'label', 'default', '{admin_url}', 20, 0, '', 1, 1),
	(24, 'Customers Dashboard', 'menu', 'text-blue', '{admin_url}/amuco_customers', 26, 0, 'fa-dashboard', 1, 1),
	(25, 'Customers', 'menu', 'text-yellow', '{admin_url}/amuco_customers', 27, 24, 'fa-circle-thin', 1, 1),
	(26, 'Credit Insurance', 'menu', 'text-green', '{admin_url}/amuco_credit_insurance', 28, 24, 'fa-circle-thin', 1, 1),
	(27, 'Contacts', 'menu', 'text-green', '{admin_url}/amuco_contacts', 30, 0, 'fa-users', 1, 1),
	(28, 'Samples', 'menu', 'text-gray', '{admin_url}/amuco_samples', 29, 24, 'fa-circle-thin', 1, 1),
	(29, 'Visits', 'menu', 'text-yellow', '{admin_url}/amuco_visits', 31, 0, 'fa-circle', 1, 1),
	(30, 'Suppliers', 'menu', 'text-yellow', '{admin_url}/amuco_suppliers', 32, 0, 'fa-industry', 1, 1),
	(31, 'Products', 'menu', 'text-aqua', '{admin_url}/amuco_products', 34, 0, 'fa-circle', 1, 1),
	(32, 'Product Categories', 'menu', 'text-olive', '{admin_url}/amuco_category_product', 35, 0, 'fa-circle', 1, 1),
	(33, 'Type Units', 'menu', 'default', '{admin_url}/amuco_unit_types', 37, 0, 'fa-circle', 1, 1),
	(34, 'Industries', 'menu', 'text-purple', '{admin_url}/amuco_industry_type', 36, 0, 'fa-circle', 1, 1),
	(35, 'Incoterm', 'menu', 'text-green', '{admin_url}/amuco_incoterm', 38, 0, 'fa-circle', 1, 1),
	(36, 'Destination Port', 'menu', 'text-fuchsia', '{admin_url}/amuco_destination_port', 40, 0, 'fa-circle', 1, 1),
	(37, 'Customers Requests', 'menu', 'text-gray', '{admin_url}/amuco_customer_request', 21, 0, 'fa-circle', 1, 1),
	(38, 'Create Quotation Request', 'menu', 'text-lime', '{admin_url}/amuco_customer_request/add', 22, 37, 'fa-circle-thin', 1, 1),
	(39, 'List Customer Quot. Requests', 'menu', 'text-orange', '{admin_url}/amuco_customer_request', 23, 37, 'fa-circle-thin', 1, 1),
	(40, 'Office Offers', 'menu', 'text-orange', '{admin_url}', 41, 0, 'fa-circle', 1, 1),
	(41, 'New Requests Received', 'menu', 'text-red', '{admin_url}/amuco_dashboard_office/request_pendig/', 42, 40, 'fa-circle-thin', 1, 1),
	(42, 'Pending Requests', 'menu', 'default', '{admin_url}/amuco_details_request_office/pending_list/', 43, 40, 'fa-circle-thin', 1, 1),
	(43, 'Purchasing Office', 'menu', 'text-lime', '{admin_url}/amuco_purchasing_office', 39, 0, 'fa-circle', 1, 1),
	(44, 'Suppliers Classification', 'menu', 'text-aqua', '{admin_url}/amuco_classification_suppliers', 33, 0, 'fa-circle', 1, 1),
	(45, 'List Quotation Requested', 'menu', 'text-aqua', '{admin_url}/amuco_customer_request/list_request_pending_price', 24, 37, 'fa-circle-thin', 1, 1),
	(47, 'Price Calculator', 'menu', 'text-red', '{admin_url}/amuco_price_calculator', 45, 37, 'fa-circle-thin', 1, 1);
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.menu_type
CREATE TABLE IF NOT EXISTS `menu_type` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `definition` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.menu_type: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `menu_type` DISABLE KEYS */;
INSERT INTO `menu_type` (`id`, `name`, `definition`) VALUES
	(1, 'side menu', NULL),
	(2, 'top menu', NULL);
/*!40000 ALTER TABLE `menu_type` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.migrations: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`version`) VALUES
	(1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.mw_data_comparison
CREATE TABLE IF NOT EXISTS `mw_data_comparison` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `integration_id` int(11) NOT NULL DEFAULT 0,
  `source_id` int(11) NOT NULL,
  `fields_data` text COLLATE utf8_bin NOT NULL,
  `hash` varchar(32) COLLATE utf8_bin NOT NULL,
  `status` varchar(32) COLLATE utf8_bin NOT NULL DEFAULT '',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_DATA_T_INTEGRATION_T` (`integration_id`),
  CONSTRAINT `FK_DATA_T_INTEGRATION_T` FOREIGN KEY (`integration_id`) REFERENCES `mw_integrations_list` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=282 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Volcando datos para la tabla amuco_db.mw_data_comparison: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `mw_data_comparison` DISABLE KEYS */;
/*!40000 ALTER TABLE `mw_data_comparison` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.mw_data_processing
CREATE TABLE IF NOT EXISTS `mw_data_processing` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `integration_id` int(10) NOT NULL,
  `log_id` int(10) NOT NULL,
  `input_type` int(11) DEFAULT NULL,
  `input` mediumtext DEFAULT NULL,
  `output_type` int(11) DEFAULT NULL,
  `output` mediumtext DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `integration_id` (`integration_id`),
  KEY `log_id_integration_id` (`log_id`,`integration_id`),
  CONSTRAINT `mw_data_processing_ibfk_1` FOREIGN KEY (`integration_id`) REFERENCES `mw_integrations_list` (`id`),
  CONSTRAINT `mw_data_processing_ibfk_2` FOREIGN KEY (`log_id`) REFERENCES `mw_logs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=520 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.mw_data_processing: ~519 rows (aproximadamente)
/*!40000 ALTER TABLE `mw_data_processing` DISABLE KEYS */;
INSERT INTO `mw_data_processing` (`id`, `integration_id`, `log_id`, `input_type`, `input`, `output_type`, `output`) VALUES
	(1, 1, 1, 1, '{"name":"Feed","description":"Feed","id":5}', NULL, NULL),
	(2, 1, 2, 1, '{"name":"Food","description":"Food","id":6}', NULL, NULL),
	(3, 1, 3, 1, '{"name":"Paints","description":"Paints","id":7}', NULL, NULL),
	(4, 1, 4, 1, '{"name":"Home Care","description":"Home Care","id":8}', NULL, NULL),
	(5, 1, 5, 1, '{"name":"Kg","description":"Kilogramos","value_gramos":"1000","id":3}', NULL, NULL),
	(6, 1, 6, 1, '{"name":"Tons","description":"Tons","value_gramos":"1000000","id":4}', NULL, NULL),
	(7, 1, 7, 1, '{"name":"Category 1","description":"category first","parent_id":"","id":13}', NULL, NULL),
	(8, 1, 8, 1, '{"name":"Categoria 2","description":"category Second","parent_id":"13","id":14}', NULL, NULL),
	(9, 1, 9, 1, '{"name":"categoria 3","description":"Category third","parent_id":"14","id":15}', NULL, NULL),
	(10, 1, 10, 1, '{"name":"Categoria 4","description":"categoria fourth","parent_id":"13","id":16}', NULL, NULL),
	(11, 1, 11, 1, '{"name":"product 1","number":"One","number_brazil":"","cas":"1","unit_id":"3","remarks":"remarks 1","category_id":"13","industry_id":"5,6","id":2}', NULL, NULL),
	(12, 1, 12, 1, '{"name":"Product 2","number":"2","number_brazil":"1","cas":"2","unit_id":"4","remarks":"Remarks","category_id":"14","industry_id":"6","id":3}', NULL, NULL),
	(13, 1, 13, 1, '{"name":"customer five","code":"code 5","nit":"nit 5","email":"customer_5@yopmail.com","country":"3","city":"albania","state":"Albania","postal_code":"","address":"address","mobile_phone":"2135468546546","office_phone":"","fax":"","pobox":"","url":"","is_branche":"1","head_office":"4","industry_type":"1,3","sales_agent":"1,3","id":5}', NULL, NULL),
	(14, 1, 14, 1, '{"customer_id":"2","raiting":"144","credit_ever_denied":"1","available_credit":"13","insured_credit":"13","own_risk":"13","highest_ever_insured":"13","request_increase_status":"13","mount_increase":"13","last_increased_requested":"13","date_last_increased_requested":"2018-09-09 12:31","date_updated":"2020-06-03 15:51:53","id":"8"}', 1, '{"id":"8","customer_id":"2","date_updated":"0000-00-00 00:00:00","date_created":"2020-06-02 12:51:32","raiting":"13","credit_ever_denied":"1","available_credit":"13","insured_credit":"13","own_risk":"13","highest_ever_insured":"13","request_increase_status":"13","mount_increase":"13","last_increased_requested":"13","date_last_increased_requested":"2018-09-09 12:31:00"}'),
	(15, 1, 15, 1, '{"name":"customer five","active":"1","code":"code 5","nit":"nit 5","email":"customer_5@yopmail.com","country":"3","city":"albania","state":"Albania","postal_code":"","address":"address","mobile_phone":"2135468546546","office_phone":"","fax":"","pobox":"","url":"","is_branche":"1","head_office":"4","industry_type":"1,3","sales_agent":"1,3","date_updated":"2020-06-03 16:02:04","id":"5"}', 1, '{"id":"5","date_created":"0000-00-00 00:00:00","date_updated":"0000-00-00 00:00:00","active":"1","code":"code 5","nit":"nit 5","name":"customer five","email":"customer_5@yopmail.com","city":"albania","state":"Albania","postal_code":"","address":"address","mobile_phone":"2135468546546","office_phone":"","fax":"","pobox":"","url":"","head_office":"4","is_branche":"1","country":"3","industry_type":"1,3","sales_agent":"1,3"}'),
	(16, 1, 16, 1, '{"id":"5","date_created":"0000-00-00 00:00:00","date_updated":"2020-06-03 16:02:04","active":"1","code":"code 5","nit":"nit 5","name":"customer five","email":"customer_5@yopmail.com","city":"albania","state":"Albania","postal_code":"","address":"address","mobile_phone":"2135468546546","office_phone":"","fax":"","pobox":"","url":"","head_office":"4","is_branche":"1","country":"3","industry_type":"1,3","sales_agent":"1,3"}', NULL, NULL),
	(17, 1, 17, 1, '{"customer_id":"2","raiting":"144","credit_ever_denied":"1","available_credit":"13","insured_credit":"13","own_risk":"13","highest_ever_insured":"13","request_increase_status":"13","mount_increase":"13","last_increased_requested":"13","date_last_increased_requested":"2018-09-09 12:31","date_updated":"2020-06-03 16:03:00","id":"8"}', 1, '{"id":"8","customer_id":"2","date_updated":"2020-06-03 15:51:53","date_created":"2020-06-02 12:51:32","raiting":"144","credit_ever_denied":"1","available_credit":"13","insured_credit":"13","own_risk":"13","highest_ever_insured":"13","request_increase_status":"13","mount_increase":"13","last_increased_requested":"13","date_last_increased_requested":"2018-09-09 12:31:00"}'),
	(18, 1, 18, 1, '{"product_id":"1","supplier_id":"1","note":"note","lot":"lot3","status":"pendiung","remarks":"remarks","date_received":"2020-05-03 15:45","date_sent":"2020-05-04 15:45","date_requested":"2020-05-08 15:00","customer_id":"1","id":"3"}', 1, '{"id":"3","date_created":"0000-00-00 00:00:00","date_updated":"0000-00-00 00:00:00","product_id":"1","supplier_id":"1","note":"note","lot":"lot3","status":"pendiung","remarks":"remarks","date_received":"2020-05-03 15:45:00","date_sent":"2020-05-04 15:45:00","date_requested":"2020-05-05 15:45:00","customer_id":"1"}'),
	(19, 1, 19, 1, '{"id":"3","date_created":"0000-00-00 00:00:00","date_updated":"0000-00-00 00:00:00","product_id":"1","supplier_id":"1","note":"note","lot":"lot3","status":"pendiung","remarks":"remarks","date_received":"2020-05-03 15:45:00","date_sent":"2020-05-04 15:45:00","date_requested":"2020-05-08 15:00:00","customer_id":"1"}', NULL, NULL),
	(20, 1, 20, 1, '{"type_contact":"Supplier","active":"1","name":"Contact fourt","position":"programado","departament":"informatica","mobile_phone":"135465521","office_phone":"","personal_phone":"","fax":"51635456","email":"contact_4@yopmail.com","skype":"","line_products":"2,3","customer_id":"","supplier_id":"1","picture":"","home_address":"","country":"2","city":"grand","home_phone":"","birthday":"2000-0m-dd hh:mm","additional_information":"","id":"8"}', 1, '{"id":"8","type_contact":"Supplier","date_updated":null,"data_created":"2020-06-02 01:07:55","active":"1","name":"Contact fourt","first_name":"","last_name":"","position":"programado","departament":"informatica","mobile_phone":"135465521","office_phone":"","personal_phone":"","fax":"","email":"contact_4@yopmail.com","skype":"","line_products":"2,3","customer_id":"0","supplier_id":"1","picture":"","home_address":"","country":"2","city":"grand","home_phone":"","birthday":"0000-00-00 00:00:00","additional_information":""}'),
	(21, 1, 21, 1, '{"id":"7","type_contact":"customer","date_updated":null,"data_created":"2020-06-01 23:23:11","active":"1","name":"Cantact cust 2","first_name":"","last_name":"","position":"Gerente","departament":"Informatica","mobile_phone":"+575656565","office_phone":"+5723235656","personal_phone":"","fax":"","email":"contact_cus@yopmail.com","skype":"","line_products":"9,10","customer_id":"2","supplier_id":"0","picture":"","home_address":"","country":"52","city":"medellin","home_phone":"","birthday":"0000-00-00 00:00:00","additional_information":""}', NULL, NULL),
	(22, 1, 22, 1, '{"name":"Supplier Three","active":"1","supplier_code":"Sup 3","alternate_code":"sup 3","country":"2","state":"grand","city":"grand","address":"address","postal_code":"","url":"","email":"supplier3@yopmail.com","mobile_phone":"21156","office_phone":"51545646","fax":"","payment_terms":"","id":"3"}', 1, '{"id":"3","date_created":"0000-00-00 00:00:00","date_updated":"0000-00-00 00:00:00","name":"Supplier Three","active":"1","supplier_code":"Sup 3","alternate_code":"sup 3","country":"2","state":"grand","city":"grand","address":"address","postal_code":"","url":"","email":"supplier3@yopmail.com","mobile_phone":"21156","office_phone":"","fax":"","payment_terms":""}'),
	(23, 1, 23, 1, '{"id":"1","date_created":"0000-00-00 00:00:00","date_updated":"0000-00-00 00:00:00","name":"Supplier First","active":"1","supplier_code":"Supp 1","alternate_code":"123","country":"73","state":"Madrid","city":"Madrid","address":"Calle Espa\\u00f1a","postal_code":"","url":"","email":"supplier_1@yopmail.com","mobile_phone":"+34910606416","office_phone":"","fax":"","payment_terms":"Paymernt"}', NULL, NULL),
	(24, 1, 24, 1, '{"name":"Producto Cat 1","number":"1","number_brazil":"","cas":"cas 12","unit_id":"2","remarks":"remarks 1","active":"1","category_id":"9","industry_id":"2,3","id":"1"}', 1, '{"id":"1","date_created":"0000-00-00 00:00:00","date_updated":"0000-00-00 00:00:00","name":"Producto Cat 1","number":"1","number_brazil":"","cas":"cas 1","unit_id":"2","remarks":"remarks 1","active":"1","category_id":"9","industry_id":"2"}'),
	(25, 1, 25, 1, '{"name":"Home Caree","description":"Home Industry","id":"4"}', 1, '{"id":"4","name":"Home Care","description":"Home Industry"}'),
	(26, 1, 26, 1, '{"name":"Kg","description":"Kilgramos g","value_gramos":"1000","id":"2"}', 1, '{"id":"2","name":"Kg","description":"Kilgramos","value_gramos":"1000"}'),
	(27, 1, 27, 1, '{"id":"4","date_created":"0000-00-00 00:00:00","date_updated":"2020-06-02 13:16:00","active":"1","code":"code 4","nit":"nit 4","name":"customer 4","email":"customer_4@yopmail.com","city":"angola","state":"angola","postal_code":"","address":"address","mobile_phone":"2165461265","office_phone":"","fax":"","pobox":"","url":"","head_office":"0","is_branche":"0","country":"6","industry_type":"2","sales_agent":"2,3"}', NULL, NULL),
	(28, 1, 28, 1, '{"id":"3","date_created":"0000-00-00 00:00:00","date_updated":"0000-00-00 00:00:00","active":"1","code":"code 3","nit":"nit 3","name":"customer three","email":"customer_3@yopmail.com","city":"asdasd","state":"asdasda","postal_code":"","address":"address","mobile_phone":"1564654656","office_phone":"3216546","fax":"","pobox":"","url":"","head_office":"0","is_branche":"0","country":"52","industry_type":"1,2","sales_agent":"2"}', NULL, NULL),
	(29, 1, 29, 1, '{"id":"2","date_created":"0000-00-00 00:00:00","date_updated":"2020-05-29 07:11:49","active":"1","code":"cust 2","nit":"nit 2","name":"Customer second","email":"customer_2@yopmail.com","city":"Bogota","state":"Bogota","postal_code":"05005","address":"Comuna Chapinero,","mobile_phone":"57 1 3488000","office_phone":"","fax":"","pobox":"","url":"","head_office":"1","is_branche":"1","country":"52","industry_type":"3","sales_agent":"3"}', NULL, NULL),
	(30, 1, 30, 1, '{"id":"1","date_created":"0000-00-00 00:00:00","date_updated":"0000-00-00 00:00:00","active":"1","code":"cust 1","nit":"nit 1","name":"Customer First","email":"customer_1@yopmail.com","city":"Medellin","state":"Antioquia","postal_code":"050001","address":"El Poblado Carrera 43A","mobile_phone":"+57 4 4440388","office_phone":"+57 4 4440388","fax":"","pobox":"","url":"","head_office":"0","is_branche":"0","country":"52","industry_type":"2,3","sales_agent":"2"}', NULL, NULL),
	(31, 1, 31, 1, '{"id":"8","customer_id":"2","date_updated":"2020-06-03 16:03:00","date_created":"2020-06-02 12:51:32","raiting":"144","credit_ever_denied":"1","available_credit":"13","insured_credit":"13","own_risk":"13","highest_ever_insured":"13","request_increase_status":"13","mount_increase":"13","last_increased_requested":"13","date_last_increased_requested":"2018-09-09 12:31:00"}', NULL, NULL),
	(32, 1, 32, 1, '{"id":"7","customer_id":"1","date_updated":"0000-00-00 00:00:00","date_created":"2020-05-29 01:54:27","raiting":"12","credit_ever_denied":"1","available_credit":"12","insured_credit":"12","own_risk":"12","highest_ever_insured":"12","request_increase_status":"12","mount_increase":"12","last_increased_requested":"12","date_last_increased_requested":"2020-04-26 12:24:00"}', NULL, NULL),
	(33, 1, 33, 1, '{"id":"2","date_created":"0000-00-00 00:00:00","date_updated":"0000-00-00 00:00:00","product_id":"1","supplier_id":"1","note":"note","lot":"lot3","status":"pendiung","remarks":"remarks","date_received":"2020-05-03 15:44:00","date_sent":"2020-05-04 15:44:00","date_requested":"2020-05-05 15:44:00","customer_id":"2"}', NULL, NULL),
	(34, 1, 34, 1, '{"id":"1","date_created":"0000-00-00 00:00:00","date_updated":"0000-00-00 00:00:00","product_id":"1","supplier_id":"1","note":"Note of Product","lot":"lt-3","status":"Pending","remarks":"Rma","date_received":"2020-05-03 16:54:00","date_sent":"2020-05-04 16:54:00","date_requested":"2020-05-05 16:54:00","customer_id":"1"}', NULL, NULL),
	(35, 1, 35, 1, '{"id":"4","type_contact":"Customer","date_updated":"0000-00-00 00:00:00","data_created":"0000-00-00 00:00:00","active":"1","name":"Contacto 1","first_name":"Contact","last_name":"First","position":"Programador","departament":"Informatica","mobile_phone":"+57 2222222","office_phone":"","personal_phone":"","fax":"","email":"contacto_1@yopmail.com","skype":"","line_products":"3","customer_id":"1","supplier_id":"0","picture":"","home_address":"gonzales","country":"52","city":"Cucuta","home_phone":"Carrera 0 con calle 6","birthday":"2000-05-19 16:41:00","additional_information":"asdasdasdasdasdas"}', NULL, NULL),
	(36, 1, 36, 1, '{"id":"5","type_contact":"Customer","date_updated":null,"data_created":"2020-05-28 16:03:35","active":"1","name":"contact two","first_name":"contact 2","last_name":"contact","position":"postion","departament":"deparment","mobile_phone":"asdasd","office_phone":"asdasd","personal_phone":"asdasd","fax":"12312313","email":"juan.alberto8511@gmail.com","skype":"","line_products":"1","customer_id":"1","supplier_id":"0","picture":"","home_address":"carrera 8 entre calle 2 y 3","country":"3","city":"Patiecitos municipio Guasimos","home_phone":"","birthday":"0000-00-00 00:00:00","additional_information":""}', NULL, NULL),
	(37, 1, 37, 1, '{"id":"8","type_contact":"Supplier","date_updated":null,"data_created":"2020-06-03 20:04:53","active":"1","name":"Contact fourt","first_name":"","last_name":"","position":"programado","departament":"informatica","mobile_phone":"135465521","office_phone":"","personal_phone":"","fax":"51635456","email":"contact_4@yopmail.com","skype":"","line_products":"2,3","customer_id":"0","supplier_id":"1","picture":"","home_address":"","country":"2","city":"grand","home_phone":"","birthday":"0000-00-00 00:00:00","additional_information":""}', NULL, NULL),
	(38, 1, 38, 1, '{"id":"6","type_contact":"customer","date_updated":null,"data_created":"2020-05-28 16:50:19","active":"1","name":"Contact three","first_name":"","last_name":"","position":"Position","departament":"informatica","mobile_phone":"123213","office_phone":"123123","personal_phone":"","fax":"","email":"contact_3@yopmail.com","skype":"","line_products":"9,10","customer_id":"1","supplier_id":"0","picture":"","home_address":"","country":"3","city":"albania","home_phone":"","birthday":"0000-00-00 00:00:00","additional_information":""}', NULL, NULL),
	(39, 1, 39, 1, '{"id":"3","date_created":"0000-00-00 00:00:00","date_updated":"0000-00-00 00:00:00","name":"Supplier Three","active":"1","supplier_code":"Sup 3","alternate_code":"sup 3","country":"2","state":"grand","city":"grand","address":"address","postal_code":"","url":"","email":"supplier3@yopmail.com","mobile_phone":"21156","office_phone":"51545646","fax":"","payment_terms":""}', NULL, NULL),
	(40, 1, 40, 1, '{"id":"2","date_created":"0000-00-00 00:00:00","date_updated":"0000-00-00 00:00:00","name":"supplier second","active":"1","supplier_code":"sup 2","alternate_code":"sup 2","country":"52","state":"cucuta","city":"","address":"","postal_code":"5555","url":"","email":"supplier_2@yopmail.com","mobile_phone":"454687416","office_phone":"","fax":"","payment_terms":"payment"}', NULL, NULL),
	(41, 1, 41, 1, '{"name":"Customer First","code":"code 1","nit":"nit 1","email":"customer_1@yopmail.com","country":"52","city":"Medellin","state":"Antioquia","postal_code":"","address":"Sur el poblado carrera 24","mobile_phone":"+57 222255654","office_phone":"","fax":"","pobox":"","url":"","is_branche":"0","head_office":0,"industry_type":"1,2","sales_agent":"3","id":6}', NULL, NULL),
	(42, 1, 42, 1, '{"customer_id":"6","raiting":"14","credit_ever_denied":"1","available_credit":"4","insured_credit":"9","own_risk":"14","highest_ever_insured":"9","request_increase_status":"18","mount_increase":"4","last_increased_requested":"0","date_last_increased_requested":"2020-06-01 16:27","date_created":"2020-06-03 16:27:13","id":9}', NULL, NULL),
	(43, 1, 43, 1, '{"name":"Supplier 1","supplier_code":"sup 1","alternate_code":"sup 1","country":"47","state":"wuan","city":"wuan","address":"wuan 22","postal_code":"","url":"","email":"supplier_1@yopmail.com","mobile_phone":"564654564564646","office_phone":"","fax":"","payment_terms":"payment","id":4}', NULL, NULL),
	(44, 1, 44, 1, '{"product_id":"1","supplier_id":"4","note":"Note One","lot":"lot 3","status":"Pending","remarks":"Remarks","date_received":"2020-06-01 16:52","date_sent":"2020-06-02 16:53","date_requested":"2020-06-03 16:53","customer_id":"6","id":4}', NULL, NULL),
	(45, 1, 45, 1, '{"name":"Producto 1","custom_number":"1","custom_number_brazil":"","cas":"1","unit_id":"1","remarks":"this is a first product created","category_id":"9","industry_id":"Feed,Paints","suppliers_id":"4","id":2}', NULL, NULL),
	(46, 1, 46, 1, '{"name":"supplier second","supplier_code":"supp 2","country":"6","state":"Colombia","city":"Medellin","address":"asdd","postal_code":"","url":"www.supplier.com","email":"supplier_2@yopmail.com","mobile_phone":"+571546465","office_phone":"","fax":"","payment_terms":"payment","classification_id":"1,3","date_created":"2020-06-11 14:26:00","id":5}', NULL, NULL),
	(47, 1, 47, 1, '{"name":"suupplier 3","supplier_code":"3","country":"73","state":"Madrid","city":"madrid","address":"adasdas","postal_code":"","url":"","email":"supplier_3@yopmail.com","mobile_phone":"45465464","office_phone":"","fax":"","payment_terms":"payment","classification_id":"2","date_created":"2020-06-11 14:27:06","id":6}', NULL, NULL),
	(48, 1, 48, 1, '{"name":"Producto 1","custom_number":"1","custom_number_brazil":"","cas":"1","unit_id":"1","remarks":"this is a first product created","active":"1","category_id":"9","industry_id":"Feed,Paints","suppliers_id":"4,6","id":"2"}', 1, '{"id":"2","date_created":"0000-00-00 00:00:00","date_updated":"0000-00-00 00:00:00","name":"Producto 1","custom_number":"1","custom_number_brazil":"","cas":"1","unit_id":"1","remarks":"this is a first product created","active":"1","category_id":"9","industry_id":"Feed,Paints","suppliers_id":"4"}'),
	(49, 1, 49, 1, '{"name":"CRF","description":"CRF","id":1}', NULL, NULL),
	(50, 1, 50, 1, '{"name":"CIF","description":"CIF","id":2}', NULL, NULL),
	(51, 1, 51, 1, '{"name":"CIP","description":"CIP","id":3}', NULL, NULL),
	(52, 1, 52, 1, '{"name":"CPT","description":"CPT","id":4}', NULL, NULL),
	(53, 1, 53, 1, '{"name":"FOB","description":"FOB","id":5}', NULL, NULL),
	(54, 1, 54, 1, '{"name":"DDP","description":"DDP","id":6}', NULL, NULL),
	(55, 1, 55, 1, '{"name":"DDU","description":"DDU","id":7}', NULL, NULL),
	(56, 1, 56, 1, '{"name":"FCA","description":"FCA","id":8}', NULL, NULL),
	(57, 1, 57, 1, '{"name":"DAP","description":"DAP","id":9}', NULL, NULL),
	(58, 1, 58, 1, '{"name":"Abidjan","description":"Abidjan","id":1}', NULL, NULL),
	(59, 1, 59, 1, '{"name":"Acajutla","description":"Acajutla","id":2}', NULL, NULL),
	(60, 1, 60, 1, '{"name":"Alajuela","description":"Alajuela","id":3}', NULL, NULL),
	(61, 1, 61, 1, '{"name":"Alexandria","description":"Alexandria","id":4}', NULL, NULL),
	(62, 1, 62, 1, '{"name":"Altamira","description":"Altamira","id":5}', NULL, NULL),
	(63, 1, 63, 1, '{"name":"Amuco Stok","description":"Amuco Stok","id":6}', NULL, NULL),
	(64, 1, 64, 1, '{"type_contact":"Customer","name":"Contact 1","position":"Programador","departament":"Informatica","mobile_phone":"+576554354654","office_phone":"546546546","personal_phone":"654654646","fax":"","email":"contact_1@yopmail.com","skype":"","line_products":"9,11","customer_id":"6","supplier_id":"","picture":"","home_address":"","country":"52","city":"Medellin","home_phone":"","birthday":"","additional_information":"","id":9}', NULL, NULL),
	(65, 1, 65, 1, '{"date_created":"2017-06-20","status":"pending","customer":"6","sales_agent":"3","contact":"9","destination_port":"6","incoterm":"1","remarks":"This is first order","id":8}', NULL, NULL),
	(66, 1, 66, 1, '{"supplier_id":"1","customer_id":"6","status":"pending","customer_request_id":"8","id":3}', NULL, NULL),
	(67, 1, 67, 1, '{"name":"Product 2","custom_number":"2","custom_number_brazil":"","cas":"cas 2","unit_id":"2","remarks":"this is a second product","category_id":"10","industry_id":"Food,Paints","suppliers_id":"4,6","id":3}', NULL, NULL),
	(68, 1, 68, 1, '{"name":"Product 3","custom_number":"3","custom_number_brazil":"","cas":"cas 3","unit_id":"2","remarks":"this is a product","category_id":"11","industry_id":"Food,Home Caree","suppliers_id":"4,5","id":4}', NULL, NULL),
	(69, 1, 69, 1, '{"product_id":"2","customer_request_id":"8","quantity":"20","unit":"1","status":"customer request","fcl":"4","weight":"3","packing":"packing","material":"","specific_remarks":"","id":6}', NULL, NULL),
	(70, 1, 70, 1, '{"product_id":"3","customer_request_id":"8","quantity":"40","unit":"2","status":"customer request","fcl":"","weight":"","packing":"","material":"","specific_remarks":"","id":7}', NULL, NULL),
	(71, 1, 71, 1, '{"supplier_id":"1","customer_id":"6","status":"pending","customer_request_id":"8","id":4}', NULL, NULL),
	(72, 1, 72, 1, '{"id":"8","date_created":"2017-06-20 00:00:00","datae_updated":"0000-00-00 00:00:00","status":"pending","customer":"6","sales_agent":"3","contact":"9","destination_port":"6","incoterm":"1","remarks":"This is first order","quantity":null,"combinate_container":"0"}', NULL, NULL),
	(73, 1, 73, 1, '{"id":"4","supplier_id":"1","customer_id":"6","status":"0","customer_request_id":"8"}', NULL, NULL),
	(74, 1, 74, 1, '{"id":"3","supplier_id":"1","customer_id":"6","status":"0","customer_request_id":"8"}', NULL, NULL),
	(75, 1, 75, 1, '{"name":"Office China","active":"1","supplier_code":"china","country":"47","state":"wuan","city":"wuan","address":"wuan 22","postal_code":"","url":"","email":"supplier_1@yopmail.com","mobile_phone":"564654564564646","office_phone":"","fax":"","payment_terms":"payment","classification_id":"","date_updated":"2020-06-19 11:43:47","id":"4"}', 1, '{"id":"4","date_created":"0000-00-00 00:00:00","date_updated":"0000-00-00 00:00:00","name":"Supplier 1","active":"1","supplier_code":"sup 1","country":"47","state":"wuan","city":"wuan","address":"wuan 22","postal_code":"","url":"","email":"supplier_1@yopmail.com","mobile_phone":"564654564564646","office_phone":"","fax":"","payment_terms":"payment","classification_id":"0"}'),
	(76, 1, 76, 1, '{"name":"HUFEI","supplier_code":"20 MICRONS","country":"105","state":"","city":"Vadodara","address":"307-308, Anundeep  Complex  Race  Course","postal_code":"390007","url":"www.20microns.com","email":"info@20microns.com","mobile_phone":"+91 265 3057000","office_phone":"+91 265 3057000","fax":"+91 265 2333755","payment_terms":"","classification_id":"2","date_created":"2020-06-19 12:48:24","id":7}', NULL, NULL),
	(77, 1, 77, 1, '{"name":"Metric Tons","description":"xxxxxx","value_gramos":"1000000","id":3}', NULL, NULL),
	(78, 1, 78, 1, '{"name":"Home Care","description":"Home Industry","id":"4"}', 1, '{"id":"4","name":"Home Caree","description":"Home Industry"}'),
	(79, 1, 79, 1, '{"name":"Quimicos","description":"Productos qu\\u00edmicos","id":5}', NULL, NULL),
	(80, 1, 80, 1, '{"id":"12","name":"Categoria 4","description":"Category Fourth","active":"1","parent_id":"11"}', NULL, NULL),
	(81, 1, 81, 1, '{"name":"Categoria 4","description":"categoria fourth","parent_id":"11","id":13}', NULL, NULL),
	(82, 1, 82, 1, '{"name":"China","description":"China","id":4}', NULL, NULL),
	(83, 1, 83, 1, '{"id":"4","name":"China","description":"China"}', NULL, NULL),
	(84, 1, 84, 1, '{"name":"China","description":"China","id":5}', NULL, NULL),
	(85, 1, 85, 1, '{"name":"Maggie","description":"Maggie","id":6}', NULL, NULL),
	(86, 1, 86, 1, '{"name":"Amuco","description":"Amuco","id":7}', NULL, NULL),
	(87, 1, 87, 1, '{"id":"4","date_created":"0000-00-00 00:00:00","date_updated":"0000-00-00 00:00:00","name":"Product 3","custom_number":"3","custom_number_brazil":"","cas":"cas 3","unit_id":"2","remarks":"this is a product","active":"1","category_id":"11","industry_id":"Food,Home Caree","suppliers_id":"4,5","purchasing_office":null}', NULL, NULL),
	(88, 1, 88, 1, '{"name":"Product 3","custom_number":"3","custom_number_brazil":"3","cas":"cas 3","unit_id":"1","remarks":"","category_id":"13","industry_id":"Feed,Food","suppliers_id":"4","purchasing_office":"5,6","id":5}', NULL, NULL),
	(89, 1, 89, 1, '{"name":"Customer First","active":"1","code":"code 1","nit":"nit 1","email":"customer_1@yopmail.com","country":"52","city":"Medellin","state":"Antioquia","postal_code":"","address":"Sur el poblado carrera 24","mobile_phone":"+57 222255654","office_phone":"","fax":"","pobox":"","url":"","is_branche":"0","head_office":"0","industry_type":"1,2","sales_agent":"2,3","date_updated":"2020-06-26 10:11:06","id":"6"}', 1, '{"id":"6","date_created":"0000-00-00 00:00:00","date_updated":"0000-00-00 00:00:00","active":"1","code":"code 1","nit":"nit 1","name":"Customer First","email":"customer_1@yopmail.com","city":"Medellin","state":"Antioquia","postal_code":"","address":"Sur el poblado carrera 24","mobile_phone":"+57 222255654","office_phone":"","fax":"","pobox":"","url":"","head_office":"0","is_branche":"0","country":"52","industry_type":"1,2","sales_agent":"3"}'),
	(90, 1, 90, 1, '{"name":"COMERCIAL CERRILLOS S.A.","code":"CERRILLOS","nit":"84.264.990-5","email":"xxx@comercial.com.cl","country":"46","city":"Santiago de Chile","state":"xxxx","postal_code":"","address":"Ave. Americo Vespucio #2680 ofic 81 Conchal\\u00ed","mobile_phone":"+56 2 2624-7028","office_phone":"+56 2 2624-7028","fax":"","pobox":"","url":"www.comercialcerrillos.cl","is_branche":"0","head_office":0,"industry_type":"3","sales_agent":"3","date_created":"2020-06-26 10:29:59","id":7}', NULL, NULL),
	(91, 1, 91, 1, '{"customer_id":"7","raiting":"7","credit_ever_denied":"0","available_credit":"$17.808.000","insured_credit":"$280.000.000","own_risk":"0","highest_ever_insured":"$500.000.000","request_increase_status":"","mount_increase":"","last_increased_requested":"$540.000.000","date_last_increased_requested":"2020-06-18 09:00","date_created":"2020-06-26 10:35:43","id":10}', NULL, NULL),
	(92, 1, 92, 1, '{"type_contact":"Customer","name":"Anibal Rojas","position":"Comprs","departament":"","mobile_phone":"+56 9  9679 2968","office_phone":"+56 2  2730 9522","personal_phone":"","fax":"","email":"anibal.rojas@coce.cl","skype":"anibal_rojasep","line_products":"","customer_id":"7","supplier_id":"","picture":"","home_address":"","country":"46","city":"","home_phone":"","birthday":"","additional_information":"","id":10}', NULL, NULL),
	(93, 1, 93, 1, '{"type_contact":"Customer","name":"Fabian Vasquez","position":"Costeos Log\\u00edsticos","departament":"Comercio Exterior","mobile_phone":"+56","office_phone":"+56","personal_phone":"","fax":"","email":"fabian.vasquez@coce.cl","skype":"","line_products":"","customer_id":"7","supplier_id":"","picture":"","home_address":"","country":"46","city":"","home_phone":"","birthday":"","additional_information":"","id":11}', NULL, NULL),
	(94, 1, 94, 1, '{"type_contact":"Customer","name":"Marcos Parada","position":"Documentos Log\\u00edstica","departament":"Comercio Exterior","mobile_phone":"+56","office_phone":"+56","personal_phone":"","fax":"","email":"marco.parada@coce.cl","skype":"","line_products":"","customer_id":"7","supplier_id":"","picture":"","home_address":"","country":"46","city":"","home_phone":"","birthday":"","additional_information":"","id":12}', NULL, NULL),
	(95, 1, 95, 1, '{"name":"COMERCIAL CERRILLOS S.A.","active":"1","code":"CERRILLOS","nit":"84.264.990-5","email":"xxx@comercial.com.cl","country":"46","city":"Santiago de Chile","state":"xxxx","postal_code":"","address":"Ave. Americo Vespucio #2680 ofic 81 Conchal\\u00ed","mobile_phone":"+56 2 2624-7028","office_phone":"+56 2 2624-7028","fax":"","pobox":"","url":"www.comercialcerrillos.cl","is_branche":"0","head_office":"0","industry_type":"2","sales_agent":"3","date_updated":"2020-06-26 11:00:26","id":"7"}', 1, '{"id":"7","date_created":"2020-06-26 10:29:59","date_updated":"0000-00-00 00:00:00","active":"1","code":"CERRILLOS","nit":"84.264.990-5","name":"COMERCIAL CERRILLOS S.A.","email":"xxx@comercial.com.cl","city":"Santiago de Chile","state":"xxxx","postal_code":"","address":"Ave. Americo Vespucio #2680 ofic 81 Conchal\\u00ed","mobile_phone":"+56 2 2624-7028","office_phone":"+56 2 2624-7028","fax":"","pobox":"","url":"www.comercialcerrillos.cl","head_office":"0","is_branche":"0","country":"46","industry_type":"3","sales_agent":"3"}'),
	(96, 1, 96, 1, '{"name":"COMERCIAL CERRILLOS S.A.","active":"1","code":"CERRILLOS","nit":"84.264.990-5","email":"xxx@comercial.com.cl","country":"46","city":"Santiago de Chile","state":"xxxx","postal_code":"","address":"Ave. Americo Vespucio #2680 ofic 81 Conchal\\u00ed","mobile_phone":"+56 2 2624-7028","office_phone":"+56 2 2624-7028","fax":"","pobox":"","url":"www.comercialcerrillos.cl","is_branche":"0","head_office":"0","industry_type":"2","sales_agent":"3","date_updated":"2020-06-26 11:00:29","id":"7"}', 1, '{"id":"7","date_created":"2020-06-26 10:29:59","date_updated":"2020-06-26 11:00:26","active":"1","code":"CERRILLOS","nit":"84.264.990-5","name":"COMERCIAL CERRILLOS S.A.","email":"xxx@comercial.com.cl","city":"Santiago de Chile","state":"xxxx","postal_code":"","address":"Ave. Americo Vespucio #2680 ofic 81 Conchal\\u00ed","mobile_phone":"+56 2 2624-7028","office_phone":"+56 2 2624-7028","fax":"","pobox":"","url":"www.comercialcerrillos.cl","head_office":"0","is_branche":"0","country":"46","industry_type":"2","sales_agent":"3"}'),
	(97, 1, 97, 1, '{"name":"COMERCIAL CERRILLOS S.A.","active":"1","code":"CERRILLOS","nit":"84.264.990-5","email":"xxx@comercial.com.cl","country":"46","city":"Santiago de Chile","state":"xxxx","postal_code":"","address":"Ave. Americo Vespucio #2680 ofic 81 Conchal\\u00ed","mobile_phone":"+56 2 2624-7028","office_phone":"+56 2 2624-7028","fax":"","pobox":"","url":"www.comercialcerrillos.cl","is_branche":"0","head_office":"0","industry_type":"2","sales_agent":"3","date_updated":"2020-06-26 11:00:51","id":"7"}', 1, '{"id":"7","date_created":"2020-06-26 10:29:59","date_updated":"2020-06-26 11:00:29","active":"1","code":"CERRILLOS","nit":"84.264.990-5","name":"COMERCIAL CERRILLOS S.A.","email":"xxx@comercial.com.cl","city":"Santiago de Chile","state":"xxxx","postal_code":"","address":"Ave. Americo Vespucio #2680 ofic 81 Conchal\\u00ed","mobile_phone":"+56 2 2624-7028","office_phone":"+56 2 2624-7028","fax":"","pobox":"","url":"www.comercialcerrillos.cl","head_office":"0","is_branche":"0","country":"46","industry_type":"2","sales_agent":"3"}'),
	(98, 1, 98, 1, '{"name":"COMERCIAL CERRILLOS S.A.","active":"1","code":"CERRILLOS","nit":"84.264.990-5","email":"xxx@comercial.com.cl","country":"46","city":"Santiago de Chile","state":"xxxx","postal_code":"","address":"Ave. Americo Vespucio #2680 ofic 81 Conchal\\u00ed","mobile_phone":"+56 2 2624-7028","office_phone":"+56 2 2624-7028","fax":"","pobox":"","url":"www.comercialcerrillos.cl","is_branche":"0","head_office":"0","industry_type":"2","sales_agent":"3","date_updated":"2020-06-26 11:00:57","id":"7"}', 1, '{"id":"7","date_created":"2020-06-26 10:29:59","date_updated":"2020-06-26 11:00:51","active":"1","code":"CERRILLOS","nit":"84.264.990-5","name":"COMERCIAL CERRILLOS S.A.","email":"xxx@comercial.com.cl","city":"Santiago de Chile","state":"xxxx","postal_code":"","address":"Ave. Americo Vespucio #2680 ofic 81 Conchal\\u00ed","mobile_phone":"+56 2 2624-7028","office_phone":"+56 2 2624-7028","fax":"","pobox":"","url":"www.comercialcerrillos.cl","head_office":"0","is_branche":"0","country":"46","industry_type":"2","sales_agent":"3"}'),
	(99, 1, 99, 1, '{"name":"Amuco Stok","description":"Amuco Stok","active":"1","country":"3","id":"6"}', 1, '{"id":"6","name":"Amuco Stok","description":"Amuco Stok","active":"1","country":"0"}'),
	(100, 1, 100, 1, '{"name":"San Antonio","description":"","country":"71","id":7}', NULL, NULL),
	(101, 1, 101, 1, '{"date_created":"2020-06-30","status":"customer request","customer":"6","sales_agent":"3","contact":"9","destination_port":"7","incoterm":"1","combinate_container":"1","remarks":"asdasd","id":9}', NULL, NULL),
	(102, 1, 102, 1, '{"name":"FRUTAROM PERU S.A.","code":"FRUTAROM PERU","nit":"20563120135","email":"xxxxx","country":"173","city":"Lima","state":"xxxxxx","postal_code":"xxxx","address":"Ave. Los Rosales 280, Santa Anita, Lima 43","mobile_phone":"+511 2306090","office_phone":"","fax":"","pobox":"","url":"","is_branche":"0","head_office":0,"industry_type":"2","sales_agent":"3,5","date_created":"2020-06-30 14:06:27","id":8}', NULL, NULL),
	(103, 1, 103, 1, '{"type_contact":"Customer","first_name":"Mariela","last_name":"Garcia","name":"Mariela Garcia","position":"Analista Logistico","departament":"Compras","mobile_phone":"+511 955 094 152","office_phone":"+511 230 6090","personal_phone":"","fax":"","email":"marielag@frutarom.com","skype":"","line_products":"","customer_id":"8","supplier_id":"","picture":"","home_address":"","country":"173","city":"Lima","home_phone":"","birthday":"","additional_information":"","id":13}', NULL, NULL),
	(104, 1, 104, 1, '{"type_contact":"Customer","active":"1","first_name":"Marco","last_name":"Parada","name":"Marco Parada","position":"Documentos Log\\u00edstica","departament":"Comercio Exterior","mobile_phone":"+56","office_phone":"+56","personal_phone":"","fax":"","email":"marco.parada@coce.cl","skype":"","line_products":"","customer_id":"7","supplier_id":"","picture":"","home_address":"","country":"46","city":"","home_phone":"","birthday":"2000-0m-dd","additional_information":"","id":"12"}', 1, '{"id":"12","type_contact":"Customer","date_updated":null,"data_created":"2020-06-26 14:51:09","active":"1","name":"Marcos Parada","first_name":"","last_name":"","position":"Documentos Log\\u00edstica","departament":"Comercio Exterior","mobile_phone":"+56","office_phone":"+56","personal_phone":"","fax":"","email":"marco.parada@coce.cl","skype":"","line_products":"","customer_id":"7","supplier_id":"0","picture":"","home_address":"","country":"46","city":"","home_phone":"","birthday":"0000-00-00 00:00:00","additional_information":""}'),
	(105, 1, 105, 1, '{"type_contact":"Customer","active":"1","first_name":"Fabian","last_name":"Vasquez","name":"Fabian Vasquez","position":"Costeos Log\\u00edsticos","departament":"Comercio Exterior","mobile_phone":"+56","office_phone":"+56","personal_phone":"","fax":"","email":"fabian.vasquez@coce.cl","skype":"","line_products":"","customer_id":"7","supplier_id":"","picture":"","home_address":"","country":"46","city":"","home_phone":"","birthday":"2000-0m-dd","additional_information":"","id":"11"}', 1, '{"id":"11","type_contact":"Customer","date_updated":null,"data_created":"2020-06-26 14:41:14","active":"1","name":"Fabian Vasquez","first_name":"","last_name":"","position":"Costeos Log\\u00edsticos","departament":"Comercio Exterior","mobile_phone":"+56","office_phone":"+56","personal_phone":"","fax":"","email":"fabian.vasquez@coce.cl","skype":"","line_products":"","customer_id":"7","supplier_id":"0","picture":"","home_address":"","country":"46","city":"","home_phone":"","birthday":"0000-00-00 00:00:00","additional_information":""}'),
	(106, 1, 106, 1, '{"type_contact":"Customer","active":"1","first_name":"Anibal","last_name":"Rojas","name":"Anibal Rojas","position":"Comprs","departament":"","mobile_phone":"+56 9  9679 2968","office_phone":"+56 2  2730 9522","personal_phone":"","fax":"","email":"anibal.rojas@coce.cl","skype":"anibal_rojasep","line_products":"","customer_id":"7","supplier_id":"","picture":"","home_address":"","country":"46","city":"","home_phone":"","birthday":"2000-0m-dd","additional_information":"","id":"10"}', 1, '{"id":"10","type_contact":"Customer","date_updated":null,"data_created":"2020-06-26 14:39:13","active":"1","name":"Anibal Rojas","first_name":"","last_name":"","position":"Comprs","departament":"","mobile_phone":"+56 9  9679 2968","office_phone":"+56 2  2730 9522","personal_phone":"","fax":"","email":"anibal.rojas@coce.cl","skype":"anibal_rojasep","line_products":"","customer_id":"7","supplier_id":"0","picture":"","home_address":"","country":"46","city":"","home_phone":"","birthday":"0000-00-00 00:00:00","additional_information":""}'),
	(107, 1, 107, 1, '{"type_contact":"Customer","active":"1","first_name":"Contaco","last_name":"1","name":"Contaco 1","position":"Programador","departament":"Informatica","mobile_phone":"+576554354654","office_phone":"546546546","personal_phone":"654654646","fax":"","email":"contact_1@yopmail.com","skype":"","line_products":"","customer_id":"6","supplier_id":"","picture":"","home_address":"","country":"52","city":"Medellin","home_phone":"","birthday":"1900-01-31","additional_information":"","id":"9"}', 1, '{"id":"9","type_contact":"Customer","date_updated":null,"data_created":"2020-06-17 13:34:08","active":"1","name":"Contact 1","first_name":"","last_name":"","position":"Programador","departament":"Informatica","mobile_phone":"+576554354654","office_phone":"546546546","personal_phone":"654654646","fax":"","email":"contact_1@yopmail.com","skype":"","line_products":"9,11","customer_id":"6","supplier_id":"0","picture":"","home_address":"","country":"52","city":"Medellin","home_phone":"","birthday":"0000-00-00 00:00:00","additional_information":""}'),
	(108, 1, 108, 1, '{"name":"COMERCIAL CERRILLOS S.A.","active":"1","code":"CERRILLOS","nit":"84.264.990-5","email":"xxx@comercial.com.cl","country":"46","city":"Santiago de Chile","state":"xxxx","postal_code":"","address":"Ave. Americo Vespucio #2680 ofic 81 Conchal\\u00ed","mobile_phone":"+56 2 2624-7028","office_phone":"+56 2 2624-7028","fax":"","pobox":"","url":"www.comercialcerrillos.cl","is_branche":"0","head_office":"0","industry_type":"2","sales_agent":"3","date_updated":"2020-07-01 11:28:38","id":"7"}', 1, '{"id":"7","date_created":"2020-06-26 10:29:59","date_updated":"2020-06-26 11:00:57","active":"1","code":"CERRILLOS","nit":"84.264.990-5","name":"COMERCIAL CERRILLOS S.A.","email":"xxx@comercial.com.cl","city":"Santiago de Chile","state":"xxxx","postal_code":"","address":"Ave. Americo Vespucio #2680 ofic 81 Conchal\\u00ed","mobile_phone":"+56 2 2624-7028","office_phone":"+56 2 2624-7028","fax":"","pobox":"","url":"www.comercialcerrillos.cl","head_office":"0","is_branche":"0","country":"46","industry_type":"2","sales_agent":"3"}'),
	(109, 1, 109, 1, '{"customer_id":"7","raiting":"7","credit_ever_denied":"0","available_credit":"17808","insured_credit":"280000000","own_risk":"1","highest_ever_insured":"500000000","request_increase_status":"","mount_increase":"0","last_increased_requested":"540000000","date_last_increased_requested":"2020-06-18 09:00","date_updated":"2020-07-01 11:32:22","id":"10"}', 1, '{"id":"10","customer_id":"7","date_updated":"0000-00-00 00:00:00","date_created":"2020-06-26 10:35:43","raiting":"7","credit_ever_denied":"0","available_credit":"0","insured_credit":"0","own_risk":"0","highest_ever_insured":"0","request_increase_status":"","mount_increase":"0","last_increased_requested":"0","date_last_increased_requested":"2020-06-18 09:00:00"}'),
	(110, 1, 110, 1, '{"name":"TRAVERSO S.A.","code":"TRAVERSO","nit":"96 606780-2","email":"xxx@traverso.cl","country":"46","city":"Santiago de Chile","state":"Santiago","postal_code":"","address":"Ave. Americo Vespusio  01313  La Cisterna","mobile_phone":"+56 2 2437-0950","office_phone":"","fax":"","pobox":"","url":"","is_branche":"0","head_office":0,"industry_type":"2","sales_agent":"3,5","date_created":"2020-07-01 11:50:42","id":9}', NULL, NULL),
	(111, 1, 111, 1, '{"type_contact":"Customer","first_name":"Roberto","last_name":"Valdebenito","name":"Roberto Valdebenito","position":"Jefe de Comercio Exterior","departament":"Adquisiciones y Planificaci\\u00f3n","mobile_phone":"+56 9 9801-8151","office_phone":"+56 2 2437-095\'","personal_phone":"","fax":"+56","email":"rvaldebenito@traverso.cl","skype":"","line_products":"2","customer_id":"9","supplier_id":"","picture":"","home_address":"","country":"46","city":"Santiago de Chile","home_phone":"","birthday":"","additional_information":"","date_created":"2020-07-01 12:03:11","id":14}', NULL, NULL),
	(112, 1, 112, 1, '{"type_contact":"Customer","first_name":"Darwin","last_name":"Belmar","name":"Darwin Belmar","position":"Asistente de Comercio Exterior","departament":"Comercio Exterior","mobile_phone":"+56 9 949-0569","office_phone":"","personal_phone":"","fax":"","email":"dbelmar@traverso.cl","skype":"","line_products":"","customer_id":"9","supplier_id":"","picture":"","home_address":"","country":"46","city":"Santiago de Chile","home_phone":"","birthday":"","additional_information":"","date_created":"2020-07-01 12:05:39","id":15}', NULL, NULL),
	(113, 1, 113, 1, '{"customer_id":"9","raiting":"4","credit_ever_denied":"1","available_credit":"-3250000","insured_credit":"100000000","own_risk":"0","highest_ever_insured":"259000000","request_increase_status":"pending","mount_increase":"10000000","last_increased_requested":"10000000","date_last_increased_requested":"2020-04-30 13:00","date_created":"2020-07-01 12:12:22","id":11}', NULL, NULL),
	(114, 1, 114, 1, '{"name":"DEZHOU RUIKANG FOOD CO., LTD.","supplier_code":"DEZHOU RUI","country":"47","state":"Shandong Province","city":"Shandong","address":"No. 968  Rui kang rd, De Zhou Economical Development","postal_code":"253034","url":"www.crisoyprotein.com","email":"dzruikang@allyum.com","mobile_phone":"+86  534 2562280","office_phone":"+86 534 2562270","fax":"+86 534 256 2270","payment_terms":"30% \\/ 70%  against copy of document","classification_id":"","date_created":"2020-07-02 15:46:43","id":8}', NULL, NULL),
	(115, 1, 115, 1, '{"name":"LIAOCHENG NEW ERA FOODS","supplier_code":"NEW ERA FOODS","country":"47","state":"Shandong Province","city":"Liaocheng","address":"Room 103, unit 3. No 1, Canal Commercial Building","postal_code":"","url":"","email":"xxxx@newerafoods.com","mobile_phone":"+86 456 9009876","office_phone":"","fax":"","payment_terms":"","classification_id":"","date_created":"2020-07-02 16:28:37","id":9}', NULL, NULL),
	(116, 1, 116, 1, '{"type_contact":"Supplier","first_name":"pedro","last_name":"perez","name":"pedro perez","position":"","department":"","mobile_phone":"54654645465","office_phone":"","personal_phone":"","fax":"","email":"pp@yopmail.com","skype":"","line_products":"","customer_id":null,"supplier_id":"4","picture":"","home_address":"","country":"2","city":"","home_phone":"","birthday":"","additional_information":"","date_created":"2020-07-03 13:25:24","id":1}', NULL, NULL),
	(117, 1, 117, 1, '{"type_contact":"Customer","first_name":"pablo","last_name":"perez","name":"pablo perez","position":"","department":"","mobile_phone":"13132132131321","office_phone":"","personal_phone":"","fax":"","email":"pp2@yopmail.com","skype":"","line_products":"","customer_id":"7","supplier_id":null,"picture":"","home_address":"","country":"6","city":"","home_phone":"","birthday":"","additional_information":"","date_created":"2020-07-03 13:26:27","id":2}', NULL, NULL),
	(118, 1, 118, 1, '{"supplier_id":"9","beneficiary_wires":"LIAOCHENG NEW ERA FOODS","beneficiary_bank":"Banko 1","account_number":"123456646546","switf":"213546asda","intermediary_bank":"Banck in","account_intermediary":"13213213546546","swift_intermediary":"132131322","id":5}', NULL, NULL),
	(119, 1, 119, 1, '{"type_visit":"Personal","type_client":"Supplier","user_id":"3","customer_id":"","supplier_id":"4","date_visit":"2020-07-09","contact_name":"1","subject":"Visita 3","notes":"Hola","id":16}', NULL, NULL),
	(120, 1, 120, 1, '{"supplier_id":"4","beneficiary_wires":"Office China","beneficiary_bank":"Bank 1","account_number":"1234567898754654","switf":"45asdas","intermediary_bank":"bank2","account_intermediary":"1234567987987987987","swift_intermediary":"213213asd","id":6}', NULL, NULL),
	(121, 1, 121, 1, '{"type_visit":"Personal","type_client":"Supplier","user_id":"3","customer_id":"","supplier_id":"4","date_visit":"2020-07-09","contact_name":"1","subject":"Visita 4","notes":"Hola","id":"16"}', 1, '{"id":"16","date_created":"0000-00-00 00:00:00","date_updated":"0000-00-00 00:00:00","user_id":"3","customer_id":"0","supplier_id":"4","date_visit":"2020-07-09 00:00:00","contact_name":"1","notes":"Hola","subject":"Visita 3","type_client":"Supplier","type_visit":"Personal"}'),
	(122, 1, 122, 1, '{"id":"16","date_created":"0000-00-00 00:00:00","date_updated":"0000-00-00 00:00:00","user_id":"3","customer_id":"0","supplier_id":"4","date_visit":"2020-07-09 00:00:00","contact_name":"1","notes":"Hola","subject":"Visita 4","type_client":"Supplier","type_visit":"Personal"}', NULL, NULL),
	(123, 1, 123, 1, '{"name":"Chemistry","description":"Productos qu\\u00edmicos","id":"5"}', 1, '{"id":"5","name":"Quimicos","description":"Productos qu\\u00edmicos"}'),
	(124, 1, 124, 1, '{"name":"Customer First","active":"1","code":"code 1","nit":"nit 1","email":"customer_1@yopmail.com","country":"52","city":"Medellin","state":"Antioquia","postal_code":"","address":"Sur el poblado carrera 24","mobile_phone":"+57 222255654","office_phone":"1111111","fax":"","pobox":"","url":"","is_branche":"0","head_office":0,"industry_type":"1,2","sales_agent":"2,3","date_updated":"2020-07-09 10:39:03","id":"6"}', 1, '{"id":"6","date_created":"0000-00-00 00:00:00","date_updated":"2020-06-26 10:11:06","active":"1","code":"code 1","nit":"nit 1","name":"Customer First","email":"customer_1@yopmail.com","city":"Medellin","state":"Antioquia","postal_code":"","address":"Sur el poblado carrera 24","mobile_phone":"+57 222255654","office_phone":"","fax":"","pobox":"","url":"","head_office":"0","is_branche":"0","country":"52","industry_type":"1,2","sales_agent":"2,3"}'),
	(125, 1, 125, 1, '{"type_contact":"Customer","first_name":"Elisa","last_name":"Zozaya","name":"Elisa Zozaya","position":"xxxx","department":"Comercio Exterior","mobile_phone":"+584143304003","office_phone":"","personal_phone":"","fax":"","email":"elisa@ztgroupcorp.com","skype":"","line_products":"2","customer_id":"7","supplier_id":null,"picture":"","home_address":"calle las ursulina","country":"194","city":"Caracas","home_phone":"","birthday":"","additional_information":"","date_created":"2020-07-09 10:55:59","id":3}', NULL, NULL),
	(126, 1, 126, 1, '{"name":"PROTEINS","description":"Protein Food Grade","parent_id":"9","id":14}', NULL, NULL),
	(127, 1, 127, 1, '{"name":"SOY PROTEIN ISOLATED 90% MIN NON FUNCTIONAL INSTANT TYPE 200-88","custom_number":"XXX","custom_number_brazil":"","cas":"9010-10-0","unit_id":"1","remarks":"","active":"1","category_id":"13","industry_id":"Food","suppliers_id":"8","purchasing_office":"6","id":"5"}', 1, '{"id":"5","date_created":"0000-00-00 00:00:00","date_updated":"0000-00-00 00:00:00","name":"Product 3","custom_number":"3","custom_number_brazil":"3","cas":"cas 3","unit_id":"1","remarks":"","active":"1","category_id":"13","industry_id":"Feed,Food","suppliers_id":"4","purchasing_office":"5,6"}'),
	(128, 1, 128, 1, '{"name":"SOY PROTEIN ISOLATED 90% MIN NON FUNCTIONAL INSTANT TYPE 200-88","custom_number":"XXX","custom_number_brazil":"","cas":"9010-10-0","unit_id":"1","remarks":"","active":"1","category_id":"14","industry_id":"Food","suppliers_id":"8","purchasing_office":"6","id":"5"}', 1, '{"id":"5","date_created":"0000-00-00 00:00:00","date_updated":"0000-00-00 00:00:00","name":"SOY PROTEIN ISOLATED 90% MIN NON FUNCTIONAL INSTANT TYPE 200-88","custom_number":"XXX","custom_number_brazil":"","cas":"9010-10-0","unit_id":"1","remarks":"","active":"1","category_id":"13","industry_id":"Food","suppliers_id":"8","purchasing_office":"6"}'),
	(129, 1, 129, 1, '{"name":"Yan","description":"Nanjing Office","id":"5"}', 1, '{"id":"5","name":"China","description":"China"}'),
	(130, 1, 130, 1, '{"name":"Maggie","description":"Dalian Office","id":"6"}', 1, '{"id":"6","name":"Maggie","description":"Maggie"}'),
	(131, 1, 131, 1, '{"id":"7","name":"Amuco","description":"Amuco"}', NULL, NULL),
	(132, 1, 132, 1, '{"name":"CITRIC ACID ANHYDROUS MESH 30-100","custom_number":"29.18.14.00.00","custom_number_brazil":"","cas":"77-92-9","unit_id":"1","remarks":"this is a first product created","active":"1","category_id":"9","industry_id":"Food","suppliers_id":"","purchasing_office":"5","id":"2"}', 1, '{"id":"2","date_created":"0000-00-00 00:00:00","date_updated":"0000-00-00 00:00:00","name":"Producto 1","custom_number":"1","custom_number_brazil":"","cas":"1","unit_id":"1","remarks":"this is a first product created","active":"1","category_id":"9","industry_id":"Feed,Paints","suppliers_id":"4,6","purchasing_office":null}'),
	(133, 1, 133, 1, '{"name":"ONION POWDER MESH 80-100","custom_number":"XXX","custom_number_brazil":"","cas":"XXX","unit_id":"1","remarks":"this is a second product","active":"1","category_id":"10","industry_id":"Food","suppliers_id":"9","purchasing_office":"6","id":"3"}', 1, '{"id":"3","date_created":"0000-00-00 00:00:00","date_updated":"0000-00-00 00:00:00","name":"Product 2","custom_number":"2","custom_number_brazil":"","cas":"cas 2","unit_id":"2","remarks":"this is a second product","active":"1","category_id":"10","industry_id":"Food,Paints","suppliers_id":"4,6","purchasing_office":null}'),
	(134, 1, 134, 1, '{"id":"3","name":"Metric Tons","description":"xxxxxx","value_gramos":"1000000"}', NULL, NULL),
	(135, 1, 135, 1, '{"name":"Kg","description":"Kilgramos","value_gramos":"1000","id":"2"}', 1, '{"id":"2","name":"Kg","description":"Kilgramos g","value_gramos":"1000"}'),
	(136, 1, 136, 1, '{"name":"MT","description":"Tons","value_gramos":"1000000","id":"1"}', 1, '{"id":"1","name":"Tons","description":"Tons","value_gramos":"1000000"}'),
	(137, 1, 137, 1, '{"name":"San Antonio","description":"","active":"1","country":"46","id":"7"}', 1, '{"id":"7","name":"San Antonio","description":"","active":"1","country":"71"}'),
	(138, 1, 138, 1, '{"customer_id":"7","raiting":"7","credit_ever_denied":"0","available_credit":"9856","insured_credit":"280000","own_risk":"0","highest_ever_insured":"500000","request_increase_status":"","mount_increase":"0","last_increased_requested":"540000","date_last_increased_requested":"2020-06-18 09:00","date_updated":"2020-07-09 16:45:01","id":"10"}', 1, '{"id":"10","customer_id":"7","date_updated":"2020-07-01 11:32:22","date_created":"2020-06-26 10:35:43","raiting":"7","credit_ever_denied":"0","available_credit":"17808","insured_credit":"280000000","own_risk":"1","highest_ever_insured":"500000000","request_increase_status":"","mount_increase":"0","last_increased_requested":"540000000","date_last_increased_requested":"2020-06-18 09:00:00"}'),
	(139, 1, 139, 1, '{"name":"DRESDEN FOOD INGREDIENTS S.A.","active":"1","code":"DRESDEN","nit":"20263019807","email":"XXX","country":"173","city":"Lima","state":"xxx","postal_code":"3","address":"Avenida Los Ingenieros #124, Urbanizaci\\u00f3n Sta. Raquel 2da Etapa","mobile_phone":"+511 349-7788","office_phone":"+511 349-7788","fax":"+511 349-6307","pobox":"","url":"https:\\/\\/dresdenfi.com.pe\\/","is_branche":"0","head_office":0,"industry_type":"2","sales_agent":"3","date_updated":"2020-07-09 16:52:12","id":"6"}', 1, '{"id":"6","date_created":"0000-00-00 00:00:00","date_updated":"2020-07-09 10:39:03","active":"1","code":"code 1","nit":"nit 1","name":"Customer First","email":"customer_1@yopmail.com","city":"Medellin","state":"Antioquia","postal_code":"","address":"Sur el poblado carrera 24","mobile_phone":"+57 222255654","office_phone":"1111111","fax":"","pobox":"","url":"","head_office":"0","is_branche":"0","country":"52","industry_type":"1,2","sales_agent":"2,3"}'),
	(140, 1, 140, 1, '{"name":"DRESDEN FOOD INGREDIENTS S.A.","active":"1","code":"DRESDEN","nit":"20263019807","email":"XXX","country":"173","city":"Lima","state":"xxx","postal_code":"3","address":"Avenida Los Ingenieros #124, Urbanizaci\\u00f3n Sta. Raquel 2da Etapa","mobile_phone":"+511 349-7788","office_phone":"+511 349-7788","fax":"+511 349-6307","pobox":"","url":"dresdenfi.com.pe","is_branche":"0","head_office":0,"industry_type":"2","sales_agent":"3","date_updated":"2020-07-09 16:54:16","id":"6"}', 1, '{"id":"6","date_created":"0000-00-00 00:00:00","date_updated":"2020-07-09 16:52:12","active":"1","code":"DRESDEN","nit":"20263019807","name":"DRESDEN FOOD INGREDIENTS S.A.","email":"XXX","city":"Lima","state":"xxx","postal_code":"3","address":"Avenida Los Ingenieros #124, Urbanizaci\\u00f3n Sta. Raquel 2da Etapa","mobile_phone":"+511 349-7788","office_phone":"+511 349-7788","fax":"+511 349-6307","pobox":"","url":"https:\\/\\/dresdenfi.com.pe\\/","head_office":"0","is_branche":"0","country":"173","industry_type":"2","sales_agent":"3"}'),
	(141, 1, 141, 1, '{"customer_id":"6","raiting":"6","credit_ever_denied":"0","available_credit":"6592","insured_credit":"500000","own_risk":"150000","highest_ever_insured":"500000","request_increase_status":"","mount_increase":"","last_increased_requested":"500000","date_last_increased_requested":"2019-01-04 16:27","date_updated":"2020-07-09 16:58:00","id":"9"}', 1, '{"id":"9","customer_id":"6","date_updated":"0000-00-00 00:00:00","date_created":"2020-06-03 16:27:13","raiting":"14","credit_ever_denied":"1","available_credit":"4","insured_credit":"9","own_risk":"14","highest_ever_insured":"9","request_increase_status":"18","mount_increase":"4","last_increased_requested":"0","date_last_increased_requested":"2020-06-01 16:27:00"}'),
	(142, 1, 142, 1, '{"name":"SOY PROTEIN ISOLATED 90% MIN FUNCTIONAL NON DUSTY","custom_number":"XXX","custom_number_brazil":"","cas":"9010-10-0","unit_id":"1","remarks":"","category_id":"14","industry_id":"Food","suppliers_id":"8","purchasing_office":"6","id":6}', NULL, NULL),
	(143, 1, 143, 1, '{"name":"WEIFANG ENSIGN INDUSTRY CO., LTD.","active":"1","supplier_code":"WEIFANG ENSIGN","country":"47","state":"Shandong","city":"Weifang","address":"#1567 Changsheng Street, Changle","postal_code":"","url":"","email":"XXX","mobile_phone":"+86 536 628-8516","office_phone":"","fax":"","payment_terms":"60 day date BL\\/AWB","classification_id":"1,2","date_updated":"2020-07-09 17:07:26","id":"6"}', 1, '{"id":"6","date_created":"2020-06-11 14:27:06","date_updated":"0000-00-00 00:00:00","name":"suupplier 3","active":"1","supplier_code":"3","country":"73","state":"Madrid","city":"madrid","address":"adasdas","postal_code":"","url":"","email":"supplier_3@yopmail.com","mobile_phone":"45465464","office_phone":"","fax":"","payment_terms":"payment","classification_id":"2"}'),
	(144, 1, 144, 1, '{"name":"WEIFANG ENSIGN INDUSTRY CO., LTD.","active":"Y","supplier_code":"WEIFANG ENSIGN","country":"47","state":"Shandong","city":"Weifang","address":"#1567 Changsheng Street, Changle","postal_code":"","url":"","email":"XXX","mobile_phone":"+86 536 628-8516","office_phone":"","fax":"","payment_terms":"60 day date BL\\/AWB","classification_id":"1,2","date_updated":"2020-07-09 17:07:54","id":"6"}', 1, '{"id":"6","date_created":"2020-06-11 14:27:06","date_updated":"2020-07-09 17:07:26","name":"WEIFANG ENSIGN INDUSTRY CO., LTD.","active":"1","supplier_code":"WEIFANG ENSIGN","country":"47","state":"Shandong","city":"Weifang","address":"#1567 Changsheng Street, Changle","postal_code":"","url":"","email":"XXX","mobile_phone":"+86 536 628-8516","office_phone":"","fax":"","payment_terms":"60 day date BL\\/AWB","classification_id":"1"}'),
	(145, 1, 145, 1, '{"name":"WEIFANG ENSIGN INDUSTRY CO., LTD.","active":"1","supplier_code":"WEIFANG ENSIGN","country":"47","state":"Shandong","city":"Weifang","address":"#1567 Changsheng Street, Changle","postal_code":"","url":"","email":"XXX","mobile_phone":"+86 536 628-8516","office_phone":"","fax":"","payment_terms":"60 day date BL\\/AWB","classification_id":"1","date_updated":"2020-07-09 17:08:14","id":"6"}', 1, '{"id":"6","date_created":"2020-06-11 14:27:06","date_updated":"2020-07-09 17:07:54","name":"WEIFANG ENSIGN INDUSTRY CO., LTD.","active":"0","supplier_code":"WEIFANG ENSIGN","country":"47","state":"Shandong","city":"Weifang","address":"#1567 Changsheng Street, Changle","postal_code":"","url":"","email":"XXX","mobile_phone":"+86 536 628-8516","office_phone":"","fax":"","payment_terms":"60 day date BL\\/AWB","classification_id":"1"}'),
	(146, 1, 146, 1, '{"type_contact":"Customer","active":"1","first_name":"Anibal","last_name":"Rojas","name":"Anibal Rojas","position":"Comprados","department":"Comercial","mobile_phone":"+56 9 9679 2968","office_phone":"","personal_phone":"","fax":"","email":"anibal.rojas@coce.cl","skype":"anibal_rojasep","customer_id":"7","supplier_id":"","picture":"","home_address":"","country":"46","city":"Santiago de Chile","home_phone":"","birthday":"2000-0m-dd","additional_information":"","date_updated":"2020-07-10 09:33:57","id":"2"}', 1, '{"id":"2","type_contact":"Customer","date_updated":null,"date_created":"2020-07-03 13:26:27","active":"1","name":"pablo perez","first_name":"pablo","last_name":"perez","position":"","department":"","mobile_phone":"13132132131321","office_phone":"","personal_phone":"","fax":"","email":"pp2@yopmail.com","skype":"","line_products":"","customer_id":"7","supplier_id":null,"picture":"","home_address":"","country":"6","city":"","home_phone":"","birthday":"0000-00-00 00:00:00","additional_information":""}'),
	(147, 1, 147, 1, '{"type_contact":"Customer","active":"1","first_name":"Marco","last_name":"Parada","name":"Marco Parada","position":"Documentaci\\u00f3n Log\\u00edstica","department":"Comercio Exterior","mobile_phone":"xxx","office_phone":"","personal_phone":"","fax":"","email":"marco.parada@coce.cl","skype":"","customer_id":"7","supplier_id":"","picture":"","home_address":"calle las ursulina","country":"46","city":"Santiago de Chile","home_phone":"","birthday":"2000-0m-dd","additional_information":"","date_updated":"2020-07-10 09:38:19","id":"3"}', 1, '{"id":"3","type_contact":"Customer","date_updated":null,"date_created":"2020-07-09 10:55:59","active":"1","name":"Elisa Zozaya","first_name":"Elisa","last_name":"Zozaya","position":"xxxx","department":"Comercio Exterior","mobile_phone":"+584143304003","office_phone":"","personal_phone":"","fax":"","email":"elisa@ztgroupcorp.com","skype":"","line_products":"2","customer_id":"7","supplier_id":null,"picture":"","home_address":"calle las ursulina","country":"194","city":"Caracas","home_phone":"","birthday":"0000-00-00 00:00:00","additional_information":""}'),
	(148, 1, 148, 1, '{"type_contact":"Customer","active":"1","first_name":"Marco","last_name":"Parada","name":"Marco Parada","position":"Documentaci\\u00f3n Log\\u00edstica","department":null,"mobile_phone":"xxx","office_phone":"","personal_phone":"","fax":"","email":"marco.parada@coce.cl","skype":"","customer_id":"7","supplier_id":null,"picture":"","home_address":"calle las ursulina","country":"46","city":"Santiago de Chile","home_phone":"","birthday":"2000-0m-dd","additional_information":"","date_updated":"2020-07-10 10:24:02","id":"3"}', 1, '{"id":"3","type_contact":"Customer","date_updated":"2020-07-10 09:38:19","date_created":"2020-07-09 10:55:59","active":"1","name":"Marco Parada","first_name":"Marco","last_name":"Parada","position":"Documentaci\\u00f3n Log\\u00edstica","department":"Comercio Exterior","mobile_phone":"xxx","office_phone":"","personal_phone":"","fax":"","email":"marco.parada@coce.cl","skype":"","line_products":"2","customer_id":"7","supplier_id":"0","picture":"","home_address":"calle las ursulina","country":"46","city":"Santiago de Chile","home_phone":"","birthday":"0000-00-00 00:00:00","additional_information":""}'),
	(149, 1, 149, 1, '{"id":"1","name":"Amuco china","description":"","active":"1"}', NULL, NULL),
	(150, 1, 150, 1, '{"id":"2","name":"Trade","description":"","active":"1"}', NULL, NULL),
	(151, 1, 151, 1, '{"id":"3","name":"Indent","description":"","active":"1"}', NULL, NULL),
	(152, 1, 152, 1, '{"id":"4","name":"Maquinaria","description":"","active":"1"}', NULL, NULL),
	(153, 1, 153, 1, '{"name":"Purchasing Office","description":"","active":"1","id":"6"}', 1, '{"id":"6","name":"Multi-oferta","description":"","active":"1"}'),
	(154, 1, 154, 1, '{"name":"Direct Supplier","description":"","active":"1","id":"5"}', 1, '{"id":"5","name":"Multi-cliente","description":"","active":"1"}'),
	(155, 1, 155, 1, '{"name":"LIAOCHENG NEW ERA FOODS","active":"1","supplier_code":"NEW ERA FOODS","country":"47","state":"Shandong Province","city":"Liaocheng","address":"Room 103, unit 3. No 1, Canal Commercial Building","postal_code":"","url":"","email":"xxxx@newerafoods.com","mobile_phone":"+86 456 9009876","office_phone":"","fax":"","payment_terms":"","classification_id":"","date_updated":"2020-07-13 08:22:29","id":"9"}', 1, '{"id":"9","date_created":"2020-07-02 16:28:37","date_updated":"2020-07-07 12:13:41","name":"LIAOCHENG NEW ERA FOODS","active":"1","supplier_code":"NEW ERA FOODS","country":"47","state":"Shandong Province","city":"Liaocheng","address":"Room 103, unit 3. No 1, Canal Commercial Building","postal_code":"","url":"","email":"xxxx@newerafoods.com","mobile_phone":"+86 456 9009876","office_phone":"","fax":"","payment_terms":"","classification_id":"1"}'),
	(156, 1, 156, 1, '{"name":"Office China","active":"1","supplier_code":"china","country":"47","state":"wuan","city":"wuan","address":"wuan 22","postal_code":"","url":"","email":"supplier_1@yopmail.com","mobile_phone":"564654564564646","office_phone":"","fax":"","payment_terms":"payment","classification_id":"","date_updated":"2020-07-13 08:22:45","id":"4"}', 1, '{"id":"4","date_created":"0000-00-00 00:00:00","date_updated":"2020-07-08 11:11:28","name":"Office China","active":"1","supplier_code":"china","country":"47","state":"wuan","city":"wuan","address":"wuan 22","postal_code":"","url":"","email":"supplier_1@yopmail.com","mobile_phone":"564654564564646","office_phone":"","fax":"","payment_terms":"payment","classification_id":"1"}'),
	(157, 1, 157, 1, '{"name":"supplier second","active":"1","supplier_code":"supp 2","country":"6","state":"Colombia","city":"Medellin","address":"asdd","postal_code":"","url":"www.supplier.com","email":"supplier_2@yopmail.com","mobile_phone":"+571546465","office_phone":"","fax":"","payment_terms":"payment","classification_id":"","date_updated":"2020-07-13 08:22:57","id":"5"}', 1, '{"id":"5","date_created":"2020-06-11 14:26:00","date_updated":"0000-00-00 00:00:00","name":"supplier second","active":"1","supplier_code":"supp 2","country":"6","state":"Colombia","city":"Medellin","address":"asdd","postal_code":"","url":"www.supplier.com","email":"supplier_2@yopmail.com","mobile_phone":"+571546465","office_phone":"","fax":"","payment_terms":"payment","classification_id":"1"}'),
	(158, 1, 158, 1, '{"name":"WEIFANG ENSIGN INDUSTRY CO., LTD.","active":"1","supplier_code":"WEIFANG ENSIGN","country":"47","state":"Shandong","city":"Weifang","address":"#1567 Changsheng Street, Changle","postal_code":"","url":"","email":"XXX","mobile_phone":"+86 536 628-8516","office_phone":"","fax":"","payment_terms":"60 day date BL\\/AWB","classification_id":"","date_updated":"2020-07-13 08:23:14","id":"6"}', 1, '{"id":"6","date_created":"2020-06-11 14:27:06","date_updated":"2020-07-09 17:08:14","name":"WEIFANG ENSIGN INDUSTRY CO., LTD.","active":"1","supplier_code":"WEIFANG ENSIGN","country":"47","state":"Shandong","city":"Weifang","address":"#1567 Changsheng Street, Changle","postal_code":"","url":"","email":"XXX","mobile_phone":"+86 536 628-8516","office_phone":"","fax":"","payment_terms":"60 day date BL\\/AWB","classification_id":"1"}'),
	(159, 1, 159, 1, '{"name":"HUFEI","active":"1","supplier_code":"20 MICRONS","country":"105","state":"","city":"Vadodara","address":"307-308, Anundeep  Complex  Race  Course","postal_code":"390007","url":"www.20microns.com","email":"info@20microns.com","mobile_phone":"+91 265 3057000","office_phone":"+91 265 3057000","fax":"+91 265 2333755","payment_terms":"","classification_id":"","date_updated":"2020-07-13 08:23:30","id":"7"}', 1, '{"id":"7","date_created":"2020-06-19 12:48:24","date_updated":"0000-00-00 00:00:00","name":"HUFEI","active":"1","supplier_code":"20 MICRONS","country":"105","state":"","city":"Vadodara","address":"307-308, Anundeep  Complex  Race  Course","postal_code":"390007","url":"www.20microns.com","email":"info@20microns.com","mobile_phone":"+91 265 3057000","office_phone":"+91 265 3057000","fax":"+91 265 2333755","payment_terms":"","classification_id":"2"}'),
	(160, 1, 160, 1, '{"name":"DEZHOU RUIKANG FOOD CO., LTD.","active":"1","supplier_code":"DEZHOU RUI","country":"47","state":"Shandong Province","city":"Shandong","address":"No. 968  Rui kang rd, De Zhou Economical Development","postal_code":"253034","url":"www.crisoyprotein.com","email":"dzruikang@allyum.com","mobile_phone":"+86  534 2562280","office_phone":"+86 534 2562270","fax":"+86 534 256 2270","payment_terms":"30% \\/ 70%  against copy of document","classification_id":"","date_updated":"2020-07-13 08:23:46","id":"8"}', 1, '{"id":"8","date_created":"2020-07-02 15:46:43","date_updated":"0000-00-00 00:00:00","name":"DEZHOU RUIKANG FOOD CO., LTD.","active":"1","supplier_code":"DEZHOU RUI","country":"47","state":"Shandong Province","city":"Shandong","address":"No. 968  Rui kang rd, De Zhou Economical Development","postal_code":"253034","url":"www.crisoyprotein.com","email":"dzruikang@allyum.com","mobile_phone":"+86  534 2562280","office_phone":"+86 534 2562270","fax":"+86 534 256 2270","payment_terms":"30% \\/ 70%  against copy of document","classification_id":"0"}'),
	(161, 1, 161, 1, '{"name":"San Antonio","description":"","country":"46","id":8}', NULL, NULL),
	(162, 1, 162, 1, '{"date_created":"2020-07-13","status":"pending","customer":"9","sales_agent":"6","contact":"3","destination_port":"8","incoterm":"2","combinate_container":"0","remarks":"","id":10}', NULL, NULL),
	(163, 1, 163, 1, '{"date_created":"2020-07-13","datae_updated":"2020-07-13 10:27:24","status":"pending","customer":"7","sales_agent":"6","contact":"2","destination_port":"8","combinate_container":"0","incoterm":"2","remarks":"","id":"10"}', 1, '{"id":"10","date_created":"2020-07-13 00:00:00","datae_updated":"0000-00-00 00:00:00","status":"pending","customer":"9","sales_agent":"6","contact":"3","destination_port":"8","incoterm":"2","remarks":"","quantity":null,"combinate_container":"0"}'),
	(164, 1, 164, 1, '{"product_id":"5","customer_request_id":"10","quantity":"1","unit":"1","status":"pending","fcl":"","weight":"","packing":"","material":"","specific_remarks":"","id":8}', NULL, NULL),
	(165, 1, 165, 1, '{"product_id":"2","customer_request_id":"10","quantity":"1","unit":"1","status":"pending","fcl":"","weight":"","packing":"","material":"","specific_remarks":"","id":9}', NULL, NULL),
	(166, 1, 166, 1, '{"customer_id":"9","raiting":"4","credit_ever_denied":"1","available_credit":"-3250000","insured_credit":"100000000","own_risk":"0","highest_ever_insured":"259000000","request_increase_status":"pending","mount_increase":"10000000","last_increased_requested":"10000000","date_last_increased_requested":"2020-04-30","date_updated":"2020-07-14 09:43:27","id":"11"}', 1, '{"id":"11","customer_id":"9","date_updated":"0000-00-00 00:00:00","date_created":"2020-07-01 12:12:22","raiting":"4","credit_ever_denied":"1","available_credit":"-3250000","insured_credit":"100000000","own_risk":"0","highest_ever_insured":"259000000","request_increase_status":"pending","mount_increase":"10000000","last_increased_requested":"10000000","date_last_increased_requested":"2020-04-30 13:00:00"}'),
	(167, 1, 167, 1, '{"customer_id":"9","raiting":"4","credit_ever_denied":"1","available_credit":"-3.250.000,00","insured_credit":"100.000.000,00","own_risk":"10.000,00","highest_ever_insured":"259.000.000,00","request_increase_status":"pending","mount_increase":"10.000.000,00","last_increased_requested":"10.000.000,00","date_last_increased_requested":"2020-04-30","date_updated":"2020-07-14 10:19:23","id":"11"}', 1, '{"id":"11","customer_id":"9","date_updated":"2020-07-14 09:43:27","date_created":"2020-07-01 12:12:22","raiting":"4","credit_ever_denied":"1","available_credit":"-3250000","insured_credit":"100000000","own_risk":"0","highest_ever_insured":"259000000","request_increase_status":"pending","mount_increase":"10000000","last_increased_requested":"10000000","date_last_increased_requested":"2020-04-30 00:00:00"}'),
	(168, 1, 168, 1, '{"name":"Comercial cerrillo s.a.","active":"1","code":"CERRILLOS","nit":"84.264.990-5","email":"xxx@comercial.com.cl","country":"46","city":"Santiago de chile","state":"xxxx","postal_code":"","address":"Ave. americo vespucio #2680 ofic 81 conchal\\u00ed","mobile_phone":"+56 2 2624-7028","office_phone":"+56 2 2624-7028","fax":"","pobox":"","url":"www.comercialcerrillos.cl","is_branche":"0","head_office":0,"industry_type":"2","sales_agent":"3","date_updated":"2020-07-14 10:45:32","id":"7"}', 1, '{"id":"7","date_created":"2020-06-26 10:29:59","date_updated":"2020-07-01 11:28:38","active":"1","code":"CERRILLOS","nit":"84.264.990-5","name":"COMERCIAL CERRILLOS S.A.","email":"xxx@comercial.com.cl","city":"Santiago de Chile","state":"xxxx","postal_code":"","address":"Ave. Americo Vespucio #2680 ofic 81 Conchal\\u00ed","mobile_phone":"+56 2 2624-7028","office_phone":"+56 2 2624-7028","fax":"","pobox":"","url":"www.comercialcerrillos.cl","head_office":"0","is_branche":"0","country":"46","industry_type":"2","sales_agent":"3"}'),
	(169, 1, 169, 1, '{"name":"Comercial cerrillos s.a.","active":"1","code":"CERRILLOS","nit":"84.264.990-5","email":"xxx@comercial.com.cl","country":"46","city":"Santiago de chile","state":"xxxx","postal_code":"","address":"Ave. americo vespucio #2680 ofic 81 conchal\\u00ed","mobile_phone":"+56 2 2624-7028","office_phone":"+56 2 2624-7028","fax":"","pobox":"","url":"www.comercialcerrillos.cl","is_branche":"0","head_office":0,"industry_type":"2","sales_agent":"3","date_updated":"2020-07-14 10:46:50","id":"7"}', 1, '{"id":"7","date_created":"2020-06-26 10:29:59","date_updated":"2020-07-14 10:45:32","active":"1","code":"CERRILLOS","nit":"84.264.990-5","name":"Comercial cerrillo s.a.","email":"xxx@comercial.com.cl","city":"Santiago de chile","state":"xxxx","postal_code":"","address":"Ave. americo vespucio #2680 ofic 81 conchal\\u00ed","mobile_phone":"+56 2 2624-7028","office_phone":"+56 2 2624-7028","fax":"","pobox":"","url":"www.comercialcerrillos.cl","head_office":"0","is_branche":"0","country":"46","industry_type":"2","sales_agent":"3"}'),
	(170, 1, 170, 1, '{"name":"Comercial cerrillos s.a.","active":"1","code":"CERRILLOS","nit":"84.264.990-5","email":"xxx@comercial.com.cl","country":"46","city":"Santiago de chile","state":"xxxx","postal_code":"","address":"Ave. americo vespucio #2680 ofic 81 conchal\\u00ed","mobile_phone":"+56 2 2624-7028","office_phone":"+56 2 2624-7028","fax":"","pobox":"","url":"www.comercialcerrillos.cl","is_branche":"0","head_office":0,"industry_type":"2","sales_agent":"3","date_updated":"2020-07-14 10:47:09","id":"7"}', 1, '{"id":"7","date_created":"2020-06-26 10:29:59","date_updated":"2020-07-14 10:46:50","active":"1","code":"CERRILLOS","nit":"84.264.990-5","name":"Comercial cerrillos s.a.","email":"xxx@comercial.com.cl","city":"Santiago de chile","state":"xxxx","postal_code":"","address":"Ave. americo vespucio #2680 ofic 81 conchal\\u00ed","mobile_phone":"+56 2 2624-7028","office_phone":"+56 2 2624-7028","fax":"","pobox":"","url":"www.comercialcerrillos.cl","head_office":"0","is_branche":"0","country":"46","industry_type":"2","sales_agent":"3"}'),
	(171, 1, 171, 1, '{"name":"Dresden food ingredients","active":"1","code":"DRESDEN","nit":"20263019807","email":"XXX","country":"173","city":"Lima","state":"xxx","postal_code":"3","address":"Avenida los ingenieros #124, urbanizaci\\u00f3n sta. raquel 2da etapa","mobile_phone":"+511 349-7788","office_phone":"+511 349-7788","fax":"+511 349-6307","pobox":"","url":"dresdenfi.com.pe","is_branche":"0","head_office":0,"industry_type":"2","sales_agent":"3","date_updated":"2020-07-14 10:48:09","id":"6"}', 1, '{"id":"6","date_created":"0000-00-00 00:00:00","date_updated":"2020-07-09 16:54:16","active":"1","code":"DRESDEN","nit":"20263019807","name":"DRESDEN FOOD INGREDIENTS S.A.","email":"XXX","city":"Lima","state":"xxx","postal_code":"3","address":"Avenida Los Ingenieros #124, Urbanizaci\\u00f3n Sta. Raquel 2da Etapa","mobile_phone":"+511 349-7788","office_phone":"+511 349-7788","fax":"+511 349-6307","pobox":"","url":"dresdenfi.com.pe","head_office":"0","is_branche":"0","country":"173","industry_type":"2","sales_agent":"3"}'),
	(172, 1, 172, 1, '{"type_contact":"Customer","first_name":"Juan eduardo","last_name":"Perez","name":"Juan eduardo Perez","position":"Commercial manager","department":"Comercio exterior","mobile_phone":"+ 58 345708343","office_phone":"","personal_phone":"","fax":"","email":"juanperez@yahoo.com","skype":"","customer_id":"6","supplier_id":null,"picture":"","home_address":"","country":"173","city":"","home_phone":"","birthday":"","additional_information":"","date_created":"2020-07-14 10:54:34","id":4}', NULL, NULL),
	(173, 1, 173, 1, '{"type_visit":"Telephone","type_client":"Customer","user_id":"5","customer_id":"6","supplier_id":"","date_visit":"2020-07-14","contact_name":"4","subject":"Prueba de envio de cotizacion","notes":"Se hablo por telefono sobre el envio de la cotizacion&nbsp;","id":17}', NULL, NULL),
	(174, 1, 174, 1, '{"type_contact":"Customer","first_name":"Jose","last_name":"Perez","name":"Jose Perez","position":"","department":"","mobile_phone":"5465465465465","office_phone":"","personal_phone":"","fax":"","email":"jj@yopmail..com","skype":"","customer_id":"9","supplier_id":null,"picture":"","home_address":"","country":"4","city":"","home_phone":"","birthday":"","additional_information":"","date_created":"2020-07-15 08:33:35","id":5}', NULL, NULL),
	(175, 1, 175, 1, '{"type_visit":"Personal","type_client":"Customer","user_id":"3","customer_id":"9","supplier_id":"","date_visit":"2020-07-15","contact_name":"5","subject":"Visita 2","notes":"Estas es nueva","id":18}', NULL, NULL),
	(176, 1, 176, 1, '{"date_created":"2020-07-16 12:32:10","RSD":"2020-07-16","status":"New","customer":"9","sales_agent":"3","contact":"5","destination_port":"1","incoterm":"2","combinate_container":"0","remarks":"Prueba","id":11}', NULL, NULL),
	(177, 1, 177, 1, '{"product_id":"2","customer_request_id":"11","quantity":"4","unit":"1","status":"New","fcl":"","weight":"","packing":"","material":"","specific_remarks":"prueba","pallets":"0","new_":"0","id":10}', NULL, NULL),
	(178, 1, 178, 1, '{"RSD":"2020-07-16","date_updated":"2020-07-17 09:37:17","status":"New","customer":"9","sales_agent":"3","contact":"5","destination_port":"1","combinate_container":"1","incoterm":"5","remarks":"ptrobando  cambios","id":"11"}', 1, '{"id":"11","date_created":"2020-07-16 12:32:10","date_updated":null,"status":"New","customer":"9","sales_agent":"3","contact":"5","destination_port":"1","incoterm":"2","remarks":"Prueba","quantity":null,"combinate_container":"0","RSD":"2020-07-16 00:00:00"}'),
	(179, 1, 179, 1, '{"name":"Supplier second","active":"1","supplier_code":"supp 2","country":"6","state":"Colombia","city":"Medellin","address":"Asdd","postal_code":"","url":"www.supplier.com","email":"supplier_2@yopmail.com","mobile_phone":"+571546465","office_phone":"","fax":"","payment_terms":"payment","classification_id":"6","date_updated":"2020-07-17 09:42:35","id":"5"}', 1, '{"id":"5","date_created":"2020-06-11 14:26:00","date_updated":"2020-07-13 08:22:57","name":"supplier second","active":"1","supplier_code":"supp 2","country":"6","state":"Colombia","city":"Medellin","address":"asdd","postal_code":"","url":"www.supplier.com","email":"supplier_2@yopmail.com","mobile_phone":"+571546465","office_phone":"","fax":"","payment_terms":"payment","classification_id":"0"}'),
	(180, 1, 180, 1, '{"name":"Hufei","active":"1","supplier_code":"20 MICRONS","country":"105","state":"","city":"Vadodara","address":"307-308, anundeep  complex  race  course","postal_code":"390007","url":"www.20microns.com","email":"info@20microns.com","mobile_phone":"+91 265 3057000","office_phone":"+91 265 3057000","fax":"+91 265 2333755","payment_terms":"","classification_id":"5","date_updated":"2020-07-17 10:11:22","id":"7"}', 1, '{"id":"7","date_created":"2020-06-19 12:48:24","date_updated":"2020-07-13 08:23:30","name":"HUFEI","active":"1","supplier_code":"20 MICRONS","country":"105","state":"","city":"Vadodara","address":"307-308, Anundeep  Complex  Race  Course","postal_code":"390007","url":"www.20microns.com","email":"info@20microns.com","mobile_phone":"+91 265 3057000","office_phone":"+91 265 3057000","fax":"+91 265 2333755","payment_terms":"","classification_id":"0"}'),
	(181, 1, 181, 1, '{"name":"Hufei","active":"1","supplier_code":"20 MICRONS","country":"105","state":"","city":"Vadodara","address":"307-308, anundeep  complex  race  course","postal_code":"390007","url":"www.20microns.com","email":"info@20microns.com","mobile_phone":"+91 265 3057000","office_phone":"+91 265 3057000","fax":"+91 265 2333755","payment_terms":"","classification_id":"5","date_updated":"2020-07-17 10:12:02","id":"7"}', 1, '{"id":"7","date_created":"2020-06-19 12:48:24","date_updated":"2020-07-17 10:11:22","name":"Hufei","active":"1","supplier_code":"20 MICRONS","country":"105","state":"","city":"Vadodara","address":"307-308, anundeep  complex  race  course","postal_code":"390007","url":"www.20microns.com","email":"info@20microns.com","mobile_phone":"+91 265 3057000","office_phone":"+91 265 3057000","fax":"+91 265 2333755","payment_terms":"","classification_id":"5"}'),
	(182, 1, 182, 1, '{"RSD":"2018-07-16","date_updated":"2020-07-17 10:35:12","status":"New","customer":"7","sales_agent":"6","contact":"2","destination_port":"8","combinate_container":"0","incoterm":"2","remarks":"","id":"10"}', 1, '{"id":"10","date_created":"2020-07-13 00:00:00","date_updated":"2020-07-13 10:27:24","status":"pending","customer":"7","sales_agent":"6","contact":"2","destination_port":"8","incoterm":"2","remarks":"","quantity":null,"combinate_container":"0","RSD":"0000-00-00 00:00:00"}'),
	(183, 1, 183, 1, '{"RSD":"2018-07-16","date_updated":"2020-07-17 10:35:58","status":"New","customer":"7","sales_agent":"6","contact":"2","destination_port":"8","combinate_container":"0","incoterm":"5","remarks":"hola","id":"10"}', 1, '{"id":"10","date_created":"2020-07-13 00:00:00","date_updated":"2020-07-17 10:35:12","status":"New","customer":"7","sales_agent":"6","contact":"2","destination_port":"8","incoterm":"2","remarks":"","quantity":null,"combinate_container":"0","RSD":"2018-07-16 00:00:00"}'),
	(184, 1, 184, 1, '{"name":"Prueba","description":null,"id":6}', NULL, NULL),
	(185, 1, 185, 1, '{"name":"prueba","description":null,"id":10}', NULL, NULL),
	(186, 1, 186, 1, '{"date_created":"2020-07-21 09:03:16","RSD":"2020-07-21","status":"New","customer":"6","sales_agent":"5","contact":"4","destination_port":"3","incoterm":"5","combinate_container":"0","remarks":"haciendo una prueba","id":12}', NULL, NULL),
	(187, 1, 187, 1, '{"type_contact":"Customer","active":"1","first_name":"Roberto","last_name":"Valdebenito","name":"Roberto Valdebenito","position":"Jefe de comercio exterior","department":"","mobile_phone":"+56 9 9801 8151","office_phone":"+56 2 2437 0950","personal_phone":"","fax":"","email":"rvaldebenito@traverso.cl","skype":"","customer_id":"9","supplier_id":null,"picture":"","home_address":"","country":"46","city":"Santiago de chile","home_phone":"","birthday":"2000-0m-dd","additional_information":"","date_updated":"2020-07-21 09:16:57","id":"5"}', 1, '{"id":"5","type_contact":"Customer","date_updated":null,"date_created":"2020-07-15 08:33:35","active":"1","name":"Jose Perez","first_name":"Jose","last_name":"Perez","position":"","department":"","mobile_phone":"5465465465465","office_phone":"","personal_phone":"","fax":"","email":"jj@yopmail..com","skype":"","line_products":"","customer_id":"9","supplier_id":null,"picture":"","home_address":"","country":"4","city":"","home_phone":"","birthday":"0000-00-00 00:00:00","additional_information":""}'),
	(188, 1, 188, 1, '{"customer_id":"9","raiting":"4","credit_ever_denied":"1","available_credit":"-3,25","insured_credit":"100000","own_risk":"10,00","highest_ever_insured":"259,00","request_increase_status":"pending","mount_increase":"10,00","last_increased_requested":"10,00","date_last_increased_requested":"2020-04-30","date_updated":"2020-07-21 09:17:32","id":"11"}', 1, '{"id":"11","customer_id":"9","date_updated":"2020-07-14 10:19:23","date_created":"2020-07-01 12:12:22","raiting":"4","credit_ever_denied":"1","available_credit":"-3.25","insured_credit":"100","own_risk":"10","highest_ever_insured":"259","request_increase_status":"pending","mount_increase":"10","last_increased_requested":"10","date_last_increased_requested":"2020-04-30 00:00:00"}'),
	(189, 1, 189, 1, '{"customer_id":"9","raiting":"4","credit_ever_denied":"1","available_credit":"-3,00","insured_credit":"100.000,00","own_risk":"0","highest_ever_insured":"259000","request_increase_status":"pending","mount_increase":"10,00","last_increased_requested":"10,00","date_last_increased_requested":"2020-04-30","date_updated":"2020-07-21 09:18:16","id":"11"}', 1, '{"id":"11","customer_id":"9","date_updated":"2020-07-21 09:17:32","date_created":"2020-07-01 12:12:22","raiting":"4","credit_ever_denied":"1","available_credit":"-3","insured_credit":"100000","own_risk":"10","highest_ever_insured":"259","request_increase_status":"pending","mount_increase":"10","last_increased_requested":"10","date_last_increased_requested":"2020-04-30 00:00:00"}'),
	(190, 1, 190, 1, '{"type_contact":"Customer","first_name":"Mariela","last_name":"Garcia","name":"Mariela Garcia","position":"","department":"Compras","mobile_phone":"+511 955 094 152","office_phone":"","personal_phone":"","fax":"","email":"marielag@frutarom.com","skype":"","customer_id":"8","supplier_id":null,"picture":"","home_address":"","country":"173","city":"Lima","home_phone":"","birthday":"","additional_information":"","date_created":"2020-07-21 09:21:16","id":6}', NULL, NULL),
	(191, 1, 191, 1, '{"type_contact":"Customer","active":"1","first_name":"Zoila","last_name":"Bazalar palacin","name":"Zoila Bazalar palacin","position":"Jefe de compras e importaciones","department":"","mobile_phone":"+511 9352 7439","office_phone":"Ext. 110","personal_phone":"","fax":"","email":"zbazalar@dresdenfi.com","skype":"","customer_id":"6","supplier_id":null,"picture":"","home_address":"","country":"173","city":"Lima","home_phone":"","birthday":"2000-0m-dd","additional_information":"","date_updated":"2020-07-21 09:26:46","id":"4"}', 1, '{"id":"4","type_contact":"Customer","date_updated":null,"date_created":"2020-07-14 10:54:34","active":"1","name":"Juan eduardo Perez","first_name":"Juan eduardo","last_name":"Perez","position":"Commercial manager","department":"Comercio exterior","mobile_phone":"+ 58 345708343","office_phone":"","personal_phone":"","fax":"","email":"juanperez@yahoo.com","skype":"","line_products":"","customer_id":"6","supplier_id":null,"picture":"","home_address":"","country":"173","city":"","home_phone":"","birthday":"0000-00-00 00:00:00","additional_information":""}'),
	(192, 1, 192, 1, '{"type_contact":"Customer","active":"1","first_name":"Zoila","last_name":"Bazalar palacin","name":"Zoila Bazalar palacin","position":"Jefe de compras e importaciones","department":"","mobile_phone":"+511 9352 7439","office_phone":"+511 349 7788 Ext. 110","personal_phone":"","fax":"","email":"zbazalar@dresdenfi.com","skype":"","customer_id":"6","supplier_id":null,"picture":"","home_address":"","country":"173","city":"Lima","home_phone":"","birthday":"2000-0m-dd","additional_information":"","date_updated":"2020-07-21 09:28:45","id":"4"}', 1, '{"id":"4","type_contact":"Customer","date_updated":"2020-07-21 09:26:46","date_created":"2020-07-14 10:54:34","active":"1","name":"Zoila Bazalar palacin","first_name":"Zoila","last_name":"Bazalar palacin","position":"Jefe de compras e importaciones","department":"","mobile_phone":"+511 9352 7439","office_phone":"Ext. 110","personal_phone":"","fax":"","email":"zbazalar@dresdenfi.com","skype":"","line_products":"","customer_id":"6","supplier_id":null,"picture":"","home_address":"","country":"173","city":"Lima","home_phone":"","birthday":"0000-00-00 00:00:00","additional_information":""}'),
	(193, 1, 193, 1, '{"type_contact":"Supplier","first_name":"Jose","last_name":"Perez","name":"Jose Perez","position":"","department":"","mobile_phone":"+587195666","office_phone":"","personal_phone":"","fax":"","email":"perez@yopmail.com","skype":"","customer_id":null,"supplier_id":"6","picture":"","home_address":"","country":"232","city":"","home_phone":"","birthday":"","additional_information":"","date_created":"2020-07-21 09:33:14","id":7}', NULL, NULL),
	(194, 1, 194, 1, '{"product_id":"2","customer_request_id":"12","quantity":"4","unit":"1","status":"New","fcl":"","fcl_option":null,"nor":0,"weight":"","unit_pack":"","packing":"","material":"","specific_remarks":"Prueba","pallets":null,"supplier":"6","contacts":"7","purchasing":null,"RSD":"2020-07-21","id":21}', NULL, NULL),
	(195, 1, 195, 1, '{"name":"Liaocheng new era foods","active":"1","supplier_code":"NEW ERA FOODS","country":"47","state":"Shandong province","city":"Liaocheng","address":"Room 103, unit 3. no 1, canal commercial building","postal_code":"","url":"http:\\/\\/","email":"xxxx@newerafoods.com","mobile_phone":"+86 456 9009876","office_phone":"","fax":"","payment_terms":"","classification_id":"5","date_updated":"2020-07-21 09:34:32","id":"9"}', 1, '{"id":"9","date_created":"2020-07-02 16:28:37","date_updated":"2020-07-13 08:22:29","name":"LIAOCHENG NEW ERA FOODS","active":"1","supplier_code":"NEW ERA FOODS","country":"47","state":"Shandong Province","city":"Liaocheng","address":"Room 103, unit 3. No 1, Canal Commercial Building","postal_code":"","url":"","email":"xxxx@newerafoods.com","mobile_phone":"+86 456 9009876","office_phone":"","fax":"","payment_terms":"","classification_id":"0"}'),
	(196, 1, 196, 1, '{"RSD":"2020-07-21","date_updated":"2020-07-21 09:51:36","status":"New","customer":"6","sales_agent":"5","contact":"4","destination_port":"3","combinate_container":"0","incoterm":"5","remarks":"haciendo una prueba","id":"12"}', 1, '{"id":"12","date_created":"2020-07-21 09:03:16","date_updated":null,"status":"New","customer":"6","sales_agent":"5","contact":"4","destination_port":"3","incoterm":"5","remarks":"haciendo una prueba","quantity":null,"combinate_container":"0","RSD":"2020-07-21 00:00:00"}'),
	(197, 1, 197, 1, '{"date_created":"2020-07-21 10:10:20","RSD":"2020-07-21","status":"New","customer":"9","sales_agent":"5","contact":"5","destination_port":"7","incoterm":"1","combinate_container":"0","remarks":"probando","id":13}', NULL, NULL),
	(198, 1, 198, 1, '{"product_id":"5","customer_request_id":"13","quantity":"30000","unit":"1","status":"New","fcl":"0","fcl_option":null,"nor":0,"weight":"","unit_pack":"","packing":"","material":"","specific_remarks":"","pallets":null,"supplier":"6","contacts":"7","purchasing":null,"RSD":"2020-07-21","id":22}', NULL, NULL),
	(199, 1, 199, 1, '{"product_id":"5","customer_request_id":"13","quantity":"30000","unit":"1","status":"New","fcl":"","fcl_option":null,"nor":0,"weight":"","unit_pack":"","packing":"","material":"","specific_remarks":"","pallets":null,"supplier":"8","contacts":"","purchasing":null,"RSD":"2020-07-21","id":23}', NULL, NULL),
	(200, 1, 200, 1, '{"product_id":"3","customer_request_id":"13","quantity":"","unit":"","status":"New","fcl":"1","fcl_option":"40","nor":1,"weight":"","unit_pack":"","packing":"","material":"","specific_remarks":"","pallets":null,"supplier":null,"contacts":"","purchasing":"2","RSD":"2020-07-21","id":24}', NULL, NULL),
	(201, 1, 201, 1, '{"name":"Carton","description":"","id":"10"}', 1, '{"id":"10","name":"prueba","description":null}'),
	(202, 1, 202, 1, '{"name":"Compound","description":"","id":11}', NULL, NULL),
	(203, 1, 203, 1, '{"name":"Fibre","description":"","id":12}', NULL, NULL),
	(204, 1, 204, 1, '{"name":"Galvanized Iron","description":"","id":13}', NULL, NULL),
	(205, 1, 205, 1, '{"name":"Glass","description":"","id":14}', NULL, NULL),
	(206, 1, 206, 1, '{"name":"Hdpe","description":"","id":15}', NULL, NULL),
	(207, 1, 207, 1, '{"name":"IN 1000 KG BIG-BAGS","description":"","id":16}', NULL, NULL),
	(208, 1, 208, 1, '{"name":"IN 20 KG CARTON","description":"","id":17}', NULL, NULL),
	(209, 1, 209, 1, '{"name":"IN 25 KG DRUM","description":"","id":18}', NULL, NULL),
	(210, 1, 210, 1, '{"name":"IN 50 KG DRUM","description":"","id":19}', NULL, NULL),
	(211, 1, 211, 1, '{"name":"Iron","description":"","id":20}', NULL, NULL),
	(212, 1, 212, 1, '{"name":"Kraft Paper","description":"","id":21}', NULL, NULL),
	(213, 1, 213, 1, '{"name":"Non-Galvanized Iron","description":"","id":22}', NULL, NULL),
	(214, 1, 214, 1, '{"name":"Paper","description":"","id":23}', NULL, NULL),
	(215, 1, 215, 1, '{"name":"PE","description":"","id":24}', NULL, NULL),
	(216, 1, 216, 1, '{"name":"Plastic","description":"","id":25}', NULL, NULL),
	(217, 1, 217, 1, '{"name":"PP","description":"","id":26}', NULL, NULL),
	(218, 1, 218, 1, '{"name":"Steel","description":"","id":27}', NULL, NULL),
	(219, 1, 219, 1, '{"name":"W\\/ INTERNAL DOUBLE LAYER OF PE","description":"","id":28}', NULL, NULL),
	(220, 1, 220, 1, '{"name":"W\\/ INTERNAL SINGLE LAYER OF PE","description":"","id":29}', NULL, NULL),
	(221, 1, 221, 1, '{"name":"Wood","description":"","id":30}', NULL, NULL),
	(222, 1, 222, 1, '{"name":"Woven","description":"","id":31}', NULL, NULL),
	(223, 1, 223, 1, '{"product_id":"2","customer_request_id":"13","quantity":"50000","unit":"2","status":"New","fcl":"","fcl_option":null,"nor":0,"weight":"","unit_pack":"","packing":"","material":"","specific_remarks":"","pallets":null,"supplier":"6","contacts":"7","purchasing":null,"RSD":"2020-07-21","id":25}', NULL, NULL),
	(224, 1, 224, 1, '{"name":"Amuco Bag","description":"","id":"6"}', 1, '{"id":"6","name":"Prueba","description":null}'),
	(225, 1, 225, 1, '{"name":"Amucool Can","description":"","id":7}', NULL, NULL),
	(226, 1, 226, 1, '{"name":"Amucool Cylinder","description":"","id":8}', NULL, NULL),
	(227, 1, 227, 1, '{"name":"Amucool Cylinder And Box","description":"","id":9}', NULL, NULL),
	(228, 1, 228, 1, '{"name":"Amusoy Bag","description":"","id":10}', NULL, NULL),
	(229, 1, 229, 1, '{"name":"Bag","description":"","id":11}', NULL, NULL),
	(230, 1, 230, 1, '{"name":"Bale","description":"","id":12}', NULL, NULL),
	(231, 1, 231, 1, '{"name":"Big Bag","description":"","id":13}', NULL, NULL),
	(232, 1, 232, 1, '{"name":"Bottle","description":"","id":14}', NULL, NULL),
	(233, 1, 233, 1, '{"name":"Box","description":"","id":15}', NULL, NULL),
	(234, 1, 234, 1, '{"name":"Can","description":"","id":16}', NULL, NULL),
	(235, 1, 235, 1, '{"name":"Canister","description":"","id":17}', NULL, NULL),
	(236, 1, 236, 1, '{"name":"Carton","description":"","id":18}', NULL, NULL),
	(237, 1, 237, 1, '{"name":"Cylinder","description":"","id":19}', NULL, NULL),
	(238, 1, 238, 1, '{"name":"Drum","description":"","id":20}', NULL, NULL),
	(239, 1, 239, 1, '{"name":"Flexibag","description":"","id":21}', NULL, NULL),
	(240, 1, 240, 1, '{"name":"Flexitang","description":"","id":22}', NULL, NULL),
	(241, 1, 241, 1, '{"name":"Ibctank","description":"","id":23}', NULL, NULL),
	(242, 1, 242, 1, '{"name":"Flexitank","description":"","id":"22"}', 1, '{"id":"22","name":"Flexitang","description":""}'),
	(243, 1, 243, 1, '{"name":"Ibc Tank","description":"","id":"23"}', 1, '{"id":"23","name":"Ibctank","description":""}'),
	(244, 1, 244, 1, '{"name":"Iso Tank","description":"","id":24}', NULL, NULL),
	(245, 1, 245, 1, '{"name":"Neutral Bag","description":"","id":25}', NULL, NULL),
	(246, 1, 246, 1, '{"name":"Original Factory Bag","description":"","id":26}', NULL, NULL),
	(247, 1, 247, 1, '{"name":"Paper Bag","description":"","id":27}', NULL, NULL),
	(248, 1, 248, 1, '{"name":"Premex Bag","description":"","id":28}', NULL, NULL),
	(249, 1, 249, 1, '{"name":"Tin","description":"","id":29}', NULL, NULL),
	(250, 1, 250, 1, '{"name":"To Be Confirmed","description":"","id":30}', NULL, NULL),
	(251, 1, 251, 1, '{"name":"Torrington Cylinder","description":"","id":31}', NULL, NULL),
	(252, 1, 252, 1, '{"name":"Woven Bag","description":"","id":32}', NULL, NULL),
	(253, 1, 253, 1, '{"name":"CFR","description":"CFR","active":"1","id":"1"}', 1, '{"id":"1","name":"CRF","description":"CRF","active":"1"}'),
	(254, 1, 254, 1, '{"date_created":"2020-07-23 10:21:45","RSD":"2020-07-23","status":"New","customer":"7","sales_agent":"5","contact":"3","destination_port":"4","incoterm":"2","combinate_container":"0","remarks":"","id":14}', NULL, NULL),
	(255, 1, 255, 1, '{"product_id":"6","customer_request_id":"14","quantity":"","unit":"","status":"New","fcl":"1","fcl_option":"20","nor":0,"weight":"","unit_pack":"","packing":"","material":"","specific_remarks":"","pallets":null,"supplier":"9","contacts":"","purchasing":null,"RSD":"2020-07-23","id":26}', NULL, NULL),
	(256, 1, 256, 1, '{"product_id":"2","customer_request_id":"14","quantity":"50000","unit":"2","status":"New","fcl":"1","fcl_option":null,"nor":0,"weight":"","unit_pack":"","packing":"","material":"","specific_remarks":"","pallets":null,"supplier":null,"contacts":"","purchasing":"5","RSD":"2020-07-23","id":27}', NULL, NULL),
	(257, 1, 257, 1, '{"name":"MT","description":"Metric Tons","value_gramos":"1000000","id":"1"}', 1, '{"id":"1","name":"MT","description":"Tons","value_gramos":"1000000"}'),
	(258, 1, 258, 1, '{"name":"Kg","description":"Kilograms","value_gramos":"1000","id":"2"}', 1, '{"id":"2","name":"Kg","description":"Kilgramos","value_gramos":"1000"}'),
	(259, 1, 259, 1, '{"date_created":"2020-07-23 15:14:40","RSD":"2020-07-23","status":"New","customer":"6","sales_agent":"5","contact":"4","destination_port":"3","incoterm":"2","combinate_container":"0","remarks":"probando","id":15}', NULL, NULL),
	(260, 1, 260, 1, '{"product_id":"3","customer_request_id":"15","quantity":"20","unit":"1","status":"New","fcl":"","fcl_option":null,"nor":0,"weight":"","unit_pack":"","packing":"","material":"","specific_remarks":"","pallets":null,"supplier":"6","contacts":"7","purchasing":null,"RSD":"2020-07-23","id":28}', NULL, NULL),
	(261, 1, 261, 1, '{"product_id":"3","customer_request_id":"15","quantity":"20","unit":"1","status":"New","fcl":"","fcl_option":null,"nor":0,"weight":"","unit_pack":"","packing":"","material":"","specific_remarks":"","pallets":null,"supplier":null,"contacts":"","purchasing":"3","RSD":"2020-07-23","id":29}', NULL, NULL),
	(262, 1, 262, 1, '{"product_id":"2","customer_request_id":"15","quantity":"","unit":"","status":"New","fcl":"1","fcl_option":null,"nor":0,"weight":"","unit_pack":"","packing":"","material":"","specific_remarks":"","pallets":null,"supplier":"6","contacts":"7","purchasing":null,"RSD":"2020-07-23","id":30}', NULL, NULL),
	(263, 1, 263, 1, '{"product_id":"5","customer_request_id":"15","quantity":"15","unit":"2","status":"New","fcl":"0","fcl_option":null,"nor":0,"weight":"","unit_pack":"","packing":"","material":"","specific_remarks":"","pallets":null,"supplier":"7","contacts":"","purchasing":null,"RSD":"2020-07-23","id":31}', NULL, NULL),
	(264, 1, 264, 1, '{"product_id":"5","customer_request_id":"15","quantity":"15","unit":"2","status":"New","fcl":"0","fcl_option":null,"nor":0,"weight":"","unit_pack":"","packing":"","material":"","specific_remarks":"","pallets":null,"supplier":"5","contacts":"","purchasing":null,"RSD":"2020-07-23","id":32}', NULL, NULL),
	(265, 1, 265, 1, '{"product_id":"5","customer_request_id":"14","quantity":"","unit":"","status":"New","fcl":"1","fcl_option":"40","type_fcl":"NOR","weight":"","unit_pack":"","packing":"","material":"","specific_remarks":"","pallets":null,"supplier":null,"contacts":"","purchasing":"6","ETD":"2020-07-24","ETA":"2020-07-24","date_created":"2020-07-24 11:58:43","id":35}', NULL, NULL),
	(266, 1, 266, 1, '{"RSD":"2020-07-23","date_updated":"2020-07-28 11:32:11","status":"New","customer":"6","sales_agent":"7","contact":"4","destination_port":"3","combinate_container":"0","incoterm":"2","remarks":"probando","id":"15"}', 1, '{"id":"15","date_created":"2020-07-23 15:14:40","date_updated":null,"status":"New","customer":"6","sales_agent":"5","contact":"4","destination_port":"3","incoterm":"2","remarks":"probando","quantity":null,"combinate_container":"0","RSD":"2020-07-23 00:00:00"}'),
	(267, 1, 267, 1, '{"RSD":"2020-07-23","date_updated":"2020-07-28 11:32:21","status":"New","customer":"6","sales_agent":"5","contact":"4","destination_port":"3","combinate_container":"0","incoterm":"2","remarks":"probando","id":"15"}', 1, '{"id":"15","date_created":"2020-07-23 15:14:40","date_updated":"2020-07-28 11:32:11","status":"New","customer":"6","sales_agent":"7","contact":"4","destination_port":"3","incoterm":"2","remarks":"probando","quantity":null,"combinate_container":"0","RSD":"2020-07-23 00:00:00"}'),
	(268, 1, 268, 1, '{"product_id":"2","customer_request_id":"15","quantity":"10","unit":"1","status":"New","fcl":"","fcl_option":null,"type_fcl":"","weight":"","unit_pack":"","packing":"","material":"","specific_remarks":"","pallets":null,"supplier":null,"contacts":"","purchasing":"7","ETD":"2020-07-28","ETA":"2020-07-28","date_created":"2020-07-28 11:32:41","id":36}', NULL, NULL),
	(269, 1, 269, 1, '{"product_id":"3","customer_request_id":"15","quantity":"34","unit":"1","status":"New","fcl":"1","fcl_option":"20","type_fcl":"HCube","weight":"","unit_pack":"","packing":"","material":"","specific_remarks":"","pallets":null,"supplier":null,"contacts":"","purchasing":"4","ETD":"2020-07-28","ETA":"2020-07-28","date_created":"2020-07-28 13:08:58","id":38}', NULL, NULL),
	(270, 1, 270, 1, '{"name":"Cylinders","description":"Cylinders","value_gramos":"","id":4}', NULL, NULL),
	(271, 1, 271, 1, '{"name":"100% TT Advance","description":"100% TT Advance","id":1}', NULL, NULL),
	(272, 1, 272, 1, '{"ETD":"2020-07-29","product_id":"2","quantity":"4","unit":"1","fcl":"4","fcl_option":"20","type_fcl":"NOR","weight":"","shape":"","material":"","pallets":null,"price_fob":"4","total_freight":"4","total_price":"8","comission_supplier":"43","shipping_port":"1","supplier_incoterm":"1","supplier":"5","branch":"sdfsdfsdf","payment_terms":"1","comments":"sdfsdf","analysis_standard":"sdfsdf","valid_untill":"2020-07-29","purchasing":" 7","supplier_direct":null,"status":"Pending","customer_request_id":"15","id":6}', NULL, NULL),
	(273, 1, 273, 1, '{"product_id":"3","customer_request_id":"15","quantity":"24","unit":"1","status":"New","fcl":"23","fcl_option":null,"type_fcl":"HCube","weight":"","unit_pack":"","packing":"","material":"","specific_remarks":"","pallets":null,"supplier":"6","contacts":"7","purchasing":null,"ETD":"","ETA":"","date_created":"2020-07-29 10:47:34","id":39}', NULL, NULL),
	(274, 1, 274, 1, '{"product_id":"3","customer_request_id":"15","quantity":"24","unit":"1","status":"New","fcl":"23","fcl_option":null,"type_fcl":"HCube","weight":"","unit_pack":"","packing":"","material":"","specific_remarks":"","pallets":null,"supplier":null,"contacts":"","purchasing":"6","ETD":"","ETA":"","date_created":"2020-07-29 10:47:49","id":40}', NULL, NULL),
	(275, 1, 275, 1, '{"ETD":"2020-07-29","product_id":"2","quantity":"10","unit":"1","fcl":"","fcl_option":"","type_fcl":"NOR","weight":"25","shape":"11","material":"","pallets":"0","price_fob":"700","total_freight":"300","total_price":"","comission_supplier":"","shipping_port":"5","supplier_incoterm":"2","supplier":"5","branch":"","payment_terms":"","comments":"","analysis_standard":"","valid_untill":"2020-07-29","purchasing":" 7","supplier_direct":null,"status":"Pending","customer_request_id":"15","id":7}', NULL, NULL),
	(276, 1, 276, 1, '{"product_id":"3","customer_request_id":"15","quantity":"4","unit":"","status":"New","fcl":"2","fcl_option":null,"type_fcl":"NOR","weight":"","unit_pack":"","packing":"","material":"","specific_remarks":"","pallets":null,"supplier":null,"contacts":"","purchasing":"6","ETD":"","ETA":"","date_created":"2020-07-29 15:43:53","id":43}', NULL, NULL),
	(277, 1, 277, 1, '{"name":"test-pack","description":null,"id":33}', NULL, NULL),
	(278, 1, 278, 1, '{"id":"9","date_created":"2020-06-30 00:00:00","date_updated":"0000-00-00 00:00:00","status":"customer request","customer":"6","sales_agent":"3","contact":"9","destination_port":"7","incoterm":"1","remarks":"asdasd","quantity":null,"combinate_container":"1","RSD":"0000-00-00 00:00:00"}', NULL, NULL),
	(279, 1, 279, 1, '{"product_id":"3","customer_request_id":"15","quantity":"34","unit":"1","status":"New","fcl":"2","fcl_option":"20","type_fcl":"NOR","weight":"","unit_pack":"","packing":"","material":"","specific_remarks":"","pallets":null,"supplier":"6","contacts":"7","purchasing":null,"ETD":"","ETA":"","date_created":"2020-08-03 12:44:33","id":44}', NULL, NULL),
	(280, 1, 280, 1, '{"product_id":"3","customer_request_id":"15","quantity":"34","unit":"1","status":"New","fcl":"2","fcl_option":"20","type_fcl":"NOR","weight":"","unit_pack":"","packing":"","material":"","specific_remarks":"","pallets":null,"supplier":null,"contacts":"","purchasing":"1","ETD":"","ETA":"","date_created":"2020-08-03 12:44:48","id":45}', NULL, NULL),
	(281, 1, 281, 1, '{"product_id":"5","customer_request_id":"15","quantity":"45","unit":"1","status":"New","fcl":"2","fcl_option":"20","type_fcl":"NOR","weight":"","unit_pack":"","packing":"","material":"","specific_remarks":"","pallets":null,"supplier":null,"contacts":"","purchasing":"2","ETD":"2021-01-03","ETA":"2021-01-03","date_created":"2020-08-03 12:54:42","id":46}', NULL, NULL),
	(282, 1, 282, 1, '{"product_id":"5","customer_request_id":"15","quantity":"45","unit":"1","status":"New","fcl":"2","fcl_option":"20","type_fcl":"NOR","weight":"","unit_pack":"","packing":"","material":"","specific_remarks":"","pallets":null,"supplier":null,"contacts":"","purchasing":"4","ETD":"2021-01-03","ETA":"2021-01-03","date_created":"2020-08-03 12:57:47","id":47}', NULL, NULL),
	(283, 1, 283, 1, '{"name":"Comercial Cerrillos S.a.","active":"1","code":"CERRILLOS","nit":"84.264.990-5","email":"xxx@comercial.com.cl","country":"46","city":"Santiago De Chile","state":"Xxxx","postal_code":"","address":"Ave. Americo Vespucio #2680 Ofic 81 Conchal\\u00ed","mobile_phone":"+56 2 2624-7028","office_phone":"+56 2 2624-7028","fax":"","pobox":"","url":"www.comercialcerrillos.cl","is_branche":"0","head_office":0,"industry_type":"2","sales_agent":"3,6","date_updated":"2020-08-03 16:53:05","id":"7"}', 1, '{"id":"7","date_created":"2020-06-26 10:29:59","date_updated":"2020-07-14 10:47:09","active":"1","code":"CERRILLOS","nit":"84.264.990-5","name":"Comercial cerrillos s.a.","email":"xxx@comercial.com.cl","city":"Santiago de chile","state":"xxxx","postal_code":"","address":"Ave. americo vespucio #2680 ofic 81 conchal\\u00ed","mobile_phone":"+56 2 2624-7028","office_phone":"+56 2 2624-7028","fax":"","pobox":"","url":"www.comercialcerrillos.cl","head_office":"0","is_branche":"0","country":"46","industry_type":"2","sales_agent":"3"}'),
	(284, 1, 284, 1, '{"name":"TRAVERSO S.A.","active":"1","code":"TRAVERSO","nit":"96 606780-2","email":"xxx@traverso.cl","country":"46","city":"Santiago De Chile","state":"Santiago","postal_code":"","address":"Ave. Americo Vespusio  01313  La Cisterna","mobile_phone":"+56 2 2437-0950","office_phone":"","fax":"","pobox":"","url":"http:\\/\\/","is_branche":"0","head_office":0,"industry_type":"2","sales_agent":"2,3,5","date_updated":"2020-08-03 16:53:30","id":"9"}', 1, '{"id":"9","date_created":"2020-07-01 11:50:42","date_updated":"0000-00-00 00:00:00","active":"1","code":"TRAVERSO","nit":"96 606780-2","name":"TRAVERSO S.A.","email":"xxx@traverso.cl","city":"Santiago de Chile","state":"Santiago","postal_code":"","address":"Ave. Americo Vespusio  01313  La Cisterna","mobile_phone":"+56 2 2437-0950","office_phone":"","fax":"","pobox":"","url":"","head_office":"0","is_branche":"0","country":"46","industry_type":"2","sales_agent":"3,5"}'),
	(285, 1, 285, 1, '{"date_created":"2020-08-03 16:54:08","RSD":null,"status":"New","customer":"8","sales_agent":"5","contact":"6","destination_port":"3","incoterm":"1","combinate_container":"0","remarks":"haciendo pruebas","id":16}', NULL, NULL),
	(286, 1, 286, 1, '{"product_id":"3","customer_request_id":"16","quantity":"","unit":"","status":"New","fcl":"1","fcl_option":"20","type_fcl":"NOR","weight":"","unit_pack":"","packing":"","material":"","specific_remarks":"","pallets":null,"supplier":null,"contacts":"","purchasing":"7","ETD":"2020-09-03","ETA":"2020-09-03","date_created":"2020-08-03 16:57:52","id":48}', NULL, NULL),
	(287, 1, 287, 1, '{"date_updated":"2020-08-03 17:08:45","status":"Pending","id":"16"}', 1, '{"id":"16","date_created":"2020-08-03 16:54:08","date_updated":null,"status":"New","customer":"8","sales_agent":"5","contact":"6","destination_port":"3","incoterm":"1","remarks":"haciendo pruebas","quantity":null,"combinate_container":"0","RSD":null}'),
	(288, 1, 288, 1, '{"date_updated":"2020-08-03 17:08:45","status":"Pending","id":"48"}', 1, '{"id":"48","product_id":"3","customer_request_id":"16","quantity":"0","unit":"0","status":"New","specific_remarks":"","fcl":"1","fcl_option":"20","type_fcl":"NOR","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":null,"purchasing":"7","contacts":"","ETD":"2020-09-03 00:00:00","date_created":"2020-08-03 16:57:52","date_updated":null,"ETA":"2020-09-03 00:00:00","purchasing_username":"Office","amuco_suppliers_name":null,"amuco_products_name":"ONION POWDER MESH 80-100","amuco_unit_types_name":null}'),
	(289, 1, 289, 1, '{"RSD":null,"date_updated":"2020-08-04 09:50:56","status":"New","customer":"8","sales_agent":"5","contact":"6","destination_port":"3","combinate_container":"1","incoterm":"1","remarks":"haciendo pruebas","id":"16"}', 1, '{"id":"16","date_created":"2020-08-03 16:54:08","date_updated":"2020-08-03 17:08:45","status":"Pending","customer":"8","sales_agent":"5","contact":"6","destination_port":"3","incoterm":"1","remarks":"haciendo pruebas","quantity":null,"combinate_container":"0","RSD":null}'),
	(290, 1, 290, 1, '{"product_id":"3","customer_request_id":"16","quantity":"","unit":"","status":"New","fcl":"","fcl_option":null,"type_fcl":"","weight":"","unit_pack":"","packing":"","material":"","specific_remarks":"","pallets":null,"supplier":"6","contacts":"7","purchasing":null,"ETD":"2020-10-04","ETA":"","date_created":"2020-08-04 09:52:17","id":49}', NULL, NULL),
	(291, 1, 291, 1, '{"product_id":"3","customer_request_id":"16","quantity":"1","unit":"1","status":"New","fcl":"2","fcl_option":null,"type_fcl":"NOR","weight":"","unit_pack":"","packing":"","material":"","specific_remarks":"","pallets":null,"supplier":null,"contacts":"","purchasing":"6","ETD":"2020-10-04","ETA":"2020-10-04","date_created":"2020-08-04 09:53:06","id":50}', NULL, NULL),
	(292, 1, 292, 1, '{"date_created":"2020-08-04 10:01:37","RSD":null,"status":"New","customer":"7","sales_agent":"5","contact":"3","destination_port":"7","incoterm":"1","combinate_container":"0","remarks":"XXXXXX pruebas","id":17}', NULL, NULL),
	(293, 1, 293, 1, '{"product_id":"5","customer_request_id":"17","quantity":"500","unit":"1","status":"New","fcl":"","fcl_option":null,"type_fcl":"","weight":"","unit_pack":"","packing":"","material":"","specific_remarks":"marca XXX","pallets":null,"supplier":"7","contacts":"","purchasing":null,"ETD":"2020-08-31","ETA":"","date_created":"2020-08-04 10:03:27","id":51}', NULL, NULL),
	(294, 1, 294, 1, '{"product_id":"5","customer_request_id":"17","quantity":"500","unit":"1","status":"New","fcl":"","fcl_option":null,"type_fcl":"","weight":"","unit_pack":"","packing":"","material":"","specific_remarks":"marca XXX","pallets":null,"supplier":null,"contacts":"","purchasing":"7","ETD":"2020-08-31","ETA":"2020-08-31","date_created":"2020-08-04 10:03:46","id":52}', NULL, NULL),
	(295, 1, 295, 1, '{"name":"Soy protein isolated 90% min non functional instant type 200-88","custom_number":"XXX","custom_number_brazil":"","cas":"9010-10-0","unit_id":"1","remarks":"Proteina de uso comercial, solo para pruebas de laboratorio","active":"1","category_id":"14","industry_id":"Food","suppliers_id":"8","purchasing_office":"6","id":"5"}', 1, '{"id":"5","date_created":"0000-00-00 00:00:00","date_updated":"0000-00-00 00:00:00","name":"SOY PROTEIN ISOLATED 90% MIN NON FUNCTIONAL INSTANT TYPE 200-88","custom_number":"XXX","custom_number_brazil":"","cas":"9010-10-0","unit_id":"1","remarks":"","active":"1","category_id":"14","industry_id":"Food","suppliers_id":"8","purchasing_office":"6"}'),
	(296, 1, 296, 1, '{"date_created":"2020-08-04 11:35:24","RSD":null,"status":"New","customer":"8","sales_agent":"5","contact":"6","destination_port":"7","incoterm":"1","combinate_container":"1","remarks":"probando con laura","id":18}', NULL, NULL),
	(297, 1, 297, 1, '{"product_id":"3","customer_request_id":"18","quantity":"3000","unit":"2","status":"New","fcl":"","fcl_option":null,"type_fcl":"","weight":"","unit_pack":"","packing":"","material":"","specific_remarks":"micronizado","pallets":null,"supplier":null,"contacts":"","purchasing":"1","ETD":"2020-08-31","ETA":"2020-08-31","date_created":"2020-08-04 11:40:42","id":53}', NULL, NULL),
	(298, 1, 298, 1, '{"product_id":"3","customer_request_id":"18","quantity":"3000","unit":"2","status":"New","fcl":"","fcl_option":null,"type_fcl":"","weight":"","unit_pack":"","packing":"","material":"","specific_remarks":"micronizado","pallets":null,"supplier":"6","contacts":"","purchasing":null,"ETD":"2020-08-31","ETA":"","date_created":"2020-08-04 11:41:19","id":54}', NULL, NULL),
	(299, 1, 299, 1, '{"product_id":"2","customer_request_id":"18","quantity":"","unit":"","status":"New","fcl":"","fcl_option":null,"type_fcl":"","weight":"","unit_pack":"","packing":"","material":"","specific_remarks":"","pallets":null,"supplier":null,"contacts":"","purchasing":"3","ETD":"","ETA":"","date_created":"2020-08-05 07:34:28","id":55}', NULL, NULL),
	(300, 1, 300, 1, '{"product_id":"2","customer_request_id":"18","quantity":"","unit":"","status":"New","fcl":"","fcl_option":null,"type_fcl":"","weight":"","unit_pack":"","packing":"","material":"","specific_remarks":"","pallets":null,"supplier":null,"contacts":"","purchasing":"7","ETD":"","ETA":"","date_created":"2020-08-05 07:34:28","id":56}', NULL, NULL),
	(301, 1, 301, 1, '{"date_updated":"2020-08-05 07:35:03","status":"Pending","id":"18"}', 1, '{"id":"18","date_created":"2020-08-04 11:35:24","date_updated":null,"status":"New","customer":"8","sales_agent":"5","contact":"6","destination_port":"7","incoterm":"1","remarks":"probando con laura","quantity":null,"combinate_container":"1","RSD":null}'),
	(302, 1, 302, 1, '{"date_updated":"2020-08-05 07:35:04","status":"Pending","id":"56"}', 1, '{"id":"56","product_id":"2","customer_request_id":"18","quantity":"0","unit":"0","status":"New","specific_remarks":"","fcl":"0","fcl_option":null,"type_fcl":"","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":null,"purchasing":"7","contacts":"","ETD":"0000-00-00 00:00:00","date_created":"2020-08-05 07:34:28","date_updated":null,"ETA":"0000-00-00 00:00:00","purchasing_username":"Office","amuco_suppliers_name":null,"amuco_products_name":"CITRIC ACID ANHYDROUS MESH 30-100","amuco_unit_types_name":null}'),
	(303, 1, 303, 1, '{"date_updated":"2020-08-05 07:35:04","status":"Pending","id":"55"}', 1, '{"id":"55","product_id":"2","customer_request_id":"18","quantity":"0","unit":"0","status":"New","specific_remarks":"","fcl":"0","fcl_option":null,"type_fcl":"","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":null,"purchasing":"3","contacts":"","ETD":"0000-00-00 00:00:00","date_created":"2020-08-05 07:34:28","date_updated":null,"ETA":"0000-00-00 00:00:00","purchasing_username":"seller1","amuco_suppliers_name":null,"amuco_products_name":"CITRIC ACID ANHYDROUS MESH 30-100","amuco_unit_types_name":null}'),
	(304, 1, 304, 1, '{"date_updated":"2020-08-05 07:35:04","status":"Pending","id":"54"}', 1, '{"id":"54","product_id":"3","customer_request_id":"18","quantity":"3000","unit":"2","status":"New","specific_remarks":"micronizado","fcl":"0","fcl_option":null,"type_fcl":"","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":"6","purchasing":null,"contacts":"","ETD":"2020-08-31 00:00:00","date_created":"2020-08-04 11:41:19","date_updated":null,"ETA":"0000-00-00 00:00:00","purchasing_username":null,"amuco_suppliers_name":"WEIFANG ENSIGN INDUSTRY CO., LTD.","amuco_products_name":"ONION POWDER MESH 80-100","amuco_unit_types_name":"Kg"}'),
	(305, 1, 305, 1, '{"date_updated":"2020-08-05 07:35:04","status":"Pending","id":"53"}', 1, '{"id":"53","product_id":"3","customer_request_id":"18","quantity":"3000","unit":"2","status":"New","specific_remarks":"micronizado","fcl":"0","fcl_option":null,"type_fcl":"","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":null,"purchasing":"1","contacts":"","ETD":"2020-08-31 00:00:00","date_created":"2020-08-04 11:40:42","date_updated":null,"ETA":"2020-08-31 00:00:00","purchasing_username":"oscar","amuco_suppliers_name":null,"amuco_products_name":"ONION POWDER MESH 80-100","amuco_unit_types_name":"Kg"}'),
	(306, 1, 306, 1, '{"product_id":"5","customer_request_id":"17","quantity":"500","unit":"1","status":"New","fcl":"0","weight":"","packing":"","material":"","specific_remarks":"marca XXX","fcl_option":null,"type_fcl":"","pallets":null,"unit_pack":"","supplier":"8","purchasing":"","contacts":"","ETD":null,"ETA":null,"date_created":null,"date_updated":null,"id":"51"}', 1, '{"id":"51","product_id":"5","customer_request_id":"17","quantity":"500","unit":"1","status":"New","specific_remarks":"marca XXX","fcl":"0","fcl_option":null,"type_fcl":"","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":"7","purchasing":null,"contacts":"","ETD":"2020-08-31 00:00:00","date_created":"2020-08-04 10:03:27","date_updated":null,"ETA":"0000-00-00 00:00:00"}'),
	(307, 1, 307, 1, '{"date_created":"2020-08-06 11:15:21","RSD":null,"status":"New","customer":"6","sales_agent":"5","contact":"4","destination_port":"1","incoterm":"2","combinate_container":"0","remarks":"probando agosto 6","id":19}', NULL, NULL),
	(308, 1, 308, 1, '{"product_id":"5","customer_request_id":"19","quantity":"25","unit":"1","status":"New","fcl":"1","fcl_option":null,"type_fcl":"Standard","weight":"25","unit_pack":"2","packing":"","material":"","specific_remarks":"","pallets":"0","supplier":null,"contacts":"","purchasing":"7","ETD":"2020-08-31","ETA":"2020-08-31","date_created":"2020-08-06 11:18:21","id":57}', NULL, NULL),
	(309, 1, 309, 1, '{"product_id":"2","customer_request_id":"19","quantity":"","unit":"","status":"New","fcl":"2","fcl_option":null,"type_fcl":"","weight":"","unit_pack":"","packing":"","material":"","specific_remarks":"","pallets":null,"supplier":"7","contacts":"","purchasing":null,"ETD":"2020-09-03","ETA":"","date_created":"2020-08-06 11:19:44","id":58}', NULL, NULL),
	(310, 1, 310, 1, '{"date_updated":"2020-08-06 11:25:28","status":"Pending","id":"19"}', 1, '{"id":"19","date_created":"2020-08-06 11:15:21","date_updated":null,"status":"New","customer":"6","sales_agent":"5","contact":"4","destination_port":"1","incoterm":"2","remarks":"probando agosto 6","quantity":null,"combinate_container":"0","RSD":null}'),
	(311, 1, 311, 1, '{"date_updated":"2020-08-06 11:25:28","status":"Pending","id":"58"}', 1, '{"id":"58","product_id":"2","customer_request_id":"19","quantity":"0","unit":"0","status":"New","specific_remarks":"","fcl":"2","fcl_option":null,"type_fcl":"","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":"7","purchasing":null,"contacts":"","ETD":"2020-09-03 00:00:00","date_created":"2020-08-06 11:19:44","date_updated":null,"ETA":"0000-00-00 00:00:00","purchasing_username":null,"amuco_suppliers_name":"Hufei","amuco_products_name":"CITRIC ACID ANHYDROUS MESH 30-100","amuco_unit_types_name":null,"amuco_contacts_name":null}'),
	(312, 1, 312, 1, '{"date_updated":"2020-08-06 11:25:28","status":"Pending","id":"57"}', 1, '{"id":"57","product_id":"5","customer_request_id":"19","quantity":"25","unit":"1","status":"New","specific_remarks":"","fcl":"1","fcl_option":null,"type_fcl":"Standard","weight":"25","packing":"","material":"","pallets":"0","unit_pack":"2","supplier":null,"purchasing":"7","contacts":"","ETD":"2020-08-31 00:00:00","date_created":"2020-08-06 11:18:21","date_updated":null,"ETA":"2020-08-31 00:00:00","purchasing_username":"Office","amuco_suppliers_name":null,"amuco_products_name":"Soy protein isolated 90% min non functional instant type 200-88","amuco_unit_types_name":"MT","amuco_contacts_name":null}'),
	(313, 1, 313, 1, '{"name":"ruperto","description":null,"id":32}', NULL, NULL),
	(314, 1, 314, 1, '{"name":"categoria 1","description":null,"id":33}', NULL, NULL),
	(315, 1, 315, 1, '{"name":"alberto","description":null,"id":34}', NULL, NULL),
	(316, 1, 316, 1, '{"name":"alberto","description":null,"id":35}', NULL, NULL),
	(317, 1, 317, 1, '{"product_id":"2","customer_request_id":"18","quantity":"500","unit":"2","status":"New","fcl":"0","fcl_option":null,"type_fcl":"","weight":"","unit_pack":"","packing":"","material":"","specific_remarks":"","pallets":null,"supplier":"5","contacts":"","purchasing":null,"ETD":"2000-0m-dd","ETA":"2000-0m-dd","date_created":"2020-08-07 11:20:40","id":59}', NULL, NULL),
	(318, 1, 318, 1, '{"product_id":"2","customer_request_id":"18","quantity":"30000","unit":"4","status":"Pending","fcl":"0","weight":"","packing":"","material":"","specific_remarks":"","fcl_option":null,"type_fcl":"","pallets":null,"unit_pack":"","supplier":"","purchasing":"7","contacts":"","ETD":"2000-0m-dd","ETA":"2000-0m-dd","date_created":null,"date_updated":null,"id":"56"}', 1, '{"id":"56","product_id":"2","customer_request_id":"18","quantity":"0","unit":"0","status":"Pending","specific_remarks":"","fcl":"0","fcl_option":null,"type_fcl":"","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":null,"purchasing":"7","contacts":"","ETD":"0000-00-00 00:00:00","date_created":"2020-08-05 07:34:28","date_updated":"2020-08-05 07:35:04","ETA":"0000-00-00 00:00:00"}'),
	(319, 1, 319, 1, '{"product_id":"3","customer_request_id":"18","quantity":"10","unit":"1","status":"New","fcl":"","fcl_option":null,"type_fcl":"","weight":"","unit_pack":"","packing":"","material":"","specific_remarks":"","pallets":null,"supplier":"6","contacts":"","purchasing":null,"ETD":"","ETA":"","date_created":"2020-08-07 11:23:46","id":60}', NULL, NULL),
	(320, 1, 320, 1, '{"id":"60","product_id":"3","customer_request_id":"18","quantity":"10","unit":"1","status":"New","specific_remarks":"","fcl":"0","fcl_option":null,"type_fcl":"","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":"6","purchasing":null,"contacts":"","ETD":"0000-00-00 00:00:00","date_created":"2020-08-07 11:23:46","date_updated":null,"ETA":"0000-00-00 00:00:00"}', NULL, NULL),
	(321, 1, 321, 1, '{"product_id":"2","customer_request_id":"18","quantity":"40","unit":"4","status":"Pending","fcl":"0","weight":"","packing":"","material":"","specific_remarks":"","fcl_option":null,"type_fcl":"","pallets":null,"unit_pack":"","supplier":"","purchasing":"7","contacts":"","ETD":"2000-0m-dd","ETA":"2000-0m-dd","date_created":null,"date_updated":null,"id":"56"}', 1, '{"id":"56","product_id":"2","customer_request_id":"18","quantity":"30000","unit":"4","status":"Pending","specific_remarks":"","fcl":"0","fcl_option":null,"type_fcl":"","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":"0","purchasing":"7","contacts":"","ETD":"0000-00-00 00:00:00","date_created":"0000-00-00 00:00:00","date_updated":null,"ETA":"0000-00-00 00:00:00"}'),
	(322, 1, 322, 1, '{"product_id":"2","customer_request_id":"18","quantity":"15","unit":"1","status":"Pending","fcl":"0","weight":"","packing":"","material":"","specific_remarks":"","fcl_option":null,"type_fcl":"","pallets":null,"unit_pack":"","supplier":"","purchasing":"3","contacts":"","ETD":"2000-0m-dd","ETA":"2000-0m-dd","date_created":null,"date_updated":null,"id":"55"}', 1, '{"id":"55","product_id":"2","customer_request_id":"18","quantity":"0","unit":"0","status":"Pending","specific_remarks":"","fcl":"0","fcl_option":null,"type_fcl":"","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":null,"purchasing":"3","contacts":"","ETD":"0000-00-00 00:00:00","date_created":"2020-08-05 07:34:28","date_updated":"2020-08-05 07:35:04","ETA":"0000-00-00 00:00:00"}'),
	(323, 1, 323, 1, '{"date_updated":"2020-08-07 11:29:00","status":"Requested","id":"18"}', 1, '{"id":"18","date_created":"2020-08-04 11:35:24","date_updated":"2020-08-05 07:35:03","status":"Pending","customer":"8","sales_agent":"5","contact":"6","destination_port":"7","incoterm":"1","remarks":"probando con laura","quantity":null,"combinate_container":"1","RSD":null}'),
	(324, 1, 324, 1, '{"date_updated":"2020-08-07 11:29:00","status":"Requested","id":"59"}', 1, '{"id":"59","product_id":"2","customer_request_id":"18","quantity":"500","unit":"2","status":"New","specific_remarks":"","fcl":"0","fcl_option":null,"type_fcl":"","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":"5","purchasing":null,"contacts":"","ETD":"0000-00-00 00:00:00","date_created":"2020-08-07 11:20:40","date_updated":null,"ETA":"0000-00-00 00:00:00","purchasing_username":null,"amuco_suppliers_name":"Supplier second","amuco_products_name":"CITRIC ACID ANHYDROUS MESH 30-100","amuco_unit_types_name":"Kg","amuco_contacts_name":null,"amuco_packing_name":null,"amuco_material_name":null}'),
	(325, 1, 325, 1, '{"date_updated":"2020-08-07 11:29:01","status":"Requested","id":"56"}', 1, '{"id":"56","product_id":"2","customer_request_id":"18","quantity":"40","unit":"4","status":"Pending","specific_remarks":"","fcl":"0","fcl_option":null,"type_fcl":"","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":"0","purchasing":"7","contacts":"","ETD":"0000-00-00 00:00:00","date_created":"0000-00-00 00:00:00","date_updated":null,"ETA":"0000-00-00 00:00:00","purchasing_username":"Office","amuco_suppliers_name":null,"amuco_products_name":"CITRIC ACID ANHYDROUS MESH 30-100","amuco_unit_types_name":"Cylinders","amuco_contacts_name":null,"amuco_packing_name":null,"amuco_material_name":null}'),
	(326, 1, 326, 1, '{"date_updated":"2020-08-07 11:29:01","status":"Requested","id":"55"}', 1, '{"id":"55","product_id":"2","customer_request_id":"18","quantity":"15","unit":"1","status":"Pending","specific_remarks":"","fcl":"0","fcl_option":null,"type_fcl":"","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":"0","purchasing":"3","contacts":"","ETD":"0000-00-00 00:00:00","date_created":"0000-00-00 00:00:00","date_updated":null,"ETA":"0000-00-00 00:00:00","purchasing_username":"seller1","amuco_suppliers_name":null,"amuco_products_name":"CITRIC ACID ANHYDROUS MESH 30-100","amuco_unit_types_name":"MT","amuco_contacts_name":null,"amuco_packing_name":null,"amuco_material_name":null}'),
	(327, 1, 327, 1, '{"date_updated":"2020-08-07 11:29:01","status":"Requested","id":"54"}', 1, '{"id":"54","product_id":"3","customer_request_id":"18","quantity":"3000","unit":"2","status":"Pending","specific_remarks":"micronizado","fcl":"0","fcl_option":null,"type_fcl":"","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":"6","purchasing":null,"contacts":"","ETD":"2020-08-31 00:00:00","date_created":"2020-08-04 11:41:19","date_updated":"2020-08-05 07:35:04","ETA":"0000-00-00 00:00:00","purchasing_username":null,"amuco_suppliers_name":"WEIFANG ENSIGN INDUSTRY CO., LTD.","amuco_products_name":"ONION POWDER MESH 80-100","amuco_unit_types_name":"Kg","amuco_contacts_name":null,"amuco_packing_name":null,"amuco_material_name":null}'),
	(328, 1, 328, 1, '{"date_updated":"2020-08-07 11:29:01","status":"Requested","id":"53"}', 1, '{"id":"53","product_id":"3","customer_request_id":"18","quantity":"3000","unit":"2","status":"Pending","specific_remarks":"micronizado","fcl":"0","fcl_option":null,"type_fcl":"","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":null,"purchasing":"1","contacts":"","ETD":"2020-08-31 00:00:00","date_created":"2020-08-04 11:40:42","date_updated":"2020-08-05 07:35:04","ETA":"2020-08-31 00:00:00","purchasing_username":"oscar","amuco_suppliers_name":null,"amuco_products_name":"ONION POWDER MESH 80-100","amuco_unit_types_name":"Kg","amuco_contacts_name":null,"amuco_packing_name":null,"amuco_material_name":null}'),
	(329, 1, 329, 1, '{"product_id":"2","customer_request_id":"18","quantity":"","unit":"4","status":"Requested","fcl":"2","weight":"","packing":"","material":"","specific_remarks":"ahora necesitamos dos contenedores","fcl_option":"20","type_fcl":"","pallets":null,"unit_pack":"","supplier":"","purchasing":"7","contacts":"","ETD":"2000-0m-dd","ETA":"2000-0m-dd","date_created":null,"date_updated":null,"id":"56"}', 1, '{"id":"56","product_id":"2","customer_request_id":"18","quantity":"40","unit":"4","status":"Requested","specific_remarks":"","fcl":"0","fcl_option":null,"type_fcl":"","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":"0","purchasing":"7","contacts":"","ETD":"0000-00-00 00:00:00","date_created":"0000-00-00 00:00:00","date_updated":"2020-08-07 11:29:01","ETA":"0000-00-00 00:00:00"}'),
	(330, 1, 330, 1, '{"product_id":"2","customer_request_id":"18","quantity":"500","unit":"1","status":"New","fcl":"3","fcl_option":"20","type_fcl":"","weight":"","unit_pack":"","packing":"","material":"","specific_remarks":"disculpen necesito un nuevo precio por container","pallets":null,"supplier":"5","contacts":"","purchasing":null,"ETD":"2000-0m-dd","ETA":"2000-0m-dd","date_created":"2020-08-07 11:33:02","id":61}', NULL, NULL),
	(331, 1, 331, 1, '{"date_updated":"2020-08-07 11:33:17","status":"Requested","id":"18"}', 1, '{"id":"18","date_created":"2020-08-04 11:35:24","date_updated":"2020-08-07 11:29:00","status":"Requested","customer":"8","sales_agent":"5","contact":"6","destination_port":"7","incoterm":"1","remarks":"probando con laura","quantity":null,"combinate_container":"1","RSD":null}'),
	(332, 1, 332, 1, '{"date_updated":"2020-08-07 11:33:17","status":"Requested","id":"61"}', 1, '{"id":"61","product_id":"2","customer_request_id":"18","quantity":"500","unit":"1","status":"New","specific_remarks":"disculpen necesito un nuevo precio por container","fcl":"3","fcl_option":"20","type_fcl":"","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":"5","purchasing":null,"contacts":"","ETD":"0000-00-00 00:00:00","date_created":"2020-08-07 11:33:02","date_updated":null,"ETA":"0000-00-00 00:00:00","purchasing_username":null,"amuco_suppliers_name":"Supplier second","amuco_products_name":"CITRIC ACID ANHYDROUS MESH 30-100","amuco_unit_types_name":"MT","amuco_contacts_name":null,"amuco_packing_name":null,"amuco_material_name":null}'),
	(333, 1, 333, 1, '{"date_updated":"2020-08-07 11:33:17","status":"Requested","id":"59"}', 1, '{"id":"59","product_id":"2","customer_request_id":"18","quantity":"500","unit":"2","status":"Requested","specific_remarks":"","fcl":"0","fcl_option":null,"type_fcl":"","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":"5","purchasing":null,"contacts":"","ETD":"0000-00-00 00:00:00","date_created":"2020-08-07 11:20:40","date_updated":"2020-08-07 11:29:00","ETA":"0000-00-00 00:00:00","purchasing_username":null,"amuco_suppliers_name":"Supplier second","amuco_products_name":"CITRIC ACID ANHYDROUS MESH 30-100","amuco_unit_types_name":"Kg","amuco_contacts_name":null,"amuco_packing_name":null,"amuco_material_name":null}'),
	(334, 1, 334, 1, '{"date_updated":"2020-08-07 11:33:17","status":"Requested","id":"56"}', 1, '{"id":"56","product_id":"2","customer_request_id":"18","quantity":"0","unit":"4","status":"Requested","specific_remarks":"ahora necesitamos dos contenedores","fcl":"2","fcl_option":"20","type_fcl":"","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":"0","purchasing":"7","contacts":"","ETD":"0000-00-00 00:00:00","date_created":"0000-00-00 00:00:00","date_updated":null,"ETA":"0000-00-00 00:00:00","purchasing_username":"Office","amuco_suppliers_name":null,"amuco_products_name":"CITRIC ACID ANHYDROUS MESH 30-100","amuco_unit_types_name":"Cylinders","amuco_contacts_name":null,"amuco_packing_name":null,"amuco_material_name":null}'),
	(335, 1, 335, 1, '{"date_updated":"2020-08-07 11:33:17","status":"Requested","id":"55"}', 1, '{"id":"55","product_id":"2","customer_request_id":"18","quantity":"15","unit":"1","status":"Requested","specific_remarks":"","fcl":"0","fcl_option":null,"type_fcl":"","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":"0","purchasing":"3","contacts":"","ETD":"0000-00-00 00:00:00","date_created":"0000-00-00 00:00:00","date_updated":"2020-08-07 11:29:01","ETA":"0000-00-00 00:00:00","purchasing_username":"seller1","amuco_suppliers_name":null,"amuco_products_name":"CITRIC ACID ANHYDROUS MESH 30-100","amuco_unit_types_name":"MT","amuco_contacts_name":null,"amuco_packing_name":null,"amuco_material_name":null}'),
	(336, 1, 336, 1, '{"date_updated":"2020-08-07 11:33:17","status":"Requested","id":"54"}', 1, '{"id":"54","product_id":"3","customer_request_id":"18","quantity":"3000","unit":"2","status":"Requested","specific_remarks":"micronizado","fcl":"0","fcl_option":null,"type_fcl":"","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":"6","purchasing":null,"contacts":"","ETD":"2020-08-31 00:00:00","date_created":"2020-08-04 11:41:19","date_updated":"2020-08-07 11:29:01","ETA":"0000-00-00 00:00:00","purchasing_username":null,"amuco_suppliers_name":"WEIFANG ENSIGN INDUSTRY CO., LTD.","amuco_products_name":"ONION POWDER MESH 80-100","amuco_unit_types_name":"Kg","amuco_contacts_name":null,"amuco_packing_name":null,"amuco_material_name":null}'),
	(337, 1, 337, 1, '{"date_updated":"2020-08-07 11:33:17","status":"Requested","id":"53"}', 1, '{"id":"53","product_id":"3","customer_request_id":"18","quantity":"3000","unit":"2","status":"Requested","specific_remarks":"micronizado","fcl":"0","fcl_option":null,"type_fcl":"","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":null,"purchasing":"1","contacts":"","ETD":"2020-08-31 00:00:00","date_created":"2020-08-04 11:40:42","date_updated":"2020-08-07 11:29:01","ETA":"2020-08-31 00:00:00","purchasing_username":"oscar","amuco_suppliers_name":null,"amuco_products_name":"ONION POWDER MESH 80-100","amuco_unit_types_name":"Kg","amuco_contacts_name":null,"amuco_packing_name":null,"amuco_material_name":null}'),
	(338, 1, 338, 1, '{"product_id":"2","customer_request_id":"19","quantity":"10","unit":"4","status":"Pending","fcl":"2","weight":"3","packing":"15","material":"25","specific_remarks":"asdasdas","fcl_option":"20","type_fcl":"Standard","pallets":"1","unit_pack":"1","supplier":"7","purchasing":"","contacts":"","ETD":"2020-09-03","ETA":"2020-08-08","date_created":null,"date_updated":null,"id":"58"}', 1, '{"id":"58","product_id":"2","customer_request_id":"19","quantity":"0","unit":"0","status":"Pending","specific_remarks":"","fcl":"2","fcl_option":null,"type_fcl":"","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":"7","purchasing":null,"contacts":"","ETD":"2020-09-03 00:00:00","date_created":"2020-08-06 11:19:44","date_updated":"2020-08-06 11:25:28","ETA":"0000-00-00 00:00:00"}'),
	(339, 1, 339, 1, '{"product_id":"5","customer_request_id":"19","quantity":"20","unit":"4","status":"Pending","fcl":"1","weight":"25","packing":"11","material":"10","specific_remarks":"prueba","fcl_option":"20","type_fcl":"Standard","pallets":null,"unit_pack":"2","supplier":"","purchasing":"7","contacts":"","ETD":"2020-08-31","ETA":"2020-08-31","date_created":null,"date_updated":null,"id":"57"}', 1, '{"id":"57","product_id":"5","customer_request_id":"19","quantity":"25","unit":"1","status":"Pending","specific_remarks":"","fcl":"1","fcl_option":null,"type_fcl":"Standard","weight":"25","packing":"","material":"","pallets":"0","unit_pack":"2","supplier":null,"purchasing":"7","contacts":"","ETD":"2020-08-31 00:00:00","date_created":"2020-08-06 11:18:21","date_updated":"2020-08-06 11:25:28","ETA":"2020-08-31 00:00:00"}'),
	(340, 1, 340, 1, '{"product_id":"3","customer_request_id":"18","quantity":"20","unit":"4","status":"Requested","fcl":"2","weight":"20","packing":"13","material":"25","specific_remarks":"micronizado","fcl_option":"20","type_fcl":"Standard","pallets":"1","unit_pack":"1","supplier":"","purchasing":"1","contacts":"","ETD":"2020-08-31","ETA":"2020-08-31","date_created":null,"date_updated":null,"id":"53"}', 1, '{"id":"53","product_id":"3","customer_request_id":"18","quantity":"3000","unit":"2","status":"Requested","specific_remarks":"micronizado","fcl":"0","fcl_option":null,"type_fcl":"","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":null,"purchasing":"1","contacts":"","ETD":"2020-08-31 00:00:00","date_created":"2020-08-04 11:40:42","date_updated":"2020-08-07 11:33:17","ETA":"2020-08-31 00:00:00"}'),
	(341, 1, 341, 1, '{"product_id":"2","customer_request_id":"18","quantity":"","unit":"4","status":"Requested","fcl":"3","weight":"3","packing":"24","material":"25","specific_remarks":"disculpen necesito un nuevo precio por container","fcl_option":null,"type_fcl":"Standard","pallets":"1","unit_pack":"2","supplier":"5","purchasing":"","contacts":"","ETD":"2000-0m-dd","ETA":"2000-0m-dd","date_created":null,"date_updated":null,"id":"61"}', 1, '{"id":"61","product_id":"2","customer_request_id":"18","quantity":"500","unit":"1","status":"Requested","specific_remarks":"disculpen necesito un nuevo precio por container","fcl":"3","fcl_option":"20","type_fcl":"","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":"5","purchasing":null,"contacts":"","ETD":"0000-00-00 00:00:00","date_created":"2020-08-07 11:33:02","date_updated":"2020-08-07 11:33:17","ETA":"0000-00-00 00:00:00"}'),
	(342, 1, 342, 1, '{"product_id":"2","customer_request_id":"18","quantity":"500","unit":"4","status":"Requested","fcl":"2","weight":"20","packing":"24","material":"26","specific_remarks":"","fcl_option":"40","type_fcl":"NOR","pallets":"1","unit_pack":"2","supplier":"5","purchasing":"","contacts":"","ETD":"2000-0m-dd","ETA":"2000-0m-dd","date_created":null,"date_updated":null,"id":"59"}', 1, '{"id":"59","product_id":"2","customer_request_id":"18","quantity":"500","unit":"2","status":"Requested","specific_remarks":"","fcl":"0","fcl_option":null,"type_fcl":"","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":"5","purchasing":null,"contacts":"","ETD":"0000-00-00 00:00:00","date_created":"2020-08-07 11:20:40","date_updated":"2020-08-07 11:33:17","ETA":"0000-00-00 00:00:00"}'),
	(343, 1, 343, 1, '{"product_id":"2","customer_request_id":"18","quantity":"0","unit":"4","status":"Requested","fcl":"3","weight":"3","packing":"24","material":"25","specific_remarks":"disculpen necesito un nuevo precio por container","fcl_option":null,"type_fcl":"Standard","pallets":"1","unit_pack":"2","supplier":"7","purchasing":"","contacts":"","ETD":"2000-0m-dd","ETA":"2000-0m-dd","date_created":null,"date_updated":null,"id":"61"}', 1, '{"id":"61","product_id":"2","customer_request_id":"18","quantity":"0","unit":"4","status":"Requested","specific_remarks":"disculpen necesito un nuevo precio por container","fcl":"3","fcl_option":null,"type_fcl":"Standard","weight":"3","packing":"24","material":"25","pallets":"1","unit_pack":"2","supplier":"5","purchasing":"0","contacts":"","ETD":"0000-00-00 00:00:00","date_created":"0000-00-00 00:00:00","date_updated":null,"ETA":"0000-00-00 00:00:00"}'),
	(344, 1, 344, 1, '{"product_id":"2","customer_request_id":"18","quantity":"0","unit":"4","status":"Requested","fcl":"3","weight":"3","packing":"24","material":"25","specific_remarks":"disculpen necesito un nuevo precio por container","fcl_option":null,"type_fcl":"Standard","pallets":"1","unit_pack":"2","supplier":"8","purchasing":"","contacts":"","ETD":"2000-0m-dd","ETA":"2000-0m-dd","date_created":null,"date_updated":null,"id":"61"}', 1, '{"id":"61","product_id":"2","customer_request_id":"18","quantity":"0","unit":"4","status":"Requested","specific_remarks":"disculpen necesito un nuevo precio por container","fcl":"3","fcl_option":null,"type_fcl":"Standard","weight":"3","packing":"24","material":"25","pallets":"1","unit_pack":"2","supplier":"7","purchasing":"0","contacts":"","ETD":"0000-00-00 00:00:00","date_created":"0000-00-00 00:00:00","date_updated":null,"ETA":"0000-00-00 00:00:00"}'),
	(345, 1, 345, 1, '{"product_id":"2","customer_request_id":"18","quantity":"500","unit":"1","status":"Requested","fcl":"2","weight":"20","packing":"6","material":"26","specific_remarks":"probando chante","fcl_option":null,"type_fcl":"NOR","pallets":"1","unit_pack":"2","supplier":"5","purchasing":"","contacts":"","ETD":"2000-0m-dd","ETA":"2000-0m-dd","date_created":null,"date_updated":null,"id":"59"}', 1, '{"id":"59","product_id":"2","customer_request_id":"18","quantity":"500","unit":"4","status":"Requested","specific_remarks":"","fcl":"2","fcl_option":"40","type_fcl":"NOR","weight":"20","packing":"24","material":"26","pallets":"1","unit_pack":"2","supplier":"5","purchasing":"0","contacts":"","ETD":"0000-00-00 00:00:00","date_created":"0000-00-00 00:00:00","date_updated":null,"ETA":"0000-00-00 00:00:00"}'),
	(346, 1, 346, 1, '{"product_id":"2","customer_request_id":"18","quantity":"15","unit":"2","status":"Requested","fcl":"0","weight":"","packing":"","material":"","specific_remarks":"","fcl_option":null,"type_fcl":"","pallets":null,"unit_pack":"","supplier":"","purchasing":"3","contacts":"","ETD":"2000-0m-dd","ETA":"2000-0m-dd","date_created":null,"date_updated":null,"id":"55"}', 1, '{"id":"55","product_id":"2","customer_request_id":"18","quantity":"15","unit":"1","status":"Requested","specific_remarks":"","fcl":"0","fcl_option":null,"type_fcl":"","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":"0","purchasing":"3","contacts":"","ETD":"0000-00-00 00:00:00","date_created":"0000-00-00 00:00:00","date_updated":"2020-08-07 11:33:17","ETA":"0000-00-00 00:00:00"}'),
	(347, 1, 347, 1, '{"product_id":"3","customer_request_id":"18","quantity":"20","unit":"2","status":"Requested","fcl":"2","weight":"20","packing":"13","material":"25","specific_remarks":"micronizado","fcl_option":null,"type_fcl":"Standard","pallets":"1","unit_pack":"1","supplier":"","purchasing":"1","contacts":"","ETD":"2020-08-31","ETA":"2020-08-31","date_created":null,"date_updated":null,"id":"53"}', 1, '{"id":"53","product_id":"3","customer_request_id":"18","quantity":"20","unit":"4","status":"Requested","specific_remarks":"micronizado","fcl":"2","fcl_option":"20","type_fcl":"Standard","weight":"20","packing":"13","material":"25","pallets":"1","unit_pack":"1","supplier":"0","purchasing":"1","contacts":"","ETD":"2020-08-31 00:00:00","date_created":"0000-00-00 00:00:00","date_updated":null,"ETA":"2020-08-31 00:00:00"}'),
	(348, 1, 348, 1, '{"product_id":"2","customer_request_id":"18","quantity":"0","unit":"","status":"Requested","fcl":"3","weight":"3","packing":"24","material":"25","specific_remarks":"disculpen necesito un nuevo precio por container","fcl_option":null,"type_fcl":"Standard","pallets":"1","unit_pack":"2","supplier":"8","purchasing":"","contacts":"","ETD":"2000-0m-dd","ETA":"2000-0m-dd","date_created":null,"date_updated":null,"id":"61"}', 1, '{"id":"61","product_id":"2","customer_request_id":"18","quantity":"0","unit":"4","status":"Requested","specific_remarks":"disculpen necesito un nuevo precio por container","fcl":"3","fcl_option":null,"type_fcl":"Standard","weight":"3","packing":"24","material":"25","pallets":"1","unit_pack":"2","supplier":"8","purchasing":"0","contacts":"","ETD":"0000-00-00 00:00:00","date_created":"0000-00-00 00:00:00","date_updated":null,"ETA":"0000-00-00 00:00:00"}'),
	(349, 1, 349, 1, '{"product_id":"2","customer_request_id":"18","quantity":"0","unit":"4","status":"Requested","fcl":"4","weight":"3","packing":"24","material":"25","specific_remarks":"disculpen necesito un nuevo precio por container","fcl_option":"20","type_fcl":"Standard","pallets":"1","unit_pack":"2","supplier":"8","purchasing":"","contacts":"","ETD":"2000-0m-dd","ETA":"2000-0m-dd","date_created":null,"date_updated":null,"id":"61"}', 1, '{"id":"61","product_id":"2","customer_request_id":"18","quantity":"0","unit":"0","status":"Requested","specific_remarks":"disculpen necesito un nuevo precio por container","fcl":"3","fcl_option":null,"type_fcl":"Standard","weight":"3","packing":"24","material":"25","pallets":"1","unit_pack":"2","supplier":"8","purchasing":"0","contacts":"","ETD":"0000-00-00 00:00:00","date_created":"0000-00-00 00:00:00","date_updated":null,"ETA":"0000-00-00 00:00:00"}'),
	(350, 1, 350, 1, '{"id":"45","product_id":"3","customer_request_id":"15","quantity":"34","unit":"1","status":"New","specific_remarks":"","fcl":"2","fcl_option":"20","type_fcl":"NOR","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":null,"purchasing":"1","contacts":"","ETD":"0000-00-00 00:00:00","date_created":"2020-08-03 12:44:48","date_updated":null,"ETA":"0000-00-00 00:00:00"}', NULL, NULL),
	(351, 1, 351, 1, '{"id":"47","product_id":"5","customer_request_id":"15","quantity":"45","unit":"1","status":"New","specific_remarks":"","fcl":"2","fcl_option":"20","type_fcl":"NOR","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":null,"purchasing":"4","contacts":"","ETD":"2021-01-03 00:00:00","date_created":"2020-08-03 12:57:47","date_updated":null,"ETA":"2021-01-03 00:00:00"}', NULL, NULL),
	(352, 1, 352, 1, '{"id":"42","product_id":"3","customer_request_id":"15","quantity":"4","unit":"0","status":"New","specific_remarks":"","fcl":"2","fcl_option":null,"type_fcl":"NOR","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":null,"purchasing":"5","contacts":"","ETD":"0000-00-00 00:00:00","date_created":"2020-07-29 15:43:53","date_updated":null,"ETA":"0000-00-00 00:00:00"}', NULL, NULL),
	(353, 1, 353, 1, '{"id":"41","product_id":"3","customer_request_id":"15","quantity":"4","unit":"0","status":"New","specific_remarks":"","fcl":"2","fcl_option":null,"type_fcl":"NOR","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":null,"purchasing":"3","contacts":"","ETD":"0000-00-00 00:00:00","date_created":"2020-07-29 15:43:53","date_updated":null,"ETA":"0000-00-00 00:00:00"}', NULL, NULL),
	(354, 1, 354, 1, '{"id":"40","product_id":"3","customer_request_id":"15","quantity":"24","unit":"1","status":"New","specific_remarks":"","fcl":"23","fcl_option":null,"type_fcl":"HCube","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":null,"purchasing":"6","contacts":"","ETD":"0000-00-00 00:00:00","date_created":"2020-07-29 10:47:49","date_updated":null,"ETA":"0000-00-00 00:00:00"}', NULL, NULL),
	(355, 1, 355, 1, '{"id":"39","product_id":"3","customer_request_id":"15","quantity":"24","unit":"1","status":"New","specific_remarks":"","fcl":"23","fcl_option":null,"type_fcl":"HCube","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":"6","purchasing":null,"contacts":"7","ETD":"0000-00-00 00:00:00","date_created":"2020-07-29 10:47:34","date_updated":null,"ETA":"0000-00-00 00:00:00"}', NULL, NULL),
	(356, 1, 356, 1, '{"id":"37","product_id":"3","customer_request_id":"15","quantity":"34","unit":"1","status":"New","specific_remarks":"","fcl":"1","fcl_option":"20","type_fcl":"HCube","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":null,"purchasing":"2","contacts":"","ETD":"2020-07-28 00:00:00","date_created":"2020-07-28 13:08:58","date_updated":null,"ETA":"2020-07-28 00:00:00"}', NULL, NULL),
	(357, 1, 357, 1, '{"date_updated":"2020-08-11 10:26:21","status":"Requested","id":"15"}', 1, '{"id":"15","date_created":"2020-07-23 15:14:40","date_updated":"2020-07-28 11:32:21","status":"New","customer":"6","sales_agent":"5","contact":"4","destination_port":"3","incoterm":"2","remarks":"probando","quantity":null,"combinate_container":"0","RSD":"2020-07-23 00:00:00"}'),
	(358, 1, 358, 1, '{"date_updated":"2020-08-11 10:26:21","status":"Requested","id":"46"}', 1, '{"id":"46","product_id":"5","customer_request_id":"15","quantity":"45","unit":"1","status":"New","specific_remarks":"","fcl":"2","fcl_option":"20","type_fcl":"NOR","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":null,"purchasing":"2","contacts":"","ETD":"2021-01-03 00:00:00","date_created":"2020-08-03 12:54:42","date_updated":null,"ETA":"2021-01-03 00:00:00","purchasing_username":"juan","amuco_suppliers_name":null,"amuco_products_name":"Soy protein isolated 90% min non functional instant type 200-88","amuco_unit_types_name":"MT","amuco_contacts_name":null,"amuco_packing_name":null,"amuco_material_name":null}'),
	(359, 1, 359, 1, '{"date_updated":"2020-08-11 10:26:21","status":"Requested","id":"44"}', 1, '{"id":"44","product_id":"3","customer_request_id":"15","quantity":"34","unit":"1","status":"New","specific_remarks":"","fcl":"2","fcl_option":"20","type_fcl":"NOR","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":"6","purchasing":null,"contacts":"7","ETD":"0000-00-00 00:00:00","date_created":"2020-08-03 12:44:33","date_updated":null,"ETA":"0000-00-00 00:00:00","purchasing_username":null,"amuco_suppliers_name":"WEIFANG ENSIGN INDUSTRY CO., LTD.","amuco_products_name":"ONION POWDER MESH 80-100","amuco_unit_types_name":"MT","amuco_contacts_name":"Jose Perez","amuco_packing_name":null,"amuco_material_name":null}'),
	(360, 1, 360, 1, '{"date_updated":"2020-08-11 10:26:21","status":"Requested","id":"43"}', 1, '{"id":"43","product_id":"3","customer_request_id":"15","quantity":"4","unit":"0","status":"New","specific_remarks":"","fcl":"2","fcl_option":null,"type_fcl":"NOR","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":null,"purchasing":"6","contacts":"","ETD":"0000-00-00 00:00:00","date_created":"2020-07-29 15:43:53","date_updated":null,"ETA":"0000-00-00 00:00:00","purchasing_username":"Laura","amuco_suppliers_name":null,"amuco_products_name":"ONION POWDER MESH 80-100","amuco_unit_types_name":null,"amuco_contacts_name":null,"amuco_packing_name":null,"amuco_material_name":null}'),
	(361, 1, 361, 1, '{"date_updated":"2020-08-11 10:26:21","status":"Requested","id":"38"}', 1, '{"id":"38","product_id":"3","customer_request_id":"15","quantity":"34","unit":"1","status":"New","specific_remarks":"","fcl":"1","fcl_option":"20","type_fcl":"HCube","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":null,"purchasing":"4","contacts":"","ETD":"2020-07-28 00:00:00","date_created":"2020-07-28 13:08:58","date_updated":null,"ETA":"2020-07-28 00:00:00","purchasing_username":"Admin","amuco_suppliers_name":null,"amuco_products_name":"ONION POWDER MESH 80-100","amuco_unit_types_name":"MT","amuco_contacts_name":null,"amuco_packing_name":null,"amuco_material_name":null}'),
	(362, 1, 362, 1, '{"date_updated":"2020-08-11 10:26:21","status":"Requested","id":"36"}', 1, '{"id":"36","product_id":"2","customer_request_id":"15","quantity":"10","unit":"1","status":"New","specific_remarks":"","fcl":"0","fcl_option":null,"type_fcl":"","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":null,"purchasing":"7","contacts":"","ETD":"2020-07-28 00:00:00","date_created":"2020-07-28 11:32:41","date_updated":null,"ETA":"2020-07-28 00:00:00","purchasing_username":"Office","amuco_suppliers_name":null,"amuco_products_name":"CITRIC ACID ANHYDROUS MESH 30-100","amuco_unit_types_name":"MT","amuco_contacts_name":null,"amuco_packing_name":null,"amuco_material_name":null}'),
	(363, 1, 363, 1, '{"date_updated":"2020-08-11 10:26:21","status":"Requested","id":"32"}', 1, '{"id":"32","product_id":"5","customer_request_id":"15","quantity":"15","unit":"2","status":"New","specific_remarks":"","fcl":"0","fcl_option":null,"type_fcl":"0","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":"5","purchasing":null,"contacts":"","ETD":"2020-07-23 00:00:00","date_created":"0000-00-00 00:00:00","date_updated":null,"ETA":null,"purchasing_username":null,"amuco_suppliers_name":"Supplier second","amuco_products_name":"Soy protein isolated 90% min non functional instant type 200-88","amuco_unit_types_name":"Kg","amuco_contacts_name":null,"amuco_packing_name":null,"amuco_material_name":null}'),
	(364, 1, 364, 1, '{"date_updated":"2020-08-11 10:26:21","status":"Requested","id":"31"}', 1, '{"id":"31","product_id":"5","customer_request_id":"15","quantity":"15","unit":"2","status":"New","specific_remarks":"","fcl":"0","fcl_option":null,"type_fcl":"0","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":"7","purchasing":null,"contacts":"","ETD":"2020-07-23 00:00:00","date_created":"0000-00-00 00:00:00","date_updated":null,"ETA":null,"purchasing_username":null,"amuco_suppliers_name":"Hufei","amuco_products_name":"Soy protein isolated 90% min non functional instant type 200-88","amuco_unit_types_name":"Kg","amuco_contacts_name":null,"amuco_packing_name":null,"amuco_material_name":null}'),
	(365, 1, 365, 1, '{"date_updated":"2020-08-11 10:26:21","status":"Requested","id":"30"}', 1, '{"id":"30","product_id":"2","customer_request_id":"15","quantity":"0","unit":"0","status":"New","specific_remarks":"","fcl":"1","fcl_option":null,"type_fcl":"0","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":"6","purchasing":null,"contacts":"7","ETD":"2020-07-23 00:00:00","date_created":"0000-00-00 00:00:00","date_updated":null,"ETA":null,"purchasing_username":null,"amuco_suppliers_name":"WEIFANG ENSIGN INDUSTRY CO., LTD.","amuco_products_name":"CITRIC ACID ANHYDROUS MESH 30-100","amuco_unit_types_name":null,"amuco_contacts_name":"Jose Perez","amuco_packing_name":null,"amuco_material_name":null}'),
	(366, 1, 366, 1, '{"date_updated":"2020-08-11 10:26:21","status":"Requested","id":"29"}', 1, '{"id":"29","product_id":"3","customer_request_id":"15","quantity":"20","unit":"1","status":"New","specific_remarks":"","fcl":"0","fcl_option":null,"type_fcl":"0","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":null,"purchasing":"3","contacts":"","ETD":"2020-07-23 00:00:00","date_created":"0000-00-00 00:00:00","date_updated":null,"ETA":null,"purchasing_username":"seller1","amuco_suppliers_name":null,"amuco_products_name":"ONION POWDER MESH 80-100","amuco_unit_types_name":"MT","amuco_contacts_name":null,"amuco_packing_name":null,"amuco_material_name":null}'),
	(367, 1, 367, 1, '{"date_updated":"2020-08-11 10:26:22","status":"Requested","id":"28"}', 1, '{"id":"28","product_id":"3","customer_request_id":"15","quantity":"20","unit":"1","status":"New","specific_remarks":"","fcl":"0","fcl_option":null,"type_fcl":"0","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":"6","purchasing":null,"contacts":"7","ETD":"2020-07-23 00:00:00","date_created":"0000-00-00 00:00:00","date_updated":null,"ETA":null,"purchasing_username":null,"amuco_suppliers_name":"WEIFANG ENSIGN INDUSTRY CO., LTD.","amuco_products_name":"ONION POWDER MESH 80-100","amuco_unit_types_name":"MT","amuco_contacts_name":"Jose Perez","amuco_packing_name":null,"amuco_material_name":null}'),
	(368, 1, 368, 1, '{"ETD":"2020-08-15","product_id":"5","quantity":"45","unit":"1","fcl":"2","fcl_option":"20","type_fcl":"NOR","weight":"","shape":"","material":"","pallets":null,"price_fob":"500","total_freight":"50","total_price":"5001.11","comission_supplier":null,"shipping_port":"1","supplier_incoterm":"1","supplier":"5","brand":"","payment_terms":"1","comments":"prueba 1","analysis_standard":"analysis","valid_until":"2020-08-29","purchasing":null,"supplier_direct":null,"status":"Pending","customer_request_id":"15","incoterm_price":"2","id":7}', NULL, NULL),
	(369, 1, 369, 1, '{"ETD":"2020-08-13","product_id":"5","quantity":"45","unit":"1","fcl":"2","fcl_option":"20","type_fcl":"NOR","weight":"","shape":"","material":"","pallets":null,"price_fob":"50","total_freight":"50","total_price":"51.111111111111114","comission_supplier":null,"shipping_port":"1","supplier_incoterm":"1","supplier":"5","brand":"121","payment_terms":"1","comments":"asdasd","analysis_standard":"asdasd","valid_until":"2020-08-13","purchasing":null,"supplier_direct":null,"status":"Pending","customer_request_id":"15","incoterm_price":"2","details_customer_request_id":"46","id":8}', NULL, NULL),
	(370, 1, 370, 1, '{"ETD":"2020-08-13","product_id":"3","quantity":"34","unit":"1","fcl":"2","fcl_option":"20","type_fcl":"NOR","weight":"","shape":"","material":"","pallets":null,"price_fob":"15","total_freight":"15","total_price":"15.441176470588236","comission_supplier":null,"shipping_port":"1","supplier_incoterm":"2","supplier":null,"brand":"adasd","payment_terms":"1","comments":"asdasd","analysis_standard":"adsasd","valid_until":"2020-08-13","purchasing":null,"supplier_direct":"6","status":"Pending","customer_request_id":"15","incoterm_price":"2","details_customer_request_id":"44","id":9}', NULL, NULL),
	(371, 1, 371, 1, '{"ETD":"2020-08-13","product_id":"3","quantity":"34","unit":"1","fcl":"2","fcl_option":"20","type_fcl":"NOR","weight":"","shape":"","material":"","pallets":null,"price_fob":"1000","total_freight":"34","total_price":"1001","comission_supplier":null,"shipping_port":"3","supplier_incoterm":"1","supplier":null,"brand":"","payment_terms":"1","comments":"","analysis_standard":"","valid_until":"2020-08-13","purchasing":null,"supplier_direct":"6","status":"Pending","customer_request_id":"15","incoterm_price":"2","details_customer_request_id":"44","id":10}', NULL, NULL),
	(372, 1, 372, 1, '{"ETD":"2020-08-28","product_id":"5","quantity":"45","unit":"1","fcl":"2","fcl_option":"20","type_fcl":"NOR","weight":"45000","shape":"24","material":"19","pallets":"","price_fob":"3000","total_freight":"","total_price":"3000","comission_supplier":null,"shipping_port":"2","supplier_incoterm":"5","supplier":"5","brand":"ssssss","payment_terms":"1","comments":"xxxxxx","analysis_standard":"","valid_until":"2020-08-17","purchasing":null,"supplier_direct":null,"status":"Pending","customer_request_id":"15","incoterm_price":"2","details_customer_request_id":"46","id":11}', NULL, NULL),
	(373, 1, 373, 1, '{"date_updated":"2020-08-13 11:20:04","status":"Requested","id":"19"}', 1, '{"id":"19","date_created":"2020-08-06 11:15:21","date_updated":"2020-08-06 11:25:28","status":"Pending","customer":"6","sales_agent":"5","contact":"4","destination_port":"1","incoterm":"2","remarks":"probando agosto 6","quantity":null,"combinate_container":"0","RSD":null}'),
	(374, 1, 374, 1, '{"date_updated":"2020-08-13 11:20:04","status":"Requested","id":"58"}', 1, '{"id":"58","product_id":"2","customer_request_id":"19","quantity":"10","unit":"4","status":"Pending","specific_remarks":"asdasdas","fcl":"2","fcl_option":"20","type_fcl":"Standard","weight":"3","packing":"15","material":"25","pallets":"1","unit_pack":"1","supplier":"7","purchasing":"0","contacts":"","ETD":"2020-09-03 00:00:00","date_created":"0000-00-00 00:00:00","date_updated":null,"ETA":"2020-08-08 00:00:00","purchasing_username":null,"amuco_suppliers_name":"Hufei","amuco_products_name":"CITRIC ACID ANHYDROUS MESH 30-100","amuco_unit_types_name":"Cylinders","amuco_contacts_name":null,"amuco_packing_name":"Box","amuco_material_name":"Plastic"}'),
	(375, 1, 375, 1, '{"date_updated":"2020-08-13 11:20:04","status":"Requested","id":"57"}', 1, '{"id":"57","product_id":"5","customer_request_id":"19","quantity":"20","unit":"4","status":"Pending","specific_remarks":"prueba","fcl":"1","fcl_option":"20","type_fcl":"Standard","weight":"25","packing":"11","material":"10","pallets":null,"unit_pack":"2","supplier":"0","purchasing":"7","contacts":"","ETD":"2020-08-31 00:00:00","date_created":"0000-00-00 00:00:00","date_updated":null,"ETA":"2020-08-31 00:00:00","purchasing_username":"Office","amuco_suppliers_name":null,"amuco_products_name":"Soy protein isolated 90% min non functional instant type 200-88","amuco_unit_types_name":"Cylinders","amuco_contacts_name":null,"amuco_packing_name":"Bag","amuco_material_name":"Carton"}'),
	(376, 1, 376, 1, '{"product_id":"5","customer_request_id":"19","quantity":"30","unit":"4","status":"Requested","fcl":"1","weight":"25","packing":"11","material":"10","specific_remarks":"prueba","fcl_option":null,"type_fcl":"Standard","pallets":null,"unit_pack":"2","supplier":"","purchasing":"7","contacts":"","ETD":"2020-08-31","ETA":"2020-08-31","date_created":null,"date_updated":null,"id":"57"}', 1, '{"id":"57","product_id":"5","customer_request_id":"19","quantity":"20","unit":"4","status":"Requested","specific_remarks":"prueba","fcl":"1","fcl_option":"20","type_fcl":"Standard","weight":"25","packing":"11","material":"10","pallets":null,"unit_pack":"2","supplier":"0","purchasing":"7","contacts":"","ETD":"2020-08-31 00:00:00","date_created":"0000-00-00 00:00:00","date_updated":"2020-08-13 11:20:04","ETA":"2020-08-31 00:00:00"}'),
	(377, 1, 377, 1, '{"product_id":"2","customer_request_id":"19","quantity":"10","unit":"4","status":"New","fcl":"2","fcl_option":null,"type_fcl":"Standard","weight":"3","unit_pack":"1","packing":"15","material":"25","specific_remarks":"asdasdas","pallets":"1","supplier":"4","contacts":"1","purchasing":null,"ETD":"2020-09-03","ETA":"2020-08-08","date_created":"2020-08-13 11:44:26","id":62}', NULL, NULL),
	(378, 1, 378, 1, '{"ETD":"2020-09-05","product_id":"2","quantity":"20","unit":"1","fcl":"1","fcl_option":"20","type_fcl":"","weight":"25","shape":"11","material":"","pallets":null,"price_fob":"600","total_freight":"2000","total_price":"700","comission_supplier":null,"shipping_port":"1","supplier_incoterm":"5","supplier":"6","brand":"ensign","payment_terms":"1","comments":"ninguna","analysis_standard":"BP","valid_until":"2020-08-25","purchasing":null,"supplier_direct":null,"status":"Pending","customer_request_id":"15","incoterm_price":"2","details_customer_request_id":"36","id":12}', NULL, NULL),
	(379, 1, 379, 1, '{"status":"Pending","ETD":"2020-08-28","product_id":"5","quantity":"45","unit":"1","fcl":"2","fcl_option":"20","type_fcl":"NOR","weight":"45000","shape":"24","material":"19","pallets":null,"price_fob":"3000","total_freight":"0","total_price":"3000","comission_supplier":null,"shipping_port":"2","supplier_incoterm":"5","supplier":"","brand":"ssssss","payment_terms":"1","comments":"xxxxxx","analysis_standard":"","valid_until":"2020-08-17","purchasing":null,"supplier_direct":null,"incoterm_price":"2","id":"11"}', 1, '{"id":"11","customer_request_id":"15","date_created":"0000-00-00 00:00:00","date_updated":"0000-00-00 00:00:00","ETD":"2020-08-28 00:00:00","product_id":"5","details_customer_request_id":"46","quantity":"45","unit":"1","fcl":"2","fcl_option":"20","type_fcl":"NOR","weight":"45000","unit_pack":"0","shape":"24","material":"19","pallets":"","price_fob":"3000","total_freight":"0","total_price":"3000","incoterm_price":"2","comission_supplier":null,"shipping_port":"2","supplier_incoterm":"5","supplier":"5","brand":"ssssss","payment_terms":"1","comments":"xxxxxx","analysis_standard":"","valid_until":"2020-08-17 00:00:00","status":"Pending","purchasing":null,"supplier_direct":null}'),
	(380, 1, 380, 1, '{"status":"Pending","ETD":"2020-08-13","product_id":"5","quantity":"45","unit":"1","fcl":"2","fcl_option":"20","type_fcl":"NOR","weight":"","shape":"","material":"","pallets":null,"price_fob":"50","total_freight":"50","total_price":"51.111111111111114","comission_supplier":null,"shipping_port":"3","supplier_incoterm":"1","supplier":"","brand":"121","payment_terms":"1","comments":"asdasd","analysis_standard":"asdasd","valid_until":"2020-08-13","purchasing":null,"supplier_direct":null,"incoterm_price":"2","id":"8"}', 1, '{"id":"8","customer_request_id":"15","date_created":"0000-00-00 00:00:00","date_updated":"0000-00-00 00:00:00","ETD":"2020-08-13 00:00:00","product_id":"5","details_customer_request_id":"46","quantity":"45","unit":"1","fcl":"2","fcl_option":"20","type_fcl":"NOR","weight":"","unit_pack":"0","shape":"","material":"","pallets":null,"price_fob":"50","total_freight":"50","total_price":"51.111111111111114","incoterm_price":"2","comission_supplier":null,"shipping_port":"1","supplier_incoterm":"1","supplier":"5","brand":"121","payment_terms":"1","comments":"asdasd","analysis_standard":"asdasd","valid_until":"2020-08-13 00:00:00","status":"Pending","purchasing":null,"supplier_direct":null}'),
	(381, 1, 381, 1, '{"ETD":"2020-08-14","product_id":"5","quantity":"45","unit":"1","fcl":"2","fcl_option":"20","type_fcl":"NOR","weight":"4","shape":"25","material":"26","pallets":null,"price_fob":"10","total_freight":"10","total_price":"10.222222222222221","comission_supplier":null,"shipping_port":"1","supplier_incoterm":"2","supplier":"5","brand":"121","payment_terms":"1","comments":"asdasdasdad","analysis_standard":"asdsas","valid_until":"2020-08-14","purchasing":null,"supplier_direct":null,"status":"Pending","customer_request_id":"15","incoterm_price":"2","details_customer_request_id":"46","id":13}', NULL, NULL),
	(382, 1, 382, 1, '{"status":"Offer Received","id":"46"}', 1, '{"id":"46","product_id":"5","customer_request_id":"15","quantity":"45","unit":"1","status":"Requested","specific_remarks":"","fcl":"2","fcl_option":"20","type_fcl":"NOR","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":null,"purchasing":"2","contacts":"","ETD":"2021-01-03 00:00:00","date_created":"2020-08-03 12:54:42","date_updated":"2020-08-11 10:26:21","ETA":"2021-01-03 00:00:00"}'),
	(383, 1, 383, 1, '{"status":"Pending","ETD":"2020-08-14","product_id":"5","quantity":"45","unit":"1","fcl":"2","fcl_option":"20","type_fcl":"NOR","weight":"4","shape":"25","material":"26","pallets":null,"price_fob":"10","total_freight":"10","total_price":"10.222222222222221","comission_supplier":null,"shipping_port":"1","supplier_incoterm":"2","supplier":"","brand":"121","payment_terms":"1","comments":"asdasdasdad","analysis_standard":"asdsas","valid_until":"2020-08-14","purchasing":null,"supplier_direct":null,"incoterm_price":"2","id":"13"}', 1, '{"id":"13","customer_request_id":"15","date_created":"0000-00-00 00:00:00","date_updated":"0000-00-00 00:00:00","ETD":"2020-08-14 00:00:00","product_id":"5","details_customer_request_id":"46","quantity":"45","unit":"1","fcl":"2","fcl_option":"20","type_fcl":"NOR","weight":"4","unit_pack":"0","shape":"25","material":"26","pallets":null,"price_fob":"10","total_freight":"10","total_price":"10.222222222222221","incoterm_price":"2","comission_supplier":null,"shipping_port":"1","supplier_incoterm":"2","supplier":"5","brand":"121","payment_terms":"1","comments":"asdasdasdad","analysis_standard":"asdsas","valid_until":"2020-08-14 00:00:00","status":"Pending","purchasing":null,"supplier_direct":null}'),
	(384, 1, 384, 1, '{"status":"Pending","ETD":"2020-08-14","product_id":"5","quantity":"45","unit":"1","fcl":"2","fcl_option":"20","type_fcl":"NOR","weight":"4","shape":"25","material":"26","pallets":null,"price_fob":"10","total_freight":"10","total_price":"10.222222222222221","comission_supplier":null,"shipping_port":"1","supplier_incoterm":"2","supplier":"","brand":"121","payment_terms":"1","comments":"asdasdasdad","analysis_standard":"xxxxx","valid_until":"2020-08-14","purchasing":null,"supplier_direct":null,"incoterm_price":"2","id":"13"}', 1, '{"id":"13","customer_request_id":"15","date_created":"0000-00-00 00:00:00","date_updated":"0000-00-00 00:00:00","ETD":"2020-08-14 00:00:00","product_id":"5","details_customer_request_id":"46","quantity":"45","unit":"1","fcl":"2","fcl_option":"20","type_fcl":"NOR","weight":"4","unit_pack":"0","shape":"25","material":"26","pallets":null,"price_fob":"10","total_freight":"10","total_price":"10.222222222222221","incoterm_price":"2","comission_supplier":null,"shipping_port":"1","supplier_incoterm":"2","supplier":"0","brand":"121","payment_terms":"1","comments":"asdasdasdad","analysis_standard":"asdsas","valid_until":"2020-08-14 00:00:00","status":"Pending","purchasing":null,"supplier_direct":null}'),
	(385, 1, 385, 1, '{"ETD":"2020-08-31","product_id":"5","quantity":"15","unit":"1","fcl":"2","fcl_option":"40","type_fcl":"","weight":"40000","shape":"20","material":"19","pallets":null,"price_fob":"700","total_freight":"1000","total_price":"766.6666666666666","comission_supplier":null,"shipping_port":"2","supplier_incoterm":"3","supplier":null,"brand":"ddddddd","payment_terms":"1","comments":"","analysis_standard":"","valid_until":"2020-08-25","purchasing":null,"supplier_direct":"7","status":"Pending","customer_request_id":"15","incoterm_price":"1","details_customer_request_id":"31","id":14}', NULL, NULL),
	(386, 1, 386, 1, '{"status":"Offer Received","id":"31"}', 1, '{"id":"31","product_id":"5","customer_request_id":"15","quantity":"15","unit":"2","status":"Requested","specific_remarks":"","fcl":"0","fcl_option":null,"type_fcl":"0","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":"7","purchasing":null,"contacts":"","ETD":"2020-07-23 00:00:00","date_created":"0000-00-00 00:00:00","date_updated":"2020-08-11 10:26:21","ETA":null}'),
	(387, 1, 387, 1, '{"status":"Pending","ETD":"2020-08-14","product_id":"5","quantity":"45","unit":"1","fcl":"2","fcl_option":"20","type_fcl":"NOR","weight":"4","shape":"25","material":"26","pallets":null,"price_fob":"30","total_freight":"10","total_price":"30.22222222222222","comission_supplier":null,"shipping_port":"1","supplier_incoterm":"2","supplier":"","brand":"121","payment_terms":"1","comments":"asdasdasdad","analysis_standard":"xxxxx","valid_until":"2020-08-14","purchasing":null,"supplier_direct":null,"incoterm_price":"2","id":"13"}', 1, '{"id":"13","customer_request_id":"15","date_created":"0000-00-00 00:00:00","date_updated":"0000-00-00 00:00:00","ETD":"2020-08-14 00:00:00","product_id":"5","details_customer_request_id":"46","quantity":"45","unit":"1","fcl":"2","fcl_option":"20","type_fcl":"NOR","weight":"4","unit_pack":"0","shape":"25","material":"26","pallets":null,"price_fob":"10","total_freight":"10","total_price":"10.222222222222221","incoterm_price":"2","comission_supplier":null,"shipping_port":"1","supplier_incoterm":"2","supplier":"0","brand":"121","payment_terms":"1","comments":"asdasdasdad","analysis_standard":"xxxxx","valid_until":"2020-08-14 00:00:00","status":"Pending","purchasing":null,"supplier_direct":null}'),
	(388, 1, 388, 1, '{"date_created":"2020-08-17 12:28:50","RSD":null,"status":"New","customer":"9","sales_agent":"6","contact":"5","destination_port":"8","incoterm":"2","combinate_container":"0","remarks":"nueva prueba lunes 17","id":20}', NULL, NULL),
	(389, 1, 389, 1, '{"product_id":"2","customer_request_id":"20","quantity":"25","unit":"1","status":"New","fcl":"1","fcl_option":"40","type_fcl":"NOR","weight":"500","unit_pack":"2","packing":"13","material":"","specific_remarks":"","pallets":null,"supplier":"6","contacts":"","purchasing":null,"ETD":"2020-09-01","ETA":"2020-09-30","date_created":"2020-08-17 12:30:53","id":63}', NULL, NULL),
	(390, 1, 390, 1, '{"product_id":"3","customer_request_id":"20","quantity":"15","unit":"1","status":"New","fcl":"","fcl_option":null,"type_fcl":"","weight":"20","unit_pack":"2","packing":"20","material":"","specific_remarks":"","pallets":null,"supplier":"9","contacts":"","purchasing":null,"ETD":"2020-09-01","ETA":"2020-09-30","date_created":"2020-08-17 12:33:48","id":64}', NULL, NULL),
	(391, 1, 391, 1, '{"date_updated":"2020-08-17 12:35:28","status":"Requested","id":"20"}', 1, '{"id":"20","date_created":"2020-08-17 12:28:50","date_updated":null,"status":"New","customer":"9","sales_agent":"6","contact":"5","destination_port":"8","incoterm":"2","remarks":"nueva prueba lunes 17","quantity":null,"combinate_container":"0","RSD":null}'),
	(392, 1, 392, 1, '{"date_updated":"2020-08-17 12:35:28","status":"Requested","id":"64"}', 1, '{"id":"64","product_id":"3","customer_request_id":"20","quantity":"15","unit":"1","status":"New","specific_remarks":"","fcl":"0","fcl_option":null,"type_fcl":"","weight":"20","packing":"20","material":"","pallets":null,"unit_pack":"2","supplier":"9","purchasing":null,"contacts":"","ETD":"2020-09-01 00:00:00","date_created":"2020-08-17 12:33:48","date_updated":null,"ETA":"2020-09-30 00:00:00","purchasing_username":null,"amuco_suppliers_name":"Liaocheng new era foods","amuco_products_name":"ONION POWDER MESH 80-100","amuco_unit_types_name":"MT","amuco_contacts_name":null,"amuco_packing_name":"Drum","amuco_material_name":null}'),
	(393, 1, 393, 1, '{"date_updated":"2020-08-17 12:35:28","status":"Requested","id":"63"}', 1, '{"id":"63","product_id":"2","customer_request_id":"20","quantity":"25","unit":"1","status":"New","specific_remarks":"","fcl":"1","fcl_option":"40","type_fcl":"NOR","weight":"500","packing":"13","material":"","pallets":null,"unit_pack":"2","supplier":"6","purchasing":null,"contacts":"","ETD":"2020-09-01 00:00:00","date_created":"2020-08-17 12:30:53","date_updated":null,"ETA":"2020-09-30 00:00:00","purchasing_username":null,"amuco_suppliers_name":"WEIFANG ENSIGN INDUSTRY CO., LTD.","amuco_products_name":"CITRIC ACID ANHYDROUS MESH 30-100","amuco_unit_types_name":"MT","amuco_contacts_name":null,"amuco_packing_name":"Big Bag","amuco_material_name":null}'),
	(394, 1, 394, 1, '{"ETD":"2019-12-17","product_id":"3","quantity":"15","unit":"1","fcl":"1","fcl_option":"40","type_fcl":"NOR","weight":"200","shape":"20","material":"14","pallets":null,"price_fob":"500","total_freight":"1000","total_price":"566.6666666666666","comission_supplier":null,"shipping_port":"7","supplier_incoterm":"1","supplier":null,"brand":"xxxx","payment_terms":"1","comments":"","analysis_standard":"xxxxx","valid_until":"2020-08-17","purchasing":null,"supplier_direct":"9","status":"Pending","customer_request_id":"20","incoterm_price":"2","details_customer_request_id":"64","id":15}', NULL, NULL),
	(395, 1, 395, 1, '{"status":"Offer Received","id":"64"}', 1, '{"id":"64","product_id":"3","customer_request_id":"20","quantity":"15","unit":"1","status":"Requested","specific_remarks":"","fcl":"0","fcl_option":null,"type_fcl":"","weight":"20","packing":"20","material":"","pallets":null,"unit_pack":"2","supplier":"9","purchasing":null,"contacts":"","ETD":"2020-09-01 00:00:00","date_created":"2020-08-17 12:33:48","date_updated":"2020-08-17 12:35:28","ETA":"2020-09-30 00:00:00"}'),
	(396, 1, 396, 1, '{"ETD":"2020-08-17","product_id":"3","quantity":"15","unit":"1","fcl":"1","fcl_option":"40","type_fcl":"NOR","weight":"20","shape":"20","material":"18","pallets":null,"price_fob":"756","total_freight":"1000","total_price":"822.6666666666666","comission_supplier":null,"shipping_port":"5","supplier_incoterm":"1","supplier":null,"brand":"","payment_terms":"1","comments":"","analysis_standard":"","valid_until":"2020-08-17","purchasing":null,"supplier_direct":"9","status":"Pending","customer_request_id":"20","incoterm_price":"2","details_customer_request_id":"64","id":16}', NULL, NULL),
	(397, 1, 397, 1, '{"ETD":"2020-08-17","product_id":"2","quantity":"25","unit":"1","fcl":"1","fcl_option":"40","type_fcl":"NOR","weight":"500","shape":"13","material":"25","pallets":null,"price_fob":"250","total_freight":"","total_price":"250","comission_supplier":null,"shipping_port":"3","supplier_incoterm":"5","supplier":null,"brand":"ssss","payment_terms":"1","comments":"","analysis_standard":"","valid_until":"2020-08-17","purchasing":null,"supplier_direct":"6","status":"Pending","customer_request_id":"20","incoterm_price":"2","details_customer_request_id":"63","id":17}', NULL, NULL),
	(398, 1, 398, 1, '{"status":"Offer Received","id":"63"}', 1, '{"id":"63","product_id":"2","customer_request_id":"20","quantity":"25","unit":"1","status":"Requested","specific_remarks":"","fcl":"1","fcl_option":"40","type_fcl":"NOR","weight":"500","packing":"13","material":"","pallets":null,"unit_pack":"2","supplier":"6","purchasing":null,"contacts":"","ETD":"2020-09-01 00:00:00","date_created":"2020-08-17 12:30:53","date_updated":"2020-08-17 12:35:28","ETA":"2020-09-30 00:00:00"}'),
	(399, 1, 399, 1, '{"product_id":"5","customer_request_id":"20","quantity":"40","unit":"1","status":"New","fcl":"1","fcl_option":"20","type_fcl":"NOR","weight":"560","unit_pack":"2","packing":"19","material":"22","specific_remarks":"","pallets":null,"supplier":null,"contacts":"","purchasing":"7","ETD":"2020-09-01","ETA":"2020-09-01","date_created":"2020-08-17 13:25:27","id":65}', NULL, NULL),
	(400, 1, 400, 1, '{"date_updated":"2020-08-17 13:26:16","status":"Requested","id":"20"}', 1, '{"id":"20","date_created":"2020-08-17 12:28:50","date_updated":"2020-08-17 12:35:28","status":"Requested","customer":"9","sales_agent":"6","contact":"5","destination_port":"8","incoterm":"2","remarks":"nueva prueba lunes 17","quantity":null,"combinate_container":"0","RSD":null}'),
	(401, 1, 401, 1, '{"date_updated":"2020-08-17 13:26:16","status":"Requested","id":"65"}', 1, '{"id":"65","product_id":"5","customer_request_id":"20","quantity":"40","unit":"1","status":"New","specific_remarks":"","fcl":"1","fcl_option":"20","type_fcl":"NOR","weight":"560","packing":"19","material":"22","pallets":null,"unit_pack":"2","supplier":null,"purchasing":"7","contacts":"","ETD":"2020-09-01 00:00:00","date_created":"2020-08-17 13:25:27","date_updated":null,"ETA":"2020-09-01 00:00:00","purchasing_username":"Office","amuco_suppliers_name":null,"amuco_products_name":"Soy protein isolated 90% min non functional instant type 200-88","amuco_unit_types_name":"MT","amuco_contacts_name":null,"amuco_packing_name":"Cylinder","amuco_material_name":"Non-Galvanized Iron"}'),
	(402, 1, 402, 1, '{"product_id":"3","customer_request_id":"20","quantity":"15","unit":"1","status":"New","fcl":"0","fcl_option":null,"type_fcl":"","weight":"20","unit_pack":"2","packing":"13","material":"22","specific_remarks":"","pallets":"1","supplier":"9","contacts":"","purchasing":null,"ETD":"2020-09-01","ETA":"2020-09-30","date_created":"2020-08-17 13:34:02","id":66}', NULL, NULL),
	(403, 1, 403, 1, '{"product_id":"5","customer_request_id":"20","quantity":"40","unit":"1","status":"New","fcl":"1","weight":"580","packing":"19","material":"22","specific_remarks":"","fcl_option":null,"type_fcl":"NOR","pallets":null,"unit_pack":"2","supplier":"","purchasing":"7","contacts":"","ETD":"2020-09-01","ETA":"2020-09-01","date_created":null,"date_updated":null,"id":"65"}', 1, '{"id":"65","product_id":"5","customer_request_id":"20","quantity":"40","unit":"1","status":"Requested","specific_remarks":"","fcl":"1","fcl_option":"20","type_fcl":"NOR","weight":"560","packing":"19","material":"22","pallets":null,"unit_pack":"2","supplier":null,"purchasing":"7","contacts":"","ETD":"2020-09-01 00:00:00","date_created":"2020-08-17 13:25:27","date_updated":"2020-08-17 13:26:16","ETA":"2020-09-01 00:00:00"}'),
	(404, 1, 404, 1, '{"date_updated":"2020-08-17 17:00:29","status":"Requested","id":"20"}', 1, '{"id":"20","date_created":"2020-08-17 12:28:50","date_updated":"2020-08-17 13:26:16","status":"Requested","customer":"9","sales_agent":"6","contact":"5","destination_port":"8","incoterm":"2","remarks":"nueva prueba lunes 17","quantity":null,"combinate_container":"0","RSD":null}'),
	(405, 1, 405, 1, '{"date_updated":"2020-08-17 17:00:29","status":"Requested","id":"66"}', 1, '{"id":"66","product_id":"3","customer_request_id":"20","quantity":"15","unit":"1","status":"New","specific_remarks":"","fcl":"0","fcl_option":null,"type_fcl":"","weight":"20","packing":"13","material":"22","pallets":"1","unit_pack":"2","supplier":"9","purchasing":null,"contacts":"","ETD":"2020-09-01 00:00:00","date_created":"2020-08-17 13:34:02","date_updated":null,"ETA":"2020-09-30 00:00:00","purchasing_username":null,"amuco_suppliers_name":"Liaocheng new era foods","amuco_products_name":"ONION POWDER MESH 80-100","amuco_unit_types_name":"MT","amuco_contacts_name":null,"amuco_packing_name":"Big Bag","amuco_material_name":"Non-Galvanized Iron"}'),
	(406, 1, 406, 1, '{"date_updated":"2020-08-17 17:00:29","status":"Requested","id":"65"}', 1, '{"id":"65","product_id":"5","customer_request_id":"20","quantity":"40","unit":"1","status":"New","specific_remarks":"","fcl":"1","fcl_option":null,"type_fcl":"NOR","weight":"580","packing":"19","material":"22","pallets":null,"unit_pack":"2","supplier":"0","purchasing":"7","contacts":"","ETD":"2020-09-01 00:00:00","date_created":"0000-00-00 00:00:00","date_updated":null,"ETA":"2020-09-01 00:00:00","purchasing_username":"Office","amuco_suppliers_name":null,"amuco_products_name":"Soy protein isolated 90% min non functional instant type 200-88","amuco_unit_types_name":"MT","amuco_contacts_name":null,"amuco_packing_name":"Cylinder","amuco_material_name":"Non-Galvanized Iron"}'),
	(407, 1, 407, 1, '{"ETD":"2021-01-18","product_id":"3","quantity":"15","unit":"1","fcl":"15","fcl_option":"20","type_fcl":"NOR","weight":"20","shape":"13","material":"22","pallets":"1","price_fob":"2000","total_freight":"1500","total_price":"2100","comission_supplier":null,"shipping_port":"1","supplier_incoterm":"3","supplier":null,"brand":"brand","payment_terms":"1","comments":"asdasd","analysis_standard":"adasd","valid_until":"2020-08-18","purchasing":null,"supplier_direct":"9","status":"Pending","customer_request_id":"20","incoterm_price":"2","details_customer_request_id":"66","id":18}', NULL, NULL),
	(408, 1, 408, 1, '{"status":"Offer Received","id":"66"}', 1, '{"id":"66","product_id":"3","customer_request_id":"20","quantity":"15","unit":"1","status":"Requested","specific_remarks":"","fcl":"0","fcl_option":null,"type_fcl":"","weight":"20","packing":"13","material":"22","pallets":"1","unit_pack":"2","supplier":"9","purchasing":null,"contacts":"","ETD":"2020-09-01 00:00:00","date_created":"2020-08-17 13:34:02","date_updated":"2020-08-17 17:00:29","ETA":"2020-09-30 00:00:00"}'),
	(409, 1, 409, 1, '{"RSD":null,"date_updated":"2020-08-18 10:57:51","status":"New","customer":"9","sales_agent":"6","contact":"5","destination_port":"8","combinate_container":"0","incoterm":"1","remarks":"nueva prueba lunes 17 XXXXX","id":"20"}', 1, '{"id":"20","date_created":"2020-08-17 12:28:50","date_updated":"2020-08-17 17:00:29","status":"Requested","customer":"9","sales_agent":"6","contact":"5","destination_port":"8","incoterm":"2","remarks":"nueva prueba lunes 17","quantity":null,"combinate_container":"0","RSD":null}'),
	(410, 1, 410, 1, '{"product_id":"2","customer_request_id":"20","quantity":"25","unit":"1","status":"New","fcl":"1","fcl_option":null,"type_fcl":"NOR","weight":"500","unit_pack":"2","packing":"13","material":"","specific_remarks":"","pallets":null,"supplier":"7","contacts":"","purchasing":null,"ETD":"2020-09-01","ETA":"2020-09-30","date_created":"2020-08-18 11:03:39","id":67}', NULL, NULL),
	(411, 1, 411, 1, '{"date_updated":"2020-08-18 11:13:55","status":"Requested","id":"20"}', 1, '{"id":"20","date_created":"2020-08-17 12:28:50","date_updated":"2020-08-18 10:57:51","status":"New","customer":"9","sales_agent":"6","contact":"5","destination_port":"8","incoterm":"1","remarks":"nueva prueba lunes 17 XXXXX","quantity":null,"combinate_container":"0","RSD":null}'),
	(412, 1, 412, 1, '{"date_updated":"2020-08-18 11:13:55","status":"Requested","id":"67"}', 1, '{"id":"67","product_id":"2","customer_request_id":"20","quantity":"25","unit":"1","status":"New","specific_remarks":"","fcl":"1","fcl_option":null,"type_fcl":"NOR","weight":"500","packing":"13","material":"","pallets":null,"unit_pack":"2","supplier":"7","purchasing":null,"contacts":"","ETD":"2020-09-01 00:00:00","date_created":"2020-08-18 11:03:39","date_updated":null,"ETA":"2020-09-30 00:00:00","purchasing_username":null,"amuco_suppliers_name":"Hufei","amuco_products_name":"CITRIC ACID ANHYDROUS MESH 30-100","amuco_unit_types_name":"MT","amuco_contacts_name":null,"amuco_packing_name":"Big Bag","amuco_material_name":null}'),
	(413, 1, 413, 1, '{"product_id":"2","customer_request_id":"20","quantity":"25","unit":"1","status":"New","fcl":"4","fcl_option":"","type_fcl":"NOR","weight":"500","unit_pack":"2","packing":"13","material":"","specific_remarks":"","pallets":null,"supplier":"7","contacts":"","purchasing":null,"ETD":"2020-09-01","ETA":"2020-09-30","date_created":"2020-08-18 11:58:07","id":68}', NULL, NULL),
	(414, 1, 414, 1, '{"status":"Pending","ETD":"2020-08-31","product_id":"5","quantity":"15","unit":"1","fcl":"2","fcl_option":"40","type_fcl":"","weight":"40000","shape":"20","material":"19","pallets":null,"price_fob":"7000.00","total_freight":"1000.00","total_price":"7066.66","comission_supplier":null,"shipping_port":"2","supplier_incoterm":"3","supplier":null,"brand":"ddddddd","payment_terms":"1","comments":"","analysis_standard":"","valid_until":"2020-08-25","purchasing":null,"supplier_direct":"7","incoterm_price":"1","id":"14"}', 1, '{"id":"14","customer_request_id":"15","date_created":"0000-00-00 00:00:00","date_updated":"0000-00-00 00:00:00","ETD":"2020-08-31 00:00:00","product_id":"5","details_customer_request_id":"31","quantity":"15","unit":"1","fcl":"2","fcl_option":"40","type_fcl":"","weight":"40000","unit_pack":"0","shape":"20","material":"19","pallets":null,"price_fob":"700.00","total_freight":"1000.00","total_price":"766.67","incoterm_price":"1","comission_supplier":null,"shipping_port":"2","supplier_incoterm":"3","supplier":null,"brand":"ddddddd","payment_terms":"1","comments":"","analysis_standard":"","valid_until":"2020-08-25 00:00:00","status":"Pending","purchasing":null,"supplier_direct":"7"}'),
	(415, 1, 415, 1, '{"id":"20","date_created":"2020-08-17 12:28:50","date_updated":"2020-08-18 11:13:55","status":"Requested","customer":"9","sales_agent":"6","contact":"5","destination_port":"8","incoterm":"1","remarks":"nueva prueba lunes 17 XXXXX","quantity":null,"combinate_container":"0","RSD":null}', NULL, NULL),
	(416, 1, 416, 1, '{"id":"19","date_created":"2020-08-06 11:15:21","date_updated":"2020-08-13 11:20:04","status":"Requested","customer":"6","sales_agent":"5","contact":"4","destination_port":"1","incoterm":"2","remarks":"probando agosto 6","quantity":null,"combinate_container":"0","RSD":null}', NULL, NULL),
	(417, 1, 417, 1, '{"id":"18","date_created":"2020-08-04 11:35:24","date_updated":"2020-08-07 11:33:17","status":"Requested","customer":"8","sales_agent":"5","contact":"6","destination_port":"7","incoterm":"1","remarks":"probando con laura","quantity":null,"combinate_container":"1","RSD":null}', NULL, NULL),
	(418, 1, 418, 1, '{"id":"17","date_created":"2020-08-04 10:01:37","date_updated":null,"status":"New","customer":"7","sales_agent":"5","contact":"3","destination_port":"7","incoterm":"1","remarks":"XXXXXX pruebas","quantity":null,"combinate_container":"0","RSD":null}', NULL, NULL),
	(419, 1, 419, 1, '{"id":"16","date_created":"2020-08-03 16:54:08","date_updated":"2020-08-04 09:50:56","status":"New","customer":"8","sales_agent":"5","contact":"6","destination_port":"3","incoterm":"1","remarks":"haciendo pruebas","quantity":null,"combinate_container":"1","RSD":null}', NULL, NULL),
	(420, 1, 420, 1, '{"id":"15","date_created":"2020-07-23 15:14:40","date_updated":"2020-08-11 10:26:21","status":"Requested","customer":"6","sales_agent":"5","contact":"4","destination_port":"3","incoterm":"2","remarks":"probando","quantity":null,"combinate_container":"0","RSD":"2020-07-23 00:00:00"}', NULL, NULL),
	(421, 1, 421, 1, '{"id":"14","date_created":"2020-07-23 10:21:45","date_updated":null,"status":"New","customer":"7","sales_agent":"5","contact":"3","destination_port":"4","incoterm":"2","remarks":"","quantity":null,"combinate_container":"0","RSD":"2020-07-23 00:00:00"}', NULL, NULL),
	(422, 1, 422, 1, '{"id":"13","date_created":"2020-07-21 10:10:20","date_updated":null,"status":"New","customer":"9","sales_agent":"5","contact":"5","destination_port":"7","incoterm":"1","remarks":"probando","quantity":null,"combinate_container":"0","RSD":"2020-07-21 00:00:00"}', NULL, NULL),
	(423, 1, 423, 1, '{"id":"12","date_created":"2020-07-21 09:03:16","date_updated":"2020-07-21 09:51:36","status":"New","customer":"6","sales_agent":"5","contact":"4","destination_port":"3","incoterm":"5","remarks":"haciendo una prueba","quantity":null,"combinate_container":"0","RSD":"2020-07-21 00:00:00"}', NULL, NULL),
	(424, 1, 424, 1, '{"id":"11","date_created":"2020-07-16 12:32:10","date_updated":"2020-07-17 09:37:17","status":"New","customer":"9","sales_agent":"3","contact":"5","destination_port":"1","incoterm":"5","remarks":"ptrobando  cambios","quantity":null,"combinate_container":"1","RSD":"2020-07-16 00:00:00"}', NULL, NULL),
	(425, 1, 425, 1, '{"id":"10","date_created":"2020-07-13 00:00:00","date_updated":"2020-07-17 10:35:58","status":"New","customer":"7","sales_agent":"6","contact":"2","destination_port":"8","incoterm":"5","remarks":"hola","quantity":null,"combinate_container":"0","RSD":"2018-07-16 00:00:00"}', NULL, NULL),
	(426, 1, 426, 1, '{"date_created":"2020-08-18 13:52:08","RSD":null,"status":"New","customer":"9","sales_agent":"3","contact":"5","destination_port":"3","incoterm":"2","combinate_container":"1","remarks":"Request 1","id":21}', NULL, NULL),
	(427, 1, 427, 1, '{"product_id":"2","customer_request_id":"21","quantity":"15","unit":"1","status":"New","fcl":"4","fcl_option":null,"type_fcl":"Standard","weight":"3","unit_pack":"1","packing":"25","material":"26","specific_remarks":"Request 1","pallets":"1","supplier":"5","contacts":"","purchasing":null,"ETD":"2020-08-19","ETA":"2020-08-20","date_created":"2020-08-18 13:53:15","id":69}', NULL, NULL),
	(428, 1, 428, 1, '{"product_id":"2","customer_request_id":"21","quantity":"15","unit":"1","status":"New","fcl":"4","fcl_option":null,"type_fcl":"Standard","weight":"3","unit_pack":"1","packing":"25","material":"26","specific_remarks":"Request 1","pallets":"1","supplier":null,"contacts":"","purchasing":"7","ETD":"2021-06-19","ETA":"2021-06-19","date_created":"2020-08-18 13:53:15","id":70}', NULL, NULL),
	(429, 1, 429, 1, '{"ETD":"2020-01-18","product_id":"2","quantity":"15","unit":"1","fcl":"4","fcl_option":"20","type_fcl":"Standard","weight":"3","shape":"25","material":"26","pallets":"1","price_fob":"1000","total_freight":"500","total_price":"1033.33","comission_supplier":null,"shipping_port":"1","supplier_incoterm":"1","supplier":"5","brand":"brand","payment_terms":"1","comments":"Request 1","analysis_standard":"analysis","valid_until":"2020-08-18","purchasing":null,"supplier_direct":null,"status":"Pending","customer_request_id":"21","incoterm_price":"2","details_customer_request_id":"70","id":19}', NULL, NULL),
	(430, 1, 430, 1, '{"status":"Offer Received","id":"70"}', 1, '{"id":"70","product_id":"2","customer_request_id":"21","quantity":"15","unit":"1","status":"New","specific_remarks":"Request 1","fcl":"4","fcl_option":null,"type_fcl":"Standard","weight":"3","packing":"25","material":"26","pallets":"1","unit_pack":"1","supplier":null,"purchasing":"7","contacts":"","ETD":"2021-06-19 00:00:00","date_created":"2020-08-18 13:53:15","date_updated":null,"ETA":"2021-06-19 00:00:00"}'),
	(431, 1, 431, 1, '{"ETD":"2020-08-25","product_id":"2","quantity":"15","unit":"1","fcl":"4","fcl_option":"20","type_fcl":"Standard","weight":"3","shape":"25","material":"26","pallets":"1","price_fob":"2000.00","total_freight":"3000.00","total_price":"2300.00","comission_supplier":null,"shipping_port":"1","supplier_incoterm":"1","supplier":null,"brand":"brand","payment_terms":"1","comments":"","analysis_standard":"adasd","valid_until":"2020-08-25","purchasing":null,"supplier_direct":"5","status":"Pending","customer_request_id":"21","incoterm_price":"2","details_customer_request_id":"69","id":20}', NULL, NULL),
	(432, 1, 432, 1, '{"status":"Offer Received","id":"69"}', 1, '{"id":"69","product_id":"2","customer_request_id":"21","quantity":"15","unit":"1","status":"New","specific_remarks":"Request 1","fcl":"4","fcl_option":null,"type_fcl":"Standard","weight":"3","packing":"25","material":"26","pallets":"1","unit_pack":"1","supplier":"5","purchasing":null,"contacts":"","ETD":"2020-08-19 00:00:00","date_created":"2020-08-18 13:53:15","date_updated":null,"ETA":"2020-08-20 00:00:00"}'),
	(433, 1, 433, 1, '{"date_created":"2020-08-25 15:16:46","RSD":null,"status":"New","customer":"7","sales_agent":"3","contact":"2","destination_port":"7","incoterm":"1","combinate_container":"1","remarks":"","id":22}', NULL, NULL),
	(434, 1, 434, 1, '{"date_created":"2020-08-26 10:21:02","RSD":null,"status":"New","customer":"9","sales_agent":"3","contact":"5","destination_port":"8","incoterm":"8","combinate_container":"1","remarks":"prueba 3","id":23}', NULL, NULL),
	(435, 1, 435, 1, '{"product_id":"5","customer_request_id":"23","quantity":"150","unit":"1","status":"New","fcl":"3","fcl_option":null,"type_fcl":"HCube","weight":"3","unit_pack":"1","packing":"7","material":"10","specific_remarks":"prueba 3","pallets":"1","supplier":"5","contacts":"","purchasing":null,"ETD":"2020-08-25","ETA":"2020-08-26","date_created":"2020-08-26 10:22:16","id":71}', NULL, NULL),
	(436, 1, 436, 1, '{"product_id":"5","customer_request_id":"23","quantity":"150","unit":"1","status":"New","fcl":"3","fcl_option":null,"type_fcl":"HCube","weight":"3","unit_pack":"1","packing":"7","material":"10","specific_remarks":"prueba 3","pallets":"1","supplier":"6","contacts":"7","purchasing":null,"ETD":"2020-08-25","ETA":"2020-08-26","date_created":"2020-08-26 10:22:16","id":72}', NULL, NULL),
	(437, 1, 437, 1, '{"product_id":"5","customer_request_id":"23","quantity":"150","unit":"1","status":"New","fcl":"3","fcl_option":null,"type_fcl":"HCube","weight":"3","unit_pack":"1","packing":"7","material":"10","specific_remarks":"prueba 3","pallets":"1","supplier":null,"contacts":"","purchasing":"7","ETD":"2020-08-25","ETA":"2020-08-25","date_created":"2020-08-26 10:22:16","id":73}', NULL, NULL),
	(438, 1, 438, 1, '{"ETD":"2020-08-26","product_id":"5","quantity":"150","unit":"1","fcl":"3","fcl_option":"20","type_fcl":"HCube","weight":"3","shape":"7","material":"10","pallets":"1","price_fob":"30000","total_freight":"3000","total_price":"30000","comission_supplier":null,"shipping_port":"1","supplier_incoterm":"2","supplier":"5","brand":"brand","payment_terms":"1","comments":"","analysis_standard":"adasd","valid_until":"2020-08-26","purchasing":null,"supplier_direct":null,"status":"Pending","customer_request_id":"23","incoterm_price":"8","details_customer_request_id":"73","id":21}', NULL, NULL),
	(439, 1, 439, 1, '{"status":"Offer Received","id":"73"}', 1, '{"id":"73","product_id":"5","customer_request_id":"23","quantity":"150","unit":"1","status":"New","specific_remarks":"prueba 3","fcl":"3","fcl_option":null,"type_fcl":"HCube","weight":"3","packing":"7","material":"10","pallets":"1","unit_pack":"1","supplier":null,"purchasing":"7","contacts":"","ETD":"2020-08-25 00:00:00","date_created":"2020-08-26 10:22:16","date_updated":null,"ETA":"2020-08-25 00:00:00"}'),
	(440, 1, 440, 1, '{"ETD":"2020-08-26","product_id":"5","quantity":"150","unit":"1","fcl":"3","fcl_option":"20","type_fcl":"HCube","weight":"3","shape":"7","material":"10","pallets":"1","price_fob":"40000","total_freight":"3000.00","total_price":"40000","comission_supplier":null,"shipping_port":"2","supplier_incoterm":"2","supplier":"5","brand":"brand","payment_terms":"1","comments":"","analysis_standard":"adasd","valid_until":"2020-08-26","purchasing":null,"supplier_direct":null,"status":"Pending","customer_request_id":"23","incoterm_price":"8","details_customer_request_id":"73","id":22}', NULL, NULL),
	(441, 1, 441, 1, '{"product_id":"3","customer_request_id":"22","quantity":"15","unit":"1","status":"New","fcl":"1","fcl_option":null,"type_fcl":"","weight":"","unit_pack":"","packing":"","material":"","specific_remarks":"","pallets":null,"supplier":"8","contacts":"","purchasing":null,"ETD":"2020-09-04","ETA":"","date_created":"2020-08-26 13:50:18","id":74}', NULL, NULL),
	(442, 1, 442, 1, '{"product_id":"3","customer_request_id":"22","quantity":"15","unit":"1","status":"New","fcl":"1","fcl_option":null,"type_fcl":"","weight":"","unit_pack":"","packing":"","material":"","specific_remarks":"","pallets":null,"supplier":null,"contacts":"","purchasing":"1","ETD":"2020-09-04","ETA":"2020-09-04","date_created":"2020-08-26 13:50:18","id":75}', NULL, NULL),
	(443, 1, 443, 1, '{"id":"75","product_id":"3","customer_request_id":"22","quantity":"15","unit":"1","status":"New","specific_remarks":"","fcl":"1","fcl_option":null,"type_fcl":"","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":null,"purchasing":"1","contacts":"","ETD":"2020-09-04 00:00:00","date_created":"2020-08-26 13:50:18","date_updated":null,"ETA":"2020-09-04 00:00:00"}', NULL, NULL),
	(444, 1, 444, 1, '{"date_updated":"2020-08-26 13:51:05","status":"Requested","id":"22"}', 1, '{"id":"22","date_created":"2020-08-25 15:16:46","date_updated":null,"status":"New","customer":"7","sales_agent":"3","contact":"2","destination_port":"7","incoterm":"1","remarks":"","quantity":null,"combinate_container":"1","RSD":null}'),
	(445, 1, 445, 1, '{"date_updated":"2020-08-26 13:51:05","status":"Requested","id":"74"}', 1, '{"id":"74","product_id":"3","customer_request_id":"22","quantity":"15","unit":"1","status":"New","specific_remarks":"","fcl":"1","fcl_option":null,"type_fcl":"","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":"8","purchasing":null,"contacts":"","ETD":"2020-09-04 00:00:00","date_created":"2020-08-26 13:50:18","date_updated":null,"ETA":"0000-00-00 00:00:00","purchasing_username":null,"amuco_suppliers_name":"DEZHOU RUIKANG FOOD CO., LTD.","amuco_products_name":"ONION POWDER MESH 80-100","amuco_unit_types_name":"MT","amuco_contacts_name":null,"amuco_packing_name":null,"amuco_material_name":null}'),
	(446, 1, 446, 1, '{"product_id":"2","customer_request_id":"22","quantity":"20","unit":"1","status":"New","fcl":"1","fcl_option":"20","type_fcl":"","weight":"","unit_pack":"","packing":"","material":"","specific_remarks":"","pallets":null,"supplier":null,"contacts":"","purchasing":"1","ETD":"2020-09-04","ETA":"2020-09-04","date_created":"2020-08-26 13:54:19","id":76}', NULL, NULL),
	(447, 1, 447, 1, '{"date_updated":"2020-08-26 13:54:38","status":"Requested","id":"22"}', 1, '{"id":"22","date_created":"2020-08-25 15:16:46","date_updated":"2020-08-26 13:51:05","status":"Requested","customer":"7","sales_agent":"3","contact":"2","destination_port":"7","incoterm":"1","remarks":"","quantity":null,"combinate_container":"1","RSD":null}'),
	(448, 1, 448, 1, '{"date_updated":"2020-08-26 13:54:38","status":"Requested","id":"76"}', 1, '{"id":"76","product_id":"2","customer_request_id":"22","quantity":"20","unit":"1","status":"New","specific_remarks":"","fcl":"1","fcl_option":"20","type_fcl":"","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":null,"purchasing":"1","contacts":"","ETD":"2020-09-04 00:00:00","date_created":"2020-08-26 13:54:19","date_updated":null,"ETA":"2020-09-04 00:00:00","purchasing_username":"oscar","amuco_suppliers_name":null,"amuco_products_name":"CITRIC ACID ANHYDROUS MESH 30-100","amuco_unit_types_name":"MT","amuco_contacts_name":null,"amuco_packing_name":null,"amuco_material_name":null}'),
	(449, 1, 449, 1, '{"type_contact":"Customer","first_name":"Pedro","last_name":"Perez","name":"Pedro Perez","position":"","department":"","mobile_phone":"4565465465","office_phone":"","personal_phone":"","fax":"","email":"pp@yopmail.com","skype":"","customer_id":"6","supplier_id":null,"picture":"","home_address":"","country":"2","city":"","home_phone":"","birthday":"2020-10-27","additional_information":"","date_created":"2020-08-27 09:57:48","id":8}', NULL, NULL),
	(450, 1, 450, 1, '{"RSD":null,"date_updated":"2020-08-27 09:57:54","status":"New","customer":"6","sales_agent":"3","contact":"8","destination_port":"3","combinate_container":"1","incoterm":"2","remarks":"Request 1","id":"21"}', 1, '{"id":"21","date_created":"2020-08-18 13:52:08","date_updated":null,"status":"New","customer":"9","sales_agent":"3","contact":"5","destination_port":"3","incoterm":"2","remarks":"Request 1","quantity":null,"combinate_container":"1","RSD":null}'),
	(451, 1, 451, 1, '{"type_contact":"Supplier","first_name":"Ronaldo","last_name":"De lima","name":"Ronaldo De lima","position":"","department":"","mobile_phone":"5465465","office_phone":"","personal_phone":"","fax":"","email":"rn@yopmail.com","skype":"","customer_id":null,"supplier_id":"5","picture":"","home_address":"","country":"33","city":"","home_phone":"","birthday":"","additional_information":"","date_created":"2020-08-27 09:59:22","id":9}', NULL, NULL),
	(452, 1, 452, 1, '{"product_id":"5","customer_request_id":"21","quantity":"10","unit":"1","status":"New","fcl":"4","fcl_option":"20","type_fcl":"","weight":"","unit_pack":"","packing":"","material":"","specific_remarks":"","pallets":null,"supplier":"5","contacts":"9","purchasing":null,"ETD":"","ETA":"","date_created":"2020-08-27 09:59:32","id":77}', NULL, NULL),
	(453, 1, 453, 1, '{"ETD":"2020-08-27","product_id":"5","quantity":"10","unit":"1","fcl":"4","fcl_option":"20","type_fcl":"","weight":"","shape":"","material":"","pallets":null,"price_fob":"3000","total_freight":"1000","total_price":"3100","comission_supplier":null,"shipping_port":"2","supplier_incoterm":"2","supplier":null,"brand":"brand","payment_terms":"1","comments":"","analysis_standard":"adasd","valid_until":"2020-08-27","purchasing":null,"supplier_direct":"5","status":"Pending","customer_request_id":"21","incoterm_price":"2","details_customer_request_id":"77","manufacturer":"5","id":23}', NULL, NULL),
	(454, 1, 454, 1, '{"status":"Offer Received","id":"77"}', 1, '{"id":"77","product_id":"5","customer_request_id":"21","quantity":"10","unit":"1","status":"New","specific_remarks":"","fcl":"4","fcl_option":"20","type_fcl":"","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":"5","purchasing":null,"contacts":"9","ETD":"0000-00-00 00:00:00","date_created":"2020-08-27 09:59:32","date_updated":null,"ETA":"0000-00-00 00:00:00"}'),
	(455, 1, 455, 1, '{"id":"70","product_id":"2","customer_request_id":"21","quantity":"15","unit":"1","status":"Offer Received","specific_remarks":"Request 1","fcl":"4","fcl_option":null,"type_fcl":"Standard","weight":"3","packing":"25","material":"26","pallets":"1","unit_pack":"1","supplier":null,"purchasing":"7","contacts":"","ETD":"2021-06-19 00:00:00","date_created":"2020-08-18 13:53:15","date_updated":null,"ETA":"2021-06-19 00:00:00"}', NULL, NULL),
	(456, 1, 456, 1, '{"ETD":"2020-09-04","product_id":"2","quantity":"20","unit":"1","fcl":"1","fcl_option":"20","type_fcl":"","weight":"25","shape":"11","material":"23","pallets":"","price_fob":"600","total_freight":"2000","total_price":"700","comission_supplier":null,"shipping_port":"1","supplier_incoterm":"1","supplier":"5","brand":"Ensign","payment_terms":"12","comments":"laura y elisa probando","analysis_standard":"BP","valid_until":"2020-09-07","purchasing":null,"supplier_direct":null,"status":"Pending","customer_request_id":"22","incoterm_price":"1","details_customer_request_id":"76","manufacturer":"6","id":24}', NULL, NULL),
	(457, 1, 457, 1, '{"status":"Offer Received","id":"76"}', 1, '{"id":"76","product_id":"2","customer_request_id":"22","quantity":"20","unit":"1","status":"Requested","specific_remarks":"","fcl":"1","fcl_option":"20","type_fcl":"","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":null,"purchasing":"1","contacts":"","ETD":"2020-09-04 00:00:00","date_created":"2020-08-26 13:54:19","date_updated":"2020-08-26 13:54:38","ETA":"2020-09-04 00:00:00"}'),
	(458, 1, 458, 1, '{"ETD":"2020-09-04","product_id":"3","quantity":"15","unit":"1","fcl":"1","fcl_option":"20","type_fcl":"","weight":"25","shape":"11","material":"25","pallets":"","price_fob":"620","total_freight":"2000","total_price":"753.33","comission_supplier":null,"shipping_port":"2","supplier_incoterm":"1","supplier":null,"brand":"","payment_terms":"1","comments":"preuba dos","analysis_standard":"BP","valid_until":"2020-08-27","purchasing":null,"supplier_direct":"8","status":"Pending","customer_request_id":"22","incoterm_price":"1","details_customer_request_id":"74","manufacturer":"","id":25}', NULL, NULL),
	(459, 1, 459, 1, '{"status":"Offer Received","id":"74"}', 1, '{"id":"74","product_id":"3","customer_request_id":"22","quantity":"15","unit":"1","status":"Requested","specific_remarks":"","fcl":"1","fcl_option":null,"type_fcl":"","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":"8","purchasing":null,"contacts":"","ETD":"2020-09-04 00:00:00","date_created":"2020-08-26 13:50:18","date_updated":"2020-08-26 13:51:05","ETA":"0000-00-00 00:00:00"}'),
	(460, 1, 460, 1, '{"product_id":"5","customer_request_id":"23","quantity":"155","unit":"1","status":"New","fcl":"3","weight":"3","packing":"7","material":"10","specific_remarks":"prueba 3","fcl_option":null,"type_fcl":"HCube","pallets":"1","unit_pack":"1","supplier":"6","purchasing":"","contacts":"7","ETD":"2020-08-25","ETA":"2020-08-26","date_created":null,"date_updated":null,"id":"72"}', 1, '{"id":"72","product_id":"5","customer_request_id":"23","quantity":"150","unit":"1","status":"New","specific_remarks":"prueba 3","fcl":"3","fcl_option":null,"type_fcl":"HCube","weight":"3","packing":"7","material":"10","pallets":"1","unit_pack":"1","supplier":"6","purchasing":null,"contacts":"7","ETD":"2020-08-25 00:00:00","date_created":"2020-08-26 10:22:16","date_updated":null,"ETA":"2020-08-26 00:00:00"}'),
	(461, 1, 461, 1, '{"product_id":"5","customer_request_id":"23","quantity":"155","unit":"1","status":"New","fcl":"3","weight":"3","packing":"7","material":"10","specific_remarks":"prueba 3","fcl_option":"20","type_fcl":"HCube","pallets":"1","unit_pack":"1","supplier":"6","purchasing":"","contacts":"7","ETD":"2020-08-25","ETA":"2020-08-26","date_created":null,"date_updated":null,"id":"72"}', 1, '{"id":"72","product_id":"5","customer_request_id":"23","quantity":"155","unit":"1","status":"New","specific_remarks":"prueba 3","fcl":"3","fcl_option":null,"type_fcl":"HCube","weight":"3","packing":"7","material":"10","pallets":"1","unit_pack":"1","supplier":"6","purchasing":"0","contacts":"7","ETD":"2020-08-25 00:00:00","date_created":"0000-00-00 00:00:00","date_updated":null,"ETA":"2020-08-26 00:00:00"}'),
	(462, 1, 462, 1, '{"date_updated":"2020-09-01 10:34:46","status":"Requested","id":"23"}', 1, '{"id":"23","date_created":"2020-08-26 10:21:02","date_updated":null,"status":"New","customer":"9","sales_agent":"3","contact":"5","destination_port":"8","incoterm":"8","remarks":"prueba 3","quantity":null,"combinate_container":"1","RSD":null}'),
	(463, 1, 463, 1, '{"date_updated":"2020-09-01 10:34:46","status":"Requested","id":"72"}', 1, '{"id":"72","product_id":"5","customer_request_id":"23","quantity":"155","unit":"1","status":"New","specific_remarks":"prueba 3","fcl":"3","fcl_option":"20","type_fcl":"HCube","weight":"3","packing":"7","material":"10","pallets":"1","unit_pack":"1","supplier":"6","purchasing":"0","contacts":"7","ETD":"2020-08-25 00:00:00","date_created":"0000-00-00 00:00:00","date_updated":null,"ETA":"2020-08-26 00:00:00","purchasing_username":null,"amuco_suppliers_name":"WEIFANG ENSIGN INDUSTRY CO., LTD.","amuco_products_name":"Soy protein isolated 90% min non functional instant type 200-88","amuco_unit_types_name":"MT","amuco_contacts_name":"Jose Perez","amuco_packing_name":"Amucool Can","amuco_material_name":"Carton"}'),
	(464, 1, 464, 1, '{"date_updated":"2020-09-01 10:34:46","status":"Requested","id":"71"}', 1, '{"id":"71","product_id":"5","customer_request_id":"23","quantity":"150","unit":"1","status":"New","specific_remarks":"prueba 3","fcl":"3","fcl_option":null,"type_fcl":"HCube","weight":"3","packing":"7","material":"10","pallets":"1","unit_pack":"1","supplier":"5","purchasing":null,"contacts":"","ETD":"2020-08-25 00:00:00","date_created":"2020-08-26 10:22:16","date_updated":null,"ETA":"2020-08-26 00:00:00","purchasing_username":null,"amuco_suppliers_name":"Supplier second","amuco_products_name":"Soy protein isolated 90% min non functional instant type 200-88","amuco_unit_types_name":"MT","amuco_contacts_name":null,"amuco_packing_name":"Amucool Can","amuco_material_name":"Carton"}'),
	(465, 1, 465, 1, '{"date_created":"2020-09-07 15:18:54","RSD":null,"status":"New","customer":"6","sales_agent":"3","contact":"8","destination_port":"2","incoterm":"1","combinate_container":"1","remarks":"dasdada","id":24}', NULL, NULL),
	(466, 1, 466, 1, '{"product_id":"2","customer_request_id":"24","quantity":"10","unit":"1","status":"New","fcl":"4","fcl_option":"20","type_fcl":"","weight":"3","unit_pack":"1","packing":"22","material":"26","specific_remarks":"sadda","pallets":"1","supplier":"6","contacts":"7","purchasing":null,"ETD":"2020-09-07","ETA":"2020-09-08","date_created":"2020-09-07 15:21:31","id":78}', NULL, NULL),
	(467, 1, 467, 1, '{"product_id":"2","customer_request_id":"24","quantity":"10","unit":"1","status":"New","fcl":"4","fcl_option":"20","type_fcl":"","weight":"3","unit_pack":"1","packing":"22","material":"26","specific_remarks":"sadda","pallets":"1","supplier":"7","contacts":"","purchasing":null,"ETD":"2020-09-07","ETA":"2020-09-08","date_created":"2020-09-07 15:21:32","id":79}', NULL, NULL),
	(468, 1, 468, 1, '{"product_id":"2","customer_request_id":"24","quantity":"10","unit":"1","status":"New","fcl":"4","fcl_option":"20","type_fcl":"","weight":"3","unit_pack":"1","packing":"22","material":"26","specific_remarks":"sadda","pallets":"1","supplier":null,"contacts":"","purchasing":"5","ETD":"2020-09-07","ETA":"2020-09-07","date_created":"2020-09-07 15:21:32","id":80}', NULL, NULL),
	(469, 1, 469, 1, '{"product_id":"2","customer_request_id":"24","quantity":"10","unit":"1","status":"New","fcl":"4","fcl_option":"20","type_fcl":"","weight":"3","unit_pack":"1","packing":"22","material":"26","specific_remarks":"sadda","pallets":"1","supplier":null,"contacts":"","purchasing":"6","ETD":"2020-09-07","ETA":"2020-09-07","date_created":"2020-09-07 15:21:32","id":82}', NULL, NULL),
	(470, 1, 470, 1, '{"product_id":"2","customer_request_id":"24","quantity":"10","unit":"1","status":"New","fcl":"4","fcl_option":"20","type_fcl":"","weight":"3","unit_pack":"1","packing":"22","material":"26","specific_remarks":"sadda","pallets":"1","supplier":null,"contacts":"","purchasing":"6","ETD":"2020-09-07","ETA":"2020-09-07","date_created":"2020-09-07 15:21:32","id":84}', NULL, NULL),
	(471, 1, 471, 1, '{"ETD":"2020-09-07","product_id":"2","quantity":"10","unit":"1","fcl":"4","fcl_option":"20","type_fcl":"","weight":"3","shape":"22","material":"26","pallets":"1","price_fob":"1000","total_freight":"1000","total_price":"1100","comission_supplier":null,"shipping_port":"4","supplier_incoterm":"3","supplier":"5","brand":"brand","payment_terms":"19","comments":"","analysis_standard":"","valid_until":"2020-09-07","purchasing":"6","supplier_direct":null,"status":"Pending","customer_request_id":"24","incoterm_price":"1","details_customer_request_id":"84","manufacturer":"5","id":26}', NULL, NULL),
	(472, 1, 472, 1, '{"status":"Offer Received","id":"84"}', 1, '{"id":"84","product_id":"2","customer_request_id":"24","quantity":"10","unit":"1","status":"New","specific_remarks":"sadda","fcl":"4","fcl_option":"20","type_fcl":"","weight":"3","packing":"22","material":"26","pallets":"1","unit_pack":"1","supplier":null,"purchasing":"6","contacts":"","ETD":"2020-09-07 00:00:00","date_created":"2020-09-07 15:21:32","date_updated":null,"ETA":"2020-09-07 00:00:00"}'),
	(473, 1, 473, 1, '{"type_visit":"Personal","type_client":"Customer","user_id":"3","customer_id":"9","supplier_id":"","date_visit":"2020-07-15","contact_name":"5","subject":"Visita 2","notes":"Estas es nueva<br \\/>\\r\\nx<br \\/>\\r\\nx<br \\/>\\r\\nx<br \\/>\\r\\nx<br \\/>\\r\\nx<br \\/>\\r\\nx<br \\/>\\r\\nx<br \\/>\\r\\nx<br \\/>\\r\\nx<br \\/>\\r\\nx<br \\/>\\r\\n&nbsp;","id":"18"}', 1, '{"id":"18","date_created":"0000-00-00 00:00:00","date_updated":"0000-00-00 00:00:00","user_id":"3","customer_id":"9","supplier_id":"0","date_visit":"2020-07-15 00:00:00","contact_name":"5","notes":"Estas es nueva","subject":"Visita 2","type_client":"Customer","type_visit":"Personal"}'),
	(474, 1, 474, 1, '{"date_created":"2020-09-08 12:20:33","RSD":null,"status":"New","customer":"9","sales_agent":"8","contact":"5","destination_port":"4","incoterm":"2","combinate_container":"0","remarks":"","id":25}', NULL, NULL),
	(475, 1, 475, 1, '{"customer_request_id":"24","request_details_id":"84","request_details_price_id":"26","payments_terms_id":"19","quantity":"10","unit":"MT","freight":"1000.00","unit_price":"1000.00","incoterm":"1","destination_port":"0","shipping_port":"4","packing":"22","material":"26","fcl":"4","type_fcl":"","option_fcl":"20","weight":"3","unit_pack":"MT","date_created":"2020-09-08 12:44:59","id":14}', NULL, NULL),
	(476, 1, 476, 1, '{"customer_request_id":"24","request_details_id":"84","request_details_price_id":"26","payments_terms_id":"19","quantity":"10","unit":"MT","freight":"1000.00","unit_price":"1000.00","incoterm":"1","destination_port":"0","shipping_port":"4","packing":"22","material":"26","fcl":"4","type_fcl":"","option_fcl":"20","weight":"3","unit_pack":"MT","date_created":"2020-09-08 12:44:59","id":15}', NULL, NULL),
	(477, 1, 477, 1, '{"date_created":"2020-09-09 09:38:55","RSD":null,"status":"New","customer":"7","sales_agent":"3","contact":"2","destination_port":"5","incoterm":"3","combinate_container":"1","remarks":"Cualquier cosa","id":26}', NULL, NULL),
	(478, 1, 478, 1, '{"RSD":null,"date_updated":"2020-09-09 09:39:18","status":"New","customer":"7","sales_agent":"3","contact":"2","destination_port":"5","combinate_container":"1","incoterm":"3","remarks":"Cualquier cosa s","id":"26"}', 1, '{"id":"26","date_created":"2020-09-09 09:38:55","date_updated":null,"status":"New","customer":"7","sales_agent":"3","contact":"2","destination_port":"5","incoterm":"3","remarks":"Cualquier cosa","quantity":null,"combinate_container":"1","RSD":null}'),
	(479, 1, 479, 1, '{"product_id":"2","customer_request_id":"26","quantity":"100","unit":"1","status":"New","fcl":"4","fcl_option":"20","type_fcl":"HCube","weight":"20","unit_pack":"2","packing":"10","material":"12","specific_remarks":"Cualquier cosa","pallets":"1","supplier":"6","contacts":"7","purchasing":null,"ETD":"2020-10-09","ETA":"2020-09-10","date_created":"2020-09-09 09:40:18","id":85}', NULL, NULL),
	(480, 1, 480, 1, '{"product_id":"2","customer_request_id":"26","quantity":"100","unit":"1","status":"New","fcl":"4","fcl_option":"20","type_fcl":"HCube","weight":"20","unit_pack":"2","packing":"10","material":"12","specific_remarks":"Cualquier cosa","pallets":"1","supplier":null,"contacts":"","purchasing":"3","ETD":"2020-10-09","ETA":"2020-10-09","date_created":"2020-09-09 09:40:19","id":86}', NULL, NULL),
	(481, 1, 481, 1, '{"date_updated":"2020-09-09 09:40:49","status":"Requested","id":"26"}', 1, '{"id":"26","date_created":"2020-09-09 09:38:55","date_updated":"2020-09-09 09:39:18","status":"New","customer":"7","sales_agent":"3","contact":"2","destination_port":"5","incoterm":"3","remarks":"Cualquier cosa s","quantity":null,"combinate_container":"1","RSD":null}'),
	(482, 1, 482, 1, '{"date_updated":"2020-09-09 09:40:49","status":"Requested","id":"86"}', 1, '{"id":"86","product_id":"2","customer_request_id":"26","quantity":"100","unit":"1","status":"New","specific_remarks":"Cualquier cosa","fcl":"4","fcl_option":"20","type_fcl":"HCube","weight":"20","packing":"10","material":"12","pallets":"1","unit_pack":"2","supplier":null,"purchasing":"3","contacts":"","ETD":"2020-10-09 00:00:00","date_created":"2020-09-09 09:40:19","date_updated":null,"ETA":"2020-10-09 00:00:00","purchasing_username":"seller1","amuco_suppliers_name":null,"amuco_products_name":"CITRIC ACID ANHYDROUS MESH 30-100","amuco_unit_types_name":"MT","amuco_contacts_name":null,"amuco_packing_name":"Amusoy Bag","amuco_material_name":"Fibre"}'),
	(483, 1, 483, 1, '{"date_updated":"2020-09-09 09:40:49","status":"Requested","id":"85"}', 1, '{"id":"85","product_id":"2","customer_request_id":"26","quantity":"100","unit":"1","status":"New","specific_remarks":"Cualquier cosa","fcl":"4","fcl_option":"20","type_fcl":"HCube","weight":"20","packing":"10","material":"12","pallets":"1","unit_pack":"2","supplier":"6","purchasing":null,"contacts":"7","ETD":"2020-10-09 00:00:00","date_created":"2020-09-09 09:40:18","date_updated":null,"ETA":"2020-09-10 00:00:00","purchasing_username":null,"amuco_suppliers_name":"WEIFANG ENSIGN INDUSTRY CO., LTD.","amuco_products_name":"CITRIC ACID ANHYDROUS MESH 30-100","amuco_unit_types_name":"MT","amuco_contacts_name":"Jose Perez","amuco_packing_name":"Amusoy Bag","amuco_material_name":"Fibre"}'),
	(484, 1, 484, 1, '{"ETD":"2020-09-09","product_id":"2","quantity":"100","unit":"1","fcl":"4","fcl_option":"20","type_fcl":"HCube","weight":"20","shape":"10","material":"12","pallets":"1","price_fob":"1000","total_freight":"1000","total_price":"1010","comission_supplier":null,"shipping_port":"3","supplier_incoterm":"2","supplier":"6","brand":"brand","payment_terms":"18","comments":"Cualquier cosa","analysis_standard":"analysis","valid_until":"2020-09-09","purchasing":"3","supplier_direct":null,"status":"Pending","customer_request_id":"26","incoterm_price":"3","details_customer_request_id":"86","manufacturer":"5","destination_port":"5","id":27}', NULL, NULL),
	(485, 1, 485, 1, '{"status":"Offer Received","id":"86"}', 1, '{"id":"86","product_id":"2","customer_request_id":"26","quantity":"100","unit":"1","status":"Requested","specific_remarks":"Cualquier cosa","fcl":"4","fcl_option":"20","type_fcl":"HCube","weight":"20","packing":"10","material":"12","pallets":"1","unit_pack":"2","supplier":null,"purchasing":"3","contacts":"","ETD":"2020-10-09 00:00:00","date_created":"2020-09-09 09:40:19","date_updated":"2020-09-09 09:40:49","ETA":"2020-10-09 00:00:00"}'),
	(486, 1, 486, 1, '{"customer_request_id":"26","request_details_id":"86","request_details_price_id":"27","payments_terms_id":"18","quantity":"100","unit":"MT","freight":"1000.00","unit_price":"1000.00","incoterm":"3","destination_port":"5","shipping_port":"3","packing":"10","material":"12","fcl":"4","type_fcl":"HCube","option_fcl":"20","weight":"20","unit_pack":"MT","date_created":"2020-09-09 09:42:23","id":16}', NULL, NULL),
	(487, 1, 487, 1, '{"customer_request_id":"26","request_details_id":"86","request_details_price_id":"27","payments_terms_id":"18","quantity":"100","unit":"MT","freight":"1000.00","unit_price":"1000.00","incoterm":"3","destination_port":"5","shipping_port":"3","packing":"10","material":"12","fcl":"4","type_fcl":"HCube","option_fcl":"20","weight":"20","unit_pack":"MT","date_created":"2020-09-09 09:42:23","id":17}', NULL, NULL),
	(488, 1, 488, 1, '{"product_id":"5","customer_request_id":"25","quantity":"20","unit":"1","status":"New","fcl":"1","fcl_option":"20","type_fcl":"","weight":"","unit_pack":"","packing":"","material":"","specific_remarks":"","pallets":null,"supplier":"5","contacts":"","purchasing":null,"ETD":"","ETA":"2020-12-09","date_created":"2020-09-09 10:50:53","id":87}', NULL, NULL),
	(489, 1, 489, 1, '{"ETD":"2020-09-09","product_id":"5","quantity":"20","unit":"1","fcl":"1","fcl_option":"20","type_fcl":"","weight":"","shape":"","material":"","pallets":null,"price_fob":"700","total_freight":"","total_price":"700","comission_supplier":null,"shipping_port":"","supplier_incoterm":"1","supplier":null,"brand":"","payment_terms":"","comments":"","analysis_standard":"","valid_until":"2020-09-09","purchasing":null,"supplier_direct":"5","status":"Pending","customer_request_id":"25","incoterm_price":"2","details_customer_request_id":"87","manufacturer":"","destination_port":"4","id":28}', NULL, NULL),
	(490, 1, 490, 1, '{"status":"Offer Received","id":"87"}', 1, '{"id":"87","product_id":"5","customer_request_id":"25","quantity":"20","unit":"1","status":"New","specific_remarks":"","fcl":"1","fcl_option":"20","type_fcl":"","weight":"","packing":"","material":"","pallets":null,"unit_pack":"0","supplier":"5","purchasing":null,"contacts":"","ETD":"0000-00-00 00:00:00","date_created":"2020-09-09 10:50:53","date_updated":null,"ETA":"2020-12-09 00:00:00"}'),
	(491, 1, 491, 1, '{"product_id":"2","customer_request_id":"24","quantity":"10","unit":"1","status":"New","fcl":"4","weight":"3","packing":"9","material":"26","specific_remarks":"sadda","fcl_option":"20","type_fcl":"","pallets":"1","unit_pack":"1","supplier":"","purchasing":"6","contacts":"","ETD":"2020-09-07","ETA":"2020-09-07","date_created":null,"date_updated":null,"id":"84"}', 1, '{"id":"84","product_id":"2","customer_request_id":"24","quantity":"10","unit":"1","status":"Offer Received","specific_remarks":"sadda","fcl":"4","fcl_option":"20","type_fcl":"","weight":"3","packing":"22","material":"26","pallets":"1","unit_pack":"1","supplier":null,"purchasing":"6","contacts":"","ETD":"2020-09-07 00:00:00","date_created":"2020-09-07 15:21:32","date_updated":null,"ETA":"2020-09-07 00:00:00"}'),
	(492, 1, 492, 1, '{"ETD":"2020-09-09","product_id":"2","quantity":"10","unit":"1","fcl":"4","fcl_option":"20","type_fcl":"","weight":"3","shape":"9","material":"26","pallets":"1","price_fob":"700","total_freight":"1000","total_price":"800","comission_supplier":null,"shipping_port":"","supplier_incoterm":"2","supplier":"5","brand":"","payment_terms":"","comments":"","analysis_standard":"","valid_until":"2020-09-09","purchasing":"6","supplier_direct":null,"status":"Pending","customer_request_id":"24","incoterm_price":"1","details_customer_request_id":"84","manufacturer":"","destination_port":"2","id":29}', NULL, NULL),
	(493, 1, 493, 1, '{"status":"Offer Received","id":"84"}', 1, '{"id":"84","product_id":"2","customer_request_id":"24","quantity":"10","unit":"1","status":"New","specific_remarks":"sadda","fcl":"4","fcl_option":"20","type_fcl":"","weight":"3","packing":"9","material":"26","pallets":"1","unit_pack":"1","supplier":"0","purchasing":"6","contacts":"","ETD":"2020-09-07 00:00:00","date_created":"0000-00-00 00:00:00","date_updated":null,"ETA":"2020-09-07 00:00:00"}'),
	(494, 1, 494, 1, '{"product_id":"2","customer_request_id":"24","quantity":"10","unit":"1","status":"New","fcl":"4","weight":"3","packing":"15","material":"26","specific_remarks":"sadda","fcl_option":"20","type_fcl":"","pallets":"1","unit_pack":"1","supplier":"","purchasing":"6","contacts":"","ETD":"2020-09-07","ETA":"2020-09-07","date_created":null,"date_updated":null,"id":"84"}', 1, '{"id":"84","product_id":"2","customer_request_id":"24","quantity":"10","unit":"1","status":"Offer Received","specific_remarks":"sadda","fcl":"4","fcl_option":"20","type_fcl":"","weight":"3","packing":"9","material":"26","pallets":"1","unit_pack":"1","supplier":"0","purchasing":"6","contacts":"","ETD":"2020-09-07 00:00:00","date_created":"0000-00-00 00:00:00","date_updated":null,"ETA":"2020-09-07 00:00:00"}'),
	(495, 1, 495, 1, '{"ETD":"2020-09-09","product_id":"2","quantity":"10","unit":"1","fcl":"4","fcl_option":"20","type_fcl":"","weight":"3","shape":"15","material":"26","pallets":"1","price_fob":"3000","total_freight":"250","total_price":"3025","comission_supplier":null,"shipping_port":"1","supplier_incoterm":"4","supplier":"6","brand":"","payment_terms":"","comments":"","analysis_standard":"","valid_until":"2020-09-09","purchasing":"6","supplier_direct":null,"status":"Pending","customer_request_id":"24","incoterm_price":"1","details_customer_request_id":"84","manufacturer":"","destination_port":"2","id":30}', NULL, NULL),
	(496, 1, 496, 1, '{"status":"Offer Received","id":"84"}', 1, '{"id":"84","product_id":"2","customer_request_id":"24","quantity":"10","unit":"1","status":"New","specific_remarks":"sadda","fcl":"4","fcl_option":"20","type_fcl":"","weight":"3","packing":"15","material":"26","pallets":"1","unit_pack":"1","supplier":"0","purchasing":"6","contacts":"","ETD":"2020-09-07 00:00:00","date_created":"0000-00-00 00:00:00","date_updated":null,"ETA":"2020-09-07 00:00:00"}'),
	(497, 1, 497, 1, '{"product_id":"2","customer_request_id":"24","quantity":"10","unit":"1","status":"New","fcl":"4","weight":"3","packing":"16","material":"26","specific_remarks":"sadda","fcl_option":"20","type_fcl":"","pallets":"1","unit_pack":"1","supplier":"","purchasing":"5","contacts":"","ETD":"2020-09-07","ETA":"2020-09-07","date_created":null,"date_updated":null,"id":"83"}', 1, '{"id":"83","product_id":"2","customer_request_id":"24","quantity":"10","unit":"1","status":"New","specific_remarks":"sadda","fcl":"4","fcl_option":"20","type_fcl":"","weight":"3","packing":"22","material":"26","pallets":"1","unit_pack":"1","supplier":null,"purchasing":"5","contacts":"","ETD":"2020-09-07 00:00:00","date_created":"2020-09-07 15:21:32","date_updated":null,"ETA":"2020-09-07 00:00:00"}'),
	(498, 1, 498, 1, '{"type_contact":"Customer","first_name":"Camila","last_name":"Pezo","name":"Camila Pezo","position":"Compras","department":"Compras","mobile_phone":"+511 93302276","office_phone":"","personal_phone":"","fax":"","email":"cpezo@frutarom.com","skype":"","customer_id":"8","supplier_id":null,"picture":"","home_address":"","country":"173","city":"","home_phone":"","birthday":"","additional_information":"","date_created":"2020-09-10 11:35:16","id":10}', NULL, NULL),
	(499, 1, 499, 1, '{"name":"Callao","description":"","country":"173","id":9}', NULL, NULL),
	(500, 1, 500, 1, '{"date_created":"2020-09-10 11:37:19","RSD":null,"status":"New","customer":"8","sales_agent":"5","contact":"10","destination_port":"9","incoterm":"1","combinate_container":"1","remarks":"","id":27}', NULL, NULL),
	(501, 1, 501, 1, '{"RSD":null,"date_updated":"2020-09-10 11:37:40","status":"New","customer":"8","sales_agent":"5","contact":"10","destination_port":"9","combinate_container":"1","incoterm":"1","remarks":"prueba final","id":"27"}', 1, '{"id":"27","date_created":"2020-09-10 11:37:19","date_updated":null,"status":"New","customer":"8","sales_agent":"5","contact":"10","destination_port":"9","incoterm":"1","remarks":"","quantity":null,"combinate_container":"1","RSD":null}'),
	(502, 1, 502, 1, '{"type_contact":"Supplier","first_name":"Manuel","last_name":"Garcia","name":"Manuel Garcia","position":"Commercial manager","department":"Ventas","mobile_phone":"+89 3458902","office_phone":"","personal_phone":"","fax":"","email":"manuelgarcia@yopmail.com","skype":"","customer_id":null,"supplier_id":"9","picture":"","home_address":"","country":"47","city":"","home_phone":"","birthday":"","additional_information":"","date_created":"2020-09-10 11:43:11","id":11}', NULL, NULL),
	(503, 1, 503, 1, '{"product_id":"3","customer_request_id":"27","quantity":"10","unit":"1","status":"New","fcl":"1","fcl_option":"20","type_fcl":"","weight":"25","unit_pack":"2","packing":"11","material":"26","specific_remarks":"","pallets":"1","supplier":null,"contacts":"","purchasing":"6","ETD":"","ETA":"","date_created":"2020-09-10 11:43:26","id":88}', NULL, NULL),
	(504, 1, 504, 1, '{"product_id":"3","customer_request_id":"27","quantity":"10","unit":"1","status":"New","fcl":"1","fcl_option":"20","type_fcl":"","weight":"25","unit_pack":"2","packing":"11","material":"26","specific_remarks":"","pallets":"1","supplier":"9","contacts":"11","purchasing":null,"ETD":"","ETA":"2020-10-01","date_created":"2020-09-10 11:43:26","id":89}', NULL, NULL),
	(505, 1, 505, 1, '{"date_updated":"2020-09-10 11:43:50","status":"Requested","id":"27"}', 1, '{"id":"27","date_created":"2020-09-10 11:37:19","date_updated":"2020-09-10 11:37:40","status":"New","customer":"8","sales_agent":"5","contact":"10","destination_port":"9","incoterm":"1","remarks":"prueba final","quantity":null,"combinate_container":"1","RSD":null}'),
	(506, 1, 506, 1, '{"date_updated":"2020-09-10 11:43:50","status":"Requested","id":"89"}', 1, '{"id":"89","product_id":"3","customer_request_id":"27","quantity":"10","unit":"1","status":"New","specific_remarks":"","fcl":"1","fcl_option":"20","type_fcl":"","weight":"25","packing":"11","material":"26","pallets":"1","unit_pack":"2","supplier":"9","purchasing":null,"contacts":"11","ETD":"0000-00-00 00:00:00","date_created":"2020-09-10 11:43:26","date_updated":null,"ETA":"2020-10-01 00:00:00","purchasing_username":null,"amuco_suppliers_name":"Liaocheng new era foods","amuco_products_name":"ONION POWDER MESH 80-100","amuco_unit_types_name":"MT","amuco_contacts_name":"Manuel Garcia","amuco_packing_name":"Bag","amuco_material_name":"PP"}'),
	(507, 1, 507, 1, '{"date_updated":"2020-09-10 11:43:50","status":"Requested","id":"88"}', 1, '{"id":"88","product_id":"3","customer_request_id":"27","quantity":"10","unit":"1","status":"New","specific_remarks":"","fcl":"1","fcl_option":"20","type_fcl":"","weight":"25","packing":"11","material":"26","pallets":"1","unit_pack":"2","supplier":null,"purchasing":"6","contacts":"","ETD":"0000-00-00 00:00:00","date_created":"2020-09-10 11:43:26","date_updated":null,"ETA":"0000-00-00 00:00:00","purchasing_username":"Laura","amuco_suppliers_name":null,"amuco_products_name":"ONION POWDER MESH 80-100","amuco_unit_types_name":"MT","amuco_contacts_name":null,"amuco_packing_name":"Bag","amuco_material_name":"PP"}'),
	(508, 1, 508, 1, '{"product_id":"2","customer_request_id":"27","quantity":"10","unit":"1","status":"New","fcl":"","fcl_option":null,"type_fcl":"","weight":"30","unit_pack":"2","packing":"20","material":"22","specific_remarks":"","pallets":null,"supplier":"6","contacts":"7","purchasing":null,"ETD":"","ETA":"2020-10-01","date_created":"2020-09-10 11:59:17","id":90}', NULL, NULL),
	(509, 1, 509, 1, '{"date_updated":"2020-09-10 11:59:26","status":"Requested","id":"27"}', 1, '{"id":"27","date_created":"2020-09-10 11:37:19","date_updated":"2020-09-10 11:43:50","status":"Requested","customer":"8","sales_agent":"5","contact":"10","destination_port":"9","incoterm":"1","remarks":"prueba final","quantity":null,"combinate_container":"1","RSD":null}'),
	(510, 1, 510, 1, '{"date_updated":"2020-09-10 11:59:27","status":"Requested","id":"90"}', 1, '{"id":"90","product_id":"2","customer_request_id":"27","quantity":"10","unit":"1","status":"New","specific_remarks":"","fcl":"0","fcl_option":null,"type_fcl":"","weight":"30","packing":"20","material":"22","pallets":null,"unit_pack":"2","supplier":"6","purchasing":null,"contacts":"7","ETD":"0000-00-00 00:00:00","date_created":"2020-09-10 11:59:17","date_updated":null,"ETA":"2020-10-01 00:00:00","purchasing_username":null,"amuco_suppliers_name":"WEIFANG ENSIGN INDUSTRY CO., LTD.","amuco_products_name":"CITRIC ACID ANHYDROUS MESH 30-100","amuco_unit_types_name":"MT","amuco_contacts_name":"Jose Perez","amuco_packing_name":"Drum","amuco_material_name":"Non-Galvanized Iron"}'),
	(511, 1, 511, 1, '{"name":"Onion powder mesh 80-100","custom_number":"XXX","custom_number_brazil":"","cas":"XXX","unit_id":"1","remarks":"This is a second product","active":"1","category_id":"10","industry_id":"Food","suppliers_id":"","purchasing_office":"5","id":"3"}', 1, '{"id":"3","date_created":"0000-00-00 00:00:00","date_updated":"0000-00-00 00:00:00","name":"ONION POWDER MESH 80-100","custom_number":"XXX","custom_number_brazil":"","cas":"XXX","unit_id":"1","remarks":"this is a second product","active":"1","category_id":"10","industry_id":"Food","suppliers_id":"9","purchasing_office":"6"}'),
	(512, 1, 512, 1, '{"ETD":"2020-09-25","product_id":"2","quantity":"10","unit":"1","fcl":"1","fcl_option":"20","type_fcl":"","weight":"30","shape":"20","material":"22","pallets":null,"price_fob":"1000","total_freight":"1000","total_price":"1100","comission_supplier":null,"shipping_port":"1","supplier_incoterm":"1","supplier":null,"brand":"Ensign","payment_terms":"12","comments":"prueba final","analysis_standard":"BP","valid_until":"2020-09-14","purchasing":null,"supplier_direct":"6","status":"Pending","customer_request_id":"27","incoterm_price":"1","details_customer_request_id":"90","manufacturer":"","destination_port":"9","id":31}', NULL, NULL),
	(513, 1, 513, 1, '{"status":"Offer Received","id":"90"}', 1, '{"id":"90","product_id":"2","customer_request_id":"27","quantity":"10","unit":"1","status":"Requested","specific_remarks":"","fcl":"0","fcl_option":null,"type_fcl":"","weight":"30","packing":"20","material":"22","pallets":null,"unit_pack":"2","supplier":"6","purchasing":null,"contacts":"7","ETD":"0000-00-00 00:00:00","date_created":"2020-09-10 11:59:17","date_updated":"2020-09-10 11:59:27","ETA":"2020-10-01 00:00:00"}'),
	(514, 1, 514, 1, '{"ETD":"2020-09-25","product_id":"3","quantity":"10","unit":"1","fcl":"1","fcl_option":"20","type_fcl":"","weight":"25","shape":"11","material":"26","pallets":"1","price_fob":"500","total_freight":"1000","total_price":"600","comission_supplier":null,"shipping_port":"1","supplier_incoterm":"1","supplier":null,"brand":"","payment_terms":"1","comments":"preuba 2","analysis_standard":"USP","valid_until":"2020-09-14","purchasing":null,"supplier_direct":"9","status":"Pending","customer_request_id":"27","incoterm_price":"1","details_customer_request_id":"89","manufacturer":"","destination_port":"9","id":32}', NULL, NULL),
	(515, 1, 515, 1, '{"status":"Offer Received","id":"89"}', 1, '{"id":"89","product_id":"3","customer_request_id":"27","quantity":"10","unit":"1","status":"Requested","specific_remarks":"","fcl":"1","fcl_option":"20","type_fcl":"","weight":"25","packing":"11","material":"26","pallets":"1","unit_pack":"2","supplier":"9","purchasing":null,"contacts":"11","ETD":"0000-00-00 00:00:00","date_created":"2020-09-10 11:43:26","date_updated":"2020-09-10 11:43:50","ETA":"2020-10-01 00:00:00"}'),
	(516, 1, 516, 1, '{"ETD":"2020-09-25","product_id":"3","quantity":"10","unit":"1","fcl":"1","fcl_option":"20","type_fcl":"","weight":"25","shape":"11","material":"26","pallets":"1","price_fob":"400","total_freight":"1000","total_price":"500","comission_supplier":null,"shipping_port":"1","supplier_incoterm":"1","supplier":"5","brand":"Ensign","payment_terms":"12","comments":"","analysis_standard":"USP","valid_until":"2020-09-14","purchasing":"6","supplier_direct":null,"status":"Pending","customer_request_id":"27","incoterm_price":"1","details_customer_request_id":"88","manufacturer":"6","destination_port":"9","id":33}', NULL, NULL),
	(517, 1, 517, 1, '{"status":"Offer Received","id":"88"}', 1, '{"id":"88","product_id":"3","customer_request_id":"27","quantity":"10","unit":"1","status":"Requested","specific_remarks":"","fcl":"1","fcl_option":"20","type_fcl":"","weight":"25","packing":"11","material":"26","pallets":"1","unit_pack":"2","supplier":null,"purchasing":"6","contacts":"","ETD":"0000-00-00 00:00:00","date_created":"2020-09-10 11:43:26","date_updated":"2020-09-10 11:43:50","ETA":"0000-00-00 00:00:00"}'),
	(518, 1, 518, 1, '{"customer_request_id":"27","request_details_id":"88","request_details_price_id":"33","payments_terms_id":"12","quantity":"10","unit":"MT","freight":"1000.00","unit_price":"400.00","incoterm":"1","destination_port":"9","shipping_port":"1","packing":"11","material":"26","fcl":"1","type_fcl":"","option_fcl":null,"weight":"25","unit_pack":"MT","date_created":"2020-09-10 13:01:35","offer_price_per_unit":"553.54","analysis_standard":"USP","pallets":"1","ETD":"2020-09-25","calculated_offer_price":"5535.35","price_increase":"6.00","sales_amount":"0.00","estimated_gross_profit":"332.12","estimated_comm":"0.00","rep_comm":"0.00","status":"New","id":16}', NULL, NULL),
	(519, 1, 519, 1, '{"customer_request_id":"27","request_details_id":"90","request_details_price_id":"31","payments_terms_id":"12","quantity":"10","unit":"MT","freight":"1000.00","unit_price":"1000.00","incoterm":"1","destination_port":"9","shipping_port":"1","packing":"20","material":"22","fcl":"1","type_fcl":"","option_fcl":null,"weight":"30","unit_pack":"MT","date_created":"2020-09-10 13:01:36","offer_price_per_unit":"1200.31","analysis_standard":"BP","pallets":"","ETD":"2020-09-25","calculated_offer_price":"12003.07","price_increase":"6.00","sales_amount":"0.00","estimated_gross_profit":"720.18","estimated_comm":"0.00","rep_comm":"0.00","status":"New","id":17}', NULL, NULL);
/*!40000 ALTER TABLE `mw_data_processing` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.mw_integrations_list
CREATE TABLE IF NOT EXISTS `mw_integrations_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `origin` varchar(31) NOT NULL,
  `destination` varchar(31) NOT NULL,
  `description` varchar(255) NOT NULL,
  `active` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.mw_integrations_list: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `mw_integrations_list` DISABLE KEYS */;
INSERT INTO `mw_integrations_list` (`id`, `origin`, `destination`, `description`, `active`) VALUES
	(1, 'System', 'System', 'Used for sytem logs', b'1');
/*!40000 ALTER TABLE `mw_integrations_list` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.mw_io_types
CREATE TABLE IF NOT EXISTS `mw_io_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(31) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.mw_io_types: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `mw_io_types` DISABLE KEYS */;
INSERT INTO `mw_io_types` (`id`, `type`) VALUES
	(1, 'JSON'),
	(2, 'TEXT'),
	(3, 'URL');
/*!40000 ALTER TABLE `mw_io_types` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.mw_logs
CREATE TABLE IF NOT EXISTS `mw_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `log_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `integration_id` int(11) NOT NULL DEFAULT 0,
  `log_type` int(11) NOT NULL DEFAULT 0,
  `description` text DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT 11,
  PRIMARY KEY (`id`),
  KEY `integration_id_log_type` (`integration_id`,`log_type`)
) ENGINE=InnoDB AUTO_INCREMENT=520 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.mw_logs: ~519 rows (aproximadamente)
/*!40000 ALTER TABLE `mw_logs` DISABLE KEYS */;
INSERT INTO `mw_logs` (`id`, `log_date`, `integration_id`, `log_type`, `description`, `user_id`) VALUES
	(1, '2020-06-02 02:35:49', 1, 1, 'Row # 5 added in table amuco_industry_type', 2),
	(2, '2020-06-02 02:36:09', 1, 1, 'Row # 6 added in table amuco_industry_type', 2),
	(3, '2020-06-02 02:36:29', 1, 1, 'Row # 7 added in table amuco_industry_type', 2),
	(4, '2020-06-02 02:37:13', 1, 1, 'Row # 8 added in table amuco_industry_type', 2),
	(5, '2020-06-02 02:37:59', 1, 1, 'Row # 3 added in table amuco_unit_types', 2),
	(6, '2020-06-02 02:38:24', 1, 1, 'Row # 4 added in table amuco_unit_types', 2),
	(7, '2020-06-02 02:41:59', 1, 1, 'Row # 13 added in table amuco_category_product', 2),
	(8, '2020-06-02 02:42:32', 1, 1, 'Row # 14 added in table amuco_category_product', 2),
	(9, '2020-06-02 02:42:58', 1, 1, 'Row # 15 added in table amuco_category_product', 2),
	(10, '2020-06-02 02:43:34', 1, 1, 'Row # 16 added in table amuco_category_product', 2),
	(11, '2020-06-02 02:44:26', 1, 1, 'Row # 2 added in table amuco_products', 2),
	(12, '2020-06-02 02:45:11', 1, 1, 'Row # 3 added in table amuco_products', 2),
	(13, '2020-06-03 19:46:58', 1, 1, 'Row # 5 added in table amuco_customers', 3),
	(14, '2020-06-03 19:51:53', 1, 1, 'Row # 8 updated in table amuco_credit_insurance', 2),
	(15, '2020-06-03 20:02:04', 1, 1, 'Row # 5 updated in table amuco_customers', 2),
	(16, '2020-06-03 20:02:20', 1, 1, 'Row # 5 deleted in table amuco_customers', 2),
	(17, '2020-06-03 20:03:00', 1, 1, 'Row # 8 updated in table amuco_credit_insurance', 2),
	(18, '2020-06-03 20:03:56', 1, 1, 'Row # 3 updated in table amuco_samples', 2),
	(19, '2020-06-03 20:04:09', 1, 1, 'Row # 3 deleted in table amuco_samples', 2),
	(20, '2020-06-03 20:04:53', 1, 1, 'Row # 8 updated in table amuco_contacts', 2),
	(21, '2020-06-03 20:05:10', 1, 1, 'Row # 7 deleted in table amuco_contacts', 2),
	(22, '2020-06-03 20:06:14', 1, 1, 'Row # 3 updated in table amuco_suppliers', 2),
	(23, '2020-06-03 20:06:26', 1, 1, 'Row # 1 deleted in table amuco_suppliers', 2),
	(24, '2020-06-03 20:08:21', 1, 1, 'Row # 1 updated in table amuco_products', 2),
	(25, '2020-06-03 20:09:09', 1, 1, 'Row # 4 updated in table amuco_industry_type', 2),
	(26, '2020-06-03 20:09:50', 1, 1, 'Row # 2 updated in table amuco_unit_types', 2),
	(27, '2020-06-03 20:13:22', 1, 1, 'Row # 4 deleted in table amuco_customers', 3),
	(28, '2020-06-03 20:13:25', 1, 1, 'Row # 3 deleted in table amuco_customers', 3),
	(29, '2020-06-03 20:13:28', 1, 1, 'Row # 2 deleted in table amuco_customers', 3),
	(30, '2020-06-03 20:13:30', 1, 1, 'Row # 1 deleted in table amuco_customers', 3),
	(31, '2020-06-03 20:13:57', 1, 1, 'Row # 8 deleted in table amuco_credit_insurance', 2),
	(32, '2020-06-03 20:14:11', 1, 1, 'Row # 7 deleted in table amuco_credit_insurance', 2),
	(33, '2020-06-03 20:14:24', 1, 1, 'Row # 2 deleted in table amuco_samples', 2),
	(34, '2020-06-03 20:14:33', 1, 1, 'Row # 1 deleted in table amuco_samples', 2),
	(35, '2020-06-03 20:15:04', 1, 1, 'Row # 4 deleted in table amuco_contacts', 2),
	(36, '2020-06-03 20:15:13', 1, 1, 'Row # 5 deleted in table amuco_contacts', 2),
	(37, '2020-06-03 20:15:28', 1, 1, 'Row # 8 deleted in table amuco_contacts', 2),
	(38, '2020-06-03 20:15:28', 1, 1, 'Row # 6 deleted in table amuco_contacts', 2),
	(39, '2020-06-03 20:15:55', 1, 1, 'Row # 3 deleted in table amuco_suppliers', 2),
	(40, '2020-06-03 20:16:06', 1, 1, 'Row # 2 deleted in table amuco_suppliers', 2),
	(41, '2020-06-03 20:25:50', 1, 1, 'Row # 6 added in table amuco_customers', 2),
	(42, '2020-06-03 20:27:13', 1, 1, 'Row # 9 added in table amuco_credit_insurance', 2),
	(43, '2020-06-03 20:45:32', 1, 1, 'Row # 4 added in table amuco_suppliers', 2),
	(44, '2020-06-03 20:53:05', 1, 1, 'Row # 4 added in table amuco_samples', 2),
	(45, '2020-06-11 18:23:33', 1, 1, 'Row # 2 added in table amuco_products', 2),
	(46, '2020-06-11 18:26:00', 1, 1, 'Row # 5 added in table amuco_suppliers', 2),
	(47, '2020-06-11 18:27:06', 1, 1, 'Row # 6 added in table amuco_suppliers', 2),
	(48, '2020-06-11 18:28:13', 1, 1, 'Row # 2 updated in table amuco_products', 2),
	(49, '2020-06-16 15:58:14', 1, 1, 'Row # 1 added in table amuco_incoterm', 2),
	(50, '2020-06-16 15:58:30', 1, 1, 'Row # 2 added in table amuco_incoterm', 2),
	(51, '2020-06-16 15:58:45', 1, 1, 'Row # 3 added in table amuco_incoterm', 2),
	(52, '2020-06-16 15:59:02', 1, 1, 'Row # 4 added in table amuco_incoterm', 2),
	(53, '2020-06-16 15:59:38', 1, 1, 'Row # 5 added in table amuco_incoterm', 2),
	(54, '2020-06-16 15:59:50', 1, 1, 'Row # 6 added in table amuco_incoterm', 2),
	(55, '2020-06-16 16:00:05', 1, 1, 'Row # 7 added in table amuco_incoterm', 2),
	(56, '2020-06-16 16:00:15', 1, 1, 'Row # 8 added in table amuco_incoterm', 2),
	(57, '2020-06-16 16:00:28', 1, 1, 'Row # 9 added in table amuco_incoterm', 2),
	(58, '2020-06-16 16:01:20', 1, 1, 'Row # 1 added in table amuco_destination_port', 2),
	(59, '2020-06-16 16:01:36', 1, 1, 'Row # 2 added in table amuco_destination_port', 2),
	(60, '2020-06-16 16:01:52', 1, 1, 'Row # 3 added in table amuco_destination_port', 2),
	(61, '2020-06-16 16:02:04', 1, 1, 'Row # 4 added in table amuco_destination_port', 2),
	(62, '2020-06-16 16:02:44', 1, 1, 'Row # 5 added in table amuco_destination_port', 2),
	(63, '2020-06-16 16:03:01', 1, 1, 'Row # 6 added in table amuco_destination_port', 2),
	(64, '2020-06-17 13:34:08', 1, 1, 'Row # 9 added in table amuco_contacts', 3),
	(65, '2020-06-17 13:37:25', 1, 1, 'Row # 8 added in table amuco_customer_request', 2),
	(66, '2020-06-17 13:37:59', 1, 1, 'Row # 3 added in table amuco_request_customers', 2),
	(67, '2020-06-19 15:09:28', 1, 1, 'Row # 3 added in table amuco_products', 2),
	(68, '2020-06-19 15:10:10', 1, 1, 'Row # 4 added in table amuco_products', 2),
	(69, '2020-06-19 15:11:15', 1, 1, 'Row # 6 added in table amuco_details_customers_request', 2),
	(70, '2020-06-19 15:11:43', 1, 1, 'Row # 7 added in table amuco_details_customers_request', 2),
	(71, '2020-06-19 15:11:56', 1, 1, 'Row # 4 added in table amuco_request_customers', 2),
	(72, '2020-06-19 15:17:17', 1, 1, 'Row # 8 deleted in table amuco_customer_request', 2),
	(73, '2020-06-19 15:19:07', 1, 1, 'Row # 4 deleted in table amuco_request_customers', 2),
	(74, '2020-06-19 15:19:19', 1, 1, 'Row # 3 deleted in table amuco_request_customers', 2),
	(75, '2020-06-19 15:43:48', 1, 1, 'Row # 4 updated in table amuco_suppliers', 2),
	(76, '2020-06-19 16:48:24', 1, 1, 'Row # 7 added in table amuco_suppliers', 5),
	(77, '2020-06-19 17:01:17', 1, 1, 'Row # 3 added in table amuco_unit_types', 5),
	(78, '2020-06-19 17:16:08', 1, 1, 'Row # 4 updated in table amuco_industry_type', 5),
	(79, '2020-06-19 17:17:25', 1, 1, 'Row # 5 added in table amuco_industry_type', 5),
	(80, '2020-06-22 14:28:45', 1, 1, 'Row # 12 deleted in table amuco_category_product', 2),
	(81, '2020-06-22 14:29:06', 1, 1, 'Row # 13 added in table amuco_category_product', 2),
	(82, '2020-06-24 15:11:22', 1, 1, 'Row # 4 added in table amuco_purchasing_office', 2),
	(83, '2020-06-24 15:11:57', 1, 1, 'Row # 4 deleted in table amuco_purchasing_office', 2),
	(84, '2020-06-24 15:12:10', 1, 1, 'Row # 5 added in table amuco_purchasing_office', 2),
	(85, '2020-06-24 15:12:26', 1, 1, 'Row # 6 added in table amuco_purchasing_office', 2),
	(86, '2020-06-24 15:12:45', 1, 1, 'Row # 7 added in table amuco_purchasing_office', 2),
	(87, '2020-06-24 15:14:52', 1, 1, 'Row # 4 deleted in table amuco_products', 2),
	(88, '2020-06-24 15:15:35', 1, 1, 'Row # 5 added in table amuco_products', 2),
	(89, '2020-06-26 14:11:06', 1, 1, 'Row # 6 updated in table amuco_customers', 5),
	(90, '2020-06-26 14:29:59', 1, 1, 'Row # 7 added in table amuco_customers', 5),
	(91, '2020-06-26 14:35:43', 1, 1, 'Row # 10 added in table amuco_credit_insurance', 5),
	(92, '2020-06-26 14:39:13', 1, 1, 'Row # 10 added in table amuco_contacts', 5),
	(93, '2020-06-26 14:41:14', 1, 1, 'Row # 11 added in table amuco_contacts', 5),
	(94, '2020-06-26 14:51:09', 1, 1, 'Row # 12 added in table amuco_contacts', 5),
	(95, '2020-06-26 15:00:26', 1, 1, 'Row # 7 updated in table amuco_customers', 5),
	(96, '2020-06-26 15:00:29', 1, 1, 'Row # 7 updated in table amuco_customers', 5),
	(97, '2020-06-26 15:00:51', 1, 1, 'Row # 7 updated in table amuco_customers', 5),
	(98, '2020-06-26 15:00:58', 1, 1, 'Row # 7 updated in table amuco_customers', 5),
	(99, '2020-06-30 13:16:51', 1, 1, 'Row # 6 updated in table amuco_destination_port', 2),
	(100, '2020-06-30 13:17:38', 1, 1, 'Row # 7 added in table amuco_destination_port', 2),
	(101, '2020-06-30 13:18:14', 1, 1, 'Row # 9 added in table amuco_customer_request', 2),
	(102, '2020-06-30 18:06:27', 1, 1, 'Row # 8 added in table amuco_customers', 5),
	(103, '2020-06-30 18:10:17', 1, 1, 'Row # 13 added in table amuco_contacts', 5),
	(104, '2020-06-30 18:11:09', 1, 1, 'Row # 12 updated in table amuco_contacts', 5),
	(105, '2020-06-30 18:12:51', 1, 1, 'Row # 11 updated in table amuco_contacts', 5),
	(106, '2020-06-30 18:13:11', 1, 1, 'Row # 10 updated in table amuco_contacts', 5),
	(107, '2020-06-30 18:13:31', 1, 1, 'Row # 9 updated in table amuco_contacts', 5),
	(108, '2020-07-01 15:28:38', 1, 1, 'Row # 7 updated in table amuco_customers', 5),
	(109, '2020-07-01 15:32:22', 1, 1, 'Row # 10 updated in table amuco_credit_insurance', 5),
	(110, '2020-07-01 15:50:42', 1, 1, 'Row # 9 added in table amuco_customers', 5),
	(111, '2020-07-01 16:03:11', 1, 1, 'Row # 14 added in table amuco_contacts', 5),
	(112, '2020-07-01 16:05:39', 1, 1, 'Row # 15 added in table amuco_contacts', 5),
	(113, '2020-07-01 16:12:22', 1, 1, 'Row # 11 added in table amuco_credit_insurance', 5),
	(114, '2020-07-02 19:46:43', 1, 1, 'Row # 8 added in table amuco_suppliers', 5),
	(115, '2020-07-02 20:28:37', 1, 1, 'Row # 9 added in table amuco_suppliers', 5),
	(116, '2020-07-03 17:25:24', 1, 1, 'Row # 1 added in table amuco_contacts', 2),
	(117, '2020-07-03 17:26:27', 1, 1, 'Row # 2 added in table amuco_contacts', 2),
	(118, '2020-07-07 16:14:26', 1, 1, 'Row # 5 added in table amuco_suppliers_bank', 2),
	(119, '2020-07-08 14:31:43', 1, 1, 'Row # 16 added in table amuco_visits', 6),
	(120, '2020-07-08 14:35:27', 1, 1, 'Row # 6 added in table amuco_suppliers_bank', 6),
	(121, '2020-07-08 14:37:00', 1, 1, 'Row # 16 updated in table amuco_visits', 6),
	(122, '2020-07-08 14:39:56', 1, 1, 'Row # 16 deleted in table amuco_visits', 6),
	(123, '2020-07-09 14:16:29', 1, 1, 'Row # 5 updated in table amuco_industry_type', 5),
	(124, '2020-07-09 14:39:03', 1, 1, 'Row # 6 updated in table amuco_customers', 5),
	(125, '2020-07-09 14:55:59', 1, 1, 'Row # 3 added in table amuco_contacts', 5),
	(126, '2020-07-09 20:09:36', 1, 1, 'Row # 14 added in table amuco_category_product', 6),
	(127, '2020-07-09 20:11:34', 1, 1, 'Row # 5 updated in table amuco_products', 6),
	(128, '2020-07-09 20:13:04', 1, 1, 'Row # 5 updated in table amuco_products', 6),
	(129, '2020-07-09 20:18:46', 1, 1, 'Row # 5 updated in table amuco_purchasing_office', 6),
	(130, '2020-07-09 20:19:00', 1, 1, 'Row # 6 updated in table amuco_purchasing_office', 6),
	(131, '2020-07-09 20:20:07', 1, 1, 'Row # 7 deleted in table amuco_purchasing_office', 6),
	(132, '2020-07-09 20:22:52', 1, 1, 'Row # 2 updated in table amuco_products', 6),
	(133, '2020-07-09 20:25:39', 1, 1, 'Row # 3 updated in table amuco_products', 6),
	(134, '2020-07-09 20:34:43', 1, 1, 'Row # 3 deleted in table amuco_unit_types', 6),
	(135, '2020-07-09 20:35:08', 1, 1, 'Row # 2 updated in table amuco_unit_types', 6),
	(136, '2020-07-09 20:35:24', 1, 1, 'Row # 1 updated in table amuco_unit_types', 6),
	(137, '2020-07-09 20:37:00', 1, 1, 'Row # 7 updated in table amuco_destination_port', 6),
	(138, '2020-07-09 20:45:01', 1, 1, 'Row # 10 updated in table amuco_credit_insurance', 6),
	(139, '2020-07-09 20:52:13', 1, 1, 'Row # 6 updated in table amuco_customers', 6),
	(140, '2020-07-09 20:54:16', 1, 1, 'Row # 6 updated in table amuco_customers', 6),
	(141, '2020-07-09 20:58:01', 1, 1, 'Row # 9 updated in table amuco_credit_insurance', 6),
	(142, '2020-07-09 21:01:40', 1, 1, 'Row # 6 added in table amuco_products', 6),
	(143, '2020-07-09 21:07:26', 1, 1, 'Row # 6 updated in table amuco_suppliers', 6),
	(144, '2020-07-09 21:07:54', 1, 1, 'Row # 6 updated in table amuco_suppliers', 6),
	(145, '2020-07-09 21:08:14', 1, 1, 'Row # 6 updated in table amuco_suppliers', 6),
	(146, '2020-07-10 13:33:57', 1, 1, 'Row # 2 updated in table amuco_contacts', 6),
	(147, '2020-07-10 13:38:19', 1, 1, 'Row # 3 updated in table amuco_contacts', 6),
	(148, '2020-07-10 14:24:02', 1, 1, 'Row # 3 updated in table amuco_contacts', 6),
	(149, '2020-07-13 12:20:56', 1, 1, 'Row # 1 deleted in table amuco_classification_suppliers', 2),
	(150, '2020-07-13 12:21:02', 1, 1, 'Row # 2 deleted in table amuco_classification_suppliers', 2),
	(151, '2020-07-13 12:21:07', 1, 1, 'Row # 3 deleted in table amuco_classification_suppliers', 2),
	(152, '2020-07-13 12:21:13', 1, 1, 'Row # 4 deleted in table amuco_classification_suppliers', 2),
	(153, '2020-07-13 12:21:34', 1, 1, 'Row # 6 updated in table amuco_classification_suppliers', 2),
	(154, '2020-07-13 12:21:59', 1, 1, 'Row # 5 updated in table amuco_classification_suppliers', 2),
	(155, '2020-07-13 12:22:29', 1, 1, 'Row # 9 updated in table amuco_suppliers', 2),
	(156, '2020-07-13 12:22:45', 1, 1, 'Row # 4 updated in table amuco_suppliers', 2),
	(157, '2020-07-13 12:22:57', 1, 1, 'Row # 5 updated in table amuco_suppliers', 2),
	(158, '2020-07-13 12:23:14', 1, 1, 'Row # 6 updated in table amuco_suppliers', 2),
	(159, '2020-07-13 12:23:30', 1, 1, 'Row # 7 updated in table amuco_suppliers', 2),
	(160, '2020-07-13 12:23:46', 1, 1, 'Row # 8 updated in table amuco_suppliers', 2),
	(161, '2020-07-13 14:22:42', 1, 1, 'Row # 8 added in table amuco_destination_port', 6),
	(162, '2020-07-13 14:26:09', 1, 1, 'Row # 10 added in table amuco_customer_request', 6),
	(163, '2020-07-13 14:27:24', 1, 1, 'Row # 10 updated in table amuco_customer_request', 6),
	(164, '2020-07-13 15:08:32', 1, 1, 'Row # 8 added in table amuco_details_customers_request', 6),
	(165, '2020-07-13 15:09:15', 1, 1, 'Row # 9 added in table amuco_details_customers_request', 6),
	(166, '2020-07-14 13:43:27', 1, 1, 'Row # 11 updated in table amuco_credit_insurance', 2),
	(167, '2020-07-14 14:19:23', 1, 1, 'Row # 11 updated in table amuco_credit_insurance', 2),
	(168, '2020-07-14 14:45:32', 1, 1, 'Row # 7 updated in table amuco_customers', 5),
	(169, '2020-07-14 14:46:50', 1, 1, 'Row # 7 updated in table amuco_customers', 5),
	(170, '2020-07-14 14:47:09', 1, 1, 'Row # 7 updated in table amuco_customers', 5),
	(171, '2020-07-14 14:48:09', 1, 1, 'Row # 6 updated in table amuco_customers', 5),
	(172, '2020-07-14 14:54:34', 1, 1, 'Row # 4 added in table amuco_contacts', 5),
	(173, '2020-07-14 14:56:05', 1, 1, 'Row # 17 added in table amuco_visits', 5),
	(174, '2020-07-15 12:33:36', 1, 1, 'Row # 5 added in table amuco_contacts', 2),
	(175, '2020-07-15 12:34:14', 1, 1, 'Row # 18 added in table amuco_visits', 2),
	(176, '2020-07-16 16:32:10', 1, 1, 'Row # 11 added in table amuco_customer_request', 2),
	(177, '2020-07-17 12:03:27', 1, 1, 'Row # 10 added in table amuco_details_customers_request', 2),
	(178, '2020-07-17 13:37:18', 1, 1, 'Row # 11 updated in table amuco_customer_request', 5),
	(179, '2020-07-17 13:42:35', 1, 1, 'Row # 5 updated in table amuco_suppliers', 5),
	(180, '2020-07-17 14:11:22', 1, 1, 'Row # 7 updated in table amuco_suppliers', 5),
	(181, '2020-07-17 14:12:02', 1, 1, 'Row # 7 updated in table amuco_suppliers', 5),
	(182, '2020-07-17 14:35:12', 1, 1, 'Row # 10 updated in table amuco_customer_request', 5),
	(183, '2020-07-17 14:35:58', 1, 1, 'Row # 10 updated in table amuco_customer_request', 5),
	(184, '2020-07-17 14:40:53', 1, 1, 'Row # 6 added in table amuco_packing', 3),
	(185, '2020-07-17 14:41:01', 1, 1, 'Row # 10 added in table amuco_material', 3),
	(186, '2020-07-21 13:03:16', 1, 1, 'Row # 12 added in table amuco_customer_request', 5),
	(187, '2020-07-21 13:16:57', 1, 1, 'Row # 5 updated in table amuco_contacts', 6),
	(188, '2020-07-21 13:17:32', 1, 1, 'Row # 11 updated in table amuco_credit_insurance', 6),
	(189, '2020-07-21 13:18:16', 1, 1, 'Row # 11 updated in table amuco_credit_insurance', 6),
	(190, '2020-07-21 13:21:16', 1, 1, 'Row # 6 added in table amuco_contacts', 6),
	(191, '2020-07-21 13:26:46', 1, 1, 'Row # 4 updated in table amuco_contacts', 6),
	(192, '2020-07-21 13:28:45', 1, 1, 'Row # 4 updated in table amuco_contacts', 6),
	(193, '2020-07-21 13:33:14', 1, 1, 'Row # 7 added in table amuco_contacts', 2),
	(194, '2020-07-21 13:33:35', 1, 1, 'Row # 21 added in table amuco_details_customers_request', 2),
	(195, '2020-07-21 13:34:32', 1, 1, 'Row # 9 updated in table amuco_suppliers', 2),
	(196, '2020-07-21 13:51:36', 1, 1, 'Row # 12 updated in table amuco_customer_request', 5),
	(197, '2020-07-21 14:10:20', 1, 1, 'Row # 13 added in table amuco_customer_request', 5),
	(198, '2020-07-21 14:18:28', 1, 1, 'Row # 22 added in table amuco_details_customers_request', 5),
	(199, '2020-07-21 14:19:42', 1, 1, 'Row # 23 added in table amuco_details_customers_request', 5),
	(200, '2020-07-21 14:24:14', 1, 1, 'Row # 24 added in table amuco_details_customers_request', 5),
	(201, '2020-07-21 14:28:44', 1, 1, 'Row # 10 updated in table amuco_material', 2),
	(202, '2020-07-21 14:29:19', 1, 1, 'Row # 11 added in table amuco_material', 2),
	(203, '2020-07-21 14:29:31', 1, 1, 'Row # 12 added in table amuco_material', 2),
	(204, '2020-07-21 14:30:02', 1, 1, 'Row # 13 added in table amuco_material', 2),
	(205, '2020-07-21 14:30:24', 1, 1, 'Row # 14 added in table amuco_material', 2),
	(206, '2020-07-21 14:30:37', 1, 1, 'Row # 15 added in table amuco_material', 2),
	(207, '2020-07-21 14:30:59', 1, 1, 'Row # 16 added in table amuco_material', 2),
	(208, '2020-07-21 14:31:07', 1, 1, 'Row # 17 added in table amuco_material', 2),
	(209, '2020-07-21 14:31:14', 1, 1, 'Row # 18 added in table amuco_material', 2),
	(210, '2020-07-21 14:31:21', 1, 1, 'Row # 19 added in table amuco_material', 2),
	(211, '2020-07-21 14:31:29', 1, 1, 'Row # 20 added in table amuco_material', 2),
	(212, '2020-07-21 14:31:46', 1, 1, 'Row # 21 added in table amuco_material', 2),
	(213, '2020-07-21 14:32:28', 1, 1, 'Row # 22 added in table amuco_material', 2),
	(214, '2020-07-21 14:32:36', 1, 1, 'Row # 23 added in table amuco_material', 2),
	(215, '2020-07-21 14:32:40', 1, 1, 'Row # 24 added in table amuco_material', 2),
	(216, '2020-07-21 14:32:51', 1, 1, 'Row # 25 added in table amuco_material', 2),
	(217, '2020-07-21 14:32:56', 1, 1, 'Row # 26 added in table amuco_material', 2),
	(218, '2020-07-21 14:33:24', 1, 1, 'Row # 27 added in table amuco_material', 2),
	(219, '2020-07-21 14:33:26', 1, 1, 'Row # 28 added in table amuco_material', 2),
	(220, '2020-07-21 14:33:38', 1, 1, 'Row # 29 added in table amuco_material', 2),
	(221, '2020-07-21 14:33:48', 1, 1, 'Row # 30 added in table amuco_material', 2),
	(222, '2020-07-21 14:34:01', 1, 1, 'Row # 31 added in table amuco_material', 2),
	(223, '2020-07-21 16:35:20', 1, 1, 'Row # 25 added in table amuco_details_customers_request', 5),
	(224, '2020-07-22 14:41:50', 1, 1, 'Row # 6 updated in table amuco_packing', 2),
	(225, '2020-07-22 14:42:18', 1, 1, 'Row # 7 added in table amuco_packing', 2),
	(226, '2020-07-22 14:42:41', 1, 1, 'Row # 8 added in table amuco_packing', 2),
	(227, '2020-07-22 14:43:00', 1, 1, 'Row # 9 added in table amuco_packing', 2),
	(228, '2020-07-22 14:43:23', 1, 1, 'Row # 10 added in table amuco_packing', 2),
	(229, '2020-07-22 14:43:30', 1, 1, 'Row # 11 added in table amuco_packing', 2),
	(230, '2020-07-22 14:43:36', 1, 1, 'Row # 12 added in table amuco_packing', 2),
	(231, '2020-07-22 14:43:41', 1, 1, 'Row # 13 added in table amuco_packing', 2),
	(232, '2020-07-22 14:43:57', 1, 1, 'Row # 14 added in table amuco_packing', 2),
	(233, '2020-07-22 14:44:05', 1, 1, 'Row # 15 added in table amuco_packing', 2),
	(234, '2020-07-22 14:44:08', 1, 1, 'Row # 16 added in table amuco_packing', 2),
	(235, '2020-07-22 14:44:14', 1, 1, 'Row # 17 added in table amuco_packing', 2),
	(236, '2020-07-22 14:44:21', 1, 1, 'Row # 18 added in table amuco_packing', 2),
	(237, '2020-07-22 14:44:27', 1, 1, 'Row # 19 added in table amuco_packing', 2),
	(238, '2020-07-22 14:44:37', 1, 1, 'Row # 20 added in table amuco_packing', 2),
	(239, '2020-07-22 14:44:42', 1, 1, 'Row # 21 added in table amuco_packing', 2),
	(240, '2020-07-22 14:44:52', 1, 1, 'Row # 22 added in table amuco_packing', 2),
	(241, '2020-07-22 14:45:05', 1, 1, 'Row # 23 added in table amuco_packing', 2),
	(242, '2020-07-22 14:45:30', 1, 1, 'Row # 22 updated in table amuco_packing', 2),
	(243, '2020-07-22 14:45:47', 1, 1, 'Row # 23 updated in table amuco_packing', 2),
	(244, '2020-07-22 14:46:04', 1, 1, 'Row # 24 added in table amuco_packing', 2),
	(245, '2020-07-22 14:46:24', 1, 1, 'Row # 25 added in table amuco_packing', 2),
	(246, '2020-07-22 14:46:40', 1, 1, 'Row # 26 added in table amuco_packing', 2),
	(247, '2020-07-22 14:46:45', 1, 1, 'Row # 27 added in table amuco_packing', 2),
	(248, '2020-07-22 14:46:58', 1, 1, 'Row # 28 added in table amuco_packing', 2),
	(249, '2020-07-22 14:47:03', 1, 1, 'Row # 29 added in table amuco_packing', 2),
	(250, '2020-07-22 14:47:17', 1, 1, 'Row # 30 added in table amuco_packing', 2),
	(251, '2020-07-22 14:47:38', 1, 1, 'Row # 31 added in table amuco_packing', 2),
	(252, '2020-07-22 14:47:48', 1, 1, 'Row # 32 added in table amuco_packing', 2),
	(253, '2020-07-22 17:18:05', 1, 1, 'Row # 1 updated in table amuco_incoterm', 5),
	(254, '2020-07-23 14:21:45', 1, 1, 'Row # 14 added in table amuco_customer_request', 5),
	(255, '2020-07-23 14:23:40', 1, 1, 'Row # 26 added in table amuco_details_customers_request', 5),
	(256, '2020-07-23 14:24:47', 1, 1, 'Row # 27 added in table amuco_details_customers_request', 5),
	(257, '2020-07-23 17:43:14', 1, 1, 'Row # 1 updated in table amuco_unit_types', 5),
	(258, '2020-07-23 17:43:57', 1, 1, 'Row # 2 updated in table amuco_unit_types', 5),
	(259, '2020-07-23 19:14:40', 1, 1, 'Row # 15 added in table amuco_customer_request', 5),
	(260, '2020-07-23 19:16:44', 1, 1, 'Row # 28 added in table amuco_details_customers_request', 5),
	(261, '2020-07-23 19:16:59', 1, 1, 'Row # 29 added in table amuco_details_customers_request', 5),
	(262, '2020-07-23 19:18:30', 1, 1, 'Row # 30 added in table amuco_details_customers_request', 5),
	(263, '2020-07-23 19:30:51', 1, 1, 'Row # 31 added in table amuco_details_customers_request', 5),
	(264, '2020-07-23 19:31:07', 1, 1, 'Row # 32 added in table amuco_details_customers_request', 5),
	(265, '2020-07-24 15:58:44', 1, 1, 'Row # 35 added in table amuco_details_customers_request', 5),
	(266, '2020-07-28 15:32:11', 1, 1, 'Row # 15 updated in table amuco_customer_request', 2),
	(267, '2020-07-28 15:32:21', 1, 1, 'Row # 15 updated in table amuco_customer_request', 2),
	(268, '2020-07-28 15:32:41', 1, 1, 'Row # 36 added in table amuco_details_customers_request', 2),
	(269, '2020-07-28 17:08:58', 1, 1, 'Row # 38 added in table amuco_details_customers_request', 1),
	(270, '2020-07-28 21:42:20', 1, 1, 'Row # 4 added in table amuco_unit_types', 5),
	(271, '2020-07-29 14:37:54', 1, 1, 'Row # 1 added in table amuco_payments_terms_suppliers', 2),
	(272, '2020-07-29 14:38:57', 1, 1, 'Row # 6 added in table amuco_details_request_office', 7),
	(273, '2020-07-29 14:47:34', 1, 1, 'Row # 39 added in table amuco_details_customers_request', 1),
	(274, '2020-07-29 14:47:49', 1, 1, 'Row # 40 added in table amuco_details_customers_request', 1),
	(275, '2020-07-29 16:20:27', 1, 1, 'Row # 7 added in table amuco_details_request_office', 7),
	(276, '2020-07-29 19:43:53', 1, 1, 'Row # 43 added in table amuco_details_customers_request', 1),
	(277, '2020-07-29 20:10:54', 1, 1, 'Row # 33 added in table amuco_packing', 1),
	(278, '2020-08-03 15:13:22', 1, 1, 'Row # 9 deleted in table amuco_customer_request', 2),
	(279, '2020-08-03 16:44:33', 1, 1, 'Row # 44 added in table amuco_details_customers_request', 1),
	(280, '2020-08-03 16:44:48', 1, 1, 'Row # 45 added in table amuco_details_customers_request', 1),
	(281, '2020-08-03 16:54:42', 1, 1, 'Row # 46 added in table amuco_details_customers_request', 1),
	(282, '2020-08-03 16:57:47', 1, 1, 'Row # 47 added in table amuco_details_customers_request', 1),
	(283, '2020-08-03 20:53:05', 1, 1, 'Row # 7 updated in table amuco_customers', 5),
	(284, '2020-08-03 20:53:30', 1, 1, 'Row # 9 updated in table amuco_customers', 5),
	(285, '2020-08-03 20:54:08', 1, 1, 'Row # 16 added in table amuco_customer_request', 5),
	(286, '2020-08-03 20:57:52', 1, 1, 'Row # 48 added in table amuco_details_customers_request', 5),
	(287, '2020-08-03 21:08:45', 1, 1, 'Row # 16 updated in table amuco_customer_request', 5),
	(288, '2020-08-03 21:08:45', 1, 1, 'Row # 48 updated in table amuco_customer_request', 5),
	(289, '2020-08-04 13:50:56', 1, 1, 'Row # 16 updated in table amuco_customer_request', 1),
	(290, '2020-08-04 13:52:17', 1, 1, 'Row # 49 added in table amuco_details_customers_request', 1),
	(291, '2020-08-04 13:53:06', 1, 1, 'Row # 50 added in table amuco_details_customers_request', 1),
	(292, '2020-08-04 14:01:37', 1, 1, 'Row # 17 added in table amuco_customer_request', 5),
	(293, '2020-08-04 14:03:27', 1, 1, 'Row # 51 added in table amuco_details_customers_request', 5),
	(294, '2020-08-04 14:03:46', 1, 1, 'Row # 52 added in table amuco_details_customers_request', 5),
	(295, '2020-08-04 14:20:36', 1, 1, 'Row # 5 updated in table amuco_products', 5),
	(296, '2020-08-04 15:35:24', 1, 1, 'Row # 18 added in table amuco_customer_request', 5),
	(297, '2020-08-04 15:40:42', 1, 1, 'Row # 53 added in table amuco_details_customers_request', 5),
	(298, '2020-08-04 15:41:19', 1, 1, 'Row # 54 added in table amuco_details_customers_request', 5),
	(299, '2020-08-05 11:34:28', 1, 1, 'Row # 55 added in table amuco_details_customers_request', 2),
	(300, '2020-08-05 11:34:28', 1, 1, 'Row # 56 added in table amuco_details_customers_request', 2),
	(301, '2020-08-05 11:35:03', 1, 1, 'Row # 18 updated in table amuco_customer_request', 2),
	(302, '2020-08-05 11:35:04', 1, 1, 'Row # 56 updated in table amuco_customer_request', 2),
	(303, '2020-08-05 11:35:04', 1, 1, 'Row # 55 updated in table amuco_customer_request', 2),
	(304, '2020-08-05 11:35:04', 1, 1, 'Row # 54 updated in table amuco_customer_request', 2),
	(305, '2020-08-05 11:35:04', 1, 1, 'Row # 53 updated in table amuco_customer_request', 2),
	(306, '2020-08-06 15:10:56', 1, 1, 'Row # 51 updated in table amuco_details_customers_request', 5),
	(307, '2020-08-06 15:15:21', 1, 1, 'Row # 19 added in table amuco_customer_request', 5),
	(308, '2020-08-06 15:18:21', 1, 1, 'Row # 57 added in table amuco_details_customers_request', 5),
	(309, '2020-08-06 15:19:44', 1, 1, 'Row # 58 added in table amuco_details_customers_request', 5),
	(310, '2020-08-06 15:25:28', 1, 1, 'Row # 19 updated in table amuco_customer_request', 5),
	(311, '2020-08-06 15:25:28', 1, 1, 'Row # 58 updated in table amuco_customer_request', 5),
	(312, '2020-08-06 15:25:28', 1, 1, 'Row # 57 updated in table amuco_customer_request', 5),
	(313, '2020-08-07 15:12:25', 1, 1, 'Row # 32 added in table amuco_material', 2),
	(314, '2020-08-07 15:13:45', 1, 1, 'Row # 33 added in table amuco_material', 2),
	(315, '2020-08-07 15:14:22', 1, 1, 'Row # 34 added in table amuco_material', 2),
	(316, '2020-08-07 15:15:33', 1, 1, 'Row # 35 added in table amuco_material', 2),
	(317, '2020-08-07 15:20:41', 1, 1, 'Row # 59 added in table amuco_details_customers_request', 5),
	(318, '2020-08-07 15:22:32', 1, 1, 'Row # 56 updated in table amuco_details_customers_request', 5),
	(319, '2020-08-07 15:23:46', 1, 1, 'Row # 60 added in table amuco_details_customers_request', 5),
	(320, '2020-08-07 15:24:44', 1, 1, 'Row # 60 deleted in table amuco_details_customers_request', 5),
	(321, '2020-08-07 15:25:58', 1, 1, 'Row # 56 updated in table amuco_details_customers_request', 5),
	(322, '2020-08-07 15:27:38', 1, 1, 'Row # 55 updated in table amuco_details_customers_request', 5),
	(323, '2020-08-07 15:29:00', 1, 1, 'Row # 18 updated in table amuco_customer_request', 5),
	(324, '2020-08-07 15:29:01', 1, 1, 'Row # 59 updated in table amuco_customer_request', 5),
	(325, '2020-08-07 15:29:01', 1, 1, 'Row # 56 updated in table amuco_customer_request', 5),
	(326, '2020-08-07 15:29:01', 1, 1, 'Row # 55 updated in table amuco_customer_request', 5),
	(327, '2020-08-07 15:29:01', 1, 1, 'Row # 54 updated in table amuco_customer_request', 5),
	(328, '2020-08-07 15:29:01', 1, 1, 'Row # 53 updated in table amuco_customer_request', 5),
	(329, '2020-08-07 15:31:15', 1, 1, 'Row # 56 updated in table amuco_details_customers_request', 5),
	(330, '2020-08-07 15:33:02', 1, 1, 'Row # 61 added in table amuco_details_customers_request', 5),
	(331, '2020-08-07 15:33:17', 1, 1, 'Row # 18 updated in table amuco_customer_request', 5),
	(332, '2020-08-07 15:33:17', 1, 1, 'Row # 61 updated in table amuco_customer_request', 5),
	(333, '2020-08-07 15:33:17', 1, 1, 'Row # 59 updated in table amuco_customer_request', 5),
	(334, '2020-08-07 15:33:17', 1, 1, 'Row # 56 updated in table amuco_customer_request', 5),
	(335, '2020-08-07 15:33:17', 1, 1, 'Row # 55 updated in table amuco_customer_request', 5),
	(336, '2020-08-07 15:33:17', 1, 1, 'Row # 54 updated in table amuco_customer_request', 5),
	(337, '2020-08-07 15:33:17', 1, 1, 'Row # 53 updated in table amuco_customer_request', 5),
	(338, '2020-08-07 15:46:33', 1, 1, 'Row # 58 updated in table amuco_details_customers_request', 2),
	(339, '2020-08-07 15:47:56', 1, 1, 'Row # 57 updated in table amuco_details_customers_request', 2),
	(340, '2020-08-07 16:02:01', 1, 1, 'Row # 53 updated in table amuco_details_customers_request', 2),
	(341, '2020-08-07 16:03:28', 1, 1, 'Row # 61 updated in table amuco_details_customers_request', 2),
	(342, '2020-08-07 16:04:14', 1, 1, 'Row # 59 updated in table amuco_details_customers_request', 2),
	(343, '2020-08-07 16:10:58', 1, 1, 'Row # 61 updated in table amuco_details_customers_request', 5),
	(344, '2020-08-07 16:11:32', 1, 1, 'Row # 61 updated in table amuco_details_customers_request', 5),
	(345, '2020-08-07 16:15:09', 1, 1, 'Row # 59 updated in table amuco_details_customers_request', 5),
	(346, '2020-08-07 16:15:42', 1, 1, 'Row # 55 updated in table amuco_details_customers_request', 5),
	(347, '2020-08-07 16:17:00', 1, 1, 'Row # 53 updated in table amuco_details_customers_request', 5),
	(348, '2020-08-07 16:19:00', 1, 1, 'Row # 61 updated in table amuco_details_customers_request', 2),
	(349, '2020-08-07 18:09:09', 1, 1, 'Row # 61 updated in table amuco_details_customers_request', 5),
	(350, '2020-08-11 14:24:51', 1, 1, 'Row # 45 deleted in table amuco_details_customers_request', 5),
	(351, '2020-08-11 14:24:58', 1, 1, 'Row # 47 deleted in table amuco_details_customers_request', 5),
	(352, '2020-08-11 14:25:03', 1, 1, 'Row # 42 deleted in table amuco_details_customers_request', 5),
	(353, '2020-08-11 14:25:08', 1, 1, 'Row # 41 deleted in table amuco_details_customers_request', 5),
	(354, '2020-08-11 14:25:14', 1, 1, 'Row # 40 deleted in table amuco_details_customers_request', 5),
	(355, '2020-08-11 14:25:26', 1, 1, 'Row # 39 deleted in table amuco_details_customers_request', 5),
	(356, '2020-08-11 14:25:34', 1, 1, 'Row # 37 deleted in table amuco_details_customers_request', 5),
	(357, '2020-08-11 14:26:21', 1, 1, 'Row # 15 updated in table amuco_customer_request', 5),
	(358, '2020-08-11 14:26:21', 1, 1, 'Row # 46 updated in table amuco_customer_request', 5),
	(359, '2020-08-11 14:26:21', 1, 1, 'Row # 44 updated in table amuco_customer_request', 5),
	(360, '2020-08-11 14:26:21', 1, 1, 'Row # 43 updated in table amuco_customer_request', 5),
	(361, '2020-08-11 14:26:21', 1, 1, 'Row # 38 updated in table amuco_customer_request', 5),
	(362, '2020-08-11 14:26:21', 1, 1, 'Row # 36 updated in table amuco_customer_request', 5),
	(363, '2020-08-11 14:26:21', 1, 1, 'Row # 32 updated in table amuco_customer_request', 5),
	(364, '2020-08-11 14:26:21', 1, 1, 'Row # 31 updated in table amuco_customer_request', 5),
	(365, '2020-08-11 14:26:21', 1, 1, 'Row # 30 updated in table amuco_customer_request', 5),
	(366, '2020-08-11 14:26:22', 1, 1, 'Row # 29 updated in table amuco_customer_request', 5),
	(367, '2020-08-11 14:26:22', 1, 1, 'Row # 28 updated in table amuco_customer_request', 5),
	(368, '2020-08-13 13:38:13', 1, 1, 'Row # 7 added in table amuco_details_request_office', 3),
	(369, '2020-08-13 14:07:40', 1, 1, 'Row # 8 added in table amuco_details_request_office', 3),
	(370, '2020-08-13 14:22:08', 1, 1, 'Row # 9 added in table amuco_details_request_office', 3),
	(371, '2020-08-13 14:25:24', 1, 1, 'Row # 10 added in table amuco_details_request_office', 3),
	(372, '2020-08-13 14:44:23', 1, 1, 'Row # 11 added in table amuco_details_request_office', 5),
	(373, '2020-08-13 15:20:04', 1, 1, 'Row # 19 updated in table amuco_customer_request', 5),
	(374, '2020-08-13 15:20:04', 1, 1, 'Row # 58 updated in table amuco_customer_request', 5),
	(375, '2020-08-13 15:20:04', 1, 1, 'Row # 57 updated in table amuco_customer_request', 5),
	(376, '2020-08-13 15:26:17', 1, 1, 'Row # 57 updated in table amuco_details_customers_request', 5),
	(377, '2020-08-13 15:44:26', 1, 1, 'Row # 62 added in table amuco_details_customers_request', 3),
	(378, '2020-08-13 16:03:12', 1, 1, 'Row # 12 added in table amuco_details_request_office', 5),
	(379, '2020-08-14 19:25:06', 1, 1, 'Row # 11 updated in table amuco_details_request_office', 2),
	(380, '2020-08-14 19:25:18', 1, 1, 'Row # 8 updated in table amuco_details_request_office', 2),
	(381, '2020-08-14 19:27:24', 1, 1, 'Row # 13 added in table amuco_details_request_office', 2),
	(382, '2020-08-14 19:27:24', 1, 1, 'Row # 46 updated in table amuco_details_request_office', 2),
	(383, '2020-08-14 19:48:52', 1, 1, 'Row # 13 updated in table amuco_details_request_office', 5),
	(384, '2020-08-14 19:49:06', 1, 1, 'Row # 13 updated in table amuco_details_request_office', 5),
	(385, '2020-08-14 19:52:20', 1, 1, 'Row # 14 added in table amuco_details_request_office', 5),
	(386, '2020-08-14 19:52:20', 1, 1, 'Row # 31 updated in table amuco_details_request_office', 5),
	(387, '2020-08-17 16:26:18', 1, 1, 'Row # 13 updated in table amuco_details_request_office', 5),
	(388, '2020-08-17 16:28:50', 1, 1, 'Row # 20 added in table amuco_customer_request', 5),
	(389, '2020-08-17 16:30:53', 1, 1, 'Row # 63 added in table amuco_details_customers_request', 5),
	(390, '2020-08-17 16:33:48', 1, 1, 'Row # 64 added in table amuco_details_customers_request', 5),
	(391, '2020-08-17 16:35:28', 1, 1, 'Row # 20 updated in table amuco_customer_request', 5),
	(392, '2020-08-17 16:35:28', 1, 1, 'Row # 64 updated in table amuco_customer_request', 5),
	(393, '2020-08-17 16:35:28', 1, 1, 'Row # 63 updated in table amuco_customer_request', 5),
	(394, '2020-08-17 17:15:58', 1, 1, 'Row # 15 added in table amuco_details_request_office', 5),
	(395, '2020-08-17 17:15:58', 1, 1, 'Row # 64 updated in table amuco_details_request_office', 5),
	(396, '2020-08-17 17:17:26', 1, 1, 'Row # 16 added in table amuco_details_request_office', 5),
	(397, '2020-08-17 17:19:01', 1, 1, 'Row # 17 added in table amuco_details_request_office', 5),
	(398, '2020-08-17 17:19:02', 1, 1, 'Row # 63 updated in table amuco_details_request_office', 5),
	(399, '2020-08-17 17:25:27', 1, 1, 'Row # 65 added in table amuco_details_customers_request', 5),
	(400, '2020-08-17 17:26:16', 1, 1, 'Row # 20 updated in table amuco_customer_request', 5),
	(401, '2020-08-17 17:26:16', 1, 1, 'Row # 65 updated in table amuco_customer_request', 5),
	(402, '2020-08-17 17:34:02', 1, 1, 'Row # 66 added in table amuco_details_customers_request', 5),
	(403, '2020-08-17 21:00:18', 1, 1, 'Row # 65 updated in table amuco_details_customers_request', 5),
	(404, '2020-08-17 21:00:29', 1, 1, 'Row # 20 updated in table amuco_customer_request', 5),
	(405, '2020-08-17 21:00:29', 1, 1, 'Row # 66 updated in table amuco_customer_request', 5),
	(406, '2020-08-17 21:00:29', 1, 1, 'Row # 65 updated in table amuco_customer_request', 5),
	(407, '2020-08-18 13:58:04', 1, 1, 'Row # 18 added in table amuco_details_request_office', 2),
	(408, '2020-08-18 13:58:04', 1, 1, 'Row # 66 updated in table amuco_details_request_office', 2),
	(409, '2020-08-18 14:57:51', 1, 1, 'Row # 20 updated in table amuco_customer_request', 5),
	(410, '2020-08-18 15:03:39', 1, 1, 'Row # 67 added in table amuco_details_customers_request', 5),
	(411, '2020-08-18 15:13:55', 1, 1, 'Row # 20 updated in table amuco_customer_request', 5),
	(412, '2020-08-18 15:13:55', 1, 1, 'Row # 67 updated in table amuco_customer_request', 5),
	(413, '2020-08-18 15:58:07', 1, 1, 'Row # 68 added in table amuco_details_customers_request', 5),
	(414, '2020-08-18 17:45:33', 1, 1, 'Row # 14 updated in table amuco_details_request_office', 3),
	(415, '2020-08-18 17:47:26', 1, 1, 'Row # 20 deleted in table amuco_customer_request', 3),
	(416, '2020-08-18 17:47:26', 1, 1, 'Row # 19 deleted in table amuco_customer_request', 3),
	(417, '2020-08-18 17:47:26', 1, 1, 'Row # 18 deleted in table amuco_customer_request', 3),
	(418, '2020-08-18 17:47:27', 1, 1, 'Row # 17 deleted in table amuco_customer_request', 3),
	(419, '2020-08-18 17:47:27', 1, 1, 'Row # 16 deleted in table amuco_customer_request', 3),
	(420, '2020-08-18 17:47:27', 1, 1, 'Row # 15 deleted in table amuco_customer_request', 3),
	(421, '2020-08-18 17:47:27', 1, 1, 'Row # 14 deleted in table amuco_customer_request', 3),
	(422, '2020-08-18 17:47:27', 1, 1, 'Row # 13 deleted in table amuco_customer_request', 3),
	(423, '2020-08-18 17:47:27', 1, 1, 'Row # 12 deleted in table amuco_customer_request', 3),
	(424, '2020-08-18 17:47:27', 1, 1, 'Row # 11 deleted in table amuco_customer_request', 3),
	(425, '2020-08-18 17:47:34', 1, 1, 'Row # 10 deleted in table amuco_customer_request', 3),
	(426, '2020-08-18 17:52:08', 1, 1, 'Row # 21 added in table amuco_customer_request', 3),
	(427, '2020-08-18 17:53:15', 1, 1, 'Row # 69 added in table amuco_details_customers_request', 3),
	(428, '2020-08-18 17:53:15', 1, 1, 'Row # 70 added in table amuco_details_customers_request', 3),
	(429, '2020-08-18 17:54:14', 1, 1, 'Row # 19 added in table amuco_details_request_office', 3),
	(430, '2020-08-18 17:54:14', 1, 1, 'Row # 70 updated in table amuco_details_request_office', 3),
	(431, '2020-08-25 16:35:46', 1, 1, 'Row # 20 added in table amuco_details_request_office', 2),
	(432, '2020-08-25 16:35:46', 1, 1, 'Row # 69 updated in table amuco_details_request_office', 2),
	(433, '2020-08-25 19:16:46', 1, 1, 'Row # 22 added in table amuco_customer_request', 2),
	(434, '2020-08-26 14:21:02', 1, 1, 'Row # 23 added in table amuco_customer_request', 3),
	(435, '2020-08-26 14:22:16', 1, 1, 'Row # 71 added in table amuco_details_customers_request', 3),
	(436, '2020-08-26 14:22:16', 1, 1, 'Row # 72 added in table amuco_details_customers_request', 3),
	(437, '2020-08-26 14:22:16', 1, 1, 'Row # 73 added in table amuco_details_customers_request', 3),
	(438, '2020-08-26 14:23:15', 1, 1, 'Row # 21 added in table amuco_details_request_office', 3),
	(439, '2020-08-26 14:23:15', 1, 1, 'Row # 73 updated in table amuco_details_request_office', 3),
	(440, '2020-08-26 14:24:26', 1, 1, 'Row # 22 added in table amuco_details_request_office', 3),
	(441, '2020-08-26 17:50:18', 1, 1, 'Row # 74 added in table amuco_details_customers_request', 5),
	(442, '2020-08-26 17:50:18', 1, 1, 'Row # 75 added in table amuco_details_customers_request', 5),
	(443, '2020-08-26 17:50:37', 1, 1, 'Row # 75 deleted in table amuco_details_customers_request', 5),
	(444, '2020-08-26 17:51:05', 1, 1, 'Row # 22 updated in table amuco_customer_request', 5),
	(445, '2020-08-26 17:51:05', 1, 1, 'Row # 74 updated in table amuco_customer_request', 5),
	(446, '2020-08-26 17:54:19', 1, 1, 'Row # 76 added in table amuco_details_customers_request', 5),
	(447, '2020-08-26 17:54:38', 1, 1, 'Row # 22 updated in table amuco_customer_request', 5),
	(448, '2020-08-26 17:54:38', 1, 1, 'Row # 76 updated in table amuco_customer_request', 5),
	(449, '2020-08-27 13:57:48', 1, 1, 'Row # 8 added in table amuco_contacts', 2),
	(450, '2020-08-27 13:57:54', 1, 1, 'Row # 21 updated in table amuco_customer_request', 2),
	(451, '2020-08-27 13:59:22', 1, 1, 'Row # 9 added in table amuco_contacts', 2),
	(452, '2020-08-27 13:59:32', 1, 1, 'Row # 77 added in table amuco_details_customers_request', 2),
	(453, '2020-08-27 14:04:35', 1, 1, 'Row # 23 added in table amuco_details_request_office', 2),
	(454, '2020-08-27 14:04:35', 1, 1, 'Row # 77 updated in table amuco_details_request_office', 2),
	(455, '2020-08-27 15:04:53', 1, 1, 'Row # 70 deleted in table amuco_details_customers_request', 2),
	(456, '2020-08-27 16:03:41', 1, 1, 'Row # 24 added in table amuco_details_request_office', 5),
	(457, '2020-08-27 16:03:41', 1, 1, 'Row # 76 updated in table amuco_details_request_office', 5),
	(458, '2020-08-27 16:11:47', 1, 1, 'Row # 25 added in table amuco_details_request_office', 5),
	(459, '2020-08-27 16:11:48', 1, 1, 'Row # 74 updated in table amuco_details_request_office', 5),
	(460, '2020-09-01 14:33:39', 1, 1, 'Row # 72 updated in table amuco_details_customers_request', 5),
	(461, '2020-09-01 14:34:03', 1, 1, 'Row # 72 updated in table amuco_details_customers_request', 5),
	(462, '2020-09-01 14:34:46', 1, 1, 'Row # 23 updated in table amuco_customer_request', 5),
	(463, '2020-09-01 14:34:46', 1, 1, 'Row # 72 updated in table amuco_customer_request', 5),
	(464, '2020-09-01 14:34:46', 1, 1, 'Row # 71 updated in table amuco_customer_request', 5),
	(465, '2020-09-07 19:18:54', 1, 1, 'Row # 24 added in table amuco_customer_request', 3),
	(466, '2020-09-07 19:21:32', 1, 1, 'Row # 78 added in table amuco_details_customers_request', 3),
	(467, '2020-09-07 19:21:32', 1, 1, 'Row # 79 added in table amuco_details_customers_request', 3),
	(468, '2020-09-07 19:21:32', 1, 1, 'Row # 80 added in table amuco_details_customers_request', 3),
	(469, '2020-09-07 19:21:32', 1, 1, 'Row # 82 added in table amuco_details_customers_request', 3),
	(470, '2020-09-07 19:21:32', 1, 1, 'Row # 84 added in table amuco_details_customers_request', 3),
	(471, '2020-09-07 19:22:48', 1, 1, 'Row # 26 added in table amuco_details_request_office', 3),
	(472, '2020-09-07 19:22:48', 1, 1, 'Row # 84 updated in table amuco_details_request_office', 3),
	(473, '2020-09-08 15:59:48', 1, 1, 'Row # 18 updated in table amuco_visits', 5),
	(474, '2020-09-08 16:20:33', 1, 1, 'Row # 25 added in table amuco_customer_request', 5),
	(475, '2020-09-08 16:44:59', 1, 1, 'Row # 14 added in table amuco_offers_sent_customers', 5),
	(476, '2020-09-08 16:44:59', 1, 1, 'Row # 15 added in table amuco_offers_sent_customers', 5),
	(477, '2020-09-09 13:38:55', 1, 1, 'Row # 26 added in table amuco_customer_request', 2),
	(478, '2020-09-09 13:39:18', 1, 1, 'Row # 26 updated in table amuco_customer_request', 2),
	(479, '2020-09-09 13:40:19', 1, 1, 'Row # 85 added in table amuco_details_customers_request', 2),
	(480, '2020-09-09 13:40:19', 1, 1, 'Row # 86 added in table amuco_details_customers_request', 2),
	(481, '2020-09-09 13:40:49', 1, 1, 'Row # 26 updated in table amuco_customer_request', 2),
	(482, '2020-09-09 13:40:49', 1, 1, 'Row # 86 updated in table amuco_customer_request', 2),
	(483, '2020-09-09 13:40:49', 1, 1, 'Row # 85 updated in table amuco_customer_request', 2),
	(484, '2020-09-09 13:41:36', 1, 1, 'Row # 27 added in table amuco_details_request_office', 2),
	(485, '2020-09-09 13:41:36', 1, 1, 'Row # 86 updated in table amuco_details_request_office', 2),
	(486, '2020-09-09 13:42:23', 1, 1, 'Row # 16 added in table amuco_offers_sent_customers', 2),
	(487, '2020-09-09 13:42:23', 1, 1, 'Row # 17 added in table amuco_offers_sent_customers', 2),
	(488, '2020-09-09 14:50:53', 1, 1, 'Row # 87 added in table amuco_details_customers_request', 5),
	(489, '2020-09-09 14:51:59', 1, 1, 'Row # 28 added in table amuco_details_request_office', 5),
	(490, '2020-09-09 14:51:59', 1, 1, 'Row # 87 updated in table amuco_details_request_office', 5),
	(491, '2020-09-09 17:02:41', 1, 1, 'Row # 84 updated in table amuco_details_customers_request', 5),
	(492, '2020-09-09 17:05:46', 1, 1, 'Row # 29 added in table amuco_details_request_office', 5),
	(493, '2020-09-09 17:05:46', 1, 1, 'Row # 84 updated in table amuco_details_request_office', 5),
	(494, '2020-09-09 17:07:02', 1, 1, 'Row # 84 updated in table amuco_details_customers_request', 5),
	(495, '2020-09-09 17:08:16', 1, 1, 'Row # 30 added in table amuco_details_request_office', 5),
	(496, '2020-09-09 17:08:16', 1, 1, 'Row # 84 updated in table amuco_details_request_office', 5),
	(497, '2020-09-09 17:12:30', 1, 1, 'Row # 83 updated in table amuco_details_customers_request', 5),
	(498, '2020-09-10 15:35:16', 1, 1, 'Row # 10 added in table amuco_contacts', 5),
	(499, '2020-09-10 15:35:42', 1, 1, 'Row # 9 added in table amuco_destination_port', 5),
	(500, '2020-09-10 15:37:19', 1, 1, 'Row # 27 added in table amuco_customer_request', 5),
	(501, '2020-09-10 15:37:40', 1, 1, 'Row # 27 updated in table amuco_customer_request', 5),
	(502, '2020-09-10 15:43:11', 1, 1, 'Row # 11 added in table amuco_contacts', 5),
	(503, '2020-09-10 15:43:26', 1, 1, 'Row # 88 added in table amuco_details_customers_request', 5),
	(504, '2020-09-10 15:43:26', 1, 1, 'Row # 89 added in table amuco_details_customers_request', 5),
	(505, '2020-09-10 15:43:50', 1, 1, 'Row # 27 updated in table amuco_customer_request', 5),
	(506, '2020-09-10 15:43:50', 1, 1, 'Row # 89 updated in table amuco_customer_request', 5),
	(507, '2020-09-10 15:43:50', 1, 1, 'Row # 88 updated in table amuco_customer_request', 5),
	(508, '2020-09-10 15:59:17', 1, 1, 'Row # 90 added in table amuco_details_customers_request', 5),
	(509, '2020-09-10 15:59:27', 1, 1, 'Row # 27 updated in table amuco_customer_request', 5),
	(510, '2020-09-10 15:59:27', 1, 1, 'Row # 90 updated in table amuco_customer_request', 5),
	(511, '2020-09-10 16:29:21', 1, 1, 'Row # 3 updated in table amuco_products', 5),
	(512, '2020-09-10 16:44:05', 1, 1, 'Row # 31 added in table amuco_details_request_office', 5),
	(513, '2020-09-10 16:44:05', 1, 1, 'Row # 90 updated in table amuco_details_request_office', 5),
	(514, '2020-09-10 16:46:13', 1, 1, 'Row # 32 added in table amuco_details_request_office', 5),
	(515, '2020-09-10 16:46:13', 1, 1, 'Row # 89 updated in table amuco_details_request_office', 5),
	(516, '2020-09-10 16:47:57', 1, 1, 'Row # 33 added in table amuco_details_request_office', 5),
	(517, '2020-09-10 16:47:57', 1, 1, 'Row # 88 updated in table amuco_details_request_office', 5),
	(518, '2020-09-10 17:01:36', 1, 1, 'Row # 16 added in table amuco_offers_sent_customers', 5),
	(519, '2020-09-10 17:01:36', 1, 1, 'Row # 17 added in table amuco_offers_sent_customers', 5);
/*!40000 ALTER TABLE `mw_logs` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.mw_log_notifications
CREATE TABLE IF NOT EXISTS `mw_log_notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `integration_id` int(11) NOT NULL DEFAULT 0,
  `log_type_id` int(11) NOT NULL DEFAULT 0,
  `type` int(11) NOT NULL DEFAULT 1,
  `value` varchar(255) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `integration_id` (`integration_id`),
  KEY `log_type_id` (`log_type_id`),
  CONSTRAINT `mw_log_notifications_ibfk_1` FOREIGN KEY (`integration_id`) REFERENCES `mw_integrations_list` (`id`),
  CONSTRAINT `mw_log_notifications_ibfk_2` FOREIGN KEY (`log_type_id`) REFERENCES `mw_log_types` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.mw_log_notifications: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `mw_log_notifications` DISABLE KEYS */;
/*!40000 ALTER TABLE `mw_log_notifications` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.mw_log_types
CREATE TABLE IF NOT EXISTS `mw_log_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.mw_log_types: ~12 rows (aproximadamente)
/*!40000 ALTER TABLE `mw_log_types` DISABLE KEYS */;
INSERT INTO `mw_log_types` (`id`, `code`, `description`) VALUES
	(1, 'SUCCESS_EXECUTION', 'success, execution time'),
	(2, 'API_TIMEOUT', 'error, API timeout'),
	(3, 'API_NO_DATA_FOUND', 'error, API no data'),
	(4, 'API_AUTHENTICATION_FAIL', 'error, API authentication '),
	(5, 'FTP_TIMEOUT', 'error, FTP timeout'),
	(6, 'FTP_AUTHENTICATION', 'error, FTP authentication'),
	(7, 'PIVOT_NOT_KEY', 'error, Pivot not key'),
	(8, 'NEW_DATA_COMPARISON', 'Data Comparison'),
	(9, 'UPDATE_DATA_COMPARISON', 'Update Data Comparison'),
	(10, 'API_DATA_CREATED', 'api data created sucessfuly'),
	(11, 'INTERNAL_SERVER_ERROR', 'error, Internal Server error'),
	(12, 'SOURCE_ID_NOT_FOUND', 'Source id not Found');
/*!40000 ALTER TABLE `mw_log_types` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.mw_message_templates
CREATE TABLE IF NOT EXISTS `mw_message_templates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `integration_id` int(11) NOT NULL,
  `message_type` int(11) NOT NULL,
  `message_code` varchar(11) NOT NULL,
  `template` mediumtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQUE_TYPE_CODE` (`integration_id`,`message_type`,`message_code`),
  KEY `message_type` (`message_type`),
  KEY `integration_id` (`integration_id`),
  CONSTRAINT `mw_message_templates_ibfk_1` FOREIGN KEY (`integration_id`) REFERENCES `mw_integrations_list` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `mw_message_templates_ibfk_2` FOREIGN KEY (`message_type`) REFERENCES `mw_message_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.mw_message_templates: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `mw_message_templates` DISABLE KEYS */;
/*!40000 ALTER TABLE `mw_message_templates` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.mw_message_types
CREATE TABLE IF NOT EXISTS `mw_message_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.mw_message_types: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `mw_message_types` DISABLE KEYS */;
INSERT INTO `mw_message_types` (`id`, `type`) VALUES
	(1, 'EMAIL'),
	(2, 'SMS');
/*!40000 ALTER TABLE `mw_message_types` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.mw_options
CREATE TABLE IF NOT EXISTS `mw_options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_id` int(11) NOT NULL,
  `option_key` varchar(25) NOT NULL,
  `option_value` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `vendor_id_option_key` (`vendor_id`,`option_key`),
  CONSTRAINT `mw_options_ibfk_1` FOREIGN KEY (`vendor_id`) REFERENCES `mw_vendors` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.mw_options: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `mw_options` DISABLE KEYS */;
INSERT INTO `mw_options` (`id`, `vendor_id`, `option_key`, `option_value`) VALUES
	(1, 1, 'accountSid', 'a886d626b750a36d310d04cb7ba8dee78be128e528e4aa65ff4163a440a19dcb3bc77163dbe7eeb447b938928e509deff77520ebf990a6de70aa54f5739fa979GEpcCRCPDb/us33MtOejmjElLooOClMYH4MzW1OOWW2mLkwim2n+wuB/YT7yr0QafLZzE7AhKXI636veGmZEZA=='),
	(2, 1, 'authToken', 'a1e30fc5472b19bcf44af02bf17a7ad3fc18946b4c0bd114d66acea7566b17edf9f1871e7bf12438047d06737a25b4053c8e0cd80102eb093507ea33f26a822ecxCYaat7LeIlhyfAO8UQNM0bSQPILW6do3UCqSg/qME1xgRql6wKpo6pAQlTPY+QnxOCrjUFxEJWGf5h64HGSw==');
/*!40000 ALTER TABLE `mw_options` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.mw_vendors
CREATE TABLE IF NOT EXISTS `mw_vendors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(63) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.mw_vendors: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `mw_vendors` DISABLE KEYS */;
INSERT INTO `mw_vendors` (`id`, `name`) VALUES
	(1, 'Twilio');
/*!40000 ALTER TABLE `mw_vendors` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.page
CREATE TABLE IF NOT EXISTS `page` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `fresh_content` text NOT NULL,
  `keyword` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `template` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.page: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `page` DISABLE KEYS */;
/*!40000 ALTER TABLE `page` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.page_block_element
CREATE TABLE IF NOT EXISTS `page_block_element` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `group_name` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `image_preview` varchar(200) NOT NULL,
  `block_name` varchar(200) NOT NULL,
  `content_type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.page_block_element: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `page_block_element` DISABLE KEYS */;
/*!40000 ALTER TABLE `page_block_element` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.product
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `product_name` varchar(250) DEFAULT NULL,
  `sku` varchar(250) DEFAULT NULL,
  `url` varchar(250) DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `price` varchar(39) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `variant` varchar(250) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.product: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
/*!40000 ALTER TABLE `product` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.rest
CREATE TABLE IF NOT EXISTS `rest` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `subject` varchar(200) NOT NULL,
  `table_name` varchar(200) NOT NULL,
  `primary_key` varchar(200) NOT NULL,
  `x_api_key` varchar(20) DEFAULT NULL,
  `x_token` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.rest: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `rest` DISABLE KEYS */;
/*!40000 ALTER TABLE `rest` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.rest_field
CREATE TABLE IF NOT EXISTS `rest_field` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `rest_id` int(11) NOT NULL,
  `field_name` varchar(200) NOT NULL,
  `field_label` varchar(200) DEFAULT NULL,
  `input_type` varchar(200) NOT NULL,
  `show_column` varchar(10) DEFAULT NULL,
  `show_add_api` varchar(10) DEFAULT NULL,
  `show_update_api` varchar(10) DEFAULT NULL,
  `show_detail_api` varchar(10) DEFAULT NULL,
  `relation_table` varchar(200) DEFAULT NULL,
  `relation_value` varchar(200) DEFAULT NULL,
  `relation_label` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.rest_field: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `rest_field` DISABLE KEYS */;
/*!40000 ALTER TABLE `rest_field` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.rest_field_validation
CREATE TABLE IF NOT EXISTS `rest_field_validation` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `rest_field_id` int(11) NOT NULL,
  `rest_id` int(11) NOT NULL,
  `validation_name` varchar(200) NOT NULL,
  `validation_value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.rest_field_validation: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `rest_field_validation` DISABLE KEYS */;
/*!40000 ALTER TABLE `rest_field_validation` ENABLE KEYS */;

-- Volcando estructura para tabla amuco_db.rest_input_type
CREATE TABLE IF NOT EXISTS `rest_input_type` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(200) NOT NULL,
  `relation` varchar(20) NOT NULL,
  `validation_group` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla amuco_db.rest_input_type: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `rest_input_type` DISABLE KEYS */;
INSERT INTO `rest_input_type` (`id`, `type`, `relation`, `validation_group`) VALUES
	(1, 'input', '0', 'input'),
	(2, 'timestamp', '0', 'timestamp'),
	(3, 'file', '0', 'file'),
	(4, 'select', '1', 'select');
/*!40000 ALTER TABLE `rest_input_type` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

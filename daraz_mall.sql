/*
Navicat MySQL Data Transfer

Source Server         : Local Connection
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : daraz_mall

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2024-01-23 20:34:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `failed_jobs`
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_reset_tokens_table', '1');
INSERT INTO `migrations` VALUES ('3', '2019_08_19_000000_create_failed_jobs_table', '1');
INSERT INTO `migrations` VALUES ('4', '2019_12_14_000001_create_personal_access_tokens_table', '1');
INSERT INTO `migrations` VALUES ('11', '2024_01_18_141600_create_plan_table', '2');
INSERT INTO `migrations` VALUES ('12', '2024_01_18_142620_create_payment_table', '2');
INSERT INTO `migrations` VALUES ('13', '2024_01_19_085545_create_users_table', '3');

-- ----------------------------
-- Table structure for `password_reset_tokens`
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_reset_tokens
-- ----------------------------
INSERT INTO `password_reset_tokens` VALUES ('ayzeetech@gmail.com', '$2y$12$N1LkbM/Hr31erv.wrWixJe57RsNzc.fYLY9IQzWsLjeaJCi7p7pzO', '2024-01-22 11:29:55');
INSERT INTO `password_reset_tokens` VALUES ('owaismuhummad12.2005@gmail.com', '$2y$12$xpOJ4y903HNMjTMsIA56BOhrg8YkwzNmptwtWaEbxTgRQVEl9U.Y2', '2024-01-19 14:52:48');

-- ----------------------------
-- Table structure for `payment`
-- ----------------------------
DROP TABLE IF EXISTS `payment`;
CREATE TABLE `payment` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `card_holder_name` varchar(300) NOT NULL,
  `card_no` varchar(300) NOT NULL,
  `date` varchar(300) NOT NULL,
  `cvc` varchar(300) NOT NULL,
  `address` varchar(300) NOT NULL,
  `state` varchar(300) NOT NULL,
  `zip` varchar(300) NOT NULL,
  `fullname` varchar(300) NOT NULL,
  `phone_no` varchar(300) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `payment_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of payment
-- ----------------------------
INSERT INTO `payment` VALUES ('1', 'nygemaze@mailinator.com', 'Emerson Knight', '040404040404040404040404', '17-Feb-2005', 'Veniam doloremque s', 'Non cillum consectet', 'State', '11654', 'Acton Blevins', '+1 (258) 952-7849', '2024-01-22 11:45:08', '2024-01-22 11:45:08');
INSERT INTO `payment` VALUES ('2', 'jojixyt@mailinator.com', 'Lisandra Bell', 'Illum nemo qui reru', '24-Jul-1973', 'Est commodi velit u', 'Labore rerum consequ', 'State', '11129', 'TaShya Whitehead', '+1 (339) 444-1826', '2024-01-22 11:51:47', '2024-01-22 11:51:47');
INSERT INTO `payment` VALUES ('3', 'buvomifoj@mailinator.com', 'Illana Maynard', 'Ad non ipsa nisi vo', '12-Nov-2022', 'Dolorem dolor accusa', 'Et doloribus dolores', 'State', '43856', 'Lionel Rios', '+1 (941) 442-6338', '2024-01-22 11:58:27', '2024-01-22 11:58:27');
INSERT INTO `payment` VALUES ('4', 'jipu@mailinator.com', 'Ali Richardson', 'Ipsum ullam ut qui c', '27-Sep-2009', 'Id non animi minima', 'Ullamco obcaecati pa', 'State', '53195', 'Kevyn Dickson', '+1 (221) 704-7193', '2024-01-22 11:58:48', '2024-01-22 11:58:48');
INSERT INTO `payment` VALUES ('5', 'pyvunyfa@mailinator.com', 'Christen Shaw', 'Quibusdam dolor eu d', '28-Nov-1991', 'Enim vero irure reic', 'Explicabo Deleniti', 'State', '38862', 'Roanna Serrano', '+1 (515) 356-7141', '2024-01-22 11:59:51', '2024-01-22 11:59:51');
INSERT INTO `payment` VALUES ('6', 'fecesykako@mailinator.com', 'Emerald Erickson', 'Dolor non enim conse', '02-Jun-2015', 'Sint voluptatem dist', 'Eos ullam velit cum', 'State', '96621', 'Jennifer Zimmerman', '+1 (481) 274-8952', '2024-01-22 12:05:28', '2024-01-22 12:05:28');
INSERT INTO `payment` VALUES ('7', 'tykukyfipe@mailinator.com', 'Michael Bridges', 'Non eum deserunt opt', '28-Apr-2021', 'Reiciendis sed venia', 'Reprehenderit offici', 'State', '57793', 'Aiko Ware', '+1 (854) 216-2013', '2024-01-22 12:06:14', '2024-01-22 12:06:14');
INSERT INTO `payment` VALUES ('8', 'zohoj@mailinator.com', 'Leila Blanchard', 'Id magnam obcaecati', '01-Sep-2008', 'Ipsum perferendis n', 'Duis quis numquam co', 'State', '47092', 'Hector Curry', '+1 (449) 504-4228', '2024-01-22 12:26:11', '2024-01-22 12:26:11');
INSERT INTO `payment` VALUES ('11', 'gidopypo@mailinator.com', 'Matthew Ingram', 'Et iste corporis com', '20-Feb-2000', 'Nobis eligendi sint', 'Voluptas in ratione', 'State', '38227', 'Ariel Cooley', '+1 (305) 255-2915', '2024-01-22 12:27:57', '2024-01-22 12:27:57');
INSERT INTO `payment` VALUES ('12', 'seru@mailinator.com', 'Seth Cochran', 'At dolorum est eu in', '08-Apr-1970', 'Excepteur sit rerum', 'Consequat Vel ullam', 'State', '62663', 'Castor Goodman', '+1 (749) 898-5367', '2024-01-22 17:04:57', '2024-01-22 17:04:57');
INSERT INTO `payment` VALUES ('13', 'movocat@mailinator.com', 'Karleigh Munoz', 'Perferendis neque de', '27-Aug-1996', 'Voluptate asperiores', 'In dolore quo necess', 'State', '32699', 'Rosalyn Fields', '+1 (742) 144-5864', '2024-01-22 17:58:56', '2024-01-22 17:58:56');
INSERT INTO `payment` VALUES ('14', 'cahidak@mailinator.com', 'Kalia Pitts', 'Laborum Excepturi i', '19-Sep-2004', 'Magna accusamus irur', 'Error repellendus I', 'State', '90626', 'Pearl Underwood', '+1 (503) 309-9064', '2024-01-23 09:26:54', '2024-01-23 09:26:54');
INSERT INTO `payment` VALUES ('15', 'hunonydeho@mailinator.com', 'Hammett Blevins', 'Dolore quas magnam s', '02-Jan-1985', 'Perferendis libero f', 'Sit qui ut culpa s', 'State', '41219', 'Karen Wolfe', '+1 (756) 774-1674', '2024-01-23 10:03:20', '2024-01-23 10:03:20');
INSERT INTO `payment` VALUES ('17', 'vofahe@mailinator.com', 'Unity Campbell', 'Ipsa vel et delenit', '13-Jul-2000', 'Fugiat culpa dolor', 'Aut nesciunt doloru', 'State', '59337', 'Hammett Hayes', '+1 (386) 532-3309', '2024-01-23 10:21:46', '2024-01-23 10:21:46');
INSERT INTO `payment` VALUES ('18', 'meleby@mailinator.com', 'Hilel Hartman', 'Omnis laborum Conse', '22-Dec-1976', 'Alias fugit magnam', 'Aut cillum labore ob', 'State', '24286', 'Nicholas Velez', '+1 (849) 185-1576', '2024-01-23 11:25:13', '2024-01-23 11:25:13');
INSERT INTO `payment` VALUES ('19', 'nidafe@mailinator.com', 'khansahab', 'Nesciunt sunt volu', '08-Dec-1996', 'Quos voluptatum amet', 'Eligendi laudantium', 'State', '84144', 'Winifred Whitley', '+1 (462) 931-9465', '2024-01-23 11:32:45', '2024-01-23 11:32:45');
INSERT INTO `payment` VALUES ('20', 'navah@mailinator.com', 'Lucas Beasley', 'Aliqua Quia quam se', '10-Oct-2001', 'Minus velit vero mai', 'Sit est dolor ducim', 'State', '48935', 'Althea Montoya', '+1 (323) 202-6783', '2024-01-23 11:43:11', '2024-01-23 11:43:11');
INSERT INTO `payment` VALUES ('21', 'qiqeh@mailinator.com', 'Sharon Mack', 'Anim amet qui sint', '22-Jan-1982', 'Quasi et ut commodi', 'Commodi magnam enim', 'State', '78876', 'Kirk Park', '+1 (558) 104-4384', '2024-01-23 11:44:30', '2024-01-23 11:44:30');
INSERT INTO `payment` VALUES ('22', 'syqeby@mailinator.com', 'Simon Zamora', 'Optio consequatur', '23-Apr-2009', 'Delectus voluptas r', 'Voluptatem deserunt', 'State', '50220', 'Kai Travis', '+1 (215) 464-8676', '2024-01-23 11:46:24', '2024-01-23 11:46:24');
INSERT INTO `payment` VALUES ('23', 'horijowyl@mailinator.com', 'Fleur Crane', 'Incididunt et autem', '17-Jun-1997', 'Reprehenderit quae s', 'Soluta iste adipisic', 'State', '71691', 'Jeanette Fernandez', '+1 (102) 278-8771', '2024-01-23 11:47:25', '2024-01-23 11:47:25');
INSERT INTO `payment` VALUES ('24', 'wulelazoni@mailinator.com', 'Hedwig Jenkins', 'Ut voluptates deseru', '20-Jan-2019', 'Corrupti ad asperna', 'Tempore officia sae', 'State', '30857', 'Zephr Webb', '+1 (213) 769-7093', '2024-01-23 12:01:28', '2024-01-23 12:01:28');
INSERT INTO `payment` VALUES ('25', 'sepijaziz@mailinator.com', 'Jocelyn Sears', 'Pariatur Corporis a', '22-Feb-1984', 'Laborum Esse iusto', 'Aperiam sunt labore', 'State', '43604', 'Sandra Cotton', '+1 (371) 932-5811', '2024-01-23 12:02:17', '2024-01-23 12:02:17');
INSERT INTO `payment` VALUES ('26', 'xufaje@mailinator.com', 'Roth Hart', 'Dolor labore vel qua', '18-May-1984', 'Culpa numquam delec', 'Repudiandae iste lab', 'State', '80025', 'Lilah Deleon', '+1 (873) 224-7731', '2024-01-23 12:56:22', '2024-01-23 12:56:22');
INSERT INTO `payment` VALUES ('27', 'jyzezop@mailinator.com', 'Ella Strickland', 'Amet elit laborios', '17-Mar-1987', 'Et facilis et enim e', 'Culpa distinctio Ex', 'State', '56370', 'Kelsey Potter', '+1 (883) 537-4073', '2024-01-23 12:59:19', '2024-01-23 12:59:19');
INSERT INTO `payment` VALUES ('28', 'dyxyrora@mailinator.com', 'Zelenia Dawson', 'Voluptatem et quide', '15-Jan-1973', 'Quo voluptate natus', 'Molestiae voluptas c', 'State', '30575', 'Kevyn Santos', '+1 (984) 778-7403', '2024-01-23 14:44:42', '2024-01-23 14:44:42');
INSERT INTO `payment` VALUES ('29', 'cykokiva@mailinator.com', 'Chelsea Norton', 'Optio deleniti non', '01-Jun-1979', 'Necessitatibus fugia', 'Amet iusto do error', 'State', '18592', 'Kathleen Travis', '+1 (601) 922-7149', '2024-01-23 15:06:03', '2024-01-23 15:06:03');

-- ----------------------------
-- Table structure for `personal_access_tokens`
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for `plan`
-- ----------------------------
DROP TABLE IF EXISTS `plan`;
CREATE TABLE `plan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `plan_type` varchar(100) NOT NULL,
  `plan_img` varchar(100) NOT NULL,
  `daily_earning` varchar(300) NOT NULL,
  `total_product` varchar(800) NOT NULL,
  `price` varchar(200) NOT NULL,
  `perday_balance` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of plan
-- ----------------------------
INSERT INTO `plan` VALUES ('3', 'Bronze Plan', 'c2c7736a390bda7f8639896a3aa0816d1705599085.gif', 'Daily Earning 10 Rupees', '5 Products', 'Per Product 2 Rupees', 'Daraz Earing Balance 350 Rupees Per Day', 'ACTIVE', '2024-01-18 17:31:26', '2024-01-22 10:18:26');
INSERT INTO `plan` VALUES ('4', 'Silver Plan', 'f9243acebc537740989ab699a7aee1121705599169.gif', 'Daily Earning 10 Rupees', '5 Products', 'Per Product 2 Rupees', 'Daraz Earing Balance 350 Rupees Per Day', 'ACTIVE', '2024-01-18 17:32:49', '2024-01-22 10:18:22');
INSERT INTO `plan` VALUES ('5', 'Platinum Plan', '59943bd76d2cfddfb239310561d146dd1705599306.gif', 'Daily Earning 10 Rupees', '5 Products', 'Per Product 2 Rupees', 'Daraz Earing Balance 350 Rupees Per Day', 'ACTIVE', '2024-01-18 17:35:06', '2024-01-22 10:18:24');
INSERT INTO `plan` VALUES ('9', 'Special Plan', 'aa7708dd57e108fa8928ea87556be6b81705600439.gif', 'Daily Earning 10 Rupee', '5 Products', 'Per Product 2 Rupees', 'Daraz Earing Balance 350 Rupees Per Day', 'ACTIVE', '2024-01-18 17:53:59', '2024-01-22 10:16:58');
INSERT INTO `plan` VALUES ('10', 'Maxime ut cillum nih', 'e42913c8bc4598565b9998de4e561f0f1705663624.png', '1985', 'Quia ut modi unde qu', '571', '5', 'DEACTIVE', '2024-01-19 11:27:04', '2024-01-22 10:18:15');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'aaaaaa', 'aaaaaa', '03312187411', 'ayzeetech@gmail.com', null, '$2y$12$FVUQznI5Pp5wu8SkzImazOCwVEBbfgOXRCIfAhJz8nHbNywYSIzlO', 'jOhtChbz724J6Ks3wI5UkzFxLx46QMjt9tI1ZNHXD28W33TPY1dSwy0Fw8QC', '2024-01-19 10:07:34', '2024-01-19 10:20:42');
INSERT INTO `users` VALUES ('2', 'Ali', 'aaaaa', '03312187411', 'wali@gmail.com', null, '$2y$12$JMALASKskGTT.oidI3B5y.D/IwPDN.Nc8R593LGLey8..eT0xd7sC', null, '2024-01-19 10:24:28', '2024-01-19 10:24:28');
INSERT INTO `users` VALUES ('3', 'Ali', 'Muhammad', '03312187411', 'alimuhummad12.2005@gmail.com', null, '$2y$12$Idx8cqwenuG7fgAhDg4UAODsF18T3w5b5bKax.BgrAUVROz5cau1.', '5dhnoUCyVkmtVNQequNzdYUpYAg0RhT8wIMHDf98diS3DOjkyepXEZVXcb7x', '2024-01-19 10:26:06', '2024-01-19 10:36:59');
INSERT INTO `users` VALUES ('4', 'Gwendolyn', 'Rocha', '+1 (836) 778-8084', 'saveca@mailinator.com', null, '$2y$12$1bqy42zRCTXLiAnMDqXovuG2vh6ySdYvprDtSH5aVgv5.VM3eN1RG', null, '2024-01-19 14:06:18', '2024-01-19 14:06:18');
INSERT INTO `users` VALUES ('5', 'Ali', 'Muhammad', '+1 (592) 898-2145', 'owaismuhummad12.2005@gmail.com', null, '$2y$12$iAPn2YBm68npqyiZadLlmeY5yTkvMsq/eXS4.9Ze6//5T7u3IHk/2', null, '2024-01-19 14:07:10', '2024-01-20 15:09:34');
INSERT INTO `users` VALUES ('6', 'Damian', 'Osborn', '+1 (135) 657-2287', 'cenifuju@mailinator.com', null, '$2y$12$yXym9Be9wfa.VpFY/u3jw.vxmJg/sM0FN5yrCXuagf1XL1RLdMInq', null, '2024-01-22 11:56:07', '2024-01-22 11:56:07');
INSERT INTO `users` VALUES ('7', 'Shaeleigh', 'Bonner', '+1 (273) 824-9964', 'alimuhammad12.2005@gmail.com', null, '$2y$12$9ELBsRg.KRS5Qyv/kjY/mOqT9vZ9r/2bGfm60dVv5zp0wOVicfdt6', null, '2024-01-22 11:56:59', '2024-01-22 11:56:59');
INSERT INTO `users` VALUES ('8', 'Bisma', 'Imran', '03312187411', 'bismaimran419@gmail.com', null, '$2y$12$Fp55pEQmoy6cs2lagcAzCOI9l3SSQMpXlqPT/HpsAnCK9JxQiXAwa', null, '2024-01-22 17:04:08', '2024-01-22 17:04:08');
INSERT INTO `users` VALUES ('9', 'hassan', 'khan', '+1 (324) 406-1531', 'savexag@mailinator.com', null, '$2y$12$JoBzx.qVv5uGJ57BYUrHyeVZPXXpKv1eQMz/hYBe/y1Y7R3FqsdGy', null, '2024-01-23 11:32:26', '2024-01-23 11:32:26');
INSERT INTO `users` VALUES ('10', 'Faizan', 'Siduqe', '+1 (626) 324-2499', 'bonuj@mailinator.com', null, '$2y$12$rC2ZrOoms.OBMr50kfnhouVzOqLb8sVG1wY9aVcGc3i3.0nfl9yLq', null, '2024-01-23 11:42:56', '2024-01-23 11:42:56');
INSERT INTO `users` VALUES ('11', 'Noman', 'Singleton', '+1 (989) 836-9847', 'rawywify@mailinator.com', null, '$2y$12$/zMw0wSQKRisnpS5mjJJL./.PgQ.W6mpaz4efjB9BeRYyQDOKj.ra', null, '2024-01-23 11:50:07', '2024-01-23 14:45:03');
INSERT INTO `users` VALUES ('12', 'Mira', 'Charles', '+1 (311) 495-2636', 'sytysup@mailinator.com', null, '$2y$12$mPVCTabP3HmmlEmWoTIHVOdw0zCGVxhR6RSyAQnrAFCELeVZFHFjW', null, '2024-01-23 12:58:22', '2024-01-23 12:58:22');

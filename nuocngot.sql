-- --------------------------------------------------------
-- Máy chủ:                      127.0.0.1
-- Server version:               8.4.3 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Phiên bản:           12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for nuocngot
CREATE DATABASE IF NOT EXISTS `nuocngot` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `nuocngot`;

-- Dumping structure for table nuocngot.brands
CREATE TABLE IF NOT EXISTS `brands` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `brands_name_unique` (`name`),
  UNIQUE KEY `brands_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nuocngot.brands: ~0 rows (approximately)
INSERT INTO `brands` (`id`, `name`, `slug`, `image`, `created_at`, `updated_at`) VALUES
	(1, 'Et Eos', 'et-eos', '2.jpg', '2025-12-01 08:20:30', '2025-12-01 08:20:30'),
	(2, 'Praesentium Voluptate', 'praesentium-voluptate', '4.jpg', '2025-12-01 08:20:30', '2025-12-01 08:20:30'),
	(3, 'Neque Officiis', 'neque-officiis', '5.jpg', '2025-12-01 08:20:30', '2025-12-01 08:20:30'),
	(4, 'Ut Aut', 'ut-aut', '3.jpg', '2025-12-01 08:20:30', '2025-12-01 08:20:30'),
	(5, 'Minus Ut', 'minus-ut', '4.jpg', '2025-12-01 08:20:30', '2025-12-01 08:20:30'),
	(6, 'Commodi Optio', 'commodi-optio', '1.jpg', '2025-12-01 08:20:30', '2025-12-01 08:20:30');

-- Dumping structure for table nuocngot.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_unique` (`name`),
  UNIQUE KEY `categories_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nuocngot.categories: ~0 rows (approximately)
INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `created_at`, `updated_at`) VALUES
	(1, 'Suscipit Aliquid', 'suscipit-aliquid', '4.jpg', '2025-12-01 08:20:30', '2025-12-01 08:20:30'),
	(2, 'At Aut', 'at-aut', '4.jpg', '2025-12-01 08:20:30', '2025-12-01 08:20:30'),
	(3, 'Voluptatibus Molestias', 'voluptatibus-molestias', '4.jpg', '2025-12-01 08:20:30', '2025-12-01 08:20:30'),
	(4, 'Dignissimos Quos', 'dignissimos-quos', '2.jpg', '2025-12-01 08:20:30', '2025-12-01 08:20:30'),
	(5, 'Quaerat Deleniti', 'quaerat-deleniti', '2.jpg', '2025-12-01 08:20:30', '2025-12-01 08:20:30'),
	(6, 'Et Quia', 'et-quia', '1.jpg', '2025-12-01 08:20:30', '2025-12-01 08:20:30');

-- Dumping structure for table nuocngot.contacts
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nuocngot.contacts: ~0 rows (approximately)

-- Dumping structure for table nuocngot.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nuocngot.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table nuocngot.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nuocngot.migrations: ~0 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2014_10_12_100000_create_password_resets_table', 1),
	(4, '2019_08_19_000000_create_failed_jobs_table', 1),
	(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(6, '2024_10_14_085745_create_brands_table', 1),
	(7, '2024_10_14_085801_create_categories_table', 1),
	(8, '2024_10_14_085812_create_products_table', 1),
	(9, '2024_10_28_064820_create_orders_table', 1),
	(10, '2024_10_28_065010_create_order_items_table', 1),
	(11, '2024_10_28_065026_create_shippings_table', 1),
	(12, '2024_10_28_065034_create_transactions_table', 1),
	(13, '2024_11_12_081206_create_contacts_table', 1);

-- Dumping structure for table nuocngot.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `discount` decimal(8,2) NOT NULL DEFAULT '0.00',
  `total` decimal(8,2) NOT NULL,
  `total_items` int unsigned NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('ordered','delivered','canceled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ordered',
  `is_shipping_different` tinyint(1) NOT NULL DEFAULT '0',
  `delivered_date` date DEFAULT NULL,
  `canceled_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`),
  CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- Dumping structure for table nuocngot.order_items
CREATE TABLE IF NOT EXISTS `order_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint unsigned NOT NULL,
  `order_id` bigint unsigned NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `quantity` int NOT NULL,
  `options` longtext COLLATE utf8mb4_unicode_ci,
  `rstatus` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_items_product_id_foreign` (`product_id`),
  KEY `order_items_order_id_foreign` (`order_id`),
  CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- Dumping structure for table nuocngot.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nuocngot.password_resets: ~0 rows (approximately)

-- Dumping structure for table nuocngot.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nuocngot.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table nuocngot.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nuocngot.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table nuocngot.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `regular_price` decimal(8,2) NOT NULL,
  `sale_price` decimal(8,2) DEFAULT NULL,
  `SKU` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock_status` enum('instock','outofstock') COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `quantity` int unsigned NOT NULL DEFAULT '1',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint unsigned NOT NULL,
  `brand_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_slug_unique` (`slug`),
  KEY `products_category_id_foreign` (`category_id`),
  KEY `products_brand_id_foreign` (`brand_id`),
  CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nuocngot.products: ~0 rows (approximately)
INSERT INTO `products` (`id`, `name`, `slug`, `short_description`, `description`, `regular_price`, `sale_price`, `SKU`, `stock_status`, `featured`, `quantity`, `image`, `images`, `category_id`, `brand_id`, `created_at`, `updated_at`) VALUES
	(1, 'Reiciendis Aperiam', 'reiciendis-aperiam', 'Itaque saepe vero necessitatibus sequi quos totam vel et. Eius commodi aut ullam eos et sequi. Est odio quia quia possimus. Aperiam reiciendis fuga laborum ducimus.', 'Ipsum neque in neque excepturi doloremque id aut. Accusantium sit vel consectetur quia eos autem. Voluptate sit nihil sit architecto numquam voluptatem. Corporis natus ut et quis sit. Deleniti adipisci vitae velit. Neque expedita magnam doloremque id repudiandae architecto at. Voluptatem est et dolorem quidem ipsum occaecati. Fugiat sint blanditiis et. Rerum culpa esse aut corporis ipsam est.', 6.00, NULL, 'SMD155', 'instock', 0, 197, '8.jpg', '["23.jpg","11.jpg","21.jpg"]', 2, 3, '2025-12-01 08:20:30', '2025-12-01 08:20:30'),
	(2, 'Quas Illum', 'quas-illum', 'Sit eveniet maiores minus itaque aut non nihil dignissimos. Quod corrupti dolorem eum sed vel blanditiis sed.', 'Illum vel repellendus nostrum iste aspernatur illo et. Recusandae occaecati commodi soluta tenetur. Qui illum dolores sit. Est voluptas voluptas perspiciatis dolore minima sed. Laborum omnis quos consequatur. Omnis non dolorum consequuntur magnam. Aut reiciendis ratione eius molestiae doloremque deleniti architecto. Est est aut odio quia vel incidunt ducimus.', 4.00, NULL, 'SMD367', 'instock', 0, 158, '2.jpg', '["22.jpg","7.jpg","14.jpg"]', 3, 4, '2025-12-01 08:20:30', '2025-12-01 08:20:30'),
	(3, 'Sequi Consequuntur', 'sequi-consequuntur', 'Sed odit velit libero itaque saepe in. Doloremque eum minima quis voluptas. Eum laborum ab eligendi aut et quos ullam.', 'Culpa praesentium voluptate exercitationem et officiis. Iusto ex magni distinctio ut. Quos cupiditate incidunt aut repellendus laudantium. Quis nesciunt temporibus eligendi rerum earum. Qui aut quasi nobis enim impedit dolorum. Voluptatem delectus fugit rerum eligendi. Deserunt iste cupiditate aspernatur ratione. Quisquam dolores aspernatur voluptatum soluta voluptatem. Quas minus pariatur laudantium modi quis. Incidunt eligendi hic et iste.', 2.00, NULL, 'SMD409', 'instock', 0, 148, '12.jpg', '["22.jpg","24.jpg","7.jpg"]', 4, 1, '2025-12-01 08:20:30', '2025-12-01 08:20:30'),
	(4, 'Ut Perspiciatis', 'ut-perspiciatis', 'Voluptatum quam et itaque deserunt molestiae animi. Vitae iusto aut eum perspiciatis explicabo ut quis. Laboriosam quas ducimus ea. Minus voluptatem et molestiae dolore quis libero.', 'Reiciendis aut rerum exercitationem. Ducimus illum animi veniam minus repudiandae soluta. Animi iure facere assumenda voluptatem modi. Repellat est maiores eos dolor laboriosam. Soluta placeat et fugit quae rerum aut. Dolores sed vel ex dolorem. Quis quam minus ipsum eligendi tempore commodi quae. Dolore et sed autem quas earum. Qui totam praesentium quas eveniet voluptates autem officiis. Exercitationem vel adipisci ea eligendi quis. Tempora consequuntur aut sed ad cumque quas.', 21.00, NULL, 'SMD423', 'instock', 0, 145, '6.jpg', '["18.jpg","22.jpg","24.jpg"]', 5, 4, '2025-12-01 08:20:30', '2025-12-01 08:20:30'),
	(5, 'Repellendus Voluptas', 'repellendus-voluptas', 'Quos tempore architecto quo commodi numquam consectetur sint. Aut nulla ipsam ut aut. Enim impedit quasi rerum. Temporibus aperiam aut sit ullam.', 'Aut iusto molestiae eius. Dignissimos provident quo consequatur nemo omnis non accusantium. Non non omnis expedita porro velit accusantium omnis. Rerum placeat voluptates porro. Aut quia expedita qui quod. Consectetur consequatur rerum eum vel ab exercitationem. Quia voluptatum in fugit aut consequatur deleniti. Ut dolorum voluptate ut deserunt qui rerum qui. Animi quidem minima commodi.', 14.00, NULL, 'SMD407', 'instock', 0, 193, '20.jpg', '["22.jpg","2.jpg","7.jpg"]', 5, 1, '2025-12-01 08:20:30', '2025-12-01 08:20:30'),
	(6, 'Sed Deserunt', 'sed-deserunt', 'Id iste qui quis vitae amet est quidem. Nihil voluptatem doloribus omnis qui nostrum. Recusandae animi tempore ea blanditiis nam voluptatibus. Libero placeat magnam occaecati deleniti.', 'Quasi quia ipsum velit culpa. Impedit minus consequatur voluptatibus molestiae autem expedita. Qui expedita officia nihil et sint. Et rerum velit optio dolor quae rem voluptas. Ut soluta numquam ex debitis provident rerum voluptatibus. Fuga omnis sapiente ut vel eum incidunt quae reiciendis. Laboriosam omnis sunt accusantium non maxime delectus.', 15.00, NULL, 'SMD279', 'instock', 0, 101, '24.jpg', '["24.jpg","3.jpg","10.jpg"]', 5, 1, '2025-12-01 08:20:30', '2025-12-01 08:20:30'),
	(7, 'Similique Quo', 'similique-quo', 'Soluta magni libero ad ex natus ex dolorum. Quae eaque voluptas temporibus autem voluptatem fuga.', 'Voluptas animi voluptas laborum cumque a minima iusto illo. Iure labore delectus voluptatum quam fugit temporibus ipsa. Velit consequuntur quo est repellat velit maxime. Fugiat exercitationem quia repudiandae debitis quod aut sed. Aut sit possimus amet. Possimus temporibus minima ut quae unde autem. Architecto facere qui suscipit accusamus. Debitis rerum eligendi ut expedita alias beatae reprehenderit.', 3.00, NULL, 'SMD213', 'instock', 0, 162, '7.jpg', '["16.jpg","16.jpg","11.jpg"]', 1, 3, '2025-12-01 08:20:30', '2025-12-01 08:20:30'),
	(8, 'Eaque Repudiandae', 'eaque-repudiandae', 'Quisquam aliquid possimus eius nesciunt molestiae. Tempora blanditiis ducimus voluptas. Labore id quidem veniam nihil. Quidem ut rerum repudiandae et.', 'Nostrum vero voluptatem in. Fuga facilis est culpa deleniti provident. Sit et mollitia voluptatem voluptatem nostrum. Repellendus aperiam iure ipsam sed et harum aut et. Dolorem quam reiciendis aut laborum laboriosam. Possimus veniam qui occaecati perferendis aliquid quidem dolor et. Numquam rem debitis sint officia cum cumque consequatur. At cupiditate saepe reprehenderit illo dolor. Vel deserunt at iste asperiores. Quia cumque et eligendi adipisci laborum.', 5.00, NULL, 'SMD235', 'instock', 0, 198, '15.jpg', '["15.jpg","9.jpg","10.jpg"]', 1, 6, '2025-12-01 08:20:30', '2025-12-01 08:20:30'),
	(9, 'Odio Odit', 'odio-odit', 'Nam magnam nemo ea accusantium est illum. Unde repellat autem voluptate. Accusantium sed ratione officiis vel at aliquam maiores eos.', 'Deleniti doloremque et qui velit. Autem magnam fugiat culpa voluptatem. Rerum sit laboriosam commodi saepe nostrum voluptas. Aperiam sunt quibusdam maiores suscipit voluptatum et. Aut temporibus voluptatum pariatur aut. Eius natus voluptatum laudantium debitis voluptatem. Voluptates nulla sint id possimus id qui maiores consectetur. Ullam qui harum ut. Eaque tenetur iure nulla. Nisi nulla fuga exercitationem consequatur est. Quis id et perferendis aliquam.', 4.00, NULL, 'SMD459', 'instock', 0, 152, '19.jpg', '["13.jpg","14.jpg","16.jpg"]', 4, 3, '2025-12-01 08:20:30', '2025-12-01 08:20:30'),
	(10, 'Architecto Non', 'architecto-non', 'Ipsa sit delectus consequatur provident expedita. Nemo enim minus est perferendis. Voluptatem placeat illum accusamus.', 'Assumenda reiciendis sit sit quo magnam rerum. Nesciunt error optio qui blanditiis velit. Cum voluptates nisi doloribus nesciunt fuga voluptas modi. Laudantium veritatis veniam et. Qui ex voluptatum debitis cupiditate perferendis quia. Eos non qui velit minima nihil sunt. Nisi fugiat magni quibusdam et rerum rem praesentium. Eligendi sint quia fugit eaque maiores vel velit.', 4.00, NULL, 'SMD464', 'instock', 0, 154, '4.jpg', '["22.jpg","15.jpg","1.jpg"]', 6, 2, '2025-12-01 08:20:30', '2025-12-01 08:20:30'),
	(11, 'Et Consequatur', 'et-consequatur', 'Dolor vitae earum facilis molestias ipsa ut aut. Praesentium quas asperiores est laborum quibusdam nesciunt. Et provident voluptas fuga perspiciatis.', 'Rerum sunt omnis quos ea sit. Exercitationem est omnis non qui dolor. Quo numquam non aut suscipit consequatur pariatur vel. Ut ut omnis molestiae molestiae totam quia quod. Corporis qui eos ut ratione iusto debitis. Dicta quo facere voluptate voluptatem non. Dignissimos incidunt est aliquam numquam. Reiciendis deleniti quia non aut sed adipisci distinctio quam. Sint necessitatibus quibusdam aliquam nihil adipisci aut amet officia.', 1.00, NULL, 'SMD101', 'instock', 0, 182, '1.jpg', '["4.jpg","13.jpg","24.jpg"]', 4, 6, '2025-12-01 08:20:30', '2025-12-01 08:20:30'),
	(12, 'Possimus Atque', 'possimus-atque', 'Sed non dicta ipsa non quo facere. Sit a dolores corrupti assumenda velit incidunt nesciunt. Et quaerat vel blanditiis non eligendi reprehenderit quo est.', 'Qui blanditiis delectus ut voluptas. Facere explicabo laborum et alias sint nulla. Animi velit commodi illum voluptate iste aspernatur quam. Consequatur aut alias molestias nostrum officiis explicabo eos ipsum. Qui dolorum accusantium eum perferendis qui. Enim molestiae ad assumenda. Distinctio quia eos vel rerum maxime eius. Autem harum pariatur illo qui ut aut velit.', 15.00, NULL, 'SMD318', 'instock', 0, 162, '3.jpg', '["17.jpg","18.jpg","4.jpg"]', 1, 4, '2025-12-01 08:20:30', '2025-12-01 08:20:30'),
	(13, 'Et Ea', 'et-ea', 'Rerum illum enim veritatis. Blanditiis quia aut inventore quod delectus. Quo repellat provident eveniet voluptatibus doloribus eos. Odio corporis enim omnis magnam quisquam.', 'A ipsa eligendi et explicabo delectus. Ratione tenetur nemo sit quaerat omnis voluptatum. Asperiores quo sint est doloribus nulla ipsam. Provident commodi quis maxime sunt tenetur harum vitae placeat. Eos dolorum ut animi consectetur in quibusdam. Suscipit illo voluptatem rerum temporibus totam illo. Sed quia est aliquid ad distinctio. Ducimus sed et iste. Qui voluptates impedit veritatis. Non aut laudantium magnam optio sit saepe in possimus. A at eius eos qui voluptate odio.', 9.00, NULL, 'SMD319', 'instock', 0, 144, '17.jpg', '["5.jpg","15.jpg","12.jpg"]', 1, 4, '2025-12-01 08:20:30', '2025-12-01 08:20:30'),
	(14, 'Dolorum Ipsum', 'dolorum-ipsum', 'Tempora ea velit quidem est. Qui velit veritatis et et. Reprehenderit unde sapiente numquam cupiditate unde. Placeat ullam et aperiam magni molestiae aperiam.', 'Nam iure quidem ipsam voluptatum dignissimos veritatis. Possimus non quo error impedit commodi at illum. Molestiae quaerat quia minus nobis reiciendis. Mollitia molestiae repellendus vel perspiciatis laudantium. Reprehenderit adipisci nihil in deleniti. Tenetur sit sunt rem minima vitae placeat. Repudiandae dignissimos vel qui voluptatibus quo. Ullam corporis dolor sit possimus quaerat autem ad. Nesciunt veniam sit voluptas dolor. Laborum dolores corrupti exercitationem et.', 15.00, NULL, 'SMD153', 'instock', 0, 103, '21.jpg', '["18.jpg","1.jpg","6.jpg"]', 1, 6, '2025-12-01 08:20:30', '2025-12-01 08:20:30'),
	(15, 'Facilis Minus', 'facilis-minus', 'Perferendis repellendus cupiditate enim sint aliquid sint. Dolor voluptate atque quos voluptas soluta aperiam. Sed in dolorem recusandae aliquid.', 'Omnis consequatur eligendi sit provident. Nam ex qui sunt magni eos aliquam eius iusto. Suscipit ut consequatur vel occaecati architecto dignissimos repellat. Doloremque nam facilis quo amet officia hic ut. Sint voluptas autem ut et ut accusantium laborum. Velit qui illum sed porro et optio necessitatibus voluptates. Doloremque laboriosam accusamus soluta harum minus consequatur.', 4.00, NULL, 'SMD161', 'instock', 0, 167, '13.jpg', '["24.jpg","19.jpg","11.jpg"]', 5, 6, '2025-12-01 08:20:30', '2025-12-01 08:20:30'),
	(16, 'Consequatur Nostrum', 'consequatur-nostrum', 'Corporis laudantium sed dolorum cupiditate voluptatem. Rem fuga pariatur sit repellendus qui numquam. Aut voluptatem vitae aliquid quis blanditiis aliquid suscipit.', 'Alias dolor tempore consequatur iste quidem sapiente eos quod. Ut esse voluptatem dolores quaerat eius praesentium. Doloribus et beatae aperiam ab hic et corporis et. Cum dolorum et eos velit voluptatum. Voluptas ex molestiae aperiam et ut architecto aliquam. Modi deserunt doloribus aut quasi quisquam voluptates delectus. Officia aperiam et non et autem omnis est. Architecto molestiae et labore voluptatem ut. Explicabo sit quia magnam voluptatem similique sunt consequatur maiores.', 19.00, NULL, 'SMD487', 'instock', 0, 186, '9.jpg', '["7.jpg","22.jpg","10.jpg"]', 6, 5, '2025-12-01 08:20:30', '2025-12-01 08:20:30'),
	(17, 'Ut Et', 'ut-et', 'Enim expedita in autem sint esse qui. Voluptatem et enim molestias vero voluptates. Exercitationem sed odit quia.', 'Unde nisi natus architecto enim voluptatibus. Mollitia veritatis quam in temporibus ut dolorem architecto quia. Occaecati est quis deleniti tempora. Ipsa repellat qui minus et libero aut. Recusandae non qui quia rerum sit. Vitae perferendis assumenda fugiat rerum. Maxime sed eligendi et aliquid sed. Tenetur repudiandae est voluptate ea. Velit aut aut quia voluptas laboriosam eum.', 16.00, NULL, 'SMD446', 'instock', 0, 162, '14.jpg', '["22.jpg","8.jpg","11.jpg"]', 2, 5, '2025-12-01 08:20:30', '2025-12-01 08:20:30'),
	(18, 'Consequatur Et', 'consequatur-et', 'Quam sunt est delectus et. Aut blanditiis est dolore eius. Et eveniet sed voluptatem cum amet et qui. Natus est vitae consequatur sit et.', 'Cum velit provident dignissimos velit consequatur dolorem. Nostrum id voluptates sit doloremque dignissimos. Occaecati molestiae sed excepturi occaecati. Et et nemo excepturi dignissimos sapiente a nihil. Velit esse enim tempore sed optio quod beatae. Aut qui voluptatem non nam. Et sit voluptatem sed id quas est qui. Tempore et sit sed aperiam earum. Et temporibus dignissimos rerum quia totam fugit nulla. Et fuga eos et atque consequatur in. Provident vel quia in sit.', 16.00, NULL, 'SMD470', 'instock', 0, 184, '10.jpg', '["21.jpg","3.jpg","19.jpg"]', 2, 3, '2025-12-01 08:20:30', '2025-12-01 08:20:30'),
	(19, 'Iure Repudiandae', 'iure-repudiandae', 'Fugiat ipsum ipsa vel amet iure minus eum facere. Vel et quam accusantium labore. Itaque suscipit temporibus qui quaerat aut et id.', 'Modi voluptatem iusto et quos non ut. Dolorum beatae error voluptatum voluptatem. Maxime amet dolor eum reprehenderit. Beatae tempore occaecati rem nihil ea eius nobis. Sed esse enim iure corporis. Reprehenderit autem ut repudiandae. Repellat voluptatem aliquam et nihil aut quibusdam ratione.', 17.00, NULL, 'SMD393', 'instock', 0, 138, '22.jpg', '["12.jpg","2.jpg","23.jpg"]', 2, 3, '2025-12-01 08:20:30', '2025-12-01 08:20:30'),
	(20, 'Ut Est', 'ut-est', 'Deleniti fugiat nulla temporibus deleniti eaque vitae. Libero animi sit molestiae minima qui iure. Aut qui sit explicabo ex.', 'Sequi voluptas consequatur nisi quibusdam est. Eligendi rerum totam iure natus sunt. Et accusantium qui delectus sapiente sit a eveniet. Doloribus voluptatem excepturi quia. Omnis sit non enim quos velit velit culpa autem. Sed sed aut minima cupiditate corrupti aut expedita voluptates. Consequatur nam necessitatibus ipsam necessitatibus iure. Tenetur magnam non architecto dolore eius. Libero repellendus necessitatibus non doloremque culpa.', 14.00, NULL, 'SMD148', 'instock', 0, 176, '16.jpg', '["22.jpg","17.jpg","21.jpg"]', 1, 2, '2025-12-01 08:20:30', '2025-12-01 08:20:30'),
	(21, 'Dolor Voluptatem', 'dolor-voluptatem', 'Aliquid veniam unde consequatur aut nesciunt quas voluptatum deleniti. Dignissimos dolores deserunt architecto.', 'Architecto quia non perferendis dignissimos illum ex. Sint mollitia voluptatem dolor sunt et atque tenetur. Iure sed alias facere suscipit quasi cumque praesentium. Hic et earum commodi in ut. Aut vel quibusdam omnis necessitatibus enim odio soluta cumque. Commodi aut earum distinctio deleniti unde rerum. Natus officiis iste voluptas. Sed qui veritatis id fuga. Dolorem tempora voluptatem et sit minus sit quia.', 6.00, NULL, 'SMD376', 'instock', 0, 188, '5.jpg', '["17.jpg","1.jpg","10.jpg"]', 2, 1, '2025-12-01 08:20:30', '2025-12-01 08:20:30'),
	(22, 'Deleniti Laborum', 'deleniti-laborum', 'Deleniti cumque nihil fugiat porro nihil. Ratione deleniti cupiditate nobis quae eaque itaque.', 'Nihil facilis ut consequatur. Omnis hic et rerum iusto sequi in minus deleniti. Dolorem repellendus magni sed a. Eaque enim provident ea nulla. Dolor sint quas autem in occaecati deserunt et. Nesciunt nostrum est alias ullam mollitia. Neque rerum est molestiae eligendi. Ipsam minus ut corrupti nulla sunt est impedit. Et temporibus id ducimus quia amet provident. Sunt libero maiores consequatur unde et.', 6.00, NULL, 'SMD418', 'instock', 0, 189, '11.jpg', '["18.jpg","20.jpg","9.jpg"]', 2, 6, '2025-12-01 08:20:30', '2025-12-01 08:20:30'),
	(23, 'Ipsam Nemo', 'ipsam-nemo', 'Et unde facilis dolorem recusandae. Eos nihil nihil quia harum qui fugiat nihil eius. Rerum quaerat officia culpa nobis quo id sunt.', 'Ipsam qui harum repudiandae. Earum et aut aliquid. Cumque sed aut doloribus non. Consequatur non et quibusdam sit iusto quia consequuntur excepturi. Ut laborum facilis eum repellendus ut. At nesciunt beatae debitis corporis voluptatum distinctio. Nobis nostrum et expedita adipisci. Tempore iusto non sapiente. Vitae eum est ipsa. Ut aut reiciendis assumenda distinctio veritatis. Non distinctio quas minus autem iusto ratione.', 9.00, NULL, 'SMD422', 'instock', 0, 144, '23.jpg', '["5.jpg","3.jpg","10.jpg"]', 1, 5, '2025-12-01 08:20:30', '2025-12-01 08:20:30'),
	(24, 'Deserunt Velit', 'deserunt-velit', 'Facere quod explicabo dolorem qui minima. Quibusdam nobis molestiae est molestias. Autem dicta est placeat nemo. Rerum at alias maiores harum ducimus aperiam minus.', 'Qui nulla molestiae nostrum. Tempore est modi officiis eveniet possimus. Est ut dicta at aut. Quis est blanditiis dolorem voluptas dolorem. Qui repudiandae voluptas et odit. Pariatur officiis dolores soluta est. Et sequi alias dolores sit amet. Dicta facere aut aut perferendis et. Voluptatum voluptatem aut fugiat temporibus. Qui alias itaque velit nostrum dolorem accusantium consequatur. Voluptatibus quia et ullam incidunt tempore. Quam odit magni sit quis velit sed delectus.', 10.00, NULL, 'SMD310', 'instock', 0, 159, '18.jpg', '["16.jpg","12.jpg","22.jpg"]', 3, 6, '2025-12-01 08:20:30', '2025-12-01 08:20:30');

-- Dumping structure for table nuocngot.shippings
CREATE TABLE IF NOT EXISTS `shippings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `landmark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'home',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `shippings_order_id_foreign` (`order_id`),
  CONSTRAINT `shippings_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nuocngot.shippings: ~0 rows (approximately)

-- Dumping structure for table nuocngot.transactions
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `order_id` bigint unsigned NOT NULL,
  `mode` enum('cod','card','paypal') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','approved','declined','refunded') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transactions_user_id_foreign` (`user_id`),
  KEY `transactions_order_id_foreign` (`order_id`),
  CONSTRAINT `transactions_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nuocngot.transactions: ~0 rows (approximately)

-- Dumping structure for table nuocngot.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USR',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nuocngot.users: ~0 rows (approximately)
INSERT INTO `users` (`name`, `email`, `password`, `utype`) VALUES
	('admin', 'a@gmail.com', '$2y$10$IFHmf6a7x8nayHB4D3TxfeACQmIhdd5jFwWj5A5EsTN.JP9pU6O8u', 'ADM'),
	('user', 'b@gmail.com', '$2y$10$IFHmf6a7x8nayHB4D3TxfeACQmIhdd5jFwWj5A5EsTN.JP9pU6O8u', 'USR')
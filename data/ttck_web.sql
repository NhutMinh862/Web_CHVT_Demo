-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 21, 2024 lúc 10:57 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ttck_web`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `title`, `subtitle`, `image`, `category`, `content`, `created_at`, `updated_at`) VALUES
(1, 3, 'Generative AI will drive a foundational shift for companies', 'At this week\'s IDC Directions conference, researchers emphasized how AI is already a priority in many organizations, even though they still lack a proper plan, including key applications and oversight.', 'blog-2.jpg', 'AI', '<h4>Over the next two years, generative artificial intelligence (genAI) will force organizations to address a myriad of fast-evolving issues, from data security to tech review boards, new services, and &mdash; most importantly &mdash; upskilling employees.</h4>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h4>By 2027, AI will represent 29% of organizational spend, according to IDC President Crawford Del Prete, who spoke Thursday at the IDC Directions conference in Boston. This year alone, the average enterprise will spend $28 million dollars on genAI initiatives, based on data from a February IDC survey. In all, organizations will spend $150 billion on genAI tech initiatives by 2027, with a total economic impact of $11 trillion, according to IDC.</h4>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h4>Similarly, through 2026, tech providers expect to allocate 50% of R&amp;D staffing and capex investments toward AI and automation. Forty percent of services engagements will also include genAI-enabled delivery, triggering a shift in human-delivered services.</h4>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h4>&ldquo;Enterprises are going to be going through a foundational shift; that includes hardware, software and data centric platforms,&rdquo; Del Prete said.</h4>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h4>Through 2025, 75% of organizations are expected to create AI implementation review boards; 40% will be looking to increase their outsourced AI services, including AI delivery; and 40% of new applications are expected to be more intelligent, as developers incorporate genAI to enhance existing and new use cases, according to a recent CIO survey by IDC.</h4>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h4>&ldquo;Over the last year, most organizations debated creating Chief AI Officers and centers of excellence to decide how to embed AI and create new business centers for new AI-enabled products and services,&rdquo; said Rick Villars, group vice president of IDC&rsquo;s Worldwide Research division.</h4>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h4>CIOs are also rethinking their capital investment plans and staffing needs based on AI initiatives, according to Villars, including how AI will affect an organization&rsquo;s long-term revenue and profitability.</h4>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h4>Most organizations are likely to choose a hybrid approach to building out their AI plans &mdash; that is, companies will partner with service providers while also customizing existing AI platforms such as ChatGPT, as well as building their own proprietary, but smaller, AI models for specific use cases.</h4>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h4>All applications you buy will become more intelligent&hellip;, but make sure to not be redundant with the applications you&rsquo;re building in house,&rdquo; Del Prete warned. &ldquo;That will be a big, big part in efforts going forward.&rdquo;</h4>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h4>In fact, 60% of enterprises will likely underperform on their genAI initiatives by failing to engineer connections between data, AI models, and the genAI applications they adopt or create.</h4>', '2024-04-01 09:05:29', '2024-04-18 09:53:36'),
(2, 1, 'Admins see snags as macOS Sonoma 14.4 hits Macs', 'Popular Addigy tool MDM Watchdog no longer works and problems with some USB hubs and printer descriptions frustrate some Mac admins.', 'blog-4.jpg', 'Computer', '', '2024-03-27 09:09:12', '2024-03-28 09:09:12'),
(3, 1, 'Anthropic launches its fastest and cheapest AI model yet', 'Anthropic has launched its most affordable and fastest AI model — Claude 3 Haiku, which the company claims is up to half the cost of GPT 3.5 and works up to three times faster than existing models. This newest addition to the Claude model family joins the', 'blog-5.jpg', 'Technology', '', '2024-03-30 09:09:12', '2024-03-31 09:09:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog_comments`
--

CREATE TABLE `blog_comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `blog_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `messages` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blog_comments`
--

INSERT INTO `blog_comments` (`id`, `blog_id`, `user_id`, `email`, `name`, `messages`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'songtu120602@gmail.com', 'Thanh Tuyền', 'Very Nice ! The Infomation Very Good', '2024-04-18 09:54:49', '2024-04-18 09:54:49'),
(2, 1, 2, 'admin@gmail.com', 'Nhựt Minh Nguyễn', 'Useful article!! Great', '2024-04-18 10:12:13', '2024-04-18 10:12:13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Intel', NULL, NULL),
(2, 'seagate', NULL, NULL),
(3, 'dell', NULL, NULL),
(4, 'aap', NULL, NULL),
(5, 'apple', NULL, NULL),
(6, 'khác', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_12_09_085528_create_orders_table', 1),
(7, '2020_12_09_085832_create_order_details_table', 1),
(8, '2020_12_09_085936_create_products_table', 1),
(9, '2020_12_09_090029_create_brands_table', 1),
(10, '2020_12_09_090110_create_product_categories_table', 1),
(11, '2020_12_09_090148_create_product_images_table', 1),
(12, '2020_12_09_090228_create_product_details_table', 1),
(13, '2020_12_09_090308_create_product_comments_table', 1),
(14, '2020_12_09_090355_create_blogs_table', 1),
(15, '2020_12_09_090437_create_blog_comments_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `country` varchar(255) NOT NULL,
  `street_address` varchar(255) NOT NULL,
  `postcode_zip` varchar(255) NOT NULL,
  `town_city` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `first_name`, `last_name`, `company_name`, `country`, `street_address`, `postcode_zip`, `town_city`, `email`, `phone`, `payment_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Nhựt Minh', 'Nguyễn', 'MyCode', 'Việt Nam', 'Hòa phú 4, AC, CT, AG', 'không có', 'An Giang', 'phiphuong222@gmail.com', '0976053065', 'pay_later', '7', '2024-04-01 22:48:04', '2024-04-01 22:48:04'),
(2, 0, 'Nhựt Minh', 'Nguyễn', 'không có', 'Việt Nam', 'Hòa phú 4, AC, CT, AG', 'không có', 'không có', 'phiphuong222@gmail.com', '0976053065', 'pay_later', '7', '2024-04-01 22:53:15', '2024-04-01 22:53:15'),
(3, 0, 'Nhựt Minh', 'Nguyễn', 'không có', 'Việt Nam', 'Hòa phú 4, AC, CT, AG', 'không có', 'không có', 'phiphuong222@gmail.com', '0976053065', 'pay_later', '7', '2024-04-04 06:33:58', '2024-04-04 06:33:58'),
(4, 0, 'Thanh Trung', 'Nguyễn', 'không có', 'Việt Nam', 'Hòa phú 4, AC, CT, AG', 'không có', 'không có', 'phiphuong222@gmail.com', '0976053065', 'pay_later', '7', '2024-04-04 06:35:07', '2024-04-04 06:35:07'),
(5, 6, 'Thanh Tuyền', 'Nguyễn', 'MyHome', 'Viet Nam', '242 Tran Dai Nghia, An Chau, Chau Thanh', '10000', 'An Giang', 'songtu120602@gmail.com', '0123456788', 'pay_later', '1', '2024-04-04 08:25:52', '2024-04-04 08:25:52'),
(6, 6, 'Thanh Tuyền', 'Nguyễn', 'MyHome', 'Viet Nam', '242 Tran Dai Nghia, An Chau, Chau Thanh', '10000', 'An Giang', 'songtu120602@gmail.com', '0123456788', 'pay_later', '1', '2024-04-07 06:55:38', '2024-04-07 06:55:38'),
(7, 6, 'Thanh Tuyền', 'Lê', 'MyHome', 'Viet Nam', '242 Tran Dai Nghia, An Chau, Chau Thanh', '10000', 'An Giang', 'songtu120602@gmail.com', '0123456788', 'pay_later', '1', '2024-04-12 02:06:36', '2024-04-12 02:06:36'),
(11, 1, 'CodeLean', 'Lee', 'CodeLean', 'Viet Nam', '242 Tran Dai Nghia, An Chau, Chau Thanh', '10000', 'An Giang', 'CodeLean@gmail.com', '0123456789', 'pay_later', '0', '2024-04-12 02:32:53', '2024-04-18 06:33:26'),
(12, 6, 'Thanh Tuyền', 'Tran', 'MyHome', 'Viet Nam', '242 Tran Dai Nghia, An Chau, Chau Thanh', '10000', 'An Giang', 'songtu120602@gmail.com', '0123456788', 'pay_later', '7', '2024-04-15 06:52:20', '2024-04-18 06:32:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `amount` double NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `qty`, `amount`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, 232, 232, '2024-04-01 22:48:04', '2024-04-01 22:48:04'),
(2, 1, 4, 1, 35, 35, '2024-04-01 22:48:04', '2024-04-01 22:48:04'),
(3, 1, 14, 1, 20, 20, '2024-04-01 22:48:04', '2024-04-01 22:48:04'),
(4, 2, 1, 1, 135, 135, '2024-04-01 22:53:15', '2024-04-01 22:53:15'),
(5, 3, 6, 1, 35, 35, '2024-04-04 06:33:58', '2024-04-04 06:33:58'),
(6, 3, 16, 1, 90, 90, '2024-04-04 06:33:58', '2024-04-04 06:33:58'),
(7, 4, 1, 1, 135, 135, '2024-04-04 06:35:07', '2024-04-04 06:35:07'),
(8, 4, 15, 1, 20, 20, '2024-04-04 06:35:07', '2024-04-04 06:35:07'),
(9, 5, 2, 1, 232, 232, '2024-04-04 08:25:52', '2024-04-04 08:25:52'),
(10, 5, 3, 1, 135, 135, '2024-04-04 08:25:52', '2024-04-04 08:25:52'),
(11, 6, 1, 1, 135, 135, '2024-04-07 06:55:38', '2024-04-07 06:55:38'),
(12, 6, 8, 1, 75, 75, '2024-04-07 06:55:38', '2024-04-07 06:55:38'),
(13, 6, 5, 1, 45, 45, '2024-04-07 06:55:38', '2024-04-07 06:55:38'),
(14, 7, 3, 1, 135, 135, '2024-04-12 02:06:36', '2024-04-12 02:06:36'),
(15, 7, 4, 2, 35, 70, '2024-04-12 02:06:36', '2024-04-12 02:06:36'),
(16, 11, 1, 1, 135, 135, '2024-04-12 02:32:53', '2024-04-12 02:32:53'),
(17, 12, 3, 2, 135, 270, '2024-04-15 06:52:20', '2024-04-15 06:52:20'),
(18, 12, 5, 1, 45, 45, '2024-04-15 06:52:20', '2024-04-15 06:52:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
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
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL,
  `product_category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `price` double NOT NULL,
  `qty` int(11) NOT NULL,
  `discount` double DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `sku` varchar(255) DEFAULT NULL,
  `featured` tinyint(1) NOT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `brand_id`, `product_category_id`, `name`, `description`, `content`, `price`, `qty`, `discount`, `weight`, `sku`, `featured`, `tag`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'cpu_corei3_12100', '<p><a href=\"https://phongvu.vn/cpu-bo-vi-xu-ly-scat.02-N003\">CPU</a>&nbsp;INTEL Core i3-12100 l&agrave; phi&ecirc;n bản được đ&aacute;nh gi&aacute; l&agrave; bước nhảy vọt về hiệu năng xử l&yacute; so với tiền nhiệm. Được t&iacute;ch hợp chip đồ họa Intel UHD Graphics 730, con chip n&agrave;y hứa hẹn mang đến trải nghiệm d&ugrave;ng đồ họa, chơi game tốt hơn. Chip INTEL Core i3-12100 chắc chắn sẽ mang đến những cải tiến mới về hiệu suất cho m&aacute;y t&iacute;nh của bạn.</p>\r\n\r\n<h3><strong>Hiệu suất tốt với 4 l&otilde;i, 8 luồng&nbsp;</strong></h3>\r\n\r\n<p>Giống như người tiền nhiệm Comet Lake, i3-12100 c&oacute; thiết kế 4 l&otilde;i , 8 luồng . Kh&ocirc;ng giống như c&aacute;c SKU Alder Lake cao cấp hơn, CPU n&agrave;y chỉ c&oacute; l&otilde;i P (được x&acirc;y dựng cho hiệu suất) v&agrave; thiếu bất kỳ l&otilde;i Gracemont E hiệu quả cao n&agrave;o của Intel. Giống như tất cả c&aacute;c CPU thế hệ thứ 12 kh&aacute;c, n&oacute; y&ecirc;u cầu bo mạch chủ tương th&iacute;ch với LGA1700.</p>', 'CPU INTEL Core i3-12100 (4C/8T, 3.30 GHz - 4.30 GHz, 12MB) - 1700', 150, 20, 135, 0.05, '00012', 1, 'accessory', NULL, '2024-04-15 04:59:30'),
(2, 1, 1, 'cpu_corei5_13500', NULL, NULL, 240, 20, 232, 0.05, '00012', 1, 'accessory', NULL, NULL),
(3, 1, 1, 'cpu-core-i310100', NULL, NULL, 140, 20, 135, 0.05, '00012', 1, 'accessory', NULL, NULL),
(4, 4, 1, 'case-aap-diamond-gaming0', NULL, NULL, 40, 20, 35, 0.5, '00012', 1, 'case', NULL, NULL),
(5, 4, 1, 'case-vsptech-ha01', NULL, NULL, 50, 20, 45, 0.5, '00012', 1, 'case', NULL, NULL),
(6, 4, 1, 'case-vsp-v3601p', NULL, NULL, 40, 20, 35, 0.5, '00012', 1, 'case', NULL, NULL),
(7, 2, 3, 'hdd-pc-seagate-1t-barracuda', NULL, NULL, 70, 20, 65, 0.02, '00012', 1, 'accessory', NULL, NULL),
(8, 2, 3, 'hdd-pc-seagate-1t-skyhawk', NULL, NULL, 80, 20, 75, 0.02, '00012', 1, 'accessory', NULL, NULL),
(9, 6, 3, 'hdd-pc-wd-1t-purple', NULL, NULL, 35, 20, 30, 0.02, '00012', 1, 'accessory', NULL, NULL),
(10, 4, 2, 'macbook_air_m2_2_1', NULL, NULL, 950, 20, 900, 1.39, '00012', 1, 'laptop', NULL, NULL),
(11, 6, 2, 'dell-latitud-e5440-i543004gssd', NULL, NULL, 500, 20, 480, 1.7, '00012', 1, 'laptop', NULL, NULL),
(12, 6, 2, 'mtxt-hp-15sfq2712tu-i31115g', NULL, NULL, 680, 20, 630, 1.7, '00012', 1, 'laptop', NULL, NULL),
(13, 6, 1, 'mouse-co-day-twolf-g530', NULL, NULL, 20, 20, 15, 0.02, '00012', 1, 'mouse', NULL, NULL),
(14, 6, 1, 'mouse-ko-day-simetech-s790', NULL, NULL, 30, 20, 20, 0.02, '00012', 1, 'mouse', NULL, NULL),
(15, 6, 1, 'mouse-co-day-twolf-x1', NULL, NULL, 25, 20, 20, 0.02, '00012', 1, 'mouse', NULL, NULL),
(16, 6, 3, 'ddr3-pc-4g', NULL, NULL, 100, 20, 90, 0.01, '00012', 1, 'storage', NULL, NULL),
(17, 6, 3, 'ddr3-pc-pc3l-4g', NULL, NULL, 150, 20, 120, 0.01, '00012', 1, 'storage', NULL, NULL),
(18, 6, 3, 'ddr4-pc-4g2400', NULL, NULL, 120, 20, 110, 0.01, '00012', 1, 'storage', NULL, NULL),
(19, 6, 3, 'ssd-120g-kingston-a400', NULL, NULL, 240, 20, 235, 0.05, '00012', 1, 'storage', NULL, NULL),
(20, 6, 3, 'ssd-500g-samsung-870', NULL, NULL, 280, 20, 250, 0.05, '00012', 1, 'storage', NULL, NULL),
(21, 6, 3, 'ssd-m2-pcie', NULL, NULL, 210, 20, 200, 0.05, '00012', 1, 'storage', NULL, NULL),
(22, 6, 1, 'usb-thu-wifi-80211', NULL, NULL, 20, 20, 18, 0.02, '00012', 1, 'storage', NULL, NULL),
(23, 6, 1, 'usb-thu-wifi-tenda-u1', NULL, NULL, 25, 20, 20, 0.02, '00012', 1, 'storage', NULL, NULL),
(24, 6, 1, 'usb-thu-wifi-tenda-u2', NULL, NULL, 30, 20, 25, 0.02, '00012', 1, 'storage', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Hardware', NULL, NULL),
(2, 'Computer', NULL, NULL),
(3, 'Technology', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_comments`
--

CREATE TABLE `product_comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `messages` varchar(255) NOT NULL,
  `rating` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_comments`
--

INSERT INTO `product_comments` (`id`, `product_id`, `user_id`, `email`, `name`, `messages`, `rating`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'ShaneLynch@gmail.com', 'Shane Lynch', 'Nice !!', 5, '2024-04-15 05:04:10', '2024-04-15 05:04:10'),
(2, 1, 1, 'songtu120602@gmail.com', 'Thanh Tuyền', 'Very Nice! I like it', 4, '2024-04-15 05:05:34', '2024-04-15 05:05:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_details`
--

CREATE TABLE `product_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `color` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_details`
--

INSERT INTO `product_details` (`id`, `product_id`, `color`, `size`, `qty`, `created_at`, `updated_at`) VALUES
(1, 1, 'blue', 'small', 20, NULL, NULL),
(2, 2, 'blue', 'small', 20, NULL, NULL),
(3, 3, 'blue', 'small', 20, NULL, NULL),
(4, 4, 'black', 'large', 10, NULL, NULL),
(5, 4, 'silver', 'large', 10, NULL, NULL),
(6, 5, 'green', 'large', 10, NULL, NULL),
(7, 5, 'black', 'large', 10, NULL, NULL),
(8, 6, 'pink', 'large', 10, NULL, NULL),
(9, 6, 'white', 'large', 10, NULL, NULL),
(10, 7, 'green', 'small', 10, NULL, NULL),
(11, 7, 'blue', 'small', 10, NULL, NULL),
(12, 8, 'green', 'small', 20, NULL, NULL),
(13, 9, 'purple', 'small', 20, NULL, NULL),
(14, 10, 'silver', 'large', 10, NULL, NULL),
(15, 10, 'black', 'large', 10, NULL, NULL),
(16, 11, 'silver', 'large', 10, NULL, NULL),
(17, 11, 'black', 'large', 10, NULL, NULL),
(18, 12, 'silver', 'large', 20, NULL, NULL),
(19, 13, 'black', 'medium', 10, NULL, NULL),
(20, 13, 'blue', 'medium', 10, NULL, NULL),
(21, 14, 'blue', 'medium', 5, NULL, NULL),
(22, 14, 'pink', 'medium', 10, NULL, NULL),
(23, 14, 'black', 'medium', 5, NULL, NULL),
(24, 15, 'black', 'medium', 20, NULL, NULL),
(25, 16, 'red', 'small', 20, NULL, NULL),
(26, 17, 'black', 'small', 20, NULL, NULL),
(27, 18, 'black', 'small', 20, NULL, NULL),
(28, 19, 'black', 'medium', 10, NULL, NULL),
(29, 19, 'white', 'medium', 10, NULL, NULL),
(30, 20, 'black', 'medium', 20, NULL, NULL),
(31, 21, 'red', 'medium', 20, NULL, NULL),
(32, 22, 'black', 'small', 20, NULL, NULL),
(33, 23, 'silver', 'small', 20, NULL, NULL),
(34, 24, 'silver', 'small', 10, NULL, NULL),
(35, 24, 'white', 'small', 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_images`
--

CREATE TABLE `product_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `path`, `created_at`, `updated_at`) VALUES
(1, 1, 'sp_images/CPU/cpu_corei3_12100.jpg', NULL, NULL),
(2, 1, 'sp_images/CPU/cpu_corei3_12100_1.jpg', NULL, NULL),
(3, 2, 'sp_images/CPU/cpu_corei5_13500.jpg', NULL, NULL),
(4, 3, 'sp_images/CPU/cpu-core-i310100.jpg', NULL, NULL),
(5, 4, 'sp_images/Case/case-aap-diamond-gaming0.jpg', NULL, NULL),
(6, 5, 'sp_images/Case/case-vsptech-ha01.jpg', NULL, NULL),
(7, 6, 'sp_images/Case/case-vsp-v3601p.jpg', NULL, NULL),
(8, 7, 'sp_images/HHD/hdd-pc-seagate-1t-barracuda.png', NULL, NULL),
(9, 8, 'sp_images/HHD/hdd-pc-seagate-1t-skyhawk.png', NULL, NULL),
(10, 9, 'sp_images/HHD/hdd-pc-wd-1t-purple.jpg', NULL, NULL),
(11, 10, 'sp_images/Laptop/macbook_air_m2_2_1.jpg', NULL, NULL),
(12, 11, 'sp_images/Laptop/dell-latitud-e5440-i543004gssd.jpg', NULL, NULL),
(13, 12, 'sp_images/Laptop/mtxt-hp-15sfq2712tu-i31115g.png', NULL, NULL),
(14, 13, 'sp_images/Mouses/mouse-co-day-twolf-g530.png', NULL, NULL),
(15, 14, 'sp_images/Mouses/mouse-ko-day-simetech-s790.jpg', NULL, NULL),
(16, 15, 'sp_images/Mouses/mouse-co-day-twolf-x1.jpg', NULL, NULL),
(17, 16, 'sp_images/RAM/ddr3-pc-4g.jpg', NULL, NULL),
(18, 17, 'sp_images/RAM/ddr3-pc-pc3l-4g.jpg', NULL, NULL),
(19, 18, 'sp_images/RAM/ddr4-pc-4g2400.jpg', NULL, NULL),
(20, 19, 'sp_images/SSD/ssd-120g-kingston-a400.jpg', NULL, NULL),
(21, 20, 'sp_images/SSD/ssd-500g-samsung-870.jpg', NULL, NULL),
(22, 21, 'sp_images/SSD/ssd-m2-pcie.jpg', NULL, NULL),
(23, 22, 'sp_images/USB/usb-thu-wifi-80211.jpg', NULL, NULL),
(24, 23, 'sp_images/USB/usb-thu-wifi-tenda-u1.jpg', NULL, NULL),
(25, 24, 'sp_images/USB/usb-thu-wifi-tenda-u2.png', NULL, NULL),
(26, 22, 'usb-thu-wifi-80211-1_66163f092488e_240410_022601.jfif', '2024-04-10 07:26:01', '2024-04-10 07:26:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `level` tinyint(4) NOT NULL,
  `description` text DEFAULT NULL,
  `company_name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `street_address` varchar(255) NOT NULL,
  `postcode_zip` varchar(255) NOT NULL,
  `town_city` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `avatar`, `level`, `description`, `company_name`, `country`, `street_address`, `postcode_zip`, `town_city`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'CodeLean', 'CodeLean@gmail.com', NULL, '$2y$12$8nISEhlk5E97Ro8K9L/wYuGAQTLMiVGi/XBOOLlSjwbMQDqP1Pn.m', NULL, 'doraemon.jpg', 0, NULL, 'CodeLean', 'Viet Nam', '242 Tran Dai Nghia, An Chau, Chau Thanh', '10000', 'An Giang', '0123456789', NULL, NULL),
(2, 'admin', 'admin@gmail.com', NULL, '$2y$12$WJ5W0VGTzYNK1v0r94dvnOfnTDwyqzukbvyYfIFhHuI2pbXkZ/T76', NULL, 'admin.jpg', 0, '123456', 'My_House', 'Viet Nam', '240 Hoang Hoa Tham, Binh Khanh', '10000', 'Long Xuyen', '0987875699', NULL, '2024-04-18 07:15:50'),
(3, 'Shane Lynch', 'ShaneLynch@gmail.com', NULL, '$2y$12$JG81utJ/iAmU00IdatOTGOhOFKoEvZY5byotD.FV0quRvGOW7V.9y', NULL, NULL, 1, 'Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum bore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud amodo', 'Guaita Tower', 'Italia', 'Salita Alla Rocca, 61, 47890 Citta di San Marino', '10000', 'San Marino', '0126578902', NULL, NULL),
(4, 'Brandon Kelley', 'BrandonKelley@gmail.com', NULL, '$2y$12$6FaOy7gMA61TKJONQtafY.zGQxuegURMA2ubwEeFhJpl.N7y8yhFO', NULL, 'male.png', 2, NULL, 'Whole Foods Market', 'Hoa Kỳ', '2748 Green Bay Rd, Evanston, IL 60201', '10000', 'Chicago', '0987876543', NULL, NULL),
(5, 'Roy Banks', 'RoyBanks@gmail.com', NULL, '$2y$12$dc3iitwUFezaV5gdB0DsH.VddJL5q57AV9dvVPlSLk.zrCYWAA3b.', NULL, NULL, 2, NULL, 'Phoenix Place', 'Vương quốc Anh', 'Phoenix Place, 5 Prince Edwin St L5 3AA', '10000', 'Liverpool', '0897894351', NULL, NULL),
(6, 'Thanh Tuyền', 'songtu120602@gmail.com', NULL, '$2y$12$6gHeenSl269tl/NPqXxYJOd3b4g.YvtI51wYOITMae7jW1SZpMiEm', NULL, 'female.png', 2, NULL, 'MyHome', 'Viet Nam', '242 Tran Dai Nghia, An Chau, Chau Thanh', '10000', 'An Giang', '0123456788', '2024-04-04 07:32:49', '2024-04-04 07:32:49');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_id` (`blog_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `product_category_id` (`product_category_id`);

--
-- Chỉ mục cho bảng `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_comments`
--
ALTER TABLE `product_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

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
-- AUTO_INCREMENT cho bảng `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `product_comments`
--
ALTER TABLE `product_comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD CONSTRAINT `blog_comments_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`);

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`product_category_id`) REFERENCES `product_categories` (`id`);

--
-- Các ràng buộc cho bảng `product_comments`
--
ALTER TABLE `product_comments`
  ADD CONSTRAINT `product_comments_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `product_details`
--
ALTER TABLE `product_details`
  ADD CONSTRAINT `product_details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

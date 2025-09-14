-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 14 2025 г., 06:22
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `baku_today_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

CREATE TABLE `admins` (
  `id` int UNSIGNED NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role` enum('root','moderator','admin') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'admin',
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `admins`
--

INSERT INTO `admins` (`id`, `first_name`, `last_name`, `email`, `username`, `password`, `role`, `img`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Murad', 'Gazymagomedov', 'murad.dev@bk.ru', 'root', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'root', '1b4b01a1a76cd10ee0176e6c1d34d47d.jpg', 1, '2025-04-21 00:42:57', '2025-04-22 16:15:16'),
(2, 'John', 'Doe', 'john.doe@example.com', 'johndoe', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'admin', '9a0e262d7c7af35deb890f196132bc27.jpg', 1, '2025-04-21 03:39:42', '2025-04-21 03:39:42'),
(3, 'Aylin', 'Məmmədova', 'aylin.mammadova@example.com', 'aylin_moderator', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'moderator', 'd25e1cddf2812cb732ba15ad47bf4b08.jpg', 1, '2025-04-21 03:44:14', '2025-04-21 04:27:04'),
(4, 'Dmitry', 'Ivanov', 'd.ivanov@example.com', 'dmitry_i', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'moderator', NULL, 1, '2025-04-21 04:08:17', '2025-04-21 04:26:44'),
(5, 'Togrul', 'Huseynov', 'togrul.h@example.com', 'togrul_admin', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'admin', NULL, 1, '2025-04-22 03:46:58', '2025-04-22 03:46:58'),
(6, '12312', '21321321', '321321@bk.ru', 'aaaas', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', 'admin', '3d680ee0e0dd7b7acd1c9060f0c23672.jpg', 1, '2025-09-10 12:13:28', '2025-09-10 19:00:35');

-- --------------------------------------------------------

--
-- Структура таблицы `advertising`
--

CREATE TABLE `advertising` (
  `id` int UNSIGNED NOT NULL,
  `title_az` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `title_ru` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `advertising`
--

INSERT INTO `advertising` (`id`, `title_az`, `title_en`, `title_ru`, `location`, `img`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Yeni mövsüm kolleksiyası', 'New season collection', 'Коллекция нового сезона', '1', 'e0739f543d9a9211f6dc9617450899dc.jpg', 1, '2025-04-24 21:11:44', '2025-04-25 00:00:43'),
(2, 'Yay endirimləri başladı!', 'Summer sales have started!', 'Летние скидки начались!', '2', '5dc4f6451d588df16f0ba94f5d4760cc.jpg', 1, '2025-04-24 21:13:17', '2025-04-24 21:15:35'),
(3, 'Ucuz qiymətlərlə telefonlar', 'Phones at low prices', 'Телефоны по низким ценам', '3', 'c52b4dc721918c6eb4274079204b0892.jpg', 1, '2025-04-24 21:19:13', '2025-04-24 21:19:13'),
(4, 'Uşaq geyimlərində endirim', 'Discount on kids’ clothing', 'Скидки на детскую одежду', '1', '0c2aa6c0ab9ac3012970f36e9d7448bd.jpg', 1, '2025-04-24 21:20:11', '2025-04-24 21:20:11'),
(5, 'Qışa hazır olun!', 'Get ready for winter!', 'Готовьтесь к зиме!', '2', '6a2796c7af9dc5ce061ac7010a3161b6.jpg', 1, '2025-04-24 21:21:20', '2025-04-24 21:21:20'),
(6, 'Yeni telefon modelləri gəldi', 'New phone models arrived', 'Поступление новых моделей телефонов', '3', 'b1444cbd69a536cc7cac3c62e1e17782.jpg', 1, '2025-04-24 21:22:11', '2025-04-24 21:22:11'),
(7, 'Ailə üçün alış-veriş', 'Shopping for the family', 'Покупки для всей семьи', '1', '75c164d79ee5d4cf4266566740887261.jpg', 1, '2025-04-24 21:25:15', '2025-04-24 21:25:15'),
(8, 'Endirimli ev əşyaları', 'Discounted home goods', 'Скидки на товары для дома', '2', 'dc1ac837a6c1ac768c4ac979baf93036.png', 1, '2025-04-24 21:26:14', '2025-04-24 21:26:14'),
(9, 'Sevgililər günü hədiyyələri', 'Valentine’s Day gifts', 'Подарки ко Дню влюблённых', '3', 'f1b176589a8318846e79c34310efb23b.jpg', 1, '2025-04-24 21:28:59', '2025-04-24 21:28:59'),
(10, 'Geyimdə son trend', 'Latest fashion trends', 'Последние модные тренды', '1', 'cb295a893938aedb76fa581c1450b88e.jpg', 1, '2025-04-24 21:30:59', '2025-04-24 21:30:59'),
(11, 'Məktəbə dönüş kampaniyası', 'Back to school campaign', 'Кампания «Назад в школу»', '2', '9dad16326b762840aa2da8338018f38a.jpg', 1, '2025-04-24 21:32:27', '2025-04-24 21:32:27'),
(12, 'İdman mallarında endirim', 'Discount on sports goods', 'Скидки на спортивные товары', '3', 'fc6eaed4d327c04d9f5fa32b7d2527f3.jpg', 1, '2025-04-24 21:33:14', '2025-04-24 21:33:14'),
(13, '12321312321312312', '123213123', '21321312312321', '2', '2bee10412de7a00cb440fc5b2fb2c996.jpeg', 1, '2025-09-10 12:10:24', '2025-09-10 12:10:24');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int UNSIGNED NOT NULL,
  `name_az` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name_ru` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name_az`, `name_en`, `name_ru`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Siyasət', 'Politics', 'Политика', 1, '2025-04-24 23:33:51', '2025-04-25 00:19:16'),
(2, 'İqtisadiyyat', 'Economy', 'Экономика', 1, '2025-04-24 23:34:08', '2025-04-24 23:34:08'),
(3, 'Cəmiyyət', 'Society', 'Общество', 1, '2025-04-24 23:35:35', '2025-04-24 23:35:35'),
(4, 'Dünya', 'World', 'Мир', 1, '2025-04-24 23:35:51', '2025-04-24 23:35:51'),
(5, 'Mədəniyyət', 'Culture', 'Культура', 1, '2025-04-24 23:36:08', '2025-04-24 23:36:08'),
(6, 'İdman', 'Sports', 'Спорт', 1, '2025-04-24 23:36:52', '2025-04-24 23:36:52'),
(7, 'Texnologiya', 'Technology', 'Технологии', 1, '2025-04-24 23:37:09', '2025-04-24 23:37:09'),
(8, 'Elm', 'Science', 'Наука', 1, '2025-04-24 23:37:26', '2025-04-24 23:37:26'),
(9, 'Səhiyyə', 'Health', 'Здоровье', 1, '2025-04-24 23:37:44', '2025-04-24 23:37:44'),
(10, 'Təhsil', 'Education', 'Образование', 1, '2025-04-24 23:38:02', '2025-04-24 23:38:02'),
(11, 'Şou-biznes', 'Showbiz', 'Шоу-бизнес', 1, '2025-04-24 23:38:23', '2025-04-24 23:38:23'),
(12, 'Hadisə', 'Incidents', 'Происшествия', 1, '2025-04-24 23:38:38', '2025-04-24 23:38:38'),
(13, 'Avto', 'Auto', 'Авто', 1, '2025-04-24 23:39:11', '2025-04-24 23:39:11'),
(14, 'Səyahət', 'Travel', 'Путешествия', 1, '2025-04-24 23:39:31', '2025-04-24 23:39:31'),
(15, 'Analitika', 'Analytics', 'Аналитика', 1, '2025-04-24 23:39:47', '2025-04-24 23:39:47'),
(16, 'Qarışıq', 'Miscellaneous', 'Разное', 1, '2025-04-24 23:40:04', '2025-04-24 23:40:04');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int UNSIGNED NOT NULL,
  `title_az` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `title_ru` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `short_description_az` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `short_description_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `short_description_ru` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `long_description_az` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `long_description_en` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `long_description_ru` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `multi_img` json DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `category_id` int UNSIGNED DEFAULT NULL,
  `author_id` int UNSIGNED DEFAULT NULL,
  `type` enum('daily_news','important_news','general_news') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'general_news',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title_az`, `title_en`, `title_ru`, `short_description_az`, `short_description_en`, `short_description_ru`, `long_description_az`, `long_description_en`, `long_description_ru`, `img`, `multi_img`, `video`, `category_id`, `author_id`, `type`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Azərbaycan texnologiya sahəsində irəliləyir.', 'Azerbaijan Advances in Technology Sector.', 'Азербайджан продвигается в сфере технологий.', 'Azərbaycan texnologiya sahəsində irəliləyir.Azərbaycan texnologiya sahəsində irəliləyir.Azərbaycan texnologiya sahəsində irəliləyir.', 'Azerbaijan Advances in Technology Sector.Azerbaijan Advances in Technology Sector.Azerbaijan Advances in Technology Sector.', 'Азербайджан продвигается в сфере технологий.Азербайджан продвигается в сфере технологий.Азербайджан продвигается в сфере технологий.', '<p>Azərbaycan texnologiya sahəsində irəliləyir.Azərbaycan texnologiya sahəsində irəliləyir.Azərbaycan texnologiya sahəsində irəliləyir.Azərbaycan texnologiya sahəsində irəliləyir.Azərbaycan texnologiya sahəsində irəliləyir.Azərbaycan texnologiya sahəsində irəliləyir.Azərbaycan texnologiya sahəsində irəliləyir.Azərbaycan texnologiya sahəsində irəliləyir.Azərbaycan texnologiya sahəsində irəliləyir.</p>\r\n', '<p>Azerbaijan Advances in Technology Sector.Azerbaijan Advances in Technology Sector.Azerbaijan Advances in Technology Sector.Azerbaijan Advances in Technology Sector.Azerbaijan Advances in Technology Sector.Azerbaijan Advances in Technology Sector.Azerbaijan Advances in Technology Sector.Azerbaijan Advances in Technology Sector.Azerbaijan Advances in Technology Sector.</p>\r\n', '<p>Азербайджан продвигается в сфере технологий.Азербайджан продвигается в сфере технологий.Азербайджан продвигается в сфере технологий.Азербайджан продвигается в сфере технологий.Азербайджан продвигается в сфере технологий.Азербайджан продвигается в сфере технологий.Азербайджан продвигается в сфере технологий.Азербайджан продвигается в сфере технологий.Азербайджан продвигается в сфере технологий.</p>\r\n', '0ebde6ca85fa8f223488b4deb13783f8.jpg', '[\"75e45349a0768df2ef4e52fba9c7f2b7.jpg\", \"32d3927a27fa2b02b35b6ce86cb46145.png\"]', 'https://www.youtube.com/embed/ok4i1aPrecw?si=TOMQ-v0xLTiWKzuO', 7, 1, 'daily_news', 1, '2025-04-26 03:56:31', '2025-09-04 21:46:20'),
(4, 'Yeni texnoloji startaplar ölkənin innovasiya səviyyəsini artırır.', 'New tech startups are boosting the country\'s innovation level.', 'Новые технологические стартапы повышают уровень инноваций в стране.', 'Yeni texnoloji startaplar ölkənin innovasiya səviyyəsini artırır.Yeni texnoloji startaplar ölkənin innovasiya səviyyəsini artırır.Yeni texnoloji startaplar ölkənin innovasiya səviyyəsini artırır.', 'New tech startups are boosting the country\'s innovation level.New tech startups are boosting the country\'s innovation level.New tech startups are boosting the country\'s innovation level.', 'Новые технологические стартапы повышают уровень инноваций в стране.Новые технологические стартапы повышают уровень инноваций в стране.Новые технологические стартапы повышают уровень инноваций в стране.', '<p>Yeni texnoloji startaplar &ouml;lkənin innovasiya səviyyəsini artırır.Yeni texnoloji startaplar &ouml;lkənin innovasiya səviyyəsini artırır.Yeni texnoloji startaplar &ouml;lkənin innovasiya səviyyəsini artırır.Yeni texnoloji startaplar &ouml;lkənin innovasiya səviyyəsini artırır.Yeni texnoloji startaplar &ouml;lkənin innovasiya səviyyəsini artırır.Yeni texnoloji startaplar &ouml;lkənin innovasiya səviyyəsini artırır.Yeni texnoloji startaplar &ouml;lkənin innovasiya səviyyəsini artırır.Yeni texnoloji startaplar &ouml;lkənin innovasiya səviyyəsini artırır.Yeni texnoloji startaplar &ouml;lkənin innovasiya səviyyəsini artırır.</p>\r\n', '<p>New tech startups are boosting the country&#39;s innovation level.New tech startups are boosting the country&#39;s innovation level.New tech startups are boosting the country&#39;s innovation level.New tech startups are boosting the country&#39;s innovation level.New tech startups are boosting the country&#39;s innovation level.New tech startups are boosting the country&#39;s innovation level.New tech startups are boosting the country&#39;s innovation level.New tech startups are boosting the country&#39;s innovation level.New tech startups are boosting the country&#39;s innovation level.</p>\r\n', '<p>Новые технологические стартапы повышают уровень инноваций в стране.Новые технологические стартапы повышают уровень инноваций в стране.Новые технологические стартапы повышают уровень инноваций в стране.Новые технологические стартапы повышают уровень инноваций в стране.Новые технологические стартапы повышают уровень инноваций в стране.Новые технологические стартапы повышают уровень инноваций в стране.Новые технологические стартапы повышают уровень инноваций в стране.Новые технологические стартапы повышают уровень инноваций в стране.Новые технологические стартапы повышают уровень инноваций в стране.</p>\r\n', 'b16080d8a494aa2539cf5639e24ff71c.jpg', '[\"ab87d3279a7dc595c4bd134f73c751dd.jpg\", \"527d78ac61d625e2e144377a4a519bd5.jpg\"]', 'https://www.youtube.com/embed/ok4i1aPrecw?si=TOMQ-v0xLTiWKzuO', 8, 1, 'important_news', 1, '2025-04-26 03:58:26', '2025-04-27 03:06:19'),
(5, 'Bakıda beynəlxalq musiqi festivalı keçirildi', 'International Music Festival Held in Baku.', 'В Баку прошёл международный музыкальный фестиваль.', 'Bakıda beynəlxalq musiqi festivalı keçirildi.Bakıda beynəlxalq musiqi festivalı keçirildi.Bakıda beynəlxalq musiqi festivalı keçirildi.', 'International Music Festival Held in Baku.International Music Festival Held in Baku.International Music Festival Held in Baku.', 'В Баку прошёл международный музыкальный фестиваль.В Баку прошёл международный музыкальный фестиваль.В Баку прошёл международный музыкальный фестиваль.', '<p>Bakıda beynəlxalq musiqi festivalı ke&ccedil;irildi.Bakıda beynəlxalq musiqi festivalı ke&ccedil;irildi.Bakıda beynəlxalq musiqi festivalı ke&ccedil;irildi.Bakıda beynəlxalq musiqi festivalı ke&ccedil;irildi.Bakıda beynəlxalq musiqi festivalı ke&ccedil;irildi.Bakıda beynəlxalq musiqi festivalı ke&ccedil;irildi.Bakıda beynəlxalq musiqi festivalı ke&ccedil;irildi.Bakıda beynəlxalq musiqi festivalı ke&ccedil;irildi.Bakıda beynəlxalq musiqi festivalı ke&ccedil;irildi.</p>\r\n', '<p>International Music Festival Held in Baku.International Music Festival Held in Baku.International Music Festival Held in Baku.International Music Festival Held in Baku.International Music Festival Held in Baku.International Music Festival Held in Baku.International Music Festival Held in Baku.International Music Festival Held in Baku.International Music Festival Held in Baku.</p>\r\n', '<p>В Баку прошёл международный музыкальный фестиваль.В Баку прошёл международный музыкальный фестиваль.В Баку прошёл международный музыкальный фестиваль.В Баку прошёл международный музыкальный фестиваль.В Баку прошёл международный музыкальный фестиваль.В Баку прошёл международный музыкальный фестиваль.В Баку прошёл международный музыкальный фестиваль.В Баку прошёл международный музыкальный фестиваль.В Баку прошёл международный музыкальный фестиваль.</p>\r\n', '1c322afb54978d5bc091af8cf28b75c1.jpg', '[\"b81a9a65fe543b51e261aeaad0283568.jpg\", \"efc9d1c86ede8c7c325fcd86c05c554b.jpg\"]', 'https://www.youtube.com/embed/ok4i1aPrecw?si=TOMQ-v0xLTiWKzuO', 11, 1, 'general_news', 1, '2025-04-26 04:01:36', '2025-04-27 03:06:07');

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE `settings` (
  `uid` int UNSIGNED NOT NULL,
  `collection` json NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`uid`, `collection`, `created_at`, `updated_at`) VALUES
(1, '{\"snow_mode\": false, \"maintenance_mode\": false}', '2025-04-21 02:18:35', '2025-04-21 02:19:32');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Индексы таблицы `advertising`
--
ALTER TABLE `advertising`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `author_id` (`author_id`);

--
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `advertising`
--
ALTER TABLE `advertising`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `settings`
--
ALTER TABLE `settings`
  MODIFY `uid` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `news_ibfk_2` FOREIGN KEY (`author_id`) REFERENCES `admins` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

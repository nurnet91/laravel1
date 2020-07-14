-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 30 2017 г., 17:53
-- Версия сервера: 5.6.29
-- Версия PHP: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `oila_my`
--

-- --------------------------------------------------------

--
-- Структура таблицы `banners`
--

CREATE TABLE IF NOT EXISTS `banners` (
  `id` int(11) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `text` text,
  `type` varchar(50) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `foto` varchar(250) DEFAULT NULL,
  `link` varchar(250) DEFAULT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `banners`
--

INSERT INTO `banners` (`id`, `title`, `text`, `type`, `size`, `foto`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'werwerwerer', '&lt;p&gt;werwerwerwerwerwerwer&lt;/p&gt;\r\n', 'banner1', NULL, 'uploads/2016-06-20/banners/1466420909no-banner-728x90.jpg', '', 0, NULL, '2016-06-20 13:23:18'),
(2, '', '', 'banner2', NULL, 'uploads/2016-06-20/banners/1466421407no-banner-300x250.jpg', '', 1, '2016-06-20 11:16:47', '2016-06-22 05:47:47'),
(3, '', '', 'banner3', NULL, 'uploads/2016-06-20/banners/1466421431no-banner-200x200.jpg', '', 0, '2016-06-20 11:17:11', '2016-06-22 05:45:53'),
(4, '', '', 'banner4', NULL, 'uploads/2016-06-20/banners/1466421455no-banner-468x60.jpg', '', 1, '2016-06-20 11:17:35', '2016-06-20 11:18:03');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8_unicode_ci,
  `text_sh` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `right` tinyint(2) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `code`, `text`, `text_sh`, `foto`, `status`, `right`, `order`, `created_at`, `updated_at`) VALUES
(1, 'Yetti kun', 'mahalliy', '', '', NULL, 1, 0, 0, '2016-06-09 00:10:09', '2016-06-16 06:24:11'),
(2, 'Xorij xabarlari', 'xorij', '', '', NULL, 1, 0, 0, '2016-06-10 05:16:21', '2016-06-13 10:15:36'),
(3, 'Yangisidan bor', 'yangisi', '&lt;p&gt;admin.layout&lt;/p&gt;\r\n', '&lt;p&gt;admin.layout aaa&lt;/p&gt;\r\n', 'uploads/2016-06-16/categories/1466056998tashkent-hotel-uzbekistan-01.jpg', 1, 1, 2, '2016-06-16 06:03:18', '2016-06-25 06:25:40'),
(4, 'OD eshittingizmi', 'od', '&lt;p&gt;Od eshittingizmi,&amp;nbsp;Od eshittingizmi,&amp;nbsp;Od eshittingizmi,&amp;nbsp;Od eshittingizmi,&amp;nbsp;Od eshittingizmi&lt;/p&gt;\r\n', '&lt;p&gt;Od eshittingizmi&lt;/p&gt;\r\n', 'uploads/2016-06-16/categories/1466057645newspaper.jpg', 1, 1, 3, '2016-06-16 06:14:05', '2016-06-25 06:26:55'),
(5, 'Qayroqi Gap', 'qayroqi', '&lt;p&gt;Qayroqi Gap&lt;/p&gt;\r\n', '&lt;p&gt;Qayroqi Gap&lt;/p&gt;\r\n', 'uploads/2016-06-16/categories/146605822211670.jpg', 1, 1, 1, '2016-06-16 06:23:42', '2016-06-25 06:24:48'),
(6, 'OD eshittingizmi2', NULL, '&lt;p&gt;OD eshittingizmi2&lt;/p&gt;\r\n', '&lt;p&gt;OD eshittingizmi2&lt;/p&gt;\r\n', 'uploads/2016-06-25/categories/14668362180_10c197_dcda4531_orig.jpg', 1, 1, 4, '2016-06-25 06:30:18', '2016-06-25 06:30:18');

-- --------------------------------------------------------

--
-- Структура таблицы `fotos`
--

CREATE TABLE IF NOT EXISTS `fotos` (
  `id` int(11) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `text` text,
  `gallery_id` int(11) DEFAULT NULL,
  `foto` varchar(250) NOT NULL,
  `date` timestamp NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `fotos`
--

INSERT INTO `fotos` (`id`, `title`, `text`, `gallery_id`, `foto`, `date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Test', '', 1, 'uploads/2016-06-21/fotos/1466496494EclipseSoundtrackCover.jpg', '2016-06-16 05:50:00', 1, '2016-06-16 08:10:31', '2016-06-21 08:08:14'),
(2, 'TEST 2', '&lt;p&gt;ere&lt;/p&gt;\r\n', 1, 'uploads/2016-06-16/fotos/146606485851siu9bArwL.jpg', '2016-06-16 05:50:00', 1, '2016-06-16 08:10:48', '2016-06-16 08:14:18'),
(3, 'Ttttt', '&lt;p&gt;tttt&lt;/p&gt;\r\n', 1, 'uploads/2016-06-16/fotos/1466064895khiva-city.jpg', '2016-06-14 08:45:00', 1, '2016-06-16 08:14:55', '2016-06-16 08:14:55'),
(4, 'trertrtr', '', 2, 'uploads/2016-06-16/fotos/14660679934620900412.png', '2016-06-15 09:05:00', 1, '2016-06-16 09:06:33', '2016-06-16 09:06:33'),
(5, 'dfgdfgdf', '', 2, 'uploads/2016-06-16/fotos/1466068013blue.jpg', '2016-06-15 09:45:00', 1, '2016-06-16 09:06:53', '2016-06-16 09:06:53');

-- --------------------------------------------------------

--
-- Структура таблицы `galleries`
--

CREATE TABLE IF NOT EXISTS `galleries` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `text` text,
  `date` timestamp NOT NULL,
  `foto` varchar(250) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '1',
  `asosiy` tinyint(2) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `text`, `date`, `foto`, `status`, `asosiy`, `created_at`, `updated_at`) VALUES
(1, 'Xiva', '&lt;p&gt;Text&lt;/p&gt;\r\n', '2016-06-16 05:50:00', 'uploads/2016-06-16/galleries/1466063356khiva-city.jpg', 1, 1, '2016-06-16 06:57:05', '2016-06-16 07:49:16'),
(2, 'Shahrisabz', '&lt;p&gt;asdasdasd&lt;/p&gt;\r\n', '2016-06-15 05:50:00', 'uploads/2016-06-16/galleries/1466063316palast-ak-saray.jpg', 1, 1, '2016-06-16 06:58:11', '2016-06-16 07:48:36'),
(3, 'Buxoro', '&lt;p&gt;Text&lt;/p&gt;\r\n', '2016-06-14 05:00:00', 'uploads/2016-06-16/galleries/1466063304uzbekistan_3238_600x450.jpg', 1, 1, '2016-06-16 06:58:56', '2016-06-16 07:48:24'),
(4, 'Samarqand', '', '2016-06-13 07:45:00', 'uploads/2016-06-16/galleries/1466063467samarqand.jpg', 1, 0, '2016-06-16 07:49:49', '2016-06-16 07:51:20');

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL,
  `fio` varchar(250) NOT NULL,
  `phone` bigint(14) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `send_email` varchar(50) DEFAULT NULL,
  `view` tinyint(2) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `fio`, `phone`, `email`, `message`, `ip`, `send_email`, `view`, `created_at`, `updated_at`) VALUES
(2, 'Test', 998909113820, '', 'Message', '127.0.0.1', 'nur_net91@mail.ru', 1, '2016-06-17 19:00:00', '2016-06-18 11:34:41'),
(3, 'Test', 998909113820, '', 'Message', '127.0.0.1', 'nur_net91@mail.ru', 1, '2016-06-17 19:00:00', '2016-06-18 11:34:47'),
(4, 'Nurbek', 998909113820, 'nur_net91@mail.ru', 'Assalomu alaykum', '192.168.1.101', 'nur_net91@mail.ru', 1, '2016-06-18 12:55:58', '2016-06-18 13:36:23'),
(5, 'Nurbek', 998909113820, 'nur_net91@mail.ru', 'Assalomu alaykum', '192.168.1.101', 'nur_net91@mail.ru', 1, '2016-06-18 12:56:14', '2016-06-18 13:36:23'),
(6, 'Nurbek', 998909113820, 'nur_net91@mail.ru', 'Assalomu alaykum', '192.168.1.101', 'nur_net91@mail.ru', 1, '2016-06-18 12:57:42', '2016-06-18 13:36:24'),
(7, 'Nurbek', 998909113820, 'nur_net91@mail.ru', 'Assalomu alaykum', '192.168.1.101', 'nur_net91@mail.ru', 1, '2016-06-18 12:57:55', '2016-06-18 13:36:25'),
(8, 'Nurbek', 998909113820, 'nur_net91@mail.ru', 'Assalomu alaykum', '192.168.1.101', 'nur_net91@mail.ru', 1, '2016-06-18 13:01:14', '2016-06-18 13:36:25'),
(9, 'Nurbek', 998909113820, 'nur_net91@mail.ru', 'Assalomu alaykum', '192.168.1.101', 'nur_net91@mail.ru', 1, '2016-06-18 13:01:25', '2016-06-18 13:36:26'),
(10, 'Nurbek', 998909113820, 'nur_net91@mail.ru', 'Assalomu alaykum', '192.168.1.101', 'nur_net91@mail.ru', 1, '2016-06-18 13:02:28', '2016-06-18 13:36:27'),
(11, 'lksdfjksdfssdfj', 657486456465, 'jskdfh@kjdf.seui', 'klsadfjaskldjf asldjkldjf alksdjfalksdjf alskdjfalksdj alksdjflak;sdjf ;alksdjf;laskdj alksdjfl;aksdj l;aksdjf;laskdj al;ksdjfla;skdj a;lksdjf;alskdjf asd', '192.168.1.101', 'nur_net91@mail.ru', 1, '2016-06-18 13:36:59', '2016-06-18 13:37:12'),
(12, 'erwerwe', 234234234234, '23423423@errer.uy', 'sdfgsdfgsdf', '192.168.1.101', 'nur_net91@mail.ru', 1, '2016-06-21 08:08:47', '2016-06-21 08:09:07'),
(13, 'rewrqwerq', 998909113820, 'qwerqwe@erwer.er', 'qwerqwer qwerqwer', '192.168.1.101', 'nur_net91@mail.ru', 1, '2016-06-22 04:24:38', '2016-06-22 06:11:58'),
(14, 'wertwert', 8798754546465, 'dsajfhsadjk@kjdfldf.sjd', 'fgsdyhfiusd asdfiasoidfi oiasdifasdf ', '192.168.1.101', 'nur_net91@mail.ru', 1, '2016-06-22 06:10:54', '2016-06-22 06:11:33');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_06_06_170319_create_table_reports', 1),
('2016_06_06_173304_create_table_rukns', 2),
('2016_06_06_173319_create_table_categories', 2),
('2016_06_08_144833_create_numbers_table', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `numbers`
--

CREATE TABLE IF NOT EXISTS `numbers` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci,
  `text_sh` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `yil` int(11) NOT NULL,
  `son` int(11) NOT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `word` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `numbers`
--

INSERT INTO `numbers` (`id`, `title`, `text`, `text_sh`, `yil`, `son`, `date`, `word`, `foto`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Men endi kollejga boraman', '&lt;p&gt;Mamlakatimizdagi 9500 dan ziyod maktabda so&amp;rsquo;ngi qo&amp;rsquo;ng&amp;rsquo;iroq chalindi.&lt;/p&gt;\r\n', '&lt;p&gt;Mamlakatimizdagi 9500 dan ziyod maktabda&lt;/p&gt;\r\n', 2016, 21, '2016-06-16 04:25:00', 'Yigirma birinchi son', 'uploads/2016-06-14/numbers/146590539720160614_164847222.jpg', 1, '2016-06-09 07:45:29', '2016-06-16 06:00:49'),
(2, 'Zamin bizga mo&rsquo;jizalar beraru, evaziga faqat hayrat so&rsquo;raydi', 'Zamin bizga mo&rsquo;jizalar beraru, evaziga faqat hayrat so&rsquo;raydi...', 'Zamin bizga mo&rsquo;jizalar beraru', 2016, 16, '2016-06-07 23:10:12', 'O&rsquo;n oltinchi son', NULL, 1, '2016-06-09 07:45:29', NULL),
(4, 'Birinchi son', '&lt;p&gt;ewrqwerqwer qerqwerqerq &lt;a href=&quot;http://wertwertwert.ru&quot;&gt;wert&lt;/a&gt;&lt;a href=&quot;http://qerqwerqwer.ru&quot;&gt;e&lt;/a&gt;&lt;a href=&quot;http://wertwertwert.ru&quot;&gt;wertwrtewrtewrtwertw&lt;/a&gt;&lt;/p&gt;\r\n', '&lt;p&gt;erqwerq&lt;/p&gt;\r\n', 2016, 1, '2016-06-01 02:18:16', 'Birinchi son', NULL, 1, '2016-06-10 07:45:29', '2016-06-10 11:00:24'),
(5, '22222222222222222', '&lt;p&gt;22222222&lt;/p&gt;\r\n', '&lt;p&gt;2222222222&lt;/p&gt;\r\n', 2016, 2, '2016-05-26 08:28:32', '22222222222', NULL, 1, '2016-06-10 08:04:38', '2016-06-10 11:26:54'),
(6, 'Test test test test tes ', '', '', 2016, 19, '2016-06-15 13:30:00', 'O''n to''qqiz', 'uploads/2016-06-15/numbers/146599235851siu9bArwL.jpg', 1, '2016-06-15 12:05:58', '2016-06-15 12:06:32'),
(7, 'Uchinchi son', '&lt;p&gt;qertwqertwqerte&lt;/p&gt;\r\n', '&lt;p&gt;wertwqert&lt;/p&gt;\r\n', 2016, 3, '2016-03-02 05:00:00', 'Uchinchi', 'uploads/2016-06-16/numbers/146605690011670.jpg', 1, '2016-06-16 06:01:40', '2016-06-16 06:02:05'),
(8, 'Fudbol', '&lt;p&gt;Fudbol&lt;/p&gt;\r\n', '&lt;p&gt;Fudbol&lt;/p&gt;\r\n', 2016, 4, '2016-03-09 05:50:00', 'To''rtinchi son', 'uploads/2016-06-16/numbers/1466058186kultura-liechtensteina-8.jpg', 1, '2016-06-16 06:21:45', '2016-06-25 10:36:33'),
(9, 'Test', '&lt;p&gt;&lt;strong&gt;jwehrkjwerwer dfsdfsdf&lt;/strong&gt;&lt;/p&gt;\r\n', '', 2016, 22, '2016-06-23 05:30:00', 'Yigirma ikki', 'uploads/2016-06-22/numbers/1466573203khiva-city.jpg', 1, '2016-06-22 05:26:43', '2016-06-22 05:26:43'),
(10, 'To''rtinchi son', '', '', 2015, 4, '2015-01-15 05:30:00', 'To''rtinchi son', NULL, 1, '2016-06-25 10:38:11', '2016-06-25 10:38:11');

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `text_sh` text,
  `text` text,
  `email` varchar(50) NOT NULL,
  `adres` varchar(250) DEFAULT NULL,
  `google_karta` text,
  `tel` varchar(20) DEFAULT NULL,
  `tel2` varchar(20) DEFAULT NULL,
  `fb` varchar(250) DEFAULT NULL,
  `vk` varchar(250) DEFAULT NULL,
  `gp` varchar(250) DEFAULT NULL,
  `tv` varchar(250) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `title`, `text_sh`, `text`, `email`, `adres`, `google_karta`, `tel`, `tel2`, `fb`, `vk`, `gp`, `tv`, `type`, `created_at`, `updated_at`) VALUES
(3, 'Biz bilan aloqa', '&lt;h2&gt;Who Are We ?34534543&lt;/h2&gt;\r\n\r\n&lt;p&gt;Lorem ipsum dolor sit amet, nam alii semper no, per at case moderatius efficiendi. Duo ex pericula vulputate. Tritani blandit splendide eos ea, mel ea vide facete phaedrum. Pro eu omittantur, ad sea nostro nostrum argumentum, ex exerci suscipit mei. Id eos conceptam interesset, id unum probo discere duo, te mel quot mucius apeirian. Eu facete ceteros. Mei esse dolore everti at, id cum augue eleifend.&lt;/p&gt;\r\n\r\n&lt;h2&gt;And What Do We Eat ?&lt;/h2&gt;\r\n\r\n&lt;p&gt;Quem intellegat nec in, id quo ridens vulputate scripserit. Et mundi quaerendum quo, est suas cibo mentitum. In sed postea maiestatis. Doming neglegentur mel ea, ceteros ius cu, vidit nihil dicunt pri at. In nostro phaedrum sea, nam liberavisse voluptatibus no. Congue corrumpit cu eam, eos iuvaret commune id.&lt;/p&gt;\r\n', '&lt;h2&gt;Who Are We ?34534543&lt;/h2&gt;\r\n\r\n&lt;p&gt;Lorem ipsum dolor sit amet, nam alii semper no, per at case moderatius efficiendi. Duo ex pericula vulputate. Tritani blandit splendide eos ea, mel ea vide facete phaedrum. Pro eu omittantur, ad sea nostro nostrum argumentum, ex exerci suscipit mei. Id eos conceptam interesset, id unum probo discere duo, te mel quot mucius apeirian. Eu facete ceteros. Mei esse dolore everti at, id cum augue eleifend.&lt;/p&gt;\r\n\r\n&lt;h2&gt;And What Do We Eat ?&lt;/h2&gt;\r\n\r\n&lt;p&gt;Quem intellegat nec in, id quo ridens vulputate scripserit. Et mundi quaerendum quo, est suas cibo mentitum. In sed postea maiestatis. Doming neglegentur mel ea, ceteros ius cu, vidit nihil dicunt pri at. In nostro phaedrum sea, nam liberavisse voluptatibus no. Congue corrumpit cu eam, eos iuvaret commune id.&lt;/p&gt;\r\n', 'info@od-press.uz', 'Test adres', '&lt;iframe src=&quot;https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d749.2457078999582!2d69.279298!3d41.3092371!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x91e520cddd341bf2!2z0KHRgtCw0YDRi9C1INCa0YPRgNCw0L3RgtGL!5e0!3m2!1sru!2sru!4v1466164668572&quot; width=&quot;100%&quot; height=&quot;350&quot; frameborder=&quot;0&quot; scrolling=&quot;no&quot; marginheight=&quot;0&quot; marginwidth=&quot;0&quot; style=&quot;border:0&quot;&gt;&lt;/iframe&gt;', '+998909999999', '', 'https://www.facebook.com/evrika.uz/', 'ttttttttttttttt', 'tttttttttttttttt', 'ttttttttttttttttt', 'contact', '2016-06-18 09:53:50', '2016-06-22 06:12:44'),
(4, 'Tahreriyat', '', '&lt;h2&gt;Who Are We ?34534543&lt;/h2&gt;\r\n\r\n&lt;p&gt;Lorem ipsum dolor sit amet, nam alii semper no, per at case moderatius efficiendi. Duo ex pericula vulputate. Tritani blandit splendide eos ea, mel ea vide facete phaedrum. Pro eu omittantur, ad sea nostro nostrum argumentum, ex exerci suscipit mei. Id eos conceptam interesset, id unum probo discere duo, te mel quot mucius apeirian. Eu facete ceteros. Mei esse dolore everti at, id cum augue eleifend.&lt;/p&gt;\r\n\r\n&lt;h2&gt;And What Do We Eat ?&lt;/h2&gt;\r\n\r\n&lt;p&gt;Quem intellegat nec in, id quo ridens vulputate scripserit. Et mundi quaerendum quo, est suas cibo mentitum. In sed postea maiestatis. Doming neglegentur mel ea, ceteros ius cu, vidit nihil dicunt pri at. In nostro phaedrum sea, nam liberavisse voluptatibus no. Congue corrumpit cu eam, eos iuvaret commune id.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;fsdfsdf&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;hr /&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n', '', 'wertwer wertwert wertwert wert wert wert', '', '', '', '', '', '', '', 'tahririyat', '2016-06-20 06:02:56', '2016-06-22 06:05:39'),
(5, 'Gazeta haqida', '', '&lt;h2&gt;Who Are We ?34534543&lt;/h2&gt;\r\n\r\n&lt;p&gt;Lorem ipsum dolor sit amet, nam alii semper no, per at case moderatius efficiendi. Duo ex pericula vulputate. Tritani blandit splendide eos ea, mel ea vide facete phaedrum. Pro eu omittantur, ad sea nostro nostrum argumentum, ex exerci suscipit mei. Id eos conceptam interesset, id unum probo discere duo, te mel quot mucius apeirian. Eu facete ceteros. Mei esse dolore everti at, id cum augue eleifend.&lt;/p&gt;\r\n\r\n&lt;h2&gt;And What Do We Eat ?&lt;/h2&gt;\r\n\r\n&lt;p&gt;Quem intellegat nec in, id quo ridens vulputate scripserit. Et mundi quaerendum quo, est suas cibo mentitum. In sed postea maiestatis. Doming neglegentur mel ea, ceteros ius cu, vidit nihil dicunt pri at. In nostro phaedrum sea, nam liberavisse voluptatibus no. Congue corrumpit cu eam, eos iuvaret commune id.&lt;/p&gt;\r\n', '', '', '', '', '', '', '', '', '', 'gazeta', '2016-06-20 08:00:56', '2016-06-20 08:00:56'),
(6, 'Rahbariyat', '', '&lt;h2&gt;Who Are We ?34534543&lt;/h2&gt;\r\n\r\n&lt;p&gt;Lorem ipsum dolor sit amet, nam alii semper no, per at case moderatius efficiendi. Duo ex pericula vulputate. Tritani blandit splendide eos ea, mel ea vide facete phaedrum. Pro eu omittantur, ad sea nostro nostrum argumentum, ex exerci suscipit mei. Id eos conceptam interesset, id unum probo discere duo, te mel quot mucius apeirian. Eu facete ceteros. Mei esse dolore everti at, id cum augue eleifend.&lt;/p&gt;\r\n\r\n&lt;h2&gt;And What Do We Eat ?&lt;/h2&gt;\r\n\r\n&lt;p&gt;Quem intellegat nec in, id quo ridens vulputate scripserit. Et mundi quaerendum quo, est suas cibo mentitum. In sed postea maiestatis. Doming neglegentur mel ea, ceteros ius cu, vidit nihil dicunt pri at. In nostro phaedrum sea, nam liberavisse voluptatibus no. Congue corrumpit cu eam, eos iuvaret commune id.&lt;/p&gt;\r\n', '', '', '', '', '', '', '', '', '', 'rahbariyat', '2016-06-20 08:01:49', '2016-06-20 08:01:49'),
(7, 'Bo''limlar', '', '&lt;h2&gt;Who Are We ?34534543&lt;/h2&gt;\r\n\r\n&lt;p&gt;Lorem ipsum dolor sit amet, nam alii semper no, per at case moderatius efficiendi. Duo ex pericula vulputate. Tritani blandit splendide eos ea, mel ea vide facete phaedrum. Pro eu omittantur, ad sea nostro nostrum argumentum, ex exerci suscipit mei. Id eos conceptam interesset, id unum probo discere duo, te mel quot mucius apeirian. Eu facete ceteros. Mei esse dolore everti at, id cum augue eleifend.&lt;/p&gt;\r\n\r\n&lt;h2&gt;And What Do We Eat ?&lt;/h2&gt;\r\n\r\n&lt;p&gt;Quem intellegat nec in, id quo ridens vulputate scripserit. Et mundi quaerendum quo, est suas cibo mentitum. In sed postea maiestatis. Doming neglegentur mel ea, ceteros ius cu, vidit nihil dicunt pri at. In nostro phaedrum sea, nam liberavisse voluptatibus no. Congue corrumpit cu eam, eos iuvaret commune id.&lt;/p&gt;\r\n', '', '', '', '', '', '', '', '', '', 'bulimlar', '2016-06-20 08:02:01', '2016-06-20 08:02:01'),
(8, 'Obuna', '&lt;h2 style=&quot;font-style:italic&quot;&gt;Энди севимли журналингизга уйдан чиқмасдан обуна бўлишингиз мумкин!&lt;/h2&gt;\r\n', '&lt;ol&gt;\r\n	&lt;li&gt;Бунинг учун мана бу саҳифага кирамиз:&amp;nbsp;&lt;a href=&quot;http://www.akmt.uz/interaktiv-xizmatlar&quot; target=&quot;_blank&quot;&gt;http://www.akmt.uz/interaktiv-xizmatlar&lt;/a&gt;&lt;/li&gt;\r\n	&lt;li&gt;&amp;ldquo;Категория&amp;rdquo; деган жойдан&amp;nbsp;&lt;strong&gt;&amp;ldquo;журнал&amp;rdquo;&lt;/strong&gt;&amp;nbsp;сўзини танлаймиз.&lt;/li&gt;\r\n	&lt;li&gt;&amp;ldquo;Нашр номи / индекси&amp;rdquo; деган жойга&amp;nbsp;&lt;strong&gt;822&amp;nbsp;&lt;/strong&gt;ни киритамиз. Рўйхатда &amp;ldquo;Ёшлик&amp;rdquo; журнали пайдо бўлади.&lt;/li&gt;\r\n	&lt;li&gt;Журнал номи тўғрисидаги саватча расмини босамиз.&lt;/li&gt;\r\n	&lt;li&gt;Саватда журнал номи пайдо бўлади.&lt;/li&gt;\r\n	&lt;li&gt;&amp;ldquo;Буюртмани расмийлаштириш&amp;rdquo;ни босамиз.&lt;/li&gt;\r\n	&lt;li&gt;Буюртмани тўлиқ ва тўғри тўлдириб, расмийлаштирамиз.&lt;/li&gt;\r\n	&lt;li&gt;tdrtertertert&lt;/li&gt;\r\n&lt;/ol&gt;\r\n\r\n&lt;hr /&gt;\r\n&lt;p&gt;&lt;img alt=&quot;&quot; src=&quot;/uploads/obuna/1.jpg&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;hr /&gt;\r\n&lt;p&gt;&lt;img alt=&quot;&quot; src=&quot;/uploads/obuna/2.jpg&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;hr /&gt;\r\n&lt;p&gt;&lt;img alt=&quot;&quot; src=&quot;/uploads/obuna/3.jpg&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;hr /&gt;\r\n&lt;p&gt;&lt;img alt=&quot;&quot; src=&quot;/uploads/obuna/4.jpg&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;hr /&gt;\r\n&lt;p&gt;&lt;img alt=&quot;&quot; src=&quot;/uploads/obuna/5.jpg&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;hr /&gt;\r\n&lt;p&gt;Obuna bo&amp;#39;lishni unutmang&lt;/p&gt;\r\n', '', '', '', '', '', '', '', '', '', 'obuna', '2016-06-20 08:02:14', '2016-06-22 06:09:15');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text_sh` text COLLATE utf8_unicode_ci,
  `text` text COLLATE utf8_unicode_ci,
  `category_id` int(11) DEFAULT NULL,
  `rukn_id` int(11) DEFAULT NULL,
  `number_id` int(11) NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `readed` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `muhim` tinyint(2) NOT NULL DEFAULT '0',
  `asosiy` tinyint(2) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `reports`
--

INSERT INTO `reports` (`id`, `title`, `text_sh`, `text`, `category_id`, `rukn_id`, `number_id`, `foto`, `readed`, `status`, `muhim`, `asosiy`, `created_at`, `updated_at`) VALUES
(6, 'wertqwe', '&lt;p&gt;wertqwe&lt;/p&gt;\r\n', '&lt;p&gt;wertwer wertwert&lt;/p&gt;\r\n', 4, 1, 2, 'uploads/2016-06-10/reports/2/1465548523directory.png', 3, 1, 0, 0, '2016-06-08 05:35:12', '2016-06-25 08:42:03'),
(10, '11111', '&lt;p&gt;11111&lt;/p&gt;\r\n', '&lt;p&gt;111111 11111&lt;/p&gt;\r\n', 1, 4, 1, '', 0, 1, 0, 0, '2016-06-08 05:50:18', '2016-06-22 11:45:28'),
(11, 'wertwert', '&lt;p&gt;wertqwe&lt;/p&gt;\r\n', '&lt;p&gt;wertwertwert wert&lt;/p&gt;\r\n', 1, 3, 1, NULL, 5, 1, 0, 0, '2016-06-08 06:20:29', '2016-06-17 08:57:27'),
(12, 'qwe', '&lt;p&gt;qwe&lt;/p&gt;\r\n', '&lt;p&gt;qwe&lt;/p&gt;\r\n', 1, 1, 1, 'uploads/2016-06-10/reports/1/14655484774620900412.png', 0, 1, 0, 0, '2016-06-08 06:38:58', '2016-06-10 08:47:57'),
(13, '12341234', '&lt;p&gt;12341234&lt;/p&gt;\r\n', '&lt;p&gt;123412342 123412341&lt;/p&gt;\r\n', 1, 1, 1, 'uploads/2016-06-10/reports/1/1465548468Renault-Fluence-2015.jpg', 0, 1, 0, 0, '2016-06-08 06:57:32', '2016-06-10 08:47:48'),
(15, 'qweqweqwe', '&lt;p&gt;qweqweqwe&lt;/p&gt;\r\n', '&lt;p&gt;qweqweqweqw qweqweq&lt;/p&gt;\r\n', 1, 1, 1, 'uploads/2016-06-10/reports/1/1465548459office-moving-icon1.png', 1, 1, 0, 0, '2016-06-08 07:34:44', '2016-06-21 06:13:54'),
(16, 'Xitoyda endi mushuklar asrb-avaylanadi', '&lt;p&gt;Xitoyda mushuklarni asrb-avayalsh uchun yangi qonunlar...&lt;/p&gt;\r\n', '&lt;p&gt;Xitoyda mushuklarni asrb-avayalsh uchun yangi qonunlar e&amp;#39;lon qilindi:&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;Kech tushmasidan mushuklar egasini uyida bo&amp;#39;lishi shart, aks holda jarima 5ta mushukni narxi, ya&amp;#39;ni $5&lt;/li&gt;\r\n	&lt;li&gt;Mushuklarga haftada 3 marta sichqon tutib berish yoki sichqon mahsulatlaridan sotib olib berish, chunki iqlimning bunday o&amp;#39;zgarishida 1 ta mushuk omon qolishi uchun unga 1 haftada 453.24g sichqon go&amp;#39;shti kerak bo&amp;#39;ladi&lt;/li&gt;\r\n	&lt;li&gt;Quyosh issig&amp;#39;idan asrash. Mushuklar issiq joyni yaxshi ko&amp;#39;radi lekin, oftobga chiqarish aslo mumkin emas, issiqlik kerak bo&amp;#39;lsa xox yoz bo&amp;#39;lsin xox qish, uyda pechka yoqib qo&amp;#39;yish kerak bo&amp;#39;ladi&lt;/li&gt;\r\n&lt;/ul&gt;\r\n', 2, 3, 1, 'uploads/2016-06-10/reports/1/1465548450Move-with-Pets-Step-18.jpg', 4, 1, 0, 0, '2016-06-08 09:46:32', '2016-06-22 07:23:00'),
(17, 'CKEDITOR', '&lt;p&gt;CKeditor qo&amp;#39;shildi&lt;/p&gt;\r\n', '&lt;p&gt;&lt;strong&gt;asdlkfjalskdjfalsd&amp;nbsp;&lt;em&gt;aseapoerawekr&amp;nbsp;&lt;s&gt;erewrwerwe &lt;/s&gt;&lt;/em&gt;&lt;/strong&gt;&amp;nbsp;&lt;samp&gt;erwerwerwerwerwer &amp;nbsp;xczxq&lt;/samp&gt;&lt;/p&gt;\r\n\r\n&lt;hr /&gt;\r\n&lt;table border=&quot;1&quot; cellpadding=&quot;1&quot; cellspacing=&quot;1&quot; style=&quot;width:500px&quot;&gt;\r\n	&lt;tbody&gt;\r\n		&lt;tr&gt;\r\n			&lt;td&gt;zxczx&lt;/td&gt;\r\n			&lt;td&gt;zxczx&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td&gt;zxczx&lt;/td&gt;\r\n			&lt;td&gt;zxczxczx&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td&gt;zxczxcz&lt;/td&gt;\r\n			&lt;td&gt;zxczxczxc&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n	&lt;/tbody&gt;\r\n&lt;/table&gt;\r\n\r\n&lt;p&gt;&lt;a id=&quot;zxczxc&quot; name=&quot;zxczxc&quot;&gt;&lt;/a&gt;zxczx&lt;a href=&quot;http://zxczxczx&quot;&gt;http://zxczxczx&lt;/a&gt;&amp;nbsp;zxczxczx&amp;nbsp;&lt;/p&gt;\r\n', 1, 1, 1, 'uploads/2016-06-10/reports/1/1465548440house_moving.jpg', 2, 1, 1, 0, '2016-06-08 11:41:05', '2016-06-17 09:15:40'),
(18, 'sdfjkhskjdfhskdjfhskdjf', '&lt;div style=&quot;background:#eee; border:1px solid #ccc; padding:5px 10px&quot;&gt;&lt;em&gt;ksduyhfsudfyhsdf&lt;/em&gt;&lt;/div&gt;\n', '&lt;p&gt;&lt;strong&gt;asdasdasjhd aksdjhaskjd haksjdha kjsdh kajsdh kasjdh kajsdh kasjdh aaksjdhak sjdh aksjdh kajshdka sjaksjdh ajks&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;em&gt;jkasdhkjasdh aksjdhajksdh akjsdhakjsdh akjsdhkajsdh akjsdhakjsdh ajksdhakjsdh&amp;nbsp;&lt;/em&gt;&lt;/p&gt;\r\n\r\n&lt;div style=&quot;background:#eee; border:1px solid #ccc; padding:5px 10px&quot;&gt;kjsdhfkjsdhfkj ksdjfhskjdfh ksdjfhksjdfhsdk ksjdhfksjdfh ksjdfhsjkdfh ksdjfhksjdfh skjdfhksjdfh ksdjfhksjdfh sjkdfh ksjdfh ksjdfh skdj fh&lt;/div&gt;\r\n\r\n&lt;h3 style=&quot;color:#aaa; font-style:italic&quot;&gt;lsidflsdkjflksdjf lsdkfjslkdfj lskdjfslkdfjsld lskdjflskdfjsd l sdkfjlskdjf lsdkjflskdjfposieurpwe woeiruwoeriu woeiru&amp;nbsp;&lt;/h3&gt;\r\n\r\n&lt;p&gt;&lt;q&gt;lksdjfsldjf sldkfjsldkfj sldkfjslkdfj sdlkfjsdlkfj&lt;/q&gt;&lt;/p&gt;\r\n', 1, 3, 1, 'uploads/2016-06-10/reports/1/1465548429directory.png', 0, 1, 0, 0, '2016-06-08 11:45:24', '2016-06-10 08:47:09'),
(19, 'Trolleybus o''rniga Elektrobus', '&lt;p&gt;Minskda joriy yilning dekabiridan jamoat transporti sifatida Elektrobuslar yo&amp;#39;lga qo&amp;#39;yiladi, diya xabar tarqatadi RATA-TASS.&lt;/p&gt;\r\n', '&lt;ol&gt;\r\n	&lt;li&gt;Test test test test test&amp;nbsp;&lt;/li&gt;\r\n	&lt;li&gt;werwer werwerwe werwer&amp;nbsp;&lt;tt&gt;sdfsdfsdf&lt;/tt&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;tt&gt;sdfsdfsdfsdfsdf&lt;/tt&gt;&lt;/li&gt;\r\n&lt;/ol&gt;\r\n', 1, 1, 1, 'uploads/2016-06-10/reports/1/1465548418blue.jpg', 0, 1, 0, 0, '2016-06-10 04:37:55', '2016-06-14 12:52:26'),
(20, 'TEST 2', '&lt;h3 style=&quot;color:#aaa; font-style:italic&quot;&gt;&lt;strong&gt;wertwertwertwert &lt;em&gt;esdfasdfasdfqwqw&lt;/em&gt;&lt;/strong&gt;&lt;/h3&gt;\r\n', '&lt;p&gt;&lt;strong&gt;rqwerqwerqwerwer &amp;nbsp;werwer&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;ol&gt;\r\n	&lt;li&gt;&lt;strong&gt;qwerqwerqwer&lt;/strong&gt;&lt;/li&gt;\r\n	&lt;li&gt;&lt;strong&gt;qwerqwer&lt;/strong&gt;&lt;/li&gt;\r\n&lt;/ol&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;\r\n	&lt;pre&gt;\r\n&lt;strong&gt;​qwerqwerqwerwqer&lt;/strong&gt;&lt;/pre&gt;\r\n	&lt;/li&gt;\r\n&lt;/ul&gt;\r\n', 1, 3, 1, NULL, 2, 1, 1, 0, '2016-06-10 05:11:06', '2016-06-22 13:02:17'),
(23, 'Quyosh energiyasidan sun''iy yoqilg''i olish mumkinmi?', '&lt;p&gt;Har qanday davlatning barqaror rivojlanishi energetika tarmog&amp;#39;ida qayta tiklanuvchi energiya manbaalaridan qay tariqa foydalanishiga bog&amp;#39;liq.&lt;/p&gt;\r\n', '&lt;p&gt;Har qanday davlatning barqaror rivojlanishi energetika tarmog&amp;#39;ida qayta tiklanuvchi energiya manbaalaridan qay tariqa foydalanishiga bog&amp;#39;liq.&amp;nbsp;Har qanday davlatning barqaror rivojlanishi energetika tarmog&amp;#39;ida qayta tiklanuvchi energiya manbaalaridan qay tariqa foydalanishiga bog&amp;#39;liq.&amp;nbsp;Har qanday davlatning barqaror rivojlanishi energetika tarmog&amp;#39;ida qayta tiklanuvchi energiya manbaalaridan qay tariqa foydalanishiga bog&amp;#39;liq.&amp;nbsp;Har qanday davlatning barqaror rivojlanishi energetika tarmog&amp;#39;ida qayta tiklanuvchi energiya manbaalaridan qay tariqa foydalanishiga bog&amp;#39;liq.&amp;nbsp;Har qanday davlatning barqaror rivojlanishi energetika tarmog&amp;#39;ida qayta tiklanuvchi energiya manbaalaridan qay tariqa foydalanishiga bog&amp;#39;liq.&amp;nbsp;Har qanday davlatning barqaror rivojlanishi energetika tarmog&amp;#39;ida qayta tiklanuvchi energiya manbaalaridan qay tariqa foydalanishiga bog&amp;#39;liq.&amp;nbsp;Har qanday davlatning barqaror rivojlanishi energetika tarmog&amp;#39;ida qayta tiklanuvchi energiya manbaalaridan qay tariqa foydalanishiga bog&amp;#39;liq.&amp;nbsp;Har qanday davlatning barqaror rivojlanishi energetika tarmog&amp;#39;ida qayta tiklanuvchi energiya manbaalaridan qay tariqa foydalanishiga bog&amp;#39;liq.&amp;nbsp;Har qanday davlatning barqaror rivojlanishi energetika tarmog&amp;#39;ida qayta tiklanuvchi energiya manbaalaridan qay tariqa foydalanishiga bog&amp;#39;liq.&amp;nbsp;Har qanday davlatning barqaror rivojlanishi energetika tarmog&amp;#39;ida qayta tiklanuvchi energiya manbaalaridan qay tariqa foydalanishiga bog&amp;#39;liq.&amp;nbsp;Har qanday davlatning barqaror rivojlanishi energetika tarmog&amp;#39;ida qayta tiklanuvchi energiya manbaalaridan qay tariqa foydalanishiga bog&amp;#39;liq.&amp;nbsp;Har qanday davlatning barqaror rivojlanishi energetika tarmog&amp;#39;ida qayta tiklanuvchi energiya manbaalaridan qay tariqa foydalanishiga bog&amp;#39;liq.&amp;nbsp;Har qanday davlatning barqaror rivojlanishi energetika tarmog&amp;#39;ida qayta tiklanuvchi energiya manbaalaridan qay tariqa foydalanishiga bog&amp;#39;liq.&amp;nbsp;Har qanday davlatning barqaror rivojlanishi energetika tarmog&amp;#39;ida qayta tiklanuvchi energiya manbaalaridan qay tariqa foydalanishiga bog&amp;#39;liq.&amp;nbsp;Har qanday davlatning barqaror rivojlanishi energetika tarmog&amp;#39;ida qayta tiklanuvchi energiya manbaalaridan qay tariqa foydalanishiga bog&amp;#39;liq.&amp;nbsp;Har qanday davlatning barqaror rivojlanishi energetika tarmog&amp;#39;ida qayta tiklanuvchi energiya manbaalaridan qay tariqa foydalanishiga bog&amp;#39;liq.&amp;nbsp;Har qanday davlatning barqaror rivojlanishi energetika tarmog&amp;#39;ida qayta tiklanuvchi energiya manbaalaridan qay tariqa foydalanishiga bog&amp;#39;liq.&amp;nbsp;Har qanday davlatning barqaror rivojlanishi energetika tarmog&amp;#39;ida qayta tiklanuvchi energiya manbaalaridan qay tariqa foydalanishiga bog&amp;#39;liq.&amp;nbsp;Har qanday davlatning barqaror rivojlanishi energetika tarmog&amp;#39;ida qayta tiklanuvchi energiya manbaalaridan qay tariqa foydalanishiga bog&amp;#39;liq.&lt;/p&gt;\r\n', 5, 1, 1, NULL, 4, 1, 0, 1, '2016-06-10 08:35:50', '2016-06-25 09:53:32'),
(24, 'Test Test', '&lt;p&gt;Test test&lt;/p&gt;\r\n', '&lt;p&gt;Test test test&lt;/p&gt;\r\n', 5, 3, 1, 'uploads/2016-06-13/reports/2/1465801463Move-with-Pets-Step-18.jpg', 0, 1, 1, 0, '2016-06-13 07:04:23', '2016-06-25 10:11:01'),
(25, 'Buxoro', '&lt;p&gt;Buxoro&lt;/p&gt;\r\n', '&lt;p&gt;Buxoro&lt;/p&gt;\r\n', 1, 3, 1, 'uploads/2016-06-13/reports/1/1465814857uzbekistan_3238_600x450.jpg', 7, 1, 0, 0, '2016-06-13 10:47:37', '2016-06-22 06:25:23'),
(26, 'Argentinada most qurildi', '&lt;p&gt;Mostning uzunligi 150m ni tashkil qiladi. Bu dunyoda kattaligi bo&amp;#39;yicha&amp;nbsp;5 - o&amp;#39;rinda turadi.&lt;/p&gt;\r\n', '&lt;p&gt;Mostning uzunligi 150m ni tashkil qiladi. Bu dunyoda kattaligi bo&amp;#39;yicha 5 - o&amp;#39;rinda turadi. U judayam mustahkam qilib qurilgan bo&amp;#39;lib og&amp;#39;irligi 220T gacha bo&amp;#39;lgan yukni bemalol ko&amp;#39;tara oladi.&lt;/p&gt;\r\n\r\n&lt;p&gt;Tashrif buyuring zavq oling.&lt;/p&gt;\r\n', 2, 1, 1, 'uploads/2016-06-13/reports/1/1465825929img20120904205447_2926.jpg', 6, 1, 0, 0, '2016-06-13 13:52:09', '2016-06-22 05:37:55'),
(27, 'Men endi kollejga boraman', '&lt;p&gt;Mamlakatimizdagi 9500 dan ziyod maktabda so&amp;#39;nggi qo&amp;#39;ng&amp;#39;iroq chalinadi.&lt;/p&gt;\r\n\r\n&lt;p&gt;475 ming nafardan ko&amp;#39;proq o&amp;#39;g&amp;#39;il-qiz kollej va litseylar sari uchirma bo&amp;#39;oldi&lt;/p&gt;\r\n', '&lt;p&gt;Mamlakatimizdagi 9500 dan ziyod maktabda so&amp;#39;nggi qo&amp;#39;ng&amp;#39;iroq chalinadi.&lt;/p&gt;\r\n\r\n&lt;p&gt;475 ming nafardan ko&amp;#39;proq o&amp;#39;g&amp;#39;il-qiz kollej va litseylar sari uchirma bo&amp;#39;oldi&lt;/p&gt;\r\n\r\n&lt;p&gt;Mamlakatimizdagi 9500 dan ziyod maktabda so&amp;#39;nggi qo&amp;#39;ng&amp;#39;iroq chalinadi.&lt;/p&gt;\r\n\r\n&lt;p&gt;475 ming nafardan ko&amp;#39;proq o&amp;#39;g&amp;#39;il-qiz kollej va litseylar sari uchirma bo&amp;#39;oldi&lt;/p&gt;\r\n\r\n&lt;p&gt;Mamlakatimizdagi 9500 dan ziyod maktabda so&amp;#39;nggi qo&amp;#39;ng&amp;#39;iroq chalinadi.&lt;/p&gt;\r\n\r\n&lt;p&gt;475 ming nafardan ko&amp;#39;proq o&amp;#39;g&amp;#39;il-qiz kollej va litseylar sari uchirma bo&amp;#39;oldi&lt;/p&gt;\r\n\r\n&lt;p&gt;Mamlakatimizdagi 9500 dan ziyod maktabda so&amp;#39;nggi qo&amp;#39;ng&amp;#39;iroq chalinadi.&lt;/p&gt;\r\n\r\n&lt;p&gt;475 ming nafardan ko&amp;#39;proq o&amp;#39;g&amp;#39;il-qiz kollej va litseylar sari uchirma bo&amp;#39;oldi&lt;/p&gt;\r\n\r\n&lt;p&gt;Mamlakatimizdagi 9500 dan ziyod maktabda so&amp;#39;nggi qo&amp;#39;ng&amp;#39;iroq chalinadi.&lt;/p&gt;\r\n\r\n&lt;p&gt;475 ming nafardan ko&amp;#39;proq o&amp;#39;g&amp;#39;il-qiz kollej va litseylar sari uchirma bo&amp;#39;oldi&lt;/p&gt;\r\n\r\n&lt;p&gt;Mamlakatimizdagi 9500 dan ziyod maktabda so&amp;#39;nggi qo&amp;#39;ng&amp;#39;iroq chalinadi.&lt;/p&gt;\r\n\r\n&lt;p&gt;475 ming nafardan ko&amp;#39;proq o&amp;#39;g&amp;#39;il-qiz kollej va litseylar sari uchirma bo&amp;#39;oldi&lt;/p&gt;\r\n', 1, 1, 1, 'uploads/2016-06-14/reports/1/146590620520160614_164847222.jpg', 1, 1, 0, 0, '2016-06-14 12:09:51', '2016-06-27 19:36:28'),
(28, 'Sumerki filmining keyingi qismi sur''atga olimoqda', '&lt;p&gt;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&lt;/p&gt;\r\n', '&lt;p&gt;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&lt;/p&gt;\r\n\r\n&lt;p&gt;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&lt;/p&gt;\r\n\r\n&lt;p&gt;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&lt;/p&gt;\r\n\r\n&lt;p&gt;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&lt;/p&gt;\r\n\r\n&lt;p&gt;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&amp;nbsp;Sumerki filmining keyingi qismi sur&amp;#39;atga olimoqda.&lt;/p&gt;\r\n', 2, 1, 1, 'uploads/2016-06-14/reports/1/1465906982EclipseSoundtrackCover.jpg', 4, 1, 0, 0, '2016-06-14 12:23:02', '2016-06-27 21:59:13'),
(29, 'Mablag'' yetishmasa kredit beramiz', '&lt;p&gt;Deylik, biror tadbirkorlikni yo&amp;#39;lga qo&amp;#39;ymoqchisiz. Buning uchun esa albatta qandaydir miqdorda mablag&amp;#39; zarur. Ammo o&amp;#39;sha mablag&amp;#39; sizda mavjud bo&amp;#39;lmasa yoki pulingiz rejani amalga oshirishga yetmasa...&lt;/p&gt;\r\n', '&lt;p&gt;Deylik, biror tadbirkorlikni yo&amp;#39;lga qo&amp;#39;ymoqchisiz. Buning uchun esa albatta qandaydir miqdorda mablag&amp;#39; zarur. Ammo o&amp;#39;sha mablag&amp;#39; sizda mavjud bo&amp;#39;lmasa yoki pulingiz rejani amalga oshirishga yetmasa, qanday yo&amp;#39;l tutasz? Buning yo&amp;#39;llari ko&amp;#39;p albatta. Masalan bank kredeti bunda juda as qotadi.&amp;nbsp;Deylik, biror tadbirkorlikni yo&amp;#39;lga qo&amp;#39;ymoqchisiz. Buning uchun esa albatta qandaydir miqdorda mablag&amp;#39; zarur. Ammo o&amp;#39;sha mablag&amp;#39; sizda mavjud bo&amp;#39;lmasa yoki pulingiz rejani amalga oshirishga yetmasa, qanday yo&amp;#39;l tutasz? Buning yo&amp;#39;llari ko&amp;#39;p albatta. Masalan bank kredeti bunda juda as qotadi.&amp;nbsp;Deylik, biror tadbirkorlikni yo&amp;#39;lga qo&amp;#39;ymoqchisiz. Buning uchun esa albatta qandaydir miqdorda mablag&amp;#39; zarur. Ammo o&amp;#39;sha mablag&amp;#39; sizda mavjud bo&amp;#39;lmasa yoki pulingiz rejani amalga oshirishga yetmasa, qanday yo&amp;#39;l tutasz? Buning yo&amp;#39;llari ko&amp;#39;p albatta. Masalan bank kredeti bunda juda as qotadi.&amp;nbsp;Deylik, biror tadbirkorlikni yo&amp;#39;lga qo&amp;#39;ymoqchisiz. Buning uchun esa albatta qandaydir miqdorda mablag&amp;#39; zarur. Ammo o&amp;#39;sha mablag&amp;#39; sizda mavjud bo&amp;#39;lmasa yoki pulingiz rejani amalga oshirishga yetmasa, qanday yo&amp;#39;l tutasz? Buning yo&amp;#39;llari ko&amp;#39;p albatta. Masalan bank kredeti bunda juda as qotadi.&amp;nbsp;Deylik, biror tadbirkorlikni yo&amp;#39;lga qo&amp;#39;ymoqchisiz. Buning uchun esa albatta qandaydir miqdorda mablag&amp;#39; zarur. Ammo o&amp;#39;sha mablag&amp;#39; sizda mavjud bo&amp;#39;lmasa yoki pulingiz rejani amalga oshirishga yetmasa, qanday yo&amp;#39;l tutasz? Buning yo&amp;#39;llari ko&amp;#39;p albatta. Masalan bank kredeti bunda juda as qotadi.&amp;nbsp;Deylik, biror tadbirkorlikni yo&amp;#39;lga qo&amp;#39;ymoqchisiz. Buning uchun esa albatta qandaydir miqdorda mablag&amp;#39; zarur. Ammo o&amp;#39;sha mablag&amp;#39; sizda mavjud bo&amp;#39;lmasa yoki pulingiz rejani amalga oshirishga yetmasa, qanday yo&amp;#39;l tutasz? Buning yo&amp;#39;llari ko&amp;#39;p albatta. Masalan bank kredeti bunda juda as qotadi.&amp;nbsp;Deylik, biror tadbirkorlikni yo&amp;#39;lga qo&amp;#39;ymoqchisiz. Buning uchun esa albatta qandaydir miqdorda mablag&amp;#39; zarur. Ammo o&amp;#39;sha mablag&amp;#39; sizda mavjud bo&amp;#39;lmasa yoki pulingiz rejani amalga oshirishga yetmasa, qanday yo&amp;#39;l tutasz? Buning yo&amp;#39;llari ko&amp;#39;p albatta. Masalan bank kredeti bunda juda as qotadi.&amp;nbsp;Deylik, biror tadbirkorlikni yo&amp;#39;lga qo&amp;#39;ymoqchisiz. Buning uchun esa albatta qandaydir miqdorda mablag&amp;#39; zarur. Ammo o&amp;#39;sha mablag&amp;#39; sizda mavjud bo&amp;#39;lmasa yoki pulingiz rejani amalga oshirishga yetmasa, qanday yo&amp;#39;l tutasz? Buning yo&amp;#39;llari ko&amp;#39;p albatta. Masalan bank kredeti bunda juda as qotadi.&amp;nbsp;Deylik, biror tadbirkorlikni yo&amp;#39;lga qo&amp;#39;ymoqchisiz. Buning uchun esa albatta qandaydir miqdorda mablag&amp;#39; zarur. Ammo o&amp;#39;sha mablag&amp;#39; sizda mavjud bo&amp;#39;lmasa yoki pulingiz rejani amalga oshirishga yetmasa, qanday yo&amp;#39;l tutasz? Buning yo&amp;#39;llari ko&amp;#39;p albatta. Masalan bank kredeti bunda juda as qotadi.&amp;nbsp;Deylik, biror tadbirkorlikni yo&amp;#39;lga qo&amp;#39;ymoqchisiz. Buning uchun esa albatta qandaydir miqdorda mablag&amp;#39; zarur. Ammo o&amp;#39;sha mablag&amp;#39; sizda mavjud bo&amp;#39;lmasa yoki pulingiz rejani amalga oshirishga yetmasa, qanday yo&amp;#39;l tutasz? Buning yo&amp;#39;llari ko&amp;#39;p albatta. Masalan bank kredeti bunda juda as qotadi.&amp;nbsp;Deylik, biror tadbirkorlikni yo&amp;#39;lga qo&amp;#39;ymoqchisiz. Buning uchun esa albatta qandaydir miqdorda mablag&amp;#39; zarur. Ammo o&amp;#39;sha mablag&amp;#39; sizda mavjud bo&amp;#39;lmasa yoki pulingiz rejani amalga oshirishga yetmasa, qanday yo&amp;#39;l tutasz? Buning yo&amp;#39;llari ko&amp;#39;p albatta. Masalan bank kredeti bunda juda as qotadi.&amp;nbsp;Deylik, biror tadbirkorlikni yo&amp;#39;lga qo&amp;#39;ymoqchisiz. Buning uchun esa albatta qandaydir miqdorda mablag&amp;#39; zarur. Ammo o&amp;#39;sha mablag&amp;#39; sizda mavjud bo&amp;#39;lmasa yoki pulingiz rejani amalga oshirishga yetmasa, qanday yo&amp;#39;l tutasz? Buning yo&amp;#39;llari ko&amp;#39;p albatta. Masalan bank kredeti bunda juda as qotadi.&lt;/p&gt;\r\n', 1, 1, 1, 'uploads/2016-06-14/reports/1/1465910212digital-newspaper-mh.jpg', 20, 1, 1, 0, '2016-06-14 13:00:53', '2016-06-22 14:06:32'),
(30, 'Topilma egasi mukofot bermayapti', '&lt;p&gt;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&lt;/p&gt;\r\n', '&lt;p&gt;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti.&amp;nbsp;Topilma egasi mukofot bermayapti&lt;/p&gt;\r\n', 2, 1, 1, NULL, 20, 1, 0, 0, '2016-06-14 13:18:23', '2016-06-26 10:06:45'),
(31, 'DOlzarb mavzuga misol', '&lt;p&gt;DOlzarb mavzuga misol.&amp;nbsp;DOlzarb mavzuga misol.&amp;nbsp;DOlzarb mavzuga misol.&amp;nbsp;DOlzarb mavzuga misol.&amp;nbsp;DOlzarb mavzuga misol.&amp;nbsp;DOlzarb mavzuga misol.&amp;nbsp;DOlzarb mavzuga misol.&amp;nbsp;DOlzarb mavzuga misol.&lt;/p&gt;\r\n', '&lt;p&gt;DOlzarb mavzuga misol.&amp;nbsp;DOlzarb mavzuga misol.&amp;nbsp;DOlzarb mavzuga misol.&amp;nbsp;DOlzarb mavzuga misol.&amp;nbsp;DOlzarb mavzuga misol.&amp;nbsp;DOlzarb mavzuga misol.&amp;nbsp;DOlzarb mavzuga misol.&amp;nbsp;DOlzarb mavzuga misol.&amp;nbsp;DOlzarb mavzuga misol.&amp;nbsp;DOlzarb mavzuga misol.&amp;nbsp;DOlzarb mavzuga misol.&amp;nbsp;DOlzarb mavzuga misol.&amp;nbsp;DOlzarb mavzuga misol.&amp;nbsp;DOlzarb mavzuga misol.&amp;nbsp;DOlzarb mavzuga misol.&amp;nbsp;DOlzarb mavzuga misol.&amp;nbsp;DOlzarb mavzuga misol.&amp;nbsp;DOlzarb mavzuga misol.&amp;nbsp;DOlzarb mavzuga misol.&amp;nbsp;DOlzarb mavzuga misol.&amp;nbsp;DOlzarb mavzuga misol.&amp;nbsp;DOlzarb mavzuga misol.&amp;nbsp;DOlzarb mavzuga misol.&amp;nbsp;DOlzarb mavzuga misol.&amp;nbsp;DOlzarb mavzuga misol.&lt;/p&gt;\r\n', 1, 3, 1, NULL, 58, 1, 0, 0, '2016-06-14 13:21:21', '2016-06-22 13:59:49'),
(32, 'Musobaqa', '&lt;p&gt;Musobaqa&lt;/p&gt;\r\n', '&lt;p&gt;Musobaqa&lt;/p&gt;\r\n', 0, 4, 6, 'uploads/2016-06-16/reports/6/1466058345img_0832.jpg', 2, 1, 1, 0, '2016-06-16 06:25:45', '2016-06-22 07:24:21'),
(33, 'Holidays', '&lt;p&gt;&lt;em&gt;Holidays&lt;/em&gt;&lt;/p&gt;\r\n', '&lt;p&gt;HolidaysHolidaysHolidaysHolidaysHolidaysHolidays&lt;/p&gt;\r\n', 4, 4, 1, 'uploads/2016-06-25/reports/1/1466843586holidays.jpg', 0, 1, 0, 1, '2016-06-25 08:33:06', '2016-06-25 09:42:23'),
(34, 'Savol1', '&lt;p&gt;&lt;em&gt;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;&lt;/em&gt;&lt;/p&gt;\r\n', '&lt;p&gt;&lt;em&gt;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;JavobJavob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob1&amp;nbsp;Javob&lt;/em&gt;&lt;/p&gt;\r\n', 0, 5, 1, NULL, 0, 1, 0, 1, '2016-06-25 09:32:03', '2016-06-25 09:41:38');

-- --------------------------------------------------------

--
-- Структура таблицы `rukns`
--

CREATE TABLE IF NOT EXISTS `rukns` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci,
  `text_sh` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `asosiy` tinyint(2) NOT NULL DEFAULT '0',
  `sahifa` tinyint(2) NOT NULL DEFAULT '0',
  `right` tinyint(2) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `rukns`
--

INSERT INTO `rukns` (`id`, `title`, `text`, `text_sh`, `foto`, `status`, `asosiy`, `sahifa`, `right`, `order`, `created_at`, `updated_at`) VALUES
(1, 'Davr nafasi', NULL, NULL, NULL, 1, 1, 1, 0, 0, '2016-06-09 22:11:00', '2016-06-22 11:44:39'),
(3, 'Dolzarb mavzu', NULL, NULL, NULL, 1, 1, 1, 0, 0, '2016-06-08 23:13:00', '2016-06-22 11:44:40'),
(4, 'Bugunning gapi', '&lt;p&gt;gdfgdfgdfgf&lt;/p&gt;\r\n', '&lt;p&gt;dfgdfgdf&lt;/p&gt;\r\n', 'uploads/2016-06-10/rukns/1465557966Renault-Fluence-2015.jpg', 1, 1, 1, 0, 0, '2016-06-10 11:25:15', '2016-06-22 11:44:38'),
(5, 'Aniq savolga aniq javob', '&lt;p&gt;Aniq savolga aniq javob&lt;/p&gt;\r\n', '&lt;p&gt;Aniq savolga aniq javob&lt;/p&gt;\r\n', 'uploads/2016-06-13/rukns/1465826910newspaper.jpg', 1, 1, 0, 1, 1, '2016-06-13 14:08:30', '2016-06-25 09:26:12'),
(6, 'Даромад манбаи', '&lt;p&gt;Daromad manbai&lt;/p&gt;\r\n', '&lt;p&gt;Daromad manbai&lt;/p&gt;\r\n', 'uploads/2016-06-16/rukns/1466058282detail_99df34ad544fab27197c0182499e3b17.jpg', 1, 1, 1, 0, 0, '2016-06-16 06:24:42', '2016-06-22 11:44:36');

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`id`, `user_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'name1', '2016-05-19 14:00:00', '2016-05-19 14:00:00'),
(8, 2, 'wertwertwert', '2016-05-23 00:15:32', '2016-05-23 00:15:32'),
(10, 2, 'wertwe', '2016-05-23 00:15:40', '2016-05-23 00:15:40');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `autologin` tinyint(2) NOT NULL DEFAULT '0',
  `fio` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dolz` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `education` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adres` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8_unicode_ci,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ip` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `roleid` tinyint(2) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `autologin`, `fio`, `dolz`, `education`, `adres`, `note`, `email`, `remember_token`, `ip`, `image`, `roleid`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$zyWrKa4uoydTM77a1QV/yeisDMJPGUdLy4ClrJG.SnaSzv3Lgg0RK', 1, 'Administrator', 'Administrator', 'TUIT university', 'Tashkent ul Usman nosir 26', 'Ya vsegda rad.', 'admin@mail.ru', 'r5RmsV1PZytFVXf38qx86ap1H7MVoqKQs9BB2rj6ZmFYWZKDBFUbelq8OcPS', '192.168.1.101', 'uploads/users/small/user1.png', 1, '2016-05-19 14:00:00', '2016-06-27 19:37:37'),
(2, 'retwert', '$2y$10$NVr5zXi8rcpgZl/hZzHiXualBCI.xEaJHKtPFmwkjQ1RDG.AfvBeC', 0, NULL, 'Секритар', NULL, NULL, NULL, 'wertwer@srter.rt', 'lmuqIXZJJxmGV0FgtH1KHvdjCT4eNGo32V3JxRoLCKSeG3OsEyHJfyQ4z3Pg', NULL, NULL, 0, '2016-05-22 19:05:44', '2016-05-22 19:26:21'),
(3, 'test', '$2y$10$8ob6F8yqR2g93Lzbj8wJpOUytaoqwwlkzjdL7yeVXYBsS/vCMb54O', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'iumV5j6SVc9M1gylCJTJ93sDtijYZPXTmDsg9hA1kMVor70lQXAZL6ySQkVR', '192.168.1.101', NULL, 0, '2016-06-09 13:04:22', '2016-06-09 13:05:46'),
(4, 'AAAAAA', '$2y$10$BGYCSih6I4yy7Q8ePdRoOOQ6SNMh.kC63YOUY7dwHWhYhYqQjcdny', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'kTxFWleHnBqlK15vCGE6xUoIYnd0QximWKHWE12GxImeM8z3ZIkm21SbDU4Q', '192.168.1.101', NULL, 0, '2016-06-09 13:06:22', '2016-06-09 13:08:00');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Индексы таблицы `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gallery_id` (`gallery_id`);

--
-- Индексы таблицы `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `numbers`
--
ALTER TABLE `numbers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `type` (`type`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Индексы таблицы `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `rukns`
--
ALTER TABLE `rukns`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT для таблицы `numbers`
--
ALTER TABLE `numbers`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT для таблицы `rukns`
--
ALTER TABLE `rukns`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

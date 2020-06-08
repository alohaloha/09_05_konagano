-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2020 年 6 月 08 日 13:21
-- サーバのバージョン： 10.4.11-MariaDB
-- PHP のバージョン: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gsacf_l03_05`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `pref_managers`
--

CREATE TABLE `pref_managers` (
  `id` int(8) NOT NULL,
  `pref` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manager` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yuubin` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `pref_managers`
--

INSERT INTO `pref_managers` (`id`, `pref`, `manager`, `mail`, `tel`, `yuubin`, `address`, `created_at`, `updated_at`) VALUES
(2, '佐賀県', '吉田　慎', '41_saga@jewfa.jp', 'yyy-yyyy-yyyy', 'yyyyyyy', '佐賀県佐賀市', '2020-06-08 00:00:00', '2020-06-08 00:00:00'),
(3, '鹿児島県', '住吉　一洋', '46_kagoshima@jewfa.jp', 'xxx-xxxx-xxxx', 'XXXxxxx', '鹿児島県霧島市', '2020-06-08 18:23:12', '2020-06-08 18:23:12'),
(4, '福岡県', '鎌田', '40_fukuoka@jewfa.jp', 'fff-fffff', 'FFFffff', '福岡県福岡市中央区大名', '2020-06-08 18:24:28', '2020-06-08 18:24:28'),
(5, '北海道', '豊田　大地', '01_hokkaido@jewfa.jp', 'hhh-hhhh-hhhh', 'HHH-hhhh', '北海道札幌市', '2020-06-08 20:20:16', '2020-06-08 20:20:16');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `pref_managers`
--
ALTER TABLE `pref_managers`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `pref_managers`
--
ALTER TABLE `pref_managers`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

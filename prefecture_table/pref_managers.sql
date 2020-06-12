-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2020 年 6 月 12 日 02:28
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
  `prefecture` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manager` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yuubin` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `pref_managers`
--

INSERT INTO `pref_managers` (`id`, `prefecture`, `manager`, `mail`, `tel`, `yuubin`, `address`, `password`, `created_at`, `updated_at`) VALUES
(6, '鹿児島県', '住吉　一洋', '46_kagoshima@jewfa.jp', '9876543210', '1234567', '鹿児島県霧島市', '222222', '2020-06-11 09:51:11', '2020-06-11 22:15:50'),
(7, '東京都', '代表者', '13_tokyo@jewfa.jp', '0300001111', '1111111', '東京都足立区', 'zzzzzz', '2020-06-11 20:28:01', '2020-06-11 20:28:01'),
(11, '北海道', '松山　千春', '01_hokkaido@jewfa.jp', 'yyy-yyyy-aaaa', 'zzzzzzz', '北海道札幌市', 'hhhhhh', '2020-06-12 02:06:17', '2020-06-12 02:09:27');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `pref_managers`
--
ALTER TABLE `pref_managers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pref` (`prefecture`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `pref_managers`
--
ALTER TABLE `pref_managers`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

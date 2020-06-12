-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2020 年 6 月 12 日 02:27
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
-- テーブルの構造 `M_prefectures`
--

CREATE TABLE `M_prefectures` (
  `code` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prefecture` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kana` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roma` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `initial_pw` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `M_prefectures`
--

INSERT INTO `M_prefectures` (`code`, `prefecture`, `kana`, `roma`, `mail`, `initial_pw`) VALUES
('01', '北海道', 'ほっかいどう', 'hokkaido', '01_hokkaido@jewfa.jp', '5WGJ3LWt'),
('02', '青森県', 'あおもり', 'aomori', '02_aomori@jewfa.jp', 'b9KhJ8fX'),
('03', '岩手県', 'いわて', 'iwate', '03_iwate@jewfa.jp', '7D6niOP2'),
('04', '宮城県', 'みやぎ', 'miyagi', '04_miyagi@jewfa.jp', 'Vd5YXl1b'),
('05', '秋田県', 'あきた', 'akita', '05_akita@jewfa.jp', 'FUGvnJ8m'),
('06', '山形県', 'やまがた', 'yamagata', '06_yamagata@jewfa.jp', 'Vn2Djxfs'),
('07', '福島県', 'ふくしま', 'fukushima', '07_fukushima@jewfa.jp', 'AUorwSmu'),
('08', '茨城県', 'いばらき', 'ibaraki', '08_ibaraki@jewfa.jp', 'fkB7IFJR'),
('09', '栃木県', 'とちぎ', 'tochigi', '09_tochigi@jewfa.jp', '6hX3TskN'),
('10', '群馬県', 'ぐんま', 'gumma', '10_gumma@jewfa.jp', 'iJjy6qRp'),
('11', '埼玉県', 'さいたま', 'saitama', '11_saitama@jewfa.jp', 'I4VmK54r'),
('12', '千葉県', 'ちば', 'chiba', '12_chiba@jewfa.jp', 'JtxNZEex'),
('13', '東京都', 'とうきょう', 'tokyo', '13_tokyo@jewfa.jp', 'uuprMIjK'),
('14', '神奈川県', 'かながわ', 'kanagawa', '14_kanagawa@jewfa.jp', 'hPiNsVqE'),
('15', '新潟県', 'にいがた', 'niigata', '15_niigata@jewfa.jp', 'B22GUDJ1'),
('16', '富山県', 'とやま', 'toyama', '16_toyama@jewfa.jp', 'zoiOAAfz'),
('17', '石川県', 'いしかわ', 'ishikawa', '17_ishikawa@jewfa.jp', 'fc6Nf9rc'),
('18', '福井県', 'ふくい', 'fukui', '18_fukui@jewfa.jp', '1IsxJKmY'),
('19', '山梨県', 'やまなし', 'yamanashi', '19_yamanashi@jewfa.jp', 'e4PssBSm'),
('20', '長野県', 'ながの', 'nagano', '20_nagano@jewfa.jp', 'Pa2xhXpQ'),
('21', '岐阜県', 'ぎふ', 'gifu', '21_gifu@jewfa.jp', 'xiOP6S1O'),
('22', '静岡県', 'しずおか', 'shizuoka', '22_shizuoka@jewfa.jp', 'Xuc8upRv'),
('23', '愛知県', 'あいち', 'aichi', '23_aichi@jewfa.jp', 'uwi4oprA'),
('24', '三重県', 'みえ', 'mie', '24_mie@jewfa.jp', 'RMjTLksu'),
('25', '滋賀県', 'しが', 'shiga', '25_shiga@jewfa.jp', 'skjB9Om5'),
('26', '京都府', 'きょうと', 'kyoto', '26_kyoto@jewfa.jp', 'AOA9AcDA'),
('27', '大阪府', 'おおさか', 'osaka', '27_osaka@jewfa.jp', 'T2DfGTiR'),
('28', '兵庫県', 'ひょうご', 'hyogo', '28_hyogo@jewfa.jp', 'bW26uS79'),
('29', '奈良県', 'なら', 'nara', '29_nara@jewfa.jp', 'qd2SQd00'),
('30', '和歌山県', 'わかやま', 'wakayama', '30_wakayama@jewfa.jp', '4ipYvL5g'),
('31', '鳥取県', 'とっとり', 'tottori', '31_tottori@jewfa.jp', '0Y3JtbIv'),
('32', '島根県', 'しまね', 'shimane', '32_shimane@jewfa.jp', 'uuFeIBxA'),
('33', '岡山県', 'おかやま', 'okayama', '33_okayama@jewfa.jp', 'Am8UYyzz'),
('34', '広島県', 'ひろしま', 'hiroshima', '34_hiroshima@jewfa.jp', 'cHRyz21n'),
('35', '山口県', 'やまぐち', 'yamaguchi', '35_yamaguchi@jewfa.jp', 'y2ePEIYs'),
('36', '徳島県', 'とくしま', 'tokushima', '36_tokushima@jewfa.jp', 'kmTnbX1F'),
('37', '香川県', 'かがわ', 'kagawa', '37_kagawa@jewfa.jp', '1wlf6PQZ'),
('38', '愛媛県', 'えひめ', 'ehime', '38_ehime@jewfa.jp', 'plKdByHn'),
('39', '高知県', 'こうち', 'kochi', '39_kochi@jewfa.jp', '4fF0z6ZC'),
('40', '福岡県', 'ふくおか', 'fukuoka', '40_fukuoka@jewfa.jp', '7vscm4mR'),
('41', '佐賀県', 'さが', 'saga', '41_saga@jewfa.jp', 'VrDNQI7Y'),
('42', '長崎県', 'ながさき', 'nagasaki', '42_nagasaki@jewfa.jp', 'nWJzthhq'),
('43', '熊本県', 'くまもと', 'kumamoto', '43_kumamoto@jewfa.jp', 'SCwMtQNF'),
('44', '大分県', 'おおいた', 'oita', '44_oita@jewfa.jp', 'UX558B4H'),
('45', '宮崎県', 'みやざき', 'miyazaki', '45_miyazaki@jewfa.jp', 'w9P6g98X'),
('46', '鹿児島県', 'かごしま', 'kagoshima', '46_kagoshima@jewfa.jp', 'NNKYB09e'),
('47', '沖縄県', 'おきなわ', 'okinawa', '47_okinawa@jewfa.jp', '65s1xjrX');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

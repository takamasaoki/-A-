-- phpMyAdmin SQL Dump
-- version 4.0.1
-- http://www.phpmyadmin.net
--
-- ホスト: 175.184.33.54
-- 生成日時: 2016 年 6 月 27 日 20:16
-- サーバのバージョン: 5.5.18-log
-- PHP のバージョン: 5.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- データベース: `cv45224_ag4`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
  `name` varchar(50) DEFAULT NULL,
  `team_id` int(11) NOT NULL,
  PRIMARY KEY (`team_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `teams`
--

INSERT INTO `teams` (`name`, `team_id`) VALUES
('べガルダ仙台', 1),
('鹿島アントラーズ', 2),
('柏レイソル', 3),
('浦和レッドダイヤモンズ', 4),
('大宮アルディージャ', 5),
('FC東京', 6),
('川崎フロンターレ', 7),
('横浜F・マリノス', 8),
('湘南ベルマーレ', 9),
('ヴァンフォーレ甲府', 10),
('アルビレックス新潟', 11),
('ジュビロ磐田', 12),
('名古屋グランパス', 13),
('ガンバ大阪', 14),
('ヴィッセル神戸', 15),
('サンフレッチェ広島', 16),
('アビスパ福岡', 17),
('サガン鳥栖', 18),
('コンサドーレ札幌', 19),
('モンテディオ山形', 20),
('水戸ホーリーホック', 21),
('ザスパクサツ群馬', 22),
('ジェフユナイテッド千葉', 23),
('東京ヴェルディ', 24),
('FC町田ゼルビア', 25),
('横浜FC', 26),
('松本山雅FC', 27),
('ツエーゲン金沢', 28),
('FC岐阜', 29),
('清水エスパルス', 30),
('京都サンガF.C.', 31),
('セレッソ大阪', 32),
('ファジアーノ岡山', 33),
('レノファ山口', 34),
('徳島ヴォルティス', 35),
('カマタマーレ讃岐', 36),
('愛媛FC', 37),
('ギラヴァンツ北九州', 38),
('V・ファーレン長崎', 39),
('ロアッソ熊本', 40);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

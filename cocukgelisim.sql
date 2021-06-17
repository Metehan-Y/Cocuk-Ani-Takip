

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `cocukgelisim`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cocuklar`
--

DROP TABLE IF EXISTS `cocuklar`;
CREATE TABLE IF NOT EXISTS `cocuklar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adsoyad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `dtarihi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `cinsiyet` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `resim` longtext CHARACTER SET utf8,
  `bio` longtext COLLATE utf8_turkish_ci,
  `ebeveynid` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `cocuklar`
--

INSERT INTO `cocuklar` (`id`, `adsoyad`, `dtarihi`, `cinsiyet`, `resim`, `bio`, `ebeveynid`) VALUES
(19, 'Toki Ton', '2016-01-22', 'Kadın', 'toki.jpg', 'Toki 5 yaşında sarışın agrasif içnine kapanık saldırgan bir çocuk. Sarışın renkli gözlüdür. Toki 5 yaşında sarışın agrasif içnine kapanık saldırgan bir çocuk. Sarışın renkli gözlüdür. Toki 5 yaşında sarışın agrasif içnine kapanık saldırgan bir çocuk. Sarışın renkli gözlüdür. Toki 5 yaşında sarışın agrasif içnine kapanık saldırgan bir çocuk. Sarışın renkli gözlüdür. Toki 5 yaşında sarışın agrasif içnine kapanık saldırgan bir çocuk. Sarışın renkli gözlüdür.', '5');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ebeveynler`
--

DROP TABLE IF EXISTS `ebeveynler`;
CREATE TABLE IF NOT EXISTS `ebeveynler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adsoyad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `cinsiyet` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `dtarihi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `es_adsoyad` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `es_dtarihi` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `es_cinsiyet` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ebeveynler`
--

INSERT INTO `ebeveynler` (`id`, `adsoyad`, `mail`, `sifre`, `cinsiyet`, `dtarihi`, `es_adsoyad`, `es_dtarihi`, `es_cinsiyet`) VALUES
(6, 'Mehmet Türk', 'mturk@gmail.com', '123', 'Erkek', '1980-01-01', 'Gül Türk', '1982-01-01', 'Kadın'),
(5, 'Tomy Ton', 'tmyton@gmail.com', 'tomtom123', 'Erkek', '1990-01-05', 'Tosina Ton', '1995-01-04', 'Kadın');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `galeri`
--

DROP TABLE IF EXISTS `galeri`;
CREATE TABLE IF NOT EXISTS `galeri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cocukid` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `cocukadi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` longtext COLLATE utf8_turkish_ci,
  `tarih` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `galeri`
--

INSERT INTO `galeri` (`id`, `cocukid`, `cocukadi`, `resim`, `aciklama`, `tarih`) VALUES
(11, '19', 'Toki Ton', 'toki3.jpg', 'Toki bu gün yine yemek yemedi...', '2020-11-15'),
(12, '19', 'Toki Ton', 'toki4.jfif', 'Toki bu gün yine agrasiffff :(', '2020-12-15');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `olaylar`
--

DROP TABLE IF EXISTS `olaylar`;
CREATE TABLE IF NOT EXISTS `olaylar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cocukadi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `olaytarihi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `olaybasligi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `olayaciklamasi` longtext COLLATE utf8_turkish_ci,
  `olayresim` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `olaylar`
--

INSERT INTO `olaylar` (`id`, `cocukadi`, `olaytarihi`, `olaybasligi`, `olayaciklamasi`, `olayresim`) VALUES
(8, 'Toki Ton', '2021-01-02', 'Anı Başlığı', 'Anı Detayları Burada Olacak. Anı Detayları Burada Olacak. Anı Detayları Burada Olacak. ', 'toki5.jpg'),
(7, 'Toki Ton', '2021-01-01', 'Yılbaşı Kutlaması', 'Toki anası Tosi ve babası Tomy ile birlikte basketbol oynadı. Her zamanki tavrını takınan toki yine oyun bozanlık yaptı. Ve oyuna katılım sağlamadı. Anası ve babası bu duruma üzüldü.', 'toki2.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

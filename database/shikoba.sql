-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 12 Oca 2022, 01:48:43
-- Sunucu sürümü: 10.4.21-MariaDB
-- PHP Sürümü: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `shikoba`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) NOT NULL,
  `user_name` varchar(12) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(12) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admins`
--

INSERT INTO `admins` (`id`, `user_name`, `password`) VALUES
(1, 'admin', '123456');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cart`
--

CREATE TABLE `cart` (
  `id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `pname` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `price` double NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `category`
--

CREATE TABLE `category` (
  `categoryid` int(11) NOT NULL,
  `catname` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `category`
--

INSERT INTO `category` (`categoryid`, `catname`) VALUES
(1, 'Kahveler'),
(2, 'Kahve-Ekipmanları'),
(3, 'Şuruplar');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `order_detail`
--

CREATE TABLE `order_detail` (
  `orderid` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `quantity` varchar(10) DEFAULT NULL,
  `total` varchar(255) NOT NULL,
  `user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `adres` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `tel` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `date_order` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `categoryid` int(1) NOT NULL,
  `pname` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `pdescription` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `product`
--

INSERT INTO `product` (`id`, `categoryid`, `pname`, `pdescription`, `image`, `price`) VALUES
(1, 1, 'Filtre Kahve (250gr)', 'Shikoba ailesi olarak misafirlerimize yılın her dönemi aynı lezzeti sunmayı amaçlıyoruz. Filtre kahvelerimizi genellikle tam yıkanmış çekirdeklerden seçiyoruz. Çekirdeğini ve kavurma yöntemini standardize ediyoruz. Bu işlemlerin sonunda kahvemizin sütlü v', '../Shikoba/images/urunler/filtrekahve.jpg', 100),
(2, 1, 'Brazil Mogiana Fine (250gr)', 'Brezilya dünya kahve tüketiminin yaklaşık %60’ını karşılar. Brezilya kahve üreticilerinin kolektif bir üretim anlayışları vardır. Her sınıf kalitede çekirdeği bulmanız mümkündür. Doğal işlem ile kahve severlerle buluşturulan çekirdekler zengin aromatik ya', '../Shikoba/images/urunler/brazil.jpg', 100),
(3, 1, 'Ethiopia (250gr)', 'Kahvenin doğduğu ülke olan Ethiopia kökenli bir kahve ile karşımızda. Ethiopia kahvesi hiçbir zaman kömür benzeri tada sahip olmayan, çok yoğun gövdeli oluşu dolayısıyla ekstra tatlandırmaya yada farklı lezzetler eklemeye gerek olmayan bir kahve. Bitter ç', '../Shikoba/images/urunler/ethiopia.jpg', 140),
(4, 1, 'Guatemala (250gr)', 'Yumuşak içimli ve zarif bir kahve olan Guatemala Antigua, aynı zamanda tadındaki baharat ve kakao çağrışımları ile de dengelenir.', '../Shikoba/images/urunler/guatemala.jpg', 150),
(37, 1, 'skş', NULL, '../../Shikoba/images/urunler/31.jpg', 25),
(39, 1, 'sd', NULL, '../../Shikoba/images/urunler/31.jpg', 15),
(40, 1, 'sd', NULL, '../../Shikoba/images/urunler/31.jpg', 15),
(41, 2, 'hfgh', NULL, '../../Shikoba/images/urunler/Adsız tasarım.png', 0),
(42, 3, 'asdad', NULL, '../../Shikoba/images/urunler/31.jpg', 255),
(44, 2, 'deneme', NULL, '../../Shikoba/images/urunler/Adsız tasarım.png', 15),
(45, 2, 'deneme', NULL, '../../Shikoba/images/urunler/Adsız tasarım.png', 15),
(46, 2, 'deneme', NULL, '../../Shikoba/images/urunler/Adsız tasarım.png', 15),
(47, 2, 'deneme', NULL, '../../Shikoba/images/urunler/Adsız tasarım.png', 15),
(50, 3, 'asdad', NULL, '../../Shikoba/images/urunler/31.jpg', 200),
(52, 3, 'buğra', 'oruspu buğra', '../../Shikoba/images/urunler/cards3.jpeg', 100);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_mail` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `user_name` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `user_mail`, `user_name`, `password`, `date`) VALUES
(1, 'alikrdnz33@gmail.com', 'Ali Karadeniz', '123456', '2021-12-26 17:00:44');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Tablo için indeksler `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`orderid`);

--
-- Tablo için indeksler `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date` (`date`),
  ADD KEY `user_name` (`user_name`),
  ADD KEY `user_mail` (`user_mail`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Tablo için AUTO_INCREMENT değeri `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- Tablo için AUTO_INCREMENT değeri `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

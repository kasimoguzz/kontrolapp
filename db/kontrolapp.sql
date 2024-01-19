-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 19 Oca 2024, 07:49:19
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kontrolapp`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tel` varchar(11) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `depertman` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `username`, `email`, `password`, `tel`, `user_type`, `depertman`) VALUES
(3, 'admin123', 'admin@gmail.com', '$2y$10$ipRHuvxcgWHwtl6UG8MCUebYPUv1MimIsxTzkGUrxN3GiMifbuMcq', '1234', 'admin', 'IT'),
(13, 'ahmet123', 'ahmet@gmail.com', '$2y$10$0lpFf.m6NddxfnyIG7R2T.SpNyji8vBuIM7KQ/p04jXt3.lfhmsdO', '05443332222', '', 'IT'),
(14, 'ali123', 'ali@gmail.com', '$2y$10$qFzSQ8O9WuUq.EwApNnJcejW5ahxXE9rOiExq4MEwruzXQp72rkzO', '04443332211', '', 'Grafik Tasarım');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesai_saatleri`
--

CREATE TABLE `mesai_saatleri` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `giris_saati` datetime DEFAULT NULL,
  `cikis_saati` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `mesai_saatleri`
--

INSERT INTO `mesai_saatleri` (`id`, `user_id`, `giris_saati`, `cikis_saati`) VALUES
(2, NULL, '2024-01-19 01:20:35', NULL),
(3, NULL, '2024-01-19 01:38:35', '2024-01-19 02:05:13'),
(10, NULL, '2024-01-19 01:00:19', '2024-01-19 01:00:25'),
(11, NULL, '2024-01-19 02:19:25', NULL),
(12, NULL, '2024-01-19 02:20:57', '2024-01-19 02:21:46'),
(13, NULL, '2024-01-19 09:06:52', '2024-01-19 09:30:06'),
(14, NULL, '2024-01-19 09:33:39', NULL);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `mesai_saatleri`
--
ALTER TABLE `mesai_saatleri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `mesai_saatleri`
--
ALTER TABLE `mesai_saatleri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `mesai_saatleri`
--
ALTER TABLE `mesai_saatleri`
  ADD CONSTRAINT `mesai_saatleri_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `kullanicilar` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

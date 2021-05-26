-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 08 Şub 2021, 15:22:04
-- Sunucu sürümü: 10.4.14-MariaDB
-- PHP Sürümü: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `final`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `post`
--

CREATE TABLE `post` (
  `idUser` int(11) NOT NULL,
  `post` longtext COLLATE utf8_turkish_ci NOT NULL,
  `postId` int(11) NOT NULL,
  `time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `post`
--

INSERT INTO `post` (`idUser`, `post`, `postId`, `time`) VALUES
(2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus facilisis, nunc non aliquet lobortis, justo nisl facilisis odio, sed varius odio sem lobortis dui. Donec ut porttitor metus, vel lobort', 14, '2021-02-08'),
(2, 'Ut bibendum vitae lorem at rutrum. Phasellus mollis maximus tincidunt. Vestibulum volutpat posuere faucibus. Vestibulum hendrerit, arcu at ullamcorper tempor, urna elit eleifend nisi, nec tincidunt fe', 15, '2021-02-08'),
(2, 'Aliquam posuere eleifend est, sit amet viverra velit interdum euismod. Etiam pulvinar molestie sapien. Etiam commodo justo dolor, id cursus nulla lobortis ut. Ut justo purus, suscipit non lobortis et,', 16, '2021-02-08'),
(2, 'Aliquam eget lorem pretium felis congue porta quis quis massa. Aliquam quis felis massa. Quisque sit amet vehicula justo. Curabitur lobortis lorem eu lectus facilisis, quis euismod dolor cursus. Morbi', 17, '2021-02-08'),
(2, 'Quisque imperdiet fermentum consequat. Nunc a pharetra arcu. Etiam vel arcu in nunc finibus egestas vitae quis nibh. Vivamus at interdum tellus. Proin metus dui, consectetur in diam et, luctus commodo', 18, '2021-02-08'),
(3, 'Nunc pharetra elementum turpis non auctor. Donec lobortis, lorem id accumsan interdum, nulla est malesuada odio, et varius leo nulla nec lorem. Vivamus dignissim massa in eros lobortis tempor. Duis et', 19, '2021-02-08'),
(3, 'Vivamus sit amet urna lacinia, condimentum leo vel, mattis elit. Pellentesque accumsan magna id massa sodales, et blandit diam fermentum. Cras nulla nisi, ultrices at mollis dictum, ultricies in elit.', 20, '2021-02-08'),
(3, 'Nunc porttitor eros at blandit mattis. Nam efficitur risus sed lectus ultricies, vel lacinia diam suscipit. Suspendisse potenti. Phasellus at ultricies ligula. Donec tellus libero, molestie non lorem ', 21, '2021-02-08'),
(3, 'Nam bibendum eleifend risus vitae porta. Fusce at arcu hendrerit, porttitor ex eget, ultricies sem. Duis metus lectus, blandit ut magna eu, dignissim facilisis ex. Vestibulum ante ipsum primis in fauc', 22, '2021-02-08'),
(3, 'Ut non quam orci. Phasellus vitae interdum turpis. Quisque nunc magna, semper in ipsum a, fermentum tempus justo. Quisque aliquam felis in rutrum pulvinar. Nullam maximus quis nunc et malesuada. Donec', 23, '2021-02-08'),
(3, 'Ut non quam orci. Phasellus vitae interdum turpis. Quisque nunc magna, semper in ipsum a, fermentum tempus justo. Quisque aliquam felis in rutrum pulvinar. Nullam maximus quis nunc et malesuada. Donec scelerisque volutpat odio ut posuere. Maecenas bibendum euismod ante vel scelerisque. Morbi porttitor ex velit, quis condimentum ligula varius lobortis. Pellentesque ornare ac enim nec fringilla. Donec in ante mattis, vestibulum dui vitae, aliquam est. Phasellus scelerisque aliquam risus, nec condimentum nulla eleifend sed. Suspendisse laoreet nibh non tellus dignissim, iaculis consectetur tellus tincidunt. Integer sed mi risus. Vivamus consequat, erat ut tincidunt accumsan, tellus neque interdum ipsum, et cursus nisi massa nec enim. Fusce tempus faucibus faucibus.', 24, '2021-02-08'),
(20, 'Merhaba günlük , bu gün 5 bardak su içtim', 25, '2021-02-08'),
(20, 'bu gün çok eğlenceli bir günde', 26, '2021-02-08'),
(3, 'Merhaba Dünya', 27, '2021-02-08');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `userUsername` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `userPassword` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`userUsername`, `userPassword`, `userId`) VALUES
('admin', '123456', 2),
('tolga', '326528', 3),
('ahmet', '111111', 20);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`postId`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `post`
--
ALTER TABLE `post`
  MODIFY `postId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

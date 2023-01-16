-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 21 Ara 2022, 20:56:56
-- Sunucu sürümü: 10.1.37-MariaDB
-- PHP Sürümü: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `PAH`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Address`
--

CREATE TABLE `Address` (
  `addressid` int(11) NOT NULL,
  `Address_name` varchar(22) NOT NULL,
  `Address_field` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `Address`
--

INSERT INTO `Address` (`addressid`, `Address_name`, `Address_field`) VALUES
(1, 'Home', 'Atasehir Barbaros Mah. 2D - 45'),
(2, 'Campus', 'Sabanci Universitesi Orta Mah'),
(3, 'Work', 'Kadikoy Acelya Sokak B4 - 10'),
(4, 'Home', 'Besiktas Orhan Sokak 4C-10'),
(5, 'Home 2', 'Tuzla Yenisehir Mahallesi B13-20'),
(6, 'Work', 'Tuzla Orta Mah. Amazon '),
(7, 'Home', 'Kozyatagi Serap Sokak 5A-29'),
(8, 'Campus', 'Sabanci Universitesi Orta Mah. ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `Passwordname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`Passwordname`, `username`, `ID`) VALUES
('admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Belongs`
--

CREATE TABLE `Belongs` (
  `customer_id` int(11) NOT NULL,
  `Address_id` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `Belongs`
--

INSERT INTO `Belongs` (`customer_id`, `Address_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 4),
(2, 5),
(3, 6),
(3, 7),
(3, 8);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Category`
--

CREATE TABLE `Category` (
  `catid` int(11) NOT NULL,
  `catname` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `Category`
--

INSERT INTO `Category` (`catid`, `catname`) VALUES
(1, 'Burger'),
(2, 'Pizza'),
(3, 'Byproducts');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Courrier`
--

CREATE TABLE `Courrier` (
  `coid` int(11) NOT NULL,
  `company` varchar(22) NOT NULL,
  `eta` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `Courrier`
--

INSERT INTO `Courrier` (`coid`, `company`, `eta`) VALUES
(1, 'Ahmet Cakar', '2022-12-15'),
(2, 'Sinan Engin', '2022-12-15'),
(3, 'Ali Koc', '2022-12-16');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Customer`
--

CREATE TABLE `Customer` (
  `customer_id` int(11) NOT NULL,
  `Customer_name` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `Customer`
--

INSERT INTO `Customer` (`customer_id`, `Customer_name`) VALUES
(1, 'Beril Gurer'),
(2, 'Goktug Yilmaz'),
(3, 'Egemen Gurel'),
(4, 'Lara Unlu');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Ingredients`
--

CREATE TABLE `Ingredients` (
  `iid` int(11) NOT NULL,
  `iname` varchar(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `Ingredients`
--

INSERT INTO `Ingredients` (`iid`, `iname`) VALUES
(1, 'tomato'),
(2, 'onion'),
(3, 'mozzarella'),
(4, 'mushroom'),
(5, 'tomato ketchup'),
(6, 'green pepper'),
(7, 'Sausage'),
(8, 'Bacon'),
(9, 'Chicken'),
(10, 'BBQ Sauce'),
(11, 'pineapple'),
(12, 'olives'),
(13, 'butter'),
(14, 'Chocolate '),
(15, 'flour'),
(16, 'egg'),
(17, 'Cocoa Powder'),
(18, 'Sugar'),
(19, 'mayonnaise'),
(20, 'Meat'),
(21, 'Lettuce');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Needs`
--

CREATE TABLE `Needs` (
  `pid` int(11) NOT NULL,
  `iid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `Needs`
--

INSERT INTO `Needs` (`pid`, `iid`) VALUES
(1, 1),
(1, 2),
(1, 4),
(13, 13),
(13, 14);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Orders`
--

CREATE TABLE `Orders` (
  `purid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `cuid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `Orders`
--

INSERT INTO `Orders` (`purid`, `pid`, `cuid`) VALUES
(1, 4, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Product_ctgry`
--

CREATE TABLE `Product_ctgry` (
  `pid` int(11) NOT NULL,
  `pname` varchar(22) NOT NULL,
  `rating` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `catid` int(11) NOT NULL,
  `imagename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `Product_ctgry`
--

INSERT INTO `Product_ctgry` (`pid`, `pname`, `rating`, `price`, `description`, `catid`, `imagename`) VALUES
(1, 'Cheeseburger', 4, 60, 'tangy pickle, chopped ', 1, 'Cheeseburger.png'),
(2, 'Mushroom Burger', 4, 68, 'tangy pickle, chopped ', 1, 'Mushroom Burger.png'),
(3, 'Chili Cheese Burger', 5, 70, 'tangy pickle, chopped ', 1, 'Chili Cheese Burger.png'),
(4, 'Chicken Tender Burger', 5, 58, 'tangy pickle, chopped ', 1, 'Chicken Tender Burger.png'),
(5, 'Western BBQ Burger', 5, 75, 'tangy pickle, chopped ', 1, 'Western BBQ Burger.png'),
(6, 'Vej Burger', 4, 50, 'tangy pickle, chopped ', 1, 'Vej Burger.png'),
(7, 'Slices-N-Stick Pizza', 5, 70, 'Four slices of Peppero', 2, 'Slices-N-Stick Pizza.png'),
(8, 'Meat Treat Pizza', 5, 76, 'Pepperoni, Italian Sau', 2, 'Meat Treat Pizza.png'),
(9, 'Pepperoni Pizza', 5, 72, 'pepperoni and cheese s', 2, 'Pepperoni Pizza.png'),
(10, 'Hawaii Pizza', 4, 68, 'Large round pizza with', 2, 'Hawaii Pizza.png'),
(11, 'Veggie Pizza', 5, 66, 'Large round pizza with', 2, 'Veggie Pizza.png'),
(12, 'Italian Sausage Pizza', 5, 85, 'Large round with Itali', 2, 'Italian Sausage Pizza.png'),
(13, 'Cookie Doug Brownie', 5, 25, 'Brownie topped with Co', 3, 'Cookie Doug Brownie.png'),
(14, 'BBQ Chicken Wings', 5, 45, 'Oven roasted wings wit', 3, 'BBQ Chicken Wings.png'),
(15, 'Garlic Parmesan Chicke', 5, 47, 'Oven roasted wings wit', 3, 'Garlic Parmesan Chicke.png'),
(16, 'Buffalo Ranch', 5, 5, 'Flavorful Buffalo ranc', 3, 'Buffalo Ranch.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `SentWith`
--

CREATE TABLE `SentWith` (
  `product_id` int(11) NOT NULL,
  `courrier_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `SentWith`
--

INSERT INTO `SentWith` (`product_id`, `courrier_id`) VALUES
(15, 1),
(13, 2),
(8, 3);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `Address`
--
ALTER TABLE `Address`
  ADD PRIMARY KEY (`addressid`);

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `Belongs`
--
ALTER TABLE `Belongs`
  ADD KEY `Address_id` (`Address_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Tablo için indeksler `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`catid`);

--
-- Tablo için indeksler `Courrier`
--
ALTER TABLE `Courrier`
  ADD PRIMARY KEY (`coid`);

--
-- Tablo için indeksler `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Tablo için indeksler `Ingredients`
--
ALTER TABLE `Ingredients`
  ADD PRIMARY KEY (`iid`);

--
-- Tablo için indeksler `Needs`
--
ALTER TABLE `Needs`
  ADD KEY `pid` (`pid`),
  ADD KEY `iid` (`iid`);

--
-- Tablo için indeksler `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`purid`),
  ADD KEY `pid` (`pid`),
  ADD KEY `cuid` (`cuid`);

--
-- Tablo için indeksler `Product_ctgry`
--
ALTER TABLE `Product_ctgry`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `catid` (`catid`);

--
-- Tablo için indeksler `SentWith`
--
ALTER TABLE `SentWith`
  ADD KEY `courrier_id` (`courrier_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `Address`
--
ALTER TABLE `Address`
  MODIFY `addressid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `Customer`
--
ALTER TABLE `Customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `Ingredients`
--
ALTER TABLE `Ingredients`
  MODIFY `iid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Tablo için AUTO_INCREMENT değeri `Orders`
--
ALTER TABLE `Orders`
  MODIFY `purid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `Belongs`
--
ALTER TABLE `Belongs`
  ADD CONSTRAINT `belongs_ibfk_2` FOREIGN KEY (`Address_id`) REFERENCES `Address` (`addressid`),
  ADD CONSTRAINT `belongs_ibfk_3` FOREIGN KEY (`customer_id`) REFERENCES `Customer` (`customer_id`);

--
-- Tablo kısıtlamaları `Needs`
--
ALTER TABLE `Needs`
  ADD CONSTRAINT `needs_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `Product_ctgry` (`pid`),
  ADD CONSTRAINT `needs_ibfk_2` FOREIGN KEY (`iid`) REFERENCES `Ingredients` (`iid`);

--
-- Tablo kısıtlamaları `Orders`
--
ALTER TABLE `Orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `Product_ctgry` (`pid`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`cuid`) REFERENCES `Customer` (`customer_id`);

--
-- Tablo kısıtlamaları `Product_ctgry`
--
ALTER TABLE `Product_ctgry`
  ADD CONSTRAINT `product_ctgry_ibfk_1` FOREIGN KEY (`catid`) REFERENCES `Category` (`catid`);

--
-- Tablo kısıtlamaları `SentWith`
--
ALTER TABLE `SentWith`
  ADD CONSTRAINT `sentwith_ibfk_1` FOREIGN KEY (`courrier_id`) REFERENCES `Courrier` (`coid`),
  ADD CONSTRAINT `sentwith_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `Product_ctgry` (`pid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

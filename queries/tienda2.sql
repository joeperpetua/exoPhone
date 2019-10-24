-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2019 at 12:37 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tienda2`
--

-- --------------------------------------------------------

--
-- Table structure for table `batteries`
--

CREATE TABLE `batteries` (
  `id_battery` int(11) NOT NULL,
  `battery_type` text COLLATE utf8_spanish_ci NOT NULL,
  `battery_capacity` text COLLATE utf8_spanish_ci NOT NULL,
  `battery_qc` text COLLATE utf8_spanish_ci NOT NULL,
  `battery_wc` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `batteries`
--

INSERT INTO `batteries` (`id_battery`, `battery_type`, `battery_capacity`, `battery_qc`, `battery_wc`) VALUES
(1, 'Li-Ion', '3400', 'Si', 'Si'),
(2, 'Li-Ion', '3500', 'Si', 'Si'),
(3, 'Li-Po', '4000', 'Si', 'No'),
(4, 'Li-Ion', '2658', 'Si', 'Si'),
(5, 'Li-Po', '3500', 'No', 'No'),
(6, 'Li-Po', '4000', 'Si', 'No'),
(7, 'Li-Ion', '3110', 'Si', 'Si'),
(8, 'Li-Po', '4000', 'Si', 'No'),
(9, 'Li-Po', '2915', 'Si', 'Si');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_dispositives` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `cart_cant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_cart`, `id_product`, `id_dispositives`, `id_user`, `cart_cant`) VALUES
(1, 2, 2, 1, 1),
(2, 3, 3, 1, 1),
(3, 6, 6, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_cat` int(11) NOT NULL,
  `cat` text COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_cat`, `cat`) VALUES
(1, 'Trabajo de oficina'),
(2, 'Dibujo'),
(3, 'Redes sociales'),
(4, 'Trabajo de oficina'),
(5, 'Necesidades basicas'),
(6, 'Redes sociales'),
(7, 'Trabajo de oficina'),
(8, 'Gaming'),
(9, 'Trabajo de oficina');

-- --------------------------------------------------------

--
-- Table structure for table `connectivity`
--

CREATE TABLE `connectivity` (
  `id_connectivity` int(11) NOT NULL,
  `sim_type` text COLLATE utf8_spanish_ci NOT NULL,
  `usb_type` text COLLATE utf8_spanish_ci NOT NULL,
  `has_nfc` text COLLATE utf8_spanish_ci NOT NULL,
  `has_irc` text COLLATE utf8_spanish_ci NOT NULL,
  `has_lte` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `connectivity`
--

INSERT INTO `connectivity` (`id_connectivity`, `sim_type`, `usb_type`, `has_nfc`, `has_irc`, `has_lte`) VALUES
(1, 'Nano SIM', 'Tipo C', 'Si', 'No', 'Si'),
(2, 'Nano SIM', 'Tipo C', 'SI', 'No', 'Si'),
(3, 'Nano SIM (dual)', 'Tipo C', 'No', 'Si', 'Si'),
(4, 'Nano SIM / eSIM', 'Lighting', 'No', 'No', 'Si'),
(5, 'nanoSIM', 'microUSB', 'No', 'No', 'Si'),
(6, 'nanoSIM', 'USB C', 'No', 'No', 'Si'),
(7, 'nanoSIM', 'Lighting', 'Si', 'No', 'Si'),
(8, 'nanoSIM', 'Tipo C', 'Si', 'No', 'Si'),
(9, 'nanoSIM', 'Tipo C', 'Si', 'No', 'Si');

-- --------------------------------------------------------

--
-- Table structure for table `dispositives`
--

CREATE TABLE `dispositives` (
  `id_dispositives` int(11) NOT NULL,
  `disp_brand` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `disp_model` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `disp_code` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `disp_so` text COLLATE utf8_spanish_ci NOT NULL,
  `disp_so_version` text COLLATE utf8_spanish_ci NOT NULL,
  `disp_year` text COLLATE utf8_spanish_ci NOT NULL,
  `disp_color` text COLLATE utf8_spanish_ci NOT NULL,
  `disp_pic` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `dispositives`
--

INSERT INTO `dispositives` (`id_dispositives`, `disp_brand`, `disp_model`, `disp_code`, `disp_so`, `disp_so_version`, `disp_year`, `disp_color`, `disp_pic`) VALUES
(1, 'Samsung', 'S10', 'SM-G973F', 'Android', '9.0', '2019', 'Negro', 'imagenes/productos/sam_s10.jpg'),
(2, 'Samsung', 'Galaxy Note 10', 'SM-N970F', 'Android', '9.0', '2019', 'Negro', 'imagenes/productos/sam_note10.jpg'),
(3, 'Xiaomi', 'Redmi Note 7', 'M1901F7G', 'Android', '9.0', '2019', 'Negro', 'imagenes/productos/Xiaomi-Redmi-Note-7-Black.png'),
(4, 'Apple', 'iPhone XS', 'A2097', 'iOS', '12', '2018', 'Gris', 'imagenes/productos/iphone-xs-space-select-2018.png'),
(5, 'LG', 'K50', 'LMX520BMW', 'Android', '9.0', '2019', 'Negro', 'imagenes/productos/lg-k50-.jpg'),
(6, 'Honor', '9X Pro', 'HLK-AL10', 'Android', '9.0', '2019', 'Purpura', 'imagenes/productos/honor-9x-pro.jpg'),
(7, 'Apple', 'iPhone 11', 'A2221', 'iOS', '13.0', '2019', 'Blanco', 'imagenes/productos/iphone-11.jpg'),
(8, 'OnePlus', '7 Pro', 'GM1911', 'Android', '9.0', '2019', 'Azul', 'imagenes/productos/oneplus-7-pro.jpg'),
(9, 'Google', 'Pixel 3', 'Pixel 3', 'Android', '9.0 (actualizable a 10)', '2018', 'Negro', 'imagenes/productos/pixel3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `extras`
--

CREATE TABLE `extras` (
  `id_extras` int(11) NOT NULL,
  `fingerprint_type` text COLLATE utf8_spanish_ci NOT NULL,
  `speaker_type` text COLLATE utf8_spanish_ci NOT NULL,
  `water_resistant_grade` text COLLATE utf8_spanish_ci NOT NULL,
  `has_headphone_jack` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `extras`
--

INSERT INTO `extras` (`id_extras`, `fingerprint_type`, `speaker_type`, `water_resistant_grade`, `has_headphone_jack`) VALUES
(1, 'Ultra SÃ³nico (de pantalla)', 'Stereo', 'IP68', 'Si'),
(2, 'Ultra sÃ³nico (de pantalla)', 'Stere', 'IP68', 'No'),
(3, 'TÃ¡ctil (trasero)', 'Mono', 'No', 'Si'),
(4, 'Fisico', 'Stereo', 'Si', 'No'),
(5, 'Fisico', 'Mono', 'No', 'Si'),
(6, 'Fisico (lateral)', 'Mono', 'No', 'Si'),
(7, 'No', 'Stereo', 'IP68', 'No'),
(8, 'Optico (en pantalla)', 'Estereo', 'No', 'No'),
(9, 'Fisico (trasero)', 'Estereo', 'No', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `lens`
--

CREATE TABLE `lens` (
  `id_lens` int(11) NOT NULL,
  `lens_type` text COLLATE utf8_spanish_ci NOT NULL,
  `lens_mp` text COLLATE utf8_spanish_ci NOT NULL,
  `lens_recording` text COLLATE utf8_spanish_ci NOT NULL,
  `lens_ubication` text COLLATE utf8_spanish_ci NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `lens`
--

INSERT INTO `lens` (`id_lens`, `lens_type`, `lens_mp`, `lens_recording`, `lens_ubication`, `id_product`) VALUES
(1, 'Wide', '12', '2160p@60fps (no OIS/EIS), 2160p@30fps, 1080p@30/60/240fps, 720p@960fps', 'Trasera', 1),
(2, 'Ultra Wide', '12', '2160p@60fps (no OIS/EIS), 2160p@30fps, 1080p@30/60/240fps, 720p@960fps', 'Trasera', 1),
(3, 'Telephoto', '12', '2160p@60fps (no OIS/EIS), 2160p@30fps, 1080p@30/60/240fps, 720p@960fps', 'Trasera', 1),
(4, 'Wide', '10', '2160p@30fps, 1080p@30fps', 'Frontal', 1),
(5, 'Wide', '12', '2160p@30/60fps, 1080p@30/60/240fps, 720p@960fps', 'Trasera', 2),
(6, 'Ultra Wide', '16', '2160p@30/60fps, 1080p@30/60/240fps, 720p@960fps', 'Trasera', 2),
(7, 'Telephoto', '12', '2160p@30/60fps, 1080p@30/60/240fps, 720p@960fps', 'Trasera', 2),
(8, 'Wide', '16', '1080p@30fps', 'Frontal (motorizada)', 8),
(9, 'Wide', '48', '1080p@30/60/120fps', 'Trasera', 3),
(10, 'Sensor de profundidad', '5', '-', 'Trasera', 3),
(11, 'Estandar', '13', '1080p@30fps', 'Frontal', 3),
(12, 'Wide', '12', '2160p@24/30/60fps, 1080p@30/60/120/240fps, HDR', 'Trasera', 4),
(13, 'Telephoto', '12', '2160p@24/30/60fps, 1080p@30/60/120/240fps, HDR', 'Trasera', 4),
(14, 'Estandar', '7', '1080p@60fps', 'Frontal', 4),
(15, 'Wide', '13', '1080p@30fps', 'Trasera', 5),
(16, 'Sensor de profundidad', '2', '-', 'Trasera', 5),
(17, 'Estandar', '13', '1080p@30fps', 'Frontal', 5),
(18, 'Wide', '48', '1080p@30fps', 'Trasera', 6),
(19, 'Ultra Wide', '8', '1080p@30fps', 'Trasera', 6),
(20, 'Sensor de profundidad', '2', '-', 'Trasera', 6),
(21, 'Estandar', '16', '1080p@30fps', 'Frontal (motorizado)', 6),
(22, 'Wide', '12', '2160p@24/30/60fps, 1080p@30/60/120/240fps, HDR', 'Trasera', 7),
(23, 'Ultra Wide', '12', '2160p@24/30/60fps, 1080p@30/60/120/240fps, HDR', 'Trasera', 7),
(24, 'Wide', '12', '2160p@24/30/60fps, 1080p@30/60/120fps', 'Frontal', 7),
(25, 'TOF 3D', '0', '-', 'Frontal', 7),
(26, 'Wide', '48', '2160p@30/60fps, 1080p@30/60/240fps, 720p@480fps, Auto HDR', 'Trasera', 8),
(27, 'Telephoto', '8', '2160p@30/60fps, 1080p@30/60/240fps, 720p@480fps, Auto HDR', 'Trasera', 8),
(28, 'UltraWide', '16', '-', 'Trasera', 8),
(29, 'Wide', '16', '1080p@30fps', 'Frontal (motorizada)', 8),
(30, 'Wide', '12', '2160p@30fps, 1080p@30/60/120fps, 720p@240fps, 1080p@30fps (gyro-EIS)', 'Trasera', 9),
(31, 'Wide', '8', '1080p@30fps', 'Frontal', 9),
(32, 'UltraWide', '8', '1080p@30fps', 'Frontal', 9);

-- --------------------------------------------------------

--
-- Table structure for table `memories`
--

CREATE TABLE `memories` (
  `id_memory` int(11) NOT NULL,
  `ram_size` text COLLATE utf8_spanish_ci NOT NULL,
  `rom_size` text COLLATE utf8_spanish_ci NOT NULL,
  `sd_size` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `memories`
--

INSERT INTO `memories` (`id_memory`, `ram_size`, `rom_size`, `sd_size`) VALUES
(1, '8', '128', '1000'),
(2, '8', '256', '0'),
(3, '4', '128', '256'),
(4, '4', '64', '0'),
(5, '3', '32', '1000'),
(6, '8', '128', '512'),
(7, '4', '256', '0'),
(8, '12', '256', '0'),
(9, '4', '128', '0');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_product` int(11) NOT NULL,
  `id_dispositive` int(11) NOT NULL,
  `id_xpu` int(11) NOT NULL,
  `id_memory` int(11) NOT NULL,
  `id_screen` int(11) NOT NULL,
  `id_battery` int(11) NOT NULL,
  `id_connectivity` int(11) NOT NULL,
  `id_extras` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `product_stock` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  `listed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_product`, `id_dispositive`, `id_xpu`, `id_memory`, `id_screen`, `id_battery`, `id_connectivity`, `id_extras`, `id_cat`, `product_stock`, `product_price`, `listed`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 100, 54000, 1),
(2, 2, 2, 2, 2, 2, 2, 2, 2, 50, 67000, 1),
(3, 3, 3, 3, 3, 3, 3, 3, 3, 150, 14000, 1),
(4, 4, 4, 4, 4, 4, 4, 4, 4, 250, 96000, 1),
(5, 5, 5, 5, 5, 5, 5, 5, 5, 200, 14000, 1),
(6, 6, 6, 6, 6, 6, 6, 6, 6, 50, 21500, 1),
(7, 7, 7, 7, 7, 7, 7, 7, 7, 90, 110000, 1),
(8, 8, 8, 8, 8, 8, 8, 8, 8, 53, 89000, 1),
(9, 9, 9, 9, 9, 9, 9, 9, 9, 20, 60000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `purchase_quantity` int(11) NOT NULL,
  `purchase_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `screens`
--

CREATE TABLE `screens` (
  `id_screen` int(11) NOT NULL,
  `screen_type` text COLLATE utf8_spanish_ci NOT NULL,
  `screen_size` text COLLATE utf8_spanish_ci NOT NULL,
  `screen_reso` text COLLATE utf8_spanish_ci NOT NULL,
  `screen_aspect_ratio` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `screens`
--

INSERT INTO `screens` (`id_screen`, `screen_type`, `screen_size`, `screen_reso`, `screen_aspect_ratio`) VALUES
(1, 'Dynamic AMOLED', '6.1', '1440 x 3040', '19:9'),
(2, 'Dynamic AMOLED', '6.3', '1080 x 2280', '19:9'),
(3, 'IPS', '6.3', '1080 x 2340', '19.5:9'),
(4, 'OLED', '5.8', '1125 x 2436', '19.5:9'),
(5, 'IPS', '6.26', '720 x 1520', '19:9'),
(6, 'LTPS IPS', '6.59', '1080 x 2340', '19.5:9'),
(7, 'Liquid Retina IPS LCD', '6.1', '828 x 1792', '19.5:9'),
(8, 'Fluid AMOLED', '6.67', '1440 x 3120', '19.5:9'),
(9, 'P-OLED', '5.5', '1080 x 2160', '18:9');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `user_alias` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `user_mail` varchar(90) COLLATE utf8mb4_spanish_ci NOT NULL,
  `user_pass` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `user_name` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `user_surname` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `user_adress` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `user_last_con` date NOT NULL,
  `user_signup` date NOT NULL,
  `user_is_verified` tinyint(1) NOT NULL,
  `user_verification_code` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `user_pass_code` varchar(256) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `user_alias`, `user_mail`, `user_pass`, `user_name`, `user_surname`, `user_adress`, `user_last_con`, `user_signup`, `user_is_verified`, `user_verification_code`, `user_pass_code`) VALUES
(10, 'joel4', 'joel@sdfsd.com', '529523225c148643fbde10b90337d775', 'Joel', 'Perpetua', 'calle falsa 123', '2019-09-14', '2019-09-14', 0, '9G5Mtb7w1iyVIcq', ''),
(11, 'rocio', 'test@test.com', 'sadfsdfsadf', 'Rocio', 'Sanchez', '25 de Mayo 321', '2019-09-29', '2019-09-28', 0, '', ''),
(12, 'schere', 'test@test.com', '25f9e794323b453885f5181f1b624d0b', 'Scherezade', 'Apellido', 'Cervantes 123', '2019-10-07', '2019-10-07', 0, 'EVoOD6nYiv54fNx', ''),
(13, 'joel', 'test@test.com', '25f9e794323b453885f5181f1b624d0b', 'joel', 'perpetua', 'sadfsad 123', '2019-10-07', '2019-10-07', 0, 'Ctazj5gv4ldum3f', '');

-- --------------------------------------------------------

--
-- Table structure for table `xpu`
--

CREATE TABLE `xpu` (
  `id_xpu` int(11) NOT NULL,
  `cpu_brand` text COLLATE utf8_spanish_ci NOT NULL,
  `cpu_model` text COLLATE utf8_spanish_ci NOT NULL,
  `cpu_cores` text COLLATE utf8_spanish_ci NOT NULL,
  `gpu_brand` text COLLATE utf8_spanish_ci NOT NULL,
  `gpu_model` text COLLATE utf8_spanish_ci NOT NULL,
  `arch` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `xpu`
--

INSERT INTO `xpu` (`id_xpu`, `cpu_brand`, `cpu_model`, `cpu_cores`, `gpu_brand`, `gpu_model`, `arch`) VALUES
(1, 'Samsung', 'Exynos 9820', '8', 'ARM', 'Mali-G76', ''),
(2, 'Samsung', 'Exynos 9825', '8', 'ARM', 'Mali-G76', ''),
(3, 'Qualcomm', 'SnapDragon 660', '8', 'Qualcomm', 'Adreno 512', ''),
(4, 'Apple', 'A12 Bionic', '8', 'Apple', 'Apple GPU', ''),
(5, 'Mediatek', 'Helio P22', '8', 'PowerVR', 'GE8320', ''),
(6, 'HiSilicon', 'Kirin 810', '8', 'ARM', 'Mali G52', ''),
(7, 'Apple', 'A13 Bionic', '6', 'Apple', 'Apple GPU', ''),
(8, 'Qualcomm', 'Snapdragon 855', '8', 'Qualcomm', 'Adreno 640', ''),
(9, 'Qualcomm', 'Snapdragon 845', '8', 'Qualcomm', 'Adreno 630', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batteries`
--
ALTER TABLE `batteries`
  ADD PRIMARY KEY (`id_battery`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_dispositive` (`id_dispositives`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indexes for table `connectivity`
--
ALTER TABLE `connectivity`
  ADD PRIMARY KEY (`id_connectivity`);

--
-- Indexes for table `dispositives`
--
ALTER TABLE `dispositives`
  ADD PRIMARY KEY (`id_dispositives`);

--
-- Indexes for table `extras`
--
ALTER TABLE `extras`
  ADD PRIMARY KEY (`id_extras`);

--
-- Indexes for table `lens`
--
ALTER TABLE `lens`
  ADD PRIMARY KEY (`id_lens`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `memories`
--
ALTER TABLE `memories`
  ADD PRIMARY KEY (`id_memory`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_dispositive` (`id_dispositive`),
  ADD KEY `id_xpu` (`id_xpu`),
  ADD KEY `id_memory` (`id_memory`),
  ADD KEY `id_screen` (`id_screen`),
  ADD KEY `id_battery` (`id_battery`),
  ADD KEY `id_connectivity` (`id_connectivity`),
  ADD KEY `id_extras` (`id_extras`),
  ADD KEY `id_cat` (`id_cat`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `screens`
--
ALTER TABLE `screens`
  ADD PRIMARY KEY (`id_screen`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `xpu`
--
ALTER TABLE `xpu`
  ADD PRIMARY KEY (`id_xpu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batteries`
--
ALTER TABLE `batteries`
  MODIFY `id_battery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `connectivity`
--
ALTER TABLE `connectivity`
  MODIFY `id_connectivity` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `dispositives`
--
ALTER TABLE `dispositives`
  MODIFY `id_dispositives` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `extras`
--
ALTER TABLE `extras`
  MODIFY `id_extras` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `lens`
--
ALTER TABLE `lens`
  MODIFY `id_lens` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `memories`
--
ALTER TABLE `memories`
  MODIFY `id_memory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `screens`
--
ALTER TABLE `screens`
  MODIFY `id_screen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `xpu`
--
ALTER TABLE `xpu`
  MODIFY `id_xpu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lens`
--
ALTER TABLE `lens`
  ADD CONSTRAINT `lens_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_dispositive`) REFERENCES `dispositives` (`id_dispositives`),
  ADD CONSTRAINT `products_ibfk_10` FOREIGN KEY (`id_extras`) REFERENCES `extras` (`id_extras`),
  ADD CONSTRAINT `products_ibfk_11` FOREIGN KEY (`id_cat`) REFERENCES `category` (`id_cat`),
  ADD CONSTRAINT `products_ibfk_4` FOREIGN KEY (`id_xpu`) REFERENCES `xpu` (`id_xpu`),
  ADD CONSTRAINT `products_ibfk_5` FOREIGN KEY (`id_memory`) REFERENCES `memories` (`id_memory`),
  ADD CONSTRAINT `products_ibfk_6` FOREIGN KEY (`id_screen`) REFERENCES `screens` (`id_screen`),
  ADD CONSTRAINT `products_ibfk_7` FOREIGN KEY (`id_battery`) REFERENCES `batteries` (`id_battery`),
  ADD CONSTRAINT `products_ibfk_9` FOREIGN KEY (`id_connectivity`) REFERENCES `connectivity` (`id_connectivity`);

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `purchase_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `purchase_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2024 at 03:00 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(4) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(1, 'Sách lịch sử'),
(2, 'Sách khoa học'),
(3, 'Sách ngoại văn'),
(4, 'Sách Tiếng Việt');

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `id` int(20) NOT NULL,
  `price` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `quantity` int(20) NOT NULL,
  `idsp` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `id` int(20) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `customer_phone` int(20) NOT NULL,
  `total` int(20) NOT NULL,
  `idgh` int(20) NOT NULL,
  `iduser` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(4) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` varchar(200) NOT NULL,
  `price` int(6) NOT NULL,
  `iddm` int(4) NOT NULL,
  `tacgia` varchar(255) NOT NULL,
  `dacbiet` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `img`, `price`, `iddm`, `tacgia`, `dacbiet`) VALUES
(18, 'Ông già và biển cả', 'ong-gia-va-bien-ca-tb-2023.jpg', 150000, 4, 'Ernest Hemingway', 0),
(19, 'Robinson', 'bo-robinson-crusoe-tap-1.jpg', 120000, 4, 'Daniel Defoe', 0),
(22, 'Tư duy thông minh', 'tu-duy-thong-minh.jpg', 100000, 2, 'John G Miller', 1),
(25, 'Banana Fish', 'banana-fish-tap-15.jpg', 25000, 3, 'Akimi Yoshida', 0),
(27, 'Atomic', 'thay-doi-ti-hon-hieu-qua-bat-ngo-tb-2023.jpg', 160000, 3, 'James Clear', 0),
(28, 'Không giới hạn', 'Untitled-1_izjr-tq.jpg', 200000, 2, 'Joe Vitale', 0),
(29, 'Everything Beautiful', 'everything-beautiful.jpg', 170000, 3, 'Ella Frances', 1),
(30, 'Tết Việt', 'tet-viet.jpg', 180000, 1, 'Ẩn danh', 0),
(31, 'Nếp cũ', 'nep-cu-huong-nuoc-hon-que.jpg', 200000, 1, 'Toan Ánh', 1),
(33, 'Ways of Seeing', 'Untitled-1_h3z9-zh.jpg', 230000, 3, 'Joe Gerber', 0),
(34, 'Sống kỷ luật', 'song-ky-luat-gat-thanh-cong.jpg', 160000, 2, 'Peter Holling', 1),
(43, 'Khủng long', 'bien-nien-su-ve-khung-long.jpg', 300000, 1, '0', 0),
(44, 'Tâm Thành Lộc Đời', '83827_tam-thanh-va-loc-doi.jpg', 150000, 4, '1', 0),
(45, 'Mở khóa vũ trụ', 'mo-khoa-vu-tru.jpg', 200000, 2, '0', 0),
(46, 'Phong tục Việt Nam', '100-dieu-nen-biet-ve-phong-tuc-viet-nam.jpg', 150000, 1, '1', 0),
(47, 'Chí Phèo', 'danh-tac-viet-nam-chi-pheo.jpg', 180000, 4, '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `dienthoai` varchar(255) NOT NULL,
  `role` tinyint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `diachi`, `dienthoai`, `role`) VALUES
(1, 'minh', 'minh', 'minh@gmail.com', 'CMT8', '012345678', 0),
(2, 'admin', 'admin', '', '', '', 1),
(4, 'di21', 'di21', 'di21gmail', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_giohang_sanpham` (`idsp`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_hoadon_giohang` (`idgh`),
  ADD KEY `fk_hoadon_user` (`iduser`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sanpham_dm` (`iddm`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `fk_giohang_sanpham` FOREIGN KEY (`idsp`) REFERENCES `sanpham` (`id`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `fk_hoadon_giohang` FOREIGN KEY (`idgh`) REFERENCES `giohang` (`id`),
  ADD CONSTRAINT `fk_hoadon_user` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_sanpham_dm` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

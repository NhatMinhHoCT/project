-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 16, 2024 lúc 05:05 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mixi`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `IDBV` int(11) NOT NULL,
  `TenBaiViet` varchar(50) NOT NULL,
  `NoiDung` text NOT NULL,
  `Ngay` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `IDBL` int(11) NOT NULL,
  `IDSP` int(11) NOT NULL,
  `IDTK` int(11) NOT NULL,
  `NoiDung` text NOT NULL,
  `Ngay` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `IDCTHD` int(11) NOT NULL,
  `IDTK` int(11) NOT NULL,
  `IDHD` int(11) NOT NULL,
  `DiaChi` text NOT NULL,
  `TongTien` int(11) NOT NULL,
  `trangthai` set('dang-xu-ly','dang-giao-hang','giao-thanh-cong','huy') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `IDDM` int(11) NOT NULL,
  `TenDM` varchar(100) NOT NULL,
  `MotaDM` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`IDDM`, `TenDM`, `MotaDM`) VALUES
(1, 'Áo Thun', 'áo'),
(2, 'Quần', 'quần'),
(6, 'Áo Khoác', 'áo khoác'),
(7, 'Áo SƠMI', 'áo sơ mi'),
(8, 'Best Seller', 'hàng bán chạy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `IDHD` int(11) NOT NULL,
  `IDCTHD` int(11) NOT NULL,
  `IDSP` int(11) NOT NULL,
  `HinhAnh` varchar(225) NOT NULL,
  `TenSP` varchar(225) NOT NULL,
  `GiaSP` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `ThanhTIen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `IDSP` int(11) NOT NULL,
  `TenSP` varchar(225) NOT NULL,
  `HinhAnhSP` varchar(100) NOT NULL,
  `GiaSP` int(11) NOT NULL,
  `MotaSP` text NOT NULL,
  `ViewSP` int(11) NOT NULL,
  `BetSeller` int(11) NOT NULL,
  `HangSP` varchar(50) NOT NULL,
  `LoaiSP` set('new','hot','sale') DEFAULT '',
  `MaDM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`IDSP`, `TenSP`, `HinhAnhSP`, `GiaSP`, `MotaSP`, `ViewSP`, `BetSeller`, `HangSP`, `LoaiSP`, `MaDM`) VALUES
(1, 'PURPLE NOTHING 2 FEAR SHORT', 'quanrabit03.jpg', 690000, '', 251, 7, 'OVERSIZED FIT', '', 2),
(2, 'ML FREEFALL SHORTS', 'quanrabit01.png', 450000, '', 132, 12, 'OVERSIZED FIT', 'sale', 2),
(3, 'TOO LAZY TO WEAR JACKET JEANS', 'jaketrabit01.png', 900000, '<strong>Đặc trưng:</strong>\r\n<br>\r\n<span>/ LAZY THINK COLLECTION | FALL - WINTER 2023 /</span> \r\n         <br>\r\n• Chất liệu: Jeans<br>\r\n• Size: M, L, XL<br>\r\n• Kỹ thuật: Wash và Bắn Laser\r\n', 343, 20, 'FORM OVERSIZE', 'new', 6),
(4, 'TOO LAZY RAGPLAN HOODIE - BLACK', 'hoodierabit01.png', 750000, '', 3332, 734, 'FORM CROP', 'hot', 6),
(5, 'TOO LAZY RAGPLAN HOODIE - BROWN', 'hoodierabit02.png', 750000, '', 45, 6, 'FORM CROP', '', 6),
(6, 'BLACK NOTHING 2 FEAR HOODIE', 'hoodierabit03.jpg', 850000, '', 66, 12, 'OVERSIZED FIT', '', 6),
(7, 'BLACK NOTHING 2 FEAR SHORT', 'quanrabit02.jpg', 690000, '', 5012, 523, 'OVERSIZED FIT', '', 2),
(8, 'PURPLE NOTHING 2 FEAR HOODIE', 'hoodierabit04.jpg', 850000, '', 86, 21, 'OVERSIZED FIT', '', 6),
(9, 'STOP THINK BOXY TEE - COFFE', 'aorabit01.png', 400000, '', 123, 34, 'FORM BOXY', '', 1),
(10, 'EYE BOXY TEE', 'aorabit03.png', 420000, 'Features: \r\n<br>\r\n• Chất liệu: Cotton \r\n<br>\r\n• Size: S, M, L, XL \r\n<br>\r\n• Kỹ thuật: Thêu và In, Wash\r\n\r\n', 4534, 324, 'FORM BOXY RAGLAN', '', 1),
(11, 'PROTECT FROM FEAR TEE', 'aorabit04.png', 400000, 'Features: \r\n<br>\r\n• Chất liệu: Cotton \r\n<br>\r\n• Size : S, M, L \r\n<br>\r\n• Kỹ thuật: In và Đánh tưa (Cổ, lai tay và áo)', 1233, 444, 'FORM OVERSIZE', '', 1),
(12, 'YOUR SHADOW TEE', 'aorabit06.png', 400000, 'Features:<br>\r\n• Chất liệu: Cotton<br>\r\n• Size: S, M, L<br>\r\n• Kỹ thuật: In tràn thân trước', 1231, 233, 'FORM OVERSIZE', '', 1),
(13, 'SALVATION BABY TEE', 'aorabit05.png', 380000, 'Features: \r\n<br>\r\n• Chất liệu: Cotton \r\n<br>\r\n• Size : S, M \r\n<br>\r\n• Kỹ thuật: In', 563, 86, 'FORM BABY TEE', '', 1),
(14, 'STOP THINK BOXY TEE - BLACK', 'aorabit02.png', 400000, 'Features:<br>\r\n• Chất liệu: Cotton<br>\r\n• Size: S, M, L, XL<br>\r\n• Kỹ thuật: Nhãn ép', 123, 23, 'FORM BOXY', '', 1),
(15, 'WHITE SUPERLOGO TEE', 'aorabit08.jpg', 450000, 'Features:<br>\r\n• Chất liệu: Cotton cao cấp<br>\r\n• Graphic: In mặt trước và in mặt sau<br>\r\n• Kỹ thuật: in lụa/ in nổi<br>\r\n• Size : XS S M L XL', 443, 43, 'OVERSIZED FIT', '', 1),
(16, 'STONE OF HEART TEE', 'aorabit07.jpg', 450000, 'Features:\r\n<br>\r\n• Chất liệu: Cotton cao cấp\r\n<br>\r\n• Graphic: in tràn thân\r\n<br>\r\n• Kỹ thuật: in lụa ', 564, 87, 'OVERSIZED FIT', '', 1),
(17, 'BAD SMILEY TEE - WHITE', 'aorabit09.jpg', 420000, 'Features:\r\n<br>\r\n• Chất liệu: Cotton cao cấp\r\n<br>\r\n• Graphic: In mặt trước và mặt sau\r\n<br>\r\n• Kỹ thuật: in Discharge', 345, 54, 'OVERSIZED FIT', '', 1),
(18, 'DEJAVU BOXY TEE - GREY', 'aorabit10.png', 400000, 'Features:<br>\r\n• Chất liệu: Cotton<br>\r\n• Size: S, M, L, XL<br>\r\n• Kỹ thuật: In', 23, 3, 'FORM BOXY', '', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `IDTK` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(225) NOT NULL,
  `HinhAnh` varchar(225) NOT NULL,
  `Role` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1KH 0ADmin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`IDTK`, `username`, `password`, `email`, `HinhAnh`, `Role`) VALUES
(1, 'Duy Lam', '123123123', 'duylam@gmail.com', '', 1),
(2, '111', '123', 'lam@gmail.com', '', 1),
(3, 'Tho', '123123123', 'tho@gmail.com', 'default.png', 0),
(4, 'Nghiax', '123123123', 'congnghia0802@gmail.com', 'default.png', 1),
(5, 'lam', '123123123', 'lamnekiro445@gmail.com', 'default.png', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vanchuyen`
--

CREATE TABLE `vanchuyen` (
  `IDVC` int(11) NOT NULL,
  `TenDVVC` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`IDBV`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`IDBL`),
  ADD KEY `IDSP` (`IDSP`),
  ADD KEY `IDTK` (`IDTK`);

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`IDCTHD`),
  ADD KEY `IDTK` (`IDTK`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`IDDM`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`IDHD`),
  ADD KEY `IDCTHD` (`IDCTHD`),
  ADD KEY `IDSP` (`IDSP`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`IDSP`),
  ADD KEY `MaDM` (`MaDM`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`IDTK`);

--
-- Chỉ mục cho bảng `vanchuyen`
--
ALTER TABLE `vanchuyen`
  ADD PRIMARY KEY (`IDVC`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `IDBV` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `IDBL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `IDCTHD` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `IDDM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `IDHD` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `IDSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `IDTK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `vanchuyen`
--
ALTER TABLE `vanchuyen`
  MODIFY `IDVC` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`IDSP`) REFERENCES `sanpham` (`IDSP`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`IDTK`) REFERENCES `taikhoan` (`IDTK`);

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`IDTK`) REFERENCES `taikhoan` (`IDTK`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`IDCTHD`) REFERENCES `chitiethoadon` (`IDCTHD`),
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`IDSP`) REFERENCES `sanpham` (`IDSP`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`MaDM`) REFERENCES `danhmuc` (`IDDM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

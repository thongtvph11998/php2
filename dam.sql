-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 02, 2021 lúc 05:16 PM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dam`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `noi_dung` varchar(225) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `danh_gia` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `noi_dung`, `id_sp`, `id_user`, `danh_gia`, `date`) VALUES
(61, 'dfghjkl', 1, 2, 1, '2020-10-19 10:09:25'),
(62, 'sss', 1, 2, 2, '2020-10-19 10:11:46'),
(63, 'xin', 2, 2, 5, '2020-10-19 10:13:04'),
(64, 'áo chất lượng', 3, 2, 1, '2020-10-20 10:00:15'),
(65, 'áo đẹp', 2, 2, 5, '2020-10-21 01:05:16'),
(66, 'asdadsa', 2, 2, 1, '2020-10-21 01:07:36'),
(67, 'ahihi', 1, 2, 5, '2020-10-21 01:31:53'),
(68, 'mua chịu  nhé', 3, 2, 5, '2020-10-30 11:29:33'),
(69, 'mua chịu', 1, 21, 5, '2020-11-13 08:52:03'),
(70, 'hhhhh', 1, 21, 1, '2020-11-13 08:55:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc`
--

CREATE TABLE `danh_muc` (
  `id` int(2) NOT NULL,
  `name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danh_muc`
--

INSERT INTO `danh_muc` (`id`, `name`) VALUES
(1, 'ÁO MIXI '),
(2, 'ĐỒ LƯU NIỆM'),
(3, 'ÁO REFUND GAMING'),
(22, '12'),
(25, '111'),
(27, '123456789');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id` int(11) NOT NULL,
  `danh_muc_id` int(2) NOT NULL,
  `img` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `hot` tinyint(1) DEFAULT 0,
  `mo_ta` varchar(255) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `gia_sp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id`, `danh_muc_id`, `img`, `name`, `hot`, `mo_ta`, `so_luong`, `gia_sp`) VALUES
(1, 1, 'http://localhost:8077/PHP2/ASS/upload/1_n.jpg', 'Áo phông Mixi đen', 0, '1111', 100, 500000),
(2, 1, 'http://localhost:8077/PHP2/ASS/upload/img2.jpg', 'Áo khoác Mixi đen ', 1, 'Áo khoác Mixi đen siêu đẹp, hàng cao cấp chính hãn', 170, 500000),
(3, 1, 'http://localhost:8077/PHP2/ASS/upload/img3.jpg', 'Áo Refund Gaming ', 1, 'tôt', 15, 122345),
(4, 1, 'http://localhost:8077/PHP2/ASS/upload/img4.jpg', 'Áo PUBG đen logo Uzi mũ một', 0, 'áo thun đẹp chất vải cotton cao cấp', 100, 270000),
(5, 1, 'http://localhost:8077/PHP2/ASS/upload/img5.jpg', 'Áo CSGO đen hình moly holly C01', 0, 'áo thun đẹp chất vải cotton cao cấp', 100, 270000),
(6, 1, 'http://localhost:8077/PHP2/ASS/upload/img6.jpg', 'Áo thun CSGO rush B no stop C02', 0, 'áo thun đẹp chất vải cotton cao cấp', 100, 270000),
(7, 1, 'http://localhost:8077/PHP2/ASS/upload/img7.jpg', 'Áo Sơ Mi Nam Dài Tay MV6023DB Màu Xanh Navy', 0, ' Thiết kế từ chất liệu modal có đặc tính kháng khu', 100, 500000),
(8, 1, 'http://localhost:8077/PHP2/ASS/upload/img8.jpg', 'Áo Sơ Mi Nam Dài Tay MV6023LB Xanh Sáng', 0, ' Thiết kế từ chất liệu modal có đặc tính kháng khu', 100, 500000),
(9, 1, 'http://localhost:8077/PHP2/ASS/upload/img9.jpg', 'Áo sơ mi nam dài tay cao cấp kẻ ô xanh Paul Roland - S97', 0, ' Thiết kế từ chất liệu modal có đặc tính kháng khu', 100, 500000),
(62, 1, 'http://localhost:8077/PHP2/ASS/upload/1_n.jpg', 'a1', 0, '111111111', 111, 11),
(63, 1, 'http://localhost:8077/PHP2/ASS/upload/img1.jpg', 'a', 0, '           wwwwwwwww                     ', 2147483647, 2147483647),
(64, 1, 'http://localhost:8077/PHP2/ASS/upload/1_n.jpg', 'a', 0, '         ưedfgh                       ', 11, 78),
(65, 1, 'http://localhost:8077/PHP2/ASS/upload/1_n.jpg', 'ggg', 0, '                 aa               ', 1111, 1),
(66, 1, 'http://localhost:8077/PHP2/ASS/upload/1_n.jpg', 'a1', 0, '               aa                 ', 1235, 200000),
(67, 2, '', 'banner31', 0, '    1233                            ', 27, 1223452);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slider`
--

CREATE TABLE `slider` (
  `id` int(2) NOT NULL,
  `name` varchar(50) NOT NULL,
  `noi_dung` varchar(225) NOT NULL,
  `img` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `slider`
--

INSERT INTO `slider` (`id`, `name`, `noi_dung`, `img`) VALUES
(1, 'banner1', 'dua a', 'http://localhost:8077/PHP2/ASS/upload/banner.jpg'),
(8, 'a1', 'ádfghj', 'http://localhost:8077/PHP2/ASS/upload/banner1.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `chuc_vu` int(1) NOT NULL,
  `username` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_user`
--

INSERT INTO `tb_user` (`id`, `chuc_vu`, `username`, `password`, `email`, `fullname`, `phone`) VALUES
(1, 1, 'admin', '$2y$10$7p5Cl1Wk9eF85uBjj2GOo.PtYnOl37uO90htzJH8zhSvtjY75peI2', 'admin@gmail.com', 'Tran Van Thong', '1231231231'),
(2, 1, 'tran van thong', '$2y$10$DAIcniNbxK1Ufzm1TGi9tuMRoL1AsgZVv5B05qeK/WGdnEWuK7khC', 'tranthong1702@gmail.com', 'trần văn thông', '0379848180'),
(3, 0, 'tran quoc tuan', '$2y$10$8NUxAQ7g5xiAS705ZmKkh.KAcXS3OO17tCCm/v61xRl68NZdt0dpa', 'tuantq1709@gmail.com', 'trần quốc tuấn', '0'),
(5, 0, 'vannam', '$2y$10$7EcGgvA8bs0BsFsa/5Q3Yu1bXCVJNyk/oXBLcFRkxq.HbvNBGLXLe', 'vannam@gmail.com', 'van nam', '12312312312'),
(6, 0, 'vannamm', '$2y$10$atPZ55kMnlRnoHHlgkN4m./SiIql6nLcFSQP5ytIX5BRXljz3RjMC', 'eoijasdf2', 'afjefasdfmkl', '3123123'),
(20, 0, 'tran thinh', '$2y$10$umdF9cNWkv0YqwDaw7DgH.LxoG9tFSYa8fWmAuh3XlLfbnXCwJqx2', 'tranthinh@gmail.com', 'tran thinh', '0379848180'),
(21, 1, 'thong', '$2y$10$5EKfvDuSiF34a7Dr1mfHReexbVT04vBEb.jPxt8UT.HfGrMtqW0m.', 'thong@gmail.com', 'thong', '1234567'),
(24, 1, 'Nguyen Van Nam', '$2y$10$lMAuT/7bgONCjHj1W.9DgONHV3lZ31OtHGrP6S2bqw14qF.T8vNj2', 'nam@gmail.com', 'nguyen van nam', '123123123');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Chỉ mục cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `danh_muc_id` (`danh_muc_id`);

--
-- Chỉ mục cho bảng `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT cho bảng `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`id_sp`) REFERENCES `san_pham` (`id`);

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`danh_muc_id`) REFERENCES `danh_muc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

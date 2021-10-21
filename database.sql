-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2021 lúc 04:26 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dhtl_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_nhanvien`
--

CREATE TABLE `db_nhanvien` (
  `manv` int(10) UNSIGNED NOT NULL,
  `tennv` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chucvu` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mayban` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodidong` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `madv` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `db_nhanvien`
--

INSERT INTO `db_nhanvien` (`manv`, `tennv`, `chucvu`, `mayban`, `email`, `sodidong`, `image_name`, `madv`) VALUES
(15, 'Nguyễn Thu Phương', 'Trưởng bộ môn', '', 'thuphuong@gmail.com', '0999797978', 'Staff_list_410.jpg', 10),
(16, 'Nguyễn Thu Trang', 'giảng viên', '0928183374', 'thutrang@gmail.com', '097657777', 'Staff_list_778.jpg', 7),
(19, 'Kenny Dang', 'giảng viên', '', 'kennyh@gmail.com', '0989866668', 'Staff_list_398.jpeg', 8),
(20, 'shin shin', 'sinh vien', '', 'shinshin@gmail.com', '0889797978', 'Staff_list_897.png', 8),
(21, 'Ly Khanh', 'GIANG VIEN', '0928183374', 'meo@gmail.com', '0984853265', 'Staff_list_270.jpeg', 9),
(29, 'Khanh Ngoc Nguyen', 'sinh vien', '0324524884', 'thuphuong@gmail.com', '0999966668', 'Staff_list_542.jpg', 8),
(31, 'ngoc khanh', 'GIANG VIEN', '', 'kim@gmail.com', '0999797978', 'Staff_list_228.jpg', 10),
(34, 'Do Khanh', '', '0324524884', 'khanh@gmail.com', '0989866668', 'Staff_list_106.jpg', 8),
(35, 'Do Khanh', 'sinh vien', '', 'meo@gmail.com', '0989866668', 'Staff_list_757.jpg', 7),
(38, 'MY khanh', '', '0928183374', 'khanh@gmail.com', '0989866668', 'Staff_list_636.jpg', 10);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `db_nhanvien`
--
ALTER TABLE `db_nhanvien`
  ADD PRIMARY KEY (`manv`),
  ADD KEY `madv` (`madv`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `db_nhanvien`
--
ALTER TABLE `db_nhanvien`
  MODIFY `manv` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `db_nhanvien`
--
ALTER TABLE `db_nhanvien`
  ADD CONSTRAINT `db_nhanvien_ibfk_1` FOREIGN KEY (`madv`) REFERENCES `db_donvi` (`madv`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

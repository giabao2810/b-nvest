-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 31, 2021 lúc 04:14 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `vestman`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(1, 'longadmin', '202cb962ac59075b964b07152d234b70', 1),
(4, 'cuongadmin', '123', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `cart_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `id_khachhang`, `code_cart`, `cart_status`) VALUES
(3, 1, '9281', 0),
(4, 1, '4458', 0),
(5, 6, '1632', 1),
(6, 8, '8138', 0),
(7, 1, '4175', 0),
(8, 11, '8390', 0),
(9, 13, '648', 0),
(10, 16, '1811', 0),
(11, 22, '2028', 0),
(12, 23, '1941', 1),
(13, 23, '8941', 1),
(14, 22, '4565', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart_details`
--

CREATE TABLE `tbl_cart_details` (
  `id_cart_details` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart_details`
--

INSERT INTO `tbl_cart_details` (`id_cart_details`, `code_cart`, `id_sanpham`, `soluongmua`) VALUES
(7, '9281', 9, 3),
(8, '9281', 8, 1),
(9, '4458', 9, 3),
(10, '4458', 8, 1),
(11, '1632', 12, 5),
(12, '8138', 11, 5),
(13, '4175', 6, 2),
(14, '4175', 8, 2),
(15, '8390', 6, 1),
(16, '648', 18, 1),
(17, '1811', 23, 1),
(18, '2028', 33, 1),
(19, '1941', 34, 2),
(20, '8941', 32, 2),
(21, '4565', 33, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_dangky` int(11) NOT NULL,
  `tenkhachhang` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `dienthoai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_dangky`, `tenkhachhang`, `email`, `diachi`, `matkhau`, `dienthoai`) VALUES
(9, 'Nguyễn Quỳnh Phương Đoan', 'doan@gmail.com', 'Phạm Văn Chiêu F14 ', '202cb962ac59075b964b07152d234b70', '0908070605'),
(11, 'Phạm Quang Long', 'qlong@gmail.com', 'Lê Đức Thọ F13', '202cb962ac59075b964b07152d234b70', '0909999000'),
(21, 'Hứa BC', 'HuaCuong@gmail.com', 'Quốc lộ 1A', '202cb962ac59075b964b07152d234b70', '0909666777'),
(22, 'Hứa AB', 'chicuong0015@gmail.com', '300 TP. Hồ Chí Minh', '202cb962ac59075b964b07152d234b70', '0909999000'),
(23, 'Hứa A', '1@gmail.com', '200 Thanh Hoá', '202cb962ac59075b964b07152d234b70', '0909999000'),
(24, 'Huỳnh A', '1@gmail.com', '100 Hà Nội', '202cb962ac59075b964b07152d234b70', '111222333444');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(1, 'VEST LỊCH LÃM', 1),
(2, 'ÁO ÂU NAM', 3),
(4, 'QUẦN ÂU NAM', 4),
(5, 'PHỤ KIỆN', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(250) NOT NULL,
  `masp` varchar(100) NOT NULL,
  `giasp` decimal(20,2) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `tomtat` text NOT NULL,
  `noidung` text NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `size` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masp`, `giasp`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `tinhtrang`, `id_danhmuc`, `size`) VALUES
(27, 'VEST DOANH NHÂN MẪU 05', 'vd1', '2500000.00', 10, '1635649871_', 'Bộ Vest cho sự tự tin và lịch lãm ', 'Chất liệu vải mát phù hợp cho mọi hoạt động công việc hay dự tiệc\r\nMàu sắc phản quang tôn dáng và những phụ kiện đi kèm ', 1, 1, ''),
(28, 'VEST DOANH NHÂN MẪU 04', 'vd2', '2500000.00', 10, '1635649861_', 'Thích hợp cho việc dự tiệc đám cưới và gặp gỡ đối tác. ', 'Xám ghi làm nổi bật lên khí chất của bạn\r\nĐường nét cơ bản dễ nhìn và tôn dáng', 1, 1, ''),
(29, 'VEST DOANH NHÂN MẪU 03', 'vd3', '2500000.00', 10, '1635043939_product3.jpeg', 'Kết hợp độc lạ rất hợp để hẹn hò và gặp mặt bạn bè.', 'Đơn giản nhưng không tầm thường, màu sắc độc đáo, ưa nhìn.', 1, 1, ''),
(30, 'VEST DOANH NHÂN MẪU 02', 'vd4', '2500000.00', 10, '1635649849_', 'Phù hợp cho các buổi tiệc nghiêm trang hay những sự kiện quan trọng. ', 'Ưa nhìn, chất vải khó nhăn và mát mẻ, mặc lâu sẽ không có cảm giác gò bó hay khó chịu ', 1, 1, ''),
(31, 'ÁO SƠ MI MẪU 01', 'sm1', '1500000.00', 10, '1635649908_', 'Phù hợp cho tất cả mọi hoạt động thường ngày, là người bạn không thế thiếu.', 'Kết hợp được với tất cả mọi phụ kiện đi kèm \r\nDễ phối đồ và mặc thoải mãi. \r\nMàu sắc đẹp và sáng.', 1, 2, ''),
(32, 'QUẦN TÂY ÂU MẪU 01', 'qt1', '2500000.00', 10, '1635649921_', 'Một điều không thể thiếu và cần thiết cho những bộ kết hợp.', 'Chất liệu co giãn tốt và mát.', 1, 4, ''),
(33, 'ĐỒNG HỒ ROLEX 01', 'rlx1', '1520000000.00', 1, '1635649897_', 'Rolex, tinh tế, đẳng cấp', 'Rolex, tinh tế, đẳng cấp', 1, 5, ''),
(34, 'VEST DOANH NHÂN MẪU 01', 'vd1', '2500000.00', 10, '1635649835_', 'Bộ Vest cho sự tự tin và lịch lãm ', 'Chất liệu vải mát phù hợp cho mọi hoạt động công việc hay dự tiệc\r\nMàu sắc phản quang tôn dáng và những phụ kiện đi kèm ', 1, 1, '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  ADD PRIMARY KEY (`id_cart_details`);

--
-- Chỉ mục cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_dangky`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `pk1` (`id_danhmuc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  MODIFY `id_cart_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD CONSTRAINT `tbl_sanpham_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `tbl_danhmuc` (`id_danhmuc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

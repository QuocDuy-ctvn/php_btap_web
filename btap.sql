

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btap`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sigup`
--

CREATE TABLE `sigup` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `pass` varchar(200) DEFAULT NULL,
  `passs` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sigup`
--

INSERT INTO `sigup` (`id`, `name`, `pass`, `passs`) VALUES
(1, 'nguyen quoc duy', '123', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtin`
--

CREATE TABLE `thongtin` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` varchar(300) DEFAULT NULL,
  `gia` int(50) DEFAULT NULL,
  `ten` varchar(45) DEFAULT NULL,
  `thongtin` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `thongtin`
--

INSERT INTO `thongtin` (`id`, `img`, `gia`, `ten`, `thongtin`) VALUES
(5, 'thongtin/img4-1681485953-1682533845.jpg', 17490, 'Asus VioBook', 'Ram 8GB-SSD 512 GB'),
(7, 'thongtin/dell_1280x720-800-resize-1682528045-1682533878.jpg', 18, 'MacBook', 'Ram 8GB-SSD 256 GB'),
(8, 'thongtin/img4-1681485953-1682533892.jpg', 20, 'Asus ViBook', 'Ram 8GB-SSD 512 GB'),
(9, 'thongtin/img5-1682528257-1682533909.jpg', 20799, 'MacBook', 'Ram 8GB-SSD 512 GB'),
(10, 'thongtin/img6-1681580634-1682533928.jpg', 20, 'Asus ViBok', 'Ram 8GB-SSD 256 GB'),
(11, 'thongtin/img8-1681580655-1682533944.jpg', 17490, 'Asus Book', 'Ram 8GB-SSD 512 GB'),
(12, 'thongtin/img11-1681469189-1682533962.jpg', 17490, 'MaBook', 'Ram 8GB-SSD 512 GB'),
(13, 'thongtin/img4-1681485953-1682534075.jpg', 20, 'Asus VioBook', 'Ram 8GB-SSD 512 GB'),
(14, 'thongtin/img6-1681580634-1682534124.jpg', 17490, 'MaBook', 'Ram 8GB-SSD 256 GB'),
(15, 'thongtin/dell_1280x720-800-resize-1682528045-1682534150.jpg', 18, 'MacBook', 'Ram 8GB-SSD 512 GB'),
(16, 'thongtin/img11-1681469189-1682534170.jpg', 17490, 'Asus VioBook', 'Ram 8GB-SSD 512 GB'),
(17, 'thongtin/img2-1681539420-1682534187.jpg', 20, 'Asus ViBook', 'Ram 8GB-SSD 256 GB');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `sigup`
--
ALTER TABLE `sigup`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thongtin`
--
ALTER TABLE `thongtin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `sigup`
--
ALTER TABLE `sigup`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `thongtin`
--
ALTER TABLE `thongtin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

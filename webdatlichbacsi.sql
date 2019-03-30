-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 23, 2019 lúc 01:02 AM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webdatlichbacsi`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `appointment`
--

CREATE TABLE `appointment` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `doctor_id` int(10) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `time` time NOT NULL,
  `note` mediumtext COLLATE utf8mb4_unicode_ci,
  `authentication_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `appointment`
--

INSERT INTO `appointment` (`id`, `customer_id`, `doctor_id`, `date`, `time`, `note`, `authentication_code`, `status`, `created_at`, `updated_at`) VALUES
(8, 56, 49, '2018-12-27 00:00:00', '13:00:00', NULL, NULL, NULL, '2018-12-27 05:11:04', '2018-12-27 05:11:04'),
(9, 56, 49, '2018-12-27 00:00:00', '13:00:00', NULL, NULL, NULL, '2018-12-27 05:13:45', '2018-12-27 05:13:45'),
(10, 56, 50, '2018-12-29 00:00:00', '16:30:00', NULL, NULL, NULL, '2018-12-27 19:18:25', '2018-12-27 19:18:25'),
(11, 56, 50, '2018-12-29 00:00:00', '17:30:00', NULL, NULL, NULL, '2019-01-02 21:34:44', '2019-01-02 21:34:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `department`
--

CREATE TABLE `department` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `department`
--

INSERT INTO `department` (`id`, `name`, `created_at`, `updated_at`) VALUES
(4, 'PULMONARY', '2018-12-03 04:36:46', '2018-12-03 04:36:46'),
(5, 'CARDIOLOGY', '2018-12-03 04:37:15', '2018-12-03 04:37:15'),
(6, 'TRAUMATOLOGY', '2018-12-03 04:37:33', '2018-12-03 04:37:33'),
(7, 'NEUROLOGY', '2018-12-03 04:37:54', '2018-12-03 04:37:54'),
(8, 'X-RAY', '2018-12-03 04:38:15', '2018-12-03 04:38:15'),
(9, 'NUCLEAR MAGNETIC', '2018-12-03 04:38:35', '2018-12-03 04:38:35'),
(10, 'DIAGNOSTIC', '2018-12-03 04:39:01', '2018-12-03 04:39:01'),
(11, 'BLOOD TEST', '2018-12-03 04:39:15', '2018-12-03 04:39:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `doctortime`
--

CREATE TABLE `doctortime` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `doctortime`
--

INSERT INTO `doctortime` (`id`, `user_id`, `date`, `time_start`, `time_end`, `created_at`, `updated_at`) VALUES
(1, 47, '2018-12-25 00:00:00', '09:00:00', '13:00:00', '2018-12-03 06:24:52', '2018-12-03 06:24:52'),
(2, 47, '2018-12-26 00:00:00', '11:00:00', '17:00:00', '2018-12-03 06:56:36', '2018-12-03 06:56:36'),
(3, 48, '2018-12-25 00:00:00', '00:00:00', '18:00:00', '2018-12-03 07:25:55', '2018-12-03 07:25:55'),
(4, 49, '2018-12-26 00:00:00', '13:00:00', '15:00:00', '2018-12-03 07:31:32', '2018-12-03 07:31:32'),
(5, 49, '2018-12-27 00:00:00', '10:00:00', '14:00:00', '2018-12-03 07:32:10', '2018-12-03 07:32:10'),
(6, 50, '2018-12-29 00:00:00', '14:00:00', '18:00:00', '2018-12-03 07:46:32', '2018-12-03 07:46:32'),
(7, 47, '2018-12-30 00:00:00', '10:00:00', '13:00:00', '2018-12-10 09:34:58', '2018-12-10 09:34:58'),
(8, 47, '2019-01-31 00:00:00', '08:00:00', '14:00:00', '2018-12-14 08:51:25', '2018-12-14 08:51:25'),
(9, 47, '2019-01-01 00:00:00', '08:00:00', '09:00:00', '2018-12-24 02:20:19', '2018-12-24 02:20:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hospital`
--

CREATE TABLE `hospital` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hospital`
--

INSERT INTO `hospital` (`id`, `name`, `region_id`, `created_at`, `updated_at`) VALUES
(8, 'Dai Hoc Y Duoc', 1, '2018-12-03 04:48:34', '2018-12-03 04:48:34'),
(9, 'Trung Uong Quan Doi', 1, '2018-12-03 04:49:06', '2018-12-03 04:49:06'),
(10, 'Bach Mai', 1, '2018-12-03 04:49:38', '2018-12-03 04:49:38'),
(11, '115', 3, '2018-12-03 04:50:32', '2018-12-03 04:50:32'),
(12, 'Tu Du', 3, '2018-12-03 04:50:46', '2018-12-03 04:50:54'),
(13, 'Nhi Dong', 3, '2018-12-03 04:51:24', '2018-12-03 04:51:24'),
(14, 'Tai Mui Hong', 2, '2018-12-03 04:53:58', '2018-12-03 04:53:58'),
(15, 'Tam Than', 2, '2018-12-03 04:54:36', '2018-12-03 04:54:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2018_10_16_034545_create_region_table', 1),
(3, '2018_10_16_035045_create_hospital_table', 1),
(4, '2018_10_18_025845_create_department_table', 1),
(5, '2018_10_18_033853_create_user_level_table', 1),
(6, '2014_10_12_000000_create_users_table', 2),
(8, '2018_10_31_131930_create_doctortime_table', 3),
(9, '2018_11_06_085243_create_typeofnews_table', 4),
(10, '2018_11_06_150009_create_news_table', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `typeofnews_id` int(10) UNSIGNED NOT NULL,
  `intro` mediumtext COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creator` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_desc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `typeofnews_id`, `intro`, `content`, `link`, `image`, `creator`, `meta_desc`, `meta_key`, `created_at`, `updated_at`) VALUES
(1, 'THẮT ỐNG DẪN TINH CÓ LÀM GIẢM HAM MUỐN?', 2, '<p><strong>Chính vì băn khoăn thắt ống dẫn tinh có làm giảm ham muốn hay không mà nhiều quý ông còn kiêng dè biện pháp tránh thai cực kỳ hiệu quả này. Trong bài viết này, chúng tôi sẽ giúp bạn giải đáp thắc mắc trên.</strong></p>', '<h2><strong>THẮT ỐNG DẪN TINH LÀ GÌ?</strong></h2>\r\n\r\n<p>Thắt ống dẫn tinh là một thủ thuật y khoa nhằm ngăn không cho tinh trùng đi vào túi tinh, từ đó tinh trùng không thể gặp trứng và thụ thai.</p>\r\n\r\n<p>Để thực hiện thủ thuật này, bác sĩ sẽ buộc thắt hoặc đốt điện ống dẫn tinh để tinh trùng khong thể di chuyển đến túi tinh. Thủ thuật này rất đơn giản, thực hiện dễ dàng và không gây đau đơn. Hơn nữa, biện pháp tránh thai này có tỷ lệ thành công khá cao nên các đấng mày râu hoàn toàn có thể yên tâm thực hiện. Nếu bạn muốn có thai trở lại, bác sĩ sẽ tiến hành tháo nút thắt và nối lại ống dẫn tinh.</p>\r\n\r\n<p><img alt=\"\" src=\"/webdatlichbacsi/public/images/uploads/images/that-ong-dan-tinh-co-lam-giam-ham-muon-1.jpg\" style=\"height:281px; width:500px\" /></p>\r\n\r\n<h2><strong>THẮT ỐNG DẪN TINH CÓ LÀM GIẢM HAM MUỐN?</strong></h2>\r\n\r\n<p>Chính vì biện pháp này ngăn không cho tinh trùng đến túi tinh nên nhiều quý ông quan ngại nó sẽ ảnh hưởng tới sinh hoạt tình dục và sự ham muốn. Tuy nhiên, các nhà khoa học đã khẳng định sau khi thắt ống dẫn tinh, tinh hoàn vẫn sản xuất ra tình trùng và nội tiết tố nam testosterone. Khi tinh trùng không ra gặp trứng để thụ tinh được sẽ đọng lại ở ống sinh tinh, mào tinh, ống dẫn rồi tự tiêu, bị hấp thụ ngược trở lại.</p>\r\n\r\n<p>Việc phẫu thuật thắt ống dẫn tinh cũng không hề tác động đến các dây thần kinh giúp cương cứng hay đạt cực khoái ở nam giới. Vì thế, thủ thuật này không hề ảnh hưởng tới ham muốn của đấng mày râu. Có những trường hợp sau khi thắt ống dẫn tinh, nhu cầu tình dục của anh em còn tăng lên do tâm lý thoải mái, không cần lo ngay náy về việc có thai ngoài ý muốn.</p>\r\n\r\n<p>Vậy thì, nếu các bạn đang tìm kiếm một giải pháp tránh thai an toàn, tiết kiệm, hiệu quả, thì thắt ống dẫn tinh chính là một gợi ý lý tưởng.</p>\r\n\r\n<p><img alt=\"\" src=\"/webdatlichbacsi/public/images/uploads/images/that-ong-dan-tinh-co-lam-giam-ham-muon-3.jpg\" style=\"height:382px; width:500px\" /></p>\r\n\r\n<h2><strong>THẮT ỐNG DẪN TINH CÓ ĐAU KHÔNG? MẤT BAO LÂU THÌ HỒI PHỤC?</strong></h2>\r\n\r\n<p>Rất nhiều quý ông lo lắng khi quyết định thắt ống dẫn tinh, đó là liệu có đau đớn không, thời gian hồi phục mất bao lâu. Theo các chuyên gia, khi tiến hành thắt ống dẫn tinh, bác sĩ sẽ tiến hành gây tê nên người bệnh sẽ không cảm thấy đau đớn.</p>\r\n\r\n<p>Sau khi thắt ống dẫn tinh, bạn có thể gặp một chút đau và khó chịu. Tuy nhiên, cơn đau vẫn trong ngưỡng chịu đựng được. Nếu bạn gặp một số triệu chứng như sốt, vết thương bị mưng mủ hay sưng đau thì cần đến gặp bác sĩ ngay bởi có thể vết cắt đã bị nhiễm trùng.</p>\r\n\r\n<p><img alt=\"\" src=\"/webdatlichbacsi/public/images/uploads/images/that-ong-dan-tinh-co-lam-giam-ham-muon-2.jpg\" style=\"height:328px; width:500px\" /></p>', 'https://datlichbacsi.com/that-ong-dan-tinh-co-lam-giam-ham-muon/', 'images/news/1543913420.jpg', 'Bùi An Thuận', 'THẮT ỐNG DẪN TINH CÓ LÀM GIẢM HAM MUỐN?', '#sinhsan', '2018-12-04 01:50:20', '2018-12-04 01:50:20'),
(2, 'BỊ VIÊM AMIDAN BAO LÂU THÌ KHỎI?', 3, '<p><strong>Viêm amidan là một bệnh nhiễm trùng cấp tính rất phổ biến. Vậy viêm amidan bao lâu thì khỏi? Trong quá trình trị bệnh cần lưu ý những điều gì? Hãy cùng tìm câu trả lời trong bài viết dưới đây.</strong></p>', '<h2><strong>NGUYÊN NHÂN GÂY VIÊM AMIDAN</strong></h2>\r\n\r\n<p>Amidan là một tổ chức bạch huyết, có vai trò bảo vệ cơ thể khỏi những vi sinh vật xâm nhập qua đường miệng và đường hô hấp. Tuy nhiên, do cấu tạo có nhiều hang, hốc, amidan lại dễ bị viêm nhiễm. Một số nguyên nhân phổ biến gây viêm amidan đó là:</p>\r\n\r\n<p>– Do thay đổi thời tiết đột ngột, hệ miễn dịch của người bệnh suy giảm, virus, vi khuẩn sinh sôi nhanh dễ gây viêm nhiễm.</p>\r\n\r\n<p>– Viêm amidan có thể do các thủ phạm như virus Parainfluenzae, virus Eppstein – Barr, virus Adeno, liên cầu tan huyết nhóm A, liên cầu khuẩn…</p>\r\n\r\n<p>– Một nguyên nhân nữa có thể do tạng bạch huyết ở vụng cổ họng phát triển quá phát, tấn công lại amidan gây viêm nhiễm.</p>\r\n\r\n<p>– Ngoài ra, môi trường ô nhiễm, chế độ ăn uống, chế độ sinh hoạt không không lành mạnh có thể làm tổn thương amidan và gây viêm.<img alt=\"\" src=\"/webdatlichbacsi/public/images/uploads/images/viem-amidan-bao-lau-thi-khoi-1.jpg\" style=\"height:333px; width:500px\" /></p>\r\n\r\n<h2><strong>BIỂU HIỆN CỦA VIÊM AMIDAN</strong></h2>\r\n\r\n<p>– Bệnh nhân viêm amidan sẽ có những triệu chứng thường gặp như sốt, ớn lạnh, đau rát họng khi ăn uống, nuốt nước bọt.</p>\r\n\r\n<p>– Người bệnh đau đầu, mệt mỏi, chán ăn, cổ họng như vướng đờm đặc, amidan bị sưng đỏ.</p>\r\n\r\n<p>– Với những trường hợp bị viêm amidan hốc mủ, khi soi gương sẽ thấy những hốc mủ màu trắng như bã đậu quanh amidan.<img alt=\"\" src=\"/webdatlichbacsi/public/images/uploads/images/viem-amidan-bao-lau-thi-khoi-2.jpg\" style=\"height:345px; width:500px\" /></p>\r\n\r\n<p>Nếu bị viêm amidan mãn tính, bệnh nhân sẽ có thêm một số triệu chứng như:</p>\r\n\r\n<p>– Đau, ngứa rát họng nặng hơn</p>\r\n\r\n<p>– Vết viêm tiết dịch nhiều hơn, amidan và họng bị sưng phù.</p>\r\n\r\n<p>– Hơi thở có mùi hôi nặng, bề mặt amidan gồ ghề, có trường hợp nổi hạch bạch huyết ở vùng cổ. Viêm amidan mãn tính nếu không được điều trị sẽ tái phát nhiều lần, ảnh hưởng tới cuộc sống của người bệnh rất nhiều. Các biến chứng của viêm amidan cấp tính cũng rất nghiêm trọng.</p>', 'https://datlichbacsi.com/bi-viem-amidan-bao-lau-thi-khoi/', 'images/news/1544804399.png', 'Bùi An Thuận', 'viemhong amedan', 'viemhong', '2018-12-14 09:19:59', '2018-12-14 09:19:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `region`
--

CREATE TABLE `region` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `region`
--

INSERT INTO `region` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'NORTH', NULL, '2018-12-03 04:40:08'),
(2, 'CENTRAL', NULL, '2018-12-03 04:41:00'),
(3, 'SOUTH', NULL, '2018-12-03 04:41:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `store`
--

CREATE TABLE `store` (
  `id` int(10) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `store`
--

INSERT INTO `store` (`id`, `name`, `address`, `description`, `image`, `latitude`, `longitude`) VALUES
(2, 'Nhà thuốc Pharmacity', '71D1, Bình Thạnh, Hồ Chí Minh', '<p><strong>Điện thoại:</strong>&nbsp;1800 6821</p>\r\n\r\n<p><strong>Thời gian hoạt động: 6</strong>h00 - 23h30</p>\r\n\r\n<p><strong>Địa chỉ</strong>:&nbsp;71D1, Bình Thạnh, Hồ Chí Minh</p>', 'images/user/1544799414.jpg', '10.8040973', '106.7131988'),
(3, 'Nhà thuốc Việt', 'Bến Nghé, Quận 1, Hồ Chí Minh, Việt Nam', '<p><strong>Điện thoại:</strong>&nbsp;028 3956 1247 - 097 703 7676&nbsp;</p>\r\n\r\n<p><strong>Thời gian hoạt động: 24/7</strong></p>\r\n\r\n<p><strong>Địa chỉ:&nbsp;</strong>Bến Nghé, Quận 1, Hồ Chí Minh, Việt Nam</p>', 'images/user/1544799598.jpg', '10.771999', '106.7036064'),
(4, 'Nhà Thuốc Tư Nhân Hoàng Bảo', '73 Bạch Đằng, Phường 15, Bình Thạnh, Hồ Chí Minh', '<p>Địa chỉ:&nbsp;73 Bạch Đằng, Phường 15, Bình Thạnh, Hồ Chí Minh</p>\r\n\r\n<p>Giờ mở cửa: 6h00 - 21h00</p>\r\n\r\n<p>Điện thoại:&nbsp;028 3516 6963</p>', 'images/user/1545909533.jpg', '10.8035789', '106.7104009'),
(5, 'Nhà thuốc HUTECH', '475A Điện Biên Phủ Phường 25 Bình Thạnh Tp Hồ Chí Minh', '<p>Giờ mở cửa: 6h00 - 21h00</p>\r\n\r\n<p><strong>Điện thoại:</strong>&nbsp;1800 6821</p>\r\n\r\n<p>Địa chỉ:&nbsp;475A Điện Biên Phủ Phường 25 Bình Thạnh Tp Hồ Chí Minh</p>\r\n\r\n<p>&nbsp;</p>', 'images/user/1545919002.jpg', '10.8020999', '106.7124');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `typeofnews`
--

CREATE TABLE `typeofnews` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `typeofnews`
--

INSERT INTO `typeofnews` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Thần Kinh', '2018-12-04 00:58:38', '2018-12-04 00:58:38'),
(2, 'Sinh sản', '2018-12-04 00:58:55', '2018-12-04 00:58:55'),
(3, 'Tai Mũi Họng', '2018-12-04 01:00:20', '2018-12-04 01:00:20'),
(4, 'Cơ Xương Khớp', '2018-12-04 01:00:37', '2018-12-04 01:00:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` datetime DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region_id` int(10) UNSIGNED DEFAULT NULL,
  `hospital_id` int(10) UNSIGNED DEFAULT NULL,
  `department_id` int(10) UNSIGNED DEFAULT NULL,
  `sex` tinyint(1) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `price` int(11) DEFAULT NULL,
  `user_level_id` int(10) UNSIGNED NOT NULL DEFAULT '3',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verification` tinyint(4) DEFAULT NULL,
  `latitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `birthday`, `phone`, `address`, `region_id`, `hospital_id`, `department_id`, `sex`, `image`, `description`, `content`, `price`, `user_level_id`, `password`, `verification`, `latitude`, `longitude`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'Bùi An Thuận', 'bat123@gmail.com', '1997-02-23 00:00:00', '0374370453', '377 Bạch Đằng Phường 15 Bình Thạnh', 3, NULL, NULL, 1, 'images/user/1543837514.jpg', '<p>Thuận admin</p>', '<p>Thuận tốt bụng</p>', NULL, 1, '$2y$12$d4A6VU6RIq7XzgOhp033g.fcuMoge25JMK0QuemqzXDBI.ev0.H8i', NULL, '10.0254646', '105.0312464', 'yBQ4SrNBt80PgzrTq1NgX0HhyBRY1UsDQuKNPEBX8rbo4IyCwyyxudE0Bpk5', '2018-10-27 09:50:05', '2018-12-10 09:46:23'),
(47, 'Huỳnh Văn Minh', 'tranhuynhle200497@gmail.com', '2000-02-25 00:00:00', '0962656377', 'Quận 12 Thành Phố Hồ Chí Minh', 3, 11, 4, 1, 'images/user/1543838620.jpg', '<ul>\r\n	<li>&nbsp;Bác sĩ Tiến có hơn 30 năm kinh nghiệm công tác trong ngành, nguyên Trưởng khoa Tai Mũi Họng Bệnh viện Giao thông vận tải.&nbsp;</li>\r\n	<li>Bác sĩ Tiến là lựa chọn tin cậy của nhiều người bệnh khi được chỉ định phẫu thuật điều trị các bệnh lý tai mũi họng</li>\r\n</ul>', '<p><a href=\"https://datlichbacsi.com/phau-thuat-cat-amidan/\">Phẫu thuật cắt amidan</a>: bác sĩ Tiến luôn thăm khám và tư vấn kỹ càng trước khi phẫu thuật để người bệnh cảm thấy an tâm bước vào điều trị. Với thao tác nhẹ nhàng, chuẩn xác, bác sĩ sẽ giúp xử lý nhanh gọn</p>\r\n\r\n<p><a href=\"https://datlichbacsi.com/nao-va/\">Phẫu thuật nạo VA</a>: phụ huynh hoàn toàn có thể yên tâm khi gửi gắm con trẻ thực hiện nạo VA với bác sĩ Tiến. Bằng trình độ chuyên môn giỏi, kinh nghiệm thực tiễn đa dạng và khả năng thấu hiểu tâm lý tốt, ca mổ sẽ diễn ra nhẹ nhàng, ít đau, hạn chế chảy máu, bé phục hồi nhanh, sớm quay lại học tập và sinh hoạt bình thường.</p>\r\n\r\n<p><a href=\"https://datlichbacsi.com/phau-thuat-noi-soi-cat-polyp-mui/\">Phẫu thuật nội soi cắt polyp mũi</a>: giúp loại bỏ polyp phát triển ở mũi gây ra triệu chứng khó chịu, ảnh hưởng tới chất lượng cuộc sống của người bệnh.</p>\r\n\r\n<p><a href=\"https://datlichbacsi.com/phau-thuat-dieu-tri-di-hinh-vach-mui/\">Phẫu thuật chỉnh hình vách ngăn mũi</a>:&nbsp;giúp người bệnh chỉnh sửa lại vách ngăn loại bỏ các triệu chứng bệnh, cải thiện tình trạng sức khỏe.</p>', 100000, 2, '$2y$10$AQFShDBiTNVtoNtFJyocs.f62HgGUCOEmysGsyJWEcsMm0cP2h726', NULL, '10.7967593', '106.7060047', 'ewyBnI4XEX5py6GTRi2oiATY0ggTYlZyx57LeW1hr2FA9NuhUJAVhlAF76Pi', '2018-12-03 05:03:40', '2018-12-10 09:33:34'),
(48, 'Le Tien Dung', 'letiendung@gmail.com', '1997-10-25 00:00:00', '0918556012', 'Quận Hoàn Kiếm Hà Nội', 1, 12, 5, 0, 'images/user/1543847068.jpg', '<ul>\r\n	<li>Chuyên khoa: Sản phụ khoa</li>\r\n	<li>Giám đốc Bệnh viện Phụ sản Trung ương</li>\r\n</ul>', '<p><a href=\"https://datlichbacsi.com/phau-thuat-u-nang-buong-trung-2/\">Phẫu thuật u nang buồng trứng</a>: đây&nbsp;là loại khối u thường gặp, chiếm 3.6% các bệnh phụ khoa.&nbsp;Phẫu thuật là phương pháp được sử dụng để loại bỏ các u nang có kích thước quá lớn hoặc lấy mẫu mô sinh thiết nhằm khẳng định chắc chắn khối u không phải là ác tính (ung thư).</p>\r\n\r\n<p><a href=\"https://datlichbacsi.com/phau-thuat-noi-soi-chua-ngoai-tu-cung/\">Phẫu thuật nội soi chửa ngoài tử cung</a>:&nbsp;&nbsp;là phương pháp điều trị ít xâm lấn, bảo tồn ống dẫn trứng, vòi trứng giúp người bệnh có thể bảo toàn khả năng sinh sản.</p>\r\n\r\n<p><a href=\"https://datlichbacsi.com/phau-thuat-lac-noi-mac-tu-cung/\">Phẫu thuật lạc nội mạc tử cung</a>: phẫu thuật được chỉ định cho các trường hợp lạc nội mạc tử cung nặng, điều trị bằng các phương pháp khác không hiệu quả.</p>\r\n\r\n<p><a href=\"https://datlichbacsi.com/phau-thuat-buong-trung-da-nang/\">Phẫu thuật buồng trứng đa nang</a>:&nbsp; biện pháp được áp dụng cho phụ nữ vô sinh do hội chứng buồng trứng đa nang đã điều trị bằng thuốc nhưng không hiệu quả. Nhờ phẫu thuật, chức năng buồng trứng được cải thiện bằng cách làm giảm số lượng các nang nhỏ không cần thiết.</p>\r\n\r\n<p><a href=\"https://datlichbacsi.com/phau-thuat-thong-tac-voi-trung/\">Phẫu thuật thông tắc vòi trứng</a>:&nbsp;là phương pháp điều trị truyền thống được áp dụng cho các trường hợp bị tắc nghẽn vòi trứng. Phẫu thuật giúp khôi phục lại tình trạng và chức năng của vòi trứng, giúp vòi trứng có thể hoạt động bình thường trở lại.</p>\r\n\r\n<p><strong>Với sự tận tâm, đầy trách nhiệm, bác sĩ Vũ Bá Quyết đã trở thành một trong những chuyên gia sản khoa hàng đầu Việt Nam được bệnh nhân, người nhà bệnh nhân tin tưởng. Có rất nhiều bài báo ca ngợi về trình độ chuyên môn giỏi và sự tận tâm của bác sĩ với người bệnh:</strong></p>\r\n\r\n<p>Bài giới thiệu về PGS.TS Vũ Bá Quyết của trang tin của &nbsp;Trung tâm Truyền thông – Giáo dục sức khỏe Trung ương:&nbsp;<a href=\"http://t5g.org.vn/pgsts-vu-ba-quyet-khong-mot-ngay-ngoi-nghi\" target=\"_blank\">http://t5g.org.vn/pgsts-vu-ba-quyet-khong-mot-ngay-ngoi-nghi</a></p>\r\n\r\n<p>Bài chia sẻ về PGS.TS Vũ Bá quyết của trang info.net: “<em>Nhiều bệnh nhân được ông điều trị vẫn coi ông như một ân nhân, một người cha, người chú trong nhà. Bởi tiến sĩ Quyết luôn dành cho người bệnh những nụ cười thân thiện</em>.”</p>\r\n\r\n<p><a href=\"http://infonet.vn/nu-cuoi-cua-giam-doc-benh-vien-phu-san-trung-uong-post158887.info\" target=\"_blank\">http://infonet.vn/nu-cuoi-cua-giam-doc-benh-vien-phu-san-trung-uong-post158887.info</a></p>\r\n\r\n<p>Một số chia sẻ của bác sĩ Vũ Bá Quyết về dấu hiệu bệnh ung thư cổ tử cung:&nbsp;<a href=\"http://bachmai.gov.vn/index.php?option=com_content&amp;task=view&amp;id=2400\" target=\"_blank\">http://bachmai.gov.vn/index.php?option=com_content&amp;task=view&amp;id=2400</a></p>\r\n\r\n<p>Ca phẫu thuật thành công cụ bà 87 tuổi dùng cao tự cắt tử cung do bác sĩ Quyết trực tiếp thực hiện: &nbsp;<a href=\"http://laodong.com.vn/suc-khoe/phau-thuat-thanh-cong-ca-benh-hy-huu-cu-ba-87-tuoi-tu-dung-dao-cat-tu-cung-400912.bld\" target=\"_blank\">http://laodong.com.vn/suc-khoe/phau-thuat-thanh-cong-ca-benh-hy-huu-cu-ba-87-tuoi-tu-dung-dao-cat-tu-cung-400912.bld</a></p>', 200000, 2, '$2y$10$d9TYZ3c0qEj0eQ4CG68K8OG46M7qySXclxyIxle1cih38zz3oCyW2', NULL, '10.7967593', '106.7060047', 'BFOfYkbW2wBhn6B5D0SdgIoYuWbvIwTzVm4MhotfVV0npRPdLLhQcpPhnFgS', '2018-12-03 07:24:28', '2018-12-03 07:26:18'),
(49, 'Huynh Nam', 'huynhnam@gmail.com', '1997-02-02 00:00:00', '012345678', 'Miền Trung', 2, 15, 8, 1, 'images/user/1543847400.jpg', '<ul>\r\n	<li>Chuyên khoa: Thần KInh</li>\r\n	<li>Giám đốc Bệnh viện Phụ sản Trung ương.</li>\r\n</ul>', '<p><a href=\"https://datlichbacsi.com/phau-thuat-noi-soi-chua-ngoai-tu-cung/\">Phẫu thuật nội soi chửa ngoài tử cung</a>:&nbsp;&nbsp;là phương pháp điều trị ít xâm lấn, bảo tồn ống dẫn trứng, vòi trứng giúp người bệnh có thể bảo toàn khả năng sinh sản.</p>\r\n\r\n<p><a href=\"https://datlichbacsi.com/phau-thuat-lac-noi-mac-tu-cung/\">Phẫu thuật lạc nội mạc tử cung</a>: phẫu thuật được chỉ định cho các trường hợp lạc nội mạc tử cung nặng, điều trị bằng các phương pháp khác không hiệu quả.</p>\r\n\r\n<p><a href=\"https://datlichbacsi.com/phau-thuat-buong-trung-da-nang/\">Phẫu thuật buồng trứng đa nang</a>:&nbsp; biện pháp được áp dụng cho phụ nữ vô sinh do hội chứng buồng trứng đa nang đã điều trị bằng thuốc nhưng không hiệu quả. Nhờ phẫu thuật, chức năng buồng trứng được cải thiện bằng cách làm giảm số lượng các nang nhỏ không cần thiết.</p>\r\n\r\n<p><a href=\"https://datlichbacsi.com/phau-thuat-thong-tac-voi-trung/\">Phẫu thuật thông tắc vòi trứng</a>:&nbsp;là phương pháp điều trị truyền thống được áp dụng cho các trường hợp bị tắc nghẽn vòi trứng. Phẫu thuật giúp khôi phục lại tình trạng và chức năng của vòi trứng, giúp vòi trứng có thể hoạt động bình thường trở lại.</p>\r\n\r\n<p><strong>Với sự tận tâm, đầy trách nhiệm, bác sĩ Vũ Bá Quyết đã trở thành một trong những chuyên gia sản khoa hàng đầu Việt Nam được bệnh nhân, người nhà bệnh nhân tin tưởng. Có rất nhiều bài báo ca ngợi về trình độ chuyên môn giỏi và sự tận tâm của bác sĩ với người bệnh:</strong></p>\r\n\r\n<p>Bài giới thiệu về PGS.TS Vũ Bá Quyết của trang tin của &nbsp;Trung tâm Truyền thông – Giáo dục sức khỏe Trung ương:&nbsp;<a href=\"http://t5g.org.vn/pgsts-vu-ba-quyet-khong-mot-ngay-ngoi-nghi\" target=\"_blank\">http://t5g.org.vn/pgsts-vu-ba-quyet-khong-mot-ngay-ngoi-nghi</a></p>\r\n\r\n<p>Bài chia sẻ về PGS.TS Vũ Bá quyết của trang info.net: “<em>Nhiều bệnh nhân được ông điều trị vẫn coi ông như một ân nhân, một người cha, người chú trong nhà. Bởi tiến sĩ Quyết luôn dành cho người bệnh những nụ cười thân thiện</em>.”</p>\r\n\r\n<p><a href=\"http://infonet.vn/nu-cuoi-cua-giam-doc-benh-vien-phu-san-trung-uong-post158887.info\" target=\"_blank\">http://infonet.vn/nu-cuoi-cua-giam-doc-benh-vien-phu-san-trung-uong-post158887.info</a></p>\r\n\r\n<p>Một số chia sẻ của bác sĩ Vũ Bá Quyết về dấu hiệu bệnh ung thư cổ tử cung:&nbsp;<a href=\"http://bachmai.gov.vn/index.php?option=com_content&amp;task=view&amp;id=2400\" target=\"_blank\">http://bachmai.gov.vn/index.php?option=com_content&amp;task=view&amp;id=2400</a></p>\r\n\r\n<p>Ca phẫu thuật thành công cụ bà 87 tuổi dùng cao tự cắt tử cung do bác sĩ Quyết trực tiếp thực hiện: &nbsp;<a href=\"http://laodong.com.vn/suc-khoe/phau-thuat-thanh-cong-ca-benh-hy-huu-cu-ba-87-tuoi-tu-dung-dao-cat-tu-cung-400912.bld\" target=\"_blank\">http://laodong.com.vn/suc-khoe/phau-thuat-thanh-cong-ca-benh-hy-huu-cu-ba-87-tuoi-tu-dung-dao-cat-tu-cung-400912.bld</a></p>', 150000, 2, '$2y$10$8ZIRLPtNsBMRYxm2jGPcdeWz6dxnHwM9AvhzUd0FvFuzRLXvPcX4a', NULL, '10.7967593', '106.7060047', 'gfd41jlSHMOoObq9sOl3LUvdOOaJeInBdNg5v1QTELV9R8KrpYv8f0onpEgS', '2018-12-03 07:30:00', '2018-12-03 07:30:00'),
(50, 'Vu Van Quyet', 'vuvanquyet@gmail.com', '1997-10-25 00:00:00', '0987654321', 'Quan 2 Tp Ho Chi Minh', 3, 8, 7, 1, 'images/user/1543848328.jpg', '<ul>\r\n	<li>Chuyên khoa: Sản phụ khoa</li>\r\n	<li>Giám đốc Bệnh viện Phụ sản Trung ương.</li>\r\n</ul>', '<p><a href=\"https://datlichbacsi.com/phau-thuat-noi-soi-chua-ngoai-tu-cung/\">Phẫu thuật nội soi chửa ngoài tử cung</a>:&nbsp;&nbsp;là phương pháp điều trị ít xâm lấn, bảo tồn ống dẫn trứng, vòi trứng giúp người bệnh có thể bảo toàn khả năng sinh sản.</p>\r\n\r\n<p><a href=\"https://datlichbacsi.com/phau-thuat-lac-noi-mac-tu-cung/\">Phẫu thuật lạc nội mạc tử cung</a>: phẫu thuật được chỉ định cho các trường hợp lạc nội mạc tử cung nặng, điều trị bằng các phương pháp khác không hiệu quả.</p>\r\n\r\n<p><a href=\"https://datlichbacsi.com/phau-thuat-buong-trung-da-nang/\">Phẫu thuật buồng trứng đa nang</a>:&nbsp; biện pháp được áp dụng cho phụ nữ vô sinh do hội chứng buồng trứng đa nang đã điều trị bằng thuốc nhưng không hiệu quả. Nhờ phẫu thuật, chức năng buồng trứng được cải thiện bằng cách làm giảm số lượng các nang nhỏ không cần thiết.</p>\r\n\r\n<p><a href=\"https://datlichbacsi.com/phau-thuat-thong-tac-voi-trung/\">Phẫu thuật thông tắc vòi trứng</a>:&nbsp;là phương pháp điều trị truyền thống được áp dụng cho các trường hợp bị tắc nghẽn vòi trứng. Phẫu thuật giúp khôi phục lại tình trạng và chức năng của vòi trứng, giúp vòi trứng có thể hoạt động bình thường trở lại.</p>\r\n\r\n<p><strong>Với sự tận tâm, đầy trách nhiệm, bác sĩ Vũ Bá Quyết đã trở thành một trong những chuyên gia sản khoa hàng đầu Việt Nam được bệnh nhân, người nhà bệnh nhân tin tưởng. Có rất nhiều bài báo ca ngợi về trình độ chuyên môn giỏi và sự tận tâm của bác sĩ với người bệnh:</strong></p>\r\n\r\n<p>Bài giới thiệu về PGS.TS Vũ Bá Quyết của trang tin của &nbsp;Trung tâm Truyền thông – Giáo dục sức khỏe Trung ương:&nbsp;<a href=\"http://t5g.org.vn/pgsts-vu-ba-quyet-khong-mot-ngay-ngoi-nghi\" target=\"_blank\">http://t5g.org.vn/pgsts-vu-ba-quyet-khong-mot-ngay-ngoi-nghi</a></p>\r\n\r\n<p>Bài chia sẻ về PGS.TS Vũ Bá quyết của trang info.net: “<em>Nhiều bệnh nhân được ông điều trị vẫn coi ông như một ân nhân, một người cha, người chú trong nhà. Bởi tiến sĩ Quyết luôn dành cho người bệnh những nụ cười thân thiện</em>.”</p>', 250000, 2, '$2y$10$77SbQezE6Chh72C.HFZBB.4HdGQS2TtWzL/ytSfNR4mmeCxUQEPN.', NULL, '20.9475602', '105.7378076', NULL, '2018-12-03 07:45:28', '2018-12-03 07:45:28'),
(56, 'Bùi Thuận', 'thuanthuan1511061386@gmail.com', '1997-02-23 00:00:00', '0522311189', 'Thành phố', 1, NULL, NULL, 1, 'images/user/1544801160.jpg', '<p>Tiểu sử bệnh</p>', '<p>Tôi muốn giúp đỡ</p>', NULL, 3, '$2y$10$Bg3xEnXs4SWk6umPU3aCE.mAo6QaCBwSLazF9XBXILgljHPDuvBWC', 1, '10.3712865', '105.3562013', 'e3VwSSsg8pJgPk5RjtmOF42Hz5xsI7JcVVyTGcg6ozdCEdxsU8ZUKeEqJ3ah', '2018-12-14 08:26:00', '2018-12-14 09:32:00'),
(57, 'Nguyễn Trung Hiếu', 'trunghieunguyen@gmail.com', '1997-02-23 00:00:00', '987654321', '177 Bạch Đằng Hà Nội', 2, 10, 6, 1, 'images/user/1544804099.jpg', '<ul>\r\n	<li>Bác sĩ Huyên hiện đang là Trưởng khoa Phẫu thuật Tiết niệu của Bệnh viện Đa khoa Xanh Pôn</li>\r\n</ul>', '<p><a href=\"https://datlichbacsi.com/phau-thuat-noi-soi-u-xo-tuyen-tien-liet/\">Phẫu thuật nội soi u xơ tuyến tiền liệt</a>:&nbsp;Phẫu thuật là phương pháp điều trị giúp loại bỏ hoàn toàn khối u, làm giảm các triệu chứng khó chịu và hạn chế tối đa nguy cơ tái phát.</p>\r\n\r\n<p><a href=\"https://datlichbacsi.com/tan-soi-nieu-quan-nguoc-dong/\">Tán sỏi niệu quản ngược dòng</a>: Phương pháp này đang ngày càng được nhiều người tin tưởng lựa chọn để điều trị sỏi niệu quản với nhiều ưu điểm như&nbsp;không có vết mổ, đạt tỷ lệ sạch sỏi 100% và ít biến chứng.</p>\r\n\r\n<p><a href=\"https://datlichbacsi.com/phau-thuat-noi-soi-lay-soi-nieu-quan/\">Phẫu thuật nội soi lấy sỏi niệu quản</a>:&nbsp;Phẫu thuật nội soi lấy sỏi niệu quản được chỉ định cho các trường hợp không thể điều trị nội khoa hoặc điều trị nội khoa không hiệu quả.</p>\r\n\r\n<p><strong>Bác sĩ Phạm Huy Huyên là một trong những tên tuổi nổi bật về lĩnh vực ngoại khoa thận – tiết niệu với rất nhiều ca phẫu thuật áp dụng các phương pháp mới thành công được giới chuyên môn đánh giá cao và giới thiệu rộng rãi trên các phương tiện truyền thông đại chúng</strong></p>', 350000, 2, '$2y$10$GZ9wbNdL8yW3BvKORy9iPerFe4W6vJzitU6sfIGSAq1N6d0fMR9RO', NULL, '21.037099', '105.834688', NULL, '2018-12-14 09:14:59', '2018-12-14 09:14:59'),
(58, 'Tran Thi Le', 'minhquan.k0r1@gmail.com', '1997-03-10 00:00:00', '0962656377', 'Tien Giang', 2, NULL, NULL, 0, 'images/user/1545643124.png', '<p>hihi</p>', '<p>hihi</p>', NULL, 3, '$2y$10$SCqxEaejS7D436iqhQjI8uNGcwjuk0dRwdiAR.LXxM.Ey/wRALxby', NULL, NULL, NULL, NULL, '2018-12-24 02:18:44', '2018-12-24 02:18:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_level`
--

CREATE TABLE `user_level` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_level`
--

INSERT INTO `user_level` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'Bác sĩ', NULL, NULL),
(3, 'Khách hàng', NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointment_customer_id_foreign` (`customer_id`),
  ADD KEY `appointment_doctor_id_foreign` (`doctor_id`);

--
-- Chỉ mục cho bảng `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `doctortime`
--
ALTER TABLE `doctortime`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctortime_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hospital_region_id_foreign` (`region_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_typeofnews_id_foreign` (`typeofnews_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `typeofnews`
--
ALTER TABLE `typeofnews`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_region_id_foreign` (`region_id`),
  ADD KEY `users_hospital_id_foreign` (`hospital_id`),
  ADD KEY `users_department_id_foreign` (`department_id`),
  ADD KEY `users_user_level_id_foreign` (`user_level_id`);

--
-- Chỉ mục cho bảng `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `department`
--
ALTER TABLE `department`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `doctortime`
--
ALTER TABLE `doctortime`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `region`
--
ALTER TABLE `region`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `store`
--
ALTER TABLE `store`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `typeofnews`
--
ALTER TABLE `typeofnews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT cho bảng `user_level`
--
ALTER TABLE `user_level`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `appointment_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `doctortime`
--
ALTER TABLE `doctortime`
  ADD CONSTRAINT `doctortime_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `hospital`
--
ALTER TABLE `hospital`
  ADD CONSTRAINT `hospital_region_id_foreign` FOREIGN KEY (`region_id`) REFERENCES `region` (`id`);

--
-- Các ràng buộc cho bảng `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_typeofnews_id_foreign` FOREIGN KEY (`typeofnews_id`) REFERENCES `typeofnews` (`id`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`),
  ADD CONSTRAINT `users_hospital_id_foreign` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`id`),
  ADD CONSTRAINT `users_region_id_foreign` FOREIGN KEY (`region_id`) REFERENCES `region` (`id`),
  ADD CONSTRAINT `users_user_level_id_foreign` FOREIGN KEY (`user_level_id`) REFERENCES `user_level` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

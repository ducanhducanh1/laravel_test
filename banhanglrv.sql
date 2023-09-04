-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 03, 2023 lúc 06:14 AM
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
-- Cơ sở dữ liệu: `laravel_test`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `accessories`
--

CREATE TABLE `accessories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `brand_id` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `depscription` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `item_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `accessories`
--

INSERT INTO `accessories` (`id`, `name`, `slug`, `brand_id`, `price`, `img`, `status`, `depscription`, `content`, `created_at`, `updated_at`, `item_id`) VALUES
(1, 'BÓNG ĐÁ NIKE FOOTBALL ACADEMY PREMIER LEAGUE - WHITE/GOLD/BLACK', 'bong-da-nike-football-academy-premier-league-whitegoldblack', '1', '490,000', 'storage/accessory/BÓNG ĐÁ NIKE FOOTBALL ACADEMY PREMIER LEAGUE - WHITE/GOLD/BLACK9451692030105.webp', 0, '<p><strong>MOLTEN</strong>&nbsp;l&agrave; một thương hiệu sản xuất B&oacute;ng rất nổi tiếng, được th&agrave;nh lập v&agrave;o năm 1958 tại Nhật Bản. Trải qua hơn 60 h&igrave;nh th&agrave;nh v&agrave; ph&aacute;t triển,&nbsp;MOLTEN&nbsp;đ&atilde; kh&ocirc;ng ngừng lớn mạnh, vượt ra khỏi tầm ch&acirc;u lục v&agrave; vươn ra thế giới. Hiện nay, tập đo&agrave;n Molten đ&atilde; c&oacute; 11 văn ph&ograve;ng, 9 nh&agrave; m&aacute;y đ&oacute;ng tại Nhật với 8 văn ph&ograve;ng đại diện, 6 nh&agrave; m&aacute;y đ&oacute;ng ở Đức, Mỹ, Nhật, Trung Quốc, Malaisia. Quả b&oacute;ng Molten đ&atilde; lăn ở khắp nơi tr&ecirc;n thế giới,&nbsp; được sử dụng ở những giải đấu mang tầm Ch&acirc;u lục v&agrave; Quốc tế như&nbsp;<strong>ASIAN CUP 2019</strong>,&nbsp;<strong>EUROPA LEAGUE 2019</strong>...</p>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/ckfinder/uploads/images/img/bong12.webp\" style=\"height:567px; width:900px\" /></p>', 'Nhà cung cấp: MOLTEN  SKU: F9A1510-F', '2023-08-14 06:38:02', '2023-08-14 09:21:45', '6'),
(3, 'BÓNG ĐÁ ADIDAS FOOTBALL CHAMPIONS LEAGUE 2024 PRO MATCH BALL - WHITE/BLUE/SILVER', 'bong-da-adidas-football-champions-league-2024-pro-match-ball-whitebluesilver', '2', '3,300,000', 'storage/accessory/BÓNG ĐÁ ADIDAS FOOTBALL CHAMPIONS LEAGUE 2024 PRO MATCH BALL - WHITE/BLUE/SILVER3281692030078.webp', 0, '<p><strong>adidas Football Champions League 2024 Pro Match Ball - White/Blue/Silver&nbsp;</strong>l&agrave; quả b&oacute;ng cao cấp d&agrave;nh cho s&acirc;n cỏ tự nhi&ecirc;n 11 người. Đ&acirc;y ch&iacute;nh l&agrave; quả b&oacute;ng được sử dụng trong c&aacute;c trận đấu tại Champion League. Sản ph&acirc;̉m hướng tới địa đi&ecirc;̉m t&ocirc;̉ chức tr&acirc;̣n chung k&ecirc;́t vào tháng 5/2024, đó chính là s&acirc;n Wembley ở London. Bóng mang màu trắng sáng chủ đạo, đi&ecirc;̉m các chi ti&ecirc;́t màu xanh.</p>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/ckfinder/uploads/images/img/bong11.webp\" style=\"height:541px; width:1100px\" /></p>', 'Nhà cung cấp: ADIDAS  SKU: IA0953-5', '2023-08-14 07:03:27', '2023-08-14 09:21:18', '6'),
(4, 'BÓNG ĐÁ NIKE FOOTBALL ACADEMY PREMIER LEAGUE - WHITE/BRIGHT CRIMSON/BLACK', 'bong-da-nike-football-academy-premier-league-whitebright-crimsonblack', '1', '750,000', 'storage/accessory/BÓNG ĐÁ NIKE FOOTBALL ACADEMY PREMIER LEAGUE - WHITE/BRIGHT CRIMSON/BLACK1241692030053.webp', 0, '<p>Quả&nbsp;<strong>B&oacute;ng đ&aacute; Nike Football Academy Premier League - White/Bright Crimson/Black</strong>&nbsp;c&oacute; c&aacute;c đường r&atilde;nh s&aacute;ng tạo được thiết kế để tạo độ xo&aacute;y ổn định khi b&oacute;ng ở tr&ecirc;n kh&ocirc;ng. Đồ họa c&oacute; độ tương phản cao gi&uacute;p bạn dễ d&agrave;ng theo d&otilde;i quả b&oacute;ng v&agrave; tập trung v&agrave;o động t&aacute;c ch&acirc;n của m&igrave;nh.</p>\r\n\r\n<p>C&ocirc;ng nghệ Nike Aerowsculpt sử dụng c&aacute;c r&atilde;nh đ&uacute;c để đường bay ổn định hơn</p>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/ckfinder/uploads/images/img1/bongbanner.webp\" style=\"height:600px; width:1200px\" /></p>', 'Nhà cung cấp: NIKE  SKU: DN3604-100-5', '2023-08-14 07:05:49', '2023-08-14 09:20:53', '6'),
(5, 'BỌC ỐNG ĐỒNG NIKE SHIN PADS MERCURIAL LITE LUMINOUS - PINK BLAST/VOLT/BLACK', 'boc-ong-dong-nike-shin-pads-mercurial-lite-luminous-pink-blastvoltblack', '1', '729,000', 'storage/accessory/BỌC ỐNG ĐỒNG NIKE SHIN PADS MERCURIAL LITE LUMINOUS - PINK BLAST/VOLT/BLACK4291692030026.webp', 0, '<p><strong>Bọc ống đồng Nike Shin Pads Mercurial Lite Luminous - Pink Blast/Volt/Black&nbsp;</strong>được ra mắt trong năm 2023, cung cấp cho người chơi cảm gi&aacute;c thoải m&aacute;i khi sử dụng, lớp vỏ bền chắc chắn được thiết kế nhỏ gọn bằng chất liệu nhựa Resin. Ngo&agrave;i ra, b&ecirc;n trong được cấu tạo đệm Foam&nbsp;&ecirc;m &aacute;i chống va đập, tho&aacute;ng kh&iacute;. Dải băng ống đi k&egrave;m&nbsp;co gi&atilde;n gi&uacute;p cố định miếng bảo vệ kh&ocirc;ng bị x&ecirc; dịch khi hoạt động với cường độ cao v&agrave; sử dụng C&ocirc;ng nghệ Dri-FIT để thấm mồ h&ocirc;i.&nbsp;Chắc chắn đ&acirc;y l&agrave; d&ograve;ng phụ kiện kh&ocirc;ng thể thiếu cho những t&iacute;n đồ đam m&ecirc; Mercurial.</p>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/ckfinder/uploads/images/img1/obanner.webp\" style=\"height:600px; width:1200px\" /></p>', 'Nhà cung cấp: NIKE  SKU: DN3611-606-XS', '2023-08-14 07:07:43', '2023-08-14 09:20:26', '4'),
(6, 'BỌC ỐNG ĐỒNG ADIDAS TIRO CLUB SHIN GUARDS - BLACK/BLACK', 'boc-ong-dong-adidas-tiro-club-shin-guards-blackblack', '2', '300,000', 'storage/accessory/BỌC ỐNG ĐỒNG ADIDAS TIRO CLUB SHIN GUARDS - BLACK/BLACK711692195659.jpg', 0, '<p><strong>CẶP ỐP BẢO VỆ ỐNG CH&Acirc;N GỌN NHẸ C&Oacute; SỬ DỤNG TH&Agrave;NH PHẦN T&Aacute;I CHẾ.</strong></p>\r\n\r\n<p>Tăng cường khả năng bảo vệ tr&ecirc;n s&acirc;n b&oacute;ng đ&aacute; với c&aacute;i t&ecirc;n m&agrave; bạn c&oacute; thể tin tưởng. Cặp ốp bảo vệ ống ch&acirc;n adidas Tiro Club n&agrave;y c&oacute; c&aacute;c lớp bảo vệ cứng c&aacute;p v&agrave; c&oacute; h&igrave;nh d&aacute;ng vừa vặn tự nhi&ecirc;n, thoải m&aacute;i khi ch&acirc;n mang tất. C&aacute;c lỗ nhỏ tăng độ th&ocirc;ng tho&aacute;ng để bạn thoải m&aacute;i vận động. Lớp đệm EVA hấp thụ va đập để bạn lu&ocirc;n tự tin.&nbsp; Chứa tối thiểu 20% th&agrave;nh phần t&aacute;i chế nhằm hạn chế t&aacute;c động m&ocirc;i trường do sản xuất nhựa nguy&ecirc;n sinh.</p>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/ckfinder/uploads/images/img1/obanner1.webp\" style=\"height:600px; width:1200px\" /></p>', 'Nhà cung cấp: ADIDAS  SKU: HN5603-S', '2023-08-14 07:11:35', '2023-08-16 07:20:59', '4'),
(7, 'GĂNG TAY THỦ MÔN NIKE GOALKEEPER GLOVES MATCH LUMINOUS - BLACK/BARELY VOLT/WHITE', 'gang-tay-thu-mon-nike-goalkeeper-gloves-match-luminous-blackbarely-voltwhite', '1', '1,290,000', 'storage/accessory/GĂNG TAY THỦ MÔN NIKE GOALKEEPER GLOVES MATCH LUMINOUS - BLACK/BARELY VOLT/WHITE8001692029965.webp', 0, '<p><strong>Găng tay thủ m&ocirc;n Nike Goalkeeper Gloves Match Luminous - Black/Barely Volt/Whit</strong>e sẵn s&agrave;ng c&ugrave;ng bạn trong mọi pha cứu thua. Lớp đệm mềm, hỗ trợ trong c&aacute;c pha bắt b&oacute;ng. Thiết kế bề mặt nhẵn gi&uacute;p bạn dễ d&agrave;ng cầm nắm d&ugrave; trong điều kiện ẩm ướt hay kh&ocirc; r&aacute;o.</p>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/ckfinder/uploads/images/img1/img2/gbanner.webp\" style=\"height:600px; width:1200px\" /></p>', 'Nhà cung cấp: NIKE  SKU: CQ7799-016-6', '2023-08-14 07:14:06', '2023-08-14 09:19:25', '3'),
(8, 'GĂNG TAY THỦ MÔN ADIDAS GOALKEEPER GLOVES PREDATOR TRAINING CRAZYRUSH - FOOTWEAR WHITE/CORE BLACK/LUCID LEMON', 'gang-tay-thu-mon-adidas-goalkeeper-gloves-predator-training-crazyrush-footwear-whitecore-blacklucid-lemon', '2', '1,190,000', 'storage/accessory/GĂNG TAY THỦ MÔN ADIDAS GOALKEEPER GLOVES PREDATOR TRAINING CRAZYRUSH - FOOTWEAR WHITE/CORE BLACK/LUCID LEMON2081692195548.webp', 0, '<h3>Đ&Ocirc;I GĂNG TAY TẬP LUYỆN SỬ DỤNG KẾT HỢP C&Aacute;C CHẤT LIỆU T&Aacute;I CHẾ V&Agrave; C&Oacute; THỂ T&Aacute;I TẠO.</h3>\r\n\r\n<p>Bắt b&oacute;ng mục ti&ecirc;u ch&iacute;nh x&aacute;c v&agrave; xử l&yacute; b&oacute;ng ho&agrave;n hảo với đ&ocirc;i găng tay thủ m&ocirc;n adidas Predator n&agrave;y. V&acirc;n High Definition Texture dập ch&igrave;m tr&ecirc;n mu b&agrave;n tay tăng cường độ ch&iacute;nh x&aacute;c khi đưa b&oacute;ng ra khỏi khung th&agrave;nh, c&ograve;n l&ograve;ng b&agrave;n tay Soft Grip gi&uacute;p bạn bắt trọn những c&uacute; s&uacute;t ch&eacute;o g&oacute;c v&agrave; b&oacute;ng xo&aacute;y kh&oacute; nhằn. Quai đeo 1/2 cố định v&agrave; chắc chắn tiếp th&ecirc;m tự tin trong l&uacute;c tập luyện. Sản phẩm n&agrave;y c&oacute; chứa tối thiểu 50% hỗn hợp chất liệu t&aacute;i chế v&agrave; c&oacute; thể t&aacute;i tạo.</p>\r\n\r\n<p>&nbsp;</p>', 'Nhà cung cấp: ADIDAS  SKU: IA0874-7', '2023-08-14 07:17:31', '2023-08-16 07:19:08', '3'),
(9, 'VỚ KAMITO TRẮNG/XANH DƯƠNG', 'vo-kamito-trangxanh-duong', '6', '45,000₫', 'storage/accessory/VỚ KAMITO TRẮNG/XANH DƯƠNG701692195462.webp', 0, '<p>Tất mỏng Kamito dệt kim với chất liệu Cotton cao cấp gi&uacute;p người đi lu&ocirc;n cảm thấy kh&ocirc; tho&aacute;ng, kh&ocirc;ng bị b&iacute; v&agrave; kh&ocirc;ng tạo m&ugrave;i kh&oacute; chịu khi đi thời gian d&agrave;i.</p>\r\n\r\n<p>Tất mỏng Kamito được thiết kế với cổ tất c&oacute; đường viền m&agrave;u xanh/ đỏ v&agrave; những đường kẻ ngang tạo n&ecirc;n điểm nhấn ấn tượng cho tổng thể thiết kế.</p>\r\n\r\n<p>Cổ tất v&agrave; bề mặt tất mỏng Kamito được l&agrave;m từ chất liệu Spandex co gi&atilde;n rất tốt, độ bền cao, lu&ocirc;n &ocirc;m s&aacute;t v&agrave; kh&ocirc;ng bị d&atilde;o sau thời gian d&agrave;i sử dụng.</p>\r\n\r\n<p>Tất mỏng Kamito th&iacute;ch hợp cho những người đi mong muốn c&oacute; cảm gi&aacute;c thật ch&acirc;n, nhẹ nh&agrave;ng trong từng bước di chuyển.</p>', 'Nhà cung cấp: KAMITO  SKU: KMVS19026A', '2023-08-14 07:19:44', '2023-08-16 07:17:42', '1'),
(10, 'PACK 3 ĐÔI VỚ NIKE EVERYDAY PLUS CUSHIONED CREW', 'pack-3-doi-vo-nike-everyday-plus-cushioned-crew', '1', '539,000₫', 'storage/accessory/PACK 3 ĐÔI VỚ NIKE EVERYDAY PLUS CUSHIONED CREW2211692195413.webp', 0, '<p>Vớ c&oacute; đệm của Nike Everyday Plus mang lại sự thoải m&aacute;i cho cả ng&agrave;y của bạn với lớp đệm bổ sung dưới g&oacute;t ch&acirc;n v&agrave; b&agrave;n ch&acirc;n trước v&agrave; một dải v&ograve;m vừa vặn, hỗ trợ. Khả năng thấm mồ h&ocirc;i v&agrave; khả năng tho&aacute;ng kh&iacute; ở phần tr&ecirc;n gi&uacute;p giữ cho b&agrave;n ch&acirc;n của bạn kh&ocirc; r&aacute;o v&agrave; m&aacute;t mẻ để gi&uacute;p bạn vượt qua tập luyện bổ sung đ&oacute;.</p>\r\n\r\n<p>C&ocirc;ng nghệ tr&ecirc;n&nbsp;<strong>Pack 3 đ&ocirc;i vớ Nike Everyday Plus Cushioned Crew</strong></p>\r\n\r\n<ul>\r\n	<li>Đệm dưới b&agrave;n ch&acirc;n trước v&agrave; g&oacute;t ch&acirc;n gi&uacute;p l&agrave;m dịu t&aacute;c động của việc tập luyện của bạn.</li>\r\n	<li>C&ocirc;ng nghệ Dri-FIT gi&uacute;p ch&acirc;n bạn lu&ocirc;n kh&ocirc; r&aacute;o v&agrave; thoải m&aacute;i.</li>\r\n	<li>Dải xung quanh v&ograve;m tạo cảm gi&aacute;c vừa vặn v&agrave; hỗ trợ.</li>\r\n	<li>Mẫu dệt kim tho&aacute;ng kh&iacute; tr&ecirc;n đầu tăng th&ecirc;m sự th&ocirc;ng tho&aacute;ng.</li>\r\n	<li>G&oacute;t ch&acirc;n v&agrave; ng&oacute;n ch&acirc;n gia cố được l&agrave;m để k&eacute;o d&agrave;i.</li>\r\n</ul>', 'Nhà cung cấp: NIKE', '2023-08-14 07:20:41', '2023-08-16 07:16:53', '1'),
(11, 'VỚ BÓNG ĐÁ ADIDAS FOOTBALL SOCKS MILANO 16 WHITE', 'vo-bong-da-adidas-football-socks-milano-16-white', '2', '300,000', 'storage/accessory/VỚ BÓNG ĐÁ ADIDAS FOOTBALL SOCKS MILANO 16 WHITE8361692195370.webp', 0, '<p>Trong b&oacute;ng đ&aacute;, từng phần của trang phục đều rất quan trọng, bao gồm cả đ&ocirc;i tất dưới ch&acirc;n bạn. H&atilde;y g&acirc;y ấn tượng với đ&ocirc;i tất đầu gối nam n&agrave;y, kết hợp đệm l&oacute;t bố tr&iacute; hợp l&yacute; v&agrave; c&aacute;c mảng phối lưới tho&aacute;ng kh&iacute;.</p>\r\n\r\n<p><strong>Vớ b&oacute;ng đ&aacute; Adidas Football Socks Milano 16 White</strong>&nbsp;l&agrave; mẫu vớ ch&iacute;nh h&atilde;ng của Adidas được&nbsp;l&agrave;m bằng chất liệu&nbsp;99% nylon v&agrave;&nbsp;1% elastane. Về thiết kế, phần cổ ch&acirc;n, v&ograve;m b&agrave;n ch&acirc;n v&agrave; viền tất c&oacute; g&acirc;n sọc. Ngo&agrave;i ra, đệm l&oacute;t được bố tr&iacute; theo h&igrave;nh d&aacute;ng b&agrave;n ch&acirc;n để n&acirc;ng đỡ,&nbsp;bảo vệ c&aacute;c v&ugrave;ng chịu nhiều &aacute;p lực v&agrave; c&aacute;c mảng phối lưới tho&aacute;ng kh&iacute; gi&uacute;p cho người chơi lu&ocirc;n thoải m&aacute;i khi mang v&agrave;o.</p>', 'Nhà cung cấp: ADIDAS  SKU: AJ5905-S', '2023-08-14 07:22:11', '2023-08-16 07:16:10', '1'),
(12, 'ÁO BÓNG ĐÁ CHÍNH HÃNG MANCHESTER UNITED SÂN NHÀ 2023/24', 'ao-bong-da-chinh-hang-manchester-united-san-nha-202324', '1', '2,200,000', 'storage/accessory/ÁO BÓNG ĐÁ CHÍNH HÃNG MANCHESTER UNITED SÂN NHÀ 2023/247211692033101.webp', 0, '<p>Đậm chất CLB, đậm chất th&agrave;nh phố. Tự h&agrave;o diện m&agrave;u &aacute;o y&ecirc;u th&iacute;ch của đội b&oacute;ng của bạn với chiếc &Aacute;o Đấu S&acirc;n Nh&agrave; Manchester United 23/24. Chiếc &aacute;o đấu n&agrave;y h&igrave;nh th&agrave;nh mối li&ecirc;n kết vững chắc với sức ảnh hưởng l&acirc;u bền của Manchester tr&ecirc;n to&agrave;n cầu. Vay mượn c&aacute;c yếu tố thiết kế từ một c&acirc;y cầu gần thời C&aacute;ch mạng c&ocirc;ng nghiệp, mặt trước &aacute;o phủ họa tiết h&igrave;nh học lấy cảm hứng từ Hoa Hồng Lancashire. C&ocirc;ng nghệ AEROREADY đ&aacute;nh bay mồ h&ocirc;i v&agrave; c&aacute;c chi tiết đội tuyển si&ecirc;u nhẹ ph&ugrave; hợp với s&acirc;n cỏ &mdash;&nbsp;bất kể bạn chuẩn bị thi đấu quốc tế hay đ&aacute; giao hữu đội h&igrave;nh s&acirc;n 5.</p>\r\n\r\n<p>&nbsp;</p>', 'Nhà cung cấp: ADIDAS  SKU: IP1726-XS', '2023-08-14 07:23:33', '2023-08-14 10:11:41', '2'),
(13, 'ÁO BÓNG ĐÁ CHÍNH HÃNG PARIS SAINT GERMAIN SÂN KHÁCH 2022/23', 'ao-bong-da-chinh-hang-paris-saint-germain-san-khach-202223', '3', '1755000', 'storage/accessory/ÁO BÓNG ĐÁ CHÍNH HÃNG PARIS SAINT GERMAIN SÂN KHÁCH 2022/233411692624481.webp', 0, '<p>Th&aacute;ng 7 vừa qua,&nbsp;<a href=\"https://neymarsport.com/products/ao-bong-da-chinh-hang-paris-saint-germain-san-khach-2022-23\">Paris Saint-Germain</a>&nbsp;(PSG) đ&atilde; c&oacute; khởi đầu đầy thắng lợi trước đương kim v&ocirc; địch J-League Kawasaki Frontale tại S&acirc;n vận động Quốc gia Tokyo trong bộ đồ &aacute;o đấu từ Jordan. Thiết kế&nbsp;<a href=\"https://neymarsport.com/products/ao-bong-da-chinh-hang-paris-saint-germain-san-khach-2022-23\">&aacute;o b&oacute;ng đ&aacute; s&acirc;n kh&aacute;ch</a>&nbsp;lần n&agrave;y với mục đ&iacute;ch t&ocirc;n vinh s&acirc;n vận động Parc des Princes huyền thoại, nơi kỷ niệm 50 năm th&agrave;nh lập v&agrave; nơi PSG đ&atilde; thi đấu 1.147 trận đấu cho đến nay.</p>\r\n\r\n<p><strong>&Aacute;o b&oacute;ng đ&aacute; ch&iacute;nh h&atilde;ng Paris Saint Germain s&acirc;n kh&aacute;ch 2022/23&nbsp;</strong>l&agrave;&nbsp;phi&ecirc;n bản &aacute;o b&oacute;ng đ&aacute; ch&iacute;nh h&atilde;ng Fan s&acirc;n kh&aacute;ch của PSG.&nbsp;Chiếc &aacute;o được in theo phong c&aacute;ch của VERDY, gam m&agrave;u trắng l&agrave;m chủ đạo được điểm th&ecirc;m một số chi tiết m&agrave;u đen. Mẫu &aacute;o n&agrave;y vẫn giữ họa tiết đường kẻ sọc k&eacute;o d&agrave;i từ phần cổ xuống đến phần đu&ocirc;i &aacute;o, hiệu ứng chuyển m&agrave;u mờ dần về ph&iacute;a trung t&acirc;m. Cổ &aacute;o c&oacute; một n&uacute;t duy nhất tạo điểm nhấn cho thiết kế. Tất cả tạo n&ecirc;n một si&ecirc;u phẩm được kết hợp bởi PSG v&agrave; Jordan.&nbsp;</p>', 'Nhà cung cấp: NIKE  SKU: DJ7682-078-S', '2023-08-14 07:24:38', '2023-08-21 06:28:01', '2'),
(14, 'ÁO BÓNG ĐÁ CHÍNH HÃNG CHELSEA SÂN KHÁCH 2022/23', 'ao-bong-da-chinh-hang-chelsea-san-khach-202223', '1', '2169000', 'storage/accessory/ÁO BÓNG ĐÁ CHÍNH HÃNG CHELSEA SÂN KHÁCH 2022/233701692624419.webp', 0, '<p><strong>&Aacute;o b&oacute;ng đ&aacute; ch&iacute;nh h&atilde;ng Chelsea s&acirc;n kh&aacute;ch 2022/23&nbsp;</strong>l&agrave;&nbsp;phi&ecirc;n bản &aacute;o b&oacute;ng đ&aacute; ch&iacute;nh h&atilde;ng Fan s&acirc;n kh&aacute;ch của Chelsea.&nbsp;Được Nike thiết kế với gam m&agrave;u White/Chlorine Blue/College Navy, lấy t&ocirc;ng m&agrave;u trắng l&agrave;m chủ đạo v&agrave; College Navy in sọc ngang k&egrave;m theo c&ugrave;ng một họa tiết độc đ&aacute;o tạo n&ecirc;n điểm nhấn thu h&uacute;t. Phần th&acirc;n &aacute;o đấu được thiết kế kh&aacute;c so với phần ống tay v&agrave; cổ &aacute;o, tạo n&ecirc;n sự t&aacute;ch biệt v&ocirc; c&ugrave;ng th&uacute; vị v&agrave; mới lạ.&nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ngo&agrave;i ra, huy hiệu của c&acirc;u lạc bộ Chelsea FC nằm b&ecirc;n ngực tr&aacute;i đ&atilde; được đổi m&agrave;u trong phi&ecirc;n bản &aacute;o b&oacute;ng đ&aacute; lần n&agrave;y. Cuối c&ugrave;ng chiếc &aacute;o n&agrave;y được ho&agrave;n thiện với biểu tượng Swoosh nh&agrave; Nike nằm vị tr&iacute; đối xứng b&ecirc;n ngực phải v&agrave; d&ograve;ng chữ Chelsea FC - London được in tr&ecirc;n cổ b&ecirc;n trong &aacute;o thi đấu s&acirc;n kh&aacute;ch Nike Chelsea 2022-23.</p>', 'Nhà cung cấp: NIKE  SKU: DM1834-101-XS', '2023-08-14 07:25:41', '2023-08-21 06:26:59', '2'),
(16, 'TÚI GYMSACK KAMITO TA11 WONCUP', 'tui-gymsack-kamito-ta11-woncup', '6', '35000', 'storage/accessory/TÚI GYMSACK KAMITO TA11 WONCUP6501692624342.webp', 0, '<p>chưa c&oacute; m&ocirc; tả cho sản phẩm n&agrave;y</p>', 'Nhà cung cấp: KAMITO  SKU: KMPTUI220140', '2023-08-14 07:27:55', '2023-08-21 06:25:42', '5');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ducanhvip', 'd@gmail.com', NULL, '123123123', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `img1` varchar(255) DEFAULT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banners`
--

INSERT INTO `banners` (`id`, `img`, `img1`, `img2`, `created_at`, `updated_at`) VALUES
(7, 'storage/banner/5111692512302.webp', 'storage/banner/3601692512302.webp', 'storage/banner/5461692512302.webp', '2023-08-19 23:14:12', '2023-08-19 23:18:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `depscription` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `slug`, `img`, `depscription`, `content`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'MANCHESTER UNITED GIA HẠN HỢP ĐỒNG VỚI ADIDAS ĐẾN NĂM 2035 - GIÁ TRỊ HỢP ĐỒNG KỶ LỤC VƯỢT QUA BARCELONA VÀ REAL MADRID', 'manchester-united-gia-han-hop-dong-voi-adidas-den-nam-2035-gia-tri-hop-dong-ky-luc-vuot-qua-barcelona-va-real-madrid', 'storage/blog/MANCHESTER UNITED GIA HẠN HỢP ĐỒNG VỚI ADIDAS ĐẾN NĂM 2035 - GIÁ TRỊ HỢP ĐỒNG KỶ LỤC VƯỢT QUA BARCELONA VÀ REAL MADRID971691819846.webp', '<p>Mới đ&acirc;y, Manchester United đ&atilde; c&ocirc;ng bố th&ocirc;ng tin ch&iacute;nh thức về việc gia hạn hợp đồng v&agrave; mở rộng hợp t&aacute;c với thương hiệu Adidas trong một thỏa thuận</p>\r\n\r\n<p>c&oacute; gi&aacute; trị l&ecirc;n tới 900 triệu bảng anh - ph&aacute; vỡ kỷ lục từ trước đến nay.</p>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/ckfinder/uploads/images/mu1.webp\" style=\"height:650px; width:900px\" /></p>\r\n\r\n<p>Adidas sẽ sản xuất trang phục thi đấu cho Manchester United đến &iacute;t nhất l&agrave; năm 2035</p>\r\n\r\n<p>Được coi l&agrave; đội b&oacute;ng đứng đầu thế giới về mặt kinh tế, hợp đồng sản xuất trang phục thi đấu Manchester United x Adidas 2035 c&oacute; trị gi&aacute; &quot;&iacute;t nhất&quot; 900</p>\r\n\r\n<p>triệu bảng (90 triệu bảng/m&ugrave;a giải), c&oacute; thời hạn 10 năm kể từ 2025 đến 2035.&nbsp;</p>\r\n\r\n<p>Richard Arnold - Gi&aacute;m đốc điều h&agrave;nh của Manchester United đ&atilde; chia sẻ tr&ecirc;n trang Manutd.com: &ldquo;Sự hợp t&aacute;c giữa Manchester United v&agrave; Adidas l&agrave; một</p>\r\n\r\n<p>mối quan hệ hợp t&aacute;c mang t&iacute;nh biểu tượng nhất trong thể thao thế giới, điều n&agrave;y được h&igrave;nh từ những cam kết chung về phong c&aacute;ch, sự tinh tế v&agrave; yếu tố</p>\r\n\r\n<p>quan trọng nhất l&agrave; hiệu suất cao&quot;.</p>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/ckfinder/uploads/images/mu2.webp\" style=\"height:506px; width:900px\" /></p>\r\n\r\n<p>Thỏa thuận mới n&agrave;y chắc chắn sẽ đem lại nguồn doanh thu si&ecirc;u khủng cho Man Utd trong 10 năm tới. Đ&acirc;y sẽ l&agrave; bước đệm để họ củng cố t&agrave;i ch&iacute;nh v&agrave; giữ</p>\r\n\r\n<p>vững sự ph&aacute;t triển mạnh mẽ cho CLB, bao gồm cả việc mua về những ng&ocirc;i sao b&oacute;ng đ&aacute; chất lượng h&agrave;ng đầu.</p>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/ckfinder/uploads/images/mu3.webp\" style=\"height:567px; width:850px\" /></p>\r\n\r\n<p>Lời kết:</p>\r\n\r\n<p>Người h&acirc;m mộ Manchester United cũng đang hy vọng CLB sẽ tạo ra nhiều bất ngờ v&agrave; đạt được những th&agrave;nh t&iacute;ch mới trong thời gian tới khi đứng dưới thời</p>\r\n\r\n<p>của HLV Erik Ten Hag. Nếu Quỷ đỏ c&oacute; được cho m&igrave;nh những chiến t&iacute;ch nổi trội, chắc chắn họ sẽ c&oacute; th&ecirc;m sự đầu tư từ Adidas v&agrave; cơ hội sở hữu th&ecirc;m nhiều</p>\r\n\r\n<p>bản hợp đồng chuyển nhượng (mua cầu thủ) &ldquo;khủng&rdquo; trong tương lai l&agrave; điều c&oacute; thể xảy ra.</p>\r\n\r\n<div class=\"ddict_btn\" style=\"top: 59px; left: 897.719px;\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>', 'Mới đây, Manchester United đã công bố thông tin chính thức về việc gia hạn hợp đồng và mở rộng hợp tác với thương hiệu Adidas trong một thỏa thuận  có giá trị lên tới 900 triệu bảng anh - phá vỡ kỷ lục từ trước đến nay.', '12 comment', '2023-08-11 21:37:06', '2023-08-11 22:57:26'),
(2, 'CẬN CẢNH MẪU GIÀY ĐÁ BANH UNDER ARMOUR MỚI NHẤT MANG TÊN THE CLONE MAGNETICO 3.0', 'can-canh-mau-giay-da-banh-under-armour-moi-nhat-mang-ten-the-clone-magnetico-30', 'storage/blog/CẬN CẢNH MẪU GIÀY ĐÁ BANH UNDER ARMOUR MỚI NHẤT MANG TÊN THE CLONE MAGNETICO 3.05801691819741.webp', '<p>Under Armour l&agrave; một nh&atilde;n h&agrave;ng thể thao của Mỹ đang nhận được nhiều sự ch&uacute; &yacute; gần đ&acirc;y. Mặc d&ugrave; chưa đủ để so s&aacute;nh với nhiều thương hiệu lớn kh&aacute;c</p>\r\n\r\n<p>như&nbsp;<a href=\"https://neymarsport.com/collections/giay-da-banh-nike\">Nike</a>,&nbsp;<a href=\"https://neymarsport.com/collections/giay-da-banh-adidas\">Adidas</a>&nbsp;hay&nbsp;<a href=\"https://neymarsport.com/collections/giay-da-banh-puma\">Puma</a>, nhưng Under Armour vẫn đ&aacute;ng được ghi nhận nhờ sự nỗ lực&nbsp; ph&aacute;t h&agrave;nh li&ecirc;n tục những sản phẩm gi&agrave;y đ&aacute; banh chất</p>\r\n\r\n<p>lượng tốt, đặc biệt phải kể đến The Clone Magnetico 3.0</p>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/ckfinder/uploads/images/giay11.webp\" style=\"height:516px; width:900px\" /></p>\r\n\r\n<h2>Giới thiệu 2 mẫu gi&agrave;y Under Armour The Clone Magnetico thế hệ 3.0&nbsp;</h2>\r\n\r\n<p>S&aacute;ng tạo hơn so với thế hệ 2.0, Under Armour The Clone Magnetico 3.0 c&oacute; thiết kế bứt ph&aacute; hơn nhờ &yacute; tưởng phối m&agrave;u th&agrave;nh 2 phi&ecirc;n bản ho&agrave;n to&agrave;n</p>\r\n\r\n<p>tr&aacute;i ngược nhau: Đỏ - Đen, tượng trưng cho 2 phong c&aacute;ch chơi b&oacute;ng kh&aacute;c biệt: Tốc độ, đột ph&aacute; (đỏ) - Ph&ograve;ng ngự, kiểm so&aacute;t (đen).</p>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/ckfinder/uploads/images/giay12.webp\" style=\"height:516px; width:900px\" /></p>\r\n\r\n<h2>C&ocirc;ng nghệ của gi&agrave;y đ&aacute; banh Under Armour The Clone Magnetico 3.0</h2>\r\n\r\n<p>Gi&agrave;y đ&aacute; banh Under Armour The Clone Magnetico 3.0 được tạo ra từ chất liệu da tổng hợp, mỏng nhẹ. Kế thừa Under Armour The Clone</p>\r\n\r\n<p>Magnetico 2, phi&ecirc;n bản 3.0 đ&atilde; c&oacute; sự cải tiến đ&aacute;ng kể với c&ocirc;ng nghệ UA Clone được bổ sung th&ecirc;m bởi một lớp b&ecirc;n trong bằng chất liệu</p>\r\n\r\n<p>đệm đảm bảo mang lại độ &ecirc;m &aacute;i v&agrave; tăng cảm gi&aacute;c b&oacute;ng cho người chơi.</p>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/ckfinder/uploads/images/giay13.webp\" style=\"height:1232px; width:850px\" /></p>\r\n\r\n<p>Phần upper thiết kế bề mặt lượn s&oacute;ng với c&aacute;c đường may kh&eacute;o l&eacute;o v&agrave; d&agrave;y đặc hỗ trợ tối đa độ b&aacute;m khi chạm b&oacute;ng.</p>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/ckfinder/uploads/images/giay14.webp\" style=\"height:1232px; width:850px\" /></p>\r\n\r\n<p>Lời kết: Trong khi c&aacute;c nh&atilde;n h&agrave;ng thời trang b&oacute;ng đ&aacute; lớn li&ecirc;n tục tung ra những si&ecirc;u phẩm gi&agrave;y đ&aacute; banh th&igrave; hiện tại c&oacute; thể n&oacute;i Under Armour chưa được ch&uacute; &yacute;</p>\r\n\r\n<p>nhiều tr&ecirc;n thị trường. Tuy nhi&ecirc;n, với c&aacute;c phi&ecirc;n bản gi&agrave;y đ&aacute; banh được cải tiến cả về mặt thiết kế v&agrave; c&ocirc;ng nghệ như The Clone Magnetico 3.0, chắc chắn</p>\r\n\r\n<p>một ng&agrave;y kh&ocirc;ng xa, Under Armour sẽ được nhiều người nhắc đến.</p>\r\n\r\n<div class=\"ddict_btn\" style=\"top: 83px; left: 1875px;\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>', 'Under Armour là một nhãn hàng thể thao của Mỹ đang nhận được nhiều sự chú ý gần đây. Mặc dù chưa đủ để so sánh với nhiều thương hiệu lớn khác  như Nike, Adidas hay Puma, nhưng Under Armour vẫn đáng được ghi nhận nhờ sự nỗ lực  phát hành liên tục những sản phẩm giày đá banh chất  lượng tốt, đặc biệt phải kể đến The Clone Magnetico 3.0', '20 comment', '2023-08-11 22:03:48', '2023-08-11 22:55:41'),
(3, 'ADIDAS CHÍNH THỨC PHÁT HÀNH QUẢ BÓNG THI ĐẤU CHO MÙA GIẢI CHAMPIONS LEAGUE 2024', 'adidas-chinh-thuc-phat-hanh-qua-bong-thi-dau-cho-mua-giai-champions-league-2024', 'storage/blog/ADIDAS CHÍNH THỨC PHÁT HÀNH QUẢ BÓNG THI ĐẤU CHO MÙA GIẢI CHAMPIONS LEAGUE 20244461691819581.jpg', '<p>Mới đ&acirc;y, tr&ecirc;n trang&nbsp;<em>ESPN United Kingdom</em>, những h&igrave;nh ảnh đầu ti&ecirc;n của&nbsp;<strong>quả b&oacute;ng thi đấu</strong>&nbsp;<strong>adidas Champions League 2024 Pro Match Ball</strong>&nbsp;sẽ được d&ugrave;ng</p>\r\n\r\n<p>trong m&ugrave;a giải Champions League 23-24 đ&atilde; ch&iacute;nh thức được h&eacute; lộ.&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<img alt=\"\" src=\"http://127.0.0.1:8000/ckfinder/uploads/images/img/bong1.jpg\" /></p>\r\n\r\n<h2><strong>Giới thiệu quả b&oacute;ng adidas Champions League 2024 Pro Match Ball</strong></h2>\r\n\r\n<p>Lấy cảm hứng từ những quả b&oacute;ng Champions League cổ điển nhất ở đầu những năm 2000, lần n&agrave;y thương hiệu adidas hạn chế sử dụng họa tiết</p>\r\n\r\n<p>m&agrave;u sắc rực rỡ m&agrave; thay v&agrave;o đ&oacute; lựa chọn c&aacute;c hiệu ứng đồ họa tối giản cho việc thiết kế ra Pro Match Ball 2024. Cụ thể, tr&ecirc;n nền gam m&agrave;u trắng,</p>\r\n\r\n<p>c&aacute;c biểu tượng ng&ocirc;i sao được sắp xếp tỉ mỉ, xen kẽ với nhau; kết hợp với dải m&agrave;u x&aacute;m trầm c&ugrave;ng c&aacute;c đường viền m&agrave;u n&oacute;ng (hồng, đỏ) tr&ecirc;n</p>\r\n\r\n<p>c&aacute;nh sao, tạo ra vẻ ngo&agrave;i độc đ&aacute;o v&agrave; ấn tượng.&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/ckfinder/uploads/images/img/bong11.webp\" style=\"height:442px; width:900px\" /></p>\r\n\r\n<h2><strong>C&ocirc;ng nghệ của quả b&oacute;ng adidas Champions League 2024 Pro Match Ball</strong></h2>\r\n\r\n<p>Về mặt c&ocirc;ng nghệ,&nbsp;<a href=\"https://neymarsport.com/products/bong-da-adidas-football-champions-league-2024-pro-match-ball-white-blue-silver?gclid=Cj0KCQjwiIOmBhDjARIsAP6YhSXQ0ElJ2zLY4L6UkWZkbH6Fkz1wep7xEqyuQ1AQ7Thx7qQ7lmhyl74aAvrmEALw_wcB\">quả b&oacute;ng adidas Champions League 2024 Pro Match Ball</a>&nbsp;tương tự như những&nbsp;<a href=\"https://neymarsport.com/collections/bong-da\">quả b&oacute;ng thi đấu</a>&nbsp;được ph&aacute;t h&agrave;nh cho c&aacute;c m&ugrave;a giải trước đ&oacute;:</p>\r\n\r\n<p>-&nbsp;<strong>C&ocirc;ng nghệ nhiệt nối gh&eacute;p bề mặt</strong>: adidas Champions League 2024 Pro Match Ball được thiết kế với c&ocirc;ng nghệ hiện đại tạo ra bề mặt b&oacute;ng kh&ocirc;ng đường</p>\r\n\r\n<p>may hạn chế thấm nước, đặc biệt hỗ trợ cho c&aacute;c cầu thủ s&uacute;t b&oacute;ng đi theo đ&uacute;ng quỹ đạo hơn</p>\r\n\r\n<p>- Pro Match Ball sử dụng&nbsp;<strong>da PU si&ecirc;u bền</strong>&nbsp;giảm ma s&aacute;t v&agrave; b&agrave;o m&ograve;n bề mặt trong qu&aacute; tr&igrave;nh thi đấu.</p>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/ckfinder/uploads/images/img/bong12.webp\" style=\"height:448px; width:900px\" /></p>\r\n\r\n<p>- Ruột b&oacute;ng:&nbsp;<strong>Cao su non tự nhi&ecirc;n Latex&nbsp;</strong>c&oacute; ưu điểm mềm v&agrave; &ecirc;m, đảm bảo ch&acirc;n cầu thủ cảm thấy thoải m&aacute;i khi tiếp x&uacute;c b&oacute;ng.</p>\r\n\r\n<p>-&nbsp;<strong>C&ocirc;ng nghệ ACENTEC</strong>&nbsp;c&oacute; khả năng tự động l&agrave;m cho bề mặt b&oacute;ng tr&ograve;n, đ&uacute;ng form ti&ecirc;u chuẩn nhất</p>\r\n\r\n<p>- Đặc biệt, quả b&oacute;ng adidas Champions League 2024 Pro Match Ball c&oacute; chu vi, c&acirc;n nặng, độ nảy v&agrave; độ thấm nước đạt chuẩn theo c&aacute;c ti&ecirc;u ch&iacute; đ&aacute;nh gi&aacute;</p>\r\n\r\n<p>của&nbsp;<strong>FIFA Quality Pro.</strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"http://127.0.0.1:8000/ckfinder/uploads/images/img/bong13.webp\" style=\"height:446px; width:900px\" /></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lời kết:&nbsp;</p>\r\n\r\n<p>Champions League lu&ocirc;n l&agrave; một trong những m&ugrave;a giải được mong chờ nhất bởi c&oacute; sự g&oacute;p mặt của nhiều ng&ocirc;i sao b&oacute;ng đ&aacute; nổi tiếng, hứa hẹn sẽ c&oacute; nhiều</p>\r\n\r\n<p>b&agrave;n thắng đẹp mắt c&ugrave;ng quả b&oacute;ng adidas Champions League 2024 Pro Match Ball, h&atilde;y c&ugrave;ng chờ đ&oacute;n nh&eacute;!</p>', 'Mới đây, trên trang ESPN United Kingdom, những hình ảnh đầu tiên của quả bóng thi đấu adidas Champions League 2024 Pro Match Ball sẽ được dùng  trong mùa giải Champions League 23-24 đã chính thức được hé lộ.', '34 comment', '2023-08-11 22:31:02', '2023-08-11 22:53:01'),
(4, 'ADIDAS BẤT NGỜ TRÌNH LÀNG 3 PHIÊN BẢN GIÀY ĐÁ BANH X CRAZYFAST ĐẶC BIỆT', 'adidas-bat-ngo-trinh-lang-3-phien-ban-giay-da-banh-x-crazyfast-dac-biet', 'storage/blog/ADIDAS BẤT NGỜ TRÌNH LÀNG 3 PHIÊN BẢN GIÀY ĐÁ BANH X CRAZYFAST ĐẶC BIỆT7701691820220.jpg', '<p><strong>Adidas</strong> vừa ch&iacute;nh thức ra mắt si&ecirc;u phẩm mới nhất: <strong>X Crazyfast.</strong> Đ&acirc;y kh&ocirc;ng chỉ l&agrave; một sự ph&aacute;t triển mới mẻ trong d&ograve;ng gi&agrave;y X, m&agrave; c&ograve;n l&agrave; một minh chứng</p>\r\n\r\n<p>cho sự đột ph&aacute; về c&ocirc;ng nghệ, nhằm mang đến cho người chơi khả năng ph&aacute;t huy hết tốc độ tối đa trong mọi t&igrave;nh huống tr&ecirc;n s&acirc;n. <strong>X Crazyfast</strong> khởi đầu</p>\r\n\r\n<p>cho &#39;Crazyrush Pack&#39; - bộ sưu tập gi&agrave;y thể thao ho&agrave;n to&agrave;n mới của Adidas, bao gồm ba mẫu gi&agrave;y với những t&iacute;nh năng v&agrave; c&ocirc;ng nghệ &#39;AERO&#39; độc đ&aacute;o.&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/ckfinder/uploads/images/img/att.jpg\" style=\"height:516px; width:900px\" /></p>\r\n\r\n<h2>X Crazyfast - Thiết kế mang phong c&aacute;ch tối giản&nbsp;</h2>\r\n\r\n<p><a href=\"https://neymarsport.com/collections/giay-da-banh-adidas\">Adidas</a> X Crazyfast được thiết kế với ba phi&ecirc;n bản: X Crazyfast+, X Crazyfast c&oacute; d&acirc;y v&agrave; kh&ocirc;ng d&acirc;y .1. Tất cả c&aacute;c silo đều được phối với ba m&agrave;u chủ đạo</p>\r\n\r\n<p>ch&iacute;nh: trắng, v&agrave;ng chanh v&agrave; m&agrave;u đen được d&ugrave;ng l&agrave;m điểm nhấn cho logo 3 sọc.&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/ckfinder/uploads/images/img/att1.webp\" style=\"height:516px; width:900px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Tuy nhi&ecirc;n, mỗi mẫu đều mang một phong c&aacute;ch v&agrave; t&iacute;nh năng ri&ecirc;ng. Điểm đặc biệt l&agrave; X Crazyfast+ - mẫu gi&agrave;y nhẹ nhất, được coi l&agrave; đỉnh cao của sự s&aacute;ng</p>\r\n\r\n<p>tạo. Hai mẫu c&ograve;n lại, X Crazyfast&nbsp; .1 c&oacute; d&acirc;y v&agrave; kh&ocirc;ng d&acirc;y đều được t&iacute;ch hợp c&aacute;c c&ocirc;ng nghệ ti&ecirc;n tiến nhằm mục đ&iacute;ch tối giản trọng lượng, nhẹ nh&agrave;ng khi</p>\r\n\r\n<p>mang hơn v&agrave; ph&ugrave; hợp với mọi cầu thủ b&oacute;ng đ&aacute; ở tất cả c&aacute;c tr&igrave;nh độ chơi b&oacute;ng kh&aacute;c nhau.</p>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/ckfinder/uploads/images/img/att2.webp\" style=\"height:516px; width:900px\" /></p>\r\n\r\n<h2>Đột ph&aacute; vượt bậc về c&ocirc;ng nghệ của gi&agrave;y đ&aacute; banh Adidas X Crazyfast&nbsp;</h2>\r\n\r\n<p>Một trong những điểm nổi bật của <a href=\"https://neymarsport.com/collections/adidas-x\">gi&agrave;y đ&aacute; banh X</a> Crazyfast ch&iacute;nh l&agrave; c&ocirc;ng nghệ đế gi&agrave;y SPEEDFRAME s&aacute;ng tạo của Adidas, đ&atilde; được ứng dụng trong phi&ecirc;n</p>\r\n\r\n<p>bản lần n&agrave;y. SPEEDFRAME kết hợp c&ugrave;ng miếng AEROPLATE thay thế phi&ecirc;n bản carbon trước đ&oacute;, gi&uacute;p giảm trọng lượng tổng thể của đế gi&agrave;y xuống c&ograve;n 5g.</p>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/ckfinder/uploads/images/img/att4.webp\" style=\"height:516px; width:900px\" /></p>\r\n\r\n<p>Những cải tiến đặc biệt kh&aacute;c bao gồm c&ocirc;ng nghệ Aerocage được trang bị tr&ecirc;n X Crazyfast .1 kh&ocirc;ng d&acirc;y v&agrave; c&oacute; d&acirc;y - một lớp l&oacute;t được thiết kế để cung cấp sự</p>\r\n\r\n<p>ổn định tối ưu bằng c&aacute;ch &ocirc;m s&aacute;t phần giữa ch&acirc;n. Ngo&agrave;i ra, X Crazyfast .1 c&ograve;n sở hữu AEROPACITY SPEEDSKIN - một lớp lưới đơn c&oacute; khả năng tho&aacute;ng</p>\r\n\r\n<p>kh&iacute;, tạo cảm gi&aacute;c thoải m&aacute;i cho đ&ocirc;i ch&acirc;n của người chơi hơn bao giờ hết.</p>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/ckfinder/uploads/images/img/att5.webp\" style=\"height:516px; width:900px\" /></p>\r\n\r\n<p>Lời kết: X Crazyfast kh&ocirc;ng chỉ thể hiện được sự đổi mới vượt bậc trong thiết kế m&agrave; c&ograve;n đ&aacute;nh dấu bước tiến mạnh mẽ trong việc ứng dụng nhiều c&ocirc;ng nghệ</p>\r\n\r\n<p>mới v&agrave; hiện đại v&agrave;o gi&agrave;y đ&aacute; banh. Với 3 phi&ecirc;n bản X Crazyfast, <a href=\"https://neymarsport.com/collections/giay-da-banh-adidas\">adidas</a> đảm bảo sẽ mang lại nhiều lựa chọn hơn cho người chơi, gi&uacute;p họ tận dụng tối đa</p>\r\n\r\n<p>khả năng v&agrave; tối ưu h&oacute;a hiệu suất tr&ecirc;n s&acirc;n cỏ. X Crazyfast - ng&ocirc;i sao s&aacute;ng nhất giữa những d&ograve;ng gi&agrave;y tốc độ, chắc chắn sẽ trở th&agrave;nh mẫu gi&agrave;y được săn</p>\r\n\r\n<p>đ&oacute;n h&agrave;ng đầu với những t&iacute;n đồ gi&agrave;y đ&aacute; banh trong thời gian sắp tới.</p>\r\n\r\n<p>&nbsp;</p>', 'Adidas vừa chính thức ra mắt siêu phẩm mới nhất: X Crazyfast. Đây không chỉ là một sự phát triển mới mẻ trong dòng giày X, mà còn là một minh chứng cho sự đột phá về công nghệ, nhằm mang đến cho người chơi khả năng phát huy hết tốc độ tối đa trong mọi tình huống trên sân', '50 comment', '2023-08-11 23:03:40', '2023-08-11 23:03:40'),
(5, 'CHIÊM NGƯỠNG BST MỚI NHẤT CỦA NEW BALANCE MANG TÊN ‘OWN NOW’', 'chiem-nguong-bst-moi-nhat-cua-new-balance-mang-ten-own-now', 'storage/blog/CHIÊM NGƯỠNG BST MỚI NHẤT CỦA NEW BALANCE MANG TÊN ‘OWN NOW’5421691821339.jpg', '<p>Để bắt kịp c&ugrave;ng với sự s&ocirc;i động trước thềm World Cup Nữ 2023, New Balance đ&atilde; ch&iacute;nh thức ra mắt bộ sưu tập &#39;Own Now&#39;, mang đến một l&agrave;n gi&oacute; mới nhờ</p>\r\n\r\n<p>thiết kế đặc biệt ấn tượng v&agrave; thu h&uacute;t. Bộ sưu tập bao gồm gi&agrave;y đ&aacute; banh Furon v7, Tekela v4 (phi&ecirc;n bản cao cổ kh&ocirc;ng d&acirc;y v&agrave; phi&ecirc;n bản thấp cổ c&oacute; d&acirc;y),</p>\r\n\r\n<p>v&agrave; cuối c&ugrave;ng l&agrave; mẫu gi&agrave;y cổ điển 442.&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/ckfinder/uploads/images/img1/a2.jpg\" style=\"height:516px; width:900px\" /></p>\r\n\r\n<h2><strong>BST gi&agrave;y đ&aacute; banh &#39;Own Now&#39; mang hơi hướng m&agrave;u sắc cổ điển&nbsp;</strong></h2>\r\n\r\n<h3><strong>Gi&agrave;y đ&aacute; banh New Balance Tekela v4 - Giao diện ho&agrave;n to&agrave;n mới</strong></h3>\r\n\r\n<p>Đ&acirc;y l&agrave; lần đầu ti&ecirc;n New Balance giới thiệu Tekela v4 trong phi&ecirc;n bản thấp cổ truyền thống. Mẫu gi&agrave;y n&agrave;y tạo ấn tượng mạnh mẽ với gam m&agrave;u &quot;Đồng/Đen&quot;.</p>\r\n\r\n<p>M&agrave;u đồng l&agrave;m nền, tạo ra sự nổi bật cho logo v&agrave; c&aacute;c họa tiết h&igrave;nh học m&agrave;u đen, đặc biệt phần đồ họa được xử l&yacute; tỉ mỉ ở phần g&oacute;t gi&agrave;y. Logo &lsquo;N&rsquo; nằm tr&ecirc;n</p>\r\n\r\n<p>phần b&ecirc;n h&ocirc;ng mỗi đ&ocirc;i gi&agrave;y cũng được thực hiện một c&aacute;ch tinh xảo với những hiệu ứng gradient s&aacute;ng tạo.</p>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/ckfinder/uploads/images/img1/a21.jpg\" style=\"height:516px; width:900px\" /></p>\r\n\r\n<p>Gi&agrave;y đ&aacute; banh Tekela v4 vẫn sở hữu những c&ocirc;ng nghệ hiện đại nhất nh&agrave; NB:</p>\r\n\r\n<p>- Phần th&acirc;n gi&agrave;y c&oacute; kết cấu nhẹ v&agrave; tối giản, gi&uacute;p cầu thủ cảm nhận b&oacute;ng tốt hơn. Cổ gi&agrave;y được tạo từ chất liệu dệt kim 3D, thuận tiện khi mang v&agrave;o.&nbsp;</p>\r\n\r\n<p>- Phần mu b&agrave;n ch&acirc;n kh&ocirc;ng c&oacute; đường may, gi&uacute;p giảm &aacute;p lực v&agrave; kh&oacute;a cơ ch&acirc;n. Đế ngo&agrave;i nhẹ nh&agrave;ng được l&agrave;m từ nylon, k&egrave;m theo gai ở giữa b&agrave;n ch&acirc;n,</p>\r\n\r\n<p>cho ph&eacute;p di chuyển linh hoạt tr&ecirc;n s&acirc;n cỏ.</p>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/ckfinder/uploads/images/img1/a22.jpg\" style=\"height:516px; width:900px\" /></p>\r\n\r\n<h3><strong>Gi&agrave;y đ&aacute; banh New Balance Furon v7 - Tinh tế trong từng chi tiết</strong></h3>\r\n\r\n<p>Đ&ocirc;i gi&agrave;y đ&aacute; banh Furon v7 sở hữu m&agrave;u bạc cuốn h&uacute;t. Mặc d&ugrave; m&agrave;u bạc l&agrave; m&agrave;u chủ đạo, nhưng những chi tiết m&agrave;u đồng xuất hiện tr&ecirc;n logo tạo n&ecirc;n sự</p>\r\n\r\n<p>kết nối chặt chẽ cho to&agrave;n bộ bộ sưu tập. Mặc d&ugrave; Furon kh&ocirc;ng mang lại nhiều cải tiến về c&ocirc;ng nghệ, nhưng lại tạo dấu ấn mạnh mẽ bởi sự tinh tế&nbsp;</p>\r\n\r\n<p>trong thiết kế.</p>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/ckfinder/uploads/images/img1/a23.webp\" style=\"height:516px; width:900px\" /></p>\r\n\r\n<p>Về c&ocirc;ng nghệ phi&ecirc;n bản gi&agrave;y đ&aacute; b&oacute;ng New Balance Furon v7 sử dụng Hypoknit ti&ecirc;n tiến cho độ co gi&atilde;n vượt trội, gi&uacute;p di chuyển v&agrave; kiểm so&aacute;t b&oacute;ng tốt hơn.&nbsp;</p>\r\n\r\n<p>- Phần cổ gi&agrave;y dệt kim &ocirc;m s&aacute;t, tạo độ ổn định trong thời gian d&agrave;i thi đấu. Đế gi&agrave;y nylon đặc biệt hỗ trợ chevron stud đa hướng, linh hoạt tốc độ theo t&igrave;nh huống thi đấu.</p>\r\n\r\n<p>- Lưỡi gi&agrave;y 3D tăng diện t&iacute;ch tiếp x&uacute;c v&agrave; cải thiện khả năng b&aacute;m b&oacute;ng, hỗ trợ cho những đường b&oacute;ng chuẩn x&aacute;c.</p>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/ckfinder/uploads/images/img1/a24.webp\" style=\"height:1032px; width:712px\" /></p>\r\n\r\n<h3><strong>Gi&agrave;y đ&aacute; banh New Balance 442 - Thiết kế sang trọng, ấn tượng</strong></h3>\r\n\r\n<p>Theo g&oacute;t Furon, mẫu gi&agrave;y đ&aacute; banh 442 cũng được lấy m&agrave;u bạc l&agrave;m chủ đạo. Nhưng ở silo n&agrave;y m&agrave;u bạc được xử l&yacute; đậm hơn hỗ trợ cho c&aacute;c điểm nhấn m&agrave;u đồng</p>\r\n\r\n<p>sang trọng. Đặc biệt, phần th&acirc;n gi&agrave;y được chế t&aacute;c từ da cao cấp, mang lại cảm gi&aacute;c sang trọng v&agrave; vững chắc.</p>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/ckfinder/uploads/images/img1/a25.webp\" style=\"height:516px; width:900px\" /></p>\r\n\r\n<p><strong>Lời kết:</strong> Bộ sưu tập &quot;Own Now&quot; của New Balance kh&ocirc;ng chỉ đa dạng về mẫu m&atilde;, m&agrave; c&ograve;n thể hiện sự đ innova s&aacute;ng tạo v&agrave; tinh tế trong từng chi tiết thiết kế. Với sự</p>\r\n\r\n<p>kết hợp tinh tế giữa thiết kế độc đ&aacute;o v&agrave; c&ocirc;ng nghệ ti&ecirc;n tiến, New Balance tiếp tục khẳng định vị thế của m&igrave;nh trong ng&agrave;nh c&ocirc;ng nghiệp thể thao v&agrave; thời trang to&agrave;n cầu.</p>', 'Để bắt kịp cùng với sự sôi động trước thềm World Cup Nữ 2023, New Balance đã chính thức ra mắt bộ sưu tập \'Own Now\', mang đến một làn gió mới nhờ thiết kế đặc biệt ấn tượng và thu hút.', '20 comment', '2023-08-11 23:22:19', '2023-08-11 23:22:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `depscription` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `img`, `status`, `depscription`, `created_at`, `updated_at`) VALUES
(1, 'Nike', 'nike', 'storage/brand/Nike4421691387019.jpg', 0, 'ggg', '2023-08-06 07:18:53', '2023-08-06 22:43:39'),
(2, 'Adidas', 'adidas', 'storage/brand/Adidas5011691331621.webp', 0, 'sss', '2023-08-06 07:20:21', '2023-08-06 07:20:21'),
(3, 'Puma', 'puma', 'storage/brand/Puma3581691331646.jpg', 0, '<p>xxxx</p>', '2023-08-06 07:20:46', '2023-08-06 07:20:46'),
(4, 'Joma', 'joma', 'storage/brand/Joma931691331674.jpg', 0, 'ssss', '2023-08-06 07:21:14', '2023-08-06 07:21:14'),
(5, 'Mizuno', 'mizuno', 'storage/brand/Mizuno7421691331705.jpg', 0, 'ssss', '2023-08-06 07:21:45', '2023-08-06 07:21:45'),
(6, 'Kamito', 'kamito', 'storage/brand/Kamito5641692023728.webp', 0, '<p>ssss</p>', '2023-08-06 07:22:18', '2023-08-14 07:35:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `depscription` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `img`, `status`, `depscription`, `created_at`, `updated_at`) VALUES
(23, 'Giày đá sân 11', 'giay-da-san-11', 'storage/category/Giày đá sân 117901691300494.webp', 1, 'Giày đá banh', '2023-08-05 22:41:34', '2023-08-05 22:41:34'),
(24, 'Giày đá sân futsan', 'giay-da-san-futsan', 'storage/category/Giày đá sân futsan8571691300545.jpg', 1, 'Giày đá banh', '2023-08-05 22:42:25', '2023-08-05 22:42:25'),
(27, 'Giày đá sân nhân tạo', 'giay-da-san-nhan-tao', 'storage/category/Giày đá sân nhân tạo1021692623092.jpg', 1, '<p>Gi&agrave;y đ&aacute; banh</p>', '2023-08-21 06:04:32', '2023-08-21 06:04:52');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `name`, `content`, `product_id`, `created_at`, `updated_at`) VALUES
(2, 'duc anh', 'Sản phẩm còn size bao nhiêu', '3', '2023-08-28 22:58:11', '2023-08-28 22:58:11'),
(4, 'anhducpro12', 'đôi này có những màu nào?', '3', '2023-08-29 06:41:45', '2023-08-29 06:41:45'),
(5, 'anhducpro', 'hàng quá đẹp', '19', '2023-08-30 14:09:41', '2023-08-30 14:09:41'),
(6, 'aaa', 'aaa', '1', '2023-09-01 03:39:23', '2023-09-01 03:39:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `items`
--

INSERT INTO `items` (`id`, `name`, `slug`, `img`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Vớ bóng đá', 'vo-bong-da', 'storage/item/Vớ bóng đá9421692027413.webp', 0, '2023-08-14 08:36:53', '2023-08-14 08:36:53'),
(2, 'Áo bóng đá', 'ao-bong-da', 'storage/item/Áo bóng đá9281692027435.jpg', 0, '2023-08-14 08:37:15', '2023-08-14 08:37:15'),
(3, 'Găng tay thủ môn', 'gang-tay-thu-mon', 'storage/item/Găng tay thủ môn5051692027461.jpg', 0, '2023-08-14 08:37:41', '2023-08-14 08:37:41'),
(4, 'Bảo vệ ống đồng', 'bao-ve-ong-dong', 'storage/item/Bảo vệ ống đồng3041692027490.jpg', 0, '2023-08-14 08:38:10', '2023-08-14 08:38:10'),
(5, 'Balo đá bóng', 'balo-da-bong', 'storage/item/Balo đá bóng4561692027517.jpg', 0, '2023-08-14 08:38:37', '2023-08-14 08:38:37'),
(6, 'Quả bóng', 'qua-bong', 'storage/item/Quả bóng691692027547.webp', 0, '2023-08-14 08:39:07', '2023-08-14 08:39:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_26_085451_create_categories_table', 1),
(6, '2023_07_26_092649_craete_categories_table', 2),
(7, '2023_07_26_114740_create_categories_table', 3),
(8, '2023_07_26_123325_create_products_table', 4),
(9, '2023_07_26_130751_create_products_table', 5),
(10, '2023_07_27_025021_create_products_table', 6),
(11, '2023_07_27_030019_create_products_table', 7),
(12, '2023_07_27_031707_create_products_table', 8),
(13, '2023_07_28_081530_create_products_table', 9),
(14, '2023_08_04_124424_create_admins_table', 10),
(15, '2023_08_05_035129_create_products_table', 11),
(16, '2023_08_05_051722_create_brands_table', 12),
(17, '2023_08_05_090317_create_products_table', 13),
(18, '2023_08_06_140931_create_brands_table', 14),
(19, '2023_08_06_141745_create_brands_table', 15),
(20, '2023_08_06_142436_create_accessories_table', 16),
(21, '2023_08_07_092050_create_products_table', 17),
(22, '2023_08_07_092301_create_products_table', 18),
(23, '2023_08_07_093247_create_products_table', 19),
(24, '2023_08_07_095824_create_products_table', 20),
(25, '2023_08_09_114558_alter_image_to_products_table', 21),
(26, '2023_08_09_124930_create_product_image_table', 22),
(27, '2023_08_10_024109_create_images_table', 23),
(28, '2023_08_10_025652_alter_slug_to_images_table', 24),
(29, '2023_08_10_031843_create_images_table', 25),
(30, '2023_08_10_064157_create_images_table', 26),
(31, '2023_08_10_085127_create_comments_table', 27),
(32, '2023_08_10_093134_create_comments_table', 28),
(33, '2023_08_12_033330_create_blogs_table', 29),
(34, '2023_08_14_130613_create_accessories_table', 30),
(35, '2023_08_14_130903_create_accessories_table', 31),
(36, '2023_08_14_151612_create_items_table', 32),
(37, '2023_08_14_153959_alter_item_id_to_items_table', 33),
(38, '2023_08_14_155141_drop_item_id_from_items_table', 34),
(39, '2023_08_14_155313_drop_item_id_from_items_table', 35),
(40, '2023_08_14_155452_alter_item_id_to_accessories_table', 36),
(41, '2023_08_15_133052_create_orders_table', 37),
(42, '2023_08_15_141125_drop_password_to_orders_table', 38),
(43, '2023_08_16_032049_create_orders_table', 39),
(44, '2023_08_20_052411_create_banners_table', 40),
(45, '2023_08_21_134842_alter_phone_to_users_table', 41),
(46, '2023_08_29_030629_create_comments_table', 42),
(47, '2023_08_31_162857_create_orders_table', 43),
(48, '2023_08_31_201607_create_orders_table', 44),
(49, '2023_08_31_210030_drop_phone_to_users_table', 45),
(50, '2023_08_31_211426_alter_user_id_to_orders_table', 46),
(51, '2023_08_31_212354_drop_user_id_to_orders_table', 47),
(52, '2023_08_31_213036_alter_paymen_to_orders_table', 48),
(53, '2023_09_01_103514_drop_email_to_comments_table', 49),
(54, '2023_09_02_162009_alter_product_id_to_orders_table', 50),
(55, '2023_09_02_163413_drop_product_id_to_orders_table', 51);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `payment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `email`, `address`, `created_at`, `updated_at`, `payment`) VALUES
(1, 'anhducpro', '1234567809', 'd@gmail.com', 'Thường Tín-Hà Nội', '2023-08-31 13:18:18', '2023-08-31 13:18:18', ''),
(2, 'duc anh12', '1234567809', '12d@gmail.com', 'Thường Tín-Hà Nội', '2023-08-31 13:20:12', '2023-08-31 13:20:12', ''),
(3, 'Lương Quang Hùng', '1234567809', '1d@gmail.com', 'Thường Tín-Hà Nội', '2023-08-31 13:50:17', '2023-08-31 13:50:17', ''),
(6, 'hoang anh', '12345678777', '111@gmail.com', 'Thường Tín-Hà Nội', '2023-08-31 14:26:49', '2023-08-31 14:26:49', ''),
(7, 'nam hoàng', '1234567809', '16d@gmail.com', 'Thường Tín-Hà Nội', '2023-08-31 14:40:42', '2023-08-31 14:40:42', '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `brand_id` bigint(20) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `size` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `depscription` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `sale` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `brand_id`, `slug`, `price`, `size`, `img`, `status`, `depscription`, `content`, `comment`, `sale`, `created_at`, `updated_at`, `image`) VALUES
(1, 'ADIDAS X CRAZYFAST.1 TF - IE6632 -TRẮNG/VÀNG CHANH', 27, 2, 'adidas-x-crazyfast1-tf-ie6632-trangvang-chanh', '1890000', 'HOT', 'storage/product/ADIDAS X CRAZYFAST.1 TF - IE6632 -TRẮNG/VÀNG CHANH5631692191341.webp', 0, '<p>Tất cả c&aacute;c Fan của Messi chắc chắn đều biết đến X Speedportal - D&ograve;ng sản phẩm được đại diện bởi si&ecirc;u sao người Argentina. Adidas vừa ch&iacute;nh thức ra mắt si&ecirc;u phẩm mới nhất:X Crazyfast. Đ&acirc;y kh&ocirc;ng chỉ l&agrave; một sự ph&aacute;t triển mới mẻ trong d&ograve;ng gi&agrave;y X, m&agrave; c&ograve;n l&agrave; một minh chứng cho sự đột ph&aacute; về c&ocirc;ng nghệ, nhằm mang đến cho người chơi khả năng ph&aacute;t huy hết tốc độ tối đa trong mọi t&igrave;nh huống tr&ecirc;n s&acirc;n. X Crazyfast khởi đầu cho &#39;Crazyrush Pack&#39; - bộ sưu tập gi&agrave;y thể thao ho&agrave;n to&agrave;n mới của Adidas, bao gồm ba mẫu gi&agrave;y với những t&iacute;nh năng v&agrave; c&ocirc;ng nghệ &#39;AERO&#39; độc đ&aacute;o.</p>', 'Mua trả sau từ 855.000đ', 'Nhà cung cấp: ADIDAS SKU: GZ5108-39', '2,000,000', '2023-08-07 02:59:21', '2023-08-16 06:09:01', '15% off'),
(2, 'ADIDAS PREDATOR ACCURACY .3 TF CRAZYRUSH - FOOTWEAR WHITE/CORE BLACK/LUCID LEMON', 25, 2, 'adidas-predator-accuracy-3-tf-crazyrush-footwear-whitecore-blacklucid-lemon', '1190000', 'NEW', 'storage/product/ADIDAS PREDATOR ACCURACY .3 TF CRAZYRUSH - FOOTWEAR WHITE/CORE BLACK/LUCID LEMON371692191317.webp', 0, '<p>Adidas Predator Accuracy .3 Low TF Crazyrush - Footwear White/Core Black/Lucid Lemon l&agrave; mẫu gi&agrave;y phổ th&ocirc;ng d&agrave;nh cho mặt s&acirc;n cỏ nh&acirc;n tạo 5-7 người. Predator đ&atilde; duy tr&igrave; sự thay đổi trong suốt những năm qua, v&agrave; 2023 l&agrave; một ngoại h&igrave;nh ho&agrave;n to&agrave;n mới, thiết kế c&oacute; d&acirc;y, v&agrave; đặc biệt Predator Accuracy mang đậm chất ho&agrave;i cổ khi c&oacute; logo 3 sọc uốn cong (giống như phi&ecirc;n bản predator 1998)</p>', 'Mua trả sau từ 995.000đ', 'Nhà cung cấp: ADIDAS SKU: GZ5108-39', '2,100,000', '2023-08-07 07:47:13', '2023-08-16 06:08:37', '15% off'),
(3, 'ADIDAS X SPEEDPORTAL .1 FG OWN YOUR FOOTBALL - SHOCK PINK/FOOTWEAR WHITE/RED', 23, 2, 'adidas-x-speedportal-1-fg-own-your-football-shock-pinkfootwear-whitered', '2890000', 'HOT', 'storage/product/ADIDAS X SPEEDPORTAL .1 FG OWN YOUR FOOTBALL - SHOCK PINK/FOOTWEAR WHITE/RED2411692191280.webp', 0, '<p>Tất cả c&aacute;c Fan của Messi chắc chắn đều biết đến X Speedportal - D&ograve;ng sản phẩm được đại diện bởi si&ecirc;u sao người Argentina. Sau th&agrave;nh c&ocirc;ng của kỳ world cup 2022, Adidas v&agrave; Messi tiếp tục giới thiệu gam m&agrave;u tiếp theo c&oacute; t&ecirc;n &quot;OWN YOUR FOOTBALL&quot; với ngoại h&igrave;nh c&oacute; thể n&oacute;i l&agrave; &quot;khiến tất cả phải ngước nh&igrave;n&quot; khi mang ra s&acirc;n. Đen - Hồng l&agrave; gam m&agrave;u chủ đạo, c&aacute;c điểm nhấn m&agrave;u trắng tạo n&ecirc;n phối m&agrave;u rất h&agrave;i ho&agrave; v&agrave; nổi bật.</p>', 'Mua trả sau từ 1.105.000đ', 'Nhà cung cấp: ADIDAS  SKU: GZ5108-39', '3,00,000', '2023-08-07 07:57:08', '2023-08-16 06:08:00', '15% off'),
(4, 'ADIDAS COPA PURE .3 TF OWN YOUR FOOTBALL - CORE BLACK/ZERO METALLIC/SHOCK PINK', 27, 2, 'adidas-copa-pure-3-tf-own-your-football-core-blackzero-metallicshock-pink', '1290000', 'NEW', 'storage/product/ADIDAS COPA PURE .3 TF OWN YOUR FOOTBALL - CORE BLACK/ZERO METALLIC/SHOCK PINK4311692191259.webp', 0, '<p><strong>C&ugrave;ng với Predator, Copa l&agrave; d&ograve;ng gi&agrave;y li&ecirc;n tục thay đổi qua từng năm. V&agrave; 2023 n&agrave;y, Adidas tr&igrave;nh l&agrave;ng 1 c&aacute;i t&ecirc;n ho&agrave;n to&agrave;n mới: Copa Pure.&nbsp;</strong>Một số đại diện nổi bật của Copa c&oacute; thể kể đến như Dybala,&nbsp;İlkay G&uuml;ndoğan, Pedri...</p>', 'Mua trả sau từ 1.405.000đ', 'Nhà cung cấp: ADIDAS  SKU: GY9054-39', '2,450,000', '2023-08-07 07:59:19', '2023-08-16 06:07:39', '10% off'),
(5, 'ADIDAS PREDATOR FREAK .3 TF METEORITE - RED/CORE BLACK/SOLAR RED KIDS', 27, 2, 'adidas-predator-freak-3-tf-meteorite-redcore-blacksolar-red-kids', '1125000', 'HOT', 'storage/product/ADIDAS PREDATOR FREAK .3 TF METEORITE - RED/CORE BLACK/SOLAR RED KIDS2701691420495.webp', 0, '<h4><strong>Adidas Predator Freak .3 TF Meteorite - Red/Core Black/Solar Red Kids</strong>&nbsp;là phiên bản giày&nbsp;dành cho các bạn nhỏ sử dụng sân cỏ nhân tạo 5-7 người. Nằm trong BST Meteorite Pack&nbsp;được ra mắt vào giữa tháng 7, Predator Freak có gam màu đỏ nổi bật, hoành tráng cùng với logo 3 sọc màu đen kết hợp những lớp vân Demonscale màu&nbsp;đỏ và bộ đế Control&nbsp;đỏ đen. Đem lại sự hoài hòa cũng như đánh bật những chi tiết sắc nét&nbsp;ở phiên bản Predator Freak&nbsp;với&nbsp;gam màu&nbsp;mới này.</h4>', 'Mua trả sau từ 955.000đ', 'Nhà cung cấp: ADIDAS  SKU: FY6314-28', '1,450,000', '2023-08-07 08:01:35', '2023-08-07 08:01:35', NULL),
(6, 'Adidas Top Sala IC - GV7592 - Màu trắng', 24, 2, 'adidas-top-sala-ic-gv7592-mau-trang', '1790000', 'HOT', 'storage/product/Adidas Top Sala IC - GV7592 - Màu trắng711692191217.webp', 0, '<p>Theo d&ograve;ng chảy của thời đại, ai rồi cũng sẽ thay đổi. Sau một thời gian hồi sinh v&agrave;o năm 2019 th&igrave; Adidas Top Sala cuối c&ugrave;ng đ&atilde; thay đổi, từ bỏ thiết kế cũ để chuyển sang 1 giao diện ho&agrave;n to&agrave;n mới, với t&ecirc;n gọi&nbsp;<strong>Top Sala Competition.&nbsp;</strong></p>', 'Mua trả sau từ 1.455.000đ', 'Thương hiệu: Adidas | Mã SP: GV7592 | Loại: Giày sân Futsal - Indoor', '2,150,000', '2023-08-07 08:08:25', '2023-08-16 06:06:57', '15% off'),
(7, 'ADIDAS TOP SALA COMPETITION IC - CLOUD WHITE/BOLD AQUA/ROYAL BLUE', 24, 2, 'adidas-top-sala-competition-ic-cloud-whitebold-aquaroyal-blue', '1590000', 'HOT', 'storage/product/ADIDAS TOP SALA COMPETITION IC - CLOUD WHITE/BOLD AQUA/ROYAL BLUE1611692191185.webp', 0, '<p>Theo d&ograve;ng chảy của thời đại, ai rồi cũng sẽ thay đổi. Sau một thời gian hồi sinh v&agrave;o năm 2019 th&igrave; Adidas Top Sala cuối c&ugrave;ng đ&atilde; thay đổi, từ bỏ thiết kế cũ để chuyển sang 1 giao diện ho&agrave;n to&agrave;n mới, với t&ecirc;n gọi&nbsp;<strong>Top Sala Competition.&nbsp;</strong></p>', 'Mua trả sau từ 950.000đ', 'Nhà cung cấp: ADIDAS  SKU: GY9054-39', '1,960,000', '2023-08-07 08:09:58', '2023-08-16 06:06:25', '15% off'),
(8, 'Adidas X Speedportal .3 TF - Own Your Football pack', 27, 2, 'adidas-x-speedportal-3-tf-own-your-football-pack', '1290000', 'HOT', 'storage/product/Adidas X Speedportal .3 TF - Own Your Football pack8431692191139.webp', 0, '<p>Khi tốc độ của c&aacute;c trận đấu ng&agrave;y c&agrave;ng được đẩy cao th&igrave; c&aacute;c cầu thủ cũng c&oacute; y&ecirc;u cầu khắt khe hơn với những đ&ocirc;i gi&agrave;y của họ. Kh&ocirc;ng chỉ về mặt thẩm mỹ, n&oacute; c&ograve;n đ&ograve;i hỏi rất lớn về trọng lượng cũng như độ ổn định khi mang. Để đ&aacute;p ứng được y&ecirc;u cầu n&agrave;y, Adidas đ&atilde; cho ra mắt d&ograve;ng Adidas X mới c&oacute; t&ecirc;n Speedportal.&nbsp;</p>\r\n\r\n<p>Bộ sưu tập <a href=\"https://neymarsport.com/collections/giay-da-banh-adidas\">gi&agrave;y đ&aacute; banh Adidas</a> 2023 Heatspawn kh&ocirc;ng chỉ l&agrave; sự kết hợp ho&agrave;n hảo giữa phong c&aacute;ch v&agrave; c&ocirc;ng nghệ, m&agrave; c&ograve;n đại diện cho sức n&oacute;ng, nhiệt huyết v&agrave; kh&aacute;t khao chiến thắng kh&ocirc;ng ngừng của c&aacute;c cầu thủ tr&ecirc;n s&acirc;n cỏ. Ba d&ograve;ng gi&agrave;y đ&aacute; banh đầy danh tiếng của Adidas - Copa Pure, Predator Accuracy v&agrave; X Speedportal - sẽ được &quot;n&acirc;ng tầm&quot; với những thiết kế độc đ&aacute;o mang tr&ecirc;n m&igrave;nh gam m&agrave;u &quot;Team Solar Orange&quot; đầy cuốn h&uacute;t.</p>', 'Mua trả sau từ 555.000đ', 'Nhà cung cấp: ADIDAS  SKU: GY9054-39', '1,850,000', '2023-08-07 08:14:05', '2023-08-16 06:05:39', '15% off'),
(9, 'Adidas X Speedflow .2 FG Whitespark pack', 23, 2, 'adidas-x-speedflow-2-fg-whitespark-pack', '3890000', 'NEW', 'storage/product/Adidas X Speedflow .2 FG Whitespark pack2531692191116.webp', 0, '<p><strong>adidas X SpeedFlow .2 Whitespark pack</strong></p>\r\n\r\n<p>Ở thời điểm hiện tại, ch&uacute;ng ta đ&atilde; qu&aacute; quen với việc nh&igrave;n c&aacute;c cầu thủ ra s&acirc;n với những đ&ocirc;i gi&agrave;y c&oacute; m&agrave;u sắc rực rỡ, hay thậm ch&iacute; l&agrave; c&oacute; những hoạ tiết kh&aacute; &ldquo;đồng b&oacute;ng&rdquo;. Những đ&ocirc;i gi&agrave;y c&oacute; m&agrave;u sắc &ldquo;cổ điển&rdquo; như đen hay thậm ch&iacute; l&agrave; trắng vẫn được ra mắt nhưng thường &iacute;t được sử dụng tr&ecirc;n s&acirc;n v&igrave; ch&uacute;ng k&eacute;m nổi bật v&agrave; kh&ocirc;ng thể hiện được c&aacute; t&iacute;nh của những cầu hiện đại.&nbsp;</p>', 'Mua trả sau từ 1.205.000đ', 'Thương hiệu: Adidas | Mã SP: FY3287 | Loại: Giày sân cỏ tự nhiên - Firm Ground', '5,450,000', '2023-08-07 08:16:49', '2023-08-16 06:05:16', '20% off'),
(10, 'JOMA TOP FLEX 2311 IN - NEON GREEN/RED', 24, 4, 'joma-top-flex-2311-in-neon-greenred', '1890000', 'NEW', 'storage/product/JOMA TOP FLEX 2311 IN - NEON GREEN/RED9171692191022.webp', 0, '<p>Được l&agrave;m bằng da&nbsp;<strong>Nubuck</strong>&nbsp;cao cấp, với nylon chất lượng cao b&ecirc;n trong cung cấp sức mạnh.&nbsp;<strong>Joma Top Flex 2311 IN&nbsp;</strong>kết hợp c&ocirc;ng nghệ BẢO VỆ ở mũi gi&agrave;y để tăng cường sức đề kh&aacute;ng v&agrave; sự ổn định của n&oacute; đối với những trường hợp hao m&ograve;n.</p>', 'Mua trả sau từ 855.000đ', 'Nhà cung cấp: JOMA  SKU: TORS2311IN-40', '2,450,000', '2023-08-07 08:19:47', '2023-08-16 06:03:42', '15% off'),
(11, 'Joma Mundial 2202', 24, 4, 'joma-mundial-2202', '4890000', 'HOT', 'storage/product/Joma Mundial 22029761692190996.webp', 0, '<ul>\r\n	<li>Được l&agrave;m bằng da&nbsp;<strong>Nubuck</strong>&nbsp;cao cấp, với nylon chất lượng cao b&ecirc;n trong cung cấp sức mạnh.&nbsp;<strong>JOMA TOP FLEX REBOUND&nbsp;</strong>kết hợp c&ocirc;ng nghệ BẢO VỆ ở mũi gi&agrave;y để tăng cường sức đề kh&aacute;ng v&agrave; sự ổn định của n&oacute; đối với những trường hợp hao m&ograve;n.</li>\r\n</ul>', 'Mua trả sau từ 1.155.000đ', 'Thương hiệu: Joma | Mã SP: MUNS2202 | Loại: Giày sân Futsal - Indoor', '5,450,000', '2023-08-07 08:32:05', '2023-08-16 06:03:16', '10% off'),
(12, 'GIÀY ĐÁ BÓNG KAMITO TA11 PRO TF TOUCH OF MAGIC - WHITE/GOLD', 27, 6, 'giay-da-bong-kamito-ta11-pro-tf-touch-of-magic-whitegold', '1890000', 'HOT', 'storage/product/GIÀY ĐÁ BÓNG KAMITO TA11 PRO TF TOUCH OF MAGIC - WHITE/GOLD6951692190959.webp', 0, '<p><strong>Kamito TA11 PRO TF Touch of Magic - White/Gold</strong> l&agrave; một trong những mẫu <a href=\"https://www.neymarsport.com/collections/giay-da-bong\">gi&agrave;y đ&aacute; b&oacute;ng</a> v&ocirc; c&ugrave;ng nổi tiếng trong giới b&oacute;ng đ&aacute; phong tr&agrave;o, được thiết kế với sự g&oacute;p &yacute; của cầu thủ Tuấn Anh - Ho&agrave;ng Anh Gia Lai Việt Nam. Kamito TA11 ra đời để vinh danh cũng như ghi nhận những đ&oacute;ng g&oacute;p đ&aacute;ng gi&aacute; của cầu thủ Nguyễn Tuấn Anh. Giống như những mẫu gi&agrave;y &quot;Signature&quot; kh&aacute;c, Kamito TA11 sở hữu những đặc trưng kh&aacute;c biệt v&agrave; th&uacute; vị li&ecirc;n quan đến đội trưởng của CLB Ho&agrave;ng Anh Gia Lai.</p>', 'Mua trả sau từ 665.000đ', 'Nhà cung cấp: KAMITO  SKU: KMA230150-38', '2,450,000', '2023-08-07 08:35:33', '2023-08-16 06:02:39', '10% off'),
(13, 'GIÀY ĐÁ BÓNG SÂN CỎ TỰ NHIÊN TA11 2023', 23, 6, 'giay-da-bong-san-co-tu-nhien-ta11-2023', '890000', 'NEW', 'storage/product/GIÀY ĐÁ BÓNG SÂN CỎ TỰ NHIÊN TA11 20235551692190840.webp', 0, '<p>Ngay từ khi ra mắt lần đầu ti&ecirc;n,Kamito TA11 đ&atilde; rất nhanh ch&oacute;ng trở th&agrave;nh một mẫu gi&agrave;y &quot;quốc d&acirc;n&quot; được rất nhiều anh em chơi b&oacute;ng đ&aacute; tin d&ugrave;ng v&agrave; ủng hộ. Đ&acirc;y l&agrave; động lực rất lớn để Kamito tiếp tục ph&aacute;t triển d&ograve;ng gi&agrave;y n&agrave;y.Năm 2023, Kamito tiếp tục cho ra mắt Kamito TA11 New Color phối m&agrave;u mới nổi bật v&agrave; c&aacute; t&iacute;nh, TA11 sẽ ph&ugrave; hợp với tất cả người d&ugrave;ng ở mọi lứa tuổi.</p>', 'Mua trả sau từ 115.000đ', 'Nhà cung cấp: KAMITO  SKU: GZ5108-39', '1,350,000', '2023-08-07 08:38:52', '2023-08-16 06:00:40', '25% off'),
(14, 'GIÀY ĐÁ BÓNG SÂN CỎ TỰ NHIÊN TA11 FG', 23, 6, 'giay-da-bong-san-co-tu-nhien-ta11-fg', '880000', 'HOT', 'storage/product/GIÀY ĐÁ BÓNG SÂN CỎ TỰ NHIÊN TA11 FG2241692190807.webp', 0, '<p>Để vinh danh cũng như ghi nhận những đ&oacute;ng g&oacute;p của cầu thủ Nguyễn Tuấn Anh, Kamito đ&atilde; cho ra mắt &ldquo;TA11&rdquo; &ndash; mẫu gi&agrave;y b&oacute;ng đ&aacute; được đặt theo t&ecirc;n v&agrave; số &aacute;o của Tuấn Anh với rất nhiều điểm đặc biệt v&agrave; th&uacute; vị.<br />\r\nNgay từ khi ra mắt lần đầu ti&ecirc;n,<strong> Kamito TA11</strong> đ&atilde; rất nhanh ch&oacute;ng trở th&agrave;nh một mẫu gi&agrave;y &quot;quốc d&acirc;n&quot; được rất nhiều anh em chơi b&oacute;ng đ&aacute; tin d&ugrave;ng v&agrave; ủng hộ. Đ&acirc;y l&agrave; động lực rất lớn để Kamito tiếp tục ph&aacute;t triển d&ograve;ng gi&agrave;y n&agrave;y.</p>\r\n\r\n<p><strong>Năm 2023</strong>, Kamito tiếp tục cho ra mắt <strong>Kamito TA11 FG</strong> với&nbsp;phối m&agrave;u mới nổi bật v&agrave; c&aacute; t&iacute;nh, TA11 sẽ ph&ugrave; hợp với tất cả người d&ugrave;ng ở mọi lứa tuổi.</p>', 'Mua trả sau từ 155.000đ', 'Nhà cung cấp: KAMITO  SKU: GZ5108', '1,150,000', '2023-08-07 08:40:24', '2023-08-16 06:00:07', '20% off'),
(15, 'MIZUNO MONARCIDA NEO II SELECT AS TF AZURE BLUE - BLUE/SILVER', 27, 5, 'mizuno-monarcida-neo-ii-select-as-tf-azure-blue-bluesilver', '1290000', 'HOT', 'storage/product/MIZUNO MONARCIDA NEO II SELECT AS TF AZURE BLUE - BLUE/SILVER581692190777.webp', 0, '<p>Mizuno được biết đến l&agrave; 1 trong những thương hiệu l&acirc;u đời nhất tại Nhật Bản.&nbsp;Mizuno Monarcida Neo II Select AS TF l&agrave; d&ograve;ng sản phẩm c&oacute; Form truyền thống vớiupper được l&agrave;m bằng chất liệu da tổng hợp mềm v&agrave; &ocirc;m ch&acirc;n đem lại cảm gi&aacute;c v&ocirc; c&ugrave;ng thoải m&aacute;i khi chơi b&oacute;ng.Đ&Acirc;Y ĐƯỢC XEM L&Agrave; Đ&Ocirc;I GI&Agrave;Y QUỐC D&Acirc;N CỦA MIZUNO TẠI THỊ TRƯỜNG VIỆT NAM khi đ&aacute;p ứng đủ ba ti&ecirc;u ch&iacute;: NGON - BỔ - RẺ.</p>', 'Mua trả sau từ 405.000đ', 'Nhà cung cấp: MIZUNO  SKU: P1GD232525-38.5', '1,850,000', '2023-08-07 08:42:44', '2023-08-16 05:59:37', '25% off'),
(16, 'MIZUNO MORELIA NEO III PRO TF PASSION RED - HIGH RISK RED/WHITE', 27, 5, 'mizuno-morelia-neo-iii-pro-tf-passion-red-high-risk-redwhite', '1490000', 'HOT', 'storage/product/MIZUNO MORELIA NEO III PRO TF PASSION RED - HIGH RISK RED/WHITE3061692190740.webp', 0, '<p>Mizuno Morelia Neo III Pro TF Passion Red - High Risk Red/White l&agrave; mẫu gi&agrave;y chuy&ecirc;n cho s&acirc;n cỏ nh&acirc;n tạo 5-7 người. Mẫu gi&agrave;y n&agrave;y được c&aacute;c cầu thủ đ&aacute;nh gi&aacute; rất cao v&igrave; sự to&agrave;n diện, bền bỉ v&agrave; hỗ trợ c&aacute;c cầu thủ rất tốt. Với những sự n&acirc;ng cấp đ&aacute;ng ch&uacute; &yacute;, Morelia Neo III Pro AS hứa hẹn sẽ l&agrave; mẫu gi&agrave;y hot kh&ocirc;ng k&eacute;m hai phi&ecirc;n bản tiền nhiệm. Những cầu thủ c&oacute; lối chơi thi&ecirc;n về tốc độ v&agrave; mong muốn một đ&ocirc;i gi&agrave;y nhẹ, &ecirc;m &aacute;i, cảm gi&aacute;c b&oacute;ng tốt kh&ocirc;ng thể bỏ qua Morelia Neo III Pro AS.</p>', 'Mua trả sau từ 875.000đ', 'Nhà cung cấp: MIZUNO  SKU: P1GD228460-42.5', '2,150,000', '2023-08-07 22:27:29', '2023-08-16 05:59:00', '20% off'),
(17, 'MIZUNO MORELIA NEO III PRO TF SHINING - WHITE/COOL GREY', 27, 5, 'mizuno-morelia-neo-iii-pro-tf-shining-whitecool-grey', '1490000', 'HOT', 'storage/product/MIZUNO MORELIA NEO III PRO TF SHINING - WHITE/COOL GREY7811692190704.webp', 0, '<p>Morelia l&agrave; d&ograve;ng sản phẩm l&acirc;u đời nhất của Mizuno (ra mắt năm 1985), nhưng trải qua gần 30 năm h&igrave;nh th&agrave;nh v&agrave; ph&aacute;t triển, Moreila đang kh&ocirc;ng ngừng cải tiến từng ng&agrave;y, từ thiết kế đến c&ocirc;ng nghệ nhằm bắt kịp xu thế hiện đại. Morelia III Beta cũng l&agrave; d&ograve;ng sản phẩm được Sergio Ramos l&agrave;m đại diện trước khi chuyển qua Mizuno Alpha. Giữa thị trường gi&agrave;y b&oacute;ng đ&aacute; ng&agrave;y c&agrave;ng đa dạng với nhiều thương hiệu đ&igrave;nh đ&aacute;m, ch&uacute;ng ta vẫn phải c&ocirc;ng nhận những cải tiến v&agrave; đột ph&aacute; của m&igrave;nh đ&atilde; gi&uacute;p Mizuno c&oacute; chỗ đứng vững chắc trong l&ograve;ng người h&acirc;m mộ.</p>', 'Mua trả sau từ 550.000đ', 'Nhà cung cấp: MIZUNO  SKU: P1GD238404-40.5', '2,200,000', '2023-08-07 22:37:59', '2023-08-16 05:58:24', '15% off'),
(18, 'Mizuno Morelia Neo III Elite FG - Màu Trắng', 23, 5, 'mizuno-morelia-neo-iii-elite-fg-mau-trang', '1890000', 'HOT', 'storage/product/Mizuno Morelia Neo III Elite FG - Màu Trắng721692190656.webp', 0, '<p>Sau những thiết kế mang t&iacute;nh chất cổ điển v&agrave; trường tồn với thời gian th&igrave; từ năm 2023, Mizuno đ&atilde; bắt đầu chuyển m&igrave;nh v&agrave; cho ra mắt c&aacute;c thiết kế hiện đại hơn. V&agrave; d&ograve;ng sản phẩm Mizuno Alpha ch&iacute;nh l&agrave; dấu ấn lớn nhất của thương hiệu đến từ Nhật Bản n&agrave;y. C&ugrave;ng với việc đưa Sergio Ramos trở th&agrave;nh đại diện, hiệu ứng của Mizuno Alpha đ&atilde; lan toả tr&ecirc;n khắp thế giới.</p>', 'Mua trả sau từ 655.000đ', 'Thương hiệu: Mizuno | Mã SP: P1GA238104 | Loại: Giày sân cỏ tự nhiên - Firm Ground', '2,350,000', '2023-08-07 22:40:59', '2023-08-16 05:57:36', '20% off'),
(19, 'NIKE ZOOM MERCURIAL SUPERFLY 9 ACADEMY TF - DJ5629-600 - TRẮNG/ĐỎ/ĐEN', 27, 1, 'nike-zoom-mercurial-superfly-9-academy-tf-dj5629-600-trangdoden', '1830000', 'NEW', 'storage/product/NIKE ZOOM MERCURIAL SUPERFLY 9 ACADEMY TF - DJ5629-600 - TRẮNG/ĐỎ/ĐEN1711692621313.webp', 0, '<p>NIKE ZOOM MERCURIAL SUPERFLY 9 ACADEMY TF - GI&Agrave;Y Đ&Aacute; B&Oacute;NG S&Acirc;N CỎ NH&Acirc;N TẠO Th&aacute;ng 6/2022, Nike ch&iacute;nh thức tr&igrave;nh l&agrave;ng thế hệ tiếp theo của d&ograve;ng gi&agrave;y Mercurial mang t&ecirc;n Air Zoom Mercurial. Cải tiến lớn nhất tr&ecirc;n thế hệ n&agrave;y nằm ở bộ đệm Zoom Air được thiết kế độc quyền cho b&oacute;ng đ&aacute;. B&ecirc;n cạnh đ&oacute;, mọi chi tiết tr&ecirc;n đ&ocirc;i gi&agrave;y lần n&agrave;y đều được thiết kế nhằm tối ưu ho&aacute; lối chơi tốc độ. Nike khởi đầu năm 2023 với bộ sưu tập &ldquo;Blast Pack&rdquo; ho&agrave;n to&agrave;n mới. Ở lần ph&aacute;t h&agrave;nh n&agrave;y, nh&agrave; Swoosh đ&atilde; giới thiệu những phi&ecirc;n bản Phantom GX c&ugrave;ng với Air Zoom Mercurial Superfly 9 v&agrave; Vapor 15 trong phối m&agrave;u trắng xanh v&ocirc; c&ugrave;ng năng động.</p>', 'Mua trả sau từ 655.000đ', 'Loại: Giày Cỏ Nhân Tạo (Turf) Mã SP: DJ5629-600-38-5', '2,450,000', '2023-08-07 22:43:23', '2023-08-21 05:35:14', '20% off'),
(20, 'NIKE PHANTOM GX ACADEMY DF TF - DD9476-600 - ĐỎ ĐEN', 27, 1, 'nike-phantom-gx-academy-df-tf-dd9476-600-do-den', '2890000', 'NEW', 'storage/product/NIKE PHANTOM GX ACADEMY DF TF - DD9476-600 - ĐỎ ĐEN4251692190484.webp', 0, '<h3>NIKE PHANTOM GX ACADEMY DF TF - GI&Agrave;Y Đ&Aacute; B&Oacute;NG S&Acirc;N CỎ NH&Acirc;N TẠO Bộ sưu tập: Ready Pack (08/2023)</h3>', 'Mua trả sau từ 1.100.000đ', 'Loại: Giày Cỏ Nhân Tạo (Turf) Mã SP: DD9476-600-39', '3,150,000', '2023-08-07 22:45:04', '2023-08-16 05:54:44', '30% off'),
(21, 'Nike Streetgato IC Federations - DC8466-611 - Màu đỏ', 24, 1, 'nike-streetgato-ic-federations-dc8466-611-mau-do', '1290000', 'HOT', 'storage/product/Nike Streetgato IC Federations - DC8466-611 - Màu đỏ2381692190361.webp', 0, '<p>Nike FOOTBALL</p>', 'Mua trả sau từ 415.000đ', 'Thương hiệu: Nike | Mã SP: DC8466-611 | Loại: Giày sân Futsal - Indoor', '2,400,000', '2023-08-07 22:47:06', '2023-08-16 05:52:41', '20% off'),
(22, 'Nike Tiempo Legend 9 Academy FG/MG - Lucent Pack', 23, 1, 'nike-tiempo-legend-9-academy-fgmg-lucent-pack', '1450000', 'NEW', 'storage/product/Nike Tiempo Legend 9 Academy FG/MG - Lucent Pack1721692190313.webp', 0, '<p>C&ugrave;ng ngắm bộ 3 mới của Nike trong bộ sưu tập The Lucent Pack Nike tung ra bộ sưu tập đầu ti&ecirc;n của họ trong m&ugrave;a giải mới 22/23 v&agrave;o dịp Premier League khởi tranh. Đ&acirc;y l&agrave; Lucent Pack v&agrave; n&oacute; được ra mắt cho m&ugrave;a h&egrave; với t&iacute;nh thẩm mỹ t&aacute;o bạo được x&acirc;y dựng để nổi bật khi tiếng c&ograve;i đầu ti&ecirc;n của m&ugrave;a giải vang l&ecirc;n v&agrave;o tối thứ S&aacute;u.</p>', 'Mua trả sau từ 500.000đ', 'Thương hiệu: Nike | Mã SP: DA1174 002 | Loại: Giày sân cỏ tự nhiên - Firm Ground', '2,150,000', '2023-08-07 22:49:09', '2023-08-16 05:51:53', '15% off'),
(23, 'Nike Zoom Mercurial Superfly 9 Academy KM TF', 27, 1, 'nike-zoom-mercurial-superfly-9-academy-km-tf', '1890000', 'HOT', 'storage/product/Nike Zoom Mercurial Superfly 9 Academy KM TF3941692190147.webp', 0, '<p>T&ecirc;n sản phẩm: Nike Air Zoom Mercurial Superfly 9 Academy TF M&agrave;u sắc: T&iacute;m Bộ sưu tập: Mbappe Signature M&atilde; sản phẩm: DO9347-694 Loại đế gi&agrave;y: Turf (TF d&agrave;nh cho mặt s&acirc;n cỏ nh&acirc;n tạo) Ph&acirc;n kh&uacute;c: Academy Trọng lượng: 241 gram/chiếc (Size 41) Lưỡi g&agrave;: Dạng cổ thun cao Thời điểm ra mắt: 2023 Phong c&aacute;ch thi đấu: Tiền đạo, chạy c&aacute;nh, tốc độ Những cầu thủ đại diện: Ronaldo, Mbappe, Bruno Fernandes, ... C&ocirc;ng nghệ, chất liệu: - Chất liệu Nikeskin tạo độ nh&aacute;m khi tiếp x&uacute;c b&oacute;ng. - Khung Speedcage ph&iacute;a dưới upper tăng độ &ocirc;m ch&acirc;n khi di chuyển v&agrave; giữ form gi&agrave;y tốt. - Phần cổ thun Dynamic Fit co gi&atilde;n, &ocirc;m ch&acirc;n tốt. - Bộ đệm độc quyền Air Zoom ở g&oacute;t tạo độ &ecirc;m &aacute;i v&agrave; phản lực khi bứt tốc. - Bộ đế gồm nhiều h&igrave;nh dạng đinh kh&aacute;c nhau tăng độ bền v&agrave; b&aacute;m s&acirc;n.</p>', 'Mua trả sau từ 355.000đ', 'Thương hiệu: Nike | Mã SP: DO9347-694 | Loại: Giày sân cỏ nhân tạo - Turf', '2,150,000', '2023-08-07 22:52:45', '2023-08-16 05:49:07', '15% off'),
(24, 'Nike Air Zoom Mercurial Superfly 9 Academy TF CR7 2022 Signature', 27, 1, 'nike-air-zoom-mercurial-superfly-9-academy-tf-cr7-2022-signature', '1290000', 'HOT', 'storage/product/Nike Air Zoom Mercurial Superfly 9 Academy TF CR7 2022 Signature6171692190071.webp', 0, '<p>Nike Air Zoom Mercurial Superfly 9 &#39;CR7 2022 Signature&#39; T&ecirc;n sản phẩm: Nike Air Zoom Mercurial Superfly 9 CR7 Academy TF M&agrave;u sắc: Trắng/Xanh Bộ sưu tập: Azulejo (2022) M&atilde; sản phẩm: DQ5320-182 Loại đế gi&agrave;y: Turf (TF d&agrave;nh cho mặt s&acirc;n cỏ nh&acirc;n tạo) Ph&acirc;n kh&uacute;c: Academy Trọng lượng: 241 gram/chiếc (Size 41) Lưỡi g&agrave;: Dạng cổ thun cao Thời điểm ra mắt: 2022 Phong c&aacute;ch thi đấu: Tiền đạo, chạy c&aacute;nh, tốc độ Những cầu thủ đại diện: Ronaldo, Mbappe, Bruno Fernandes, ... C&ocirc;ng nghệ, chất liệu: - Chất liệu Nikeskin tạo độ nh&aacute;m khi tiếp x&uacute;c b&oacute;ng. - Khung Speedcage ph&iacute;a dưới upper tăng độ &ocirc;m ch&acirc;n khi di chuyển v&agrave; giữ form gi&agrave;y tốt. - Phần cổ thun Dynamic Fit co gi&atilde;n, &ocirc;m ch&acirc;n tốt. - Bộ đệm độc quyền Air Zoom ở g&oacute;t tạo độ &ecirc;m &aacute;i v&agrave; phản lực khi bứt tốc. - Bộ đế gồm nhiều h&igrave;nh dạng đinh kh&aacute;c nhau tăng độ bền v&agrave; b&aacute;m s&acirc;n.</p>', 'Mua trả sau từ 355.000đ', 'Thương hiệu: Nike | Mã SP: DQ5320 182 | Loại: Giày sân cỏ nhân tạo - Turf', '2,150,000', '2023-08-07 22:53:51', '2023-08-16 05:47:51', '10% off'),
(25, 'NIKE REACT TIEMPO LEGEND 9 PRO IC - DA1183-146 - TRẮNG XÁM/XANH', 24, 1, 'nike-react-tiempo-legend-9-pro-ic-da1183-146-trang-xamxanh', '1490000', 'SALE', 'storage/product/NIKE REACT TIEMPO LEGEND 9 PRO IC - DA1183-146 - TRẮNG XÁM/XANH5341692189997.webp', 0, '<p>NIKE REACT TIEMPO LEGEND 9 PRO IC - GI&Agrave;Y Đ&Aacute; B&Oacute;NG S&Acirc;N FUTSAL Đầu th&aacute;ng 07/2021, Nike đ&atilde; cho ra mắt thế hệ thứ tiếp theo của d&ograve;ng gi&agrave;y đ&aacute; b&oacute;ng huyền thoại của m&igrave;nh đ&oacute; l&agrave; gi&agrave;y đ&aacute; b&oacute;ng Nike Tiempo Legend 9. Ngo&agrave;i việc kế thừa lại những đặc t&iacute;nh tốt nhất từ c&aacute;c thế hệ đ&agrave;n anh đi trước, đ&ocirc;i Nike Tiempo Legend 9 c&ograve;n được giới thiệu với thiết kế mới cực kỳ ti&ecirc;n tiến. Đ&acirc;y được xem l&agrave; thế hệ gi&agrave;y Nike Tiempo nhẹ nhất từ trước đến nay của nh&agrave; Swoosh.</p>', 'Mua trả sau từ 655.000đ', 'Loại: Giày Futsal (IC) Mã SP: DA1183-146-38-5', '2,150,000', '2023-08-07 22:55:39', '2023-08-16 05:46:37', '25% off'),
(26, 'PUMA ULTRA MATCH TF - 107521-01 - TRẮNG/ĐỎ', 27, 3, 'puma-ultra-match-tf-107521-01-trangdo', '1860000', 'SALE', 'storage/product/PUMA ULTRA MATCH TF - 107521-01 - TRẮNG/ĐỎ1981692189936.webp', 0, '<p>PUMA ULTRA MATCH TF - GI&Agrave;Y Đ&Aacute; B&Oacute;NG S&Acirc;N CỎ NH&Acirc;N TẠO Nhanh hơn - b&ugrave;ng nổ hơn - h&atilde;y n&acirc;ng cấp lối chơi tốc độ của bạn với phi&ecirc;n bản ULTRA MATCH TT 2023 mới. PUMA ULTRA MATCH TT đ&atilde; trở lại với những cải tiến đ&aacute;ng kể so với phi&ecirc;n bản trước, nhằm mang lại trải nghiệm tự tin v&agrave; b&ugrave;ng nổ hơn cho người mang trong suốt qu&aacute; tr&igrave;nh chơi b&oacute;ng.</p>', 'Mua trả sau từ 255.000đ', 'Loại: Giày Cỏ Nhân Tạo (Turf) Mã SP: 107521-01-39', '2,550,000', '2023-08-07 22:57:28', '2023-08-16 05:45:36', '25% off'),
(27, 'PUMA FUTURE MATCH TF - 107374-01 - TRẮNG/ĐỎ', 27, 3, 'puma-future-match-tf-107374-01-trangdo', '1999000', 'SALE', 'storage/product/PUMA FUTURE MATCH TF - 107374-01 - TRẮNG/ĐỎ5681692189867.webp', 0, '<p>PUMA FUTURE MATCH TF - GI&Agrave;Y Đ&Aacute; B&Oacute;NG S&Acirc;N CỎ NH&Acirc;N TẠO Tự do chơi b&oacute;ng - tự do di chuyển - tự do s&aacute;ng tạo - l&agrave;m chủ cuộc chơi c&ugrave;ng mẫu gi&agrave;y đ&aacute; banh PUMA FUTURE MATCH TT ho&agrave;n to&agrave;n mới. Được thiết kế cho những playmaker h&agrave;ng đầu như Neymar Jr, PUMA Future Match TT sẽ gi&uacute;p bạn tự tin tr&igrave;nh diễn khả năng chơi b&oacute;ng tốt nhất của bản th&acirc;n tr&ecirc;n s&acirc;n cỏ!</p>', 'Mua trả sau từ 955.000đ', 'Loại: Giày Cỏ Nhân Tạo (Turf) Mã SP: 107374-01-39', '3,450,000', '2023-08-07 22:58:53', '2023-08-16 05:44:27', '25% off'),
(28, 'Puma Ultra Ultimate Cage - Fearless Pack', 27, 3, 'puma-ultra-ultimate-cage-fearless-pack', '1790000', 'SALE', 'storage/product/Puma Ultra Ultimate Cage - Fearless Pack5871692871518.webp', 0, '<p>Puma Ultra Ultimate Cage</p>', 'Mua trả sau từ 655.000đ', 'Thương hiệu: Puma | Mã SP: 106893 03 | Loại: Giày sân cỏ nhân tạo - Turf', '2,300,000', '2023-08-07 23:00:35', '2023-08-24 03:05:18', '25% off'),
(29, 'Puma Future 1.3 FG/AG Instinct - 106751 01 - Màu đen cam', 23, 3, 'puma-future-13-fgag-instinct-106751-01-mau-den-cam', '2890000', 'SALE', 'storage/product/Puma Future 1.3 FG/AG Instinct - 106751 01 - Màu đen cam4741692189651.webp', 0, '<p>Chưa c&oacute; m&ocirc; tả</p>', 'Mua trả sau từ 955.000đ', 'Thương hiệu: Puma | Mã SP: 106751 01 | Loại: Giày sân cỏ tự nhiên - Firm Ground', '4,450,000', '2023-08-07 23:03:18', '2023-08-16 05:40:51', '25% off'),
(30, 'Puma Future Ultimate FG/AG - Supercharge Pack', 23, 3, 'puma-future-ultimate-fgag-supercharge-pack', '4990000', 'SALE', 'storage/product/Puma Future Ultimate FG/AG - Supercharge Pack6041692189569.webp', 0, '<p>Puma Future Ultimate FG/AG</p>', 'Mua trả sau từ 955.000đ', 'Thương hiệu: Puma | Mã SP: 107165 01 | Loại: Giày sân cỏ tự nhiên - Firm Ground', '5,450,000', '2023-08-07 23:09:03', '2023-08-16 05:39:29', '20% off'),
(31, 'Puma Ultra 1.4 MxSG Instinct Pack - 10671801', 23, 3, 'puma-ultra-14-mxsg-instinct-pack-10671801', '1490000', 'SALE', 'storage/product/Puma Ultra 1.4 MxSG Instinct Pack - 106718019031692189586.jpg', 0, '<p>T&ecirc;n sản phẩm: Puma Ultra 1.4 MxSG Instinct Pack M&atilde; sản phẩm: 10671801 Loại đế gi&agrave;y: d&agrave;nh cho s&acirc;n cỏ tự nhi&ecirc;n 11 người Ph&acirc;n kh&uacute;c: 1.4 Form gi&agrave;y: From vừa, ph&ugrave; hợp ch&acirc;n thon hoặc b&egrave; vừa Trọng lượng: Lưỡi g&agrave;: dạng cổ thun liền với chất liệu cao cấp Chất liệu Upper: upper với c&ocirc;ng nghệ SPEEDCAGE nổi tiếng gi&uacute;p hỗ trợ tối đa cho người chơi Năm sản xuất: 2022 Phong c&aacute;ch thi đấu: kỹ thuật, tốc độ, dứt điểm.</p>', 'Mua trả sau từ 655.000đ', 'Thương hiệu: Puma | Mã SP: 10671801 | Loại: Giày sân cỏ tự nhiên - Firm Ground', '2,150,000', '2023-08-07 23:11:11', '2023-08-16 05:39:46', '35% off'),
(32, 'PUMA Ultra Ultimate FG/AG Fastest Pack', 23, 3, 'puma-ultra-ultimate-fgag-fastest-pack', '3890000', 'SALE', 'storage/product/PUMA Ultra Ultimate FG/AG Fastest Pack1021692189476.webp', 0, '<p>PUMA Ultra Ultimate FG/AG Fastest Pack</p>', 'Mua trả sau từ 955.000đ', 'Thương hiệu: Puma | Mã SP: 106868 01 | Loại: Giày sân cỏ tự nhiên - Firm Ground', '5,150,000', '2023-08-07 23:12:52', '2023-08-16 05:37:56', '30% off');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'duc anh 123', '1@gmail.com', NULL, '$2y$10$RJwp9j7dbO5vTRooL1/OSeyoQ1l4EzAHgWfIodSN7M/zQxI8ZxTOO', NULL, '2023-07-27 07:15:28', '2023-07-27 07:15:28'),
(2, 'Máy rửa mặt', '3@gmail.com', NULL, '$2y$10$rkPaZK6eHKPDYeyWiK.BYO2d.9vBP1mPDzGKihaXn5VnUt6pgN3jK', NULL, '2023-07-27 07:34:18', '2023-07-27 07:34:18'),
(3, 'anhducpro11', '2@gmail.com', NULL, '$2y$10$.m7bUO.Kzof49f5IRlBAve.QVVIKJyLXUGmfkCX4uBFSLSfZjB0mS', NULL, '2023-07-27 07:39:44', '2023-07-27 07:39:44'),
(4, 'anhducpross', '4@gmail.com', NULL, '$2y$10$yajFHWWowT1rkcWvnDugWu.2qTts4S22RlyXy6wnC2Ag4pEj/.n/e', NULL, '2023-07-27 20:18:52', '2023-07-27 20:18:52'),
(5, 'anhducpro111', '5@gmail.com', NULL, '$2y$10$o6wFCSQG4yPQOCpfuIx6JOYz3gfxWzA1ygnkEAQDznU0eFBNMBMXO', NULL, '2023-07-28 01:21:21', '2023-07-28 01:21:21'),
(6, 'duc anh', '1d@gmail.com', NULL, '$2y$10$IDWGMcLeZ/FsWqAc9ojv8.A7x6XftL.Aqjg9EqAXjUJ9gFjMt7InK', NULL, '2023-07-28 06:59:04', '2023-07-28 06:59:04'),
(7, 'anhduc', '6@gmail.com', NULL, '$2y$10$1AsoU6GzxiG.lvkjvFNTS.jVffJa/SiqPlydgM8WfkK23AecVk9iS', NULL, '2023-07-29 01:23:39', '2023-07-29 01:23:39'),
(9, 'Lương Quang anh', 'd@gmail.com', NULL, '$2y$10$CV4sAwsXNJ6comDJITadOuJH0vnHRYCHH3EEyTg.N8InI7PoWoRQm', NULL, '2023-07-29 06:32:43', '2023-07-29 06:32:43'),
(10, 'duc anh10', 'dd@gmail.com', NULL, '$2y$10$JIHyKK6Rzx1ykTZCbgcki.dd.0ahu9rPL.MTPPRWMTf9NJ48/RwwO', NULL, '2023-07-29 06:33:24', '2023-07-29 06:33:24'),
(11, 'anhducpro', 'o@gmail.com', NULL, '$2y$10$8QKNWhfsiBX2BeptszVc..JMxtiv3tYhgTWnE71VKVHrpxuQQKQKy', NULL, '2023-08-04 02:08:10', '2023-08-04 02:08:10'),
(12, 'hoangdung', 'ddd@gmail.com', NULL, '$2y$10$G3JzaNLEFPQX8U4Zr55qI.ICycHepl3APjLYnoa.EQxf.rkmPEi/y', NULL, '2023-08-21 06:55:43', '2023-08-21 06:55:43'),
(13, 'anhducpro', '5d@gmail.com', NULL, '$2y$10$picNFDwAqTKwDDWfPUVxu.Mi3qm/7HuBZQRkc3AKQ9Un5KlL05l/m', NULL, '2023-08-24 22:42:44', '2023-08-24 22:42:44'),
(14, 'anhducpro', '4d@gmail.com', NULL, '$2y$10$1w1sdhsZOS8eoSXWHBwdX.nrijbLDIrM/d1aL1/4hHQIi3aYD0dbq', NULL, '2023-08-24 22:45:46', '2023-08-24 22:45:46');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_id` (`brand_id`,`item_id`);

--
-- Chỉ mục cho bảng `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Chỉ mục cho bảng `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_email_unique` (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`,`brand_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `accessories`
--
ALTER TABLE `accessories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

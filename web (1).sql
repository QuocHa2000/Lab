-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th7 09, 2020 lúc 03:35 PM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(200) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  PRIMARY KEY (`Username`,`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`Id`, `Username`, `Password`, `Email`) VALUES
(1, 'thuanpro2025', '8e6249fe3ca12fe53e4de5a0eb92de7a', 'thuanpro2025@gmail.com'),
(1, 'daothuanf3', '8e6249fe3ca12fe53e4de5a0eb92de7a', 'daothuanf3@gmail.com'),
(1, 'daothuanf9', '8e6249fe3ca12fe53e4de5a0eb92de7a', 'daothuanf3@gmail.com'),
(1, 'tuklaaizay', '8e6249fe3ca12fe53e4de5a0eb92de7a', 'thuanpro2025@gmail.com'),
(1, 'daothuanf0', '8e6249fe3ca12fe53e4de5a0eb92de7a', 'thuanpro2025@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Username_ad` varchar(200) NOT NULL,
  `Password_ad` varchar(200) NOT NULL,
  `Email_ad` varchar(200) NOT NULL,
  PRIMARY KEY (`Id`,`Username_ad`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `document`
--

DROP TABLE IF EXISTS `document`;
CREATE TABLE IF NOT EXISTS `document` (
  `MaMH` varchar(30) NOT NULL,
  `TenMH` varchar(200) NOT NULL,
  `Phan1` text NOT NULL,
  `Phan2` text DEFAULT NULL,
  `Phan3` text DEFAULT NULL,
  `Phan4` text DEFAULT NULL,
  `MaLevel` varchar(30) NOT NULL,
  PRIMARY KEY (`MaMH`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `document`
--

INSERT INTO `document` (`MaMH`, `TenMH`, `Phan1`, `Phan2`, `Phan3`, `Phan4`, `MaLevel`) VALUES
('E1', 'ENGLISH', 'There are some things money cannot buy. Love, health… and a comfortable way to avoid traffic in congested cities. Bicycles, motorcycles, and helicopters are great for avoiding traffic, but they all have their shortcomings. A discerning executive who values comfort also wants a way to commute in busy metropolitan areas.', 'The car is for people who appreciate bespoke elegance, yet still see that all the ultra-luxury vehicles on the market today mean hours spent in traffic. The Leia Gabriel LUV offers a solution to that problem.\r\n\r\nThis electric vehicle is able to use the high-occupancy vehicle lanes (also called bus lanes) in many cities. And due to its small size, it can also fit in many unconventional parking spaces.', 'The car is 86 cm wide and 340 cm long (34 in x 134 in), and includes some high-tech handling capabilities, making it safer at high speeds and highly maneuverable. These two factors alone save precious minutes while commuting to work or rushing to important meetings.\r\n\r\nThere are other electric runabouts on the market. However, no other manufacturer equips its cars with this level of comfort and attention to detail. The LUV includes a hand-stitched leather interior, carbon fiber elements and fully ergonomic controls, meaning drivers never need to take their eyes off the road.', 'The LUV carries two people in absolute comfort. Placing the seats in a tandem formation reduces the width of the car, and enables a more aerodynamic shape, reducing drag and increasing efficiency. The LUV will have a top speed of over 160 km/h (100 mph) and a range of 160 km (100 miles) on a single charge. This makes it perfect for weekend getaways outside town, and city commutes.\r\n\r\nWith its adaptable luggage compartment, two people can travel while carrying the essentials. Meanwhile, when the back seat is vacant, the luggage space expands to accommodate more items. The latest-generation Li-ion battery-pack on board meets all the current industry standards, meaning it charges quickly, allowing for an even greater range.\r\n\r\n The back seat includes all standard industry safety fittings. Parents can use child seats when traveling with their children, knowing that they are cocooned in a safe monocoque chassis, which meets all federal and international standards.', 'cb'),
('JS1', 'JAVASCRIPT', 'JavaScript (viết tắt là \'js\') là một ngôn ngữ lập trình mang đầy đủ tính năng của một ngôn ngữ lập trình động mà khi nó được áp dụng vào một tài liệu HTML, nó có thể đem lại khả năng tương tác động trên các trang web. Cha đẻ của ngôn ngữ này là Brendan Eich, đồng sáng lập dự án Mozilla, quỹ Mozilla, và tập đoàn Mozilla.', 'JavaScript thật sự rất linh hoạt. Bạn có thể bắt đầu với các bước nhỏ, với thư viện ảnh, bố cục có tính thay đổi và phản hồi đến các nút nhấn. Khi có nhiều kinh nghiệm hơn, bạn có thể tạo ra các trò chơi, hoạt họa 2D hoặc 3D, ứng dụng cơ sở dữ liệu toàn diện và nhiều thứ khác!\r\n\r\nBản thân Javascript là một ngôn ngữ linh động. Các nhà phát triển đã viết ra một số lượng lớn các công cụ thuộc top của core Javascript, mở ra một lượng lớn tính năng bổ sung với ít nỗ lực nhất. Nó bao gồm:\r\n\r\nGiao diện lập trình ứng dụng trên trình duyệt (API) — Các API được xây dựng bên trong các trình duyệt web, cung cấp tính năng như tạo HTML động, cài đặt CSS, thu tập và điều khiển video trực tiếp từ webcam của người dùng hoặc sinh ra đồ dọa 3D và các mẫu audio.\r\nCác API bên thứ ba cho phép nhà phát triển kết hợp tính năng trong website của họ từ người cung cấp nội dung khác chẳng hạn như Twitter hay Facebook.\r\nTừ các framework và thư viện bên thứ ba bạn có thể áp dụng tới tài liệu HTML của bạn, cho phép bạn nhanh chóng xây dựng được các trang web và các ứng dụng.', ' Phần phía dưới có thể nghe thật thú vị. JavaScript là một trong những công nghệ web sống động nhất và nếu như bạn sử dụng thật tốt, các website của bạn sẽ mang tính sáng tạo và đầy sức mạnh.\r\n\r\nTuy nhiên, nắm bắt Javascript sẽ có một chút khó hơn so  với HTML và CSS. Bạn có thể phải bắt đầu từng bước nhỏ và giữ cho quá trình làm việc luôn nhất quán. Để bắt đầu, chúng tôi sẽ biểu diễn cách làm thế nào để thêm những đoạn JavaScript cơ bản tới trang web, tạo ví dụ \'Hello world\' ', ' Vì bài viết này chỉ giới thiệu về JavaScript, chúng tôi sẽ không làm bạn bối rối khi nói rõ hơn về sự khác nhau giữa mã nguồn JavaScript căn bản và những công cụ được liệt kê ở trên. Bạn có thể tìm hiểu chi tiết trong  Mục học JavaScript, và MDN.\r\n\r\nỞ phần dưới chúng tôi sẽ giới thiệu cho bạn một số khía cạnh cơ bản về JavaScript và bạn cũng sẽ được làm việc với một vài API. Chúc bạn học tốt!', 'cb'),
('E2', 'ENGLISH', 'p1', 'p2', 'p3', 'p4', 'tb1'),
('E3', 'ENGLISH', 'p1', 'p2', 'p3', 'p4', 'tb2'),
('E4', 'ENGLISH', 'p1', 'p2', 'p3', 'p4', 'nc'),
('JS2', 'JAVASCRIPT', 'p1', 'p2', 'p3', 'P4', 'tb1'),
('JS3', 'JAVASCRIPT', 'p1', 'p2', 'p3', 'P4', 'tb2'),
('JS4', 'JAVASCRIPT', 'p1', 'p2', 'p3', 'P4', 'nc'),
('CSS1', 'CSS', 'Phan1css-cb', 'phan2css-cb', 'phan3css-cb', 'phan4css-cb', 'cb'),
('CSS2', 'CSS', 'Phan1css-tb1', 'phan2css-tb1', 'phan3css-tb1', 'phan4css-tb1', 'tb1'),
('CSS3', 'CSS', 'Phan1css-tb2', 'phan2css-tb2', 'phan3css-tb2', 'phan4css-tb2', 'tb2'),
('CSS4', 'CSS', 'Phan1css-nc', 'phan2css-nc', 'phan3css-nc', 'phan4css-nc', 'nc'),
('HTML1', 'HTML', 'phan1html-cb', 'phan2html-cb', 'phan3thml-cb', 'phan4html-cb', 'cb'),
('HTML2', 'HTML', 'phan1html-tb1', 'phan2html-tb1', 'phan3thml-tb1', 'phan4html-tb1', 'tb1'),
('HTML3', 'HTML', 'phan1html-tb2', 'phan2html-tb2', 'phan3thml-tb2', 'phan4html-tb2', 'tb2'),
('HTML4', 'HTML', 'phan1html-nc', 'phan2html-nc', 'phan3thml-nc', 'phan4html-nc', 'nc'),
('NJS1', 'NODEJS', 'phan1node-cb', 'phan2node-cb', 'phan3node-cb', 'phan4node-cb', 'cb'),
('NJS2', 'NODEJS', 'phan1node-tb1', 'phan2node-tb1', 'phan3node-tb1', 'phan4node-tb1', 'tb1'),
('NJS3', 'NODEJS', 'phan1node-tb2', 'phan2node-tb2', 'phan3node-tb2', 'phan4node-tb2', 'tb2'),
('NJS4', 'NODEJS', 'phan1node-nc', 'phan2node-nc', 'phan3node-nc', 'phan4node-nc', 'nc'),
('PHP1', 'PHP', 'phan1php-cb', 'phan2php-cb', 'phan3php-cb', 'phan4php-cb', 'cb'),
('PHP2', 'PHP', 'phan1php-tb1', 'phan2php-tb1', 'phan3php-tb1', 'phan4php-tb1', 'tb1'),
('PHP3', 'PHP', 'phan1php-tb2', 'phan2php-tb2', 'phan3php-tb2', 'phan4php-tb2', 'tb2'),
('PHP4', 'PHP', 'phan1php-nc', 'phan2php-nc', 'phan3php-nc', 'phan4php-nc', 'nc'),
('T1', 'TOAN', 'phan1toan-cb', 'phan2toan-cb', 'phan3toan-cb', 'phan4toan-cb', 'cb'),
('T2', 'TOAN', 'phan1toan-tb1', 'phan2toan-tb1', 'phan3toan-tb1', 'phan4toan-tb1', 'tb1'),
('T3', 'TOAN', 'phan1toan-tb2', 'phan2tona-tb2', 'phan3toan-tb2', 'phan4toan-tb2', 'tb2'),
('T4', 'TOAN', 'phan1toan-nc', 'phan2toan-nc', 'phan3toan-nc', 'phan4toan-nc', 'nc'),
('VL1', 'VAT LY', 'phan1vatly-cb', 'phan2vatly-cb', 'phan3vatly-cb', 'phan4vatly-cb', 'cb'),
('VL2', 'VAT LY', 'phan1vatly-tb1', 'phan2vatly-tb1', 'phan3vatly-tb1', 'phan4vatly-tb1', 'tb1'),
('VL3', 'VAT LY', 'phan1vatly-tb2', 'phan2vatly-tb2', 'phan3vatly-tb2', 'phan4vatly-tb2', 'tb2'),
('VL4', 'VAT LY', 'phan1vatly-nc', 'phan2vatly-nc', 'phan3vatly-nc', 'phan4vatly-nc', 'nc');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
